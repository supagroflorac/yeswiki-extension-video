<?php
namespace YesWiki\Vimeo;

if (!defined("WIKINI_VERSION"))
{
	die ("accés direct interdit");
}

$loader = require __DIR__ . '/../vendor/autoload.php';

$parameters = array(
	 'id' => filter_var($this->GetParameter("id"), FILTER_SANITIZE_STRING),
);

$video = new Youtube;
print($video->performAction($parameters));
