<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Cykly</title>
        <link rel="stylesheet" type="text/css" media="all" href="css/stylesheet.css" />
    </head>
    <body>
         <p>

        <?php
          for ($i=0; $i < 10; $i++)
          {
            $calc1 = $i * $i;
            echo "$i * $i = $calc1 <br />";
          }
        ?>

          </p>
          <hr />
          <p>

        <?php
          for ($i2=20; $i2 > 1; $i2--)
          {
            echo "$i2 sekund <br />";
          }
          echo "bum";
        ?>

          </p>
          <hr />
          <p>

        <?php
          $calc2;
          $num1 = 5;
          for ($i3=0; $i3 <= 10 ; $i3++)
          {
            $calc2 = $i3 * $num1;
            echo "$i3 * $num1 = $calc2 <br /> ";
          }
        ?>

    </body>
</html>
