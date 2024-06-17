<html>
<body>
<form name="form" action="" method="post">
    <input type="text" name="name" value=" ">
    <input type="number" name="age" value=" ">
    <input type="number" name="operand1" value="0">
    <input type="number" name="operand2" value="0">
    <button type="submit">Save</button>
</form>
</body>
<?php
$name = $_POST['name'];
$age = $_POST['age'];

echo
"<p>Hello! My name is '$name'</p>",
"<p>I`m is '$age'</p>";

$operand1 = $_POST['operand1']; $operand2 = $_POST['operand2']; $result = $operand1+$operand2;
echo "<text>'$operand1'+'$operand2'='$result'</text>>"
?>


</html>
