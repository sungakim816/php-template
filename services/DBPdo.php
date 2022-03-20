<?php

require_once(dirname(__FILE__) . '/../config.php');

class DBPdo extends PDO
{
    public function __construct($dsn,  $dbUser, $dbPass, $options = [])
    {
        $default_options = [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        ];
        $options = array_replace($default_options, $options);
        parent::__construct($dsn, $dbUser, $dbPass, $options);
    }

    public function run($sql, $args = NULL)
    {
        if (!$args) {
            return $this->query($sql);
        }
        $statement = $this->prepare($sql);
        $statement->execute($args);
        return $statement;
    }
}
