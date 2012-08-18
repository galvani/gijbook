<?php
namespace galvani\gijbook\app;

class gijbookApp {
	protected $auth;
	protected static $instance;
	
	protected static function getInstance () {
	    if (is_null(self::$instance)) {
		self::$instance = new self;
	    }
	    return self::$instance;
	}
	
	public static function run($params) {
	    self::getInstance()->setAuthenticator(\galvani\gijbook\auth\gijbookAuthModel::getInstance());
	    var_dump($params);
	}
}
