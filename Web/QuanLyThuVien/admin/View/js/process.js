$('#ThemMoi').click(function(){
	    		var id = $('#id').val();
		        var name = $('#name').val();
		        var mobile = $('#mobile').val();
		        var email = $('#email').val();
		        var password = $('#password').val();
		        var gender = 1;
		        if($('#gender').val() == "male")
		        	gender = 1;
		        else
		        	gender = 0;
		        var birthday = $('#birthday').val();
		        var address = $('#address').val();
		        
		        $.ajax({
          			type: "post",
          			url: '?mode=user&act=create',
	          		data: {
	          			id : id,
	            		name : name,
	            		mobile : mobile,
	            		email : email,
	            		password : password,
	            		gender : gender,
	            		birthday : birthday,
	            		address : address,
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
				                data.gender = (data.gender ==1)?'Nam':'Nữ';
				                $('#addUser').modal('hide');
				                var flag = $('.flag');
				                var html ='<tr id="user_'+data.id+'">'+
				                    '<td align="center">'+data.id+'</td>'+
				                    '<td>'+data.name+'</td>'+
				                    '<td>'+data.email+'</td>'+
				                    '<td>'+data.mobile+'</td>'+
				                    '<td align="center">'+data.gender+'</td>'+
				                    '<td align="center">'+data.birthday+'</td>'+
				                    '<td align="center">'+data.address+'</td>'+
				                    '<td align="center">'+
				                    '<a style="width:100%" href="?mode=user&act=show&id='+data.id+'" type="button" onclick="" class="btn btn-primary">'+
				                      'Xem'+
				                    '<a style="width:100%" href="?mode=user&act=edit&id='+data.id+'" type="button" onclick="" class="btn btn-success">'+
				                      'Sửa'+
				                    '</a> '+
				                    '<a style="width:100%" href="javascript:;" type="button" onclick="alertDel('+data.id+')" class="btn btn-warning">'+
				                      '<i class="fa fa-trash-o"></i> Xóa'+
				                    '</a>'+
				                    '</td>'+
				                  '</tr>';
				                $(html).insertAfter(flag);
				                toastr.success('Thêm mới thành công!', 'Nafosted',{timeOut: 1000});
			              	}else{
			                	toastr.error('Thêm mới không thành công!', 'Nafosted',{timeOut: 1000})
			              	}
			            } else {
			              toastr.error('Error', 'Nafosted-Error',{timeOut: 1000})
			            }
	          		},
	          		error: function (xhr, ajaxOptions, thrownError) {
	            		toastr.error('Error', 'Nafosted-Error',{timeOut: 1000})

	          		}
        		});
      		}),
		    function alertDel(id){
	      		var path = "?mod=user&act=delete&id=" + id;
	      		swal({
	        		title: "Bạn có chắc muốn xóa?",
	        		type: "warning",
	        		showCancelButton: true,
	        		confirmButtonColor: "#DD6B55",
	        		cancelButtonText: "Không",
	        		confirmButtonText: "Có",
	        	});
	        	$.ajax({
	            		type: "POST",
	            		url: path,
	            		success: function(res)
	              		{
	                		console.log(res);
	                		if(!res.error) {
	                  		toastr.success('Xóa thành công!');
	                  		$('#user_'+id).remove();
	                  		
	                	}
		              	},
		              	error: function (xhr, ajaxOptions, thrownError) {
		                	toastr.error(thrownError);
		              	}
	            	});
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
		                  			$('#user_'+result.id).remove();
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