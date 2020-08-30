<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
    <h1>Insert inforation about company</h1>
    <form enctype="multipart/form-data" method="POST" action="/admin/companies/store" class="m-3">
        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="c_name">Name</label>
                <input type="text" class="form-control" id="c_name" name="c_name" placeholder="Name" required>
            </div>
            <div class="form-group col-md-3">
                <label for="c_email">Email</label>
                <input type="email" class="form-control" id="c_email" name="c_email" placeholder="Email">
            </div>
        </div>
        <div class="form-group col-md-3 p-0">
            <label for="c_logo">Logo</label>
            <input type="file" class="form-control" id="c_logo" name="c_logo" placeholder="Logo">
            @csrf
        </div>
        <div class="form-group col-md-3 p-0">
            <label for="c_website">Website</label>
            <input type="text" class="form-control" id="c_website" name="c_website" placeholder="Website">
        </div>
        <input type="submit" class="btn btn-primary" role="button" value="Create">
    </form>
</body>
</html>