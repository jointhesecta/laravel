@extends('layouts.default')
@section('content')

    <div class="page-title"> <i class="icon-custom-left"></i>
        <h3><strong>Editable</strong> tables</h3>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading bg-red">
                    <h3 class="panel-title"><strong>Editable </strong> example</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12 m-b-20">
                            <div class="btn-group">
                                <button id="table-edit_new" class="btn btn-danger">
                                    Add New <i class="fa fa-plus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12 table-responsive table-red">

                                <table class="table table-striped table-hover dataTable no-footer" id="table-editable" role="grid" aria-describedby="table-editable_info">
                                    <thead>
                                    <tr role="row"><th class="sorting_asc" rowspan="1" colspan="1" aria-label="First Name" style="width: 132px;">First Name</th><th class="sorting" tabindex="0" aria-controls="table-editable" rowspan="1" colspan="1" aria-label="Last Name: activate to sort column ascending" style="width: 126px;">Last Name</th><th class="sorting" tabindex="0" aria-controls="table-editable" rowspan="1" colspan="1" aria-label="Points: activate to sort column ascending" style="width: 87px;">Points</th><th class="sorting" tabindex="0" aria-controls="table-editable" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 114px;">Status</th><th class="text-center sorting" tabindex="0" aria-controls="table-editable" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 287px;">Action</th></tr>
                                    </thead>
                                    <tbody>



                                    @foreach($users as $user)
                                    <tr role="row" class="odd">
                                        <td class="sorting_1">{{ $user->name }}</td>
                                        <td>{{ $user->username }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>super Admin</td>
                                        <td class="text-center"><a class="edit btn btn-dark" href="javascript:;"><i class="fa fa-pencil-square-o"></i>Edit</a>  <a class="delete btn btn-danger" href="javascript:;"><i class="fa fa-times-circle"></i> Remove</a>
                                        </td>
                                    </tr>
                                    @endforeach






                            </tbody>
                                </table><div class="row">

                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop