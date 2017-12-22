<?php 
	include_once('View/layouts/Header.php');
?>
	<div class="col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1">
		<form action="" method="POST" class="form-horizontal" role="form">
			<div class="form-group">
				<label><a href="?mode=bookDetail&act=index&maQuyenSach=<?php $data['maQuyenSach']; ?>" class="btn btn-success">Trở về trang trước</a></label>
			</div>
			<div class="form-group">
				<label>Mã sách</label>
				<input type="text" class="form-control" name="maCuonSach" readonly="true" id="maCuonSach" value="<?php echo $data['maCuonSach']; ?>">
			</div>
			<div class="form-group">
				<label>Tên sách</label>
				<input type="text" class="form-control" name="tenCuonSach" id="tenCuonSach" readonly="true" value="<?php echo $data['tenCuonSach']; ?>">
			</div>
			<div class="form-group">
				<label>Ảnh bìa</label>
				<div>
					<img src="<?php echo $data['url']; ?>" width="200px" height="200px">
				</div>
			</div>

			<div class="form-group">
				<label>Nhà xuất bản</label>
				<input type="txt" class="form-control" name="giaBia" id="giaBia" readonly="true" required="true" value="<?php echo $data['giaBia']; ?>">
			</div>

			<div class="form-group">
				<label>Tác giả</label>
				<input type="txt" class="form-control" name="namXuatBan" readonly="true" id="namXuatBan" value="<?php echo $data['namXuatBan'] ?>">
			</div>

            <div class="form-group">
                <label>Mô tả</label>
                <input type="txt" readonly="true" class="form-control" name="tinhTrang" id="tinhTrang" value="<?php echo $data['tinhTrang'] ?>">
            </div>
            <div class="form-group">
				<label>Vị trí</label>
				<div class="radio">
					<input type="txt" readonly="true" class="form-control" name="viTri" id="viTri" value="<?php echo $data['viTri'] ?>" readonly="true">
				</div>
			</div>

			<div class="form-group">
				<label>Ghi chú</label>
				<div class="radio">
					<input type="txt" readonly="true" class="form-control" name="ghiChu" id="ghiChu" value="<?php echo $data['ghiChu'] ?>" readonly="true">
				</div>
			</div>

	</form>
	</div>
<?php 
	include_once('View/layouts/Footer.php');
?>	