<?php
$secrectKey = ''; // 2Checkout Secret Word
$accountSID = ''; // 2Checkout account number
$totalAmount = 100.00; // Total product price amount

$order_number = $_REQUEST['order_number']; //2Checkout Order Number
$hashedKey = strtoupper(md5($secrectKey . $accountSID . $order_number . $totalAmount));

if ($hashedKey == $_REQUEST['key']) {
	echo 'Payment success';
}
?>