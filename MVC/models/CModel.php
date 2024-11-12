<?php

class Cmodel {
    
    public function GetData(){
        //echo "fgggfggdf";
       
        $mysqli = new mysqli('localhost', 'root', '', 'php_blog'); 

        
        if ($mysqli->connect_errno) {
            echo ('No connection: ' . $mysqli->connect_error);
            exit();
        }
        ///echo "fgggfggdf";
        
        $mysqli->set_charset('utf8');
        
       
        $query = "SELECT * FROM blog_posts";

       
        $result = $mysqli->query($query);

        //var_dump ($result);
        if ($result) {
            $arrayResult = $result->fetch_all(MYSQLI_ASSOC);  
            //var_dump($arrayResult);
            return $arrayResult;
        } else {
            echo "Query failed: " . $mysqli->error;  
            return false;
        }
        
       
    }
}
?>
