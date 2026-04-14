<?php
namespace App\Service;

class Item {
    public $nama;

    public function __construct($nama) {
        $this->nama = $nama;
    }

    public function info() {
        return "Ini adalah Item Service: " . $this->nama;
    }
}