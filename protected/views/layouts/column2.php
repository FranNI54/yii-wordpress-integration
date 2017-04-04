<?php $this->beginContent('//layouts/main'); ?>
<div id="primary" style="padding: 0 30px;">
	<div id="content" role="main">
		<?php echo $content; ?>
	</div><!-- #content -->
</div>
<?php get_sidebar(); ?>
<?php $this->endContent(); ?>