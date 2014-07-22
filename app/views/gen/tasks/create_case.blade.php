<div >

    <div class="row">
        <div class="form-group col-md-6">
            <input class="formCaseId hide" type="text" name="case_id" value="" />
            <label for="title">Date Start</label>
            <div class='input-group date' >
                <input id='' type='datetime' class="form-control datetimepicker8" name="date_start" data-format="YYYY-MM-DD h:mm:ss"/>
                <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                </span>
            </div>
            <label for="title">Date End</label>
            <div class='input-group date' >
                <input id='' type='datetime' class="form-control datetimepicker9" name="date_end" data-format="YYYY-MM-DD hh:mm:ss"/>
                <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                </span>
            </div>
            <label for="title">Priority</label>
            <select name="priority" class="form-control">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
            </select>
        </div>
        <div class="form-group col-md-6">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" placeholder="Title Here" name="title">
            <label for="body">Body</label>
            <textarea class="form-control" name="body" rows="4" cols="20" placeholder="This task is for. . ."></textarea>
        </div>



    </div>

</div>
<!--<script type="text/javascript">
    $(document).ready(function() {
        $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 1, format: 'YYYY-MM-DD h:mm:s'});
    });
</script>-->

<script type="text/javascript">
    $(function() {
        $('.datetimepicker8').datetimepicker();
        $('.datetimepicker9').datetimepicker();
        $(".datetimepicker8").on("change.dp", function(e) {
            $('.datetimepicker9').data("DateTimePicker").setStartDate(e.date);
        });
        $(".datetimepicker9").on("change.dp", function(e) {
            $('.datetimepicker8').data("DateTimePicker").setEndDate(e.date);
        });
    });
</script>