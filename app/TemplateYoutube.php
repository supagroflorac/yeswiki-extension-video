<?php
namespace YesWiki\Vimeo;

class TemplateYoutube extends Template
{
    private $templatesPath = 'tools/vimeo/templates/youtube/';

    public function __construct()
    {
        $twigLoader = new \Twig_Loader_Filesystem($this->templatesPath);
        $this->twig = new \Twig_Environment($twigLoader);
   }
}
