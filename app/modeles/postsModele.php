<?php
/*--------------------------------------------------------------------
../app/modeles/postsModele
modèle des posts
-----------------------------------------------------------------------*/

namespace App\Modeles\Posts;

// charge les derniers posts dans la variable $posts
/**
 * [findAll description]
 * @param  PDO   $connexion [description]
 * @return array            [description]
 */
function findAll(\PDO $connexion) :array{
  $sql = "SELECT id, image, p.created_at, title, content
          FROM posts p
          ORDER BY p.created_at DESC
          LIMIT 10;";
  $rs = $connexion->query($sql);
  return $rs->fetchAll(\PDO::FETCH_ASSOC);
}

// charge les détails d'un post dans la variable $post
/**
 * [findOneById description]
 * @param  PDO    $connexion [description]
 * @param  [type] $id        [description]
 * @return array             [description]
 */
function findOneById(\PDO $connexion, $id) : array{
  $sql = "SELECT *
          FROM posts p
            JOIN authors a
              ON a.id = p.author_id
          WHERE p.id = :id
          ;";
  $rs = $connexion->prepare($sql);
  $rs->bindValue(':id', $id, \PDO::PARAM_INT);
  $rs->execute();
  return $rs->fetch(\PDO::FETCH_ASSOC);
}
