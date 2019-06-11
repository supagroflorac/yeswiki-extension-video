<?php
namespace YesWiki\Video;

abstract class Template
{
    protected $twig;
    private $templatesPath;

    public function __construct()
    {
        $twigLoader = new \Twig_Loader_Filesystem($this->templatesPath);
        $this->twig = new \Twig_Environment($twigLoader);
   }

   public function show($infos)
   {
       return $this->twig->render('default.twig', $infos);
   }
}
