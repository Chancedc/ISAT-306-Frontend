<?php
    include'db.php';
    $address=$_POST['Address'];
    $size=$_POST['Size'];
    $age=$_POST['Age'];
    $people=$_POST['People'];
    $utility=$_POST['Utility'];
    $n=new db();
    $n->connect();
    $n->insert($address,$size,$age,$people,$utility);
?>