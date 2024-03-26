<?php

/**
 * Ceeso Theme functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 * @package ceeso
 */


if (!function_exists('ceeso_init')) {
    /**
     * Initialisation de la configuration du thème
     * après avoir vérifier si la fonction existe
     *
     * @return void
     */
    function ceeso_init()
    {
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
    }
}

add_action('after_setup_theme', 'ceeso_init');



if (!function_exists('create_post_type')) {
    /**
     * Génère un custom Post Type
     * 
     * @param string $singular
     * @param string $plural
     * @param string $menu_icon
     * @param string $description
     * 
     * @return void
     */
    function create_post_type(
        string $singular,
        string $plural,
        string $menu_icon,
        string $description = ''
    ) {
        register_post_type($singular, [
            'public'            => true,
            'show_in_rest'      => false,
            'description'       => $description,
            'menu_icon'         => $menu_icon,
            'hierarchical'      => false,
            'has_archive'       => true,
            'supports'          => ['title', 'editor', 'author', 'thumbnail'],
            'menu_position'         => 5,
            'rewrite'           => [
                'slug' => strtolower($plural),
            ],
            'labels' => [
                'name'                      =>  __($plural, 'ceeso'),
                'singular_name'             => __($singular, 'ceeso'),
                'all_items'             => __('All ' . $plural, 'ceeso'),
                'archives'              => __($plural . ' Archives', 'ceeso'),
                'attributes'            => __($singular . ' Attributes', 'ceeso'),
                'insert_into_item'      => __('Insert into ' . $singular, 'ceeso'),
                'uploaded_to_this_item' => __('Uploaded to this ' . $singular, 'ceeso'),
                'featured_image'        => __($singular . ' Featured image', 'ceeso'),
                'set_featured_image'    => __('Set ' . $singular . ' featured image', 'ceeso'),
                'remove_featured_image' => __('Remove ' . $singular . ' featured image', 'ceeso'),
                'use_featured_image'    => __('Use as ' . $singular . ' featured image', 'ceeso'),
                'filter_items_list'     => __('Filter ' . $plural . ' list', 'ceeso'),
                'items_list_navigation' => __($plural . ' list navigation', 'ceeso'),
                'items_list'            => __($plural . ' list', 'ceeso'),
                'new_item'              => __('Add New ' . $singular, 'ceeso'),
                'add_new'               => __('Add New ' . $singular, 'ceeso'),
                'add_new_item'          => __('New ' . $singular, 'ceeso'),
                'edit_item'             => __('Edit ' . $singular, 'ceeso'),
                'view_item'             => __('View ' . $singular, 'ceeso'),
                'view_items'            => __('View ' . $plural, 'ceeso'),
                'search_items'          => __('Search ' . $plural, 'ceeso'),
                'not_found'             => __('No ' . $plural . ' found', 'ceeso'),
                'not_found_in_trash'    => __('No ' . $plural . ' found in trash', 'ceeso'),
                'menu_name'             => __($plural, 'ceeso'),
            ],
        ]);
    }
}


if (!function_exists('custom_cpts')) {
    /**
     * Création des CPT Event et Question
     * 
     * @return void
     */
    function custom_cpts()
    {
        create_post_type('Event', 'Events', 'dashicons-calendar');
        create_post_type('Question', 'Questions', 'dashicons-editor-help');
    }
}


add_action('init', 'custom_cpts');



if (!function_exists('event_informations_meta_box')) {
    /**
     * Déclaration de la Méta box informations pour le CPT Event
     * 
     * @return void
     */
    function event_informations_meta_box()
    {
        add_meta_box(
            'event_informations',
            'Informations',
            'event_informations_meta_box_html',
            'event'
        );
    }
}

add_action('add_meta_boxes', 'event_informations_meta_box');


if (!function_exists('event_informations_meta_box_html')) {
    /**
     * Affichage de la Méta box informations 
     *
     * @param WP_Post $post
     * @return void
     */
    function event_informations_meta_box_html($post)
    {
        $date = get_post_meta($post->ID, 'date', true);
        $place = get_post_meta($post->ID, 'place', true);

        wp_nonce_field('event_informations' . $post->ID, '_wp_nonce_informations');

?>
        <table>
            <tbody>
                <tr>
                    <th><label for="date">Date</label></th>
                    <td><input type="text" id="datePick" name="_date" value='<?= esc_attr($date) ?>'></td>
                </tr>
                <tr>
                    <th><label for="place">Lieu</label></th>
                    <td>
                        <input type="text" id="place" name="_place" value='<?= esc_attr($place) ?>'>
                    </td>
                </tr>
            </tbody>
        </table>
        <script type="text/javascript">
            jQuery(document).ready(function() {
                jQuery('#datePick').flatpickr({
                    mode: "multiple",
                    dateFormat: "d-m-Y",
                });
            });
        </script>
<?php

    }
}



if (!function_exists('event_informations_save_meta')) {
    /**
     * Sauvegarde des informations
     *
     * @param string $post_id
     * @return void
     */
    function event_informations_save_meta($post_id)
    {

        if (!isset($_POST['_wp_nonce_informations'])) {
            return;
        }

        if (!wp_verify_nonce($_POST['_wp_nonce_informations'], 'event_informations' . $post_id)) {
            return;
        }

        if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;

        if (isset($_POST['_date'])) {
            update_post_meta($post_id, 'date', sanitize_text_field($_POST['_date']));
        }
        if (isset($_POST['_place'])) {
            update_post_meta($post_id, 'place', sanitize_text_field($_POST['_place']));
        }

        return $post_id;
    }
}

add_action('save_post', 'event_informations_save_meta', 10, 2);


if (!function_exists('enqueue_admin_scripts')) {
    /**
     * Chargement des scripts et des styles dans l'admin
     *
     * @return void
     */
    function enqueue_admin_scripts()
    {
        if ('event' === get_current_screen()->id) {
            wp_enqueue_script('flatpcikr', 'https://cdn.jsdelivr.net/npm/flatpickr', [], null, true);
            wp_enqueue_style('flatpickcss', 'https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css');
        }
    }
}

add_action('admin_enqueue_scripts', 'enqueue_admin_scripts');


if (!function_exists('load_assets')) {

    /**
     * Chargement des scripts et des styles
     *
     * @return void
     */
    function load_assets()
    {
        wp_enqueue_style('styleCss', get_theme_file_uri('style.css'));
        wp_enqueue_script('JS', get_theme_file_uri('index.js'), [], null, true);
        wp_enqueue_style('googleFont', 'https://fonts.googleapis.com/css2?family=Arimo:ital,wght@0,400..700;1,400..700&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap');
    }
}

add_action('wp_enqueue_scripts', 'load_assets');


if (!function_exists('event_list_table_head')) {
    /**
     * Customisation du header de la liste des évènements
     *
     * @param [type] $defaults
     * @return void
     */
    function event_list_table_head($defaults)
    {
        $defaults['_date'] = 'Dates';
        return $defaults;
    }
}

add_filter('manage_event_posts_columns', 'event_list_table_head');


/**
 * Affichage du header custom de la liste des évènements
 *
 * @param [type] $column_name
 * @param [type] $post_id
 * @return void
 */
function event_list_table_content($column_name, $post_id)
{
    if ($column_name == '_date') {
        echo  get_post_meta($post_id, 'date', true);
    }
}

add_action('manage_event_posts_custom_column', 'event_list_table_content', 10, 2);
