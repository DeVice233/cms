<?php

namespace App;

class Model
{
    public function getListPages(){
        $date =array();
        for ($i = 1; $i <= 5; $i++){
            $date[].='Page title - '.$i;
        }
        return $date;
    }

    public function getSinglePage($id){
        $date = 'Номер страницы'.$id;
        return $date;
    }
}