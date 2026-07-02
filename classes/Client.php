<?php
class Client extends Personne
{
    private array $locations = [];

    public function __construct(string $nom, string $email)
    {
        parent::__construct($nom, $email);
    }


    public function ajouterLocation(Location $location)
    {
        $this->locations[] = $location;
    }

    public function afficherLocations(){
        foreach($this->locations as $location){
                echo $location->afficherLocations();
        }
    }
    public function getLocation(){
        return $this->locations;
    }
}
