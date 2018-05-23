<?php

add_action( 'init', 'gu_add_editor_styles' );
function gu_add_editor_styles() {
  add_editor_style('style.css');
  add_editor_style('css/style-entenda-introducao.css');
  add_editor_style('css/style-entenda-etapas.css');
}

  /**
   * REGISTER STYLESHEETS AND SCRIPTS
   */
function gu_register_and_load_styles_scripts(){
  // CSS
  wp_register_style('style', get_stylesheet_uri());
  wp_register_style('style-menu-navbar', get_template_directory_uri() . '/css/style-menu-navbar.css', array(), null, 'all');
  wp_register_style('style-home', get_template_directory_uri() . '/css/style-home.css', array(), null, 'all');
  wp_register_style('style-agenda-interna', get_template_directory_uri() . '/css/style-agenda-interna.css', array(), null, 'all');
  wp_register_style('style-agenda-sidebar', get_template_directory_uri() . '/css/style-agenda-sidebar.css', array(), null, 'all');
  wp_register_style('style-agenda', get_template_directory_uri() . '/css/style-agenda.css', array(), null, 'all');
  wp_register_style('style-biblioteca', get_template_directory_uri() . '/css/style-biblioteca.css', array(), null, 'all');
  wp_register_style('style-contato', get_template_directory_uri() . '/css/style-contato.css', array(), null, 'all');
  wp_register_style('style-entenda-introducao', get_template_directory_uri() . '/css/style-entenda-introducao.css', array(), null, 'all');
  wp_register_style('style-entenda-perguntas', get_template_directory_uri() . '/css/style-entenda-perguntas.css', array(), null, 'all');
  wp_register_style('style-entenda-equipe', get_template_directory_uri() . '/css/style-entenda-perguntas.css', array(), null, 'all');
  wp_register_style('style-interna', get_template_directory_uri() . '/css/style-interna.css', array(), null, 'all');
  wp_register_style('style-noticias-interna', get_template_directory_uri() . '/css/style-noticias-interna.css', array(), null, 'all');
  wp_register_style('style-noticias-sidebar', get_template_directory_uri() . '/css/style-noticias-sidebar.css', array(), null, 'all');
  wp_register_style('style-noticias', get_template_directory_uri() . '/css/style-noticias.css', array(), null, 'all');
  wp_register_style('style-comments', get_template_directory_uri() . '/css/style-comments.css', array(), null, 'all');
  wp_register_style('glDatePicker-flatwhite', get_template_directory_uri() . '/css/glDatePicker.flatwhite.css', array(), null, 'all');
  wp_register_style('jquery-fancybox', get_template_directory_uri() . '/css/jquery.fancybox.css', array(), null, 'all');
  wp_register_style('style-videos', get_template_directory_uri() . '/css/style-videos.css', array(), null, 'all');
  wp_register_style('style-piu-pacaembu', get_template_directory_uri() . '/css/style-piu-pacaembu.css', array(), null, 'all');
  wp_register_style('style-ligue-os-pontos', get_template_directory_uri() . '/css/style-ligue-os-pontos.css', array(), null, 'all');


  // JS
  wp_register_script('respond', get_stylesheet_directory_uri() . '/js/respond.min.js', array('jquery'), $in_footer = true );
  wp_register_script('vanillaMasker', get_stylesheet_directory_uri() . '/js/vanilla-masker.min.js', array( 'jquery' ),$in_footer = true );
  wp_register_script('vanillaMaskerValidations', get_stylesheet_directory_uri() . '/js/validationsFields.js', array( 'jquery', 'vanillaMasker' ),$in_footer = true );
  wp_register_script('site-script', get_stylesheet_directory_uri() . '/js/script.js', array( 'jquery' ),$in_footer = true );
  wp_register_script('bjqs', get_stylesheet_directory_uri() . '/js/bjqs-1.3.js', array( 'jquery' ),$in_footer = true );
  wp_register_script('glDatePicker', get_stylesheet_directory_uri() . '/js/glDatePicker.js', array( 'jquery' ),$in_footer = true );
  wp_register_script('jquery.fancybox', get_stylesheet_directory_uri() . '/js/jquery.fancybox.js', array( 'jquery' ),$in_footer = true );
  wp_register_script('header_menu', get_stylesheet_directory_uri() . '/js/header_menu.js', array( 'jquery' ),$in_footer = true );
  wp_register_script('footer', get_stylesheet_directory_uri() . '/js/footer.js',array( 'jquery' ), $in_footer = true );

  // APPLIED TO ALL PAGES
  wp_enqueue_style('style');
  wp_enqueue_style('style-menu-navbar');

  //js
  wp_enqueue_script('jquery');
  wp_enqueue_script('respond');
  wp_enqueue_script('site-script');
  wp_enqueue_script('bjqs');
  wp_enqueue_script('jquery.fancybox');
  wp_enqueue_script('header_menu');
  wp_enqueue_script('footer');

  
  if (is_front_page()){
    wp_enqueue_style('style-home');

    //REMOVE ASSETS FROM PLUGINS UNNECESSARY AT FRONTPAGE
    wp_deregister_style('contact-form-7');
    wp_deregister_style('flexy-breadcrumb-font-awesome');
    wp_deregister_style('qppr_frontend_style');
    wp_deregister_style('wpdmp-front-styles');
    wp_deregister_style('sdm-styles');

    wp_deregister_script('contact-form-7');
    wp_deregister_script('popup-maker');
    wp_deregister_script('qppr_frontend_scripts');
    wp_deregister_script('wpdmp-front-js3');
    wp_deregister_script('wpdmp-front-js1');
    wp_deregister_script('sdm-scripts');
  }

  if (is_page('ligue-os-pontos')){
    wp_enqueue_style('style-home');
    wp_enqueue_style('style-ligue-os-pontos');
  }

  if (!is_front_page()){
    wp_enqueue_style('style-comments');
    wp_enqueue_style('style-interna');
    wp_enqueue_style('glDatePicker-flatwhite');
    wp_enqueue_style('jquery-fancybox');

    wp_enqueue_script('vanillaMasker');
    wp_enqueue_script('vanillaMaskerValidations');
    wp_enqueue_script('glDatePicker');

    switch ($page) {
      case $page == is_page('biblioteca'):    wp_enqueue_style('style-biblioteca'); break;
      case $page == is_page('contato'):       wp_enqueue_style('style-contato'); break;
      case $page == is_page('videos'):        wp_enqueue_style('style-videos'); break;
      case $page == is_page('piu-pacaembu'):  wp_enqueue_style('style-piu-pacaembu'); break;
      case $page == is_page('entenda'):       wp_enqueue_style('style-entenda-introducao');
                                              wp_enqueue_style('style-entenda-perguntas');
                                              wp_enqueue_style('style-entenda-equipe'); break;
    }

    // load css custom pages
    $query_noticias = new WP_Query( array('post_type' => 'noticias')); 
    if (is_page( 'noticia' ) or $query_noticias->have_posts()) { // arrumar segunda condição
        wp_enqueue_style('style-noticias');
        wp_enqueue_style('style-noticias-interna');
    }
    wp_reset_postdata();

    $query_agenda = new WP_Query( array('post_type' => 'agenda'));  
    if (is_page( 'agenda' ) or $query_agenda->have_posts()) { // arrumar segunda condição
    wp_enqueue_style('style-agenda-interna');
    wp_enqueue_style('style-agenda-sidebar');
    wp_enqueue_style('style-agenda');
    }
    wp_reset_postdata();
  }
}
add_action( 'wp_enqueue_scripts', 'gu_register_and_load_styles_scripts' );


  /**
   * SETUP THEME IMAGES SIZES
   */
  if ( function_exists( 'add_theme_support' ) ) {
  add_theme_support( 'post-thumbnails' );
    add_image_size( '170xX', 170, 0 );          // agenda
    add_image_size( '233x132', 233, 132, true); // destaques e filmes
    add_image_size( '365x195', 365, 195, true); // Checar onde está sendo usado
    add_image_size( '470x267', 470, 267, true); // duas colunas
  }

/**
 * SETUP MENUS
 */
function register_my_menus()
  {
      register_nav_menus(
          array
          (
              // 'header-menu-secondary' => __( 'Menu Secundário do Header' ),
              'header-menu-primary' => __( 'Menu Primário do Header' ),
              'footer-menu' => __( 'Menu do Rodapé' ),
              'home_destaques' => __( 'Menu dos Destaques' ),
          )
      );
}

add_action( 'init', 'register_my_menus' );


/**
  adiciona imagens para menu dos destaques
  https://stackoverflow.com/questions/26079190/add-featured-image-to-wp-nav-menu-items#26079191
*/

// Add filter to specific menus 
add_filter('wp_nav_menu_args', 'add_filter_to_menus');

function add_filter_to_menus($args) {

    // You can test agasint things like $args['menu'], $args['menu_id'] or $args['theme_location']
    if( $args['theme_location'] == 'home_destaques') {
        add_filter( 'wp_setup_nav_menu_item', 'filter_menu_items' );
    }
    return $args;
}

// Filter menu
function filter_menu_items($item) {

    if( $item->type == 'taxonomy') {

        // For category menu items
        $cat_base = get_option('category_base');
        if( empty($cat_base) ) {
            $cat_base = 'category';
        }

        // Get the path to the category (excluding the home and category base parts of the URL)
        $cat_path = str_replace(home_url().'/'.$cat_base, '', $item->url);

        // Get category and image ID
        $cat = get_category_by_path($cat_path, true);
        $thumb_id = get_term_meta($cat->term_id, '_term_image_id', true); // I'm using the 'Simple Term Meta' plugin to store an attachment ID as the featured image

    } else {
        // Get post and image ID
        $post_id = url_to_postid( $item->url );
        $thumb_id = get_post_thumbnail_id( $post_id );
    }

    if( !empty($thumb_id) ) {
        // Make the title just be the featured image.
        $item->title = wp_get_attachment_image( $thumb_id, '233x132') 
        . "<p class='news-text'>"
        . $item->title
        . "</p>";
    }

    return $item;
}

// Remove filters
add_filter('wp_nav_menu_items','remove_filter_from_menus', 10, 2);
function remove_filter_from_menus( $nav, $args ) {
    remove_filter( 'wp_setup_nav_menu_item', 'filter_menu_items' );
    return $nav;
}


/**
 * SETUP PAGE NAVIGATION
 */

if ( ! function_exists( 'the_content_nav' ) ) :
/**
 * Display navigation to next/previous pages when applicable
 */
