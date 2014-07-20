<?php
$case = null;
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
                                        <span class="label bg-teal">5</span>
                                    </div>

                                    <div>
                                        <span class="label label-warning">5</span>
                                    </div>

                                </div>
                                <div class="col-lg-11">

                                    <span class="list_name"> {{$c->name}}</span>
                                    <br>
                                    <br>
                                    <div class="" style="height: 6vh; overflow: auto">

                                        <span class="text-muted"> <small>
                                                <span>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
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
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                                <hr>
                                Priority level
                                <select class="input-mini input-group-sm pull-right" name="">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                                
                                <hr>
                                
                                <?php $case_type_tags = Case_type_tag::where("case_id", "=", $c->id)->get(); ?>
                                @foreach($case_type_tags as $ctt)
                                <p class="label label-primary bg-orange">
                                    {{$ctt->type}}
                                </p> 
                                @endforeach
                            </div >
                            <div  class="col-lg-9" style="border-left: 1px solid #eee; height: 100% ">
                                <table class="table table-hover table-bordered table-condensed table-striped ">
                                    <thead>
                                        <tr>
                                            <th width="5%">#</th>
                                            <th width="">Task</th>
                                            <th width="5%"><span class="btn-group btn-group-xs"><button class="btn btn-success"><i class="fa fa-plus"></i></button></span></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th width="5%">#</th>
                                            <td>gfhdfghdhfgh</td>
                                            <th width="5%"><span class="btn-group btn-group-xs"><button class="btn btn-danger"><i class="fa fa-minus"></i></button></span></th>
                                        </tr>
                                        <tr>
                                            <th width="5%">#</th>
                                            <td>gfhdfghdhfgh</td>
                                            <th width="5%"><span class="btn-group btn-group-xs"><button class="btn btn-danger"><i class="fa fa-minus"></i></button></span></th>
                                        </tr>
                                        <tr>
                                            <th width="5%">#</th>
                                            <td>gfhdfghdhfgh</td>
                                            <th width="5%"><span class="btn-group btn-group-xs"><button class="btn btn-danger"><i class="fa fa-minus"></i></button></span></th>
                                        </tr>
                                        <tr>
                                            <th width="5%">#</th>
                                            <td>gfhdfghdhfgh</td>
                                            <th width="5%"><span class="btn-group btn-group-xs"><button class="btn btn-danger"><i class="fa fa-minus"></i></button></span></th>
                                        </tr>
                                        <tr>
                                            <th width="5%">#</th>
                                            <td>hdfhdfhdfgh</td>
                                            <th width="5%"><span class="btn-group btn-group-xs"><button class="btn btn-danger"><i class="fa fa-minus"></i></button></span></th>
                                        </tr>
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
