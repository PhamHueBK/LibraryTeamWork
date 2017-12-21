<?php 
	include_once('View/layouts/Header.php');
?>
	
	<div class="col-xs-10 col-sx-offset-1 col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1 baiDang" style="text-align: center;">
		<span class="label label-success">Chi tiết bài viết</span>
		<br>
		<a href="?mode=post&act=show&id=<?php echo $value['maBaiDang']; ?>"><h3><?php echo $post["tenBaiDang"]; ?></h3></a>
		
		<p class="ngayDang"><?php echo $post['ngayDang']; ?></p>
		<p class="noiDung"><?php echo $post['noiDungBaiDang']; ?></p>
	</div>
<?php 
	include_once('View/layouts/Footer.php');
?>