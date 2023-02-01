<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>5.7 Практическая работа</title>
</head>
<body>

<form name="employee-form" id="employee-form" method="post" action="{{route('enter_data')}}">
    @csrf
    <div class="form-group">
        <label for="firstName">Name</label>
        <input type="text" id="firstName" name="firstName" class="form-control" required="true">
    </div>
    <br>
    <div class="form-group">
        <label for="surname">LastName</label>
        <input type="text" id="lastName" name="lastName" class="form-control" required="true">
    </div>
    <br>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" class="form-control" required="true">
    </div>
    <br>
    <div class="form-group">
        <label for="position">Position</label>
        <input type="text" id="position" name="position" class="form-control" required="true">
    </div>
    <br>
    <div class="form-group">
        <label for="address">Address</label>
        <input type="text" id="address" name="address" class="form-control" required="true">
    </div>
    <br>
    <div class="form-group">
        <label for="work-data">WorkData</label>
        <textarea  name="workData" class="form-control" required="true"></textarea>
    </div>
    <br><br><br>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

</body>
</html>
