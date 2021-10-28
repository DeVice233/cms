<?php

namespace App;


class View
{
    protected $twig;
    protected $loader;
    public function __construct(){
        $this->loader = new \Twig\Loader\FilesystemLoader('template/front');
        $this->twig= new \Twig\Environment($this->loader, [

        ]);

    }
 public  function showIntroPage(){
    $title = 'Главная страница';
    $template = $this->twig->load('index.twig');
    echo $template->render(['Title'=>$title]);
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