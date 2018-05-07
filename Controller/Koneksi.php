<?php

class Koneksi {

    private $h = "localhost";
    private $u = "root";
    private $p = "";
    private $d = "latihan";

    function __construct() {
        try {
            $conn = new PDO("mysql:host=$this->h;dbname=$this->d", $this->u, $this->p);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connected successfully";
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    function getH() {
        return $this->h;
    }

    function getU() {
        return $this->u;
    }

    function getP() {
        return $this->p;
    }

    function getD() {
        return $this->d;
    }

    function setH($h) {
        $this->h = $h;
    }

    function setU($u) {
        $this->u = $u;
    }

    function setP($p) {
        $this->p = $p;
    }

    function setD($d) {
        $this->d = $d;
    }

}
?>