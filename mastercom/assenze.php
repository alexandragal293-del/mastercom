<!DOCTYPE html>
<html lang="it">
    <head>
        <title>Assenze</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="google" value="notranslate">
        <link rel="shortcut icon" type="image/x-icon" href="icone/mastercom.ico">
        <link rel="stylesheet" type="text/css" href="css/jquery-ui-1.8.16.custom.css" />
        <link rel="stylesheet" href="css/style.css">
        <script src="https://accounts.google.com/gsi/client" async defer></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jsrsasign/8.0.20/jsrsasign-all-min.js"></script>
        
        <script type="text/javascript" src="libs/jquery/jquery-3.7.1.min.js"></script>
        <script type="text/javascript" src="libs/jquery-ui-1.14.1/jquery-ui.min.js"></script>
        <script type="text/javascript" src="javascript/messenger.js?v=26.1.39"></script>
        <script type="text/javascript" src="/mastertek-api/ckeditor-mastercom/ckeditor.js"></script>
        <script type="text/javascript" src="javascript/anylink.js?v=26.1.39"></script>
        <script type="text/javascript" src="javascript/microsoft.js?v=26.1.39"></script>
        <script type="text/javascript" src="javascript/professore/include_funzioni_registro.js?v=26.1.39"></script>
        <script type="text/javascript" src="javascript/professore/ore_docenti_popup.js?v=26.1.39"></script>

		<link rel="stylesheet" href="libs/jqwidgets/styles/jqx.base.css" type="text/css" />
		<link rel="stylesheet" href="libs/jqwidgets/styles/jqx.darkblue.css" type="text/css" />
        <link rel="stylesheet" href="libs/jqwidgets/styles/jqx.bootstrap.css" type="text/css" />
		<link rel="stylesheet" href="libs/jqwidgets/styles/jqx.office.css" type="text/css" />
		<link rel="stylesheet" href="libs/jqwidgets/styles/jqx.metro.css" type="text/css" />
		<link rel="stylesheet" href="libs/jqwidgets/styles/jqx.material.css" type="text/css" />
        <link href="assets/plugins/font-awesome/5.0/css/fontawesome-all.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="assets/fontawesome-free-5.5.0-web/css/all.css">
		<!--link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"-->

		<script type="text/javascript" src="libs/jqwidgets/jqx-all.js"></script>
		<script type="text/javascript" src="libs/jqwidgets/globalization/globalize.js"></script>
        <script type="text/javascript" src="libs/jqwidgets/globalization/globalize.culture.it-IT.js"></script>

		<!--  Questo pezzo di javascript ha il compito di monitorare il tempo di caricamento complessivo di una pagina. In caso di login, invia l'informazione ad un webservice ajax per essere loggato nel db ed effettuare statistichee monitoraggio omogeneo del tempo di esecuzione delle pagine. -->
	   	<script type="text/javascript">
			var login_iniziale 	= '';
			var current_user 	= '3000133';
			var current_key 	= 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1aWQiOiJtY3VzZXJfMTc0NzM4Mzc2OS43NjQxNjg0NjFiODVfbWF1eHRvcmlubyIsInR5cGUiOiJ1c2VyIiwidGltZSI6MTc5MjMzMjUwNCwiZGF0ZSI6IjE4XC8xMFwvMjAyNiAxNjowOCIsImV4cGlyYXRpb24iOjE3OTQ5MjQ1MDR9.4Tb8M51hkMcHMXIjmrbT3JwEPIJF9ueuOQkB6_7OUYc';
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

                $("form").append("<input type='hidden' name='st' value='1792332525475'>");

                
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
        <link type="text/css" rel="stylesheet" href="css/dhtmlgoodies_calendar.css?random=20051112" media="screen" />
        <script type="text/javascript" src="javascript/dhtmlgoodies_calendar.js?random=20060118"></script>
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
                <b>Professore - Assenze</b>
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
                       style="color: yellow;"
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
                                                            
                                <img src='icone/quaderno/messaggi.svg'
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
            <input type='hidden' name='current_key' id='current_key' value='eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1aWQiOiJtY3VzZXJfMTc0NzM4Mzc2OS43NjQxNjg0NjFiODVfbWF1eHRvcmlubyIsInR5cGUiOiJ1c2VyIiwidGltZSI6MTc5MjMzMjUwNCwiZGF0ZSI6IjE4XC8xMFwvMjAyNiAxNjowOCIsImV4cGlyYXRpb24iOjE3OTQ5MjQ1MDR9.4Tb8M51hkMcHMXIjmrbT3JwEPIJF9ueuOQkB6_7OUYc'>
            <input type='hidden' id='db_key' value='mastercom_2026_2027'>
            <input type='hidden' id='tipo_utente' value='professore'>
            <input type='hidden' name='tipo_accesso'>
        </form>

        <form id="btn-messenger2" method="POST" target='_blank' action="/mastercom/index.php">
            <input type='hidden' name='stato_principale' value='messenger'>
            <input type='hidden' name='form_stato' value='professore'>
            <input type='hidden' name='current_user' value='3000133'>
            <input type='hidden' name='current_key' value='eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1aWQiOiJtY3VzZXJfMTc0NzM4Mzc2OS43NjQxNjg0NjFiODVfbWF1eHRvcmlubyIsInR5cGUiOiJ1c2VyIiwidGltZSI6MTc5MjMzMjUwNCwiZGF0ZSI6IjE4XC8xMFwvMjAyNiAxNjowOCIsImV4cGlyYXRpb24iOjE3OTQ5MjQ1MDR9.4Tb8M51hkMcHMXIjmrbT3JwEPIJF9ueuOQkB6_7OUYc'>
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
    var selezione_abilitata = true;
    var giorni_festivi = JSON.parse('["2026-09-06","2026-09-13","2026-09-20","2026-09-27","2026-10-04","2026-10-11","2026-10-18","2026-10-25","2026-11-01","2026-11-08","2026-11-15","2026-11-22","2026-11-29","2026-12-06","2026-12-08","2026-12-13","2026-12-20","2026-12-24","2026-12-25","2026-12-26","2026-12-27","2026-12-28","2026-12-29","2026-12-30","2026-12-31","2027-01-01","2027-01-02","2027-01-03","2027-01-04","2027-01-05","2027-01-06","2027-01-07","2027-01-08","2027-01-09","2027-01-10","2027-01-17","2027-01-24","2027-01-31","2027-02-07","2027-02-14","2027-02-21","2027-02-26","2027-02-27","2027-02-28","2027-03-01","2027-03-07","2027-03-14","2027-03-21","2027-03-28","2027-04-04","2027-04-11","2027-04-14","2027-04-15","2027-04-16","2027-04-17","2027-04-18","2027-04-19","2027-04-25","2027-05-01","2027-05-02","2027-05-09","2027-05-16","2027-05-23","2027-05-30","2027-06-02","2027-06-06","2027-06-09","2027-06-10","2027-06-11","2027-06-12","2027-06-13","2027-06-14","2027-06-15","2027-06-16","2027-06-17","2027-06-18","2027-06-19","2027-06-20","2027-06-21","2027-06-22","2027-06-23","2027-06-24","2027-06-25","2027-06-26","2027-06-27","2027-06-28","2027-06-29","2027-06-30","2027-07-01","2027-07-02","2027-07-03","2027-07-04","2027-07-05","2027-07-06","2027-07-07","2027-07-08","2027-07-09","2027-07-10","2027-07-11","2027-07-12","2027-07-13","2027-07-14","2027-07-15","2027-07-16","2027-07-17","2027-07-18","2027-07-19","2027-07-20","2027-07-21","2027-07-22","2027-07-23","2027-07-24","2027-07-25","2027-07-26","2027-07-27","2027-07-28","2027-07-29","2027-07-30","2027-07-31","2027-08-01","2027-08-08","2027-08-12","2027-08-13","2027-08-14","2027-08-15","2027-08-16","2027-08-17","2027-08-18","2027-08-19","2027-08-20","2027-08-21","2027-08-22","2027-08-23","2027-08-24","2027-08-25","2027-08-26","2027-08-27","2027-08-28","2027-08-29","2027-08-30","2027-08-31"]');
    var giustificazioni_abilitate = "";
    var inserimento_modifica_eliminazione = "";

    $('#modal-open').on("change", function (e)
    {
        var body = $('#body')[0];

        if (this.value === 'SI')
        {
            body.style.overflow='hidden';
            $('#btn_menu_utente').css("pointer-events", "none");
            $('#btn_chiudi_studente').attr("disabled", true);
        }
        else
        {
            body.style.overflow='visible';
            $('#btn_menu_utente').css("pointer-events", "auto");
            $('#btn_chiudi_studente').attr("disabled", false);
            $('#menu_options_popup').fadeOut(50, function(){
                $(this).remove();
            });
        }
    });

    function chiudiSfondoTrasparente()
    {
        $('#modal-open').val('NO').trigger('change');
        $('#sfondo_trasparente').fadeOut();
    }

    function chiudiSfondoOscurato()
    {
        $('#modal-open').val('NO').trigger('change');
        $('#sfondo_oscurato').fadeOut();
        $('#nuova_assenza').fadeOut();
        $('#nuova_assenza_dad').fadeOut();
        $('[data-tipo="popup_dad"]').fadeOut();
    }

    function verificaFestivo(data_input) {
        if (giorni_festivi.indexOf(data_input) > -1){
            return true;
        } else {
            return false;
        }
    }

    function settaMotivazione(select, idInputMotivazione){
        var motivazione = $(select).find(':selected').text();
        var inputText = $(select).parent().children('input[type="text"]');

        if (motivazione == 'Altro'){
            $(inputText).show().val('Altro').select();
            $('#'+idInputMotivazione).val('Altro').trigger('change');
        } else {
            $(inputText).hide();
            $('#'+idInputMotivazione).val(motivazione).trigger('change');
        }        
    }

    function settaMotivazionePersonalizzata(input, idInputMotivazione){
        var motivazione = $(input).val();
        $('#'+idInputMotivazione).val(motivazione).trigger('change');
    }

    
    function apriMenuAssenze(span, idAssenza, tipoGiustifica)
    {
        if (selezione_abilitata === true)
        {
            $('#menu_options_popup').remove();
            var btnPosition = span.getBoundingClientRect();
            var menuWidth = 100;
            var top = btnPosition['top']+$(window).scrollTop()-30;
            var left = btnPosition['left']-menuWidth - 5;

            if (inserimento_modifica_eliminazione == 'NO'){ top += 20; }

            if (parseInt(tipoGiustifica) == 0){
                var testoGiustifica = "Giustifica";
            } else {
                var testoGiustifica = "Togli Giust.";
            }

            var assenzaDiDettaglioStudente = $(span).data('assenzaDettaglio');

            if ($('#assenze_studente_specifico').length > 0 && assenzaDiDettaglioStudente == 'SI'){
                // dettaglio studente presente -> devo settare l'id studente nelle operazioni perche' ricompaia
                $('#id_studente').val($('#id_studente_dettaglio_tmp').val());
            } else {
                $('#id_studente').val('');
            }

            var options = "<div id='menu_options_popup' align='left' style='position: absolute; z-index: 3; width: "+menuWidth+"px; top: "+top+"px; left: "+left+"px;' class='div_scheda_generica'>"
                            + "<div class='menu_option evidenzia_menu_option pointer noselect' onclick='$(\"#id_assenza\").val("+idAssenza+"); $(\"#operazione\").val(\"modifica_giustificazione\"); $(\"#form_container\").submit(); $(\"#jqxGeneralModalLoader\").jqxLoader(\"open\"); chiudiSfondoTrasparente();'>"+testoGiustifica+"</div>";
            if (inserimento_modifica_eliminazione == 'SI'){
            options +=      "<div class='menu_option evidenzia_menu_option pointer noselect'"
                                + "onclick='apriModificaAssenza(\""+idAssenza+"\", \""+assenzaDiDettaglioStudente+"\");'"
                            + ">Modifica</div>"
                            + "<div class='menu_option evidenzia_menu_option pointer noselect' "
                                + "onclick=\"if (confirm('Eliminare la assenza?') === true)"
                                + "{ $('#id_assenza').val("+idAssenza+"); $('#operazione').val('elimina_assenza'); $('#form_container').submit(); $('#jqxGeneralModalLoader').jqxLoader('open'); chiudiSfondoTrasparente();}\""
                            + ">Elimina</div>"
            }
            options +=      "</div>";

            $('#body').append(options);
            $('#sfondo_trasparente').fadeIn();
        } else {
            var info = "Non disponi dei permessi necessari per effettuare operazioni";
            creaToast(info, 'info');
        }
    }
    

    function checkAssenza(fonte)
    {
        //fonte = inserimento o modifica in base a che si tratti di un inserimento di una nuova assenza o della modifica di una gia' presente
        switch (true){
            case ($('#select_studente').val() == '' && fonte == 'inserimento'):
                var errore = "Nessuno studente inserito";
                creaToast(errore, 'error');
                break;
            case ($('#id_studente_modifica_assenza').val() == '' && fonte == 'modifica'):
                var errore = "Errore, studente non trovato";
                creaToast(errore, 'error');
                break;
            case ($('#data_nuova_assenza').val() == ''):
                var errore = "Inserire la data";
                creaToast(errore, 'error');
                break;
            case (verificaFestivo($('#data_nuova_assenza').val()) !== false):
                var errore = "Giorno festivo, impossibile inserire assenza";
                creaToast(errore, 'error');
                break;
            case (['2','3','8','9','12','18'].indexOf($('#tipo_nuova_assenza').val()) > -1 && $('#ora_nuova_assenza').val() == ''):
                var errore = "Inserire l'ora";
                creaToast(errore, 'error');
                break;
            case ($('#flag_non_calcolata').length > 0 && $('#flag_non_calcolata').is(':checked') && ($('#select_motivazione_nc').val() == '' || $('#select_motivazione_nc').val() == null)):
                var errore = "Selezionare la motivazione per l'assenza non calcolata";
                creaToast(errore, 'error');
                break;
            default:
                if (fonte == 'inserimento'){
                    $("#operazione").val("inserisci_assenza");
                    if ($('#assenze_studente_specifico').length > 0 && $('#id_studente_dettaglio_tmp').val() == $('#select_studente').val()){
                        $('#id_studente').val($('#id_studente_dettaglio_tmp').val());
                    }
                } else if (fonte == 'modifica'){
                    $("#operazione").val("modifica_assenza");
                }
                $("#form_container").submit();
                $('#jqxGeneralModalLoader').jqxLoader('open');
                break;
        }
    }

    function toggleNonCalcolata(checkbox){
        if (checkbox.checked){
            $('#nuova_assenza_non_calcolata').val('SI');
            $('#select_motivazione_nc').show();
            $('#giustificazione_nuova_assenza').val('1');
            $('#select_motivazione').val('').trigger('change');
            $('#motivazione_altro').val('').hide();
            $('#motivazione_giustificazione').val('');
        } else {
            $('#nuova_assenza_non_calcolata').val('');
            $('#select_motivazione_nc').val('').hide();
            $('#motivazione_giustificazione').val('');
        }
    }

    function settaMotivazioneNc(select){
        var val = $(select).val();
        $('#motivazione_giustificazione').val(val);
    }

    function apriInserisciAssenza(){
        apriChiudiPopup('nuova_assenza', 'sfondo_oscurato', true);
        $('#titolo_inserisci_assenza').show();
        $('#titolo_modifica_assenza').hide();
        $('#btn_inserisci_assenza').show();
        $('#btn_modifica_assenza').hide();
        $('#select_studente').show();
        $('#btn_apri_inserisci_dad').show();
        $('#nome_studente_testo').hide();
        $('#select_studente').val('');
        $('#id_studente_modifica_assenza').val('');
        $('#data_nuova_assenza').val('');
        $('#tipo_nuova_assenza').val('1');
        $('#ora_nuova_assenza').val('');
        $('#giustificazione_nuova_assenza').val('1');

        $("#select_motivazione").val("").trigger("change");

        if ($('#flag_non_calcolata').length > 0){
            $('#flag_non_calcolata').prop('checked', false);
            $('#select_motivazione_nc').val('').hide();
            $('#nuova_assenza_non_calcolata').val('');
        }

        $('#data_nuova_assenza').val(trasformaTimestampInDataOra( new Date() / 1000)['data']);

        $('#id_studente').val('');
    }

    function apriModificaAssenza(idAssenza, assenzaDiDettaglioStudente){
        chiudiSfondoTrasparente();
        apriChiudiPopup('nuova_assenza', 'sfondo_oscurato', true);
        $('#titolo_inserisci_assenza').hide();
        $('#titolo_modifica_assenza').show();
        $('#btn_inserisci_assenza').hide();
        $('#btn_modifica_assenza').show();
        $('#select_studente').hide();
        $('#btn_apri_inserisci_dad').hide();
        $('#nome_studente_testo').show().html('');

        var datiAssenza = (assenzaDiDettaglioStudente == 'NO') ? $('#assenza_'+idAssenza).data('infoAssenza') : $('#assenza_studente_'+idAssenza).data('infoAssenza');
        $('#id_assenza').val(idAssenza);

        $('#nome_studente_testo').html(datiAssenza.cognome+' '+datiAssenza.nome);
        $('#id_studente_modifica_assenza').val(datiAssenza.id_studente);
        $('#data_nuova_assenza').val(datiAssenza.data_iso);
        $('#tipo_nuova_assenza').val(datiAssenza.tipo_assenza);
        $('#ora_nuova_assenza').val(datiAssenza.orario);
        $('#giustificazione_nuova_assenza').val(datiAssenza.tipo_giustificazione);

        if (!datiAssenza.motivazione || datiAssenza.motivazione == ''){
            $("#select_motivazione").val("").trigger("change");
        } else {
            var motivazionePresente = false;
            var optionsSelectMotivazioni = $("#select_motivazione > option");
            optionsSelectMotivazioni.each(function (index, item){
                var text = $(item).text();
                if (text == datiAssenza.motivazione){
                    motivazionePresente = true;
                    $("#select_motivazione").val(text).trigger("change");
                }
            });
            if (!motivazionePresente){
                $("#select_motivazione").val('Altro').trigger("change");
                $("#motivazione_altro").val(datiAssenza.motivazione).trigger("change");
            }
        }

        if ($('#flag_non_calcolata').length > 0){
            var eNc = (datiAssenza.esclusione_calcolo_monteore == 1 || datiAssenza.esclusione_calcolo_monteore == '1');
            $('#flag_non_calcolata').prop('checked', eNc);
            if (eNc){
                $('#nuova_assenza_non_calcolata').val('SI');
                $('#select_motivazione_nc').show();
                $('#select_motivazione').val('').trigger('change');
                $('#motivazione_altro').val('').hide();
                var motNcTrovata = false;
                $('#select_motivazione_nc > option').each(function(i, item){
                    if ($(item).val() == datiAssenza.motivazione){
                        motNcTrovata = true;
                    }
                });
                if (motNcTrovata){
                    $('#select_motivazione_nc').val(datiAssenza.motivazione);
                    $('#motivazione_giustificazione').val(datiAssenza.motivazione);
                } else {
                    $('#select_motivazione_nc').val('');
                    $('#motivazione_giustificazione').val('');
                }
            } else {
                $('#nuova_assenza_non_calcolata').val('');
                $('#select_motivazione_nc').val('').hide();
            }
        }
    }

    function apriModificaAssenzaDad(btn){
        var td = $(btn).parent();
        $(btn).hide();

        td.children("div[data-type='container']").fadeIn();
        td.find("input").removeAttr("disabled");
    }

    function annullaModificaDad(btn){
        var td = $(btn).parent().parent().parent();
        td.find("input").each(function(i){        
            var $t = $(this);
            $t.val($t.data("original-value"));
            $t.attr("disabled", true);
        });
        td.children("div[data-type='container']").fadeOut();
        td.find("button:first").fadeIn();
    }

    function modificaAssenzaDad(idAssenza, origine = ''){
        var operazione = (origine == 'studente') ? 'modifica_assenza_dad_studente' : 'modifica_assenza_dad';

        if (typeof $('#id_studente_dettaglio_tmp').val() != 'undefined'){
            $('#id_studente').val($('#id_studente_dettaglio_tmp').val());
        }

        $('#id_assenza').val(idAssenza);
        $('#operazione').val(operazione);
        $('#jqxGeneralModalLoader').jqxLoader('open');
        $('#form_container').submit();
    }

    function eliminaAssenzaDad(idAssenza){
        if (confirm("Eliminare?")){
            if (typeof $('#id_studente_dettaglio_tmp').val() != 'undefined'){
                $('#id_studente').val($('#id_studente_dettaglio_tmp').val());
            }

            $('#id_assenza').val(idAssenza);
            $('#operazione').val('elimina_assenza_dad');
            $('#jqxGeneralModalLoader').jqxLoader('open');
            $('#form_container').submit();
        }
    }

    function apriFormInserimentoDad(){
        //var d = new Date();
        //var data = trasformaTimestampInDataOra(d.getTime()/1000);
        //$('#data_nuova_assenza_dad').val(data.data);
        $('#data_nuova_assenza_dad').val($("#data_nuova_assenza").val());

        $("#tab_orario_dad tr").remove();

        if (parseInt($("#select_studente").val()) > 0){
            $('#select_studente_dad').val($('#select_studente').val());
        } else {
            $('#select_studente_dad').val($('#select_studente_dad option:first').val());
        }

        $('#nuova_assenza').hide(); 
        $('#nuova_assenza_dad').show();
    }

    function inserisciAssenzeDad(){
        if (typeof $('#id_studente_dettaglio_tmp').val() != 'undefined'){
            $('#id_studente').val($('#id_studente_dettaglio_tmp').val());
        }

        $('#operazione').val('inserisci_assenze_dad_studente');
        $('#jqxGeneralModalLoader').jqxLoader('open');
        $('#form_container').submit();
    }


    function caricaOrarioDad(){
        switch (true){
            case ($('#select_studente_dad').val() == ''):
                creaToast("Selezionare uno studente", "error");
                return;
                break;
            case ($('#data_nuova_assenza_dad').val() == ''):
                creaToast("Impostare una data per la ricerca", "error");
                return;
                break;
            default:
                break;
        }

        $('#jqxGeneralLoader').jqxLoader('open');

        var query = {
            current_user: $('#current_user').val(),
            current_key: $('#current_key').val(),
            db_key: $('#db_key').val(),
            form_tipo_utente: $('#tipo_utente').val(),
            id_studente: $('#select_studente_dad').val(),
            id_classe: $('[name="id_classe"]:first').val(),
            data: $('#data_nuova_assenza_dad').val(),
            form_azione: "estrai_orario_per_assenze_dad"
        };

        $.ajax({
            type: 'POST',
            url: "ajax_professore.php",
            data: query,
            cache: false,
            complete: function (response) {
                if (response.responseJSON){
                    $("#tab_orario_dad tr").remove();
                    var html = '';
                    var t = $("#tab_orario_dad");
                    var giorni = response.responseJSON;

                    if (Object.keys(giorni).length > 0){
                        Object.keys(giorni).forEach(function(key){
                            var giorno = giorni[key];
                            
                            //not so elegant, I know
                            html += '<tr>'
                                    + '<td class="padding_cella_generica" colspan="4">'+giorno.giorno+' '+giorno.data_giorno+'</td>'
                                + '</tr>';
                            t.append(html);
                            html = "";
                            
                            if (giorno['tipo_giornata'] == 'A'){
                                if (giorno.studente_in_dad){
                                    if (giorno.orari.length > 0){
                                        var tr, c1, c2, c3, c4;

                                        //creo riga titolo
                                        tr = $("<tr></tr>").css({ "align": "center" });
                                        //creo celle riga titolo
                                        c1 = $("<th></th>").addClass("padding_cella_generica bordo_destro_generico").text("Orario");
                                        c2 = $("<th></th>").addClass("padding_cella_generica bordo_destro_generico").text("Materia");
                                        c3 = $("<th></th>").addClass("padding_cella_generica bordo_destro_generico").text("Docente");
                                        c4 = $("<th></th>").addClass("padding_cella_generica").text("Assenza DAD");

                                        //appendo celle a riga e riga a tabella
                                        tr.append(c1, c2, c3, c4);
                                        t.append(tr);

                                        giorno.orari.forEach(function(ora){
                                            var tr, c1, c2, c3, c4;
                                            
                                            tr = $("<tr></tr>");
                                            c1 = $("<td></td>").addClass("padding_cella_generica bordo_destro_generico bordo_alto_generico").text(ora.orario_inizio_tradotto+' - '+ora.orario_fine_tradotto);
                                            c2 = $("<td></td>").addClass("padding_cella_generica bordo_destro_generico bordo_alto_generico").text(ora.dati_materia.descrizione);
                                            c3 = $("<td></td>").addClass("padding_cella_generica bordo_destro_generico bordo_alto_generico").text(ora.dati_professore.cognome+' '+ora.dati_professore.nome);
                                            c4 = $("<td></td>").addClass("padding_cella_generica bordo_alto_generico");
                                            if (ora.id_professore == $('#current_user').val()){
                                                // MODIFICABILE

                                                // bottone assenza
                                                var hidAssenza = $("<input type='hidden'></input>")
                                                    .attr("name", "nuova_assenza_dad[orari]["+ora.id_orario+"][assente]")
                                                    .attr("id", "nuova_assenza_dad_"+ora.id_orario);
                                                var btn = $("<button type='button'></button>")
                                                    .prop('title', 'Assenza')
                                                    .addClass("btn_pieno_tondo testo_bianco ombra_testo ripples")
                                                    .css({ "padding": "3px 8px" })
                                                    .text("A")
                                                    .click({idOrario: ora.id_orario}, function(event){
                                                        var ass = $("#nuova_assenza_dad_"+event.data.idOrario);
                                                        if (ass.val() == 'SI'){
                                                            ass.val('NO');
                                                            $(this).removeClass("sfondo_rosso").addClass("sfondo_rosso_op20");
                                                        } else {
                                                            ass.val('SI');
                                                            $(this).removeClass("sfondo_rosso_op20").addClass("sfondo_rosso");
                                                        };
                                                        $("#modificata_assenza_dad_"+event.data.idOrario).val("SI");
                                                    });
                                                if (ora.assenza_dad && parseInt(ora.assenza_dad.entrata) == 0 && parseInt(ora.assenza_dad.uscita) == 0){
                                                    btn.addClass("sfondo_rosso");
                                                    hidAssenza.val("SI");
                                                } else {
                                                    btn.addClass("sfondo_rosso_op20");
                                                    hidAssenza.val("NO");
                                                }
                                                c4.append(btn);
                                                
                                                // input entrata
                                                var divE = $("<div></div>")
                                                    .css({ "display": "inline-block", "margin": "3px" });
                                                divE.append($("<span></span>").text("E:").css({ "margin-left": "12px" }));
                                                var ent = $("<input type='time'></input>")
                                                    .css({ "margin-left": "3px" })
                                                    .attr("name", "nuova_assenza_dad[orari]["+ora.id_orario+"][entrata]")
                                                    .change({idOrario: ora.id_orario}, function(event){
                                                        $("#modificata_assenza_dad_"+event.data.idOrario).val("SI");
                                                    });
                                                if (ora.assenza_dad && parseInt(ora.assenza_dad.entrata) > 0){
                                                    ent.val(ora.assenza_dad.entrata_tradotta);
                                                } else {
                                                    ent.val("");
                                                }
                                                divE.append(ent);
                                                c4.append(divE);

                                                // input uscita
                                                var divU = $("<div></div>")
                                                    .css({ "display": "inline-block", "margin": "3px" });
                                                divU.append($("<span></span>").text("U:").css({ "margin-left": "12px" }));
                                                var usc = $("<input type='time'></input>")
                                                    .css({ "margin-left": "3px" })
                                                    .attr("name", "nuova_assenza_dad[orari]["+ora.id_orario+"][uscita]")
                                                    .change({idOrario: ora.id_orario}, function(event){
                                                        $("#modificata_assenza_dad_"+event.data.idOrario).val("SI");
                                                    });
                                                if (ora.assenza_dad && parseInt(ora.assenza_dad.uscita) > 0){
                                                    usc.val(ora.assenza_dad.uscita_tradotta);
                                                } else {
                                                    usc.val("");
                                                }
                                                divU.append(usc);
                                                c4.append(divU);

                                                //input hidden
                                                if (ora.assenza_dad){
                                                    c4.append(
                                                        $("<input type='hidden'></input>")
                                                            .attr("name", "nuova_assenza_dad[orari]["+ora.id_orario+"][id_assenza]")
                                                            .val(ora.assenza_dad.id_assenza_didattica_distanza)
                                                    );
                                                }
                                                c4.append(
                                                    $("<input type='hidden'></input>")
                                                        .attr("name", "nuova_assenza_dad[orari]["+ora.id_orario+"][modificata]")
                                                        .attr("id", "modificata_assenza_dad_"+ora.id_orario)
                                                        .val("NO")
                                                        .change({idOrario: ora.id_orario}, function(event){
                                                            $("#modificata_assenza_dad_"+event.data.idOrario).val("SI");
                                                        })
                                                );
                                                c4.append(hidAssenza);

                                            } else {
                                                // NON MODIFICABILE
                                                tr.addClass("sfondo_grigio_chiaro");
                                            }

                                            tr.append(c1, c2, c3, c4);
                                            t.append(tr);
                                        });
                                    }
                                } else {
                                    html += '<tr>'
                                        + '<td align="center" class="padding_cella_generica" colspan="4">Lo studente non è in DAD/DDI/FAD in questa giornata</td>'
                                    + '</tr>';
                                    t.append(html);
                                    html = "";
                                }
                            } else {
                                html += '<tr>'
                                    + '<td align="center" class="padding_cella_generica" colspan="4">Festivo</td>'
                                + '</tr>';
                                t.append(html);
                                html = "";
                            }
                        });
                    } else {
                        html += '<tr>'
                            + '<td align="center" class="padding_cella_generica" colspan="4">Nessun orario trovato</td>'
                        + '</tr>';
                        t.append(html);
                        html = "";
                    }
                } else {
                    console.log("Errore", response);
                }

                $('#jqxGeneralLoader').jqxLoader('close');
            }
        });
    }

    function drawPieSlice(ctx,centerX, centerY, radius, startAngle, endAngle, color ){
        ctx.fillStyle = color;
        ctx.beginPath();
        ctx.moveTo(centerX,centerY);
        ctx.arc(centerX, centerY, radius, startAngle, endAngle);
        ctx.closePath();
        ctx.fill();
    }

    var Piechart = function(options){
        this.options = options;
        this.canvas = options.canvas;
        this.ctx = this.canvas.getContext("2d");
        this.colors = options.colors;

        this.draw = function(){
            var total_value = 0;
            var color_index = 0;
            for (var categ in this.options.data){
                var val = this.options.data[categ];
                total_value += val;
            }

            var start_angle = 0;
            for (categ in this.options.data){
                val = this.options.data[categ];
                var slice_angle = 2 * Math.PI * val / total_value;

                drawPieSlice(
                    this.ctx,
                    this.canvas.width/2,
                    this.canvas.height/2,
                    Math.min(this.canvas.width/2,this.canvas.height/2),
                    start_angle,
                    start_angle+slice_angle,
                    this.colors[color_index%this.colors.length]
                );

                start_angle += slice_angle;
                color_index++;
            }

            //drawing a white circle over the chart
            //to create the doughnut chart
            if (this.options.doughnutHoleSize){
                drawPieSlice(
                    this.ctx,
                    this.canvas.width/2,
                    this.canvas.height/2,
                    this.options.doughnutHoleSize * Math.min(this.canvas.width/2,this.canvas.height/2),
                    0,
                    2 * Math.PI,
                    this.options.doughnutHolecolor
                );
            }

        }
    }

    function toggleFoto(btn)
    {
        btn.classList.toggle("testo_verde");
        btn.classList.toggle("bordo_verde");
        var foto = $(btn).data().statoFoto;

        if (foto === 'NO'){
            $("[data-colonna='foto']").slideDown(500);
            $(btn).data('statoFoto', 'SI');
        } else {
            $("[data-colonna='foto']").slideUp(500);
            $(btn).data('statoFoto', 'NO');
        }
    }

    function sistemaCalendario(id){
        var bounding = document.querySelector("#"+id).getBoundingClientRect();
        if (bounding.right > $(window).width())
        {
            document.getElementById(id).style.left = '-125px';
        }
    }

    function bloccaColonna(classe, x) {
      /**
       * Quando la tabella scrolla sposta di posizione la prima riga e la prima colonna
       */
      $('.'+classe).css('transform', 'translateX(' + x + 'px)');
    }

    $(document).ready( function(){
        $('#message').delay(5000).fadeOut();

        //--- Calendario JQX
        $("#jqxCalendar").jqxCalendar({ width: '350px', height: '400px', enableTooltips: false, theme: 'Bootstrap', culture: 'it-IT', enableViews: false, columnHeaderHeight: 40, titleHeight: 40, showOtherMonthDays: false });
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
            $('#id_studente').val('');
            $('#jqxGeneralLoader').jqxLoader('open');
        });
        //---

        $('#fixed-headers-studente').scroll(function() {
            bloccaColonna('colonna_mese_assenze_studente', $(this).scrollLeft());
        });
        $('#fixed-headers-classe').scroll(function() {
            bloccaColonna('colonna_studente_assenze', $(this).scrollLeft());
        });

        if (giustificazioni_abilitate == 'NO' && inserimento_modifica_eliminazione == 'NO'){
            selezione_abilitata = false;
        }
    });
