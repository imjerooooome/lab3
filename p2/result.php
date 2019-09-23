<?php

$age = $_POST['age'];

if($age >= 19){
    echo 'Welcome to DuffBeer! Enjoy your stay';
}else{
    echo 'Sorry, you are not old enough to enter this site.';
}
?>