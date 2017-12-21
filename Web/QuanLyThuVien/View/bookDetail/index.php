<?php 
	include_once('View/layouts/Header.php');
?>
	<div class="col-xs-10 col-sx-offset-1 col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1">
		<div class="table-responsive">
			<table class="table table-hover">
				<thead>
					<tr>
						<th>STT</th>
						<th>Tên sách</th>
						<th>Năm xuất bản</th>
						<th>Giá bìa</th>
						<th>Ghi chú</th>
						<th>Vị trí</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					<?php 
						$i = 0;
						foreach ($books as $key => $value) {
						$i++;
					?>
					<tr>
						<td><?php echo $value['tenCuonSach']; ?></td>
						<td><?php echo $value['namXuatBan']; ?></td>
						<td><?php echo $value['giaBia']; ?></td>
						<td><?php echo $value['ghiChu']; ?></td>
						<td><?php echo $value['viTri']; ?></td>
						<td><a href="?mode=borrow_lend_book&act=borrow&maCuonSach=<?php echo $value['maCuonSach']; ?>">Đặt sách</a></td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
<?php 
	include_once('View/layouts/Footer.php');
?>