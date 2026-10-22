<?php
// 1. Iniciar sesión en PHP
session_start();

$error = false;

// 2. Procesar el inicio de sesión
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['user'])) {
    $user = trim($_POST['user'] ?? '');
    $pass = $_POST['password_user'] ?? '';

    // Usuarios del sistema
    if ($user === "segreteria" && $pass === "segreteria123") {
        $_SESSION['rol'] = 'segreteria';
        $_SESSION['user'] = $user;
        header("Location: index.php");
        exit();
    } elseif ($user === "docente" && $pass === "docente123") {
        $_SESSION['rol'] = 'docente';
        $_SESSION['user'] = $user;
        header("Location: index.php");
        exit();
    } elseif (strtoupper($user) === "GALALE123" && $pass === "galale123") {
        $_SESSION['rol'] = 'docente';
        $_SESSION['user'] = $user;
        header("Location: index.php");
        exit();
    } elseif (strtoupper($user) === "SPENCER" && $pass === "spencer123") {
        $_SESSION['rol'] = 'docente';
        $_SESSION['user'] = $user;
        header("Location: index.php");
        exit();
    } elseif (strtoupper($user) === "GERCHUNOFF" && $pass === "gerchunoff123") {
        $_SESSION['rol'] = 'docente';
        $_SESSION['user'] = $user;
        header("Location: index.php");
        exit();
    } else {
        $error = true;
    }
}

// 3. Cerrar sesión
if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: index.php");
    exit();
}

$rolActual = $_SESSION['rol'] ?? null;

// Capturar la acción para el título y para las vistas
$action = $_REQUEST['action'] ?? ($_POST['action'] ?? ($_POST['stato_principale'] ?? ''));

// 4. Nombre completo personalizado por usuario
$nombreMostrar = "Docente Prova";
if (isset($_SESSION['user'])) {
    $usuarioActual = strtoupper($_SESSION['user']);
    if ($usuarioActual === "GALALE123") {
        $nombreMostrar = "GAL ALEXANDRA";
    } elseif ($usuarioActual === "SPENCER") {
        $nombreMostrar = "SPENCER MAXWELL";
    } elseif ($usuarioActual === "GERCHUNOFF") {
        $nombreMostrar = "GERCHUNOFF GONZALO";
    }
}

// 5. Configurar dinámicamente el favicon y el título según el estado y la acción
if ($rolActual === null) {
    // Sin sesión (Login)
    $faviconPath = "icone/MCOM-60x60-1.ico";
    $tituloPagina = "MasterCom Ver. 26.1.38 - Login";
} else {
    // Con sesión iniciada
    $faviconPath = "icone/mastercom.ico";
    if ($rolActual === 'segreteria') {
        if ($action === 'configuracion') {
            $tituloPagina = "MasterCom Ver. 26.1.38 - Configuración";
        } elseif ($action === 'crear-usuario' || $action === 'crea-usuario') {
            $tituloPagina = "MasterCom Ver. 26.1.38 - Crear Usuario";
        } else {
            $tituloPagina = "MasterCom Ver. 26.1.38 - Administración General";
        }
    } else {
        if ($action === 'agenda') {
            $tituloPagina = "Agenda";
        } else {
            $tituloPagina = "Home";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="it">
    <head>
        <!-- ICONO DE PÁGINA DINÁMICO -->
        <link id="page_favicon" rel="shortcut icon" type="image/x-icon" href="<?php echo $faviconPath; ?>">
        <link rel="icon" href="<?php echo $faviconPath; ?>" type="image/x-icon">
        
        <!-- TÍTULO DINÁMICO -->
        <title><?php echo $tituloPagina; ?></title>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="google" value="notranslate">
        
        <link rel="apple-touch-icon" href="icone/mastercom_touch_60.png">
        <link rel="apple-touch-icon" sizes="76x76" href="icone/mastercom_touch_72.png">
        <link rel="apple-touch-icon" sizes="120x120" href="icone/mastercom_touch_120.png">
        <link rel="apple-touch-icon" sizes="152x152" href="icone/mastercom_touch_152.png">

        <!-- LIBRERÍA DE ICONOS FONT AWESOME -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

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
    <body class="<?php echo $rolActual ? 'mcsito-panel' : 'mcsito-login'; ?>">

    <?php if ($rolActual === null): ?>
        <!-- ========================================================= -->
        <!-- MODO 1: PANTALLA DE LOGIN                                 -->
        <!-- ========================================================= -->
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

                    <!-- Aviso de error -->
                    <div id="error_alert" role="alert" style="display:<?php echo $error ? 'block' : 'none'; ?>; background:#f8d7da; color:#721c24; border:1px solid #f5c6cb; border-radius:6px; padding:10px 12px; margin-bottom:14px; font-size:14px; text-align:center;">
                        usuario o contraseña incorrectos
                    </div>

                    <form autocomplete="off" id="form_login" method="POST" action="index.php">
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

    <?php else: ?>
        <!-- ========================================================= -->
        <!-- MODO 2: INTERFAZ DE PANEL COMPLETA                        -->
        <!-- ========================================================= -->
        <main id="contenuto_principale" class="contenido-principal">
            <?php 
            // 1. Control de Vistas por Rol SEGRETERIA
            if ($rolActual === 'segreteria') {
                switch ($action) {
                    case 'configuracion':
                        include('configuracion.php');
                        break;
                    case 'crea-usuario':
                    case 'crear-usuario':
                        include('crear-usuario.php');
                        break;
                    case 'panel':
                    default:
                        include('panel.php');
                        break;
                }
            } 
            // 2. Control de Vistas por Rol DOCENTE
            elseif ($rolActual === 'docente') {
                switch ($action) {
                    case 'agenda':
                        include('agenda.php');
                        break;
                    case 'cambio_password':
                        include('cambio_password.php');
                        break;
                    case 'cambio_lingua':
                        include('cambio_lingua.php');
                        break;
                    case 'mac_address':
                        include('mac_adress.php');
                        break;
                    case 'home':
                    default:
                        include('home.php');
                        break;
                }
            }
            ?>
        </main>
    <?php endif; ?>

    <script>
        // Limpia los parámetros ?action= de la URL al instante de cargar la página
        if (window.location.search.indexOf('action=') !== -1) {
            window.history.replaceState(null, null, window.location.pathname);
        }
    </script>

    </body>
</html>