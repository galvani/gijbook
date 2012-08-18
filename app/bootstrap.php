<?php

//include model file
require_once (realpath(dirname(__FILE__).DS.'../model/authModel.php'));
require_once (dirname(__FILE__).DS.'app.php');

\galvani\gijbook\app\gijbookApp::run();