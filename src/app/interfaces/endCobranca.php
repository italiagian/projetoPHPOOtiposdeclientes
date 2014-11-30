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


interface endCobranca {
    //put your code here
    
    public function getTelContato();

    public function getCobrRua();

    public function getCobrNumero();

    public function getCobrComplemento();

    public function getCobrBairro();

    public function getCobrCep();

    public function getCobrMunicipio();

    public function getCobrUf();
    
    

}
