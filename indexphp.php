        <?php
		
		$header = array();
		$header [] = 'Authorization: JWT';
		$curl = curl_init();
		
		curl_setopt($curl,CURLOPT_URL,'');
		curl_setopt($curl,CURLOPT_HTTPHEADER,$header);
		$result = curl_exec($curl);
		$result = json_decode($result);
		echo $result;
        ?>