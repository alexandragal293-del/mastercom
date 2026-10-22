var nextapiPath = "../next-api/v1/";
const smartElLicense = "YOUR-LICENSE-HERE";

var localizationEditor = {
    "bold": "Bold",
    "italic": "Italic",
    "underline": "Underline",
    "format": "Format Block",
    "font": "Font Name",
    "size": "Font Size",
    "color": "Text Color",
    "background": "Fill Color",
    "left": "Align Left",
    "center": "Align Center",
    "right": "Align Right",
    "outdent": "Indent Less",
    "indent": "Indent More",
    "ul": "Insert unordered list",
    "ol": "Insert ordered list",
    "image": "Insert image",
    "link": "Inserisci link",
    "html": "View source",
    "clean": "Remove Formatting",
    "Insert Link": "Inserisci Link",
    "Title": "Titolo",
    "Open in a new window/tab": "Apri in una nuova finestra/tab",
};

const localizationSmartEditor = {
    'it': {
        'invalidValue': '{{elementType}}: valore {{property}} non valido. {{property}} deve essere di tipo {{typeOne}} o {{typeTwo}}.',
        'incorrectArgument': '{{elementType}}: argomento {{topicName}} non corretto nel metodo {{methodName}}.',
        'permissionsRequired': '{{elementType}}: sono necessarie autorizzazioni per la seguente azione {{actionName}}.',
        'ok': 'Ok',
        'cancel': 'Annulla',
        'alignLeft': 'Allineare a sinistra',
        'alignCenter': 'Allinea al centro',
        'alignRight': 'Allinea a destra',
        'alignJustify': 'Allinea Giustifica',
        'segoeUi': 'Segoe UI',
        'arial': 'Arial',
        'georgia': 'Georgia',
        'impact': 'Impact',
        'tahoma': 'Tahoma',
        'timesNewRoman': 'Times New Roman',
        'verdana': 'Verdana',
        'p': 'Paragrafo',
        'pre': 'Codice',
        'code': 'Codice',
        'blockquote': 'Quotazione',
        'h1': 'Intestazione 1',
        'h2': 'Intestazione 2',
        'h3': 'Intestazione 3',
        'h4': 'Intestazione 4',
        'h5': 'Intestazione 5',
        'h6': 'Intestazione 6',
        'bold': 'Grassetto',
        'italic': 'Corsivo',
        'underline': 'Sottolineare',
        'strikethrough': 'Barrato',
        'orderedlist': 'Lista ordinata',
        'unorderedlist': 'Lista non ordinata',
        'subscript': 'Pedice',
        'superscript': 'Apice',
        'alignment': 'Allineamenti',
        'fontname': 'Nome carattere',
        'fontsize': 'Dimensione del font',
        'formats': 'Formati',
        'backgroundcolor': 'Colore di sfondo',
        'fontcolor': 'Colore del carattere',
        'redo': 'Rifare',
        'undo': 'Disfare',
        'indent': 'Rientro',
        'outdent': 'Outdent',
        'createlink': 'Collegamento ipertestuale',
        'hyperlink': 'Collegamento ipertestuale',
        'editlink': 'Collegamento ipertestuale',
        'removelink': 'Rimuovi collegamento',
        'openlink': 'Link aperto',
        'image': 'Immagine',
        'table': 'Tavolo',
        'lowercase': 'Case inferiore',
        'uppercase': 'Maiuscolo',
        'print': 'Stampa',
        'cut': 'Taglio',
        'copy': 'Copia',
        'paste': 'Incolla',
        'clearformat': 'Cancella formato',
        'fullscreen': 'A schermo intero',
        'restore': 'Ripristina schermo',
        'sourcecode': 'Codice sorgente',
        'preview': 'Anteprima',
        'splitmode': 'Editor diviso',
        'address': 'Indirizzo Web',
        'text': 'Visualizza testo',
        'addressPlaceholder': 'http://example.com',
        'textPlaceholder': 'Inserire il testo',
        'targetPlaceholder': 'Seleziona Target',
        'titlePlaceholder': 'Immettere un titolo',
        'urlPlaceholder': 'http://example.com/image.png',
        'captionPlaceholder': 'Didascalia',
        'altPlaceholder': 'Testo alternativo',
        'widthPlaceholder': 'auto',
        'heightPlaceholder': 'auto',
        'target': 'Apri collegamento in',
        'linkBlankDescr': 'Nuova finestra',
        'linkSelfDescr': 'Stessa finestra',
        'linkParentDescr': 'Frame genitore',
        'linkTopDescr': 'Tutto il corpo della finestra',
        'linkCustomDescr': 'Nome frame personalizzato',
        'title': 'Titolo',
        'url': 'Puoi anche fornire l\'URL a un\'immagine',
        'width': 'Larghezza',
        'height': 'Altezza',
        'alt': 'Testo alternativo',
        'caption': 'Didascalia',
        'display': 'Schermo',
        'displayPlaceholder': 'Schermo',
        'displayBlock': 'Bloccare',
        'displayInline': 'In linea',
        'draggable': 'Abilita il trascinamento',
        'resizable': 'Abilita ridimensionamento',
        'browse': 'Navigare',
        'connectionError': '{{elementType}}: il caricamento del file richiede la connessione al server.',
        'wrongItemIndex': '{{elementType}}: non è presente alcun file con tale indice nell\'elenco dei file caricati.',
        'tooLongFileName': '{{elementType}}: il nome del file è troppo lungo.',
        'totalFiles': 'File totali: ',
        'cancelFile': 'Annulla file',
        'dashedborders': 'Bordi tratteggiati',
        'altrows': 'Righe alternative',
        'insertRowBefore': 'Inserisci riga prima',
        'insertRowAfter': 'Inserisci riga dopo',
        'deleteRow': 'Elimina riga',
        'insertColumnLeft': 'Inserisci colonna a sinistra',
        'insertColumnRight': 'Inserisci colonna a destra',
        'deleteColumn': 'Elimina colonna',
        'alignTop': 'Allinea in alto',
        'alignMiddle': 'Allinea al centro',
        'alignBottom': 'Allinea in basso',
        'delete': 'Elimina',
        'tablerows': 'Righe tabella',
        'tablecolumns': 'Colonne della tabella',
        'tablevalign': 'Allineamento verticale delle celle della tabella',
        'tablestyle': 'Stile tavolo',
        'tableheader': 'Intestazione tabella',
        'buttonLabel': 'Tabella personalizzata',
        'pasteLabel': 'Scegli l\'azione di formato Incolla:',
        'cols': 'Colonne',
        'rows': 'Righe',
        'alphabet': 'abcdefghijklmnopqrstuvwxyz',
        'header': 'Intestazione',
        'column': 'Colonna',
        'plainText': 'Testo normale',
        'keepFormat': 'Mantieni formato',
        'cleanFormat': 'Formato pulito',
        'roleDescription': 'Editor di testo',
        'iframeTitle': 'Il contenuto dell\'editor è racchiuso nel proprio DOM all\'interno di un iFrame',
        'toolbarButtonAriaLabel': 'Pulsante di attivazione',
        'primaryToolbarAriaLabel': 'Barra degli strumenti principale',
        'secondaryToolbarAriaLabel': 'Barra degli strumenti secondaria',
        'inputAriaLabel': 'Inserire il testo'
    }
};

