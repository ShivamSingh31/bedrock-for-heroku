<?php
/**
 * Configuration - Database: Heroku JawsDb Maria
 * @url: https://elements.heroku.com/addons/jawsdb-maria
 */
if (!empty(getenv('JAWSDB_MARIA_URL'))) {
    $env = parse_url(getenv('JAWSDB_MARIA_URL'));

    loadDatabaseConfig($env);
}
