<?php
class doggender extends Dbh {
    
    public function getdoggender($limit = "100 PERCENT", $order_col = "-9", $order_type = "DESC")
    {
        $stmt = $this->connect()->query("select distinct
dog_gender.id,
dog_gender.dog_gender
from dog_gender
"); 
  

        $result = $stmt -> fetchall(PDO::FETCH_ASSOC);
   
       return $result;
        ?>

<?php        
    
   
    }
}

?>

