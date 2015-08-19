
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
    <?php  echo "<script> alert('Book Information Successfully Updated')  </script>";
       
     ?>
 
<?php endif ?>
<?php foreach ($record as $value): ?>
    
    <?php

        $t=$value['cid'];
        $id=$value['bid'];
        $aut=$value['author'];
     $dewey=edit_model::dewey($t); 
     $aut123=edit_model::getauthor($aut); 

     foreach ($dewey as $key) {
         $d_dewey=$key['c_dewey'];
         $d_name=$key['cname'];
     }
     ?>
<br>


<div class="container">    
        
    <div id="loginbox" class="col-md-8 col-md-offset-1 col-sm-12 col-sm-offset-6"> 
       
        
        
        <div class="panel" style="border:1px solid orange;" >
            <div class="panel-heading" style="background-color:orange;">
                <div class="panel-title text-center" >Edit Book Form</div>
            </div>     

            <div class="panel-body" >

                <form name="form" action="<?php echo URL?>edit/save" method="POST" id="form" class="form-horizontal"  >
                    
                      <div class="input-group">
                        <span class="input-group-addon">DDC</span>
                        <input  type="text" disabled class="form-control" id="ddc" value="<?php echo $d_dewey." ".$d_name; ?>" placeholder="User">                                        
                    </div>


                    <div class="input-group">
                        <span class="input-group-addon">CATEGORY</span>
                        <input id="user" type="text" disabled class="form-control" name="category" id="demo"  placeholder="User" value="<?php echo $value['cid']; ?>">                                        
                    </div>

                    <div class="input-group">
                        <span class="input-group-addon">Title</span>
                        <input  type="text" class="form-control" name="title" placeholder="Title" value="<?php echo $value['title']; ?>">
                    </div>                                                                  

                   

                    <div class="input-group">
                        <span class="input-group-addon">ISBN</span>
                        <input  type="text" class="form-control" name="isbn" placeholder="ISBN" value="<?php echo $value['isbn']; ?>">
                    </div>                                                                  

                  

                     <div class="input-group">
                        <span class="input-group-addon">Publisher</span>
                        <input  type="text" class="form-control" name="publisher" placeholder="Publisher" value="<?php echo $value['publisher']; ?>">
                    </div>   

                     <div class="input-group">
                        <span class="input-group-addon">Edition</span>
                        <input  type="text" class="form-control" name="edition" placeholder="Edition" value="<?php echo $value['edition']; ?>">
                    </div>                                                                  

                   

                    <div class="input-group">
                        <span class="input-group-addon">Author</span>
                        <input  type="text" class="form-control" name="author" placeholder="Author" value="<?php echo $aut123; ?>">
                    </div>                                                                  

                   <div class="input-group">
                        <span class="input-group-addon">Available</span>
                        <input  type="text" class="form-control" name="copies" placeholder="Copies" value="<?php echo $value['available']; ?>">
                    </div>                                                                  


                     <div class="input-group">
                        <span class="input-group-addon">Summary</span>
                        <textarea class="form-control" required name="summary" placeholder="Note/Description" value="<?php echo $value['summary']; ?>"><?php echo $value['summary']; ?></textarea>
                    </div> 

<br>

                    <div class="form-group">
                        <!-- Button -->
                        <div class="col-sm-12 controls">
                            <input type="hidden" name="cid" value="<?php echo $record;?>">
                            <input type="hidden" name="id" value="<?php echo $id;?>">
                            <input type="hidden" name="ty" value="<?php echo $aut;?>">
                            
                             <a href="<?php echo URL; ?>book/view/<?php echo $d_dewey ?>" class="btn  pull-left yes" style="background-color:blue;color:white;"><i class="glyphicon glyphicon-arrow-left"></i> Back</a>

                            <button  class="btn  pull-right yes" style="background-color:blue;color:white;"><i class="glyphicon glyphicon-log-in"></i> Save</button>
                        </div>
                    </div>

                </form>     

            </div>                     
        </div>  
    </div>
</div>

<?php endforeach ?>
<br>
