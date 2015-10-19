<!DOCTYPE html>
<html>
<head>
</head>
<body>
<p>
    <?php
            $myage = 18;
            $name = "Bob";

            if ($myage<16) {
                print $name . " cant buy anything.";
            }
            elseif($myage<18) {
                print $name . " can buy specs";
            }
            elseif($myage<21){
                print $name . " can buy mugs.";
            }
            else {
                print $name . " can buy sausage rolls.";
            }
          ?>
</p>
</body>
</html>

