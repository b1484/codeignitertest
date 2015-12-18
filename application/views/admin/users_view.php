<div class="panel_news"><h3 class="">  </h3></div>
<div class="add_news"><a href="http://<?=$_SERVER['SERVER_NAME'];?>/index.php/admin/add_users" class="btn btn-success add_news "><i class="icon-plus"></i> Добавить пользователя</a>
</div>
<div class="panel_news1"><h3 class="">Список пользователей</h3></div>
<table class="table">
  <thead>  
    <tr>
      <th>#</th>
      <th>Users</th>
      <th>email</th>
      
      
      
      
    </tr>
  </thead>
  <tbody>
    <?php $i=0; foreach ($news as $news_item): ?>
    <? if($news_item['username']!="admin"){?>
    <tr>
     <td><?echo $i; ?></td>
     <td><?=$news_item['username']?></td>
     <td><?=$news_item['email']?></td>
     
     
     
     <td>
      <div class="modal hide fade" id="myModal" tabindex="-1" role="dialog">
        <div class="modal-header">
          <h5 id="myModalLabel">Вы действительно хотите удалить пользователя?</h5>
        </div>

        <div class="modal-footer"><a href="http://<?=$_SERVER['SERVER_NAME'];?>/index.php/admin/delete_users/<?=$news_item['id'];?>" class="btn btn-primary" >Удалить</a>
          <button class="btn btn-primary" data-dismiss="modal">Отмена</button>
        </div>
      </div>
      <a href="#myModal" data-toggle="modal" class="btn"  title="удалить" >
        <i class="icon-remove"></i> 
      </a>
      
    </td>
    <!-- admin/delete/<?=$news_item['id'];?> -->
  </tr><?}?>
  <?php $i++;  endforeach  ?>

</tbody>
</table>