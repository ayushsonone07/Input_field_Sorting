<div class="col-md-2">
	<div class="form-group row">
		<select class="form-control Select2" name="firm_name" id="firm_name" onchange="firmNameData(this.value)">
			<option selected>Select Firm </option>
			<?php $this->Crud_model->FillDynamicCombo("SELECT misc_id,misc_name FROM `miscell_mst` WHERE `misc_type` LIKE 'firm' ORDER BY `misc_id` ASC","misc_id",'misc_name','');?>
		</select>
	</div>
</div>
<div class="col-md-2">
	<select id="department" name="department" class="form-control Select2" onchange="depatNameData(this.value)">
		<option value="">Select Departmennt</option>
	</select>
</div>
<div class="col-md-2">
	<div class="form-group row">
		<select class="form-control Select2" name="designation" id="designation">
			<option>Select Designation</option>
		</select>
	</div>
</div>
