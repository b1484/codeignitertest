

<h3> </h3>



<?php echo validation_errors(); ?>
<?php echo form_open('admin/edit/'.$news['id']) ?>

<div class="control-group error">
  <label >Название</label>
  <div class="controls">
    <input name="title" type="text" value=" <?php echo $news['title'] ?>" id="inputError">
    <span class="help-inline"></span>
  </div>
  <label >Preview</label>
  <div class="controls">
    <textarea name="textck" id="" cols="30" rows="10"> <?php echo $news['preview'] ?></textarea>
    <span class="help-inline"></span>
  </div>
</div>



<div class="textareack" >
	<label >Описание</label>
  <textarea name="textck1" id="textck1" cols="30" rows="10"> <?php echo $news['body'] ?></textarea>
</div>
<div style="margin-top:30px;" ><input type="submit" class="btn btn-success" name="submit" value="Изменить" />
</div>
</form>
