<?php
  $args = array(
    "posts_per_page" => -1,
    "post_type" => "degrees",
    "tax_query" => array(
      array(
        "taxonomy" => "degree_vertical",
        "field"    => "slug",
        "terms"    => $term->slug,
      )
  ),
  'degree_level' => 'med-master-education-programs',
  'orderby' => 'title',
  'order'   => 'ASC',
);
  $Degrees = get_posts($args);
  $Count = count($Degrees);
  $Classes = '';

  switch ($Degrees) {
      case ($Count == 1):
          $Classes = 'single';
          break;
      case ($Count == 2):
          $Classes = 'double';
          break;
      case ($Count >= 3):
          $Classes = 'owl-carousel med';
          break;
      default:
          echo "";
  }
?>
<?php require('card.php'); ?>
