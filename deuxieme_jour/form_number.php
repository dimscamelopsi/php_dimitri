<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <p><input type="number" name="ht" id=""></p>
        <p><input type="number" name="nombre" id=""></p>
        <p><input type="number" name="taux" id=""></p>
        <p><input type="submit" value="calculer" name="submit"></p>
    </form>
</body>
</html>

<?php
    if(isset($_POST["submit"])){
        if(!empty($_POST['ht']) && !empty($_POST['nombre']) & !empty($_POST['taux'])){
                echo "Le prix TTC est égal à ".($_POST['ht']*$_POST['nombre'])*(1+($_POST['taux']/100))."€";
            }
    }
?>