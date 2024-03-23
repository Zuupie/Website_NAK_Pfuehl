<!--Start of Container-->
<div class="post">
    <div class="head_stuff">
        <div class="head_text">
            <div class="head_headline"><?php the_title(); ?></div>
            <div class="head_metaData">
                <p class="head_date">Veröffentlicht am <?php echo get_the_date(); ?></p>
                <p class="head_category">
                    <?php
                        // Kategorien des Beitrags abrufen
                        $categories = get_the_category();
                        // Sicherstellen, dass Kategorien vorhanden sind
                        if (!empty($categories)) {
                            echo "Kategorie: ";
                            // Iteriere über jede Kategorie und gib ihren Namen aus
                            foreach ($categories as $category) {
                                if ($category->name !== 'Allgemein') {
                                    echo esc_html($category->name) . ' ';
                                }
                            }
                        }
                    ?>  
                </p> 
            </div> 					
        </div>
    </div>	 
    <img src="<?php the_post_thumbnail_url('thumbnail'); ?>" class="normal_image">
    <div class="main_text_space" style="padding: 16px;"> 		
        <p class="main_text">
            <?php the_content(); ?>
        </p>
    </div>
</div>
<!--End of Container -->