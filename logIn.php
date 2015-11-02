
<!DOCTYPE html>
<html>
<head>
</head>
<body>
<p>
<h1>LOG IN PAGE</h1>
</p>
<p>
<form action=="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    <label>User Name: </label><input type="text" name="name">
    <label>Password: </label><input type="text" name="pass">
    <input type="submit" value="Log On">

</form>
</p>


</body>
</html>