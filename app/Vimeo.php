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

          $template = "
          <div style='padding:56.25% 0 0 0;position:relative;'>
            <iframe src='https://player.vimeo.com/video/$id?byline=0&portrait=0' style='position:absolute;top:0;left:0;width:100%;height:100%;' frameborder='0' webkitallowfullscreen mozallowfullscreen allowfullscreen>
            </iframe>
          </div>
          <script src='https://player.vimeo.com/api/player.js'></script>";

          return $template;
      }
}
