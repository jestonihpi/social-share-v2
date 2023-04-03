<?php
if( $_POST ){

update_option('share_social_fb_icon' , $_POST['share_social_fb_icon']);
update_option('share_social_twitter_icon' , $_POST['share_social_twitter_icon']);
update_option('share_social_reddit_icon' , $_POST['share_social_reddit_icon']);
update_option('share_social_instagram_icon' , $_POST['share_social_instagram_icon']);

update_option('share_social_fb_link' , $_POST['share_social_fb_link']);
update_option('share_social_twitter_link' , $_POST['share_social_twitter_link']);
update_option('share_social_reddit_link' , $_POST['share_social_reddit_link']);
update_option('share_social_instagram_link' , $_POST['share_social_instagram_link']);

update_option('share_social_fb_color' , $_POST['share_social_fb_color']);
update_option('share_social_twitter_color' , $_POST['share_social_twitter_color']);
update_option('share_social_reddit_color' , $_POST['share_social_reddit_color']);
update_option('share_social_instagram_color' , $_POST['share_social_instagram_color']);

}
?>

<div class="wrap">
   <form method="post" action=""> 
      <h1>DashIcons Settings</h1>
      <table class="form-table" role="presentation">
         <tbody>
            <tr>
               <th scope="row"><label for="blogname">Facebook</label></th>
               <td><input name="share_social_fb_icon" type="text" id="blogname" value="<?php echo get_option('share_social_fb_icon'); ?>" class="regular-text"></td>
            </tr>
            <tr>
               <th scope="row"><label for="blogname">Twitter</label></th>
               <td><input name="share_social_twitter_icon" type="text" id="blogname" value="<?php echo get_option('share_social_twitter_icon'); ?>"class="regular-text"></td>
            </tr>
            <tr>
               <th scope="row"><label for="blogname">Reddit</label></th>
               <td><input name="share_social_reddit_icon" type="text" id="blogname" value="<?php echo get_option('share_social_reddit_icon'); ?>" class="regular-text"></td>
            </tr>
            <tr>
               <th scope="row"><label for="blogname">Instagram</label></th>
               <td><input  type="text" name="share_social_instagram_icon" value="<?php echo get_option('share_social_instagram_icon'); ?>" class="regular-text"></td>
            </tr>
         </tbody>
      </table>

       <h1>DashIcons Links</h1>
      <table class="form-table" role="presentation">
         <tbody>
            <tr>
               <th scope="row"><label for="blogname">Facebook</label></th>
               <td><input name="share_social_fb_link" type="text" id="blogname" value="<?php echo get_option('share_social_fb_link'); ?>" class="regular-text"></td>
            </tr>
            <tr>
               <th scope="row"><label for="blogname">Twitter</label></th>
               <td><input name="share_social_twitter_link" type="text" id="blogname" value="<?php echo get_option('share_social_twitter_link'); ?>"class="regular-text"></td>
            </tr>
            <tr>
               <th scope="row"><label for="blogname">Reddit</label></th>
               <td><input name="share_social_reddit_link" type="text" id="blogname" value="<?php echo get_option('share_social_reddit_link'); ?>" class="regular-text"></td>
            </tr>
            <tr>
               <th scope="row"><label for="blogname">Instagram</label></th>
               <td><input  type="text" name="share_social_instagram_link" value="<?php echo get_option('share_social_instagram_link'); ?>" class="regular-text"></td>
            </tr>
         </tbody>
      </table> 

      <h1>DashIcons Links</h1>
      <table class="form-table" role="presentation">
         <tbody>
            <tr>
               <th scope="row"><label for="blogname">Facebook</label></th>
               <td><input name="share_social_fb_color" type="text" id="blogname" value="<?php echo get_option('share_social_fb_color'); ?>" class="regular-text"></td>
            </tr>
            <tr>
               <th scope="row"><label for="blogname">Twitter</label></th>
               <td><input name="share_social_twitter_color" type="text" id="blogname" value="<?php echo get_option('share_social_twitter_color'); ?>"class="regular-text"></td>
            </tr>
            <tr>
               <th scope="row"><label for="blogname">Reddit</label></th>
               <td><input name="share_social_reddit_color" type="text" id="blogname" value="<?php echo get_option('share_social_reddit_color'); ?>" class="regular-text"></td>
            </tr>
            <tr>
               <th scope="row"><label for="blogname">Instagram</label></th>
               <td><input  type="text" name="share_social_instagram_color" value="<?php echo get_option('share_social_instagram_color'); ?>" class="regular-text"></td>
            </tr>
         </tbody>
      </table> 
      <?php submit_button(); ?>
   </form>
</div>