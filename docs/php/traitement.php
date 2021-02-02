<?php

include "connect/connectBdd.php";

if(!empty($_POST)){
    
    $pdo = connectBDD();
    $maxRows = $pdo->query("SELECT 'is_in' FROM data WHERE data.is_in = 1");
    $maxRows = $maxRows->rowCount();

    $alreadyIn = array();
$finalCode = 0;

    $finalCode = sizeof($_POST);

    foreach ($_POST as $value){
        
        $rowPrepare = $pdo->prepare("SELECT 'is_in' FROM data WHERE data.data = ?");
        $row = $rowPrepare->execute(array($value));
        /*
        if($row->rowCount() != 0 && in_array($value, $alreadyIn) == false){
            array_push($alreadyIn, $value);
        }*/
        //$finalCode++;
    }

    echo $finalCode;
    //header('Location: ../rep.php?r='.$finalCode);
/*
    $maxRows = $pdo->query("SELECT 'is_in' FROM data WHERE data.is_in = 1");
    $maxRows = $maxRows->rowCount();

    $alreadyIn = array();

    foreach ($_POST as $value){
        $rowPrepare = $pdo->prepare("SELECT 'is_in' FROM data WHERE data.data = ?");
        $row = $rowPrepare->execute(array($value));
        
        if($row->rowCount() != 0 && in_array($value, $alreadyIn) == false){
            array_push($alreadyIn, $value);
        }
    }
    
    $finalCode = "";
    if(sizeof($alreadyIn) == $maxRows){
        $finalCode = $pdo->query("SELECT 'data' FROM data WHERE data.is_in = 2");
        $finalCode = $finalCode->fetch();
        $finalCode = $finalCode['data'];
    } else {
        $finalCode = $mawRows - sizeof($alreadyIn);
        $finalCode = "Il vous manque ".$finalCode." code(s)";
    }
*/
}



/*
$finalCode = finalfunction();

header('Location: ../rep.php?r='.$finalCode);
*/