function the_content_nav() {
  global $wp_query;
  if ( $wp_query->max_num_pages > 1 ) :?>
    <div class="pages">
      <div class="prev"><?php echo previous_posts_link( 'Anterior' ); ?></div>
      <div class="next"><?php echo next_posts_link( 'Próxima' ); ?></div>
      <div class="clear"></div>
    </div>
  <?php endif;
}
endif; // twentyeleven_content_nav

  /**
   * SETUP COMMENTS
   */

   /* function alter_comment_form_fields($fields){
      //if (esc_attr($commenter['comment_author']) == '') { $commenter['comment_author'] = __('Seu Nome*:'); }
      $commenter['comment_author'] = __('Seu Nome*:');
      //if (esc_attr($commenter['comment_email']) == '') { $commenter['comment_email'] = __('Seu Email*:'); }
      $commenter['comment_email'] = __('Seu Email*:');
      //if (esc_attr($commenter['comment_url']) == '') { $commenter['comment_url'] = __('Seu site*:'); }
      $commenter['comment_url'] = __('Seu site*:');
      //if (esc_attr($commenter['comment_comment']) == '') { $commenter['comment_comment'] = __('Sua mensagem*:'); }
      $commenter['comment_comment'] = __('Sua mensagem*:');
      $fields['author'] = '<input type="text" name="author" id="author" title="' . esc_attr( $commenter['comment_author'] ) . '" class="defaultText defaultTextActive" ' . $aria_req . '>';
        $fields['email'] = '<input type="text" name="email" id="email" title="' . esc_attr( $commenter['comment_email'] ) . '" class="defaultText defaultTextActive" ' . $aria_req . '>';
        $fields['url'] = '<input type="text" name="url" id="url" title="' . esc_attr( $commenter['comment_url'] ) . '" class="defaultText defaultTextActive" ' . $aria_req . '>';
        $fields['comment'] = '<textarea name="comment" class="defaultText defaultTextActive" title="'.$commenter['comment_comment'].'"></textarea>';
        return $fields;
    }

    add_filter('comment_form_default_fields','alter_comment_form_fields');*/

  /**
   * SETUP THEME PAGE TYPES
   */

  /********************************************************************************/
  /**************** CUSTOM AGENDA                   *******************************/
  /********************************************************************************/
  add_action('init', 'agenda_register');
  function agenda_register() {
    $labels = array(
      'name' => __('Agenda'),
      'singular_name' => __('Agenda'),
      'add_new' => __('Novo evento'),
      'add_new_item' => __('Adicionar'),
      'edit_item' => __('Editar'),
      'new_item' => __('Novo'),
      'view_item' => __('Ver'),
      'search_items' => __('Procurar'),
      'not_found' =>  __('Nada encontrado'),
      'not_found_in_trash' => __('Nada encontrado na lixeira'),
      'parent_item_colon' => ''
    );
    $args = array(
      'labels' => $labels,
      'public' => true,
      'publicly_queryable' => true,
      'show_ui' => true,
      'query_var' => true,
      'menu_icon' => get_stylesheet_directory_uri() . '/images/admin/icon-calendar.png',
      'rewrite' => array('slug' => 'agenda','with_front' => FALSE),
      'capability_type' => 'post',
      '_builtin' => false,
      'hierarchical' => false,
      'menu_position' => null,
      'supports' => array('title','editor'/*,'excerpt'*/, 'thumbnail'),
      //'taxonomies' => array('category', 'post_tag')
      );
    register_post_type( 'agenda' , $args );
    flush_rewrite_rules( );
  }

  // Show Columns

  add_filter ("manage_edit-agenda_columns", "agenda_edit_columns");
  add_action ("manage_posts_custom_column", "agenda_custom_columns");

  function agenda_edit_columns($columns) {

  $columns = array(
      "cb" => "<input type=\"checkbox\" />",
      "title" => "Evento",
      "col_ev_date" => "Data",
      "col_ev_times" => "Hora",
      "col_ev_location" => "Local"
      );
  return $columns;
  }

  function agenda_custom_columns($column)
  {
  global $post;
  $custom = get_post_custom();
  switch ($column)
  {
  case "col_ev_date":
      // - show dates -
      if ($custom["agenda_show_date"][0] != '')
      {
        echo date('d/m/Y',$custom["agenda_show_date"][0]);
      } else {
        echo 'Data Próxima';
      }
  break;
  case "col_ev_times":
      // - show times -
      echo $custom["agenda_hour"][0];
  break;
  case "col_ev_location":
      // - show times -
      echo $custom["agenda_location"][0];
  break;

  }
  }

  // Show Meta-Box

  add_action( 'admin_init', 'agenda_create' );

  function agenda_create() {
      add_meta_box('agenda_meta_date', 'Data', 'agenda_meta_date', 'agenda');
      add_meta_box('agenda_meta_hour', 'Horários', 'agenda_meta_hour', 'agenda');
      add_meta_box('agenda_meta_location', 'Local', 'agenda_meta_location', 'agenda');
  }

  function agenda_meta_date () {
    // - grab data -

    global $post;
    $custom = get_post_custom($post->ID);
    $meta_value = $custom["agenda_show_date"][0];

    //if ($meta_value == null) {$meta_value = time(); }

    // - output -

    ?>
    <div class="meta">
      <input type="hidden" name="events-nonce" value="<?php echo wp_create_nonce( 'events-nonce' ); ?>" />
      <input name="agenda_show_date_d" class="location" value="<?php if ($meta_value != null) { echo date('d',$meta_value); }?>" size="2"/>
      <input name="agenda_show_date_m" class="location" value="<?php if ($meta_value != null) { echo date('m',$meta_value); }?>" size="2"/>
      <input name="agenda_show_date_y" class="location" value="<?php if ($meta_value != null) { echo date('Y',$meta_value); }?>" size="4"/>
      <em>DD/MM/YYYY</em>
    </div>
    <?php
  }

  function agenda_meta_location () {
    // - grab data -

    global $post;
    $custom = get_post_custom($post->ID);
    $meta_value = $custom["agenda_location"][0];

    // - output -

    ?>
    <div class="meta">
      <input name="agenda_location" class="location" value="<?php echo $meta_value; ?>" style="width:90%"/>
    </div>
    <?php
  }

  function agenda_meta_hour () {
    // - grab data -

    global $post;
    $custom = get_post_custom($post->ID);
    $meta_value = $custom["agenda_hour"][0];

    // - output -

    ?>
    <div class="meta">
      <textarea name="agenda_hour" class="hour" style="width:90%"><?php echo $meta_value; ?></textarea>
    </div>
    <?php
  }

  // Save Data

  add_action ('save_post', 'save_agenda');

  function save_agenda(){

    global $post;

    // - still require nonce

    if ( !wp_verify_nonce( $_POST['events-nonce'], 'events-nonce' )) {
        return $post->ID;
    }

    if ( !current_user_can( 'edit_post', $post->ID ))
        return $post->ID;

    //if(!isset($_POST["agenda_location"])):
    //return $post;
    //endif;
    $updatelocation = $_POST["agenda_location"];
    update_post_meta($post->ID, "agenda_location", $updatelocation );

    if($_POST["agenda_show_date_y"] != ''):
      $updatedate = strtotime($_POST["agenda_show_date_y"].'-'.$_POST["agenda_show_date_m"].'-'.$_POST["agenda_show_date_d"].' 23:59:59');
    else : 
      $updatedate = '';
    endif;
    update_post_meta($post->ID, "agenda_show_date", $updatedate );

    //if(!isset($_POST["agenda_hour"])):
    //return $post;
    //endif;
    $updatehour = $_POST["agenda_hour"];
    update_post_meta($post->ID, "agenda_hour", $updatehour );

  }

  // Customize Update Messages

  add_filter('post_updated_messages', 'events_updated_messages');

  function events_updated_messages( $messages ) {

    global $post, $post_ID;

    $messages['agenda'] = array(
      0 => '', // Unused. Messages start at index 1.
      1 => sprintf( __('Event updated. <a href="%s">View item</a>'), esc_url( get_permalink($post_ID) ) ),
      2 => __('Custom field updated.'),
      3 => __('Custom field deleted.'),
      4 => __('Event updated.'),
      /* translators: %s: date and time of the revision */
      5 => isset($_GET['revision']) ? sprintf( __('Event restored to revision from %s'), wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,
      6 => sprintf( __('Event published. <a href="%s">View event</a>'), esc_url( get_permalink($post_ID) ) ),
      7 => __('Event saved.'),
      8 => sprintf( __('Event submitted. <a target="_blank" href="%s">Preview event</a>'), esc_url( add_query_arg( 'preview', 'true', get_permalink($post_ID) ) ) ),
      9 => sprintf( __('Event scheduled for: <strong>%1$s</strong>. <a target="_blank" href="%2$s">Preview event</a>'),
        // translators: Publish box date format, see http://php.net/date
        date_i18n( __( 'M j, Y @ G:i' ), strtotime( $post->post_date ) ), esc_url( get_permalink($post_ID) ) ),
      10 => sprintf( __('Event draft updated. <a target="_blank" href="%s">Preview event</a>'), esc_url( add_query_arg( 'preview', 'true', get_permalink($post_ID) ) ) ),
    );

    return $messages;
  }

  // JS Datepicker UI

  function events_styles() {
      global $post_type;
      if( 'agenda' != $post_type )
          return;
      wp_enqueue_style('ui-datepicker', get_bloginfo('template_url') . '/css/jqueryui/jquery-ui-1.10.2.custom.min.css');
  }

  function events_scripts() {
      global $post_type;
      if( 'agenda' != $post_type )
          return;
      wp_enqueue_script('jquery-ui', get_bloginfo('template_url') . '/js/jquery-ui-1.10.2.custom.min.js', array('jquery'));
      wp_enqueue_script('ui-datepicker', get_bloginfo('template_url') . '/js/jquery.ui.datepicker.min.js');
      wp_enqueue_script('custom_script', get_bloginfo('template_url').'/js/script-admin.js', array('jquery'));
  }

  add_action( 'style-admin.css', 'events_styles', 1000 );

  // add_action( 'init', 'add_agenda_rules' );
  // function add_agenda_rules() {
  //     add_rewrite_rule(
  //         "([^/]+)/data/?([0-9]{4})-([0-9]{1,2})-([0-9]{1,2})/?$",
  //         "index.php?name=$matches[1]&date=$matches[2]",
  //         "top");
  // }

  /********************************************************************************/
  /**************** CUSTOM NOTÍCIAS                 *******************************/
  /********************************************************************************/
  add_action('init', 'noticias_register');
  function noticias_register() {
    $labels = array(
      'name' => __('Notícias'),
      'singular_name' => __('Notícia'),
      'add_new' => __('Nova notícia'),
      'add_new_item' => __('Adicionar'),
      'edit_item' => __('Editar'),
      'new_item' => __('Novo'),
      'view_item' => __('Ver'),
      'search_items' => __('Procurar'),
      'not_found' =>  __('Nada encontrado'),
      'not_found_in_trash' => __('Nada encontrado na lixeira'),
      'parent_item_colon' => ''
    );
    $args = array(
      'labels' => $labels,
      'public' => true,
      'publicly_queryable' => true,
      'show_ui' => true,
      'query_var' => true,
      'menu_icon' => get_stylesheet_directory_uri() . '/images/admin/icon_news.png',
      'rewrite' => array('slug' => 'noticias'),
      'capability_type' => 'post',
      'hierarchical' => false,
      'menu_position' => null,
      'supports' => array('title','editor','thumbnail','excerpt','comments'),
      'taxonomies' => array('newscategory', 'post_tag')
      );
    register_post_type( 'noticias' , $args );
    flush_rewrite_rules( );
  }
  
  /*******************************************************************************/
  /************************CUSTOM TAXONOMY PROJETOS***************/
  add_action('init', 'add_project_taxonomy', 0);
  function add_project_taxonomy() {
    $labels = array(
        'name' => _x( 'Projetos', 'taxonomy general name' ),
        'singular_name' => _x( 'Category', 'taxonomy singular name' ),
        'search_items' =>  __( 'Search Categories' ),
        'popular_items' => __( 'Popular Categories' ),
        'all_items' => __( 'Todos os projetos' ),
        'parent_item' => null,
        'parent_item_colon' => null,
        'edit_item' => __( 'Edit Category' ),
        'update_item' => __( 'Update Category' ),
        'add_new_item' => __( 'Add New Category' ),
        'new_item_name' => __( 'New Category Name' ),
        'separate_items_with_commas' => __( 'Separate categories with commas' ),
        'add_or_remove_items' => __( 'Add or remove categories' ),
        'choose_from_most_used' => __( 'Choose from the most used categories' ),
    );

    register_taxonomy('projetos', array('noticias', 'agenda', 'biblioteca'), array(
        'label' => __('Projetos'),
        'labels' => $labels,
        'hierarchical' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => array( 'slug' => 'projetos' ),
        'show_in_nav_menus' => true,
    ));
  }
  
  function add_project_meta_data() {
    echo '<div class="form-field">';
      echo '<label for="term_meta[custom_term_meta]">Cor:</label>';
      echo '<input type="text" name="term_meta[custom_term_meta]" id="term_meta[custom_term_meta]">';
    echo '</div>';
    
    echo '<div class="form-field">';
      echo '<label for="term_meta[custom_term_meta]">Aparecer no topo:</label>';
      echo '<input type="text" name="term_meta[custom_term_meta_topo]" value="S">';
    echo '</div>';
  }
  add_action('projetos_add_form_fields', 'add_project_meta_data', 10, 2 );
  
  function edit_project_meta_data($term) {
    $termId = $term->term_id;
    $termMeta = get_option('taxonomy_'.$termId);
    
    if (!empty($termMeta['custom_term_meta'])) {
      echo '<tr class="form-field">';
        echo '<th scope="row" valign="top">';
          echo '<label for="term_meta[custom_term_meta]">Cor:</label>';
        echo '</th>';
        echo '<td>';
          echo '<input type="text" name="term_meta[custom_term_meta]" id="term_meta[custom_term_meta]" value="'.$termMeta['custom_term_meta'].'">';
        echo '</td>';
      echo '</tr>';
      
      echo '<tr class="form-field">';
        echo '<th scope="row" valign="top">';
          echo '<label for="term_meta[custom_term_meta]">Aparecer no topo:</label>';
        echo '</th>';
        echo '<td>';
          echo '<input type="text" name="term_meta[custom_term_meta_topo]" id="term_meta[custom_term_meta_topo]" value="'.$termMeta['custom_term_meta_topo'].'">';
        echo '</td>';
      echo '</tr>';
    }
  }
  add_action('projetos_edit_form_fields', 'edit_project_meta_data', 10, 2 );
  
  function save_projetos_custom_meta($term_id) {
    if ( isset( $_POST['term_meta'] ) ) {
      $t_id = $term_id;
      $term_meta = get_option( "taxonomy_$t_id" );
      $cat_keys = array_keys( $_POST['term_meta'] );
      foreach ( $cat_keys as $key ) {
        if ( isset ( $_POST['term_meta'][$key] ) ) {
          $term_meta[$key] = $_POST['term_meta'][$key];
        }
      }
      // Save the option array.
      update_option( "taxonomy_$t_id", $term_meta );
    }
  }
  
  add_action( 'edited_projetos', 'save_projetos_custom_meta', 10, 2 );  
  add_action( 'create_projetos', 'save_projetos_custom_meta', 10, 2 );

  add_filter("manage_edit-noticias_columns", "noticias_edit_columns");
  function noticias_edit_columns($columns){
    $columns = array(
      "cb" => "<input type=\"checkbox\" />",
      "title" => "Title",
      "author" => "Author",
    "date" => "Data",
    );
    return $columns;
  }

  function create_noticiascategory_taxonomy() {

    $labels = array(
        'name' => _x( 'Categories', 'taxonomy general name' ),
        'singular_name' => _x( 'Category', 'taxonomy singular name' ),
        'search_items' =>  __( 'Search Categories' ),
        'popular_items' => __( 'Popular Categories' ),
        'all_items' => __( 'All Categories' ),
        'parent_item' => null,
        'parent_item_colon' => null,
        'edit_item' => __( 'Edit Category' ),
        'update_item' => __( 'Update Category' ),
        'add_new_item' => __( 'Add New Category' ),
        'new_item_name' => __( 'New Category Name' ),
        'separate_items_with_commas' => __( 'Separate categories with commas' ),
        'add_or_remove_items' => __( 'Add or remove categories' ),
        'choose_from_most_used' => __( 'Choose from the most used categories' ),
    );

    register_taxonomy('newscategory','noticias', array(
        'label' => __('Category'),
        'labels' => $labels,
        'hierarchical' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => array( 'slug' => 'noticias-category' ),
    ));
  }

add_action( 'init', 'create_noticiascategory_taxonomy', 0 );

  /********************************************************************************/

  /********************************************************************************/
  /**************** CUSTOM BIBLIOTECA               *******************************/
  /********************************************************************************/
  add_action('init', 'biblioteca_register');
  function biblioteca_register() {
    $labels = array(
      'name' => __('Biblioteca'),
      'singular_name' => __('Biblioteca'),
      'add_new' => __('Novo post'),
      'add_new_item' => __('Adicionar'),
      'edit_item' => __('Editar'),
      'new_item' => __('Novo'),
      'view_item' => __('Ver'),
      'search_items' => __('Procurar'),
      'not_found' =>  __('Nada encontrado'),
      'not_found_in_trash' => __('Nada encontrado na lixeira'),
      'parent_item_colon' => ''
    );
    $args = array(
      'labels' => $labels,
      'public' => true,
      'publicly_queryable' => true,
      'show_ui' => true,
      'query_var' => true,
      'menu_icon' => get_stylesheet_directory_uri() . '/images/admin/icon_library.png',
      'rewrite' => array('slug' => 'biblioteca'),
      'capability_type' => 'post',
      'hierarchical' => false,
      'menu_position' => null,
      'supports' => array('title',/*'editor','thumbnail','excerpt','comments'*/ 'page-attributes'),
      'taxonomies' => array('biblioteca-category')
      );
    register_post_type( 'biblioteca' , $args );
    flush_rewrite_rules( );
  }

  add_filter("manage_edit-biblioteca_columns", "biblioteca_edit_columns");
  function biblioteca_edit_columns($columns){
    $columns = array(
      "cb" => "<input type=\"checkbox\" />",
      "title" => "Title",
      "menu_order" => "Ordem",
      "author" => "Author",
    "date" => "Data",
    );
    return $columns;
  }

  function create_bibliotecacategory_taxonomy() {

    $labels = array(
        'name' => _x( 'Categories', 'taxonomy general name' ),
        'singular_name' => _x( 'Category', 'taxonomy singular name' ),
        'search_items' =>  __( 'Search Categories' ),
        'popular_items' => __( 'Popular Categories' ),
        'all_items' => __( 'All Categories' ),
        'parent_item' => null,
        'parent_item_colon' => null,
        'edit_item' => __( 'Edit Category' ),
        'update_item' => __( 'Update Category' ),
        'add_new_item' => __( 'Add New Category' ),
        'new_item_name' => __( 'New Category Name' ),
        'separate_items_with_commas' => __( 'Separate categories with commas' ),
        'add_or_remove_items' => __( 'Add or remove categories' ),
        'choose_from_most_used' => __( 'Choose from the most used categories' ),
    );

    register_taxonomy('librarycategory','biblioteca', array(
        'label' => __('Category'),
        'labels' => $labels,
        'hierarchical' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => array( 'slug' => 'biblioteca' ),
        'show_in_nav_menus' => false,
    ));
  }

  add_action( 'init', 'create_bibliotecacategory_taxonomy', 0 );

  add_action( 'admin_init', 'biblioteca_create' );

  function biblioteca_create() {
      add_meta_box('biblioteca_meta_link', 'Link', 'biblioteca_meta_link', 'biblioteca');
  }

  function biblioteca_meta_link () {
    // - grab data -
    global $post;
    $custom = get_post_custom($post->ID);
    $meta_value = $custom["library_link"][0];
    // - output -
    ?>
    <div class="meta">
      <input type="hidden" name="library-nonce" value="<?php echo wp_create_nonce( 'library-nonce' ); ?>" />
      <input name="library_link" class="link" value="<?php echo $meta_value; ?>" style="width:90%" />
    </div>
    <?php
  }

  add_action ('save_post', 'save_biblioteca');

  function save_biblioteca(){

    global $post;

    // - still require nonce

    if ( !wp_verify_nonce( $_POST['library-nonce'], 'library-nonce' )) {
        return $post->ID;
    }

    if ( !current_user_can( 'edit_post', $post->ID ))
        return $post->ID;


    update_post_meta($post->ID, "library_link", $_POST['library_link'] );

  }

  /********************************************************************************/
  /**************** CUSTOM PERGUNTAS FREQUENTES     *******************************/
  /********************************************************************************/
  add_action('init', 'faq_register');
  function faq_register() {
    $labels = array(
      'name' => __('Perguntas frequentes'),
      'singular_name' => __('Pergunta'),
      'add_new' => __('Nova pergunta'),
      'add_new_item' => __('Adicionar'),
      'edit_item' => __('Editar'),
      'new_item' => __('Nova'),
      'view_item' => __('Ver'),
      'search_items' => __('Procurar'),
      'not_found' =>  __('Nada encontrado'),
      'not_found_in_trash' => __('Nada encontrado na lixeira'),
      'parent_item_colon' => ''
    );
    $args = array(
      'labels' => $labels,
      'public' => true,
      'publicly_queryable' => true,
      'show_ui' => true,
      'query_var' => true,
      'menu_icon' => get_stylesheet_directory_uri() . '/images/admin/icon_faq.png',
      'rewrite' => array('slug' => 'faq'),
      'capability_type' => 'post',
      'hierarchical' => false,
      'menu_position' => null,
      'supports' => array('title','editor'/*,'thumbnail','excerpt','comments', 'page-attributes'*/)
      );
    register_post_type( 'wp_super_faq' , $args );
    flush_rewrite_rules( );
  }

  add_filter("manage_edit-faq_columns", "faq_edit_columns");
  function faq_edit_columns($columns){
    $columns = array(
      "cb" => "<input type=\"checkbox\" />",
      "title" => "Title",
      "author" => "Author",
    "date" => "Data",
    );
    return $columns;
  }


/********************************************************************************/
  /**************** CUSTOM HOME SLIDER            *******************************/
  /******************************************************************************/
  add_action('init', 'slider_register');
  function slider_register() {
    $labels = array(
      'name' => __('Slider'),
      'singular_name' => __('Slider'),
      'add_new' => __('Novo slider'),
      'add_new_item' => __('Adicionar'),
      'edit_item' => __('Editar'),
      'new_item' => __('Novo'),
      'view_item' => __('Ver'),
      'search_items' => __('Procurar'),
      'not_found' =>  __('Nada encontrado'),
      'not_found_in_trash' => __('Nada encontrado na lixeira'),
      'parent_item_colon' => ''
    );
    $args = array(
      'labels' => $labels,
      'public' => true,
      'publicly_queryable' => true,
      'show_ui' => true,
      'query_var' => true,
      'menu_icon' => get_stylesheet_directory_uri() . '/images/admin/icon-calendar.png',
      'rewrite' => array('slug' => 'slider','with_front' => FALSE),
      'capability_type' => 'post',
      '_builtin' => false,
      'hierarchical' => false,
      'menu_position' => null,
      'supports' => array('title','editor', 'page-attributes'/*,'excerpt', 'thumbnail'*/),
      //'taxonomies' => array('category', 'post_tag')
      );
    register_post_type( 'slider' , $args );
    flush_rewrite_rules( );
  }

  // Show Columns

  //add_filter ("manage_edit-slider_columns", "slider_edit_columns");

  function slider_edit_columns($columns) {

  $columns = array(
      "cb" => "<input type=\"checkbox\" />",
      "title" => "Título",
      'menu_order' => "Ordem"
      );
  return $columns;
  }

  
add_action('admin_menu', 'zoneamento_menu_pages');
function zoneamento_menu_pages() {
    // Add the top-level admin menu
    $page_title = 'Acervo - Fotos Pendentes';
    $menu_title = 'Zoneamento';
    
    //$capability - criar
    $capability = 'zoneamento';
    
    $menu_slug = 'zoneamento_settings';
    $function = 'zoneamento_settings';
    add_menu_page($page_title, $menu_title, $capability, $menu_slug, $function);

    // Add submenu page with same slug as parent to ensure no duplicates
    $sub_menu_title = 'Acervo - Fotos Pendentes';
    add_submenu_page($menu_slug, $page_title, $sub_menu_title, $capability, $menu_slug, $function);

    // Now add the submenu page 
    $submenu_page_title = 'Acervo - Fotos Aprovadas e Reprovadas';
    $submenu_title = 'Acervo - Fotos Aprovadas e Reprovadas';
    $submenu_slug = 'zoneamento-moderadas';
    $submenu_function = 'zoneamento_moderadas';
    add_submenu_page($menu_slug, $submenu_page_title, $submenu_title, $capability, $submenu_slug, $submenu_function);
    
    /*$submenu_page_title = 'Acervo - Categorias';
    $submenu_title = 'Acervo - Categorias';
    $submenu_slug = 'zoneamento-categorias';
    $submenu_function = 'zoneamento_categorias';
    add_submenu_page($menu_slug, $submenu_page_title, $submenu_title, $capability, $submenu_slug, $submenu_function);
    */
    //zoneamento_db();
}

add_action( 'admin_enqueue_scripts', 'my_enqueue_css' );
function my_enqueue_css() {
    //if( 'edit.php' != $hook )
        //return;
//echo '<link rel="stylesheet" type="text/css" href="stylefs.css">'."\n";
    global $hook_suffix;
    if (
            $hook_suffix == 'toplevel_page_zoneamento_settings'
            || $hook_suffix == 'zoneamento_page_zoneamento-moderadas'
            || $hook_suffix == 'zoneamento_page_zoneamento-moderadas'
            || $hook_suffix == 'toplevel_page_ceu_pendentes'
            || $hook_suffix == 'toplevel_page_minhocao_pendentes'
            || $hook_suffix == 'minhocao_page_minhocao_moderadas'
            || $hook_suffix == 'toplevel_page_wifi_pendentes'
            || $hook_suffix == 'wifi_page_wifi_moderadas'
        )
    {
?>
        <style type='text/css'>
        .onoffswitch {
        position: relative; width: 120px;
        -webkit-user-select:none; -moz-user-select:none; -ms-user-select: none;
        }
        .onoffswitch input[type=checkbox] {
        display: none;
        }
        .onoffswitch-checkbox {
        display: none;
        }
        .onoffswitch-label {
        display: block; overflow: hidden; cursor: pointer;
        border: 2px solid #999999; border-radius: 20px;
        }
        .onoffswitch-inner {
        width: 200%; margin-left: -100%;
        -moz-transition: margin 0.3s ease-in 0s; -webkit-transition: margin 0.3s ease-in 0s;
        -o-transition: margin 0.3s ease-in 0s; transition: margin 0.3s ease-in 0s;
        }
        .onoffswitch-inner:before, .onoffswitch-inner:after {
        float: left; width: 50%; height: 30px; padding: 0; line-height: 30px;
        font-size: 14px; color: white; font-family: Trebuchet, Arial, sans-serif; font-weight: bold;
        -moz-box-sizing: border-box; -webkit-box-sizing: border-box; box-sizing: border-box;
        }
        .onoffswitch-inner:before {
        content: 'Aprovado';
        padding-left: 10px;
        background-color: #31B404;
        background-color: #2FCCFF;
        color: #FFFFFF;
        }
        .onoffswitch-inner:after {
        content: 'Reprovado';
        padding-right: 10px;
        background-color: #EEEEEE;
        background-color: #EEEEEE;
        color: #999999;
        text-align: right;
        }
        .onoffswitch-inner.readonly:after {
        content: 'Pendente';
        padding-right: 10px;
        background-color: #EEEEEE;
        background-color: #FE2E2E;
        color: #FFFFFF;
        text-align: right;
        }
        .onoffswitch-switch {
        width: 18px; margin: 6px;
        background: #FFFFFF;
        border: 2px solid #999999; border-radius: 20px;
        position: absolute; top: 0; bottom: 0; right: 86px;
        -moz-transition: all 0.3s ease-in 0s; -webkit-transition: all 0.3s ease-in 0s;
        -o-transition: all 0.3s ease-in 0s; transition: all 0.3s ease-in 0s;
        }
        .onoffswitch-checkbox:checked + .onoffswitch-label .onoffswitch-inner {
        margin-left: 0;
        }
        .onoffswitch-checkbox:checked + .onoffswitch-label .onoffswitch-switch {
        right: 0px;
        }
        .aprovacao_table
        { 
            border-collapse: collapse; 
        }
        .aprovacao_table tr td
        {
          border-top: 1px solid black;
          padding: 5px 18px 5px 5px;
        }
        .aprovacao_table tr th
        {
          text-align: center;
        }
        </style>
<?php
    }



}


add_action( 'admin_enqueue_scripts', 'my_enqueue_js' );
function my_enqueue_js() {
    //if( 'edit.php' != $hook )
        //return;
//echo '<link rel="stylesheet" type="text/css" href="stylefs.css">'."\n";
    global $hook_suffix;
    if ($hook_suffix == 'toplevel_page_zoneamento_settings' || $hook_suffix == 'zoneamento_page_zoneamento-moderadas')
    {
?>
        <script type='text/javascript'>
            function click_botao(x, cb)
            {
                var myObj = document.getElementById("onoffswitch-inner"+x);
                
                if (cb.readOnly)
                {
                    cb.readOnly = false;
                    jQuery(myObj).removeClass('readonly');
                }

                if (document.getElementById("myonoffswitch"+x).checked)
                {
                    var a = '1';
                }
                else
                {
                    var a = '0';
                }
                
                jQuery.ajax({
                type: 'POST',
                url: '<?php echo admin_url( 'admin-ajax.php' ) ?>',
                data: { action: 'zoneamento_status_aprovacao', value: a, id: x },
                success: function(html){
                    //jQuery('#display').html(html).show();
                    //alert(html);
                }
                });
            }
        </script>
<?php
    }
}


function zoneamento_tabela($tipo) {
    
?>
    <br/>
    <br/>
    <div id="display"></div>
    <script type='text/javascript'>
        jQuery(document).ready(function(){
            //jQuery('#myonoffswitch').css({':content':'null'});
            //jQuery('label[for=email]').addClass('readonly');
            
            jQuery( ".parametrosCombo" ).change(function()
            {
                var idThis = this.id;
                id = idThis.substring(0, idThis.indexOf("_"));
                var idImagem = id.replace("id", ""); 
                //alert(idImagem);
                var categorias = '0';
                jQuery( 'select[id^="' + id + '"]' ).each(function ()
                {
                    if (jQuery( "#" + this.id + " option:selected" ).val() != "")
                    {
                        categorias += ';' + jQuery( "#" + this.id + " option:selected" ).val();
                    }
                });
                //alert( categorias );
                updateCategorias(idImagem, categorias);
            });
        });

        function rotatePhoto(photo, rotate)
        {
            jQuery.ajax({
                type: 'POST',
                url: '<?php echo admin_url( 'admin-ajax.php' ); ?>',
                //data: { action: 'sendPhoto', id: id, photo: photo },
                data: { action: 'rotateImage', photo: photo, rotate: rotate },
                success: function(html){
                    //jQuery('#display').html(html).show();
                    location.reload(true);
                }
            });
        }

        function updateCategorias(id, categorias)
        {
            jQuery.ajax({
                type: 'POST',
                url: '<?php echo admin_url( 'admin-ajax.php' ); ?>',
                data: { action: 'sendCategorias', id: id, categorias: categorias },
                success: function(html){
                    //jQuery('#display').html(html).show();
                    //location.reload(true);
                }
            });
        }
    </script>
    <table class="aprovacao_table">
        <tr>
        <th>
            Foto
        </th>
        <th>
            Parâmetros
        </th>
        <!--<th>
            Descrição
        </th>-->
        <th>
            Nome
        </th>
        <th>
            Email
        </th>
        <th>
            Região
        </th>
        <th>
            Endereço
        </th>
        <th>
            Número
        </th>
        <th>
            Origem
        </th>
        <th>
            Moderação
        </th>
        </tr>
<?php
    foreach (zoneamento_get_imagens($tipo) as $row)
    {
?>
        <tr>
        <td>
            <table>
                <tr>
                    <td style="padding: 0px; border: 0px;">
                        <input type="image" src="https://cdn1.iconfinder.com/data/icons/defaulticon/icons/png/48x48/redo.png" onClick="rotatePhoto('<?php echo basename ($row->imagem) ?>', '-90')" >
                    </td>
                    <td style="padding: 0px; border: 0px;">
                        <a href="<?php echo $row->imagem ?>" target="_blank"><img alt='' src="<?php echo $row->imagem ?>?<?php echo time() ?>" style='width: 230px;' ></a>
                    </td>
                    <td style="padding: 0px; border: 0px;">
                        <input type="image" src="https://cdn1.iconfinder.com/data/icons/defaulticon/icons/png/48x48/undo.png" onClick="rotatePhoto('<?php echo basename ($row->imagem) ?>', '90')" >
                    </td>
                </tr>
            </table>
        </td>
        <td>
            <div >
            <?php
                $parametros = array
                    (
                        1 => 'Uso Misto'
                      , 2 => 'Fachada Ativa'
                      , 3 => 'Fruição Pública'
                      , 4 => 'Permeabilidade visual do térreo'
                      , 5 => 'Calçada com qualidade urbana'
                      , 6 => 'Fachada ou teto verde'
                    );
                
                $categorias = explode(";", $row->categorias);
                for ($i = 1; $i < count($categorias); $i++)
                {
                    if ($categorias[$i])
                    {
                        //echo $parametros[$categorias[$i]];
                        //echo "<br>";
            ?>
                        <select id="id<?php echo $row->id ?>_<?php echo $i ?>" class="parametrosCombo">
                            <option></option>
                            <?php
                                for ($ifor = 1; $ifor <= 6; $ifor++)
                                {
                                    $selected = "";
                                    if ($categorias[$i] == $ifor)
                                    {
                                        $selected = "selected";
                                    }
                            ?>
                                    <option <?php echo $selected ?> value="<?php echo $ifor ?>" ><?php echo $parametros[$ifor] ?></option>
                            <?php
                                }
                            ?>
                        </select>
            <?php
                    }
                }
            ?>
            </div>
        </td>
        <!--<td>
            <?php //echo $row->descricao ?>
        </td>-->
        <td>
            <?php echo ucwords( mb_strtolower( $row->name, 'UTF-8' ) ) ?>
        </td>
        <td>
            <?php echo $row->email ?>
        </td>
        <td>
            <?php echo $row->regiao ?>
        </td>
        <td>
            <?php echo $row->endereco ?>
        </td>
        <td>
            <?php echo $row->numero ?>
        </td>
        <td>
            <?php echo $row->origem ?>
        </td>
        <td>
            <div class="onoffswitch">
                <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch<?php echo $row->id; ?>"
                <?php
                if($row->aprovado == "1")
                {
                    echo " checked ";
                }

                if($row->aprovado == null)
                {
                    echo " readonly ";
                }

                ?> onclick="click_botao(<?php echo $row->id; ?>, this);">
                <label class="onoffswitch-label" for="myonoffswitch<?php echo $row->id; ?>">
                <div id="onoffswitch-inner<?php echo $row->id; ?>" class="onoffswitch-inner<?php

                if($row->aprovado == null)
                {
                    echo " readonly ";
                }

                ?>"></div>
                <div class="onoffswitch-switch"></div>
                </label>
            </div>
    <?php  ?>
        </td>
        </tr>
<?php
    }
?>
    </table>
    <?php
}

function zoneamento_settings() {
    if (!current_user_can('zoneamento')) {
        wp_die('Você não tem permissão para acessar esta página');
    }
    
    //require_once 'test.php';
    
zoneamento_tabela('moderar');

}


add_action( 'wp_ajax_zoneamento_status_aprovacao', 'zoneamento_status_aprovacao_ajax' );
function zoneamento_status_aprovacao_ajax()
{
    //echo $_POST['id']. ':' . $_POST['value']. ':.:';
    if(isset($_POST['id']) && isset($_POST['value']))
    {

    $id = '';
    $id = (string)$_POST['id'];
    $value = '';
    $value = (string)$_POST['value'];

    //echo $id. ':' . $value. ':.:';

    global $wpdb;
    //$wpdb->update('wp_zoneamento_imagem', 
    //  array( 
    //    'aprovado' => $value
    //  ), 
    //  array( 'id' => $id ), 
    //  array( 
    //    '%d'
    //  ), 
    //  array( '%d' )
    //        );
    $query = "update wp_zoneamento_imagem set aprovado = " . $value . " where id = " . $id;
    //echo $query;
    $wpdb->query($query);
    //if ($wpdb->query($query) === FALSE) {
    //  echo "errokhjkghj h";
    //} else {
    //  echo "ok";//$wpdb->get_results($query);
    //}

     //echo $wpdb->last_error;
    die();
    }
}


function zoneamento_moderadas()
{
    if (!current_user_can('zoneamento'))
    {
        wp_die('Você não tem permissão para acessar esta página');
    }

    zoneamento_tabela('moderados');
}

//add_action( 'wp_ajax_imagensAprovadas', 'zoneamento_imagensAprovadas' );
//add_action('wp_ajax_nopriv_imagensAprovadas', 'zoneamento_imagensAprovadas');
function zoneamento_imagensAprovadasPre()
{
    ?>
        <script type='text/javascript'>
            function rotatePhoto()
            {
                jQuery.ajax({
                type: 'POST',
                url: '<?php echo admin_url( 'admin-ajax.php' ); ?>',
                //data: { action: 'sendPhoto', id: id, photo: photo },
                data: { action: 'imagensAprovadas', parametros: 0 },
                success: function(html){
                    //jQuery('#display').html(html).show();
                    //location.reload(true);
                }
                });
            }
        </script>
    <?php
}

add_action( 'wp_ajax_imagensAprovadas', 'zoneamento_imagensAprovadas' );
add_action('wp_ajax_nopriv_imagensAprovadas', 'zoneamento_imagensAprovadas');
function zoneamento_imagensAprovadas()
{
    //echo $_POST['parametros'] . ':.:';
    if(isset($_POST['parametros']))
    {
        $parametros = '';
        $parametros = (string)$_POST['parametros'];

        //echo $_POST['parametros'] . ':.:';
        
        $parametrosE = explode(";", $parametros);
        //print_r($parametrosE); echo ":.:";
        
        $sqlParametros = "";
        
        for ($i = 1; $i < count($parametrosE); $i++)
        {
            if ($i == 1)
            {
                $parametro = (string)$parametrosE[$i];
                //echo $parametro . ":.........:";
                $sqlParametros .= "img.categorias like '%" . $parametro . "%'";
            }
            else
            {
                $parametro = (string)$parametrosE[$i];
                //echo $parametro . ":.........:";
                $sqlParametros .= "or img.categorias like '%" . $parametro . "%'";
            }
            //echo $sqlParametros . ":.:";
        }
        
        if (count($parametrosE) == 1 && isset($parametrosE[0]))
        {
            $sqlParametros = "1 = 1";
        }
        
        global $wpdb;

        $query = ""
            . " SELECT img.id, img.imagem, img.descricao, img.aprovado, img.categorias, usu.name, img.regiao, img.endereco, img.numero"
            . " FROM wp_zoneamento_imagem img, wp_zoneamento_usuario usu"
            . " WHERE 0 = 0"
            . "   and img.tokenusuario = usu.token"
            . "   and img.aprovado = 1"
            . "   and ("
            . $sqlParametros
            . "       )"
            . " Order by length(img.categorias) desc, img.id desc"
            . " ";
        //echo $query;

        $results = $wpdb->get_results( $query );
        //print_r ($results);

?>
        <div class="result">
            <?php
                foreach ($results as $row)
                {
            ?>
            <div class="resultinterno">
                <div>
                    <!--<a class="fancybox" rel="fancybox" href="<?php echo $row->imagem ?>"><img alt='' src="<?php echo $row->imagem ?>?<?php echo time() ?>" style='width: 250px;' /></a>-->
                    <a class="fancybox" href="<?php echo $row->imagem ?>"><img alt='<?php echo $row->imagem ?>' src="<?php echo $row->imagem ?>" style='max-width: 250px; max-height: 167px;' /></a>
                </div>
                <div class="linha">
                    <?php echo ucwords( mb_strtolower( $row->name, 'UTF-8' ) ); ?>
                </div>
                <div class="parametros">
                    <?php
                        $parametros = array
                            (
                                1 => 'Uso Misto'
                              , 2 => 'Fachada Ativa'
                              , 3 => 'Fruição Pública'
                              , 4 => 'Permeabilidade visual do térreo'
                              , 5 => 'Calçada com qualidade urbana'
                              , 6 => 'Fachada ou teto verde'
                            );

                        $categorias = explode(";", $row->categorias);
                        for ($i = 1; $i < count($categorias); $i++)
                        {
                            if ($categorias[$i])
                            {
                                echo "<div>";
                                echo $parametros[$categorias[$i]];
                                echo "</div>";
                            }
                        }
                    ?>
                </div>
                <div class="linha">
                    Região <?php echo $row->regiao ?>
                </div>
            </div>
            <?php
                }
            ?>
        </div>
        <script type="text/javascript">
            jQuery(document).ready(function() {
                jQuery(".fancybox").fancybox();
            });
        </script>
<?php
        die();
    }
}

function zoneamento_get_imagens($tipo)
{
    $query_tipo = "";
    $query_order = "";
    if ($tipo == "moderar")
    {
        $query_tipo = "   and img.aprovado is null";
        $query_order = " Order by img.id";
    }
    if ($tipo == "moderados")
    {
        $query_tipo = "   and img.aprovado is not null";
        $query_order = " Order by img.id desc";
    }
    if ($tipo == "aprovados")
    {
        $query_tipo = "   and img.aprovado = 1";
        $query_order = " Order by img.id desc";
    }
    
    global $wpdb;
    $query = ""
        //. " SELECT img.id, img.imagem, img.descricao, img.aprovado, usu.name, usu.email, cat.categoria"
        . " SELECT img.id, img.imagem, img.descricao, img.aprovado, img.categorias, usu.name, usu.email, img.origem, img.regiao, img.endereco, img.numero"
        //. " FROM wp_zoneamento_imagem img, wp_zoneamento_usuario usu, wp_zoneamento_categoria cat"
        . " FROM wp_zoneamento_imagem img, wp_zoneamento_usuario usu"
        . " WHERE 0 = 0"
        //. "   and img.idcategoria = cat.id"
        . "   and img.tokenusuario = usu.token"
        . $query_tipo
        . $query_order
        . " ";
    //echo $querystr;
    
    $results = $wpdb->get_results( $query );
    //print_r ($results);
    
    return $results;
}


add_action( 'wp_ajax_rotateImage', 'image_rotate' );

//function image_rotate($img, $photo, $rotate)
function image_rotate()
{
    //echo $_POST['photo']. ':' . $_POST['rotate']. ':.:';
    if(isset($_POST['photo']) && isset($_POST['rotate']))
    {
        //echo $_POST['photo']. ':' . $_POST['rotate']. ':.:';
        
        $photo = (string)$_POST['photo'];
        $rotate = (int)$_POST['rotate'];
        
        $upload_dir = wp_upload_dir();
        $filename = $upload_dir['basedir'] . "/zoneamento/acervo/" . $photo;
        
        $source = imagecreatefromjpeg($filename);
        if ($source !== false)
        {
            //imagealphablending($source, false);
            //imagesavealpha($source, true);

            // This should create transparent background.
            //$bgd_color = imagecolorallocatealpha($img, 0, 0, 0, 127);

            $rotation = imagerotate($source, $rotate, 0);
            //$rotation = imagerotate($source, 90);
            //imagealphablending($rotation, false);
            //imagesavealpha($rotation, true);
            
            header('Content-type: image/jpeg');
            imagejpeg($rotation, $filename);
            imagedestroy($source);
            imagedestroy($rotation);
        }
    }
}

function zoneamento_categorias() {
    if (!current_user_can('zoneamento')) {
        wp_die('Você não tem permissão para acessar esta página');
    }
?>
    <br/>
    <br/>
    <div id="display"></div>

      <?php
         if ( isset( $_GET['m'] ) && $_GET['m'] == '1' )
         {
      ?>
            <div id='message' class='updated fade'><p><strong>Categoria Salva.</strong></p></div>
      <?php
         }
      ?>
  <script type='text/javascript'>
            jQuery(document).ready(function(){
                //jQuery('#myonoffswitch').css({':content':'null'});
                //jQuery('label[for=email]').addClass('readonly');
document.getElementById("categoria").focus();

});
function preencher_combo(x, cb)
{
    var elem = document.getElementById("categoria_id");
    elem.value = x;

    var elem1 = document.getElementById("categoria");
    elem1.value = cb;
    elem1.focus();
}
    </script>
    
    <br/>
    <form method="post" action="<?php echo admin_url('admin-post.php') ?>">
        <input type="hidden" name="action" value="add_foobar">
        <input type="hidden" name="categoria_id" id="categoria_id" value="">
        Nova Categoria: <input type="text" name="categoria" id="categoria" value="">
        <input type="submit" value="Salvar" class="button-primary">
    </form>
            
    <br/>
    <table class="aprovacao_table">
        <tr>
        <th>
            Categoria
        </th>
        <th>
            Editar
        </th>
        </tr>
<?php
    foreach (zoneamento_get_categorias() as $row)
    {
?>
        <tr>
        <td>
            <?php echo $row->categoria ?>
        </td>
        <td style="text-align: center;">
            <div class="dashicons dashicons-welcome-write-blog" onclick="preencher_combo('<?php echo $row->id ?>', '<?php echo $row->categoria ?>')" style="cursor: pointer;"></div>
        </td>
        </tr>
<?php
    }
?>
    </table>
    

<?php

}
/*
function zoneamento_get_categorias()
{    
    global $wpdb;
    $query = ""
        . " SELECT *"
        . " FROM wp_zoneamento_categoria"
        . " Order by categoria"
        . " ";
    
    $results = $wpdb->get_results( $query );
    
    return $results;
}

add_action( 'admin_post_add_foobar', 'prefix_admin_add_foobar' );

function prefix_admin_add_foobar()
{
    if (!current_user_can('zoneamento'))
    {
        wp_die('Você não tem permissão para acessar esta página');
    }
    
    ?>

    <?php
    
    if ( isset($_POST['categoria_id']) && isset($_POST['categoria']))
    {
        zoneamento_set_categorias($_POST['categoria_id'], $_POST['categoria']);
        wp_redirect(  admin_url( 'admin.php?page=zoneamento-categorias&m=1' ) );
        exit;
    }
    else
    {
        wp_redirect(  admin_url( 'admin.php?page=zoneamento-categorias' ) );
        exit;
    }
}

function zoneamento_set_categorias($id, $categoria)
{
    global $wpdb;
    $query = "update wp_zoneamento_categoria set categoria = '" . $categoria . "' where id = " . $id;
    $wpdb->query($query);
}*/

add_action( 'wp_ajax_sendPhoto', 'zoneamento_sendPhoto' );
add_action('wp_ajax_nopriv_sendPhoto', 'zoneamento_sendPhoto');
function zoneamento_sendPhoto()
{
    //echo ':entrou no ajax.:';
  global $wpdb;
    //echo "<script type='text/javascript'>Android.showToast1('entrou no ajax send photo');</script>";
    //echo $_POST['id']. ':' . $_POST['photo']. ':.:';
    if(isset($_POST['token']) && isset($_POST['photo']) && isset($_POST['parametros']) && isset($_POST['regiao']) && isset($_POST['endereco']) && isset($_POST['numero']))
    {
        $token = (string)$_POST['token'];
        $photo = (string)$_POST['photo'];
        $parametros = (string)$_POST['parametros'];
        $regiao = (string)$_POST['regiao'];
        $endereco = (string)$_POST['endereco'];
        $numero = (string)$_POST['numero'];

        //echo $id. ':' . $photo . ':.:';
    
    /*ini_set('track_errors', 1);
        $fh = fopen($myFile, 'w') or die($php_errormsg);
        fwrite($fh, $photo);
        fclose($fh);*/
        
    /*$image = imagecreatefromstring($photo);
    imagejpeg($image, $myFile, 90);
    imagedestroy($image);*/
    
    //save_image($photo, $myFile);
    
    
        //echo $id. ':' . $value. ':.:';
        
        
        $query = "insert into wp_zoneamento_imagem (imagem, descricao, idcategoria, tokenusuario, dataenvio, origem, categorias, regiao, endereco, numero) "
               . " values ('" . $filehttp . "', '', 1, '" . $token . "', NOW(), 'android', '" . $parametros . "', '" . $regiao . "', '" . $endereco . "', '" . $numero . "' )";
        //echo $query;
        
        $wpdb->query($query);
        
        $id = $wpdb->insert_id;
        
        $upload_dir = wp_upload_dir();
        $myFile = $upload_dir['basedir'] . "/zoneamento/acervo/" . $id . ".jpg";
        $filehttp = $upload_dir['baseurl'] . "/zoneamento/acervo/" . $id . ".jpg";
        
        $queryUpdate = "update wp_zoneamento_imagem set imagem = '" . $filehttp . "' where id = " . $id;
        //echo $query;
        $wpdb->query($queryUpdate);
        
        $data = base64_decode($photo);

        if ($id)
        {
            $im = imagecreatefromstring($data);
            if ($im !== false)
            {
                $width = imagesx($im);
                $height = imagesy($im);
                
                if ($width > 1500 || $height > 1500)
                {
                    if ($width > $height)
                    {
                        $percentage = (1500 / $width);
                    }
                    else
                    {
                        $percentage = (1500 / $height);
                    }

                    $widthNew = round($width * $percentage);
                    $heightNew = round($height * $percentage);
                    
                    $image_p = imagecreatetruecolor($widthNew, $heightNew);
                    imagecopyresampled($image_p, $im, 0, 0, 0, 0, $widthNew, $heightNew, $width, $height);
                    
                    header('Content-type: image/jpeg');
                    imagejpeg($image_p, $myFile);
                    imagedestroy($image_p);
                }
                else
                {
                    header('Content-type: image/jpeg');
                    imagejpeg($im, $myFile);
                    imagedestroy($im);
                }
                
                echo $id;
                die();
            }
            else
            {
                //echo "<script type='text/javascript'>Android.showToast1('Não foi possível enviar sua imagem!');</script>";
                echo 'erro1';
                die();
            }
        }
        else
        {
            echo "erro2";
            die();
        }
    }
}

add_action( 'wp_ajax_sendPhotoSite', 'zoneamento_sendPhotoSite' );
add_action('wp_ajax_nopriv_sendPhotoSite', 'zoneamento_sendPhotoSite');
function zoneamento_sendPhotoSite()
{
    //echo ':entrou no ajax.:';
  global $wpdb;
    //echo "<script type='text/javascript'>Android.showToast1('entrou no ajax send photo');</script>";
    //echo $_POST['token']. ':' . $_POST['photo']. ':.:';
    if(isset($_POST['token']) && isset($_POST['photo']) && isset($_POST['parametros']) && isset($_POST['regiao']) && isset($_POST['endereco']) && isset($_POST['numero']))
    {
        $token = (string)$_POST['token'];
        $photo = (string)$_POST['photo'];
        $parametros = (string)$_POST['parametros'];
        $regiao = (string)$_POST['regiao'];
        $endereco = (string)$_POST['endereco'];
        $numero = (string)$_POST['numero'];

        //echo $token. ':' . $photo . ':.:';
        
        $query = "insert into wp_zoneamento_imagem (imagem, descricao, idcategoria, tokenusuario, dataenvio, origem, categorias, regiao, endereco, numero) "
               . " values ('', '', 1, '" . $token . "', NOW(), 'site', '" . $parametros . "', '" . $regiao . "', '" . $endereco . "', '" . $numero . "' )";
        //echo $query;
        $wpdb->query($query);
        
        $id = $wpdb->insert_id;
        
        $upload_dir = wp_upload_dir();
        $myFile = $upload_dir['basedir'] . "/zoneamento/acervo/" . $id . ".jpg";
        //echo $myFile;
        $filehttp = $upload_dir['baseurl'] . "/zoneamento/acervo/" . $id . ".jpg";
        
        $queryUpdate = "update wp_zoneamento_imagem set imagem = '" . $filehttp . "' where id = " . $id;
        //echo $query;
        $wpdb->query($queryUpdate);
        
        if ($id)
        {
            //$photo1 = str_replace("image/jpeg;base64,", "", $photo);
            //$data = base64_decode($photo);
            //$im = imagecreatefromstring($data);
            $im = imagecreatefromjpeg($photo);
            //$im = file_put_contents($myFile, $data);

            //echo ':.' . $im . '.:';
            if ($im !== false)
            {
                $width = imagesx($im);
                $height = imagesy($im);
                
                if ($width > 1500 || $height > 1500)
                {
                    if ($width > $height)
                    {
                        $percentage = (1500 / $width);
                    }
                    else
                    {
                        $percentage = (1500 / $height);
                    }

                    $widthNew = round($width * $percentage);
                    $heightNew = round($height * $percentage);
                    
                    $image_p = imagecreatetruecolor($widthNew, $heightNew);
                    imagecopyresampled($image_p, $im, 0, 0, 0, 0, $widthNew, $heightNew, $width, $height);
                    
                    header('Content-type: image/jpeg');
                    imagejpeg($image_p, $myFile);
                    imagedestroy($image_p);
                }
                else
                {
                    header('Content-type: image/jpeg');
                    imagejpeg($im, $myFile);
                    imagedestroy($im);
                }
                
                echo "Enviado com Sucesso!";
                die();
            }
            else
            {
                echo 'false';
                die();
            }
        }
        else
        {
            echo "erro";
            die();
        }
    }
}

add_action( 'wp_ajax_sendCategorias', 'get_sendCategorias' );
add_action('wp_ajax_nopriv_sendCategorias', 'get_sendCategorias');
function get_sendCategorias()
{
    //echo ':entrou no ajax.:';
    global $wpdb;
    /*echo "<script type='text/javascript'>Android.showToast1('entrou no ajax send photo');</script>";*/
    //echo $_POST['id']. ':' . $_POST['categorias']. ':.:';
    if(isset($_POST['id']) && isset($_POST['categorias']))
    {
        $id = (string)$_POST['id'];
        $categorias = (string)$_POST['categorias'];
        
        $query = "update wp_zoneamento_imagem set categorias = '" . $categorias . "' where id = " . $id;
        //echo $query;
        $wpdb->query($query);
        die();
    }
}

add_action( 'wp_ajax_userLogin', 'zoneamento_userLogin' );
add_action('wp_ajax_nopriv_userLogin', 'zoneamento_userLogin');
function zoneamento_userLogin()
{
    //echo ':entrou no ajax.:';
    global $wpdb;
    /*echo "<script type='text/javascript'>Android.showToast1('entrou no ajax send photo');</script>";*/
    //echo $_POST['id']. ':' . $_POST['categorias']. ':.:';
    if(isset($_POST['email']) && isset($_POST['senha']))
    {
        $email = (string)$_POST['email'];
        $senha = (string)$_POST['senha'];
        
        $token = $wpdb->get_var( "select token from wp_zoneamento_usuario where email = '" . $email . "' and senha = PASSWORD('" .  $senha . "')" );
        if ($token)
        {
            echo $token;
            die();
        }
        else
        {
            echo "false";
            die();
        }
        die();
    }
}

add_action( 'wp_ajax_userVerifica', 'zoneamento_userVerifica' );
add_action('wp_ajax_nopriv_userVerifica', 'zoneamento_userVerifica');
function zoneamento_userVerifica()
{
    //echo ':entrou no ajax.:';
    global $wpdb;
    /*echo "<script type='text/javascript'>Android.showToast1('entrou no ajax send photo');</script>";*/
    //echo $_POST['id']. ':' . $_POST['categorias']. ':.:';
    if(isset($_POST['id']))
    {
        $id = (int)$_POST['id'];
        
        $user_count = $wpdb->get_var( "select count(*) from wp_zoneamento_usuario where id = " . $id . "" );
        if ($user_count > 0)
        {
            echo "id existente";
        }
        die();
    }
}

add_action( 'wp_ajax_userGrava', 'zoneamento_userGrava' );
add_action('wp_ajax_nopriv_userGrava', 'zoneamento_userGrava');
function zoneamento_userGrava()
{
    //echo ':entrou no ajax.:';
    global $wpdb;
    /*echo "<script type='text/javascript'>Android.showToast1('entrou no ajax send photo');</script>";*/
    //echo $_POST['id']. ':' . $_POST['categorias']. ':.:';
    if(isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['senha']))
    {
        $nome = (string)$_POST['nome'];
        $email = (string)$_POST['email'];
        $senha = (string)$_POST['senha'];
        
        $user_count = $wpdb->get_var( "select count(*) from wp_zoneamento_usuario where email = '" . $email . "'" );
        if ($user_count > 0)
        {
            echo "email existente";
        }
        else
        {
            $token = uniqid();
            
            $i = false;
            while ($i == false)
            {
                $token_count = $wpdb->get_var( "select count(*) from wp_zoneamento_usuario where token = '" . $token . "'" );
                if ($token_count > 0)
                {
                    $token = uniqid();
                }
                else
                {
                    $i = true;
                }
            }
            $query = "insert into wp_zoneamento_usuario (name, email, senha, datacadastro, token) "
                   . " values ('" . $nome . "', '" . $email . "', PASSWORD('" .  $senha . "'), NOW(), '" . $token . "')";
            //echo $query;

            $wpdb->query($query);
            //$lastid = $wpdb->insert_id;
            //echo  $lastid;
            echo $token;
        }
        die();
    }
}

