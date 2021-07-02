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
                            <h2><b>Appointment</b></h2>
                        </div>
                        <div class="col-sm-6">
                            <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New Appointment</span></a>
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
                            <th>Action</th>
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
                            <form method="post" action="{{route('admin.appointment.approve',$data->id)}}">
                                @csrf
                                 @method('put')
                                <input type="hidden" name="status" value="approve" >
                                <button class="dropdown-item fa fa-check-circle m-r-5 btn btn-success"
                                 onclick="return confirm('Are you confirm to verify this?')">
                                 Verify & Send
                                 </form>
                                 </td>

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
    <!-- Edit Modal HTML -->
    <div id="addEmployeeModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{route('admin.form.appointment')}}" method="post">
                    @csrf
                    <div class="modal-header">
                        <h4 class="modal-title">Add New Appointment</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input name="name" type="text" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input name="email" type="email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input name="phone" type="text" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="date">Date</label>
                            <input name="date" type="date" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="time">Time</label>
                            <input name="time" type="time" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="description" class="form-control" required></textarea>
                        </div>
                        
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <input type="submit" class="btn btn-success" value="Add">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Edit Modal HTML -->
    <div id="editEmployeeModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form>
                    <div class="modal-header">
                        <h4 class="modal-title">Edit Appointment</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="text" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Date</label>
                            <input type="date" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Time</label>
                            <input type="time" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea class="form-control" required></textarea>
                        </div>
                        
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <input type="submit" class="btn btn-info" value="Save">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Delete Modal HTML -->
    <div id="deleteEmployeeModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form>
                    <div class="modal-header">
                        <h4 class="modal-title">Delete Employee</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <p>Are you sure you want to delete these Records?</p>
                        <p class="text-warning"><small>This action cannot be undone.</small></p>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <input type="submit" class="btn btn-danger" value="Delete">
                    </div>
                </form>
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