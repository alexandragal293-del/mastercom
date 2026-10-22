
if (typeof Messenger === 'undefined') {
    Messenger = {};
}

Messenger.ctrl = 0;

/**
 * Initialize Messanger session
 *
 * @param {String} name        User name
 * @param {String} certificate User password
 * @returns {undefined}
 */

function init_messenger(name, certificate, token)
{
    var url = '/messenger/1.0/authentication',
        method = 'POST',
        accesso_token = 'NO';
    if(!name || !certificate) {
        url  = '/messenger/1.0/login/'+token;
        method = 'GET';
        accesso_token = 'SI';

        // Se viene passato il token il resto lo si resetta per sicurezza
        name = '';
        certificate = '';
    }
    // NOTA: Serve per garantire la chiamata con l'apertura di nuovi tab del
    //       Mastercom (poiché non passa l'informazione del certificato corrente)
    if (name !== '' && certificate === '') {
        Messenger.ctrl = setInterval(function () {
            get_new_messages();
        }, 180000); //3 minuti
    }
    if (!token && (typeof name !== 'string' || name === '' || typeof certificate !== 'string' || certificate === '')) {
        return;
    }
    $('#messenger-auth > [name="name"]').val(name);
    $('#messenger-auth > [name="certificate"]').val(certificate);
    var auth = $('#messenger-auth').serialize();

    $.ajax({
        url: '/messenger/1.0/authentication',
        async: true,
        method: 'GET',
        success: function (res)
        {
            if (typeof (res) !== 'object') {
                return false;
            }

            if (!res.success || accesso_token == 'SI') {
                if (accesso_token == 'SI'){
                    auth = {};
                }
                $.ajax({
                    url: url,
                    async: true,
                    method: method,
                    data: auth,
                    success: function () {
                        get_new_messages();
                        Messenger.ctrl = setInterval(function () {
                            get_new_messages();
                        }, 180000); // 3 minuti
                    },
                    error: function () {
                    }
                });
            } else {
                get_new_messages();
                Messenger.ctrl = setInterval(function () {
                    get_new_messages();
                }, 180000); //3 minuti
            }
        },
        error: function () {
        }
    });
    setTimeout(function () {
        $('#messenger-auth > [name="name"]').val('');
        $('#messenger-auth > [name="certificate"]').val('');
    }, 5000);
}


/**
 * Recupera il numero di nuovi messaggi ricevuti nel sistema di messaggistica
 *
 * @returns {Number}
 */
function _get_new_messages()
{
    return new Promise((resolve, reject) => {
        var messages = 0;

        $.ajax({
            url: '/messenger/1.0/messages/status/unreaded/count?categories='+ encodeURIComponent(JSON.stringify(["MESSAGE"])),
            method: 'GET',
            async: true,
            // Evita la visualizzazione del loader
            beforeSend: function(){},
            complete: function(){},
            success: function( res )
            {
                if (typeof(res) !== 'object') {
                    return;
                }

                if (res.success) {
                    messages = res.results.MESSAGE;
                }
                resolve(messages);
            },
            error: function(res){
                // Probabilmente la sessione è scaduta, o l'autenticazione è fallita
                if  (res.status === 401 && Messenger.ctrl > 0) {
                    clearInterval(Messenger.ctrl);
                    Messenger.ctrl = 0;
                    reject(0);
                }
            }
        });
    });
};

/**
 *
 * @returns {undefined}
 */
function get_new_messages() {
    $('#messenger-notify').hide();
    $('.messenger-notify-2').hide();

    var messages = _get_new_messages().then((messages) => {
        if (messages > 0) {
            $('#messenger-notify').html(messages);
            $('.messenger-notify-2').html(messages);
            $('#messenger-notify').show();
            $('.messenger-notify-2').css("display", "inline-block");
            // Fix css
            $('#messenger-notify').parent().css({
                top: 9,
                position: 'relative'
            });
        } else {
            $('#messenger-notify').hide();
            $('.messenger-notify-2').hide();
            // Fix css
            $('#messenger-notify').parent().css({
                top: 0,
                position: 'relative'
            });
        }
    });

}

function call_messengerGetCircolariDaLeggereInClasse(url){
    return new Promise((resolve, reject) => {
        $.ajax({
            url: encodeURI(url),
            method: 'GET',
            async: true,
            // Evita la visualizzazione del loader
            beforeSend: function () { },
            complete: function () { },
            success: function (res) {
                resolve(res.results);
            },
            error: function (res) {
                // Probabilmente la sessione è scaduta, o l'autenticazione è fallita
                if (res.status === 401 && Messenger.ctrl > 0) {
                    clearInterval(Messenger.ctrl);
                    Messenger.ctrl = 0;
                    reject(0);
                }
            }
        });
    });
}

function call_messengerGetCircolariDaLeggereInClasse2(idClasse){
    return new Promise((resolve, reject) => {
        $.ajax({
            type: "GET",
            data: { "id_classe": idClasse },
            url: "../next-api/v1/messaggistica/estrai_da_leggere_in_classe",
            headers: { 'Authorization': $('#current_key').val() },
            success: function (data) {
                resolve(data);
            },
            error: function (data) {
                reject(data);
            },
            complete: function (data) {
                resolve(data);
            }
        });
    });
}

function call_messengerSetCircolareLetta2(idMessaggio, idClasse){
    return new Promise((resolve, reject) => {
        $.ajax({
            type: "PATCH",
            data: { "id_classe": idClasse, 'id_messaggio': idMessaggio, 'id_utente_lettore': $("#current_user").val(), 'tipo_utente_lettore': $("[name='form_stato']").val() },
            url: "../next-api/v1/messaggistica/segna_letto_in_classe",
            headers: { 'Authorization': $('#current_key').val() },
            success: function (data) {
                resolve(data);
            },
            error: function (data) {
                reject(data);
            },
            complete: function (data) {
                resolve(data);
            }
        });
    });
}

