<?php
echo 'Array search <br/>';
$data = [
	'carts' => [
		0 => [
			'ip_address' => '127.0.0.1',
			'product_id' => 2,
			'product_quantity' => 1
		],
		1 => [
			'ip_address' => '127.0.0.1',
			'product_id' => 1,
			'product_quantity' => 1
		],
		2 => [
			'ip_address' => '127.0.0.1',
			'product_id' => 3,
			'product_quantity' => 11
		],
	],
];
// echo '<pre>';
// array_splice($data['carts'], 1, 1);

// print_r($data);
// echo '</pre>';

foreach ($data['carts'] as $cart_id => $cart_item) {
	//array value update
	if ($cart_item['product_id'] == 2) {
		echo $cart_item['product_quantity'];
		$data['carts'][$cart_id]['product_quantity'] += 1;
	}

	//array specific value delete
	if ($cart_id == 1) {
		array_splice($data['carts'], $cart_id, 1);
	}
}

echo '<pre>';
print_r($data);