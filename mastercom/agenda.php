<!DOCTYPE html>
<html lang="it">
    <head> <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <title>Agenda</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="google" value="notranslate">
        <link rel="shortcut icon" type="image/x-icon" href="icone/mastercom.ico">
        <link rel="stylesheet" type="text/css" href="https://mastertest2.registroelettronico.com/mastercom/css/jquery-ui-1.8.16.custom.css" />
        <link rel="stylesheet" href="https://mastertest2.registroelettronico.com/mastercom/css/style.css">
        <script src="https://accounts.google.com/gsi/client" async defer></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jsrsasign/8.0.20/jsrsasign-all-min.js"></script>
        
        <script type="text/javascript" src="https://mastertest2.registroelettronico.com/mastercom/libs/jquery/jquery-3.7.1.min.js"></script>
        <script type="text/javascript" src="https://mastertest2.registroelettronico.com/mastercom/libs/jquery-ui-1.14.1/jquery-ui.min.js"></script>
        <script type="text/javascript" src="https://mastertest2.registroelettronico.com/mastercom/javascript/messenger.js?v=26.1.39"></script>
        <script type="text/javascript" src="https://mastertest2.registroelettronico.com/mastertek-api/ckeditor-mastercom/ckeditor.js"></script>
        <script type="text/javascript" src="https://mastertest2.registroelettronico.com/mastercom/javascript/anylink.js?v=26.1.39"></script>
        <script type="text/javascript" src="https://mastertest2.registroelettronico.com/mastercom/javascript/microsoft.js?v=26.1.39"></script>
        <script type="text/javascript" src="https://mastertest2.registroelettronico.com/mastercom/javascript/professore/include_funzioni_registro.js?v=26.1.39"></script>
        <script type="text/javascript" src="https://mastertest2.registroelettronico.com/mastercom/javascript/professore/ore_docenti_popup.js?v=26.1.39%22"></script>

		<link rel="stylesheet" href="https://mastertest2.registroelettronico.com/mastercom/libs/jqwidgets/styles/jqx.base.css" type="text/css" />
		<link rel="stylesheet" href="https://mastertest2.registroelettronico.com/mastercom/libs/jqwidgets/styles/jqx.darkblue.css" type="text/css" />
        <link rel="stylesheet" href="https://mastertest2.registroelettronico.com/mastercom/libs/jqwidgets/styles/jqx.bootstrap.css" type="text/css" />
		<link rel="stylesheet" href="https://mastertest2.registroelettronico.com/mastercom/libs/jqwidgets/styles/jqx.office.css" type="text/css" />
		<link rel="stylesheet" href="https://mastertest2.registroelettronico.com/mastercom/libs/jqwidgets/styles/jqx.metro.css" type="text/css" />
		<link rel="stylesheet" href="https://mastertest2.registroelettronico.com/mastercom/libs/jqwidgets/styles/jqx.material.css" type="text/css" />
        <link href="https://mastertest2.registroelettronico.com/mastercom/assets/plugins/font-awesome/5.0/css/fontawesome-all.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://mastertest2.registroelettronico.com/mastercom/assets/fontawesome-free-5.5.0-web/css/all.css">
		<!--link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"-->

		<script type="text/javascript" src="https://mastertest2.registroelettronico.com/mastercom/libs/jqwidgets/jqx-all.js"></script>
		<script type="text/javascript" src="https://mastertest2.registroelettronico.com/mastercom/libs/jqwidgets/globalization/globalize.js"></script>
        <script type="text/javascript" src="https://mastertest2.registroelettronico.com/mastercom/libs/jqwidgets/globalization/globalize.culture.it-IT.js"></script>

		<!--  Questo pezzo di javascript ha il compito di monitorare il tempo di caricamento complessivo di una pagina. In caso di login, invia l'informazione ad un webservice ajax per essere loggato nel db ed effettuare statistichee monitoraggio omogeneo del tempo di esecuzione delle pagine. -->
	   	<script type="text/javascript">
			var login_iniziale 	= '';
			var current_user 	= '3000133';
			var current_key 	= 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1aWQiOiJtY3VzZXJfMTc0NzM4Mzc2OS43NjQxNjg0NjFiODVfbWF1eHRvcmlubyIsInR5cGUiOiJ1c2VyIiwidGltZSI6MTc5MjE3MzA4NiwiZGF0ZSI6IjE2XC8xMFwvMjAyNiAxOTo1MSIsImV4cGlyYXRpb24iOjE3OTQ3NjUwODZ9.RekMTukmkOW_DySFK9Z7_rijwAqDBWEFHq3l5mQhTfM';
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

                $("form").append("<input type='hidden' name='st' value='1792173117923'>");

                
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
                <b>Trabajador - Agenda</b>
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
                                                                                                 <a onclick="signOutGoogle(); window.location.href='index.php?logout=true';">
    Salir <i class="fa fa-fw fa-sign-out-alt right testo_rosso"></i></a>
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
                       style="color: yellow;"
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
            <input type='hidden' name='current_key' id='current_key' value='eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1aWQiOiJtY3VzZXJfMTc0NzM4Mzc2OS43NjQxNjg0NjFiODVfbWF1eHRvcmlubyIsInR5cGUiOiJ1c2VyIiwidGltZSI6MTc5MjE3MzA4NiwiZGF0ZSI6IjE2XC8xMFwvMjAyNiAxOTo1MSIsImV4cGlyYXRpb24iOjE3OTQ3NjUwODZ9.RekMTukmkOW_DySFK9Z7_rijwAqDBWEFHq3l5mQhTfM'>
            <input type='hidden' id='db_key' value='mastercom_2026_2027'>
            <input type='hidden' id='tipo_utente' value='professore'>
            <input type='hidden' name='tipo_accesso'>
        </form>

        <form id="btn-messenger2" method="POST" target='_blank' action="/mastercom/index.php">
            <input type='hidden' name='stato_principale' value='messenger'>
            <input type='hidden' name='form_stato' value='professore'>
            <input type='hidden' name='current_user' value='3000133'>
            <input type='hidden' name='current_key' value='eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1aWQiOiJtY3VzZXJfMTc0NzM4Mzc2OS43NjQxNjg0NjFiODVfbWF1eHRvcmlubyIsInR5cGUiOiJ1c2VyIiwidGltZSI6MTc5MjE3MzA4NiwiZGF0ZSI6IjE2XC8xMFwvMjAyNiAxOTo1MSIsImV4cGlyYXRpb24iOjE3OTQ3NjUwODZ9.RekMTukmkOW_DySFK9Z7_rijwAqDBWEFHq3l5mQhTfM'>
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
    var limite_lezioni = {};
    
    function decodeHtml(str) {
        const el = document.createElement("textarea");
        el.innerHTML = str;
        return el.value;
    }
    
    var today = '2026-10-16';
    var giorni = [];
    giorni[0] = 'domenica';
    giorni[1] = 'lunedì';
    giorni[2] = 'martedì';
    giorni[3] = 'mercoledì';
    giorni[4] = 'giovedì';
    giorni[5] = 'venerdì';
    giorni[6] = 'sabato';

    limite_lezioni['inizio'] = '2026-08-03';
    limite_lezioni['fine'] = '2027-06-10';
    limite_lezioni['limite_orario_prenotazioni'] = '0';
    
    $('#modal-open').on("change", function (e)
    {
        var body = $('#body')[0];

        if (this.value === 'SI')
        {
            body.style.overflow='hidden';
            $('#btn_menu_utente').css("pointer-events", "none");
            $('#btn_giorno_precedente').attr("disabled", true);
            $('#btn_giorno_successivo').attr("disabled", true);
            $('#btn_calendario').attr("disabled", true);
            $('#agenda').css('overflow','hidden');
            $('#btn_filtri').attr("disabled", true);
            $('#btn_inserisci').attr("disabled", true);
        }
        else
        {
            body.style.overflow='visible';
            $('#btn_menu_utente').css("pointer-events", "auto");
            $('#btn_giorno_precedente').attr("disabled", false);
            $('#btn_giorno_successivo').attr("disabled", false);
            $('#btn_calendario').attr("disabled", false);
            $('#agenda').css('overflow','scroll');
            $('#btn_filtri').attr("disabled", false);
            $('#btn_inserisci').attr("disabled", false);
        }
    });

    function chiudiSfondoOscurato()
    {
        $('#sfondo_oscurato').fadeOut(200);
        $('#inserimento_modifica_annotazione_agenda').fadeOut(200);
        $('#inserimento_colloquio').fadeOut(200);
        $('#modifica_colloqui').fadeOut(200);
        $('#elimina_colloquio').fadeOut(200);
        $('.limiti-modifica-colloqui').fadeOut(200);
        $('#note_prenotazione_colloquio').fadeOut(200);
        $('#elimina_prenotazione_colloquio').fadeOut(200);
        $('#motivazione_cancellazione_prenotazione_colloquio').fadeOut(200);
        $('#assegnazione_slot_riservato').fadeOut(200);
        $('#modal-open').val('NO').trigger('change');
    }

    function mostraNascondiDiv(id_oggetto)
    {
        var div = document.getElementById(id_oggetto);

        if (div.style.height === '0px')
        {
            div.style.height = 'auto';
        }
        else
        {
            div.style.height = '0';
        }
    }

    function filtraAgenda(checkbox, classe_filtro)
    {
        console.log(checkbox.checked);
        if (checkbox.checked === false)
        {
            $('.'+classe_filtro).slideUp();
        }
        else
        {
            $('.'+classe_filtro).slideDown();
        }
    }


    function carica_classi(){
        var current_user = document.getElementById('current_user').value;
		var current_key = document.getElementById('current_key').value;
		var db_key = document.getElementById('db_key').value;
		var tipo_utente = document.getElementById('tipo_utente').value;

		var query = {
				current_user:  current_user,
				current_key: current_key,
				db_key: db_key,
				form_tipo_utente: tipo_utente,
				form_azione: 'jqx_carica_elenco_classi'
			};
		$.ajax({ type: "POST",
             url: "ajax_professore.php",
             data: query,//no need to call JSON.stringify etc... jQ does this for you
             cache: false,
             success: function(response)
             {//check response: it's always good to check server output when developing...
             },
			 complete: function(response) {
				if (response.responseJSON) {
					var risultato = response.responseJSON;
                    if (risultato.length > 0){
                        risultato.forEach(function (item, index){
                            if (item.ordinamento == 'CORSO'){
                                risultato[index]['nome'] = '(C) ' + risultato[index]['nome'];
                            }
                        });
                    }

					var sorgente_classi =
					{
						/*{{{ */
						datatype: "array",
						datafields: [
							{ name: 'id_classe' },
							{ name: 'nome' },
						],
						localdata: risultato,
						/*}}}*/
					};
					var interfaccia_classi = new $.jqx.dataAdapter(sorgente_classi, {
						loadComplete: function (data) { },
						loadError: function (xhr, status, error) { }
					});

					$("#elencoClassiCheckbox").jqxDropDownList({ source: interfaccia_classi, displayMember: "nome", valueMember: "id_classe", theme: 'Bootstrap', checkboxes: true, filterable: true, filterPlaceHolder: "Cerca...", width: 250, placeHolder: "Seleziona classi:", searchMode: 'containsignorecase'  });
                    $("#elencoClassiCheckbox").on('checkChange', function (event) {
                        if (event.args) {
                            var items = $("#elencoClassiCheckbox").jqxDropDownList('getCheckedItems');
                            var ids = new Array();
                            for (i in items)
                            {
                                ids.push(items[i].value);
                            }

                            var testo_hidden = ids.join();
                            $("#id_classi_annotazione").val(testo_hidden);
                        }
                    });

                    $("#elencoClassiList").jqxDropDownList({ source: interfaccia_classi, displayMember: "nome", valueMember: "id_classe", theme: 'Bootstrap', checkboxes: false, filterable: true, filterPlaceHolder: "Cerca...", width: 250, placeHolder: "Seleziona classe:", searchMode: 'containsignorecase'  });
                    $("#elencoClassiList").on('change', function (event) {
                        if (event.args) {
                            var item = $("#elencoClassiList").jqxDropDownList('getSelectedItem');

                            $("#id_classi_annotazione").val(item.value);
                        }
                    });

				} else { console.log(response.responseText); }
			 }
    	});
    }

    function caricaDatiInserimentoAnnotazione()
    {
        var d = new Date(),
            h = d.getHours(),
            m = d.getMinutes(),
            day = d.getDate(),
            month = d.getMonth()+1,
            year = d.getFullYear();
        if(h < 10) h = '0' + h;
        if(m < 10) m = '0' + m;
        if(day < 10) day = '0' + day;
        if(month < 10) month = '0' + month;
        var currentHour = h + ':' + m;
        var currentDate = year + '-' + month + '-' + day;
        $('#annotazione_ora_inizio').val(currentHour);
        $('#annotazione_ora_fine').val(currentHour);
        $('#annotazione_data_inizio').val(currentDate);
        $('#annotazione_data_fine').val(currentDate);
        $('#annotazione_titolo').val('');
        $('#annotazione_testo').val('');

        $('#titolo_inserisci_annotazione_agenda').show();
        $('#titolo_modifica_annotazione_agenda').hide();
        $('#btn_salva_inserisci_annotazione').show();
        $('#btn_salva_modifica_annotazione').hide();
        $('#elenco_classi_inserimento_annotazione').show();
        $('#elenco_classi_modifica_annotazione').hide();

        $('#nota_riservata').removeAttr('checked');
        $('#nota_riservata_consiglio_classe').removeAttr('checked');
        $('#id_annotazione_agenda').val('');
        $('#annotazione_conferma_festivita').val('');
        $('#avviso_festivita_annotazione').hide();
        $("#elencoClassiCheckbox").jqxDropDownList('uncheckAll');
        $("#elencoClassiList").jqxDropDownList('clearSelection');
    }

    function caricaDatiInserimentoColloquio()
    {
        $('#colloquio_data').val('');
        $('#colloquio_ora_inizio').val('');
        $('#colloquio_ora_fine').val('');
        $('#colloquio_ripeti').val('');
        $('#colloquio_titolo').val('Colloquio');
        $('#colloquio_testo').val('');
        $('#colloquio_slot').val('0');
        $('#colloquio_slot').prop("disabled", true);
        $('#colloquio_slot_riservati').val('0');
        $('#colloquio_slot_riservati').prop("disabled", true);

        let ripeti = $('#btn-ripeti-colloquio').val();
        if (ripeti === true){
            $('#btn-ripeti-colloquio').jqxSwitchButton('val', false);
        }

        $('.indirizzi_colloquio').removeAttr('checked');
        $('.annualita_colloquio').removeAttr('checked');
    }

    function caricaDatiInserimentoColloquioConValori(dati)
    {
        $('#colloquio_data').val(dati.data || '');
        $('#colloquio_ora_inizio').val(dati.ora_inizio || '');
        $('#colloquio_ora_fine').val(dati.ora_fine || '');
        $('#colloquio_ripeti').val(dati.ripeti || '');
        $('#colloquio_titolo').val(dati.titolo || 'Colloquio');
        $('#colloquio_testo').val(dati.testo || '');
        $('#colloquio_slot').val(dati.slot || '0');
        $('#colloquio_slot_riservati').val(dati.slot_riservati || '0');

        // Gestisci il campo ripeti
        if (dati.ripeti && dati.ripeti !== '') {
            $('#btn-ripeti-colloquio').jqxSwitchButton('val', true);
            $('#cell_ripeti_colloquio').show();
        } else {
            $('#btn-ripeti-colloquio').jqxSwitchButton('val', false);
            $('#cell_ripeti_colloquio').hide();
        }

        // Gestisci gli abbinamenti indirizzi
        $('.indirizzi_colloquio').removeAttr('checked');
        if (dati.abbinamenti) {
            for (var id in dati.abbinamenti) {
                $(".indirizzi_colloquio[value='" + id + "']").prop('checked', true);
            }
        }

        // Gestisci gli abbinamenti annualita
        $('.annualita_colloquio').removeAttr('checked');
        if (dati.abbinamenti_annualita) {
            for (var i = 0; i < dati.abbinamenti_annualita.length; i++) {
                $(".annualita_colloquio[value='" + dati.abbinamenti_annualita[i] + "']").prop('checked', true);
            }
        }

        // Triggera il change per aggiornare slot max
        checkInizioFineColloquioSlot($('#colloquio_data').val(), $('#colloquio_ora_inizio').val(), $('#colloquio_ora_fine').val(), 'colloquio_slot', 'colloquio_durata', 'colloquio_slot_max', 'colloquio_slot_riservati');
    }

    function caricaDatiModificaAnnotazione(idAnnotazione)
    {
        var current_user = document.getElementById('current_user').value;
		var current_key = document.getElementById('current_key').value;
		var db_key = document.getElementById('db_key').value;
		var tipo_utente = document.getElementById('tipo_utente').value;

		var query = {
				current_user:  current_user,
				current_key: current_key,
				db_key: db_key,
				form_tipo_utente: tipo_utente,
				id_annotazione_agenda: idAnnotazione,
				form_azione: 'estrai_annotazione_agenda'
			};
		$.ajax({ type: "POST",
             url: "ajax_professore.php",
             data: query,//no need to call JSON.stringify etc... jQ does this for you
             cache: false,
             success: function(response)
             {//check response: it's always good to check server output when developing...
             },
			 complete: function(response) {
				if (response.responseJSON !== false) {
                    var annotazione = response.responseJSON;

                    $('#nota_riservata').removeAttr('checked');
                    $('#nota_riservata_consiglio_classe').removeAttr('checked');
                    $("#elencoClassiCheckbox").jqxDropDownList('uncheckAll');
                    $("#elencoClassiList").jqxDropDownList('clearSelection');
                    $('#id_annotazione_agenda').val(idAnnotazione);
                    $('#annotazione_conferma_festivita').val('');
                    $('#avviso_festivita_annotazione').hide();

                    $('#annotazione_ora_inizio').val(annotazione.data_ora);
                    $('#annotazione_ora_fine').val(annotazione.data_fine_ora);
                    $('#annotazione_data_inizio').val(trasformaTimestampInDataOra(annotazione.data_inizio).data);
                    $('#annotazione_data_fine').val(trasformaTimestampInDataOra(annotazione.data_fine).data);
                    $('#annotazione_titolo').val(decodeHtml(annotazione.titolo));
                    $('#annotazione_testo').val(decodeHtml(annotazione.testo));

                    if (annotazione.privata == '1'){$('#nota_riservata').prop('checked', true);}
                    if (annotazione.privata == '2'){$('#nota_riservata_consiglio_classe').prop('checked', true);}

                    var items = $("#elencoClassiList").jqxDropDownList('getItems');
                    items.forEach(function (item){
                        if (item.value == annotazione.id_classe){
                            $("#elencoClassiList").jqxDropDownList('selectItem', item );
                        }
                    });

                    $('#titolo_inserisci_annotazione_agenda').hide();
                    $('#titolo_modifica_annotazione_agenda').show();
                    $('#btn_salva_inserisci_annotazione').hide();
                    $('#btn_salva_modifica_annotazione').show();
                    $('#elenco_classi_inserimento_annotazione').hide();
                    $('#elenco_classi_modifica_annotazione').show();
                }
            }
        });
    }

    function inserisciColloquio()
    {
        var toastContainer = $('#toastsContainer');
        let text = '';
        let toast = null;
        let now = new Date();

        let mese = now.getMonth()+1;
        let giorno = now.getDate();
        let ora = now.getHours();
        let minuti = now.getMinutes();

        let nowDate = now.getFullYear() + '-' + fillZero(mese) + '-' + fillZero(giorno);
        let minOraLimiteSecondi = parseInt(ora*60*60)+parseInt(minuti*60)+parseInt(limite_lezioni['limite_orario_prenotazioni']);
        let minOraLimite = fillZero(parseInt(minOraLimiteSecondi/3600))+':'+ fillZero(parseInt((minOraLimiteSecondi%3600)/60));
        
        switch (true)
        {
            case ($('#colloquio_data').val() === ''):
                text = 'Compila la data';
                creaToast(text, 'errore');
                break;
            case ($('#colloquio_data').val() < limite_lezioni['inizio']):
            case ($('#colloquio_data').val() > limite_lezioni['fine']):
                text = 'Data fuori dal periodo delle lezioni';
                creaToast(text, 'errore');
                break;
            case ($('#btn-ripeti-colloquio').val() === true && ($('#colloquio_ripeti').val() <= $('#colloquio_data').val() || $('#colloquio_ripeti').val() > limite_lezioni['fine'])):
                text = 'La data di fine ripetizione deve essere compresa tra la data del colloquio e quella di fine delle lezioni';
                creaToast(text, 'errore');
                break;
            case ($('#colloquio_ora_inizio').val() === ''):
                text = "Compila l\'ora di inizio";
                creaToast(text, 'errore');
                break;
            case ($('#colloquio_ora_fine').val() === ''):
                text = "Compila l\'ora di fine";
                creaToast(text, 'errore');
                break;
            case ($('#colloquio_data').val() === nowDate && $('#colloquio_ora_inizio').val() <= minOraLimite):
                text = 'Ora di inizio impostata dall\'amministratore troppo immediata; contattare un amministratore scolastico MasterCom';
                creaToast(text, 'errore');
                break;
            case ($('#colloquio_ora_inizio').val() >= $('#colloquio_ora_fine').val()):
                text = "L\'ora di inizio deve essere precedente all\'ora di fine";
                creaToast(text, 'errore');
                break;
            case (parseInt($('#colloquio_slot').val()) < 1):
                text = 'Deve essere disponibile almeno un posto';
                creaToast(text, 'errore');
                break;
            case (parseInt($('#colloquio_slot_riservati').val()) > parseInt($('#colloquio_slot').val())):
                text = 'I posti riservati non possono essere superiori a quelli prenotabili';
                creaToast(text, 'errore');
                break;
            default:
                document.getElementById('form_container').operazione.value = 'inserisci_colloquio';
                document.getElementById('form_container').submit();
                $('#jqxGeneralModalLoader').jqxLoader('open');
                break;
        }
        
    }

    function inserisciAnnotazioneAgenda() {
        // verifico che sia stata inserita almeno una classe
        const id_classi = document.getElementById('id_classi_annotazione').value;
        if (id_classi === '') {
            const text = 'Seleziona almeno una classe';
            creaToast(text, 'errore');
            return;
        }

        const form = document.getElementById('form_container');

        // Imposta l'operazione e verifica che sia stata impostata correttamente
        form.operazione.value = 'inserisci_annotazione_agenda';
        if (form.operazione.value !== 'inserisci_annotazione_agenda') {
            creaToast('Errore nel sistema', 'errore');
            return;
        }

        // Submit del form e apertura loader
        form.submit();
        $('#jqxGeneralModalLoader').jqxLoader('open');
    }

    function eliminaAnnotazioneAgenda(idAnnotazioneAgenda, postTxt = '')
    {
        if (confirm('Eliminare?') === true)
        {
            var current_user = document.getElementById('current_user').value;
            var current_key = document.getElementById('current_key').value;
            var db_key = document.getElementById('db_key').value;
            var tipo_utente = document.getElementById('tipo_utente').value;

            var query = {
                    current_user:  current_user,
                    current_key: current_key,
                    db_key: db_key,
                    form_tipo_utente: tipo_utente,
                    id_annotazione_agenda: idAnnotazioneAgenda,
                    form_azione: 'elimina_annotazione_agenda'
                };
            $.ajax({ type: "POST",
                url: "ajax_professore.php",
                data: query,//no need to call JSON.stringify etc... jQ does this for you
                cache: false,
                success: function(response)
                {//check response: it's always good to check server output when developing...
                },
                complete: function(response) {
                    var successDeleteText = 'Eliminazione avvenuta';
                    var errorDeleteText = '<b>Errore eliminazione!</b>';

                    if (response.responseText === '1')
                    {

                        //eliminazione avvenuta
                        if ($('#coll_'+idAnnotazioneAgenda+'_tbody').length > 0){
                            $('#coll_'+idAnnotazioneAgenda+'_tbody').fadeOut(600, function(){this.remove();});
                        }

                        if (postTxt == ''){
                            var tmp = '#annotazione_'+idAnnotazioneAgenda;
                        } else {
                            var tmp = '[id^="annotazione_'+idAnnotazioneAgenda+'"]';
                        }

                        if ($(tmp).length > 0){
                            $(tmp).animate({
                                opacity: 0,
                                height: "toggle"
                            }, 600, function() {
                                this.remove();
                            });
                        }

                        creaToast(successDeleteText, 'successo');
                    }
                    else
                    {
                        creaToast(errorDeleteText, 'errore');
                        console.log('Errore cancellazione');
                    }
                }
            });
        }
    }

    function checkInizioFineColloquioSlot(data, oraInizio, oraFine, idSlot, idDurata, idSlotMax, idSlotRiservati)
    {
        if (data != ''  &&  oraInizio != ''  &&  oraFine != ''  &&  oraInizio < oraFine){
            $('#'+idSlot).prop("disabled", false);
            $('#'+idSlotRiservati).prop("disabled", false);
            let minutiInizio = trasformaOraInMinuti(oraInizio);
            let minutiFine = trasformaOraInMinuti(oraFine);
            let durataColloquio = parseInt(minutiFine - minutiInizio);
            let posti = parseInt(durataColloquio/3);

            $('#'+idSlot).attr("max", posti);
            $('#'+idSlot).val(posti);
            $('#'+idSlotRiservati).attr("max", posti);
            $('#'+idDurata).html(durataColloquio);
            $('#'+idSlotMax).html('(max: '+posti+')');

            if ($('#'+idSlotRiservati).val() > posti){
                $('#'+idSlotRiservati).val(posti);
            }
        } else {
            $('#'+idSlot).prop("disabled", true);
            $('#'+idSlot).attr("max", 0);
            $('#'+idSlot).val(0);
            $('#'+idSlotRiservati).prop("disabled", true);
            $('#'+idSlotRiservati).attr("max", 0);
            $('#'+idSlotRiservati).val(0);
            $('#'+idDurata).html('0');
            $('#'+idSlotMax).html('');
        }
    }

    function apriModificaColloqui(idTBodyColloquio)
    {
        apriChiudiPopup('modifica_colloqui', 'sfondo_oscurato', true);
        $('#modifica_colloqui').animate({
            scrollTop: $('#'+idTBodyColloquio).offset().top - 40
        },'slow');
        let currentBGColor = $('#'+idTBodyColloquio).css('backgroundColor');
        for (var i = 0; i < 3; i++ ) {
            $('#'+idTBodyColloquio)
                .animate( { backgroundColor: "#f0ad4e" }, 600 )
                .animate( { backgroundColor: currentBGColor }, 300 );
        }
    }

    function checkValiditaModificaColloquio(idColloquio)
    {
        let pref = '#coll_'+idColloquio+"_";
        let tbody = $(pref+'tbody');
        let modificato = $(pref+'modificato');
        let data = $(pref+'data');
        let giorno = $(pref+'giorno');
        let ora_inizio = $(pref+'ora_inizio');
        let ora_fine = $(pref+'ora_fine');
        let titolo = $(pref+'titolo');
        let testo = $(pref+'testo');
        let posti = $(pref+'slot');
        let maxposti = $(pref+'maxposti');

        giorno.html(giorni[new Date(data.val()).getDay()]);

        let now = new Date();
        let mese = now.getMonth()+1;
        let giorno2 = now.getDate();
        let ora = now.getHours();
        let minuti = now.getMinutes();
        let nowDate = now.getFullYear() + '-' + fillZero(mese) + '-' + fillZero(giorno2);
        let minOraLimiteSecondi = parseInt(ora*60*60)+parseInt(minuti*60)+parseInt(limite_lezioni['limite_orario_prenotazioni']);
        let minOraLimite = fillZero(parseInt(minOraLimiteSecondi/3600))+':'+ fillZero(parseInt((minOraLimiteSecondi%3600)/60));

        let minutiInizio = trasformaOraInMinuti(ora_inizio.val());
        let minutiFine = trasformaOraInMinuti(ora_fine.val());
        let durataColloquio = parseInt(minutiFine - minutiInizio);
        let postiMaxNew = parseInt(durataColloquio/3);

        posti.attr('max', postiMaxNew);
        maxposti.html(postiMaxNew);
        console.log(posti.val());

        let toastText = '';
        switch (true){
            //data
            case (data.val() < today):
                toastText = 'ATTENZIONE! La data non può essere passata';
                tbody.css('background-color', 'rgba(255,0,0,0.15)');
                data.css('color', 'red');
                modificato.val('NO');
                creaToast(toastText, 'errore');
                break;
            case (data.val() < limite_lezioni['inizio']):
            case (data.val() > limite_lezioni['fine']):
                toastText = 'ATTENZIONE! Data fuori dal periodo delle lezioni';
                tbody.css('background-color', 'rgba(255,0,0,0.15)');
                data.css('color', 'red');
                modificato.val('NO');
                creaToast(toastText, 'errore');
                break;
            case (ora_fine.val() <= ora_inizio.val()):
                toastText = 'ATTENZIONE! Ora di inizio e fine incongruenti';
                tbody.css('background-color', 'rgba(255,0,0,0.15)');
                ora_inizio.css('color', 'red');
                ora_fine.css('color', 'red');
                modificato.val('NO');
                creaToast(toastText, 'errore');
                break;
            case (data.val() === nowDate && ora_inizio.val() <= minOraLimite):
                toastText = 'ATTENZIONE! Ora di inizio impostata dall\'amministratore troppo immediata; contattare un amministratore scolastico MasterCom';
                tbody.css('background-color', 'rgba(255,0,0,0.15)');
                ora_inizio.css('color', 'red');
                modificato.val('NO');
                creaToast(toastText, 'errore');
                break;
            case (parseInt(posti.val()) === 0 || posti.val() == ''):
                toastText = 'ATTENZIONE! Inserire almeno un posto disponibile';
                tbody.css('background-color', 'rgba(255,0,0,0.15)');
                posti.css('color', 'red');
                modificato.val('NO');
                creaToast(toastText, 'errore');
                break;
            case (parseInt(posti.val()) > postiMaxNew || postiMaxNew === 0):
                posti.val(postiMaxNew);
                if (postiMaxNew === 0){
                    toastText = 'ATTENZIONE! Intervallo di tempo troppo stretto per un colloquio, ampliarlo';
                    tbody.css('background-color', 'rgba(255,0,0,0.15)');
                    ora_inizio.css('color', 'red');
                    ora_fine.css('color', 'red');
                    posti.css('color', 'red');
                    modificato.val('NO');
                    creaToast(toastText, 'errore');
                    break;
                } else {
                    toastText = 'ATTENZIONE! Numero posti massimi ridotto per il meno tempo disponibile';
                    creaToast(toastText, 'errore');
                }
                //break omesso
            default:
                tbody.css('background-color', 'rgba(0,255,0,0.15)');
                data.css('color', 'inherit');
                ora_inizio.css('color', 'inherit');
                ora_fine.css('color', 'inherit');
                posti.css('color', 'inherit');
                modificato.val('SI');
                break;
        }
    }

    function salvaModificaColloqui()
    {
        document.getElementById('form_container').operazione.value = 'modifica_colloqui';
        document.getElementById('form_container').submit();
        $('#jqxGeneralModalLoader').jqxLoader('open');
    }

    function apriNotePrenotazioneColloquio(btn, idPrenotazione, idColloquio)
    {
        var note = $(btn).data().noteColloquio;
        var studente = $(btn).data().studenteColloquio;
        var classe = $(btn).data().classeStudente;

        $('#id_prenotazione').val(idPrenotazione);
        $('#id_annotazione_agenda').val(idColloquio);
        $('#studente_prenotazione_note').html(studente);
        $('#classe_prenotazione_note').html(classe);
        $('#note_colloquio').val(note);

        apriChiudiPopup('note_prenotazione_colloquio', 'sfondo_oscurato', true);
    }

    function apriEliminaPrenotazioneColloquio(btn, idPrenotazione, idColloquio)
    {
        var messaggio = $(btn).data().messaggioStandard;
        var studente = $(btn).data().studenteColloquio;
        var classe = $(btn).data().classeStudente;

        $('#id_prenotazione').val(idPrenotazione);
        $('#id_annotazione_agenda').val(idColloquio);
        $('#studente_prenotazione_elimina').html(studente);
        $('#classe_prenotazione_elimina').html(classe);
        $('#messaggio_elimina_prenotazione').val(messaggio);

        apriChiudiPopup('elimina_prenotazione_colloquio', 'sfondo_oscurato', true);
    }

    function confermaEliminazionePrenotazione(btn)
    {
        $('#messaggio_elimina_prenotazione').val($.trim($('#messaggio_elimina_prenotazione').val()));
        var testoMessaggio = $('#messaggio_elimina_prenotazione').val();
        if (testoMessaggio === ''){
            var testoErrore = "Il messaggio non può essere vuoto";
            creaToast(testoErrore, 'errore');
        } else {
            var r = confirm("Confermi l'eliminazione?");
            if (r){
                btn.form.operazione.value = 'elimina_prenotazione_colloquio';
                btn.form.submit();
                $('#jqxGeneralModalLoader').jqxLoader('open');
            }
        }
    }

    function liberaSlotRiservato(idSlot){
        $('#id_prenotazione').val(idSlot);
        $('#operazione').val('libera_slot_riservato');
        $('#jqxGeneralLoader').jqxLoader('open');
        $('#form_container').submit();
    }

    function riservaSlot(idSlot){
        $('#id_prenotazione').val(idSlot);
        $('#operazione').val('riserva_slot');
        $('#jqxGeneralLoader').jqxLoader('open');
        $('#form_container').submit();
    }

    function apriAssegnaSlot(idSlot){
        $('#id_prenotazione').val(idSlot);
        $('#id_studente_assegnazione').val(0);
        apriChiudiPopup('assegnazione_slot_riservato', 'sfondo_oscurato', true);
    }

    function assegnaSlot(){
        $('#operazione').val('assegna_slot');
        $('#jqxGeneralLoader').jqxLoader('open');
        $('#form_container').submit();
    }

    function accediMeetingBBB(meetingId)
    {
        $('#jqxGeneralLoader').jqxLoader('open');
        var current_user = document.getElementById('current_user').value;
		var current_key = document.getElementById('current_key').value;
		var db_key = document.getElementById('db_key').value;
		var tipo_utente = document.getElementById('tipo_utente').value;

		var query = {
				current_user:  current_user,
				current_key: current_key,
				db_key: db_key,
				form_tipo_utente: tipo_utente,
				meeting_id: meetingId,
				form_azione: 'accesso_videomeeting_bbb'
			};
		$.ajax({ type: "POST",
            url: "ajax_professore.php",
            data: query,//no need to call JSON.stringify etc... jQ does this for you
            cache: false,
            success: function(response)
            {//check response: it's always good to check server output when developing...
            },
            complete: function(response) {
                r = response.responseJSON;
                if (typeof r.url != 'undefined') {
                    window.open(r.url);
                } else {
                    creaToast(r.message, 'errore');
                }
                $('#jqxGeneralLoader').jqxLoader('close');
            }
        });
    }

    function attivaMeeting(idElemento, idElemento2, tipo)
    {
        $('#jqxGeneralModalLoader').jqxLoader('open');

        switch(tipo){
            case 'prenotazione':
                $('#id_prenotazione').val(idElemento);
                $('#id_annotazione_agenda').val(idElemento2);
                $('#operazione').val('crea_colloquio_online');
                $('#form_container').submit();
                break;
            default:
                break;
        }
    }

    function invita(uid, tipo) // uguale in registri_classe, valutare se unire in file esterno
    {
        if (tipo == 'bbb'){
            var link = 'https://' + document.location.hostname + (location.port ? ':'+location.port: '') + '/mastercom/guest-access.php?uid=' + uid;
        } else if (tipo == 'google'){
            var link = uid;
        }

        copyToClipboard(link);

        var messaggio = '';
        messaggio += link+"\n\n";
        messaggio += "Il link della pagina per l'accesso ospiti è stato copiato. Incollalo in una mail o un messaggio in modo da farlo avere alla persona interessata.";
        alert(messaggio);
    }

    $(function () {
        $('#colloquio_data, #colloquio_ora_inizio, #colloquio_ora_fine').change(function() {
            checkInizioFineColloquioSlot($('#colloquio_data').val(), $('#colloquio_ora_inizio').val(), $('#colloquio_ora_fine').val(), 'colloquio_slot', 'colloquio_durata', 'colloquio_slot_max', 'colloquio_slot_riservati');
        });

        $( "input[type=\"number\"]" ).change(function() {
            var max = parseInt($(this).attr('max'));
            var min = parseInt($(this).attr('min'));
            if ($(this).val() > max)
            {
               $(this).val(max);
            }
            else if ($(this).val() < min)
            {
               $(this).val(min);
            }
        });

        $("#nota_riservata").change(function() {
            if(this.checked) {
                $("#nota_riservata_consiglio_classe").removeAttr('checked');
            }
        });

        $("#nota_riservata_consiglio_classe").change(function() {
            if(this.checked) {
                $("#nota_riservata").removeAttr('checked');
            }
        });
    });

    function chiudiTuttiHoverMenu() {
        $('.hover-menu-dropdown').each(function() {
            $(this).fadeOut(200);
        });
    }

    var isTouchDevice = ('ontouchstart' in window) || (navigator.maxTouchPoints > 0);

    $(document).on('mouseenter', '.hover-menu-container', function() {
        if (isTouchDevice) return;
        var $dropdown = $(this).find('.hover-menu-dropdown');
        chiudiTuttiHoverMenu();
        $dropdown.stop(true, true).fadeIn(200);
    });

    $(document).on('mouseleave', '.hover-menu-container', function() {
        if (isTouchDevice) return;
        var $dropdown = $(this).find('.hover-menu-dropdown');
        $dropdown.stop(true, true).fadeOut(200);
    });

    $(document).on('click', '.hover-menu-trigger', function(e) {
        if (!isTouchDevice) return;
        e.stopPropagation();
        var $dropdown = $(this).siblings('.hover-menu-dropdown');
        var isVisible = $dropdown.is(':visible');
        chiudiTuttiHoverMenu();
        if (!isVisible) {
            $dropdown.stop(true, true).fadeIn(200);
        }
    });

    $(document).on('click', function(e) {
        if (isTouchDevice && !$(e.target).closest('.hover-menu-container').length) {
            chiudiTuttiHoverMenu();
        }
    });

    window.addEventListener("orientationchange", function() {
        //$('#agenda').css('height', '');
        //if ($('#agenda').height() > $(window.innerHeight)[0] - $('#agenda').position().top - 10){
            $('#agenda').delay(500).height($(window.innerWidth)[0] - $('#agenda').position().top - 15);
        //}
    });

    $(document).ready( function(){
            $('#message').delay(5000).fadeOut();

            if ($('#agenda').length)
            {
                $('#agenda').height($(window.innerHeight)[0] - $('#agenda').position().top - 10);

                $('#agenda').animate({
                    scrollTop: $('#intestazione_giorno_scelto').offset().top - $("#agenda").position().top
                }, 'slow');
            }

            $('#select_id_classe').removeAttr('disabled');

            //--- Calendario JQX
            $("#jqxCalendar").jqxCalendar({ width: '350px', height: '400px', enableTooltips: false, theme: 'Bootstrap', culture: 'it-IT', enableViews: false, columnHeaderHeight: 40, titleHeight: 40, showOtherMonthDays: false });
            $("#jqxCalendar").jqxCalendar('setDate', new Date());
            sistemaCalendario("jqxCalendar");
            $("#jqxCalendar").hide();
            $('#jqxCalendar').on('change', function (event)
            {
                var jsDate = new Date;
                jsDate = event.args.date;
                var type = event.args.type; // keyboard, mouse or null depending on how the date was selected.
                var input_hidden = $('#data_da_calendario');

                var dataIso = jsDate.getDate() + '/' + (jsDate.getMonth() + 1) + '/' + jsDate.getFullYear();
                input_hidden.val(dataIso);
                input_hidden[0].form.submit();
                $('#jqxGeneralLoader').jqxLoader('open');
            });
            //---

            $('#btn-ripeti-colloquio').jqxSwitchButton({ height: 23, width: 75,  checked: false, theme: 'material', onLabel: 'SI', offLabel: 'NO' });
            $('#btn-ripeti-colloquio').on('change', function(event){
                $('#cell_ripeti_colloquio').fadeToggle();
            });

            carica_classi();

            
                                    
        });
