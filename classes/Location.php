<?php

class Location implements Payable
{

    private float $total;
    private  array $vehicules = [];

    public function __construct(float $total)
    {
        $this->total = $total;
    }

    public function ajouterVehicule(string $nom, float $prix)
    {
        $vehicule = new Vehicule($nom, $prix);
        $this->vehicules[] = $vehicule;
    }
    public function getTotal(): float
    {
        return $this->total;
    }

    public function calculerTotal()
    {
        $total = 0;
        foreach ($this->vehicules as $vehicule) {
            $total += $vehicule->getPrix();
        }
        return $total;
    }
    public function getVehicule(){
    return $this->vehicules;
    }

    public function afficherLocation(){
        foreach($this->vehicules as $vehicule){
            echo $vehicule->ffichervehicule();
        }
    }
}
