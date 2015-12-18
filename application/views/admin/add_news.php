

<h3> </h3>


<?php echo validation_errors(); ?>
<?php echo form_open('admin/add_news') ?>


<div class="control-group error">
  <label >Название</label>
  <div class="controls">
    <input name="title" type="text" id="inputError">
    <span class="help-inline"></span>
  </div>
  <label >Preview</label>
  <div class="controls">
    <textarea name="textck" id="" cols="30" rows="10"></textarea>
    <span class="help-inline"></span>
  </div>
</div>



<div class="textareack" >
	<label >Описание</label>
  <textarea name="textck1" id="textck1" cols="30" rows="10"></textarea>
</div>
<div style="margin-top:30px;" ><input type="submit" class="btn btn-success" name="submit" value="Добавить" />
</div>
</form>
