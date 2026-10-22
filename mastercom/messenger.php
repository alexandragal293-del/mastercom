<!DOCTYPE html>
<html lang="it">
    <head>
        <link rel="shortcut icon" type="image/x-icon" href="icone/MCOM-60x60-1.ico">
    <title>Messenger</title>
    <meta charset="utf-8" />
    <meta name="google" value="notranslate">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

    <link rel="stylesheet" href="https://mcr-formatori1.registroelettronico.com/mastercom/libs/smartelements/source/styles/smart.default.css" type="text/css" />
    <link rel="stylesheet" href="https://mcr-formatori1.registroelettronico.com/mastercom/css/messenger/style.css?v=26.1.39" type="text/css" />
    <link rel="stylesheet" type="text/css" href="https://mcr-formatori1.registroelettronico.com/mastercom/css/jquery-ui-1.8.16.custom.css" />
    <link rel="stylesheet" href="https://mcr-formatori1.registroelettronico.com/mastercom/libs/jqwidgets/styles/jqx.base.css" type="text/css" />
    <link rel="stylesheet" href="https://mcr-formatori1.registroelettronico.com/mastercom/libs/jqwidgets/styles/jqx.material.css" type="text/css" />
    <link href="https://mcr-formatori1.registroelettronico.com/mastercom/assets/plugins/font-awesome/5.0/css/fontawesome-all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://mcr-formatori1.registroelettronico.com/mastercom/assets/fontawesome-free-5.5.0-web/css/all.css">

    <link rel="icon" href="icone/mastercom_icon_16.png" type="image/png" sizes="16x16">
    <link rel="icon" href="icone/mastercom_icon_32.png" type="image/png" sizes="32x32">
    <link rel="apple-touch-icon" href="icone/mastercom_touch_60.png">
    <link rel="apple-touch-icon" sizes="76x76" href="icone/mastercom_touch_72.png">
    <link rel="apple-touch-icon" sizes="120x120" href="icone/mastercom_touch_120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="icone/mastercom_touch_152.png">

    <!-- Tenere jquery prima della select2 -->
    
    <script type="text/javascript" src="https://mcr-formatori1.registroelettronico.com/mastercom/libs/jquery/jquery-3.7.1.min.js"></script>
    <!--<script type="text/javascript" src="libs/smartelements/source/modules/smart.elements.js"></script>  -->

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script type="module" src="https://mcr-formatori1.registroelettronico.com/mastercom/libs/smartelements/source/smart.elements.js"></script>
    <script type="module" src="https://mcr-formatori1.registroelettronico.com/mastercom/libs/smartelements/source/modules/smart.editor.js"></script>
    <script type="text/javascript" src="https://mcr-formatori1.registroelettronico.com/mastercom/javascript/messenger.js?v=26.1.39"></script>
    <script type="text/javascript" src="https://mcr-formatori1.registroelettronico.com/mastercom/javascript/messenger/messenger.js?v=26.1.39"></script>

    <script type="text/javascript" src="https://mcr-formatori1.registroelettronico.com/mastercom/libs/jqwidgets/jqx-all.js"></script>
    <script type="text/javascript" src="https://mcr-formatori1.registroelettronico.com/mastercom/libs/jqwidgets/globalization/globalize.js"></script>
    <script type="text/javascript" src="https://mcr-formatori1.registroelettronico.com/mastercom/libs/jqwidgets/globalization/globalize.culture.it-IT.js"></script>

    </head>
    <body class="light-grey">
        <form method='post' id='form-container' action='/mastercom/index.php'>
             <!-- Toast container -->
            <div id="toastsContainer" style="position: fixed; z-index: 251; bottom: 0px; right: 0px; padding: 10px;"></div>

            <!-- Top container -->
            <div class="bar top mastercom-light-blue large" style="z-index:250">
                <button type="button" class="bar-item button hide-large hover-none hover-text-light-grey" onclick="openSidebar();">&#9776;</button>
                <span class="bar-item right">Segreteria Istituto</span>
                <!-- <span class="bar-item right"><img src='images/mastercom-w.png' height="25"></span>-->
                </div>

                <!-- Sidebar/menu -->
                <nav class="sidebar collapse white animate-left" style="z-index:250; box-shadow: -1px 0px 6px 0px grey;" id="sidebar">
                                <br>
                <div class="container row flex-container flex-vcenter">
                    <img src="icone quaderno/messaggi.svg" height="45">
                    <span class="bold xlarge text-mastercom-dark-blue margin-left-small">Messenger</span>
                    
                </div>
                <hr>
                                <div class="bar-block" id="bar-block">
                                        <a href="#" class="bar-item button padding-16 hide-large dark-grey hover-black" onclick="closeSidebar();" title="Chiudi menù">&times; Chiudi Menù</a>
                                                                <div class="margin-small">
                            <a href="#" class="bar-item button padding center mastercom-dark-blue round " id="sidebar-nuovo_messaggio" onclick="cambiaSezione('nuovo_messaggio');">
                                <i class="fa fa-fw fa-pen text-mastercom-yellow"></i>&nbsp;
                                <strong>Scrivi</strong>
                            </a>
                        </div>
                                        <a href="#" class="bar-item button padding  active " id="sidebar-in_arrivo" onclick="cambiaSezione('in_arrivo');">
                        <i class="fa fa-fw fa-inbox"></i>&nbsp;
                        In arrivo
                        <div id="badge-ricevuti" class="badge-messenger-menu right mastercom-light-blue hide"></div>
                    </a>
                    <a href="#" class="bar-item button padding " id="sidebar-da_leggere" onclick="cambiaSezione('da_leggere');">
                        <i class="fa fa-fw fa-envelope margin-left"></i>&nbsp;
                        Da leggere
                        <div id="badge-da-leggere" class="badge-messenger-menu right mastercom-light-blue hide"></div>
                    </a>
                    <a href="#" class="bar-item button padding " id="sidebar-da_confermare_lettura" onclick="cambiaSezione('da_confermare_lettura');">
                        <i class="fa fa-fw fa-envelope-open margin-left"></i>&nbsp;
                        Da confermare lettura
                        <div id="badge-conferma-lettura" class="badge-messenger-menu right mastercom-light-blue hide"></div>
                    </a>
                    <a href="#" class="bar-item button padding " id="sidebar-da_sottoscrivere" onclick="cambiaSezione('da_sottoscrivere');">
                        <i class="fa fa-fw fa-envelope-open margin-left"></i>&nbsp;
                        Da sottoscrivere
                        <div id="badge-conferma-sottoscrizione" class="badge-messenger-menu right mastercom-light-blue hide"></div>
                    </a>
                    <a href="#" class="bar-item button padding " id="sidebar-da_leggere_in_classe" onclick="cambiaSezione('da_leggere_in_classe');">
                        <i class="fa fa-fw fa-bullhorn margin-left"></i>&nbsp;
                        Da leggere in classe
                        <div id="badge-da-leggere-in-classe" class="badge-messenger-menu right mastercom-light-blue hide"></div>
                    </a>
                    <a href="#" class="bar-item button padding " id="sidebar-circolari" onclick="cambiaSezione('circolari');">
                        <i class="fa fa-fw fa-envelope-open-text margin-left"></i>&nbsp;
                        Circolari
                        <div id="badge-circolare" class="badge-messenger-menu right mastercom-light-blue hide"></div>
                    </a>
                    <a href="#" class="bar-item button padding " id="sidebar-inviati" onclick="cambiaSezione('inviati');">
                        <i class="fa fa-fw fa-paper-plane"></i>&nbsp;
                        Inviati
                    </a>
                                        <a href="#" class="bar-item button padding " id="sidebar-bozze" onclick="cambiaSezione('bozze');">
                        <i class="fa fa-fw fa-file"></i>&nbsp;
                        Bozze <span id="info-bozze"></span>
                        <div id="badge-bozze" class="badge-messenger-menu right mastercom-light-blue hide"></div>
                    </a>
                    <a href="#" class="bar-item button padding " id="sidebar-programmati" onclick="cambiaSezione('programmati');">
                        <i class="fa fa-fw fa-clock"></i>&nbsp;
                        Programmati <span id="info-programmati"></span>
                        <div id="badge-programmati" class="badge-messenger-menu right mastercom-light-blue hide"></div>
                    </a>
                                        <hr>
                    <a href="#" class="bar-item button padding " id="sidebar-bacheca" onclick="cambiaSezione('bacheca');">
                        <i class="fa fa-fw fa-clipboard"></i>&nbsp;
                        Bacheca <span id="info-bacheca"></span>
                        <div id="badge-bacheca" class="badge-messenger-menu right mastercom-light-blue hide"></div>
                    </a>
                    <hr>
                    <a href="#" class="bar-item button padding " id="sidebar-archivio" onclick="cambiaSezione('archivio');">
                        <i class="fa fa-fw fa-archive"></i>&nbsp;
                        Archivio <span id="info-archivio"></span>
                        <div id="badge-archivio" class="badge-messenger-menu right mastercom-light-blue hide"></div>
                    </a>
                    <hr>
                                        <a href="#" class="bar-item button padding " id="sidebar-gruppi" onclick="cambiaSezione('gruppi');">
                        <i class="fa fa-fw fa-users-cog"></i>&nbsp;
                        Gestione Gruppi
                    </a>
                                                                <a href="#" class="bar-item button padding " id="sidebar-tuoi_gruppi" onclick="cambiaSezione('tuoi_gruppi');">
                            <i class="fa fa-fw fa-users"></i>&nbsp;
                            I tuoi Gruppi
                        </a>
                                                                <a href="#" class="bar-item button padding " id="sidebar-altri_gruppi" onclick="cambiaSezione('altri_gruppi');">
                            <i class="fa fa-fw fa-cogs"></i>&nbsp;
                            Altri Gruppi
                        </a>
                                        <br><br>
                </div>
                </nav>


                <!-- Overlay effect when opening sidebar on small screens -->
                <div class="overlay hide-large animate-opacity" onclick="closeSidebar();" style="cursor:pointer" title="Chiudi menù" id="overlayBg"></div>

                <!-- !PAGE CONTENT! -->
                <div class="main">

                <div id="includedContent">
                </div>

                <!-- Footer -->
                <footer class="container padding-16 light-grey" id="footer">
                    <p> <img src='images/mastercom.png' height="25"> Powered by Mastercom Pro</p>
                </footer>

            <!-- End page content -->
            </div>

            <!-- Loader -->
            <div id="jqxGeneralMasterModalLoader"></div>
            <div id="jqxGeneralModalLoader"></div>
            <div id="jqxGeneralLoader"></div>

            <!-- Hidden Input -->
            <input type='hidden' name='form_stato' id="form_stato" value='amministratore'>
            <input type='hidden' name='stato_principale' id="stato_principale" value='messenger'>
            <input type='hidden' name='stato_secondario' id="stato_secondario" value='in_arrivo'>
            <input type='hidden' name='operazione' id="operazione" value=''>
            <input type='hidden' name='chat' id="chat" value='NO'>
            <input type='hidden' name='id_tread' id="id_tread" value=''>
            <input type='hidden' name='id_messaggio' id="id_messaggio" value=''>
            <input type='hidden' name='db_messaggio' id="db_messaggio" value=''>
            <input type='hidden' name='tipo_messaggio' id="tipo_messaggio" value=''>
            <input type='hidden' name='current_user' id='current_user' value='3000132'>
            <input type='hidden' name='current_key' id='current_key' value='eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1aWQiOiJtY3VzZXJfMTcyMDA4MTUzOS42OTk5ZDk0M2YxNGVfbWNyLWZvcm1hdG9yaTEiLCJ0eXBlIjoidXNlciIsInRpbWUiOjE3OTIzMjkyNDUsImRhdGUiOiIxOFwvMTBcLzIwMjYgMTU6MTQiLCJleHBpcmF0aW9uIjoxNzk0OTIxMjQ1fQ.dAHCZP9-NYJpRpqh3RPD9hfvFcr_ebjFXhpdYL_6z90'>
            <input type='hidden' id='db_key' value=''>
            <input type='hidden' id='tipo_utente' value='amministratore'>
            <input type='hidden' id='c_usr' value='mcuser_1720081539.6999d943f14e_mcr-formatori1'>
            <input type='hidden' name='header' id='header' value='NO'> <!-- nei submit in questo modo mi ricarica l'header -->
            <input type='hidden' name='from_app' id='from_app' value=''>
            <input type='hidden' name='padding-bottom' id='padding-bottom' value='0'>
        </form>

        <form method="post" id="download_form" target="_blank">
            <input type="hidden" name="authorization">
            <input type="hidden" name="direct">
            <input type="hidden" name="applicazione" value="mastercom">
        </form>
    </body>
</html>
