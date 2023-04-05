<?php
/**

 * @link              https://jesworks.com
 * @since             1.0.0
 * @package           Share_Social
 *
 * @wordpress-plugin
 * Plugin Name:       Share Social v2
 * Plugin URI:        https://share-social.com
 * Description:       A social share plugin is a tool that enables website visitors to easily share content from your website to their social media profiles. By adding social share buttons to your website, users can quickly and conveniently share links, images, and other content with their friends and followers on popular social media platforms like Facebook, Twitter, LinkedIn, and more. This can help increase the visibility and reach of your content, drive traffic to your website, and improve engagement with your audience. Social share plugins are easy to install and configure, and can be customized to match the look and feel of your website.
 * Version:           1.0.0
 * Author:            Share Social
 * Author URI:        https://jesworks.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       share-social
 * Domain Path:       /languages TEST
 */

add_action('admin_menu', 'custom_menu');

function custom_menu() { 
	add_menu_page( 
		'Social Share', 
		'Social Share', 
		'edit_posts', 
		'social-share', 
		'social_share_admin_dashboard', 
		'dashicons-share-alt2' ,
		9
	   );
  }

  function social_share_admin_dashboard(){
	include 'templates/admin/dashboard.php';
	
  }

  add_filter( 'the_content', 'share_social_icons_add_to_content',0);


  function share_social_icons_add_to_content( $content ){
		if (get_option('share_social_position') == "before") {
			
			$html ='<a href="'.get_option('share_social_fb_link').'" target="_new"><span class="dashicons '.get_option('share_social_fb_icon').'" style="color:'.get_option('share_social_fb_color').'"></span></a>';
			$html .='<a href="'.get_option('share_social_twitter_link').'" target="_new"><span class="dashicons '.get_option('share_social_twitter_icon').'" style="color:'.get_option('share_social_twitter_color').'"></span>';
			$html .='<a href="'.get_option('share_social_reddit_link').'" target="_new"><span class="dashicons '.get_option('share_social_reddit_icon').'" style="color:'.get_option('share_social_reddit_color').'"></span></a>';
			$html .='<a href="'.get_option('share_social_instagram_link').'" target="_new"><span class="dashicons '.get_option('share_social_instagram_icon').'" style="color:'.get_option('share_social_instagram_color').'"></span></a>';
			$html .= $content;

			return $html;
		}
		else if (get_option('share_social_position') == "after") {

				$html = $content;
			$html .='<a href="'.get_option('share_social_fb_link').'" target="_new"><span class="dashicons '.get_option('share_social_fb_icon').'" style="color:'.get_option('share_social_fb_color').'"></span></a>';
			$html .='<a href="'.get_option('share_social_twitter_link').'" target="_new"><span class="dashicons '.get_option('share_social_twitter_icon').'" style="color:'.get_option('share_social_twitter_color').'"></span>';
			$html .='<a href="'.get_option('share_social_reddit_link').'" target="_new"><span class="dashicons '.get_option('share_social_reddit_icon').'" style="color:'.get_option('share_social_reddit_color').'"></span></a>';
			$html .='<a href="'.get_option('share_social_instagram_link').'" target="_new"><span class="dashicons '.get_option('share_social_instagram_icon').'" style="color:'.get_option('share_social_instagram_color').'"></span></a>';

			return $html;
		}

  }
  