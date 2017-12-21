<?php 
	include_once('View/layouts/Header.php');
?>
	<div class="col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1" style="text-align: center">
		<?php 
			if(count($post) > 0){
				foreach ($post as $key => $value) {
			
		?>
		<div class="baiDang">
			<a href="?mode=post&act=show&id=<?php echo $value['maBaiDang']; ?>"><h3><?php echo $value["tenBaiDang"]; ?></h3></a>
			
			<p class="ngayDang"><?php echo $value['ngayDang']; ?></p>
			<p class="noiDung"><?php echo $value['noiDungBaiDang']; ?></p>
		</div>
		<?php }} ?>
	</div>
<?php 
	include_once('View/layouts/Footer.php');
?>