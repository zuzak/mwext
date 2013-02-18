<?php

# ParserFunctions
# https://www.mediawiki.org/wiki/Extension:ParserFunctions
require_once( "$IP/extensions/ParserFunctions/ParserFunctions.php" );

# ConfirmEdit
# https://www.mediawiki.org/wiki/Extension:ConfirmEdit
require("$IP/extensions/ConfirmEdit/ConfirmEdit.php");
require_once("$IP/extensions/ConfirmEdit/Asirra.php");
$wgCaptchaClass = 'Asirra';
$wgGroupPermissions['user']['skipcaptcha'] = false;
$wgGroupPermissions['autoconfirmed']['skipcaptcha'] = true;

# WikiEditor
# https://www.mediawiki.org/wiki/Extension:WikiEditor
require("$IP/extensions/WikiEditor/WikiEditor.php");

# SyntaxHighlight_GeSHi
# https://www.mediawiki.org/wiki/Extension:SyntaxHighlight_GeSHi
require_once("$IP/extensions/SyntaxHighlight_GeSHi/SyntaxHighlight_GeSHi.php");
