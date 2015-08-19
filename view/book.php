

    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing" >



<div class="row">

  

<div class="col-md-3 " >
</div>
  <div class="col-md-9" >

 <!--  <center><h1 style="margin:0;">Dewey Decimal System</h1></center> -->
<?php foreach ($record as $value): ?>
 
    <?php $val=$value['d_id']; ?>
        <a href="<?php echo URL ?>category/delete/<?php echo $value['d_id'] ?>">
    <div class="col-md-3" style="height:205px;">
    <div class="thumbnail">
      <!-- <img data-src="holder.js/100%x100" alt="..."> -->
      <!-- <img src="<?php echo URL ?>assets/images/cirilo.jpg"  class="deweylogo" > -->
      <div class="caption">
       <center><h2 style="background-color:#f6f6f6;width:120px;height:100px;padding-top:30px;margin-top:0px;"><span style="color:orange;font-weight:bold;"><?php echo $value['d_id']; ?></span></h2></center> 
        <p><center><?php echo $value['d_name']; ?></center></p>
      <?php $g=$value['d_id']; ?>
        

      
        <center><p><span style="color:orange;">Category(<?php echo Session::counthis($g); ?>)</span></p></center>
        <center> <p></p></center>
       
    </div>
  </div>
</div>
</a>

 



 <?php endforeach; ?>
      

 

 </div>



</div>

      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->
