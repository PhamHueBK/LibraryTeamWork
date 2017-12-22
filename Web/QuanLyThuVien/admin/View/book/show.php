<?php 
	include_once('View/layouts/Header.php');
?>
	<div class="col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1">
		<form action="" method="POST" class="form-horizontal" role="form">
			<div class="form-group">
				<label><a href="?mode=book&act=index" class="btn btn-success">Trở về trang trước</a></label>
			</div>
			<div class="form-group">
				<label>Mã sách</label>
				<input type="text" class="form-control" name="maQuyenSach" readonly="true" id="maQuyenSach" value="<?php echo $data['maQuyenSach']; ?>">
			</div>
			<div class="form-group">
				<label>Tên sách</label>
				<input type="text" class="form-control" name="tenQuyenSach" id="tenQuyenSach" readonly="true" value="<?php echo $data['tenQuyenSach']; ?>">
			</div>

			<div class="form-group">
				<label>Nhà xuất bản</label>
				<input type="txt" class="form-control" name="nhaXuatBan" id="nhaXuatBan" readonly="true" required="true" value="<?php echo $data['nhaXuatBan']; ?>">
			</div>

			<div class="form-group">
				<label>Tác giả</label>
				<input type="txt" class="form-control" name="tacGia" readonly="true" id="tacGia" value="<?php echo $data['tacGia'] ?>">
			</div>

            <div class="form-group">
                <label>Mô tả</label>
                <input type="txt" readonly="true" class="form-control" name="moTa" id="moTa" value="<?php echo $data['moTa'] ?>">
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