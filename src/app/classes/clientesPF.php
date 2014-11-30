<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of clientesPF
 *
 * @author Giancarlo
 */

namespace src\app\classes;
use src\app\interfaces\endCobranca;



class clientesPF extends Clientes implements endCobranca  {
    //put your code here
    
    protected $telContato;
    protected $cobrRua;
    protected $cobrNumero;
    protected $cobrComplemento;
    protected $cobrBairro;
    protected $cobrCep;
    protected $cobrMunicipio;
    protected $cobrUf;
    
    function getTelContato() {
        return $this->telContato;
    }

    function getCobrRua() {
        return $this->cobrRua;
    }

    function getCobrNumero() {
        return $this->cobrNumero;
    }

    function getCobrComplemento() {
        return $this->cobrComplemento;
    }

    function getCobrBairro() {
        return $this->cobrBairro;
    }

    function getCobrCep() {
        return $this->cobrCep;
    }

    function getCobrMunicipio() {
        return $this->cobrMunicipio;
    }

    function getCobrUf() {
        return $this->cobrUf;
    }

    function setTelContato($telContato) {
        $this->telContato = $telContato;
    }

    function setCobrRua($cobrRua) {
        $this->cobrRua = $cobrRua;
    }

    function setCobrNumero($cobrNumero) {
        $this->cobrNumero = $cobrNumero;
    }

    function setCobrComplemento($cobrComplemento) {
        $this->cobrComplemento = $cobrComplemento;
    }

    function setCobrBairro($cobrBairro) {
        $this->cobrBairro = $cobrBairro;
    }

    function setCobrCep($cobrCep) {
        $this->cobrCep = $cobrCep;
    }

    function setCobrMunicipio($cobrMunicipio) {
        $this->cobrMunicipio = $cobrMunicipio;
    }

    function setCobrUf($cobrUf) {
        $this->cobrUf = $cobrUf;
    }


}