add_action('wp_ajax_zoneamentoSessao', 'zoneamento_sessao');
add_action('wp_ajax_nopriv_zoneamentoSessao', 'zoneamento_sessao');
function zoneamento_sessao()
{
    if(isset($_POST['token']))
    {
        if( !session_id() )
        {
            session_start();
        }
        $_SESSION['token'] = $_POST['token'];
    }
    die();
}


function zoneamento_db()
{
    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');

    $createUsuario = mysql_query("create table if not exists `wp_zoneamento_usuario`
        (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(150) NOT NULL,
  `email` VARCHAR(100) NOT NULL,
  `senha` VARCHAR(100) NOT NULL,
  `datacadastro` DATETIME NULL DEFAULT NULL,
        `token` CHAR(13) NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `email` (`email`),
        UNIQUE INDEX `token` (`token`)
        )
    ");
    dbDelta($createUsuario);
    
    $createCategoria = mysql_query("create table if not exists `wp_zoneamento_categoria`
        (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `categoria` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`id`)
        )
    ");
    dbDelta($createCategoria);
    
    $createImagem = mysql_query("create table if not exists `wp_zoneamento_imagem`
        (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `imagem` TEXT NOT NULL,
  `descricao` TEXT NOT NULL,
  `idcategoria` INT(11) NOT NULL,
  `categorias` VARCHAR(20) NULL DEFAULT NULL,
  `idusuario` INT(11) NULL DEFAULT NULL,
  `tokenusuario` CHAR(13) NULL DEFAULT NULL,
  `aprovado` TINYINT(4) NULL DEFAULT NULL,
  `dataenvio` DATETIME NULL DEFAULT NULL,
        `origem` varchar(15) DEFAULT NULL,
  `regiao` VARCHAR(6) NULL DEFAULT NULL,
  `endereco` VARCHAR(150) NULL DEFAULT NULL,
  `numero` VARCHAR(25) NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
        )
    ");
    dbDelta($createImagem);
}

  /********************************************************************************/

  /**
   * CALL ON ACTIVATE/DEACTIVATE THEME
   */
  wp_register_theme_activation_hook('gestaourbana', 'gestaourbana_theme_activate');
  wp_register_theme_deactivation_hook('gestaourbana', 'gestaourbana_theme_deactivate');

  /**
   *
   * @desc registers a theme activation hook
   * @param string $code : Code of the theme. This can be the base folder of your theme. Eg if your theme is in folder 'mytheme' then code will be 'mytheme'
   * @param callback $function : Function to call when theme gets activated.
   */
  function wp_register_theme_activation_hook($code, $function) {
      $optionKey="theme_is_activated_" . $code;
      if(!get_option($optionKey)) {
          call_user_func($function);
          update_option($optionKey , 1);
      }
  }

  /**
   * @desc registers deactivation hook
   * @param string $code : Code of the theme. This must match the value you provided in wp_register_theme_activation_hook function as $code
   * @param callback $function : Function to call when theme gets deactivated.
   */
  function wp_register_theme_deactivation_hook($code, $function)
  {
      // store function in code specific global
      $GLOBALS["wp_register_theme_deactivation_hook_function" . $code]=$function;

      // create a runtime function which will delete the option set while activation of this theme and will call deactivation function provided in $function
      $fn=create_function('$theme', ' call_user_func($GLOBALS["wp_register_theme_deactivation_hook_function' . $code . '"]); delete_option("theme_is_activated_' . $code. '");');

      // add above created function to switch_theme action hook. This hook gets called when admin changes the theme.
      // Due to wordpress core implementation this hook can only be received by currently active theme (which is going to be deactivated as admin has chosen another one.
      // Your theme can perceive this hook as a deactivation hook.)
      add_action("switch_theme", $fn);
  }

  function gestaourbana_theme_activate()
  {
      $default_pages = array(
          array(
              'title' => 'Index',
              'content' => '',
              'template' => 'index.php'
              ),
          array(
              'title' => 'Notícias',
              'content' => '',
              'template' => 'page-noticias.php'
              ),
          array(
              'title' => 'Participe',
              'content' => '',
              'template' => 'page-participe.php'
              ),
          array(
              'title' => 'Agenda',
              'content' => '',
              'template' => 'page-agenda.php'
              ),
          array(
              'title' => 'Biblioteca',
              'content' => '',
              'template' => 'page-biblioteca.php'
              ),
          array(
              'title' => 'A revisão participativa',
              'content' => file_get_contents(get_bloginfo('template_directory') . '/_html/a-revisao-participativa.html'),
              'template' => 'page-a-revisao-participativa.php'
              ),
          array(
              'title' => 'Etapas',
              'content' => file_get_contents(get_bloginfo('template_directory') . '/_html/etapas.html'),
              'template' => 'page-etapas.php'
              ),
          array(
              'title' => 'Perguntas frequentes',
              'content' => '',
              'template' => 'page-perguntas-frequentes.php'
              ),
          array(
              'title' => 'Contato',
              'content' => '',
              'template' => 'pagecontato.php'
              ),
          array(
              'title' => 'Termos de uso',
              'content' => '',
              'template' => 'page-termos_de_uso.php'
              ),
          array(
              'title' => 'Desenvolvimento',
              'content' => '',
              'template' => 'page-desenvolvimento.php'
              ),
          array(
              'title' => 'Equipe',
              'content' => '',
              'template' => 'page-equipe.php'
              )
      );
      $existing_pages = get_pages();
      $existing_titles = array();

      foreach ($existing_pages as $page)
      {
          $existing_titles[] = $page->post_title;
      }

      foreach ($default_pages as $new_page)
      {
          if( !in_array( $new_page['title'], $existing_titles ) )
          {
              // create post object
              $add_default_pages = array(
                  'post_title' => $new_page['title'],
                  'post_content' => $new_page['content'],
                  'post_status' => 'publish',
                  'post_type' => 'page',
                  'page_template' => $new_page['template']
                );

              // insert the post into the database
              $result = wp_insert_post($add_default_pages);
          }
      }

  }

  function gestaourbana_theme_deactivate()
  {
     // code to execute on theme deactivation
  }

  /**
   * REMOVE OPTIONS FROM MENU
   */

   function remove_menus () {
    global $menu;
      //$restricted = array(__('Dashboard'), __('Posts'), __('Media'), __('Links'), __('Pages'), __('Appearance'), __('Tools'), __('Users'), __('Settings'), __('Comments'), __('Plugins'));
      $restricted = array(__('Posts'));
      //$restricted = array();
      end ($menu);
      while (prev($menu)){
        $value = explode(' ',$menu[key($menu)][0]);
        if(in_array($value[0] != NULL?$value[0]:"" , $restricted)){unset($menu[key($menu)]);}
      }
    }
    add_action('admin_menu', 'remove_menus');


  /**
   * IMPORTED FUNCTION
   */
  if ( ! function_exists( 'twentyeleven_comment' ) ) :
  /**
   * Template for comments and pingbacks.
   *
   * To override this walker in a child theme without modifying the comments template
   * simply create your own twentyeleven_comment(), and that function will be used instead.
   *
   * Used as a callback by wp_list_comments() for displaying the comments.
   *
   * @since Twenty Eleven 1.0
   */
  function twentyeleven_comment( $comment, $args, $depth ) {
    $GLOBALS['comment'] = $comment;
    switch ( $comment->comment_type ) :
      case 'pingback' :
      case 'trackback' :
    ?>
    <li class="post pingback">
      <p><?php _e( 'Pingback:', 'twentyeleven' ); ?> <?php comment_author_link(); ?><?php edit_comment_link( __( 'Edit', 'twentyeleven' ), '<span class="edit-link">', '</span>' ); ?></p>
    <?php
        break;
      default :
    ?>
    <li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
      <article id="comment-<?php comment_ID(); ?>" class="comment">
        <div class="comment-meta">
          <div class="comment-author vcard">
            <?php
              $avatar_size = 68;
              if ( '0' != $comment->comment_parent )
                $avatar_size = 39;

              echo get_avatar( $comment, $avatar_size );

              /* translators: 1: comment author, 2: date and time */
              printf( __( '%1$s em %2$s <span class="says">disse:</span>', 'twentyeleven' ),
                sprintf( '<span class="fn">%s</span>', get_comment_author_link() ),
                sprintf( '<a href="%1$s"><time datetime="%2$s">%3$s</time></a>',
                  esc_url( get_comment_link( $comment->comment_ID ) ),
                  get_comment_time( 'c' ),
                  /* translators: 1: date, 2: time */
                  sprintf( __( '%1$s as %2$s', 'twentyeleven' ), get_comment_date(), get_comment_time() )
                )
              );
            ?>

            <?php edit_comment_link( __( 'Edit', 'twentyeleven' ), '<span class="edit-link">', '</span>' ); ?>
          </div><!-- .comment-author .vcard -->

          <?php if ( $comment->comment_approved == '0' ) : ?>
            <em class="comment-awaiting-moderation"><?php _e( 'Seu comentário está aguardando moderação.', 'twentyeleven' ); ?></em>
            <br />
          <?php endif; ?>

        </div>

        <div class="comment-content"><?php comment_text(); ?></div>

        <div class="reply">
          <?php comment_reply_link( array_merge( $args, array( 'reply_text' => __( 'Responder <span>&darr;</span>', 'twentyeleven' ), 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
        </div><!-- .reply -->
      </article><!-- #comment-## -->

    <?php
        break;
    endswitch;
  }
  endif; // ends check for twentyeleven_comment()

// Sidebars

  register_sidebar(array(
  'name' => __( 'Notícias - Barra lateral' ),
  'id' => 'noticias-sidebar',
  'description' => __( 'Widgets nesta área serão apresentados nas páginas da seção notícias.' ),
  'before_title' => '<h1 class="widget-title">',
  'after_title' => '</h1>',
  'before_widget' => '<div id="%1$s" class="widget %2$s" box>',
  'after_widget'  => '</div>'
));

  register_sidebar(array(
  'name' => __( 'Páginas - Barra lateral' ),
  'id' => 'paginas-sidebar',
  'description' => __( 'Widgets nesta área serão apresentados nas páginas simples' ),
  'before_title' => '<h1 class="widget-title">',
  'after_title' => '</h1>',
  'before_widget' => '<div id="%1$s" class="widget %2$s" box>',
  'after_widget'  => '</div>'
));


// Widgets

//load widget
//add_action( 'widgets_init', 'register_my_widget' );

//init widget
//function register_my_widget() {
//    register_widget( 'noticias_widget' );
//}

//enclose widget
//class noticias_widget extends WP_Widget {}

  //Adding the Open Graph in the Language Attributes
// function add_opengraph_doctype( $output ) {
//     return $output . ' xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml"';
//   }
// add_filter('language_attributes', 'add_opengraph_doctype');

//Lets add Open Graph Meta Info

// function insert_fb_in_head() {
//   global $post;
//   if ( !is_singular()) //if it is not a post or a page
//     return;
//         echo '<meta property="fb:admins" content="161422927240513"/>';
//         echo '<meta property="og:title" content="' . get_the_title() . '"/>';
//         echo '<meta property="og:type" content="article"/>';
//         echo '<meta property="og:url" content="' . get_permalink() . '"/>';
//         echo '<meta property="og:site_name" content="Gestão Urbana SP"/>';
//   if(!has_post_thumbnail( $post->ID )) { //the post does not have featured image, use a default image
//     $default_image="http://example.com/image.jpg"; //replace this with a default image on your server or an image in your media library
//     echo '<meta property="og:image" content="' . $default_image . '"/>';
//   }
//   else{
//     $thumbnail_src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'medium' );
//     echo '<meta property="og:image" content="' . esc_attr( $thumbnail_src[0] ) . '"/>';
//   }
//   echo "
// ";
// }
// add_action( 'wp_head', 'insert_fb_in_head', 5 );

//Create a Walker to change the way wp_list_categories displays the output
//Here I'm removing the links from the output

function get_breadcrumb_data($postId, $taxonomyName, $left = false) {
    $outPut = array();
    $postTerms = get_the_terms($postId, $taxonomyName);
    
    if (!empty($postTerms)) {
      $postTermsId = array();
      foreach ($postTerms as $term) {
        if (empty($term->parent)) {
          $customTermMeta = get_term_by('slug', $term->slug, $taxonomyName, ARRAY_A);
          if (!empty($customTermMeta)) {
            $customTermMetaData = get_option('taxonomy_'.$term->term_id);
            $postTermsId[]= array(
              'id' => $term->term_id,
              'name' => $term->name,
              'color' => $customTermMetaData['custom_term_meta']
            );
          }
        }
      }
      
      if (!empty($postTermsId)) {
        foreach ($postTermsId as $postTermId) {
          $childTerms = get_terms( $taxonomyName, array( 'child_of' => $postTermId['id']));
          $outPut['parent']['name'] = $postTermId['name'];
          $outPut['parent']['color'] = $postTermId['color'];
          $outPut['parent']['childs'] = $childTerms;
        }
      }
      
      
      if (!empty($outPut)) {
        ?>
        <div class="taxonomy-breadcrumb <?php echo($left) ? 'left' :'';?>">
            <div class="float">
              <div class="breadcrumb-border" style="border-right: 20px solid <?php echo $outPut['parent']['color'];?>"></div>
              <div class="breadcrumb-first breadcrumb-text" style="background: <?php echo $outPut['parent']['color'];?>">
                <a href="">&bull;<?php echo $outPut['parent']['name'];?></a>
              </div>
            </div>  
            <?php
              foreach($outPut['parent']['childs'] as $child):
                  ?>
                    <div class="float">
                      <div class="breadcrumb-border-next" style="border-right: 14px solid <?php echo $outPut['parent']['color'];?>"></div>
                      <div class="breadcrumb-next breadcrumb-text" style="background: <?php echo $outPut['parent']['color'];?>">
                          <a href="">&bull;<?php echo $child->name;?></a>
                      </div>
                    </div>  
                  <?php
              endforeach;
            ?>
        </div>    
      <?php
      }  
    }
}

// Add Shortcode
function rodape_centro_dialogo_aberto_shorcode( $atts ) {

  wp_enqueue_style( 'widgets-cda', get_stylesheet_directory_uri().'/css/widgets-centro-dialogo-aberto.css' );

  // Attributes
  extract( shortcode_atts(
    array(
      'mostrar_biblioteca' => 'sim',
      'mostrar_noticias' => 'sim',
      'mostrar_navegador' => 'sim',
    ), $atts )
  );

  // Code
  $output = '
  </div>
  <div id="strip-rodape-centro-dialogo-aberto">
  <div class="wrapper">
    <h5>saiba mais sobre o centro diálogo aberto</h5>
    <div class="noticias">
      <h6 id="cda-noticias">Notícias</h6>
      <ul>
        ';
  $the_query = new WP_Query( 
    array ( 'tax_query' => array(
      array(
        'taxonomy' => 'post_tag',
        'field' => 'slug',
        'terms' => 'centro-dialogo-aberto'
      )
    ), 
    'orderby'=>'modified',
    'post_type' => 'noticias', 
    'posts_per_page' => 3 ) );
  while ( $the_query->have_posts() ):
    $the_query->the_post();
    $output .= '<li>
    <p class="news-date">'.get_the_date().'</p>
    <a class="news-title" href="'.get_permalink().'">' . get_the_title() . '</a>
    <a class="news-excerpt" href="'.get_permalink().'">' . get_the_excerpt() . '</a>
    </li>
        ';
  endwhile;
  wp_reset_postdata();
  $output .= '
      </ul>
      <a class="ver-todos" href="'.site_url('/tag/centro-dialogo-aberto/').'">» Ver todas as notícias sobre o Centro Diálogo Aberto</a>
    </div>
    <div class="biblioteca">
      <h6 id="cda-biblioteca">Biblioteca</h6>
      <ul>
        ';
  $the_query = new WP_Query( array ( 'tax_query' => array(
      array(
        'taxonomy' => 'post_tag',
        'field' => 'slug',
        'terms' => 'centro-dialogo-aberto'
      ),
    ),  'orderby'=>'modified', 'post_type' => 'biblioteca', 'posts_per_page' => 6 ) );
  while ( $the_query->have_posts() ):
    $the_query->the_post();
    $output .= '<li>» <a href="'.get_permalink().'">' . get_the_title() . '</a></li>
        ';
  endwhile;
  wp_reset_postdata();
  $output .= '
      </ul>
    </div>
  </div>
  </div>
  <div id="cda-navegador">
    <a class="biblioteca" href="#cda-biblioteca">biblioteca</a>
    <a class="noticias" href="#cda-noticias">noticias</a>
  </div>
  <div class="wrapper page-dialogo">';
  return $output;

}
add_shortcode( 'rodape-centro-dialogo-aberto', 'rodape_centro_dialogo_aberto_shorcode' );


// Add Shortcode
function form_aviso_plataforma_participativa_shorcode( $atts ) {

  wp_enqueue_style( 'widgets-cda', get_stylesheet_directory_uri().'/css/widgets-centro-dialogo-aberto.css' );

  // Attributes
  extract( shortcode_atts(
    array(
      'mostrar_biblioteca' => 'sim',
      'mostrar_noticias' => 'sim',
      'mostrar_navegador' => 'sim',
    ), $atts )
  );
  
  $output = '<!-- Begin MailChimp Signup Form -->
<div id="mc_embed_signup">
<form action="http://prefeitura.us7.list-manage.com/subscribe/post?u=dd2d95999955c44afed480456&amp;id=9ed02a74da" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
<i class="cda-icone-comentario"></i><p class="legend">Deixe aqui seu e-mail para ser avisado assim que nossa<br/> Ferramenta Participativa estiver pronta:</p>
<div class="mc-field-group">
  <input type="text" value="" placeholder="Nome" name="FNAME" class="" id="mce-FNAME">
</div>
<div class="mc-field-group">
  <input type="email" value="" placeholder="E-mail" name="EMAIL"  class="required email" id="mce-EMAIL">
</div>
  <div id="mce-responses" class="clear">
    <div class="response" id="mce-error-response" style="display:none"></div>
    <div class="response" id="mce-success-response" style="display:none"></div>
  </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;"><input type="text" name="b_dd2d95999955c44afed480456_9ed02a74da" value=""></div>
  <div class="clear"><input type="submit" value="Enviar" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
</form>
</div>

<!--End mc_embed_signup-->';
  return $output;

}
add_shortcode( 'aviso-plataforma-participativa', 'form_aviso_plataforma_participativa_shorcode' );

/********************************************************************************/
/* envia classe css da cor conforme projeto da noticia */
/********************************************************************************/
function cor_barra_conforme_projeto( $id )
{
    $terms = get_the_terms( $id, 'projetos' );
    $projeto = "";
    $classeCss = "";
    if ( $terms && ! is_wp_error( $terms ) ) :
        $first = true;
        foreach ( $terms as $term )
        {
            if ( $first )
            {
                $projeto = $term->slug;
                $first = false;
            }
            else
            {

            }
        }
        $classeCss = classe_css_conforme_projeto($projeto);
    endif;
    return $classeCss;
}

/********************************************************************************/
/* envia classe de css de cor conforme projeto */
/********************************************************************************/
function classe_css_conforme_projeto( $projeto )
{
    $classeCss = "";
    
    if ($projeto == "plano-diretor" || $projeto == "revisao-dos-instrumentos" || $projeto == "marco-regulatorio" || $projeto == "parcelamento-ocupacao-solo" || $projeto == "funcao-social" || $projeto == "planos-regionais" || $projeto == "conferencias" || $projeto == "pdui")
    {
        $classeCss = "projeto_cor_vermelha";
    }
    
    else if ($projeto == "arco-do-futuro" || $projeto == "arco-tiete" || $projeto == "arco-tamanduatei" || $projeto == "agua-branca" || $projeto == "arco-jurubatuba" || $projeto == "arco-pinheiros" || $projeto == "operacoes-urbanas")
    {
        $classeCss = "projeto_cor_laranja";
    }
    
    else if ($projeto == "centro-dialogo-aberto" || $projeto == "centro-aberto" || $projeto == "minhocao" || $projeto == "calcadao" || $projeto == "parklets" || $projeto == "anhangabau" || $projeto == "projetos-especiais" || $projeto == "baixos-de-viaduto")
    {
        $classeCss = "projeto_cor_cyano";
    }
    
    else if ($projeto == "territorios-ceu" || $projeto == "wifi")
    {
        $classeCss = "projeto_cor_amarela";
    }
    
    else if ($projeto == "eixos-transformacao" || $projeto == "piu" || $projeto == "requalificacao-santo-amaro")
    {
        $classeCss = "projeto_cor_rosa";
    }
    else if ($projeto == "bordas-da-cidade" || $projeto == "cadeia-de-agricultura")
    {
        $classeCss = "projeto_cor_verde";
    }
    
    return $classeCss;
}

/********************************************************************************/
/* envia classe css da cor conforme projeto do slider */
/********************************************************************************/
function cor_barra_conforme_projeto_slider( $id )
{
    $term = get_term( $id ,'projetos');
    $projeto = "";
    $classeCss = "";
    
    $projeto = $term->slug;
    $classeCss = classe_css_conforme_projeto($projeto);
    return $classeCss;
}

/********************************************************************************/
/* mostrar menu interno */
/********************************************************************************/
function mostrar_menu_interno( $projeto_id )
{
    $term = get_term( $projeto_id ,'projetos');
    $projeto = "";

    if ($term)
        {
        $projeto = $term->slug;

        if ($projeto == 'plano-diretor')
        {
            return wp_nav_menu( array( 'theme_location' => 'menu-interno-plano-diretor' ) );
        }
        
        if ($projeto == 'parcelamento-ocupacao-solo')
        {
            return wp_nav_menu( array( 'theme_location' => 'menu-interno-parcelamento-ocupacao-solo' ) );
        }
        
        if ($projeto == 'arco-do-futuro' || $projeto == "arco-tiete")
        {
            return wp_nav_menu( array( 'theme_location' => 'menu-interno-arco-tiete-' ) );
        }
        
        if ($projeto == 'arco-tamanduatei')
        {
            return wp_nav_menu( array( 'theme_location' => 'menu-interno-arco-tamanduatei-' ) );
        }
        
        if ($projeto == 'agua-branca')
        {
            return wp_nav_menu( array( 'theme_location' => 'menu-interno-agua-branca-' ) );
        }
        
        if ($projeto == 'centro-dialogo-aberto' || $projeto == 'centro-aberto')
        {
            return wp_nav_menu( array( 'theme_location' => 'menu-interno-centro-aberto-' ) );
        }
        
        if ($projeto == 'anhangabau')
        {
            return wp_nav_menu( array( 'theme_location' => 'menu-interno-anhangabau-' ) );
        }
        
        if ($projeto == 'minhocao')
        {
            return wp_nav_menu( array( 'theme_location' => 'menu-interno-minhocao-' ) );
        }
        
        if ($projeto == 'calcadao')
        {
            return wp_nav_menu( array( 'theme_location' => 'menu-interno-calcadao-' ) );
        }
        
        if ($projeto == 'parklets')
        {
            return wp_nav_menu( array( 'theme_location' => 'menu-interno-parklets-' ) );
        }
        
        if ($projeto == 'territorios-ceu')
        {
            return wp_nav_menu( array( 'theme_location' => 'menu-interno-ceu-' ) );
        }
        
        if ($projeto == 'eixos-transformacao')
        {
            return wp_nav_menu( array( 'theme_location' => 'menu-interno-eixos-transformacao-' ) );
        }
        
        if ($projeto == 'wifi')
        {
            return wp_nav_menu( array( 'theme_location' => 'menu-interno-wifi-' ) );
        }
        
        if ($projeto == 'planos-regionais')
        {
            return wp_nav_menu( array( 'theme_location' => 'menu-interno-planos-regionais-' ) );
        }
        
        if ($projeto == 'piu')
        {
            return wp_nav_menu( array( 'theme_location' => 'menu-interno-piu-' ) );
        }
        if ($projeto == 'conferencias')
        {
            return wp_nav_menu( array( 'theme_location' => 'menu-interno-conferencias-' ) );
        }
        if ($projeto == 'requalificacao-santo-amaro')
        {
            return wp_nav_menu( array( 'theme_location' => 'menu-interno-santo-amaro-' ) );
        }
        if ($projeto == 'pdui')
        {
            return wp_nav_menu( array( 'theme_location' => 'menu-interno-plano-metropolitano-pdui-' ) );
        }
        if ($projeto == 'cadeia-de-agricultura')
        {
            return wp_nav_menu( array( 'theme_location' => 'menu-interno-cadeia-da-agricultura-' ) );
        }
        if ($projeto == 'arco-jurubatuba')
        {
            return wp_nav_menu( array( 'theme_location' => 'menu-interno-arco-jurubatuba-' ) );
        }
        if ($projeto == 'arco-pinheiros')
        {
            return wp_nav_menu( array( 'theme_location' => 'menu-interno-arco-pinheiros-' ) );
        }
        if ($projeto == 'baixos-de-viaduto')
        {
            return wp_nav_menu( array( 'theme_location' => 'menu-interno-baixos-de-viaduto-' ) );
        }
        if ($projeto == 'areas-publicas')
        {
            return wp_nav_menu( array( 'theme_location' => 'menu-interno-areas-publicas-' ) );
        }
        if ($projeto == 'operacoes-urbanas'){
            return wp_nav_menu( array( 'theme-location' => 'menu-interno-operacoes-urbanas-') );
        }
    }
}

add_action( 'wp_enqueue_scripts', 'jqueryui_jqueryuicss');
function jqueryui_jqueryuicss()
{
    if ( is_page_template( 'page-zoneamento-desenhos-urbanos.php' ) || is_page_template( 'page-minhocao.php' ) )
    {
        wp_enqueue_style('ui-datepicker', get_bloginfo('template_url') . '/css/jqueryui/jquery-ui-1.10.2.custom.min.css');
        wp_enqueue_script('jquery-ui', get_stylesheet_directory_uri() . '/js/jquery-ui-1.10.2.custom.min.js', array('jquery'));
    }
}

add_action( 'wp_ajax_zoneamentoProposta', 'zoneamento_Proposta' );
add_action('wp_ajax_nopriv_zoneamentoProposta', 'zoneamento_Proposta');
function zoneamento_Proposta()
{
    //echo ':entrou no ajax.:';
    global $wpdb;
    
    $token = substr(uniqid(), 9, 13) . substr(uniqid(), 9, 13);

    $i = false;
    while ($i == false)
    {
        $token_count = $wpdb->get_var( "select count(*) from wp_cf7dbplugin_submits where field_name = 'idProposta' and field_value = '" . $token . "'" );
        if ($token_count > 0)
        {
            $token = substr(uniqid(), 9, 13) . substr(uniqid(), 9, 13);
        }
        else
        {
            $i = true;
        }
    }
    
    echo "INT-" . $token;
    die();
}

add_filter('upload_mimes', 'addUploadMimes');
function addUploadMimes( $mime_types )
{
    $mime_types['kmz'] = 'application/vnd.google-earth.kmz';
    $mime_types['kml'] = 'application/vnd.google-earth.kml+xml';
    $mime_types['shp'] = 'application/octet-stream';

    return $mime_types;
}


add_action( 'wp_ajax_biblioteca', 'biblioteca' );
add_action('wp_ajax_nopriv_biblioteca', 'biblioteca');
function biblioteca()
{
    //echo $_POST['parametros'] . ':.:';
    if(isset($_POST['projetos']) && isset($_POST['categorias']) && isset($_POST['texto']))
    {
        $projetos = (string)$_POST['projetos'];
        $categorias = (string)$_POST['categorias'];
        $texto = (string)$_POST['texto'];
        
        $projetosE = explode(";", $projetos);
        $categoriasE = explode(";", $categorias);
        //echo "<br>"; print_r($projetosE); echo ":.:";
        //echo "<br>"; print_r($categoriasE); echo ":.:"; echo "<br>";
        //echo "<br>"; echo $texto; echo ":.:"; echo "<br>";
        
        $paged = get_query_var('paged') ? get_query_var('paged') : '';
        
        $args = array('post_type' => 'biblioteca', 'paged' => $paged, 'posts_per_page' => 5000, 'post_status' => 'publish', 's' => $texto );
        
        if ($projetos != "0" && $categorias != "0")
        {
            $args['tax_query'] = array(
                'relation' => 'AND',
                array(
                    'taxonomy' => 'projetos',
                    'field' => 'id'
                    ,'terms' => $projetosE
                    ,'operator' => 'IN'
                )
                ,array(
                    'taxonomy' => 'librarycategory',
                    'field' => 'id',
                    'terms' => $categoriasE
                    ,'operator' => 'IN'
                )
            );
        }
        else if ($projetos != "0" && $categorias == "0")
        {
            $args['tax_query'] = array(
                array(
                    'taxonomy' => 'projetos',
                    'field' => 'id'
                    ,'terms' => $projetosE
                    ,'operator' => 'IN'
                )
            );
        }
        else if ($projetos == "0" && $categorias != "0")
        {
            $args['tax_query'] = array(array(
                    'taxonomy' => 'librarycategory',
                    'field' => 'id',
                    'terms' => $categoriasE
                    ,'operator' => 'IN'
                )
            );
        }
        
        //print_r ($args);
        
        $wp_query = new WP_Query( $args );
        //echo $wp_query->request;
        
        $count = 1;
        while ( $wp_query->have_posts() ) : $wp_query->the_post();
?>
        <li class="box">
            <a href="<?php echo get_post_meta( get_the_ID(), 'library_link', true ); ?>" target="_blank">
                <div class="inner-box">
                    <?php $terms = get_the_terms( get_the_ID(), 'librarycategory' ); ?>
                    <?php foreach ($terms as $term): ?>
                    <!--<img src="<?php //echo bloginfo('template_url'); ?>/images/library/<?php //echo $term->slug; ?>.png" class="normal" />
                    <img src="<?php //echo bloginfo('template_url'); ?>/images/library/<?php //echo $term->slug; ?>-hover.png" class="hover" />
                    -->
                    <?php endforeach; ?>
                    <span class="type" style="display:none;"><?php the_title(); ?></span>
                    <h5 class="name"><?php the_title(); ?></h5>
                </div>
            </a>
        </li>
<?php
        $count++; endwhile;
        /*global $wpdb;

        $query = ""
            . " SELECT img.id, img.imagem, img.descricao, img.aprovado, img.categorias, usu.name, img.regiao, img.endereco, img.numero"
            . " FROM wp_zoneamento_imagem img, wp_zoneamento_usuario usu"
            . " WHERE 0 = 0"
            . "   and img.tokenusuario = usu.token"
            . "   and img.aprovado = 1"
            . "   and ("
            . $sqlProjetos
            . "       )"
            . " Order by length(img.categorias) desc, img.id desc"
            . " ";
        //echo $query;

        $results = $wpdb->get_results( $query );
        //print_r ($results);*/

?>
            <?php
                /*foreach ($results as $row)
                {
            ?>

            <?php
                }*/
            ?>
        </div>
        <script type="text/javascript">
            jQuery(document).ready(function() {
                jQuery(".fancybox").fancybox();
            });
        </script>
<?php
        die();
    }
}

add_action('admin_menu', 'ceu_menu_pages');
function ceu_menu_pages() {
    // Add the top-level admin menu
    $page_title = 'CEU - Fotos Pendentes';
    $menu_title = 'CEU';
    
    //$capability - criar
    $capability = 'ceu';
    
    $menu_slug = 'ceu_pendentes';
    $function = 'ceu_pendentes';
    add_menu_page($page_title, $menu_title, $capability, $menu_slug, $function);

    // Add submenu page with same slug as parent to ensure no duplicates
    $sub_menu_title = 'CEU - Fotos Pendentes';
    add_submenu_page($menu_slug, $page_title, $sub_menu_title, $capability, $menu_slug, $function);

    // Now add the submenu page 
    $submenu_page_title = 'Acervo - Fotos Aprovadas e Reprovadas';
    $submenu_title = 'Acervo - Fotos Aprovadas e Reprovadas';
    $submenu_slug = 'ceu_moderadas';
    $submenu_function = 'ceu_moderadas';
    add_submenu_page($menu_slug, $submenu_page_title, $submenu_title, $capability, $submenu_slug, $submenu_function);
    
    /*$submenu_page_title = 'Acervo - Categorias';
    $submenu_title = 'Acervo - Categorias';
    $submenu_slug = 'zoneamento-categorias';
    $submenu_function = 'zoneamento_categorias';
    add_submenu_page($menu_slug, $submenu_page_title, $submenu_title, $capability, $submenu_slug, $submenu_function);
    */
    //zoneamento_db();
}

function ceu_pendentes() {
    if (!current_user_can('ceu')) {
        wp_die('Você não tem permissão para acessar esta página');
    }
    
    //require_once 'test.php';
    
ceu_tabela('moderar');

}

function ceu_tabela($tipo) {
?>
    <br/>
    <br/>
    <div id="display"></div>
    <script type='text/javascript'>
            function click_botao(x, cb)
            {
                var myObj = document.getElementById("onoffswitch-inner"+x);
                
                if (cb.readOnly)
                {
                    cb.readOnly = false;
                    jQuery(myObj).removeClass('readonly');
                }
                
                if (document.getElementById("myonoffswitch"+x).checked)
                {
                    var a = '1';
                }
                else
                {
                    var a = '0';
                }
                
                jQuery.ajax({
                type: 'POST',
                url: '<?php echo admin_url( 'admin-ajax.php' ) ?>',
                //url: '<?php //echo ajaxurl ?>',
                data: { action: 'ceu_status_aprovacao', value: a, id: x },
                success: function(html_ceu){
                    //jQuery('#display').html(html).show();
                    //alert(html_ceu);
                }
                });
            }
    </script>
    <table class="aprovacao_table">
        <tr>
            <th>
                Nome
            </th>
            <th>
                Email
            </th>
            <th>
                cep
            </th>
            <th>
                proposta para
            </th>
            <th>
                idProposta
            </th>
            <th>
                Moderação
            </th>
        </tr>
<?php
    foreach (ceu_get($tipo) as $row)
    {
?>
        <tr>
            <td>
                <?php echo ucwords( mb_strtolower( $row->territorioCeu, 'UTF-8' ) ) ?>
            </td>
            <td>
                <?php echo $row->classificacao ?>
            </td>
            <td>
                <?php echo $row->tipo ?>
            </td>
            <td>
                <?php echo $row->titulo ?>
            </td>
            <td>
                <?php echo $row->endereco ?>
            </td>
            <td>
                <?php echo $row->numero ?>
            </td>
            <td>
                <?php echo $row->bairro ?>
            </td>
            <td>
                <?php echo $row->cep ?>
            </td>
            <td>
                <?php echo $row->areaDescricao ?>
            </td>
            <td>
                <?php echo $row->email ?>
            </td>
            <td>
                <?php echo $row->paraAprovacao ?>
            </td>
            <td>
                <?php echo $row->imagem ?>
            </td>
            <td>
                <?php echo $row->submit_time ?>
            </td>
            <td>
                <div class="onoffswitch">
                    <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch<?php echo $row->submit_time; ?>"
                    <?php
                        if($row->paraAprovacao == "1")
                        {
                            echo " checked ";
                        }

                        if($row->paraAprovacao == "para-aprovacao")
                        {
                            echo " readonly ";
                        }
                        
                    ?> onclick="click_botao('<?php echo $row->submit_time; ?>', this);">
                    <label class="onoffswitch-label" for="myonoffswitch<?php echo $row->submit_time; ?>">
                    <div id="onoffswitch-inner<?php echo $row->submit_time; ?>" class="onoffswitch-inner
                    <?php
                        if($row->paraAprovacao == 'para-aprovacao')
                        {
                            echo " readonly ";
                        }
                        
                    ?>"></div>
                    <div class="onoffswitch-switch"></div>
                    </label>
                </div>
            </td>
        </tr>
<?php
    }
?>
    </table>
    <?php
}

function ceu_get($tipo)
{
    $query_tipo = "";
    $query_order = "";
    if ($tipo == "moderar")
    {
        $query_tipo = "   and img.aprovado is null";
        $query_order = " Order by img.id";
    }
    if ($tipo == "moderados")
    {
        $query_tipo = "   and img.aprovado is not null";
        $query_order = " Order by img.id desc";
    }
    if ($tipo == "aprovados")
    {
        $query_tipo = "   and img.aprovado = 1";
        $query_order = " Order by img.id desc";
    }
    
    global $wpdb;
    $query = ""
        //. " SELECT img.id, img.imagem, img.descricao, img.aprovado, usu.name, usu.email, cat.categoria"
        //. " SELECT img.id, img.imagem, img.descricao, img.aprovado, img.categorias, usu.name, usu.email, img.origem, img.regiao, img.endereco, img.numero"
        //. " FROM wp_zoneamento_imagem img, wp_zoneamento_usuario usu, wp_zoneamento_categoria cat"
        //. " FROM wp_zoneamento_imagem img, wp_zoneamento_usuario usu"
        //. " WHERE 0 = 0"
        //. "   and img.idcategoria = cat.id"
        //. "   and img.tokenusuario = usu.token"
        //. $query_tipo
        //. $query_order
        . " SELECT
            DATE_FORMAT(FROM_UNIXTIME(submit_time), '%b %e, %Y  %l:%i %p') AS Submitted
           , submit_time
           , MAX(IF(field_name='territorioCeu', field_value, NULL )) AS 'territorioCeu'
           , MAX(IF(field_name='classificacao', field_value, NULL )) AS 'classificacao'
           , MAX(IF(field_name='tipo', field_value, NULL )) AS 'tipo'
           , MAX(IF(field_name='titulo', field_value, NULL )) AS 'titulo'
           , MAX(IF(field_name='endereco', field_value, NULL )) AS 'endereco'
           , MAX(IF(field_name='numero', field_value, NULL )) AS 'numero'
           , MAX(IF(field_name='bairro', field_value, NULL )) AS 'bairro'
           , MAX(IF(field_name='cep', field_value, NULL )) AS 'cep'
           , MAX(IF(field_name='areaDescricao', field_value, NULL )) AS 'areaDescricao'
           , MAX(IF(field_name='email', field_value, NULL )) AS 'email'
           , MAX(IF(field_name='paraAprovacao', field_value, NULL )) AS 'paraAprovacao'
           , MAX(IF(field_name='imagem', field_value, NULL )) AS 'imagem'
           FROM wp_cf7dbplugin_submits
           WHERE
           form_name = 'CEU_Mural_Territorio'
           GROUP BY submit_time
           ORDER BY submit_time DESC "
        . " ";
    //echo $querystr;
    
    $results = $wpdb->get_results( $query );
    //print_r ($results);
    
    return $results;
}


add_action( 'admin_enqueue_scripts', 'my_enqueue_js1' );
function my_enqueue_js1() {
    //if( 'edit.php' != $hook )
        //return;
//echo '<link rel="stylesheet" type="text/css" href="stylefs.css">'."\n";
    global $hook_suffix;
    if ($hook_suffix == 'toplevel_page_ceu_pendentes')
    {
?>
        <script type='text/javascript'>

        </script>
<?php
    }
}


add_action( 'wp_ajax_ceu_status_aprovacao', 'ceu_status_aprovacao_ajax' );
function ceu_status_aprovacao_ajax()
{
    //echo $_POST['id']. ':' . $_POST['value']. ':.:';
    if(isset($_POST['id']) && isset($_POST['value']))
    {

    $id = '';
    $id = (string)$_POST['id'];
    $value = '';
    $value = (string)$_POST['value'];

    //echo $id. ':' . $value. ':.:';
    

    global $wpdb;
    //$wpdb->update('wp_zoneamento_imagem', 
    //  array( 
    //    'aprovado' => $value
    //  ), 
    //  array( 'id' => $id ), 
    //  array( 
    //    '%d'
    //  ), 
    //  array( '%d' )
    //        );
    $query = "update wp_cf7dbplugin_submits"
            . " set field_value = '" . $value . "'"
            . " where submit_time = " . $id
            . "   and form_name = 'CEU_Mural_Territorio'"
            . "   and field_name = 'paraAprovacao'"
            . "";
    
    echo $query;
    $wpdb->query($query);
    
//    if ($wpdb->query($query) === FALSE) {
//      echo "errokhjkghj h";
//    } else {
//      echo "ok";//$wpdb->get_results($query);
//    }

     //echo $wpdb->last_error;
    
    }
    wp_die();
}

add_action('admin_menu', 'minhocao_menu_pages');
function minhocao_menu_pages() {
    // Add the top-level admin menu
    $page_title = 'Minhocao - Fotos Pendentes';
    $menu_title = 'Minhocao';
    
    //$capability - criar
    $capability = 'minhocao';
    
    $menu_slug = 'minhocao_pendentes';
    $function = 'minhocao_pendentes';
    add_menu_page($page_title, $menu_title, $capability, $menu_slug, $function);

    // Add submenu page with same slug as parent to ensure no duplicates
    $sub_menu_title = 'Minhocao - Propostas Pendentes';
    add_submenu_page($menu_slug, $page_title, $sub_menu_title, $capability, $menu_slug, $function);

    // Now add the submenu page 
    $submenu_page_title = 'Minhocao - Propostas Aprovadas e Reprovadas';
    $submenu_title = 'Minhocao - Propostas Aprovadas e Reprovadas';
    $submenu_slug = 'minhocao_moderadas';
    $submenu_function = 'minhocao_moderadas';
    add_submenu_page($menu_slug, $submenu_page_title, $submenu_title, $capability, $submenu_slug, $submenu_function);
    
    /*$submenu_page_title = 'Acervo - Categorias';
    $submenu_title = 'Acervo - Categorias';
    $submenu_slug = 'zoneamento-categorias';
    $submenu_function = 'zoneamento_categorias';
    add_submenu_page($menu_slug, $submenu_page_title, $submenu_title, $capability, $submenu_slug, $submenu_function);
    */
    //zoneamento_db();
}

add_action('admin_menu', 'wifi_menu_pages');
function wifi_menu_pages() {
    // Add the top-level admin menu
    $page_title = 'WiFi - Sugestões Pendentes';
    $menu_title = 'WiFi';
    
    //$capability - criar
    $capability = 'wifi';
    
    $menu_slug = 'wifi_pendentes';
    $function = 'wifi_pendentes';
    add_menu_page($page_title, $menu_title, $capability, $menu_slug, $function);

    // Add submenu page with same slug as parent to ensure no duplicates
    $sub_menu_title = 'WiFi - Sugestões Pendentes';
    add_submenu_page($menu_slug, $page_title, $sub_menu_title, $capability, $menu_slug, $function);

    // Now add the submenu page 
    $submenu_page_title = 'WiFi - Sugestões Aprovadas e Reprovadas';
    $submenu_title = 'WiFi - Sugestões Aprovadas e Reprovadas';
    $submenu_slug = 'wifi_moderadas';
    $submenu_function = 'wifi_moderadas';
    add_submenu_page($menu_slug, $submenu_page_title, $submenu_title, $capability, $submenu_slug, $submenu_function);
    
    /*$submenu_page_title = 'Acervo - Categorias';
    $submenu_title = 'Acervo - Categorias';
    $submenu_slug = 'zoneamento-categorias';
    $submenu_function = 'zoneamento_categorias';
    add_submenu_page($menu_slug, $submenu_page_title, $submenu_title, $capability, $submenu_slug, $submenu_function);
    */
    //zoneamento_db();
}

function minhocao_pendentes()
{
    if (!current_user_can('minhocao'))
    {
        wp_die('Você não tem permissão para acessar esta página');
    }
    
    minhocao_tabela('moderar');
}

function wifi_pendentes()
{
    if (!current_user_can('wifi'))
    {
        wp_die('Você não tem permissão para acessar esta página');
    }
    
    wifi_tabela('moderar');
}

function minhocao_moderadas()
{
    if (!current_user_can('minhocao'))
    {
        wp_die('Você não tem permissão para acessar esta página');
    }
    
    minhocao_tabela('moderados');
}

function wifi_moderadas()
{
    if (!current_user_can('wifi'))
    {
        wp_die('Você não tem permissão para acessar esta página');
    }
    
    wifi_tabela('moderados');
}

function minhocao_tabela($tipo) {
?>
    <br/>
    <br/>
    <div id="display"></div>
    <script type='text/javascript'>
            function click_botao(x, cb)
            {
                var myObj = document.getElementById("onoffswitch-inner"+x);
                
                if (cb.readOnly)
                {
                    cb.readOnly = false;
                    jQuery(myObj).removeClass('readonly');
                }
                
                if (document.getElementById("myonoffswitch"+x).checked)
                {
                    var a = '1';
                }
                else
                {
                    var a = '0';
                }
                
                jQuery.ajax({
                type: 'POST',
                url: '<?php echo admin_url( 'admin-ajax.php' ) ?>',
                //url: '<?php //echo ajaxurl ?>',
                data: { action: 'minhocao_status_aprovacao', value: a, id: x },
                success: function(html_ceu){
                    jQuery('#display').html(html).show();
                    //alert(html_ceu);
                }
                });
            }
            
            function rotatePhoto(photo, rotate)
            {
                jQuery.ajax({
                    type: 'POST',
                    url: '<?php echo admin_url( 'admin-ajax.php' ); ?>',
                    //data: { action: 'sendPhoto', id: id, photo: photo },
                    data: { action: 'rotateImageMinhocao', photo: photo, rotate: rotate },
                    success: function(html){
                        //jQuery('#display').html(html).show();
                        location.reload(true);
                    }
                });
            }
    </script>
    <table class="aprovacao_table">
        <tr>
            <th>
                
            </th>
            <th>
                Nome
            </th>
            <th>
                Email
            </th>
            <th>
                Título
            </th>
            <th>
                Descrição
            </th>
            <th>
                Região
            </th>
            <th>
                CEP
            </th>
            <th>
                Diretriz 1
            </th>
            <th>
                Diretriz 2
            </th>
            <th>
                Diretriz 3
            </th>
            <th>
                Diretriz 4
            </th>
            <th>
                Diretriz 5
            </th>
            <th>
                Diretriz 6
            </th>
            <th>
                Diretriz 7
            </th>
            <th>
                Diretriz 8
            </th>
            <th>
                Diretriz 9
            </th>
            <th>
                Diretriz 10
            </th>
            <th>
                
            </th>
            <th>
                Moderação
            </th>
        </tr>
<?php
    foreach (minhocao_get($tipo) as $row)
    {
?>
        <tr>
            <td>
                <table>
                    <tr>
                        <td style="padding: 0px; border: 0px;">
                            <input type="image" src="https://cdn1.iconfinder.com/data/icons/defaulticon/icons/png/48x48/redo.png" onClick="rotatePhoto('<?php echo basename ($row->minhocaoImagemProposta) ?>', '-90')" >
                        </td>
                        <td style="padding: 0px; border: 0px;">
                            <a href=".<?php echo $row->minhocaoImagemProposta ?>" target="_blank"><img alt='' src=".<?php echo $row->minhocaoImagemProposta ?>?<?php echo time() ?>" style='width: 230px;' ></a>
                        </td>
                        <td style="padding: 0px; border: 0px;">
                            <input type="image" src="https://cdn1.iconfinder.com/data/icons/defaulticon/icons/png/48x48/undo.png" onClick="rotatePhoto('<?php echo basename ($row->minhocaoImagemProposta) ?>', '90')" >
                        </td>
                    </tr>
                </table>
            </td>
            <td>
                <?php echo ucwords( mb_strtolower( $row->minhocaoNome, 'UTF-8' ) ) ?>
            </td>
            <td>
                <?php echo $row->minhocaoEmail ?>
            </td>
            <td>
                <?php echo $row->minhocaoTituloProposta ?>
            </td>
            <td>
                <?php echo $row->minhocaoDescricaoProposta ?>
            </td>
            <td>
                <?php echo $row->minhocaoRegiao ?>
            </td>
            <td>
                <?php echo $row->minhocaoCep ?>
            </td>
            <td>
                <?php echo $row->minhocaoDiretriz1 ?>
            </td>
            <td>
                <?php echo $row->minhocaoDiretriz2 ?>
            </td>
            <td>
                <?php echo $row->minhocaoDiretriz3 ?>
            </td>
            <td>
                <?php echo $row->minhocaoDiretriz4 ?>
            </td>
            <td>
                <?php echo $row->minhocaoDiretriz5 ?>
            </td>
            <td>
                <?php echo $row->minhocaoDiretriz6 ?>
            </td>
            <td>
                <?php echo $row->minhocaoDiretriz7 ?>
            </td>
            <td>
                <?php echo $row->minhocaoDiretriz8 ?>
            </td>
            <td>
                <?php echo $row->minhocaoDiretriz9 ?>
            </td>
            <td>
                <?php echo $row->minhocaoDiretriz10 ?>
            </td>
            <td>
                <?php echo $row->submit_time ?>
            </td>
            <td>
                <div class="onoffswitch">
                    <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch<?php echo $row->submit_time; ?>"
                    <?php
                        $campoModeracao = $row->minhocaoModeracaoProposta;
                        if($campoModeracao == "1")
                        {
                            echo " checked ";
                        }

                        if($campoModeracao == "")
                        {
                            echo " readonly ";
                        }
                        
                    ?> onclick="click_botao('<?php echo $row->submit_time; ?>', this);">
                    <label class="onoffswitch-label" for="myonoffswitch<?php echo $row->submit_time; ?>">
                    <div id="onoffswitch-inner<?php echo $row->submit_time; ?>" class="onoffswitch-inner
                    <?php
                        if($campoModeracao == '')
                        {
                            echo " readonly ";
                        }
                        
                    ?>"></div>
                    <div class="onoffswitch-switch"></div>
                    </label>
                </div>
            </td>
        </tr>
<?php
    }
?>
    </table>
    
    <script type="text/javascript">
        jQuery(document).ready(function() {
            jQuery(".fancybox").fancybox();
        });
    </script>
    <?php
}

function wifi_tabela($tipo) {
?>
    <br/>
    <br/>
    <div id="display"></div>
    <script type='text/javascript'>
            function click_botao(x, cb)
            {
                var myObj = document.getElementById("onoffswitch-inner"+x);
                
                if (cb.readOnly)
                {
                    cb.readOnly = false;
                    jQuery(myObj).removeClass('readonly');
                }
                
                if (document.getElementById("myonoffswitch"+x).checked)
                {
                    var a = '1';
                }
                else
                {
                    var a = '0';
                }
                
                jQuery.ajax({
                type: 'POST',
                url: '<?php echo admin_url( 'admin-ajax.php' ) ?>',
                //url: '<?php //echo ajaxurl ?>',
                data: { action: 'wifi_status_aprovacao', value: a, id: x },
                success: function(html_ceu){
                    jQuery('#display').html(html).show();
                    //alert(html_ceu);
                }
                });
            }
            
            function rotatePhoto(photo, rotate)
            {
                jQuery.ajax({
                    type: 'POST',
                    url: '<?php echo admin_url( 'admin-ajax.php' ); ?>',
                    //data: { action: 'sendPhoto', id: id, photo: photo },
                    data: { action: 'rotateImageWifi', photo: photo, rotate: rotate },
                    success: function(html){
                        //jQuery('#display').html(html).show();
                        location.reload(true);
                    }
                });
            }
    </script>
    <table class="aprovacao_table">
        <tr>
            <th>
                
            </th>
            <th style="min-width: 100px;">
                Nome
            </th>
            <th>
                Email
            </th>
            <th>
                Título
            </th>
            <th>
                Endereço do local
            </th>
            <th>
                Bairro
            </th>
            <th>
                CEP do local
            </th>
            <th style="min-width: 250px;">
                Descrição
            </th>
            <th>
                Região
            </th>
            <th>
                CEP
            </th>
            <th style="min-width: 250px;">
                Descrição do local
            </th>
            <th>
                
            </th>
            <th>
                Moderação
            </th>
        </tr>
<?php
    foreach (wifi_get($tipo) as $row)
    {
?>
        <tr>
            <td>
                <table>
                    <tr>
                        <td style="padding: 0px; border: 0px;">
                            <input type="image" src="https://cdn1.iconfinder.com/data/icons/defaulticon/icons/png/48x48/redo.png" onClick="rotatePhoto('<?php echo basename ($row->wifiImagemProposta) ?>', '-90')" >
                        </td>
                        <td style="padding: 0px; border: 0px;">
                            <a href=".<?php echo $row->wifiImagemProposta ?>" target="_blank"><img alt='' src=".<?php echo $row->wifiImagemProposta ?>?<?php echo time() ?>" style='width: 230px;' ></a>
                        </td>
                        <td style="padding: 0px; border: 0px;">
                            <input type="image" src="https://cdn1.iconfinder.com/data/icons/defaulticon/icons/png/48x48/undo.png" onClick="rotatePhoto('<?php echo basename ($row->wifiImagemProposta) ?>', '90')" >
                        </td>
                    </tr>
                </table>
            </td>
            <td>
                <?php echo ucwords( mb_strtolower( $row->wifiNome, 'UTF-8' ) ) ?>
            </td>
            <td>
                <?php echo $row->wifiEmail ?>
            </td>
            <td>
                <?php echo $row->wifiTituloProposta ?>
            </td>
            <td>
                <?php echo $row->wifiEnderecoProposta ?>
            </td>
            <td>
                <?php echo $row->wifiBairroProposta ?>
            </td>
            <td>
                <?php echo $row->wifiCepProposta ?>
            </td>
            <td>
                <?php echo $row->wifiDescricaoProposta ?>
            </td>
            <td>
                <?php echo $row->wifiRegiao ?>
            </td>
            <td>
                <?php echo $row->wifiCep ?>
            </td>
            <td>
                <?php echo $row->wifiJustificativaProposta ?>
            </td>
            <td>
                <?php //echo $row->submit_time ?>
            </td>
            <td>
                <div class="onoffswitch">
                    <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch<?php echo $row->submit_time; ?>"
                    <?php
                        $campoModeracao = $row->plataformaApoioModeracaoProposta;
                        if($campoModeracao == "1")
                        {
                            echo " checked ";
                        }

                        if($campoModeracao == "")
                        {
                            echo " readonly ";
                        }
                        
                    ?> onclick="click_botao('<?php echo $row->submit_time; ?>', this);">
                    <label class="onoffswitch-label" for="myonoffswitch<?php echo $row->submit_time; ?>">
                    <div id="onoffswitch-inner<?php echo $row->submit_time; ?>" class="onoffswitch-inner
                    <?php
                        if($campoModeracao == '')
                        {
                            echo " readonly ";
                        }
                        
                    ?>"></div>
                    <div class="onoffswitch-switch"></div>
                    </label>
                </div>
            </td>
        </tr>
<?php
    }
?>
    </table>
    
    <script type="text/javascript">
        jQuery(document).ready(function() {
            jQuery(".fancybox").fancybox();
        });
    </script>
    <?php
}

function minhocao_get($tipo)
{
    $query_dados_pessoais = "";
    $query_order = "";
    $query_having = "";
    if ($tipo == "moderar")
    {
        $query_dados_pessoais = "
                , MAX(IF(field_name='minhocaoNome', field_value, NULL )) AS 'minhocaoNome'
                , MAX(IF(field_name='minhocaoEmail', field_value, NULL )) AS 'minhocaoEmail'
                , MAX(IF(field_name='minhocaoRegiao', field_value, NULL )) AS 'minhocaoRegiao'
                , MAX(IF(field_name='minhocaoCep', field_value, NULL )) AS 'minhocaoCep'
                ";
        $query_order = " ORDER BY submit_time ";
        $query_having = "HAVING plataformaApoioConfirmadoEmail = 'S' and plataformaApoioModeracaoProposta = ''";
    }
    if ($tipo == "moderados")
    {
        $query_dados_pessoais = "
                , MAX(IF(field_name='minhocaoNome', field_value, NULL )) AS 'minhocaoNome'
                , MAX(IF(field_name='minhocaoEmail', field_value, NULL )) AS 'minhocaoEmail'
                , MAX(IF(field_name='minhocaoRegiao', field_value, NULL )) AS 'minhocaoRegiao'
                , MAX(IF(field_name='minhocaoCep', field_value, NULL )) AS 'minhocaoCep'
                ";
        $query_order = " ORDER BY submit_time DESC ";
        $query_having = "HAVING plataformaApoioConfirmadoEmail = 'S' and plataformaApoioModeracaoProposta <> ''";
    }
    if ($tipo == "aprovados")
    {
        $query_dados_pessoais = "";
        $query_order = " ORDER BY plataformaApoioNumeroApoiosNumerico DESC, submit_time DESC";
        $query_having = "HAVING plataformaApoioConfirmadoEmail = 'S' and plataformaApoioModeracaoProposta = '1'";
    }
    
    global $wpdb;
    $query = "
            SELECT
                DATE_FORMAT(FROM_UNIXTIME(submit_time), '%b %e, %Y  %l:%i %p') AS Submitted
                , submit_time
            " . $query_dados_pessoais . "
                , MAX(IF(field_name='minhocaoTituloProposta', field_value, NULL )) AS 'minhocaoTituloProposta'
                , MAX(IF(field_name='minhocaoDescricaoProposta', field_value, NULL )) AS 'minhocaoDescricaoProposta'
                , MAX(IF(field_name='minhocaoDiretriz1', field_value, NULL )) AS 'minhocaoDiretriz1'
                , MAX(IF(field_name='minhocaoDiretriz2', field_value, NULL )) AS 'minhocaoDiretriz2'
                , MAX(IF(field_name='minhocaoDiretriz3', field_value, NULL )) AS 'minhocaoDiretriz3'
                , MAX(IF(field_name='minhocaoDiretriz4', field_value, NULL )) AS 'minhocaoDiretriz4'
                , MAX(IF(field_name='minhocaoDiretriz5', field_value, NULL )) AS 'minhocaoDiretriz5'
                , MAX(IF(field_name='minhocaoDiretriz6', field_value, NULL )) AS 'minhocaoDiretriz6'
                , MAX(IF(field_name='minhocaoDiretriz7', field_value, NULL )) AS 'minhocaoDiretriz7'
                , MAX(IF(field_name='minhocaoDiretriz8', field_value, NULL )) AS 'minhocaoDiretriz8'
                , MAX(IF(field_name='minhocaoDiretriz9', field_value, NULL )) AS 'minhocaoDiretriz9'
                , MAX(IF(field_name='minhocaoDiretriz10', field_value, NULL )) AS 'minhocaoDiretriz10'
                , MAX(IF(field_name='plataformaApoioNumeroApoios', field_value, NULL )) AS 'plataformaApoioNumeroApoios'
                , CONVERT(MAX(IF(field_name='plataformaApoioNumeroApoios', field_value, NULL )), UNSIGNED) AS 'plataformaApoioNumeroApoiosNumerico'
                , MAX(IF(field_name='minhocaoImagemProposta', field_value, NULL )) AS 'minhocaoImagemProposta'
                , MAX(IF(field_name='plataformaApoioConfirmadoEmail', field_value, NULL )) AS 'plataformaApoioConfirmadoEmail'
                , MAX(IF(field_name='plataformaApoioModeracaoProposta', field_value, NULL )) AS 'plataformaApoioModeracaoProposta'
            FROM wp_cf7dbplugin_submits
            WHERE form_name = 'Minhocao Envio de Propostas'
            GROUP BY submit_time
            " . $query_having . "
            " . $query_order . "
            ";
    //echo $querystr;
    
    $results = $wpdb->get_results( $query );
    //print_r ($results);
    
    return $results;
}


function wifi_get($tipo)
{
    $query_dados_pessoais = "";
    $query_order = "";
    $query_having = "";
    if ($tipo == "moderar")
    {
        $query_dados_pessoais = "
                , MAX(IF(field_name='wifiNome', field_value, NULL )) AS 'wifiNome'
                , MAX(IF(field_name='wifiEmail', field_value, NULL )) AS 'wifiEmail'
                , MAX(IF(field_name='wifiRegiao', field_value, NULL )) AS 'wifiRegiao'
                , MAX(IF(field_name='wifiCep', field_value, NULL )) AS 'wifiCep'
                ";
        $query_order = " ORDER BY submit_time ";
        $query_having = "HAVING plataformaApoioConfirmadoEmail = 'S' and plataformaApoioModeracaoProposta = ''";
    }
    if ($tipo == "moderados")
    {
        $query_dados_pessoais = "
                , MAX(IF(field_name='wifiNome', field_value, NULL )) AS 'wifiNome'
                , MAX(IF(field_name='wifiEmail', field_value, NULL )) AS 'wifiEmail'
                , MAX(IF(field_name='wifiRegiao', field_value, NULL )) AS 'wifiRegiao'
                , MAX(IF(field_name='wifiCep', field_value, NULL )) AS 'wifiCep'
                ";
        $query_order = " ORDER BY submit_time DESC ";
        $query_having = "HAVING plataformaApoioConfirmadoEmail = 'S' and plataformaApoioModeracaoProposta <> ''";
    }
    if ($tipo == "aprovados")
    {
        $query_dados_pessoais = "";
        $query_order = " ORDER BY plataformaApoioNumeroApoiosNumerico DESC, submit_time DESC";
        $query_having = "HAVING plataformaApoioConfirmadoEmail = 'S' and plataformaApoioModeracaoProposta = '1'";
    }
    
    global $wpdb;
    $query = "
            SELECT
                DATE_FORMAT(FROM_UNIXTIME(submit_time), '%b %e, %Y  %l:%i %p') AS Submitted
                , submit_time
            " . $query_dados_pessoais . "
                , MAX(IF(field_name='wifiTituloProposta', field_value, NULL )) AS 'wifiTituloProposta'
                , MAX(IF(field_name='wifiEnderecoProposta', field_value, NULL )) AS 'wifiEnderecoProposta'
                , MAX(IF(field_name='wifiBairroProposta', field_value, NULL )) AS 'wifiBairroProposta'
                , MAX(IF(field_name='wifiCepProposta', field_value, NULL )) AS 'wifiCepProposta'
                , MAX(IF(field_name='wifiDescricaoProposta', field_value, NULL )) AS 'wifiDescricaoProposta'
                , MAX(IF(field_name='wifiJustificativaProposta', field_value, NULL )) AS 'wifiJustificativaProposta'
                , MAX(IF(field_name='plataformaApoioNumeroApoios', field_value, NULL )) AS 'plataformaApoioNumeroApoios'
                , CONVERT(MAX(IF(field_name='plataformaApoioNumeroApoios', field_value, NULL )), UNSIGNED) AS 'plataformaApoioNumeroApoiosNumerico'
                , MAX(IF(field_name='wifiImagemProposta', field_value, NULL )) AS 'wifiImagemProposta'
                , MAX(IF(field_name='plataformaApoioConfirmadoEmail', field_value, NULL )) AS 'plataformaApoioConfirmadoEmail'
                , MAX(IF(field_name='plataformaApoioModeracaoProposta', field_value, NULL )) AS 'plataformaApoioModeracaoProposta'
            FROM wp_cf7dbplugin_submits
            WHERE form_name = 'Wifi - Envio de Propostas'
            GROUP BY submit_time
            " . $query_having . "
            " . $query_order . "
            ";
    //echo $querystr;
    
    $results = $wpdb->get_results( $query );
    //print_r ($results);
    
    return $results;
}


add_action( 'admin_enqueue_scripts', 'minhocao_js' );
function minhocao_js() {
    //if( 'edit.php' != $hook )
        //return;
//echo '<link rel="stylesheet" type="text/css" href="stylefs.css">'."\n";
    global $hook_suffix;
    if ($hook_suffix == 'toplevel_page_minhocao_pendentes')
    {
?>
        <script type='text/javascript'>

        </script>
<?php
    }
}


add_action( 'wp_ajax_minhocao_status_aprovacao', 'minhocao_status_aprovacao_ajax' );
function minhocao_status_aprovacao_ajax()
{
    //echo $_POST['id']. ':' . $_POST['value']. ':.:';
    if(isset($_POST['id']) && isset($_POST['value']))
    {

    $id = '';
    $id = (string)$_POST['id'];
    $value = '';
    $value = (string)$_POST['value'];

    //echo $id. ':' . $value. ':.:';

    global $wpdb;
    $query = "update wp_cf7dbplugin_submits
              set field_value = '" . $value . "'
              where submit_time = " . $id . "
                and form_name = 'Minhocao Envio de Propostas'
                and field_name = 'plataformaApoioModeracaoProposta'
            ";
    
    echo $query;
    $wpdb->query($query);
    
    }
    wp_die();
}

add_action( 'wp_ajax_wifi_status_aprovacao', 'wifi_status_aprovacao_ajax' );
function wifi_status_aprovacao_ajax()
{
    //echo $_POST['id']. ':' . $_POST['value']. ':.:';
    if(isset($_POST['id']) && isset($_POST['value']))
    {

    $id = '';
    $id = (string)$_POST['id'];
    $value = '';
    $value = (string)$_POST['value'];

    //echo $id. ':' . $value. ':.:';
    

    global $wpdb;
    $query = "update wp_cf7dbplugin_submits
              set field_value = '" . $value . "'
              where submit_time = " . $id . "
                and form_name = 'Wifi - Envio de Propostas'
                and field_name = 'plataformaApoioModeracaoProposta'
            ";
    
    echo $query;
    $wpdb->query($query);
    
    }
    wp_die();
}

//rotacionar jpg, jpeg e png
add_action( 'wp_ajax_rotateImageMinhocao', 'image_rotateMinhocao' );
function image_rotateMinhocao()
{
    //echo $_POST['photo']. ':' . $_POST['rotate']. ':.:';
    if(isset($_POST['photo']) && isset($_POST['rotate']))
    {
        //echo $_POST['photo']. ':' . $_POST['rotate']. ':.:';
        
        $photo = (string)$_POST['photo'];
        $rotate = (int)$_POST['rotate'];
        
        $upload_dir = wp_upload_dir();
        $filename = $upload_dir['basedir'] . "/minhocao/" . $photo;
        $ext = '';
    //we check the extension, it can be 4 characters (for jpeg) and must be atleast 3 characters
    if(preg_match('/.*\.([A-Za-z]?[A-Za-z]{3})$/', $filename, $ext)) {
        //var_dump($ext);
        $ext = $ext[1];
        //var_dump($ext);
    } else {
        //invalid image
        return false;
    }
 
    switch($ext) {
        case 'jpg' :
        case 'jpeg' :
            $source = imagecreatefromjpeg($filename);
            break;
        case 'png' :
            $source = imagecreatefrompng($filename);
            break;
        default :
            return false; //failure on invalid extension
    }
        if ($source !== false)
        {
            $rotation = imagerotate($source, $rotate, 0);
            switch($ext) {
                case 'jpg' :
                case 'jpeg' :
                        header('Content-type: image/jpeg');
                        imagejpeg($rotation, $filename);
                    break;
                case 'png':
                        header('Content-type: image/png');
                        imagepng($rotation, $filename);
                    break;
                default :
                    return false; //failure on invalid extension
            }
           
            imagedestroy($source);
            imagedestroy($rotation);
        }
    }
}

//rotacionar jpg, jpeg e png
add_action( 'wp_ajax_rotateImageWifi', 'image_rotateWifi' );
function image_rotateWifi()
{
    //echo $_POST['photo']. ':' . $_POST['rotate']. ':.:';
    if(isset($_POST['photo']) && isset($_POST['rotate']))
    {
        //echo $_POST['photo']. ':' . $_POST['rotate']. ':.:';
        
        $photo = (string)$_POST['photo'];
        $rotate = (int)$_POST['rotate'];
        
        $upload_dir = wp_upload_dir();
        $filename = $upload_dir['basedir'] . "/wifi/" . $photo;
        $ext = '';
    //we check the extension, it can be 4 characters (for jpeg) and must be atleast 3 characters
    if(preg_match('/.*\.([A-Za-z]?[A-Za-z]{3})$/', $filename, $ext)) {
        //var_dump($ext);
        $ext = $ext[1];
        //var_dump($ext);
    } else {
        //invalid image
        return false;
    }
 
    switch($ext) {
        case 'jpg' :
        case 'jpeg' :
            $source = imagecreatefromjpeg($filename);
            break;
        case 'png' :
            $source = imagecreatefrompng($filename);
            break;
        default :
            return false; //failure on invalid extension
    }
        if ($source !== false)
        {
            $rotation = imagerotate($source, $rotate, 0);
            switch($ext) {
                case 'jpg' :
                case 'jpeg' :
                        header('Content-type: image/jpeg');
                        imagejpeg($rotation, $filename);
                    break;
                case 'png':
                        header('Content-type: image/png');
                        imagepng($rotation, $filename);
                    break;
                default :
                    return false; //failure on invalid extension
            }
           
            imagedestroy($source);
            imagedestroy($rotation);
        }
    }
}

/*
 * Antigo Codigo de rotação de jpg
 * add_action( 'wp_ajax_rotateImageMinhocao', 'image_rotateMinhocao' );
function image_rotateMinhocao()
{
    //echo $_POST['photo']. ':' . $_POST['rotate']. ':.:';
    if(isset($_POST['photo']) && isset($_POST['rotate']))
    {
        //echo $_POST['photo']. ':' . $_POST['rotate']. ':.:';
        
        $photo = (string)$_POST['photo'];
        $rotate = (int)$_POST['rotate'];
        
        $upload_dir = wp_upload_dir();
        $filename = $upload_dir['basedir'] . "/minhocao/" . $photo;
        
        $source = imagecreatefromjpeg($filename);
        if ($source !== false)
        {
            //imagealphablending($source, false);
            //imagesavealpha($source, true);

            // This should create transparent background.
            //$bgd_color = imagecolorallocatealpha($img, 0, 0, 0, 127);

            $rotation = imagerotate($source, $rotate, 0);
            //$rotation = imagerotate($source, 90);
            //imagealphablending($rotation, false);
            //imagesavealpha($rotation, true);
            
            header('Content-type: image/jpeg');
            imagejpeg($rotation, $filename);
            imagedestroy($source);
            imagedestroy($rotation);
        }
    }
}*/

add_action( 'wp_ajax_aprovadasMinhocao', 'minhocao_aprovadas' );
add_action('wp_ajax_nopriv_aprovadasMinhocao', 'minhocao_aprovadas');
function minhocao_aprovadas()
{
    //echo $_POST['parametros'] . ':.:';
    if(isset($_POST['parametros']))
    {
        /*$parametros = '';
        $parametros = (string)$_POST['parametros'];

        //echo $_POST['parametros'] . ':.:';
        
        $parametrosE = explode(";", $parametros);
        //print_r($parametrosE); echo ":.:";
        
        $sqlParametros = "";
        
        for ($i = 1; $i < count($parametrosE); $i++)
        {
            if ($i == 1)
            {
                $parametro = (string)$parametrosE[$i];
                //echo $parametro . ":.........:";
                $sqlParametros .= "img.categorias like '%" . $parametro . "%'";
            }
            else
            {
                $parametro = (string)$parametrosE[$i];
                //echo $parametro . ":.........:";
                $sqlParametros .= "or img.categorias like '%" . $parametro . "%'";
            }
            //echo $sqlParametros . ":.:";
        }
        
        if (count($parametrosE) == 1 && isset($parametrosE[0]))
        {
            $sqlParametros = "1 = 1";
        }*/

        $results = minhocao_get("aprovados");
        //print_r ($results);

?>
        <div class="result ">
            <?php
                foreach ($results as $row)
                {
            ?>
            <div class="resultMinhocao">
                <div class="resultinternoMinhocao">
                    
                    <!-- copiar e colar aqui -->
                    
                </div>
            </div>
            <?php
                }
            ?>
        </div>
<?php
        die();
    }
}

/*
add_filter('wpcf7_validate_text','cf7_custom_form_validation', 10, 2); // text field
add_filter('wpcf7_validate_text*', 'cf7_custom_form_validation', 10, 2); // Req. text field
function cf7_custom_form_validation($result,$tag)
{
    try
    {
        $tag = new WPCF7_Shortcode( $tag );
        $type = $tag->type;
        $name = $tag->name;
    
        if($type == 'text*' && $_POST['teste'] == '')
        {
            $result->invalidate( $tag, 'Entered Pin code for India is Invalid' );
        }

        if('teste' == 'teste')
        {
            $inPostalCode = $_POST['teste'];

            $result->invalidate( $tag, 'Entered Pin code for India is Invalid' );
        }
        $result->invalidate( $tag, 'Entered Pin code for India is Invalid' );

        return $result;
    }
    catch (Exception $e)
    {
        $result->invalidate( $tag, $e->getMessage() );
        return $result;
    }
}*/


add_filter('wpcf7_validate_text*', 'cf7_custom_form_validation', 10, 2); // Req. text field
function cf7_custom_form_validation( $result, $tag )
{
        $tag = new WPCF7_Shortcode( $tag );
        
        //validando CEP
        if ( $tag->name == 'minhocaoCep' || $tag->name == 'wifiCep' || $tag->name == 'wifiCepProposta' || $tag->name == 'CEP' )
        {
            $campoCep = $tag->name;
           // echo $campoCep;
            if ( isset( $_POST[$campoCep] ) )
            {
                $c = trim( $_POST[$campoCep] );
                $cep =  preg_replace("/[^0-9]/", "", $c);
                $cont = (int) strlen($cep);
                
                if($cont != 8)
                {
                    $result->invalidate( $tag, "Digite um CEP V&aacute;lido." );
                }
            }
        }

        
        //validando CPF/CNPJ
        if ( $tag->name == 'CPFCNPJ' )
        {
            $campoDoc = $tag->name;
            if ( isset( $_POST[$campoDoc] ) )
            {
                $c = trim( $_POST[$campoDoc] );
                $doc =  preg_replace("/[^0-9]/", "", $c);
                $cont = (int) strlen($doc);
                
                if($cont != 11 && $cont != 14)
                {
                    $result->invalidate( $tag, "Digite um documento v&aacute;lido." );
                }
            }
        }
        
        
        return $result;
}


//validando email
add_filter( 'wpcf7_validate_email*', 'custom_email_confirmation_validation_filter', 20, 2 );
function custom_email_confirmation_validation_filter( $result, $tag ) {
    $tag = new WPCF7_Shortcode( $tag );
    
    
    if ( $tag->name == 'minhocaoEmail' )
    {
        $minhocaoEmail = 0;
        if ( isset( $_POST['minhocaoEmail'] ) )
        {
            $minhocaoEmail = trim( $_POST['minhocaoEmail'] );
        }
        
        global $wpdb;
        
        $count = $wpdb->get_var("
                select count(*) from wp_cf7dbplugin_submits
                where form_name in('Minhocao Apoio Proposta','Minhocao Envio de Propostas')
                  and field_name = 'minhocaoEmail'
                  and field_value = '" . $minhocaoEmail . "'
                                ");
        
        if ($count > 0)
        {
           /*             $query1 = "SELECT submit_time FROM wp_cf7dbplugin_submits WHERE form_name in"
                    . "('Minhocao Apoio Proposta','Minhocao Envio de Propostas') AND "
                    . "field_name = 'minhocaoEmail' and (field_value = '" . $minhocaoEmail . "')";
            $resultsQuery = $wpdb->get_results($query1);
            
            foreach($resultsQuery as $row){
                $submit = $row->submit_time; 
                echo $submit;
                 $confirmadoEmail = $wpdb->get_var("SELECT field_value FROM wp_cf7dbplugin_submits WHERE form_name 
                IN ('Minhocao Apoio Proposta','Minhocao Envio de Propostas') AND submit_time = '" . $submit . "'
                AND field_name = 'confirmadoEmail'");
                if($confirmadoEmail === 'S'){
                    $result->invalidate( $tag, "Email inserido jÃ¡ confirmou email ou jÃ¡ enviou proposta." );
                }
            }*/
            
            $votoValidado = $wpdb->get_results("
                SELECT b.field_value FROM (
                                            SELECT * FROM wp_cf7dbplugin_submits
                                            WHERE form_name IN ('Minhocao Apoio Proposta','Minhocao Envio de Propostas') 
                                              AND field_name = 'minhocaoEmail'
                                              AND field_value = '" . $minhocaoEmail . "'
                                          ) AS a
                                          JOIN (
                                                 SELECT * FROM wp_cf7dbplugin_submits
                                                 WHERE form_name IN ('Minhocao Apoio Proposta','Minhocao Envio de Propostas')
                                                   AND field_name = 'plataformaApoioConfirmadoEmail'
                                                   AND field_value = 'S'
                                               ) AS b
                ON a.submit_time = b.submit_time
                                               ");
            
            if($votoValidado)
            {
               $result->invalidate( $tag, "Você já enviou ou apoiou alguma proposta." );    
            }
            //$result->invalidate( $tag, "Email já existente." );
        }
    }    
    

    if ( $tag->name == 'wifiEmail' )
    {
        $minhocaoEmail = 0;
        if ( isset( $_POST['wifiEmail'] ) )
        {
            $minhocaoEmail = trim( $_POST['wifiEmail'] );
        }
        
        global $wpdb;
        
        $count = $wpdb->get_var("
                select count(*) from wp_cf7dbplugin_submits
                where form_name in('Wifi - Apoio Proposta','Wifi - Envio de Propostas')
                  and field_name = 'wifiEmail'
                  and field_value = '" . $minhocaoEmail . "'
                                ");
        
        if ($count > 0)
        {
            $votoValidado = $wpdb->get_results("
                SELECT b.field_value FROM (
                                            SELECT * FROM wp_cf7dbplugin_submits
                                            WHERE form_name IN ('Wifi - Apoio Proposta','Wifi - Envio de Propostas') 
                                              AND field_name = 'wifiEmail'
                                              AND field_value = '" . $minhocaoEmail . "'
                                          ) AS a
                                          JOIN (
                                                 SELECT * FROM wp_cf7dbplugin_submits
                                                 WHERE form_name IN ('Wifi - Apoio Proposta','Wifi - Envio de Propostas')
                                                   AND field_name = 'plataformaApoioConfirmadoEmail'
                                                   AND field_value = 'S'
                                               ) AS b
                ON a.submit_time = b.submit_time
                                               ");
            
            if($votoValidado)
            {
               $result->invalidate( $tag, "Você já enviou ou apoiou alguma sugestão." );
            }
        }
    }
    
    
    return $result;
}


//gerando token
//add_action('wpcf7_before_send_mail', 'token_Proposta');
//add_filter('cfdb_form_data', 'token_Proposta');
add_filter( 'wpcf7_posted_data', 'posted_data_wpcf7' );
function posted_data_wpcf7($formData)
{
    if ( isset($formData['plataformaApoioToken']) )
    {
        global $wpdb;
    
        $token = substr(uniqid(), 1, 8) . substr(uniqid(), 3, 9) . substr(uniqid(), 8, 13);
        $i = true;
        $token_count = 0;
        while($i)
        {
            $token_count = $wpdb->get_var("
                                        select count(*) from wp_cf7dbplugin_submits 
                                        where field_name = 'plataformaApoioToken'
                                          and field_value = '" . $token . "'
                                        ");
            if ($token_count > 0)
            {
                $token = substr(uniqid(), 1, 8) . substr(uniqid(), 3, 9) . substr(uniqid(), 8, 13);
                
            }
            else
            {
                //$formData->posted_data['tokenDaPessoa'] = $token;
                $formData['plataformaApoioToken'] = $token;
                $i = false;
            }
        }
    }
    
    if(isset($formData['plataformaApoioConfirmadoEmail']))
    {
        $formData['plataformaApoioConfirmadoEmail'] = 'N';
    }
    
    if(isset($formData['plataformaApoioNumeroApoios']))
    {
        $formData['plataformaApoioNumeroApoios'] = '0';
    }
    
    if(isset($formData['plataformaApoioSenha']))
    {
        $formData['plataformaApoioSenha'] = '';
    }
    
    if(isset($formData['plataformaApoioModeracaoProposta']))
    {
        $formData['plataformaApoioModeracaoProposta'] = '';
    }
    
    if(isset($formData['minhocaoCep']))
    {
            $cep = $formData['minhocaoCep'];
            if(!strstr($cep,"-"))
            {
                $antes = substr($cep, 0,5);
                $depois = substr($cep, 5);
                $cep = $antes . "-" . $depois;
            }
            $formData['minhocaoCep'] = $cep;
    }
    
    if(isset($formData['wifiCep']))
    {
            $cep = $formData['wifiCep'];
            if(!strstr($cep,"-"))
            {
                $antes = substr($cep, 0,5);
                $depois = substr($cep, 5);
                $cep = $antes . "-" . $depois;
            }
            $formData['wifiCep'] = $cep;
    }
    
    if(isset($formData['wifiCepProposta']))
    {
            $cep = $formData['wifiCepProposta'];
            if(!strstr($cep,"-"))
            {
                $antes = substr($cep, 0,5);
                $depois = substr($cep, 5);
                $cep = $antes . "-" . $depois;
            }
            $formData['wifiCepProposta'] = $cep;
    }
    
    if(isset($formData['CEP']))
    {
            $cep = $formData['CEP'];
            if(!strstr($cep,"-"))
            {
                $antes = substr($cep, 0,5);
                $depois = substr($cep, 5);
                $cep = $antes . "-" . $depois;
            }
            $formData['CEP'] = $cep;
    }
    if(isset($formData['CPFCNPJ']))
    {
            $doc = $formData['CPFCNPJ'];
            $doc = preg_replace("/[^0-9]/", "", $doc);
            $doclength = (int) strlen($doc);
            if($doclength === 11)
            {
                $antes = substr($doc , 0,3);
                $depois = substr($doc, 3);
                $doc = $antes . "." . $depois;
                $antes = substr($doc , 0,7);
                $depois = substr($doc, 7);
                $doc = $antes . "." . $depois;
                $antes = substr($doc , 0,11);
                $depois = substr($doc, 11);
                $doc = $antes . "-" . $depois;
            }else{
                $antes = substr($doc , 0,2);
                $depois = substr($doc, 2);
                $doc = $antes . "." . $depois;
                $antes = substr($doc , 0,6);
                $depois = substr($doc, 6);
                $doc = $antes . "." . $depois;
                $antes = substr($doc , 0,10);
                $depois = substr($doc, 10);
                $doc = $antes . "/" . $depois;
                $antes = substr($doc , 0,15);
                $depois = substr($doc, 15);
                $doc = $antes . "-" . $depois;  
            }
            $formData['CPFCNPJ'] = $doc;
    }
    
    return $formData;  
}


add_filter('cfdb_form_data', 'cfdbFilterSaveFile');
function cfdbFilterSaveFile($formData)
{
    if ($formData)
    {
        $formData_float = false;
        
        // minhocao
        if ($formData->title == 'Minhocao Envio de Propostas' && isset($formData->uploaded_files['minhocaoImagemProposta']))
        {
            // CHANGE THIS: directory where the file will be saved permanently
            $uploaddir = './wp-content/uploads/minhocao/';
            $fieldName = 'minhocaoImagemProposta';
            $formData_float = true;
        }
        // wifi
        else if ($formData->title == 'Wifi - Envio de Propostas' && isset($formData->uploaded_files['wifiImagemProposta']))
        {
            // CHANGE THIS: directory where the file will be saved permanently
            $uploaddir = './wp-content/uploads/wifi/';
            $fieldName = 'wifiImagemProposta';
            $formData_float = true;
        }
        
        if ($formData_float)
        {
            // make a copy of data from cf7
            $formCopy = clone $formData;

            // breakdown parts of uploaded file, to get basename
            $path = pathinfo($formCopy->uploaded_files[$fieldName]);
            // directory of the new file
            $newfile = $uploaddir . $path['basename'];

            // check if a file with the same name exists in the directory
            if (file_exists($newfile))
            {
                $dupname = true;
                $i = 2;
                while ($dupname)
                {
                    $newpath = pathinfo($newfile);
                    //$newfile = $uploaddir . $newpath['filename'] . '-' . $i . '.' . $newpath['extension'];
          
          $extension = '';
          if ( ! $newpath['extension'] )
          {
            $extension = 'jpg';
          }
          else
          {
            $extension = $newpath['extension'];
          }
          
                    if (file_exists($uploaddir . $newpath['filename'] . '-' . $i . '.' . $extension))
                    {
                        $i++;
                    }
                    else
                    {
                        $dupname = false;
                        $newfile = $uploaddir . $newpath['filename'] . '-' . $i . '.' . $extension;
                    }
                }
            }

            // make a copy of file to new directory
            if (!copy($formCopy->uploaded_files[$fieldName], $newfile))
            {
                
            }
            else
            {
                // save the path to the copied file to the cfdb database
                $formCopy->posted_data[$fieldName] = $newfile;

                // delete the original file from $formCopy
                //unset($formCopy->uploaded_files[$fieldName]);

                $formData = $formCopy;
            }
        }
        
        // submit time
        if ( $formData->title == 'Wifi - Envio de Propostas' && isset($formData->posted_data['plataformaApoioIdProposta']) )
        {
            $formData->posted_data['plataformaApoioIdProposta'] = $formData->submit_time;
        }
        
    }
    return $formData;
}


// shortcode da pagina de detalhes da Plataforma de Participacao de Proposta e Apoio
// shortcode = [shortCode_PlataformaParticipacaoDetalhes tipo="quandoClica ou urlAutomatico" projeto=""]
add_shortcode('shortCode_PlataformaParticipacaoDetalhes', 'shortcode_plataforma_participacao_detalhes');
function shortcode_plataforma_participacao_detalhes( $atts )
{
    if ( $atts['tipo'] == "urlAutomatico" )
    {
        if( isset($_GET['hd']) || $_POST["hd"] )
        {
            $id = '';
            if( isset($_GET['hd']) )
            {
                $id = (string)$_GET['hd'];
            }
            else if ($_POST["hd"])
            {
                $id = (string)$_POST['hd'];
            }
            
            if ( $atts['projeto'] == "minhocao" )
            {
                $query = "
                        SELECT
                            DATE_FORMAT(FROM_UNIXTIME(submit_time), '%b %e, %Y  %l:%i %p') AS Submitted
                            , submit_time
                            , MAX(IF(field_name='minhocaoTituloProposta', field_value, NULL )) AS 'TituloProposta'
                            , MAX(IF(field_name='minhocaoDescricaoProposta', field_value, NULL )) AS 'DescricaoProposta'
                            , MAX(IF(field_name='minhocaoDiretriz1', field_value, NULL )) AS 'Diretriz1'
                            , MAX(IF(field_name='minhocaoDiretriz2', field_value, NULL )) AS 'Diretriz2'
                            , MAX(IF(field_name='minhocaoDiretriz3', field_value, NULL )) AS 'Diretriz3'
                            , MAX(IF(field_name='minhocaoDiretriz4', field_value, NULL )) AS 'Diretriz4'
                            , MAX(IF(field_name='minhocaoDiretriz5', field_value, NULL )) AS 'Diretriz5'
                            , MAX(IF(field_name='minhocaoDiretriz6', field_value, NULL )) AS 'Diretriz6'
                            , MAX(IF(field_name='minhocaoDiretriz7', field_value, NULL )) AS 'Diretriz7'
                            , MAX(IF(field_name='minhocaoDiretriz8', field_value, NULL )) AS 'Diretriz8'
                            , MAX(IF(field_name='minhocaoDiretriz9', field_value, NULL )) AS 'Diretriz9'
                            , MAX(IF(field_name='minhocaoDiretriz10', field_value, NULL )) AS 'Diretriz10'
                            , MAX(IF(field_name='plataformaApoioNumeroApoios', field_value, NULL )) AS 'plataformaApoioNumeroApoios'
                            , MAX(IF(field_name='minhocaoImagemProposta', field_value, NULL )) AS 'ImagemProposta'
                            , MAX(IF(field_name='plataformaApoioModeracaoProposta', field_value, NULL )) AS 'plataformaApoioModeracaoProposta'
                            , MAX(IF(field_name='plataformaApoioConfirmadoEmail', field_value, NULL )) AS 'plataformaApoioConfirmadoEmail'
                        FROM wp_cf7dbplugin_submits
                        WHERE form_name = 'Minhocao Envio de Propostas'
                          and submit_time = " . $id . "
                        GROUP BY submit_time
                        HAVING plataformaApoioConfirmadoEmail = 'S' and plataformaApoioModeracaoProposta = 1
                        ";
            }
            else if ( $atts['projeto'] == "wifi" )
            {
                $query = "
                        SELECT
                            DATE_FORMAT(FROM_UNIXTIME(submit_time), '%b %e, %Y  %l:%i %p') AS Submitted
                            , submit_time
                            , MAX(IF(field_name='wifiTituloProposta', field_value, NULL )) AS 'TituloProposta'
                            , MAX(IF(field_name='wifiEnderecoProposta', field_value, NULL )) AS 'EnderecoProposta'
                            , MAX(IF(field_name='wifiBairroProposta', field_value, NULL )) AS 'BairroProposta'
                            , MAX(IF(field_name='wifiCepProposta', field_value, NULL )) AS 'CepProposta'
                            , MAX(IF(field_name='wifiDescricaoProposta', field_value, NULL )) AS 'DescricaoProposta'
                            , MAX(IF(field_name='wifiJustificativaProposta', field_value, NULL )) AS 'JustificativaProposta'
                            , MAX(IF(field_name='plataformaApoioNumeroApoios', field_value, NULL )) AS 'plataformaApoioNumeroApoios'
                            , MAX(IF(field_name='wifiImagemProposta', field_value, NULL )) AS 'ImagemProposta'
                            , MAX(IF(field_name='plataformaApoioModeracaoProposta', field_value, NULL )) AS 'plataformaApoioModeracaoProposta'
                            , MAX(IF(field_name='plataformaApoioConfirmadoEmail', field_value, NULL )) AS 'plataformaApoioConfirmadoEmail'
                        FROM wp_cf7dbplugin_submits
                        WHERE form_name = 'Wifi - Envio de Propostas'
                          and submit_time = " . $id . "
                        GROUP BY submit_time
                        HAVING plataformaApoioConfirmadoEmail = 'S' and plataformaApoioModeracaoProposta = 1
                        ";
            }

            global $wpdb;
            
            //echo $query;

            $row = $wpdb->get_row( $query );

        }
    }
    
    $hashtag = "";
    $popmakeApoioProposta = "";
    if ( $atts['projeto'] == "minhocao" )
    {
        $hashtag = "smdu,minhocao,participe";
        $popmakeApoioProposta = "popmake-16629 popmake-minhocao-apoio-proposta";
    }
    else if ( $atts['projeto'] == "wifi" )
    {
        $hashtag = "smdu,sesprefsp,WiFiLivre,participe";
        $popmakeApoioProposta = "popmake-18585 popmake-wifi-apoio-proposta";
    }
    
    ob_start();
?>
    <?php
        ?>
        <br>
        <div class="result ">
            <?php

            ?>
            <div class="resultMinhocaoDetalhes">
                <div class="resultinternoMinhocaoDetalhes">
                    <div class="minhocaoDetalhes" >
                        <div class="minhocaoDetalhesImagem">
                            <div id="minhocaoDetalhesImagemInterno" class="minhocaoDetalhesImagemInterno" style="
                                background: url(.<?php if ( $atts['tipo'] == "urlAutomatico" ) { echo $row->ImagemProposta; } ?>) no-repeat;
                                background-color: #E6E6E6;
                                background-size: cover;
                                background-position: center center;
                                background-clip: content-box;
                            ">
                            </div>
                        </div>
                        <div class="minhocaoDetalhesDescritivo">
                            <div class="minhocaoDetalhesDescritivoApoiadas">
                                <span class="minhocaoDetalhesDescritivoApoiadasInterno" >
                                    <?php if ( $atts['tipo'] == "urlAutomatico" ) { echo $row->plataformaApoioNumeroApoios; } ?> apoiadas
                                </span>
                            </div>
                            <div class="minhocaoDetalhesDescritivoTitulo">
                                <?php
                                    if ( $atts['tipo'] == "urlAutomatico" )
                                    {
                                        if ( $atts['projeto'] == "minhocao" )
                                        {
                                            echo $row->TituloProposta;
                                        }
                                        else if ( $atts['projeto'] == "wifi" )
                                        {
                                            echo mb_strtoupper($row->TituloProposta);
                                        }
                                    }
                                ?>
                            </div>
                            <div class="minhocaoDetalhesLinha">
                                
                            </div>
                            <div class="minhocaoDetalhesDescritivoDescricao">
                                <?php if ( $atts['tipo'] == "urlAutomatico" && $atts['projeto'] == "wifi" ) { echo $row->EnderecoProposta . " - " . $row->BairroProposta . " - CEP " . $row->CepProposta . "<br/><br/>" ; } ?>
                                <?php if ( $atts['tipo'] == "urlAutomatico" ) { echo $row->DescricaoProposta; } ?>
                            </div>
                        </div>
                        <div class="minhocaoDetalhesDiretrizes">
                            <?php
                                if ( $atts['projeto'] == "minhocao" )
                                {
                            ?>
                                <div class="minhocaoDetalhesDiretrizesTitulo">
                                    Diretrizes
                                </div>
                                <div class="minhocaoDetalhesLinha">
                                </div>
                                <div class="minhocaoDetalhesDiretrizes1" >
                                    <div class="diretriz1">
                                        1) <?php if ( $atts['tipo'] == "urlAutomatico" ) { echo $row->Diretriz1; } ?>
                                    </div>
                                    <div class="diretriz2">
                                        2) <?php if ( $atts['tipo'] == "urlAutomatico" ) { echo $row->Diretriz2; } ?>
                                    </div>
                                    <div class="diretriz3">
                                        3) <?php if ( $atts['tipo'] == "urlAutomatico" ) { echo $row->Diretriz3; } ?>
                                    </div>
                                    <div class="diretriz4">
                                        4) <?php if ( $atts['tipo'] == "urlAutomatico" ) { echo $row->Diretriz4; } ?>
                                    </div>
                                    <div class="diretriz5">
                                        5) <?php if ( $atts['tipo'] == "urlAutomatico" ) { echo $row->Diretriz5; } ?>
                                    </div>
                                </div>
                                <div class="minhocaoDetalhesDiretrizes2" >
                                    <div class="diretriz6">
                                        6) <?php if ( $atts['tipo'] == "urlAutomatico" ) { echo $row->Diretriz6; } ?>
                                    </div>
                                    <div class="diretriz7">
                                        7) <?php if ( $atts['tipo'] == "urlAutomatico" ) { echo $row->Diretriz7; } ?>
                                    </div>
                                    <div class="diretriz8">
                                        8) <?php if ( $atts['tipo'] == "urlAutomatico" ) { echo $row->Diretriz8; } ?>
                                    </div>
                                    <div class="diretriz9">
                                        9) <?php if ( $atts['tipo'] == "urlAutomatico" ) { echo $row->Diretriz9; } ?>
                                    </div>
                                    <div class="diretriz10">
                                        10) <?php if ( $atts['tipo'] == "urlAutomatico" ) { echo $row->Diretriz10; } ?>
                                    </div>
                                </div>
                            <?php
                                }
                            ?>
                            <?php
                                if ( $atts['projeto'] == "wifi" )
                                {
                            ?>
                                <div class="minhocaoDetalhesDiretrizesTitulo">
                                    Descrição do local
                                </div>
                                <div class="minhocaoDetalhesDiretrizes" >
                                    <div class="justificativa">
                                        <?php if ( $atts['tipo'] == "urlAutomatico" ) { echo $row->JustificativaProposta; } ?>
                                    </div>
                                </div>
                                <div class="minhocaoDetalhesLinha">
                                </div>
                            <?php
                                }
                            ?>
                        </div>
                        <div class="minhocaoDetalhesIcones">
                            <div class="minhocaoDetalhesIconesInterno" >
                                <?php
                                    $onclick = "";
                                    if ( $atts['tipo'] == "urlAutomatico" )
                                    {
                                        $onclick = $row->submit_time;

                                    }
                                    else
                                    {
                                        $onclick = "jQuery( '.minhocaoIdPropostaApoiadaDetalhes' ).val()";
                                    }
                                ?>
                                <div class="minhocaoDetalhesIconesInternoCompartilhar" >
                                   <!-- <a href="#">
                                        <img alt='' src="/wp-content/themes/gestaourbana-1.2/images/share-interna-300px.png" width="300" height="46" />
                                    </a> -->
                                        <img alt='' src="/wp-content/themes/gestaourbana-1.2/images/facebook_cinza.png" width="40" height="40" onclick="window.open('http://www.facebook.com/sharer/sharer.php?u=http://gestaourbana.prefeitura.sp.gov.br<?php echo parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH) ?>?hd=' + <?php echo $onclick ?>)" style="padding-right: 12px;" />
                                        <img alt='' src="/wp-content/themes/gestaourbana-1.2/images/google-cinza.png" width="40" height="40" onclick="window.open('https://plus.google.com/share?url=http://gestaourbana.prefeitura.sp.gov.br<?php echo parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH) ?>?hd=' + <?php echo $onclick ?>)" style="padding-right: 12px;" />
                                        <img alt='' src="/wp-content/themes/gestaourbana-1.2/images/twitter-cinza.png" width="40" height="40" onclick="window.open('https://twitter.com/intent/tweet?hashtags=<?php echo $hashtag ?>&url=http://gestaourbana.prefeitura.sp.gov.br<?php echo parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH) ?>?hd=' + <?php echo $onclick ?>)" />
                                </div>
                                <div class="minhocaoDetalhesIconesInternoApoiar" >
                                    <div style="display: none">
                                        <input class="minhocaoIdPropostaApoiadaDetalhes" type="text" value="" />
                                    </div>
                                <?php
                                    if ( $atts['tipo'] == "urlAutomatico" )
                                    {
                    ?>
                        <a href="#" id="LinkApoioMinhocaoDetalhes" class="<?php echo $popmakeApoioProposta ?>" onclick=" setTimeout( function() { jQuery( '#plataformaApoioIdPropostaApoiada' ).val('<?php echo $row->submit_time ?>'); }, 3500 ); " >
                    <?php
                                    }
                                    else
                                    {
                    ?>
                        <a href="#" id="LinkApoioMinhocaoDetalhes" class="<?php echo $popmakeApoioProposta ?>" onclick=" setTimeout( function() { jQuery( '#plataformaApoioIdPropostaApoiada' ).val(jQuery( '.minhocaoIdPropostaApoiadaDetalhes' ).val()); }, 3500 ); " >
                    <?php
                                    }
                                ?>
                          <img alt='' src="/wp-content/themes/gestaourbana-1.2/images/like-interna-300px-apoiar.png" width="300" height="46" />
                        </a>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
<?php
    return ob_get_clean();
}


