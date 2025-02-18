<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXEMPLO 03  - PHP</title>
</head>
<body>

<?php
   $nome = "Pedro";
   

?>

<p>Oi eu sou: <?php echo "$nome"; ?></p>
<p>Oi eu sou: <?php echo $nome; ?></p>
<?php echo"<p> Oi eu sou: $nome </p>" ?> 
<?php echo"<p> Oi eu sou: " . $nome . "</p>" ?> 



 
</body>
</html>