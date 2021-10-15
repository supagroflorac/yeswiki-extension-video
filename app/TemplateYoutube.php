<?php
namespace YesWiki\Video;

class TemplateYoutube extends Template
{
    private $templatesPath = 'tools/video/templates/youtube/';

    public function __construct()
    {
        $twigLoader = new \Twig\Loader\FilesystemLoader($this->templatesPath);
        $this->twig = new \Twig\Environment($twigLoader);
   }
}
