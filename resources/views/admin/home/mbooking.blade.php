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
      <th>ID</th>
      <th>Patient_Name</th>
      <th>Appointment_Address</th>
      <th>Doctor_Name</th>
      <th>Booking_Date</th>
      <th>Booking_Time</th>
      <th>Cancel_Appointment</th>
    </tr>
  </thead>
  <tbody>

  @foreach($mbooking as $mbookingdata)

    <tr>
      <th> {{$mbookingdata->id}} </th>
      <td>{{$mbookingdata->Patient_Name}}</td>
      <td>{{$mbookingdata->Appointment_Address}}</td>
      <td>{{$mbookingdata->Doctor_Name}}</td>
      <td>{{$mbookingdata->Booking_Date}}</td>
      <td>{{$mbookingdata->Booking_Time}}</td>
      <td>
        <button class="btn btn-danger">cancel</button>
      </td>
    </tr>
    @endforeach

  </tbody>
</table>

</div>
</div>

@endsection