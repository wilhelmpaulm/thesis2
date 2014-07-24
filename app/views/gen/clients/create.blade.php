<div >
    <div class="row">
        <div class=" col-md-3">


            <div>
                <label for="exampleInputFile">Complainant Photo</label>
                <div class="text-center text-muted">
                    <img class="img img-thumbnail  blah" src="{{URL::asset("img/default-profile.jpg")}}" alt="your image" height="100%" width="100%" />
                </div>
                <br>
                <p class="help-block">Please attach a photo of the complainant.</p>
                <input  type="file" class="imgInp" name="img_picture_c">
            </div>
            <br>
<!--            <div>
                <div class="text-center text-muted">
                    <img class="img img-thumbnail blah" src="{{URL::asset("img/default-profile.jpg")}}" alt="your image" height="100%" width="100%" />
                </div>
                <br>
                <p class="help-block">Please attach a photo of the victim.</p>
                <input  type="file" class="imgInp" name="img_picture_c">
            </div>-->
        </div>
        <div class=" col-md-9">
            <div class="row">
                <div class="form-group col-md-4">
                    <label for="first_name"><span class="c-red">*</span>First Name</label>
                    <input  required type="text" class="form-control" id="first_name" placeholder="Juan" name="first_name_c">
                </div>
                <div class="form-group col-md-4">
                    <label for="middle_name">Middle Name</label>
                    <input required  type="text" class="form-control" id="middle_name" placeholder="Ignacio" name="middle_name_c">
                </div>
                <div class="form-group col-md-4">
                    <label for="last_name"><span class="c-red">*</span>Last Name</label>
                    <input  required type="text" class="form-control" id="last_name" placeholder="De La Cruz" name="last_name_c">
                </div>
            </div>
            <div class="row ">
                <div class="form-group col-md-4">
                    <label for="street"><span class="c-red">*</span>Street Number and Street</label>
                    <input type="text" class="form-control" id="street" placeholder="1671 Pedro Gil St" name="street_client">
                </div>
                <div class="form-group col-md-2">
                    <label for="city"><span class="c-red">*</span>City</label>
                    <input type="text" class="form-control" id="city" placeholder="Manila" name="city_client">
                </div>
                <div class="form-group col-md-2">
                    <label for="city">Barangay</label>
                    <input type="text" class="form-control" id="city" placeholder="817" name="barangay_client">
                </div>
                <div class="form-group col-md-2">
                    <label for="province">Province</label>
                    <input type="text" class="form-control" id="city" placeholder="Nueva Ecija" name="province_client">
                </div>
                <div class="form-group col-md-2">
                    <label for="postal_code">Postal Code</label>
                    <input type="text" class="form-control" id="postal_code" placeholder="1007" name="postal_code_client">
                </div>
            </div>
            <!--            <div class="row ">
                        </div>-->
            <div class="row">
                <div class="form-group col-md-4">
                    <label for="birthdate"><span class="c-red">*</span>Date of Birth</label>
                    <input  required type="date" class="form-control" id="birthdate" placeholder="factory worker" name="birthdate_c">
                </div>

            </div>
            <div class="row">
                <div class="form-group col-md-4">
                    <label for="sex"><span class="c-red">*</span>Sex</label>
                    <br>
                    <!--                                        <div class="btn-group" data-toggle="buttons">
                                                                <label class="btn btn-default">
                                                                    <input type="radio" name="sex_c" value="Male" id="option1"> Male
                                                                </label>
                                                                <label class="btn btn-default">
                                                                    <input type="radio" name="sex_c" value="Female" id="option2"> Female
                                                                </label>
                                                                
                                                            </div>-->
                    <!--<span><input type="radio" name="sex_c"  value="Male" checked="checked" /> Male</span>   <span style="padding-left: 20px"><input type="radio" name="sex_c"  value="Female" /> Female</span>-->
                  <select class="form-control" name="sex_c">
                        <option>Male</option>
                        <option>Female</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-4 hidden">
                    <label for="contact_type">Contact Type</label>
                    <input required  type="text" class="form-control" value="Mobile" id="contact" placeholder="" name="contact_type_c">

                </div>
                <div class="form-group col-md-4">
                    <label for="contact"><span class="c-red">*</span>Contact Information</label>
                    <input required  type="text" class="form-control" id="contact" placeholder="Number or Email" name="contact_c">
                </div>
            </div>
            <div class="row">

                <div class="form-group col-md-4">
                    <label for="citizenship"><span class="c-red">*</span>Citizenship</label>
                    <input required  type="text" class="form-control" id="citizenship" placeholder="Filipino" name="citizenship_c">
                </div>

            </div>




            <div class="row">
                <div class="form-group col-md-4">


                    <div class="row">
                        <div class="form-group col-md-12">
                            <label for="occupation"><span class="c-red">*</span>Occupation</label>
                            <input   type="text" class="form-control" id="occupation" placeholder="Factory worker" name="occupation_c">
                            <br>
                            <label for="contact_type"><span class="c-red">*</span>Civil Status</label>
                            <?php $civil_statuses = Civil_status::all(); ?>
                            <select name="civil_status_c" class="form-control">
                                @foreach($civil_statuses as $cs)
                                <option value="{{$cs->status}}">{{$cs->status}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>

            </div>



        </div>
    </div>
</div>

<script>
//    function readURL(input) {
//        if (input.files && input.files[0]) {
//            var reader = new FileReader();
//
//            reader.onload = function(e) {
//                $('#blah').attr('src', e.target.result);
//            }
//
//            reader.readAsDataURL(input.files[0]);
//        }
//    }
//
//    $("#imgInp").change(function() {
//        readURL(this);
//    });
    $("body").on("change", ".imgInp", function() {
        
        var box = $(this).parent().find(".blah");
//        var box = $("input [value='"+val+"']").html();
        console.log(box);
        input = this;
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                console.log(box);
                box.attr('src', e.target.result);
//                alert($(this).html());
//                $(this).parent().find("div > .blah").attr();
            }

            reader.readAsDataURL(input.files[0]);
        }
    });

</script>