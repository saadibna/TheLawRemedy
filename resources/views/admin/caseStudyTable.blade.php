@extends('admin.index')


@section('content')
<div class="content-wrapper">
     
<body>
    <div class="container-xl">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-6">
                            <h2><b>Case Study</b></h2>
                        </div>
                        <div class="col-sm-6">
                            <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New Case</span></a>
                        </div>
                    </div>
                </div>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            
                            <th>ID</th>
                            <th>Case Name</th>
                            <th>Lawyer Name</th>
                            <th>Description</th>
                            <th>Date</th>
                            <th>Client Type</th>
                            <th>Image</th>
                            <th>Edit</th>
                            <th>Delete</th>

                        </tr>
                    </thead>
                    <tbody>
                    @foreach($case as $data)
                        <tr>
                            <td>{{$data->id}}</td>
                            <td>{{$data->case_name}}</td>
                            <td>{{$data->lawyer_name}}</td>
                            <td>{{$data->description}}</td>
                            <td>{{$data->date}}</td>
                            <td>{{$data->client_type}}</td>
                            <td><img src="{{asset($data->image)}}" alt="" height="50" width="100"></td>

                            <td>
                                <a href="{{route('admin.case.edit',$data->id)}}"><i class="material-icons"  title="Edit">&#xE254;</i></a>
                            </td>
                            <td>
                                <a href="{{route('admin.case.delete',$data->id)}}" class="btn btn-danger text-white" role="button">Delete</a></td>

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
                <form action="{{route('admin.form.case')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-header">
                        <h4 class="modal-title">Add New Case Study</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Case Name</label>
                            <input name="case_name" type="text" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label>Lawyer Name</label>
                            <input name="lawyer_name" type="text" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="client_type">Client Type</label>
                            <select name="client_type" class="form-control select2" style="width: 100%;">
                                <option value="Employer" selected="selected">Employer</option>
                                <option value="Business">Business</option>
                                <option value="People">People</option>
                                <option value="Sponsor">Sponsor</option>
                                <option value="Attorney">Attorney</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea name="description" class="form-control" required></textarea>
                        </div>

                        <div class="form-group">
                            <label>Date</label>
                            <input name="date" type="date" class="form-control" required>
                        </div>


                        <div class="form-group">
                            <label for="exampleInputFile">Upload Image</label>
                            <div class="input-group">
                                {{--<div class="custom-file">--}}
                                    {{--<input type="file" class="custom-file-input" id="exampleInputFile">--}}
                                    {{--<label class="custom-file-label" for="exampleInputFile">Upload Image</label>--}}
                                {{--</div>--}}
                                {{--<div class="input-group-append">--}}
                                    {{--<span class="input-group-text">Upload</span>--}}
                                {{--</div>--}}
                            </div>
                            <input type="file" id="myFile" name="image">
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
                        <h4 class="modal-title">Edit Case Study</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                    <div class="form-group">
                            <label>Case Name</label>
                            <input type="text" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label>Lawyer Name</label>
                            <input type="text" class="form-control" required>
                        </div>
                        
                        <div class="form-group">
                            <label>Client Type</label>
                            <input type="text" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label>Description</label>
                            <textarea class="form-control" required></textarea>
                        </div>

                        <div class="form-group">
                            <label>Date</label>
                            <input type="date" class="form-control" required>
                        </div>
                        

                        <div class="form-group">
                    <label for="exampleInputFile">Upload Image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Upload Image</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
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
</body>

</div>
@endsection