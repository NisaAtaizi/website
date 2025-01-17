<?php

require_once 'baglan.php';

if(isset($_POST['insertislemi'])){

    $kaydet=$db->prepare("INSERT into iletisim set 
    
            ad=:ad,
            email=:email,    
            mesaj=:mesaj
         ");

    $insert=$kaydet->execute(array(

        'ad' => $_POST['ad'],
        'email' => $_POST['email'],
        'mesaj' => $_POST['mesaj']

    ));

    if($insert){

        Header("Location:zcontact.php?durum=gonderildi");
        exit;
        //echo "Mesajınız Gönderildi!";
    }
    else{
        
        Header("Location:zcontact.php?durum=hata");
        exit;
        //echo "Mesajınız Gönderilemedi!";
    }
}
 
?>