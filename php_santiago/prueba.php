<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            echo "¡Hola, soy un script de PHP!";
            $expresión=true;            
            echo $_SERVER['HTTP_USER_AGENT'];
        ?>
        <form action="foo.php" method="post">
            Nombre usuario: <input type="text" name="username" /><br />
            Email:  <input type="text" name="email" /><br />
            <input type="submit" name="submit" value="¡Enviarme!" />
        </form>
    </body>
</html>

<?php if ($expresión == true): ?>
  Esto se mostrará si la expresión es verdadera.
<?php else: ?>
  En caso contrario se mostrará esto.
<?php endif; ?>
<?php

$array = array(
    1    => "a",
    "1"  => "b",
    1.5  => "c",
    true => "d",
);
var_dump($array);
?>

  <?php
$array = array(
    "foo" => "bar",
    42    => 24,
    "multi" => array(
         "dimensional" => array(
             "array" => "foo"
         )
    )
);

var_dump($array["foo"]);
var_dump($array[42]);
var_dump($array["multi"]);
?>

<?php //formularios: https://www.php.net/manual/es/tutorial.forms.php ?>
<?php
    echo $_POST['username'];
    echo $_REQUEST['username'];
?>