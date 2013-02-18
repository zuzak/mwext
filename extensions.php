<?php
require_once( "$IP/extensions/ParserFunctions/ParserFunctions.php" );

require("$IP/extensions/ConfirmEdit/ConfirmEdit.php");
require_once("$IP/extensions/ConfirmEdit/Asirra.php");
$wgCaptchaClass = 'Asirra';
require("$IP/extensions/WikiEditor/WikiEditor.php");

# SyntaxHighlight_GeSHi
# https://www.mediawiki.org/wiki/Extension:SyntaxHighlight_GeSHi

require_once("$IP/extensions/SyntaxHighlight_GeSHi/SyntaxHighlight_GeSHi.php");
