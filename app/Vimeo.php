<?php
namespace YesWiki\Vimeo;

class Vimeo
{
      public function performAction($parameters)
      {
          if ($parameters['id'] === false) {
              return "Le parametre 'id' doit être spécifié et être un entier";
          }

          $id = $parameters['id'];

          $template = new Template();
          return $template->show($parameters);
      }
}
