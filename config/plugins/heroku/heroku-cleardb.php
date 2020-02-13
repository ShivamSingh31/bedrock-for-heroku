<?php
/**
 * Configuration - Database: Heroku ClearDb
 */
if (!empty(getenv('CLEARDB_DATABASE_URL'))) {
    $env = parse_url(getenv('CLEARDB_DATABASE_URL'));

    loadDatabaseConfig($env);
}
