<?php
namespace YesWiki\Video;

class TemplateDailymotion extends Template
{
    private $templatesPath = 'tools/video/templates/dailymotion/';

    public function __construct()
    {
        $twigLoader = new \Twig\Loader\FilesystemLoader($this->templatesPath);
        $this->twig = new \Twig\Environment($twigLoader);
   }
}