// shortcode da pagina de detalhes da Plataforma de Participacao de Proposta e Apoio
// shortcode = [shortCode_PlataformaParticipacaoDetalhes tipo="quandoClica ou urlAutomatico" projeto=""]
add_shortcode('shortCode_PlataformaParticipacaoDetalhesExemplo', 'shortcode_plataforma_participacao_detalhes_exemplo');
function shortcode_plataforma_participacao_detalhes_exemplo( $atts )
{
    if ( $atts['tipo'] == "urlAutomatico" )
    {
        if( isset($_GET['hd']) || $_POST["hd"] )
        {
            $id = '';
            if( isset($_GET['hd']) )
            {
                $id = (string)$_GET['hd'];
            }
            else if ($_POST["hd"])
            {
                $id = (string)$_POST['hd'];
            }
            
            if ( $atts['projeto'] == "minhocao" )
            {
                $query = "
                        SELECT
                            DATE_FORMAT(FROM_UNIXTIME(submit_time), '%b %e, %Y  %l:%i %p') AS Submitted
                            , submit_time
                            , MAX(IF(field_name='minhocaoTituloProposta', field_value, NULL )) AS 'TituloProposta'
                            , MAX(IF(field_name='minhocaoDescricaoProposta', field_value, NULL )) AS 'DescricaoProposta'
                            , MAX(IF(field_name='minhocaoDiretriz1', field_value, NULL )) AS 'Diretriz1'
                            , MAX(IF(field_name='minhocaoDiretriz2', field_value, NULL )) AS 'Diretriz2'
                            , MAX(IF(field_name='minhocaoDiretriz3', field_value, NULL )) AS 'Diretriz3'
                            , MAX(IF(field_name='minhocaoDiretriz4', field_value, NULL )) AS 'Diretriz4'
                            , MAX(IF(field_name='minhocaoDiretriz5', field_value, NULL )) AS 'Diretriz5'
                            , MAX(IF(field_name='minhocaoDiretriz6', field_value, NULL )) AS 'Diretriz6'
                            , MAX(IF(field_name='minhocaoDiretriz7', field_value, NULL )) AS 'Diretriz7'
                            , MAX(IF(field_name='minhocaoDiretriz8', field_value, NULL )) AS 'Diretriz8'
                            , MAX(IF(field_name='minhocaoDiretriz9', field_value, NULL )) AS 'Diretriz9'
                            , MAX(IF(field_name='minhocaoDiretriz10', field_value, NULL )) AS 'Diretriz10'
                            , MAX(IF(field_name='plataformaApoioNumeroApoios', field_value, NULL )) AS 'plataformaApoioNumeroApoios'
                            , MAX(IF(field_name='minhocaoImagemProposta', field_value, NULL )) AS 'ImagemProposta'
                            , MAX(IF(field_name='plataformaApoioModeracaoProposta', field_value, NULL )) AS 'plataformaApoioModeracaoProposta'
                            , MAX(IF(field_name='plataformaApoioConfirmadoEmail', field_value, NULL )) AS 'plataformaApoioConfirmadoEmail'
                        FROM wp_cf7dbplugin_submits
                        WHERE form_name = 'Minhocao Envio de Propostas'
                          and submit_time = " . $id . "
                        GROUP BY submit_time
                        HAVING plataformaApoioConfirmadoEmail = 'S' and plataformaApoioModeracaoProposta = 1
                        ";
            }
            else if ( $atts['projeto'] == "wifi" )
            {
                $query = "
                        SELECT
                            DATE_FORMAT(FROM_UNIXTIME(submit_time), '%b %e, %Y  %l:%i %p') AS Submitted
                            , submit_time
                            , MAX(IF(field_name='wifiTituloProposta', field_value, NULL )) AS 'TituloProposta'
                            , MAX(IF(field_name='wifiEnderecoProposta', field_value, NULL )) AS 'EnderecoProposta'
                            , MAX(IF(field_name='wifiBairroProposta', field_value, NULL )) AS 'BairroProposta'
                            , MAX(IF(field_name='wifiCepProposta', field_value, NULL )) AS 'CepProposta'
                            , MAX(IF(field_name='wifiDescricaoProposta', field_value, NULL )) AS 'DescricaoProposta'
                            , MAX(IF(field_name='wifiJustificativaProposta', field_value, NULL )) AS 'JustificativaProposta'
                            , MAX(IF(field_name='plataformaApoioNumeroApoios', field_value, NULL )) AS 'plataformaApoioNumeroApoios'
                            , MAX(IF(field_name='wifiImagemProposta', field_value, NULL )) AS 'ImagemProposta'
                            , MAX(IF(field_name='plataformaApoioModeracaoProposta', field_value, NULL )) AS 'plataformaApoioModeracaoProposta'
                            , MAX(IF(field_name='plataformaApoioConfirmadoEmail', field_value, NULL )) AS 'plataformaApoioConfirmadoEmail'
                        FROM wp_cf7dbplugin_submits
                        WHERE form_name = 'Wifi - Envio de Propostas'
                          and submit_time = " . $id . "
                        GROUP BY submit_time
                        HAVING plataformaApoioConfirmadoEmail = 'S' and plataformaApoioModeracaoProposta = 1
                        ";
            }

            global $wpdb;
            
            //echo $query;

            $row = $wpdb->get_row( $query );

        }
    }
    
    $hashtag = "";
    $popmakeApoioProposta = "";
    if ( $atts['projeto'] == "minhocao" )
    {
        $hashtag = "smdu,minhocao,participe";
        $popmakeApoioProposta = "popmake-16629 popmake-minhocao-apoio-proposta";
    }
    else if ( $atts['projeto'] == "wifi" )
    {
        $hashtag = "smdu,sesprefsp,WiFiLivre,participe";
        $popmakeApoioProposta = "popmake-18585 popmake-wifi-apoio-proposta";
    }
    
    ob_start();
?>
    <?php
        ?>
        <br>
        <div class="result ">
            <?php

            ?>
            <div class="resultMinhocaoDetalhes">
                <div class="resultinternoMinhocaoDetalhes">
                    <div class="minhocaoDetalhes" >
                        <div class="minhocaoDetalhesImagem">
                            <div id="minhocaoDetalhesImagemInterno" class="minhocaoDetalhesImagemInterno" style="
                                background: url(.<?php if ( $atts['tipo'] == "urlAutomatico" ) { echo $row->ImagemProposta; } ?>) no-repeat;
                                background-color: #E6E6E6;
                                background-size: cover;
                                background-position: center center;
                                background-clip: content-box;
                            ">
                            </div>
                        </div>
                        <div class="minhocaoDetalhesDescritivo">
                            <div class="minhocaoDetalhesDescritivoApoiadas">
                                <span class="minhocaoDetalhesDescritivoApoiadasInterno" >
                                    <?php if ( $atts['tipo'] == "urlAutomatico" ) { echo $row->plataformaApoioNumeroApoios; } ?> apoiadas
                                </span>
                            </div>
                            <div class="minhocaoDetalhesDescritivoTitulo">
                                <?php
                                    if ( $atts['tipo'] == "urlAutomatico" )
                                    {
                                        if ( $atts['projeto'] == "minhocao" )
                                        {
                                            echo $row->TituloProposta;
                                        }
                                        else if ( $atts['projeto'] == "wifi" )
                                        {
                                            echo mb_strtoupper($row->TituloProposta);
                                        }
                                    }
                                ?>
                            </div>
                            <div class="minhocaoDetalhesLinha">
                                
                            </div>
                            <div class="minhocaoDetalhesDescritivoDescricao">
                                <?php if ( $atts['tipo'] == "urlAutomatico" && $atts['projeto'] == "wifi" ) { echo $row->EnderecoProposta . " - " . $row->BairroProposta . " - CEP " . $row->CepProposta . "<br/><br/>" ; } ?>
                                <?php if ( $atts['tipo'] == "urlAutomatico" ) { echo $row->DescricaoProposta; } ?>
                            </div>
                        </div>
                        <div class="minhocaoDetalhesDiretrizes">
                            <?php
                                if ( $atts['projeto'] == "minhocao" )
                                {
                            ?>
                                <div class="minhocaoDetalhesDiretrizesTitulo">
                                    Diretrizes
                                </div>
                                <div class="minhocaoDetalhesLinha">
                                </div>
                                <div class="minhocaoDetalhesDiretrizes1" >
                                    <div class="diretriz1">
                                        1) <?php if ( $atts['tipo'] == "urlAutomatico" ) { echo $row->Diretriz1; } ?>
                                    </div>
                                    <div class="diretriz2">
                                        2) <?php if ( $atts['tipo'] == "urlAutomatico" ) { echo $row->Diretriz2; } ?>
                                    </div>
                                    <div class="diretriz3">
                                        3) <?php if ( $atts['tipo'] == "urlAutomatico" ) { echo $row->Diretriz3; } ?>
                                    </div>
                                    <div class="diretriz4">
                                        4) <?php if ( $atts['tipo'] == "urlAutomatico" ) { echo $row->Diretriz4; } ?>
                                    </div>
                                    <div class="diretriz5">
                                        5) <?php if ( $atts['tipo'] == "urlAutomatico" ) { echo $row->Diretriz5; } ?>
                                    </div>
                                </div>
                                <div class="minhocaoDetalhesDiretrizes2" >
                                    <div class="diretriz6">
                                        6) <?php if ( $atts['tipo'] == "urlAutomatico" ) { echo $row->Diretriz6; } ?>
                                    </div>
                                    <div class="diretriz7">
                                        7) <?php if ( $atts['tipo'] == "urlAutomatico" ) { echo $row->Diretriz7; } ?>
                                    </div>
                                    <div class="diretriz8">
                                        8) <?php if ( $atts['tipo'] == "urlAutomatico" ) { echo $row->Diretriz8; } ?>
                                    </div>
                                    <div class="diretriz9">
                                        9) <?php if ( $atts['tipo'] == "urlAutomatico" ) { echo $row->Diretriz9; } ?>
                                    </div>
                                    <div class="diretriz10">
                                        10) <?php if ( $atts['tipo'] == "urlAutomatico" ) { echo $row->Diretriz10; } ?>
                                    </div>
                                </div>
                            <?php
                                }
                            ?>
                            <?php
                                if ( $atts['projeto'] == "wifi" )
                                {
                            ?>
                                <div class="minhocaoDetalhesDiretrizesTitulo">
                                    Descrição do local
                                </div>
                                <div class="minhocaoDetalhesDiretrizes" >
                                    <div class="justificativa">
                                        <?php if ( $atts['tipo'] == "urlAutomatico" ) { echo $row->JustificativaProposta; } ?>
                                    </div>
                                </div>
                                <div class="minhocaoDetalhesLinha">
                                </div>
                            <?php
                                }
                            ?>
                        </div>
                        <div class="minhocaoDetalhesIcones">
                            <div class="minhocaoDetalhesIconesInterno" >
                                <div class="minhocaoDetalhesIconesInternoCompartilhar" >
                                   <!-- <a href="#">
                                        <img alt='' src="/wp-content/themes/gestaourbana-1.2/images/share-interna-300px.png" width="300" height="46" />
                                    </a> -->
                                        <img alt='' src="/wp-content/themes/gestaourbana-1.2/images/facebook_cinza.png" width="40" height="40" style="padding-right: 12px; cursor: initial;" />
                                        <img alt='' src="/wp-content/themes/gestaourbana-1.2/images/google-cinza.png" width="40" height="40" style="padding-right: 12px; cursor: initial;" />
                                        <img alt='' src="/wp-content/themes/gestaourbana-1.2/images/twitter-cinza.png" width="40" height="40" style="cursor: initial;" />
                                </div>
                                <div class="minhocaoDetalhesIconesInternoApoiar" >
                                    <div style="display: none">
                                        <input class="minhocaoIdPropostaApoiadaDetalhes" type="text" value="" />
                                    </div>
                                        <img alt='' src="/wp-content/themes/gestaourbana-1.2/images/like-interna-300px-apoiar.png" width="300" height="46" />
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
<?php
    return ob_get_clean();
}


