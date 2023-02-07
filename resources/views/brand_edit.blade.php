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
    {{--  @php
    echo "<pre>";
    print_r($tb1->all());
    exit;
   @endphp  --}}
    <main>
        <h1 class="display-6">Student Details</h1>

    <hr/>

    <dl>
        <dt>First Name</dt>
        <dd>{{$tb1->name}}</dd>

        <dt>Last Name</dt>
        <dd>{{$tb1->profession}}</dd>

        <dt>Age</dt>
        <dd>{{$tb1->bio}}</dd>

        <dt>Email</dt>
        <dd>{{$tb1->email}}</dd>
    </dl>

    <div class="d-flex">
        <a href="{{route('user.edit', $tb1->id)}}" class="btn btn-primary m-1">Edit</a>

        <form action="{{ route('user.destroy', $tb1->id) }}" method="POST">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <button class="btn btn-danger m-1">Delete User</button>
        </form>
    </div>
    </main>
</body>
</html>
