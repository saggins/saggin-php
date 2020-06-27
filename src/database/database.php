<?php
use PDO;

class Database {
    private $pdo;
    function __construct($subj){
        $DBDSN =  getenv($subj . "Pass",true);
        $DBUser = getenv($subj . "Pass",true); 
        $DBPass = getenv($subj . "Pass",true);
        $pdo = new PDO($DBDSN, $DBUser, $DBPass);
    }
}
?>