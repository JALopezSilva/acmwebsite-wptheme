<?php if( have_comments() ): ?>
<div class="results">
	<h3> <?php echo _('Comments'); ?> <small><?php comments_number('No responses','One Response','% Responses'); ?></small></h3>

		<div id="comments">
			<?php wp_list_comments(array('callback'=>'display_custom_comment')); ?>
		</div>	
		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
			<div class="row-fluid">
				<div class="span12">
					<div class="pagination">
						<ul>
							<li> <?php previous_comments_link('<<'); ?> </li>
							<li> <?php next_comments_link('>>'); ?> </li>
						</ul>
					</div>
				</div>
			</div>
		<?php endif; ?>
</div>

<?php endif; ?>
<?php  if( comments_open()) : ?>

<!--Comment form-->
<div id="comment-form">
	<?php comment_form(); ?>
</div>
<?php endif; ?>
