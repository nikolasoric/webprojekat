<?php

class Cart{
    public $db = null;

    public function __construct(DBController $db)
    {
        if(!isset($db->con)) return null;
        $this->db = $db;
    }

        //insert into card table
        public function insertIntoCart($params = null, $table="card"){
            if($this->db->con != null){
                if($params != null){
                    //insert into card(user_id) values (0)
                    //get table columns
                    $columns = implode(',', array_keys($params));
                    //print_r($columns);
                    $values = implode(',', array_values($params));
                    //print_r($values);
                    
                    $query_string = sprintf("INSERT INTO %s(%s) VALUES(%s)",$table, $columns, $values);
                    //echo $query_string;
    
                    //execute query
                    $result = $this->db->con->query($query_string);
                    return $result;
                }
            }
        }
    
        //dobiti user_id i phone_id i insertovati u tabelu cart
        
        public function addToCart($userid,$itemid){
            if (isset($userid) && isset($itemid)){
                $params = array(
                    "user_id" => $userid,
                    "product_id" => $itemid
                );
    
                // data u cart
                $result = $this->insertIntoCart($params);
                if ($result){
                    // refresh
                    header("Location: " . $_SERVER['PHP_SELF']);
                }
                return $result;
            }
        }
    
        public function deleteCart($item_id = null, $table="card")
        {
            if($item_id != null){
                $result = $this->db->con->query("DELETE FROM {$table} WHERE product_id={$item_id}");
                if($result){
                    header("Location: " .$_SERVER['PHP_SELF']);
                }//ako dobijemo result neki onda pozivamo ovu fju
            }
        }
    
        public function getSum($arr){
            if(isset($arr)){
                $sum = 0;
                foreach($arr as $item){
                    $sum += floatval($item[0]);//ovom funkcijom dobijamo float vrednost item-a
                }
                return sprintf($sum);
            }
        }

        public function saveForLater($item_id = null, $saveTable = "wishlist", $fromTable = "card"){
            if ($item_id != null){
                $query = "INSERT INTO {$saveTable} SELECT * FROM {$fromTable} WHERE product_id={$item_id};";
                $query .= "DELETE FROM {$fromTable} WHERE product_id={$item_id};";
    
                // execute multiple query
                $result = $this->db->con->multi_query($query);
    
                if($result){
                    header("Location :" . $_SERVER['PHP_SELF']);
                }
                return $result;
            }
        }
}

?>