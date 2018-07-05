<?php
/**
 * Template part for displaying the "3 + 2 Columns" footer
 *
 * @author 8guild
 */

if ( silicon_is_active_sidebars( array(
	'footer-column-1',
	'footer-column-2',
	'footer-column-3',
) ) ) :
	?>
	<div class="footer-row">
		<div class="<?php silicon_footer_fullwidth_class(); ?>">
			<div class="row">

				<?php if ( is_active_sidebar( 'footer-column-1' ) ) : ?>
					<div class="col-sm-4">
						<?php dynamic_sidebar( 'footer-column-1' ); ?>
					</div>
				<?php endif; ?>

				<?php if ( is_active_sidebar( 'footer-column-2' ) ) : ?>
					<div class="col-sm-4">
						<?php dynamic_sidebar( 'footer-column-2' ); ?>
					</div>
				<?php endif; ?>

				<?php if ( is_active_sidebar( 'footer-column-3' ) ) : ?>
					<div class="col-sm-4">
						<?php dynamic_sidebar( 'footer-column-3' ); ?>
					</div>
				<?php endif; ?>

			</div>
		</div>
	</div>
	<?php
endif;

if ( silicon_is_active_sidebars( array(
	'footer-column-4',
	'footer-column-5',
) ) ) :
	?>
	<div class="footer-row border-default-top">
		<div class="<?php silicon_footer_fullwidth_class(); ?>">
			<div class="row">

				<?php if ( is_active_sidebar( 'footer-column-4' ) ) : ?>
					<div class="col-sm-6">
						<?php dynamic_sidebar( 'footer-column-4' ); ?>
					</div>
				<?php endif; ?>

				<?php if ( is_active_sidebar( 'footer-column-5' ) ) : ?>
					<div class="col-sm-6">
						<?php dynamic_sidebar( 'footer-column-5' ); ?>
					</div>
				<?php endif; ?>

			</div>
		</div>
	</div>
	<?php
endif;
