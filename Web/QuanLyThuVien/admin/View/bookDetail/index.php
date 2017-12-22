<?php 
	include_once('View/layouts/Header.php');
?>
	<div class="table-responsive">
		<table id="table" class="table table-hover" width="100%">
			<thead>
				<tr>
					<th colspan="8">
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addBook">
							Thêm mới
						</button>
					</th>
				</tr>
				<tr class="flag">
					<th>Mã cuốn sách</th>
                    <th>Tên sách</th>
					<th>Ảnh bìa</th>
					<th>Giá bìa</th>
					<th>Năm xuất bản</th>
                    <th>Tình trạng</th>
                    <th>Vị trí</th>
                    <th>Ghi chú</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				<?php 
                    $i = 0;
					foreach ($data as $key => $value) {
					$i++;
				 ?>
				<tr id="book_<?php echo $value['maCuonSach']; ?>">
                    <td><?php echo $value['maCuonSach']; ?></td>
                    <td><?php echo $quyenSach['tenQuyenSach']; ?></td>
					<td><img src="<?php echo $quyenSach['url']; ?>" width="100px" height="100px"></td>
					<td><?php echo $value['giaBia']; ?></td>
					<td><?php echo $value['namXuatBan']; ?></td>
					<td><?php echo $value['tinhTrang']; ?></td>
                    <td><?php echo $value['viTri']; ?></td>
                    <td><?php echo $value['ghiChu']; ?></td>
					<td>
						<a href="?mode=bookDetail&act=show&id=<?php echo $value['maCuonSach']; ?>" class="btn btn-primary" style="width:100%; margin:1%">Xem</a>
						<a href="javascript:;" class="btn btn-success" onclick="alertEdit(<?php echo $value['maCuonSach']; ?>)" style="width:100%; margin:1%">Sửa</a>
						<a href="javascript:;" class="btn btn-danger" onclick="alertDel(<?php echo $value['maCuonSach']; ?>)"  style="width:100%; margin:1%">Xóa</a>
					</td>
				</tr>
				<?php 
				} ?>
			</tbody>
		</table>
	</div>

	<!-- Modal -->
	<div class="modal fade" id="addBook" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  		<div class="modal-dialog" role="document">
    		<div class="modal-content">
      			<div class="modal-header">
        			<h5 class="modal-title" id="exampleModalLongTitle">Thêm mới sách</h5>
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          				<span aria-hidden="true">&times;</span>
        			</button>
      			</div>
      			<div class="modal-body col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1">
        			<form action="" method="POST" class="form-horizontal" role="form" enctype=”multipart/form-data”>
                        <div class="form-group">
                            <input type="hidden" readonly="true" class="form-control" name="maQuyenSach" id="maQuyenSach" value="<?php echo $quyenSach['maQuyenSach']; ?>">
                        </div>
    					<div class="form-group">
    						<label>Tên sách <span style="color: red">*</span></label>
    						<input type="text" class="form-control" name="tenCuonSach" id="tenCuonSach" placeholder="Tên sách" value="<?php echo $quyenSach['tenQuyenSach']; ?>">
    					</div>

                        <div class="form-group">
                            <label>Ảnh bìa <span style="color: red">*</span></label>
                            <input type="file" class="form-control" name="file" id="file">
                        </div>

    					<div class="form-group">
    						<label>Giá bìa <span style="color: red">*</span></label>
    						<input type="txt" class="form-control" name="giaBia" id="giaBia" placeholder="Giá bìa của sách" required="true">
    					</div>

    					<div class="form-group">
    						<label>Năm xuất bản <span style="color: red">*</span></label>
    						<input type="txt" class="form-control" name="namXuatBan" id="namXuatBan" placeholder="Năm xuất bản" required="true">
    					</div>

    					<div class="form-group">
    						<label>Tình trạng</label><br>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="tinhTrang" id="tinhTrang" value="0" checked="checked">
                                    Chưa mượn
                                </label>
                                <label>
                                    <input type="radio" name="tinhTrang" id="tinhTrang" value="1">
                                    Đã mượn
                                </label>
                            </div>
    					</div>
                        <div class="form-group">
                            <label>Vị trí <span style="color: red">*</span></label><br>
                            <input type="txt" class="form-control" name="viTri" id="viTri" placeholder="Vị trí sách" required="true">
                        </div>
                        <div class="form-group">
                            <label>Ghi chú (Nếu có)</label><br>
                            <input type="txt" class="form-control" name="ghiChu" id="ghiChu" placeholder="Ghi chú" required="true">
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
        			<form action="" method="POST" class="form-horizontal" role="form">
                        <div class="form-group">
                            <input type="text" class="form-control" name="editId" id="editId">
                        </div>
                        <div class="form-group">
                            <label>Tên sách <span style="color: red">*</span></label>
                            <input type="text" class="form-control" name="editTenCuonSach" id="editTenCuonSach" placeholder="Tên sách">
                        </div>
                        <div class="form-group">
                            <label>Ảnh bìa <span style="color: red">*</span></label>
                            <input type="file" class="form-control" name="editFile" id="editFile">
                        </div>

                        <div class="form-group">
                            <label>Giá bìa <span style="color: red">*</span></label>
                            <input type="txt" class="form-control" name="editGiaBia" id="editGiaBia" placeholder="Giá bìa của sách" required="true">
                        </div>

                        <div class="form-group">
                            <label>Năm xuất bản <span style="color: red">*</span></label>
                            <input type="txt" class="form-control" name="editNamXuatBan" id="editNamXuatBan" placeholder="Năm xuất bản" required="true">
                        </div>

                        <div class="form-group">
                            <label>Tình trạng</label><br>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="editTinhTrang" id="editTinhTrang" value="0" checked="checked">
                                    Chưa mượn
                                </label>
                                <label>
                                    <input type="radio" name="editTinhTrang" id="editTinhTrang" value="1">
                                    Đã mượn
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Vị trí <span style="color: red">*</span></label><br>
                            <input type="txt" class="form-control" name="editViTri" id="editViTri" placeholder="Vị trí sách" required="true">
                        </div>
                        <div class="form-group">
                            <label>Ghi chú (Nếu có)</label><br>
                            <input type="txt" class="form-control" name="editGhiChu" id="editGhiChu" placeholder="Ghi chú" required="true">
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
                var maCuonSach = 'NULL';
                var maQuyenSach = $('#maQuyenSach').val();
                var tenCuonSach = $('#tenCuonSach').val();
                var url = $('#file').files[0];
                var giaBia = $('#giaBia').val();
                var namXuatBan = $('#namXuatBan').val();
                var tinhTrang = $('#tinhTrang').val();
                var viTri = $('#viTri').val();
                var ghiChu = $('#ghiChu').val();

                $.ajax({
                    type: "post",
                    url: '?mode=bookDetail&act=create',
                    data: {
                        maCuonSach : maCuonSach,
                        maQuyenSach : maQuyenSach,
                        tenCuonSach : tenCuonSach,
                        url : url,
                        giaBia : giaBia,
                        namXuatBan : namXuatBan,
                        tinhTrang : tinhTrang,
                        viTri : viTri,
                        ghiChu : ghiChu,
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
                                
                                $('#addBook').modal('hide');
                                var flag = $('.flag');
                                var html ='<tr id="book_'+data.maCuonSach+'">'+
                                    '<td>'+data.maCuonSach+'</td>'+
                                    '<td>'+data.tenCuonSach+'</td>'+
                                    '<td><img src ="'+data.url+'" width="100px" height="100px"/></td>'+
                                    '<td>'+data.giaBia+'</td>'+
                                    '<td>'+data.namXuatBan+'</td>'+
                                    '<td>'+data.tinhTrang+'</td>'+
                                    '<td>'+data.viTri+'</td>'+
                                    '<td>'+data.ghiChu+'</td>'+
                                    '<td align="center">'+
                                    '<a style="width:100%" href="?mode=bookDetail&act=show&id='+data.maCuonSach+'" type="button" onclick="" class="btn btn-primary">'+
                                      'Xem'+
                                    '<a style="width:100%" href="javascript:;" type="button" onclick="alertEdit('+data.maCuonSach+')" class="btn btn-success">'+
                                      'Sửa'+
                                    '</a> '+
                                    '<a style="width:100%" href="javascript:;" type="button" onclick="alertDel('+data.maCuonSach+')" class="btn btn-warning">'+
                                      '<i class="fa fa-trash-o"></i> Xóa'+
                                    '</a>'+
                                    '</td>'+
                                  '</tr>';
                                //$(html).insertBefore(flag);
                                $(html).insertAfter(flag);
                                $('#addBook').modal('hide');
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
            var path = "?mode=bookDetail&act=delete&maCuonSach=" + id;
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
                                    $('#book_'+result.maCuonSach).remove();
                                    $('#book_'+result.maCuonSach).html("");
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
                url: "?mode=bookDetail&act=edit&id=" + id,
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
                        $('#editId').val(data.maCuonSach);
                        $('#editTenCuonSach').val(data.tenCuonSach);
                        $('#editGiaBia').val(data.giaBia);
                        $('#editNamXuatBan').val(data.namXuatBan);
                        $('#editTinhTrang').val(data.tinhTrang);
                        $('#editViTri').val(data.viTri);
                        $('#editGhiChu').val(data.ghiChu);
                    }
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    toastr.error(thrownError);
                }
            });

        };

        $(document).ready(function () {
            $('#UpdateBtn').click(function() {
                var maCuonSach = $('#editId').val();
                var maQuyenSach = $('#maQuyenSach').val();
                var url = $('#editFile').files[0];
                var tenCuonSach = $('#editTenCuonSach').val();
                var giaBia = $('#editGiaBia').val();
                var namXuatBan = $('#editNamXuatBan').val();
                var tinhTrang = $('#editTinhTrang').val();
                var viTri = $('#editViTri').val();
                var ghiChu = $('#editGhiChu').val();

                $.ajax({
                    type: "post",
                    url: '?mode=bookDetail&act=update',
                    data: {
                        maCuonSach : maCuonSach,
                        maQuyenSach : maQuyenSach,
                        url : url,
                        tenCuonSach : tenCuonSach,
                        giaBia : giaBia,
                        namXuatBan : namXuatBan,
                        tinhTrang : tinhTrang,
                        viTri : viTri,
                        ghiChu : ghiChu,
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
                                var html ='<td>'+data.maCuonSach+'</td>'+
                                    '<td>'+data.tenCuonSach+'</td>'+
                                    '<td><img src ="'+data.url+'" width="100px" height="100px"/></td>'+
                                    '<td>'+data.giaBia+'</td>'+
                                    '<td>'+data.namXuatBan+'</td>'+
                                    '<td>'+data.tinhTrang+'</td>'+
                                    '<td>'+data.viTri+'</td>'+
                                    '<td>'+data.ghiChu+'</td>'+
                                    '<td align="center">'+
                                    '<a style="width:100%" href="?mode=bookDetail&act=show&id='+data.maCuonSach+'" type="button" onclick="" class="btn btn-primary">'+
                                      'Xem'+
                                    '<a style="width:100%" href="javascript:;" type="button" onclick="alertEdit('+data.maCuonSach+')" class="btn btn-success">'+
                                      'Sửa'+
                                    '</a> '+
                                    '<a style="width:100%" href="javascript:;" type="button" onclick="alertDel('+data.maCuonSach+')" class="btn btn-warning">'+
                                      '<i class="fa fa-trash-o"></i> Xóa'+
                                    '</a>'+
                                    '</td>';
                                $('#book_'+data.maCuonSach).html(html);
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