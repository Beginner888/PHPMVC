<?php

include '../Model/Costumer.php';
include '../Controller/Koneksi.php';

class CostumerDAO {

    public function insert() {
        if (isset($_POST['tambah'])) {
            try {
                $c = new Costumer();
                $k = new Koneksi();
                $d = $k->getD();
                $h = $k->getH();
                $u = $k->getU();
                $p = $k->getP();
                $nama = $c->setNama($_POST['nama']);
                $email = $c->setEmail($_POST['email']);
                $usia = $c->setUsia($_POST['usia']);
                $conn = new PDO("mysql:host=$k->;dbname=$d", $u, $p);
                $stmt = $conn->prepare("INSERT INTO costumer (nama, email, usia) VALUES (?, ?, ?)");
                $stmt->bind_param(1, $nama);
                $stmt->bind_param(2, $email);
                $stmt->bind_param(3, $usia);
            } catch (PDOException $e) {
                return $e->errorInfo;
            }
        }
    }

}
