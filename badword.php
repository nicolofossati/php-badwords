<?php
$paragraph = $_GET['paragraph'];
$badword = $_GET['badword'];

$paragraph = str_replace($badword, '***', $paragraph);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badwords result</title>
</head>

<body>
    <?php
    echo $paragraph;
    ?>

</body>

</html>