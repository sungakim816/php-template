<?php

function formatDsn($dbName, $dbHost, $dbPort = 3306)
{
    return "mysql:dbname=$dbName;host=$dbHost:$dbPort";
}
