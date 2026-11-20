<?php

require('./PropertyConstant.php');

use Pbo\Marketplace\produk;

//object
$produk = new Produk();

$produk ->setKode("P0001")
        ->setNama("Laptop")
        ->setHarga(10000000)
        ->setStok(5);


//total

echo "Produk: ". $produk->getNama();
echo "<br/>";

echo "Harga: ". $produk->getHarga();
echo "<br/>";

echo "Stok: ". $produk->getStok();
echo "<br/>";

echo "Pajak: ". $produk->pajak();
echo "<br/>";

echo "total harga setelah pajak: Rp.". $produk->total();