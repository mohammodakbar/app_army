<?php
	
	define('DS', DIRECTORY_SEPARATOR);
	define('ROOT',dirname(__FILE__));
	
	//Load config and helpers functions
	require_once(ROOT . DS . 'config' . DS . 'config.php' );
	require_once(ROOT . DS . 'app' . DS . 'lib' . DS . 'helpers' . DS . 'helpers.php'  );
	
	//Auto load classess
	
	function autoload($className){
		
		if(file_exists(ROOT. DS . 'core' . DS . $className . '.php')){
			require_once(ROOT. DS . 'core' . DS . $className . '.php');
		}elseif(file_exists(ROOT. DS . 'app' . DS . 'controllers'. DS . $className . '.php')){
			require_once(ROOT. DS . 'app' . DS . 'controllers'. DS . $className . '.php');
		}elseif(file_exists(ROOT. DS . 'app' . DS . 'views'. DS . $className . '.php')){
			require_once(ROOT. DS . 'app' . DS . 'views'. DS . $className . '.php');
		}elseif(file_exists(ROOT. DS . 'app' . DS . 'models'. DS . $className . '.php')){
			require_once(ROOT. DS . 'app' . DS . 'models'. DS . $className . '.php');
		}
	}
	$at = spl_autoload_register('autoload'); 
	
	session_start();
	$url = isset($_SERVER['PATH_INFO']) ? explode('/', ltrim($_SERVER['PATH_INFO'],'/')): [];

	//Route the request
	Router::route($url);
	
	