<?php get_header(); ?>

			<div class="content">

				<div class=" cf">

						<main class="main-content cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">


							<button id="updateForm" type="button" name="button">Update Form</button>
							<script id="formScript" src="https://requestforms.learninghouse.com/form/show/point-park-university/ppc-form-multi/563/3129" type="text/javascript"></script>

							<div class="tanBackground">
								<div class="wrap cf">
									<?php include('includes/frontPage/journey.php'); ?>
									<?php include('includes/frontPage/expect.php'); ?>
									<?php include('includes/frontPage/accreditations.php'); ?>
								</div>
							</div>
							<?php include('includes/frontPage/affording.php'); ?>
							<?php include('includes/frontPage/waiting.php'); ?>
						</main>

				</div>

			</div>

<?php get_footer(); ?>
<script type="text/javascript">
// (function($) {
	var Script = $('#formScript')
	var ScriptUpdater = $('#updateForm')
alert('hi');
	ScriptUpdater.on('click', function() {
		console.log('fired!');
		$('main')
		    .append($('<script id="new" type="text/javascript" src="https://requestforms.learninghouse.com/form/show/concordia-university-texas/ppc-form-multi/221/2063"></script>'));
});

</script>
