@extends('master')


@section('content')

<div class="card">
  <div class="card-header">
    <h2>Appointment Information<h2>
  </div>
  <div class="card-body">
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Patient_Name</th>
      <th scope="col">Patient_Gender</th>
      <th scope="col">Patient_Age</th>
      <th scope="col">Patient_Address</th>
      <th scope="col">Booking_Time</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Male</td>
      <td>50</td>
      <td>Dhaka</td>
      <td>10:40 am</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Male</td>
      <td>60</td>
      <td>Dhaka</td>
      <td>10:20 am</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>Female</td>
      <td>70</td>
      <td>Dhaka</td>
      <td>10:20 am</td>
    </tr>
  </tbody>
</table>
</div>
</div>

@endsection