<?php
$prenom= "Samba";
$age = 27;
$note =18;
$prenom;
echo "bonjour $prenom tu as $age ans et tu as une note de $note/20";

if($note<=20 & $note>=16){
    echo "Mention :Excellent";}

}else if($note<16 & $note>=14){
        echo "Mention Bien";}
       else if($note<14 & $note>=10){
            echo "Mention Passable";}
        
        }else    if($note <10 & $note>=0){
            echo "Mention insuffisant";
        }else{
            echo "la note doit etre comprise entre 0 et 20";
        }
        if($age>=18){
            echo "Acces autorise";
        }

 ?>

