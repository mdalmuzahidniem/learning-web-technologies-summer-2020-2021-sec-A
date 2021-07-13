<html>
<head>
<title>
Add Product
</title>
</head>
<body>

<fieldset>
<legend>
ADD PRODUCT
</legend>
<form method="get" action="checkAddProduct.php">
<table>
<tr><td>Name</td></tr>
<tr><td><input type="text" name="name"></td></tr>
<tr><td>Buying Price</td></tr>
<tr><td><input type="number" name="bPrice"></td></tr>
<tr><td>Selling Price</td></tr>
<tr><td><input type="number" name="sPrice"></td></tr>

</table>
<hr>
<input type="checkbox" name="display" value="yes"> Display
<hr>
<input type="submit" name="submit" value="Submit">
</form>
</fieldset>

</body>
</html>