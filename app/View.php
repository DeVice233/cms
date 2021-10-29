<?php

namespace App;
use Twig;

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
     $title = 'Статья '.$data;
        $template = $this->twig->load('singlepage.twig');
        echo $template->render(['data'=>$data, 'Title'=>$title]);

 }

 public function showListPages(array $data){
     $title = 'Список статей';
     $template = $this->twig->load('pages.twig');
     echo $template->render(['data' => $data, 'Title'=>$title]);
 }

}