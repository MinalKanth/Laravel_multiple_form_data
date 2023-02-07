<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Laravel 9 Multiple Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css" rel="stylesheet">

    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">

</head>

<body>
    <div class="container">
        <div class="row">
            @include('flash_data')
            <form id="form" action="{{ route('user.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                {{-- @method('PUT')  --}}

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li> {{ $error }} </li>
                            @endforeach
                        </ul>
                    </div>
                    <hr>
                @endif
                <div class="col-md-12">
                    <h1>Form</h1>
                    <button onclick="history.back()" class="btn btn-primary btn-sm">Go Back</button>

                    <hr>

                    <div class="form-row">
                        <div class="form-group">
                            <label>Choose A Photo</label>
                            <input id="uploadImage" type="file" accept="image/*" name="image" required />
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" name="name" id="name" placeholder="Name"
                                required>
                        </div>
                        <span>
                            <input id="date" name="date" class="form-control" value="" type="date"
                                required>

                        </span>
                        {{-- <span>
                                    <input id="element_23_2" name="DOB_day" class="element text" size="2" maxlength="2" value="" type="text" required> /DD

                                </span>
                                <span>
                                    <input id="element_23_1" name="DOB_month" class="element text" size="2" maxlength="2" value="" type="text" required> /MM
                                </span>
                                <span>
                                    <input id="element_23_3" name="DOB_year" class="element text" size="4" maxlength="4" value="" type="text" required> /YYYY
                                </span>  --}}
                    </div>

                </div>
                <div class="form-row">
                    <div class="col">
                        <input type="text" class="form-control" name="profession" id="profession"
                            placeholder="profession" required>
                    </div>
                </div>
                <br>
                <h6>About:</h6>
                <div class="form-row">
                    <div class="col">
                        <input type="text" class="form-control" name="bio" id="bio" placeholder="Bio"
                            required>
                    </div>

                </div><br>
                <h6>Work platform:</h6>
                <div id="dynamic_field">
                    <div class="form-row">
                        <div class="col">
                            <input type="text" class="form-control" name="platform_title[]" id="platform_title"
                                placeholder="Platform" required>
                        </div>
                        <div class="col">
                            <textarea class="form-control" name="description[]" id="description" placeholder="platform description" rows="4"></textarea>
                        </div>

                        <div class="col">
                            <td><button type="button" name="add" id="add" class="btn btn-success"><i
                                        class="fa fa-plus"></i>Add</button></td>
                        </div>
                    </div><br>
                </div><br>
                <h6>Contact:</h6>
                <div class="form-row">
                    <div class="col">
                        <select id="country" name="country" class="form-control country">
                            <option value="" selected disabled>Select Country</option>
                            @foreach ($country as $countries)
                                <option value="{{ $countries->name }}">{{ $countries->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col">
                        <input type="text" class="form-control" name="address" id="address" placeholder="Address"
                            required>
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" name="location" id="location" placeholder="Location"
                            required>
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone"
                            required maxlength="10">
                    </div>
                    <div class="col">
                        <input type="email" class="form-control" name="email" id="email"
                            placeholder="Email" required>
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" name="website" id="website"
                            placeholder="Website">
                    </div>
                </div><br>
                <h6>Social:</h6>
                <div class="form-row">
                    <div class="col">
                        <input type="text" class="form-control" name="linkedin" id="linkedin"
                            placeholder="Linkedin">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" name="twitter" id="twitter"
                            placeholder="Twitter">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" name="facebook" id="facebook"
                            placeholder="facebook">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" name="github" id="github"
                            placeholder="Github">
                    </div>

                </div><br>
                <h6>Skills:</h6>
                <div id="dynamic_field2">
                    <div class="form-row">

                        <div class="col">
                            <input type="text" class="form-control" name="skill[]" id="skill"
                                placeholder="skill" required>
                        </div>
                        <div class="col">
                            <input type="number" class="form-control" name="value[]" id="value"
                                placeholder="value" maxlength="1" required>
                        </div>
                        <div class="col">
                            <td><button type="button" name="add" id="add2" class="btn btn-success"><i
                                        class="fa fa-plus"></i>Add</button></td>
                        </div>
                    </div><br>
                </div>
                <br>
                <h6>Education:</h6>
                <div id="dynamic_field3">
                    <div class="form-row">
                        <div class="col">
                            <input type="text" class="form-control" name="collage_name[]" id="collage_name"
                                placeholder="College Name" required>
                        </div>
                        <div class="col">
                            <input type="month" class="form-control" name="e_start_from[]" id="e_start_from"
                                placeholder="Start From" required>
                        </div>
                        <div class="col">
                            <input type="month" class="form-control" name="e_end_at[]" id="e_end_at"
                                placeholder="End at" required>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" name="e_description[]" id="e_description"
                                placeholder="Description" required>
                        </div>

                        <div class="col">
                            <td><button type="button" name="add" id="add3" class="btn btn-success"><i
                                        class="fa fa-plus"></i>Add</button></td>
                        </div>
                    </div><br>
                </div>
                <br>
                <h6>Work:</h6>
                <div id="dynamic_field4">
                    <div class="form-row">
                        <div class="col">
                            <input type="text" class="form-control" name="company_name[]" id="company_name"
                                placeholder="Company Name">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" name="job_title[]" id="job_title"
                                placeholder="Job Title">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" name="w_location[]" id="w_location"
                                placeholder="Location">
                        </div>
                        <div class="col">
                            <input type="month" class="form-control" name="w_start_from[]" id="w_start_from"
                                placeholder="Start From">
                        </div>
                        <div class="col">
                            <input type="month" class="form-control" name="w_end_at[]" id="w_end_at"
                                placeholder="End at">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" name="w_description[]" id="w_description"
                                placeholder="Description">
                        </div>

                        <div class="col">
                            <td><button type="button" name="add" id="add4" class="btn btn-success"><i
                                        class="fa fa-plus"></i>Add</button></td>
                        </div>
                    </div><br>
                </div>


                <div class="form-row ">

                    <input type="hidden" id="id" name="id" value="0" class="form-control">
                    <div class="mb-3">
                        <input type="submit" name="add_user" id="add_user" value="Add User"
                            class="btn btn-outline-success">
                        <button type="button" id="clear" class="btn btn-outline-warning">Clear</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    {{--  <div class="container">
        <span><br>After Upload the Image will be shown Below: -</span>
        <div id="preview"></div><br>
    </div>  --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
    {!! Toastr::message() !!}
    <script>
        $(document).ready(function() {
            var i = 1;
            $('#add').click(function() {
                i++;
                $('#dynamic_field').append('<div class="form-row" id="row' + i +
                    '"> <div class="col"><input type="text" class="form-control" name="platform_title[]" placeholder="platform title"> </div> <div class="col"> <textarea class="form-control" name="description[]" placeholder="description" rows="4"></textarea> </div> <div class="col"> <td><button type="button" name="add" class="btn btn-danger btn_remove" id="' +
                    i + '"><i class="fa fa fa-trash"></i>Delete</button></td></div></div>');
            });
            $(document).on('click', '.btn_remove', function() {
                var button_id = $(this).attr("id");

                $('#row' + button_id + '').remove();
            });

            $('#add2').click(function() {
                i++;
                $('#dynamic_field2').append('<div class="form-row"  id="row2' + i +
                    '"> <div class="col"><input type="text" class="form-control" name="skill[]" placeholder="skill"></div><div class="col"><input type="number" class="form-control" name="value[]" placeholder="value" maxlength="1"></div> <div class="col"> <td><button type="button" name="add" class="btn btn-danger btn_remove2" id="' +
                    i + '"><i class="fa fa fa-trash"></i>Delete</button></td> </div> </div>');
            });
            $(document).on('click', '.btn_remove2', function() {
                var button_id = $(this).attr("id");

                $('#row2' + button_id + '').remove();
            });


            $('#add3').click(function() {
                i++;
                $('#dynamic_field3').append('<div class="form-row" id="row3' + i +
                    '"> <div class="col"><input type="text" class="form-control" name="collage_name[]" placeholder="College Name"></div><div class="col"><input type="month" class="form-control" name="e_start_from[]" placeholder="Start From"></div><div class="col"><input type="month" class="form-control" name="e_end_at[]" placeholder="End at"></div><div class="col"><input type="text" class="form-control" name="e_description[]" placeholder="Description"></div> <div class="col"> <td><button type="button" name="add"  class="btn btn-danger btn_remove3" id="' +
                    i + '"><i class="fa fa fa-trash"></i>Delete</button></td> </div> </div>');
            });
            $(document).on('click', '.btn_remove3', function() {
                var button_id = $(this).attr("id");

                $('#row3' + button_id + '').remove();
            });

            $('#add4').click(function() {
                i++;
                $('#dynamic_field4').append('<div class="form-row" id="row4' + i +
                    '"> <div class="col"><input type="text" class="form-control" name="company_name[]" placeholder="Company Name"></div><div class="col"><input type="text" class="form-control" name="job_title[]" placeholder="Job Title"></div><div class="col"><input type="text" class="form-control" name="w_location[]" placeholder="Location"></div><div class="col"><input type="month" class="form-control" name="w_start_from[]" placeholder="Start From"></div><div class="col"><input type="month" class="form-control" name="w_end_at[]" placeholder="End at"></div><div class="col"><input type="text" class="form-control" name="w_description[]" placeholder="Description"></div> <div class="col"> <td><button type="button" name="add"  class="btn btn-danger btn_remove4" id="' +
                    i + '"><i class="fa fa fa-trash"></i>Delete</button></td> </div> </div>');
            });
            $(document).on('click', '.btn_remove4', function() {
                var button_id = $(this).attr("id");

                $('#row4' + button_id + '').remove();
            });




            $("#clear").click(function() {
                $("#image").val("");
                $("#name").val("");
                $("#date").val("");
                $("#profession").val("");
                $("#bio").val("");
                $("#country").val("");
                $("#address").val("");
                $("#location").val("");
                $("#phone").val("");
                $("#email").val("");
                $("#website").val("");
                $("#linkedin").val("");
                $("#twitter").val("");
                $("#facebook").val("");
                $("#github").val("");
                $("#platform_title").val("");
                $("#description").val("");
                $("#skill").val("");
                $("#value").val("");
                $("#college_name").val("");
                $("#e_start_from").val("");
                $("#e_end_at").val("");
                $("#e_description").val("");
                $("#company_name").val("");
                $("#job_title").val("");
                $("#w_location").val("");
                $("#w_start_from").val("");
                $("#w_end_at").val("");
                $("#w_description").val("");

            });

            @if (Session::has('message'))
                var type = "{{ Session::get('alert-type', 'info') }}";
                switch (type) {
                    case 'info':
                        toastr.info("{{ Session::get('message') }}");
                        break;

                    case 'warning':
                        toastr.warning("{{ Session::get('message') }}");
                        break;

                    case 'success':
                        toastr.success("{{ Session::get('message') }}");
                        break;

                    case 'error':
                        toastr.error("{{ Session::get('message') }}");
                        break;
                }
            @endif

        });
    </script>
</body>

</html>
