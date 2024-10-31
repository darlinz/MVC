<?php

class Cmodel {
    public function GetData(){
        $arrayResult[] = array(
            'TITLE' => 'Blog hosting site',
            'DATE' => '22.06.2022',
            'AUTHOR' => 'VolDeMort',
            'IMAGE' => 'https://news.artnet.com/app/news-upload/2019/01/Cat-Photog-Feat-256x256.jpg',
            'TEXT' => 'Nulla morbi, ad pur Portwise morbsed id, arcu vestiblum dolor conmtum ec egestas lorem elit libero.'

        );
        $arrayResult[] = array(
            'TITLE' => 'Blog hosting site NEW',
            'DATE'=> '22.06.2021',
            'AUTHOR' => 'Igor',
            'IMAGE' => 'https://news.artnet.com/app/news-upload/2019/01/Cat-Photog-Feat-256x256.jpg',
            'TEXT' => 'Nulla morbi, ad pur Portwise morbsed id, arcu vestiblum dolor conmtum ec egestas lorem elit libero.'
        );
        return $arrayResult;
    }
}