<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-sm-10"><a class="btn btn-primary" role="button" href="/admin/companies/create">Add new company</a></div>
            <div class="col-sm-2"><a class="btn btn-primary" role="button" href="/admin/employees">Employees</a></div>
        </div>
        <div class="row pt-1">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Logo</th>
                            <th scope="col">Website</th>
                            <th scope="col">Update</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($companies as $company)
                        <tr>
                            <td>{{$company->name}}</td>
                            <td>{{$company->email}}</td>
                            <td><img src="{{asset('storage/'.$company->logo)}}" width="40"/></td>
                            <td><a href="{{$company->website}}" target="_blank">{{$company->name}}</a></td>
                            <td>
                                <form action="/admin/companies/update" method="get">
                                    @csrf
                                    <input type="hidden" name="c_id" value="{{$company->id}}">
                                    <input class="to_new_page" type="submit" value="Update">
                                </form>
                            </td>
                            <td>
                                <form action="/admin/companies/delete" method="get">
                                    @csrf
                                    <input type="hidden" name="c_id" value="{{$company->id}}">
                                    <input class="to_new_page" type="submit" value="Delete">
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
        </div>
        <div class="row pt-1">
            {{$companies->links()}}
        </div>
    </div>
</body>
</html>
