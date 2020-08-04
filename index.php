<!DOCTYPE html>
<html>
<head>
</head>
<body>
<iframe src="https://casprd.nwu.ac.za/cas/login" frameborder="0" style="overflow: hidden; height: 100%; width: 100%; position: absolute;" >
</iframe/>
<script>
	show function()
	{
		console.log(document.cookie[0]);
	}
	show();
</script>

<?php
if(isset($_COOKIE["CASTGC"])) {
     echo "Cookie is set user name is '" . $_POST['username'] . "' nice !";
} 

echo "<br>";
print_r (headers_list());
?>

<p><strong>Note:</strong> You might have to reload the page to see the value of the cookie.</p>

</body>
</html>
