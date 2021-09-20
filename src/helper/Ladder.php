<?php
namespace App\helper;
class Ladder{

    public function __construct()
    {
        global $db;
        $this->db = $db;
    }

    function ladderPokedex()
    {
        $ladder = $this->db->prepare("SELECT username,pokemons FROM accounts INNER JOIN pokedex on pokedex.userId = accounts.id ORDER BY  LENGTH(pokedex.pokemons) DESC LIMIT 100 ");
        $ladder->execute();
        return $ladder->fetchall();
    }
}