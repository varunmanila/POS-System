
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		.crunchify-link {
    padding: 2px 8px 4px 8px !important;
    color: white;
    font-size: 12px;
    border-radius: 2px;
    margin-right: 2px;
    cursor: pointer;
    -moz-background-clip: padding;
    -webkit-background-clip: padding-box;
    box-shadow: inset 0 -3px 0 rgba(0,0,0,.2);
    -moz-box-shadow: inset 0 -3px 0 rgba(0,0,0,.2);
    -webkit-box-shadow: inset 0 -3px 0 rgba(0,0,0,.2);
    margin-top: 2px;
    display: inline-block;
    text-decoration: none;
}
 
.crunchify-link:hover,.crunchify-link:active {
    color: white;
}
 
.crunchify-twitter {
    background: #00aced;
}
 
.crunchify-twitter:hover,.crunchify-twitter:active {
    background: #0084b4;
}
 
.crunchify-facebook {
    background: #3B5997;
}
 
.crunchify-facebook:hover,.crunchify-facebook:active {
    background: #2d4372;
}
 
.crunchify-googleplus {
    background: #D64937;
}
 
.crunchify-googleplus:hover,.crunchify-googleplus:active {
    background: #b53525;
}
 
.crunchify-buffer {
    background: #444;
}
 
.crunchify-buffer:hover,.crunchify-buffer:active {
    background: #222;
}
 
.crunchify-pinterest {
    background: #bd081c;
}
 
.crunchify-pinterest:hover,.crunchify-pinterest:active {
    background: #bd081c;
}
 
.crunchify-linkedin {
    background: #0074A1;
}
 
.crunchify-linkedin:hover,.crunchify-linkedin:active {
    background: #006288;
}
 
.crunchify-social {
    margin: 20px 0px 25px 0px;
    -webkit-font-smoothing: antialiased;
    font-size: 12px;
}
	</style>
	<script type="text/javascript">
	function crunchify_social_sharing_buttons($content) {
	global $post;
	if(is_singular() || is_home()){
	
		// Get current page URL 
		$crunchifyURL = urlencode(get_permalink());
 
		// Get current page title
		$crunchifyTitle = htmlspecialchars(urlencode(html_entity_decode(get_the_title(), ENT_COMPAT, 'UTF-8')), ENT_COMPAT, 'UTF-8');
		// $crunchifyTitle = str_replace( ' ', '%20', get_the_title());
		
		// Get Post Thumbnail for pinterest
		$crunchifyThumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
 
		// Construct sharing URL without using any script
		$twitterURL = 'https://twitter.com/intent/tweet?text='.$crunchifyTitle.'&amp;url='.$crunchifyURL.'&amp;via=Crunchify';
		$facebookURL = 'https://www.facebook.com/sharer/sharer.php?u='.$crunchifyURL;
		$googleURL = 'https://plus.google.com/share?url='.$crunchifyURL;
		$bufferURL = 'https://bufferapp.com/add?url='.$crunchifyURL.'&amp;text='.$crunchifyTitle;
		$linkedInURL = 'https://www.linkedin.com/shareArticle?mini=true&url='.$crunchifyURL.'&amp;title='.$crunchifyTitle;
		
		// Based on popular demand added Pinterest too
		$pinterestURL = 'https://pinterest.com/pin/create/button/?url='.$crunchifyURL.'&amp;media='.$crunchifyThumbnail[0].'&amp;description='.$crunchifyTitle;
 
		// Add sharing button at the end of page/page content
		$variable .= '<!-- Implement your own social sharing buttons without any JavaScript loading. No plugin required. Detailed steps here: https://crunchify.com/?p=7526 -->';
		$variable .= '<div class="crunchify-social">';
		$variable .= '<a class="crunchify-link crunchify-twitter" href="'. $twitterURL .'" target="_blank">Twitter</a>';
		$variable .= '<a class="crunchify-link crunchify-facebook" href="'.$facebookURL.'" target="_blank">Facebook</a>';
		$variable .= '<a class="crunchify-link crunchify-googleplus" href="'.$googleURL.'" target="_blank">Google+</a>';
		$variable .= '<a class="crunchify-link crunchify-buffer" href="'.$bufferURL.'" target="_blank">Buffer</a>';
		$variable .= '<a class="crunchify-link crunchify-linkedin" href="'.$linkedInURL.'" target="_blank">LinkedIn</a>';
		$variable .= '<a class="crunchify-link crunchify-pinterest" href="'.$pinterestURL.'" data-pin-custom="true" target="_blank">Pin It</a>';
		$variable .= '</div>';
		
		return $variable.$content;
	}else{
		// if not a post/page then don't include sharing button
		return $variable.$content;
	}
};
add_filter( 'the_content', 'crunchify_social_sharing_buttons');

</head>
<body>
<?php
function crunchify_social_sharing_buttons($content) {
	global $post;
	if(is_singular() || is_home()){
	
		// Get current page URL 
		$crunchifyURL = urlencode(get_permalink());
 
		// Get current page title
		$crunchifyTitle = htmlspecialchars(urlencode(html_entity_decode(get_the_title(), ENT_COMPAT, 'UTF-8')), ENT_COMPAT, 'UTF-8');
		// $crunchifyTitle = str_replace( ' ', '%20', get_the_title());
		
		// Get Post Thumbnail for pinterest
		$crunchifyThumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
 
		// Construct sharing URL without using any script
		$twitterURL = 'https://twitter.com/intent/tweet?text='.$crunchifyTitle.'&amp;url='.$crunchifyURL.'&amp;via=Crunchify';
		$facebookURL = 'https://www.facebook.com/sharer/sharer.php?u='.$crunchifyURL;
		$googleURL = 'https://plus.google.com/share?url='.$crunchifyURL;
		$bufferURL = 'https://bufferapp.com/add?url='.$crunchifyURL.'&amp;text='.$crunchifyTitle;
		$linkedInURL = 'https://www.linkedin.com/shareArticle?mini=true&url='.$crunchifyURL.'&amp;title='.$crunchifyTitle;
 
		// Based on popular demand added Pinterest too
		$pinterestURL = 'https://pinterest.com/pin/create/button/?url='.$crunchifyURL.'&amp;media='.$crunchifyThumbnail[0].'&amp;description='.$crunchifyTitle;
 
		// Add sharing button at the end of page/page content
		$content .= '<!-- Implement your own superfast social sharing buttons without any JavaScript loading. No plugin required. Detailed steps here: https://crunchify.com/?p=7526 -->';
		$content .= '<div class="crunchify-social">';
		$content .= '<h5>SHARE ON</h5> <a class="crunchify-link crunchify-twitter" href="'. $twitterURL .'" target="_blank">Twitter</a>';
		$content .= '<a class="crunchify-link crunchify-facebook" href="'.$facebookURL.'" target="_blank">Facebook</a>';
		$content .= '<a class="crunchify-link crunchify-googleplus" href="'.$googleURL.'" target="_blank">Google+</a>';
		$content .= '<a class="crunchify-link crunchify-buffer" href="'.$bufferURL.'" target="_blank">Buffer</a>';
		$content .= '<a class="crunchify-link crunchify-linkedin" href="'.$linkedInURL.'" target="_blank">LinkedIn</a>';
		$content .= '<a class="crunchify-link crunchify-pinterest" href="'.$pinterestURL.'" data-pin-custom="true" target="_blank">Pin It</a>';
		$content .= '</div>';
		
		return $content;
	}else{
		// if not a post/page then don't include sharing button
		return $content;
	}
};
add_filter( 'the_content', 'crunchify_social_sharing_buttons');
?>

</script>
</body>
</html>