<style type="text/css">

    .glyphicon {  margin-bottom: 10px;margin-right: 10px;}

    small {
    display: block;
    line-height: 1.428571429;
    color: #999;
    }



        .nav-side-menu {
  overflow: auto;
  font-family: verdana;
  font-size: 12px;
  font-weight: 200;
  background-color: #2e353d;
margin-top: -15px;
position: fixed;
  top: 0px;
  width: 300px;
  height: 700px;
  color: #e1ffff;
}
.nav-side-menu .brand {
  background-color: #23282e;
  line-height: 50px;
  display: block;
  text-align: center;
  font-size: 14px;
}
.nav-side-menu .toggle-btn {
  display: none;
}
.nav-side-menu ul,
.nav-side-menu li {
  list-style: none;
  padding: 0px;
  margin: 0px;
  line-height: 35px;
  cursor: pointer;
  /*    
    .collapsed{
       .arrow:before{
                 font-family: FontAwesome;
                 content: "\f053";
                 display: inline-block;
                 padding-left:10px;
                 padding-right: 10px;
                 vertical-align: middle;
                 float:right;
            }
     }
*/
}
.nav-side-menu ul :not(collapsed) .arrow:before,
.nav-side-menu li :not(collapsed) .arrow:before {
  font-family: FontAwesome;
  content: "\f078";
  display: inline-block;
  padding-left: 10px;
  padding-right: 10px;
  vertical-align: middle;
  float: right;
}
.nav-side-menu ul .active,
.nav-side-menu li .active {
  border-left: 3px solid #d19b3d;
  background-color: #4f5b69;
}
.nav-side-menu ul .sub-menu li.active,
.nav-side-menu li .sub-menu li.active {
  color: #d19b3d;
}
.nav-side-menu ul .sub-menu li.active a,
.nav-side-menu li .sub-menu li.active a {
  color: #d19b3d;
}
.nav-side-menu ul .sub-menu li,
.nav-side-menu li .sub-menu li {
  background-color: #181c20;
  border: none;
  line-height: 28px;
  border-bottom: 1px solid #23282e;
  margin-left: 0px;
}
.nav-side-menu ul .sub-menu li:hover,
.nav-side-menu li .sub-menu li:hover {
  background-color: #020203;
}
.nav-side-menu ul .sub-menu li:before,
.nav-side-menu li .sub-menu li:before {
  font-family: FontAwesome;
  content: "\f105";
  display: inline-block;
  padding-left: 10px;
  padding-right: 10px;
  vertical-align: middle;
}
.nav-side-menu li {
  padding-left: 0px;
  border-left: 3px solid #2e353d;
  border-bottom: 1px solid #23282e;
}
.nav-side-menu li a {
  text-decoration: none;
  color: #e1ffff;
}
.nav-side-menu li a i {
  padding-left: 10px;
  width: 20px;
  padding-right: 20px;
}
.nav-side-menu li:hover {
  border-left: 3px solid #d19b3d;
  background-color: #4f5b69;
  -webkit-transition: all 1s ease;
  -moz-transition: all 1s ease;
  -o-transition: all 1s ease;
  -ms-transition: all 1s ease;
  transition: all 1s ease;
}
@media (max-width: 767px) {
  .nav-side-menu {
    position: relative;
    width: 100%;
    margin-bottom: 10px;
  }
  .nav-side-menu .toggle-btn {
    display: block;
    cursor: pointer;
    position: absolute;
    right: 10px;
    top: 10px;
    z-index: 10 !important;
    padding: 3px;
    background-color: #ffffff;
    color: #000;
    width: 40px;
    text-align: center;
  }
  .brand {
    text-align: left !important;
    font-size: 22px;
    padding-left: 20px;
    line-height: 50px !important;
  }
}
@media (min-width: 767px) {
  .nav-side-menu .menu-list .menu-content {

    display: block;
  }
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

    </style>

<!--<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">-->
<link href="<?php echo URL; ?>assets/css/font_awesome.css" rel="stylesheet">


<?php if (isset($_REQUEST['g'])==1): ?>
    <?php  echo "<script> alert('Wrong Username and Password')  </script>";
       
     ?>
 
<?php endif ?>
        

  <div class="row" >

 
 




       

                <div class="row">






<div class="nav-side-menu">
    <div class="brand">Librarian Profile</div>
    <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
  
        <div class="menu-list">
  
            <ul id="menu-content" class="menu-content collapse out">
                <li>
                  <a href="<?php echo URL?>Dashboard/view">
                  <i class="fa fa-dashboard fa-lg"></i> Dashboard
                  </a>
                </li>


<!--
                <li  data-toggle="collapse" data-target="#products" class="collapsed active">
                  <a href="#"><i class="fa fa-gift fa-lg"></i> UI Elements <span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="products">
                    <li class="active"><a href="#">CSS3 Animation</a></li>
                    <li><a href="#">General</a></li>
                    <li><a href="#">Buttons</a></li>
                    <li><a href="#">Tabs & Accordions</a></li>
                    <li><a href="#">Typography</a></li>
                    <li><a href="#">FontAwesome</a></li>
                    <li><a href="#">Slider</a></li>
                    <li><a href="#">Panels</a></li>
                    <li><a href="#">Widgets</a></li>
                    <li><a href="#">Bootstrap Model</a></li>
                </ul>


                <li data-toggle="collapse" data-target="#service" class="collapsed">
                  <a href="#"><i class="fa fa-globe fa-lg"></i> Reserved Books <span class="arrow"></span></a>
                </li>  
                <ul class="sub-menu collapse" id="service">
                  <li>New Service 1</li>
                  <li>New Service 2</li>
                  <li>New Service 3</li>
                </ul>


                <li data-toggle="collapse" data-target="#new" class="collapsed">
                  <a href="#"><i class="fa fa-car fa-lg"></i> New <span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="new">
                  <li>New New 1</li>
                  <li>New New 2</li>
                  <li>New New 3</li>
                </ul>
              
              -->

             

                  <li>
                  <a href="<?php echo URL?>home">
                  <i class="fa fa-user fa-lg"></i> Home
                  </a>
                  </li>
<?php 




  Session::init();
    $username=Session::get('user');
    if($username == "admin")
    {
      ?>
<li>
                  <a href="<?php echo URL?>addlibrarian/view">
                  <i class="fa fa-user fa-lg"></i> Addlibrarian
                  </a>
                  </li>
<?php 

    }
        ?>
               

                  <li>
                  <a href="<?php echo URL?>home/logout">
                  <i class="fa fa-users fa-lg"></i> Logout
                  </a>
                </li>
            </ul>
     </div>
</div>

</div>

<div class="col-md-3 " >


</div>


  <div class="col-md-9" style="margin-left:-45px;" >
    <br>
  
 <!--  <center><h1 style="margin:0;">Dewey Decimal System</h1></center> -->



      































 <div class="thumbnail yes">
  <br>

<div class="col-md-6 ">
        

        <?php if (empty($record )): ?>
        <center><h2>No books available</h2></center>
     <?php endif ?>
            <div class="thumbnail yes">
                <div class="row">
<?php 
        foreach ($record as $key => $value) { ?>
  

                    <div class="col-sm-5 col-md-4 ">


                        <img src="<?php echo URL?>assets/images/profilepict/<?php echo $value['pict']; ?>" alt="" class="img-rounded img-responsive" />
                    </div>
                    <div class="col-sm-6 col-md-8">
                        <h4><?php echo $value['name']; ?></h4>
                        <small><cite title="San Francisco, USA"><?php echo $value['address']; ?> <i class="glyphicon glyphicon-map-marker">
                        </i></cite></small>
                        <p>
                            <i class="glyphicon glyphicon-user"> Position:</i><?php echo $value['position']; ?>
                            
                            <br />
                            <i class="glyphicon glyphicon-gift"></i>June 02, 1988
                            <br />
                            <i class="glyphicon glyphicon-gift"> Contact</i><?php echo $value['contact']; ?></p>
                        <!-- Split button -->
                  
                    </div>

                    <?php   } ?>
                </div>
            </div>









        </div>







<div class="col-md-6 ">
        
        <?php if (empty($record )): ?>
        <center><h2>No books available</h2></center>
     <?php endif ?>
            <div class="thumbnail yes">
                <div class="row">
<?php 
        foreach ($record as $key => $value) { ?>
  

                    <div class="col-sm-6 col-md-4 ">

                  <a href="<?php echo URL?>Reserved/view">
                   
                        <img src="<?php echo URL?>assets/images/message.png" alt="" class="img-circle img-responsive" />

                        </a>
                    </div>
                    <div class="col-sm-6 col-md-8">
                              <br>
                        <h3>3 Pending Reservation</h3>
                        
                        <!-- Split button -->
                  
                    </div>

                    <?php   } ?>
                </div>
            </div>
        </div>













  <!--  ------------------------------------------------------------------------------------------------------------------------------------ -->


<div class="panel-group yes" id="accordion" style="margin-top:210px;">
  <div class="panel panel-warning" >
    <div class="panel-heading" >
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
          EDIT YOU INFORMATION
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in">
      <div class="panel-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
  <div class="panel panel-warning">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
          CHANGE YOU PROFILE PICTURE
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse">
      <div class="panel-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
  <div class="panel panel-warning">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
          Collapsible Group Item #3
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse">
      <div class="panel-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
</div>





















</div>
</div>

































 

 </div>
















<script type="text/javascript">

</script>
