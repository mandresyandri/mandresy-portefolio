      <!-- PROJECTS / MY WORK SECTION -->
      <div id="my-work-section">
        <!-- TODO - Change the subheader-text to whatever you want the Projects section header to say -->
        <span class="subheader-text">Mon travail / Mes projets</span>

        <div class="projects-container">
          <!-- 
            TODO

            This is where the project cards live. Here's a base level project card for you to copy:
            <div class="project-card">
              <img src="./assets/images/IMAGE_NAME" class="project-image">
              <div class="project-card-text-container">
                <div class="subheader-text project-title">PROJECT_NAME</div>
                <div class="body-text project-card-text">SMALL_PROJECT_DESCRIPTION</div>
              </div>
              <a class="button" href="./project-pages/PROJECT_PAGE_NAME.html">
                <span class="button-text">Read More</span>
                <image src="./assets/icons/arrow-right.svg" class="right-arrow-icon"/>
              </a>
            </div>

            - To add a project to the this area, copy the above, paste it below this comment, and change the following:
                - IMAGE_NAME: the name of the image file in assets/images
                - PROJECT_NAME: the name of the project (keep it short, it only shows 1 line)
                - SMALL_PROJECT_DESCRIPTION: a quick project description (max 4 lines)
                - PROJECT_PAGE_NAME.html: the html filename for the project (must be in project-pages folder)
          -->
            <?php
            include("./tools/api_notion.php");
            $arr = array(dbRequests());
            ?>
          <div class="project-card">
            <img src="<?php echo $arr[0]['results'][2]['cover']['file']['url']?>" class="project-image">
            <div class="project-card-text-container">
              <div class="subheader-text project-title"><?php echo $arr[0]["results"][2]["properties"]["Titre"]["title"][0]["text"]["content"] ?></div>
              <div class="body-text project-card-text"><?php echo $arr[0]["results"][2]["properties"]["Description"]["rich_text"][0]["text"]["content"] ?></div>
            </div>
            <a class="button" href="./views/project-template.php">
              <span class="button-text">Read More</span>
              <image src="./assets/icons/arrow-right.svg" class="right-arrow-icon"/>
            </a>
          </div>
          <div class="project-card">
            <img src="<?php echo $arr[0]['results'][1]['cover']['file']['url']?>" class="project-image">
            <div class="project-card-text-container">
              <div class="subheader-text project-title"><?php echo $arr[0]["results"][1]["properties"]["Titre"]["title"][0]["text"]["content"] ?></div>
              <div class="body-text project-card-text"><?php echo $arr[0]["results"][1]["properties"]["Description"]["rich_text"][0]["text"]["content"] ?></div>
            </div>
            <a class="button" href="./views/project-template.php">
              <span class="button-text">Read More</span>
              <image src="./assets/icons/arrow-right.svg" class="right-arrow-icon"/>
            </a>
          </div>
          <div class="project-card">
            <img src="<?php echo $arr[0]['results'][0]['cover']['file']['url']?>" class="project-image">
            <div class="project-card-text-container">
              <div class="subheader-text project-title"><?php echo $arr[0]["results"][0]["properties"]["Titre"]["title"][0]["text"]["content"] ?></div>
              <div class="body-text project-card-text"><?php echo $arr[0]["results"][0]["properties"]["Description"]["rich_text"][0]["text"]["content"] ?></div>
            </div>
            <a class="button" href="./views/project-template.php">
              <span class="button-text">Read More</span>
              <image src="./assets/icons/arrow-right.svg" class="right-arrow-icon"/>
            </a>
          </div>
        </div>
      </div>
    </div>