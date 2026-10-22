<!DOCTYPE html>
<html lang="it">
    <head>
        <title>Gestione Corsi</title>
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

                $("form").append("<input type='hidden' name='st' value='1792332522082'>");

                
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
                <b>Professore - Gestione Corsi - A.S. 2026/2027</b>
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
                      <button type="button" class="dropbtn ombra_testo" style="color: yellow;" aria-expanded="false" aria-controls="menu_registri" onclick="toggleMenuTastiera(this)">Registri</button>
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



<script type="text/javascript" src="javascript/include_gestione_corsi_professore.js?v=26.1.39"></script>

<input type="hidden" name="current_user"id="current_user" 	value="3000133">
<input type="hidden" name="current_key" id="current_key" 	value="eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1aWQiOiJtY3VzZXJfMTc0NzM4Mzc2OS43NjQxNjg0NjFiODVfbWF1eHRvcmlubyIsInR5cGUiOiJ1c2VyIiwidGltZSI6MTc5MjMzMjUwNCwiZGF0ZSI6IjE4XC8xMFwvMjAyNiAxNjowOCIsImV4cGlyYXRpb24iOjE3OTQ5MjQ1MDR9.4Tb8M51hkMcHMXIjmrbT3JwEPIJF9ueuOQkB6_7OUYc">
<input type="hidden" name="db_key" 		id="db_key" 		value="mastercom_2026_2027">
<input type="hidden" name="tipo_utente"	id="tipo_utente" 	value="professore">
<input type="hidden" name="id_materia"	id="id_materia">
<input type="hidden" name="id_classe"	id="id_classe">
<input type="hidden" name="id_studente"	id="id_studente">

<script type="text/javascript">
	var lista_intervalli = [
		{ value: '07:30 - 08:30'},{ value: '08:00 - 08:50'},{ value: '08:00 - 08:55'},{ value: '08:00 - 09:00'},{ value: '08:10 - 09:10'},{ value: '08:30 - 09:30'},{ value: '08:50 - 09:40'},{ value: '08:55 - 09:50'},{ value: '09:00 - 09:50'},{ value: '09:00 - 13:00'},{ value: '09:10 - 10:10'},{ value: '09:30 - 11:00'},{ value: '09:40 - 10:30'},{ value: '09:50 - 10:45'},{ value: '09:55 - 10:45'},{ value: '10:30 - 11:10'},{ value: '10:30 - 11:30'},{ value: '10:45 - 11:35'},{ value: '11:00 - 11:45'},{ value: '11:00 - 12:30'},{ value: '11:05 - 12:00'},{ value: '11:30 - 12:20'},{ value: '11:30 - 12:30'},{ value: '11:45 - 12:30'},{ value: '11:50 - 12:40'},{ value: '12:00 - 12:55'},{ value: '12:20 - 13:10'},{ value: '12:30 - 14:00'},{ value: '12:40 - 13:30'},{ value: '12:55 - 13:50'},{ value: '13:10 - 14:00'},{ value: '13:50 - 14:45'},{ value: '14:00 - 15:00'},{ value: '14:00 - 16:00'},{ value: '14:30 - 15:30'},{ value: '15:00 - 16:00'},{ value: '15:30 - 16:20'},{ value: '16:00 - 17:00'},{ value: '16:20 - 18:00'},{ value: '17:00 - 18:00'},
	];

	var abilita_inserimento_studenti = 'NO';

	var inizio_anno = "01/09/2026";
	var fine_anno = "31/08/2027";

	var gestione_inizio_fine_partecipazione_corsi = "NO";

	
	var lista_ripetizioni = [
		{key: 1 , value: 'No'},
		{key: 2 , value: ' 2'},
		{key: 3 , value: ' 3'},
		{key: 4 , value: ' 4'},
		{key: 5 , value: ' 5'},
		{key: 6 , value: ' 6'},
		{key: 7 , value: ' 7'},
		{key: 8 , value: ' 8'},
		{key: 9 , value: ' 9'},
		{key: 10, value: '10'},
        {key: 11, value: '11'},
		{key: 12, value: '12'},
		{key: 13, value: '13'},
		{key: 14, value: '14'},
		{key: 15, value: '15'},
		{key: 16, value: '16'},
		{key: 17, value: '17'},
		{key: 18, value: '18'},
		{key: 19, value: '19'},
		{key: 20, value: '20'},
		{key: 21, value: '21'},
		{key: 22, value: '22'},
		{key: 23, value: '23'},
		{key: 24, value: '24'},
		{key: 25, value: '25'},
		{key: 26, value: '26'},
		{key: 27, value: '27'},
		{key: 28, value: '28'},
		{key: 29, value: '29'},
		{key: 30, value: '30'},
		{key: 31, value: '31'},
		{key: 32, value: '32'},
		{key: 33, value: '33'},
		{key: 34, value: '34'},
		{key: 35, value: '35'},
	];
	
