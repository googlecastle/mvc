
<style type="text/css">
  
  .yes {
 border-top-left-radius: 10px;
 border-top-right-radius: 10px;
      border-bottom-right-radius: 10px;
      border-bottom-left-radius: 10px;
      border:2px solid orange;

  
}


a:hover{
  text-decoration:none;
}

</style>


<div style="margin-bottom:500px; margin-top:40px;" >
 <div class="col-sm-10" style="margin-left:90px;" >
 <center>
<form action="<?php echo URL; ?>result/view" method="POST" style="padding:0px;margin:0px;">
 
  <div class=" yes" style="padding:15px; background-color:#f2c777; border-top-left-radius: 10px;
 border-top-right-radius: 10px;
      border-bottom-right-radius: 10px;
      border-bottom-left-radius: 10px;">

      <input type="text" name="search" class="col-sm-5 yes" style="height:45px; margin-right:5px; font:24px;border:3px solid orange;" placeholder="Search" required>
        
        <select class="col-sm-3 yes" style="height:45px; margin-right:5px; font:24px;">
  <option value="">All Books</option>
 
</select>

<select class="col-sm-3 yes" style="height:45px; margin-right:5px; font:24px;" name="br">
  <option value="title">Search Title only</option>
  <option value="author">Search Author</option>
  <option value="isbn">Search ISBN</option>

</select>

      <button type="submit" class="btn btn-warning btn-large warning" style="height:45px; margin-left:0px; font:24px;">Search</button>






    </div>


</form>
</center>

</div>

<br>











    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    


    <!-- Second    ================================================== -->



  <div class="col-md-9 " style="margin-left:150px;margin-top:30px;">



 <!--  <center><h1 style="margin:0;">Dewey Decimal System</h1></center> -->
<?php $l=99; foreach ($this->record as $value): ?>
<?php  if ($l==899) {     ?>
         <div class="col-md-3" style="margin-left:245px;"> 
         <?php  
      }else{
        ?>
         <div class="col-md-3" style="margin:-8 -8 -8 -8px; padding-bottom:20px;"> 
         <?php       }
           

           ?>
    <?php $val=$value['d_id']; ?>
    <?php $val2=$value['did']; ?>
        <a href="<?php echo URL ?>category/view/<?php echo $value['d_id'] ?>">
    <div class="thumbnail gta yes" >
      <!-- <img data-src="holder.js/100%x100" alt="..."> -->
      <!-- <img src="<?php echo URL ?>assets/images/cirilo.jpg"  class="deweylogo" > -->
     
        <?php if ($l==99): ?>
        
       <span class="drown">
       <center><h4 style="background-color:#f6f6f6;width:100px;height:30px;padding-top:5px;margin-top:5px;" class="yes"><span style="color:orange;font-weight:bold;" ><?php echo $value['d_id']."-0".$l; ?></span></h4></center> 
          <?php else: ?>
       <center><h4 style="background-color:#f6f6f6;width:100px;height:30px;padding-top:5px;margin-top:5px;" class="yes"><span style="color:orange;font-weight:bold;"><?php echo $value['d_id']."-".$l; ?></span></h4></center> 
          </span>
          
        <?php endif ?>
        <p ><center><?php echo $value['d_name']; ?></center></p> 
   
      <?php $g=$value['d_id']; ?>
        

      
      <center><p style="margin-top:-10px;"><span style="color:orange;"><b>Category(<?php echo home_model::countcategory($g); ?>)</b></span></p></center> 
   <center>
  <p ><a href="<?php echo URL ?>addcategory/view/<?php echo $val ?>" style="background-color:blue;color:white;" class=" img-circle btn  yes" role="button">Add Category</a> </p> 
   
    </center>
     <!-- <p class="" style="width:50px;height:50px;background-color:red;">Add Category</p> -->
      
       
  
  </div>

</a>

 



 
      







                  </div> 
      
<?php $l=$l+100;  endforeach; ?>
      

</div>

   <!-- Third    ================================================== -->



















      <!-- fourth    ================================================== -->

      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->























































<br>
<br>
<br>
<br>
