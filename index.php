<?php
//associative array
$data = [
	'carts' => [
		1 => [
			'ip_address' => '127.0.0.1',
			'product_id' => 2,
			'product_quantity' => 1
		],
		2 => [
			'ip_address' => '127.0.0.1',
			'product_id' => 1,
			'product_quantity' => 1
		],
	],
];
echo '<pre>';
print_r($data);
echo '</pre>';

echo '<hr/>';

$add = [
	'ip_address' => '127.0.0.1',
	'product_id' => 3,
	'product_quantity' => 1
];
//add new value in array of last position
array_push($data['carts'], $add);
// $data['carts'][] = $add;


echo '<pre>';
print_r($data);
echo '</pre>';

echo '<hr/>';

$add = [
	3 => [
		'ip_address' => '127.0.0.1',
		'product_id' => 10,
		'product_quantity' => 11
	]
];

// replace array value as a new array with key
$test = array_replace($data['carts'], $add);

//update array value with array key
$data['carts'][1]['product_quantity'] = 100;

print_r(array_splice($data['carts'][1], 1, 1));
echo '<pre>';
print_r($data);
echo '</pre>';