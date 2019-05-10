<?php
/**
 * Created by PhpStorm.
 * User: thanh
 * Date: 05/10/2019
 * Time: 03:16 PM
 */

class MY_Uri extends CI_URI
{
	public function __construct()
	{
		parent::__construct();
	}

	function _explode_segments()
	{
		foreach(explode("/", preg_replace("|/*(.+?)/*$|", "\\1", $this->uri_string)) as $val)
		{
			// Filter segments for security
			//$val = trim($this->_filter_uri($val)); //<= disabled
			if ($val != '') $this->segments[] = $val;
		}
	}

	function level($n)
	{
		if($n <= 0) return '';
		$arr = array();
		for($i=1; $i<=$n; $i++)
		{
			$sg = $this->segment($i);
			if($sg != "") $arr[] = $sg;
		}
		return implode("/", $arr);
	}
}
