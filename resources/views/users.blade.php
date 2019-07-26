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
    <div class="box">
        <table class="table table-bordered">
            <tbody>
                <tr class="bg-primary">
                    <th>ID</th>
                    <th>Name User</th>
                    <th>Password</th>
                    <th>Actions</th>
                </tr>
                @foreach ($users as $item)
                <tr>
                    <td>{{ $item->id}}</td>
                    <td>{{ $item->name_user }}</td>
                    <td>{{ $item->password }}</td>
                    <td>
                        <button data-toggle="modal" data-target="#update_program" class="edit" title="Edit"><i
                                class="fa fa-pencil"></i></button>
                        <a href="users/del/{{$item->id}}" class="delete" title="Delete" data-toggle="tooltip"><i
                                class="fa fa-trash"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
</div>
@include('modal.add_users')
@endsection
