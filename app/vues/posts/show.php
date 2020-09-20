<?php
/*-------------------------------------------------------
../app/vues/posts/index.php
Liste des posts
Variables disponibles $post (tableau associatif - title, created_at, content, )
-----------------------------------------------------------*/

?>

<!-- <div class="col-lg-8 posts-list">
   <div class="single-post">-->
      <div class="feature-img">
         <img class="img-fluid" src="assets/img/blog/<?php echo $post['image']; ?>" alt="">
      </div>
      <div class="blog_details">
         <h2><?php echo $post['title']; ?></h2>
         <ul class="blog-info-link mt-3 mb-4">
            <li><a href="#"><i class="fa fa-user"></i> Travel, Lifestyle</a></li>
         </ul>
         <p> <?php echo $post['content']; ?></p>
      </div>
   </div>


   <div class="blog-author">
      <div class="media align-items-center">
         <img src="assets/img/blog/<?php echo $post['avatar']; ?>" alt="">
         <div class="media-body">
            <a href="#">
               <h4><?php echo $post['lastname'] ?> <?php echo $post['firstname'] ?></h4>
            </a>
            <p><?php echo $post['biography']; ?></p>
         </div>
      </div>
   <!--</div>

</div>-->

<!-- TAGS LIST -->
<?php
    include_once '../app/controleurs/tagsControleur.php';
    \App\Controleurs\TagsControleur\indexByPostIdAction($connexion, $post['id']);
 ?>
