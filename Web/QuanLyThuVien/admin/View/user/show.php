<?php 
	include_once('View/layouts/Header.php');
?>
	<div class="col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1">
		<form action="" method="POST" class="form-horizontal" role="form">
			<div class="form-group">
				<label><a href="?mode=user&act=index" class="btn btn-success">Trở về trang trước</a></label>
			</div>
			<div class="form-group">
				<label>Mã nhân viên</label>
				<input type="text" class="form-control" name="maNhanVien" readonly="true" id="maNhanVien" value="<?php echo $user['maNhanVien']; ?>">
			</div>
			<div class="form-group">
				<label>Họ và tên</label>
				<input type="text" class="form-control" name="tenNhanVien" id="tenNhanVien" readonly="true" value="<?php echo $user['tenNhanVien']; ?>">
			</div>

			<div class="form-group">
				<label>Email</label>
				<input type="email" class="form-control" name="email" id="email" readonly="true" required="true" value="<?php echo $user['email']; ?>">
			</div>

			<div class="form-group">
				<label>Số điện thoại</label>
				<input type="txt" class="form-control" name="soDienThoai" readonly="true" id="soDienThoai" value="<?php echo $user['soDienThoai'] ?>">
			</div>

            <div class="form-group">
                <label>Chức vụ</label>
                <input type="txt" readonly="true" class="form-control" name="chucVu" id="chucVu" value="<?php echo $user['chucVu'] ?>">
            </div>


			<div class="form-group">
				<label>Giới tính</label>
				<div class="radio">
					<input type="txt" readonly="true" class="form-control" name="chucVu" id="gioiTinh" value="<?php echo $user['gioiTinh'] ?>" readonly="true">
				</div>
			</div>

			<div class="form-group">
				<label>Ngày sinh</label>
				<input type="date" readonly="true" value="<?php echo $user['ngaySinh']; ?>" class="form-control" id="ngaySinh" name="ngaySinh">
			</div>

			<div class="form-group">
				<label>Địa chỉ</label>
				<input type="txt" class="form-control" value="<?php echo $user['diaChi']; ?>" readonly="true" id="diaChi" name="diaChi" placeholder="Địa chỉ">
			</div>
	</form>
	</div>
<?php 
	include_once('View/layouts/Footer.php');
?>	