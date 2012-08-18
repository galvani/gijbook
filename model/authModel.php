<?php

namespace galvani\gijbook\auth;

class gijbookAuthModel {
    private static $instance;
    
    /**
     * @var JUser
     */
    protected $joomlaUser;

    protected function __construct() {
	$this->joomlaUser =& JFactory::getUser();
    }

    /**
     *
     * @return gijbookAuthModel
     */
    public static function getInstance() {
	if (is_null(self::$instance)) self::$instance = new self;
	return self::$instance;
    }
    
    public function isLoggedIn() {
	return $this->joomlaUser->guest ? true : false;
    }
	
}
