<div class="panel_news"><h3 class=""> Добро пожаловать <span style="color:#456545;"><i><?echo $session_id; ?></i></span> </h3></div>
<div class="add_news"><a href="http://<?=$_SERVER['SERVER_NAME'];?>/index.php/admin/add_news" class="btn btn-success add_news "><i class="icon-plus"></i> Добавить новость</a>
</div>
<div class="panel_news1"><h3 class="">Список новостей</h3></div>
<table class="table">
  <thead>  
    <tr>
      <th>#</th>
      <th>Users</th>
      <th>Title</th>
      <th>Date</th>
      <th>Count</th>
      
    </tr>
  </thead>
  <tbody>
    <?php $i=1; foreach ($news as $news_item): ?>
    <tr>
     <td><?echo $i; ?></td>
     <td><?=$news_item['author']?></td>
     <td><?=$news_item['title']?></td>
     <td>
       <?=$news_item['date']?>
     </td>
     <td>
       <?=$news_item['count']?>
     </td>
     <td>
      <div class="modal hide fade" id="myModal" tabindex="-1" role="dialog">
       <div class="modal-header">
         <h5 id="myModalLabel">Вы действительно хотите удалить новость?</h5>
       </div>
       
       <div class="modal-footer"><a href="admin/delete/<?=$news_item['id'];?>" class="btn btn-primary" >Удалить</a>
         <button class="btn btn-primary" data-dismiss="modal">Отмена</button>
       </div>
     </div>
     <a href="#myModal" data-toggle="modal" class="btn"  title="удалить" >
      <i class="icon-remove"></i> 
    </a>
    <a href="admin/edit/<?=$news_item['id'];?>"  title="редактировать" class="btn"><i class="icon-pencil"></i> </a>
  </td>
  <!-- admin/delete/<?=$news_item['id'];?> -->
</tr>
<?php $i++;  endforeach  ?>

</tbody>
</table>