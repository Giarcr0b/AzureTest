<!DOCTYPE html>
<html>
<head>
</head>
<body>
<p>
    <?php
            $myage = 25;
            $name = "Bob";
            $wantedgood = "pies";
            $provisionedActivities = array("Specs", "Mugs", "Sausage Rolls");

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

            echo nl2br ("\n");

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
                    echo " you cant buy " .$wantedgood . " in Aberdeen";

            }

            foreach ($provisionedActivities as $x) {
                print "<p>$x</p>";
            }

            $provisionedActivities[1] = "Hugs";

             foreach ($provisionedActivities as $x) {
                 print "<p>$x</p>";
             }
          ?>
</p>
</body>
</html>

