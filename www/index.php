<?php
/*----------------------------------------------------------------------------------------------
../www/index.php
dispatcher central
- charge le fichier ../noyau/init.php (initialisation des zones dynamiques et connexion à la db)
- charge le routeur
- affiche le template (../app/vues/templates/index.php)
--------------------------------------------------------------------------------------------------*/

require_once '../noyau/init.php';
require_once '../app/routeur.php';
require_once '../app/vues/template/index.php';
