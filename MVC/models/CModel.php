<?php

class Cmodel {
    
    public function GetData(){
        
        $mysqli = new mysqli();

        if(mysqli_connect_errno()) {
            echo ('no connection');
            exit();
        }

        $mysqli->set_charset('utf8');
        $query = "Select * From blog_posts";

        $result = $mysqli->query($query);
        $arrayResult = $result->fetch_all(MYSQLI_ASSOC);
        /*
    $arrayResult[] = array(
        'TITLE' => 'Blog hosting site',
        'DATE' => '22.06.2022',
        'AUTHOR' => 'VolDeMort',
        'IMAGE' => 'https://i.pinimg.com/550x/07/ac/fc/07acfc8a22dd8182985a41642e98a5dc.jpg',
        'TEXT' => 'Nulla morbi, ad pur Portwise morbsed id, arcu vestiblum dolor conmtum ec egestas lorem elit libero.'
    );
    
    $arrayResult[] = array(
        'TITLE' => 'Blog hosting site NEW',
        'DATE'=> '22.06.2021',
        'AUTHOR' => 'Igor',
        'IMAGE' => 'https://i.pinimg.com/originals/e6/0f/4b/e60f4bb3603dd4904041c8f7c53212a7.jpg',
        'TEXT' => 'Nulla morbi, ad pur Portwise morbsed id, arcu vestiblum dolor conmtum ec egestas lorem elit libero.'
    );
    */
    
        return $arrayResult;
    }
}