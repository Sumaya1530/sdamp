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
    
<h2>Medicine for Patient</h2>
<br>
<h3>Patient Information</h3>
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
Gender:
<select class="rectanglecompanyposition" >
<option value=""> - </option>
<option value="male">Male</option>
<option value="female">Female</option>
</select>
</div>
<br>
<div>
  Birth Date: <input type="date" name="myDate">
</div>
<br>
<div>
   Weight: <input type="number" name="myNumber">
</div>
<br>
<br>
<h3>Medication List</h3>

<div>
   Medicine Name: <input type="text" name="myName">
</div>
<br>
<div>
  Date started: <input type="date" name="myDate">
</div>
<br>
<div>
  Date stopped: <input type="date" name="myDate">
</div>
<br>
<div>
    Doses: <input type="text" name="myName">
</div>
<br>
<div>
    Frequency: <input type="text" name="myName">
</div>
<br>
<div>
    Doctor Name: <input type="text" name="myName">
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