@extends("layouts.new")

@section("main")
<?php
$aCom = [];
?>
<div id="sidebarsubhtml" class="hide">
    @include("sidebar.sub.cases.assign")
</div>


<script >
    $('a[href="#sub"]').tab('show');
    var sidebarsub = $("#sidebarsubhtml").html();
    $("#subheading").removeClass("hide");

    $("#sub").append(sidebarsub);
    $("#subheading").text("Assign Case");

</script>
<div class="col-md-12 content">

    <div class="row">
        @if($case == null )

        @else
        <?php $complaint = Complaint::find($case->complaint_id) ?>

        <div class="col-md-12" >
            <div class="panel panel-black">
                <div class="panel-heading">
                    <h3 class="panel-title">{{$case->name}}</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-4" style="height: 30vh; overflow: auto">
                            <table class="table table-hover table-striped table-bordered">
                                <tbody>
                                    
                                    <tr>
                                        <td><strong>Complainant</strong></th>
                                        <td>
                                            <?php $complainant = Client::find($case->complainant_id); ?>
                                            <p>{{$complainant->last_name.", ".$complainant->first_name." ".$complainant->middle_name}}</p>
                                            <p>@if(strlen($complainant->birthdate) == 10)
                                                {{Time::getAge($complainant->birthdate)}} years old
                                                @endif
                                            </p>
                                            <p><strong>Sex:</strong> {{$complainant->sex}} </p>
                                            <p><strong>Birthdate: </strong> {{$complainant->birthdate}} </p>
                                            <p><strong>Civil Status:</strong> {{$complainant->civil_status}} </p>
                                            <p><strong>Citizenship:</strong> {{$complainant->citizenship}}  </p>
                                            <p><strong>Occupation: </strong>{{$complainant->occupation}} </p>
                                            </th>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-lg-8" style="height: 30vh; overflow: auto">
                            <table class="table table-hover table-striped table-bordered">
                                <tbody>
                                    <tr>
                                        <td><strong>Date Reported</strong></th>
                                        <td>{{$complaint->date_reported}}</th>
                                    </tr>
                                    <tr>
                                        <td><strong>Date Committed</strong></td>
                                        <td>{{$complaint->date_commited}}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Case Type</strong></th>
                                        <td>
                                            @foreach($case_type_tags as $ctt)
                                            {{$ctt->type}} /
                                            @endforeach
                                            </th>
                                    </tr>
                                    <tr>
                                        <td><strong>Details</strong></td>
                                        <td>{{$complaint->details}}</td>
                                    </tr>
                                   
                                </tbody>
                            </table>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            @include("sidebar.sub.cases.agents")
        </div>
    </div>
    @endif



</div>
</div>





@stop