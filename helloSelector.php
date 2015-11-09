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
    <label>Fore Name: </label><input type="text" name="forename">
    <label>Surname: </label><input type="text" name="surname">
    <input type="submit" value="Submit">

</form>
</body>
</html>