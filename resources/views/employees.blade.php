<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-sm-10"><a class="btn btn-primary" role="button" href="/admin/employees/create">Add new employee</a></div>
            <div class="col-sm-2"><a class="btn btn-primary" role="button" href="/admin/companies">Companies</a></div>
        </div>
        <div class="row pt-1">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">First name</th>
                            <th scope="col">Last name</th>
                            <th scope="col">Company</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Update</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($employees as $employee)
                        <tr>
                            <td>{{$employee->first_name}}</td>
                            <td>{{$employee->last_name}}</td>
                            <td><a href="{{$employee->company_website}}" target="_blank">{{$employee->c_name}}</a></td>
                            <td>{{$employee->email}}</td>
                            <td>{{$employee->phone}}</td>
                            <td>
                                <form action="/admin/employees/update" method="post">
                                    @csrf
                                    <input type="hidden" name="e_id" value="{{$employee->id}}">
                                    <input class="to_new_page" type="submit" value="Update">
                                </form>
                            </td>
                            <td>
                                <form action="/admin/employees/delete" method="get">
                                    @csrf
                                    <input type="hidden" name="e_id" value="{{$employee->id}}">
                                    <input class="to_new_page" type="submit" value="Delete">
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
        </div>
        <div class="row pt-1">
            {{$employees->links()}}
        </div>
    </div>
</body>
</html>