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


update_option('share_social_position' , $_POST['share_social_position']);
update_option('custom_javascript' , $_POST['custom_javascript']);

}
?>

<div class="wrap">
   <form method="post" action=""> 
      <h1>DashIcons Settings</h1>
      <table class="form-table" role="presentation">
         <tbody>
            <tr>
               <th scope="row"><label for="blogname">Facebook</label></th>
               <td><input type="text" name="share_social_fb_icon"  id="blogname" value="<?php echo get_option('share_social_fb_icon'); ?>" class="regular-text"></td>
            </tr>
            <tr>
               <th scope="row"><label for="blogname">Twitter</label></th>
               <td><input type="text" name="share_social_twitter_icon"  id="blogname" value="<?php echo get_option('share_social_twitter_icon'); ?>"class="regular-text"></td>
            </tr>
            <tr>
               <th scope="row"><label for="blogname">Reddit</label></th>
               <td><input type="text" name="share_social_reddit_icon"  id="blogname" value="<?php echo get_option('share_social_reddit_icon'); ?>" class="regular-text"></td>
            </tr>
            <tr>
               <th scope="row"><label for="blogname">Instagram</label></th>
               <td><input type="text" name="share_social_instagram_icon" id="blogname" value="<?php echo get_option('share_social_instagram_icon'); ?>" class="regular-text"></td>
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
            <tr>
               <th scope="row"><label for="blogname">Position</label></th>
               <td>
                  <select name="share_social_position" id="">
                     <option <?php if ( get_option('share_social_position') == "before") { ?>selected="true" <?php }; ?> value="before">Before</option>
                     <option <?php if ( get_option('share_social_position') == "after") { ?>selected="true" <?php }; ?> value="after">After</option>
                  </select>
               </td>
            </tr>
         </tbody>
      </table> 

      <h1>DashIcons Color</h1>
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

      <h1>Custom Javascript</h1>
      <table class="form-table" role="presentation">
         <tbody>
            <tr>
               <th scope="row"><label for="blogname">Script</label></th>
               <td><textarea name="custom_javascript" id="blogname" value="<?php echo get_option('custom_javascript'); ?>" cols="50" rows="10"></textarea></td>
            </tr>
            
         </tbody>
      </table> 
      <?php submit_button(); ?>
   </form>
</div>