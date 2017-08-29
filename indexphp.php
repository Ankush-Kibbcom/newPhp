        <?php
        $token = openssl_random_pseudo_bytes(64);
        $token = bin2hex($token);
        echo $token;
        ?>