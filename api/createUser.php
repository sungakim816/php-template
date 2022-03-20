<?php
require_once(dirname(__FILE__) . '/../services/DBPdo.php');
require_once(dirname(__FILE__) . '/../config.php');
require_once(dirname(__FILE__) . '/../shared/utils.php');

isset($_POST['userName']) || die('username is required');
isset($_POST['firstName']) || die('first name is required');
isset($_POST['lastName']) || die('last name is required');

try {
    $dsn = formatDsn('phpTemplate', DB_HOST, DB_PORT);
    $pdo = new DBPdo($dsn, DB_USER, DB_PASS);

    $pdo->beginTransaction();

    $sql = "INSERT INTO users(username, firstName, lastName) VALUES (?, ?, ?)";
    $pdo->run($sql, array($_POST['userName'], $_POST['firstName'], $_POST['lastName']));
    $insertId = $pdo->lastInsertId();

    $pdo->commit();

    header("Location: /?userId=$insertId", true, 301);
    exit;
} catch (Exception $e) {
    die($e->getMessage());
}
