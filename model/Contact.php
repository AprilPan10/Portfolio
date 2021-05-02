<?php
namespace Portfolio\model;
class Contact
{
    public function addPerson($name,$email,$phone, $msg, $dbcon){
        $sql="INSERT INTO info(name,email,phone,msg) VALUE (:name,:email,:phone,:msg)";
        $pdostm = $dbcon->prepare($sql);
        $pdostm->bindParam(':name',$name);
        $pdostm->bindParam(':email', $email);
        $pdostm->bindParam(':phone',$phone);
        $pdostm->bindParam(':msg',$msg);

        $count = $pdostm->execute();
        return $count;
    }

}