<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

if(!function_exists('fck_editor'))
{
	function fck_editor($name, $value = '', $height = '300px', $width = '100%', $mode = 'Medium')
	{
		global $editorLoaded;
		$_return = '';
		if(!($editorLoaded))
		{
			$_return.='<script type="text/javascript" src="'.config_item('resource_folder').'ckeditor/ckeditor.js"></script>';
			$editorLoaded = true;
		}
		$_return.="\n";
		$_return.= '<textarea  id="'.$name.'" name="'.$name.'" rows="10" cols="60">'.htmlspecialchars($value).'</textarea>';
		$_return.="\n";
		$_return.= '<script type="text/javascript">CKEDITOR.replace( \''.$name.'\',
					{
						skin : \'office2003\',
						width : \''.$width.'\',
						height : \''.$height.'\',
						filebrowserBrowseUrl : \''.config_item('resource_folder').'ckeditor/ckfinder/ckfinder.html\'
						
					});</script>';
		
		return $_return;
	}
}

$editorLoaded = false;
if(!function_exists('fullEditor'))
{
	function fullEditor($name, $value = '', $height = '300px', $width = '100%')
	{
		global $editorLoaded;
		$_return = '';
		if(!($editorLoaded))
		{
			$_return.='<script type="text/javascript" src="'.config_item('resource_folder').'ckeditor/ckeditor.js"></script>';
			$editorLoaded = true;
		}
		$_return.="\n";
		$_return.= '<textarea  id="'.$name.'" name="'.$name.'" rows="10" cols="60">'.htmlspecialchars($value).'</textarea>';
		$_return.="\n";
		$_return.= '<script type="text/javascript">CKEDITOR.replace( \''.$name.'\',
					{
						skin : \'office2003\',
						width : \''.$width.'\',
						height : \''.$height.'\',
						filebrowserBrowseUrl : \''.config_item('resource_folder').'ckeditor/ckfinder/ckfinder.html\'
						
					});</script>';
		
		return $_return;
	}
}
if(!function_exists('mediumEditor'))
{
	function mediumEditor($name, $value = '', $height = '300px', $width = '100%')
	{
		global $editorLoaded;
		$_return = '';
		if(!($editorLoaded))
		{
			$_return.='<script type="text/javascript" src="'.config_item('resource_folder').'ckeditor/ckeditor.js"></script>';
			$editorLoaded = true;
		}
		$_return.="\n";
		$_return.= '<textarea  id="'.$name.'" name="'.$name.'" rows="10" cols="60">'.htmlspecialchars($value).'</textarea>';
		$_return.="\n";
		$_return.= '<script type="text/javascript">CKEDITOR.replace( \''.$name.'\',
					{
						skin : \'office2003\',
						width : \''.$width.'\',
						height : \''.$height.'\',
						filebrowserBrowseUrl : \''.config_item('resource_folder').'ckeditor/ckfinder/ckfinder.html\',
						toolbar :
						[
							[ \'Bold\', \'Italic\', \'-\', \'NumberedList\', \'BulletedList\', \'-\', \'Link\', \'Unlink\' ],
							[ \'UIColor\' ]
						]
					});</script>';
		
		return $_return;
	}
}
?>