<?php
    global $chk;
    if(isset($_POST['wphw_submit'])){
            wphw_opt();
    }
    function wphw_opt(){
        $buttontxt = $_POST['btntextname'];
        global $chk;
        if( get_option('btn_text') != trim($buttontxt)){
            $chk = update_option( 'btn_text', trim($buttontxt));
        }
    }
?>
<div class="wrap">
  <div id="icon-options-general" class="icon32"> <br>
  </div>
  <!--<h2>Footer Settings</h2> -->
  <?php if(isset($_POST['wphw_submit']) && $chk):?>
  <div id="message" class="updated below-h2">
    <p>Content updated successfully</p>
  </div>
  <?php endif;?>
  <div class="metabox-holder">
    <div class="postbox">
      <h3><strong>Enter the text and click on save button.</strong></h3>
      <form method="post" action="">
        <table class="form-table">
          <tr>
            <td>Button Text:</td>
            <td>  <input type="text" name="btntextname" value="<?php echo get_option('btn_text');?>" style="width:200px;" /> </td>
          </tr>
          <tr>
            <th scope="row">&nbsp;</th>
            <td style="padding-top:10px;  padding-bottom:10px;">
<input type="submit" name="wphw_submit" value="Save changes" class="button-primary" />
</td>
          </tr>
        </table>
      </form>
    </div>
  </div>
</div>