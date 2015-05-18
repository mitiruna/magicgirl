<?php
return array(
	'_root_'  => 'top',  // The default route
	'_404_'   => 'welcome/404',    // The main 404 route
	
	'hello(/:name)?' => array('welcome/hello', 'name' => 'hello'),
        'error' => 'welcome/error',
        'infomation/(:any)?' => array('infomation/infomation/$1'),
);