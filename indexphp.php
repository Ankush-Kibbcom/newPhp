        <?php
        $token = openssl_random_pseudo_bytes(64);
        $token = bin2hex($token);
        echo $token;
		
		$header = array();
		$header [] = '';
		$curl = curl_init();
		
		curl_setopt($curl,CURLOPT_URL,'');
		curl_setopt($curl,CURLOPT_HTTPHEADER,$header);
		$result = curl_exec($curl);
		$result = json_decode($result);
		echo $result;
        ?>