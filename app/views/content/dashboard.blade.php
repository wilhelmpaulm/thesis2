<div id="content">
    <div class="row">

        <div class="col-md-8" style="">
            <div class="panel panel-black">
                <div class="panel-heading">
                    <i class="fa fa-pencil fa-fw"></i> Cases
                </div>
                <div class="panel-body" style="">
                    @include("sidebar.sub.cases.ongoing_single")


                </div>
                <!--                <div class="panel-footer clearfix">
                                </div>-->
            </div>


        </div>

        <div class="col-md-4" style="">
            <div class="row"> 
                <div class="col-md-12">
                    <div class="panel panel-black">
                        <div class="panel-heading">
                            <i class="fa fa-bell fa-fw"></i> Notifications Panel
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="list-group" style="">
                                <?php $notifications = System_log::where("target_id", "=", Auth::user()->id)->orderBy('created_at', 'desc')->take(10)->get() ?>
                                @foreach($notifications as $n)
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-comment fa-fw"></i> {{$n->action}}
                                    <span class="pull-right text-muted small"><em>{{$n->created_at}}</em>
                                    </span>
                                </a>
                                @endforeach
                                <a href="{{URL::to(strtolower(Auth::user()->job_title)."/notifications")}}" class=" list-group-item text-center ">View Notifications</a>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="col-md-12" >
                    <div class="panel panel-black" >
                        <div class="panel-heading">
                            <i class="fa fa-calendar fa-fw"></i> Tasks
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body" >
                            <div class="list-group" style="">
                                <?php $cal = Task::where("user_id", "=", Auth::user()->id)->orderBy('created_at', 'desc')->take(10)->get() ?>
                                @foreach($cal as $c)
                                <a href="{{URL::to(strtolower(Auth::user()->job_title)."/calendar")}}" class="list-group-item">
                                    <i class="fa fa-comment fa-fw"></i> {{$c->title}}
                                    <span class="pull-right text-muted small"><em>{{$c->date_start}} to {{$c->date_end}}</em>
                                    </span>
                                </a>
                                @endforeach

                                <a href="{{URL::to(strtolower(Auth::user()->job_title)."/calendar")}}" class=" list-group-item text-center">View Calendar</a>
                            </div>
                            <!-- /.list-group -->
                        </div>
                    </div>


                </div>
               




            </div>
        </div>
    </div>


    <script>
       
    </script>
    
    
    
