<?php

if(!empty($_POST)){

    $alreadyIn = array();
    $listeC = array("ftX2c+4R[2","9{,n27JcGb","1594973682","*G#esc<A4V2c2J]Q4<2e","#S/4L#nKj\$Mc6p|7f4C4","d5g4ds86ju5ui2","x8h3LcBU3","rouge");
    $finalCode = $_POST["code"];
    for($ii = 0; $ii < sizeof($_POST); $ii++){
        $currentcode = "code".$ii;
        $currentcode = $_POST[$currentcode];
    
        if(in_array($currentcode, $listeC) == true){
            if(in_array($currentcode, $alreadyIn) == false){
                array_push($alreadyIn, $currentcode);
            }
        }
    }
    ;
    $finalCode = "";
    if(sizeof($alreadyIn) == sizeof($listeC)){
        $finalCode = "Le code final est => \"syZY43Jf4\" Félicitation!!!";
    } else {
        $finalCode = sizeof($listeC) - sizeof($alreadyIn);
        $finalCode = "Il vous manque ".$finalCode." code(s)";
    }
}

header('Location: ../rep.php?r='.$finalCode);
#S/4L#nKj$Mc6p|7f4C4