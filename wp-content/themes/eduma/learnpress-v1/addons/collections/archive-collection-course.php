<?php
/**
 * Template for displaying archive collection course content
 *
 * @author  ThimPress
 * @package LearnPress/Templates
 * @version 1.0
 */

if ( !defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

$total =  $query->found_posts ;

if ( $total == 0 ) {
	echo '<p class="message message-error">' . esc_html__( 'There are no available courses!', 'eduma' ) . '</p>';
	return;
} elseif ( $total == 1 ) {
	$index = esc_html__( 'Showing only one result', 'eduma' );
} else {
	$courses_per_page = get_option( 'posts_per_page', 10 );
	$paged            = get_query_var( 'paged' ) ? intval( get_query_var( 'paged' ) ) : 1;

	$from = 1 + ( $paged - 1 ) * $courses_per_page;
	$to   = ( $paged * $courses_per_page > $total ) ? $total : $paged * $courses_per_page;

	if ( $from == $to ) {
		$index = sprintf(
				esc_html__( 'Showing last course of %s results', 'eduma' ),
				$total
		);
	} else {
		$index = sprintf(
				esc_html__( 'Showing %s-%s of %s results', 'eduma' ),
				$from,
				$to,
				$total
		);
	}
}
?>
<div class="learn-press-collections" id="learn-press-collection-<?php echo $id; ?>">
	<div class="thim-course-top">
		<div class="thim-course-switch-layout">
			<a href="#" class="list switchToGrid "><i class="fa fa-th-large"></i></a>
			<a href="#" class="grid switchToList"><i class="fa fa-list-ul"></i></a>
		</div>
		<div class="course-index">
			<span><?php echo( $index ); ?></span>
		</div>
	</div>
	<div id="thim-course-archive" class="thim-course-list">
	<?php
	if ( $query->have_posts() ) {
		while ( $query->have_posts() ) : $query->the_post();
			LP_Addon_Collections::$in_loop = true;
			LP_Addon_Collections::get_template( 'content-collection-course.php' );
		endwhile;
		LP_Addon_Collections::$in_loop = false;
		learn_press_course_paging_nav();
	} else {
		learn_press_display_message( esc_html__( 'No course found!', 'eduma' ), 'notice' ) . $id;
	}
	?>
	</div>
</div>