<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>AttendanceGroups</title>
</head>
<body>
    <div class="container">
    <h1>AttendanceGroups</h1>


@if (count($attendanceroups) == 0)
    <p>There is no attendanceroup</p>
@endif

<a class="btn btn-primary" href="{{route('attendanceroup.create')}}">Create new attendanceroup</a>
<table class="table table-striped">
<tr>
    <th>Id</th>
    <th>Name</th>
    <th>Description</th>
    <th>Place</th>
    <th>Phone</th>
<!--<th>Image Url</th>
    <th>Actions</th>
-->
</tr>


@foreach ($attendancegroups as $attendancegroups)
    <tr>
        <td>{{$attendancegroup->id}}</td>
        <td>{{$attendancegroup->name}}</td>
        <td>{{$attendancegroup->description}}</td>
        <td>{{$attendancegroup->difficulty}}</td>
        <td>{{$attendancegroup->school_id}}</td>
    <!--   {{-- <td>{{$client->company_id}}</td> --}}
        <td>{{$client->clientCompany->name}}</td>
        <td>{{$client->image_url}}</td>
-->
        <td>
            <a class="btn btn-primary" href="{{route('attendancegroup.edit', [$attendancegroup])}}">Edit</a>
            <a class="btn btn-secondary" href="{{route('attendancegroup.show', [$attendancegroup])}}">Show</a>

            <form method="post" action='{{route('attendancegroup.destroy', [$attendancegroup])}}''>
                @csrf
                <button class="btn btn-danger" type="submit">Delete</button>
            </form>
        </td>
    </tr>
@endforeach

</table>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>