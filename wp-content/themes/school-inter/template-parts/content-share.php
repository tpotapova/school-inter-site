<?php
/**
 * Template part for displaying share links
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package school-inter
 */
?>
<div>
	<span class="share-caption">Поделиться в соцсетях</span>
	<div class="btn-group">
		<a
		class=""
		target="_blank"
		title="On VK.com" 
		href="http://vk.com/share.php?url=<?php echo home_url().'/'.$post->post_name;?>"
		>
			<div class="vk-share"></div>
		</a>
		<a
		class=""
		target="_blank"
		title="On Facebook"
		href="http://www.facebook.com/sharer.php?url=<?php echo home_url().'/'.$post->post_name;?>"
		>
			<div class="fb-share"></div>
		</a>

		<a
		class=""
		target="_blank"
		title="On Twitter" 
		href="http://twitter.com/share?url=<?php echo home_url().'/'.$post->post_name;?>"
		>
			<div class="twitter-share"></div>
		</a>
		<a
		class=""
		target="_blank"
		title="+1 On Google"
		href="https://plus.google.com/share?url=<?php echo home_url().'/'.$post->post_name;?>"
		>
			<div class="google-share"></div>
		</a>
	</div>
</div>