<style type="text/css">

    .glyphicon {  margin-bottom: 10px;margin-right: 10px;}

    small {
    display: block;
    line-height: 1.428571429;
    color: #999;
    }


  
  input[type="text"],select,button,.yes {
 border-top-left-radius: 10px;
 border-top-right-radius: 10px;
      border-bottom-right-radius: 10px;
      border-bottom-left-radius: 10px;
      border:2px solid orange;

      margin: 0px;
}


  .no {
 border-top-left-radius: 10px;
 border-top-right-radius: 10px;
      border-bottom-right-radius: 10px;
      border-bottom-left-radius: 10px;
      border:2px solid orange;
      background-color: blue;
      
      
}






/*
    orange
*/


.orange-circle-button {
  box-shadow: 2px 4px 0 2px rgba(0,0,0,0.1);
  border: .5em solid #E84D0E;
  font-size: 1em;
  line-height: 1.1em;
  color: #ffffff;
  background-color: #e84d0e;
  margin: auto;
  border-radius: 50%;
  height: 7em;
  width: 7em;
  position: relative;
}
.orange-circle-button:hover {
  color:#ffffff;
    background-color: #e84d0e;
  text-decoration: none;
  border-color: #ff7536;
  
}
.orange-circle-button:visited {
  color:#ffffff;
    background-color: #e84d0e;
  text-decoration: none;
  
}
.orange-circle-link-greater-than {
    font-size: 1em;
}

.table-hover1 tr:hover { 

  background-color: skyblue;
  


}
tr th.visible {
    visibility: visible
}

    </style>

<!--<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">-->
<link href="<?php echo URL?>assets/css/font_awesome.css" rel="stylesheet">


<?php if (isset($_REQUEST['g'])==1): ?>
    <?php  echo "<script> alert('Student Successfully Registered')  </script>";
       
     ?>

<?php endif ?>


  <div class="col-md-12" >
    
 <!--  <center><h1 style="margin:0;">Dewey Decimal System</h1></center> -->



        <div class="col-md-1 ">
        

        </div>



<!--------------------------   Browse button     --------------------------------- -->



<div class="col-md-10 " >
        
  







 <div class="col-sm-12" >
  

 
  <div class="col-sm-12" style="padding:5px; background-color:#f2c777; border-top-left-radius: 10px;
 border-top-right-radius: 10px;" style="border:1px solid orange;">



      <div class="col-sm-2">
      </div> 


<div class="col-sm-8 ">

<center> <h3 style="color:green;" ><i class="glyphicon glyphicon-user" style="color:green;"></i>Student List</h3  >
        
     




 


</div> 



<div class="col-sm-2">
</div> 
</div>




</div>
<!-- --------------------------------------------------------------------------- -->



<!-- -----------------------------------Button add edit delete----------------------------------------- -->




<div class="col-sm-12">
  

 
  <div class="col-sm-12  " style="padding:3px; background-color:green;">



      






<div class="col-sm-12 " style="padding:5px;">
<div class="col-sm-2 "></div>
<center>
<div class="col-sm-8 ">
   <input type="text" class="form-control yes" id="dev-table-filter" data-action="filter" data-filters="#dev-table" placeholder="Search By Name, Student Number, Year, Section " style="height:45px; margin-right:5px; font:24px;border:3px solid orange;"/>
</div>
<!-- <a href="<?php echo URL; ?>addstudent/view" class="btn btn-warning pull-right "  data-toggle="tooltip" title="Add Student" style="text-decoration:none;"><center><i class="glyphicon glyphicon-plus" style="color:black;"></i></center></a> -->
 </center>
   </div>






 
</div>




</div>





<!-- --------------------------------------------------------------------------- -->














 <div class="col-sm-12">

 

 
  <div class="col-sm-12" style="padding:15px; background-color:white; border-bottom-left-radius: 10px;
 border-bottom-right-radius: 10px; border:2px solid #f2c777;">
<center>
<!-- <div class="col-sm-12 " style="border:2px solid orange;background-color:pink">
<h5 class="pull-left" style=" margin-left:-10px;"><b>Id</b></h5>
<h5 class="pull-left" style=" margin-left:80px;"><b>Student Name</b></h5>
<h5 class="pull-left" style=" margin-left:92px;"><b>Year</b></h5>
<h5 class="pull-left" style=" margin-left:120px;"><b>Section</b></h5>
<h5 class="pull-left" style=" margin-left:108px;"><b>Contact</b></h5>
<h5 class="pull-left" style=" margin-left:108px;"><b>Address</b></h5>
</div> -->
<table class="table table-condensed table-hover1 yes" id="dev-table">

       <tr>
                            <TH>ID</TH>
                            <TH>NAME</TH>
                            <TH>YEAR</TH>
                            <TH>SECTION</TH>
                            <TH>CONTACT</TH>
                            <TH>ADDRESS</TH>
                            <TH>ACTION</TH>
       </tr>
                                <?php foreach ($record as $key): ?>
                                  
                                    
  <tr class="yes" >
                                    
                                    <td ><?php echo $key['sid'];?></td>
                                    <td ><?php echo $key['name'];?></td>
                                      <td ><?php echo $key['year'];?></td>
                                      <td  ><?php echo $key['section'];?></td>
                                      <td  ><?php echo $key['contact'];?></td>
                                      <td  ><?php echo $key['address'];?></td>
                                      <td  ><a href="">EDIT</a></td>
                                      
                                      
                                    </tr>


                                <?php endforeach ?>
                                




</table>




</center>

</div>


<!-- --------------------------------------------------------------------------- -->


    







</div>

























        </div>




<!--------------------------   Browse button   End  --------------------------------- -->

       

   <div class="col-md-1 ">
        

        </div>

 </div>





<script type="text/javascript">

</script>
