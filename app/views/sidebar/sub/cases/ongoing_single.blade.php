<?php
$case = null;
$otof = [1,2,3,4,5];
?>
<!--<div class="panel panel-black">
    <div class="panel-heading">
        <h3 class="panel-title"><i class="fa fa-suitcase"></i> Ongoing Cases</h3>
    </div>-->
<div  id="list_plug" class="list-group " style="">
    <div class="">
        <div class="input-group custom-search-form input-group-sm">
            <input type="text" class="search form-control " placeholder="Search...">
            <span class="input-group-btn">
                <button class="btn btn-default sort" type="button" data-sort="list_name">
                    <i class="fa fa-sort-alpha-asc"></i>
                </button>
                <button class="btn btn-default sort" type="button" data-sort="list_created_at">
                    <i class="fa fa-sort-numeric-asc"></i>
                </button>
            </span>

        </div>
    </div>
    <br>
    <div style="height: 80vh; overflow-y: scroll; overflow-x: hidden">
        @if(Auth::user()->job_title == "Chief" || Auth::user()->job_title == "Executive_Officer" )
        <?php $cases = Kase::where("status", "=", "Ongoing")->where("division", "=", Auth::user()->division)->get(); ?>
        @else
        <?php $cases = Kase::where("status", "=", "Ongoing")->where("agent_id", "=", Auth::user()->id)->where("division", "=", Auth::user()->division)->get(); ?>
        @endif

        <div class="panel-group list list-unstyled" id="accordion">
            @foreach($cases as $c)
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#{{$c->id}}">
                            <div class="row">
                                <div class="col-lg-1">
                                    <div>
                                        <span class="label bg-teal">{{($c->user_priority + $c->chief_priority)/2}}</span>
                                    </div>

                                    <div>
                                        <span class="label label-warning">{{$c->user_rating/1}}</span>
                                    </div>

                                </div>
                                <div class="col-lg-11">

                                    <span class="list_name"> {{$c->name}}</span>
                                    <br>
                                    <br>
                                    <div class="" style="height: 6vh; overflow: auto">

                                        <span class="text-muted"> <small>
                                                <span>
                                                    {{$c->details}}
                                                </span>


                                            </small></span>

                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-lg-12 ">
                                    <br>
                                    <div class="pull-right">
                                        <p class=" list_details label label-default "><i class="fa fa-user"></i> {{$c->agent_id}}</p>
                                        <p class="label label-primary bg-lightblue ">{{$c->division}}</p>

                                        <p class="list_created_at label label-info"><i class="fa fa-calendar"></i> {{$c->created_at}}</p>
                                        <a   id="" href="{{URL::to(strtolower(Auth::user()->job_title).'/cases-ongoing/'.$c->id)}}" data-c_id="{{$c->id}}" class="list_name c_link  label label-success"><i class="fa fa-link"></i> OPEN CASE {{$c->id}}</a>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </h4>
                </div>
                <div id="{{$c->id}}" class="panel-collapse collapse">
                    <div class="panel-body">

                        <div class="row">
                            <!--                            <div class="col-lg-3" style="overflow-x: auto; overflow-y: hidden" >
                            
                                                        </div >-->
                           
                            <div  class="col-lg-3" style="border-left: 1px solid #eee;border-right: 1px solid #eee; height: 100% ">
                                Agent Rating 
                                <select class="input-mini input-group-sm pull-right" name="">
                                   
                                     @foreach($otof as $o)
                                     @if($o == $c->user_rating)
                                     <option selected="">{{$o}}</option>
                                     @else
                                     <option>{{$o}}</option>
                                     @endif
                                    @endforeach
                                </select>
                                <hr>
                                Priority level
                                <select class="input-mini input-group-sm pull-right" name="">
                                    @foreach($otof as $o)
                                     @if($o == $c->user_priority)
                                     <option selected="">{{$o}}</option>
                                     @else
                                     <option>{{$o}}</option>
                                     @endif
                                    @endforeach
                                </select>

                                <hr>
                                
                                <div style="overflow-x: auto">
                                <?php $case_type_tags = Case_type_tag::where("case_id", "=", $c->id)->get(); ?>
                                @foreach($case_type_tags as $ctt)
                                <p class="label label-primary bg-orange">
                                    {{$ctt->type}}
                                </p> 
                                @endforeach
                                </div >
                                
                            </div >
                            <div  class="col-lg-9" style="border-left: 1px solid #eee; height: 100% ">
                                <table class="table table-hover table-bordered table-condensed table-striped ">
                                    <thead>
                                        <tr>
                                            <th width="5%"></th>
                                            <th width="">Task</th>
                                            <th width="5%">
                                                <span class="btn-group btn-group-xs">
                                                    <a class="btn  btn-success addCaseTask" type="button" data-case_id="{{$c->id}}" data-toggle="modal" data-target="#addTask">
                                                        <i class="fa fa-plus"></i>  
                                                    </a>
                                                </span>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $case_tasks = Task::where("case_id","=",$c->id)->get(); ?>
                                        @foreach($case_tasks as $task )
                                        <tr>
                                            <th width="5%">{{$task->priority}}</th>
                                            <td>{{$task->title}}</td>
                                            <th width="5%"><span class="btn-group btn-group-xs"><button class=" btn btn-warning" 
                                                                                                        data-toggle="modal" data-target="#task_{{$task->id}}"><i class="fa fa-wrench"></i></button></span></th>
                                        </tr>
                                            
                                          

                                                @include("gen.tasks.edit_case")

                                        @endforeach        
                                    </tbody>
                                </table>


                            </div >
                        </div >
                        <hr>
                        <span class="btn-group btn-group-xs pull-right">
                            <button class="btn btn-primary ">Save Changes</button>
                        </span>
                    </div>

                </div>
            </div>

            @endforeach
        </div>






    </div>
</div>
<!--</div>-->

<script>
    var options = {
        valueNames: ['list_name', 'list_created_at', 'list_details']
    };

    var userList = new List('list_plug', options);



</script>

<!--<div class="modal container fade " id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >-->
<div id="addTask" class="modal container fade" tabindex="-1" style="display: none;">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">Add Case Task</h4>
        </div>
        <form action="{{URL::to('tasks/store-case')}}" method="POST">
            <div class="modal-body">
                @include("gen.tasks.create_case")
            </div>
            <div class="modal-footer">
                <span class="btn-group btn-group-sm">
                    <button type="" class="btn btn-primary">Save changes</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                </span>
            </div>
        </form>
    </div>
</div>



<script>
    $(".addCaseTask").on("click", function(){
        var case_id = $(this).data("case_id");
        $(".formCaseId").val(case_id);
    });
    
    $(".editCaseTask").on("click", function(){
        $(".formCaseId").val($(this).data("case_id"));
        $(".formDateStart").val($(this).data("date_start"));
        $(".formDateEnd").val($(this).data("date_end"));
        $(".formCaseId").val($(this).data("case_id"));
        $(".formTitle").val($(this).data("title"));
        $(".formBody").val($(this).data("body"));
    });


</script>

