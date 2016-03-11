<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');  
if(isset($_GET['mandi'])){
    $a = 'hello';
print(json_encode($a));

    //print(json_encode(array('haha'=>'foundFile')));
print('jaja');}
?>