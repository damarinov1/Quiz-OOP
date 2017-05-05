<?php

include_once "../class/Database.php";
include_once '../class/Answer.php';

$db = Database::getInstance();

$test = $db->runQuery("SELECT * FROM questions WHERE id = 5 LIMIT 1");

//var_export($passed);

if ($test['id'] == "5") {
    echo "PASSED \n";
} else {
    throw new Exception("Not passed");
}

$test2 = $db->runQuery("SELECT * FROM answers WHERE id = 2 LIMIT 1", "Answer");

if ($test2->id == 2) {
    echo "PASSED \n";
} else {
    throw new Exception("Not passed");
}