
<div class="carousel_news">
  <div class="carousel slide" id="myCarousel">
    <div class="carousel-inner">
      <div class="item">
       <img alt=""  src="/img/1.jpg" />
       
     </div>

     <div class="item active">
       <img alt=""  src="/img/1.jpg" />
       
     </div>
     <div class="item">
       <img alt=""  src="/img/1.jpg" />
       
     </div>
   </div>
   <p><a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a><br />
     <a class="right carousel-control" href="#myCarousel" data-slide="next">›</a></p>
     
   </div>
 </div>
 <?php foreach ($news as $news_item): ?>
 <div align="center" class="bloc">
  <h3><a href="/index.php/news/<?php echo $news_item['id'] ?>" ><?php echo $news_item['title'] ?></a></h3>

  


  <?php echo $news_item['preview']; ?>
  

</div>
<?php endforeach ?> 
