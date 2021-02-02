<?php

include "connect/config.php";


    $pdo = connectBDD();

    $maxRows = $pdo->query("SELECT 'is_in' FROM data WHERE data.is_in = 1");
    $maxRows = $maxRows->rowCount();

    $alreadyIn = array();

    foreach ($_POST as $value){
        $rowPrepare = $pdo->prepare("SELECT 'is_in' FROM data WHERE data.data = ?");
        $row = $rowPrepare->execute(array($value));
        
        if($row->rowCount() != 0 && !array_search($value, $alreadyIn)){
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


header('Location: rep.php?r='.$finalCode);