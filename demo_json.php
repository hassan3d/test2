<!DOCTYPE html>
<html>
<body>

<h2>Convert a string written in JSON format, into a JavaScript object.</h2>

<p id="demo"></p>
<?php 
echo  $x = $_GET['x'];
//die();
?>
<script>

//var myJSON = '{ "name":"John", "age":31, "city":"New York" }';
var myJSON = <?php echo $x; ?>;
var myObj = JSON.parse(myJSON);
document.getElementById("demo").innerHTML = myObj.name;

</script>

</body>
</html>
