

    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing" >


  <div  style="padding:5px;; border-top-left-radius: 10px; border-top-right-radius: 10px; background-color:white;">
        <center>
        <h4 style="color:#87919F;">
      <i class="glyphicon glyphicon-search" style="color:#87919F;"></i> You can Search Category by Typing below 
     </h4>
        
    </center>

</div>
 <div style="padding:15px; background-color:#f2c777;
      border-bottom-right-radius: 10px;
      border-bottom-left-radius: 10px;">
   <input type="text" class="form-control yes" id="dev-table-filter" data-action="filter" data-filters="#dev-table" placeholder="Search" style="height:45px; margin-right:5px; font:24px;border:3px solid orange;"/>


</div>

<div class="row">

  


  <div class="col-md-12" >
<?php $val=0; ?>





<table class=" col-md-12 table-hover1" id="dev-table">

 <tr><br>
               
                </tr>

<tbody>

<?php foreach ($record as $value):?>
 
 <tr>
        <td>
    
        <div class="col-md-12 thumbnail yes"  style="margin-bottom:5px;">
         

          <div class="col-md-3 yes" style="background-color:#f6f6f6;width:100px;margin-top:5px;">

             <h2 style="padding-left:10px;margin-top:10px;"><span style="color:orange;font-weight:bold;"><?php echo $value['c_category']; ?></span></h2>

          </div>


             <?php $g=$value['c_category']; ?>
             <?php $cid=$value['cid']; ?>
            <div class="col-md-10">
                  <h4>

                  <!-- <img src="<?php echo URL ?>assets/images/cirilo.jpg"  class="pull-left deweylogo" > -->
                       <?php echo $value['cname']; ?>
                    </h4>
                    <span class="meta">  </span> 
                    

                    <p class="location">
                      <i class="glyphicon glyphicon-book" style="color:blue;"></i>
                      Total Books (<span style="color:orange;font-weight:bold;"><?php echo category_model::countbook($g); ?></span>)
                <a href="<?php echo URL ?>editcategory/view/<?php echo $cid ?>" class="btn btn-sm  pull-right yes" style="margin-top:-20px;background-color:blue;color:white;">Edit Category</a>
                <a href="<?php echo URL ?>addbook/view/<?php echo $g ?>" class="btn btn-sm pull-right yes" style="margin-right:5px;margin-top:-20px;background-color:blue;color:white;">Add books</a>
                
                <a href="<?php echo URL ?>book/view/<?php echo $value['c_category'] ?>" class="btn btn-sm pull-right yes" style="margin-right:5px;margin-top:-20px;background-color:blue;color:white;">View Available Books</a>
                  


                    </p>
                  



          </div>

        
      
      </div>


 
</td>
</tr>

 <?php endforeach; ?>
</tbody>

      
</table>
 

 </div>



</div>

      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->