// Pulisce le proprietà CSS dannose dagli attributi style inline nell'HTML del messenger
// (es. height:0pt e overflow:hidden generati da Google Docs nei pasted di tabelle)
function pulisciCSSTabellaHTML(html) {
    if (!html) return html;

    // Fast path: se non contiene pattern sospetti, restituisci come è
    var lower = html.toLowerCase();
    if (lower.indexOf('height:0') === -1 &&
        lower.indexOf('height: 0') === -1 &&
        lower.indexOf('overflow:hidden') === -1 &&
        lower.indexOf('overflow: hidden') === -1 &&
        lower.indexOf('vertical-align:baseline') === -1 &&
        lower.indexOf('vertical-align: baseline') === -1) {
        return html;
    }

    var parser = new DOMParser();
    var doc = parser.parseFromString('<div data-mc-pulisci="1">' + html + '</div>', 'text/html');
    var container = doc.body.firstChild;

    var allNodes = container.querySelectorAll('*');
    for (var i = 0; i < allNodes.length; i++) {
        var styleAttr = allNodes[i].getAttribute('style');
        if (!styleAttr) continue;

        var coppie = styleAttr.split(';');
        var pulite = [];
        var modificato = false;

        for (var j = 0; j < coppie.length; j++) {
            var coppia = coppie[j].trim();
            if (!coppia) continue;

            var idx = coppia.indexOf(':');
            if (idx === -1) {
                pulite.push(coppia);
                continue;
            }
            var propRaw = coppia.substring(0, idx).trim();
            var valRaw = coppia.substring(idx + 1).trim();
            var prop = propRaw.toLowerCase();
            var val = valRaw.toLowerCase();

            // Rimuove height con valore 0 (0, 0pt, 0px, 0em, 0%)
            if (prop === 'height' && /^0[a-z]*$/.test(val)) {
                modificato = true;
                continue;
            }
            // Rimuove overflow/overflow-x/overflow-y con valore hidden
            if ((prop === 'overflow' || prop === 'overflow-x' || prop === 'overflow-y') && val === 'hidden') {
                modificato = true;
                continue;
            }
            // Rimuove vertical-align:baseline (valore di default)
            if (prop === 'vertical-align' && val === 'baseline') {
                modificato = true;
                continue;
            }

            pulite.push(propRaw + ': ' + valRaw);
        }

        if (modificato) {
            if (pulite.length > 0) {
                allNodes[i].setAttribute('style', pulite.join('; '));
            } else {
                allNodes[i].removeAttribute('style');
            }
        }
    }

    return container.innerHTML;
}

// Ordina le chiavi della struttura classi di Messenger (indirizzi) con la stessa logica
// del plugin classi di mastercom (estrai_classi_plugin in classi_indirizzi.php):
// descrizione indirizzo in minuscolo, ordine alfanumerico crescente,
// cosi' gli indirizzi non attivi (es. "X_SUPERIORI", "xPREISCRITTI") restano in coda
function ordinaChiaviStrutturaClassi(strutturaClassi){
    return Object.keys(strutturaClassi).sort(function (a, b) {
        var textA = strutturaClassi[a].datiIndirizzo.descrizione.toLowerCase();
        var textB = strutturaClassi[b].datiIndirizzo.descrizione.toLowerCase();
        return (textA < textB) ? -1 : (textA > textB) ? 1 : 0;
    });
}

// Registra il listener di cleanup live su un Smart Editor per rimuovere
// proprietà CSS dannose (es. tabelle Google Docs con height:0pt) in tempo reale
function inizializzaEditorCleanup(selectorEditor) {
    var editor = document.querySelector(selectorEditor);
    if (!editor) return;

    editor.addEventListener('change', function (event) {
        const detail = event.detail,
        oldValue = detail.oldValue,
        value = detail.value;

        // Pulizia live di proprietà CSS dannose (es. tabelle Google Docs con height:0pt)
        var cleaned = pulisciCSSTabellaHTML(value);
        if (cleaned !== value) {
            this.value = cleaned;
        }

        $("#solo_testo_corpo_html").val(this.getText());
    });

    // (difetto #165886) L'incollare deve aggiornare anche la textarea interna
    // che porta il corpo nel POST e il campo nascosto usato dalla validazione
    // dell'invio: la lib incolla manipolando direttamente il DOM (paste
    // annullato e reimmissione manuale), senza generare 'input', e 'change'
    // arriva solo al blur. Il setTimeout(0) scatta dopo la manipolazione del
    // DOM fatta dalla lib.
    ['paste', 'input'].forEach(function (tipoEvento) {
        editor.addEventListener(tipoEvento, function () {
            setTimeout(function () {
                try {
                    if (editor.$ && editor.$.input && 'markdown' !== editor.editMode) {
                        editor.$.input.value = editor.getHTML();
                    }
                } catch (err) {
                    // lib non ancora pronta: il sync in caricaSezione copre il POST
                }
                $("#solo_testo_corpo_html").val(editor.getText());
            }, 0);
        });
    });
}

