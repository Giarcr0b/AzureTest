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
    <label>Name: </label><input type="text" name="name">
    <br>
    <label>D.O.B: </label><input type="date" name="dob">
    <br>
    <label>Gender: </label>
    <input type="radio" name="gender" value="male" checked> Male
    <input type="radio" name="gender" value="female"> Female
    <br>
    <input type="checkbox" name="power1" value="fly"> I can Fly
    <br>
    <input type="checkbox" name="power2" value="invunrable"> I am invunrable
    <br>
    <input type="checkbox" name="power3" value="strength"> I have Super Strength
    <br>
    <input type="submit" value="Submit">

</form>
</body>
</html>