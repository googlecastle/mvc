
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
 
<?php foreach ($record as $value): ?>
    
    <?php

        $t=$value['cid'];

  
     ?>
<br>
<?php if (isset($_REQUEST['g'])==1): ?>
    <?php  echo "<script> alert('Book Information updated Successfully')  </script>";
       
     ?>
 
<?php endif ?>

<div class="container">    
        
    <div id="loginbox" class="col-md-8 col-md-offset-1 col-sm-12 col-sm-offset-6"> 
       
        
        
        <div class="panel" style="border:1px solid orange;" >
            <div class="panel-heading" style="background-color:orange;">
                <div class="panel-title text-center" >Edit Book Form</div>
            </div>     

            <div class="panel-body" >

                <form name="form" action="<?php echo URL?>editcategory/save" method="POST" id="form" class="form-horizontal"  >
                    
                      <div class="input-group">
                        <span class="input-group-addon">DDC</span>
                        <input  type="text" name="ddc" class="form-control" id="ddc" value="<?php echo $value['c_dewey']; ?>" placeholder="User">                                        
                    </div>


                    <div class="input-group">
                        <span class="input-group-addon">CATEGORY</span>
                        <input id="user" type="text"  class="form-control" name="category" id="demo"  placeholder="User" value="<?php echo $value['c_category']; ?>">                                        
                    </div>

                    <div class="input-group">
                        <span class="input-group-addon">Title</span>
                        <input  type="text" class="form-control" name="title" placeholder="Title" value="<?php echo $value['cname']; ?>">
                    </div>                     

                   

<br>

                    <div class="form-group">
                        <!-- Button -->
                        <div class="col-sm-12 controls">
                            <input type="hidden" name="cid" value="<?php echo $t;?>">
                            
                             <a href="<?php echo URL ?>category/view/<?php echo $value['c_dewey'] ?>" class="btn  pull-left yes" style="background-color:blue;color:white;"><i class="glyphicon glyphicon-arrow-left"></i> Back</a>
                        
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
