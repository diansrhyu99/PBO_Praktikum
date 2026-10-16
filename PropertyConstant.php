<?php


class produk {
    //property
    public string $kode;
    public string $nama;
    public int $harga;
    public int $stok;

    //constant
    public const PAJAK = 0.11;

}


//object

$produk = new produk();

$produk->kode = 'A001';

$produk->nama = 'Laptop';

$produk->harga = 1000000;

$produk->stok = 5;


//hitung pajak

$pajak = produk::PAJAK * 100; // 1,1jt

$jumlahpajak = $produk->harga * produk::PAJAK;


//total

$total = $produk->harga + $jumlahpajak;


echo "Produk: ". $produk->nama;

echo "Harga: ". $produk->harga;

echo "Stok: ". $produk->stok;

echo "Pajak: ". $pajak. "%";

echo "Total Harga: Rp". $total;