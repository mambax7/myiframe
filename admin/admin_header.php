<?php
include("../../../mainfile.php");
include(XOOPS_ROOT_PATH."/include/cp_functions.php");
include_once(XOOPS_ROOT_PATH."/kernel/module.php");
include '../../../include/cp_header.php';
if($xoopsUser){
	$xoopsModule = XoopsModule::getByDirname("myiframe");
	if ( !$xoopsUser->isAdmin($xoopsModule->mid()) ) { 
		redirect_header(XOOPS_URL."/",3,_NOPERM);
		exit();
	}
} else {
	redirect_header(XOOPS_URL."/",3,_NOPERM);
	exit();
}

$myts = MyTextSanitizer::getInstance();