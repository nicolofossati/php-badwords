<?php
$paragraph = $_GET['paragraph'];
$badword = $_GET['badword'];

$blurred_paragraph = str_replace($badword, '***', $paragraph);
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
    <div>
        <?php
        echo "Il paragrafo è: \"" . $paragraph . "\" e la sua lunghezza è di: " . strlen($paragraph) . "caratteri";
        ?>
    </div>
    <br />
    <br />
    <br />
    <div>
        <?php
        echo "Invece il paragrafo censurato è: \"" . $blurred_paragraph . "\" e la sua lunghezza è di: " . strlen($blurred_paragraph) . "caratteri";
        ?>
    </div>


</body>

</html>