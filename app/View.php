<?php

namespace App;

class View
{
 public  function showIntroPage(){
     echo 'home';
 }

 public  function showSinglePage($data){

     print_r($data);
 }

 public function showListPages(array $data){
     echo '<ul>';
     $i =1;
     foreach ($data as $page){
         echo '<li><a href="/view/'.$i.'">'.$page.'</a></li>';
         $i++;
     }  echo '</ul>';

 }

}