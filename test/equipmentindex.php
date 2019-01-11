<html>
 <head>
  <title>EQUIPMENT</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>  
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link rel="shortcut icon" type="image/ico" href="icon5.png"/>       
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="global.css">
  <link rel="stylesheet" href="forgot_password.css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800" rel="stylesheet">
  <link href="about.css" rel="stylesheet" type="text/css"/>
        
  <style>
    label{
        color: white;
    }
  </style>


 </head>
 <body>
 <nav class="navbar navbar-inverse">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">
                        <img src="icon5.png" alt="" style="width: 70px;position: relative;top: -25px;float: left;" />
                        <h1 style="font-size: 30px;float: left;margin-top: 0px;margin-left: 5px;font-weight: bold;">TOMVS</h1>
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="signup.html" style="border-left: none;">Sign up</a></li>
                        <li><a href="login.html" >Login</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-dot-circle-o" aria-hidden="true"></i>
                                <i class="fa fa-dot-circle-o" aria-hidden="true"></i>
                                <i class="fa fa-dot-circle-o" aria-hidden="true"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href=""><i class="fa fa-caret-square-o-down" aria-hidden="true"></i> About us</a></li>
                                <li><a href=""><i class="fa fa-envelope-o" aria-hidden="true"></i> Contact us</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>





  <div class="container box">
   <h1 align="center" style="color:white;">EQUIPMENT ADD REMOVE UPDATE</h1>
   <br />
   <div class="table-responsive">
    <br />
    <div align="right">
     <button type="button" id="add_button" data-toggle="modal" data-target="#equipmentModal" class="btn btn-info btn-lg">Add</button>
    </div>
    <br /><br />


    <table id="equipment_data" class="table table-bordered table-default" style="color:white;">
     <thead>
      <tr>
       <th width="32%" style="color:white;">Image/ছবি </th>
       <th width="8%" style="color:white;">equip_Name</th>
       <th width="8%" style="color:white;">quantity</th>
       <th width="8%" style="color:white;">unit_price</th>
       <th width="8%" style="color:white;">price_condition</th>
       <th width="8%" style="color:white;">status</th>
       <th width="8%" style="color:white;">date</th>
       <th width="8%" style="color:white;">time</th>
       <th width="8%" style="color:white;">Edit</th>
       <th width="8%" style="color:white;">Delete</th>
      </tr>
     </thead>
    </table>
    
   </div>
  </div>
  

<div id="equipmentModal" class="modal fade">
 <div class="modal-dialog">
  <form method="post" id="equipment_form" enctype="multipart/form-data">
   <div class="modal-content">
    <div class="modal-header">
     <button type="button" class="close" data-dismiss="modal">&times;</button>
     <h4 class="modal-title">Add Equipment</h4>
    </div>
    <div class="modal-body">
     <label style="color:black;">Enter Equipment Name</label>
     <input type="text" name="equipment_name" id="equipment_name" class="form-control"/>
     <br />
     <label style="color:black;">Enter Equipment Quantity</label>
     <input type="number" name="quantity" id="quantity" class="form-control" />
     <br />

     <label style="color:black;">Enter Unit Price of Equipment </label>
     <input type="number" name="unit_price" id="unit_price" class="form-control" />
     <br />     

     <label style="color:black;">Enter price condition(negotiable/fixed)</label>
     <input type="text" name="price_condition" id="price_condition" class="form-control" />
     <br /> 

     <label style="color:black;">Enter Remaining Status of The Equipment(true/false)</label>
     <input type="text" name="status" id="status" class="form-control" />
     <br /> 

     <label style="color:black;">Enter Buying date</label>
     <input type="date" name="date" id="date" class="form-control" />
     <br />

    <label style="color:black;">Enter Buying time</label>
     <input type="time" name="time" id="time" class="form-control" />
     <br />

     <label style="color:black;">Select Equipment Image</label>
     <input type="file" name="equipment_image" id="equipment_image" />
     <span id="equipment_uploaded_image"></span>
    </div>
    <div class="modal-footer">
     <input type="hidden" name="equipment_id" id="equipment_id" />
     <input type="hidden" name="operation" id="operation" />
     <input type="submit" name="action" id="action" class="btn btn-success" value="Add" />
     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
   </div>
  </form>
 </div>
</div>





<script type="text/javascript" language="javascript" >
$(document).ready(function(){
 $('#add_button').click(function(){
  $('#equipment_form')[0].reset();
  $('.modal-title').text("Add Equipment");
  $('#action').val("Add");
  $('#operation').val("Add");
  $('#equipment_uploaded_image').html('');
 });
 
 var dataTable = $('#equipment_data').DataTable({
  "processing":true,
  "serverSide":true,
  "order":[],
  "ajax":{
   url:"equipmentfetch.php",
   type:"POST"
  },
  "columnDefs":[
   {
    "targets":[0, 8, 9],
    "orderable":false,
   },
  ],

 });

 $(document).on('submit', '#equipment_form', function(event){
  event.preventDefault();
  var equipment_name = $('#equipment_name').val();
  var quantity = $('#quantity').val();
  var unit_price = $('#unit_price').val();
  var price_condition = $('#price_condition').val();
  var status = $('#status').val();
  var price = $('#date').val();
  var price = $('#time').val();
  var extension = $('#equipment_image').val().split('.').pop().toLowerCase();
  if(extension != '')
  {
   if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)
   {
    alert("Invalid Image File");
    $('#equipment_image').val('');
    return false;
   }
  } 
  if(equipment_name != '' && quantity != '' && unit_price !='' && date != '' && time != '' && price_condition!='')
  {
   $.ajax({
    url:"equipmentinsert.php",
    method:'POST',
    data:new FormData(this),
    contentType:false,
    processData:false,
    success:function(data)
    {
     alert(data);
     $('#equipment_form')[0].reset();
     $('#equipmentModal').modal('hide');
     dataTable.ajax.reload();
    }
   });
  }
  else
  {
   alert("All Fields are Required");
  }
 });
 
 $(document).on('click', '.update', function(){
  var equipment_id = $(this).attr("id");
  $.ajax({
   url:"equipmentfetch_single.php",
   method:"POST",
   data:{equipment_id:equipment_id},
   dataType:"json",
   success:function(data)
   {
    $('#equipmentModal').modal('show');
    $('#equipment_name').val(data.equipment_name);
    $('#quantity').val(data.quantity);
    $('#unit_price').val(data.unit_price);
    $('#price_condition').val(data.price_condition);
    $('#status').val(data.status);
    $('#date').val(data.date);
    $('#time').val(data.time);
    $('.modal-title').text("Edit Equipment Info");
    $('#equipment_id').val(equipment_id);
    $('#equipment_uploaded_image').html(data.equipment_image);
    $('#action').val("Edit");
    $('#operation').val("Edit");
   }
  })
 });
 
 $(document).on('click', '.delete', function(){
  var equipment_id = $(this).attr("id");
  if(confirm("Are you sure you want to delete this?"))
  {
   $.ajax({
    url:"equipmentdelete.php",
    method:"POST",
    data:{equipment_id:equipment_id},
    success:function(data)
    {
     alert(data);
     dataTable.ajax.reload();
    }
   });
  }
  else
  {
   return false; 
  }
 });
 
 
});
</script>

</body>
</html>




   
    