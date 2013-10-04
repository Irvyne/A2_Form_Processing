<?php
/**
 * Created by Thibaud BARDIN (Irvyne)
 * This code is under the MIT License (https://github.com/Irvyne/license/blob/master/MIT.md)
 */

if (isset($_POST['submit'])) {
    $array = array();
    if (!empty($_POST['name'])) {
        $array['name'] = $_POST['name'];
    }
    var_dump($array);

    /* Petit rappel de la POO */
    //$objet = new Object($array);
    //$objetManager = new ObjetManager($pdo);
    //$objetManager->add($objet);
}

?>
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <form method="post">
        <input type="text" name="name" placeholder="Ici, le nom !">
        <input type="submit" name="submit" value="I Want To Create It !">
    </form>
</body>
</html>