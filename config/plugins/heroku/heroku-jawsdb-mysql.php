<?php
/**
 * Configuration - Database: Heroku JawsDb MySQL
 * @url: https://elements.heroku.com/addons/jawsdb
 */
if (!empty(getenv('JAWSDB_URL'))) {
    $env = parse_url(getenv('JAWSDB_URL'));

    loadDatabaseConfig($env);
}
