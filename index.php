<?php
$dpt = array ('Aisne' => '02', 'Nord' => '59' , 'Oise' => '60' , 'Pas-de-Calais' => '62' , 'Somme' => '80' );
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>ex4</title>
  </head>
  <body>
      <p>
        <?php
        foreach($dpt as $cle => $element)
        {
            echo $cle . ' a le numero de département ' . $element . '<br />';
        }
        ?>
      </p>
  </body>
</html>
