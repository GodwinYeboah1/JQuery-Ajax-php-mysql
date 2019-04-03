<?php
try {
    $connection = new PDO("mysql:host=localhost;dbname=info2",'root','root');
    $connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $topic = $_POST['topic'];
    $details = $_POST['details'];
    $data = "INSERT INTO blog(topic,details)VALUES('$topic','$details')";
    $connection ->exec($data);
}
catch(PDOException $e){
    echo $e->getMessage();
}
$connection = null;
?>