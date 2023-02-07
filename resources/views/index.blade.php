<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Laravel 9 Multiple Form</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
              integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css" rel="stylesheet">
    </head>
<body>
    <div class="container-fluid">
        <div class="card">
            <div class="card-body"><div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    All Products
                    <a href="{{ route('user.create') }}" class="btn btn-outline-primary btn-sm float-end"> + Add Product</a>
                </div>
                {{--  @php
                echo "<pre>";
                    print_r($tb1->all());
                    exit;
                    @endphp  --}}
                <div class="table table-responsive">
                    <table id="zero_config" class="table table-striped table bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Dob</th>
                                <th>Address</th>
                                <th>Show</th>
                                {{--  <th>Delete</th>  --}}
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($tb1 as $user)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->profession }}</td>
                                    <td>{{ $user->date }}</td>
                                    <td>{{ $user->location }} - {{ $user->address }} - {{ $user->country }}</td>
                                    <td><a class="btn btn-primary" href="{{ route('user.edit',$user->id) }}">Edit</a></td>
                                    {{--  <td><a class="btn btn-primary" href="{{ route('join_table',$user->id) }}">Show</a></td>  --}}
                                    {{--  <td><form action="{{ route('user.destroy',$user->id) }}" method="Post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form></td>  --}}
                                    {{--  <td><div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                        {{--  <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="{{ $user->id }}">View User</a></div>
                                    </div></td>--}}
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
</body>
</html>
