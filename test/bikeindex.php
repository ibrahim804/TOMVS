<html>
 <head>
  <title>BIKE</title>
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
    .tableinfo{
        color:white;
    }
    label{
        color: black;
    }
    body{
        background-color:black;
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
   <h1 align="center" style="color:white;">BIKE ADD REMOVE UPDATE</h1>
   <br />
   <div class="table-responsive">
    <br />
    <div align="right">
     <button type="button" id="add_button" data-toggle="modal" data-target="#bikeModal" class="btn btn-info btn-lg">Add</button>
    </div>
    <br /><br />
    
<!--
<div class="row">
<div class="col-sm-6">
    <div class="dataTables_length" id="car_data_length">
    <label>Show
     <select name="car_data_length" aria-controls="car_data" class="form-control input-sm">
        <option value="5">5</option>
        <option value="10">10</option>
        <option value="15">15</option>
        <option value="20">20</option>
     </select> entries
    </label>
</div>
</div>
<div class="col-sm-6">
    <div id="car_data_filter" class="dataTables_filter">
    <label>Search:<input class="form-control input-sm" placeholder="" aria-controls="car_data" type="search">
    </label>
    </div>
</div>
</div>-->

    <table id="bike_data" class="table table-bordered table-default" style="color:white;">
     <thead>
      <tr>
       <th width="30%" class = "tableinfo">Image</th>
       <th width="8%" class = "tableinfo">Brand Name</th>
       <th width="8%" class = "tableinfo">Model</th>
       <th width="8%" class = "tableinfo">Original Buying date</th>
       <th width="8%" class = "tableinfo">fuel</th>
       <th width="8%" class = "tableinfo">capacity</th>
       <th width="8%" class = "tableinfo">price_condition</th>
       <th width="8%" class = "tableinfo">color</th>
       <th width="8%" class = "tableinfo">status</th>
       <th width="8%" class = "tableinfo">Price</th>
       <th width="8%" class = "tableinfo">Edit</th>
       <th width="8%" class = "tableinfo">Delete</th>
      </tr>
     </thead>
    </table>
    
   </div>
  </div>
  

<div id="bikeModal" class="modal fade">
 <div class="modal-dialog">
  <form method="post" id="bike_form" enctype="multipart/form-data">
   <div class="modal-content">
    <div class="modal-header">
     <button type="button" class="close" data-dismiss="modal">&times;</button>
     <h4 class="modal-title">Add Bike</h4>
    </div>
    <div class="modal-body">
     <label style="color:black;">Enter Brand Name</label>
     <input type="text" name="brand_name" id="brand_name" class="form-control"/>
     <br />
     <label style="color:black;">Enter Model Name</label>
     <input type="text" name="model_name" id="model_name" class="form-control" />
     <br />

     <label style="color:black;">Enter Original Buying Year </label>
     <input type="date" name="oby" id="oby" class="form-control" />
     <br />

     <label style="color:black;">Enter Type of Fuel(CNG,OCTEL,DIESEL etc.)</label>
     <input type="text" name="fuel" id="fuel" class="form-control" />
     <br />

     <label style="color:black;">Enter Engine capacity</label>
     <input type="number" name="capacity" id="capacity" class="form-control" />
     <br />     

     <label style="color:black;">Enter price condition(negotiable/fixed)</label>
     <input type="text" name="price_condition" id="price_condition" class="form-control" />
     <br /> 

     <label style="color:black;">Enter Color of The Bike</label>
     <input type="text" name="color" id="color" class="form-control" />
     <br /> 

     <label style="color:black;">Enter Remaining Status of The Bike(true/false)</label>
     <input type="text" name="status" id="status" class="form-control" />
     <br /> 

     <label style="color:black;">Enter Price</label>
     <input type="number" name="price" id="price" class="form-control" />
     <br />
     <label style="color:black;">Select Bike Image</label>
     <input type="file" name="bike_image" id="bike_image" />
     <span id="bike_uploaded_image"></span>
    </div>
    <div class="modal-footer">
     <input type="hidden" name="bike_id" id="bike_id" />
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
  $('#bike_form')[0].reset();
  $('.modal-title').text("Add Bike");
  $('#action').val("Add");
  $('#operation').val("Add");
  $('#bike_uploaded_image').html('');
 });
 
 var dataTable = $('#bike_data').DataTable({
  "processing":true,
  "serverSide":true,
  "order":[],
  "ajax":{
   url:"bikefetch.php",
   type:"POST"
  },
  "columnDefs":[
   {
    "targets":[0, 10, 11],
    "orderable":false,
   },
  ],

 });

 $(document).on('submit', '#bike_form', function(event){
  event.preventDefault();
  var brandName = $('#brand_name').val();
  var model_name = $('#model_name').val();
  var oby = $('#oby').val();
  var fuel = $('#fuel').val();
  var capacity = $('#capacity').val();
  var price_condition = $('#price_condition').val();
  var color = $('#color').val();
  var status = $('#status').val();
  var price = $('#price').val();
  var extension = $('#bike_image').val().split('.').pop().toLowerCase();
  if(extension != '')
  {
   if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)
   {
    alert("Invalid Image File");
    $('#car_image').val('');
    return false;
   }
  } 
  if(brandName != '' && price != '' && model_name !='' && oby != '' && status != '' && price_condition!='')
  {
   $.ajax({
    url:"bikeinsert.php",
    method:'POST',
    data:new FormData(this),
    contentType:false,
    processData:false,
    success:function(data)
    {
     alert(data);
     $('#bike_form')[0].reset();
     $('#bikeModal').modal('hide');
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
  var bike_id = $(this).attr("id");
  $.ajax({
   url:"bikefetch_single.php",
   method:"POST",
   data:{bike_id:bike_id},
   dataType:"json",
   success:function(data)
   {
    $('#bikeModal').modal('show');
    $('#brand_name').val(data.brand_name);
    $('#model_name').val(data.model_name);
    $('#oby').val(data.oby);
    $('#fuel').val(data.fuel);
    $('#capacity').val(data.capacity);
    $('#price_condition').val(data.price_condition);
    $('#color').val(data.color);
    $('#status').val(data.status);
    $('#price').val(data.price);
    $('.modal-title').text("Edit Bike");
    $('#bike_id').val(bike_id);
    $('#bike_uploaded_image').html(data.bike_image);
    $('#action').val("Edit");
    $('#operation').val("Edit");
   }
  })
 });
 
 $(document).on('click', '.delete', function(){
  var bike_id = $(this).attr("id");
  if(confirm("Are you sure you want to delete this?"))
  {
   $.ajax({
    url:"bikedelete.php",
    method:"POST",
    data:{bike_id:bike_id},
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




   
    