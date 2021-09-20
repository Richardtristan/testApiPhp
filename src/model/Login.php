<?php
namespace App\model;

class Login
{
    private $email;
    private $password;
    private $username;
    private $id;

    /**
     * @param $password
     * @param $username
     */
    public function __construct($password, $username)
    {
        global $db;
        $this->db = $db;
        $this->password = $password;
        $this->username = $username;
    }

    public function login()
    {
        $log = $this->db->prepare("SELECT username, password, confirm FROM accounts WHERE username = ?");
        $log->execute([$this->username]);
        $userExist = $log->fetch();

        if ($userExist && $userExist['confirm'] === "1") {
            if ($userExist['username'] == $this->username && password_verify($this->password, $userExist["password"]))
                return true;
        }
        return false;
    }

    public function id()
    {
        $id = $this->db->prepare("SELECT id FROM accounts WHERE username = ?");
        $id->execute([$this->username]);
        $idFetch = $id->fetch();
        return $idFetch['id'];
    }

    public function username($sessionUse)
    {
        $username = $this->db->prepare("SELECT username FROM accounts WHERE id = ?");
        $username->execute([$sessionUse]);
        $userFetch = $username->fetch();
        return $userFetch['username'];
    }
    public function password($sessionUse)
    {
        $password = $this->db->prepare("SELECT password FROM accounts WHERE id = ?");
        $password->execute([$sessionUse]);
        $passFetch = $password->fetch();
        return $passFetch['password'];
    }
    public function email($sessionUse)
    {
        $email = $this->db->prepare("SELECT email FROM accounts WHERE id = ?");
        $email->execute([$sessionUse]);
        $mailFetch = $email->fetch();
        return $mailFetch['email'];
    }
    public function pokedexID($sessionUserId)
    {
        $pokemons = $this->db->prepare("SELECT pokemons FROM accounts INNER JOIN pokedex ON accounts.id = pokedex.id WHERE accounts.id = ?");
        $pokemons->execute([$sessionUserId]);
        $pokemonsFetch = $pokemons->fetch();
        return $pokemonsFetch['pokemons'];
    }
}