<?php

setcookie("test_cookie", "test", time() + 3600, '/');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tes Cookie</title>
</head>
<body>
    <?php
    if(count($_COOKIE) > 0){
        echo "Cookies enabled.";
    }else{
        echo "Cookies disabled.";
    }
    ?>
</body>
</html>