
	<?php include_once dirname(__FILE__) .'/header.php'; ?> 
  <?php include_once dirname(__FILE__) .'/sidebar.php'; ?> 
	<div class="container" style="position: absolute;top:0;left:30%">	
	<h1>Add Course here </h1> 
	 <?php if($status=$this->session->flashdata('status')){?>
				 <div class="alert alert-success">
				 	<?php echo $status ?>
				 </div>					
				 <?php } ?> 
	<form class="form-inline" action="<?=base_url()?>index.php/institute/AdminController/insert_course" method="post">
		<input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
	  <label for="course">Course:</label>
	  <input type="text" class="form-control"  name="course">
	  
	  
	  <button type="submit" class="btn btn-primary">Add</button>
		 <span style="color:red"><?php echo form_error('course') ?></span> 
	</form>
	</div>
	</body>
	<html>


