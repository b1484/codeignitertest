

<h3> </h3>


<?php echo validation_errors(); ?>
<?php echo form_open('admin/add_users'); ?>
<?php if (isset($password)==TRUE) {echo $password;}?>

<div class="control-group error">
  <label >login</label>
  <div class="controls">
    <input name="login" type="text" id="">
    <span class="help-inline"></span>
  </div>
  <label >email</label>
  <div class="controls">
    <input name="email" type="text" id="">
    <span class="help-inline"></span>
  </div>
  <label >password</label>
  <div class="controls">
    <input name="password" type="password" >
    <span class="help-inline"></span>
  </div>
  <label >password</label>
  <div class="controls">
    <input name="password1" type="password" >
    <span class="help-inline"></span>
  </div>

</div>




<div style="margin-top:30px;" ><input type="submit" class="btn btn-success" name="submit" value="Добавить" />
</div>
</form>
