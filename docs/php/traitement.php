<?php

include "connectBDD.php";

function check($POST){

    $pdo = connectBDD();

    $maxRows = $pdo->query("SELECT 'is_in' FROM data WHERE data.is_in = 1");
    $maxRows = $maxRows->rowCount();

    $alreadyIn = array();

    foreach ($POST as $value){
        $rowPrepare = $pdo->prepare("SELECT 'is_in' FROM data WHERE data.data = ?");
        $row = $rowPrepare->execute(array($value));
        
        if($row->rowCount() != 0 && !array_search($value, $alreadyIn)){
            array_push($alreadyIn, $value);
        }
    }
    

    if(sizeof($alreadyIn) == $maxRows){
        $finalCode = $pdo->query("SELECT 'data' FROM data WHERE data.is_in = 2");
        $finalCode = $finalCode->fetch();
        $finalCode = $finalCode['data'];

        echo $finalCode;
    }

}

check($_POST);