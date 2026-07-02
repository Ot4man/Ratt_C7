<?php

class Vehicule
{
    private string $nom;
    private float $prix;
    private StatutVehicule $statut;

    public function __construct(string $nom, float $prix)
    {
        $this->nom = $nom;
        $this->prix = $prix;
    }

    public function getNom(): string
    {
        return $this->nom;
    }
    public function setNom(string $nom)
    {
        $this->nom = $nom;
    }
    public function getPrix(): float
    {
        return $this->prix;
    }
    public function setPrix(float $prix)
    {
        $this->prix = $prix;
    }
    public function getStatus(): StatutVehicule
    {
        return $this->statut;
    }

    public function affichervehicule()
    {
        echo $this->nom;
    }
    public function calculStatut()
    {
        if ($this->prix >= 100) {
            $this->statut = StatutVehicule::LUXE;
        } elseif ($this->prix < 100 && $this->prix >= 20) {
            $this->statut = StatutVehicule::CONFORT;
        } else {
            $this->statut = StatutVehicule::ECO;
        }
    }
}
