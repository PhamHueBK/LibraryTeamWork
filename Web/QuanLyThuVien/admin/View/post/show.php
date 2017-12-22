<?php 
	include_once('View/layouts/Header.php');
?>
	<div class="col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1">
		<form action="" method="POST" class="form-horizontal" role="form">
			<div class="form-group">
				<label><a href="?mode=home&act=index" class="btn btn-success">Trở về trang chủ</a></label>
			</div>
			<div class="form-group">
				<label>Mã bài viết</label>
				<input type="text" class="form-control" name="maBaiDang" readonly="true" id="maBaiDang" value="<?php echo $data['maBaiDang']; ?>">
			</div>
			<div class="form-group">
				<label>Tên bài viết</label>
				<input type="text" class="form-control" name="tenBaiViet" id="tenBaiViet" readonly="true" value="<?php echo $data['tenBaiViet']; ?>">
			</div>
			<div class="form-group">
				<label>Mô tả</label>
				<input type="text" class="form-control" name="moTa" id="moTa" readonly="true" value="<?php echo $data['moTa']; ?>">
			</div>

			<div class="form-group">
				<label>Nội dung bài viết</label>
				<textarea cols="60" rows="10" class="form-control" name="noiDung" id="noiDung" readonly="true" required="true" value=""><?php echo $data['giaBia']; ?></textarea>
			</div>

			<div class="form-group">
				<label>Người đăng</label>
				<input type="txt" class="form-control" name="tenNhanVien" readonly="true" id="tenNhanVien" value="<?php echo $data['tenNhanVien'] ?>">
			</div>

            <div class="form-group">
                <label>Ngày đăng</label>
                <input type="date" readonly="true" class="form-control" name="ngayDang" id="ngayDang" value="<?php echo $data['ngayDang'] ?>">
            </div>

	</form>
	</div>
<?php 
	include_once('View/layouts/Footer.php');
?>	