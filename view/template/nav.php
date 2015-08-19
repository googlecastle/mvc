<!-- NAVBAR
================================================== -->
 

  <div class="navbar" role="navigation" >
    <!-- <div class="navbar-wrapper">
      <div class="container"> -->

        <div class="navbar" role="navigation" style="padding:0px 0px 0px 0px;background-color:orange;">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <img src="<?php echo URL?>assets/images/cirilo.jpg" class="logos img-circle pull-left">
              <!-- <a class="navbar-brand" href="#">Project name</a> -->
            </div>
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                 <li ><a href="<?php echo URL?>home" style="color:white;"><span class="logo2"> <i class="glyphicon glyphicon-home" style="color:white;"></i> </span>Home</a></li>
            <li ><a href="<?php echo URL?>book" style="color:white;"><i class="glyphicon glyphicon-book" style="color:white;"></i> Book</a></li>
       
           
            <li><a href="validate" style="color:white;"><i class="glyphicon glyphicon-user" style="color:white;"></i> Borrower</a></li>

            <!-- <li ><a href="#" style="color:white;padding-right:100px;" ><span Style="font-size:18px;">Librarian: </span><?php echo isset($_SESSION['id'])? $_SESSION['fname'].' '.$_SESSION['mname'].' '.$_SESSION['lname']:''; ?></a></li> -->
            

                <li class="dropdown pull-left" >
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Account <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu" style="width:150px;">
                    <li><a href="<?php echo URL?>home/logout">Logout</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li class="dropdown-header">Nav header</li>
                    <li><a href="#">Separated link</a></li>
                    <li><a href="#">One more separated link</a></li>
                  </ul>
                </li>


            <li><a href="<?php echo URL?>home/logout" style="color:white;"><i class="glyphicon glyphicon-user" style="color:white;"></i> Logout</a></li>


              </ul>
            </div>
          </div>
        </div>

    <!--   </div>
    </div> -->
</div>



