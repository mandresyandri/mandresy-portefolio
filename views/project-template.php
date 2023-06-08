<?php include("header-article.php");?>
<?php
// Collecte des données dans l'article
include("../tools/api_notion.php");
$pageID = $_GET["id"];
$getPageData = array(pageRequests($pageID));
?>
    <!-- MAIN PAGE CONTENT -->
    <div id="main-content">
      <!-- PROJECT HEADER -->
      <div id="project-header">
        <!--<div class="main-title">Project Name</div>
        <div class="body-text">A small description about the project goes here, get the reader hooked on the project and tell them why they should continue to read this page. Give it a sweet tagline.</div>-->
        <image class="project-header-image" src="<?php echo $getPageData[0]['results'][0]['image']['file']['url'];?>">
        <div class="main-title">Texte de titre</div>
        <hr/>
      </div>

      <!-- PROJECT DETAILS -->
      <div id="project-details">
        <div class="subheader-text">Project Details / Background</div>
        <div class="project-details-content">
          <div class="body-text"><?php echo $getPageData[0]['results'][3]["paragraph"]["rich_text"][0]["text"]["content"] ?></div>
          <div class="body-text">Vitae justo eget magna fermentum. Imperdiet nulla malesuada pellentesque elit eget gravida. Aliquet nec ullamcorper sit amet. Aliquet sagittis id consectetur purus. Ac tortor dignissim convallis aenean. Enim neque volutpat ac tincidunt vitae. Lobortis feugiat vivamus at augue. Platea dictumst vestibulum rhoncus est pellentesque elit ullamcorper. Viverra orci sagittis eu volutpat. Massa tincidunt nunc pulvinar sapien et ligula. Donec enim diam vulputate ut.</div>
        </div>
      </div>

      <!-- IMAGE GALLERY -->
      <div id="project-gallery">
        <div class="subheader-text">Image Gallery</div>
        <div class="project-gallery-content">
            <div class="gallery-image-container half-width">
              <img src="../assets/images/code.jpeg" class="gallery-image">
              <span class="image-caption">Give your image a caption. People love context.</span>
            </div>
            <div class="gallery-image-container half-width">
              <img src="../assets/images/sketchbook.jpeg" class="gallery-image">
              <span class="image-caption">Give your image a caption. People love context.</span>
            </div>
            <div class="gallery-image-container">
              <img src="../assets/images/camera.jpeg" class="gallery-image">
              <span class="image-caption">Give your image a caption. People love context.</span>
            </div>
        </div>
      </div>
    </div>

<!-- FOOTER -->
<div id="footer">
    <a class="icon-link" target="_blank" href="https://twitter.com/whitevans_eth">
        <image src="../assets/icons/instagram.svg" class="footer-icon"/>
    </a>
    <a class="icon-link" target="_blank" href="https://twitter.com/whitevans_eth">
        <image src="../assets/icons/twitter.svg" class="footer-icon"/>
    </a>
    <a class="icon-link" href="mailto:mandresy.andriantsoanavalona@gmail.com">
        <image src="../assets/icons/mail.svg" class="footer-icon"/>
    </a>
</div>

</body>
</html>
-->