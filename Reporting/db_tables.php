<?php
    #const PATH_TO_SQLITE_FILE = '/Library/WebServer/Documents/Reporting/WarberryReporting/SQLiteConnection/db/warberry.db';
    const PATH_TO_SQLITE_FILE = 'C:\Development\WordPress\xampp\htdocs\warberry\warberry.db'; // e.g. xampp installed in folder 'C:\Development\WordPress'

    $db = new SQLite3(PATH_TO_SQLITE_FILE);
    $tablesquery = $db->query("SELECT name FROM sqlite_master WHERE type='table';");

    while ($table = $tablesquery->fetchArray(SQLITE3_ASSOC)) {
        echo $table['name'] . '<br />';
    }
?>
