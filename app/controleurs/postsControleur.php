<?php
/*------------------------------------------------------------------
../app/controleurs/postsControleur.php
contrôleur des posts
----------------------------------------------------------------*/

namespace App\Controleurs\Posts;
use \App\Modeles\Posts;

/**
 * [indexAction description]
 * @param  PDO    $connexion [description]
 */

function indexAction(\PDO $connexion) {
  // 1. On demande les posts au modèle et on les met dans $posts
    include_once '../app/modeles/postsModele.php';
    $posts = Posts\findAll($connexion);

  // 2. On charge la vue index dans $content
    GLOBAL $title, $content;
    $title = TITRE_POSTS_INDEX;
    ob_start();
      include '../app/vues/posts/index.php';
    $content = ob_get_clean();
}

function showAction(\PDO $connexion, $id) {
  echo $id;
  // 1. On demande le détail du post au modèle et on le met dans la variable $post
    include_once '../app/modeles/postsModele.php';
    $post = Posts\findOneById($connexion, $id);

  // 2. On charge la vue show dans $content
    GLOBAL $title, $content;
    $title = $post['title'];
    ob_start();
      include '../app/vues/posts/show.php';
    $content = ob_get_clean();
}