// L'editor Smart UI preseleziona il target '_blank' con la voce di toolbar
// { name: 'hyperlink', editor: { target: '_blank' } }, ma le smart-input dei
// campi Indirizzo Web / Visualizza testo / Titolo registrano il valore solo su
// keyup: un URL incollato col menu contestuale (tasto destro > Incolla) o col
// drag&drop resta nella input nativa e non nella proprieta' value, percio' OK
// non inserisce nulla. All'apertura della finestra agganciamo il clic su OK e,
// prima che la libreria legga i campi, allineiamo quei tre campi al valore
// corrente della input nativa. Il campo target non va toccato: il suo '_blank'
// arriva gia' dalla configurazione di toolbar.
function inizializzaSyncCampiLinkSmartEditor(selectorEditor) {
    var editor = document.querySelector(selectorEditor);
    if (!editor) return;

    editor.addEventListener('dialogOpen', function (event) {
        var dettaglio = event.detail || {};
        var finestra = dettaglio.target;
        var voce = dettaglio.item;
        if (!finestra || !voce || ['hyperlink', 'createlink', 'editlink'].indexOf(voce.name) < 0) {
            return;
        }
        if (finestra._mcSyncCampiLinkAttivo) return;
        finestra._mcSyncCampiLinkAttivo = true;

        // capture: deve precedere il listener di click della libreria (bubble),
        // che e' quello che legge i campi e inserisce il link.
        finestra.addEventListener('click', function (eventoClick) {
            if (!isClickPulsanteOkFinestra(eventoClick)) return;
            sincronizzaCampiLinkFinestra(finestra);
        }, true);
    });
}

function isClickPulsanteOkFinestra(evento) {
    var percorso = evento.composedPath ? evento.composedPath() : [];
    for (var i = 0; i < percorso.length; i++) {
        var elemento = percorso[i];
        if (elemento && elemento.classList
            && elemento.classList.contains('smart-editor-window-button')
            && elemento.classList.contains('ok')) {
            return true;
        }
    }
    var target = evento.target;
    if (target && target.closest) {
        return !!target.closest('.smart-editor-window-button.ok');
    }
    return false;
}

function sincronizzaCampiLinkFinestra(finestra) {
    var radici = [];
    if (finestra.shadowRoot) radici.push(finestra.shadowRoot);
    radici.push(finestra);

    var tipi = ['address', 'text', 'title'];
    for (var i = 0; i < tipi.length; i++) {
        var campo = null;
        for (var r = 0; r < radici.length && !campo; r++) {
            campo = radici[r].querySelector('.smart-editor-window-editor[type="' + tipi[i] + '"] [item-editor]');
        }
        if (!campo || !campo.$ || !campo.$.input) continue;

        var valore = campo.$.input.value;
        campo.$.input.dataValue = valore;
        campo.value = valore;
    }
}

// Toggle between showing and hiding the sidebar, and add overlay effect
function openSidebar() {
    if (sidebar.style.display === 'block') {
        sidebar.style.display = 'none';
        overlayBg.style.display = "none";
    } else {
        sidebar.style.display = 'block';
        overlayBg.style.display = "block";
    }
}

// Close the sidebar with the close button
function closeSidebar() {
    sidebar.style.display = "none";
    overlayBg.style.display = "none";
}

// quando fromHistory e' true significa che la chiamata viene fatta dallo storico del browser e i parametri utilizzati sono solo quelli passati in parametriExtra
function caricaSezione(sezione = '', parametriExtra = {}, vuotaOperazione = true, pushHistory = false, fromHistory = false) {
    $('#jqxGeneralMasterModalLoader').jqxLoader('open');
    // $('#jqxGeneralModalLoader').jqxLoader('open');
    $(".jqx-editor-link-popup").remove();
    var caricamento = new Promise(function (resolve, reject) {
        if (sezione != '') {
            var nomePagina;
            switch (sezione) {
                default:
                    nomePagina = sezione;
                    break;
            }
        } else {
            nomePagina = $('#stato_secondario').val();
            if (nomePagina == '') {
                nomePagina = 'in_arrivo';
            }
        }

        $('#stato_secondario').val(nomePagina);

        // var parametri = {
        //     'stato_principale': $('#stato_principale').val(),
        //     'form_stato': $('#form_stato').val(),
        //     'stato_secondario': $('#stato_secondario').val(),
        //     'current_user': $('#current_user').val(),
        //     'current_key': $('#current_key').val(),
        //     'tipo_utente': $('#tipo_utente').val(),
        //     'header': 'SI'
        // };

        if (fromHistory){
            var parametri = new FormData();
            Object.keys(parametriExtra).forEach(function (index) {
                parametri.append(index, parametriExtra[index]);
            });
            pushHistory = false;
        } else {
            let form = document.getElementById('form-container');

            // (difetto #165886) La lib Smart aggiorna la textarea interna che
            // porta il corpo nel POST (name="corpo_html") solo su battitura e
            // blur; un incollare aggiorna solo il contenuto visibile, quindi
            // inviare/salvare subito dopo un incollare parte con il corpo
            // vuoto. Sync esplicito di tutti gli editor nominati del form,
            // subito prima di serializzare.
            document.querySelectorAll('#form-container smart-editor').forEach(function (editorSync) {
                try {
                    if (editorSync.name && editorSync.$ && editorSync.$.input && 'markdown' !== editorSync.editMode) {
                        editorSync.$.input.value = editorSync.getHTML();
                    }
                } catch (err) {
                    // editor non ancora inizializzato: si resta col valore corrente
                }
            });

            var parametri = new FormData(form);

            parametri.delete('header');
            parametri.append('header', 'SI');

            if (Object.keys(parametriExtra).length > 0) {
                Object.keys(parametriExtra).forEach(function (index) {
                    parametri.append(index, parametriExtra[index]);
                });
            }
        }

        // $("#includedContent").load("index.php", parametri, () => {
        //         try {
        //             eval("ready_" + nomePagina + "()");
        //         } catch (e) { };
        //     resolve(true);
        // });

        if (pushHistory){
            var procedi = true;

            if (history.state && history.state.sezione == nomePagina){
                // verifico se i parametri sono tutti uguali a quelli che ho gia' in history per non creare un doppione
                var parametriHistory = history.state.parametri;
                var objParametriForm = {};
                parametri.forEach(function (value, key) {
                    objParametriForm[key] = value;
                });

                var parametriUguali = verificaParametriUguali(objParametriForm, parametriHistory);

                if (parametriUguali){
                    procedi = false;
                }
            }

            if (procedi){
                // Aggiungi una voce alla history del browser

                //trasformo i parametri in un oggetto per poterlo passare alla history
                var objParametri = {};
                parametri.forEach(function (value, key) {
                    objParametri[key] = value;
                });

                if (history.state == null && history.length > 1){
                    history.replaceState({ 'sezione': nomePagina, 'parametri': objParametri }, nomePagina, '');
                } else {
                    history.pushState({ 'sezione': nomePagina, 'parametri': objParametri }, nomePagina, '');
                }
            }
        }

        $.ajax({
            method: "POST",
            type: "POST",
            processData: false,
            contentType: false,
            data: parametri,
            url: "index.php",
            success: function (data) {
                $("#includedContent").html(data);
                try {
                    eval("ready_" + nomePagina + "()");
                } catch (e) { };

                if ($("#chat").val() == 'SI'){
                    try {
                        ready_tread();
                    } catch (e) { };
                }
                resolve(true);
            }
        });

    });

    caricamento.then(() => {
        $('#jqxGeneralMasterModalLoader').jqxLoader('close');
        // $('#jqxGeneralModalLoader').jqxLoader('close');
        closeSidebar();
        if (vuotaOperazione) {
            $('#operazione').val('');
        }
        getBadgeNotifiche();
    })
}

