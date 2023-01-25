<?php

class Pokemon
{
    private $id;
    private $number; // null
    private $name;
    private $description;

    public function __construct(array $data)
    {
        $this->hydrate($data);
    }

    public function hydrate(array $data)
    {
        foreach ($data as $key => $value) {
            $this->$key = $value;
            /* $method = "set" . ucfirst($key); // setId, setNumber, setName, setDescription
            if (method_exists($this, $method)) {
                $this->$method($value);
            } */
        }
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = $id;
        return $this;
    }

    public function getNumber(): int
    {
        return $this->number;
    }

    public function setNumber(int $number): self
    {
        $this->number = $number;
        return $this;
    }

    /**
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }
}

/* $data = [
    "id" => "1",
    "number" => "25",
    "name" => "Pikachu",
    "description" => "Souris électrique"
]; */

/* $pikachu = new Pokemon();
$pikachu->setId(1)->setNumber(25); */