<?php
function antzify_game_rating_shortcode($atts) {
    global $post;

    $graphics = get_post_meta($post->ID, '_antzify_graphics', true);
    $gameplay = get_post_meta($post->ID, '_antzify_gameplay', true);
    $story    = get_post_meta($post->ID, '_antzify_story', true);
    $sound    = get_post_meta($post->ID, '_antzify_sound', true);

    if (!$graphics && !$gameplay && !$story && !$sound) {
        return '';
    }

    $values = array_filter([$graphics, $gameplay, $story, $sound]);
    $average = round(array_sum($values) / count($values), 1);

    ob_start();
    ?>
    <div class="antzify-rating-box" style="border:1px solid #ccc; padding:15px; margin:20px 0;">
        <h3>Peliarvostelun pisteet</h3>
        <ul style="list-style:none; padding-left:0;">
            <li><strong>Grafiikka:</strong> <?php echo esc_html($graphics); ?>/10</li>
            <li><strong>Pelattavuus:</strong> <?php echo esc_html($gameplay); ?>/10</li>
            <li><strong>Tarina:</strong> <?php echo esc_html($story); ?>/10</li>
            <li><strong>Äänimaailma:</strong> <?php echo esc_html($sound); ?>/10</li>
        </ul>
        <p><strong>Keskiarvo:</strong> <?php echo esc_html($average); ?>/10</p>
    </div>
    <?php
    return ob_get_clean();
}
add_shortcode('game_rating', 'antzify_game_rating_shortcode');
