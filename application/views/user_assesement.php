<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url();?>assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?php echo base_url();?>assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/alertifyjs/css/alertify.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/alertifyjs/css/themes/default.min.css">
	<title>Paper Dashboard by Creative Tim</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/box_ontop.css">
    <!-- Bootstrap core CSS     -->
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/3d_button.css">
    <!-- Animation library for notifications   -->
    <link href="<?php echo base_url();?>assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Paper Dashboard core CSS    -->
    <link href="<?php echo base_url();?>assets/css/paper-dashboard.css" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="<?php echo base_url();?>assets/css/demo.css" rel="stylesheet" />


    <!--  Fonts and icons     -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="<?php echo base_url();?>assets/css/themify-icons.css" rel="stylesheet">

</head>
<body>
<!---One page process Page1---> 

<div class="wrapper">
    <div class="sidebar" data-background-color="white" data-active-color="danger">

    <!--
		Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
		Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
	-->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href=# class="simple-text">
                    DNS <?php echo $member["user"]?>
                </a>
            </div>

            <ul class="nav">
                <li class="a_assessment active">
                    <a href="#">
                        <i class="ti-panel"></i>
                        <p>Assessment</p>
                    </a>
                </li>
                <li class="a_history">
                <a href="#">
                        <i class="ti-book"></i>
                        <p>History</p>
                    </a>
                </li>
            </ul>
    	</div>
    </div>

    <div class="main-panel assessment">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>
                    <a class="navbar-brand" href="#">Assessment </a>
                    <div class="navbar-brand date_assessment"></div>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="#">
								<i class="ti-user"></i>
								<p><?php echo $this->session->userdata('user')?></p>
                            </a>
                        </li>
                        <li>
                            <a href="<?php site_url("Home/logout");?>">
								<i class="ti-control-record"></i>
								<p>logout</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>


        <div class="content ">
            <div class="container-fluid">
                <div class="row">
                    
                    <div class="col-lg-4 col-sm-6 show_form_2 parent" disabled>
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-warning text-center">
                                            <i class="ti-bookmark-alt "></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                            <p>Assessment</p>
                                            1 Sheet
                                        </div>
                                    </div>
                                </div>
                                <div class="footer">
                                    <hr />
                                    <div class="stats">
                                        <i class="ti-calendar"></i> Last day
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 show_form_3 parent">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-warning text-center">
                                            <i class="ti-bookmark-alt"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                            <p>Assessment</p>
                                            2 Sheet
                                        </div>
                                    </div>
                                </div>
                                <div class="footer">
                                    <hr />
                                    <div class="stats">
                                        <i class="ti-timer"></i> In the last hour
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 show_form_4 parent">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-warning text-center">
                                            <i class="ti-bookmark-alt"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                            <p>Assessment</p>
                                            3 Sheet
                                        </div>
                                    </div>
                                </div>
                                <div class="footer">
                                    <hr />
                                    <div class="stats">
                                        <i class="ti-reload"></i> Updated now
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 group_1">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">WORK DATE</h4>
                                <p class="category">กรุณาระบุวันเวลา</p>
                                  
                            </div>
                            <div class="content">



<div class="table">
        <div class="row">
            <div class="span5">
                <table class="table table-hover table-bordered table-responsive table-condensed">
                      <thead>
                      <tr>
                          <th style="padding-left:100px;margin-right:0;">id</th>
                          <th>Modules</th>
                          <th>Date registered</th>
                          <th>Status</th>                                          
                      </tr>
                  </thead>   
                  <tbody>
                    <tr>
                        <td>1</td>
                        <td>Donna R. Folse</td>
                        <td>2012/05/06</td>
                        <td><button type="button" class="btn btn-outline-success get_date" id="2019/02/8">Success</button>                        </td>                                       
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Emily F. Burns</td>
                        <td>2011/12/01</td>
                        <td><button type="button" class="btn btn-outline-success get_date" id="2019/02/3">Success</button>                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Andrew A. Stout</td>
                        <td>2010/08/21</td>
                        <td><span class="label">Inactive</span></td>                                        
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Mary M. Bryan</td>
                        <td>2009/04/11</td>
                        <td><button type="button" class="btn btn-outline-success get_date" id="2019/02/2">Success</button>                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Mary A. Lewis</td>
                        <td>2007/02/01</td>
                        <td> <button type="button" class="btn btn-outline-success get_date" id="2019/02/1">Success</button>                   </tr>                                   
                  </tbody>
                </table>
                </div>
        </div>
    </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 group_2 ">
                            <div class="card">
                                <div class="header ">
                                    <h4 class="title">group_2 Users Behavior</h4>
                                    <p class="category">24 Hours performance</p>
                                </div>
                                <div class="content">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 group_3 ">
                                <div class="card">
                                    <div class="header">
                                        <h4 class="title">group_3 Users Behavior</h4>
                                        <p class="category">24 Hours performance</p>
                                    </div>
                                    <div class="content">
                                      
                                    </div>
                                </div>
                            </div>
                             <div class="col-md-12  group_4">
                        <div class="card">
                            <div class="header ">
                                <h4 class="title">group_4 Users Behavior</h4>
                                <p class="category">24 Hours performance</p>
                            </div>
                            <div class="content">
                            </div>
                        </div>
                    </div>
                
               


        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>

                        <li>
                            <a href="http://www.creative-tim.com">
                                Creative Tim
                            </a>
                        </li>
                        <li>
                            <a href="http://blog.creative-tim.com">
                               Blog
                            </a>
                        </li>
                        <li>
                            <a href="http://www.creative-tim.com/license">
                                Licenses
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script>, made with <i class="fa fa-heart heart"></i> by <a href="http://www.creative-tim.com">Creative Tim</a>
                </div>
            </div>
        </footer>

    </div>
