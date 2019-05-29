<?php
namespace YesWiki\Vimeo;

class Template
{
    private $twig;

    public function __construct()
    {
        $twigLoader = new \Twig_Loader_Filesystem('tools/vimeo/templates/');
        $this->twig = new \Twig_Environment($twigLoader);
   }

   public function show($infos)
   {
       return $this->twig->render('default.twig', $infos);
   }
}
