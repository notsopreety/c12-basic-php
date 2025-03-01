<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Samir-PHP</title>
</head>
<body>
    <?php
    $n = 69;
    $sum = 0;
    $i = 1;
    do {
        $sum += $i;
        $i++;
    } while ($i <= $n);
    echo "Sum of first $n natural numbers is: $sum";
    ?>
</body>
</html>

