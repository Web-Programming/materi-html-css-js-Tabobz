<?php
// Sertakan file class-nya
require_once 'App/Produk/Item.php';
require_once 'App/Service/Item.php';

// Menggunakan alias untuk membedakan class Item yang namanya sama
use App\Produk\Item as ProdukItem;
use App\Service\Item as ServiceItem;

// Membuat instance dari class Produk\Item
$produk = new ProdukItem("Laptop Gaming");
echo $produk->info(); 

echo "<br>";

// Membuat instance dari class Service\Item
$service = new ServiceItem("Perbaikan Software");
echo $service->info();
