<!DOCTYPE html>
<html>
<head>
    <title>Example Email</title>
</head>
<body>
<h1>Example Email</h1>
<table class="table table-striped">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Phone</th>
        <th scope="col">Job Title</th>
        <th scope="col">Address</th>
        <th scope="col">CV</th>
    </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">{{$applicant->id}}</th>
            <td>{{$applicant->name}}</td>
            <td>{{$applicant->email}}</td>
            <td>{{$applicant->phone}}</td>
            <td>{{$applicant->job_title}}</td>
            <td>{{$applicant->address}}</td>
            <td><a href="{{asset($applicant->getFile())}}" download>Download File</a></td>

        </tr>

    </tbody>
</table>
</body>
</html>
