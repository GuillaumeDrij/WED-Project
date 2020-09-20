<?php
/*--------------------------------------------------------------------
../app/modeles/postsModele
modèle des posts
-----------------------------------------------------------------------*/

namespace App\Modeles\TagsModele;

/**
 * [findAllByPostId description]
 * @param  PDO   $connexion [description]
 * @param  int   $postId    [description]
 * @return array            [description]
 */

function findAllByPostId(\PDO $connexion, int $postId) :array{
  $sql = "SELECT id, image, p.created_at, title, content
          FROM tags t
          JOIN posts_has_tags pht ON t.id = pht.tag_id
          WHERE pht.post_id = :postId
          ORDER BY t.name and t.created_at ASC;";
  $rs = $connexion->prepare($sql);
  $rs->bindValue(':postId', $postId, \PDO::PARAM_INT);
  $rs->execute();
  return $rs->fetchAll(\PDO::FETCH_ASSOC);
}
