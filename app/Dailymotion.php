<?php
namespace YesWiki\Video;

class Dailymotion
{
      public function performAction($parameters)
      {
          if ($parameters['id'] === false) {
              return "Le parametre 'id' doit être spécifié";
          }

          $id = $parameters['id'];

          $template = new TemplateDailymotion();
          return $template->show($parameters);
      }
}
