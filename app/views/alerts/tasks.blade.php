<?php $mrs = Task::where("user_id", "=", Auth::user()->id)->where("case_id", "!=", "")->orderBy('created_at', 'desc')->take(10)->get(); ?>
<?php $count  = $mrs->count();?>



<ul class="dropdown-menu long-down"  id="alert-tasks">
    @if($count == 0)
    <li class="header">You have no tasks</li>
    @elseif($count == 1)
    <li class="header">You have a task</li>
    @else
    <li class="header">You have {{$count}} tasks</li>
    @endif
    <li>
        <!-- inner menu: contains the actual data -->
        <ul class="menu">
            @foreach($mrs as $mr)
            <?php $u = User::find($mr->user_id) ?>
            <li><!-- Task item -->
                                            <a href="#">
                                                <h5>
                                                    Case # {{$mr->case_id}}
                                                    <small class="pull-right">20%</small>
                                                </h5>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-aqua " style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">20% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li><!-- end task item -->
            
            @endforeach 
        </ul>
    </li>
    <li class="footer"><a href="{{URL::to(strtolower(Auth::user()->job_title)."/messages")}}">See All Messages</a></li>
</ul>