<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author Giancarlo
 */

namespace src\app\interfaces;


interface clientesInterfaces {
    //put your code here
    
    public function getId(); 

     public function getNome();

     public function getSobrenome();

     public function getCpf() ;
     
     public function getPFouPJ() ;

     public function getEmail() ;

     public function getTelefone();

     public function getRua() ;
     
     public function getNumero() ;

     public function getBairro() ;

     public function getCidade() ;
     public function getUf() ;
     public function getGrau() ;
     
     
    
}
