<?php 
	include_once('View/layouts/Header.php');
?>
	<div class="table-responsive">
		<table id="table" class="table table-hover" width="100%">
			<thead>
				<tr>
					<th colspan="6">
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addPost">
							Thêm mới
						</button>
					</th>
				</tr>
				<tr class="flag">
					<th>Tên bài đăng</th>
                    <th>Môt tả</th>
					<th>Người đăng</th>
					<th>Loại bài</th>
					<th>Ngày đăng</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				<?php 
                    $i = 0;
					foreach ($data as $key => $value) {
					$i++;
				 ?>
				<tr id="post_<?php echo $value['maBaiDang']; ?>">
                    <td><?php echo $value['maBaiDang']; ?></td>
                    <td><?php echo $value['tenBaiDang']; ?></td>
					<td><?php echo $value['tenNhanVien']; ?></td>
					<td><?php echo $value['loaiBaiDang']; ?></td>
					<td><?php echo $value['ngayDang']; ?></td>
					<td>
						<a href="?mode=post&act=show&id=<?php echo $value['maBaiDang']; ?>" class="btn btn-primary" style="width:100%; margin:1%">Xem</a>
						<a href="javascript:;" class="btn btn-success" onclick="alertEdit(<?php echo $value['maBaiDang']; ?>)" style="width:100%; margin:1%">Sửa</a>
						<a href="javascript:;" class="btn btn-danger" onclick="alertDel(<?php echo $value['maBaiDang']; ?>)"  style="width:100%; margin:1%">Xóa</a>
					</td>
				</tr>
				<?php 
				} ?>
			</tbody>
		</table>
	</div>

	<!-- Modal -->
	<div class="modal fade" id="addPost" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  		<div class="modal-dialog" role="document">
    		<div class="modal-content">
      			<div class="modal-header">
        			<h5 class="modal-title" id="exampleModalLongTitle">Thêm bài viết mới</h5>
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          				<span aria-hidden="true">&times;</span>
        			</button>
      			</div>
      			<div class="modal-body col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1">
        			<form action="" method="POST" class="form-horizontal" role="form" enctype=”multipart/form-data”>
                        <div class="form-group">
                            <input type="hidden" class="form-control" name="maNhanVien" id="maNhanVien" value="<?php echo $_SESSION['admin']['maNhanVien']; ?>">
                        </div>
    					<div class="form-group">
    						<label>Tên bài viết <span style="color: red">*</span></label>
    						<input type="text" class="form-control" name="tenBaiDang" id="tenBaiDang" placeholder="Tên bài viết">
    					</div>

                        <div class="form-group">
                            <label>Mô tả <span style="color: red">*</span></label>
                            <input type="text" class="form-control" name="moTa" id="moTa" placeholder="Mô tả">
                        </div>

    					<div class="form-group">
    						<label>Nội dung <span style="color: red">*</span></label>
    						<textarea id="noiDung" name="noiDung" cols="60" rows="10" placeholder="Nội dung bài viết"></textarea>
    					</div>

    					<div class="form-group">
    						<label>Loại bài đăng</label><br>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="loaiBaiDang" id="loaiBaiDang" value="0" checked="checked">
                                    Thông báo
                                </label>
                                <label>
                                    <input type="radio" name="loaiBaiDang" id="loaiBaiDang" value="1">
                                    Tin tức
                                </label>
                            </div>
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
	<div class="modal fade" id="editBook" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  		<div class="modal-dialog" role="document">
    		<div class="modal-content">
      			<div class="modal-header">
        			<h5 class="modal-title" id="exampleModalLongTitle">Cập nhật thông tin sách</h5>
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          				<span aria-hidden="true">&times;</span>
        			</button>
      			</div>
      			<div class="modal-body col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1">
        			<form action="" method="POST" class="form-horizontal" role="form" enctype=”multipart/form-data”>
                        <div class="form-group">
                            <input type="hidden" class="form-control" name="editMaBaiDang" id="editMaBaiDang">
                        </div>
                        <div class="form-group">
                            <input type="hidden" class="form-control" name="maNhanVien" id="maNhanVien" value="<?php echo $_SESSION['admin']['maNhanVien']; ?>">
                        </div>
                        <div class="form-group">
                            <label>Tên bài viết <span style="color: red">*</span></label>
                            <input type="text" class="form-control" name="editTenBaiDang" id="editTenBaiDang" placeholder="Tên bài viết">
                        </div>

                        <div class="form-group">
                            <label>Mô tả <span style="color: red">*</span></label>
                            <input type="text" class="form-control" name="editMoTa" id="editMoTa" placeholder="Mô tả">
                        </div>

                        <div class="form-group">
                            <label>Nội dung <span style="color: red">*</span></label>
                            <textarea id="editNoiDung" name="editNoiDung" cols="60" rows="10" placeholder="Nội dung bài viết"></textarea>
                        </div>

                        <div class="form-group">
                            <label>Loại bài đăng</label><br>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="editLoaiBaiDang" id="editLoaiBaiDang" value="0" checked="checked">
                                    Thông báo
                                </label>
                                <label>
                                    <input type="radio" name="editLoaiBaiDang" id="editLoaiBaiDang" value="1">
                                    Tin tức
                                </label>
                            </div>
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
                var maBaiDang = 'NULL';
                var tenBaiDang = $('#tenBaiDang').val();
                var moTa = $('#moTa').val();
                var noiDungBaiDang = $('#noiDung').val();
                var maNhanVien = $('#maNhanVien').val();
                var loaiBaiDang = $('#loaiBaiDang').val();

                $.ajax({
                    type: "post",
                    url: '?mode=post&act=create',
                    data: {
                        maBaiDang : maBaiDang,
                        tenBaiDang : tenBaiDang,
                        moTa : moTa,
                        noiDungBaiDang : noiDungBaiDang,
                        maNhanVien : maNhanVien,
                        loaiBaiDang : loaiBaiDang,
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
                                
                                $('#addPost').modal('hide');
                                var flag = $('.flag');
                                var html ='<tr id="post_'+data.maBaiDang+'">'+
                                    '<td>'+data.tenBaiDang+'</td>'+
                                    '<td>'+data.moTa+'</td>'+
                                    '<td>'+data.tenNhanVien+'</td>'+
                                    '<td>'+data.loaiBaiDang+'</td>'+
                                    '<td>'+data.ngayDang+'</td>'+
                                    '<td align="center">'+
                                    '<a style="width:100%" href="?mode=post&act=show&id='+data.maBaiDang+'" type="button" onclick="" class="btn btn-primary">'+
                                      'Xem'+
                                    '<a style="width:100%" href="javascript:;" type="button" onclick="alertEdit('+data.maBaiDang+')" class="btn btn-success">'+
                                      'Sửa'+
                                    '</a> '+
                                    '<a style="width:100%" href="javascript:;" type="button" onclick="alertDel('+data.maBaiDang+')" class="btn btn-warning">'+
                                      '<i class="fa fa-trash-o"></i> Xóa'+
                                    '</a>'+
                                    '</td>'+
                                  '</tr>';
                                //$(html).insertBefore(flag);
                                $(html).insertAfter(flag);
                                $('#addPost').modal('hide');
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
            var path = "?mode=post&act=delete&maBaiDang=" + id;
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
                                    $('#post_'+result.maCuonSach).remove();
                                    $('#post_'+result.maCuonSach).html("");
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

            $('#editBook').modal('show');

            $.ajax({
                type: "GET",
                url: "?mode=post&act=edit&id=" + id,
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
                        $('#editTenBaiDang').val(data.tenBaiDang);
                        $('#editMoTa').val(data.moTa);
                        $('#maNhanVien').val(data.maNhanVien);
                        $('#editLoaiBaiDang').val(data.loaiBaiDang);
                        $('#editNoiDung').val(data.noiDungBaiDang);
                    }
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    toastr.error(thrownError);
                }
            });

        };

        $(document).ready(function () {
            $('#UpdateBtn').click(function() {
                var maBaiDang = $('#editId').val();
                var maNhanVien = $('#maNhanVien').val();
                var moTa = $('#editMoTa').val();
                var noiDungBaiDang = $('#editNoiDung').val();
                var loaiBaiDang = $('#editLoaiBaiDang').val();

                $.ajax({
                    type: "post",
                    url: '?mode=post&act=update',
                    data: {
                        maBaiDang : maBaiDang,
                        maNhanVien : maNhanVien,
                        moTa : moTa,
                        noiDungBaiDang : noiDungBaiDang,
                        loaiBaiDang : loaiBaiDang,
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
                                $('#editBook').modal('hide');
                                var html ='<td>'+data.tenBaiDang+'</td>'+
                                    '<td>'+data.moTa+'</td>'+
                                    '<td>'+data.tenNhanVien+'</td>'+
                                    '<td>'+data.loaiBaiDang+'</td>'+
                                    '<td>'+data.ngayDang+'</td>'+
                                    '<td align="center">'+
                                    '<a style="width:100%" href="?mode=post&act=show&id='+data.maBaiDang+'" type="button" onclick="" class="btn btn-primary">'+
                                      'Xem'+
                                    '<a style="width:100%" href="javascript:;" type="button" onclick="alertEdit('+data.maBaiDang+')" class="btn btn-success">'+
                                      'Sửa'+
                                    '</a> '+
                                    '<a style="width:100%" href="javascript:;" type="button" onclick="alertDel('+data.maBaiDang+')" class="btn btn-warning">'+
                                      '<i class="fa fa-trash-o"></i> Xóa'+
                                    '</a>'+
                                    '</td>';
                                $('#post_'+data.maBaiDang).html(html);
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