
<style type="text/css">
  
  input[type="text"],input[type="password"],select,button,.yes {
 border-top-left-radius: 10px;
 border-top-right-radius: 10px;
      border-bottom-right-radius: 10px;
      border-bottom-left-radius: 10px;
      border:2px solid orange;

      margin: 0px;
}
.banned2{
    width:60px;
    height: 60px;
    }
</style>

<?php if (isset($_REQUEST['g'])==1): ?>
    <?php  echo "<script> alert('Wrong Username and Password')  </script>";
       
     ?>
 
<?php endif ?>

 <div class="col-sm-12" style="margin-top:100px;">


 <div class="col-sm-12">
 <div class="col-sm-2">
</div> 

 
  <div class="col-sm-8" style="padding:15px; background-color:#f2c777; border-top-left-radius: 10px;
 border-top-right-radius: 10px;">



      <div class="col-sm-2">
        <img src="<?php echo URL?>assets/images/cirilo.jpg" class="banned2 img-circle pull-right">

      </div> 


<div class="col-sm-8">

<center>
        <h2 style="color:green;">
      <i class="glyphicon glyphicon-save" style="color:green;"></i>Signin 
     </h2>
    
    </center>


</div> 



<div class="col-sm-2">
        <img src="<?php echo URL?>assets/images/cirilo.jpg" class="banned2 img-circle pull-left">

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
 border-bottom-right-radius: 10px; border:2px solid #f2c777;">
<center>
    <p style="    color: #87919F;
    line-height: 24px;">Enter You Userame and Password</p>

      <div class="col-sm-2">
      </div> 


<div class="col-sm-8">
<form name="form" id="form" class="form-horizontal" action="<?php echo URL; ?>login/validate" method="POST">

      <p>
      <input type="text" name="username" class="form-control" style="height:45px;font:24px;" placeholder="Username " required> 
        
      </p>
      <p>
      <input type="password" name="password" class="form-control" style="height:45px;font:24px;" placeholder="Password" required> 
        
      </p>

      <p>
      <div class="col-sm-8" style="margin-left:100px;">
      <center>
      <button type="submit" class="btn btn-warning btn-block warning" style="height:45px; font:24px;">Signin</button>
      </center>
      </div> 
        
      </p>

</form>

</div> 



<div class="col-sm-2">
</div> 

</center>

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
