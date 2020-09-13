<?php
class dogs extends Dbh {
    
    public function getalldogs($limit = "100 PERCENT", $order_col = "-9", $order_type = "DESC")
    {
        $stmt = $this->connect()->query("select distinct
dogs.dog_name,
dog_type.dog_type,
dog_gender.dog_gender,
dogs.age,
dogs.hours_of_sleep
from dogs
join dog_type on dog_type.id = dogs.dog_type
join dog_gender on dog_gender.id = dogs.dog_gender
order by dogs.id asc
"); 
  

        $result = $stmt -> fetchall(PDO::FETCH_ASSOC);
   
       return $result;
        ?>

<?php        
    
   
    }
}

?>

