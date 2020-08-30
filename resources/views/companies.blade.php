<!DOCTYPE html>
<html>
<head>
    <style>
        .to_new_page {
            background-color: #4caf50;
            color: white;
            padding: 14px 25px;
            margin: 15px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-weight: bold;
        }

        #companies {
            font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 70%;
        }

        #companies td, #companies th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #companies tr:nth-child(even){background-color: #f2f2f2;}

        #companies tr:hover {background-color: #ddd;}

        #companies th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #4CAF50;
            color: white;
        }
    </style>
</head>
<body>
    <h1>Companies</h1>
    <a class="to_new_page" href="/admin/companies/create">Add new company</a>
    <table id="companies">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email </th>
                <th>Logo</th>
                <th>Website </th>
            </tr>
        </thead>
        <tbody>
            @foreach($companies as $company)
            <tr>
                <td>{{$company->name}} </td>
                <td>{{$company->email}} </td>
                <td><img src="{{asset('storage/'.$company->logo)}}" width="40"/></td>
                <td><a href="{{$company->website}}">{{$company->name}}</a></td>
            </tr>
            @endforeach
    </tbody>
    <a class="to_new_page" href="/admin/employees">Employees</a>
</table>
</body>