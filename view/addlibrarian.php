
<style type="text/css">
  
  input[type="text"],input[type="password"],input[type="tel"],select,button,.yes {
 border-top-left-radius: 10px;
 border-top-right-radius: 10px;
      border-bottom-right-radius: 10px;
      border-bottom-left-radius: 10px;
      border:2px solid orange;

      margin: 0px;
}
</style>
  
<?php if (isset($_REQUEST['g'])==1): ?>
    <?php  echo "<script> alert('Librarian Successfully Registered')  </script>";
       
     ?>
 
<?php endif ?>
 <div class="col-sm-12" style="margin-top:10px;">


 <div class="col-sm-12">
 <div class="col-sm-2">
</div> 

 
  <div class="col-sm-8" style="padding:15px; background-color:#f2c777; border-top-left-radius: 10px;
 border-top-right-radius: 10px;">



      <div class="col-sm-2">
      </div> 


<div class="col-sm-8">

<center>
        <h4 style="color:white;">
      <i class="glyphicon glyphicon-plus" style="color:white;"></i> Add Librarian
     </h4>
    
    </center>


</div> 



<div class="col-sm-2">
</div> 
</div>


<!-- --------------------------------------------------------------------------- -->



















    


<div class="col-sm-2">
</div>




</div>






















 <div class="col-sm-12">

 <div class="col-sm-2">
</div> 

 
  <div class="col-sm-8" style="padding:15px; background-color:white; border-bottom-left-radius: 10px;
 border-bottom-right-radius: 10px;border:2px solid #f2c777;">


      <div class="col-sm-2">
      </div> 




<div class="col-sm-8">


<form class="form-horizontal" role="form" action="<?php echo URL; ?>addlibrarian/add" method="POST" enctype="multipart/form-data">






  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">FullName</label>
    <div class="col-sm-9"> 
      <input type="text" class="form-control" id="inputEmail3" placeholder="FullName" name="name" required>
    </div>
  </div>

  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Position</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="inputPassword3" placeholder="Position"  name="position" required>
    </div>
  </div>


  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Contact Number</label>
    <div class="col-sm-9">
      <input type="tel" class="form-control" id="inputEmail3" placeholder="Contact Number"  name="number" required>
    </div>
  </div>

  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Address</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="inputPassword3" placeholder="Address"  name="address"required>
    </div>
  </div>





  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">UserName</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="inputEmail3" placeholder="UserName"  name="user" required>
    </div>
  </div>

  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
    <div class="col-sm-9">
      <input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="pass" required>
    </div>
  </div>


  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Image</label>
    <div class="col-sm-9">

<input type="file" class="form-control yes"   name="fileToUpload" id="fileToUpload" required>

    </div>
  </div>




    <div class="col-sm-8" style="margin-left:100px;">
      <center>
      <button type="submit" class="btn btn-warning btn-lg warning" style="height:45px; font:24px;">Submit</button>
      </center>
      </div>
</form>



















</div> 



<div class="col-sm-2">
</div> 



</div>


<!-- --------------------------------------------------------------------------- -->


    


<div class="col-sm-2">
</div>




</div>









</div>
<br>




<br>
<br>
<br>
<br>
