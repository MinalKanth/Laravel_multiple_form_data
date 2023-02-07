

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<style>
    label{
        font-weight: 600;
    }
</style>

</head>
<body>


{{--  @foreach $users as $user  --}}
    <body>
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <div class="card">
                        <div class="card-body">
                            <td><img class="img-account-image  mb-2"
                            src="{{ asset('users') . '/' . $tb1->image }}" alt="user image" width="200" style="bordered"></td>

                            <br><br><label>Name: {{ $tb1->name }}</label><br>
                            <label>Dob: {{ $tb1->date }}</label><br>
                            <label>Address: {{ $tb1->location }} - {{ $tb1->address }} - {{ $tb1->country }}</label><br>
                            <label>Email: {{ $tb1->email }}</label><br>
                            <label>Phone: {{ $tb1->phone }}</label><br>
                            <label>links: {{ $tb1->email }}</label><br>
                            <label>links: {{ $tb1->website }}</label><br>
                            <label>links: {{ $tb1->linkedin }}</label><br>
                            <label>links: {{ $tb1->twitter }}</label><br>
                            <label>links: {{ $tb1->facebook }}</label><br>
                            <label>links: {{ $tb1->github }}</label><br>
                            <h5>User Id: {{ $id }}</h5><br>
                            {{--  <label>links: {{ $data }}</label><br>  --}}
                           {{--  <label> @php print_r($data->get()); @endphp</label>  --}}
                            {{--  <label>links: {{ $tb2 }}</label><br>  --}}

                        </div>
                    </div>

                    <div class="card">
                        <div class="card-title">Education -
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Started</th>
                                                <th>College Name</th>
                                                <th>About</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @forelse ($datas_tb4 as $t2)
                                            <tr>
                                            <tr>
                                                <td>{{ $t2['e_start_from'] }}</td>
                                                <td>{{ $t2['collage_name'] }}</td>
                                                <td>{{ $t2['e_description'] }}</td>

                                                @empty
                                                <td colspan="3"> No Data of users Found</td>
                                            </tr>
                                            @endforelse
                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-title">Work Experience -
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Started</th>
                                                <th>College Name</th>
                                                <th>About</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @forelse ($datas_tb5 as $t5)
                                            <tr>
                                                <td>{{ $t5['w_start_from'] }}</td>
                                                <td>{{ $t5['company_name'] }}</td>
                                                <td>{{ $t5['job_title'] }}</td>

                                            @empty
                                                <td colspan="3"> No Data of users Found</td>
                                            </tr>
                                            @endforelse

                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-8">
                    <div class="card">
                        <div class="card-title">Skills
                            <div class="card-body">

                                {{--  datas.toString();  --}}
{{--  @php
                                dd($datas);
@endphp  --}}


                                @forelse ($datas as $data)
                                            <tr><td><div class="progress-bar" role="progressbar" width:{{ $data['value'] }}% required>{{ $data['skill'] }} - {{ $data['value'] }}%</div></td><br>
                                    @empty
                                                <td> No Data of users Found</td>
                                            </tr>
                                            @endforelse

                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <label> BIO : </label><br>
                            <p>{{ $tb1->bio }}</p>
                            <div class="row">
                                <div class="col-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <label> Sass Application : </label><br>
                                            <p>About Saas Application</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <label> Git Contributer : </label><br>
                                            <p>About Git Contributer</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <label> Photography : </label><br>
                                            <p>About photography</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <label> mobile Apps : </label><br>
                                            <p>About mobile Apps</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
    </body>

</body>

</html>
