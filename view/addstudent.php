
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
    <?php  echo "<script> alert('Student Successfully Registered')  </script>";
       
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
      <i class="glyphicon glyphicon-plus" style="color:white;"></i> Add Student
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


<form class="form-horizontal" role="form" action="<?php echo URL; ?>addstudent/add" method="POST">







  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Student Number</label>
    <div class="col-sm-9"> 
      <input type="text" class="form-control" id="inputEmail3" placeholder="Student Number" name="st" required>
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">FullName</label>
    <div class="col-sm-9"> 
      <input type="text" class="form-control" id="inputEmail3" placeholder="FullName" name="name" required>
    </div>
  </div>

  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Year</label>
    <div class="col-sm-9 ">
      <input type="text" class="form-control" id="inputPassword3" placeholder="Year"  name="year" required>
    </div>
  </div>


  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Section</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="inputEmail3" placeholder="Section"  name="section" required>
    </div>
  </div>

  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Contact</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="inputPassword3" placeholder="Contact"  name="contact"required>
    </div>
  </div>





  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">address</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="inputEmail3" placeholder="address"  name="address" required>
    </div>
  </div>




    <div class="col-sm-8" style="margin-left:100px;">
      <center>
      <button type="submit" class="btn btn-warning btn-lg warning" style="height:45px; font:24px;">Add Student</button>
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
