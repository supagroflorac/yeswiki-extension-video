<?php
namespace YesWiki\Vimeo;

class TemplateVimeo extends Template
{
    private $templatesPath = 'tools/vimeo/templates/vimeo/';

    public function __construct()
    {
        $twigLoader = new \Twig_Loader_Filesystem($this->templatesPath);
        $this->twig = new \Twig_Environment($twigLoader);
   }
}
