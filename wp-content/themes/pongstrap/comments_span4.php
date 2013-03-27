<?php
/** comments.php
 *
 * The template for displaying Comments.
 *
 * The area of the page that contains both current comments
 * and the comment form. The actual display of comments is
 * handled by callbacks which are located in the functions.php file.
 *
 * @author		Konstantin Obenland
 * @package		The Bootstrap
 * @since		1.0.0 - 05.02.2012
 */

tha_comments_before();

$cdi_custom_comment_span4 = array(
		'id_form'				=> 'cdi_comment_span4',
		'comment_notes_after'	=> '',
		'title_reply'			=> 'Deixe um comentário'
	);


comment_form($cdi_custom_comment_span4);

tha_comments_after();


/* End of file comments.php */
/* Location: ./wp-content/themes/the-bootstrap/comments.php */