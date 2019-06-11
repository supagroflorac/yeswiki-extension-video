<?php
namespace YesWiki\Video;

class Youtube
{
      public function performAction($parameters)
      {
          if ($parameters['id'] === false) {
              return "Le parametre 'id' doit être spécifié";
          }

          $id = $parameters['id'];

          $template = new TemplateYoutube();
          return $template->show($parameters);
      }
}
