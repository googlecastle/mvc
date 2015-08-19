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
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      
    
      <ul class="nav navbar-nav navbar-right">






            <li><a href="<?php echo URL?>home" style="color:white;"><i class="glyphicon glyphicon-home" style="color:white;"></i>Home</a></li>




          <li class="dropdown">
          <a href="<?php echo URL?>home/logout" class="dropdown-toggle" style="color:white;" data-toggle="dropdown"><i class="glyphicon glyphicon-cog" style="color:white;"></i> Setting <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
      <li ><a href="<?php echo URL?>home/logout" > Logout</a></li>
           
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
        




























      </ul>


    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>














