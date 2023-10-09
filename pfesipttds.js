function firmNameData(id){
			$.ajax({
				type:"post",
				url:"<?php echo base_url('Hrd002/department_data') ?>",
				data:{id:id},
				success: function(msg){
					$('#department').html(msg)
					$('#designation').html(`<option value="">Select Designation</option>`)
				}
			})
		}
		
		
		function depatNameData(dep_id){
			$.ajax({
				type:"post",
				url:"<?php echo base_url('Hrd002/designation_data') ?>",
				data:{dep_id:dep_id},
				success: function(msg){
					$('#designation').html(msg)
				}
			})
		}
