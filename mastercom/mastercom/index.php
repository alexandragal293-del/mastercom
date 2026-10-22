<!DOCTYPE html>
<html lang="it">
    <head>
        <!-- ICONO DE PAGINA (Se actualizará solo si ya hay sesión de secretaría) -->
        <link id="page_favicon" rel="shortcut icon" type="image/x-icon" href="icone/MCOM-60x60-1.ico">
        <title>MasterCom Ver. 26.1.38 - Login</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="google" value="notranslate">
        

        <link rel="icon" href="icone/mastercom_icon_16.png" type="image/png" sizes="16x16">
        <link rel="icon" href="icone/mastercom_icon_32.png" type="image/png" sizes="32x32">
        <link rel="apple-touch-icon" href="icone/mastercom_touch_60.png">
        <link rel="apple-touch-icon" sizes="76x76" href="icone/mastercom_touch_72.png">
        <link rel="apple-touch-icon" sizes="120x120" href="icone/mastercom_touch_120.png">
        <link rel="apple-touch-icon" sizes="152x152" href="icone/mastercom_touch_152.png">

        <link rel="stylesheet" href="https://mastertest9.registroelettronico.com/mastercom/css/style_spid.css">
        <link rel="stylesheet" href="https://mastertest9.registroelettronico.com/mastercom/css/style_microsoft.css">
        <link rel="stylesheet" href="https://mastertest9.registroelettronico.com/mastercom/css/mc-core.css?v=26.1.38">
        <link rel="stylesheet" href="https://mastertest9.registroelettronico.com/mastercom/css/mc-sito.css?v=26.1.38">
        <script src="https://accounts.google.com/gsi/client" async defer></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jsrsasign/8.0.20/jsrsasign-all-min.js"></script>
        <script src="https://mastertest9.registroelettronico.com/mastercom/javascript/jquery-1.2.1.pack.js"></script>
        <script src="https://mastertest9.registroelettronico.com/mastercom/javascript/ui.tabs.js" type="text/javascript"></script>
        <script src="https://mastertest9.registroelettronico.com/mastercom/javascript/microsoft.js?v=26.1.38" type="text/javascript"></script>
        
        <script type="text/javascript">
            $(function () {
                $('#cont-eventi-categorie ul').tabs({fxFade: true, fxSpeed: 'fast'});
                $('#cont-eventi-classi ul').tabs({fxFade: true, fxSpeed: 'fast'});
            });
            window.name = 'mastercom_main_window';
        </script>
        
        <script type="text/javascript" src="javascript/dhtmlgoodies_calendar.js?"></script>
    </head>
    <body class="mcsito-login">
        <div class="mc mc--default">
            <div class="mcsito">
                <svg class="mcsito-archi mcsito-archi--tr" viewBox="0 0 400 400" aria-hidden="true" focusable="false">
                    <defs>
                        <linearGradient id="s4g-tr-a1" x1="0" y1="0" x2="0" y2="1"><stop offset="0" style="stop-color:var(--mc-primary-h);stop-opacity:1"/><stop offset=".4" style="stop-color:var(--mc-primary-h);stop-opacity:.9"/><stop offset="1" style="stop-color:var(--mc-primary-h);stop-opacity:.28"/></linearGradient>
                        <linearGradient id="s4g-tr-a2" x1="0" y1="0" x2="0" y2="1"><stop offset="0" style="stop-color:var(--mc-azzurro);stop-opacity:1"/><stop offset=".4" style="stop-color:var(--mc-azzurro);stop-opacity:.92"/><stop offset="1" style="stop-color:var(--mc-azzurro);stop-opacity:.32"/></linearGradient>
                        <linearGradient id="s4g-tr-a3" x1="0" y1="0" x2="0" y2="1"><stop offset="0" style="stop-color:var(--mc-giallo);stop-opacity:1"/><stop offset=".4" style="stop-color:var(--mc-giallo);stop-opacity:.95"/><stop offset="1" style="stop-color:var(--mc-giallo);stop-opacity:.38"/></linearGradient>
                    </defs>
                    <path class="a1" style="fill:url(#s4g-tr-a1)" d="M56.5 104.5 A219 134 0 1 1 56.5 285.5 A204 122 0 1 0 56.5 104.5 Z"/>
                    <path class="a2" style="fill:url(#s4g-tr-a2)" d="M81.3 134.8 A172 102 0 1 1 81.3 269.2 A160 90 0 1 0 81.3 134.8 Z"/>
                    <path class="a3" style="fill:url(#s4g-tr-a3)" d="M107.1 161.3 A125 70 0 1 1 107.1 254.7 A115 62 0 1 0 107.1 161.3 Z"/>
                </svg>
                <svg class="mcsito-archi mcsito-archi--bl" viewBox="0 0 400 400" aria-hidden="true" focusable="false">
                    <defs>
                        <linearGradient id="s4g-bl-a1" x1="0" y1="1" x2="0" y2="0"><stop offset="0" style="stop-color:var(--mc-primary-h);stop-opacity:1"/><stop offset=".4" style="stop-color:var(--mc-primary-h);stop-opacity:.9"/><stop offset="1" style="stop-color:var(--mc-primary-h);stop-opacity:.28"/></linearGradient>
                        <linearGradient id="s4g-bl-a2" x1="0" y1="1" x2="0" y2="0"><stop offset="0" style="stop-color:var(--mc-azzurro);stop-opacity:1"/><stop offset=".4" style="stop-color:var(--mc-azzurro);stop-opacity:.92"/><stop offset="1" style="stop-color:var(--mc-azzurro);stop-opacity:.32"/></linearGradient>
                        <linearGradient id="s4g-bl-a3" x1="0" y1="1" x2="0" y2="0"><stop offset="0" style="stop-color:var(--mc-giallo);stop-opacity:1"/><stop offset=".4" style="stop-color:var(--mc-giallo);stop-opacity:.95"/><stop offset="1" style="stop-color:var(--mc-giallo);stop-opacity:.38"/></linearGradient>
                    </defs>
                    <path class="a1" style="fill:url(#s4g-bl-a1)" d="M56.5 104.5 A219 134 0 1 1 56.5 285.5 A204 122 0 1 0 56.5 104.5 Z"/>
                    <path class="a2" style="fill:url(#s4g-bl-a2)" d="M81.3 134.8 A172 102 0 1 1 81.3 269.2 A160 90 0 1 0 81.3 134.8 Z"/>
                    <path class="a3" style="fill:url(#s4g-bl-a3)" d="M107.1 161.3 A125 70 0 1 1 107.1 254.7 A115 62 0 1 0 107.1 161.3 Z"/>
                </svg>

                <a class="mcsito-brandlink" href="https://www.mastercompro.it" target="_blank">
                    <img src="images/mastercom-logo-restyling-white.png" alt="Visit Mastercom Pro">
                </a>

                <div class="mcsito-card">
                    <a href="https://www.mastercompro.it" target="_blank">
                        <img src="images/mastercom.png" alt="Visit Mastercom Pro">
                    </a>
                    <h1 class="mcsito-title">Acceder a MasterCom</h1>

                    <!-- Aviso de error oculto por defecto -->
                    <div id="error_alert" role="alert" style="display:none; background:#f8d7da; color:#721c24; border:1px solid #f5c6cb; border-radius:6px; padding:10px 12px; margin-bottom:14px; font-size:14px; text-align:center;">
                        usuario o contraseña incorrectos
                    </div>

                    <form autocomplete="off" id="form_login">
                        <div class="mc-field">
                            <label for="user">Usuario</label>
                            <input type="text" name="user" id="user" class="mc-input" required placeholder="Introduce tu código de usuario aqui">
                        </div>
                        <div class="mc-field">
                            <label for="password_user">Contraseña</label>
                            <input type="password" name="password_user" id="password_user" class="mc-input" required placeholder="Introduce tu contraseña aqui">
                        </div>
                        <button type="submit" class="mc-btn mc-btn--primary mcsito-submit">Entrar</button>
                    </form>

                    <div class="mcsito-foot">
                        <a href="Privacy_MCAPP.pdf" target="_blank" class="mc-link">Privacy policy</a>
                        <span>mc: 26.1.38 &middot; next: 5.1.42</span>
                    </div>
                </div>
            </div>
        </div>

        <script type="text/javascript">
            // Al cargar la página, comprobamos si ya está marcada la sesión de secretaría para poner su icono desde el inicio
            window.onload = function() {
                if (sessionStorage.getItem("sesion_segreteria") === "true") {
                    document.getElementById("page_favicon").href = "c:\Users\Alonso\Downloads\mastercom.ico";
                }

                const urlParams = new URLSearchParams(window.location.search);
                if (urlParams.has('error')) {
                    document.getElementById("error_alert").style.display = "block";
                }
            };

            document.getElementById("form_login").addEventListener("submit", function(event) {
                event.preventDefault();
                
                var user = document.getElementById("user").value.trim();
                var pass = document.getElementById("password_user").value;

                if (user === "segreteria" && pass === "segreteria123") {
                    // Guardamos la sesión y cambiamos el icono justo al refrescar/redirigir
                    sessionStorage.setItem("sesion_segreteria", "true");
                    document.getElementById("page_favicon").href = "c:\Users\Alonso\Downloads\mastercom.ico";
                    
                    window.location.href = "panel.html";
                } else if (user === "docente" && pass === "docente123") {
                    sessionStorage.removeItem("sesion_segreteria");
                    window.location.href = "personal.html";
                } else {
                    sessionStorage.removeItem("sesion_segreteria");
                    window.location.href = window.location.pathname + "?error=1";
                }
            });
        </script>

    </body>
    
