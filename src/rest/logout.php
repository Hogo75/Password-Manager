<?php

require_once dirname(__FILE__).'/../function/sqllink.php';
require_once dirname(__FILE__).'/../function/ajax.php';
if (session_status() === PHP_SESSION_ACTIVE) invalidateSession();
//set the cookie so that other open pages get logged out too
ajaxSuccess();
