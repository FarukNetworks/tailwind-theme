<?php get_header(); ?>

<div class="container pt-52">
	<h1 class="baseH1 text-center uppercase mb-5">Error 404</h1>
	<p class="text-center">Ooops This Page Doesn't Exist.</p>
	<p class="text-center">Please Try Something Else or Go Back to the Homepage.</p>
	<div class="text-center mt-10">
	<button class="text-center"><a href="<?php echo home_url(); ?>">Back to Homepage</a></button>
	</div>
</div>

<?php get_footer();