<?php

class PokemonController
{
    private $db;

    public function __construct()
    {
        $host = "localhost";
        $dbName = "pokedex";
        $port = 3306;
        $userName = "root";
        $password = "root";
        try {
            $this->db = new PDO("mysql:host=$host;dbname=$dbName;port=$port;charset=utf8mb4", $userName, $password);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function create(Pokemon $newPokemon): void
    {
        $req = $this->db->prepare("INSERT INTO `pokemon` (number, name, description) VALUES (:number, :name, :description)");

        $req->bindValue(":number", $newPokemon->getNumber(), PDO::PARAM_INT);
        $req->bindValue(":name", $newPokemon->getName(), PDO::PARAM_STR);
        $req->bindValue(":description", $newPokemon->getDescription(), PDO::PARAM_STR);

        $req->execute();
    }

    public function readAll(): array
    {
        $pokemons = [];
        $req = $this->db->prepare("SELECT * FROM `pokemon` ORDER BY number");
        $req->execute();
        $datas = $req->fetchAll();
        foreach ($datas as $data) {
            $pokemons[] = new Pokemon($data);
        }
        return $pokemons;
    }
}
