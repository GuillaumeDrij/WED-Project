<?php
/*------------------------------------------------------------------
../app/controleurs/tagsControleur.php
contrôleur des tags
----------------------------------------------------------------*/

namespace App\Controleurs\TagsControleur;
use \App\Modeles\TagsModele;


function indexByPostIdAction(\PDO $connexion, int $postId) {
  // 1. Je mets dans $tags la liste des tags du post que je demande au modèle
    include_once '../app/modeles/tagsModele.php';
    $tags = TagsModele\findAllByPostId($connexion, $postId);

  // 2. On charge la vue tags/indexByPostId directement (pas dans $content)
      include '../app/vues/tags/indexByPostId.php';
}