function verificaParametriUguali(parametri1, parametri2){
    var uguali = true;

    Object.keys(parametri1).forEach(function (index) {
        if (index != 'current_key'){
            if (parametri1[index] != parametri2[index]){
                uguali = false;
            }
        }
    });
    return uguali;
}

function creaToast(testo, tipo) {
    var toastContainer = $('#toastsContainer');
    let toast = null;
    let sfondo;
    switch (tipo) {
        case 'errore':
        case 'error':
            sfondo = 'red';
            break;
        case 'attenzione':
        case 'warning':
            sfondo = 'amber';
            break;
        case 'info':
            sfondo = 'mastercom-light-blue';
            break;
        case 'successo':
        case 'success':
        default:
            sfondo = 'green';
            break;
    }
    toast = $('<div class="left-align round padding margin-top-small large ' + sfondo + ' ">' + testo + '</div>');
    toast.hide(function () {
        toast.appendTo(toastContainer);
        toast.show().delay(3000).fadeOut(600, function () {
            $(this).remove();
        });
    });
}

function inizializzaAllegati() {
    //var allegati = $('#allegati');
    var containerAllegati = $('#container_allegati');

    containerAllegati.css({ 'min-height': '50px' });

    // Aggiungi un'azione quando si seleziona un file
    // allegati.on('change', function () {
    //     //containerAllegati.html('');

    //     // Aggiungi i nomi dei file selezionati all'elenco di output
    //     var fileList = allegati[0].files;
    //     for (var i = 0; i < fileList.length; i++) {
    //         var fileListItem = $('<div>', {
    //             text: fileList[i].name,
    //             class: "show-inline-block border-bottom border-light-gray margin-small padding-small noselect"
    //         });

    //         // Aggiungi un pulsante di eliminazione per il nome del file
    //         var deleteButton = $('<div>', {
    //             text: "×",
    //             class: 'show-inline-block padding-xsmall hover-text-red margin-right-small'
    //         });

    //         deleteButton.on('click', function () {
    //             $(this).parent().remove();
    //         });

    //         // Inserisci il pulsante di eliminazione dopo il nome del file
    //         fileListItem.prepend(deleteButton);

    //         // Inserisci il nome del file nella lista di output
    //         containerAllegati.append(fileListItem);
    //     }

    // });
    aggiungiInputAllegati(1);
}

function aggiungiInputAllegati(numeroNuovoInput){
    var numeroVecchioInput = (numeroNuovoInput == 1) ? '' : numeroNuovoInput - 1;
    var containerAllegati = $('#container_allegati');

    // nascondo il pulsante e ne inserisco uno nuovo
    $('#allegati' + numeroVecchioInput).parent().hide();

    var nuovoPulsante = '<label for="allegati'+numeroNuovoInput+'" class="btn-allegati btn mastercom-light-blue round left margin-small">' +
        '<i class="fa fa-fw fa-paperclip"></i>&nbsp;Allegati' +
        ' <input id="allegati' + numeroNuovoInput + '" type="file" name="allegati' + numeroNuovoInput +'[]" multiple >' +
        '</label>';

    // uso sempre il primo input come riferimento del container del bottone
    containerAllegati.parent().prepend(nuovoPulsante);

    $('#allegati' + numeroNuovoInput).on('change', function () {
        //containerAllegati.html('');

        // Aggiungi i nomi dei file selezionati all'elenco di output
        var fileList = $('#allegati' + numeroNuovoInput)[0].files;
        for (var i = 0; i < fileList.length; i++) {
            var fileListItem = $('<div>', {
                text: fileList[i].name,
                class: "show-inline-block border-bottom border-light-gray margin-small padding-small noselect"
            });

            // Aggiungi un pulsante di eliminazione per il nome del file
            var deleteButton = $('<div>', {
                text: "×",
                class: 'show-inline-block padding-xsmall hover-text-red margin-right-small'
            });

            deleteButton.on('click', function () {
                $('#allegati' + numeroNuovoInput).parent().remove();
                $(this).parent().remove();
            });

            // Inserisci il pulsante di eliminazione dopo il nome del file
            fileListItem.prepend(deleteButton);

            // inserisco un hidden con il nome del file per verificare che non sia stato tolto quando faccio l'invio
            var hidden = $('<input>', {
                type: 'hidden',
                name: 'allegati_hidden[]',
                value: fileList[i].name
            });
            fileListItem.append(hidden);

            // Inserisci il nome del file nella lista di output
            containerAllegati.append(fileListItem);
        }

        aggiungiInputAllegati(numeroNuovoInput + 1);
    });
}

