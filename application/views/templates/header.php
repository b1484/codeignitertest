<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo $title ?></title>

  <!-- Bootstrap -->
  <link href="/css/bootstrap.min.css" rel="stylesheet">
  <link href="/css/style.css" rel="stylesheet">

  
    </head>  <div align="center" style="padding:30px;" class="modal hide fade" id="myModal" tabindex="-1" role="dialog">

    <?php if (isset($chek_voiti)==TRUE) {echo $chek_voiti;}?>
    <div class="results"></div>
    <div class="controls">
      <div class="input-prepend input-append">
        <span class="add-on"><i class="icon-user"></i></span> <input name="login" placeholder="login" type="text" id="inputlogin">

      </div></div>


      <div class="controls">
        <div class="input-prepend input-append">
          <span class="add-on"><i class="icon-lock"></i></span><input name="password" id="inputpassword" placeholder="Password" type="password" >

        </div></div>
        <div onclick="voiti()" style="margin-top:30px;" ><input type="submit"  class="btn btn-success" name="submit" value="Войти" />
        </div>
      </form>

    </div>
    <div align="center" class="glavn1">
      <div align="center"  class="glavnshapka">
        <p ><a  class="btn " href="#myModal" data-toggle="modal" ><i class="icon-user"></i> Admin</a></p>

        <p  class="news">News</p>


      </div>

      




