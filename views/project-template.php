<?php include("header-article.php");?>
<?php
// Collecte des données dans l'article
include("../tools/api_notion.php");
/*$pageID = $_GET["id"];*/
/*$getPageData = array(pageRequests($pageID));*/
?>
    <!-- MAIN PAGE CONTENT -->
    <div id="main-content">
      <!-- PROJECT HEADER -->
      <div id="project-header">
        <div class="main-title">Mon titre</div>
        <image class="project-header-image" src="<?php echo "Image support"/*$getPageData[0]['results'][0]['image']['file']['url']*/;?>">
        <hr/>
      </div>

      <!-- PROJECT DETAILS -->
      <div id="project-details">
        <div class="subheader-text">Titre</div>
        <div class="project-details-content">
          <div class="body-text"><?php echo "Long texte à insérer ici !"/*echo $getPageData[0]['results'][3]["paragraph"]["rich_text"][0]["text"]["content"]*/ ?></div>
          <div class="body-text">Vitae justo eget magna fermentum. Imperdiet nulla malesuada pellentesque elit eget gravida. Aliquet nec ullamcorper sit amet. Aliquet sagittis id consectetur purus. Ac tortor dignissim convallis aenean. Enim neque volutpat ac tincidunt vitae. Lobortis feugiat vivamus at augue. Platea dictumst vestibulum rhoncus est pellentesque elit ullamcorper. Viverra orci sagittis eu volutpat. Massa tincidunt nunc pulvinar sapien et ligula. Donec enim diam vulputate ut.</div>
        </div>
      </div>

      <!-- Aperçu du projet -->
      <div id="project-gallery">
        <div class="subheader-text">Aperçu / Code source</div>
        <div class="project-gallery-content">
            <div class="gallery-image-container half-width">
              <img src="../assets/images/code.jpeg" class="gallery-image">
              <span class="image-caption">Accéder au notebook</span>
            </div>
            <!-- S'il n'y a pas de lien vers le projet => Ne pas mettre cette partie -->
            <div class="gallery-image-container half-width">
              <img src="../assets/images/sketchbook.jpeg" class="gallery-image">
              <span class="image-caption">Code source sur GitHub</span>
            </div>
        </div>
      </div>
    </div>

<!-- FOOTER -->
<?php include("../views/footer.php")?>