add_filter('pum_popup_is_loadable', 'mycustom_popup_is_loadable', 10, 2 );
function mycustom_popup_is_loadable( $is_loadable, $popup_id)
{
    // minhocao - producao - proposta detalhe
    if( $popup_id == 16632 )
    {
        if(isset($_GET['hd']))
        {

        }
        else
        {
            return false;
        }
    }
    
    // wifi - producao - proposta detalhe
    if( $popup_id == 18617 )
    {
        if(isset($_GET['hd']))
        {

        }
        else
        {
            return false;
        }
    }
    
    // minhocao - producao - validar apoio
    if( $popup_id == 16625 )
    {
        if(isset($_GET['v1']) && isset($_GET['token']))
        {
            $idProposta = $_GET['v1'];
            $token = $_GET['token'];
            
            //$result = confirma_email_e_ou_computa_apoio(($token, $idProposta);
            $se_enviou_ou_apoiou = verifica_se_confirmou_email($token, 'minhocao');
            
            if($se_enviou_ou_apoiou || !verifica_se_proposta_existe($idProposta, 'minhocao', $token))
            {
                return false;
            }
            else
            {
                $confirmado_email = confirma_email_e_ou_computa_apoio($token, $idProposta, 'minhocao');
                
                if($confirmado_email)
                {
                    return true;
                }
                else
                {
                    return false;
                }
            }
        }
        else
        {
            return false;
        }
    }
    
    // wifi - producao - popup que mostra msg obrigada por participar - confirmar email e confirmar proposta ou apoio
    if( $popup_id == 18693 )
    {
        if(isset($_GET['v1']) && isset($_GET['token']))
        {
            $idProposta = $_GET['v1'];
            $token = $_GET['token'];
            
            //$result = confirma_email_e_ou_computa_apoio(($token, $idProposta);
            $se_enviou_ou_apoiou = verifica_se_confirmou_email($token, 'wifi');

            $proposta_existe = verifica_se_proposta_existe($idProposta, 'wifi', $token);

            if($se_enviou_ou_apoiou || !$proposta_existe)
            {
                return false;
            }
            else
            {
                $confirmado_email = confirma_email_e_ou_computa_apoio($token, $idProposta, 'wifi');

                if($confirmado_email)
                {
                    return true;
                }
                else
                {
                    return false;
                }
            }
        }
        else
        {
            return false;
        }
    }
    
    // minhocao - producao - email validado
    if( $popup_id == 17390 )
    {
        if((isset($_GET['v1']) && isset($_GET['token'])))
        {
            $idProposta = $_GET['v1'];
            $token = $_GET['token'];

            $proposta_existe = verifica_se_proposta_existe($idProposta, 'minhocao', $token);

            if(!$proposta_existe)
            {
                return false;
            }
            
            //$result = confirma_email_e_ou_computa_apoio(($token, $idProposta);
            $se_enviou_ou_apoiou = verifica_se_confirmou_email($token, 'minhocao');
            
            if($se_enviou_ou_apoiou)
            {
                return true;
            }
            else
            {
                return false;
            }
        }
        else
        {
            return false;
        }
    }
    
    // wifi - producao - popup que mostra msg que ja enviou ou apoiou - apoio invalidar 
    if( $popup_id == 18703 )
    {
        if((isset($_GET['v1']) && isset($_GET['token'])))
        {
            $idProposta = $_GET['v1'];
            $token = $_GET['token'];

            $proposta_existe = verifica_se_proposta_existe($idProposta, 'wifi', $token);

            if(!$proposta_existe)
            {
                return false;
            }
            
            //$result = confirma_email_e_ou_computa_apoio(($token, $idProposta);
            $se_enviou_ou_apoiou = verifica_se_confirmou_email($token, 'wifi');
            
            if($se_enviou_ou_apoiou)
            {
                return true;
            }
            else
            {
                return false;
            }
        }
        else
        {
            return false;
        }
    }
    
    
    return $is_loadable;
}


