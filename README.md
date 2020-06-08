Extension Yeswiki vimeo
=======================

Permet d’intégrer facilement et de façon homogène des vidéos issues de https://vimeo.com

L'action 'vimeo'
----------------

Intègre une vidéo provenant de https://vimeo.com.

L'action prend un paramètre obligatoire : id.
id est l'identifiant de la vidéo sur le site de Vimeo.

À partir de l'URL de la page de la video, il faut récupérer le nombre qui identifie la page.

Exemple : pour https://vimeo.com/74610615 C'est 74610615 l'identifiant.
Il faut donc utiliser `{{vimeo id="74610615"}}` pour intégrer la vidéo dans une page YesWiki.

L'action 'youtube'
----------------

Intègre une vidéo provenant de https://youtube.com.

L'action prend un paramètre obligatoire : id.
id est l'identifiant de la vidéo sur le site de Youtube.

À partir de l'URL de la page de la vidéo, il faut récupérer le nombre qui identifie la page.

Exemple : pour https://www.youtube.com/watch?v=jofNR_WkoCE C'est jofNR_WkoCE l'identifiant.
Il faut donc utiliser `{{youtube id="jofNR_WkoCE"}}` pour intégrer la vidéo dans une page YesWiki.
