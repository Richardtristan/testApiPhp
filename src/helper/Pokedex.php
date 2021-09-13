<?php
namespace App\helper;
class Pokedex{
    public $pokemons;
    public $id;

    /**
     * @param $pokemons
     * @param $id
     */
    public function __construct($id)
    {
        global $db;
        $this->db = $db;
        $this->pokemons;
        $this->id = $id;
    }
    function getPokemons()
    {
        $poke = $this->db->prepare("SELECT pokemons FROM pokedex WHERE id = ?");
        $poke->execute([$this->id]);
        return $poke->fetch();
    }
    function setPokemins($pokemons)
    {
        $poke = $this->db->prepare("UPDATE pokedex set pokemons=? WHERE id = ?");
        $poke->execute([$pokemons, $this->id]);
        return $poke->fetch();
    }
}