<!DOCTYPE html>
<html>
<head>

<script>

</script>
</head>
<body>

<p>
<?php
session_start();
echo session_id(),'<br>';
?>
<?php
print_r($_SESSION);
?>
<?php
if(isset($_SESSION["id"])){
     echo "Cookie is set user name is '" . $_SESSION["id"] . "' nice !";
} 
if (isset($_POST['username'])){
	echo $_POST['username'];
}
?>
</p>
<p><strong>Note:</strong> You might have to reload the page to see the value of the cookie.</p>

</body>
</html>
