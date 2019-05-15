<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* Languages parse
* version 1
* <sincos.net@gmail.com>
*/
class MY_URI extends CI_URI
{
	public function __construct()
	{
		parent::__construct();
	}	
	
	/**
	 * overwrite
	 */
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