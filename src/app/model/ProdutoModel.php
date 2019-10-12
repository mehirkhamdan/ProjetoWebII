<?php
namespace src\app\model;

abstract class ProdutoModel
{
    public function create(){
        $em=getEntityManager();
        $en=persit($produto);
        $en=fflush();
    }
    
    
    
    
    public function listar(){
        
    }
    
    
    public function update(){
        
    }
    
    
    
    
    
    public function delete(){
        
    }
    
    
    
}


