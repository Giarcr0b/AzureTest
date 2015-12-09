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
            $provisionedActivities = array("Specs", "Mugs", "Sausage Holls");

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

           // unset($provisionedActivities[2]);

             foreach ($provisionedActivities as $x) {
                print "<p>$x</p>";
               }

            for ($i = 1; $i < 31; $i++) {

                print nl2br ("\nOn day " .$i . " of the Month ");

                if (($i % 2) == 0) {

                    print $provisionedActivities[0] . " are available ";

                }

                if (($i % 4) == 0) {

                    print "and " . $provisionedActivities[2] . " are available";
                }

                elseif (($i % 3) == 0) {

                    print $provisionedActivities[1] . " are available";
                }

                else {
                    print "no products are available";
                }
            }

    $db = new mysqli("eu-cdbr-azure-north-d.cloudapp.net", "b3db0ca6efa7a5", "eb1ce59a", "DataBase_1109847");

    if ($db->connect_errno) {
        die('Connectfailed[' . $db->connect_error . ']');
    }

    $sql_query = "SELECT * FROM marvelmovies WHERE productionStudio = '$query'";

    $result = $db->query($sql_query);
echo "<h1>Which Studios Super Hero Films do you want to display?</h1>";

    while($row = $result->fetch_array()){
        echo "<p>".
    "<a href="."'superHero.php?query='".$row['productionStudio'].">".$row['productionStudio']."</a>".
"</p>";
    }

    $result->close();

    $db->close();
          ?>


</p>
<p>
    <a href="helloSelector.php">Hello World</a>
</p>


<p>
    "<a href=""superHero.php?query=Universal Studios">$row['productionStudio']"</a>"
</p>
<p>
    <a href="superHero.php?query=20th Century Fox">20th Century Fox</a>
</p>
<p>
    <a href="superHero.php?query=New Line Cinema">New Line Cinema</a>
</p>
</body>
</html>

