	public function department_data(){
		$firmname_id  = $_POST['id'];
		 $departmentdata  = $this->Common_model->find_query_all("SELECT hrmst.deptm_id,hrmst.deptm_name FROM `hr_department` hrdep 
										 LEFT JOIN miscell_mst mismst on mismst.misc_id = hrdep.`dep_firm` 
										 LEFT JOIN hr_deptmst hrmst on hrmst.deptm_id = hrdep.dep_depmid 
										 WHERE misc_id =?",array($firmname_id));	
				echo "<option value=''>Select department </option>";
				foreach($departmentdata as $depat){
				?>
				<option value="<?php echo $depat['deptm_id']; ?>"><?php echo $depat['deptm_name']; ?></option>
				<?php
				}

	public function designation_data(){
		$depatment_id  = $_POST['dep_id'];
		// echo $depatment_id;
		 $desinationdata  = $this->Common_model->find_query_all("SELECT deptm_id,deptm_name,dmst_id,dmst_name
									FROM `hr_deptmst` d
									LEFT JOIN hr_designation des ON d.deptm_id=des.dsgn_depid
									LEFT JOIN hr_designmst dm ON des.dsgn_desigid = dm.dmst_id
									where `deptm_id`=?",array($depatment_id));
																
					// echo $this->db->last_query();
					// die;
					echo "<option value=''>Select designation </option>";
						foreach($desinationdata as $desig){
						?>
						<option value="<?php echo $desig['dmst_id']; ?>"><?php echo $desig['dmst_name']; ?></option>
						<?php
						}	
