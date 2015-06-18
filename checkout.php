<!DOCTYPE html>
<html>
<head>
	<title>Inline Checkout Form</title>
	<script src="https://www.2checkout.com/static/checkout/javascript/direct.min.js"></script>
</head>
<body>
<h3>Click on below button to payment process</h3>
<form action='https://www.2checkout.com/checkout/purchase' method='post'>
<!-- Below form tag for demo payment check -->
<!-- <form action='https://sandbox.2checkout.com/checkout/purchase' method='post'> --> 
<input type='hidden' name='sid' value='1303908' />
<input type='hidden' name='mode' value='2CO' />
<input type='hidden' name='li_0_type' value='product' />
<input type='hidden' name='li_0_name' value='invoice123' />
<input type='hidden' name='li_0_price' value='25.99' />
<input type='hidden' name='card_holder_name' value='Checkout Shopper' />
<input type='hidden' name='street_address' value='123 Test Address' />
<input type='hidden' name='street_address2' value='Suite 200' />
<input type='hidden' name='city' value='Columbus' />
<input type='hidden' name='state' value='OH' />
<input type='hidden' name='zip' value='43228' />
<input type='hidden' name='country' value='USA' />
<input type='hidden' name='email' value='example@2co.com' />
<input type='hidden' name='phone' value='614-921-2450' />
<input name='submit' type='submit' value='Pay by Card' />
</form>
</body>
</html>
