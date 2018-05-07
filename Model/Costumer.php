<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Costumer
 *
 * @author ASUS ROG GL552JX
 */
class Costumer {

    private $id;
    private $nama;
    private $email;
    private $usia;

    function getId() {
        return $this->id;
    }

    function getNama() {
        return $this->nama;
    }

    function getEmail() {
        return $this->email;
    }

    function getUsia() {
        return $this->usia;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNama($nama) {
        $this->nama = $nama;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setUsia($usia) {
        $this->usia = $usia;
    }



}
