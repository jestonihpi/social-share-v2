<?php
if( $_POST ){
update_option('share_social_fb_icon' , $_POST['share_social_fb_icon']);
update_option('share_social_twitter_icon' , $_POST['share_social_twitter_icon']);
update_option('share_social_reddit_icon' , $_POST['share_social_reddit_icon']);
update_option('share_social_instagram_icon' , $_POST['share_social_instagram_icon']);
}
?>

<div class="wrap">
   <h1>General Settings</h1>
   <form method="post" action=""> 
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
      <?php submit_button(); ?>
   </form>
</div>