function plataforma_participacao_busca_submittime($token, $projeto)
{
    global $wpdb;
    
    $form_name = '';
    
    if ( $projeto == "minhocao" )
    {
        $form_name = "'Minhocao Apoio Proposta','Minhocao Envio de Propostas'";
    }
    else if ( $projeto == "wifi" )
    {
        $form_name = "'Wifi - Apoio Proposta','Wifi - Envio de Propostas'";
    }
    
    $query = "
        SELECT submit_time
        FROM wp_cf7dbplugin_submits
        WHERE form_name IN(" . $form_name . ")
         AND field_value = '" . $token . "'
             ";
    
    $row = $wpdb->get_row( $query );
    
    if ($row)
    {
        return $row->submit_time;
    }
    else
    {
        return '0';
    }
}


function verifica_se_proposta_existe($idProposta, $projeto, $token)
{
    global $wpdb;
    
    $form_name = '';
    
    if ( $projeto == "minhocao" )
    {
        $form_name = "'Minhocao Apoio Proposta','Minhocao Envio de Propostas'";
    }
    else if ( $projeto == "wifi" )
    {
        $form_name = "'Wifi - Apoio Proposta','Wifi - Envio de Propostas'";
    }
    
    if ( $idProposta == "1182526026" ) // enviou
    {
        $query = "
            SELECT submit_time
            FROM wp_cf7dbplugin_submits
            WHERE form_name IN(" . $form_name . ")
             AND field_value = '" . $token . "'
                 ";
    }
    else // apoiou
    {
        $query = "
            SELECT submit_time
            FROM wp_cf7dbplugin_submits
            WHERE form_name IN(" . $form_name . ")
             AND submit_time = '" . $idProposta . "'
                 ";
    }
    
    $propostaExiste = $wpdb->get_results( $query );
    
    if($propostaExiste)
    {
        return true;
    }
    else
    {
        return false;
    }
    
}


