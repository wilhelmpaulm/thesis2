<?php 
$user = Auth::user();

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Sherlock</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <style>
            body {

                zoom: 87%;
                /*height: 600vh;*/
                /*transform: scale(.80);*/
                /*transform-origin: 10% 10%;*/
                /*font-size: 100%;*/
                /*background: url('{{URL::asset("bg/congruentoutline.png")}}')*/

            }
        </style>
        {{HTML::style("LTE/css/font-awesome.min.css")}}
        {{HTML::style("LTE/css/ionicons.min.css")}}
        {{HTML::style("css/bootstrap-datetimepicker.css")}}
        <!--{{HTML::style("css/fullcalendar.print.css")}}-->
        {{HTML::style("css/fullcalendar.css")}}
        {{HTML::style("css/dtable3.css")}}
        {{HTML::style("LTE/css/bootstrap.min.css")}}
        {{HTML::style("LTE/css/AdminLTE.css")}}
        <!--{{HTML::style("css/dataTables.css")}}-->
        <!--{{HTML::style("css/lumen.bootstrap.min.css")}}-->
        {{HTML::style("css/bootstrap-tagsinput.css")}}
        {{HTML::style("css/bootstrap-modal-bs3patch.css")}}
        {{HTML::style("css/bootstrap-modal.css")}}
        {{HTML::style("css/bootstrap-datetimepicker.css")}}
        {{HTML::style("css/font-awesome.css")}}
        {{HTML::style("css/wilhelmpaulm.css")}}
        {{HTML::style("css/timeline.css")}}
        {{HTML::style("css/nv.d3.css")}}
        {{HTML::style("css/printer.css")}}
        {{HTML::style("css/wilhelm-panel.css")}}
        {{HTML::style("css/bootstrap-select.css")}}
        {{HTML::style("css/bootstrap-fullcalendar.css")}}



        <!--{{HTML::script("js/raphael.js")}}-->
        {{HTML::script("js/jquery.js")}}
        <!--{{HTML::script("js/morris.js")}}-->
        {{HTML::script("js/moment.js")}}
        {{HTML::script("js/bootstrap-tagsinput.js")}}
        <!--{{HTML::script("js/daterangepicker.js")}}-->
        {{HTML::script("js/dataTables.min.js")}}
        {{HTML::script("js/bootstrap3-typeahead.js")}}
        <!--{{HTML::script("js/typeahead.js")}}-->
        {{HTML::script("js/dtable3.js")}}
        {{HTML::script("js/fullcalendar.js")}}
        {{HTML::script("js/bootstrap.min.js")}}
        {{HTML::script("LTE/js/AdminLTE/app.js")}}

        <!--{{HTML::script("js/bootstrap.min.js")}}-->
        {{HTML::script("js/bootstrap-modalmanager.js")}}
        {{HTML::script("js/bootstrap-modal.js")}}
        {{HTML::script("js/bootstrap-datetimepicker.min.js")}}
        {{HTML::script("js/list.js")}}
        <!--{{HTML::script("js/list.fuzzysearch.min.js")}}-->
        {{HTML::script("js/bootstrap-select.js")}}
        {{HTML::script("js/d3.v3.js")}}
        {{HTML::script("js/nv.d3.js")}}
        {{HTML::script("js/colorbrewer.js")}}
        {{HTML::script("js/highcharts/highcharts.js")}}
        {{HTML::script("js/highcharts/modules/data.js")}}
        {{HTML::script("js/highcharts/modules/exporting.js")}}
        <!--<link href="../../css/bootstrap.min.css" rel="stylesheet" type="text/css" />-->
        <!-- font Awesome -->
        <!--<link href="../../css/font-awesome.min.css" rel="stylesheet" type="text/css" />-->
        <!-- Ionicons -->
        <!--<link href="../../css/ionicons.min.css" rel="stylesheet" type="text/css" />-->
        <!-- Theme style -->
        <!--<link href="../../css/AdminLTE.css" rel="stylesheet" type="text/css" />-->

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
       
        <![endif]-->

    </head>
    <body class="skin-black">
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="../../index.html" class="logo ">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                <div class="image" style="overflow: hidden; height: 100%; margin-top:-3px">
                    <img src="{{asset('sherlock_logo.png')}}" style="width: 100%;" class=""  alt="user image"/>
                </div>
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top " role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        <!-- Messages: style can be found in dropdown.less-->

                        <li class="dropdown">
                            <a class="dropdown-toggle refresh " data-toggle="dropdown" href="#"><span class="" id="notifSpan"><i class="fa fa-bullhorn"></i> <span id="notifNum"></span></span>                            </a>
                            <ul class="dropdown-menu long-down"  id="alert-notifications">
                            </ul>
                        </li>

                        <li class="dropdown messages-menu">
                            <a href="#" class="dropdown-toggle refresh" data-toggle="dropdown">
                                <i class="fa fa-envelope"></i>
                                <!--<span class="label label-success">4</span>-->
                            </a>
                            <ul class="dropdown-menu long-down"  id="alert-messages">
                            </ul>
                        </li>
                        <li class="dropdown messages-menu">
                            <a href="#" class="dropdown-toggle refresh" data-toggle="dropdown">
                                <i class="fa fa-tasks"></i>
                                <!--<span class="label label-success">4</span>-->
                            </a>
                            <ul class="dropdown-menu long-down"  id="alert-tasks">
                            </ul>
                        </li>
                        <!-- Notifications: style can be found in dropdown.less -->
                        <li class="dropdown notifications-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-pencil"></i>
                                <!--<span class="label label-warning">10</span>-->
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">Notepad</li>
                                <li>
                                    <form action="{{URL::to(strtolower(Auth::user()->job_title).'/memo')}}" method="POST">
                                        <div class="panel-body">
                                            <textarea class="form-control"  name="memo" rows="4" cols="20" style="min-height: 20vh">{{Auth::user()->memo}}</textarea>
                                            <br>
                                        </div>
                                </li>
                                <button class="btn btn-primary btn-block">Save Changes</button>
                                </form> 
                            </ul>
                        </li>
                        <!-- Tasks: style can be found in dropdown.less -->
                        
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-user"></i>
                                <span>{{$user->last_name}}, {{$user->first_name}} <i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header bg-black">
                                    <img src="{{asset('nbi/agent/picture/'.$user->file_picture)}}" class="img-circle" alt="User Image" />
                                    <p>
                                        {{$user->last_name}}, {{$user->first_name}}
                                        <small>{{$user->division}}  - {{$user->job_title}}</small>
                                        <small>{{$user->date_hired}}</small>
                                    </p>
                                </li>
                                <!-- Menu Body -->
