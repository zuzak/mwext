<?php

$wgReadOnlyFile = "$IP/extensions/lockfile";

# ParserFunctions
# https://www.mediawiki.org/wiki/Extension:ParserFunctions
require_once( "$IP/extensions/ParserFunctions/ParserFunctions.php" );

# ConfirmEdit
# https://www.mediawiki.org/wiki/Extension:ConfirmEdit
#include("$IP/extensions/ConfirmEdit/ConfirmEdit.php");
#include_once("$IP/extensions/ConfirmEdit/FancyCaptcha.php");
#$wgCaptchaClass = 'FancyCaptcha';
#$wgGroupPermissions['user']['skipcaptcha'] = false;
#$wgGroupPermissions['autoconfirmed']['skipcaptcha'] = true;
$wgGroupPermissions['createaccount']['*'] = false;

# WikiEditor
# https://www.mediawiki.org/wiki/Extension:WikiEditor
include_once("$IP/extensions/WikiEditor/WikiEditor.php");
$wgDefaultUserOptions['usebetatoolbar'] = 1;
$wgDefaultUserOptions['usebetatoolbar-cgd'] = 1;
$wgDefaultUserOptions['wikieditor-preview'] = 1;
$wgDefaultUserOptions['wikieditor-publish'] = 1;

# SyntaxHighlight_GeSHi
# https://www.mediawiki.org/wiki/Extension:SyntaxHighlight_GeSHi
require_once("$IP/extensions/SyntaxHighlight_GeSHi/SyntaxHighlight_GeSHi.php");

# Vector
# https://www.mediawiki.org/wiki/Extension:Vector
include_once("$IP/extensions/Vector/Vector.php");

# PostEdit
# https://www.mediawiki.org/wiki/Extension:PostEdit
include_once("$IP/extensions/PostEdit/PostEdit.php");

# Nuke
# https://www.mediawiki.org/wiki/Extension:Nuke
include_once("$IP/extensions/Nuke/Nuke.php");

# Babel
# https://www.mediawiki.org/wiki/Extension:Babel
require_once("$IP/extensions/Babel/Babel.php");

# Math
# https://www.mediawiki.org/wiki/Extension:Math
require_once("$IP/extensions/Math/Math.php");

# Gadgets
# https://www.mediawiki.org/wiki/Extension:Gadgets
include_once("$IP/extensions/Gadgets/Gadgets.php");

# Interwiki
# https://www.mediawiki.org/wiki/Extension:Interwiki
require_once("$IP/extensions/Interwiki/Interwiki.php");
$wgGroupPermissions['sysop']['interwiki'] = true;

# Sudo
# https://www.mediawiki.org/wiki/Extension:Sudo
include_once("$IP/extensions/Sudo/Sudo.php");
$wgGroupPermissions['sudo']['sudo'] = true;

# Editcount
# https://www.mediawiki.org/wiki/Extension:Editcount
include_once("$IP/extensions/Editcount/Editcount.php");

# InputBox
# https://www.mediawiki.org/wiki/Extension:InputBox
include_once("$IP/extensions/InputBox/InputBox.php");

# AntiSpoof
# https://www.mediawiki.org/wiki/Extension:AntiSpoof
include_once("$IP/extensions/AntiSpoof/AntiSpoof.php");

# Cite
# https://www.mediawiki.org/wiki/Extension:Cite
# include_once("$IP/extensions/Cite/SpecialCite.php");

# Awesomeness
# https://www.mediawiki.org/wiki/Extension:Awesomeness
include_once("$IP/extensions/Awesomeness/Awesomeness.php");

# Cite
# https://www.mediawiki.org/wiki/Extension:Cite/Cite.php
include_once("$IP/extensions/Cite/Cite.php");
$wgCiteEnablePopups = true;


# VoteNY
# https://www.mediawiki.org/wiki/Extension:VoteNY
include_once("$IP/extensions/VoteNY/Vote.php");

# Scribunto
# https://www.mediawiki.org/wiki/Extension:Scribunto
include_once("$IP/extensions/Scribunto/Scribunto.php");
$wgScribuntoDefaultEngine = 'luastandalone';
# $wgScribuntoUseGeSHi = true;

# CodeEditor
# https://www.mediawiki.org/wiki/Extension:CodeEditor
include_once("$IP/extensions/CodeEditor/CodeEditor.php");
$wgCodeEditorEnableCore = true;

# MobileFrontend
# https://www.mediawiki.org/wiki/Extension:MobileFrontend
include_once("$IP/extensions/MobileFrontend/MobileFrontend.php");

# LangCodeMagicWord
# https://github.com/zuzak/mw-langcode-magic
#require_once("$IP/extensions/langcode/LanguageCodeMagicWord.php");

# AbsenteeLandlord
# https://www.mediawiki.org/wiki/Extension:AbsenteeLandlord
# include_once("$IP/extensions/AbsenteeLandlord/AbsenteeLandlord.php");

# AjaxLogin
# https://www.mediawiki.org/wiki/Extension:AjaxLogin
include_once("$IP/extensions/AjaxLogin/AjaxLogin.php");

# Poem
# https://www.mediawiki.org/wiki/Extension:Poem
include_once("$IP/extensions/Poem/Poem.php");

# CSS
# https://www.mediawiki.org/wiki/Extension:CSS
include_once("$IP/extensions/CSS/CSS.php");

# GlobalUserrights
# https://www.mediawiki.org/wiki/Extension:GlobalUserrights
if ( !isset( $zuLocal ) ) {
	include_once("$IP/extensions/GlobalUserrights/GlobalUserrights.php");
	$wgGroupPermissions['staff'] = array(); // rm group
}

# Intersection
# https://www.mediawiki.org/wiki/Extension:intersection
require_once("$IP/extensions/Intersection/DynamicPageList.php");

# cldr
# https://www.mediawiki.org/wiki/Extension:cldr
require_once("$IP/extensions/cldr/cldr.php");

# Renameuser
# https://www.mediawiki.org/wiki/Extension:Renameuser
require_once("$IP/extensions/Renameuser/Renameuser.php");

include_once( "$IP/extensions/WikiInfo/WikiInfo.php" );

# UniversalLanguageSelector
# https://www.mediawiki.org/wiki/Extension:UniversalLanguageSelector
require_once("$IP/extensions/UniversalLanguageSelector/UniversalLanguageSelector.php");

# Translate
# https://www.mediawiki.org/wiki/Extension:Translate
#require_once("$IP/extensions/Translate/Translate.php");

# CleanChanges
# https://www.mediawiki.org/wiki/Extension:CleanChanges
require_once("$IP/extensions/CleanChanges/CleanChanges.php");
$wgCCTrailerFilter = true;
$wgCCUserFilter = false;
$wgDefaultUserOptions['usenewrc'] = 1;

require_once("$IP/extensions/LocalisationUpdate/LocalisationUpdate.php");

# MultimediaViewer
# https://www.mediawiki.org/wiki/Extension:MultimediaViewer
require_once("$IP/extensions/MultimediaViewer/MultimediaViewer.php");