function inizializzaUploadDocumenti(tastoUpload = false) {
    //var allegati = $('#allegati');
    var containerUploadDocumenti = $('#container_upload_documenti');

    containerUploadDocumenti.css({ 'min-height': '50px' });

    if (tastoUpload){
        var pulsanteUpload = ' <button type="button" id="conferma_upload_documenti" class="btn-upload-documenti btn green round margin-small hide" onclick="confermaUploadDocumenti();">' +
                '<i class="fa fa-fw fa-upload"></i>&nbsp;Carica' +
            ' </button>';

        containerUploadDocumenti.parent().append('<div>' + pulsanteUpload + '</div>');
    }

    aggiungiInputUploadDocumenti(1, tastoUpload);
}

function aggiungiInputUploadDocumenti(numeroNuovoInput, tastoUpload = false){
    var numeroVecchioInput = (numeroNuovoInput == 1) ? '' : numeroNuovoInput - 1;
    var containerUploadDocumenti = $('#container_upload_documenti');

    // nascondo il pulsante e ne inserisco uno nuovo
    $('#upload_documenti' + numeroVecchioInput).parent().hide();

    var nuovoPulsante = '<label for="upload_documenti' + numeroNuovoInput +'" class="btn-upload-documenti btn mastercom-light-blue round left margin-small">' +
        '<i class="fa fa-fw fa-file"></i>&nbsp;Carica Documenti' +
        ' <input id="upload_documenti' + numeroNuovoInput + '" type="file" name="upload_documenti' + numeroNuovoInput +'[]" multiple >' +
        '</label>';

    // uso sempre il primo input come riferimento del container del bottone
    containerUploadDocumenti.parent().prepend(nuovoPulsante);

    $('#upload_documenti' + numeroNuovoInput).on('change', function () {
        //containerUploadDocumenti.html('');

        // Aggiungi i nomi dei file selezionati all'elenco di output
        var fileList = $('#upload_documenti' + numeroNuovoInput)[0].files;
        for (var i = 0; i < fileList.length; i++) {
            var fileListItem = $('<div>', {
                text: fileList[i].name,
                class: "show-inline-block border-bottom border-light-gray margin-small padding-small noselect"
            });

            // Aggiungi un pulsante di eliminazione per il nome del file
            var deleteButton = $('<div>', {
                text: "×",
                class: 'show-inline-block padding-xsmall hover-text-red margin-right-small'
            });

            deleteButton.on('click', function () {
                $(this).parent().remove();

                // elimino il tasto per caricare i file se non c'e' piu' nessun file
                if (tastoUpload) {
                    if ($("input[name^='upload_documenti_hidden']").length > 0) {
                        $('#conferma_upload_documenti').removeClass('hide');
                    } else {
                        $('#conferma_upload_documenti').addClass('hide');
                    }
                }
            });

            // Inserisci il pulsante di eliminazione dopo il nome del file
            fileListItem.prepend(deleteButton);

            // inserisco un hidden con il nome del file per verificare che non sia stato tolto quando faccio l'invio
            var hidden = $('<input>', {
                type: 'hidden',
                name: 'upload_documenti_hidden[]',
                value: fileList[i].name
            });
            fileListItem.append(hidden);

            // Inserisci il nome del file nella lista di output
            containerUploadDocumenti.append(fileListItem);
        }

        aggiungiInputUploadDocumenti(numeroNuovoInput + 1, tastoUpload);

        if (tastoUpload){
            if ($("input[name^='upload_documenti_hidden']").length > 0){
                $('#conferma_upload_documenti').removeClass('hide');
            } else {
                $('#conferma_upload_documenti').addClass('hide');
            }
        }
    });
}

function confermaUploadDocumenti(){
    $("#operazione").val('carica_documenti');
    caricaSezione();
}

function apriTread(idTread, tipoMessaggio){
    $("#id_tread").val(idTread);
    $("#tipo_messaggio").val(tipoMessaggio);
    $("#chat").val('SI');
    caricaSezione('', {}, true, true);
}

function chiudiTread(){
    $("#id_tread").val('');
    $("#id_messaggio").val('');
    $("#tipo_messaggio").val('');
    $("#chat").val('NO');
    caricaSezione('', {}, true, true);
}

function cambiaSezione(nomeSezione){
    $("#id_gruppo").val('');
    $("#id_tread").val('');
    $("#id_messaggio").val('');
    $("#db_messaggio").val('');
    $("#tipo_messaggio").val('');
    $("#pagina").val('1');
    $("#start_messenger").val('0');
    $("#chat").val('NO');
    $("#filtro_cerca").val('');
    caricaSezione(nomeSezione, {}, true, true);
}

function getMessaggioCall(idMessaggio, tipoMessaggio = null) {
    $('#jqxGeneralLoader').jqxLoader('open');
    return new Promise((resolve, reject) => {
        var data = (tipoMessaggio == 'vecchio_messenger') ? { 'tipo_messaggio': 'vecchio_messenger' } : {};
        $.ajax({
            type: "GET",
            data: data,
            url: nextapiPath + "messaggistica/" + idMessaggio,
            headers: { 'Authorization': $('#current_key').val() },
            success: function (data) {
                $('#jqxGeneralLoader').jqxLoader('close');
                resolve(data);
            },
            error: function (data) {
                $('#jqxGeneralLoader').jqxLoader('close');
                creaToast("Errore", 'error');
                reject(data);
            },
            complete: function (data) {
                if (data.responseJSON) {

                } else {
                    console.log($.parseJSON(data.responseJSON));
                    creaToast("Errore", 'error');
                }
                $('#jqxGeneralLoader').jqxLoader('close');
                resolve(data);
            }
        });
    });
}