<!--                                <li class="user-body">
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Followers</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Sales</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Friends</a>
                                    </div>
                                </li>-->
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <!--<a href="#" class="btn btn-default btn-flat">Profile</a>-->
                                    </div>
                                    <div class="pull-right btn-group-sm">
                                        <a href="{{URL::to("logout")}}" class="btn btn-default">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            
            <aside class="left-side sidebar-offcanvas" >                
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">

                            <img src='{{asset("nbi_logo.png")}}' class="" alt="User Image" />
                            <!--<img src="../../img/avatar3.png" class="img-circle" alt="User Image" />-->
                        </div>
                        <div class="pull-left image">

                            <img src='{{asset("dlsu_logo.png")}}' class="" alt="User Image" />
                            <!--<img src="../../img/avatar3.png" class="img-circle" alt="User Image" />-->
                        </div>
                        <div class="pull-left info">
                            <p>{{$user->first_name}} <br>{{$user->last_name}}</p>

                            <a href="#"><i class="fa fa-circle text-success"></i> {{$user->job_title}}</a>
                        </div>
                    </div>
                    <!-- search form -->
                    <!--                    <form action="#" method="get" class="sidebar-form">
                                            <div class="input-group">
                                                <input type="text" name="q" class="form-control" placeholder="Search..."/>
                                                <span class="input-group-btn">
                                                    <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                                                </span>
                                            </div>
                                        </form>-->
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    @if(Auth::user()->job_title == "Agent")    
                    @include("sidebar.main.agent")
                    @elseif(Auth::user()->job_title == "Chief")    
                    @include("sidebar.main.chief2")
                    @elseif(Auth::user()->job_title == "Executive_Officer")    
                    @include("sidebar.main.executiveofficer")
                    @elseif(Auth::user()->job_title == "Secretary")    
                    @include("sidebar.main.secretary")

                    @endif
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">                
                <!--<div style="height: 80vh; overflow: scroll">-->
                @yield("main")
                <!--</div>-->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->


        <!-- jQuery 2.0.2 -->

        <script>
            $(".refresh").on("click", function() {
                setTimeout(function() {
                    $.get("{{URL::to('alerts-messages')}}", function(data) {
                        $("#alert-messages").replaceWith(data);

                    });
                    $.get("{{URL::to('alerts-notifications')}}", function(data) {
                        $("#alert-notifications").replaceWith(data);
                    });
                    $.get("{{URL::to('alerts-tasks')}}", function(data) {
                        $("#alert-tasks").replaceWith(data);
                    });
                }, 0);
            });


            //        $('body').modalmanager('loading');
        </script>
        <script>
            $.get("{{URL::to('notifications-num')}}", function(data) {
                if (data > 0) {
                    console.log(data);
                    $("#notifNum").text(data);
                    $("#notifSpan").addClass("c-alizarin");
                } else {
                    console.log(data);
                    $("#notifNum").text("");
                    $("#notifSpan").removeClass("c-alizarin");
                }
                //                alert(data);
            });


            setInterval(function() {
                $.get("{{URL::to('notifications-num')}}", function(data) {
                    if (data > 0) {
                        console.log(data);
                        $("#notifNum").text(data);
                        $("#notifSpan").addClass("c-alizarin");
                    } else {
                        console.log(data);
                        $("#notifNum").text("");
                        $("#notifSpan").removeClass("c-alizarin");
                    }
                    //                alert(data);
                });

            }, 5000);
            
            
            $(".panel-heading").addClass("f-osb");

        </script>
    <!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>-->
        <!-- Bootstrap -->
        <!--<script src="../../js/bootstrap.min.js" type="text/javascript"></script>-->
        <!-- AdminLTE App -->
        <!--<script src="../../js/AdminLTE/app.js" type="text/javascript"></script>-->

    </body>
</html>