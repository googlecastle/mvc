
<style type="text/css">
  
  input[type="text"],select {
 border-top-left-radius: 10px;
 border-top-right-radius: 10px;
      border-bottom-right-radius: 10px;
      border-bottom-left-radius: 10px;
      border:2px solid orange;

      margin: 0px;
}
</style>


<div style="margin-bottom:500px; margin-top:30px;" >
 <div class="col-sm-10" style="margin-left:90px;" >
 <center>
<form action="<?php echo URL; ?>result/view" method="POST" style="padding:0px;margin:0px;">
 
  <div class=" yes" style="padding:15px; background-color:#f2c777; border-top-left-radius: 10px;
 border-top-right-radius: 10px;
      border-bottom-right-radius: 10px;
      border-bottom-left-radius: 10px;">

      <input type="text" name="search" class="col-sm-5" style="height:45px; margin-right:5px; font:24px;" placeholder="Search" required>
        
        <select class="col-sm-3" style="height:45px; margin-right:5px; font:24px;">
  <option value="">All Books</option>
 
</select>

<select class="col-sm-3" style="height:45px; margin-right:5px; font:24px;" name="br">
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

    





  


  <div class="col-md-10" style="margin-left:90px;">
<?php $val=0; ?>





<table class=" col-md-12 table-hover1" id="dev-table">

 <tr><br>
               
                </tr>

<tbody>

<?php foreach ($record as $value):?>
 
 <tr>
        <td>
    <a href="category/index">
        <div class="col-md-12 thumbnail" >
         

          <div class="col-md-3" style="background-color:#f6f6f6;width:100px">

             <h2 style="height:110px;padding-top:40px;padding-left:10px;margin-top:0px;"><span style="color:orange;font-weight:bold;"><?php echo $value['bid']; ?></span></h2>

          </div>


             <?php $g=$value['bid']; ?>
             <?php $cid=$value['cid']; ?>
            <div class="col-md-10">
                  <h4>

                  <!-- <img src="<?php echo URL ?>assets/images/cirilo.jpg"  class="pull-left deweylogo" > -->
                  <a href="">
                       <?php echo $value['title']; ?></a>
                    </h4>
                    <span class="meta">  </span> 
                    <p class="location">
                      <i class="glyphicon glyphicon-book" style="color:blue;"></i>
                      Borrowed Books (<span style="color:orange;font-weight:bold;"><?php echo home_model::countbook("000"); ?></span>)
                   
                    </p>

                    <p class="location">
                      <i class="glyphicon glyphicon-book" style="color:blue;"></i>
                      Lost Books (<span style="color:orange;font-weight:bold;"><?php echo home_model::countbook($g); ?></span>)
                
                  


                    </p>
                    <p class="years-in">
                      <i class="glyphicon glyphicon-book" style="color:blue;"></i>
                      Available Books (<span style="color:orange;font-weight:bold;"><?php echo home_model::countbook($g); ?></span>)
                  
                  
                </p>



          </div>

        
      
      </div>

    </a>

 
</td>
</tr>

 <?php endforeach; ?>
</tbody>

      
</table>
 

 </div>





      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->























































<br>
<br>
<br>
<br>
