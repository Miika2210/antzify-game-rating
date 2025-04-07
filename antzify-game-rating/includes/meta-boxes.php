<?php
function antzify_add_game_rating_metabox() {
    add_meta_box(
        'antzify_game_rating',
        'Peliarvostelun pisteet',
        'antzify_game_rating_metabox_callback',
        ['post', 'game_review'],
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'antzify_add_game_rating_metabox');

function antzify_game_rating_metabox_callback($post) {
    $fields = ['graphics', 'gameplay', 'story', 'sound'];
    foreach ($fields as $field) {
        ${$field} = get_post_meta($post->ID, '_antzify_' . $field, true);
    }

    wp_nonce_field('antzify_save_game_rating', 'antzify_game_rating_nonce');

    ?>
    <p>Syötä arvostelupisteet (1–10):</p>
    <table>
        <tr><td><label for="antzify_graphics">Grafiikka:</label></td>
            <td><input type="number" name="antzify_graphics" min="1" max="10" value="<?php echo esc_attr($graphics); ?>" /></td></tr>
        <tr><td><label for="antzify_gameplay">Pelattavuus:</label></td>
            <td><input type="number" name="antzify_gameplay" min="1" max="10" value="<?php echo esc_attr($gameplay); ?>" /></td></tr>
        <tr><td><label for="antzify_story">Tarina:</label></td>
            <td><input type="number" name="antzify_story" min="1" max="10" value="<?php echo esc_attr($story); ?>" /></td></tr>
        <tr><td><label for="antzify_sound">Äänimaailma:</label></td>
            <td><input type="number" name="antzify_sound" min="1" max="10" value="<?php echo esc_attr($sound); ?>" /></td></tr>
    </table>
    <?php
}

function antzify_save_game_rating($post_id) {
    if ( ! isset($_POST['antzify_game_rating_nonce']) ||
         ! wp_verify_nonce($_POST['antzify_game_rating_nonce'], 'antzify_save_game_rating') ) {
        return;
    }

    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;

    $fields = ['graphics', 'gameplay', 'story', 'sound'];
    foreach ($fields as $field) {
        if (isset($_POST['antzify_' . $field])) {
            update_post_meta($post_id, '_antzify_' . $field, intval($_POST['antzify_' . $field]));
        }
    }
}
add_action('save_post', 'antzify_save_game_rating');