function getBadgeNotifiche(){
    getBadgeNotificheCall().then((data) => {
        if (data.ricevuti > 0){
            $("#badge-ricevuti").html(data.ricevuti);
            $("#badge-ricevuti").removeClass('hide');
            $("#badge-da-leggere").html(data.ricevuti);
            $("#badge-da-leggere").removeClass('hide');
        } else {
            $("#badge-ricevuti").html('');
            $("#badge-ricevuti").addClass('hide');
            $("#badge-da-leggere").html('');
            $("#badge-da-leggere").addClass('hide');
        }

        if (data.conferma_lettura > 0){
            $("#badge-conferma-lettura").html(data.conferma_lettura);
            $("#badge-conferma-lettura").removeClass('hide');
        } else {
            $("#badge-conferma-lettura").html('');
            $("#badge-conferma-lettura").addClass('hide');
        }

        if (data.conferma_sottoscrizione > 0){
            $("#badge-conferma-sottoscrizione").html(data.conferma_sottoscrizione);
            $("#badge-conferma-sottoscrizione").removeClass('hide');
        } else {
            $("#badge-conferma-sottoscrizione").html('');
            $("#badge-conferma-sottoscrizione").addClass('hide');
        }

        if (data.da_leggere_in_classe > 0){
            $("#badge-da-leggere-in-classe").html(data.da_leggere_in_classe);
            $("#badge-da-leggere-in-classe").removeClass('hide');
        } else {
            $("#badge-da-leggere-in-classe").html('');
            $("#badge-da-leggere-in-classe").addClass('hide');
        }

        if (data.circolare > 0){
            $("#badge-circolare").html(data.circolare);
            $("#badge-circolare").removeClass('hide');
        } else {
            $("#badge-circolare").html('');
            $("#badge-circolare").addClass('hide');
        }

        if (data.bozze > 0){
            $("#info-bozze").html('('+data.bozze+')');
            // $("#badge-bozze").html(data.bozze);
            // $("#badge-bozze").removeClass('hide');
        } else {
            $("#info-bozze").html('');
            // $("#badge-bozze").html('');
            // $("#badge-bozze").addClass('hide');
        }

        if (data.programmati > 0) {
            $("#info-programmati").html('(' + data.programmati + ')');
            // $("#badge-programmati").html(data.programmati);
            // $("#badge-programmati").removeClass('hide');
        } else {
            $("#info-programmati").html('');
            // $("#badge-programmati").html('');
            // $("#badge-programmati").addClass('hide');
        }

        if (data.bacheca > 0){
            $("#info-bacheca").html('(' + data.bacheca + ')');
        } else {
            $("#info-bacheca").html('');
        }

        if (data.bacheca_da_leggere > 0){
            $("#badge-bacheca").html(data.bacheca_da_leggere);
            $("#badge-bacheca").removeClass('hide');
        } else {
            $("#badge-bacheca").html('');
            $("#badge-bacheca").addClass('hide');
        }
    });
}

function getBadgeNotificheCall(){
    return new Promise((resolve, reject) => {
        $.ajax({
            type: "GET",
            data: { "id_utente_c": $("#c_usr").val() },
            url: nextapiPath + "messaggistica/estrai_num_messaggi_da_leggere",
            headers: { 'Authorization': $('#current_key').val() },
            success: function (data) {
                resolve(data);
            },
            error: function (data) {
                reject(data);
            },
            complete: function (data) {
                if (data.responseJSON) {

                } else {
                    console.log($.parseJSON(data.responseJSON));
                    creaToast("Errore", 'error');
                }
                resolve(data);
            }
        });
    });
}

function getLinkAllegatoCall(idAllegato) {
    return new Promise((resolve, reject) => {
        $.ajax({
            type: "POST",
            data: {
                "authorization": $('#current_key').val(),
                "direct": true,
                "only_link": true,
            },
            url: nextapiPath + "download/" + idAllegato,
            headers: { 'Authorization': $('#current_key').val() },
            success: function (data) {
                resolve(data);
            },
            error: function (data) {
                reject(data);
            },
            complete: function (data) {
                // if (data.responseJSON) {

                // } else {
                //     console.log($.parseJSON(data.responseJSON));
                //     creaToast("Errore", 'error');
                // }
                resolve(data.responseText);
            }
        });
    });
}

function downloadFile(id, applicazione) {
    var form = document.getElementById('download_form');
    form.action = nextapiPath + 'download/' + id + '?direct=true';
    form.authorization.value = $('#current_key').val();
    form.direct.value = true;
    form.applicazione.value = applicazione || 'mastercom';
    form.submit();
}

function downloadFileGruppoOldMessenger(id, fileName, idGruppo) {
    downloadFileGruppoOldMessengerCall(id, idGruppo).then((fileBase64) => {
        const linkSource = `data:application/octet-stream;base64,${fileBase64}`;
        const downloadLink = document.createElement("a");
        downloadLink.href = linkSource;
        downloadLink.download = fileName;
        downloadLink.click();
    });
}

function downloadFileGruppoOldMessengerCall(idFile, idGruppo) {
    return new Promise((resolve, reject) => {
        $.ajax({
            type: "GET",
            data: { "id_file": idFile, "id_gruppo": idGruppo },
            url: nextapiPath + "messaggistica/estrai_file_gruppo",
            headers: { 'Authorization': $('#current_key').val() },
            success: function (data) {
                resolve(data);
            },
            error: function (data) {
                reject(data);
            },
            complete: function (data) {
                // if (data.responseJSON) {

                // } else {
                //     console.log($.parseJSON(data.responseJSON));
                //     creaToast("Errore", 'error');
                // }
                resolve(data.responseText);
            }
        });
    });
}

function eliminaFileGruppoV2(idFile) {
    if (confirm("Eliminare il file dal gruppo? Nessun utente potrà più scaricarlo.")){
        $('#jqxGeneralMasterModalLoader').jqxLoader('open');
        $.ajax({
            type: "PATCH",
            data: JSON.stringify({ "id_files": [ idFile ] }),
            contentType: "application/json",
            url: nextapiPath + "files/elimina_file",
            headers: { 'Authorization': $('#current_key').val() },
            success: function (data) {
            },
            error: function (data) {
                creaToast("Errore durante l'eliminazione", 'error');
                $('#jqxGeneralMasterModalLoader').jqxLoader('close');
            },
            complete: function (data) {
                if (data.responseJSON && data.responseJSON[0] && data.responseJSON[0].result === 'OK') {
                    creaToast("File eliminato", 'success');
                    $("[data-id-file='"+idFile+"']").slideUp();
                } else {
                    creaToast("Errore nell'eliminazione del file", 'error');
                }
                $('#jqxGeneralMasterModalLoader').jqxLoader('close');
            }
        });
    }
}

