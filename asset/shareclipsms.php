<?php 

class sharesms{
	public function __construct(){
		$link=$_GET['link'];
		$msisdnb=$_GET['msisdnb'];
		//$msisdna=$_GET['msisdna'];
		$msisdna;
		foreach (getallheaders() as $name => $value) {
		    if($name=="MSISDN"){
				$msisdna=$value;
				break;
		    }
		}
		$channel_id = "WAP";
        $api_url="http://10.54.134.1:9000/api/get";
        $url = $api_url . "/shareclipxemlien.jsp?msisdna=$msisdna&msisdnb=$msisdnb&link=$link";
        /*echo $url;
        $response = get_web_page($url);
        echo $response;*/

        $ch = curl_init(); 

        // set url 
        curl_setopt($ch, CURLOPT_URL, $url); 

        //return the transfer as a string 
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 

        // $output contains the output string 
        $output = curl_exec($ch); 
        echo $output;
        // close curl resource to free up system resources 
        curl_close($ch);  
	}
}
new sharesms();

 ?>