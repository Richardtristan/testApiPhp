<?php

namespace App\model;

class VerifUser
{


    public function __construct($id)
    {
        global $db;
        $this->db = $db;
        $this->id = $id;

    }



    public function getVerify()
    {
        $log = $this->db->prepare("SELECT cle, confirm, id FROM accounts WHERE id = ?");
        $log->execute([$this->id]);
        return $log->fetch();
    }
    public function setVerify()
    {
        $log = $this->db->prepare("UPDATE accounts SET confirm = 1  WHERE id = ?");
        $log->execute([$this->id]);
    }
}



