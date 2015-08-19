
    <style type="text/css">
      

#loginbox {
    margin-top: -20px;
    
}

#loginbox > div:first-child {        
    padding-bottom: 1px;    
    
}



#form > div {
    margin-bottom: 5px;
    
}

#form > div:last-child {
    margin-top: 5px;
    margin-bottom: 1px;
    
}

.panel {    
    background-color: transparent;
    
}

.panel-body {
    padding-top: 10px;
    background-color: rgba(2555,255,255,.3);

}



    </style>
 <?php if (isset($_REQUEST['g'])==1): ?>
    <?php  echo "<script> alert('Category Add Successfully')  </script>";
       
     ?>
 
<?php endif ?>


<?php foreach ($record as $value): ?>
    
    <?php

        $t=$value['d_id'];

  
     ?>
<br>


<div class="container">    
        
    <div id="loginbox" class="col-md-8 col-md-offset-1 col-sm-12 col-sm-offset-6"> 
       
        
        
        <div class="panel" style="border:1px solid orange;" >
            <div class="panel-heading" style="background-color:orange;">
                <div class="panel-title text-center" >Category Form</div>
            </div>     

            <div class="panel-body" >

                <form name="form" action="<?php echo URL?>addcategory/addcat" method="POST" id="form" class="form-horizontal"  >
                    
                      <div class="input-group">
                        <span class="input-group-addon">DDC</span>
                        <input  type="text" name="ddc2" class="form-control" id="ddc" value="<?php echo $value['d_id']." ". $value['d_name'];?>" placeholder="User" required>                                        
                    </div>


                    <div class="input-group">
                        <span class="input-group-addon">CATEGORY</span>
                        <input id="user" type="text"  class="form-control" name="category" id="demo"  placeholder="Category Number" required>                                        
                    </div>

                    <div class="input-group">
                        <span class="input-group-addon">Title</span>
                        <input  type="text" class="form-control" name="title" placeholder="Category Title" >
                    </div>                     

                   

<br>

                    <div class="form-group">
                        <!-- Button -->
                        <div class="col-sm-12 controls">
                            <input type="hidden" name="ddc" value="<?php echo $t;?>">
                        


                             <a href="<?php echo URL ?>home" class="btn  pull-left yes" style="background-color:blue;color:white;"><i class="glyphicon glyphicon-arrow-left"></i> Back</a>

                            <button  class="btn btn-primary pull-right"><i class="glyphicon glyphicon-log-in"></i> Save</button>
                        </div>
                    </div>

                </form>     

            </div>                     
        </div>  
    </div>
</div>

<?php endforeach ?>
<br>
