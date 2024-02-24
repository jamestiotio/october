<?php return [
  'auth' => [],
  'field' => [
    'invalid_type' => 'Ungültiger Feldtyp :type.',
    'options_method_invalid_model' => 'Das Attribut ":field" löst sich nicht zu einen gültigen Model auf. Probiere die options Methode der Model-Klasse :model explicit zu definieren.',
    'options_method_not_exists' => 'Die Modell-Klasse :model muss eine Methode :method() mit Rückgabe der Werte von ":field" besitzen.',
    'options_static_method_invalid_value' => 'Die statische Methode \':method()\' in der Klasse :class hat kein valides Optionsarray zurückgegeben.',
    'colors_method_not_exists' => 'Die Modellklasse :model muss eine Methode :method() definieren, welche html color (HEX) codes für das \':field\' Formularfeld zurückgibt.',
  ],
  'widget' => [
    'not_registered' => 'Ein Widget namens \':name\' wurde nicht registriert',
    'not_bound' => 'Ein Widget mit dem Klassennamen \':name\' wurde nicht mit dem Controller verbunden',
  ],
  'page' => [
    'untitled' => 'Unbenannt',
    404 => [
      'label' => 'Seite nicht gefunden',
      'help' => 'Die von Ihnen angeforderte Seite konnte nicht gefunden werden.',
      'back_link' => 'Zurück zur vorigen Seite',
    ],
    'access_denied' => [
      'label' => 'Zugriff verweigert',
      'help' => 'Sie haben nicht die erforderlichen Berechtigungen, um diese Seite zu sehen.',
      'cms_link' => 'Zum CMS-Backend',
    ],
    'no_database' => [
      'label' => 'Datenbank fehlt',
      'help' => 'Eine Datenbank wird benötigt um Zugriff auf das Backend zu haben. Überprüfe die Datenbankkonfiguration und migriere die Datenbank bevor du es noch einmal probierst.',
      'cms_link' => 'Zurück zur Homepage',
    ],
  ],
  'partial' => [
    'not_found_name' => 'Das Partial \':name\' wurde nicht gefunden.',
    'invalid_name' => 'Ungültiger Partial: :name.',
  ],
  'ajax_handler' => [
    'invalid_name' => 'Ungültiger AJAX handler: :name.',
    'not_found' => 'AJAX handler \':name\' wurde nicht gefunden.',
  ],
  'account' => [
    'impersonate_confirm' => 'Sind Sie sicher, dass Sie sich als dieser Benutzer anmelden wollen? Sie können zu Ihrem ursprünglichen Zustand zurückkehren, indem Sie sich abmelden.',
    'impersonate_success' => 'Sie sind jetzt als dieser Benutzer angemeldet',
    'signed_in_as' => 'Angemeldet als :full_name',
    'sign_out' => 'Abmelden',
    'login_placeholder' => 'Benutzername',
    'password_placeholder' => 'Passwort',
    'enter_email' => 'Bitte E-Mail-Adresse eingeben',
    'email_placeholder' => 'E-Mail',
    'apply' => 'Anwenden',
    'cancel' => 'Abbrechen',
    'delete' => 'Löschen',
    'ok' => 'OK',
  ],
  'dashboard' => [
    'menu_label' => 'Dashboard',
    'widget_inspector_title' => 'Widget Konfiguration',
    'widget_inspector_description' => 'Dieses Widget konfigurieren',
    'widget_columns_label' => 'Breite :columns',
    'widget_columns_description' => 'Die Breite de Widgets, eine Zahl zwischen 1 und 10.',
    'widget_columns_error' => 'Bitte geben sie als Breite des Widgets eine Zahl zwischen 1 und 10 ein.',
    'columns' => '{1} Spalte|[2,Inf] Spalten',
    'widget_new_row_label' => 'Neue Reihe erzwingen',
    'widget_new_row_description' => 'Setzt das Widget in eine neue Reihe',
    'widget_title_label' => 'Titel des Widgets',
    'widget_title_error' => 'Ein Titel des Widgets wird benötigt.',
    'reset_layout_success' => 'Layout wurde zurückgesetzt',
    'make_default_success' => 'Das aktuelle Layout ist nun das Standardlayout',
    'collapse_all' => 'Alles zusammenklappen',
    'expand_all' => 'Alles ausklappen',
    'status' => [
      'widget_title_default' => 'System Status',
      'update_available' => '{0} Updates verfügbar!|{1} Update verfügbar!|[2,Inf] Updates verfügbar!',
      'updates_pending' => 'Software ',
      'updates_nil' => 'Software ist auf dem neuesten Stand',
      'updates_link' => 'Update',
      'warnings_pending' => 'Es sind Probleme aufgetreten',
      'warnings_nil' => 'Keine Probleme',
      'warnings_link' => 'Untersuchen',
      'core_build' => 'System Build',
      'event_log' => 'Event Log',
      'request_log' => 'Request Log',
      'app_birthday' => 'Online seit',
    ],
    'welcome' => [
      'widget_title_default' => 'Willkommen',
      'welcome_back_name' => 'Willkommen zurück zu :app, :name.',
      'welcome_to_name' => 'Willkommen zu :app, :name.',
      'first_sign_in' => 'Das ist das erste mal, dass Sie sich eingeloggt haben.',
      'last_sign_in' => 'Ihr letzter Login war',
      'view_access_logs' => 'Zugriffsprotokoll betrachten',
      'nice_message' => 'Wir wünschen einen schönen Tag!',
    ],
  ],
  'user' => [
    'name' => 'Administrator',
    'list_title' => 'Administratoren verwalten',
    'new' => 'Neuer Administrator',
    'first_name' => 'Vorname',
    'last_name' => 'Nachname',
    'full_name' => 'Kompletter Name',
    'email' => 'E-Mail',
    'role_field' => 'Rolle',
    'role_comment' => 'Rollen definieren Benutzerberechtigungen, die auf Benutzerebene auf der Registerkarte Berechtigungen überschrieben werden können.',
    'groups' => 'Gruppen',
    'groups_comment' => 'Geben Sie hier die Gruppenzugehörigkeit an',
    'avatar' => 'Avatar',
    'password' => 'Passwort',
    'password_confirmation' => 'Passwort bestätigen',
    'permissions' => 'Rechte',
    'account' => 'Account',
    'superuser' => 'Super-User',
    'superuser_comment' => 'Bestätigen Sie hier, um dem Nutzer Vollzugriff zu geben',
    'send_invite' => 'Einladung per E-Mail versenden',
    'send_invite_comment' => 'Hier bestätigen, dass eine Einladung per E-Mail erfolgt',
    'delete_confirm' => 'Möchten Sie diesen Administrator-Account wirklich löschen?',
    'return' => 'Zurück zur Administratoren Übersicht',
    'allow' => 'Zulassen',
    'inherit' => 'Vererben',
    'deny' => 'Verbieten',
    'activated' => 'Aktiviert',
    'last_login' => 'Letzer login',
    'created_at' => 'Erstellt am',
    'updated_at' => 'Aktualisiert am',
    'group' => [
      'name' => 'Gruppe',
      'name_comment' => 'Der Name, der angezeigt wird wenn  name is displayed in the group list on the Create/Edit Administrator form.',
      'name_field' => 'Name',
      'description_field' => 'Beschreibung',
      'is_new_user_default_field_label' => 'Standard Gruppe',
      'is_new_user_default_field_comment' => 'Fügt neue Administratoren zu dieser Gruppe standardmäßig hinzu.',
      'code_field' => 'Code',
      'code_comment' => 'Eindeutigen Code hinzufügen, wenn dies über die API bearbeitet werden soll.',
      'list_title' => 'Gruppen verwalten',
      'new' => 'Neue Administratoren Gruppe',
      'delete_confirm' => 'Möchten Sie diesen Administratoren-Gruppe wirklich löschen?',
      'return' => 'Zurück zur Gruppen-Übersicht',
      'users_count' => 'Benutzer',
    ],
    'role' => [
      'name' => 'Rolle',
      'name_field' => 'Name',
      'name_comment' => 'Der Name wird in der Rollenliste auf dem Administratorformular angezeigt.',
      'description_field' => 'Beschreibung',
      'code_field' => 'Code',
      'code_comment' => 'Geben Sie einen eindeutigen Code an, wenn Sie mit der API auf das Rollenobjekt zugreifen möchten.',
      'list_title' => 'Rollen verwalten',
      'new' => 'Neue Rolle',
      'delete_confirm' => 'Diese Administratorrolle löschen?',
      'return' => 'Zurück zur Rollenliste',
      'users_count' => 'Benutzer',
    ],
    'preferences' => [
      'not_authenticated' => 'Zum Speichern oder Anzeigen dieser Einstellungen liegt kein Nutzerkonto vor',
    ],
    'trashed_hint_title' => 'Dieses Konto wurde gelöscht.',
    'trashed_hint_desc' => 'Dieses Konto wurde gelöscht und kann nicht mehr angemeldet werden. Um es wiederherzustellen, klicken Sie auf das Symbol "Benutzer wiederherstellen" unten rechts',
  ],
  'list' => [
    'default_title' => 'Auflisten',
    'search_prompt' => 'Suchen...',
    'no_records' => 'Keine Ergebnisse für diese Ansicht gefunden',
    'missing_model' => 'In :class benutztes Lisstenverhalten hat kein Model definiert.',
    'missing_column' => 'Keine Spaltendefinition für :columns.',
    'missing_columns' => 'In :class benutzte Liste behinhaltet keine Spalten',
    'missing_definition' => 'Der Liste fehlt eine Spalte für \':field\'.',
    'missing_parent_definition' => 'Listenverhalten beinhaltet keine Definition von \':definition\'.',
    'behavior_not_ready' => 'Listenverhalten kann nicht initialisiert werden, überprüfen Sie den Aufruf von makeLists() in Ihrem Controller.',
    'invalid_column_datetime' => 'Spaltenwert \':column\' ist kein gültiges DateTime Objekt, haben Sie eine  $dates Referenz in dem Model vergessen?',
    'pagination' => 'Angezeigte Aufzeichnungen: :from-:to von :total',
    'first_page' => 'Erste Seite',
    'last_page' => 'Letzte Seite',
    'prev_page' => 'Vorherige Seite',
    'next_page' => 'Nächste Seite',
    'refresh' => 'Aktualisieren',
    'updating' => 'Aktualisiere...',
    'loading' => 'Laden...',
    'check' => 'Auswählen',
    'create_button' => ':name erstellen',
    'delete_selected' => 'Markierte löschen',
    'delete_selected_empty' => 'Keine Einträge zum Löschen markiert.',
    'delete_selected_confirm' => 'Markierte Einträge löschen?',
    'delete_selected_success' => 'Markierte Einträge erfolgreich gelöscht.',
    'column_switch_true' => 'Ja',
    'column_switch_false' => 'Nein',
  ],
  'fileupload' => [
    'default_prompt' => 'Auf %s klicken oder eine Datei hierhin ziehen, um sie hochzuladen',
  ],
  'form' => [
    'create_title' => ':name erstellen',
    'update_title' => ':name bearbeiten',
    'preview_title' => 'Vorschau für :name',
    'reset_success' => 'Zurücksetzung abgeschlossen',
    'missing_id' => 'Formulardatensatz-ID (Form record ID) fehlt.',
    'missing_model' => 'In :class genutztes Formularverhalten (behaviour) hat kein definiertes Model',
    'missing_definition' => 'Formverhalten fehlt ein Feld für \':field\'.',
    'action_confirm' => 'Sind Sie sich sicher?',
    'create' => 'Erstellen',
    'create_and_close' => 'Erstellen und schließen',
    'creating' => 'Erstellen...',
    'creating_name' => 'Erstelle :name...',
    'save' => 'Speichern',
    'save_and_close' => 'Speichern und schließen',
    'saving' => 'Wird gespeichert...',
    'saving_name' => ':name wird gespeichert...',
    'delete' => 'Löschen',
    'deleting' => 'Löschen...',
    'confirm_delete' => 'Wollen Sie diesen Eintrag wirklich löschen?',
    'confirm_delete_multiple' => 'Wollen Sie diese Einträge wirklich löschen?',
    'deleting_name' => 'Deleting :name...',
    'reset_default' => 'Zurücksetzen',
    'resetting' => 'Setze zurück...',
    'resetting_name' => 'Setze :name zurück...',
    'undefined_tab' => 'Verschiedenes',
    'field_off' => 'Aus',
    'field_on' => 'An',
    'add' => 'Hinzufügen',
    'apply' => 'Anwenden',
    'cancel' => 'Abbrechen',
    'close' => 'Schließen',
    'confirm' => 'Bestätigen',
    'reload' => 'Erneut laden',
    'complete' => 'Abgeschlossen',
    'ok' => 'OK',
    'or' => 'oder',
    'confirm_tab_close' => 'Wollen Sie den Tab wirklich schließen? Ungespeicherte Änderungen gehen verloren.',
    'behavior_not_ready' => 'Formularverhalten kann nicht initialisiert werden, überprüfen Sie den Aufruf von makeLists() in Ihrem Controller.',
    'preview_no_files_message' => 'Es wurden keine Dateien hochgeladen',
    'preview_no_media_message' => 'Es wurde keine Media-Datei ausgewählt.',
    'preview_no_record_message' => 'Es ist kein Eintrag ausgewählt.',
    'select' => 'Auswählen',
    'select_all' => 'Alles auswählen',
    'select_none' => 'Nichts auswählen',
    'insert_row' => 'Reihe einfügen',
    'insert_row_below' => 'Neue Reihe darunter einfügen',
    'delete_row' => 'Reihe löschen',
    'concurrency_file_changed_title' => 'Datei wurde geändert',
    'concurrency_file_changed_description' => 'Die Datei, welche Sie bearbeiten, wurde auf von einem anderen Benutzer geändert. Sie können die Datei entweder erneut laden, wodurch Ihre Änderungen verloren gehen oder Sie überschreiben die Datei auf dem Server',
    'return_to_list' => 'Zurück zur Liste',
  ],
  'recordfinder' => [
    'find_record' => 'Finde Eintrag',
    'cancel' => 'Abbrechen',
  ],
  'pagelist' => [],
  'relation' => [
    'missing_config' => 'Verhalten (behaviour) der Verbindung hat keine Konfiguration für \':config\'.',
    'missing_definition' => 'Verhalten (behaviour) der Verbindung umfasst keine Definition für \':field\'.',
    'missing_model' => 'Verhalten (behaviour) der Verbindung, die in :class benutzt wird, hat kein definiertes Model',
    'invalid_action_single' => 'Dieser Vorgang kann nicht auf eine Einwege-Verbindung (singular) angewendet werden.',
    'invalid_action_multi' => 'Dieser Vorgang kann nicht auf eine Mehrwege-Verbindung (multiple) angewendet werden.',
    'help' => 'Zum Hinzufügen auf ein Item klicken',
    'add' => 'Hinzufügen',
    'add_selected' => 'Auswahl hinzufügen',
    'link_selected' => 'Auswahl verlinken',
    'cancel' => 'Abbrechen',
    'close' => 'Schließen',
    'create' => 'Erstellen',
    'update' => 'Update',
    'preview' => 'Vorschau',
    'remove_name' => ':name entfernen',
    'delete_name' => ':name löschen',
    'link' => 'Link',
    'unlink_name' => 'Link von :name entfernen',
  ],
  'reorder' => [
    'default_title' => 'Einträge sortieren',
    'no_records' => 'Es gibt keine Einträge zum sortieren.',
  ],
  'model' => [
    'name' => 'Model',
    'not_found' => 'Model \':class\' mit ID :id konnte nicht gefunden werden',
    'missing_id' => 'Für diesen Model-Datensatz ist keine ID angegeben',
    'missing_relation' => 'Model \':class\' hat keine definierte Verbindung \':relation\'.',
    'missing_method' => 'Model \':class\' besitzt keine Methode \':method\'.',
    'invalid_class' => 'In :class benutztes Model :model ist ungültig, da es von der Klasse \\Model abgeleitet sein muss (inherit).',
    'mass_assignment_failed' => 'Mass assignment failed for Model attribute \':attribute\'.',
  ],
  'warnings' => [
    'tips' => 'System Konfigurations Tipps',
    'tips_description' => 'Es gibt Probleme, welche Sie beachten müssen, um das System korrekt zu konfigurieren.',
    'permissions' => 'Verzeichnis :name oder ein Unterverzeichnis kann nicht von PHP beschrieben werden. Bitte setzen Sie die korrekten Rechte für den Webserver in diesem Verzeichnis.',
    'extension' => 'Die PHP Erweiterung :name ist nicht installiert. Bitte installieren Sie diese Library und aktivieren Sie die Erweiterung.',
    'plugin_missing' => 'Das Plugin :name hat eine Abhängigkeit die nicht installiert ist. Bitte installieren Sie alle benötigten Plugins.',
    'debug' => 'Der Debug-Modus ist aktiviert. Dies wird für Produktionsinstallationen nicht empfohlen.',
    'decompileBackendAssets' => 'Assets im Backend sind derzeit dekompiliert. Dies wird für Produktionsinstallationen nicht empfohlen.',
  ],
  'editor' => [
    'toolbar_buttons_presets' => [
      'default' => 'Standard',
      'minimal' => 'Minimal',
      'full' => 'Vollständig',
    ],
    'paragraph_formats_comment' => 'Die Optionen, welche in der Dropdown-Liste für Absatzformatierungen angezeigt werden.',
  ],
  'tooltips' => [],
  'mysettings' => [
    'menu_label' => 'Meine Einstellungen',
    'menu_description' => 'Einstellungen beziehen sich auf Ihren Administratoren Account',
  ],
  'myaccount' => [],
  'branding' => [
    'accent_color' => 'Akzentfarbe',
    'menu_mode_inline_no_icons' => 'Inline (ohne Icons)',
  ],
  'backend_preferences' => [],
  'access_log' => [],
  'filter' => [
    'all' => 'Alle',
    'options_method_not_exists' => 'Die Modelklasse :model muss eine methode :method() definiert haben und returning options for the \':filter\' filter.',
    'date_all' => 'Ganzen Zeitraum',
  ],
  'import_export' => [
    'upload_csv_file' => '1. CSV-Datei hochladen',
    'import_file' => 'Datei importieren',
    'row' => 'Zeile :row',
    'first_row_contains_titles' => 'Erste Zeile enthält Spaltentitel',
    'first_row_contains_titles_desc' => 'Aktiviert lassen, falls erste Zeile Spaltentitel enthält.',
    'match_columns' => '2. Spalten der Datei den Datenbankfeldern zuordnen',
    'file_columns' => 'Spalten der Datei',
    'database_fields' => 'Datenbankfelder',
    'set_import_options' => '3. Importoptionen festlegen',
    'export_output_format' => '1. Exportformat wählen',
    'file_format' => 'Dateiformat',
    'standard_format' => 'Standardformat',
    'custom_format' => 'Benutzerdefiniertes Format',
    'delimiter_char' => 'Trennzeichen',
    'enclosure_char' => 'Textqualifizierer',
    'escape_char' => 'Escape-Zeichen',
    'select_columns' => '2. Spalten für den Export auswählen',
    'columns' => 'Spalten',
    'set_export_options' => '3. Exportoptionen festlegen',
    'show_ignored_columns' => 'Ignorierte Spalten anzeigen',
    'auto_match_columns' => 'Spalten automatisch zuordnen',
    'created' => 'Erstellt',
    'updated' => 'Geändert',
    'skipped' => 'Übersprungen',
    'warnings' => 'Warnungen',
    'errors' => 'Fehler',
    'skipped_rows' => 'Übersprungene Zeilen',
    'import_progress' => 'Import-Fortschritt',
    'processing' => 'Verarbeite',
    'import_error' => 'Import-Fehler',
    'upload_valid_csv' => 'Bitte eine gültige CSV-Datei hochladen.',
    'drop_column_here' => 'Spalte hier ablegen...',
    'ignore_this_column' => 'Diese Spalte ignorieren',
    'processing_successful_line1' => 'Datei-Exportvorgang erfolgreich abgeschlossen!',
    'processing_successful_line2' => 'Ihr Browser sollte Sie nun automatisch zum Download weiterleiten.',
    'export_progress' => 'Export-Fortschritt',
    'export_error' => 'Export-Fehler',
    'file_not_found_error' => 'Datei nicht gefunden',
    'empty_error' => 'Es wurden keine Daten geliefert die exportiert werden können.',
    'empty_import_columns_error' => 'Bitte geben Sie einige Reihen zum importieren an.',
    'match_some_column_error' => 'Bitte Verbinden Sie erst ein paar Reihen.',
    'required_match_column_error' => 'Bitte stellen Sie eine Verbindung zwischen den benötigten Feldern :label her.',
    'empty_export_columns_error' => 'Bitte geben Sie einige Reihen zum exportieren an.',
    'behavior_missing_uselist_error' => 'Sie müssen das Controller-Verhalten "ListController" implementieren und "useList" Option aktivieren.',
    'missing_model_class_error' => 'Bitte geben Sie die spezifische "modelClass" Eigenschaft für :type an.',
    'missing_column_id_error' => 'Fehleneder Reihen Identifier',
    'unknown_column_error' => 'Unbekannte Reihe',
    'encoding_not_supported_error' => 'Qulldatei Encoding wurde nicht bekannt oder ist nicht bekannt. Bitte wählen Sie ein Dateiformat mit ein entsprechendes Encoding um es zu importieren.',
    'encoding_format' => 'Datei encoding',
    'encodings' => [
      'utf_8' => 'UTF-8',
      'us_ascii' => 'US-ASCII',
      'iso_8859_1' => 'ISO-8859-1 (Latin-1, Western European)',
      'iso_8859_2' => 'ISO-8859-2 (Latin-2, Central European)',
      'iso_8859_3' => 'ISO-8859-3 (Latin-3, South European)',
      'iso_8859_4' => 'ISO-8859-4 (Latin-4, North European)',
      'iso_8859_5' => 'ISO-8859-5 (Latin, Cyrillic)',
      'iso_8859_6' => 'ISO-8859-6 (Latin, Arabic)',
      'iso_8859_7' => 'ISO-8859-7 (Latin, Greek)',
      'iso_8859_8' => 'ISO-8859-8 (Latin, Hebrew)',
      'iso_8859_0' => 'ISO-8859-9 (Latin-5, Turkish)',
      'iso_8859_10' => 'ISO-8859-10 (Latin-6, Nordic)',
      'iso_8859_11' => 'ISO-8859-11 (Latin, Thai)',
      'iso_8859_13' => 'ISO-8859-13 (Latin-7, Baltic Rim)',
      'iso_8859_14' => 'ISO-8859-14 (Latin-8, Celtic)',
      'iso_8859_15' => 'ISO-8859-15 (Latin-9, Western European revision with euro sign)',
      'windows_1251' => 'Windows-1251 (CP1251)',
      'windows_1252' => 'Windows-1252 (CP1252)',
    ],
  ],
  'permissions' => [
    'manage_media' => 'Medien verwalten',
    'allow_unsafe_markdown' => 'Unsicheres Markdown verwenden (kann Javascript enthalten)',
  ],
  'mediafinder' => [
    'label' => 'Media Finder',
    'default_prompt' => 'Klicke auf %s um eine Mediendatei auszuwählen',
  ],
  'media' => [
    'menu_label' => 'Medien',
    'upload' => 'Hochladen',
    'move' => 'Verschieben',
    'delete' => 'Löschen',
    'add_folder' => 'Ordner erstellen',
    'search' => 'Suchen',
    'display' => 'Anzeigen',
    'filter_everything' => 'Alles',
    'filter_images' => 'Bilder',
    'filter_video' => 'Video',
    'filter_audio' => 'Audio',
    'filter_documents' => 'Dokumente',
    'library' => 'Sammlung',
    'size' => 'Größe',
    'title' => 'Titel',
    'last_modified' => 'Zuletzt bearbeitet',
    'public_url' => 'Öffentliche URL',
    'click_here' => 'Hier drücken',
    'thumbnail_error' => 'Fehler beim Erstellen des Thumbnails.',
    'return_to_parent' => 'Zu oberem Ordner zurückkehren',
    'return_to_parent_label' => 'Stufe hoch ..',
    'nothing_selected' => 'Nichts ausgewählt.',
    'multiple_selected' => 'Mehrere Dateien ausgewählt.',
    'uploading_file_num' => 'Lade :number Datei(en)...',
    'uploading_complete' => 'Upload vollständig',
    'uploading_error' => 'Upload fehlgeschlagen',
    'type_blocked' => 'Der verwendete Dateityp ist aus Sicherheitsgründen gesperrt.',
    'order_by' => 'Sortieren nach',
    'direction' => 'Direction',
    'direction_asc' => 'Aufsteigend',
    'direction_desc' => 'Absteigend',
    'folder' => 'Ordner',
    'no_files_found' => 'Keine entsprechenden Dateien gefunden.',
    'delete_empty' => 'Bitte Wählen Sie Dateien zum Löschen aus.',
    'delete_confirm' => 'Wollen Sie wirklich die gewählte(n) Datei(en) löschen?',
    'error_renaming_file' => 'Fehler beim Umbenennen.',
    'new_folder_title' => 'Neuer Ordner',
    'folder_name' => 'Ordnername',
    'error_creating_folder' => 'Fehler beim Erstellen des Ordners',
    'folder_or_file_exist' => 'Ein Ordner oder eine Datei mit dem gewählten Namen existiert bereits.',
    'move_empty' => 'Bitte wählen Sie Dateien zum Verschieben aus',
    'move_popup_title' => 'Verschiebe Dateien oder Ordner',
    'move_destination' => 'Zielordner',
    'please_select_move_dest' => 'Bitte wählen Sie einen Zielordner.',
    'move_dest_src_match' => 'Bitte wählen Sie einen anderen Zielordner.',
    'empty_library' => 'Diese Medienbibliothek ist leer. Laden Sie Dateien hoch oder erstellen Sie Ordner!',
    'insert' => 'Einfügen',
    'crop_and_insert' => 'Zuschneiden und Einfügen',
    'select_single_image' => 'Bitte wählen Sie ein einzelnes Bild.',
    'selection_not_image' => 'Die gewählte Datei ist kein Bild.',
    'restore' => 'Alle Änderungen rückgängig machen',
    'resize' => 'Größe anpassen...',
    'selection_mode_normal' => 'Normal',
    'selection_mode_fixed_ratio' => 'Festes Verhältnis',
    'selection_mode_fixed_size' => 'Feste Größe',
    'height' => 'Höhe',
    'width' => 'Breite',
    'selection_mode' => 'Auswahlmodus',
    'resize_image' => 'Bildgröße anpassen',
    'image_size' => 'Dimensionen:',
    'selected_size' => 'Ausgewählt:',
  ],
];
