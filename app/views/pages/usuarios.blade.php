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
                            <div id="table-editable_wrapper" class="dataTables_wrapper form-inline no-footer"><div class="row"><div class="col-md-6 filter-left"><div id="table-editable_filter" class="dataTables_filter"><label><input type="search" class="form-control" aria-controls="table-editable" placeholder="Search a user..."></label></div></div><div class="col-md-6"><div class="DTTT_container"><a class="btn btn-default DTTT_button DTTT_button_pdf" id="ToolTables_table-editable_0"><span>PDF</span><div style="position: absolute; left: 0px; top: 0px; width: 78px; height: 36px; z-index: 99;"><embed id="ZeroClipboard_TableToolsMovie_1" src="assets/plugins/datatables/swf/copy_csv_xls_pdf.swf" loop="false" menu="false" quality="best" bgcolor="#ffffff" width="78" height="36" name="ZeroClipboard_TableToolsMovie_1" align="middle" allowscriptaccess="always" allowfullscreen="false" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" flashvars="id=1&amp;width=78&amp;height=36" wmode="transparent"></div></a><a class="btn btn-default DTTT_button DTTT_button_print" id="ToolTables_table-editable_1" title="View print view"><span>Print</span></a><a class="btn btn-default DTTT_button DTTT_button_xls" id="ToolTables_table-editable_2"><span>Excel</span><div style="position: absolute; left: 0px; top: 0px; width: 85px; height: 36px; z-index: 99;"><embed id="ZeroClipboard_TableToolsMovie_2" src="assets/plugins/datatables/swf/copy_csv_xls_pdf.swf" loop="false" menu="false" quality="best" bgcolor="#ffffff" width="85" height="36" name="ZeroClipboard_TableToolsMovie_2" align="middle" allowscriptaccess="always" allowfullscreen="false" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" flashvars="id=2&amp;width=85&amp;height=36" wmode="transparent"></div></a><a class="btn btn-default DTTT_button DTTT_button_csv" id="ToolTables_table-editable_3"><span>CSV</span><div style="position: absolute; left: 0px; top: 0px; width: 76px; height: 36px; z-index: 99;"><embed id="ZeroClipboard_TableToolsMovie_3" src="assets/plugins/datatables/swf/copy_csv_xls_pdf.swf" loop="false" menu="false" quality="best" bgcolor="#ffffff" width="76" height="36" name="ZeroClipboard_TableToolsMovie_3" align="middle" allowscriptaccess="always" allowfullscreen="false" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" flashvars="id=3&amp;width=76&amp;height=36" wmode="transparent"></div></a></div></div></div><table class="table table-striped table-hover dataTable no-footer" id="table-editable" role="grid" aria-describedby="table-editable_info">
                                    <thead>
                                    <tr role="row"><th class="sorting_asc" rowspan="1" colspan="1" aria-label="First Name" style="width: 132px;">First Name</th><th class="sorting" tabindex="0" aria-controls="table-editable" rowspan="1" colspan="1" aria-label="Last Name: activate to sort column ascending" style="width: 126px;">Last Name</th><th class="sorting" tabindex="0" aria-controls="table-editable" rowspan="1" colspan="1" aria-label="Points: activate to sort column ascending" style="width: 87px;">Points</th><th class="sorting" tabindex="0" aria-controls="table-editable" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 114px;">Status</th><th class="text-center sorting" tabindex="0" aria-controls="table-editable" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 287px;">Action</th></tr>
                                    </thead>
                                    <tbody>












                                    <tr role="row" class="odd">
                                        <td class="sorting_1">Addams</td>
                                        <td>Kim</td>
                                        <td>435</td>
                                        <td>super Admin</td>
                                        <td class="text-center"><a class="edit btn btn-dark" href="javascript:;"><i class="fa fa-pencil-square-o"></i>Edit</a>  <a class="delete btn btn-danger" href="javascript:;"><i class="fa fa-times-circle"></i> Remove</a>
                                        </td>
                                    </tr><tr role="row" class="even">
                                        <td class="sorting_1">Aishmen</td>
                                        <td>Samuel</td>
                                        <td>435</td>
                                        <td>super Admin</td>
                                        <td class="text-center"><a class="edit btn btn-dark" href="javascript:;"><i class="fa fa-pencil-square-o"></i>Edit</a>  <a class="delete btn btn-danger" href="javascript:;"><i class="fa fa-times-circle"></i> Remove</a>
                                        </td>
                                    </tr><tr role="row" class="odd">
                                        <td class="sorting_1">Aster</td>
                                        <td>Fred</td>
                                        <td>567</td>
                                        <td class="center">nothing</td>
                                        <td class="text-center"><a class="edit btn btn-dark" href="javascript:;"><i class="fa fa-pencil-square-o"></i>Edit</a>  <a class="delete btn btn-danger" href="javascript:;"><i class="fa fa-times-circle"></i> Remove</a>
                                        </td>
                                    </tr><tr role="row" class="even">
                                        <td class="sorting_1">Brown</td>
                                        <td>Bobby</td>
                                        <td>545</td>
                                        <td>super Admin</td>
                                        <td class="text-center"><a class="edit btn btn-dark" href="javascript:;"><i class="fa fa-pencil-square-o"></i>Edit</a>  <a class="delete btn btn-danger" href="javascript:;"><i class="fa fa-times-circle"></i> Remove</a>
                                        </td>
                                    </tr><tr role="row" class="odd">
                                        <td class="sorting_1">Carry</td>
                                        <td>John</td>
                                        <td>987</td>
                                        <td>ipsume dolor</td>
                                        <td class="text-center"><a class="edit btn btn-dark" href="javascript:;"><i class="fa fa-pencil-square-o"></i>Edit</a>  <a class="delete btn btn-danger" href="javascript:;"><i class="fa fa-times-circle"></i> Remove</a>
                                        </td>
                                    </tr><tr role="row" class="even">
                                        <td class="sorting_1">Harris</td>
                                        <td>Samantha</td>
                                        <td>567</td>
                                        <td class="center">nothing</td>
                                        <td class="text-center"><a class="edit btn btn-dark" href="javascript:;"><i class="fa fa-pencil-square-o"></i>Edit</a>  <a class="delete btn btn-danger" href="javascript:;"><i class="fa fa-times-circle"></i> Remove</a>
                                        </td>
                                    </tr><tr role="row" class="odd">
                                        <td class="sorting_1">Johnson</td>
                                        <td>Alexa</td>
                                        <td>220</td>
                                        <td>super Admin</td>
                                        <td class="text-center"><a class="edit btn btn-dark" href="javascript:;"><i class="fa fa-pencil-square-o"></i>Edit</a>  <a class="delete btn btn-danger" href="javascript:;"><i class="fa fa-times-circle"></i> Remove</a>
                                        </td>
                                    </tr><tr role="row" class="even">
                                        <td class="sorting_1">Miller</td>
                                        <td>James</td>
                                        <td>525</td>
                                        <td>ipsume dolor</td>
                                        <td class="text-center"><a class="edit btn btn-dark" href="javascript:;"><i class="fa fa-pencil-square-o"></i>Edit</a>  <a class="delete btn btn-danger" href="javascript:;"><i class="fa fa-times-circle"></i> Remove</a>
                                        </td>
                                    </tr><tr role="row" class="odd">
                                        <td class="sorting_1">Morris</td>
                                        <td>Heather</td>
                                        <td>987</td>
                                        <td>ipsume dolor</td>
                                        <td class="text-center"><a class="edit btn btn-dark" href="javascript:;"><i class="fa fa-pencil-square-o"></i>Edit</a>  <a class="delete btn btn-danger" href="javascript:;"><i class="fa fa-times-circle"></i> Remove</a>
                                        </td>
                                    </tr><tr role="row" class="even">
                                        <td class="sorting_1">Paul</td>
                                        <td>Billy</td>
                                        <td>567</td>
                                        <td class="center">nothing</td>
                                        <td class="text-center"><a class="edit btn btn-dark" href="javascript:;"><i class="fa fa-pencil-square-o"></i>Edit</a>  <a class="delete btn btn-danger" href="javascript:;"><i class="fa fa-times-circle"></i> Remove</a>
                                        </td>
                                    </tr><tr role="row" class="odd">
                                        <td class="sorting_1">Smith</td>
                                        <td>John</td>
                                        <td>435</td>
                                        <td>super Admin</td>
                                        <td class="text-center"><a class="edit btn btn-dark" href="javascript:;"><i class="fa fa-pencil-square-o"></i>Edit</a>  <a class="delete btn btn-danger" href="javascript:;"><i class="fa fa-times-circle"></i> Remove</a>
                                        </td>
                                    </tr><tr role="row" class="even">
                                        <td class="sorting_1">Thomson</td>
                                        <td>Scott</td>
                                        <td>435</td>
                                        <td>super Admin</td>
                                        <td class="text-center"><a class="edit btn btn-dark" href="javascript:;"><i class="fa fa-pencil-square-o"></i>Edit</a>  <a class="delete btn btn-danger" href="javascript:;"><i class="fa fa-times-circle"></i> Remove</a>
                                        </td>
                                    </tr></tbody>
                                </table><div class="row"><div class="col-md-6"><div class="dataTables_info" id="table-editable_info" role="status" aria-live="polite">Showing 1 to 12 of 12 entries</div></div><div class="col-md-6"></div></div></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop