<?php 
    get_header();
?>

<main>
    <?php
        // Überprüfen, ob die Kategorie-ID in der URL vorhanden ist
        if (isset($_GET['category_id'])) 
        {
            $category_id = $_GET['category_id'];
        }
        else
        {
            $category_id = 1;
        }

        // Erstellen Sie eine neue Abfrage, um Beiträge aus der gewünschten Kategorie abzurufen
        $args = array(
            'cat' => $category_id, // Kategorie-ID
            'posts_per_page' => -1, // Anzahl der anzuzeigenden Beiträge (-1 zeigt alle Beiträge an)
        );

        $query = new WP_Query($args);

        // Überprüfen Sie, ob Beiträge vorhanden sind
        if ($query->have_posts()) 
        {
            while ($query->have_posts())
            {
                $query->the_post();
                get_template_part('template-parts/content', 'archive');
            }
        }
    ?> 
</main>

<?php 
    get_footer(); 
?>
