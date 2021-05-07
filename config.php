<?php
$directory = __DIR__;
$except_folder = array('dashboard','html');
$folders = array();
if ($handle = opendir($directory)) {
	while (false !== ($entry = readdir($handle))) {
		if($entry === '.' || $entry === '..' || in_array($entry, $except_folder)) continue;
		$_tmp_file = $directory.DIRECTORY_SEPARATOR.$entry;
		if(is_dir($_tmp_file)){
				array_push($folders,$entry);
		}
	}
	closedir($handle);
}


function read_dir($directory,$allow_exts = array()){
	global $_result;
	$_result[basename($directory)] = array();
	if ($handle = opendir($directory)) {
		while (false !== ($entry = readdir($handle))) {
			if($entry === '.' || $entry === '..') continue;
			$_tmp_file = $directory.DIRECTORY_SEPARATOR.$entry;
			if(is_file($_tmp_file)){
				if(allow_ext($entry,$allow_exts) == 1){
					array_push($_result[$directory],$_tmp_file);
				} 
			}else{
				read_dir($_tmp_file,$allow_exts);
			}
		}
		closedir($handle);
	}
	return $_result;
}
function file_ext($file){
	return strtolower(substr($file, strpos($file, '.') + 1));
}
function allow_ext($file,$allow_exts){
	if(count($allow_exts) == 0) return 1;
	$_ext = file_ext($file);
	foreach($allow_exts as $ext){
		if($_ext == $ext) return 1;
	}
	return 0;
}

