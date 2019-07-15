@extends('pages.dashboard')
@section('content')

<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Absensi</li>
  </ol>

<div class="container">
    <div class="box">
	<table class="table table-hover">
        <tbody><tr>
          <th>ID</th>
          <th>User</th>
          <th>Time</th>
          <th>Date</th>
          <th>Status</th>
          <th>Reason</th>
        </tr>
        <tr>
          <td>183</td>
          <td>John Doe</td>
          <td>11.00</td>
          <td>11-7-2014</td>
          <td><span class="label label-success">Approved</span></td>
          <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
        </tr>
        <tr>
          <td>219</td>
          <td>Alexander Pierce</td>
          <td>11.00</td>
          <td>11-7-2014</td>
          <td><span class="label label-warning">Pending</span></td>
          <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
        </tr>
        <tr>
          <td>657</td>
          <td>Bob Doe</td>
          <td>11.00</td>
          <td>11-7-2014</td>
          <td><span class="label label-primary">Approved</span></td>
          <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
        </tr>
        <tr>
          <td>175</td>
          <td>Mike Doe</td>
          <td>11.00</td>
          <td>11-7-2014</td>
          <td><span class="label label-danger">Denied</span></td>
          <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
        </tr>
      </tbody>
    </table>
</div>
	</div>
</div>
@endsection
