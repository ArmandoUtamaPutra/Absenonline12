@extends('pages.dashboard')
@section('content')

<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Users</li>
</ol>

<div class="container">
    <button class="btn btn-default-btn-xs btn-success" data-toggle="modal" data-target="#users"><i
            class="glyphicon glyphicon-plus"></i> New</button>
    <div class="box">
        <table class="table table-bordered">
            <tbody>
                <tr class="bg-primary">
                    <th>ID</th>
                    <th>Name User</th>
                    <th>Password</th>

                    <th>actions</th>
                </tr>
                <tr>
                    <td>183</td>
                    <td>John Doe</td>
                    <td>1232323</td>
                    <td>
                            <button data-toggle="modal" data-target="#update_program" class="edit" title="Edit"><i
                                class="fa fa-pencil"></i></button>
                                <a href="master_kesiswaan/" class="delete" title="Delete" data-toggle="tooltip"><i
                                    class="fa fa-trash"></i></a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
</div>
@include('modal.add_users')
@endsection
