<?php

if(!empty($_POST)){

    $liste("ftX2c+4R[2","9{,n27JcGb","1594973682","*G#esc<A4V2c2J]Q4<2e","#S/4L#nKj\$Mc6p|7f4C4","d5g4ds86ju5ui2","x8h3LcBU3","rouge");
    $alreadyIn = array();
    $finalCode = $_POST["code"];

    for($ii = 0; $ii < sizeof($_POST); $ii++){
        $currentcode = "code".$ii;
        $currentcode = $_POST[$currentcode];
    
        if(in_array($currentcode, $liste) == true){
            if(in_array($currentcode, $alreadyIn) == false){
                array_push($alreadyIn, $currentcode);
            }
        }
    }
    
    $finalCode = "";
    if(sizeof($alreadyIn) == sizeof($liste)){
        $finalCode = "syZY43Jf4";
    } else {
        $finalCode = sizeof($liste) - sizeof($alreadyIn);
        $finalCode = "Il vous manque ".$finalCode." code(s)";
    }
}

header('Location: ../rep.php?r='.$finalCode);
