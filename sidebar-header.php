<?php
/**
 * The Sidebar containing the home widget areas.
 *
 * @package Toolbox
 * @since Toolbox 0.1
 */
?>
		<div id="secondary" class="widget-area" role="complementary">
			<?php do_action( 'before_sidebar' ); ?>
			<?php if ( ! dynamic_sidebar( 'header-sidebar-1' ) ) : ?>

				<aside id="search" class="widget widget_search">
					<?php get_search_form(); ?>
				</aside>

				<aside id="archives" class="widget">
					<h1 class="widget-title"><?php _e( 'Archives', 'toolbox' ); ?></h1>
					<ul>
						<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
					</ul>
				</aside>

				<aside id="meta" class="widget">
					<h1 class="widget-title"><?php _e( 'Meta', 'toolbox' ); ?></h1>
					<ul>
						<?php wp_register(); ?>
						<aside><?php wp_loginout(); ?></aside>
						<?php wp_meta(); ?>
					</ul>
				</aside>

			<?php endif; // end sidebar widget area ?>
			</div><!-- #tertiary .widget-area -->
					<!-- save me -->
		<?php if ( is_active_sidebar( 'header-sidebar-2' ) ) : ?>
		<div id="tertiary" class="widget-area" role="complementary">
			<?php dynamic_sidebar( 'header-sidebar-2' ); ?>
            </div><!-- #secondary .widget-area -->
		<?php endif; ?>