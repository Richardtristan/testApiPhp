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
    function setPokemons($actualPokedex, $pokemons)
    {
        $poke = $this->db->prepare("UPDATE pokedex set pokemons=? WHERE id = ?");
        $poke->execute([$actualPokedex.$pokemons, $this->id]);
    }
    function getDate()
    {
        $date = $this->db->prepare("SELECT date FROM pokedex WHERE id = ?");
        $date->execute([ $this->id]);
        return $date->fetch();
    }
    function setDate($dateNow)
    {
        $date = $this->db->prepare("UPDATE pokedex set date=? WHERE id = ?");
        $date->execute([$dateNow, $this->id]);
    }
}