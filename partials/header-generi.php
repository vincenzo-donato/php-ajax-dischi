<?php 
    include 'dischi.php';
    $generi = ['All'];
    foreach($disc as $element){
        if(!in_array($element['genre'], $generi)){
            array_push($generi, $element['genre']);
        }
    }
?>




