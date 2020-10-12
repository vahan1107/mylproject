<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
    <h1>Update company inforation</h1>
    <form enctype="multipart/form-data" method="POST" action="/admin/companies/update" class="m-3">
        <input type="hidden" name="c_id" value="{{$company->id}}">
        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="c_name">Name</label>
                <input type="text" class="form-control" id="c_name" name="c_name" placeholder="Name" value="{{$company->name}}" required>
            </div>
            <div class="form-group col-md-3">
                <label for="c_email">Email</label>
                <input type="email" class="form-control" id="c_email" name="c_email" placeholder="Email" value="{{$company->email}}">
            </div>
        </div>
        <div class="form-group col-md-3 p-0">
            <label for="c_logo">Logo</label>
            <input type="file" class="form-control" id="c_logo" name="c_logo" placeholder="Logo">
            @csrf
        </div>
        <div class="form-group col-md-3 p-0">
            <label for="c_website">Website</label>
            <input type="text" class="form-control" id="c_website" name="c_website" placeholder="Website" value="{{$company->website}}">
        </div>
        <input type="submit" class="btn btn-primary" role="button" value="Update">
    </form>
</body>
</html>
