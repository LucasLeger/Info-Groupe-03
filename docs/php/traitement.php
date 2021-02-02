<?php

include "connect/connectBdd.php";

if(!empty($_POST)){
    
    $pdo = connectBDD();
    $maxRows = $pdo->query("SELECT 'is_in' FROM data WHERE data.is_in = 1");
    $maxRows = $maxRows->rowCount();

    $alreadyIn = array();

    $finalCode = $_POST["code"];
    for($ii = 0; $ii < sizeof($_POST); $ii++){
        $currentcode = "code".$ii;
        $currentcode = $_POST[$currentcode];
       
        $rowPrepare = $pdo->prepare("SELECT 'is_in' FROM data WHERE data.data = ?");
        $row = $rowPrepare->execute(array($currentcode));
        
        $rowCount = $row->rowCount();
        if($rowCount != 0){
            if(in_array($currentcode, $alreadyIn) == false){
                array_push($alreadyIn, $currentcode);

            }
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

}

header('Location: ../rep.php?r='.$finalCode);

