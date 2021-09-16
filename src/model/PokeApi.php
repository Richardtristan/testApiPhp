<?php

namespace App\model;

class PokeApi
{
    public function __construct()
    {
        $this->baseUrl = 'https://pokeapi.co/api/v2/';
        $this->url ='';
    }

    function pokemonSpecies($lookup){
        $this->url = $this->baseUrl . 'pokemon-species/' . $lookup;
    }

    function pokemon($lookUp)
    {
    $this->url = $this->baseUrl . 'pokemon/' . $lookUp;
    }
    function type()
    {
        $this->url = $this->baseUrl . 'type/';
    }

    function getPokemon(){
        return $this->url;
    }

    public function callApi()
    {
        $api = file_get_contents($this->getPokemon());
        return json_decode($api);
    }
}
