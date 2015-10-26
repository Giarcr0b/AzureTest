<!DOCTYPE html>
<html>
<head>
</head>
<body>
<h1>Where would you like to say Hello?</h1>
<p>
    <a href="helloPrinter.php?query=Earth">Earth</a>
</p>
<p>
    <a href="helloPrinter.php?query=Mars">Mars</a>
</p>
<p>
    <a href="helloPrinter.php?query=Uranus">Uranus</a>
</p>

<form action="formResponse.php" method="post">
    <label>Persons Name: </label><input type="text" name="Persons Name">
    <label>Date of Birth: </label><input type="date" name="dob">

</form>
</body>
</html>