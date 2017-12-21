<?php 
	include_once('View/layouts/Header.php');
?>
	<div class="col-xs-10 col-sx-offset-1 col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1">
		<div class="col-xs-6 col-sm-6 col-md-6">
			<span class="label label-info"><a href="?mode=post&act=index">Thông báo</a></span>
			<?php 
				if(count($post) > 0){
					foreach ($post as $key => $value) {
				
			?>
			<div class="baiDang">
				<a href="?mode=post&act=show&id=<?php echo $value['maBaiDang']; ?>"><h3><?php echo $value["tenBaiDang"]; ?></h3></a>
				<p class="noiDung"><?php echo $value['moTa']; ?></p>
				<p class="ngayDang"><?php echo $value['ngayDang']; ?></p>
			</div>
			<?php }} ?>
		</div>
		<div class="col-xs-6 col-sm-6 col-md-6">
			<span class="label label-info"><a href="?mode=post&act=index">Sự kiện sắp diễn ra</a></span>
			<?php 
				if(count($news) > 0){
					foreach ($news as $key => $value) {
				
			?>
			<div class="baiDang">
				<a href="?mode=post&act=show&id=<?php echo $value['maBaiDang']; ?>"><h3><?php echo $value['tenBaiDang']; ?></h3></a>
				<p class="noiDung"><?php echo $value['moTa']; ?></p>
				<p class="ngayDang"><?php echo $value['ngayDang']; ?></p>
			</div>
			<?php }} ?>
		</div>
	</div>
	<div class="col-xs-10 col-sx-offset-1 col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1">
		<span class="label label-success">Thông báo sách mới</span>
		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		  	<!-- Indicators -->
		  	<ol class="carousel-indicators">
		  		<?php 
		  			$i = 0;
		  			if(count($book) > 0){
		  				foreach ($book as $key => $value) {
		  			
		  		 ?>
			    	<li data-target="#carousel-example-generic" data-slide-to="<?php echo $i; ?>" class="<?php if($i == 0) echo "active"; ?>"></li>
			    <?php 
			    	$i++;
			    	}}
			    ?>
			    <!--<li data-target="#carousel-example-generic" data-slide-to="1"></li>
			    <li data-target="#carousel-example-generic" data-slide-to="2"></li>-->
		 	</ol>

		  	<!-- Wrapper for slides -->
		  	<div class="carousel-inner" role="listbox">
		  		<?php 
		  			$i = 0;
		  			foreach ($book as $key => $value) {
		  			
		  		?>
			    <div class="item <?php if($i == 0) echo "active"; ?>">
			      	<img src="<?php echo $value['url'] ?>" alt="">
			      	<div class="carousel-caption">
			        	<?php echo $value['tenAnh']; ?>
			      	</div>
			    </div>
		    	<?php echo $value['tenCuonSach']; 
		    		$i++;
		    	}?>
		  	</div>

		  	<!-- Controls -->
		  	<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
			    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
	  		</a>
	  		<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
			    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
	  		</a>
		</div>
	</div>
	<script type="text/javascript">
		$(function(){
			$('.carousel').carousel();
		});
	</script>
<?php 
	include_once('View/layouts/Footer.php');
?>