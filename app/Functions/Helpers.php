<?php

namespace App\Functions;

class Helpers {

    public static function prelevaDaCvs(string $percorsoFIle){

        $data = [];
        
        //assegno il contenuto del file nella path usando la modalita read
        $contenuto = fopen($percorsoFIle, 'r');

        if($contenuto === false){
            exit('il file selezionato non è valido');
        }

        while(($row = fgetcsv($contenuto)) !== false){

            $data[] = $row;
        }

        return $data;


    }

}










?>