<?php
session_start();
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=rush01', 'root', 'root');
}
catch (Exception $e)
{
    die('Error : ' . $e->getMessage());
}
if(!empty($_POST['message']))
{ // if the variables are not empty

    // $pseudo = mysql_real_escape_string($_POST['pseudo']);
    $message = htmlentities($_POST['message']); // we secure our data
    // then enter the data into database :
    $date = date("Y-m-d H:i:s");
    $insertion = $bdd->prepare('INSERT INTO chat(message, dates, id_user) VALUES(?, ?, ?);');
    $insertion->execute(array(
        $message,
        $date,
        $_SESSION['id']
    ));
}
?>
