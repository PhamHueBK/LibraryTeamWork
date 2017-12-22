<?php 
	include_once('View/layouts/Header.php');
?>
	<div class="table-responsive">
		<table id="table" class="table table-hover" width="100%">
			<thead>
				<tr>
					<th colspan="7">
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addBook">
							Thêm mới
						</button>
					</th>
				</tr>
				<tr class="flag">
					<th>Mã sách</th>
					<th>Tên sách</th>
					<th>Nhà xuất bản</th>
					<th>Tác giả</th>
					<th>Mô tả</th>
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
				<tr id="book_<?php echo $value['maQuyenSach']; ?>">
                    <td><?php echo $value['maQuyenSach']; ?></td>
					<td><?php echo $value['tenQuyenSach']; ?></td>
					<td><?php echo $value['nhaXuatBan']; ?></td>
					<td><?php echo $value['tacGia']; ?></td>
					<td><?php echo $value['moTa']; ?></td>
                    <td><?php echo $value['ghiChu']; ?></td>
					<td>
						<a href="?mode=book&act=show&id=<?php echo $value['maQuyenSach']; ?>" class="btn btn-primary" style="width:100%; margin:1%">Xem</a>
						<a href="javascript:;" class="btn btn-success" onclick="alertEdit(<?php echo $value['maQuyenSach']; ?>)" style="width:100%; margin:1%">Sửa</a>
						<a href="javascript:;" class="btn btn-danger" onclick="alertDel(<?php echo $value['maQuyenSach']; ?>)"  style="width:100%; margin:1%">Xóa</a>
                        <a href="?mode=bookDetail&act=index&maQuyenSach=<?php echo $value['maQuyenSach']; ?>" class="btn btn-primary" style="width:100%; margin:1%">Thêm chi tiết đầu sách</a>
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
        			<h5 class="modal-title" id="exampleModalLongTitle">Thêm mới đầu sách</h5>
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          				<span aria-hidden="true">&times;</span>
        			</button>
      			</div>
      			<div class="modal-body col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1">
        			<form action="" method="POST" class="form-horizontal" role="form">
    					<div class="form-group">
    						<label>Tên sách <span style="color: red">*</span></label>
    						<input type="text" class="form-control" name="tenQuyenSach" id="tenQuyenSach" placeholder="Tên sách">
    					</div>

    					<div class="form-group">
    						<label>Nhà xuất bản <span style="color: red">*</span></label>
    						<input type="txt" class="form-control" name="nhaXuatBan" id="nhaXuatBan" placeholder="Nhà xuất bản" required="true">
    					</div>

    					<div class="form-group">
    						<label>Tác giả <span style="color: red">*</span></label>
    						<input type="txt" class="form-control" name="tacGia" id="tacGia" placeholder="Tác giả" required="true">
    					</div>

    					<div class="form-group">
    						<label>Mô tả</label><br>
                            <textarea cols="60" rows="10" class="form-group" name="moTa" id="moTa" placeholder="Mô tả"></textarea>
    					</div>

                        <div class="form-group">
                            <label>Ghi chú (Nếu có)</label><br>
                            <textarea cols="60" rows="10" class="form-group" name="ghiChu" id="ghiChu" placeholder="Ghi chú"></textarea>
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
        			<h5 class="modal-title" id="exampleModalLongTitle">Cập nhật thông tin đầu sách</h5>
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
        						<label>Tên sách <span style="color: red">*</span></label>
        						<input type="text" class="form-control" id="editTenQuyenSach" placeholder="Tên đầu sách" required="true">
        					</div>

        					<div class="form-group">
        						<label>Nhà xuất bản <span style="color: red">*</span></label>
        						<input type="txt" class="form-control" id="editNhaXuatBan" placeholder="Nhà xuất bản" required="true">
        					</div>

        					<div class="form-group">
        						<label>Tác giả  <span style="color: red">*</span></label>
        						<input type="txt" class="form-control" id="editTacGia" placeholder="Tác giả" required="true">
        					</div>

        					<div class="form-group">
        						<label>Mô tả</label>
        						<textarea cols="60" rows="10" class="form-group" name="editMoTa" id="editMoTa" placeholder="Mô tả"></textarea>
        					</div>
                            <div class="form-group">
                                <label>Ghi chú</label>
                                <textarea cols="60" rows="10" class="form-group" name="editGhiChu" id="editGhiChu" placeholder="Ghi chú"></textarea>
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
                var maQuyenSach = 'NULL';
                var tenQuyenSach = $('#tenQuyenSach').val();
                var nhaXuatBan = $('#nhaXuatBan').val();
                var tacGia = $('#tacGia').val();
                var moTa = $('#moTa').val();
                var ghiChu = $('#ghiChu').val();

                $.ajax({
                    type: "post",
                    url: '?mode=book&act=create',
                    data: {
                        maQuyenSach : maQuyenSach,
                        tenQuyenSach : tenQuyenSach,
                        nhaXuatBan : nhaXuatBan,
                        tacGia : tacGia,
                        moTa : moTa,
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
                                var html ='<tr id="book_'+data.maQuyenSach+'">'+
                                    '<td>'+data.maQuyenSach+'</td>'+
                                    '<td>'+data.tenQuyenSach+'</td>'+
                                    '<td>'+data.nhaXuatBan+'</td>'+
                                    '<td>'+data.tacGia+'</td>'+
                                    '<td>'+data.moTa+'</td>'+
                                    '<td>'+data.ghiChu+'</td>'+
                                    '<td align="center">'+
                                    '<a style="width:100%" href="?mode=book&act=show&id='+data.maQuyenSach+'" type="button" onclick="" class="btn btn-primary">'+
                                      'Xem'+
                                    '<a style="width:100%" href="javascript:;" type="button" onclick="alertEdit('+data.maQuyenSach+')" class="btn btn-success">'+
                                      'Sửa'+
                                    '</a> '+
                                    '<a style="width:100%" href="javascript:;" type="button" onclick="alertDel('+data.maQuyenSach+')" class="btn btn-warning">'+
                                      '<i class="fa fa-trash-o"></i> Xóa'+
                                    '</a>'+
                                    '<a href="?mode=bookDetail&act=index&maQuyenSach='+data.maQuyenSach+'" class="btn btn-primary" style="width:100%; margin:1%">Thêm chi tiết đầu sách</a>'+
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
            var path = "?mode=book&act=delete&maQuyenSach=" + id;
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
                                    $('#book_'+result.maQuyenSach).remove();
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
                url: "?mode=book&act=edit&id=" + id,
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
                        $('#editId').val(data.maQuyenSach);
                        $('#editTenQuyenSach').val(data.tenQuyenSach);
                        $('#editNhaXuatBan').val(data.nhaXuatBan);
                        $('#editMoTa').val(data.moTa);
                        $('#editTacGia').val(data.tacGia);
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
                var maQuyenSach = $('#editId').val();
                var tenQuyenSach = $('#editTenQuyenSach').val();
                var nhaXuatBan = $('#editNhaXuatBan').val();
                var tacGia = $('#editTacGia').val();
                var moTa = $('#editMoTa').val();
                var ghiChu = $('#editGhiChu').val();

                $.ajax({
                    type: "post",
                    url: '?mode=book&act=update',
                    data: {
                        maQuyenSach : maQuyenSach,
                        tenQuyenSach : tenQuyenSach,
                        nhaXuatBan : nhaXuatBan,
                        tacGia : tacGia,
                        moTa : moTa,
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
                                var html ='<td>'+data.maQuyenSach+'</td>'+
                                    '<td>'+data.tenQuyenSach+'</td>'+
                                    '<td>'+data.nhaXuatBan+'</td>'+
                                    '<td>'+data.tacGia+'</td>'+
                                    '<td>'+data.moTa+'</td>'+
                                    '<td>'+data.ghiChu+'</td>'+
                                    '<td align="center">'+
                                    '<a style="width:100%" href="?mode=book&act=show&id='+data.maQuyenSach+'" type="button" onclick="" class="btn btn-primary">'+
                                      'Xem'+
                                    '<a style="width:100%" href="javascript:;" type="button" onclick="alertEdit('+data.maQuyenSach+')" class="btn btn-success">'+
                                      'Sửa'+
                                    '</a> '+
                                    '<a style="width:100%" href="javascript:;" type="button" onclick="alertDel('+data.maQuyenSach+')" class="btn btn-warning">'+
                                      '<i class="fa fa-trash-o"></i> Xóa'+
                                    '</a>'+
                                    '<a href="?mode=bookDetail&act=index&maQuyenSach='+data.maQuyenSach+'" class="btn btn-primary" style="width:100%; margin:1%">Thêm chi tiết đầu sách</a>'+
                                    '</td>';
                                $('#book_'+data.maQuyenSach).html(html);
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