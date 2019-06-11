<?php
namespace YesWiki\Video;

class TemplateYoutube extends Template
{
    private $templatesPath = 'tools/video/templates/youtube/';

    public function __construct()
    {
        $twigLoader = new \Twig_Loader_Filesystem($this->templatesPath);
        $this->twig = new \Twig_Environment($twigLoader);
   }
}
