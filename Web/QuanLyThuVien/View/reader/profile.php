<?php 
	include_once('View/layouts/Header.php');
?>
	<div class="col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1">
		<form action="?mode=reader&act=update" method="POST" class="form-horizontal" role="form">
			<div class="form-group">
				<legend>
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#hoatDong">
						Xem hoạt động của tôi
					</button>
				</legend>
			</div>
			<div class="form-group">
				<legend>Thông tin cá nhân</legend>
			</div>
			
			<div class="form-group">
				<label>Mã độc giả</label>
				<input type="txt" class="form-control" name="maBanDoc" id="maBanDoc" value="<?php echo $user['maBanDoc']; ?>" readonly="true">
			</div>
			
			<div class="form-group">
				<label>Họ tên <span style="color: red">*</span></label>
				<input required="true" type="txt" class="form-control" name="tenBanDoc" id="tenBanDoc" value="<?php echo $user['tenBanDoc']; ?>">
			</div>

			<div class="form-group">
				<label>Email <span style="color: red">*</span></label>
				<input required="true" type="email" class="form-control" name="email" id="email" value="<?php echo $user['email']; ?>">
			</div>

			<div class="form-group">
				<label>Password <span style="color: red">*</span></label>
				<input required="true" type="password" class="form-control" name="password" id="password" value="<?php echo $user['password']; ?>">
			</div>

			<div class="form-group">
				<label>Ngày sinh</label>
				<input type="date" class="form-control" name="ngaySinh" id="ngaySinh" value="<?php echo $user['ngaySinh']; ?>">
			</div>

			<div class="form-group">
				<label>Giới tính</label>
				<div class="radio">
					<label>
						<input type="radio" name="gioiTinh" id="GioiTinh" value="Nam" checked="<?php echo $user['gioiTinh'] == "Nam"; ?>">Nam
						
					</label>
					<label>
						<input type="radio" name="gioiTinh" id="GioiTinh" value="Nữ" checked="<?php echo $user['gioiTinh'] == "Nữ"; ?>">Nữ
						
					</label>
				</div>
			</div>

			<div class="form-group">
				<label>Số điện thoại</label>
				<input type="txt" class="form-control" name="soDienThoai" id="soDienThoai" value="<?php echo $user['soDienThoai']; ?>">
			</div>

			<div class="form-group">
				<div>
					<button type="submit" class="btn btn-primary">Cập nhật thông tin</button>
				</div>
			</div>
		</form>
	</div>
	<!-- Modal -->
	<div class="modal fade" id="hoatDong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  		<div class="modal-dialog" role="document">
    		<div class="modal-content">
      			<div class="modal-header">
        			<h5 class="modal-title" id="exampleModalLongTitle">Hoạt động của tôi</h5>
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          				<span aria-hidden="true">&times;</span>
        			</button>
      			</div>
      			<div class="modal-body col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1">
        			<table class="table table-hover">
        				<thead>
        					<tr>
        						<th>Tên sách</th>
        						<th>Ngày mượn</th>
        						<th>Hạn trả</th>
        						<th>Trạng thái</th>
        					</tr>
        				</thead>
        				<tbody>
        					<?php 
        						if(count($phieuMuonCT) > 0){
        						foreach ($phieuMuonCT as $key => $value) {
        						
        					?>
        					<tr>
        						<td><?php echo $value['tenCuonSach']; ?></td>
        						<td><?php echo $value['ngayMuon']; ?></td>
        						<td><?php echo $value['hanTra']; ?></td>
        						<td><?php echo $value['trangThai']; ?></td>
        					</tr>
        					<?php 
        						}}
        						else
        						{
        					 ?>
        					 <tr>
        					 	<td colspan="4" style="text-align: center;">Không có bản ghi nào</td>
        					 </tr>
        					 <?php } ?>
        				</tbody>
        			</table>
      			</div>
      			<div class="modal-footer">
        			<button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
      			</div>
    		</div>
  		</div>
	</div>
<?php 
	include_once('View/layouts/Footer.php');
?>