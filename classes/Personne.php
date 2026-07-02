<?php


abstract class Personne
{
    private static int $compt = 1;
    private int $id;
    private string $nom;
    private string $email;
    public function __construct(string $nom, string $email)
    {
        $this->id = self::$compt++;
        $this->nom = $nom;
        $this->email = $email;
    }

    public function getId(): int
    {
        return $this->id;
    }
    public function getNom(): string
    {
        return $this->nom;
    }
    public function getEmail(): string
    {
        return $this->email;
    }
    public function setNom(string $nom)
    {
        $this->nom = $nom;
    }
    public function setEmail(string $email)
    {
        $this->email = $email;
    }
}
