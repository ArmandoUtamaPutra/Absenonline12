@extends('pages.dashboard')
@section('content')

<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Absensi</li>
</ol>

<div class="container">
    @if (Session::get('Admin_login'))
 <button class="btn btn-default-btn-xs btn-success" data-toggle="modal" data-target="#absensi"><i
            class="glyphicon glyphicon-plus"></i> New</button>
    @else

    @endif

    <div class="box">
        <table class="table table-bordered">
            <tbody>
             @if (Session::get('Admin_login'))
                    <tr class="bg-primary">
                        <th>No</th>
                        <th>Nama Peserta</th>
                        <th>Time</th>
                        <th>Last Time</th>
                        <th>Date</th>
                        <th>Actions</th>
                    </tr>
                    @foreach ($absensi as $item)
                    <tr>
                        <td>{{ $item->id_peserta }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->jam_masuk }}</td>
                        <td>{{ $item->jam_pulang }}</td>
                        <td>{{ $item->date }}</td>
                        <td>
                            <button data-toggle="modal" data-target="#update_program" class="edit" title="Edit"><i
                            class="fa fa-pencil"></i></button>
                            <a href="absensi/del/{{$item->id_absensi}}" class="delete" title="Delete" data-toggle="tooltip"><i
                            class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                    @endforeach
                @else
                <tr class="bg-primary">

                        <th class="text-center">Nama Peserta</th>
                        <th class="text-center">Time</th>
                        <th class="text-center">Last Time</th>
                        <th class="text-center">Date</th>
                    </tr>
                    @foreach ($absensi as $item)
                    <tr>

                        <td>{{ $item->name }}</td>
                        <td class="text-center">{{ $item->jam_masuk }}</td>
                        <td class="text-center">{{ $item->jam_pulang }}</td>
                        <td class="text-center">{{ $item->date }}</td>
                    </tr>
                    @endforeach
                @endif


            </tbody>
        </table>
    </div>
</div>
</div>
@include('modal.add_absensi')
@endsection
