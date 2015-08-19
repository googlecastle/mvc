

    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->
<br>
<style type="text/css">
  #topten{
   margin-top: -30px;   
  }



 input[type="text"],select,button,.yes {
 border-top-left-radius: 10px;
 border-top-right-radius: 10px;
      border-bottom-right-radius: 10px;
      border-bottom-left-radius: 10px;
      border:2px solid orange;

      margin: 0px;
}







a:hover{
  text-decoration:none;
}








</style>
  



<div class="row">

      <div class="col-md-9 " style="margin-left:150px;margin-top:10px;">



 <!--  <center><h1 style="margin:0;">Dewey Decimal System</h1></center> -->
<?php echo $this->id; 
     
$l=99; foreach ($this->record as $value): ?>
<?php  if ($l==899) {     ?>
         <div class="col-md-3" style="margin-left:250px;"> 
         <?php  
      }else{
        ?>
         <div class="col-md-3" style="margin:-8 -8 -8 -8px;padding-bottom:20px;"> 
         <?php       }
           

           ?>
    <?php $val=$value['d_id']; ?>
    <?php $val2=$value['did']; ?>
        <a href="<?php echo URL ?>selectcategory/view/<?php echo $value['d_id'] ?>/?id=<?php echo $this->id;?>">
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
        <p ><center><b> <?php echo $value['d_name']; ?></b></center></p> 
   
      <?php $g=$value['d_id']; ?>
        

      
      <center><p style="margin-top:-10px;"><span style="color:orange;"><b>Category(<?php echo dewey_model::countcategory($g); ?>)</b></span></p></center> 
   <center>
   
    </center>
     <!-- <p class="" style="width:50px;height:50px;background-color:red;">Add Category</p> -->
      
       
  
  </div>

</a>

 



 
      







                  </div> 
      
<?php $l=$l+100;  endforeach; ?>
      

</div>

















































</div>
</div>

      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->










