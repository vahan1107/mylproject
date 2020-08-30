<html>
<head>
<title>Create company</title>
</head>
</html>
<body>
<h1>Insert inforation about company</h1>
<form enctype="multipart/form-data" method="POST" action="/admin/companies/store">
    
    <label for="c_name">Name:</label><br>
    <input type="text" id="c_name" name="c_name"><br>
    <label for="c_email">Email:</label><br>
    <input type="text" id="c_email" name="c_email"><br>
    <label for="c_logo">Logo:</label><br>
    <input type="file" id="c_logo" name="c_logo">
    @csrf
    <br>
    <label for="c_website">Website:</label><br>
    <input type="text" id="c_website" name="c_website"><br><br>
    <input type="submit" value="Create">
</form>
</body>