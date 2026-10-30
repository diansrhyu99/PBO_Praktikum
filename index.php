<?php

require('./PropertyConstant.php');

use Pbo\Marketplace\produk;

//object
$produk = new Produk('P001', 'laptop', '1000000', '5');


//total

echo "Produk: ". $produk->nama;
echo "<br/>";

echo "Harga: ". $produk->harga;
echo "<br/>";

echo "Stok: ". $produk->stok;
echo "<br/>";

echo "Pajak: ". $produk->pajak();
echo "<br/>";

echo "total harga setelah pajak: Rp.". $produk->total();