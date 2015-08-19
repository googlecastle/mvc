

    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

  





    <div class="container marketing" >



<div class="row">

  <div class="col-md-12" >
    <?php  if (empty($record )): ?>
        <center><h2>No books available</h2></center>
      <?php else: ?>
    


<?php $val=0; ?>

  <div  style="padding:5px;; border-top-left-radius: 10px; border-top-right-radius: 10px; background-color:white;      ">
        <center>
        <h4 style="color:#87919F;">
      <i class="glyphicon glyphicon-search" style="color:#87919F;"></i> You can Search Books by Typing below 
     </h4>
        
    </center>

</div>
 <div style="padding:15px; background-color:#f2c777;
      border-bottom-right-radius: 10px;
      border-bottom-left-radius: 10px;">
   <input type="text" class="form-control yes" id="dev-table-filter" data-action="filter" data-filters="#dev-table" placeholder="Search" style="height:45px; margin-right:5px; font:24px;border:3px solid orange;"/>


</div>




<table class=" col-md-12 table-hover1" id="dev-table" >

 <tr><br>
               
                </tr>

<tbody>

<?php foreach ($record as $value):?>


 
 <tr>
        <td>
 
    
      
    <div class="col-md-12 thumbnail yes" style="margin-bottom:5px;">
    

      <div class="col-md-1 yes" style="background-color:#f6f6f6;">

       <h4 style="height:120px;padding-top:50px;padding-left: 5px;margin-top:0px;"><span style="color:orange;font-weight:bold;"><?php echo $value['cid'].".".$value['bid']; ?></span></h4>

      </div>

   <?php $g=$value['cid']; ?>
  <div class="col-md-11"  style="background-color:#f6f6f6;">
        <h4>

          <!-- <img src="<?php echo URL ?>assets/images/cirilo.jpg"  class="pull-left deweylogo" > -->
          <i class="glyphicon glyphicon-book" style="color:gray;"></i>  <?php echo $value['title']; ?>       

          
        </h4>

        <div class="col-md-6">

          
       
          <span style="color:gray;"><span style="color:blue;font-weight:bold">Author: </span><?php echo book_model::getauthor($value['author']); ?></span><br>
         <span style="color:gray;"><span style="color:blue;font-weight:bold">ISBN: </span><?php echo $value['isbn']; ?></span> <br>
           <span style="color:gray;"><span style="color:blue;font-weight:bold;">Publisher:</span> <?php echo $value['publisher']; ?></span><br> 
           
          <span style="color:gray;"><span style="color:blue;font-weight:bold;">Edition:</span> <?php echo $value['edition']; ?></span>
          

       

        </div>


        <div class="col-md-3" >
        <span style="color:gray;"><span style="color:orange;"><b>Available copies: </b></span> <?php echo book_model::countbookavailable($value['bid'])-book_model::countbookborrow($value['bid']); ?></span><br>

           <span  style="color:gray;"> <span style="color:orange;"><b>Lost copies: </b></span> <?php echo $value['available']; ?></span><br>

          <span style="color:gray;"><span style="color:orange;"><b>Borrowed copies: </b> </span><?php echo $value['available']; ?></span>
       


        </div>

        <div class="col-md-3" style="" >
      
        <p>
    
          <a href="<?php echo URL ?>edit/view/<?php echo $value['bid'] ?>" class="btn btn-lg yes " style="margin-right:5px;background-color:blue;color:white;">Edit Book</a>

     <!--     <button id="editbutton" class="btn btn-sm btn-primary  ">Edit Books</button> -->
          
          













        </p>



        </div>

        <div class="col-md-12" >
         
        <span style="color:gray;"><span style="color:blue;font-weight:bold;">Summary: </span><?php echo $value['summary']; ?></span>

       
        </div>

        <!-- col md 11  -->
        </div>



        </div>





































<div id="l" style="display:none;">
  <p>show me here</p>
</div> 

 



</td>
</tr>



<script>
   $("#editbutton").click(function(){
              
           $("#l").show();       
        
    });
</script>



 <?php endforeach; ?>
</tbody>

      
</table>
      

 
<?php endif ?>




 </div>















      </div>
</div>

      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->



