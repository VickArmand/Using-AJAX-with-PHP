<?php
include 'dbconn.php';
//  $dbname='phpwithajax';
//  $dbhost='localhost';
//  $dbuser='root';
//  $dbpassword='';

//     try{
//        $dbconn=new PDO('mysql:host='. $dbhost.';dbname='.$dbname,$dbuser,$dbpassword);
//        $dbconn->setAttribute(PDO::ERRMODE_EXCEPTION, PDO::ATTR_ERRMODE);
//         echo "Connection success";
//     }
//     catch(Exception $ex){
//         return $ex->getMessage();

//     }
//     return $dbconn;

    if(isset($_POST['mail'])){
        $mail=$_POST['mail'];
        $pwd=$_POST['pwd'];
        
     
    $db= new Database();
    $db->create($mail,$pwd);
    // try{
    //     $sql='INSERT INTO usercontent(email,content) VALUES(:email,:content)';
    //    $stmt=$dbconn->prepare($sql);
    //    $stmt->bindParam(':email',$mail);
    //    $stmt->bindParam(':content',$pwd);
    //    $stmt->execute();
    //    echo "Insert Success";
    // }
    // catch(Exception $ex){
    //     $ex->getMessage();
    // }
}
   











?>