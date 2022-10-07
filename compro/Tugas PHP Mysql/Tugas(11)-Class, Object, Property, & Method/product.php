<?php


class Product{

	//property
	public $nama, 
		   $kategori,
		   $harga,
		   $qty;
	

	//set method
	public function setNama($nama){
		$this->nama = $nama;
	}

	public function setHarga($harga){
		$this->harga = $harga;
	}

	public function setKategori($kategori){
		$this->kategori = $kategori;
	}

	public function setQty($qty){
		$this->qty = $qty;
	}


	//get method
	public function getNama(){
		return $this->nama;
	}

	public function getHarga(){
		return $this->harga;
	}

	public function getKategori(){
		return $this->kategori;
	}

	public function getQty(){
		return $this->qty;
	}


}

 //instansiasi class Product
 $produk = new Product();

 $produk->setNama("Buku");
 $produk->setHarga(5000);
 $produk->setKategori("ATK");
 $produk->setQty(50);

 echo "Nama Product : " . $produk->getNama() . "<br>";  
 echo "Price : Rp. " . $produk->getHarga() . "<br>";
 echo "Kategory : " . $produk->getKategori() . "<br>";
 echo "Quantity : " . $produk->getQty();