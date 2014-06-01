<?php

$wgReadOnlyFile = "$IP/extensions/lockfile";

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
require_once("$IP/extensions/WikiEditor/WikiEditor.php");
$wgDefaultUserOptions['usebetatoolbar'] = 1;
$wgDefaultUserOptions['usebetatoolbar-cgd'] = 1;
$wgDefaultUserOptions['wikieditor-preview'] = 1;
$wgDefaultUserOptions['wikieditor-publish'] = 1;

# SyntaxHighlight_GeSHi
# https://www.mediawiki.org/wiki/Extension:SyntaxHighlight_GeSHi
require_once("$IP/extensions/SyntaxHighlight_GeSHi/SyntaxHighlight_GeSHi.php");

# Vector
# https://www.mediawiki.org/wiki/Extension:Vector
require_once("$IP/extensions/Vector/Vector.php");

# PostEdit
# https://www.mediawiki.org/wiki/Extension:PostEdit
require_once("$IP/extensions/PostEdit/PostEdit.php");

# intersection
# https://www.mediawiki.org/wiki/Extension:intersection
require_once("$IP/extensions/intersection/DynamicPageList.php");

# Nuke
# https://www.mediawiki.org/wiki/Extension:Nuke
require_once("$IP/extensions/Nuke/Nuke.php");

# Babel
# https://www.mediawiki.org/wiki/Extension:Babel
require_once("$IP/extensions/Babel/Babel.php");

# Math
# https://www.mediawiki.org/wiki/Extension:Math
require_once("$IP/extensions/Math/Math.php");

# Gadgets
# https://www.mediawiki.org/wiki/Extension:Gadgets
require_once("$IP/extensions/Gadgets/Gadgets.php");

# Interwiki
# https://www.mediawiki.org/wiki/Extension:Interwiki
require_once("$IP/extensions/Interwiki/Interwiki.php");
$wgGroupPermissions['sysop']['interwiki'] = true;

# Sudo
# https://www.mediawiki.org/wiki/Extension:Sudo
require_once("$IP/extensions/Sudo/Sudo.php");
$wgGroupPermissions['sudo']['developer'] = true;

# Editcount
# https://www.mediawiki.org/wiki/Extension:Editcount
require_once("$IP/extensions/Editcount/Editcount.php");

# InputBox
# https://www.mediawiki.org/wiki/Extension:InputBox
require_once("$IP/extensions/InputBox/InputBox.php");

# AntiSpoof
# https://www.mediawiki.org/wiki/Extension:AntiSpoof
require_once("$IP/extensions/AntiSpoof/AntiSpoof.php");

# Cite
# https://www.mediawiki.org/wiki/Extension:Cite
# require_once("$IP/extensions/Cite/SpecialCite.php");

# Awesomeness
# https://www.mediawiki.org/wiki/Extension:Awesomeness
require_once("$IP/extensions/Awesomeness/Awesomeness.php");

# Cite
# https://www.mediawiki.org/wiki/Extension:Cite/Cite.php
require_once("$IP/extensions/Cite/Cite.php");
$wgCiteEnablePopups = true;


# VoteNY
# https://www.mediawiki.org/wiki/Extension:VoteNY
require_once("$IP/extensions/VoteNY/Vote.php");

# Scribunto
# https://www.mediawiki.org/wiki/Extension:Scribunto
require_once("$IP/extensions/Scribunto/Scribunto.php");
$wgScribuntoDefaultEngine = 'luastandalone';
# $wgScribuntoUseGeSHi = true;

# CodeEditor
# https://www.mediawiki.org/wiki/Extension:CodeEditor
require_once("$IP/extensions/CodeEditor/CodeEditor.php");
$wgCodeEditorEnableCore = true;

# MobileFrontend
# https://www.mediawiki.org/wiki/Extension:MobileFrontend
require_once("$IP/extensions/MobileFrontend/MobileFrontend.php");

# LangCodeMagicWord
# https://github.com/zuzak/mw-langcode-magic
require_once("$IP/extensions/langcode/LanguageCodeMagicWord.php");

# StickToThatLanguage
# https://www.mediawiki.org/wiki/Extension:StickToThatLanguage
require_once("$IP/extensions/StickToThatLanguage/StickToThatLanguage.php");
$egSTTLanguageDisplaySelector = false;

# AbsenteeLandlord
# https://www.mediawiki.org/wiki/Extension:AbsenteeLandlord
require_once("$IP/extensions/AbsenteeLandlord/AbsenteeLandlord.php");

# AjaxLogin
# https://www.mediawiki.org/wiki/Extension:AjaxLogin
require_once("$IP/extensions/AjaxLogin/AjaxLogin.php");

# Poem
# https://www.mediawiki.org/wiki/Extension:Poem
require_once("$IP/extensions/Poem/Poem.php");

# CSS
# https://www.mediawiki.org/wiki/Extension:CSS
require_once("$IP/extensions/CSS/CSS.php");

# GlobalUserrights
# https://www.mediawiki.org/wiki/Extension:GlobalUserrights
require_once("$IP/extensions/GlobalUserrights/GlobalUserrights.php");

# GlobalUserrights
# https://www.mediawiki.org/wiki/Extension:GlobalUserrights
require_once("$IP/extensions/GlobalUserrights/GlobalUserrights.php");
