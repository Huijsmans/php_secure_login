<?php     
    session_start();
    session_destroy();
      
    header("Location: http://localhost/php_secure_login/public/index.php")
;?>