function call_messengerSetCircolareLetta(idMessaggio, channel){
    return new Promise((resolve, reject) => {
        $.ajax({
            url: '/messenger/1.0/messages/' + idMessaggio + '/readed-for-channel/' + channel,
            method: 'PUT',
            async: true,
            // Evita la visualizzazione del loader
            beforeSend: function () { },
            complete: function () { },
            success: function (res) {
                console.log('letta', res);
                if (typeof (res) === 'object' && res.success) {
                    resolve(true);
                } else {
                    reject(res);
                }
            },
            error: function (err) {
                reject(err);
            }
        });
    });
}

function call_messengerSetStatusMessages(messages, status){
    //Cambia lo stato di un messaggio (per ora solo received, readed e confirmed)
    return new Promise((resolve, reject) => {
        $.ajax({
            url: '/messenger/1.0/messages/status/' + status,
            method: 'PUT',
            async: true,
            data: JSON.stringify({ messages: messages }), //messages = array di id
            // Evita la visualizzazione del loader
            beforeSend: function () { },
            complete: function () { },
            success: function (res) {
                if (typeof (res) === 'object' && res.success) {
                    resolve(true);
                } else {
                    reject(res);
                }
            },
            error: function (err) {
                reject(err);
            }
        });
    });
}

function getUuidsClass(idClasse){
    return new Promise((resolve, reject) => {
        var query = {
            current_user: $('#current_user').val(),
            current_key: $('#current_key').val(),
            db_key: $('#db_key').val(),
            form_tipo_utente: $('#tipo_utente').val(),
            id_classe: idClasse,
            form_azione: 'get_uuids_class'
        };
        $.ajax({
            type: "POST",
            url: "ajax_professore.php",
            data: query,//no need to call JSON.stringify etc... jQ does this for you
            cache: false,
            success: function (response) {//check response: it's always good to check server output when developing...
            },
            complete: function (response) {
                if (response.responseJSON){
                    if (response.responseJSON.uuidp != ""){
                        resolve(response.responseJSON.uuidp);
                    }
                }
                reject();
            }
        });
    });
}

function messengerGetCircolariDaLeggereInClasse(idClasse) {
    //logica ripresa da vecchio registro lib.registro.messenger.js funzioni a righe 330 e 447
    return new Promise ((resolve, reject) => {
        console.log('check circolari');
        getUuidsClass(idClasse).then((channelId) => {
            if (typeof channelId === 'undefined') {
                reject();
            }

            if (typeof channelId === null) {
                reject();
            }

            var url = '/messenger/1.0/messages';


            var properties = {};
            properties["channel_" + channelId] = "bnVsbA=="; //bnVsbA== è il base64 di null

            var filter = [
                'reduce_content=false',
                'category=MESSAGE',
                'properties=' + JSON.stringify(properties),
                'fields=' + JSON.stringify(['id', 'properties', 'confirmed', 'content', 'delivery', 'name', 'owner', 'owner_name', 'owner_surname', 'readed', 'received'])
            ];

            if (filter.length > 0) {
                url += '?' + filter.join('&');
            }

            call_messengerGetCircolariDaLeggereInClasse(url).then((circolari_totali) => {
                if (circolari_totali.length > 0){
                    var m;
                    var circolari_filtrate = [];

                    for (m in circolari_totali){
                        if (typeof circolari_totali[m].properties.readable_for_channel !== 'undefined'
                            && circolari_totali[m].properties.readable_for_channel === '1') {
                            circolari_filtrate.push(circolari_totali[m]);
                        }
                    }
                    resolve(circolari_filtrate);
                }
            });

        });
    });
}

function messengerGetCircolariDaLeggereInClasse2(idClasse) {
    return new Promise ((resolve, reject) => {
        console.log('check circolari');
        call_messengerGetCircolariDaLeggereInClasse2(idClasse).then((circolari_totali_obj) => {
            var circolari_totali = Object.values(circolari_totali_obj);

            if (circolari_totali.length > 0){
                var m;
                var circolari_filtrate = [];

                for (m in circolari_totali){
                    // if (typeof circolari_totali[m].properties.readable_for_channel !== 'undefined'
                    //     && circolari_totali[m].properties.readable_for_channel === '1') {
                        circolari_filtrate.push(circolari_totali[m]);
                    // }
                }
                resolve(circolari_filtrate);
            }
        });
    });
}

function call_checkMessaggiNuovoMessenger(){
    return new Promise((resolve, reject) => {
        $.ajax({
            type: "GET",
            url: "../next-api/v1/messaggistica/estrai_num_messaggi_da_leggere",
            headers: { 'Authorization': $('#current_key').val() },
            success: function (data) {
                resolve(data);
            },
            error: function (data) {
                reject(data);
            },
            complete: function (data) {
                resolve(data);
            }
        });
    });
}

function checkMessaggiNuovoMessenger(){
    call_checkMessaggiNuovoMessenger().then((data) => {
        var ricevuti = data.ricevuti;
        if (ricevuti > 0){
            $('#messenger-notify').html(ricevuti);
            $('.messenger-notify-2').html(ricevuti);
            $('#messenger-notify').show();
            $('.messenger-notify-2').css("display", "inline-block");
            // Fix css
            $('#messenger-notify').parent().css({
                top: 9,
                position: 'relative'
            });
        } else {
            $('#messenger-notify').hide();
            $('.messenger-notify-2').hide();
            // Fix css
            $('#messenger-notify').parent().css({
                top: 0,
                position: 'relative'
            });
        }
    });
}