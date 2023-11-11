@extends('master')


@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h2>Add Doctor</h2>
  <form>
    <div>
    First Name: <input type="text" name="myName">
</div>
<br>
<div>
   Last Name: <input type="text" name="myName">
</div>
<br>
<div>
   Address: <input type="text" name="myName">
</div>
<br>
<div>
   Mobile Number: <input type="number" name="myNumber">
</div>
<br>
<div>
<div>
Degree:
<select class="rectanglecompanyposition" >
<option value=""> - </option>
<option value="Fuhrparkleiter">Fuhrparkleiter</option>
<option value="Qualitätsmanagement">Qualitätsmanagement</option>
<option value="Geschäftsführung">Geschäftsführung</option>
</select>
</div>
<br>

<div>
  Date: <input type="date" name="myDate">
</div>
<br>
<div>
   Working days:
   <label>
<input type="checkbox" name="days[]" value="monday"> Monday
</label>
<label>
<input type="checkbox" name="days[]" value="tuesday"> Tuesday
</label>
<label>
<input type="checkbox" name="days[]" value="wednesday"> Wednesday
</label>
<label>
<input type="checkbox" name="days[]" value="thursday"> Thursday
</label>
<label>
<input type="checkbox" name="days[]" value="friday"> Friday
</label>
<label>
<input type="checkbox" name="days[]" value="saturday"> Saturday
</label>
<label>
<input type="checkbox" name="days[]" value="sunday"> Sunday
</label>
</div>
<div>
   Email: <input type="email" name="myEmail">
</div>
<br>
<div>
  <input type="submit" name="submit Now">
</div>
<br>
  </form>
</body>
</html>

@endsection