<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dices random</title>
</head>
<body>
    <?php
    function dice($Score = FALSE){
        $d1 = rand(1,6);    
        $d2 = rand(1,6);
        return '2 Dices roll  '.($Score ? ' => '.$d1.'+ '.$d2 : '').' => Total '.$d1+$d2;
        }
    ?>
    <h1>without score</h1>
    
    <?php echo dice();?>
    <h2>With score</h2>
    
    <?php echo dice(true);?>
</body>
</html>