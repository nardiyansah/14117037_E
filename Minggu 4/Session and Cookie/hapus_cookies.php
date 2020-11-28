<?php
setcookie("user", "", time() - 3600);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Hapus Cookies</title>
</head>
<body>
    <?php
        echo "Cookie 'user' terhapus.";
    ?>
</body>
</html>