function verifica_se_confirmou_email($token, $projeto)
{
    global $wpdb;
    
    $form_name = '';
    $field_email = '';
    
    if ( $projeto == "minhocao" )
    {
        $form_name = "'Minhocao Apoio Proposta','Minhocao Envio de Propostas'";
        $field_email = "minhocaoEmail";
    }
    else if ( $projeto == "wifi" )
    {
        $form_name = "'Wifi - Apoio Proposta','Wifi - Envio de Propostas'";
        $field_email = "wifiEmail";
    }
    
    $query = "
        SELECT submit_time
        FROM wp_cf7dbplugin_submits
        WHERE form_name IN(" . $form_name . ")
         AND field_value = '" . $token . "'
             ";
    
    $submit_time = $wpdb->get_var( $query );
    
    if(!$submit_time)
    {
        return false;
    }
    
    $email = $wpdb->get_var("
        SELECT a.field_value FROM (
                                    SELECT *
                                    FROM wp_cf7dbplugin_submits
                                    WHERE form_name IN(" . $form_name . ")
                                     AND field_name = '" . $field_email . "'
                                   ) AS a
                                   JOIN (
                                          SELECT *
                                          FROM wp_cf7dbplugin_submits
                                          WHERE form_name IN(" . $form_name . ") 
                                            AND field_name = 'plataformaApoioToken'
                                            AND field_value = '" . $token . "'
                                        ) AS b
        ON a.submit_time = b.submit_time
                            ");
    
    $confirmouEmail = $wpdb->get_results("
        SELECT b.field_value FROM (
                                    SELECT *
                                    FROM wp_cf7dbplugin_submits
                                    WHERE form_name IN (" . $form_name . ") 
                                     AND field_name = '" . $field_email . "'
                                     AND field_value = '" . $email . "'
                                  ) AS a
                                  JOIN (
                                         SELECT *
                                         FROM wp_cf7dbplugin_submits
                                         WHERE form_name IN (" . $form_name . ")
                                           AND field_name = 'plataformaApoioConfirmadoEmail'
                                           AND field_value = 'S'
                                       ) AS b
        ON a.submit_time = b.submit_time
                                        ");
    
    if($confirmouEmail)
    {
       return true;    
    }
    else
    {
        return false;
    }
}

function confirma_email_e_ou_computa_apoio($token, $idProposta, $projeto)
{
    global $wpdb;
    
    $form_name = '';
    if ( $projeto == "minhocao" )
    {
        $form_name = "'Minhocao Apoio Proposta','Minhocao Envio de Propostas'";
    }
    else if ( $projeto == "wifi" )
    {
        $form_name = "'Wifi - Apoio Proposta','Wifi - Envio de Propostas'";
    }
    
    $query = "
        SELECT submit_time, form_name
        FROM wp_cf7dbplugin_submits
        WHERE form_name IN(" . $form_name . ")
         AND field_value = '" . $token . "'
             ";
    
    $row = $wpdb->get_row( $query );
    
    $submit_time = $row->submit_time;
    $form = $row->form_name;
    
    $queryUpdateConfirmadoEmail = "
        UPDATE wp_cf7dbplugin_submits
        SET field_value = 'S'
        WHERE submit_time = '" . $submit_time . "'
          AND field_name = 'plataformaApoioConfirmadoEmail'
              ";
    
    $updateConfirmadoEmail = $wpdb->query($queryUpdateConfirmadoEmail);
    
    if ($updateConfirmadoEmail)
    {
        if( $form === 'Minhocao Apoio Proposta' || $form === 'Wifi - Apoio Proposta' )
        {
            //computar apoio na proposta WHERE SUBMIT_TIME = $idProposta   
            $querySomaNumeroApoios = "
                UPDATE wp_cf7dbplugin_submits
                SET field_value = field_value + 1
                WHERE submit_time = '" . $idProposta . "'
                  AND field_name = 'plataformaApoioNumeroApoios'
                  ";

            $somou = $wpdb->query($querySomaNumeroApoios);

            if($somou)
            {
                return true;
            }
            else
            {
                return false;
            }
        }
        else if( $form === 'Minhocao Envio de Propostas' || $form === 'Wifi - Envio de Propostas' )
        {
            return true;
        }
    }
    else
    {
        return false;
    }
}


// Função que retorna o HTML pelo Shortcode
// subir as imagens e o css e modificar os hrefs
// shortcode = [shortCode_MiniMapa]
add_shortcode('shortCode_MiniMapa', 'shortcode_minimapa');
function shortcode_minimapa()
{
    ob_start();
?>
    <div class="containerMiniMapa" style="height:760px">
        <div id="cartografia-em-posts">
            <label for="ck0-calcadao">Base</label>
            <input type="checkbox" id="ck0-calcadao" checked>
            
            <label for="ck1-calcadao">Transportes</label>
            <input type="checkbox" id="ck1-calcadao">
            
            <label for="ck2-calcadao">Pedestres</label>
            <input type="checkbox" id="ck2-calcadao" checked>
            
            <label for="ck3-calcadao">Usos</label>
            <input type="checkbox" id="ck3-calcadao">
            
            <label for="ck4-calcadao">Ilumina&ccedil;&atilde;o</label>
            <input type="checkbox" id="ck4-calcadao">
            
            <label for="ck5-calcadao" >Lixo</label>
            <input type="checkbox" id="ck5-calcadao">
            
            <label for="ck6-calcadao">Aspectos negativos</label>
            <input type="checkbox" id="ck6-calcadao">
            
            <div id="dImagensMapa1" class="camadasMiniMapa">
                <img class="img-mapa-calcadao" id="c6-img-calcadao" width="960" height="720" style="max-width: none;" src="http://gestaourbana.prefeitura.sp.gov.br/wp-content/uploads/2015/05/6_diagnostico.png"/>
                <img class="img-mapa-calcadao" id="c5-img-calcadao" width="960" height="720" style="max-width: none;" src="http://gestaourbana.prefeitura.sp.gov.br/wp-content/uploads/2015/05/5_diagnostico.png">
                <img class="img-mapa-calcadao" id="c4-img-calcadao" width="960" height="720" style="max-width: none;" src="http://gestaourbana.prefeitura.sp.gov.br/wp-content/uploads/2015/05/4_diagnostico.png">
                <img class="img-mapa-calcadao" id="c3-img-calcadao" width="960" height="720" style="max-width: none;" src="http://gestaourbana.prefeitura.sp.gov.br/wp-content/uploads/2015/05/3_diagnostico.png">
                <img class="img-mapa-calcadao" id="c2-img-calcadao" width="960" height="720" style="max-width: none;" src="http://gestaourbana.prefeitura.sp.gov.br/wp-content/uploads/2015/05/2_diagnostico.png">
                <img class="img-mapa-calcadao" id="c1-img-calcadao" width="960" height="720" style="max-width: none;" src="http://gestaourbana.prefeitura.sp.gov.br/wp-content/uploads/2015/05/1_diagnostico.png">
                <img class="img-mapa-calcadao" id="c0-img-calcadao" width="960" height="720" style="max-width: none;" src="http://gestaourbana.prefeitura.sp.gov.br/wp-content/uploads/2015/05/0_diagnostico.jpg">
            </div>
       </div>
      </div>
<?php
    return ob_get_clean();
}


// Função que retorna o HTML pelo Shortcode
// subir as imagens e o css e modificar os hrefs
// shortcode = [shortCode_MiniMapa2]
add_shortcode('shortCode_MiniMapa2', 'shortcode_minimapa2');
function shortcode_minimapa2()
{
    ob_start();
?>
    <div class="container-mapa1" style="height:800px">
        <div id="cartografia-em-posts">
            <label for="ck0-calcadao" >Base</label>
            <input type="checkbox" id="ck0-calcadao" checked>
            
            <label for="ck1-calcadao" >TP m&eacute;dia capacidade</label>
            <input type="checkbox" id="ck1-calcadao">
            
            <label for="ck2-calcadao" >Eixos rodovi&aacute;rios</label>
            <input type="checkbox" id="ck2-calcadao" >
            
            <label for="ck3-calcadao" >Ciclovias e Ciclofaixas</label>
            <input type="checkbox" id="ck3-calcadao" >
            
            <label for="ck5-calcadao" >Metr&ocirc; e CPTM</label>
            <input type="checkbox" id="ck5-calcadao" checked>

            <div id="dImagensMapa1" class="camadasMiniMapa">
                <img class="img-mapa-calcadao" id="c5-img-calcadao" width="960" height="762" src="http://gestaourbana.prefeitura.sp.gov.br/wp-content/uploads/2015/05/5.png">
                <img class="img-mapa-calcadao" id="c3-img-calcadao" width="960" height="762" src="http://gestaourbana.prefeitura.sp.gov.br/wp-content/uploads/2015/05/3.png">
                <img class="img-mapa-calcadao" id="c2-img-calcadao" width="960" height="762" src="http://gestaourbana.prefeitura.sp.gov.br/wp-content/uploads/2015/05/2.png">
                <img class="img-mapa-calcadao" id="c1-img-calcadao" width="960" height="762" src="http://gestaourbana.prefeitura.sp.gov.br/wp-content/uploads/2015/05/1.png">
                <img class="img-mapa-calcadao" id="c0-img-calcadao" width="960" height="762" src="http://gestaourbana.prefeitura.sp.gov.br/wp-content/uploads/2015/05/0.jpg">
            </div>
        </div>
    </div>   
        
<?php
    return ob_get_clean();
}

function data2banco ($d2b) { 
        if(!empty($d2b)){
                $d2b_ano=substr($d2b,6,4);
                $d2b_mes=substr($d2b,3,2);
                $d2b_dia=substr($d2b,0,2);    
                $d2b="$d2b_ano-$d2b_mes-$d2b_dia";
        }
        return $d2b; 
}

function comparaDatas ($h4date){
        $entrada = data2banco("$h4date");   //pega a data no formato dd/mm/yyyy
        $hoje = date("Y-m-d");        //determina a data atual
        if($entrada <= $hoje){        // compara ambas
                echo " dataPassada";      // se for a data atual ou jรก tiver passado, imprime
        }else{
            echo "";
        }
}
/** Shortcodes de agenda:
 * Estrutura
 * [agendaContainer nome="nomeDaAgenda"]
 *  [encontroContainer data="dd/mm/YYYY" id="" linkURL=""]
 *    [encontroInfo titulo="" info=""]
 *    [encontroInfo titulo="" info=""]
 *  [/encontroContainer]
 * [/agendaContainer]
 * 
 */
add_shortcode('agendaContainer','agendaContainer');
function agendaContainer( $atts, $content){
  ob_start(); ?>
  <div class="agendacontainer" name="<?php echo $atts['nome'];?>" id="<?php echo $atts['nome'];?>">
    <div id="headerhorarios">
      <h3>Credenciamento: 8h</h3>
      <h3>Início das atividades: 9h</h3>
      <h3>Encerramento: 13h</h3>
    </div>
    <?php echo do_shortcode($content);?>
  </div>
  <?php
  return ob_get_clean();
}

add_shortcode('encontroContainer','encontroContainer');
function encontroContainer( $atts, $content){
  ob_start(); ?>
        <a href="<?php echo $atts['url']; ?>" target="_blank">
            <div class="encontrocontainer">
                    <div class="dataEncontro<?php comparaDatas((string)$atts['data']); ?>" id="<?php echo $atts['id'];?>">
                            <h4><?php echo $atts['data'];?></h4>
                    </div>
                    <div class="encontroinfo">
                            <?php echo do_shortcode($content);?>
                    </div>
            </div>
        </a>
  <?php
  return ob_get_clean();
}

add_shortcode('encontroInfo','encontroInfo');
function encontroInfo( $atts ){
  ob_start(); ?>
    
      <h5><?php echo $atts['titulo'];?></h5>
      <p><?php echo $atts['info'];?></p>
  <?php
  return ob_get_clean();
}
add_action( 'wp_ajax_deletarPropostaConferencia', 'deletarPropostaConferencia' );
//add_action('wp_ajax_nopriv_deletarPropostaConferencia', 'zoneamento_imagensAprovadas');
function deletarPropostaConferencia(){
    global $wpdb;
    if(isset($_POST['id'])) {
        $id = $_POST['id'];
    }else{
        die();
    }
    $query = "DELETE FROM wp_cf7dbplugin_submits WHERE form_name = 'Propostas Conferencias' AND submit_time = %s";
    $statement = $wpdb->prepare($query,$id);
    $wpdb->query($statement);
    die();
}

add_shortcode('showAllPropostasConferencias','showAllPropostasConferencias');
function showAllPropostasConferencias( $atts ){
    global $wpdb;
    $mesa = isset($atts['mesa'])? " WHERE A.mesa = '".(string)$atts['mesa']."'" : "";
    $query = "SELECT A.* FROM (SELECT
                DATE_FORMAT(FROM_UNIXTIME(submit_time), %s) AS Submitted
                , submit_time
                , MAX(IF(field_name='mesa', field_value, NULL )) AS 'mesa'
                , MAX(IF(field_name='nome', field_value, NULL )) AS 'nome'
                , MAX(IF(field_name='trecho_do_texto', field_value, NULL )) AS 'trecho_do_texto'
                , MAX(IF(field_name='tipo_emenda', field_value, NULL )) AS 'tipo_emenda'
                , MAX(IF(field_name='colaboracao', field_value, NULL )) AS 'colaboracao'
            FROM wp_cf7dbplugin_submits WHERE form_name = 'Propostas Conferencias' GROUP BY submit_time
            ORDER BY Submitted DESC) as A".$mesa;
    $statement = $wpdb->prepare($query,'%b %e, %Y  %l:%i %p');
    $results = $wpdb->get_results($statement);
    ob_start();   
    ?> 
    <div id="containerPropostasConferencia">
    <?php
    foreach($results as $row){
    ?>
        <script>
        function delProposta(x){
      jQuery.ajax({
        type: 'POST',
        url: '<?php echo admin_url( 'admin-ajax.php' ) ?>',
        data: { action: 'deletarPropostaConferencia', id: x },
        success: function(html_ceu){
          alert("Proposta deletada com Sucesso!");
                                        setTimeout(jQuery('#containerPropostasConferencia').load(document.URL +  ' #containerPropostasConferencia'),1500);
        }
      });
        }
        </script>
        <div style="width: 100%;">
            <div style="float: left;width: 33%;">
                <p><span style="font-weight: bold;">Nome do colaborador</span><br/>
                <?php echo $row->nome; ?></p>
            </div>
            <div style="float: left;width: 33%;">
                <p><span style="font-weight: bold;">Mesa</span><br/>
                <?php echo $row->mesa; ?></p>
            </div>
            <div style="float: left;width: 33%;">
                <p><span style="font-weight: bold;">Enviada em</span><br/>
                <?php echo $row->Submitted; ?></p>
            </div>
            <div style="float: left;width: 100%;">
                <p><span style="font-weight: bold;">Tipo de Emenda</span><br/>
                <?php echo $row->tipo_emenda; ?></p>
            </div>
            <div style="float: left;width: 100%;">
                <p><span style="font-weight: bold;">Trecho do texto</span><br/>
                <?php echo $row->trecho_do_texto; ?></p>
            </div>
            <div style="float: left;width: 100%;">
                <p><span style="font-weight: bold;">Colaboração</span><br/>
                <?php echo $row->colaboracao; ?></p>
            </div>
            <div style="float: left;width: 100%; text-align: center;">
                <?php if(current_user_can( 'conferencias')){?>
                    <div style="display: inline-block;
                        alignment-adjust: central;
                        background-color: #E00815;
                        color: #FFF;
                        cursor: pointer;
                        padding: 10px 20px;
                        margin-bottom: 20px;
                        text-decoration: none;
                        box-sizing: border-box;
                        font-size: 12px;
                        font-weight: bold;
                        border: 20px;"
                 onclick="delProposta('<?php echo $row->submit_time; ?>');">Deletar</div>
                <?php } ?>
            </div>
            <br><br><hr style="width: 100%; height:2px;"><br>
        </div>
        
    <?php
    }?></div>
    <?php
    return ob_get_clean();                  
}

