
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
    <?php  echo "<script> alert('Librarian Successfully Registered')  </script>";
       
     ?>
 
<?php endif ?>
 
<?php 
$dewey=addbook_model::getdewey($record);
$category=addbook_model::getcategory($record);
 ?>
 <br>
<div class="container">    
        
    <div id="loginbox" class="col-md-8 col-md-offset-1 col-sm-12 col-sm-offset-6"> 
       
        
        
        <div class="panel" style="border:1px solid orange;" >
            <div class="panel-heading" style="background-color:orange;">
                <div class="panel-title text-center" >Add Book here</div>
            </div>     

            <div class="panel-body" >

                <form name="form" action="<?php echo URL; ?>addbook/bookadd" method="POST" id="form" class="form-horizontal"  >
                    
                      <div class="input-group">
                        <span class="input-group-addon">DDC</span>
                        <input  type="text" disabled class="form-control" id="ddc" value="<?php echo $dewey['d_id']." ".$dewey['d_name']; ?>" placeholder="User">                                        
                    </div>


                    <div class="input-group">
                        <span class="input-group-addon">CATEGORY</span>
                        <input id="user" type="text" disabled class="form-control" name="category" id="demo"  placeholder="User" value="<?php echo $record." ".$category['cname']; ?>">                                        
                    </div>

                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-book"></i></span>
                        <input  type="text" class="form-control" name="title" placeholder="Title" required>
                    </div>                                                                  

                   

                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-book"></i></span>
                        <input  type="text" class="form-control" name="isbn" placeholder="ISBN" required>
                    </div>                                                                  

                  

                     <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-book"></i></span>
                        <input  type="text" class="form-control" name="publisher" placeholder="Publisher" required>
                    </div>   

                     <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-book"></i></span>
                        <input  type="text" class="form-control" name="edition" placeholder="Edition" required>
                    </div>                                                                  

                   

                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-book"></i></span>
                        <input  type="text" class="form-control" name="author" placeholder="Author" required>
                    </div>                                                                  

                   <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-book"></i></span>
                        <input  type="text" class="form-control" name="copies" placeholder="Copies" required>
                    </div>                                                                  


                     <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-book"></i></span>
                        <textarea class="form-control" required name="summary" placeholder="Note/Description"></textarea>
                    </div> 



                    <div class="form-group">
                        <!-- Button -->
                        <div class="col-sm-12 controls">
                            <input type="hidden" name="cid" value="<?php echo $record;?>">

                             <a href="<?php echo URL ?>category/view/<?php echo $dewey['d_id'] ?>" class="btn  pull-left yes" style="background-color:blue;color:white;"><i class="glyphicon glyphicon-arrow-left"></i> Back</a>

                            <button type="submit" class="btn pull-right" style="background-color:blue;color:white;"><i class="glyphicon glyphicon-log-in" ></i> Save</button>                          
                        </div>
                    </div>

                </form>     

            </div>                     
        </div>  
    </div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

