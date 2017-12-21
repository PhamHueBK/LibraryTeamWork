<?php 
	include_once('View/layouts/Header.php');
?>
	<div class="table-responsive col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-10 col-md-offset1" style="margin-top:2%">
		<table class="table table-hover" id="table">
			<thead>
				<tr>
					<th>Tên sách</th>
					<th>Nhà xuất bản</th>
					<th>Mô tả</th>
					<th>Tác giả</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				<?php 
					foreach ($books as $key => $value) {
					
				 ?>
				<tr>
					<td><?php echo $value['tenQuyenSach']; ?></td>
					<td><?php echo $value['nhaXuatBan']; ?></td>
					<td><?php echo $value['moTa']; ?></td>
					<td><?php echo $value['tacGia']; ?></td>
					<td>
						<a href="?mode=bookDetail&act=index&id=<?php echo $value['maQuyenSach']; ?>">Đặt sách</a>
						<a href="?mode=bookDetail&act=show&id=<?php echo $value['maQuyenSach']; ?>"></a>
					</td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
<?php 	
	include_once('View/layouts/Footer.php');
?>