</script>


<br>

<div id="sfondo_oscurato" style="width: 100%; height: 100%; top: 0; left: 0; position: fixed; background-color: #aaa; opacity: 0.5; z-index: 2; display: none;" onclick="chiudiSfondoOscurato();"></div>

<div id="toastsContainer" class="" style="position: absolute; z-index: 6; bottom: 0px; left: 0px; padding: 10px;"></div>

<div style="position: fixed; bottom: 10px; right: 10px; z-index: 1;">
    <button type="button"
            class="btn_pieno ombra_testo noselect ripples"
            title="Torna su"
            onclick='$("#agenda").animate({ scrollTop: 0 }, "slow");'
            style="font-weight: bold;
                    font-size: 120%;
                    width: 50px;
                    height: 50px;
                    border-radius: 25px;
                    position: absolute;
                    bottom: 0px;
                    right: 0px;
                    background-color: #455A64;
                    color: white;
                    border: none;">
        &#x21A5;
    </button>
</div>
<form method='post' action='/mastercom/index.php' id="form_container">
    <div class="div_scheda_generica" align="right" style="width: 98%; color: black; font-weight: normal; z-index: 0;">
        <div style="padding: 14px 10px;  background-color: #3F51B5; color:white; font-weight: bold; display: flex; align-items: center; justify-content: space-between; z-index: 0;">
            <div class='ombra_testo' align="left" style="font-size: 120%;">
                Agenda
            </div>
            <div>
                                                        
                    <input type="button"
                           class="btn_flat_bianco ombra_testo"
                           id='btn_giorno_precedente'
                           value="&#9001;"
                           title="Mese precedente"
                           style="font-size: 110%;"
                           onclick="this.form.giorno_scelto.value='1788213600'; this.form.submit(); $('#jqxGeneralLoader').jqxLoader('open');"
                           >
                                        
                    <div style="display: inline-block;">
                        <button type="button" class="btn_pieno ripples" id="btn_calendario"
                                style="background-color: #FAFAFA; color:#3F51B5; border-radius: 32px;"
                                title="Apri il calendario"
                                onclick="apriChiudiPopup('jqxCalendar', '', true, ['btn_calendario']);">
                            Ottobre 2026
                        </button>
                        <div style="position: absolute; z-index: 1000;" id="jqxCalendar"></div>
                    </div>
                                        
                    <input
                        type="button"
                        class="btn_flat_bianco ombra_testo"
                        id='btn_giorno_successivo'
                        value="&#9002;"
                        title="Mese successivo"
                        style="font-size: 110%;"
                        onclick="this.form.giorno_scelto.value='1793487600'; this.form.submit(); $('#jqxGeneralLoader').jqxLoader('open');"
                        >
                                        <input type="hidden" name="giorno_scelto" value="1792173118">
                    <input type="hidden" name="data_da_calendario"  id="data_da_calendario" value="">
                                </div>
            <div style="display: flex; align-items: center;">
                <div class="hover-menu-container" style="position: relative; display: inline-block;">
                    <input type="button"
                           class="btn_flat_bianco accendi ombra_testo hover-menu-trigger"
                           id="btn_filtri"
                           value="Filtri"
                           style="font-size: 103%;"
                           data-hover-target="sezione_filtri">
                    
                    <div align="left" class='sfondo_bianco hover-menu-dropdown' id="sezione_filtri"
                         style="position: absolute;
                                min-width: 120px;
                                display: none;
                                border-radius: 5px;
                                font-weight: normal;
                                box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);
                                z-index: 10;">
                        <div class="padding8 nowrap">
                            <label class="pointer"><input type="checkbox" name="filtro[colloqui]" value="SI" checked onchange="filtraAgenda(this, 'class_filter_colloquio');" style="vertical-align: middle;">&nbsp;Colloqui</label>
                        </div>
                        <div class="padding8 nowrap">
                            <label class="pointer"><input type="checkbox" name="filtro[eventi]" value="SI" checked onchange="filtraAgenda(this, 'class_filter_evento');" style="vertical-align: middle;">&nbsp;Eventi</label>
                        </div>
                        <div class="padding8 nowrap">
                            <label class="pointer"><input type="checkbox" name="filtro[annotazioni_agenda]" value="SI" checked onchange="filtraAgenda(this, 'class_filter_annotazione_agenda');" style="vertical-align: middle;">&nbsp;Annotazioni agenda</label>
                        </div>
                                                <div class="padding8 nowrap">
                            <label class="pointer"><input type="checkbox" name="filtro[corsi]" value="SI"  checked  onchange="filtraAgenda(this, 'class_filter_corso'); $('#filtro_flag_corsi').val(($(this).prop('checked') ? 'SI' : 'NO'));">&nbsp;Corsi</label>
                            <input type="hidden" name="filtro[flag_corsi]" id="filtro_flag_corsi" value="SI">
                        </div>
                                            </div>
                </div>

                |
                <div class="hover-menu-container" style="position: relative; display: inline-block;">
                    <input type="button"
                           class="btn_flat_bianco accendi ombra_testo dropbtn hover-menu-trigger"
                           id="btn_inserisci"
                           value="Inserisci"
                           style="font-size: 103%;"
                           data-hover-target="sezione_inserimenti">
                    
                    <div align="left" class='sfondo_bianco dropdown-content sel_blu hover-menu-dropdown' id="sezione_inserimenti"
                         style="position: absolute;
                                min-width: 120px;
                                display: none;
                                border-radius: 5px;
                                box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);
                                z-index: 10;">
                        <a class="padding8 nowrap"
                            onclick="chiudiTuttiHoverMenu(); apriChiudiPopup('inserimento_modifica_annotazione_agenda', 'sfondo_oscurato', true); caricaDatiInserimentoAnnotazione();">
                            Annotazione
                        </a>
                        <a class="padding8 nowrap"
                           onclick="chiudiTuttiHoverMenu(); apriChiudiPopup('inserimento_colloquio', 'sfondo_oscurato', true); caricaDatiInserimentoColloquio();">
                            Colloquio
                        </a>
                    </div>
                </div>
            </div>

            <div style="width: 25%;" class='ombra_testo'>
                
                Classe:
                <select name="id_classe" class="select" id='select_id_classe' style="background-color: white; width: 80%;" onchange="this.form.submit(); $('#jqxGeneralLoader').jqxLoader('open');" disabled>
                    <option value="0">TUTTE</option>
                                    </select>
            </div>
        </div>

        
        <div class="div_scheda_generica"
                id="inserimento_modifica_annotazione_agenda"
                style="position: fixed;
                        z-index: 3;
                        width: 50%;
                        min-width: 350px;
                        left: 50%;
                        top: 50%;
                        transform: translate(-50%, -50%);
                        display: none;
                        overflow-y: auto;"
            >
            <div align="center" style="width: 100%; height: 100%;">
                <table width="95%" align="center">
                    <tr>
                        <td align="center" style="padding: 15px 10px 20px 10px; font-size: 120%;">
                            <b id="titolo_inserisci_annotazione_agenda">INSERISCI ANNOTAZIONE AGENDA</b>
                            <b id="titolo_modifica_annotazione_agenda">MODIFICA ANNOTAZIONE AGENDA</b><br>
                        </td>
                    </tr>
                    <tr>
                        <td align="center">
                            <div width="100%" style="display: flex; align-items: center; justify-content: space-around; flex-wrap: wrap;">
                                <div class='padding_cella_generica'>
                                    <br>
                                    <button type="button"
                                        class="btn_flat testo_grigio bordo_grigio_scuro btn_padding_ridotto"
                                        onclick="$('#annotazione_ora_inizio').val('00:01'); $('#annotazione_ora_fine').val('23:59');"
                                        >Tutto il giorno</button>
                                </div>
                                <div class='padding_cella_generica'>
                                    Inizio<br>
                                    <input type='time'
                                           name="annotazione_ora_inizio"
                                           id="annotazione_ora_inizio"
                                           style="border: 0.5px solid #ccc; padding: 2px;">
                                    <input type='date'
                                            placeholder="YYYY-mm-dd"
                                           name="annotazione_data_inizio"
                                           id="annotazione_data_inizio"
                                           onchange="if ($('#annotazione_data_fine').val() < $('#annotazione_data_inizio').val()){
                                                $('#annotazione_data_fine').val($('#annotazione_data_inizio').val());}"
                                           style="border: 0.5px solid #ccc; padding: 2px;">
                                </div>
                                <div class='padding_cella_generica'>
                                    Fine<br>
                                    <input type='time'
                                           name="annotazione_ora_fine"
                                           id="annotazione_ora_fine"
                                           style="border: 0.5px solid #ccc; padding: 2px;">
                                    <input type='date'
                                            placeholder="YYYY-mm-dd"
                                           name="annotazione_data_fine"
                                           id="annotazione_data_fine"
                                           style="border: 0.5px solid #ccc; padding: 2px;">
                                </div>
                                <div class='padding_cella_generica' id="elenco_classi_inserimento_annotazione">
                                    Classi
                                    <div id='elencoClassiCheckbox'></div>
                                </div>
                                <div class='padding_cella_generica' id="elenco_classi_modifica_annotazione">
                                    Classe
                                    <div id='elencoClassiList'></div>
                                </div>
                                <input type="hidden" name="annotazione_id_classi" id="id_classi_annotazione">
                                <input type="hidden" name="annotazione_conferma_festivita" id="annotazione_conferma_festivita" value="">
                                <div id="avviso_festivita_annotazione" style="display:none; width:100%; margin:10px 0; padding:10px; background-color:#fff3cd; border:1px solid #ffeeba; border-radius:4px; color:#856404; font-size:13px;"></div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td align="center" class='padding_cella_generica'>
                            <br>
                            <input type="text" name="annotazione_titolo" id='annotazione_titolo' placeholder='Titolo' style="border: 0.5px solid grey; padding: 5px; width: 95%;">
                        </td>
                    </tr>
                    <tr>
                        <td align="center" class='padding_cella_generica'>
                            <textarea name="annotazione_testo"
                                        id='annotazione_testo'
                                        rows="5"
                                        style="width: 95%; border: 0.5px solid grey; padding: 10px; font-size: 14px; font-family: inherit;"
                                        placeholder="Inserisci il testo dell'annotazione.."
                                        ></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td align="left" class='padding_cella_generica'>
                            <label>
                                <input type="checkbox" name="nota_riservata" id="nota_riservata" value="SI" style="vertical-align: middle;"
                                    oncha>
                                Riservata
                            </label>&ensp;
                            <label>
                                <input type="checkbox" name="nota_riservata_consiglio_classe" id="nota_riservata_consiglio_classe" value="SI" style="vertical-align: middle;">
                                Riservata consiglio di classe
                            </label>
                        </td>
                    </tr>
                </table>
                <div align="right" style="padding: 16px 16px 5px 16px;">
                    <br>
                    <button type="button"
                           class="btn_flat testo_grigio"
                            onclick="apriChiudiPopup('inserimento_modifica_annotazione_agenda', 'sfondo_oscurato', true);"
                            >Chiudi</button>
                    <button type="button"
                           class="btn_flat testo_bianco ripples"
                           style="background-color: #2e7d32;"
                           id="btn_salva_inserisci_annotazione"
                            onclick="inserisciAnnotazioneAgenda();"
                        >Salva</button>
                    <button type="button"
                           class="btn_flat testo_bianco ripples"
                           style="background-color: #2e7d32;"
                           id="btn_salva_modifica_annotazione"
                            onclick="document.getElementById('form_container').operazione.value = 'modifica_annotazione_agenda';
                                    document.getElementById('form_container').submit(); $('#jqxGeneralModalLoader').jqxLoader('open');"
                        >Salva</button>
                </div>
            </div>
        </div>

        
        <div class="div_scheda_generica"
                id="inserimento_colloquio"
                style="position: fixed;
                        z-index: 3;
                        width: 50%;
                        min-width: 350px;
                        max-height: 95vh;
                        left: 50%;
                        top: 50%;
                        transform: translate(-50%, -50%);
                        display: none;
                        overflow-y: auto;"
            >
            <div align="center" style="width: 100%; height: 100%;">
                <div align="center" style="padding: 15px 10px 20px 10px; font-size: 120%;">
                    <b id="titolo_inserisci_colloquio">INSERISCI COLLOQUIO</b>
                </div>
                <div>
                    <table width="95%" align="center">
                        <tr>
                            <td align="center">
                                <div width="100%" style="display: flex; align-items: center; justify-content: space-around; flex-wrap: wrap;">
                                    <div>
                                        <span style="white-space: nowrap; margin: 5px 0px; display: inline-block;">
                                        Data:
                                        &ensp;
                                        <input type='date'
                                                placeholder="YYYY-mm-dd"
                                               name="colloquio_data"
                                               id="colloquio_data"
                                               style="border: 0.5px solid #ccc; padding: 2px;">
                                        </span>
                                        &ensp;
                                        <span style="white-space: nowrap; margin: 5px 0px; display: inline-block;">
                                        dalle&ensp;
                                        <input type='time'
                                               name="colloquio_ora_inizio"
                                               id="colloquio_ora_inizio"
                                               style="border: 0.5px solid #ccc; padding: 2px;">
                                        </span>
                                        &ensp;
                                        <span style="white-space: nowrap; margin: 5px 0px; display: inline-block;">
                                        alle&ensp;
                                        <input type='time'
                                               name="colloquio_ora_fine"
                                               id="colloquio_ora_fine"
                                               style="border: 0.5px solid #ccc; padding: 2px;">
                                        </span>
                                        <span style="white-space: nowrap; margin: 5px; display: inline-block; font-size: 85%;" class="annotazione_leggera">
                                            <span id="colloquio_durata">0</span> minuti
                                        </span>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td align="center" class='padding_cella_generica'>
                                <table>
                                    <tr>
                                        <td align="right" class='padding_cella_generica'>Ripeti:</td>
                                        <td align="left" class='padding_cella_generica'><div id="btn-ripeti-colloquio"></div></td>
                                        <td align="left" class='padding_cella_generica' id="cell_ripeti_colloquio" style="display: none; padding-left: 10px;">
                                            fino al
                                            &emsp;<input type="date" placeholder="YYYY-mm-dd" name="colloquio_ripeti" id="colloquio_ripeti">
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td align="center" class='padding_cella_generica'>
                                <br>
                                <input type="text" name="colloquio_titolo" id='colloquio_titolo' placeholder='Titolo' style="border: 0.5px solid grey; padding: 5px; width: 95%;">
                            </td>
                        </tr>
                        <tr>
                            <td align="center" class='padding_cella_generica'>
                                <textarea name="colloquio_testo"
                                            id='colloquio_testo'
                                            rows="3"
                                            style="width: 95%; border: 0.5px solid grey; padding: 10px; font-size: 14px; font-family: inherit;"
                                            placeholder="Luogo e note...."
                                            ></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td align="center" class='padding_cella_generica'>
                                Posti prenotabili:
                                <input  type="number"
                                        name="colloquio_slot"
                                        id='colloquio_slot'
                                        min="0" max="0"
                                        disabled
                                        class="sfondo_bianco"
                                        style="font-size: 120%; padding: 3px; margin: 3px; font-weight: bold;"
                                        >
                                <span class="annotazione_leggera" id="colloquio_slot_max" style="font-size: 80%;"></span>
                            </td>
                        </tr>
                        <tr>
                            <td align="center" class='padding_cella_generica'>
                                di cui riservati:
                                <input  type="number"
                                        name="colloquio_slot_riservati"
                                        id='colloquio_slot_riservati'
                                        min="0" max="0"
                                        disabled
                                        >
                            </td>
                        </tr>
                                                <tr>
                            <td align="left" class='padding_cella_generica'>
                                Limita Annualità<br>
                                <span class="annotazione_leggera">(se non specificato, il colloquio vale per tutte)</span>
                                <div class="padding_cella_generica">
                                    <label class="padding_cella_generica">
                                        <input type="checkbox" name="colloquio_abbinamenti_annualita[1]" value="1">
                                        Prime
                                    </label>
                                    <label class="padding_cella_generica">
                                        <input type="checkbox" name="colloquio_abbinamenti_annualita[2]" value="2">
                                        Seconde
                                    </label>
                                    <label class="padding_cella_generica">
                                        <input type="checkbox" name="colloquio_abbinamenti_annualita[3]" value="3">
                                        Terze
                                    </label>
                                    <label class="padding_cella_generica">
                                        <input type="checkbox" name="colloquio_abbinamenti_annualita[4]" value="4">
                                        Quarte
                                    </label>
                                    <label class="padding_cella_generica">
                                        <input type="checkbox" name="colloquio_abbinamenti_annualita[5]" value="5">
                                        Quinte
                                    </label>
                                </div>

                            </td>
                        </tr>
                    </table>
                </div>
                <div class="annotazione_leggera">
                                    </div>
                <div align="right" style="padding: 16px 16px 5px 16px;">
                    <br>
                    <button type="button"
                           class="btn_flat testo_grigio"
                            onclick="apriChiudiPopup('inserimento_colloquio', 'sfondo_oscurato', true);"
                            >Chiudi</button>
                    <button type="button"
                           class="btn_flat sfondo_arancio testo_bianco ripples"
                           id="btn_salva_inserisci_colloquio"
                            onclick="inserisciColloquio();"
                        >Salva</button>
                </div>
            </div>
        </div>

        
        <div class="div_scheda_generica"
                id="modifica_colloqui"
                style="position: fixed;
                        z-index: 3;
                        width: auto;
                        max-width: 95%;
                        min-width: 350px;
                        max-height: 90vh;
                        left: 50%;
                        top: 50%;
                        transform: translate(-50%, -50%);
                        display: none;
                        overflow-y: auto;"
            >
            <div align="center" style="width: 100%; height: 100%;">
                <div align="center" style="padding: 15px 10px 20px 10px; font-size: 120%;">
                    <b id="titolo_modifica_colloqui">MODIFICA COLLOQUI</b><br>
                </div>
                <div>
                                            <div class="padding_cella_generica">
                            Non sono presenti colloqui futuri
                        </div>
                                    </div>
                <div align="right" style="padding: 16px 16px 5px 16px;">
                    <br>
                    
                    <button type="button"
                           class="btn_flat testo_grigio"
                           onclick="this.form.submit();"
                           >Annulla</button>
                    <button type="button"
                           class="btn_flat sfondo_arancio testo_bianco"
                           id="btn_salva_inserisci_colloquio"
                            onclick="salvaModificaColloqui();"
                        >Salva</button>
                </div>
            </div>
        </div>

        
        <div class="div_scheda_generica"
                id="note_prenotazione_colloquio"
                style="position: fixed;
                        z-index: 3;
                        width: max-content;
                        min-width: 300px;
                        width: 40vw;
                        max-height: 95vh;
                        left: 50%;
                        top: 50%;
                        transform: translate(-50%, -50%);
                        display: none;
                        overflow-y: auto;"
            >
            <div align="center" style="width: 100%; height: 100%;  box-sizing: border-box;" class="padding_cella_generica">
                <table width="100%">
                    <tr width="100%">
                        <td rowspan="2"
                            align="left"
                            style="font-size: 1.1em;"
                            class="padding_cella_generica bold testo_arancio">
                            <span class="padding_cella_generica bordrad5" style="background-color: rgba(255, 122, 0, 0.25);">
                                Note
                            </span>
                        </td>
                        <td align="right" id="studente_prenotazione_note" class="bold padding3" style="font-size: 1.1em;"></td>
                    </tr>
                    <tr>
                        <td align="right" id="classe_prenotazione_note" class="bold annotazione_leggera padding3" style="font-size: 1.1em;"></td>
                    </tr>
                </table>
                <div align="center" class="padding8">
                    <textarea style="width: 100%;" rows="6" id="note_colloquio" name="note_prenotazione"
                        placeholder="Qui puoi inserire note riservate, appunti relative al colloquio"
                        ></textarea>
                </div>
                <div align="right">
                    <br>
                    <button type="button"
                           class="btn_flat testo_grigio"
                            onclick="apriChiudiPopup('note_prenotazione_colloquio', 'sfondo_oscurato', true);"
                            >Annulla</button>
                    <button type="button"
                           class="btn_flat sfondo_arancio testo_bianco ripples"
                           id="btn_salva_inserisci_colloquio"
                            onclick="this.form.operazione.value='salva_note_colloquio'; this.form.submit(); $('#jqxGeneralModalLoader').jqxLoader('open');"
                        >Salva</button>
                </div>
            </div>
        </div>

        
        <div class="div_scheda_generica bordo_rosso"
                id="elimina_prenotazione_colloquio"
                style="position: fixed;
                        z-index: 3;
                        width: max-content;
                        min-width: 300px;
                        width: 40vw;
                        max-height: 95vh;
                        left: 50%;
                        top: 50%;
                        transform: translate(-50%, -50%);
                        display: none;
                        overflow-y: auto;"
            >
            <div align="center" style="width: 100%; height: 100%;  box-sizing: border-box;" class="padding_cella_generica">
                <table width="100%">
                    <tr width="100%">
                        <td rowspan="2"
                            align="left"
                            style="font-size: 1.1em;"
                            class="padding_cella_generica bold testo_rosso">
                            <span class="padding_cella_generica bordrad5" style="background-color: rgba(255, 0, 0, 0.2);">
                                Elimina Prenotazione
                            </span>
                        </td>
                        <td align="right" id="studente_prenotazione_elimina" class="bold padding3" style="font-size: 1.1em;"></td>
                    </tr>
                    <tr>
                        <td align="right" id="classe_prenotazione_elimina" class="bold annotazione_leggera padding3" style="font-size: 1.1em;"></td>
                    </tr>
                </table>
                <div align="left" class="padding6">
                    Inserisci il messaggio che verrà inviato ai genitori.
                </div>
                <div align="center" class="padding8">
                    <textarea style="width: 100%;" rows="6" id="messaggio_elimina_prenotazione" name="messaggio_elimina_prenotazione"
                        placeholder="Testo del messaggio"
                        ></textarea>
                </div>
                <div align="center" class="padding6" style="color: rgba(125, 0 ,0, 0.8);">
                    <b>Attenzione</b>: confermando verrà eliminata la prenotazione al colloquio e verrà mandato il messaggio di comunicazione tramite Messenger, sms e app (se attivi).
                </div>
                <div align="right">
                    <br>
                    <button type="button"
                           class="btn_flat testo_grigio"
                            onclick="apriChiudiPopup('elimina_prenotazione_colloquio', 'sfondo_oscurato', true);"
                            >Annulla</button>
                    <button type="button"
                           class="btn_flat sfondo_rosso testo_bianco ripples"
                           id="btn_salva_inserisci_colloquio"
                            onclick="confermaEliminazionePrenotazione(this);"
                        >Conferma</button>
                </div>
            </div>
        </div>

        
        <div class="div_scheda_generica"
                id="motivazione_cancellazione_prenotazione_colloquio"
                style="position: fixed;
                        z-index: 3;
                        width: fit-content;
                        min-width: 300px;
                        max-width: 95vw;
                        max-height: 95vh;
                        left: 50%;
                        top: 50%;
                        transform: translate(-50%, -50%);
                        display: none;
                        overflow-y: auto;"
            >
            <div align="center" style="width: 100%; height: 100%;  box-sizing: border-box;" class="padding_cella_generica">
                <button type='button'
                    class='btn_close'
                    title="Chiudi"
                    onclick="apriChiudiPopup('motivazione_cancellazione_prenotazione_colloquio', 'sfondo_oscurato', true);">&times;</button>
                <div align="left" class="padding8 bold" style="font-size: 1.1em;">
                    Motivazione inviata
                </div>
                <div align="left" id="messaggio_eliminazione" class="padding8"></div>
            </div>
        </div>

        
        <div class="div_scheda_generica"
                id="assegnazione_slot_riservato"
                style="position: fixed;
                        z-index: 3;
                        width: fit-content;
                        min-width: 300px;
                        max-width: 95vw;
                        max-height: 95vh;
                        left: 50%;
                        top: 50%;
                        transform: translate(-50%, -50%);
                        display: none;
                        overflow-y: auto;"
            >
            <div align="center" style="width: 100%; height: 100%;  box-sizing: border-box;" class="padding_cella_generica">
                <button type='button'
                    class='btn_close'
                    title="Chiudi"
                    onclick="apriChiudiPopup('assegnazione_slot_riservato', 'sfondo_oscurato', true);">&times;</button>
                <div align="left" class="padding8 bold" style="font-size: 1.1em;">
                    Assegnazione slot
                </div>
                <div align="left" class="padding8">
                    Seleziona lo studente al quale assegnare lo slot selezionato
                </div>
                <div align="left" class="padding8">
                    <select name="id_studente_assegnazione" id="id_studente_assegnazione" class="select">
                        <option value="0">- Seleziona -</option>
                                            </select>
                </div>
                                <div align="left" class="padding8">
                    <label>
                        <input type="checkbox" name="invio_messenger" value="SI" checked>
                        Invia messaggio tramite Messenger
                    </label>
                </div>
                                <div align="right" class="padding8">
                    <button type="button"
                        class="btn_flat sfondo_arancio testo_bianco ripples"
                        onclick="assegnaSlot();"
                    >Assegna</button>
                </div>
            </div>
        </div>

        <div style="overflow: scroll; -webkit-overflow-scrolling: touch;" id='agenda'>
                    
            <div style="padding: 10px; display: flex; align-items: center; justify-content: space-between; z-index: 0;" >
                <div>
                    <table style="border-collapse: collapse; border-left: 3px solid red;">
                        <tr>
                            <td rowspan="2" style="font-size: 60px; line-height: 60px; padding-left: 10px;">
                                1
                            </td>
                            <td>
                                <b>ottobre 2026</b>
                            </td>
                        </tr>
                        <tr>
                            <td align="center" style="font-size: 18px; line-height: 18px;">
                                <b>Giovedì</b>
                            </td>
                        </tr>
                    </table>
                </div>
                                <div align="right">
                                    </div>
            </div>
                            <div align="center" style="padding: 10px;">
                    <i>
                        Nessun evento o annotazione in agenda per questo giorno
                    </i>
                </div>
                                
            <div style="padding: 10px; display: flex; align-items: center; justify-content: space-between; z-index: 0;" >
                <div>
                    <table style="border-collapse: collapse; border-left: 3px solid red;">
                        <tr>
                            <td rowspan="2" style="font-size: 60px; line-height: 60px; padding-left: 10px;">
                                2
                            </td>
                            <td>
                                <b>ottobre 2026</b>
                            </td>
                        </tr>
                        <tr>
                            <td align="center" style="font-size: 18px; line-height: 18px;">
                                <b>Venerdì</b>
                            </td>
                        </tr>
                    </table>
                </div>
                                <div align="right">
                                    </div>
            </div>
                            <div align="center" style="padding: 10px;">
                    <i>
                        Nessun evento o annotazione in agenda per questo giorno
                    </i>
                </div>
                                
            <div style="padding: 10px; display: flex; align-items: center; justify-content: space-between; z-index: 0;" >
                <div>
                    <table style="border-collapse: collapse; border-left: 3px solid red;">
                        <tr>
                            <td rowspan="2" style="font-size: 60px; line-height: 60px; padding-left: 10px;">
                                3
                            </td>
                            <td>
                                <b>ottobre 2026</b>
                            </td>
                        </tr>
                        <tr>
                            <td align="center" style="font-size: 18px; line-height: 18px;">
                                <b>Sabato</b>
                            </td>
                        </tr>
                    </table>
                </div>
                                <div align="right">
                                    </div>
            </div>
                            <div align="center" style="padding: 10px;">
                    <i>
                        Nessun evento o annotazione in agenda per questo giorno
                    </i>
                </div>
                                
            <div style="padding: 10px; display: flex; align-items: center; justify-content: space-between; z-index: 0;" >
                <div>
                    <table style="border-collapse: collapse; border-left: 3px solid red;">
                        <tr>
                            <td rowspan="2" style="font-size: 60px; line-height: 60px; padding-left: 10px;">
                                4
                            </td>
                            <td>
                                <b>ottobre 2026</b>
                            </td>
                        </tr>
                        <tr>
                            <td align="center" style="font-size: 18px; line-height: 18px;">
                                <b>Domenica</b>
                            </td>
                        </tr>
                    </table>
                </div>
                                <div align="right">
                                    </div>
            </div>
                            <div align="center" style="padding: 10px;">
                    <i>
                        Nessun evento o annotazione in agenda per questo giorno
                    </i>
                </div>
                                
            <div style="padding: 10px; display: flex; align-items: center; justify-content: space-between; z-index: 0;" >
                <div>
                    <table style="border-collapse: collapse; border-left: 3px solid red;">
                        <tr>
                            <td rowspan="2" style="font-size: 60px; line-height: 60px; padding-left: 10px;">
                                5
                            </td>
                            <td>
                                <b>ottobre 2026</b>
                            </td>
                        </tr>
                        <tr>
                            <td align="center" style="font-size: 18px; line-height: 18px;">
                                <b>Lunedì</b>
                            </td>
                        </tr>
                    </table>
                </div>
                                <div align="right">
                                    </div>
            </div>
                            <div align="center" style="padding: 10px;">
                    <i>
                        Nessun evento o annotazione in agenda per questo giorno
                    </i>
                </div>
                                
            <div style="padding: 10px; display: flex; align-items: center; justify-content: space-between; z-index: 0;" >
                <div>
                    <table style="border-collapse: collapse; border-left: 3px solid red;">
                        <tr>
                            <td rowspan="2" style="font-size: 60px; line-height: 60px; padding-left: 10px;">
                                6
                            </td>
                            <td>
                                <b>ottobre 2026</b>
                            </td>
                        </tr>
                        <tr>
                            <td align="center" style="font-size: 18px; line-height: 18px;">
                                <b>Martedì</b>
                            </td>
                        </tr>
                    </table>
                </div>
                                <div align="right">
                                    </div>
            </div>
                            <div align="center" style="padding: 10px;">
                    <i>
                        Nessun evento o annotazione in agenda per questo giorno
                    </i>
                </div>
                                
            <div style="padding: 10px; display: flex; align-items: center; justify-content: space-between; z-index: 0;" >
                <div>
                    <table style="border-collapse: collapse; border-left: 3px solid red;">
                        <tr>
                            <td rowspan="2" style="font-size: 60px; line-height: 60px; padding-left: 10px;">
                                7
                            </td>
                            <td>
                                <b>ottobre 2026</b>
                            </td>
                        </tr>
                        <tr>
                            <td align="center" style="font-size: 18px; line-height: 18px;">
                                <b>Mercoledì</b>
                            </td>
                        </tr>
                    </table>
                </div>
                                <div align="right">
                                    </div>
            </div>
                            <div align="center" style="padding: 10px;">
                    <i>
                        Nessun evento o annotazione in agenda per questo giorno
                    </i>
                </div>
                                
            <div style="padding: 10px; display: flex; align-items: center; justify-content: space-between; z-index: 0;" >
                <div>
                    <table style="border-collapse: collapse; border-left: 3px solid red;">
                        <tr>
                            <td rowspan="2" style="font-size: 60px; line-height: 60px; padding-left: 10px;">
                                8
                            </td>
                            <td>
                                <b>ottobre 2026</b>
                            </td>
                        </tr>
                        <tr>
                            <td align="center" style="font-size: 18px; line-height: 18px;">
                                <b>Giovedì</b>
                            </td>
                        </tr>
                    </table>
                </div>
                                <div align="right">
                                    </div>
            </div>
                            <div align="center" style="padding: 10px;">
                    <i>
                        Nessun evento o annotazione in agenda per questo giorno
                    </i>
                </div>
                                
            <div style="padding: 10px; display: flex; align-items: center; justify-content: space-between; z-index: 0;" >
                <div>
                    <table style="border-collapse: collapse; border-left: 3px solid red;">
                        <tr>
                            <td rowspan="2" style="font-size: 60px; line-height: 60px; padding-left: 10px;">
                                9
                            </td>
                            <td>
                                <b>ottobre 2026</b>
                            </td>
                        </tr>
                        <tr>
                            <td align="center" style="font-size: 18px; line-height: 18px;">
                                <b>Venerdì</b>
                            </td>
                        </tr>
                    </table>
                </div>
                                <div align="right">
                                    </div>
            </div>
                            <div align="center" style="padding: 10px;">
                    <i>
                        Nessun evento o annotazione in agenda per questo giorno
                    </i>
                </div>
                                
            <div style="padding: 10px; display: flex; align-items: center; justify-content: space-between; z-index: 0;" >
                <div>
                    <table style="border-collapse: collapse; border-left: 3px solid red;">
                        <tr>
                            <td rowspan="2" style="font-size: 60px; line-height: 60px; padding-left: 10px;">
                                10
                            </td>
                            <td>
                                <b>ottobre 2026</b>
                            </td>
                        </tr>
                        <tr>
                            <td align="center" style="font-size: 18px; line-height: 18px;">
                                <b>Sabato</b>
                            </td>
                        </tr>
                    </table>
                </div>
                                <div align="right">
                                    </div>
            </div>
                            <div align="center" style="padding: 10px;">
                    <i>
                        Nessun evento o annotazione in agenda per questo giorno
                    </i>
                </div>
                                
            <div style="padding: 10px; display: flex; align-items: center; justify-content: space-between; z-index: 0;" >
                <div>
                    <table style="border-collapse: collapse; border-left: 3px solid red;">
                        <tr>
                            <td rowspan="2" style="font-size: 60px; line-height: 60px; padding-left: 10px;">
                                11
                            </td>
                            <td>
                                <b>ottobre 2026</b>
                            </td>
                        </tr>
                        <tr>
                            <td align="center" style="font-size: 18px; line-height: 18px;">
                                <b>Domenica</b>
                            </td>
                        </tr>
                    </table>
                </div>
                                <div align="right">
                                    </div>
            </div>
                            <div align="center" style="padding: 10px;">
                    <i>
                        Nessun evento o annotazione in agenda per questo giorno
                    </i>
                </div>
                                
            <div style="padding: 10px; display: flex; align-items: center; justify-content: space-between; z-index: 0;" >
                <div>
                    <table style="border-collapse: collapse; border-left: 3px solid red;">
                        <tr>
                            <td rowspan="2" style="font-size: 60px; line-height: 60px; padding-left: 10px;">
                                12
                            </td>
                            <td>
                                <b>ottobre 2026</b>
                            </td>
                        </tr>
                        <tr>
                            <td align="center" style="font-size: 18px; line-height: 18px;">
                                <b>Lunedì</b>
                            </td>
                        </tr>
                    </table>
                </div>
                                <div align="right">
                                    </div>
            </div>
                            <div align="center" style="padding: 10px;">
                    <i>
                        Nessun evento o annotazione in agenda per questo giorno
                    </i>
                </div>
                                
            <div style="padding: 10px; display: flex; align-items: center; justify-content: space-between; z-index: 0;" >
                <div>
                    <table style="border-collapse: collapse; border-left: 3px solid red;">
                        <tr>
                            <td rowspan="2" style="font-size: 60px; line-height: 60px; padding-left: 10px;">
                                13
                            </td>
                            <td>
                                <b>ottobre 2026</b>
                            </td>
                        </tr>
                        <tr>
                            <td align="center" style="font-size: 18px; line-height: 18px;">
                                <b>Martedì</b>
                            </td>
                        </tr>
                    </table>
                </div>
                                <div align="right">
                                    </div>
            </div>
                            <div align="center" style="padding: 10px;">
                    <i>
                        Nessun evento o annotazione in agenda per questo giorno
                    </i>
                </div>
                                
            <div style="padding: 10px; display: flex; align-items: center; justify-content: space-between; z-index: 0;" >
                <div>
                    <table style="border-collapse: collapse; border-left: 3px solid red;">
                        <tr>
                            <td rowspan="2" style="font-size: 60px; line-height: 60px; padding-left: 10px;">
                                14
                            </td>
                            <td>
                                <b>ottobre 2026</b>
                            </td>
                        </tr>
                        <tr>
                            <td align="center" style="font-size: 18px; line-height: 18px;">
                                <b>Mercoledì</b>
                            </td>
                        </tr>
                    </table>
                </div>
                                <div align="right">
                                    </div>
            </div>
                            <div align="center" style="padding: 10px;">
                    <i>
                        Nessun evento o annotazione in agenda per questo giorno
                    </i>
                </div>
                                
            <div style="padding: 10px; display: flex; align-items: center; justify-content: space-between; z-index: 0;" >
                <div>
                    <table style="border-collapse: collapse; border-left: 3px solid red;">
                        <tr>
                            <td rowspan="2" style="font-size: 60px; line-height: 60px; padding-left: 10px;">
                                15
                            </td>
                            <td>
                                <b>ottobre 2026</b>
                            </td>
                        </tr>
                        <tr>
                            <td align="center" style="font-size: 18px; line-height: 18px;">
                                <b>Giovedì</b>
                            </td>
                        </tr>
                    </table>
                </div>
                                <div align="right">
                                    </div>
            </div>
                            <div align="center" style="padding: 10px;">
                    <i>
                        Nessun evento o annotazione in agenda per questo giorno
                    </i>
                </div>
                                
            <div style="padding: 10px; display: flex; align-items: center; justify-content: space-between; z-index: 0;" id="intestazione_giorno_scelto">
                <div>
                    <table style="border-collapse: collapse; border-left: 3px solid red;">
                        <tr>
                            <td rowspan="2" style="font-size: 60px; line-height: 60px; padding-left: 10px;">
                                16
                            </td>
                            <td>
                                <b>ottobre 2026</b>
                            </td>
                        </tr>
                        <tr>
                            <td align="center" style="font-size: 18px; line-height: 18px;">
                                <b>Venerdì</b>
                            </td>
                        </tr>
                    </table>
                </div>
                                    <div align="center">
                        <b>OGGI</b>
                    </div>
                                <div align="right">
                                    </div>
            </div>
                            <div align="center" style="padding: 10px;">
                    <i>
                        Nessun evento o annotazione in agenda per questo giorno
                    </i>
                </div>
                                
            <div style="padding: 10px; display: flex; align-items: center; justify-content: space-between; z-index: 0;" >
                <div>
                    <table style="border-collapse: collapse; border-left: 3px solid red;">
                        <tr>
                            <td rowspan="2" style="font-size: 60px; line-height: 60px; padding-left: 10px;">
                                17
                            </td>
                            <td>
                                <b>ottobre 2026</b>
                            </td>
                        </tr>
                        <tr>
                            <td align="center" style="font-size: 18px; line-height: 18px;">
                                <b>Sabato</b>
                            </td>
                        </tr>
                    </table>
                </div>
                                <div align="right">
                                    </div>
            </div>
                            <div align="center" style="padding: 10px;">
                    <i>
                        Nessun evento o annotazione in agenda per questo giorno
                    </i>
                </div>
                                
            <div style="padding: 10px; display: flex; align-items: center; justify-content: space-between; z-index: 0;" >
                <div>
                    <table style="border-collapse: collapse; border-left: 3px solid red;">
                        <tr>
                            <td rowspan="2" style="font-size: 60px; line-height: 60px; padding-left: 10px;">
                                18
                            </td>
                            <td>
                                <b>ottobre 2026</b>
                            </td>
                        </tr>
                        <tr>
                            <td align="center" style="font-size: 18px; line-height: 18px;">
                                <b>Domenica</b>
                            </td>
                        </tr>
                    </table>
                </div>
                                <div align="right">
                                    </div>
            </div>
                            <div align="center" style="padding: 10px;">
                    <i>
                        Nessun evento o annotazione in agenda per questo giorno
                    </i>
                </div>
                                
            <div style="padding: 10px; display: flex; align-items: center; justify-content: space-between; z-index: 0;" >
                <div>
                    <table style="border-collapse: collapse; border-left: 3px solid red;">
                        <tr>
                            <td rowspan="2" style="font-size: 60px; line-height: 60px; padding-left: 10px;">
                                19
                            </td>
                            <td>
                                <b>ottobre 2026</b>
                            </td>
                        </tr>
                        <tr>
                            <td align="center" style="font-size: 18px; line-height: 18px;">
                                <b>Lunedì</b>
                            </td>
                        </tr>
                    </table>
                </div>
                                <div align="right">
                                    </div>
            </div>
                            <div align="center" style="padding: 10px;">
                    <i>
                        Nessun evento o annotazione in agenda per questo giorno
                    </i>
                </div>
                                
            <div style="padding: 10px; display: flex; align-items: center; justify-content: space-between; z-index: 0;" >
                <div>
                    <table style="border-collapse: collapse; border-left: 3px solid red;">
                        <tr>
                            <td rowspan="2" style="font-size: 60px; line-height: 60px; padding-left: 10px;">
                                20
                            </td>
                            <td>
                                <b>ottobre 2026</b>
                            </td>
                        </tr>
                        <tr>
                            <td align="center" style="font-size: 18px; line-height: 18px;">
                                <b>Martedì</b>
                            </td>
                        </tr>
                    </table>
                </div>
                                <div align="right">
                                    </div>
            </div>
                            <div align="center" style="padding: 10px;">
                    <i>
                        Nessun evento o annotazione in agenda per questo giorno
                    </i>
                </div>
                                
            <div style="padding: 10px; display: flex; align-items: center; justify-content: space-between; z-index: 0;" >
                <div>
                    <table style="border-collapse: collapse; border-left: 3px solid red;">
                        <tr>
                            <td rowspan="2" style="font-size: 60px; line-height: 60px; padding-left: 10px;">
                                21
                            </td>
                            <td>
                                <b>ottobre 2026</b>
                            </td>
                        </tr>
                        <tr>
                            <td align="center" style="font-size: 18px; line-height: 18px;">
                                <b>Mercoledì</b>
                            </td>
                        </tr>
                    </table>
                </div>
                                <div align="right">
                                    </div>
            </div>
                            <div align="center" style="padding: 10px;">
                    <i>
                        Nessun evento o annotazione in agenda per questo giorno
                    </i>
                </div>
                                
            <div style="padding: 10px; display: flex; align-items: center; justify-content: space-between; z-index: 0;" >
                <div>
                    <table style="border-collapse: collapse; border-left: 3px solid red;">
                        <tr>
                            <td rowspan="2" style="font-size: 60px; line-height: 60px; padding-left: 10px;">
                                22
                            </td>
                            <td>
                                <b>ottobre 2026</b>
                            </td>
                        </tr>
                        <tr>
                            <td align="center" style="font-size: 18px; line-height: 18px;">
                                <b>Giovedì</b>
                            </td>
                        </tr>
                    </table>
                </div>
                                <div align="right">
                                    </div>
            </div>
                            <div align="center" style="padding: 10px;">
                    <i>
                        Nessun evento o annotazione in agenda per questo giorno
                    </i>
                </div>
                                
            <div style="padding: 10px; display: flex; align-items: center; justify-content: space-between; z-index: 0;" >
                <div>
                    <table style="border-collapse: collapse; border-left: 3px solid red;">
                        <tr>
                            <td rowspan="2" style="font-size: 60px; line-height: 60px; padding-left: 10px;">
                                23
                            </td>
                            <td>
                                <b>ottobre 2026</b>
                            </td>
                        </tr>
                        <tr>
                            <td align="center" style="font-size: 18px; line-height: 18px;">
                                <b>Venerdì</b>
                            </td>
                        </tr>
                    </table>
                </div>
                                <div align="right">
                                    </div>
            </div>
                            <div align="center" style="padding: 10px;">
                    <i>
                        Nessun evento o annotazione in agenda per questo giorno
                    </i>
                </div>
                                
            <div style="padding: 10px; display: flex; align-items: center; justify-content: space-between; z-index: 0;" >
                <div>
                    <table style="border-collapse: collapse; border-left: 3px solid red;">
                        <tr>
                            <td rowspan="2" style="font-size: 60px; line-height: 60px; padding-left: 10px;">
                                24
                            </td>
                            <td>
                                <b>ottobre 2026</b>
                            </td>
                        </tr>
                        <tr>
                            <td align="center" style="font-size: 18px; line-height: 18px;">
                                <b>Sabato</b>
                            </td>
                        </tr>
                    </table>
                </div>
                                <div align="right">
                                    </div>
            </div>
                            <div align="center" style="padding: 10px;">
                    <i>
                        Nessun evento o annotazione in agenda per questo giorno
                    </i>
                </div>
                                
            <div style="padding: 10px; display: flex; align-items: center; justify-content: space-between; z-index: 0;" >
                <div>
                    <table style="border-collapse: collapse; border-left: 3px solid red;">
                        <tr>
                            <td rowspan="2" style="font-size: 60px; line-height: 60px; padding-left: 10px;">
                                25
                            </td>
                            <td>
                                <b>ottobre 2026</b>
                            </td>
                        </tr>
                        <tr>
                            <td align="center" style="font-size: 18px; line-height: 18px;">
                                <b>Domenica</b>
                            </td>
                        </tr>
                    </table>
                </div>
                                <div align="right">
                                    </div>
            </div>
                            <div align="center" style="padding: 10px;">
                    <i>
                        Nessun evento o annotazione in agenda per questo giorno
                    </i>
                </div>
                                
            <div style="padding: 10px; display: flex; align-items: center; justify-content: space-between; z-index: 0;" >
                <div>
                    <table style="border-collapse: collapse; border-left: 3px solid red;">
                        <tr>
                            <td rowspan="2" style="font-size: 60px; line-height: 60px; padding-left: 10px;">
                                26
                            </td>
                            <td>
                                <b>ottobre 2026</b>
                            </td>
                        </tr>
                        <tr>
                            <td align="center" style="font-size: 18px; line-height: 18px;">
                                <b>Lunedì</b>
                            </td>
                        </tr>
                    </table>
                </div>
                                <div align="right">
                                    </div>
            </div>
                            <div align="center" style="padding: 10px;">
                    <i>
                        Nessun evento o annotazione in agenda per questo giorno
                    </i>
                </div>
                                
            <div style="padding: 10px; display: flex; align-items: center; justify-content: space-between; z-index: 0;" >
                <div>
                    <table style="border-collapse: collapse; border-left: 3px solid red;">
                        <tr>
                            <td rowspan="2" style="font-size: 60px; line-height: 60px; padding-left: 10px;">
                                27
                            </td>
                            <td>
                                <b>ottobre 2026</b>
                            </td>
                        </tr>
                        <tr>
                            <td align="center" style="font-size: 18px; line-height: 18px;">
                                <b>Martedì</b>
                            </td>
                        </tr>
                    </table>
                </div>
                                <div align="right">
                                    </div>
            </div>
                            <div align="center" style="padding: 10px;">
                    <i>
                        Nessun evento o annotazione in agenda per questo giorno
                    </i>
                </div>
                                
            <div style="padding: 10px; display: flex; align-items: center; justify-content: space-between; z-index: 0;" >
                <div>
                    <table style="border-collapse: collapse; border-left: 3px solid red;">
                        <tr>
                            <td rowspan="2" style="font-size: 60px; line-height: 60px; padding-left: 10px;">
                                28
                            </td>
                            <td>
                                <b>ottobre 2026</b>
                            </td>
                        </tr>
                        <tr>
                            <td align="center" style="font-size: 18px; line-height: 18px;">
                                <b>Mercoledì</b>
                            </td>
                        </tr>
                    </table>
                </div>
                                <div align="right">
                                    </div>
            </div>
                            <div align="center" style="padding: 10px;">
                    <i>
                        Nessun evento o annotazione in agenda per questo giorno
                    </i>
                </div>
                                
            <div style="padding: 10px; display: flex; align-items: center; justify-content: space-between; z-index: 0;" >
                <div>
                    <table style="border-collapse: collapse; border-left: 3px solid red;">
                        <tr>
                            <td rowspan="2" style="font-size: 60px; line-height: 60px; padding-left: 10px;">
                                29
                            </td>
                            <td>
                                <b>ottobre 2026</b>
                            </td>
                        </tr>
                        <tr>
                            <td align="center" style="font-size: 18px; line-height: 18px;">
                                <b>Giovedì</b>
                            </td>
                        </tr>
                    </table>
                </div>
                                <div align="right">
                                    </div>
            </div>
                            <div align="center" style="padding: 10px;">
                    <i>
                        Nessun evento o annotazione in agenda per questo giorno
                    </i>
                </div>
                                
            <div style="padding: 10px; display: flex; align-items: center; justify-content: space-between; z-index: 0;" >
                <div>
                    <table style="border-collapse: collapse; border-left: 3px solid red;">
                        <tr>
                            <td rowspan="2" style="font-size: 60px; line-height: 60px; padding-left: 10px;">
                                30
                            </td>
                            <td>
                                <b>ottobre 2026</b>
                            </td>
                        </tr>
                        <tr>
                            <td align="center" style="font-size: 18px; line-height: 18px;">
                                <b>Venerdì</b>
                            </td>
                        </tr>
                    </table>
                </div>
                                <div align="right">
                                    </div>
            </div>
                            <div align="center" style="padding: 10px;">
                    <i>
                        Nessun evento o annotazione in agenda per questo giorno
                    </i>
                </div>
                                
            <div style="padding: 10px; display: flex; align-items: center; justify-content: space-between; z-index: 0;" >
                <div>
                    <table style="border-collapse: collapse; border-left: 3px solid red;">
                        <tr>
                            <td rowspan="2" style="font-size: 60px; line-height: 60px; padding-left: 10px;">
                                31
                            </td>
                            <td>
                                <b>ottobre 2026</b>
                            </td>
                        </tr>
                        <tr>
                            <td align="center" style="font-size: 18px; line-height: 18px;">
                                <b>Sabato</b>
                            </td>
                        </tr>
                    </table>
                </div>
                                <div align="right">
                                    </div>
            </div>
                            <div align="center" style="padding: 10px;">
                    <i>
                        Nessun evento o annotazione in agenda per questo giorno
                    </i>
                </div>
                            </div>
    </div>

    <input type='hidden' name='form_stato' value='professore'>
    <input type='hidden' name='stato_principale' value='agenda'>
    <input type='hidden' name='stato_secondario' id='stato_secondario' value=''>
    <input type='hidden' name='operazione' id="operazione" value=''>
    <input type='hidden' name='id_annotazione_agenda' id="id_annotazione_agenda" value=''>
    <input type='hidden' name='id_prenotazione' id="id_prenotazione" value=''>
    <input type="hidden" name="colloquio_elimina_codice_gruppo" id="colloquio_elimina_codice_gruppo">
    <input type='hidden' name='current_user' id='current_user' value='3000133'>
    <input type='hidden' name='current_key' id='current_key' value='eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1aWQiOiJtY3VzZXJfMTc0NzM4Mzc2OS43NjQxNjg0NjFiODVfbWF1eHRvcmlubyIsInR5cGUiOiJ1c2VyIiwidGltZSI6MTc5MjE3MzA4NiwiZGF0ZSI6IjE2XC8xMFwvMjAyNiAxOTo1MSIsImV4cGlyYXRpb24iOjE3OTQ3NjUwODZ9.RekMTukmkOW_DySFK9Z7_rijwAqDBWEFHq3l5mQhTfM'>
    <input type='hidden' id='db_key' value='mastercom_2026_2027'>
    <input type='hidden' id='tipo_utente' value='professore'>
</form>