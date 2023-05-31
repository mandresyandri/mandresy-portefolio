<!-- PROJECTS / MY WORK SECTION -->
    <div id="my-work-section">
        <span class="subheader-text">Mon travail / Mes projets</span>
        <div class="projects-container">
            <?php
            // Article dynamique
            include("./tools/api_notion.php");
            $arr = array(dbRequests());
            $taille = count($arr[0]['results']);
            $i = $taille - 1;
            while ($i >= 0){
                // structure conditionnelle => N'afficher que les articles au status publier
                if ($arr[0]["results"][$i]["properties"]["Status"]["select"]["name"] == "publier"){
                    // Création de la vue article
                    echo '<div class="project-card">';
                    echo '<img src="' . $arr[0]['results'][$i]['cover']['file']['url'] . '" class="project-image" alt="Image">';
                    echo '<div class="project-card-text-container">';
                    echo '<div class="subheader-text project-title">'. $arr[0]["results"][$i]["properties"]["Titre"]["title"][0]["text"]["content"] . "</div>";
                    echo '<div class="body-text project-card-text">'. $arr[0]["results"][$i]["properties"]["Description"]["rich_text"][0]["text"]["content"] . "</div>";
                    echo '</div>';
                    echo '<a class="button" href="./views/project-template.php">';
                    echo '<span class="button-text">En savoir plus</span>';
                    echo '<image src="./assets/icons/arrow-right.svg" class="right-arrow-icon"/>';
                    echo '</a>';
                    echo '</div>';
                    $i--;
                }
                else {
                    $i--;
                }
            }
            ?>
        </div>
    </div>
