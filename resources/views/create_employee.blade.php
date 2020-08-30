<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
    <h1>Insert inforation about employee</h1>
    <form enctype="multipart/form-data" method="POST" action="/admin/employees/store" class="m-3">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="ef_name">First name</label>
                <input type="text" class="form-control" id="ef_name" name="ef_name" placeholder="First name" required>
            </div>
            <div class="form-group col-md-3">
                <label for="el_name">Last name</label>
                <input type="text" class="form-control" id="el_name" name="el_name" placeholder="Last name" required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="e_email">Email</label>
                <input type="email" class="form-control" id="e_email" name="e_email" placeholder="Email">
            </div>
            <div class="form-group col-md-3">
                <label for="e_phone">Phone</label>
                <input type="tel" class="form-control" id="e_phone" name="e_phone" placeholder="077 123456" pattern="0[1-9][0-9] [0-9]{6}" placeholder="Phone">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="companies">Companies</label>
                <select class="form-control" id="companies" name="e_company">
                @foreach($companies as $company)
                    <option value="{{$company->id}}">{{$company->name}}</option>
                @endforeach
                </select>
            </div>
        </div>
        <input type="submit" class="btn btn-primary" role="button" value="Create">
    </form>
</body>
</html>