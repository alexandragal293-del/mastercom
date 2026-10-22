
        <title>MasterCom Ver. 26.1.39 - Configuraciones</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="google" value="notranslate">
        <link rel="shortcut icon" type="image/x-icon" href="icone/mastercom.ico">
        <link rel="stylesheet" type="text/css" href="css/jquery-ui-1.8.16.custom.css" />
        <script src="https://accounts.google.com/gsi/client" async defer></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jsrsasign/8.0.20/jsrsasign-all-min.js"></script>
        
        <script type="text/javascript" src="https://mcr-formatori1.registroelettronico.com/mastercom/libs/jquery/jquery-3.7.1.min.js"></script>
        <script type="text/javascript" src="https://mcr-formatori1.registroelettronico.com/mastercom/libs/jquery-ui-1.14.1/jquery-ui.min.js"></script>
        
        <script type="text/javascript" src="https://mcr-formatori1.registroelettronico.com/mastercom/javascript/messenger.js?v=26.1.39"></script>
        <script type="text/javascript" src="https://mcr-formatori1.registroelettronico.com/mastertek-api/ckeditor-mastercom/ckeditor.js"></script>
        <script type="text/javascript" src="https://mcr-formatori1.registroelettronico.com/mastercom/javascript/anylink.js?v=26.1.39"></script>

        <!-- !! Tenere jquery prima di Select2 -->
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

        
        <script type="module" src="https://mcr-formatori1.registroelettronico.com/mastercom/javascript/custom_element/custom-elements.js?v=26.1.39"></script>

		<link rel="stylesheet" href="https://mcr-formatori1.registroelettronico.com/mastercom/libs/jqwidgets/styles/jqx.base.css" type="text/css" />
		<link rel="stylesheet" href="https://mcr-formatori1.registroelettronico.com/mastercom/libs/jqwidgets/styles/jqx.darkblue.css" type="text/css" />
		<link rel="stylesheet" href="https://mcr-formatori1.registroelettronico.com/mastercom/libs/jqwidgets/styles/jqx.bootstrap.css" type="text/css" />
		<link rel="stylesheet" href="https://mcr-formatori1.registroelettronico.com/mastercom/libs/jqwidgets/styles/jqx.material.css" type="text/css" />
		<link rel="stylesheet" href="https://mcr-formatori1.registroelettronico.com/mastercom/libs/jqwidgets/styles/jqx.office.css" type="text/css" />
		<link rel="stylesheet" href="https://mcr-formatori1.registroelettronico.com/mastercom/libs/jqwidgets/styles/jqx.metro.css" type="text/css" />

        <link href="https://mcr-formatori1.registroelettronico.com/mastercom/assets/plugins/font-awesome/5.0/css/fontawesome-all.min.css" />
        <link rel="stylesheet" href="https://mcr-formatori1.registroelettronico.com/mastercom/assets/fontawesome-free-5.5.0-web/css/all.css">
		<!--link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"-->

		<script type="text/javascript" src="https://mcr-formatori1.registroelettronico.com/mastercom/libs/jqwidgets/jqx-all.js"></script>
		<script type="text/javascript" src="https://mcr-formatori1.registroelettronico.com/mastercom/libs/jqwidgets/globalization/globalize.js"></script>
        <script type="text/javascript" src="https://mcr-formatori1.registroelettronico.com/mastercom/libs/jqwidgets/globalization/globalize.culture.it-IT.js"></script>
        <link rel="stylesheet" type="text/css" href="https://mcr-formatori1.registroelettronico.com/mastercom/css/style.css?v=26.1.39">
        <link rel="stylesheet" href="https://mcr-formatori1.registroelettronico.com/mastercom/css/style_microsoft.css">
        <link rel="stylesheet" href="https://mcr-formatori1.registroelettronico.com/mastercom/css/mc-core.css?v=26.1.39">
        <link rel="stylesheet" href="https://mcr-formatori1.registroelettronico.com/mastercom/css/mc-admin.css?v=26.1.39">

		<!--  Questo pezzo di javascript ha il compito di monitorare il tempo di caricamento complessivo di una pagina. In caso di login, invia l'informazione ad un webservice ajax per essere loggato nel db ed effettuare statistichee monitoraggio omogeneo del tempo di esecuzione delle pagine. -->
	   	<script type="text/javascript">
			var login_iniziale 	= '';
			var current_user 	= '3000132';
			var current_key 	= 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1aWQiOiJtY3VzZXJfMTcyMDA4MTUzOS42OTk5ZDk0M2YxNGVfbWNyLWZvcm1hdG9yaTEiLCJ0eXBlIjoidXNlciIsInRpbWUiOjE3OTIxNDM0ODksImRhdGUiOiIxNlwvMTBcLzIwMjYgMTE6MzgiLCJleHBpcmF0aW9uIjoxNzk0NzM1NDg5fQ.MJFlALYYh2JL4PQjegJH0R8OiaYJMDISZuqlF6eRZJU';
			var tipo_utente 	= 'amministratore';

            CLIENT_ID   = '';
            API_KEY     = '';

			
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

            function updateLastTypeLogin(lastType){
                var nextapiPath = "../next-api/v1/";

                return new Promise((resolve, reject) => {
                    $.ajax({
                        type: "POST",
                        data: { },
                        url: nextapiPath + "user/update_last_type_login/"+lastType,
                        headers: { 'Authorization': current_key },
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

            /*function initGoogle() {
                try {
                    gapi.load('auth2', function(){
                        gapi.auth2.init({client_id: "197393209516-tplrvljplria9qdl35ettvcbkke5r89r.apps.googleusercontent.com"});
                        gapi.auth2.init({client_id: "412329167119-pqd3gkioesph8lnrlbnbp9mntcjoo4k8.apps.googleusercontent.com"});
                    });
                } catch (e) { }
            }*/

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
			

            $(document).ready(function()
            {
                            });
		</script>
		<!--  -->


        
            <script type="text/javascript">
                window.name = 'mastercom_main_window';
            </script>
            <link type="text/css" rel="stylesheet" href="https://mcr-formatori1.registroelettronico.com/mastercom/css/dhtmlgoodies_calendar.css?random=20051112" media="screen" />
            <script type="text/javascript" src="https://mcr-formatori1.registroelettronico.com/mastercom/javascript/dhtmlgoodies_calendar.js?random=20060118"></script>
		<style>
			body {font-family: "Arial"; background: var(--mc-page, #f6f8fb);}
		</style>
        
    </head>
    <body>

		<div id = 'header_mastercom'>

        <input type='hidden' id='login_centralizzato' value='SI'>

                <div class="mc mc-adm-h">
        <header class="mc-adm-h-bar">
            <span class="mc-adm-brand">
                <img class="mc-adm-mark" src="images/mastercom-w.png" alt="mastercom" height="40">
            </span>

            <nav class="mc-adm-nav" aria-label="Navigazione amministrazione">
                                                        <form method='post' action='/mastercom/index.php' class="mc-adm-form">
                        <button type="submit" class="mc-adm-pill" title="Nuova ricerca avanzata">
                            <span class="mc-adm-chip mc-adm-chip--blue"><span class="mc-adm-ic" style="-webkit-mask-image:url(icone/svg/search100.svg);mask-image:url(icone/svg/search100.svg);" aria-hidden="true"></span></span>
                            <span class="mc-adm-pill-label">Buscar</span>                        </button>
                        <input type='hidden' name='form_stato' value='amministratore'>
                        <input type='hidden' name='stato_principale' value='ricerca_full'>
                                                    <input type='hidden' name='stato_secondario' value='ricerca_display'>
                                                                        <input type='hidden' name='current_user' value='3000132'>
                        <input type='hidden' name='current_key' value='eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1aWQiOiJtY3VzZXJfMTcyMDA4MTUzOS42OTk5ZDk0M2YxNGVfbWNyLWZvcm1hdG9yaTEiLCJ0eXBlIjoidXNlciIsInRpbWUiOjE3OTIxNDM0ODksImRhdGUiOiIxNlwvMTBcLzIwMjYgMTE6MzgiLCJleHBpcmF0aW9uIjoxNzk0NzM1NDg5fQ.MJFlALYYh2JL4PQjegJH0R8OiaYJMDISZuqlF6eRZJU'>
                    </form>
                                                                            <form method='post' action='/mastercom/index.php' class="mc-adm-form">
                        <button type="submit" class="mc-adm-pill mc-adm-pill--active" title="Impostazioni Generali" aria-current="page">
                            <span class="mc-adm-chip mc-adm-chip--orange"><span class="mc-adm-ic" style="-webkit-mask-image:url(icone/svg/settings49.svg);mask-image:url(icone/svg/settings49.svg);" aria-hidden="true"></span></span>
                            <span class="mc-adm-pill-label">Configuración</span>                        </button>
                        <input type='hidden' name='form_stato' value='amministratore'>
                        <input type='hidden' name='stato_principale' value='impostazioni_principale'>
                                                                        <input type='hidden' name='current_user' value='3000132'>
                        <input type='hidden' name='current_key' value='eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1aWQiOiJtY3VzZXJfMTcyMDA4MTUzOS42OTk5ZDk0M2YxNGVfbWNyLWZvcm1hdG9yaTEiLCJ0eXBlIjoidXNlciIsInRpbWUiOjE3OTIxNDM0ODksImRhdGUiOiIxNlwvMTBcLzIwMjYgMTE6MzgiLCJleHBpcmF0aW9uIjoxNzk0NzM1NDg5fQ.MJFlALYYh2JL4PQjegJH0R8OiaYJMDISZuqlF6eRZJU'>
                    </form>
                                                                            <form method='post' action='/mastercom/index.php' class="mc-adm-form">
                        <button type="submit" class="mc-adm-pill" title="Gestione Orario">
                            <span class="mc-adm-chip mc-adm-chip--orange"><span class="mc-adm-ic" style="-webkit-mask-image:url(icone/svg/clock88.svg);mask-image:url(icone/svg/clock88.svg);" aria-hidden="true"></span></span>
                            <span class="mc-adm-pill-label">HORARIO</span>                        </button>
                        <input type='hidden' name='form_stato' value='amministratore'>
                        <input type='hidden' name='stato_principale' value='gestione_orario_principale'>
                                                                        <input type='hidden' name='current_user' value='3000132'>
                        <input type='hidden' name='current_key' value='eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1aWQiOiJtY3VzZXJfMTcyMDA4MTUzOS42OTk5ZDk0M2YxNGVfbWNyLWZvcm1hdG9yaTEiLCJ0eXBlIjoidXNlciIsInRpbWUiOjE3OTIxNDM0ODksImRhdGUiOiIxNlwvMTBcLzIwMjYgMTE6MzgiLCJleHBpcmF0aW9uIjoxNzk0NzM1NDg5fQ.MJFlALYYh2JL4PQjegJH0R8OiaYJMDISZuqlF6eRZJU'>
                    </form>
                                                                            <form method='post' action='/mastercom/index.php' class="mc-adm-form">
                        <button type="submit" class="mc-adm-pill" title="Stampe Generali">
                            <span class="mc-adm-chip mc-adm-chip--blue"><span class="mc-adm-ic" style="-webkit-mask-image:url(icone/svg/printer88.svg);mask-image:url(icone/svg/printer88.svg);" aria-hidden="true"></span></span>
                            <span class="mc-adm-pill-label">IMPRIMIR</span>                        </button>
                        <input type='hidden' name='form_stato' value='amministratore'>
                        <input type='hidden' name='stato_principale' value='stampe_principale'>
                                                                        <input type='hidden' name='current_user' value='3000132'>
                        <input type='hidden' name='current_key' value='eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1aWQiOiJtY3VzZXJfMTcyMDA4MTUzOS42OTk5ZDk0M2YxNGVfbWNyLWZvcm1hdG9yaTEiLCJ0eXBlIjoidXNlciIsInRpbWUiOjE3OTIxNDM0ODksImRhdGUiOiIxNlwvMTBcLzIwMjYgMTE6MzgiLCJleHBpcmF0aW9uIjoxNzk0NzM1NDg5fQ.MJFlALYYh2JL4PQjegJH0R8OiaYJMDISZuqlF6eRZJU'>
                    </form>
                                                                            <form method='post' action='/mastercom/index.php' class="mc-adm-form">
                        <button type="submit" class="mc-adm-pill" title="Gestione Studenti">
                            <span class="mc-adm-chip mc-adm-chip--green"><span class="mc-adm-ic" style="-webkit-mask-image:url(icone/svg/personal29.svg);mask-image:url(icone/svg/personal29.svg);" aria-hidden="true"></span></span>
                            <span class="mc-adm-pill-label">CIUDADANOS</span>                        </button>
                        <input type='hidden' name='form_stato' value='amministratore'>
                        <input type='hidden' name='stato_principale' value='classi_principale'>
                                                                        <input type='hidden' name='current_user' value='3000132'>
                        <input type='hidden' name='current_key' value='eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1aWQiOiJtY3VzZXJfMTcyMDA4MTUzOS42OTk5ZDk0M2YxNGVfbWNyLWZvcm1hdG9yaTEiLCJ0eXBlIjoidXNlciIsInRpbWUiOjE3OTIxNDM0ODksImRhdGUiOiIxNlwvMTBcLzIwMjYgMTE6MzgiLCJleHBpcmF0aW9uIjoxNzk0NzM1NDg5fQ.MJFlALYYh2JL4PQjegJH0R8OiaYJMDISZuqlF6eRZJU'>
                    </form>
                                                                            <form method='post' action='/mastercom/index.php' class="mc-adm-form">
                        <button type="submit" class="mc-adm-pill" title="Gestione Mense">
                            <span class="mc-adm-chip mc-adm-chip--green"><span class="mc-adm-ic" style="-webkit-mask-image:url(icone/svg/knife-and-fork.svg);mask-image:url(icone/svg/knife-and-fork.svg);" aria-hidden="true"></span></span>
                            <span class="mc-adm-pill-label">COMEDOR</span>                        </button>
                        <input type='hidden' name='form_stato' value='amministratore'>
                        <input type='hidden' name='stato_principale' value='mense_principale'>
                                                                        <input type='hidden' name='current_user' value='3000132'>
                        <input type='hidden' name='current_key' value='eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1aWQiOiJtY3VzZXJfMTcyMDA4MTUzOS42OTk5ZDk0M2YxNGVfbWNyLWZvcm1hdG9yaTEiLCJ0eXBlIjoidXNlciIsInRpbWUiOjE3OTIxNDM0ODksImRhdGUiOiIxNlwvMTBcLzIwMjYgMTE6MzgiLCJleHBpcmF0aW9uIjoxNzk0NzM1NDg5fQ.MJFlALYYh2JL4PQjegJH0R8OiaYJMDISZuqlF6eRZJU'>
                    </form>
                                                                            <form method='post' action='/mastercom/index.php' class="mc-adm-form">
                        <button type="submit" class="mc-adm-pill" title="Sezione amministrativa dirigenti">
                            <span class="mc-adm-chip mc-adm-chip--purple"><span class="mc-adm-ic" style="-webkit-mask-image:url(icone/svg/ascending7.svg);mask-image:url(icone/svg/ascending7.svg);" aria-hidden="true"></span></span>
                            <span class="mc-adm-pill-label">ADMIN.</span>                        </button>
                        <input type='hidden' name='form_stato' value='amministratore'>
                        <input type='hidden' name='stato_principale' value='amministrazione_principale'>
                                                                        <input type='hidden' name='current_user' value='3000132'>
                        <input type='hidden' name='current_key' value='eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1aWQiOiJtY3VzZXJfMTcyMDA4MTUzOS42OTk5ZDk0M2YxNGVfbWNyLWZvcm1hdG9yaTEiLCJ0eXBlIjoidXNlciIsInRpbWUiOjE3OTIxNDM0ODksImRhdGUiOiIxNlwvMTBcLzIwMjYgMTE6MzgiLCJleHBpcmF0aW9uIjoxNzk0NzM1NDg5fQ.MJFlALYYh2JL4PQjegJH0R8OiaYJMDISZuqlF6eRZJU'>
                    </form>
                                                                            <form method='post' action='/mastercom/index.php' class="mc-adm-form">
                        <button type="submit" class="mc-adm-pill" title="Pannello Dirigente">
                            <span class="mc-adm-chip mc-adm-chip--purple"><span class="mc-adm-ic" style="-webkit-mask-image:url(icone/svg/gear25.svg);mask-image:url(icone/svg/gear25.svg);" aria-hidden="true"></span></span>
                            <span class="mc-adm-pill-label">PRESIDENCIA</span>                        </button>
                        <input type='hidden' name='form_stato' value='amministratore'>
                        <input type='hidden' name='stato_principale' value='dirigente_principale'>
                                                                        <input type='hidden' name='current_user' value='3000132'>
                        <input type='hidden' name='current_key' value='eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1aWQiOiJtY3VzZXJfMTcyMDA4MTUzOS42OTk5ZDk0M2YxNGVfbWNyLWZvcm1hdG9yaTEiLCJ0eXBlIjoidXNlciIsInRpbWUiOjE3OTIxNDM0ODksImRhdGUiOiIxNlwvMTBcLzIwMjYgMTE6MzgiLCJleHBpcmF0aW9uIjoxNzk0NzM1NDg5fQ.MJFlALYYh2JL4PQjegJH0R8OiaYJMDISZuqlF6eRZJU'>
                    </form>
                                                </nav>

                        <div class="mc-adm-menu">
                <button type="button" class="mc-adm-more" id="mc-adm-altro-trigger" aria-haspopup="true" aria-expanded="false" aria-controls="mc-adm-altro-panel">
                                            Otras funciones <span aria-hidden="true">&#9662;</span>
                                    </button>
                <div class="mc-adm-panel mc-adm-panel--altro" id="mc-adm-altro-panel" hidden>
                                            <div class="mc-adm-group-title">Valutazioni</div>
                                                    <form method='post' action='/mastercom/index.php' class="mc-adm-form">
                                <button type="submit" class="mc-adm-item" title="Gestione Voti">
                                    <span class="mc-adm-chip mc-adm-chip--sm mc-adm-chip--green"><span class="mc-adm-ic" style="-webkit-mask-image:url(icone/svg/underline6.svg);mask-image:url(icone/svg/underline6.svg);" aria-hidden="true"></span></span>
                                    <span class="mc-adm-item-label">VOTAR</span>
                                </button>
                                <input type='hidden' name='form_stato' value='amministratore'>
                                <input type='hidden' name='stato_principale' value='voti_principale'>
                                                                                                <input type='hidden' name='current_user' value='3000132'>
                                <input type='hidden' name='current_key' value='eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1aWQiOiJtY3VzZXJfMTcyMDA4MTUzOS42OTk5ZDk0M2YxNGVfbWNyLWZvcm1hdG9yaTEiLCJ0eXBlIjoidXNlciIsInRpbWUiOjE3OTIxNDM0ODksImRhdGUiOiIxNlwvMTBcLzIwMjYgMTE6MzgiLCJleHBpcmF0aW9uIjoxNzk0NzM1NDg5fQ.MJFlALYYh2JL4PQjegJH0R8OiaYJMDISZuqlF6eRZJU'>
                            </form>
                                                    <form method='post' action='/mastercom/index.php' class="mc-adm-form">
                                <button type="submit" class="mc-adm-item" title="Inserimento Rapido Entrate in Ritardo">
                                    <span class="mc-adm-chip mc-adm-chip--sm mc-adm-chip--green"><span class="mc-adm-ic" style="-webkit-mask-image:url(icone/svg/turn18.svg);mask-image:url(icone/svg/turn18.svg);" aria-hidden="true"></span></span>
                                    <span class="mc-adm-item-label">RETARDOS</span>
                                </button>
                                <input type='hidden' name='form_stato' value='amministratore'>
                                <input type='hidden' name='stato_principale' value='entrate_ritardo_principale'>
                                                                                                <input type='hidden' name='current_user' value='3000132'>
                                <input type='hidden' name='current_key' value='eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1aWQiOiJtY3VzZXJfMTcyMDA4MTUzOS42OTk5ZDk0M2YxNGVfbWNyLWZvcm1hdG9yaTEiLCJ0eXBlIjoidXNlciIsInRpbWUiOjE3OTIxNDM0ODksImRhdGUiOiIxNlwvMTBcLzIwMjYgMTE6MzgiLCJleHBpcmF0aW9uIjoxNzk0NzM1NDg5fQ.MJFlALYYh2JL4PQjegJH0R8OiaYJMDISZuqlF6eRZJU'>
                            </form>
                                                    <form method='post' action='/mastercom/index.php' class="mc-adm-form">
                                <button type="submit" class="mc-adm-item" title="Gestione Assenze">
                                    <span class="mc-adm-chip mc-adm-chip--sm mc-adm-chip--green"><span class="mc-adm-ic" style="-webkit-mask-image:url(icone/svg/student52.svg);mask-image:url(icone/svg/student52.svg);" aria-hidden="true"></span></span>
                                    <span class="mc-adm-item-label">AUSENCIAS
                            
                                    </span>
                                </button>
                                <input type='hidden' name='form_stato' value='amministratore'>
                                <input type='hidden' name='stato_principale' value='assenze_principale'>
                                                                                                <input type='hidden' name='current_user' value='3000132'>
                                <input type='hidden' name='current_key' value='eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1aWQiOiJtY3VzZXJfMTcyMDA4MTUzOS42OTk5ZDk0M2YxNGVfbWNyLWZvcm1hdG9yaTEiLCJ0eXBlIjoidXNlciIsInRpbWUiOjE3OTIxNDM0ODksImRhdGUiOiIxNlwvMTBcLzIwMjYgMTE6MzgiLCJleHBpcmF0aW9uIjoxNzk0NzM1NDg5fQ.MJFlALYYh2JL4PQjegJH0R8OiaYJMDISZuqlF6eRZJU'>
                            </form>
                                                    <form method='post' action='/mastercom/index.php' class="mc-adm-form">
                                <button type="submit" class="mc-adm-item" title="Gestione Giustificazioni">
                                    <span class="mc-adm-chip mc-adm-chip--sm mc-adm-chip--green"><span class="mc-adm-ic" style="-webkit-mask-image:url(icone/svg/verified9.svg);mask-image:url(icone/svg/verified9.svg);" aria-hidden="true"></span></span>
                                    <span class="mc-adm-item-label">JUST.</span>
                                </button>
                                <input type='hidden' name='form_stato' value='amministratore'>
                                <input type='hidden' name='stato_principale' value='giustificazioni_principale'>
                                                                                                <input type='hidden' name='current_user' value='3000132'>
                                <input type='hidden' name='current_key' value='eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1aWQiOiJtY3VzZXJfMTcyMDA4MTUzOS42OTk5ZDk0M2YxNGVfbWNyLWZvcm1hdG9yaTEiLCJ0eXBlIjoidXNlciIsInRpbWUiOjE3OTIxNDM0ODksImRhdGUiOiIxNlwvMTBcLzIwMjYgMTE6MzgiLCJleHBpcmF0aW9uIjoxNzk0NzM1NDg5fQ.MJFlALYYh2JL4PQjegJH0R8OiaYJMDISZuqlF6eRZJU'>
                            </form>
                                                    <form method='post' action='/mastercom/index.php' class="mc-adm-form">
                                <button type="submit" class="mc-adm-item" title="Gestione Pagelle e Pagelline">
                                    <span class="mc-adm-chip mc-adm-chip--sm mc-adm-chip--purple"><span class="mc-adm-ic" style="-webkit-mask-image:url(icone/svg/educational24.svg);mask-image:url(icone/svg/educational24.svg);" aria-hidden="true"></span></span>
                                    <span class="mc-adm-item-label">BOLETAS</span>
                                </button>
                                <input type='hidden' name='form_stato' value='amministratore'>
                                <input type='hidden' name='stato_principale' value='pagelle_principale'>
                                                                                                <input type='hidden' name='current_user' value='3000132'>
                                <input type='hidden' name='current_key' value='eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1aWQiOiJtY3VzZXJfMTcyMDA4MTUzOS42OTk5ZDk0M2YxNGVfbWNyLWZvcm1hdG9yaTEiLCJ0eXBlIjoidXNlciIsInRpbWUiOjE3OTIxNDM0ODksImRhdGUiOiIxNlwvMTBcLzIwMjYgMTE6MzgiLCJleHBpcmF0aW9uIjoxNzk0NzM1NDg5fQ.MJFlALYYh2JL4PQjegJH0R8OiaYJMDISZuqlF6eRZJU'>
                            </form>
                                                    <form method='post' action='/mastercom/index.php' class="mc-adm-form">
                                <button type="submit" class="mc-adm-item" title="Gestione esami di stato">
                                    <span class="mc-adm-chip mc-adm-chip--sm mc-adm-chip--purple"><span class="mc-adm-ic" style="-webkit-mask-image:url(icone/svg/graduate32.svg);mask-image:url(icone/svg/graduate32.svg);" aria-hidden="true"></span></span>
                                    <span class="mc-adm-item-label">EXAMENES</span>
                                </button>
                                <input type='hidden' name='form_stato' value='amministratore'>
                                <input type='hidden' name='stato_principale' value='esami_stato_principale'>
                                                                                                <input type='hidden' name='current_user' value='3000132'>
                                <input type='hidden' name='current_key' value='eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1aWQiOiJtY3VzZXJfMTcyMDA4MTUzOS42OTk5ZDk0M2YxNGVfbWNyLWZvcm1hdG9yaTEiLCJ0eXBlIjoidXNlciIsInRpbWUiOjE3OTIxNDM0ODksImRhdGUiOiIxNlwvMTBcLzIwMjYgMTE6MzgiLCJleHBpcmF0aW9uIjoxNzk0NzM1NDg5fQ.MJFlALYYh2JL4PQjegJH0R8OiaYJMDISZuqlF6eRZJU'>
                            </form>
                                                                    <div class="mc-adm-group-title">ROLEPLAY</div>
                                                    <form method='post' action='/mastercom/index.php' class="mc-adm-form">
                                <button type="submit" class="mc-adm-item" title="Gestione Eventi e Gite">
                                    <span class="mc-adm-chip mc-adm-chip--sm mc-adm-chip--orange"><span class="mc-adm-ic" style="-webkit-mask-image:url(icone/svg/front15.svg);mask-image:url(icone/svg/front15.svg);" aria-hidden="true"></span></span>
                                    <span class="mc-adm-item-label">EVENTOS</span>
                                </button>
                                <input type='hidden' name='form_stato' value='amministratore'>
                                <input type='hidden' name='stato_principale' value='eventi_principale'>
                                                                                                <input type='hidden' name='current_user' value='3000132'>
                                <input type='hidden' name='current_key' value='eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1aWQiOiJtY3VzZXJfMTcyMDA4MTUzOS42OTk5ZDk0M2YxNGVfbWNyLWZvcm1hdG9yaTEiLCJ0eXBlIjoidXNlciIsInRpbWUiOjE3OTIxNDM0ODksImRhdGUiOiIxNlwvMTBcLzIwMjYgMTE6MzgiLCJleHBpcmF0aW9uIjoxNzk0NzM1NDg5fQ.MJFlALYYh2JL4PQjegJH0R8OiaYJMDISZuqlF6eRZJU'>
                            </form>
                                                    <form method='post' action='/mastercom/index.php' class="mc-adm-form">
                                <button type="submit" class="mc-adm-item" title="Gestione SMS">
                                    <span class="mc-adm-chip mc-adm-chip--sm mc-adm-chip--blue"><span class="mc-adm-ic" style="-webkit-mask-image:url(icone/svg/smartphone.svg);mask-image:url(icone/svg/smartphone.svg);" aria-hidden="true"></span></span>
                                    <span class="mc-adm-item-label">SMS</span>
                                </button>
                                <input type='hidden' name='form_stato' value='amministratore'>
                                <input type='hidden' name='stato_principale' value='sms_principale'>
                                                                                                <input type='hidden' name='current_user' value='3000132'>
                                <input type='hidden' name='current_key' value='eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1aWQiOiJtY3VzZXJfMTcyMDA4MTUzOS42OTk5ZDk0M2YxNGVfbWNyLWZvcm1hdG9yaTEiLCJ0eXBlIjoidXNlciIsInRpbWUiOjE3OTIxNDM0ODksImRhdGUiOiIxNlwvMTBcLzIwMjYgMTE6MzgiLCJleHBpcmF0aW9uIjoxNzk0NzM1NDg5fQ.MJFlALYYh2JL4PQjegJH0R8OiaYJMDISZuqlF6eRZJU'>
                            </form>
                                                                    <div class="mc-adm-group-title">ADMINISTRACIÓN</div>
                                                    <form method='post' action='/mastercom/index.php' class="mc-adm-form">
                                <button type="submit" class="mc-adm-item" title="Utilita">
                                    <span class="mc-adm-chip mc-adm-chip--sm mc-adm-chip--green"><span class="mc-adm-ic" style="-webkit-mask-image:url(icone/svg/show6.svg);mask-image:url(icone/svg/show6.svg);" aria-hidden="true"></span></span>
                                    <span class="mc-adm-item-label">UTILIDADES</span>
                                </button>
                                <input type='hidden' name='form_stato' value='amministratore'>
                                <input type='hidden' name='stato_principale' value='manutenzione_scuola'>
                                                                                                <input type='hidden' name='current_user' value='3000132'>
                                <input type='hidden' name='current_key' value='eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1aWQiOiJtY3VzZXJfMTcyMDA4MTUzOS42OTk5ZDk0M2YxNGVfbWNyLWZvcm1hdG9yaTEiLCJ0eXBlIjoidXNlciIsInRpbWUiOjE3OTIxNDM0ODksImRhdGUiOiIxNlwvMTBcLzIwMjYgMTE6MzgiLCJleHBpcmF0aW9uIjoxNzk0NzM1NDg5fQ.MJFlALYYh2JL4PQjegJH0R8OiaYJMDISZuqlF6eRZJU'>
                            </form>
                                                    <form method='post' action='/mastercom/index.php' class="mc-adm-form">
                                <button type="submit" class="mc-adm-item" title="Gestione Fascicoli">
                                    <span class="mc-adm-chip mc-adm-chip--sm mc-adm-chip--purple"><span class="mc-adm-ic" style="-webkit-mask-image:url(icone/svg/notebook59.svg);mask-image:url(icone/svg/notebook59.svg);" aria-hidden="true"></span></span>
                                    <span class="mc-adm-item-label">PAQUETES</span>
                                </button>
                                <input type='hidden' name='form_stato' value='amministratore'>
                                <input type='hidden' name='stato_principale' value='fascicoli_principale'>
                                                                                                <input type='hidden' name='current_user' value='3000132'>
                                <input type='hidden' name='current_key' value='eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1aWQiOiJtY3VzZXJfMTcyMDA4MTUzOS42OTk5ZDk0M2YxNGVfbWNyLWZvcm1hdG9yaTEiLCJ0eXBlIjoidXNlciIsInRpbWUiOjE3OTIxNDM0ODksImRhdGUiOiIxNlwvMTBcLzIwMjYgMTE6MzgiLCJleHBpcmF0aW9uIjoxNzk0NzM1NDg5fQ.MJFlALYYh2JL4PQjegJH0R8OiaYJMDISZuqlF6eRZJU'>
                            </form>
                                                    <form method='post' action='/mastercom/index.php' class="mc-adm-form">
                                <button type="submit" class="mc-adm-item" title="Gestione Flussi">
                                    <span class="mc-adm-chip mc-adm-chip--sm mc-adm-chip--green"><span class="mc-adm-ic" style="-webkit-mask-image:url(icone/svg/download152.svg);mask-image:url(icone/svg/download152.svg);" aria-hidden="true"></span></span>
                                    <span class="mc-adm-item-label">FLUJOS</span>
                                </button>
                                <input type='hidden' name='form_stato' value='amministratore'>
                                <input type='hidden' name='stato_principale' value='flussi'>
                                                                                                <input type='hidden' name='current_user' value='3000132'>
                                <input type='hidden' name='current_key' value='eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1aWQiOiJtY3VzZXJfMTcyMDA4MTUzOS42OTk5ZDk0M2YxNGVfbWNyLWZvcm1hdG9yaTEiLCJ0eXBlIjoidXNlciIsInRpbWUiOjE3OTIxNDM0ODksImRhdGUiOiIxNlwvMTBcLzIwMjYgMTE6MzgiLCJleHBpcmF0aW9uIjoxNzk0NzM1NDg5fQ.MJFlALYYh2JL4PQjegJH0R8OiaYJMDISZuqlF6eRZJU'>
                            </form>
                                                            </div>
            </div>
            
            <span class="mc-adm-sp"></span>

            
                            <form method='post' action='/mastercom/index.php' class="mc-adm-form">
                    <span class="mc-adm-year">
                        <select name="anno_consultazione" onChange="this.form.submit();" aria-label="Anno di consultazione">
                            <OPTION value="">Selezionare l'anno</OPTION>
                                                            <OPTION value="mastercom_2018_2019">2018/2019</OPTION>
                                                            <OPTION value="mastercom_2019_2020">2019/2020</OPTION>
                                                            <OPTION value="mastercom_2020_2021">2020/2021</OPTION>
                                                            <OPTION value="mastercom_2021_2022">2021/2022</OPTION>
                                                            <OPTION value="mastercom_2022_2023">2022/2023</OPTION>
                                                            <OPTION value="mastercom_2023_2024">2023/2024</OPTION>
                                                            <OPTION value="mastercom_2024_2025">2024/2025</OPTION>
                                                            <OPTION value="mastercom_2025_2026">2025/2026</OPTION>
                                                            <OPTION value="mastercom_2026_2027" selected>2026/2027 · in corso</OPTION>
                                                    </select>
                    </span>
                    <input type='hidden' name='form_stato' value='amministratore'>
                    <input type='hidden' name='stato_principale' value='impostazioni_principale'>
                    <input type='hidden' name='stato_secondario' value='visualizza_anni_precedenti_update'>
                    <input type='hidden' name='current_user' value='3000132'>
                    <input type='hidden' name='current_key' value='eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1aWQiOiJtY3VzZXJfMTcyMDA4MTUzOS42OTk5ZDk0M2YxNGVfbWNyLWZvcm1hdG9yaTEiLCJ0eXBlIjoidXNlciIsInRpbWUiOjE3OTIxNDM0ODksImRhdGUiOiIxNlwvMTBcLzIwMjYgMTE6MzgiLCJleHBpcmF0aW9uIjoxNzk0NzM1NDg5fQ.MJFlALYYh2JL4PQjegJH0R8OiaYJMDISZuqlF6eRZJU'>
                </form>
                                                                
            <span class="mc-adm-sep" aria-hidden="true"></span>

                                                                        <span class="mc-adm-ic2-wrap">
                            <form id="btn-messenger" method="POST" target='_blank' action="/mastercom/index.php" class="mc-adm-form">
                                <button type="submit" class="mc-adm-ic2 mc-adm-ic2--msg" title="Messaggistica interna" aria-label="Messaggistica interna">
                                    
                                    <svg viewBox="0 0 775.8 771.4" width="36" height="36" aria-hidden="true" focusable="false">
                                        <circle fill="#FFFFFF" cx="387.9" cy="385.7" r="373.1"/>
                                        <g fill="#084783">
                                            <path d="M191.5,509.2c-17.1,0-33.8-4.4-49-12.9c-7.8-4-10.8-14.1-6.2-21.6c15.5-24.7,21.1-54.9,14-83.4c-7.3-29.5-18-54.3-17.9-85.5c0.3-109.4,91.3-198.1,200.6-196c105.6,2.1,192.6,90.9,192.6,196.5c0,137.9-144.5,234.8-272.2,181.5C236,501.6,213.9,509.2,191.5,509.2L191.5,509.2z M170.8,475.5c24,7.5,51.1,1.5,69.6-16.4c4.6-4.4,11.4-5.5,17.1-2.8c109.3,52.2,237.8-29.6,237.8-149.9c0-89.8-73-164.3-162.8-166.1C240,138.5,163.1,213.4,162.9,306c-0.1,29.6,11.5,53.3,17.8,81.4C187.4,416.9,183.9,448.1,170.8,475.5L170.8,475.5z"/>
                                            <path d="M585.4,621.8c-22.3,0-44.5-7.5-62-21.3c-67.9,28.3-148.6,15.4-204.2-32.6c-6.4-5.5-7.1-15.1-1.6-21.5s15.1-7.1,21.4-1.6c49.4,42.6,121.6,52.2,180.4,24.1c5.7-2.7,12.6-1.6,17.1,2.8c18.5,17.9,45.6,23.9,69.6,16.4c-15.5-32.3-17.6-69.2-5.6-103.4c0.1-0.3,0.2-0.6,0.4-0.9c8.8-20.6,13.2-42.6,13.1-65.2c-0.1-39.9-13.4-76.8-38.4-106.7c-5.4-6.4-4.5-16,1.9-21.4s16-4.5,21.4,1.9c29.2,34.9,45.3,79.7,45.4,126.1c0.1,26.6-5.1,52.4-15.3,76.7c-10.7,31.1-5.8,64.4,11.4,92.1c4.7,7.6,1.6,17.6-6.2,21.6C619.3,617.4,602.6,621.8,585.4,621.8L585.4,621.8z"/>
                                            <ellipse cx="329.1" cy="307.1" rx="24.1" ry="24.1"/>
                                            <ellipse cx="240.5" cy="307.1" rx="24.1" ry="24.1"/>
                                            <ellipse cx="417.8" cy="307.1" rx="24.1" ry="24.1"/>
                                        </g>
                                    </svg>
                                </button>
                                <input type='hidden' name='stato_principale' value='messenger'>
                                <input type='hidden' name='form_stato' value='amministratore'>
                                <input type='hidden' name='current_user' value='3000132'>
                                <input type='hidden' name='current_key' id="current_key" value='eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1aWQiOiJtY3VzZXJfMTcyMDA4MTUzOS42OTk5ZDk0M2YxNGVfbWNyLWZvcm1hdG9yaTEiLCJ0eXBlIjoidXNlciIsInRpbWUiOjE3OTIxNDM0ODksImRhdGUiOiIxNlwvMTBcLzIwMjYgMTE6MzgiLCJleHBpcmF0aW9uIjoxNzk0NzM1NDg5fQ.MJFlALYYh2JL4PQjegJH0R8OiaYJMDISZuqlF6eRZJU'>
                            </form>
                            <div id="messenger-notify" role="status"></div>
                        </span>
                        <script type="text/javascript" language="JavaScript">
                            $(document).ready( function(){
                                checkMessaggiNuovoMessenger();

                                var intervalMessaggi = setInterval(function () {
                                    checkMessaggiNuovoMessenger();
                                }, 60000); // ogni 1 minuto
                            });
                        </script>
                                                
            <form method='post' action='/mastercom/index.php' target='new_tab_218' class="mc-adm-form">
                <button type="submit" class="mc-adm-ic2" title="Apri nuova finestra" aria-label="Apri nuova finestra">
                    <span class="mc-adm-ic" style="-webkit-mask-image:url(icone/svg/add164.svg);mask-image:url(icone/svg/add164.svg);" aria-hidden="true"></span>
                </button>
                <input type='hidden' name='form_stato' value='amministratore'>
                <input type='hidden' name='current_user' value='3000132'>
                <input type='hidden' name='current_key' value='eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1aWQiOiJtY3VzZXJfMTcyMDA4MTUzOS42OTk5ZDk0M2YxNGVfbWNyLWZvcm1hdG9yaTEiLCJ0eXBlIjoidXNlciIsInRpbWUiOjE3OTIxNDM0ODksImRhdGUiOiIxNlwvMTBcLzIwMjYgMTE6MzgiLCJleHBpcmF0aW9uIjoxNzk0NzM1NDg5fQ.MJFlALYYh2JL4PQjegJH0R8OiaYJMDISZuqlF6eRZJU'>
            </form>

            <div class="mc-adm-menu">
                <button type="button" class="mc-adm-avatar" id="mc-adm-user-trigger" aria-label="Menu utente" aria-haspopup="true" aria-expanded="false" aria-controls="mc-adm-user-panel" title="Menu utente">IS</button>
                <div class="mc-adm-panel mc-adm-panel--user" id="mc-adm-user-panel" hidden>
                    <div class="mc-adm-user-head">
                        <b>Istituto Segreteria</b>
                        <div class="mc-adm-user-sub"></div>
                    </div>
                                                                                    
                        <form method='post' action='/mastercom/index.php' class="mc-adm-form">
                            <button type="submit" class="mc-adm-item">
                                <span class="mc-adm-chip mc-adm-chip--sm mc-adm-chip--blue"><span class="mc-adm-ic" style="-webkit-mask-image:url(icone/svg/votazione.svg);mask-image:url(icone/svg/votazione.svg);" aria-hidden="true"></span></span>
                                <span class="mc-adm-item-label">Le mie votazioni</span>
                                                            </button>
                            <input type='hidden' name='form_stato' value='amministratore'>
                            <input type='hidden' name='stato_principale' value='votazioni_mie'>
                            <input type='hidden' name='current_user' value='3000132'>
                            <input type='hidden' name='current_key' value='eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1aWQiOiJtY3VzZXJfMTcyMDA4MTUzOS42OTk5ZDk0M2YxNGVfbWNyLWZvcm1hdG9yaTEiLCJ0eXBlIjoidXNlciIsInRpbWUiOjE3OTIxNDM0ODksImRhdGUiOiIxNlwvMTBcLzIwMjYgMTE6MzgiLCJleHBpcmF0aW9uIjoxNzk0NzM1NDg5fQ.MJFlALYYh2JL4PQjegJH0R8OiaYJMDISZuqlF6eRZJU'>
                        </form>
                                        <form method='post' action='/mastercom/index.php' class="mc-adm-form">
                        <button type="submit" class="mc-adm-item">
                            <span class="mc-adm-chip mc-adm-chip--sm mc-adm-chip--green"><span class="mc-adm-ic" style="-webkit-mask-image:url(icone/svg/settings49.svg);mask-image:url(icone/svg/settings49.svg);" aria-hidden="true"></span></span>
                            <span class="mc-adm-item-label">Impostazioni</span>
                        </button>
                        <input type='hidden' name='form_stato' value='form_stato'>
                        <input type='hidden' name='stato_principale' value='impostazioni_utente_principale'>
                        <input type='hidden' name='current_user' value='3000132'>
                        <input type='hidden' name='current_key' value='eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1aWQiOiJtY3VzZXJfMTcyMDA4MTUzOS42OTk5ZDk0M2YxNGVfbWNyLWZvcm1hdG9yaTEiLCJ0eXBlIjoidXNlciIsInRpbWUiOjE3OTIxNDM0ODksImRhdGUiOiIxNlwvMTBcLzIwMjYgMTE6MzgiLCJleHBpcmF0aW9uIjoxNzk0NzM1NDg5fQ.MJFlALYYh2JL4PQjegJH0R8OiaYJMDISZuqlF6eRZJU'>
                    </form>
                    <form method='post' action='/mastercom/index.php' name='form_cambio_pwd' class="mc-adm-form">
                        <button type="button" class="mc-adm-item" onclick="if (confirm('Si desidera procedere al cambio password?'))
                                {
                                    document.forms['form_cambio_pwd'].submit();
                                }">
                            <span class="mc-adm-chip mc-adm-chip--sm mc-adm-chip--orange"><span class="mc-adm-ic" style="-webkit-mask-image:url(icone/svg/locked58.svg);mask-image:url(icone/svg/locked58.svg);" aria-hidden="true"></span></span>
                            <span class="mc-adm-item-label">Cambio password</span>
                        </button>
                        <input type='hidden' name='form_stato' value='form_stato'>
                        <input type='hidden' name='stato_principale' value='cambio_password'>
                        <input type='hidden' name='current_user' value='3000132'>
                        <input type='hidden' name='current_key' value='eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1aWQiOiJtY3VzZXJfMTcyMDA4MTUzOS42OTk5ZDk0M2YxNGVfbWNyLWZvcm1hdG9yaTEiLCJ0eXBlIjoidXNlciIsInRpbWUiOjE3OTIxNDM0ODksImRhdGUiOiIxNlwvMTBcLzIwMjYgMTE6MzgiLCJleHBpcmF0aW9uIjoxNzk0NzM1NDg5fQ.MJFlALYYh2JL4PQjegJH0R8OiaYJMDISZuqlF6eRZJU'>
                    </form>
                        
<button type="button" class="mc-adm-item" onclick="signOutGoogle(); window.location.href='index.php';">
                            <span class="mc-adm-chip mc-adm-chip--sm mc-adm-chip--red"><span class="mc-adm-ic" style="-webkit-mask-image:url(icone/svg/exit13.svg);mask-image:url(icone/svg/exit13.svg);" aria-hidden="true"></span></span>
                            <span class="mc-adm-item-label">Salir</span>
                        </button>
                        <input type='hidden' name='form_stato' value='logout'>
                        <input type='hidden' name='stato_sesabilita' value='1'>
                        <input type='hidden' name='current_user' value='3000132'>
                        <input type='hidden' name='current_key' value='eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1aWQiOiJtY3VzZXJfMTcyMDA4MTUzOS42OTk5ZDk0M2YxNGVfbWNyLWZvcm1hdG9yaTEiLCJ0eXBlIjoidXNlciIsInRpbWUiOjE3OTIxNDM0ODksImRhdGUiOiIxNlwvMTBcLzIwMjYgMTE6MzgiLCJleHBpcmF0aW9uIjoxNzk0NzM1NDg5fQ.MJFlALYYh2JL4PQjegJH0R8OiaYJMDISZuqlF6eRZJU'>
                    </form>
                </div>
                </div>
            </header>

        

        

        

        

        

        </div>
        
        
        <script type="text/javascript">
        (function(){
            function mcAdmPlacePanel(t, p){
                p.style.left = 'auto';
                p.style.right = '0';
                p.style.transform = '';
                var r = p.getBoundingClientRect();
                var margin = 8;
                if(r.left < margin){
                    p.style.right = 'auto';
                    p.style.left = '0';
                    r = p.getBoundingClientRect();
                }
                if(r.right > window.innerWidth - margin){
                    p.style.transform = 'translateX(-' + Math.round(r.right - (window.innerWidth - margin)) + 'px)';
                    r = p.getBoundingClientRect();
                }
                if(r.left < margin){
                    p.style.transform = 'translateX(' + Math.round(margin - r.left) + 'px)';
                }
            }
            function mcAdmDropdown(triggerId, panelId, place){
                var t = document.getElementById(triggerId), p = document.getElementById(panelId);
                if(!t || !p) return;
                function open(){
                    p.hidden = false;
                    t.setAttribute('aria-expanded','true');
                    if(place) mcAdmPlacePanel(t, p);
                    var f = p.querySelector('button,select,input,a');
                    if(f) f.focus();
                }
                function close(focusBack){
                    p.hidden = true;
                    t.setAttribute('aria-expanded','false');
                    if(focusBack) t.focus();
                }
                t.addEventListener('click', function(){ if(p.hidden) open(); else close(false); });
                t.addEventListener('keydown', function(e){ if(e.key === 'Escape') close(true); });
                p.addEventListener('keydown', function(e){ if(e.key === 'Escape') close(true); });
                document.addEventListener('click', function(e){
                    if(!p.hidden && !p.contains(e.target) && !t.contains(e.target)) close(false);
                });
            }
            mcAdmDropdown('mc-adm-altro-trigger','mc-adm-altro-panel', true);
            mcAdmDropdown('mc-adm-user-trigger','mc-adm-user-panel', false);

            /* La banda e' position:fixed (mc-admin.css): compensa lo spazio
               sottratto al flusso con un padding-top su <body> pari alla sua
               altezza. ResizeObserver copre banner condizionali, font caricati
               dopo e hide/show via jQuery (display:none -> offsetHeight 0).
               F3: con header off (tabellone) compensazione = 0. */
            var hdr = document.getElementById('header_mastercom');
            function mcAdmHdrOffset(){
                if(!hdr || (hdr.className && hdr.className.indexOf('mc-adm-h-off') !== -1)){
                    document.body.style.paddingTop = '0px';
                    return;
                }
                // tolgo 8px perche' sono il margin generico del body. L'header e' fix quindi non lo considera gia'
                document.body.style.paddingTop = (hdr.offsetHeight - 8) + 'px';
            }
            mcAdmHdrOffset();
            window.addEventListener('load', mcAdmHdrOffset);
            window.addEventListener('resize', mcAdmHdrOffset);
            if('ResizeObserver' in window && hdr && (!hdr.className || hdr.className.indexOf('mc-adm-h-off') === -1)){
                new ResizeObserver(mcAdmHdrOffset).observe(hdr);
            }
        })();
        </script>
        
		</div>

        
 


 <style>
    .popupDialog popupDialog-button{
        width:80%;
    }
  </style>
<script type="text/javascript">
    $(window).on("load", function() {
        $('#messaggio_attesa').hide();
        $('#classi_succ_completate').hide();

        for(var year = (new Date).getFullYear() - 10; year <= (new Date).getFullYear(); year++) {
            setCampiStorici(year+'_'+(year+1));
        }

        $('[id^=messaggio_]').hide();

        $('.vc').height( $('#vc').height() );
        $('.opv').height( $('#opv').height() );
        $('.rpv').height( $('#rpv').height() );
        $('.smv').height( $('#smv').height() );


        $('.collapse_header').click(function(){
            $(this).nextUntil('tr.collapse_header').slideToggle(50);
        });
    });

    function setCampiStorici(year) {
        var enabled = $('[name="abilita_parametri['+ year +'][ABILITA_VISUALIZZAZIONE_STORICA_PORTALE]"]').is(':checked');

        $.each($('[name^="parametri['+ year +']"]'), function(i, e){
            if (enabled) {
                $(e).removeAttr('disabled');
            } else {
                $(e).attr('disabled','disabled');
            }
        });

        $.each($('[name^="bottone['+ year +']"]'), function(i, e){
            if (enabled) {
                $(e).removeAttr('disabled');
            } else {
                $(e).attr('disabled','disabled');
            }
        });
    }

    function openPopup(type, year, name) {
        var field = $('[name="popup['+ year +']['+ name +']"]');

        $('#messaggio_'+ type +'_'+ year).dialog({
            width:540,
            position: { my: "center", at: "center", of: $('[name="bottone['+ year +']['+ name +']"]') },
            buttons: {
                "Ok": function() {
                    $('[name="parametri['+ year +']['+ name +']"]').val(field.val());
                    $(this).dialog("close");
                },
                "Annulla": function() {
                    $(this).dialog("close");
                }
            }
        });

        field.val($('[name="parametri['+ year +']['+ name +']"]').val());
    }

    function show_message() {
        $('#messaggio_attesa').show();
    }

    function show_table(table) {
        if (table === 'view_table_abbinati') {
            $('#classi_succ_completate').show();
            $('#classi_succ_da_completare').hide();
        } else {
            $('#classi_succ_da_completare').show();
            $('#classi_succ_completate').hide();
        }
    }

    function seleziona_tutti(obj) {
        var cbs = obj.form.getElementsByTagName('input');
        for(var i=0; i < cbs.length; i++) {
            if(cbs[i].type == 'checkbox' && cbs[i].name == 'studenti_selezionati[]') {
                cbs[i].checked = obj.checked;
            }
        }
    }

    function valida_abbinamento_estero(form) {
        if (!form.classe_totale || form.classe_totale.value == '' || form.classe_totale.value == '-1') {
            alert("Selezionare una classe di destinazione nel menu del blocco estero");
            return false;
        }
        var checked = [];
        var cbs = form.getElementsByTagName('input');
        for (var i = 0; i < cbs.length; i++) {
            if (cbs[i].type == 'checkbox' && cbs[i].name == 'studenti_selezionati[]' && cbs[i].checked) {
                checked.push(cbs[i].value);
            }
        }
        if (checked.length == 0) {
            alert("Selezionare almeno uno studente");
            return false;
        }
        for (var j = 0; j < checked.length; j++) {
            var campoEsito = form['nuovo_esito_estero[' + checked[j] + ']'];
            if (!campoEsito || campoEsito.value == '') {
                alert("Impostare l'esito per tutti gli studenti selezionati");
                return false;
            }
        }
        return true;
    }

    function genera_credenziali_parente(id)
    {
        var data = [
            'current_user='+ $('#current_user').val(),
            'current_key='+ $('#current_key').val(),
            'form_tipo_utente=amministratore',
            'form_azione=genera_credenziali_parente'
        ];

        $.ajax({
            url: 'ajat_manager.php?'+ data.join('&'),
            async: false,
            method: 'POST',
            success: function (res)
            {
                if (typeof (res) !== 'object') {
                    return false;
                }

                if (typeof res.utente !== 'undefined') {
                    $('#parente_'+ id +'_utente').val(res.utente);
                    $('#parente_'+ id +'_codice_attivazione').val(res.codice_attivazione);
                    $('#parente_'+ id +'_commento').show();
                } else {
                    alert("Problemi nella rigenerazione delle credenziali, riprovare più tardi");
                }
            },
            error: function () {
                alert("Problemi nella rigenerazione delle credenziali, riprovare più tardi");
            }
        });
    }

    function checkByClass(className)
    {
        $("."+className).each(function(i) {
            if (this.disabled !== true)
            {
                this.checked = !this.checked;
            }
        });
    }

    function updateOrarioPubblicazioneVotiPortale(selectedValue, idElementToReset)
    {
        let elementToReset = document.getElementById(idElementToReset);

        if (selectedValue != '') {
            elementToReset.value = 0;
            elementToReset.readOnly = true;
        }
        else {
            elementToReset.readOnly = false;
        }
    }

    function confermaCambioParametroMinistero(select){
        const value = select.value;
        if (value == 'NO'){
            if (!confirm("ATTENZIONE: stai per disabilitare le comunicazioni che il Ministero dell'Istruzione e del Merito invia tramite MasterCom.\nQuesta opzione è pensata esclusivamente per le scuole operanti al di fuori del territorio italiano.\nTi invitiamo a contattare preventivamente il Ministero dell'Istruzione e del Merito prima di procedere.\n\nConfermi di voler disattivare tali comunicazioni?")){
                select.value = 'SI';
            } else {
                select.value = 'NO';
            }
        }
    }
</script>

<script type="text/javascript" language="javascript" src="https://mcr-formatori1.registroelettronico.com/mastercom/javascript/display_index_amministratore_impostazioni.js?v=26.1.39"></script>

<link rel="stylesheet" href="https://mcr-formatori1.registroelettronico.com/mastercom/css/mc-admin-setup.css?v=26.1.39">

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <div class="mc mc-adm-setup">
    <span class="mc-adm-setup-eyebrow">Impostazioni</span>
                    <h1 class="mc-adm-setup-title"><span class="mc-adm-setup-code">A01 ·</span> Gestione utenti</h1>
            </div>


<table width='100%' class="mc-adm-setup-card">
        <tr>
        <td class="mc-adm-setup-contenuto">
            
            
            
                        

            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
                            
                <script type="text/javascript" language="javascript" src="javascript/include_setup_utenti.js?v=26.1.39"></script>
<script type="text/javascript" language="javascript">
    var url_api = "../next-api/v1/";
    var mat_materie = JSON.parse("{\"1000082\":{\"id_materia\":\"1000082\",\"codice\":\"\",\"descrizione\":\"Conferenza di astrofisica\",\"esonerabile\":\"N\",\"votazione_differenziata\":\"significati_voti\",\"codice_itp\":\"\",\"ordinamento\":\"\",\"scritto\":\"0\",\"orale\":\"0\",\"pratico\":\"0\",\"in_media_pagelle\":\"NV\",\"tipo_valutazione\":\"0\",\"chi_inserisce\":\"3000132\",\"data_inserimento\":\"1519660438\",\"tipo_inserimento\":\"INTERFACCIA\",\"chi_modifica\":\"3000135\",\"data_modifica\":\"1657874154\",\"tipo_modifica\":\"INTERFACCIA\",\"flag_canc\":\"0\",\"tipo_materia\":\"NORMALE\",\"codice_ministeriale\":\"\",\"descrizione_scuola_media\":\"\",\"tipologia_aggregamento\":\"Non definita\",\"descrizione_materia_straniera\":\"\",\"id_tipo_voto\":\"0\",\"id_flusso\":\"0\",\"classe_concorso\":\"\",\"tipo_voto_personalizzato\":\"0\",\"nome_materia_sito\":\"Conferenza di astrofisica\",\"nome_materia_breve\":\"Conferenza di astrofisica\",\"unico\":\"0\",\"id_materia_riferimento\":\"-1\",\"monteore\":\"0\",\"id_tipo_corso\":\"-1\",\"0\":\"1000082\",\"1\":\"\",\"2\":\"Conferenza di astrofisica\",\"4\":\"N\",\"5\":\"significati_voti\",\"6\":\"\",\"8\":\"0\",\"9\":\"0\",\"10\":\"0\",\"11\":\"\",\"12\":\"NV\",\"13\":\"0\"},\"1000098\":{\"id_materia\":\"1000098\",\"codice\":\"CIV\",\"descrizione\":\"ED.CIVICA\",\"esonerabile\":\"N\",\"votazione_differenziata\":\"significati_voti\",\"codice_itp\":\"\",\"ordinamento\":\"\",\"scritto\":\"0\",\"orale\":\"0\",\"pratico\":\"0\",\"in_media_pagelle\":\"SI\",\"tipo_valutazione\":\"0\",\"chi_inserisce\":\"3000007\",\"data_inserimento\":\"1598871614\",\"tipo_inserimento\":\"INTERFACCIA\",\"chi_modifica\":\"3000007\",\"data_modifica\":\"1780657942\",\"tipo_modifica\":\"INTERFACCIA\",\"flag_canc\":\"0\",\"tipo_materia\":\"NORMALE\",\"codice_ministeriale\":\"\",\"descrizione_scuola_media\":\"\",\"tipologia_aggregamento\":\"Discipline giuridiche ed economiche\",\"descrizione_materia_straniera\":\"\",\"id_tipo_voto\":\"0\",\"id_flusso\":\"0\",\"classe_concorso\":\"\",\"tipo_voto_personalizzato\":\"3\",\"nome_materia_sito\":\"ED. ALLA ED.CIVICA\",\"nome_materia_breve\":\"ED.CIVICA\",\"unico\":\"1\",\"id_materia_riferimento\":\"-1\",\"monteore\":\"0\",\"id_tipo_corso\":\"-1\",\"0\":\"1000098\",\"1\":\"CIV\",\"2\":\"ED.CIVICA\",\"4\":\"N\",\"5\":\"significati_voti\",\"6\":\"\",\"8\":\"0\",\"9\":\"0\",\"10\":\"0\",\"11\":\"\",\"12\":\"SI\",\"13\":\"0\"},\"1000084\":{\"id_materia\":\"1000084\",\"codice\":\"INF\",\"descrizione\":\"Infanzia\",\"esonerabile\":\"N\",\"votazione_differenziata\":\"significati_voti\",\"codice_itp\":\"\",\"ordinamento\":\"\",\"scritto\":\"0\",\"orale\":\"0\",\"pratico\":\"0\",\"in_media_pagelle\":\"SI\",\"tipo_valutazione\":\"2\",\"chi_inserisce\":\"3000132\",\"data_inserimento\":\"1536936849\",\"tipo_inserimento\":\"INTERFACCIA\",\"chi_modifica\":\"3000825\",\"data_modifica\":\"1791460247\",\"tipo_modifica\":\"INTERFACCIA\",\"flag_canc\":\"0\",\"tipo_materia\":\"NORMALE\",\"codice_ministeriale\":\"INF\",\"descrizione_scuola_media\":\"\",\"tipologia_aggregamento\":\"Non definita\",\"descrizione_materia_straniera\":\"\",\"id_tipo_voto\":\"0\",\"id_flusso\":\"0\",\"classe_concorso\":\"\",\"tipo_voto_personalizzato\":\"0\",\"nome_materia_sito\":\"Infanzia\",\"nome_materia_breve\":\"Infanzia\",\"unico\":\"0\",\"id_materia_riferimento\":\"-1\",\"monteore\":\"0\",\"id_tipo_corso\":\"-1\",\"0\":\"1000084\",\"1\":\"INF\",\"2\":\"Infanzia\",\"4\":\"N\",\"5\":\"significati_voti\",\"6\":\"\",\"8\":\"0\",\"9\":\"0\",\"10\":\"0\",\"11\":\"\",\"12\":\"SI\",\"13\":\"2\"},\"1000077\":{\"id_materia\":\"1000077\",\"codice\":\"ITAL\",\"descrizione\":\"LINGUA E LETTERATURA ITALIANA\",\"esonerabile\":\"N\",\"votazione_differenziata\":\"significati_voti\",\"codice_itp\":\"\",\"ordinamento\":\"\",\"scritto\":\"1\",\"orale\":\"1\",\"pratico\":\"0\",\"in_media_pagelle\":\"SI\",\"tipo_valutazione\":\"0\",\"chi_inserisce\":\"3000029\",\"data_inserimento\":\"1445960307\",\"tipo_inserimento\":\"INTERFACCIA\",\"chi_modifica\":\"3000135\",\"data_modifica\":\"1657873962\",\"tipo_modifica\":\"INTERFACCIA\",\"flag_canc\":\"0\",\"tipo_materia\":\"NORMALE\",\"codice_ministeriale\":\"0011\",\"descrizione_scuola_media\":\"\",\"tipologia_aggregamento\":\"Italiano\",\"descrizione_materia_straniera\":\"\",\"id_tipo_voto\":\"0\",\"id_flusso\":\"0\",\"classe_concorso\":\"\",\"tipo_voto_personalizzato\":\"0\",\"nome_materia_sito\":\"ITALIANO\",\"nome_materia_breve\":\"ITALIANO\",\"unico\":\"0\",\"id_materia_riferimento\":\"-1\",\"monteore\":\"0\",\"id_tipo_corso\":\"-1\",\"0\":\"1000077\",\"1\":\"ITAL\",\"2\":\"LINGUA E LETTERATURA ITALIANA\",\"4\":\"N\",\"5\":\"significati_voti\",\"6\":\"\",\"8\":\"1\",\"9\":\"1\",\"10\":\"0\",\"11\":\"\",\"12\":\"SI\",\"13\":\"0\"},\"1000180\":{\"id_materia\":\"1000180\",\"codice\":\"\",\"descrizione\":\"Nuovissima materia\",\"esonerabile\":\"N\",\"votazione_differenziata\":\"significati_voti\",\"codice_itp\":\"\",\"ordinamento\":\"\",\"scritto\":\"0\",\"orale\":\"0\",\"pratico\":\"0\",\"in_media_pagelle\":\"SI\",\"tipo_valutazione\":\"2\",\"chi_inserisce\":\"1000001\",\"data_inserimento\":\"1713963437\",\"tipo_inserimento\":\"INTERFACCIA\",\"chi_modifica\":\"1000001\",\"data_modifica\":\"1713963437\",\"tipo_modifica\":\"INTERFACCIA\",\"flag_canc\":\"0\",\"tipo_materia\":\"NORMALE\",\"codice_ministeriale\":\"\",\"descrizione_scuola_media\":\"\",\"tipologia_aggregamento\":\"Non definita\",\"descrizione_materia_straniera\":\"\",\"id_tipo_voto\":\"0\",\"id_flusso\":\"0\",\"classe_concorso\":\"\",\"tipo_voto_personalizzato\":\"0\",\"nome_materia_sito\":\"Nuovissima materia\",\"nome_materia_breve\":\"Nuovissima materia\",\"unico\":\"0\",\"id_materia_riferimento\":\"-1\",\"monteore\":\"0\",\"id_tipo_corso\":\"-1\",\"0\":\"1000180\",\"1\":\"\",\"2\":\"Nuovissima materia\",\"4\":\"N\",\"5\":\"significati_voti\",\"6\":\"\",\"8\":\"0\",\"9\":\"0\",\"10\":\"0\",\"11\":\"\",\"12\":\"SI\",\"13\":\"2\"},\"1000129\":{\"id_materia\":\"1000129\",\"codice\":\"\",\"descrizione\":\"prova NV\",\"esonerabile\":\"N\",\"votazione_differenziata\":\"significati_voti\",\"codice_itp\":\"\",\"ordinamento\":\"\",\"scritto\":\"0\",\"orale\":\"0\",\"pratico\":\"0\",\"in_media_pagelle\":\"SI\",\"tipo_valutazione\":\"2\",\"chi_inserisce\":\"3000007\",\"data_inserimento\":\"1638869597\",\"tipo_inserimento\":\"INTERFACCIA\",\"chi_modifica\":\"3000026\",\"data_modifica\":\"1659517134\",\"tipo_modifica\":\"INTERFACCIA\",\"flag_canc\":\"0\",\"tipo_materia\":\"NORMALE\",\"codice_ministeriale\":\"\",\"descrizione_scuola_media\":\"\",\"tipologia_aggregamento\":\"Non definita\",\"descrizione_materia_straniera\":\"\",\"id_tipo_voto\":\"0\",\"id_flusso\":\"0\",\"classe_concorso\":\"\",\"tipo_voto_personalizzato\":\"0\",\"nome_materia_sito\":\"prova NV\",\"nome_materia_breve\":\"prova NV\",\"unico\":\"0\",\"id_materia_riferimento\":\"-1\",\"monteore\":\"0\",\"id_tipo_corso\":\"-1\",\"0\":\"1000129\",\"1\":\"\",\"2\":\"prova NV\",\"4\":\"N\",\"5\":\"significati_voti\",\"6\":\"\",\"8\":\"0\",\"9\":\"0\",\"10\":\"0\",\"11\":\"\",\"12\":\"SI\",\"13\":\"2\"},\"1000090\":{\"id_materia\":\"1000090\",\"codice\":\"\",\"descrizione\":\"Psicologia vegetale\",\"esonerabile\":\"N\",\"votazione_differenziata\":\"significati_voti\",\"codice_itp\":\"\",\"ordinamento\":\"\",\"scritto\":\"1\",\"orale\":\"1\",\"pratico\":\"0\",\"in_media_pagelle\":\"SI\",\"tipo_valutazione\":\"0\",\"chi_inserisce\":\"3000132\",\"data_inserimento\":\"1549440671\",\"tipo_inserimento\":\"INTERFACCIA\",\"chi_modifica\":\"3000025\",\"data_modifica\":\"1551968806\",\"tipo_modifica\":\"INTERFACCIA\",\"flag_canc\":\"0\",\"tipo_materia\":\"NORMALE\",\"codice_ministeriale\":\"\",\"descrizione_scuola_media\":\"\",\"tipologia_aggregamento\":\"Non definita\",\"descrizione_materia_straniera\":\"\",\"id_tipo_voto\":\"0\",\"id_flusso\":\"0\",\"classe_concorso\":\"\",\"tipo_voto_personalizzato\":\"0\",\"nome_materia_sito\":\"Psicologia vegetale\",\"nome_materia_breve\":\"Psicologia vegetale\",\"unico\":\"0\",\"id_materia_riferimento\":\"-1\",\"monteore\":\"0\",\"id_tipo_corso\":\"-1\",\"0\":\"1000090\",\"1\":\"\",\"2\":\"Psicologia vegetale\",\"4\":\"N\",\"5\":\"significati_voti\",\"6\":\"\",\"8\":\"1\",\"9\":\"1\",\"10\":\"0\",\"11\":\"\",\"12\":\"SI\",\"13\":\"0\"},\"1000197\":{\"id_materia\":\"1000197\",\"codice\":\"\",\"descrizione\":\"PSICOLOGO\",\"esonerabile\":\"N\",\"votazione_differenziata\":\"significati_voti\",\"codice_itp\":\"\",\"ordinamento\":\"\",\"scritto\":\"0\",\"orale\":\"0\",\"pratico\":\"0\",\"in_media_pagelle\":\"NV\",\"tipo_valutazione\":\"2\",\"chi_inserisce\":\"3000172\",\"data_inserimento\":\"1774017503\",\"tipo_inserimento\":\"INTERFACCIA\",\"chi_modifica\":\"3000172\",\"data_modifica\":\"1774017503\",\"tipo_modifica\":\"INTERFACCIA\",\"flag_canc\":\"0\",\"tipo_materia\":\"NORMALE\",\"codice_ministeriale\":\"\",\"descrizione_scuola_media\":\"\",\"tipologia_aggregamento\":\"Non definita\",\"descrizione_materia_straniera\":\"\",\"id_tipo_voto\":\"0\",\"id_flusso\":\"0\",\"classe_concorso\":\"\",\"tipo_voto_personalizzato\":\"0\",\"nome_materia_sito\":\"PSICOLOGO\",\"nome_materia_breve\":\"PSICOLOGO\",\"unico\":\"0\",\"id_materia_riferimento\":\"-1\",\"monteore\":\"0\",\"id_tipo_corso\":\"-1\",\"0\":\"1000197\",\"1\":\"\",\"2\":\"PSICOLOGO\",\"4\":\"N\",\"5\":\"significati_voti\",\"6\":\"\",\"8\":\"0\",\"9\":\"0\",\"10\":\"0\",\"11\":\"\",\"12\":\"NV\",\"13\":\"2\"},\"1000080\":{\"id_materia\":\"1000080\",\"codice\":\"STN\",\"descrizione\":\"SOSTEGNO\",\"esonerabile\":\"N\",\"votazione_differenziata\":\"significati_voti\",\"codice_itp\":\"\",\"ordinamento\":\"\",\"scritto\":\"1\",\"orale\":\"1\",\"pratico\":\"1\",\"in_media_pagelle\":\"NV\",\"tipo_valutazione\":\"0\",\"chi_inserisce\":\"-1\",\"data_inserimento\":\"0\",\"tipo_inserimento\":\"\",\"chi_modifica\":\"3000825\",\"data_modifica\":\"1791530880\",\"tipo_modifica\":\"INTERFACCIA\",\"flag_canc\":\"0\",\"tipo_materia\":\"NORMALE\",\"codice_ministeriale\":\"STN\",\"descrizione_scuola_media\":\"\",\"tipologia_aggregamento\":\"Non definita\",\"descrizione_materia_straniera\":\"\",\"id_tipo_voto\":\"0\",\"id_flusso\":\"0\",\"classe_concorso\":\"\",\"tipo_voto_personalizzato\":\"0\",\"nome_materia_sito\":\"SOSTEGNO\",\"nome_materia_breve\":\"SOSTEGNO\",\"unico\":\"0\",\"id_materia_riferimento\":\"-1\",\"monteore\":\"0\",\"id_tipo_corso\":\"-1\",\"0\":\"1000080\",\"1\":\"STN\",\"2\":\"SOSTEGNO\",\"4\":\"N\",\"5\":\"significati_voti\",\"6\":\"\",\"8\":\"1\",\"9\":\"1\",\"10\":\"1\",\"11\":\"\",\"12\":\"NV\",\"13\":\"0\"},\"1000132\":{\"id_materia\":\"1000132\",\"codice\":\"STN\",\"descrizione\":\"SOSTEGNO\",\"esonerabile\":\"N\",\"votazione_differenziata\":\"significati_voti\",\"codice_itp\":\"\",\"ordinamento\":\"\",\"scritto\":\"0\",\"orale\":\"0\",\"pratico\":\"0\",\"in_media_pagelle\":\"NV\",\"tipo_valutazione\":\"0\",\"chi_inserisce\":\"1000001\",\"data_inserimento\":\"1657894805\",\"tipo_inserimento\":\"INTERFACCIA\",\"chi_modifica\":\"1000001\",\"data_modifica\":\"1657894805\",\"tipo_modifica\":\"INTERFACCIA\",\"flag_canc\":\"0\",\"tipo_materia\":\"SOSTEGNO\",\"codice_ministeriale\":\"\",\"descrizione_scuola_media\":\"\",\"tipologia_aggregamento\":\"Non definita\",\"descrizione_materia_straniera\":\"\",\"id_tipo_voto\":\"0\",\"id_flusso\":\"0\",\"classe_concorso\":\"\",\"tipo_voto_personalizzato\":\"0\",\"nome_materia_sito\":\"SOSTEGNO\",\"nome_materia_breve\":\"SOSTEGNO\",\"unico\":\"0\",\"id_materia_riferimento\":\"-1\",\"monteore\":\"0\",\"id_tipo_corso\":\"-1\",\"0\":\"1000132\",\"1\":\"STN\",\"2\":\"SOSTEGNO\",\"4\":\"N\",\"5\":\"significati_voti\",\"6\":\"\",\"8\":\"0\",\"9\":\"0\",\"10\":\"0\",\"11\":\"\",\"12\":\"NV\",\"13\":\"0\"},\"1000139\":{\"id_materia\":\"1000139\",\"codice\":\"STOEE\",\"descrizione\":\"STORIA\",\"esonerabile\":\"N\",\"votazione_differenziata\":\"significati_voti\",\"codice_itp\":\"\",\"ordinamento\":\"\",\"scritto\":\"0\",\"orale\":\"0\",\"pratico\":\"0\",\"in_media_pagelle\":\"SI\",\"tipo_valutazione\":\"0\",\"chi_inserisce\":\"3000025\",\"data_inserimento\":\"1668610170\",\"tipo_inserimento\":\"INTERFACCIA\",\"chi_modifica\":\"3000825\",\"data_modifica\":\"1791530347\",\"tipo_modifica\":\"INTERFACCIA\",\"flag_canc\":\"0\",\"tipo_materia\":\"NORMALE\",\"codice_ministeriale\":\"\",\"descrizione_scuola_media\":\"\",\"tipologia_aggregamento\":\"Non definita\",\"descrizione_materia_straniera\":\"\",\"id_tipo_voto\":\"0\",\"id_flusso\":\"0\",\"classe_concorso\":\"\",\"tipo_voto_personalizzato\":\"1\",\"nome_materia_sito\":\"STORIA\",\"nome_materia_breve\":\"STORIA\",\"unico\":\"0\",\"id_materia_riferimento\":\"-1\",\"monteore\":\"0\",\"id_tipo_corso\":\"-1\",\"0\":\"1000139\",\"1\":\"STOEE\",\"2\":\"STORIA\",\"4\":\"N\",\"5\":\"significati_voti\",\"6\":\"\",\"8\":\"0\",\"9\":\"0\",\"10\":\"0\",\"11\":\"\",\"12\":\"SI\",\"13\":\"0\"},\"1000199\":{\"id_materia\":\"1000199\",\"codice\":\"SL\",\"descrizione\":\"SUSSIDIARIO DEI LINGUAGGI\",\"esonerabile\":\"N\",\"votazione_differenziata\":\"significati_voti\",\"codice_itp\":\"\",\"ordinamento\":\"\",\"scritto\":\"0\",\"orale\":\"0\",\"pratico\":\"0\",\"in_media_pagelle\":\"SI\",\"tipo_valutazione\":\"2\",\"chi_inserisce\":\"3000825\",\"data_inserimento\":\"1778071440\",\"tipo_inserimento\":\"INTERFACCIA\",\"chi_modifica\":\"3000825\",\"data_modifica\":\"1778071440\",\"tipo_modifica\":\"INTERFACCIA\",\"flag_canc\":\"0\",\"tipo_materia\":\"NORMALE\",\"codice_ministeriale\":\"\",\"descrizione_scuola_media\":\"\",\"tipologia_aggregamento\":\"Non definita\",\"descrizione_materia_straniera\":\"\",\"id_tipo_voto\":\"0\",\"id_flusso\":\"0\",\"classe_concorso\":\"\",\"tipo_voto_personalizzato\":\"0\",\"nome_materia_sito\":\"SUSSIDIARIO DEI LINGUAGGI\",\"nome_materia_breve\":\"SUSSIDIARIO DEI LINGUAGGI\",\"unico\":\"0\",\"id_materia_riferimento\":\"-1\",\"monteore\":\"0\",\"id_tipo_corso\":\"-1\",\"0\":\"1000199\",\"1\":\"SL\",\"2\":\"SUSSIDIARIO DEI LINGUAGGI\",\"4\":\"N\",\"5\":\"significati_voti\",\"6\":\"\",\"8\":\"0\",\"9\":\"0\",\"10\":\"0\",\"11\":\"\",\"12\":\"SI\",\"13\":\"2\"},\"1000069\":{\"id_materia\":\"1000069\",\"codice\":\"ITA\",\"descrizione\":\"ITALIANO\",\"esonerabile\":\"N\",\"votazione_differenziata\":\"significati_voti\",\"codice_itp\":\"\",\"ordinamento\":\"1\",\"scritto\":\"1\",\"orale\":\"1\",\"pratico\":\"1\",\"in_media_pagelle\":\"SI\",\"tipo_valutazione\":\"0\",\"chi_inserisce\":\"1000001\",\"data_inserimento\":\"1504861261\",\"tipo_inserimento\":\"IMPORTAZIONE\",\"chi_modifica\":\"3000825\",\"data_modifica\":\"1788420819\",\"tipo_modifica\":\"INTERFACCIA\",\"flag_canc\":\"0\",\"tipo_materia\":\"NORMALE\",\"codice_ministeriale\":\"I189\",\"descrizione_scuola_media\":\"\",\"tipologia_aggregamento\":\"Non definita\",\"descrizione_materia_straniera\":\"\",\"id_tipo_voto\":\"0\",\"id_flusso\":\"0\",\"classe_concorso\":\"\",\"tipo_voto_personalizzato\":\"1\",\"nome_materia_sito\":\"ITALIANO\",\"nome_materia_breve\":\"ITALIANO\",\"unico\":\"0\",\"id_materia_riferimento\":\"-1\",\"monteore\":\"0\",\"id_tipo_corso\":\"-1\",\"0\":\"1000069\",\"1\":\"ITA\",\"2\":\"ITALIANO\",\"4\":\"N\",\"5\":\"significati_voti\",\"6\":\"\",\"8\":\"1\",\"9\":\"1\",\"10\":\"1\",\"11\":\"1\",\"12\":\"SI\",\"13\":\"0\"},\"1000068\":{\"id_materia\":\"1000068\",\"codice\":\"MAT\",\"descrizione\":\"MATEMATICA\",\"esonerabile\":\"N\",\"votazione_differenziata\":\"significati_voti\",\"codice_itp\":\"\",\"ordinamento\":\"2\",\"scritto\":\"1\",\"orale\":\"1\",\"pratico\":\"0\",\"in_media_pagelle\":\"SI\",\"tipo_valutazione\":\"0\",\"chi_inserisce\":\"3000026\",\"data_inserimento\":\"1411396159\",\"tipo_inserimento\":\"INTERFACCIA\",\"chi_modifica\":\"3000132\",\"data_modifica\":\"1667374020\",\"tipo_modifica\":\"INTERFACCIA\",\"flag_canc\":\"0\",\"tipo_materia\":\"NORMALE\",\"codice_ministeriale\":\"0001\",\"descrizione_scuola_media\":\"\",\"tipologia_aggregamento\":\"Matematica\",\"descrizione_materia_straniera\":\"\",\"id_tipo_voto\":\"0\",\"id_flusso\":\"0\",\"classe_concorso\":\"\",\"tipo_voto_personalizzato\":\"2\",\"nome_materia_sito\":\"MATEMATICA\",\"nome_materia_breve\":\"MATEMATICA\",\"unico\":\"0\",\"id_materia_riferimento\":\"-1\",\"monteore\":\"0\",\"id_tipo_corso\":\"-1\",\"0\":\"1000068\",\"1\":\"MAT\",\"2\":\"MATEMATICA\",\"4\":\"N\",\"5\":\"significati_voti\",\"6\":\"\",\"8\":\"1\",\"9\":\"1\",\"10\":\"0\",\"11\":\"2\",\"12\":\"SI\",\"13\":\"0\"},\"1000074\":{\"id_materia\":\"1000074\",\"codice\":\"SCI\",\"descrizione\":\"SCIENZE\",\"esonerabile\":\"N\",\"votazione_differenziata\":\"significati_voti\",\"codice_itp\":\"\",\"ordinamento\":\"3\",\"scritto\":\"1\",\"orale\":\"1\",\"pratico\":\"0\",\"in_media_pagelle\":\"SI\",\"tipo_valutazione\":\"0\",\"chi_inserisce\":\"3000010\",\"data_inserimento\":\"1411458917\",\"tipo_inserimento\":\"INTERFACCIA\",\"chi_modifica\":\"3000825\",\"data_modifica\":\"1791530463\",\"tipo_modifica\":\"INTERFACCIA\",\"flag_canc\":\"0\",\"tipo_materia\":\"NORMALE\",\"codice_ministeriale\":\"0007\",\"descrizione_scuola_media\":\"\",\"tipologia_aggregamento\":\"Non definita\",\"descrizione_materia_straniera\":\"\",\"id_tipo_voto\":\"0\",\"id_flusso\":\"0\",\"classe_concorso\":\"\",\"tipo_voto_personalizzato\":\"1\",\"nome_materia_sito\":\"SCIENZE\",\"nome_materia_breve\":\"SCIENZE\",\"unico\":\"0\",\"id_materia_riferimento\":\"-1\",\"monteore\":\"0\",\"id_tipo_corso\":\"-1\",\"0\":\"1000074\",\"1\":\"SCI\",\"2\":\"SCIENZE\",\"4\":\"N\",\"5\":\"significati_voti\",\"6\":\"\",\"8\":\"1\",\"9\":\"1\",\"10\":\"0\",\"11\":\"3\",\"12\":\"SI\",\"13\":\"0\"},\"1000079\":{\"id_materia\":\"1000079\",\"codice\":\"GEO\",\"descrizione\":\"GEOGRAFIA\",\"esonerabile\":\"N\",\"votazione_differenziata\":\"significati_voti\",\"codice_itp\":\"\",\"ordinamento\":\"4\",\"scritto\":\"1\",\"orale\":\"0\",\"pratico\":\"0\",\"in_media_pagelle\":\"SI\",\"tipo_valutazione\":\"0\",\"chi_inserisce\":\"3000026\",\"data_inserimento\":\"1474037388\",\"tipo_inserimento\":\"INTERFACCIA\",\"chi_modifica\":\"3000007\",\"data_modifica\":\"1753188418\",\"tipo_modifica\":\"INTERFACCIA\",\"flag_canc\":\"0\",\"tipo_materia\":\"NORMALE\",\"codice_ministeriale\":\"0123\",\"descrizione_scuola_media\":\"\",\"tipologia_aggregamento\":\"Non definita\",\"descrizione_materia_straniera\":\"\",\"id_tipo_voto\":\"0\",\"id_flusso\":\"0\",\"classe_concorso\":\"\",\"tipo_voto_personalizzato\":\"0\",\"nome_materia_sito\":\"GEOGRAFIA\",\"nome_materia_breve\":\"GEOGRAFIA\",\"unico\":\"0\",\"id_materia_riferimento\":\"-1\",\"monteore\":\"0\",\"id_tipo_corso\":\"-1\",\"0\":\"1000079\",\"1\":\"GEO\",\"2\":\"GEOGRAFIA\",\"4\":\"N\",\"5\":\"significati_voti\",\"6\":\"\",\"8\":\"1\",\"9\":\"0\",\"10\":\"0\",\"11\":\"4\",\"12\":\"SI\",\"13\":\"0\"},\"1000075\":{\"id_materia\":\"1000075\",\"codice\":\"ING\",\"descrizione\":\"lingua inglese\",\"esonerabile\":\"N\",\"votazione_differenziata\":\"significati_voti\",\"codice_itp\":\"\",\"ordinamento\":\"40\",\"scritto\":\"1\",\"orale\":\"1\",\"pratico\":\"0\",\"in_media_pagelle\":\"SI\",\"tipo_valutazione\":\"0\",\"chi_inserisce\":\"3000010\",\"data_inserimento\":\"1411459033\",\"tipo_inserimento\":\"INTERFACCIA\",\"chi_modifica\":\"3000025\",\"data_modifica\":\"1749628014\",\"tipo_modifica\":\"INTERFACCIA\",\"flag_canc\":\"0\",\"tipo_materia\":\"LINGUA STRANIERA\",\"codice_ministeriale\":\"0008\",\"descrizione_scuola_media\":\"\",\"tipologia_aggregamento\":\"Non definita\",\"descrizione_materia_straniera\":\"\",\"id_tipo_voto\":\"0\",\"id_flusso\":\"0\",\"classe_concorso\":\"\",\"tipo_voto_personalizzato\":\"0\",\"nome_materia_sito\":\"LINGUA INGLESE\",\"nome_materia_breve\":\"LINGUA INGLESE\",\"unico\":\"0\",\"id_materia_riferimento\":\"-1\",\"monteore\":\"0\",\"id_tipo_corso\":\"-1\",\"0\":\"1000075\",\"1\":\"ING\",\"2\":\"lingua inglese\",\"4\":\"N\",\"5\":\"significati_voti\",\"6\":\"\",\"8\":\"1\",\"9\":\"1\",\"10\":\"0\",\"11\":\"40\",\"12\":\"SI\",\"13\":\"0\"},\"1000076\":{\"id_materia\":\"1000076\",\"codice\":\"FRA\",\"descrizione\":\"LINGUA FRANCESE\",\"esonerabile\":\"N\",\"votazione_differenziata\":\"significati_voti\",\"codice_itp\":\"\",\"ordinamento\":\"45\",\"scritto\":\"1\",\"orale\":\"1\",\"pratico\":\"0\",\"in_media_pagelle\":\"SI\",\"tipo_valutazione\":\"0\",\"chi_inserisce\":\"3000010\",\"data_inserimento\":\"1411459064\",\"tipo_inserimento\":\"INTERFACCIA\",\"chi_modifica\":\"3000179\",\"data_modifica\":\"1660198462\",\"tipo_modifica\":\"INTERFACCIA\",\"flag_canc\":\"0\",\"tipo_materia\":\"LINGUA STRANIERA\",\"codice_ministeriale\":\"0009\",\"descrizione_scuola_media\":\"\",\"tipologia_aggregamento\":\"Non definita\",\"descrizione_materia_straniera\":\"\",\"id_tipo_voto\":\"0\",\"id_flusso\":\"0\",\"classe_concorso\":\"\",\"tipo_voto_personalizzato\":\"0\",\"nome_materia_sito\":\"LINGUA FRANCESE\",\"nome_materia_breve\":\"LINGUA FRANCESE\",\"unico\":\"0\",\"id_materia_riferimento\":\"-1\",\"monteore\":\"0\",\"id_tipo_corso\":\"-1\",\"0\":\"1000076\",\"1\":\"FRA\",\"2\":\"LINGUA FRANCESE\",\"4\":\"N\",\"5\":\"significati_voti\",\"6\":\"\",\"8\":\"1\",\"9\":\"1\",\"10\":\"0\",\"11\":\"45\",\"12\":\"SI\",\"13\":\"0\"},\"1000072\":{\"id_materia\":\"1000072\",\"codice\":\"REL\",\"descrizione\":\"RELIGIONE\",\"esonerabile\":\"R\",\"votazione_differenziata\":\"significati_voti\",\"codice_itp\":\"\",\"ordinamento\":\"5\",\"scritto\":\"1\",\"orale\":\"1\",\"pratico\":\"0\",\"in_media_pagelle\":\"NO\",\"tipo_valutazione\":\"2\",\"chi_inserisce\":\"3000010\",\"data_inserimento\":\"1411458788\",\"tipo_inserimento\":\"INTERFACCIA\",\"chi_modifica\":\"3000007\",\"data_modifica\":\"1749283112\",\"tipo_modifica\":\"INTERFACCIA\",\"flag_canc\":\"0\",\"tipo_materia\":\"RELIGIONE\",\"codice_ministeriale\":\"0005\",\"descrizione_scuola_media\":\"\",\"tipologia_aggregamento\":\"Non definita\",\"descrizione_materia_straniera\":\"\",\"id_tipo_voto\":\"0\",\"id_flusso\":\"0\",\"classe_concorso\":\"\",\"tipo_voto_personalizzato\":\"0\",\"nome_materia_sito\":\"RELIGIONE\",\"nome_materia_breve\":\"RELIGIONE\",\"unico\":\"0\",\"id_materia_riferimento\":\"-1\",\"monteore\":\"0\",\"id_tipo_corso\":\"-1\",\"0\":\"1000072\",\"1\":\"REL\",\"2\":\"RELIGIONE\",\"4\":\"R\",\"5\":\"significati_voti\",\"6\":\"\",\"8\":\"1\",\"9\":\"1\",\"10\":\"0\",\"11\":\"5\",\"12\":\"NO\",\"13\":\"2\"},\"1000071\":{\"id_materia\":\"1000071\",\"codice\":\"EDF\",\"descrizione\":\"EDUCAZIONE FISICA\",\"esonerabile\":\"N\",\"votazione_differenziata\":\"significati_voti\",\"codice_itp\":\"\",\"ordinamento\":\"60\",\"scritto\":\"0\",\"orale\":\"1\",\"pratico\":\"1\",\"in_media_pagelle\":\"SI\",\"tipo_valutazione\":\"0\",\"chi_inserisce\":\"3000010\",\"data_inserimento\":\"1411458753\",\"tipo_inserimento\":\"INTERFACCIA\",\"chi_modifica\":\"3000172\",\"data_modifica\":\"1771316272\",\"tipo_modifica\":\"INTERFACCIA\",\"flag_canc\":\"0\",\"tipo_materia\":\"EDUCAZIONE FISICA\",\"codice_ministeriale\":\"0004\",\"descrizione_scuola_media\":\"\",\"tipologia_aggregamento\":\"Non definita\",\"descrizione_materia_straniera\":\"\",\"id_tipo_voto\":\"0\",\"id_flusso\":\"0\",\"classe_concorso\":\"\",\"tipo_voto_personalizzato\":\"0\",\"nome_materia_sito\":\"EDUCAZIONE FISICA\",\"nome_materia_breve\":\"EDUCAZIONE FISICA\",\"unico\":\"0\",\"id_materia_riferimento\":\"-1\",\"monteore\":\"0\",\"id_tipo_corso\":\"-1\",\"0\":\"1000071\",\"1\":\"EDF\",\"2\":\"EDUCAZIONE FISICA\",\"4\":\"N\",\"5\":\"significati_voti\",\"6\":\"\",\"8\":\"0\",\"9\":\"1\",\"10\":\"1\",\"11\":\"60\",\"12\":\"SI\",\"13\":\"0\"},\"1000073\":{\"id_materia\":\"1000073\",\"codice\":\"COM\",\"descrizione\":\"COMPORTAMENTO\",\"esonerabile\":\"N\",\"votazione_differenziata\":\"significati_voti\",\"codice_itp\":\"\",\"ordinamento\":\"99\",\"scritto\":\"1\",\"orale\":\"1\",\"pratico\":\"1\",\"in_media_pagelle\":\"SI\",\"tipo_valutazione\":\"0\",\"chi_inserisce\":\"3000010\",\"data_inserimento\":\"1411458832\",\"tipo_inserimento\":\"INTERFACCIA\",\"chi_modifica\":\"3000825\",\"data_modifica\":\"1791296996\",\"tipo_modifica\":\"INTERFACCIA\",\"flag_canc\":\"0\",\"tipo_materia\":\"CONDOTTA\",\"codice_ministeriale\":\"0006\",\"descrizione_scuola_media\":\"\",\"tipologia_aggregamento\":\"Non definita\",\"descrizione_materia_straniera\":\"\",\"id_tipo_voto\":\"0\",\"id_flusso\":\"0\",\"classe_concorso\":\"\",\"tipo_voto_personalizzato\":\"1\",\"nome_materia_sito\":\"COMPORTAMENTO\",\"nome_materia_breve\":\"COMPORTAMENTO\",\"unico\":\"0\",\"id_materia_riferimento\":\"-1\",\"monteore\":\"0\",\"id_tipo_corso\":\"-1\",\"0\":\"1000073\",\"1\":\"COM\",\"2\":\"COMPORTAMENTO\",\"4\":\"N\",\"5\":\"significati_voti\",\"6\":\"\",\"8\":\"1\",\"9\":\"1\",\"10\":\"1\",\"11\":\"99\",\"12\":\"SI\",\"13\":\"0\"}}");

    function toggleTable(tablename, sfondoBase, sfondoAcceso, ritorna_a) {
        var lTable = document.getElementById(tablename);
        var lTitle = document.getElementById('pannello_'+tablename);
        var tabelle = document.getElementsByClassName('tabelle_personalizzazioni');
        var titoli = document.getElementsByClassName('td_titoli_pannelli');
        var stato = document.getElementById(tablename).style.display;

        for (var i = 0; i < tabelle.length; i++) {
            tabelle[i].style.display = "none";
            titoli[i].style.backgroundColor = sfondoBase;
            titoli[i].style.color = "black";
        }

        lTable.style.display = (stato === "") ? "none" : "";
        lTitle.style.backgroundColor = (stato === "") ? sfondoBase : sfondoAcceso;
        lTitle.style.color = (stato === "") ? "black" : "white";

        $('#ritorna_a').val(ritorna_a);
    }


    function apriChiudiPopup(id_oggetto, sfondo)
    {
        var sfondo_oscurato = document.getElementById(sfondo);
        var popup = document.getElementById(id_oggetto);

        if (popup.style.display === 'none')
        {
            sfondo_oscurato.style.display = '';
            popup.style.display = '';
        }
        else
        {
            popup.style.display = 'none';
            sfondo_oscurato.style.display = 'none';
        }
    }

    function chiediConferma(btn, operazione, id_oggetto, tipo_oggetto)
    {
        if (tipo_oggetto === 'nomina')
        {
            var r = confirm("Eliminare la nomina?");
            if (r == true)
            {
                btn.form.operazione.value=operazione;
                btn.form.id_nomina.value=id_oggetto;
                btn.form.ritorna_a.value='nomine_assenze';
                btn.form.submit();
            }
        }
        else if (tipo_oggetto === 'assenza')
        {
            var r = confirm("Eliminare l'assenza?");
            if (r == true)
            {
                btn.form.operazione.value=operazione;
                btn.form.id_assenza.value=id_oggetto;
                btn.form.ritorna_a.value='nomine_assenze';
                btn.form.submit();
            }
        }
    }

    function copiaUtenteSuStorico(){
        var db_origine = document.getElementById('db_origine_copia_utente').value;
        var db_destinazione = document.getElementById('db_destinazione_copia_utente').value;
        var id_utente = document.getElementById('id_utente_copia').value;

        var data = {
            'db_origine': db_origine,
            'db_destinazione': db_destinazione,
            'id_utente': id_utente
        };

        if (confirm("Confermi la copia dell'utente?")){
            var request = $.ajax({
                url: url_api + "manutenzione/inserisci_utente_anno_storico",
                method: "POST",
                headers: { 'Authorization': $('#current_key').val() },
                data: data,
                cache: false,
                dataType: "json",
                contentType: "application/json; charset=utf-8",
                complete: function (response) {
                    var resp = response.responseJSON;
                    alert(resp.status+"\n\n"+resp.message);
                }
            });
        }
    }

    function recuperaUtenteSuASAttuale(){
        var db_origine = document.getElementById('db_origine_copia_utente').value;
        var db_destinazione = document.getElementById('db_destinazione_copia_utente').value;
        var id_utente = document.getElementById('id_utente_copia').value;

        var data = {
            'db_origine': db_origine,
            'db_destinazione': db_destinazione,
            'id_utente': id_utente
        };

        if (confirm("Confermi il recupero dell'utente?")){
            $('#sfondo_oscurato').show();
            // mostra un testo minimale di caricamento (niente jqx)
            if (!$('#api_loader_text').length) {
                $('body').append('<div id="api_loader_text" style="position:fixed;top:50%;left:50%;transform:translate(-50%, -50%);z-index:2000;background:#fff;padding:12px 16px;border:1px solid #d0d0d0;border-radius:10px;box-shadow:0 6px 18px rgba(0,0,0,.15);font-size:14px;color:#333;display:flex;align-items:center;gap:8px;"><span style="font-size:16px;">⏳</span><span>Elaborazione in corso…</span></div>');
            }

            var request = $.ajax({
                url: url_api + "manutenzione/recupera_utente_su_as_attuale",
                method: "POST",
                headers: { 'Authorization': $('#current_key').val() },
                data: data,
                cache: false,
                dataType: "json",
                contentType: "application/json; charset=utf-8",
                complete: function (response) {
                    $('#api_loader_text').remove();
                    var resp = response.responseJSON;
                    alert(resp.status+"\n\n"+resp.message);
                    $('#sfondo_oscurato').hide();
                }
            });
        }
    }

    $(window).on("load", function() {
        
        $('#td_privilegi_aggiuntiva').hide();
    });
</script>
<form method='post' action='/mastercom/index.php'>

    <div id="sfondo_oscurato" style="width: 100%; height: 100%; top: 0; left: 0; position: fixed; background-color: #aaa; opacity: 0.5; z-index: 1; display: none;"></div>

    <table width="100%" style="border-collapse: separate;">
        <tr id='row_head_classes' class="sfondo_setup_utenti">
            
            <td class="sottotitolo_testo_bold">
                                    <img id='icon_classes' name='bottone' value='Conferma' src='icone/icona (2).png' alt='Apri scelta utenti' onclick="mostra_riga('row_grid_classes,row_search_classes', this);
                        mostra_riga('row_grid_operations,row_search_classes', this);">
                                Selezione utenti
            </td>
            <td align='right' colspan='2'>
                <div style="display: flex; justify-content: space-between;">
                    <div>
                                            </div>
                    <div>
                        <input type='button' value='Stampa Referenti' onclick="this.form.stato_secondario.value = 'stampa_referenti_mastercom';
                                this.form.target = '_blank';
                                this.form.submit();">
                                                    <input type='button' value='Nuevo administrador' onclick="this.form.stato_secondario.value = 'gestione_utenti_display';
                                this.form.target = '';
                                this.form.id_utente.value = '-1';
                                this.form.tipo_utente.value = 'A';
                                this.form.submit();"
                                >
                                                
<input type='button' value='Nuevo trabajador' onclick="window.location.href='crear-usuario.php'; this.form.stato_secondario.value = 'gestione_utenti_display';
                                this.form.id_utente.value = '-1';
                                this.form.tipo_utente.value = 'P';
                                this.form.target = '';
                                this.form.submit();"
                                >
                        <input type='button' value='Nuevo supervisor' onclick="this.form.stato_secondario.value = 'gestione_utenti_display';
                                this.form.id_utente.value = '-1';
                                this.form.tipo_utente.value = 'E';
                                this.form.target = '';
                                this.form.submit();"
                                >
                    </div>
                </div>
            </td>
        </tr>
                    <tr id='row_search_classes' class="sfondo_setup_utenti">
                        <td colspan="3" class="padding_cella_generica">
                    <strong>Cerca Utente:</strong>
                    <input type='text' id='txt_trova_utente' name='txt_trova_utente' value="" onkeydown="if (event.keyCode == 13) avvia_ricerca_utente(this);">
                    <input id='cerca' type='button' value='Cerca' onclick="avvia_ricerca_utente(this);">
                </td>
            <script type="text/javascript" language="javascript">
                document.getElementById('txt_trova_utente').focus();
            </script>            </tr>
                    <tr id='row_grid_classes' class="sfondo_setup_utenti">
                        <td class="padding_cella_generica" valign="top">
            <strong>Usuarios administradores</strong>
            <input type='image' name='bottone' value='Conferma' src='icone/icona (1).png' alt='Apri dettaglio utente' onclick="this.form.stato_secondario.value='gestione_utenti_display'; this.form.operazione.value='';this.form.id_utente.value=this.form.id_amm.value;this.form.tipo_utente.value='A'; this.form.target=''; this.form.submit();">
            <input style="float: right;" type='button' value='Collegamenti multipli' onclick="this.form.stato_secondario.value='gestione_collegamenti_multipli_amministratori'; this.form.operazione.value=''; this.form.target=''; this.form.submit();">
            <br>
            <SELECT onDblClick="this.form.stato_secondario.value='gestione_utenti_display'; this.form.operazione.value='';this.form.id_utente.value=this.value;this.form.tipo_utente.value='A'; this.form.target=''; this.form.submit();" onChange="this.form.stato_secondario.value='gestione_utenti_display'; this.form.operazione.value='';this.form.id_utente.value=this.value;this.form.tipo_utente.value='A'; this.form.target=''; this.form.submit();" name='id_amm' size='20' style='width:100%' >
<OPTION  value="3000174">Albert Einstein</OPTION>
<OPTION  value="3000175">Alessandro Volta*</OPTION>
<OPTION  value="3001068">Daniele Stage*</OPTION>
<OPTION  value="3000398">Prova App</OPTION>
<OPTION  value="3000176">Prova prova*</OPTION>
<OPTION  value="3000132">Segreteria Istituto*</OPTION>
<OPTION  value="3000150">SEGRETERIA PRIMO</OPTION>
<OPTION  value="3000151">SEGRETERIA SECONDO*</OPTION>
<OPTION  value="3000152">SEGRETERIA TERZO*</OPTION>
<OPTION  value="3000396">test Amm</OPTION>
<OPTION  value="3000589">Utente Riservato API</OPTION>
<OPTION  value="3000161">Verdi Giuseppe*</OPTION>

</select>

        </td>
        <td class="padding_cella_generica" valign="top">
                                                <strong>Usuarios trabajadores</strong>
            <input type='image' name='bottone' value='Conferma' src='icone/icona (1).png' alt='Apri dettaglio utente' onclick="this.form.stato_secondario.value='gestione_utenti_display'; this.form.operazione.value='';this.form.id_utente.value=this.form.id_prof.value;this.form.tipo_utente.value='P'; this.form.target=''; this.form.submit();">
            <input style="float: right;" type='button' value='Alfabetico' onclick="this.form.stato_secondario.value='gestione_utenti_display'; this.form.id_utente.value='0'; this.form.operazione.value='';this.form.tipo_ord_prof.value='list';  this.form.target=''; this.form.submit();">
            <input style="float: right;" type='button' value='Gruppi' onclick="this.form.stato_secondario.value='gestione_utenti_display'; this.form.id_utente.value='0'; this.form.operazione.value='';this.form.tipo_ord_prof.value='groups'; this.form.target=''; this.form.submit();">
            <br>
            <SELECT onDblClick="this.form.stato_secondario.value='gestione_utenti_display'; this.form.operazione.value='';this.form.id_utente.value=this.value;this.form.tipo_utente.value='P'; this.form.target=''; this.form.submit();" onChange="this.form.stato_secondario.value='gestione_utenti_display'; this.form.operazione.value='';this.form.id_utente.value=this.value;this.form.tipo_utente.value='P'; this.form.target=''; this.form.submit();" name='id_prof' size='20' style='width:100%' >
<OPTION  value="3000818">DELL'ANNO DOCENTE</OPTION>
<OPTION  value="3000473">docente test</OPTION>
<OPTION  value="3000178">DOCENTE ALESSANDRO</OPTION>
<OPTION  value="3000145">DOCENTE CORSI NON TOCCARE</OPTION>
<OPTION  value="3000170">DOCENTE GOOGLE</OPTION>
<OPTION  value="3000146">DOCENTE MEDIE</OPTION>
<OPTION  value="3000181">DOCENTE MICROSOFT</OPTION>
<OPTION  value="3000166">DOCENTE PAOLO</OPTION>
<OPTION  value="3000147">DOCENTE PRIMARIA NON TOCCARE</OPTION>
<OPTION  value="3000182">DOCENTE PROVAUNO</OPTION>
<OPTION  value="3000169">DOCENTE SCUOLA</OPTION>
<OPTION  value="3000162">DOCENTE SOSTEGNO</OPTION>
<OPTION  value="3000419">PALUMBO MARCO</OPTION>
<OPTION  value="3000133">ROSSI MARIO</OPTION>
<OPTION  value="3000165">Test Rilascio</OPTION>

</select>

        </td>
        <td class="padding_cella_generica" valign="top">
            <strong>Usuarios supervisores</strong>
            <input type='image' name='bottone' value='Conferma' src='icone/icona (1).png' alt='Apri dettaglio utente' onclick="this.form.stato_secondario.value='gestione_utenti_display'; this.form.operazione.value='';this.form.id_utente.value=this.form.id_comm.value;this.form.tipo_utente.value='E'; this.form.target=''; this.form.submit();"><br>
            <SELECT onDblClick="this.form.stato_secondario.value='gestione_utenti_display'; this.form.operazione.value='';this.form.id_utente.value=this.value;this.form.tipo_utente.value='E'; this.form.target=''; this.form.submit();" onChange="this.form.stato_secondario.value='gestione_utenti_display'; this.form.operazione.value='';this.form.id_utente.value=this.value;this.form.tipo_utente.value='E'; this.form.target=''; this.form.submit();" name='id_comm' size='20' style='width:100%' >
<OPTION  value="3000973">Commissario Auricchio</OPTION>
<OPTION  value="3000131">Commissario di Prova</OPTION>
<OPTION  value="3000258">prova prova</OPTION>
<OPTION  value="3000967">test test gio</OPTION>

</select>

        </td>
            
        </tr>
    </table>
            <table border=0 width="100%" style="border-collapse:separate;">
            </table>
    <input type='hidden' name='form_stato' value='amministratore'>
    <input type='hidden' name='stato_principale' value='impostazioni_principale'>
    <input type='hidden' name='stato_secondario' value='gestione_utenti_display'>
    <input type='hidden' name='id_utente' value=''>
    <input type='hidden' name='tipo_utente' value=''>
    <input type='hidden' name='chiave_ricerca' value=''>
    <input type='hidden' name='tipo_ord_prof' value=''>
    <input type='hidden' name='operazione' value=''>
    <input type='hidden' name='mac_del' value=''>
    <input type='hidden' name='id_client_del' value=''>
    <input type='hidden' name='id_nomina' value=''>
    <input type='hidden' name='id_assenza' value=''>
    
    <input type='hidden' name='id_servizio' value=''>
    <input type='hidden' name='id_atto' value=''>
    <input type='hidden' name='id_assegnazione' value=''>
    <input type='hidden' name='id_qualifica' value=''>
    <input type='hidden' name='id_certificato' value=''>
    <input type='hidden' name='emetti_subito' value=''>
    <input type='hidden' name='ritorna_a' id="ritorna_a" value=''>
    <input type='hidden' name='current_user' value='3000132'>
    <input type='hidden' name='current_key' id="current_key" value='eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1aWQiOiJtY3VzZXJfMTcyMDA4MTUzOS42OTk5ZDk0M2YxNGVfbWNyLWZvcm1hdG9yaTEiLCJ0eXBlIjoidXNlciIsInRpbWUiOjE3OTIxNDM0ODksImRhdGUiOiIxNlwvMTBcLzIwMjYgMTE6MzgiLCJleHBpcmF0aW9uIjoxNzk0NzM1NDg5fQ.MJFlALYYh2JL4PQjegJH0R8OiaYJMDISZuqlF6eRZJU'>
</form>


                
            
            
            
            


































</td>
</tr>

</table>

<div class="mc mc-adm-sel mc-adm-sel--footer" data-mc-sel="setup">
    
    <button type="button" class="mc-adm-sel-launcher" aria-expanded="false" aria-controls="mc_sel_setup_panel">
        <span class="mc-adm-sel-launcher-tile" aria-hidden="true"><span class="mc-adm-sel-launcher-ic" style="-webkit-mask-image:url(icone/svg/search100.svg);mask-image:url(icone/svg/search100.svg);"></span></span>
        <span class="mc-adm-sel-launcher-copy">
            <span class="mc-adm-sel-launcher-title">Apri elenco impostazioni</span>
            <span class="mc-adm-sel-launcher-sub">Cerca e scegli una funzione di setup</span>
        </span>
        <span class="mc-adm-sel-launcher-action">Cerca e apri
            <span class="mc-adm-sel-launcher-arrow" style="-webkit-mask-image:url(icone/svg/right178.svg);mask-image:url(icone/svg/right178.svg);" aria-hidden="true"></span>
        </span>
    </button>
    <div class="mc-adm-sel-backdrop" hidden></div>
    <div class="mc-adm-sel-panel" id="mc_sel_setup_panel" role="dialog" aria-label="Elenco impostazioni" hidden>
        <div class="mc-adm-sel-panel-head">
            <span class="mc-adm-sel-panel-title">Elenco impostazioni</span>
            <button type="button" class="mc-btn mc-adm-sel-close" aria-label="Chiudi elenco">Chiudi</button>
        </div>
        <div class="mc-adm-sel-panel-search">
            <div class="mc-adm-sel-search">
                <span class="mc-adm-sel-search-ic" style="-webkit-mask-image:url(icone/svg/search100.svg);mask-image:url(icone/svg/search100.svg);" aria-hidden="true"></span>
                <input type="search" class="mc-adm-sel-search-input" placeholder="Cerca tra le voci" aria-label="Cerca tra le voci">
            </div>
        </div>
        <form method="post" action="/mastercom/index.php">
            <div class="mc-adm-sel-panel-grid">
                <section class="mc-adm-sel-sec mc-adm-sel-sec--a"><div class="mc-adm-sel-sec-head"><span class="mc-adm-sel-mark" aria-hidden="true">A</span><span class="mc-adm-sel-sec-title">Impostazioni di base</span></div><div class="mc-adm-sel-list"><button type="button" class="mc-adm-sel-item" data-value="gestione_utenti_display" data-label="Gestione utenti" data-search="A01 Gestione utenti" title="Gestione utenti" aria-label="Gestione utenti"><span class="mc-adm-sel-code">A&middot;01</span><span class="mc-adm-sel-label">Gestione utenti</span></button><button type="button" class="mc-adm-sel-item" data-value="dati_base_sedi" data-label="Gestione sedi istituto" data-search="A02 Gestione sedi istituto" title="Gestione sedi istituto" aria-label="Gestione sedi istituto"><span class="mc-adm-sel-code">A&middot;02</span><span class="mc-adm-sel-label">Gestione sedi istituto</span></button><button type="button" class="mc-adm-sel-item" data-value="gestione_materie_display" data-label="Gestione materie" data-search="A03 Gestione materie" title="Gestione materie" aria-label="Gestione materie"><span class="mc-adm-sel-code">A&middot;03</span><span class="mc-adm-sel-label">Gestione materie</span></button><button type="button" class="mc-adm-sel-item" data-value="gestione_classi_indirizzi_display" data-label="Gestione classi e indirizzi" data-search="A04 Gestione classi e indirizzi" title="Gestione classi e indirizzi" aria-label="Gestione classi e indirizzi"><span class="mc-adm-sel-code">A&middot;04</span><span class="mc-adm-sel-label">Gestione classi e indirizzi</span></button><button type="button" class="mc-adm-sel-item" data-value="gestione_materie_curricolo_display" data-label="Gestione curricolo degli studi" data-search="A05 Gestione curricolo degli studi" title="Gestione curricolo degli studi" aria-label="Gestione curricolo degli studi"><span class="mc-adm-sel-code">A&middot;05</span><span class="mc-adm-sel-label">Gestione curricolo degli studi</span></button><button type="button" class="mc-adm-sel-item" data-value="parametri_estetici_display" data-label="Gestione parametri estetici" data-search="A06 Gestione parametri estetici" title="Gestione parametri estetici" aria-label="Gestione parametri estetici"><span class="mc-adm-sel-code">A&middot;06</span><span class="mc-adm-sel-label">Gestione parametri estetici</span></button><button type="button" class="mc-adm-sel-item" data-value="setup_voti_display" data-label="Gestione parametri voti" data-search="A07 Gestione parametri voti" title="Gestione parametri voti" aria-label="Gestione parametri voti"><span class="mc-adm-sel-code">A&middot;07</span><span class="mc-adm-sel-label">Gestione parametri voti</span></button><button type="button" class="mc-adm-sel-item" data-value="elenco_scuole" data-label="Creazione nuova scuola" data-search="A09 Creazione nuova scuola" title="Creazione nuova scuola" aria-label="Creazione nuova scuola"><span class="mc-adm-sel-code">A&middot;09</span><span class="mc-adm-sel-label">Creazione nuova scuola</span></button><button type="button" class="mc-adm-sel-item" data-value="gestione_certificati_display" data-label="Creazione verbali e certificati" data-search="A10 Creazione verbali e certificati" title="Creazione verbali e certificati" aria-label="Creazione verbali e certificati"><span class="mc-adm-sel-code">A&middot;10</span><span class="mc-adm-sel-label">Creazione verbali e certificati</span></button><button type="button" class="mc-adm-sel-item" data-value="gestione_adozione_libri_display" data-label="Gestione adozione libri" data-search="A12 Gestione adozione libri" title="Gestione adozione libri" aria-label="Gestione adozione libri"><span class="mc-adm-sel-code">A&middot;12</span><span class="mc-adm-sel-label">Gestione adozione libri</span></button><button type="button" class="mc-adm-sel-item" data-value="gestione_studenti_piani_studio_medie" data-label="Gestione abbinamenti Studente-Piani di Studio per Sec I Grado" data-search="A13.2 Gestione abbinamenti Studente-Piani di Studio per Sec I Grado" title="Gestione abbinamenti Studente-Piani di Studio per Sec I Grado" aria-label="Gestione abbinamenti Studente-Piani di Studio per Sec I Grado"><span class="mc-adm-sel-code">A&middot;13.2</span><span class="mc-adm-sel-label">Gestione abbinamenti Studente-Piani di Studio per Sec I Grado</span></button><button type="button" class="mc-adm-sel-item" data-value="gestione_quadri_orario_display" data-label="Gestione abbinamenti Studente-Quadri Orario per Sec. II Grado" data-search="A14 Gestione abbinamenti Studente-Quadri Orario per Sec. II Grado" title="Gestione abbinamenti Studente-Quadri Orario per Sec. II Grado" aria-label="Gestione abbinamenti Studente-Quadri Orario per Sec. II Grado"><span class="mc-adm-sel-code">A&middot;14</span><span class="mc-adm-sel-label">Gestione abbinamenti Studente-Quadri Orario per Sec. II Grado</span></button><button type="button" class="mc-adm-sel-item" data-value="gestione_abbin_materie_quadri_orario_display" data-label="Gestione abbinamenti Materie-Quadri Orario per Sec. II Grado" data-search="A15 Gestione abbinamenti Materie-Quadri Orario per Sec. II Grado" title="Gestione abbinamenti Materie-Quadri Orario per Sec. II Grado" aria-label="Gestione abbinamenti Materie-Quadri Orario per Sec. II Grado"><span class="mc-adm-sel-code">A&middot;15</span><span class="mc-adm-sel-label">Gestione abbinamenti Materie-Quadri Orario per Sec. II Grado</span></button><button type="button" class="mc-adm-sel-item" data-value="gestione_anagrafica_risorse_display" data-label="Gestione anagrafica risorse scolastiche" data-search="A16 Gestione anagrafica risorse scolastiche" title="Gestione anagrafica risorse scolastiche" aria-label="Gestione anagrafica risorse scolastiche"><span class="mc-adm-sel-code">A&middot;16</span><span class="mc-adm-sel-label">Gestione anagrafica risorse scolastiche</span></button><button type="button" class="mc-adm-sel-item" data-value="gestione_abbin_mastercom_trentino_display" data-label="Gestione abbinamenti Mastercom-SGA" data-search="A17 Gestione abbinamenti Mastercom-SGA" title="Gestione abbinamenti Mastercom-SGA" aria-label="Gestione abbinamenti Mastercom-SGA"><span class="mc-adm-sel-code">A&middot;17</span><span class="mc-adm-sel-label">Gestione abbinamenti Mastercom-SGA</span></button><button type="button" class="mc-adm-sel-item" data-value="gestione_abbinamenti_sostegno" data-label="Gestione Sostegno" data-search="A18 Gestione Sostegno" title="Gestione Sostegno" aria-label="Gestione Sostegno"><span class="mc-adm-sel-code">A&middot;18</span><span class="mc-adm-sel-label">Gestione Sostegno</span></button><button type="button" class="mc-adm-sel-item" data-value="gestione_corsi_display" data-label="Gestione corsi" data-search="A19 Gestione corsi" title="Gestione corsi" aria-label="Gestione corsi"><span class="mc-adm-sel-code">A&middot;19</span><span class="mc-adm-sel-label">Gestione corsi</span></button><button type="button" class="mc-adm-sel-item" data-value="gestione_competenze" data-label="Gestione competenze" data-search="A20 Gestione competenze" title="Gestione competenze" aria-label="Gestione competenze"><span class="mc-adm-sel-code">A&middot;20</span><span class="mc-adm-sel-label">Gestione competenze</span></button></div><div class="mc-adm-sel-empty" hidden>Nessuna voce</div></section>
                <section class="mc-adm-sel-sec mc-adm-sel-sec--b"><div class="mc-adm-sel-sec-head"><span class="mc-adm-sel-mark" aria-hidden="true">B</span><span class="mc-adm-sel-sec-title">Operazioni di manutenzione</span></div><div class="mc-adm-sel-list"><button type="button" class="mc-adm-sel-item" data-value="gestione_classi_indirizzi_anno_succ_display" data-label="Gestione classi e indirizzi per l&#039;anno successivo" data-search="B01 Gestione classi e indirizzi per l&#039;anno successivo" title="Gestione classi e indirizzi per l&#039;anno successivo" aria-label="Gestione classi e indirizzi per l&#039;anno successivo"><span class="mc-adm-sel-code">B&middot;01</span><span class="mc-adm-sel-label">Gestione classi e indirizzi per l&#039;anno successivo</span></button><button type="button" class="mc-adm-sel-item" data-value="gestione_materie_curricolo_anno_succ_display" data-label="Gestione del curricolo degli studi per l&#039;anno successivo" data-search="B02 Gestione del curricolo degli studi per l&#039;anno successivo" title="Gestione del curricolo degli studi per l&#039;anno successivo" aria-label="Gestione del curricolo degli studi per l&#039;anno successivo"><span class="mc-adm-sel-code">B&middot;02</span><span class="mc-adm-sel-label">Gestione del curricolo degli studi per l&#039;anno successivo</span></button><button type="button" class="mc-adm-sel-item" data-value="cambio_anno" data-label="Procedura di Cambio Anno" data-search="B03 Procedura di Cambio Anno" title="Procedura di Cambio Anno" aria-label="Procedura di Cambio Anno"><span class="mc-adm-sel-code">B&middot;03</span><span class="mc-adm-sel-label">Procedura di Cambio Anno</span></button><button type="button" class="mc-adm-sel-item" data-value="visualizza_anni_precedenti_display" data-label="Visualizzazione anni storici" data-search="B04 Visualizzazione anni storici" title="Visualizzazione anni storici" aria-label="Visualizzazione anni storici"><span class="mc-adm-sel-code">B&middot;04</span><span class="mc-adm-sel-label">Visualizzazione anni storici</span></button><button type="button" class="mc-adm-sel-item" data-value="generazione_password_display" data-label="Rigenerazione password e username studenti" data-search="B05 Rigenerazione password e username studenti" title="Rigenerazione password e username studenti" aria-label="Rigenerazione password e username studenti"><span class="mc-adm-sel-code">B&middot;05</span><span class="mc-adm-sel-label">Rigenerazione password e username studenti</span></button><button type="button" class="mc-adm-sel-item" data-value="generazione_password_docenti_display" data-label="Rigenerazione password docenti" data-search="B06 Rigenerazione password docenti" title="Rigenerazione password docenti" aria-label="Rigenerazione password docenti"><span class="mc-adm-sel-code">B&middot;06</span><span class="mc-adm-sel-label">Rigenerazione password docenti</span></button><button type="button" class="mc-adm-sel-item" data-value="privilegi_prof_display" data-label="Gestione privilegi totali docenti" data-search="B07 Gestione privilegi totali docenti" title="Gestione privilegi totali docenti" aria-label="Gestione privilegi totali docenti"><span class="mc-adm-sel-code">B&middot;07</span><span class="mc-adm-sel-label">Gestione privilegi totali docenti</span></button><button type="button" class="mc-adm-sel-item" data-value="generazione_chiavi_utenti" data-label="Rigenerazione chiavi registro elettronico docenti" data-search="B08 Rigenerazione chiavi registro elettronico docenti" title="Rigenerazione chiavi registro elettronico docenti" aria-label="Rigenerazione chiavi registro elettronico docenti"><span class="mc-adm-sel-code">B&middot;08</span><span class="mc-adm-sel-label">Rigenerazione chiavi registro elettronico docenti</span></button><button type="button" class="mc-adm-sel-item" data-value="recupero_studenti_storici_display" data-label="Recupero studenti dallo storico" data-search="B10 Recupero studenti dallo storico" title="Recupero studenti dallo storico" aria-label="Recupero studenti dallo storico"><span class="mc-adm-sel-code">B&middot;10</span><span class="mc-adm-sel-label">Recupero studenti dallo storico</span></button><button type="button" class="mc-adm-sel-item" data-value="generazione_registro_display" data-label="Rigenerazione completa numeri di registro degli studenti" data-search="B11 Rigenerazione completa numeri di registro degli studenti" title="Rigenerazione completa numeri di registro degli studenti" aria-label="Rigenerazione completa numeri di registro degli studenti"><span class="mc-adm-sel-code">B&middot;11</span><span class="mc-adm-sel-label">Rigenerazione completa numeri di registro degli studenti</span></button><button type="button" class="mc-adm-sel-item" data-value="generazione_codici_fiscali_display" data-label="Rigenerazione di tutti i codici fiscali" data-search="B12 Rigenerazione di tutti i codici fiscali" title="Rigenerazione di tutti i codici fiscali" aria-label="Rigenerazione di tutti i codici fiscali"><span class="mc-adm-sel-code">B&middot;12</span><span class="mc-adm-sel-label">Rigenerazione di tutti i codici fiscali</span></button><button type="button" class="mc-adm-sel-item" data-value="storico_portale_genitori" data-label="Gestione storico portale genitori" data-search="B13 Gestione storico portale genitori" title="Gestione storico portale genitori" aria-label="Gestione storico portale genitori"><span class="mc-adm-sel-code">B&middot;13</span><span class="mc-adm-sel-label">Gestione storico portale genitori</span></button><button type="button" class="mc-adm-sel-item" data-value="gestione_operazioni_preliminari_display" data-label="Operazioni preliminari inizio anno scolastico" data-search="B14 Operazioni preliminari inizio anno scolastico" title="Operazioni preliminari inizio anno scolastico" aria-label="Operazioni preliminari inizio anno scolastico"><span class="mc-adm-sel-code">B&middot;14</span><span class="mc-adm-sel-label">Operazioni preliminari inizio anno scolastico</span></button><button type="button" class="mc-adm-sel-item" data-value="rigenerazione_comunicazione_password" data-label="Rigenerazione e Comunicazione nome utente e password massiva" data-search="B15 Rigenerazione e Comunicazione nome utente e password massiva" title="Rigenerazione e Comunicazione nome utente e password massiva" aria-label="Rigenerazione e Comunicazione nome utente e password massiva"><span class="mc-adm-sel-code">B&middot;15</span><span class="mc-adm-sel-label">Rigenerazione e Comunicazione nome utente e password massiva</span></button><button type="button" class="mc-adm-sel-item" data-value="sezioni_quaderno" data-label="Sezioni Quaderno" data-search="B16 Sezioni Quaderno" title="Sezioni Quaderno" aria-label="Sezioni Quaderno"><span class="mc-adm-sel-code">B&middot;16</span><span class="mc-adm-sel-label">Sezioni Quaderno</span></button><button type="button" class="mc-adm-sel-item" data-value="visualizza_permessi_messenger" data-label="Permessi messaggistica - dettaglio" data-search="B18 Permessi messaggistica - dettaglio" title="Permessi messaggistica - dettaglio" aria-label="Permessi messaggistica - dettaglio"><span class="mc-adm-sel-code">B&middot;18</span><span class="mc-adm-sel-label">Permessi messaggistica - dettaglio</span></button><button type="button" class="mc-adm-sel-item" data-value="setup_wizard_inizio_anno_display" data-label="Setup guidato inizio anno" data-search="B19 Setup guidato inizio anno" title="Setup guidato inizio anno" aria-label="Setup guidato inizio anno"><span class="mc-adm-sel-code">B&middot;19</span><span class="mc-adm-sel-label">Setup guidato inizio anno</span></button><button type="button" class="mc-adm-sel-item" data-value="metodi_autenticazione" data-label="Metodi di autenticazione" data-search="B20 Metodi di autenticazione" title="Metodi di autenticazione" aria-label="Metodi di autenticazione"><span class="mc-adm-sel-code">B&middot;20</span><span class="mc-adm-sel-label">Metodi di autenticazione</span></button></div><div class="mc-adm-sel-empty" hidden>Nessuna voce</div></section>
                <section class="mc-adm-sel-sec mc-adm-sel-sec--c"><div class="mc-adm-sel-sec-head"><span class="mc-adm-sel-mark" aria-hidden="true">C</span><span class="mc-adm-sel-sec-title">Gestione operativa</span></div><div class="mc-adm-sel-list"><button type="button" class="mc-adm-sel-item" data-value="setup_tasse" data-label="Gestione tipi tasse" data-search="C01 Gestione tipi tasse" title="Gestione tipi tasse" aria-label="Gestione tipi tasse"><span class="mc-adm-sel-code">C&middot;01</span><span class="mc-adm-sel-label">Gestione tipi tasse</span></button><button type="button" class="mc-adm-sel-item" data-value="generazione_barcode_display" data-label="Gestione codici a barre degli studenti" data-search="C02 Gestione codici a barre degli studenti" title="Gestione codici a barre degli studenti" aria-label="Gestione codici a barre degli studenti"><span class="mc-adm-sel-code">C&middot;02</span><span class="mc-adm-sel-label">Gestione codici a barre degli studenti</span></button><button type="button" class="mc-adm-sel-item" data-value="gestione_stampa_badge_display" data-label="Gestione stampa tesserini studenti" data-search="C03 Gestione stampa tesserini studenti" title="Gestione stampa tesserini studenti" aria-label="Gestione stampa tesserini studenti"><span class="mc-adm-sel-code">C&middot;03</span><span class="mc-adm-sel-label">Gestione stampa tesserini studenti</span></button><button type="button" class="mc-adm-sel-item" data-value="export_display" data-label="Esportazione dati" data-search="C04 Esportazione dati" title="Esportazione dati" aria-label="Esportazione dati"><span class="mc-adm-sel-code">C&middot;04</span><span class="mc-adm-sel-label">Esportazione dati</span></button><button type="button" class="mc-adm-sel-item" data-value="export_siis" data-label="Esportazione dati progetto SIIS" data-search="C05 Esportazione dati progetto SIIS" title="Esportazione dati progetto SIIS" aria-label="Esportazione dati progetto SIIS"><span class="mc-adm-sel-code">C&middot;05</span><span class="mc-adm-sel-label">Esportazione dati progetto SIIS</span></button><button type="button" class="mc-adm-sel-item" data-value="flussi_siis" data-label="Flussi comunicazione progetto SIIS" data-search="C06 Flussi comunicazione progetto SIIS" title="Flussi comunicazione progetto SIIS" aria-label="Flussi comunicazione progetto SIIS"><span class="mc-adm-sel-code">C&middot;06</span><span class="mc-adm-sel-label">Flussi comunicazione progetto SIIS</span></button><button type="button" class="mc-adm-sel-item" data-value="importa_preiscrizioni_display" data-label="Importazione alunni preiscritti" data-search="C07 Importazione alunni preiscritti" title="Importazione alunni preiscritti" aria-label="Importazione alunni preiscritti"><span class="mc-adm-sel-code">C&middot;07</span><span class="mc-adm-sel-label">Importazione alunni preiscritti</span></button><button type="button" class="mc-adm-sel-item" data-value="importa_dati_esami_display" data-label="Importazione dati da Commissione Web" data-search="C08 Importazione dati da Commissione Web" title="Importazione dati da Commissione Web" aria-label="Importazione dati da Commissione Web"><span class="mc-adm-sel-code">C&middot;08</span><span class="mc-adm-sel-label">Importazione dati da Commissione Web</span></button><button type="button" class="mc-adm-sel-item" data-value="verifica_dati_partenza" data-label="Verifica dati per partenza della scuola" data-search="C09 Verifica dati per partenza della scuola" title="Verifica dati per partenza della scuola" aria-label="Verifica dati per partenza della scuola"><span class="mc-adm-sel-code">C&middot;09</span><span class="mc-adm-sel-label">Verifica dati per partenza della scuola</span></button><button type="button" class="mc-adm-sel-item" data-value="spegni_server_display" data-label="Spegni server MasterCom" data-search="C10 Spegni server MasterCom" title="Spegni server MasterCom" aria-label="Spegni server MasterCom"><span class="mc-adm-sel-code">C&middot;10</span><span class="mc-adm-sel-label">Spegni server MasterCom</span></button><button type="button" class="mc-adm-sel-item" data-value="flussi_sial" data-label="Flussi comunicazione SIAL" data-search="C11 Flussi comunicazione SIAL" title="Flussi comunicazione SIAL" aria-label="Flussi comunicazione SIAL"><span class="mc-adm-sel-code">C&middot;11</span><span class="mc-adm-sel-label">Flussi comunicazione SIAL</span></button><button type="button" class="mc-adm-sel-item" data-value="gestione_alternanza_classi" data-label="Gestione abilitazioni Alternanza Scuola Lavoro" data-search="C12 Gestione abilitazioni Alternanza Scuola Lavoro" title="Gestione abilitazioni Alternanza Scuola Lavoro" aria-label="Gestione abilitazioni Alternanza Scuola Lavoro"><span class="mc-adm-sel-code">C&middot;12</span><span class="mc-adm-sel-label">Gestione abilitazioni Alternanza Scuola Lavoro</span></button><button type="button" class="mc-adm-sel-item" data-value="gestione_sostituzioni" data-label="Gestione Sostituzioni Giornaliere" data-search="C13 Gestione Sostituzioni Giornaliere" title="Gestione Sostituzioni Giornaliere" aria-label="Gestione Sostituzioni Giornaliere"><span class="mc-adm-sel-code">C&middot;13</span><span class="mc-adm-sel-label">Gestione Sostituzioni Giornaliere</span></button><button type="button" class="mc-adm-sel-item" data-value="gestione_tag" data-label="Gestione Tag" data-search="C14 Gestione Tag" title="Gestione Tag" aria-label="Gestione Tag"><span class="mc-adm-sel-code">C&middot;14</span><span class="mc-adm-sel-label">Gestione Tag</span></button><button type="button" class="mc-adm-sel-item" data-value="gestione_template_word" data-label="Gestione modelli stampa" data-search="C15 Gestione modelli stampa" title="Gestione modelli stampa" aria-label="Gestione modelli stampa"><span class="mc-adm-sel-code">C&middot;15</span><span class="mc-adm-sel-label">Gestione modelli stampa</span></button><button type="button" class="mc-adm-sel-item" data-value="gestione_account_mail" data-label="Gestione account mail" data-search="C16 Gestione account mail" title="Gestione account mail" aria-label="Gestione account mail"><span class="mc-adm-sel-code">C&middot;16</span><span class="mc-adm-sel-label">Gestione account mail</span></button><button type="button" class="mc-adm-sel-item" data-value="manualistica" data-label="Manualistica" data-search="C22 Manualistica" title="Manualistica" aria-label="Manualistica"><span class="mc-adm-sel-code">C&middot;22</span><span class="mc-adm-sel-label">Manualistica</span></button></div><div class="mc-adm-sel-empty" hidden>Nessuna voce</div></section>
                <section class="mc-adm-sel-sec mc-adm-sel-sec--d"><div class="mc-adm-sel-sec-head"><span class="mc-adm-sel-mark" aria-hidden="true">D</span><span class="mc-adm-sel-sec-title">Scrutini e esami di stato</span></div><div class="mc-adm-sel-list"><button type="button" class="mc-adm-sel-item" data-value="parametri_pagelle_display" data-label="Parametri Generali Pagelle e Pagelline" data-search="D02 Parametri Generali Pagelle e Pagelline" title="Parametri Generali Pagelle e Pagelline" aria-label="Parametri Generali Pagelle e Pagelline"><span class="mc-adm-sel-code">D&middot;02</span><span class="mc-adm-sel-label">Parametri Generali Pagelle e Pagelline</span></button><button type="button" class="mc-adm-sel-item" data-value="parametri_pagelle_formule" data-label="Formule di traduzione automatica proposte di voto" data-search="D03 Formule di traduzione automatica proposte di voto" title="Formule di traduzione automatica proposte di voto" aria-label="Formule di traduzione automatica proposte di voto"><span class="mc-adm-sel-code">D&middot;03</span><span class="mc-adm-sel-label">Formule di traduzione automatica proposte di voto</span></button><button type="button" class="mc-adm-sel-item" data-value="gestione_commissioni_display" data-label="Gestione commissioni esaminatrici" data-search="D04 Gestione commissioni esaminatrici" title="Gestione commissioni esaminatrici" aria-label="Gestione commissioni esaminatrici"><span class="mc-adm-sel-code">D&middot;04</span><span class="mc-adm-sel-label">Gestione commissioni esaminatrici</span></button><button type="button" class="mc-adm-sel-item" data-value="gestione_indicatori" data-label="Gestione degli indicatori" data-search="D05 Gestione degli indicatori" title="Gestione degli indicatori" aria-label="Gestione degli indicatori"><span class="mc-adm-sel-code">D&middot;05</span><span class="mc-adm-sel-label">Gestione degli indicatori</span></button><button type="button" class="mc-adm-sel-item" data-value="elenco_motivazioni_crediti" data-label="Elenco motivazioni crediti" data-search="D06 Elenco motivazioni crediti" title="Elenco motivazioni crediti" aria-label="Elenco motivazioni crediti"><span class="mc-adm-sel-code">D&middot;06</span><span class="mc-adm-sel-label">Elenco motivazioni crediti</span></button></div><div class="mc-adm-sel-empty" hidden>Nessuna voce</div></section>
                <section class="mc-adm-sel-sec mc-adm-sel-sec--e"><div class="mc-adm-sel-sec-head"><span class="mc-adm-sel-mark" aria-hidden="true">E</span><span class="mc-adm-sel-sec-title">Orario e controllo accessi</span></div><div class="mc-adm-sel-list"><button type="button" class="mc-adm-sel-item" data-value="accesso_gate_display" data-label="Gestione rilevazione presenze alunni" data-search="E01 Gestione rilevazione presenze alunni" title="Gestione rilevazione presenze alunni" aria-label="Gestione rilevazione presenze alunni"><span class="mc-adm-sel-code">E&middot;01</span><span class="mc-adm-sel-label">Gestione rilevazione presenze alunni</span></button><button type="button" class="mc-adm-sel-item" data-value="visualizza_intervalli_predefiniti_orario" data-label="Gestione fasce orarie lezioni" data-search="E02 Gestione fasce orarie lezioni" title="Gestione fasce orarie lezioni" aria-label="Gestione fasce orarie lezioni"><span class="mc-adm-sel-code">E&middot;02</span><span class="mc-adm-sel-label">Gestione fasce orarie lezioni</span></button><button type="button" class="mc-adm-sel-item" data-value="festivita_scuola" data-label="Gestione calendario lezioni" data-search="E03 Gestione calendario lezioni" title="Gestione calendario lezioni" aria-label="Gestione calendario lezioni"><span class="mc-adm-sel-code">E&middot;03</span><span class="mc-adm-sel-label">Gestione calendario lezioni</span></button><button type="button" class="mc-adm-sel-item" data-value="parametri_stampa_display" data-label="Impostazione stampe rapportini ingresso" data-search="E04 Impostazione stampe rapportini ingresso" title="Impostazione stampe rapportini ingresso" aria-label="Impostazione stampe rapportini ingresso"><span class="mc-adm-sel-code">E&middot;04</span><span class="mc-adm-sel-label">Impostazione stampe rapportini ingresso</span></button><button type="button" class="mc-adm-sel-item" data-value="importazione_orario" data-label="Importazione orario" data-search="E06 Importazione orario" title="Importazione orario" aria-label="Importazione orario"><span class="mc-adm-sel-code">E&middot;06</span><span class="mc-adm-sel-label">Importazione orario</span></button></div><div class="mc-adm-sel-empty" hidden>Nessuna voce</div></section>
                <section class="mc-adm-sel-sec mc-adm-sel-sec--f"><div class="mc-adm-sel-sec-head"><span class="mc-adm-sel-mark" aria-hidden="true">F</span><span class="mc-adm-sel-sec-title">Comunicazioni</span></div><div class="mc-adm-sel-list"><button type="button" class="mc-adm-sel-item" data-value="gestione_import_doc_display" data-label="Importazione documenti studenti" data-search="F02 Importazione documenti studenti" title="Importazione documenti studenti" aria-label="Importazione documenti studenti"><span class="mc-adm-sel-code">F&middot;02</span><span class="mc-adm-sel-label">Importazione documenti studenti</span></button><button type="button" class="mc-adm-sel-item" data-value="votazioni_principale" data-label="Votazioni (elezioni, sondaggi, organi collegiali)" data-search="F04 Votazioni (elezioni, sondaggi, organi collegiali)" title="Votazioni (elezioni, sondaggi, organi collegiali)" aria-label="Votazioni (elezioni, sondaggi, organi collegiali)"><span class="mc-adm-sel-code">F&middot;04</span><span class="mc-adm-sel-label">Votazioni (elezioni, sondaggi, organi collegiali)</span></button><button type="button" class="mc-adm-sel-item" data-value="organi_collegiali_principale" data-label="Organi collegiali (riunioni, convocazioni, verbali)" data-search="F05 Organi collegiali (riunioni, convocazioni, verbali)" title="Organi collegiali (riunioni, convocazioni, verbali)" aria-label="Organi collegiali (riunioni, convocazioni, verbali)"><span class="mc-adm-sel-code">F&middot;05</span><span class="mc-adm-sel-label">Organi collegiali (riunioni, convocazioni, verbali)</span></button></div><div class="mc-adm-sel-empty" hidden>Nessuna voce</div></section>
            </div>
            <input type="hidden" name="form_stato" value="amministratore">
            <input type="hidden" name="stato_principale" value="impostazioni_principale">
            <input type="hidden" data-mc-sel-target name="stato_secondario" value="">
            <input type="hidden" name="stato_recupero" value="seleziona_anno">
            <input type="hidden" name="current_user" value="3000132">
            <input type="hidden" name="current_key" value="eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1aWQiOiJtY3VzZXJfMTcyMDA4MTUzOS42OTk5ZDk0M2YxNGVfbWNyLWZvcm1hdG9yaTEiLCJ0eXBlIjoidXNlciIsInRpbWUiOjE3OTIxNDM0ODksImRhdGUiOiIxNlwvMTBcLzIwMjYgMTE6MzgiLCJleHBpcmF0aW9uIjoxNzk0NzM1NDg5fQ.MJFlALYYh2JL4PQjegJH0R8OiaYJMDISZuqlF6eRZJU">
        </form>
        <div class="mc-adm-sel-panel-empty" hidden>Nessuna voce corrisponde alla ricerca</div>
    </div>
</div>
<script type="text/javascript" src="https://mcr-formatori1.registroelettronico.com/mastercom/javascript/selettore_v2.js?v=26.1.39"></script>

</body>
</html>



