<!DOCTYPE html>
<html lang="it">
    <head>
        <title>Cambio Lingua</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="google" value="notranslate">
        <link rel="shortcut icon" type="image/x-icon" href="icone/mastercom.ico">
        <link rel="stylesheet" type="text/css" href="https://mastertest2.registroelettronico.com/mastercom/css/jquery-ui-1.8.16.custom.css" />
        <link rel="stylesheet" href="view-source:https://mastertest2.registroelettronico.com/mastercom/css/style.css">
        <script src="https://accounts.google.com/gsi/client" async defer></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jsrsasign/8.0.20/jsrsasign-all-min.js"></script>
        
        <script type="text/javascript" src="view-source:https://mastertest2.registroelettronico.com/mastercom/libs/jquery/jquery-3.7.1.min.js"></script>
        <script type="text/javascript" src="view-source:https://mastertest2.registroelettronico.com/mastercom/libs/jquery-ui-1.14.1/jquery-ui.min.js"></script>
        <script type="text/javascript" src="view-source:https://mastertest2.registroelettronico.com/mastercom/javascript/messenger.js?v=26.1.39"></script>
        <script type="text/javascript" src="view-source:https://mastertest2.registroelettronico.com/mastertek-api/ckeditor-mastercom/ckeditor.js"></script>
        <script type="text/javascript" src="view-source:https://mastertest2.registroelettronico.com/mastercom/javascript/anylink.js?v=26.1.39"></script>
        <script type="text/javascript" src="view-source:https://mastertest2.registroelettronico.com/mastercom/javascript/microsoft.js?v=26.1.39"></script>
        <script type="text/javascript" src="view-source:https://mastertest2.registroelettronico.com/mastercom/javascript/professore/include_funzioni_registro.js?v=26.1.39"></script>
        <script type="text/javascript" src="view-source:https://mastertest2.registroelettronico.com/mastercom/javascript/professore/ore_docenti_popup.js?v=26.1.39"></script>

		<link rel="stylesheet" href="view-source:https://mastertest2.registroelettronico.com/mastercom/libs/jqwidgets/styles/jqx.base.css" type="text/css" />
		<link rel="stylesheet" href="view-source:https://mastertest2.registroelettronico.com/mastercom/libs/jqwidgets/styles/jqx.darkblue.css" type="text/css" />
        <link rel="stylesheet" href="view-source:https://mastertest2.registroelettronico.com/mastercom/libs/jqwidgets/styles/jqx.bootstrap.css" type="text/css" />
		<link rel="stylesheet" href="view-source:https://mastertest2.registroelettronico.com/mastercom/libs/jqwidgets/styles/jqx.office.css" type="text/css" />
		<link rel="stylesheet" href="view-source:https://mastertest2.registroelettronico.com/mastercom/libs/jqwidgets/styles/jqx.metro.css" type="text/css" />
		<link rel="stylesheet" href="view-source:https://mastertest2.registroelettronico.com/mastercom/libs/jqwidgets/styles/jqx.material.css" type="text/css" />
        <link href="view-source:https://mastertest2.registroelettronico.com/mastercom/assets/plugins/font-awesome/5.0/css/fontawesome-all.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="view-source:https://mastertest2.registroelettronico.com/mastercom/assets/fontawesome-free-5.5.0-web/css/all.css">
		<!--link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"-->

		<script type="text/javascript" src="view-source:https://mastertest2.registroelettronico.com/mastercom/libs/jqwidgets/jqx-all.js"></script>
		<script type="text/javascript" src="view-source:https://mastertest2.registroelettronico.com/mastercom/libs/jqwidgets/globalization/globalize.js"></script>
        <script type="text/javascript" src="view-source:https://mastertest2.registroelettronico.com/mastercom/libs/jqwidgets/globalization/globalize.culture.it-IT.js"></script>

		<!--  Questo pezzo di javascript ha il compito di monitorare il tempo di caricamento complessivo di una pagina. In caso di login, invia l'informazione ad un webservice ajax per essere loggato nel db ed effettuare statistichee monitoraggio omogeneo del tempo di esecuzione delle pagine. -->
	   	<script type="text/javascript">
			var login_iniziale 	= '';
			var current_user 	= '3000133';
			var current_key 	= 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1aWQiOiJtY3VzZXJfMTc0NzM4Mzc2OS43NjQxNjg0NjFiODVfbWF1eHRvcmlubyIsInR5cGUiOiJ1c2VyIiwidGltZSI6MTc5MjMyNjMxNywiZGF0ZSI6IjE4XC8xMFwvMjAyNiAxNDoyNSIsImV4cGlyYXRpb24iOjE3OTQ5MTgzMTd9.Nlh-TiKxZpWSfUYA-17hJz1c-HagZLh1Sho29ELEWiQ';
			var tipo_utente 	= 'professore';

            CLIENT_ID   = '';
            API_KEY     = '';

			
			window.addEventListener("load", loadTime, false);
			function loadTime() {
				var now = new Date().getTime();
				var tempo_caricamento = now - performance.timing.navigationStart;
				if (window.console ) console.log(tempo_caricamento);
				if(login_iniziale == 'SI') {
					var query = {
							current_user:  current_user,
							current_key: current_key,
							form_tipo_utente: tipo_utente,
							form_cosa:  tempo_caricamento,
							form_tipo: 'LOGIN LOAD TIME',
							form_azione: 'registra_log_storico'
						};
					$.ajax({ type: "POST",
						 url: "ajat_manager.php",
						 data: query,
						 cache: false,
						 success: function(response) {
						 },
						 complete: function(response) {
						 },
					});
				}
			}

            function signOutGoogle() {
                /*{{{ */
                try {
                    //var auth2 = gapi.auth2.getAuthInstance();
//
                    //var isSignedIn = auth2.isSignedIn.get();
                    //if (isSignedIn === true){
                    //    auth2.signOut().then(function () {
                    //        console.log('User signed out.');
                    //        window.open("https://accounts.google.com/logout", "_blank");
                    //    });
                    //}
                } catch (e) { };
                /*}}}*/
            }

            /*function initGoogle() {
                try {
                    gapi.load('auth2', function () {
                        gapi.auth2.init({ client_id: "197393209516-tplrvljplria9qdl35ettvcbkke5r89r.apps.googleusercontent.com" });
                        gapi.auth2.init({ client_id: "412329167119-pqd3gkioesph8lnrlbnbp9mntcjoo4k8.apps.googleusercontent.com" });
                    });
                } catch (e) {
                    console.log(e);
                }
            }*/

            $(document).ready(function()
            {
                $('#jqxGeneralModalLoader').jqxLoader({ theme: 'material', isModal: true, text: "", width: 60, height: 60 });
                $('#jqxGeneralLoader').jqxLoader({ theme: 'material', text: "", width: 60, height: 60 });

                $("#search").keypress(function(event) {
                    if (event.which == 13) {
                        event.preventDefault();
                        value = $("#search").val();
                        if (value.trim() != '')
                        {
                            form = document.getElementById('search').form;
                            form.stato_principale.value = 'cerca';
                            form.submit();
                        }
                    }
                });

                $("form").append("<input type='hidden' name='st' value='1792327124111'>");

                
                                            initGoogle();
                                    
            });
			
		</script>
		<!--  -->

    <script type="text/javascript">
        window.name = 'mastercom_main_window';
    </script>
    
        <script type="text/javascript">
            window.name = 'mastercom_main_window';
        </script>
        <link type="text/css" rel="stylesheet" href="https://mastertest2.registroelettronico.com/mastercom/css/dhtmlgoodies_calendar.css?random=20051112" media="screen" />
        <script type="text/javascript" src="https://mastertest2.registroelettronico.com/mastercom/javascript/dhtmlgoodies_calendar.js?random=20060118"></script>
    <style>
        /*body {font-family: "Roboto", "Arial", sans-serif; background-color: #aaa; margin: 0px; }*/
        body {font-family: "Roboto", "Arial", sans-serif; background-color: #aaa; margin: 0px; }
        button {font-family: "Roboto", "Arial", sans-serif;}
        textarea {font-family: "Roboto", "Arial", sans-serif;}
    </style>
    
</head>
<body id='body'>
    <input type='hidden' value='NO' id='modal-open'>
    <input type='hidden' id='login_centralizzato' value='SI'>

   <!--<table width='100%' class='sfondo_scuro' >-->
   <table width='100%' class='sfondo_scuro' >
        <tr valign='middle' align='center' style="font-size: 110%;">
            <td width="103">
                <img src='images/logo3.png' height="45" style="cursor: pointer;" title="Home"
                     onclick="
                        document.getElementById('navbar_form').stato_principale.value='home';
                        document.getElementById('navbar_form').stato_secondario.value='';
                        document.getElementById('navbar_form').submit();">
            </td>
            <td align="left" width="90%" class='ombra_testo' style="color: white;">
                <b>Professore - Cambio Lingua</b>
            </td>
            <td align="right" style="color: white; white-space: nowrap;">
                
            </td>
            <td width='1%' align='right'>
                                 </td>
            <td align="right" style="color: white; white-space: nowrap; padding-left: 20px;">
                <div class="desktop dropdown noselect" style="float: none;" onclick="">
                    <span class='ombra_testo' style="position: relative;  top: -13px;">Docente Prova</span>
                    <img src='icone/account-circle.png' height="40" class="dropbtn" style="padding: 5px 14px 0px 5px;">
                    <div class="desktop dropdown-content sfondo_bianco sel_blu" style="right: 10px;">
                        <a onclick="
                            document.getElementById('navbar_form').stato_principale.value='cambio_password';
                            document.getElementById('navbar_form').submit();
                            $('#jqxGeneralModalLoader').jqxLoader('open');
                            ">Password <i class="fa fa-fw fa-lock right"></i></a>
                        <a onclick="document.getElementById('navbar_form').stato_principale.value='cambio_lingua';
                                    document.getElementById('navbar_form').submit();
                                    "
                            style='vertical-align: middle;'>Lingua <img src='icone/flag_it.png' height="20" style='float: right;'></a>
                                                    <a onclick="
                                document.getElementById('navbar_form').stato_principale.value='mac_address';
                                document.getElementById('navbar_form').submit();
                                $('#jqxGeneralModalLoader').jqxLoader('open');
                                ">MAC Address</a>
                                                                                                <a onclick="
                                                            signOutGoogle();
                                                        document.getElementById('navbar_form').form_stato.value='logout';
                            document.getElementById('navbar_form').submit();
                            $('#jqxGeneralModalLoader').jqxLoader('open');
                            ">Esci <i class="fa fa-fw fa-sign-out-alt right testo_rosso"></i></a>
                    </div>
                </div>
            </td>
        </tr>
    </table>

            <form method='post' id='navbar_form' action='/mastercom/index.php'>
            <div class="navbar sfondo_scuro" style='display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap;'>
                <div>
                    <a class='ombra_testo'
                       style=""
                        onclick="
                        document.getElementById('navbar_form').stato_principale.value='home';
                        document.getElementById('navbar_form').stato_secondario.value='';
                        document.getElementById('navbar_form').submit();
                        $('#jqxGeneralModalLoader').jqxLoader('open');
                        ">Home</a>
                    <a class='ombra_testo'
                       style=""
                        onclick="
                        document.getElementById('navbar_form').stato_principale.value='agenda';
                        document.getElementById('navbar_form').stato_secondario.value='';
                        document.getElementById('navbar_form').submit();
                        $('#jqxGeneralModalLoader').jqxLoader('open');
                        ">Agenda</a>
                    <div class="desktop dropdown sfondo_scuro"  onclick="">
                      <button type="button" class="dropbtn ombra_testo" style="" aria-expanded="false" aria-controls="menu_registri" onclick="toggleMenuTastiera(this)">Registri</button>
                      <div class="desktop dropdown-content sfondo_bianco sel_blu" id="menu_registri">
                            <a onclick="
                                document.getElementById('navbar_form').stato_principale.value='registri_classe';
                                document.getElementById('navbar_form').stato_secondario.value='';
                                document.getElementById('navbar_form').submit();
                              ">                                Registri di classe</a>
                            <a onclick="
                                document.getElementById('navbar_form').stato_principale.value='registro_docente';
                                document.getElementById('navbar_form').stato_secondario.value='';
                                document.getElementById('navbar_form').submit();
                                $('#jqxGeneralModalLoader').jqxLoader('open');
                                ">                                Registro docente</a>
                                                        <a onclick="
                                document.getElementById('navbar_form').stato_principale.value='corsi_principale';
                                document.getElementById('navbar_form').stato_secondario.value='';
                                document.getElementById('navbar_form').submit();
                                $('#jqxGeneralModalLoader').jqxLoader('open');
                                ">                                Gestione Corsi</a>
                                                                              </div>
                    </div>
                    <a class='ombra_testo'
                       style=""
                        onclick="
                        document.getElementById('navbar_form').stato_principale.value='assenze_new';
                        document.getElementById('navbar_form').stato_secondario.value='';
                        document.getElementById('navbar_form').submit();
                        ">Assenze</a>
                    <a class='ombra_testo'
                       style=""
                        onclick="
                        document.getElementById('navbar_form').stato_principale.value='voti_new';
                        document.getElementById('navbar_form').stato_secondario.value='';
                        document.getElementById('navbar_form').submit();
                        ">Voti</a>
                    <a class='ombra_testo'
                       style=""
                        onclick="
                        document.getElementById('navbar_form').stato_principale.value='argomenti_compiti';
                        document.getElementById('navbar_form').stato_secondario.value='';
                        document.getElementById('navbar_form').submit();
                        ">Argomenti e Compiti</a>
                                        <a class='ombra_testo'
                       style=""
                        onclick="
                        document.getElementById('navbar_form').stato_principale.value='pannello_firme';
                        document.getElementById('navbar_form').stato_secondario.value='';
                        document.getElementById('navbar_form').submit();
                        $('#jqxGeneralModalLoader').jqxLoader('open');
                        ">Firme</a>
                                                            <a class='ombra_testo'
                       style=""
                        onclick="
                        document.getElementById('navbar_form').stato_principale.value='materiale_didattico';
                        document.getElementById('navbar_form').stato_secondario.value='';
                        document.getElementById('navbar_form').submit();
                        ">Materiale Didattico</a>
                                        <a  class='ombra_testo'
                        style=""
                        onclick="
                        document.getElementById('navbar_form').stato_principale.value='pagelle_principale';
                        document.getElementById('navbar_form').stato_secondario.value='';
                        document.getElementById('navbar_form').submit();
                        ">Pagelle</a>
                    <a  class='ombra_testo'
                        style=""
                        onclick="
                        document.getElementById('navbar_form').stato_principale.value='stampe';
                        document.getElementById('navbar_form').stato_secondario.value='';
                        document.getElementById('navbar_form').submit();
                        ">Stampe</a>
                        <div class="desktop dropdown sfondo_scuro" onclick="">
                            <button type="button" class="dropbtn ombra_testo" aria-expanded="false" aria-controls="menu_altre_funzioni" onclick="toggleMenuTastiera(this)">Altre Funzioni</button>
                            <div class="desktop dropdown-content sfondo_bianco sel_blu" id="menu_altre_funzioni">
                                                                <a onclick="
                                    document.getElementById('navbar_form').stato_principale.value='note_disciplinari';
                                    document.getElementById('navbar_form').stato_secondario.value='';
                                    document.getElementById('navbar_form').submit();
                                    $('#jqxGeneralModalLoader').jqxLoader('open');
                                  ">                                Note</a>
                                                                                                <a onclick="
                                    document.getElementById('navbar_form').stato_principale.value='prenotazione_risorse_2';
                                    document.getElementById('navbar_form').stato_secondario.value='';
                                    document.getElementById('navbar_form').submit();
                                    $('#jqxGeneralModalLoader').jqxLoader('open');
                                  ">                                    Prenota Risorse</a>
                                                                                                                                <a onclick="
                                    document.getElementById('btn-alternanza').submit();
                                  ">                                    Alternanza</a>
                                                                                                        <a onclick="
                                        document.getElementById('navbar_form').stato_principale.value='mense_principale';
                                        document.getElementById('navbar_form').stato_secondario.value='';
                                        document.getElementById('navbar_form').submit();
                                  ">                                    Mensa</a>
                                                                                                    <a onclick="
                                        document.getElementById('navbar_form').stato_principale.value='adozione_libri';
                                        document.getElementById('navbar_form').stato_secondario.value='selezione_classi';
                                        document.getElementById('navbar_form').submit();
                                  ">                                    Adozione libri</a>
                                                                                                                                                                                                                                    <a onclick="
                                        document.getElementById('navbar_form').stato_principale.value='dad_ddi';
                                        document.getElementById('navbar_form').stato_secondario.value='';
                                        document.getElementById('navbar_form').submit();
                                    ">                                    DAD, DDI e FAD</a>
                                                                                                    <a onclick="
                                        document.getElementById('navbar_form').stato_principale.value='esami_stato_principale';
                                        document.getElementById('navbar_form').stato_secondario.value='';
                                        document.getElementById('navbar_form').submit();
                                  ">                                    Esami di Stato</a>
                                                                                                    <a onclick="
                                        document.getElementById('navbar_form').stato_principale.value='servizi_giornalieri';
                                        document.getElementById('navbar_form').stato_secondario.value='';
                                        document.getElementById('navbar_form').submit();
                                    ">                                    Servizi giornalieri</a>
                                                                                                <a onclick="
                                        document.getElementById('navbar_form').stato_principale.value='appello_gita';
                                        document.getElementById('navbar_form').stato_secondario.value='';
                                        document.getElementById('navbar_form').submit();
                                    ">Appello gita</a>
                                                                                                                                                                                                                                    <a onclick="
                                        document.getElementById('navbar_form').stato_principale.value='tutor_registro';
                                        document.getElementById('navbar_form').stato_secondario.value='';
                                        document.getElementById('navbar_form').submit();
                                    ">                                    Tutor</a>
                                                                                                    <a onclick="
                                        document.getElementById('navbar_form').stato_principale.value='documenti_classi';
                                        document.getElementById('navbar_form').stato_secondario.value='';
                                        document.getElementById('navbar_form').submit();
                                    ">                                    Documenti Classi</a>
                                                                <a onclick="
                                                                            mostraPopupOreDocentiProfessore();
                                                                    ">                                Ore Docenti</a>
                            </div>
                        </div>
                </div>
                <div style="padding: 6px 14px;">
                    <input type='search' placeholder="Cerca" id="search" name="search" class="input_text" style="text-align: left;">

                                            <div style="display: inline-block;">
                            <div class='messenger-notify-2'></div>
                                                            
                                <img src='icone quaderno/messaggi.svg'
                                    height="30"
                                    title="Messaggi"
                                    style="padding-left: 10px; vertical-align: middle; cursor: pointer;"
                                    onclick="$('#btn-messenger2').submit();"
                                    ></img>
                                <script type="text/javascript" language="JavaScript">
                                    $(document).ready( function(){
                                        checkMessaggiNuovoMessenger();

                                        var intervalMessaggi = setInterval(function () {
                                            checkMessaggiNuovoMessenger();
                                        }, 60000); // ogni 1 minuto
                                    });
                                </script>
                                                    </div>
                    
                    <span class='ombra_testo pointer' style='padding-left: 10px; vertical-align: middle; cursor: pointer; font-size: 30px;' title='Nuova scheda'
                        onclick="
                            document.getElementById('navbar_form').target = '_blank';
                            document.getElementById('navbar_form').submit();
                            document.getElementById('navbar_form').target = '_self';
                        ">+</span>
                </div>
            </div>

            
            <div id="jqxGeneralModalLoader"></div>
            <div id="jqxGeneralLoader"></div>

            
            <input type='hidden' name='form_stato' value='professore'>
            <input type='hidden' name='stato_principale' value=''>
            <input type='hidden' name='stato_secondario' value=''>
            <input type='hidden' name='current_user' id='current_user' value='3000133'>
            <input type='hidden' name='current_key' id='current_key' value='eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1aWQiOiJtY3VzZXJfMTc0NzM4Mzc2OS43NjQxNjg0NjFiODVfbWF1eHRvcmlubyIsInR5cGUiOiJ1c2VyIiwidGltZSI6MTc5MjMyNjMxNywiZGF0ZSI6IjE4XC8xMFwvMjAyNiAxNDoyNSIsImV4cGlyYXRpb24iOjE3OTQ5MTgzMTd9.Nlh-TiKxZpWSfUYA-17hJz1c-HagZLh1Sho29ELEWiQ'>
            <input type='hidden' id='db_key' value='mastercom_2026_2027'>
            <input type='hidden' id='tipo_utente' value='professore'>
            <input type='hidden' name='tipo_accesso'>
        </form>

        <form id="btn-messenger2" method="POST" target='_blank' action="/mastercom/index.php">
            <input type='hidden' name='stato_principale' value='messenger'>
            <input type='hidden' name='form_stato' value='professore'>
            <input type='hidden' name='current_user' value='3000133'>
            <input type='hidden' name='current_key' value='eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1aWQiOiJtY3VzZXJfMTc0NzM4Mzc2OS43NjQxNjg0NjFiODVfbWF1eHRvcmlubyIsInR5cGUiOiJ1c2VyIiwidGltZSI6MTc5MjMyNjMxNywiZGF0ZSI6IjE4XC8xMFwvMjAyNiAxNDoyNSIsImV4cGlyYXRpb24iOjE3OTQ5MTgzMTd9.Nlh-TiKxZpWSfUYA-17hJz1c-HagZLh1Sho29ELEWiQ'>
        </form>

        <form id="messenger-auth">
            <input type="hidden" name="certificate">
            <input type="hidden" name="name">
        </form>
        <form id="btn-messenger" method="GET" target='MASTERCOM-MESSENGER' action="/messaggi"></form>
        <form id="btn-alternanza" method="GET" target='_blank' action="https://alternanza.registroelettronico.com/mauxtorino"></form>

        
        <script type="text/javascript">
            function toggleMenuTastiera(btnTestata) {
                var contenitore = btnTestata.closest('.dropdown');
                if (!contenitore) {
                    return;
                }
                var aperto = contenitore.classList.toggle('open');
                btnTestata.setAttribute('aria-expanded', aperto ? 'true' : 'false');
                if (aperto) {
                    var primaVoce = contenitore.querySelector('.dropdown-content a');
                    if (primaVoce) {
                        primaVoce.focus();
                    }
                }
            }

            document.addEventListener('DOMContentLoaded', function () {
                document.addEventListener('keydown', function (evento) {
                    if (evento.key !== 'Escape' && evento.key !== 'Esc') {
                        return;
                    }
                    var aperto = document.querySelector('.desktop.dropdown.open');
                    if (!aperto) {
                        return;
                    }
                    aperto.classList.remove('open');
                    var btnAperto = aperto.querySelector('.dropbtn[aria-expanded]');
                    if (btnAperto) {
                        btnAperto.setAttribute('aria-expanded', 'false');
                        btnAperto.focus();
                    }
                });

                document.addEventListener('click', function (evento) {
                    if (evento.target && evento.target.closest && evento.target.closest('.dropdown')) {
                        return;
                    }
                    var aperti = document.querySelectorAll('.desktop.dropdown.open');
                    for (var i = 0; i < aperti.length; i++) {
                        aperti[i].classList.remove('open');
                        var btnChiuso = aperti[i].querySelector('.dropbtn[aria-expanded]');
                        if (btnChiuso) {
                            btnChiuso.setAttribute('aria-expanded', 'false');
                        }
                    }
                });
            });
        </script>
        
    	</div>



<script type="text/javascript">
    function selezionaLingua(div, codiceLingua){
        $("#lingua_selezionata").val(codiceLingua);

        $("[data-tipo-div='lingua']").removeClass('bordo_master_yellow');
        $("[data-tipo-div='lingua']").removeClass('bordo_grigio_chiaro');
        $("[data-tipo-div='lingua']").removeClass('ombra_lingua_registro');
        $("[data-tipo-div='lingua']").addClass('bordo_grigio_chiaro');

        $(div).removeClass('bordo_grigio_chiaro');
        $(div).addClass('bordo_master_yellow');
        $(div).addClass('ombra_lingua_registro');
    }

    function salvaLingua(){
        if ($("#lingua_selezionata").val() != ""){
            $("#operazione").val('cambia_lingua');
            $('#jqxGeneralLoader').jqxLoader('open');
            $("#form_container").submit();
        } else {
            creaToast("Errore selezione lingua, 'error");
        }
    }

    window.addEventListener("orientationchange", function() {
        $('#page').css('height', '');
        if ($('#page').height() > $(window.innerHeight)[0] - $('#page').position().top - 10){
                $('#page').height($(window.innerHeight)[0] - $('#page').position().top - 10);
            }
    });

    $(document).ready( function(){
        $('#message').delay(5000).fadeOut();

        if ($('#page').length)
        {
            if ($('#page').height() > $(window.innerHeight)[0] - $('#page').position().top - 10){
                $('#page').height($(window.innerHeight)[0] - $('#page').position().top - 10);
            }
        }
    });
</script>


<br>


<div id="toastsContainer" class="" style="position: absolute; z-index: 6; bottom: 0px; left: 0px; padding: 10px;"></div>

<div class="div_titolo_scheda_generica sfondo_scuro" style="width: 98%; background-color: #4CAF50;" align="center">
    <div>
        <div align="left" class="ombra_testo" style="padding-left: 10px; font-size: 120%;">
            Cambio Lingua
        </div>
    </div>
</div>
<form method='post' action='/mastercom/index.php' id="form_container">
    <div class="div_corpo_scheda_generica" align="center" style="width: 98%; color: black; font-weight: normal;">
        <div align="left" class="padding8 annotazione_leggera">
            Seleziona la lingua da impostare e conferma
        </div>
        <div style="display: flex; justify-content: center; flex-wrap: wrap;">
             
                <div class="margin8 padding16 bordrad5 evidenzia pointer font120p bold noselect
                    bordo_master_yellow ombra_lingua_registro"
                    data-tipo-div="lingua"
                    style="width: 100px;"
                    onclick="selezionaLingua(this, 'it');">
                    <img src='icone/flag_it.png' height="40" class="margin-bottom16">
                    <br>
                    Italiano
                </div>
                    </div>
        <div class="padding16">
            <button type="button"
                title="Conferma"
                class="btn_pieno sfondo_verde margin2"
                onclick="salvaLingua();"
            >Imposta</button>
        </div>
    </div>

    <input type='hidden' name='form_stato' value='professore'>
    <input type='hidden' name='stato_principale' value='cambio_lingua'>
    <input type='hidden' name='stato_secondario' id='stato_secondario' value=''>
    <input type='hidden' name='operazione' id="operazione" value=''>
    <input type='hidden' name='lingua_selezionata' id="lingua_selezionata" value='it'>
    <input type='hidden' name='current_user' id='current_user' value='3000133'>
    <input type='hidden' name='current_key' id='current_key' value='eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1aWQiOiJtY3VzZXJfMTc0NzM4Mzc2OS43NjQxNjg0NjFiODVfbWF1eHRvcmlubyIsInR5cGUiOiJ1c2VyIiwidGltZSI6MTc5MjMyNjMxNywiZGF0ZSI6IjE4XC8xMFwvMjAyNiAxNDoyNSIsImV4cGlyYXRpb24iOjE3OTQ5MTgzMTd9.Nlh-TiKxZpWSfUYA-17hJz1c-HagZLh1Sho29ELEWiQ'>
    <input type='hidden' id='db_key' value='mastercom_2026_2027'>
    <input type='hidden' id='tipo_utente' value='professore'>
</form>