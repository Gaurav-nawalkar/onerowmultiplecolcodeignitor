<?php $this->load->view('templates/header'); ?>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
<?php
$this->load->view('templates/navbar');
$this->load->view('templates/sidebar');
?>
    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Service</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
<!--table Start -->

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header" style="background-color: #3972b8;">
            <h6 class="card-title"><font color="white"><b>Add Service Documents</b></font></h6>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
        
</head>
<body>

<div class="container">
 
<form method="post" enctype="multipart/form-data">
    <div class="form-group row">
     
     <div class="col-xs-3" style="    margin-left: 28px;">
        <label for="ex1">Service Name</label>
        <select class="form-control" name="sd_service_id" id="ex1" type="text" required="" style="width: 600px;">
          <option value="">Select</option>
            <?php
                if(!empty($ser_dropdrown_document))
                {
                foreach($ser_dropdrown_document as $record)
                {
                 ?>
          <option value="<?php echo $record->ser_id ;?>"><?php echo $record->ser_name;?></option>
        
      <?php }} ?>
        </select>  
      </div>

</div>
    
  <div class="form-group row">
  <div class="col-xs-3" style="    margin-left: 28px;">
        <label for="ex1">Document Name</label>
        <select class="form-control" name="document_id" id="ex2" type="text" required="" style="width: 600px;">
          <option value="">Select</option>
            <?php
                if(!empty($documentmaster_dropdrown))
                {
                foreach($documentmaster_dropdrown as $documentmaster_dropdrown)
                {
                 ?>
          <option value="<?php echo $documentmaster_dropdrown->dm_id;?>"><?php echo $documentmaster_dropdrown->dm_name;?></option>
        
      <?php }} ?>
        </select>  
      </div>

 </div>

  <div class="form-group row">
      <div class="col-xs-3" style="    margin-left: 28px;">
        <label for="ex3"></label></br>
        <input type="submit" class="btn btn-primary" id="ex2" name="save" value="Submit">
      </div>
      
    </div>



  </form>
</div>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
</section>












<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header" style="background-color: #3972b8;">
            <h6 class="card-title"><font color="white"><b>Service Wise Document Required</b></font></h6>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
              <tr>
               
           
                <th>Service Name</th>
                <th>Document</th>
               
               
              </tr>
              </thead>
              <tbody>
                <?php
                if(!empty($service_document_details))
                {
                foreach($service_document_details as $record)
                {
                 ?>



               </div>
                <tr>
                 
            
                
                  <td><?php echo $record->ser_name;?> </td>

                  <?php 

                  $sd_service_id=$record->sd_service_id;       



$data['service_wise_document'] = $this->LP_model->service_wise_document($sd_service_id);


                if(!empty($service_wise_document))
                {
                foreach($service_wise_document as $record)
                {

                  ?>
                  <td><?php echo $record->dm_name;?></td>
              
                 
                </tr>
              <?php }} ?>

                <?php }} ?>
              </tbody>
             
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- table ends -->
  </div>
  <!-- /.content-wrapper -->
<?php $this->load->view('templates/foot');?>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<?php $this->load->view('templates/footer'); ?>
<script>
$(function () {
  bsCustomFileInput.init();
});
</script>
