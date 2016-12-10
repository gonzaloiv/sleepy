<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Sleepy
 */

?>

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <div class="entry-content">

            <div class="content">

                <header class="entry-header">
                    <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                </header>
                <!-- .entry-header -->
                <hr>
                <?php the_content(); ?>
                    <?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'sleepy' ),
				'after'  => '</div>',
			) );
		?>
            </div>

        </div>
        <!-- .entry-content -->

        <footer class="entry-footer">
            <?php edit_post_link( esc_html__( 'Edit', 'sleepy' ), '<span class="edit-link">', '</span>' ); ?>
        </footer>
        <!-- .entry-footer -->
    </article>
    <!-- #post-## -->
