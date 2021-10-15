<?php
namespace YesWiki\Video;

class TemplateVimeo extends Template
{
    private $templatesPath = 'tools/video/templates/vimeo/';

    public function __construct()
    {
        $twigLoader = new \Twig\Loader\FilesystemLoader($this->templatesPath);
        $this->twig = new \Twig\Environment($twigLoader);
   }
}