</script>

<div id="sfondo_oscurato" style="width: 100%; height: 100%; top: 0; left: 0; position: fixed; background-color: #aaa; opacity: 0.5; z-index: 250; display: none;"></div>


<div  class="div_scheda_generica"
		id="date_partecipazione_corso"
		style="position: fixed;
				width: 50%;
				min-width: 300px;
				left: 50%;
				top: 50%;
				transform: translate(-50%, -50%);
				display: none;
				z-index: 260;
				overflow-y: auto;"
	>
	<div align="center" style="width: 100%; height: 100%;">
		<table width="95%" align="center">
			<tr>
				<td align="center" colspan="2" style="padding: 15px 10px 20px 10px; font-size: 120%;">
					<b>PARTECIPAZIONE AL CORSO</b><br>
				</td>
			</tr>
			<tr>
				<td class='padding_cella_generica' colspan="2">
					Partecipazione di <b id="nome_studente_partecipazione_corso"></b> al corso <b id="nome_corso_partecipazione"></b>
				</td>
			</tr>
			<tr>
				<td align="right" class='padding_cella_generica'>
					Data inizio partecipazione
				</td>
				<td align="left" class='padding_cella_generica'>
					<input type="date" id="data_inizio_partecipazione" value="">
					<button type="button"
							class="btn_flat sfondo_bianco testo_rosso"
							onclick="$('#data_inizio_partecipazione').val('').trigger('change');"
							>&times;</button>
				</td>
			</tr>
			<tr>
				<td align="right" class='padding_cella_generica'>
					Data fine partecipazione
				</td>
				<td align="left" class='padding_cella_generica'>
					<input type="date" id="data_fine_partecipazione" value="">
					<button type="button"
							class="btn_flat sfondo_bianco testo_rosso"
							onclick="$('#data_fine_partecipazione').val('').trigger('change');"
							>&times;</button>
				</td>
			</tr>
			<tr>
				<td align="center" colspan="2" class='padding_cella_generica annotazione_leggera'>
					<b>Nota:</b> se non si inseriscono le date, la partecipazione al corso sarà illimitata per tutta la durata di esso.
				</td>
			</tr>
		</table>
		<input type="hidden" id="id_studente_partecipazione_corso" value="">
		<input type="hidden" id="id_corso_partecipazione" value="">
		<div class="padding_cella_generica">
			<br>
			<button type="button"
					class="btn_flat_indaco"
					onclick="apriChiudiPopup('date_partecipazione_corso', 'sfondo_oscurato', true);"
					>Chiudi</button>
			<button type="button"
					class="btn_pieno sfondo_scuro"
					onclick="salvaPartecipazioneCorso();"
					>Salva</button>
		</div>
	</div>
</div>