</div></div></div>
<!--Show Histpry-->

<div class="main-panel history">
<div class="content ">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Striped Table</h4>
                                <p class="category">Here is a subtitle for this table</p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-striped">
                                    <thead>
                                        <th>ID</th>
                                    	<th>Name</th>
                                    	<th>Salary</th>
                                    	<th>Country</th>
                                    	<th>City</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        	<td>1</td>
                                        	<td>Dakota Rice</td>
                                        	<td>$36,738</td>
                                        	<td>Niger</td>
                                        	<td>Oud-Turnhout</td>
                                        </tr>
                                        <tr>
                                        	<td>2</td>
                                        	<td>Minerva Hooper</td>
                                        	<td>$23,789</td>
                                        	<td>Curaçao</td>
                                        	<td>Sinaai-Waas</td>
                                        </tr>
                                        <tr>
                                        	<td>3</td>
                                        	<td>Sage Rodriguez</td>
                                        	<td>$56,142</td>
                                        	<td>Netherlands</td>
                                        	<td>Baileux</td>
                                        </tr>
                                        <tr>
                                        	<td>4</td>
                                        	<td>Philip Chaney</td>
                                        	<td>$38,735</td>
                                        	<td>Korea, South</td>
                                        	<td>Overland Park</td>
                                        </tr>
                                        <tr>
                                        	<td>5</td>
                                        	<td>Doris Greene</td>
                                        	<td>$63,542</td>
                                        	<td>Malawi</td>
                                        	<td>Feldkirchen in Kärnten</td>
                                        </tr>
                                        <tr>
                                        	<td>6</td>
                                        	<td>Mason Porter</td>
                                        	<td>$78,615</td>
                                        	<td>Chile</td>
                                        	<td>Gloucester</td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>


        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>

                        <li>
                            <a href="http://www.creative-tim.com">
                                Creative Tim
                            </a>
                        </li>
                        <li>
                            <a href="http://blog.creative-tim.com">
                               Blog
                            </a>
                        </li>
                        <li>
                            <a href="http://www.creative-tim.com/license">
                                Licenses
                            </a>
                        </li>
                    </ul>
                </nav>
				<div class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script>, made with <i class="fa fa-heart heart"></i> by <a href="http://www.creative-tim.com">Creative Tim</a>
                </div>
            </div>
        </footer>
        </div>

    </div>
</div>

</body>

    <!--   Core JS Files   -->
    <script src="<?php echo base_url();?>assets/js/jquery.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url();?>assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="<?php echo base_url();?>assets/js/bootstrap-checkbox-radio.js"></script>

	<!--  Charts Plugin -->
	<script src="<?php echo base_url();?>assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="<?php echo base_url();?>assets/js/bootstrap-notify.js"></script>
    <script src="<?php echo base_url();?>assets/js/box_ontop.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
	<script src="<?php echo base_url();?>assets/js/paper-dashboard.js"></script>
    <script src="<?php echo base_url();?>assets/alertifyjs/alertify.min.js"></script>
	<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
	<script src="<?php echo base_url();?>assets/js/demo.js"></script>
    <script src="<?php echo base_url();?>assets/js/from.js"></script>
	<script type="text/javascript">
    	$(document).ready(function(){
            $(".history").hide();
        	$("li").click(function () { 
                $(this).siblings('li').removeClass('active');
                $(this).addClass("active");
            });
            $(".a_history").click(function () { 
                $(".assessment").hide();
                $(".history").show();
                
            });
            $(".a_assessment").click(function () { 
                $(".history").hide();
                $(".assessment").show();
                
            });

    	});
	</script>

</html>