function eliminaFileGruppoOldMessenger(idFile, idGruppo) {
    if (confirm("Eliminare il file dal gruppo? Nessun utente potrà più scaricarlo.")){
        $('#jqxGeneralMasterModalLoader').jqxLoader('open');
        eliminaFileGruppoOldMessengerCall(idFile, idGruppo).then((data) => {

            if (data.success){
                creaToast("File eliminato", 'success');
                $("[data-id-file='"+idFile+"']").slideUp();
            } else {
                creaToast("Errore", 'error');
            }
            $('#jqxGeneralMasterModalLoader').jqxLoader('close');
        });
    }
}

function eliminaFileGruppoOldMessengerCall(idFile, idGruppo) {
    return new Promise((resolve, reject) => {
        $.ajax({
            type: "DELETE",
            data: { "id_file": idFile, "id_gruppo": idGruppo },
            url: nextapiPath + "messaggistica/elimina_file_gruppo",
            headers: { 'Authorization': $('#current_key').val() },
            success: function (data) {
                resolve(data);
            },
            error: function (data) {
                reject(data);
            },
            complete: function (data) {
                if (data.responseJSON) {

                } else {
                    console.log($.parseJSON(data.responseJSON));
                    creaToast("Errore", 'error');
                }
                resolve(data.responseJSON);
            }
        });
    });
}

function downloadFileOldMessenger(id, fileName) {
    downloadFileOldMessengerCall(id).then((fileBase64) => {
        const linkSource = `data:application/octet-stream;base64,${fileBase64}`;
        const downloadLink = document.createElement("a");
        downloadLink.href = linkSource;
        downloadLink.download = fileName;
        downloadLink.click();
    });
}

function downloadFileOldMessengerCall(id) {
    return new Promise((resolve, reject) => {
        $.ajax({
            type: "GET",
            data: { "id_allegato": id },
            url: nextapiPath + "messaggistica/estrai_allegato_messenger_vecchio",
            headers: { 'Authorization': $('#current_key').val() },
            success: function (data) {
                resolve(data);
            },
            error: function (data) {
                reject(data);
            },
            complete: function (data) {
                // if (data.responseJSON) {

                // } else {
                //     console.log($.parseJSON(data.responseJSON));
                //     creaToast("Errore", 'error');
                // }
                resolve(data.responseText);
            }
        });
    });
}

// function logDownload(idFile){
//     logDownloadCall(idFile).then((data) => {
//         // console.log(data);
//     });
// }

// function logDownloadCall(idFile){
//     return new Promise((resolve, reject) => {
//         $.ajax({
//             type: "PUT",
//             data: { "id_file": idFile },
//             url: nextapiPath + "log/download",
//             headers: { 'Authorization': $('#current_key').val() },
//             success: function (data) {
//                 resolve(data);
//             },
//             error: function (data) {
//                 reject(data);
//             },
//             complete: function (data) {
//                 resolve(data);
//             }
//         });
//     });
// }