<br>
<table width='100%' class="sfondo_base_generico bordo_generico_rilievo">
    <tr>
        <td align='center' class='titolo_funzione sfondo_contrasto_generico' colspan='3'>
            Gestione Corsi:
        </td>
    </tr>
    <tr>
        <td valign='top' align="center" width='100%'>
            <input style='margin: 5px 0px 5px 0px;' type="button" value="Nuovo corso" id='btn_new' />
        </td>
        <td align='center' valign='top' width='100%'></td>
        <td align='left' valign='bottom' width='100%' style='opacity: 0.9;'>
            Corso selezionato: <span id='titolo_corso' style='font-weight: bold;'></span>
        </td>
    </tr>
	<tr>
		<td valign='top' rowspan='2' width='100%'>
			<div id='grid_elenco_corsi'></div>
		</td>
        <td valign='top' rowspan='2'>
			&nbsp;
        </td>
		<td valign='top' align='right' id="td_dettagli">
			<div id='tab_dettagli'>
				<ul>
					<li>Corso</li>
					<li>Stud.</li>
					<li>Orario</li>
					<li>Prof.</li>
					<li>Risorse</li>
					<li>Limiti</li>
                    <li>Materie</li>
				</ul>
				<div>
					<table>
						<tr>
							<td><input type='text' id='txt_descrizione_corso' size='29' placeholder="Titolo"></td>
							<td align='right'></td>
							<td>
								
							</td>
						</tr>
						<tr>
							<td colspan='3'><input type='text' id='txt_attivita_corso' size='29' placeholder="Sottotitolo"></td>
						</tr>
                        <tr>
							<td colspan='2'>
                                Tipo corso
                            </td>
                            <td>
                                Monteore
                            </td>
						</tr>
                        <tr>
							<td colspan='2'>
                                <div id='select_tipo_corso'></div>
                            </td>
                            <td>
                                <div id='input_monteore_corso'></div>
                            </td>
						</tr>
						<tr>
							<td colspan="3">
                                Visibilità quaderno
                            </td>
						</tr>
                        <tr>
							<td >
                            	dal <div id='data_inizio_visibilita'></div>
                            </td>
							<td colspan="2">
                            	al <div id='data_fine_visibilita'></div>
                            </td>
						</tr>
                        <tr>
                            <td colspan="3" style="/*opacity: 0.5;*/ padding-top: 4px;">Descrizione</td>
                        </tr>
						<tr>
							<td colspan='3'><textarea id='txt_descrizione_completa'></textarea></td>
						</tr>
					</table>
				</div>
				<div>
					<table>
						<tr><td colspan='3'>&nbsp;</td></tr>
						<tr><td colspan='3'><div id='log_partecipanti'></div></td></tr>
						<tr><td colspan='3'>&nbsp;</td></tr>
						<tr>
                            <td align='left' valign='top'><label>Classi</label><br>
					        <div id='select_classi' /></td>
							<td colspan='2' align='right' valign='top'><label>Studente</label><br>
					        <div id='select_studenti' /></td>
						</tr>
						<tr><td colspan='3'>&nbsp;</td></tr>
						<tr>
                            <td align='left' valign='top'>
								<input style='margin-left: 5px;' type="button" value="Inserisci classi" id='btn_insert_abbinamento_classe' />
							</td>
                            <td align='center' valign='top'></td>
                            <td align='right' valign='top'>
								<input style='margin-left: 25px;' type="button" value="Inserisci studenti" id='btn_insert_abbinamento_studente' />
							</td>
						</tr>
					</table>
				</div>
				<div>
					<table>
						<tr><td colspan='3'>&nbsp;</td></tr>
						<tr><td colspan='3'><div id='log_calendario'></div></td></tr>
						<tr><td colspan='3'>&nbsp;</td></tr>
						<tr>
							<td><label>Data</label>
					        <div id='datepick_giorno'></td>
							<td><label>Fascia oraria</label>
					        <div id='datepick_fascia'></td>
							</td>
							<td align='right'><label>Ripeti</label>
					        <div id='select_ripetizioni'></td>
							</td>
						</tr>
						<tr><td colspan='3'>&nbsp;</td></tr>
						<tr><td colspan='3' align='right' valign='top'><input style='margin-left: 25px;' type="button" value="Inserisci" id='btn_insert_date' /></td></tr>
					</table>
				</div>
				<div>
					<table>
						<tr><td colspan='3'>&nbsp;</td></tr>
						<tr><td colspan='3'><div id='log_docenti'></div></td></tr>
						<tr><td colspan='3'>&nbsp;</td></tr>
						<tr>
                            <td valign='top'><label>Ruolo</label>
					        <div id='select_ruolo_insegnanti'></td>
							<td colspan='2' align='right' valign='top'><label>Docente</label>
					        <div id='select_insegnanti'></td>
						</tr>
						<tr><td colspan='3'>&nbsp;</td></tr>
						<tr><td colspan='3' align='right' valign='top'>
								<input style='margin-left: 25px;' type="button" value="Inserisci" id='btn_insert_abbinamento' />
							</td>
						</tr>
					</table>
				</div>
				<div>
					<table>
						<tr><td colspan='3'>&nbsp;</td></tr>
						<tr><td colspan='3'><div id='log_risorse'></div></td></tr>
						<tr>
							<td><label>Data</label>
					        <div id='select_calendario'></td>
							<td align='right'><label>Risorsa</label>
					        <div id='select_risorse'></td>
							</td>
						</tr>
						<tr>
							<td colspan='3'><label>Commento</label>
					        <div id='text_nota'></td>
						</tr>
						<tr><td colspan='3'>&nbsp;</td></tr>
						<tr><td colspan='3' align='right' valign='top'><input style='margin-left: 25px;' type="button" value="Inserisci" id='btn_insert_risorsa' /></td></tr>
					</table>

				</div>
				<div>
					<table>
						<tr><td colspan='3'><label>Max partecipanti</label>
					        <div id='select_max_partecipanti'></div></td>
						</tr>
						<tr><td colspan='3'>Limitata alle classi:</td></tr>
						<tr><td colspan='3'><div id='check_classi_1' style='margin-left: 10px; float: left;'>Classi prime</div></td></tr>
						<tr><td colspan='3'><div id='check_classi_2' style='margin-left: 10px; float: left;'>Classi seconde</div></td></tr>
						<tr><td colspan='3'><div id='check_classi_3' style='margin-left: 10px; float: left;'>Classi terze</div></td></tr>
						<tr><td colspan='3'><div id='check_classi_4' style='margin-left: 10px; float: left;'>Classi quarte</div></td></tr>
						<tr><td colspan='3'><div id='check_classi_5' style='margin-left: 10px; float: left;'>Classi quinte</div></td></tr>
						<tr><td colspan='3'>&nbsp;</td></tr>

					</table>
				</div>
                <div>
					<table>
						<tr><td colspan='3'>&nbsp;</td></tr>
                        <tr>
							<td colspan='3' align='right' valign='top'><label>Materia di riferimento principale</label><br>
                                <div id='select_materia_riferimento'>
                            </td>
						</tr>
                        <tr><td colspan='3'>&nbsp;</td></tr>
						<tr><td colspan='3'><div id='log_materie'></div></td></tr>
						<tr>
							<td colspan='3' align='right' valign='top'><label>Materie aggiuntive</label><br>
                                <div id='select_materie_aggiuntive'>
                            </td>
						</tr>
						<tr>
                            <td colspan='3' align='right' valign='top'>
								<input style='margin-left: 25px;' type="button" value="Inserisci" id='btn_insert_abbinamento_materia' />
							</td>
						</tr>
                        <tr><td colspan='3'>&nbsp;</td></tr>
                        <tr>
                            <td colspan='3'>
                                <div id='numero_studenti_senza_riferimento' style="color: red;"></div>
                            </td>
                        </tr>
					</table>
				</div>
			</div>
		</td>
	</tr>
	<tr>
		<td align='center' valign='top'>
            <input type="hidden" name="hid_limite_indirizzo" value="-" id='hid_limite_indirizzo' />
			<table>
                <tr>
                    
                    <td align='center'><input style='margin: 10px;' type="button" value="Salva" id='btn_save' /></td>
                    <td align='center'><input style='margin: 10px;' type="button" value="Annulla" id='btn_cancel' /></td>

                    <td align='center'>

                        <form method='post' action='/mastercom/index.php' target='_blank'>

                            <input type='hidden' name='form_stato' value='professore'>
                            <input type='hidden' name='stato_principale' value='corsi_principale'>
                            <input type='hidden' name='stato_secondario' value='stampa_valutazione_corsi'>
                            <input type='hidden' name='id_classe_stampa' value=''>
                            <input type='hidden' name='current_user' value='3000133'>
                            <input type='hidden' name='current_key' value='eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1aWQiOiJtY3VzZXJfMTc0NzM4Mzc2OS43NjQxNjg0NjFiODVfbWF1eHRvcmlubyIsInR5cGUiOiJ1c2VyIiwidGltZSI6MTc5MjMzMjUwNCwiZGF0ZSI6IjE4XC8xMFwvMjAyNiAxNjowOCIsImV4cGlyYXRpb24iOjE3OTQ5MjQ1MDR9.4Tb8M51hkMcHMXIjmrbT3JwEPIJF9ueuOQkB6_7OUYc'>
                            <input style='margin: 10px;' type="button" value="Stampa" id='btn_print'
                                   onclick="this.form.id_classe_stampa.value = document.getElementById('id_classe').value; this.form.submit();"/>
                        </form>

                    </td>
    			</tr>
            </table>
		</td>
	</tr>
</table>
<div id="jqxLoader">
</div>
</body>
</html>
