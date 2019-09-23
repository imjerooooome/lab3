<?php
$homer = '<img src = "images/homer.png">';
$bart = '<img src = "images/bart.png">';
$grandpa = '<img src = "images/grandpa.png">';
$lisa = '<img src = "images/lisa.png">';
$maggie = '<img src = "images/maggie.png">';
$marge = '<img src = "images/marge.png">';

$character = $_POST['character'];

// replace this echo statement with an img tag of the correct character

if($character == 'homer'){
    echo $homer;
}
elseif($character == 'bart'){
    echo $bart;
}
elseif($character == 'grandpa'){
    echo $grandpa;

}elseif($character == 'lisa'){
    echo $lisa;

}elseif($character == 'maggie'){
    echo $maggie;

}elseif($character == 'marge'){
    echo $marge;
}

?>
