<?php 
	include_once('View/layouts/Header.php');
?>	
	<div class="col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1">
		<form action="?mode=borrow_lend_book&act=borrow_access" method="POST" class="form-horizontal" role="form">
				<div class="form-group">
					<legend>Thông tin đặt sách</legend>
				</div>
				<div class="form-group">
					<label>Mã bạn đọc</label>
					<input type="txt" class="form-control" readonly="true" id="maBanDoc" name="maBanDoc" value="<?php echo $maDocGia; ?>">
				</div>
				<div class="form-group">
					<label>Mã cuốn sách</label>
					<input type="text" readonly="true" class="form-control" id="maCuonSach" name="maCuonSach" value="<?php echo $maCuonSach ?>">
				</div>
				<div class="form-group">
					<label>Tên sách</label>
					<input type="text" class="form-control" id="tenCuonSach" name="tenCuonSach" value="<?php echo $cuonSach['tenCuonSach']; ?>">
				</div>
				<div class="form-group">
					<label>Phí mượn</label>
					<input type="text" readonly="true" class="form-control" id="chiPhi" name="chiPhi" value="<?php echo $chiPhi ?>">
				</div>
				<div class="form-group">
					<label>Ngày mượn</label>
					<input type="date" readonly="true" class="form-control" id="ngayMuon" name="ngayMuon" value="<?php echo $ngayMuon ?>">
				</div>
				<div class="form-group">
					<label>Hạn trả</label>
					<input type="date" readonly="true" class="form-control" id="hanTra" name="hanTra" value="<?php echo $hanTra ?>">
				</div>
				<div class="form-group">
					<div>
						<button type="submit" name="submit" class="btn btn-primary">Hoàn tất</button>
						<button type="submit" name="cancel" class="btn btn-primary">Hủy</button>
					</div>
				</div>
		</form>
	</div>
<?php 
	include_once('View/layouts/Footer.php');
?>