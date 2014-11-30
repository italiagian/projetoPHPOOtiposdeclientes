<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of pessoas
 *
 * @author Giancarlo
 */

namespace src\app\classes;

use src\app\interfaces\clientesInterfaces;

class Clientes implements clientesInterfaces   {
    //put your code here
    private $id;
    private $nome;
    private $sobrenome;
    private $cpf;
    private $PFouPJ;
    private $email;
    private $telefone;
    private $rua;
    private $numero;
    private $bairro;
    private $cidade;
    private $uf;
    private $grau;
    
    function __construct($id, $nome, $sobrenome, $cpf, $PFouPJ, $email, $telefone, $rua, $numero, $bairro, $cidade, $uf, $grau) {
        $this->id = $id;
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
        $this->cpf = $cpf;
        $this->PFouPJ = $PFouPJ;
        $this->email = $email;
        $this->telefone = $telefone;
        $this->rua = $rua;
        $this->numero = $numero;
        $this->bairro = $bairro;
        $this->cidade = $cidade;
        $this->uf = $uf;
        $this->grau = $grau;
    }
    function getId() {
        return $this->id;
    }

    function getNome() {
        return $this->nome;
    }

    function getSobrenome() {
        return $this->sobrenome;
    }

    function getCpf() {
        return $this->cpf;
    }

    function getPFouPJ() {
        return $this->PFouPJ;
    }

    function getEmail() {
        return $this->email;
    }

    function getTelefone() {
        return $this->telefone;
    }

    function getRua() {
        return $this->rua;
    }

    function getNumero() {
        return $this->numero;
    }

    function getBairro() {
        return $this->bairro;
    }

    function getCidade() {
        return $this->cidade;
    }

    function getUf() {
        return $this->uf;
    }

    function getGrau() {
        return $this->grau;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setSobrenome($sobrenome) {
        $this->sobrenome = $sobrenome;
    }

    function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    function setPFouPJ($PFouPJ) {
        $this->PFouPJ = $PFouPJ;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    function setRua($rua) {
        $this->rua = $rua;
    }

    function setNumero($numero) {
        $this->numero = $numero;
    }

    function setBairro($bairro) {
        $this->bairro = $bairro;
    }

    function setCidade($cidade) {
        $this->cidade = $cidade;
    }

    function setUf($uf) {
        $this->uf = $uf;
    }

    function setGrau($grau) {
        $this->grau = $grau;
    }



}
