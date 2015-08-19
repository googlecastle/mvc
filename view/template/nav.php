<style type="text/css">

   .logos{
 width:60px;
    height: 60px;
    margin-top:-10px;


  }

  .deweylogo{
 width:100px;
 height:100px;
   

  }
</style>


<nav class="navbar " role="navigation" style="background-color:orange;">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

       <img src="<?php echo URL?>assets/images/cirilo.jpg" class="logos img-circle pull-left">
              Library Information System
     <!--  <a class="navbar-brand" href="#">Brand</a> -->
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1 popover-demo">
      <ul class="nav navbar-nav ">
           <li ><a href="<?php echo URL?>home" style="color:white;"><span class="logo2"> <i class="glyphicon glyphicon-home" style="color:white;"></i> </span>Home</a></li>



           
            <li class="dropdown" >  
                  <a href="#"  class="dropdown-toggle" style="color:white;"><i class="glyphicon glyphicon-book" style="color:white;"></i> STUDENT <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu" style="width:250px;" data-toggle="popover">
                    <li><a href="<?php echo URL; ?>addstudent/view" ><i class="glyphicon glyphicon-user" style="color:black;"></i> Add Student</a></li>
                    <li><a href="<?php echo URL; ?>viewstudent/view" ><i class="glyphicon glyphicon-user" style="color:black;"></i> View Student</a></li>
                    <li><a href="<?php echo URL; ?>addstudent/view" ><i class="glyphicon glyphicon-user" style="color:black;"></i> Edit Student</a></li>
                   
                  </ul>
                </li>




            <li><a href="<?php echo URL; ?>addborrower/view" style="color:white;" ><i class="glyphicon glyphicon-user" style="color:white;"></i> Add Borrower</a></li>
            <li><a href="<?php echo URL; ?>Reserved/view" style="color:white;" ><i class="glyphicon glyphicon-user" style="color:white;"></i> Pending Reservation</a></li>
       
       
              

      </ul>
    
      <ul class="nav navbar-nav navbar-right">





        <li class="popover-demo ">



    <a href="#" id="my-task-list" data-container="body" class="dropdown-toggle " data-original-title="Notifications"
    data-toggle="popover" data-placement="bottom" 
    data-content="<?php foreach ($this->record as $value): echo $value['d_name']; endforeach?>">
        Notification
         <div class="iconset top-down-arrow"></div>
    </a>

   
  
<!-- <a href="#" class="dropdown-toggle" id="my-task-list" data-placement="bottom" data-content="" data-toggle="dropdown" data-original-title="Notifications">
        <div class="user-details">
                <div class="username"> 
                  <span class="badge badge-important">3</span> Michelle <span class="bold">Gerbenida</span> 
                </div>
              </div>
              <div class="iconset top-down-arrow"></div>
          </a> -->

        </li>

    




        








  <li class="dropdown">
                    <a href="#" class="dropdown-toggle nav navbar-right top-nav" data-toggle="dropdown" data-original-title="Notifications"><i class="glyphicon glyphicon-envelope" style="color:white;"></i> Messages<b class="caret"></b></a>
                    <ul class="dropdown-menu message-dropdown message-wrapper" >
                        

<?php foreach ($this->record as $value): ?>

                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong><?php echo $value['d_name']; ?></strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>



                        <?php endforeach ?>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                         <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-footer">
                            <a href="<?php echo URL; ?>Reserved/view">Read All New Messages</a>
                        </li>
                    </ul>
                </li>
        



























          <li class="dropdown">
          <a href="<?php echo URL?>home/logout" class="dropdown-toggle" style="color:white;" data-toggle="dropdown"><i class="glyphicon glyphicon-cog" style="color:white;"></i> Setting <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
      
           
            <li><a href="<?php echo URL?>Dashboard/view" ><i class="glyphicon glyphicon-user" ></i>Profile</a></li>

            <li class="divider"></li>
         <li ><a href="<?php echo URL?>home/logout" > Logout</a></li>
          </ul>
        </li>
        




























      </ul>


    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>














