<?php include("header-article.php");?>
<?php
// Collecte des données dans l'article
include("../tools/api_notion.php");
$pageID = $_GET["id"];
$getPageData = array(pageRequests($pageID));
?>
    <!-- DISPOSITION DU TITRE -->
    <div id="main-content">
        <div id="project-header">
            <div class="main-title"><?php echo $getPageData[0]['results'][0]['heading_1']['rich_text'][0]['text']['content']; ?></div>
            <image class="project-header-image" src="<?php echo $getPageData[0]['results'][1]['image']['file']['url'];?>">
        </div>

        <!-- PROJECT DETAILS -->
        <div id="project-details">
            <div class="subheader-text"><?php echo $getPageData[0]['results'][2]['heading_2']['rich_text'][0]['text']['content'];?></div>
            <div class="project-details-content">
                <div class="body-text"><?php echo $getPageData[0]['results'][3]['paragraph']['rich_text'][0]['text']['content'];?></div>
            </div>
        </div>

        <div id="project-details">
            <div class="subheader-text"><?php echo $getPageData[0]['results'][4]['heading_2']['rich_text'][0]['text']['content'];?></div>
            <div class="project-details-content">
                <div class="body-text"><?php echo $getPageData[0]['results'][5]['paragraph']['rich_text'][0]['text']['content'];?></div>
            </div>
        </div>

        <div id="project-details">
            <div class="subheader-text"><?php echo $getPageData[0]['results'][6]['heading_2']['rich_text'][0]['text']['content'];?></div>
            <div class="project-details-content">
                <div class="body-text"><?php echo $getPageData[0]['results'][7]['paragraph']['rich_text'][0]['text']['content'];?></div>
            </div>
        </div>

      <!-- Aperçu du projet -->
      <div id="project-gallery">
        <div class="subheader-text">Aperçu / Code source</div>
        <div class="project-gallery-content">
            <a href="<?php echo $getPageData[0]['results'][10]['paragraph']['rich_text'][0]["text"]["content"];?>" target="_blank">
                <div class="gallery-image-container half-width">
                  <img src="<?php echo $getPageData[0]['results'][9]['image']['file']['url'];?>" class="gallery-image">
                    <span class="image-caption">
                            Accéder au notebook
                    </span>
                </div>
            </a>
        </div>
      </div>
    </div>

<!-- FOOTER -->
<?php include("../views/footer.php")?>