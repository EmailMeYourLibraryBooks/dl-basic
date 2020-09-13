<?php
class dogtypes extends Dbh {
    
    public function getdogtypes($limit = "100 PERCENT", $order_col = "-9", $order_type = "DESC")
    {
        $stmt = $this->connect()->query("select distinct
dog_type.id,
dog_type.dog_type
from dog_type
"); 
  

        $result = $stmt -> fetchall(PDO::FETCH_ASSOC);
   
       return $result;
        ?>

<?php        
    
   
    }
}

?>