</script>


<br>

<div id="sfondo_oscurato" style="width: 100%; height: 100%; top: 0; left: 0; position: fixed; background-color: #aaa; opacity: 0.5; z-index: 2; display: none;"
    onclick="chiudiSfondoOscurato();"></div>
<div id="sfondo_trasparente" style="width: 100%; height: 100%; top: 0; left: 0; position: fixed; background-color: #aaa; opacity: 0; z-index: 2; display: none;"
    onclick="chiudiSfondoTrasparente();"></div>
<div id="toastsContainer" class="" style="position: absolute; z-index: 6; bottom: 0px; left: 0px; padding: 10px;"></div>

<form method='post' action='/mastercom/index.php' id="form_container">
    <div class="div_scheda_generica" align="center" style="width: 98%; color: black; font-weight: normal;">
        <div class='bordi_alti_scheda' style="padding: 14px 10px; background-color: #3F51B5; color:white; font-weight: bold; display: flex; align-items: center; justify-content: space-between;">
            <div align="left" class="ombra_testo" style="font-size: 120%; width: 25%;">
                Assenze
            </div>
        </div>
                    <div style="width: 25%; padding: 20px;" class="padding_cella_generica">
                
                <select name="id_classe" class="select" style="background-color: white; width: 80%;" onchange="this.form.submit(); $('#jqxGeneralModalLoader').jqxLoader('open');">
                    <option value="0">Seleziona una classe</option>
                                    </select>
            </div>
        
        
        
            </div>

    
    <div  class="div_scheda_generica"
            id="nuova_assenza"
            style="position: fixed;
                    width: 70%;
                    min-width: 300px;
                    max-height: 95%;
                    left: 50%;
                    top: 50%;
                    transform: translate(-50%, -50%);
                    display: none;
                    z-index: 3;
                    overflow-y: auto;"
        >
        <div align="center" style="width: 100%; height: 100%;">
            <table width="95%" align="center">
                <tr>
                    <td align="center" colspan="2" style="padding: 15px 10px 3px 10px; font-size: 120%;">
                        <span class='bold' id='titolo_inserisci_assenza' style='display: none;'>INSERISCI ASSENZA</span>
                        <span class='bold' id='titolo_modifica_assenza' style='display: none;'>MODIFICA ASSENZA</span>
                    </td>
                </tr>
                <tr>
                    <td align="center" colspan="2" style="height: 20px;"></td>
                </tr>
                <tr>
                    <td align="center" colspan="2" class="padding3">
                        <div width="100%" style="display: flex; align-items: center; justify-content: space-around; flex-wrap: wrap;">
                                <div class="padding_cella_generica">
                                    Studente<br>
                                    <select id="select_studente" class="select" name="nuova_assenza[id_studente]" style="display: none;">
                                            <option value="">---</option>
                                                                            </select>
                                    <div class='padding_cella_generica' id="nome_studente_testo" style="display: none;"></div>
                                </div>
                                <input type='hidden' name='id_studente_modifica_assenza' id='id_studente_modifica_assenza' value=''>
                                <div class='padding_cella_generica'>
                                    Data<br>
                                    <input type='date'
                                           name="nuova_assenza[data]"
                                           id="data_nuova_assenza"
                                           style="border: 0.5px solid #ccc; padding: 2px;">
                                </div>
                                <div class='padding_cella_generica'>
                                    Tipo<br>
                                    <select name="nuova_assenza[tipo]" id="tipo_nuova_assenza" class="select">
                                        <option value="1">Assenza Giornaliera</option>
                                        <option value="2">Entrata in Ritardo al mattino</option>
                                        <option value="8">Entrata in Ritardo al pomeriggio</option>
                                        <option value="3">Uscita in Anticipo al mattino</option>
                                        <option value="9">Uscita in Anticipo al pomeriggio</option>
                                        <option value="6">Assenza solo al Mattino</option>
                                        <option value="7">Assenza solo al Pomeriggio</option>
                                        <option value="12">Entrata in Ritardo Minore al Mattino</option>
                                        <option value="18">Entrata in Ritardo Minore al Pomeriggio</option>
                                    </select>
                                </div>
                                <div class='padding_cella_generica'>
                                    Ora entrata/uscita<br>
                                    <input type='time'
                                           name="nuova_assenza[ora]"
                                           id="ora_nuova_assenza"
                                           style="border: 0.5px solid #ccc; padding: 2px;">
                                </div>
                                <div class='padding_cella_generica'>
                                    Giustificata<br>
                                    <select name="nuova_assenza[tipo_giustificazione]" id="giustificazione_nuova_assenza" class="select">
                                        <option value="1">SI</option>
                                        <option value="0">NO</option>
                                    </select>
                                </div>
                                <div class='padding_cella_generica'>
                                    Motivazione<br> 
                                    <select class='select' id="select_motivazione" onchange='settaMotivazione(this, "motivazione_giustificazione");'>
                                        <option></option>
                                                                                    <option value="Motivi di salute">Motivi di salute</option>
                                                                                    <option value="Motivi famigliari">Motivi famigliari</option>
                                                                                    <option value="Mezzi di trasporto">Mezzi di trasporto</option>
                                                                                <option value="Altro">Altro</option>
                                    </select>
                                    <br>
                                    <input type='text' id="motivazione_altro" onchange='settaMotivazionePersonalizzata(this, "motivazione_giustificazione");' style='display: none;'>
                                    <input type='hidden'
                                        id='motivazione_giustificazione'
                                        name='nuova_assenza[motivazione]'
                                        value=''>
                                </div>
                                                            </div>
                    </td>
                </tr>
            </table>
            <div class="padding16" style="display: flex; justify-content: space-between;">
                <div>
                    <button type="button"
                        id="btn_apri_inserisci_dad"
                        style="display: none;"
                        class="btn_flat sfondo_viola testo_bianco ombra_testo ripples"
                        onclick="apriFormInserimentoDad();"
                    >DAD//FAD</button>
                </div>
                <div>
                    <button type="button"
                            class="btn_flat testo_grigio"
                            onclick="apriChiudiPopup('nuova_assenza', 'sfondo_oscurato', true);"
                            >Chiudi</button>
                    <button type="button"
                            id="btn_inserisci_assenza"
                            style="display: none;"
                            class="btn_flat sfondo_verde_chiaro testo_nero ripples"
                            onclick="checkAssenza('inserimento');"
                        >Inserisci</button>
                    <button type="button"
                            id="btn_modifica_assenza"
                            style="display: none;"
                            class="btn_flat sfondo_verde_chiaro testo_nero ripples"
                            onclick="checkAssenza('modifica');"
                        >Salva</button>
                </div>
            </div>
        </div>
    </div>

    
    <div  class="div_scheda_generica"
            id="nuova_assenza_dad"
            style="position: fixed;
                    width: 70%;
                    min-width: 300px;
                    max-height: 95%;
                    left: 50%;
                    top: 50%;
                    transform: translate(-50%, -50%);
                    display: none;
                    z-index: 3;
                    overflow-y: auto;"
        >
        <div align="center" style="width: 100%; height: 100%;">
            <table width="95%" align="center">
                <tr>
                    <td align="center" colspan="2" style="padding: 15px 10px 3px 10px; font-size: 120%;">
                        <span class='bold'>INSERISCI ASSENZA DAD/DDI/FAD</span>
                    </td>
                </tr>
                <tr>
                    <td align="center" colspan="2" style="height: 20px;"></td>
                </tr>
                <tr>
                    <td align="center" colspan="2" class="padding3">
                        <div width="100%" style="display: flex; align-items: center; justify-content: space-around; flex-wrap: wrap;">
                            <div class="padding_cella_generica">
                                Studente<br>
                                <select id="select_studente_dad" class="select" name="nuova_assenza_dad[id_studente]" onchange="$('#tab_orario_dad').html('');">
                                        <option value="">---</option>
                                                                    </select>
                            </div>
                            <div class='padding_cella_generica'>
                                Data<br>
                                <input type='date'
                                        name="nuova_assenza_dad[data]"
                                        id="data_nuova_assenza_dad"
                                        style="border: 0.5px solid #ccc; padding: 2px;">
                            </div>
                            <div class='padding_cella_generica'>
                                <button type="button"
                                    class="btn_flat sfondo_viola_op20 testo_nero ripples"
                                    onclick="caricaOrarioDad();"
                                    >Carica Orario</button>
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
            <div class="padding_cella_generica">
                <table id="tab_orario_dad">
                    
                </table>
            </div>
            <div class="padding_cella_generica">
                <br>
                <button type="button"
                        class="btn_flat testo_grigio"
                        onclick="apriChiudiPopup('nuova_assenza_dad', 'sfondo_oscurato', true);"
                        >Chiudi</button>
                <button type="button"
                        class="btn_flat sfondo_viola testo_bianco ombra_testo ripples"
                        onclick="inserisciAssenzeDad();"
                    >Salva</button>
            </div>
        </div>
    </div>

    <input type='hidden' name='form_stato' value='professore'>
    <input type='hidden' name='stato_principale' value='assenze_new'>
    <input type='hidden' name='stato_secondario' id='stato_secondario' value=''>
    <input type='hidden' name='operazione' id='operazione' value=''>
    <input type='hidden' name='id_studente' id='id_studente' value=''>
    <input type='hidden' name='id_assenza' id='id_assenza' value=''>
    <input type='hidden' name='current_user' id='current_user' value='3000133'>
    <input type='hidden' name='current_key' id='current_key' value='eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1aWQiOiJtY3VzZXJfMTc0NzM4Mzc2OS43NjQxNjg0NjFiODVfbWF1eHRvcmlubyIsInR5cGUiOiJ1c2VyIiwidGltZSI6MTc5MjMzMjUwNCwiZGF0ZSI6IjE4XC8xMFwvMjAyNiAxNjowOCIsImV4cGlyYXRpb24iOjE3OTQ5MjQ1MDR9.4Tb8M51hkMcHMXIjmrbT3JwEPIJF9ueuOQkB6_7OUYc'>
    <input type='hidden' id='db_key' value='mastercom_2026_2027'>
    <input type='hidden' id='tipo_utente' value='professore'>
</form>