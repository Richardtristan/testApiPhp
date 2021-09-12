<?php
namespace App\model;

use PDO;
use PDOException;

class Connect
{
    private $host;
    private $dbname;
    private $user;
    private $pass;
    private $db;

    /**
     * @param string $host
     * @param string $dbname
     * @param string $user
     * @param string $pass
     */
    public function __construct(string $host, string $dbname, string $user, string $pass)
    {
        $this->host = $host;
        $this->dbname = $dbname;
        $this->user = $user;
        $this->pass = $pass;

        try {
          $this->db = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
        } catch (PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();

        }

    }

    function getPdo()
    {
        return $this->db;
    }
} // class ends
