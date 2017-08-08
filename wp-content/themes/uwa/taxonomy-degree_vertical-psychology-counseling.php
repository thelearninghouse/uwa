<?php get_header(); ?>
<?php $term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );  ?>
<?php
$degreeTypes = get_terms([
    'taxonomy' => 'degree_vertical',
    'hide_empty' => false,
]);
// print("<pre>".print_r($degreeTypes,true)."</pre>");
?>

<style media="screen">
  .owl-carousel .owl-dots.disabled, .owl-carousel .owl-nav.disabled {
    /*display: block !important;*/
  }
</style>

  <div class="content">
    <main id="main" class="cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

      <div class="intro">
        <div class="intro__breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
          <?php if(function_exists('bcn_display'))
          {
              bcn_display();
          }?>
        </div>
        <h2 class="intro__headline">Are You Reaching Your Earning Potential?</h2>
        <p class="intro__text">Take charge of your future with an online business degree designed for your budget and your schedule at the University of West Alabama. You’ll develop the skills and knowledge needed for real-world success, in a fully online program from one of Alabama’s oldest and most prestigious universities.</p>
        <a href="/online-degrees" class="intro__link">Browse All Degrees <?php include('library/images/arrow.svg'); ?></a>
      </div>



        <div class="mainDegrees degreeType">
          <div class="wrap">
            <h2 id="mainDegreesHeadline" class="mainDegrees__headline">Bachelor of Arts/Science</h2>
            <p id="mainDegreesText" class="mainDegrees__text">Gain a strong foundation in psychology with a BA/BS that will prepare you for immediate employment or graduate school. You’ll have the opportunity to engage in research and learn from experienced scholars and practitioners.</p>
            <?php include ('includes/verticals/bachelorsArtsScience.php'); ?>
          </div>
        </div>

        <div class="mastersDegrees degreeType">
          <div class="wrap">
            <div class="narrow">
              <h2 class="mainDegrees__headline">Master of Science</h2>
              <p class="mainDegrees__text">Develop your knowledge and skills to pursue career opportunities in experimental psychology, clinical mental health counseling or a related field. Enhance your career with a master’s degree from one of Alabama’s oldest and most prestigious universities.</p>
            </div>
            <?php include ('includes/verticals/mastersList.php'); ?>
          </div>
        </div>

    </main>
  </div>


<!-- Add current class to main nav item -->
<script type="text/javascript">
    jQuery(document).ready(function($) {
        var menuItem = $('#menu-item-168')
        $('#menu-main').find(menuItem).addClass('current-menu-item current-page-item');
    });
</script>

<?php get_footer(); ?>
<script type="text/javascript">

</script>
