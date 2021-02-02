<?php

include "connect/connectBdd.php";

if(!empty($_POST)){
    
    $pdo = connectBDD();
    $maxRows = $pdo->query("SELECT COUNT(*) FROM data WHERE data.is_in = 1");
    $maxRows = $maxRows->fetchColumn();

    $alreadyIn = array();

    for($ii = 0; $ii < sizeof($_POST); $ii++){
        $currentcode = "code".$ii;
        $currentcode = $_POST[$currentcode];
       
        $rowPrepare = $pdo->prepare("SELECT COUNT(*) FROM data WHERE data.data = ?");
        $rowPrepare->execute(array($currentcode));
        
        $rowCount = $rowPrepare->fetchColumn();
        if($rowCount != 0){
            if(in_array($currentcode, $alreadyIn) == false){
                array_push($alreadyIn, $currentcode);

            }
        }
    }

    $finalCode = "";
    if(sizeof($alreadyIn) == $maxRows){
        $finalCode = $pdo->query("SELECT * FROM data WHERE data.is_in = 2");
        $finalCode = $finalCode->fetch();
        $finalCode = "Le code final est =>".$finalCode['data']." Félicitation!!!";
    } else {
        $finalCode = $maxRows - sizeof($alreadyIn);
        $finalCode = "Il vous manque ".$finalCode." code(s)";
    }

}

header('Location: ../rep.php?r='.$finalCode);