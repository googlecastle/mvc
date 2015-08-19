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

    </style>

<!--<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">-->
<link href="<?php echo URL?>assets/css/font_awesome.css" rel="stylesheet">







  <div class="col-md-12" >
    
 <!--  <center><h1 style="margin:0;">Dewey Decimal System</h1></center> -->



        <div class="col-md-3 ">
        











        <?php  if (empty($record )): ?>
        <center><h2>No books available</h2></center>
     <?php endif ?>
            <div class="thumbnail yes ">
                <div class="row">
<?php 
        foreach ($record as $key => $value) { ?>
  

                    <div class="col-sm-5 col-md-4 ">


                        <img src="<?php echo URL?>assets/images/default_profile_female.jpg" alt="" class="img-rounded img-responsive" />
                    </div>
                    <div class="col-sm-6 col-md-8">
                        <h4><?php echo $value['name']; ?></h4>
                        
                        <p>
                        <i class="glyphicon glyphicon-user"> Stud.Number:</i><?php echo $value['sid']; ?>
                            <br />
                            <i class="glyphicon glyphicon-user"> Year:</i><?php echo $value['year']; ?>
                            <br />
                            <i class="glyphicon glyphicon-user"> Section:</i><?php echo $value['section']; ?>
                                                     
                            <br />
                            <i class="glyphicon glyphicon-gift"> Contact</i><?php echo $value['contact']; ?>
                             <small><cite title="San Francisco, USA"><?php echo $value['address']; ?> <i class="glyphicon glyphicon-map-marker">
                        </i></cite></small></p>

                        <!-- Split button -->
                  
                    </div>

                 
                </div>
            </div>
        </div>



<!--------------------------   Browse button     --------------------------------- -->



<div class="col-md-9 ">
        
  




 <div class="col-sm-12">


 <div class="col-sm-12">
  

 
  <div class="col-sm-12" style="padding:15px; background-color:#f2c777; border-top-left-radius: 10px;
 border-top-right-radius: 10px;">



      <div class="col-sm-2">
      </div> 


<div class="col-sm-8 ">

<center>
<div class="col-sm-2"></div>
<div class="col-sm-8 no">
<a  href="<?php echo URL?>dewey/index/<?php echo $value['sid'] ?>" class="btn btn-large">
        <h4 style="color:white;" >
      <i class="glyphicon glyphicon-save" style="color:white;"></i> BROWSE BOOK HERE <i class="glyphicon glyphicon-hdd" style="color:white;"></i>
     </h4>
        
        </a>
        </div>




   <?php  } ?>
<div class="col-sm-2"></div>

    </center>


</div> 



<div class="col-sm-2">
</div> 
</div>


<!-- --------------------------------------------------------------------------- -->



















    






</div>






















 <div class="col-sm-12">

 

 
  <div class="col-sm-12" style="padding:15px; background-color:white; border-bottom-left-radius: 10px;
 border-bottom-right-radius: 10px;">
<center>
    
<table class="table table-condensed table-hover1 yes">

        <tr class="yes">
                                      <th class="active ">BOOKID</th>
                                        <th class="success ">BOOK TITLE</th>
                                        <th class="warning " style="margin-right:150px;">BORROWED</th>
                                        <th class="danger ">Date To Be RETURNED</th>
                                        <th class="danger ">FINES</th>
                                        <th class="info " >ACTION</th>
        </tr>
                                <?php foreach ($record2 as $key): ?>
                                  
                                    
  <tr class="yes" >
                                    
                                    <td ><?php echo $key['bid'];?></td>
                                    <td ><?php echo $key['title'];?></td>
                                      <td ><?php echo $key['date'];?></td>
                                      <td  ><?php echo $key['datereturn'];?></td>

                                      <td  ><?php 
                                                    date_default_timezone_set('Asia/Manila'); 
                                                    $dat = date('Y-m-d H:i:s');
                                                    $fines = $dat - $key['date'];
                                                  //echo $fines;








                                                    //  $q = new DateTime('2015-08-16 10:00:00');

                                                    $now = new DateTime();
                                                    $then = new DateTime($key['datereturn']);
                                                    echo $minutes = $now->diff($then)->h;

                                                   // $return1 = date('Y-m-d h:i:s A', $fine);




                                                  ?>
                                      </td>
                                      <td  >
                                     <a href="<?php echo URL ?>borrowerform/returnbook/<?php echo $key['brid']; ?>/?id=<?php echo $_REQUEST['search']; ?>"  type="button" data-toggle="tooltip" data-placement="left" title="Return Book"><b>RETURN </b></a>
                                    
                                     </td> 

                                      
                                      
                                    </tr>


                                <?php endforeach ?>
                                




</table>




</center>

</div>


<!-- --------------------------------------------------------------------------- -->


    







</div>









</div>
















        </div>




<!--------------------------   Browse button   End  --------------------------------- -->

       

 

 </div>





<script type="text/javascript">

</script>
