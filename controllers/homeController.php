<?php

class homeController extends Controller {
    
   
    public function __construct(){
       // parent::__construct();
    }
   
    
    public function index(){
        $dados = array();   
        
        $fotos = new Fotos();
        $fotos->saveFotos();
        $dados['fotos'] = $fotos->getFotos();
        
        $this->loadTemplate('home', $dados);
    }
}

