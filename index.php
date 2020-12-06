<?php


//phpinfo();

//exit;
define ('APP', 'app/');

define ('Func_Folder', 'function/');

require_once APP . 'config.php';



require_once CLS . 'class.dao.php';
require_once CLS . 'class.img.php';
require_once CLS . 'class.phpmailer.php';

$dao = new DAO;

require_once APP . 'class.controller.php';
require_once Func_Folder . 'block.php';
require_once Func_Folder . 'a.php';
require_once Func_Folder . 'label.php';
require_once Func_Folder . 'menu.php';
//arr( $_SERVER);
new Controller();


