<?php

namespace App;

class Model
{
    public function getListPages(){
        $data =array();
        $item = array();
        for ($i = 1; $i <= 15; $i ++){
            $item['href'] = "/view/".$i;
            $item['caption'] = 'Page title - '.$i;
            $data[] = $data + $item;
        }
        return $data;
    }


}