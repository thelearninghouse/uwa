<?php

function get_taxonomy_hierarchy( $taxonomy, $parent = 0 ) {
	// only 1 taxonomy
	$taxonomy = is_array( $taxonomy ) ? array_shift( $taxonomy ) : $taxonomy;
	// get all direct decendants of the $parent
	$terms = get_terms( $taxonomy, array( 'parent' => $parent ) );
	// prepare a new array.  these are the children of $parent
	// we'll ultimately copy all the $terms into this new array, but only after they
	// find their own children
	$children = array();
	// go through all the direct decendants of $parent, and gather their children
	foreach ( $terms as $term ){
		// recurse to get the direct decendants of "this" term
		$term->children = get_taxonomy_hierarchy( $taxonomy, $term->term_id );
		// add the term to our new array
		$children[ $term->term_id ] = $term;
	}
	// send the results back to the caller
	return $children;
}

function get_taxonomy_hierarchy_multiple( $taxonomies, $parent = 0 ) {
	if ( ! is_array( $taxonomies )  ) {
		$taxonomies = array( $taxonomies );
	}
	$results = array();
	foreach( $taxonomies as $taxonomy ){
		$terms = get_taxonomy_hierarchy( $taxonomy, $parent );
		if ( $terms ) {
			$results[ $taxonomy ] = $terms;
		}
	}
	return $results;
}

function setFilterOrder($term1, $term2) {
    if ($term1->display_order == $term2->display_order) {
        return 0;
    } elseif ($term1->display_order < $term2->display_order) {
        return -1;
    } else {
        return 1;
    }
}

function buildDegressArray($degrees) {
  foreach ( $degrees as $post ) {
    $array = array();
    $degreeAreas = get_the_terms( $post->ID, 'degree_vertical') ? get_the_terms( $post->ID, 'degree_vertical') : $array;
    $degreeLevels = get_the_terms( $post->ID, 'degree_level') ? get_the_terms( $post->ID, 'degree_level') : $array;

    $post->degree_areas = $degreeAreas;
    $post->degree_levels = $degreeLevels;
  }
  return $degrees;
}

function buildDegreeLevels($degreeLevels) {
  foreach ( $degreeLevels as $term ) {
    $array = array();
    $term_id = $term->term_id;
    $id = 'term_' . $term_id;
    $displayOrder = get_field('menu_order', $id) ?  get_field('menu_order', $id) : '0';
    $term->display_order = $displayOrder;
  }
  return $degreeLevels;
}

add_action( 'wp_enqueue_scripts', 'add_localized_js_data' );
function add_localized_js_data() {
  // wp_enqueue_script( 'degree-filtering',  get_stylesheet_directory_uri() . '/library/js/build/production.min.js', array() );


  $allDegreesArgs = array(
		 'posts_per_page' => -1,
		 'orderby' => 'title',
		 'order'   => 'ASC',
		 'post_type' => 'degrees',
		 'post_status' => 'publish',
	);

	$allDegrees = get_posts( $allDegreesArgs );
  $degree_areas = get_field('degree_area_filters', 'option') ? get_field('degree_area_filters', 'option') : array();
  // $degree_areas_new = get_field('degree_area_filters', 'option') ? get_field('degree_area_filters', 'option') : array();
  $degree_levels = get_field('degree_level_filters', 'option') ? get_field('degree_level_filters', 'option') : array();
// print($degree_levels);
  $data = array(
    'degrees' => buildDegressArray($allDegrees),
    'degreeAreas' => $degree_areas,
    'degreeAreasNew' => get_taxonomy_hierarchy($degree_areas),
    'degreeLevels' => buildDegreeLevels($degree_levels)
    );

  wp_localize_script( 'bones-js', 'wpData', $data );

}


// Backup
//
// $degreeAreas = get_terms([
//     'taxonomy' => 'degree_vertical',
//     'hide_empty' => false,
//
// ]);
//
// $degreeLevels = get_terms([
//     'taxonomy'     => 'degree_level',
//     'hide_empty'   => false,
//     'meta_key'		 => 'menu_order',
//     'orderby'			 => 'meta_value',
//     'order'				 => 'ASC'
// ]);

?>
