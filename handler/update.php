<?php

// kreirati  update funkciju
require "../dbBroker.php";
require "../model/prijava.php";

if(isset($_POST['id']) && isset($_POST['predmet']) && isset($_POST['katedra']) && isset($_POST['sala']) && isset($_POST['datum'])){
    $pr = new Prijava($_POST['id'],$_POST['predmet'],$_POST['katedra'],$_POST['sala'],$_POST['datum']);
    $status=$pr->update($pr->id,$conn);

    if($status){
        echo 'Success';

    }else {
        echo $status;
        echo "Failed";
   }
}
?> 