function stampaConfermeTreadCall(tread, tipo, idMessaggioOldMessenger) {
    return new Promise((resolve, reject) => {
        $.ajax({
            type: "GET",
            data: { "tread": tread, "tipo_messaggio": tipo, "id_messaggio_old_messenger": idMessaggioOldMessenger },
            url: nextapiPath + "messaggistica/estrai_file_conferme",
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

function formatBytes(bytes, decimals = 2) {
    if (!+bytes) return '0 Bytes'

    const k = 1024
    const dm = decimals < 0 ? 0 : decimals
    const sizes = ['Bytes', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB', 'ZB', 'YB']

    const i = Math.floor(Math.log(bytes) / Math.log(k))

    return `${parseFloat((bytes / Math.pow(k, i)).toFixed(dm))} ${sizes[i]}`
}

function setSmartElementLicense(){
    if (typeof window.Smart !== 'undefined') {
        window.Smart.License = smartElLicense;
    } else {
        window.Smart = {
            License: smartElLicense
        }
    }
}

function setSmartEditorItaliano(id){
    const editor = document.getElementById(id);
    if (editor){
        editor.messages = {
            'it': {
                'invalidValue': '{{elementType}}: valore {{property}} non valido. {{property}} deve essere di tipo {{typeOne}} o {{typeTwo}}.',
                'incorrectArgument': '{{elementType}}: argomento {{topicName}} non corretto nel metodo {{methodName}}.',
                'permissionsRequired': '{{elementType}}: sono necessarie autorizzazioni per la seguente azione {{actionName}}.',
                'ok': 'Ok',
                'cancel': 'Annulla',
                'alignLeft': 'Allineare a sinistra',
                'alignCenter': 'Allinea al centro',
                'alignRight': 'Allinea a destra',
                'alignJustify': 'Allinea Giustifica',
                'segoeUi': 'Segoe UI',
                'arial': 'Arial',
                'georgia': 'Georgia',
                'impact': 'Impact',
                'tahoma': 'Tahoma',
                'timesNewRoman': 'Times New Roman',
                'verdana': 'Verdana',
                'p': 'Paragrafo',
                'pre': 'Codice',
                'code': 'Codice',
                'blockquote': 'Quotazione',
                'h1': 'Intestazione 1',
                'h2': 'Intestazione 2',
                'h3': 'Intestazione 3',
                'h4': 'Intestazione 4',
                'h5': 'Intestazione 5',
                'h6': 'Intestazione 6',
                'bold': 'Grassetto',
                'italic': 'Corsivo',
                'underline': 'Sottolineare',
                'strikethrough': 'Barrato',
                'orderedlist': 'Lista ordinata',
                'unorderedlist': 'Lista non ordinata',
                'subscript': 'Pedice',
                'superscript': 'Apice',
                'alignment': 'Allineamenti',
                'fontname': 'Nome carattere',
                'fontsize': 'Dimensione del font',
                'formats': 'Formati',
                'backgroundcolor': 'Colore di sfondo',
                'fontcolor': 'Colore del carattere',
                'redo': 'Rifare',
                'undo': 'Disfare',
                'indent': 'Rientro',
                'outdent': 'Outdent',
                'createlink': 'Collegamento ipertestuale',
                'hyperlink': 'Collegamento ipertestuale',
                'editlink': 'Collegamento ipertestuale',
                'removelink': 'Rimuovi collegamento',
                'openlink': 'Link aperto',
                'image': 'Immagine',
                'table': 'Tavolo',
                'lowercase': 'Case inferiore',
                'uppercase': 'Maiuscolo',
                'print': 'Stampa',
                'cut': 'Taglio',
                'copy': 'Copia',
                'paste': 'Incolla',
                'clearformat': 'Cancella formato',
                'fullscreen': 'A schermo intero',
                'restore': 'Ripristina schermo',
                'sourcecode': 'Codice sorgente',
                'preview': 'Anteprima',
                'splitmode': 'Editor diviso',
                'address': 'Indirizzo Web',
                'text': 'Visualizza testo',
                'addressPlaceholder': 'http://example.com',
                'textPlaceholder': 'Inserire il testo',
                'targetPlaceholder': 'Seleziona Target',
                'titlePlaceholder': 'Immettere un titolo',
                'urlPlaceholder': 'http://example.com/image.png',
                'captionPlaceholder': 'Didascalia',
                'altPlaceholder': 'Testo alternativo',
                'widthPlaceholder': 'auto',
                'heightPlaceholder': 'auto',
                'target': 'Apri collegamento in',
                'linkBlankDescr': 'Nuova finestra',
                'linkSelfDescr': 'Stessa finestra',
                'linkParentDescr': 'Frame genitore',
                'linkTopDescr': 'Tutto il corpo della finestra',
                'linkCustomDescr': 'Nome frame personalizzato',
                'title': 'Titolo',
                'url': 'Puoi anche fornire l\'URL a un\'immagine',
                'width': 'Larghezza',
                'height': 'Altezza',
                'alt': 'Testo alternativo',
                'caption': 'Didascalia',
                'display': 'Schermo',
                'displayPlaceholder': 'Schermo',
                'displayBlock': 'Bloccare',
                'displayInline': 'In linea',
                'draggable': 'Abilita il trascinamento',
                'resizable': 'Abilita ridimensionamento',
                'browse': 'Navigare',
                'connectionError': '{{elementType}}: il caricamento del file richiede la connessione al server.',
                'wrongItemIndex': '{{elementType}}: non è presente alcun file con tale indice nell\'elenco dei file caricati.',
                'tooLongFileName': '{{elementType}}: il nome del file è troppo lungo.',
                'totalFiles': 'File totali: ',
                'cancelFile': 'Annulla file',
                'dashedborders': 'Bordi tratteggiati',
                'altrows': 'Righe alternative',
                'insertRowBefore': 'Inserisci riga prima',
                'insertRowAfter': 'Inserisci riga dopo',
                'deleteRow': 'Elimina riga',
                'insertColumnLeft': 'Inserisci colonna a sinistra',
                'insertColumnRight': 'Inserisci colonna a destra',
                'deleteColumn': 'Elimina colonna',
                'alignTop': 'Allinea in alto',
                'alignMiddle': 'Allinea al centro',
                'alignBottom': 'Allinea in basso',
                'delete': 'Elimina',
                'tablerows': 'Righe tabella',
                'tablecolumns': 'Colonne della tabella',
                'tablevalign': 'Allineamento verticale delle celle della tabella',
                'tablestyle': 'Stile tavolo',
                'tableheader': 'Intestazione tabella',
                'buttonLabel': 'Tabella personalizzata',
                'pasteLabel': 'Scegli l\'azione di formato Incolla:',
                'cols': 'Colonne',
                'rows': 'Righe',
                'alphabet': 'abcdefghijklmnopqrstuvwxyz',
                'header': 'Intestazione',
                'column': 'Colonna',
                'plainText': 'Testo normale',
                'keepFormat': 'Mantieni formato',
                'cleanFormat': 'Formato pulito',
                'roleDescription': 'Editor di testo',
                'iframeTitle': 'Il contenuto dell\'editor è racchiuso nel proprio DOM all\'interno di un iFrame',
                'toolbarButtonAriaLabel': 'Pulsante di attivazione',
                'primaryToolbarAriaLabel': 'Barra degli strumenti principale',
                'secondaryToolbarAriaLabel': 'Barra degli strumenti secondaria',
                'inputAriaLabel': 'Inserire il testo'
            }
        };
        editor.locale = 'it';
    }
}

$(document).ready(function () {
    // Get the Sidebar
    var sidebar = document.getElementById("sidebar");

    // Get the DIV with overlay effect
    var overlayBg = document.getElementById("overlayBg");

    $('#jqxGeneralMasterModalLoader').jqxLoader({ theme: 'material', isModal: true, text: "", width: 60, height: 60 });
    $('#jqxGeneralModalLoader').jqxLoader({ theme: 'material', isModal: true, text: "", width: 60, height: 60 });
    $('#jqxGeneralLoader').jqxLoader({ theme: 'material', text: "", width: 60, height: 60 });

    setTimeout(function () {
        $('#jqxGeneralMasterModalLoader').addClass('jqx-loader-999');
        $('#jqxGeneralMasterModalLoaderModal').addClass('jqx-loader-999');
    }, 1000);

    window.addEventListener('popstate', function (event) {
        setTimeout(function () {
            if (event.state) {
                console.log(event.state);
                caricaSezione(event.state.sezione, event.state.parametri, true, false, true);
            }
        }, 0);
    });

    caricaSezione('', {}, true, true);

    setSmartElementLicense();

    // Get the container element
    var linkContainer = document.getElementById("bar-block");

    // Get all buttons with class="btn" inside the container
    var links = linkContainer.getElementsByClassName("bar-item");

    // Loop through the buttons and add the active class to the current/clicked button
    for (var i = 0; i < links.length; i++) {
        links[i].addEventListener("click", function () {
            var current = document.getElementsByClassName("active");
            if (current.length > 0) {
                current[0].className = current[0].className.replace(" active", "");
            }
            this.className += " active";
        });
    }

    getBadgeNotifiche();

    setInterval(getBadgeNotifiche, 60000); // ogni minuto
});