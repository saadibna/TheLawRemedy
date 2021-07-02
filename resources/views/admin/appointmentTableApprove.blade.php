@extends('admin.index')

@section('custom_css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.7.1/css/buttons.dataTables.min.css">

@endsection

@section('content')
<div class="content-wrapper">
    <!-- <table id="example" class="display nowrap" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Date</th>
                <th>Time</th>
                <th>Description</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
        @foreach($appointment as $data)
                        <tr>
                            <td>{{$data->id}}</td>
                            <td>{{$data->name}}</td>
                            <td>{{$data->email}}</td>
                            <td>{{$data->phone}}</td>
                            <td>{{$data->date}}</td>
                            <td>{{$data->time}}</td>
                            <td>{{$data->description}}</td>
                            <td>
                                <a href="{{route('admin.appointment.edit',$data->id)}}"><i class="material-icons" title="Edit">&#xE254;</i></a>
                            </td>
                            <td>
                                <a href="{{route('admin.appointment.delete',$data->id)}}" class="btn btn-danger text-white" role="button">Delete</a></td>
                            </td>
                        </tr>
                    @endforeach
        </tbody>
        <tfoot>
            <tr>
            <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Date</th>
                <th>Time</th>
                <th>Description</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </tfoot>
    </table> -->

    <div class="container-xl">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-6">
                            <h2><b>Approve Appointment List</b></h2>
                        </div>
                       
                    </div>
                </div>
                <table  id="example" class="table table-striped table-hover">
                    <thead>
                        <tr>
                           
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Description</th>
                            <th>Status</th>                           
                            <th>Edit</th>
                            <th>Delete</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($appointment as $data)
                        <tr>
                            <td>{{$data->id}}</td>
                            <td>{{$data->name}}</td>
                            <td>{{$data->email}}</td>
                            <td>{{$data->phone}}</td>
                            <td>{{$data->date}}</td>
                            <td>{{$data->time}}</td>
                            <td>{{$data->description}}</td>
                            <td>{{$data->status}}</td>
                            <td>
                                <a href="{{route('admin.appointment.edit',$data->id)}}"><i class="material-icons" title="Edit">&#xE254;</i></a>
                            </td>
                            <td>
                                <a href="{{route('admin.appointment.delete',$data->id)}}" class="btn btn-danger text-white" role="button">Delete</a></td>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
               
            </div>
        </div>
    </div>
    
</div>
@endsection

@section('custom_js')

<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.print.min.js"></script>


@endsection