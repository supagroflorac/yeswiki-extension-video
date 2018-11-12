<?php

if (!defined("WIKINI_VERSION"))
{
	die ("accés direct interdit");
}

class ActionVimeo extends WikiniAction
{
    function PerformAction($args, $command)
    {
        if (!isset($args['id'])) {
            return "Le paramètre 'id' manque";
        }

        $id = filter_var($args['id'], FILTER_VALIDATE_INT);
        if ($id === false) {
            return "Le parametre 'id' doit être un entier";
        }
        
        return "<div style='padding:56.25% 0 0 0;position:relative;'><iframe src='https://player.vimeo.com/video/$id?byline=0&portrait=0' style='position:absolute;top:0;left:0;width:100%;height:100%;' frameborder='0' webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div><script src='https://player.vimeo.com/api/player.js'></script>";
    }
}
