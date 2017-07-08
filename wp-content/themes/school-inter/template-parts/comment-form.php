<?php
	$req = get_option( 'require_name_email' );
	$aria_req = ( $req ? " aria-required='true'" : '' );
	$comment_field = '<p class="comment-form-comment">'. '<textarea  id="comment" name="comment" rows="6" placeholder = "Отзыв"'.$aria_req . ' ></textarea></p><div class="row">';
	$fields =  array(
		'author' => '<div class="col col-md-6 comment-form-author">'. '<input id="author" name="author" placeholder = "Имя *" type="text"' . $aria_req . ' /></div>',
		'email'  => '<div class="col col-md-6 comment-form-email">'.'<input id="email" name="email" type="text" placeholder = "E-mail *" ' . $aria_req . ' /></div>',
		'agree-terms' =>'<div class="col col-md-12 comment-form-agree-terms">'.'<input id="agree-terms" name="agree-terms" type="checkbox" aria-required="true"/> Соглашаюсь на обработку моих персональных данных в соответствии с <a href="https://docs.google.com/document/d/1WYoSRNQM68CkKlQ8jioCeyNbAzk7AVXBHs71VEa-yRk/edit?usp=sharing">условиями пользовательского соглашения</a></div></div>',
	);
	$comments_args = array(
	'comment_field' => $comment_field,
	'fields' => $fields,
    'title_reply'=>'Оставить отзыв',
    'label_submit' => 'Оставить отзыв',
	//'class_submit' => 'btn btn-classes gradient',
	);
	comment_form($comments_args);