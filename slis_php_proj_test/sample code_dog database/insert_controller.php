<?php
class dogInfoInsert
{
    
    // properties
    private $name;
    private $age;
    private $hrsofsleep;
    private $dog_type;
    private $dog_gender;
    private $pdo;
    private $insertQueryWithNote;
    
    // methods
    public function __construct($name, $age, $hrsofsleep, $dog_type, $dog_gender, $pdo)
    {
        $this->name = $name;
        $this->age = $age;
        $this->hrsofsleep = $hrsofsleep;
        $this->dog_type = $dog_type;
        $this->dog_gender = $dog_gender;
        $this->pdo = $pdo;
    }
    
    public function insertdog()
    {
        $insertQueryWithNote = "INSERT INTO dogs (dog_name,age,hours_of_sleep,dog_type,dog_gender) VALUES ('$this->name','$this->age','$this->hrsofsleep','$this->dog_type','$this->dog_gender')";
    $this->pdo->query($insertQueryWithNote);
        
    }
    
}
