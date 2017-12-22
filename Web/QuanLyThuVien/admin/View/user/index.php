<?php 
	include_once('View/layouts/Header.php');
?>
	<div class="table-responsive">
		<table id="table" class="table table-hover" width="100%">
			<thead>
				<tr>
					<th colspan="8">
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addUser">
							Thêm mới
						</button>
					</th>
				</tr>
				<tr class="flag">
					<th>Tên nhân viên</th>
					<th>Email</th>
					<th>Số điện thoại</th>
					<th>Giới tính</th>
					<th>Ngày sinh</th>
                    <th>Địa chỉ</th>
					<th>Chức vụ</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				<?php 
                    $i = 0;
					foreach ($data as $key => $value) {
					$i++;
				 ?>
				<tr id="user_<?php echo $value['maNhanVien']; ?>">
					<td><?php echo $value['tenNhanVien']; ?></td>
					<td><?php echo $value['email']; ?></td>
					<td><?php echo $value['soDienThoai']; ?></td>
					<td><?php echo $value['gioiTinh']; ?></td>
                    <td><?php echo $value['ngaySinh']; ?></td>
					<td><?php echo $value['diaChi']; ?></td>
					<td><?php echo $value['chucVu']; ?></td>
					<td>
						<a href="?mode=user&act=show&id=<?php echo $value['maNhanVien']; ?>" class="btn btn-primary" style="width:100%; margin:1%">Xem</a>
						<a href="javascript:;" class="btn btn-success" onclick="alertEdit(<?php echo $value['maNhanVien']; ?>)" style="width:100%; margin:1%">Sửa</a>
						<a href="javascript:;" class="btn btn-danger" onclick="alertDel(<?php echo $value['maNhanVien']; ?>)"  style="width:100%; margin:1%">Xóa</a>
					</td>
				</tr>
				<?php 
				} ?>
			</tbody>
		</table>
	</div>

	<!-- Modal -->
	<div class="modal fade" id="addUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  		<div class="modal-dialog" role="document">
    		<div class="modal-content">
      			<div class="modal-header">
        			<h5 class="modal-title" id="exampleModalLongTitle">Thêm mới người dùng</h5>
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          				<span aria-hidden="true">&times;</span>
        			</button>
      			</div>
      			<div class="modal-body col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1">
        			<form action="" method="POST" class="form-horizontal" role="form">
        					<div class="form-group">
        						<label>Họ và tên <span style="color: red">*</span></label>
        						<input type="text" class="form-control" name="tenNhanVien" id="tenNhanVien" placeholder="Họ và tên">
        					</div>

        					<div class="form-group">
        						<label>Email <span style="color: red">*</span></label>
        						<input type="email" class="form-control" name="email" id="email" placeholder="Email" required="true">
        					</div>

        					<div class="form-group">
        						<label>Password <span style="color: red">*</span></label>
        						<input type="password" class="form-control" name="password" id="password" required="true">
        					</div>

        					<div class="form-group">
        						<label>Số điện thoại</label>
        						<input type="txt" class="form-control" name="soDienThoai" id="soDienThoai" placeholder="Số điện thoại">
        					</div>

                            <div class="form-group">
                                <label>Chức vụ</label>
                                <input type="txt" class="form-control" name="chucVu" id="chucVu" placeholder="Chức vụ">
                            </div>


        					<div class="form-group">
        						<label>Giới tính</label>
        						<div class="radio">
        							<label>
        								<input type="radio" name="gender" id="gioiTinh" name="gioiTinh" value="Nam" checked="checked">
        								Nam
        							</label>
        							<label>
        								<input type="radio" name="gender" id="gioiTinh" name="gioiTinh" value="Nữ">
        								Nữ
        							</label>
        						</div>
        					</div>

        					<div class="form-group">
        						<label>Ngày sinh</label>
        						<input type="date" class="form-control" id="ngaySinh" name="ngaySinh">
        					</div>

        					<div class="form-group">
        						<label>Địa chỉ</label>
        						<input type="txt" class="form-control" id="diaChi" name="diaChi" placeholder="Địa chỉ">
        					</div>
        			</form>
      			</div>
      			<div class="modal-footer">
        			<button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
        			<button type="button" id="ThemMoi" class="btn btn-primary">Thêm mới</button>
      			</div>
    		</div>
  		</div>
	</div>

	<!--Edit-->
	<!-- Modal -->
	<div class="modal fade" id="editUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  		<div class="modal-dialog" role="document">
    		<div class="modal-content">
      			<div class="modal-header">
        			<h5 class="modal-title" id="exampleModalLongTitle">Cập nhật thông tin người dùng</h5>
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          				<span aria-hidden="true">&times;</span>
        			</button>
      			</div>
      			<div class="modal-body col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1">
        			<form action="" method="POST" class="form-horizontal" role="form">
        					<div class="form-group">
        						<input type="hidden" class="form-control" id="editId">
        					</div>
        					
        					<div class="form-group">
        						<label>Họ và tên</label>
        						<input type="text" class="form-control" id="editName" placeholder="Họ và tên">
        					</div>

        					<div class="form-group">
        						<label>Email</label>
        						<input type="email" class="form-control" id="editEmail" placeholder="Email" required="true">
        					</div>

        					<div class="form-group">
        						<label>Số điện thoại</label>
        						<input type="txt" class="form-control" id="editMobile" placeholder="Số điện thoại">
        					</div>


        					<div class="form-group">
        						<label>Giới tính</label>
        						<div class="radio">
        							<label>
        								<input type="radio" name="gender" id="editGender" value="male" checked="checked">
        								Nam
        							</label>
        							<label>
        								<input type="radio" name="gender" id="editGender" value="female">
        								Nữ
        							</label>
        						</div>
        					</div>

        					<div class="form-group">
        						<label>Ngày sinh</label>
        						<input type="date" class="form-control" id="editBirthday">
        					</div>
                            <div class="form-group">
                                <label>Chức vụ</label>
                                <input type="txt" class="form-control" id="editChucVu" placeholder="Chức vụ">
                            </div>
        					<div class="form-group">
        						<label>Địa chỉ</label>
        						<input type="txt" class="form-control" id="editAddress" placeholder="Địa chỉ">
        					</div>
        			</form>
      			</div>
      			<div class="modal-footer">
        			<button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
        			<button type="button" id="UpdateBtn" class="btn btn-primary">Cập nhật</button>
      			</div>
    		</div>
  		</div>
	</div>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#ThemMoi').click(function(){
                var maNhanVien = 'NULL';
                var tenNhanVien = $('#tenNhanVien').val();
                var email = $('#email').val();
                var password = $('#password').val();
                var soDienThoai = $('#soDienThoai').val();
                var gioiTinh = $('#gioiTinh').val();
                var ngaySinh = $('#ngaySinh').val();
                var diaChi = $('#diaChi').val();
                var chucVu = $('#chucVu').val();

                $.ajax({
                    type: "post",
                    url: '?mode=user&act=create',
                    data: {
                        maNhanVien : maNhanVien,
                        tenNhanVien : tenNhanVien,
                        email : email,
                        password : password,
                        soDienThoai : soDienThoai,
                        gioiTinh : gioiTinh,
                        ngaySinh : ngaySinh,
                        diaChi : diaChi,
                        chucVu : chucVu,
                    },
                    success: function(res)
                    {
                        console.log(res);
                        if(!res.error) {
                            var start = res.indexOf("{");
                            var end = res.lastIndexOf("}");
                            var response = res.substring(start, end+1);
                            var result = JSON.parse(response);
                            console.log(result);
                            //var status = result.status;
                            if(response.length > 0){
                                var data = result;
                                
                                $('#addTag').modal('hide');
                                var flag = $('.flag');
                                var html ='<tr id="user_'+data.maNhanVien+'">'+
                                    '<td>'+data.tenNhanVien+'</td>'+
                                    '<td>'+data.email+'</td>'+
                                    '<td>'+data.soDienThoai+'</td>'+
                                    '<td>'+data.gioiTinh+'</td>'+
                                    '<td>'+data.ngaySinh+'</td>'+
                                    '<td>'+data.diaChi+'</td>'+
                                    '<td>'+data.chucVu+'</td>'+
                                    '<td align="center">'+
                                    '<a style="width:100%" href="?mode=user&act=show&id='+data.maNhanVien+'" type="button" onclick="" class="btn btn-primary">'+
                                      'Xem'+
                                    '<a style="width:100%" href="javascript:;" type="button" onclick="alertEdit('+data.maNhanVien+')" class="btn btn-success">'+
                                      'Sửa'+
                                    '</a> '+
                                    '<a style="width:100%" href="javascript:;" type="button" onclick="alertDel('+data.maNhanVien+')" class="btn btn-warning">'+
                                      '<i class="fa fa-trash-o"></i> Xóa'+
                                    '</a>'+
                                    '</td>'+
                                  '</tr>';
                                //$(html).insertBefore(flag);
                                $(html).insertAfter(flag);
                                $('#addUser').modal('hide');
                                toastr.success('Thêm mới thành công!', 'Nafosted',{timeOut: 1000});
                            }else{
                                toastr.error('Thêm mới không thành công!', 'Nafosted',{timeOut: 1000});
                            }
                        } else {
                            toastr.error('Error', 'Nafosted-Error',{timeOut: 1000});
                        }
                    },
                    error: function (xhr, ajaxOptions, thrownError) {
                        toastr.error('Error', 'Nafosted-Error',{timeOut: 1000});

                    }
                });
            });
            
        }); 
        function alertDel(id){
            var path = "?mode=user&act=delete&maNhanVien=" + id;
            swal({
                title: "Bạn có chắc muốn xóa?",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                cancelButtonText: "Không",
                confirmButtonText: "Có",
            },
            function(isConfirm) {
                if (isConfirm) {
                    $.ajax({
                        type: "POST",
                        url: path,
                        success: function(res)
                        {
                            console.log(res);
                            if(!res.error) {
                                var start = res.indexOf("{");
                                var end = res.lastIndexOf("}");
                                var response = res.substring(start, end+1);
                                var result = JSON.parse(response);
                                if(result.status){
                                    toastr.success('Xóa thành công!');
                                    $('#user_'+result.maNhanVien).remove();
                                }
                                else
                                    toastr.error(thrownError);
                            }
                        },
                        error: function (xhr, ajaxOptions, thrownError) {
                            toastr.error(thrownError);
                        }
                    });
                } else {
                  toastr.info("Thao tác xóa đã bị huỷ bỏ!");
                }
            }
            );
        };

        function alertEdit(id) {

            $('#editUser').modal('show');

            $.ajax({
                type: "GET",
                url: "?mode=user&act=edit&id=" + id,
                success: function(res)
                {
                    console.log(res);
                    var start = res.indexOf("{");
                    var end = res.lastIndexOf("}");
                    var response = res.substring(start, end+1);
                    
                    if(response.length > 0){
                        var result = JSON.parse(response);
                        console.log(result);
                        var data = result;
                        $('#editId').val(data.maNhanVien);
                        $('#editEmail').val(data.email);
                        $('#editName').val(data.tenNhanVien);
                        $('#editMobile').val(data.soDienThoai);
                        $('#editGender').val(data.gioiTinh);
                        $('#editBirthday').val(data.ngaySinh);
                        $('#editChucVu').val(data.chucVu);
                        $('#editAddress').val(data.diaChi);
                    }
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    toastr.error(thrownError);
                }
            });

        };

        $(document).ready(function () {
            $('#UpdateBtn').click(function() {
                var maNhanVien = $('#editId').val();
                var tenNhanVien = $('#editName').val();
                var soDienThoai = $('#editMobile').val();
                var email = $('#editEmail').val();
                var diaChi = $('#editAddress').val();
                var gioiTinh = $('#editGender').val();
                var chucVu = $('#editChucVu').val();
                var ngaySinh = $('#editBirthday').val();

                $.ajax({
                    type: "post",
                    url: '?mode=user&act=update',
                    data: {
                        maNhanVien : maNhanVien,
                        tenNhanVien : tenNhanVien,
                        soDienThoai : soDienThoai,
                        email : email,
                        diaChi : diaChi,
                        gioiTinh : gioiTinh,
                        chucVu : chucVu,
                        ngaySinh : ngaySinh,
                    },
                    success: function(res)
                    {
                        console.log(res);
                        if(!res.error) {
                            var start = res.indexOf("{");
                            var end = res.lastIndexOf("}");
                            var response = res.substring(start, end+1);
                            if(response.length > 0){
                                var result = JSON.parse(response);
                                var data = result;
                                $('#editUser').modal('hide');
                                var html ='<td>'+data.tenNhanVien+'</td>'+
                                        '<td>'+data.email+'</td>'+
                                        '<td>'+data.soDienThoai+'</td>'+
                                        '<td>'+data.gioiTinh+'</td>'+
                                        '<td>'+data.ngaySinh+'</td>'+
                                        '<td>'+data.diaChi+'</td>'+
                                        '<td>'+data.chucVu+'</td>'+
                                        '<td align="center">'+
                                        '<a style="width:100%" href="?mode=user&act=show&id='+data.maNhanVien+'" type="button" onclick="" class="btn btn-primary">'+
                                          'Xem'+
                                        '<a style="width:100%" href="javascript:;" type="button" onclick="alertEdit('+data.maNhanVien+')" class="btn btn-success">'+
                                          'Sửa'+
                                        '</a> '+
                                        '<a style="width:100%" href="javascript:;" type="button" onclick="alertDel('+data.maNhanVien+')" class="btn btn-warning">'+
                                          '<i class="fa fa-trash-o"></i> Xóa'+
                                        '</a>'+
                                        '</td>';
                                $('#user_'+data.maNhanVien).html(html);
                                toastr.success('Cập nhật thành công!', 'Nafosted',{timeOut: 1000});
                            }else{
                                toastr.error('Cập nhật không thành công!', 'Nafosted',{timeOut: 1000});
                            }
                        } else {
                            toastr.error('Error', 'Nafosted-Error',{timeOut: 1000});
                        }
                    },
                    error: function (xhr, ajaxOptions, thrownError) {
                        toastr.error('Error', 'Nafosted-Error',{timeOut: 1000});

                    }
                });
            });
        });
       
  </script>

<?php 
	include_once('View/layouts/Footer.php');
?>