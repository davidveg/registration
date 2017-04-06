<?php
return array(
	'_root_'  => 'about/index',  // The default route
	'_404_'   => 'welcome/404',    // The main 404 route
	'registration' => 'registration/index',
	'about_me' => 'about/index',
	'contact_me' => 'contact/index',

	'hello(/:name)?' => array('welcome/hello', 'name' => 'hello'),
);
