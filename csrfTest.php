<?php

require_once __DIR__ /*Path To File*/;

use steveclifton\phpcsrftokens\Csrf;

session_start();

if (!empty($_GET['a'])) {
    echo '<pre>' . print_r($_POST, true) . '</pre>';
    echo 'Verification has been : ' . (Csrf::verifyToken('home') ? 'successful' : 'unsuccessful');
}

?>

<!DOCTYPE html>
<html>
<head><title>Test Script</title></head>
<body>
<form action="?a=submit" method="POST">
    <?php echo Csrf::getInputToken('home') ?>
    <input type="text" name="name" placeholder="Test Input"><br>
    <button>Submit!</button>
</form>
</body>
</html>
