<?php

function produk($id,$name,$price,$available,$shipping){
	$produk = (object) array();
	
	$produk->itemId = $id;
	$produk->itemName = $name;
	$produk->price = $price;
	$produk->availableColorAndSize = $available;
	$produk->freeShipping = $shipping;

	return json_encode($produk);
}

$availableColorAndSize = array(
	array(
		'color' => 'red',
		'size' => 'S,M,L'
	), 
	array(
		'color' => 'solid black',
		'size' => 'M,L'
	)
);

echo produk('12341822','basic t-shirt',70000,$availableColorAndSize,false);
?>