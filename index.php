<!DOCTYPE html>
<html>
<head>
</head>
<body>
<p>
    <?php
            $myage = 25;
            $name = "Bob";
            $wantedgood = "mugs";

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

            switch ($wantedgood) {

                case "specs":
                    echo "You have to over 16 to buy " . $wantedgood;
                    break;
                case "mugs":
                    echo "You have to be over 18 to buy " . $wantedgood;
                    break;
                case "sausage roll":
                    echo "you have to be over 21 to buy " . $wantedgood;
                    break;
                default:
                    echo "you cant buy " .$wantedgood . " in Aberdeen";

            }
          ?>
</p>
</body>
</html>

