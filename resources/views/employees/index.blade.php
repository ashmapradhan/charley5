

    <!DOCTYPE html>

    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="assets/css/style.css" rel="stylesheet" type="text/css">
    <body>
        <div id="wrapper">
            <div class="topbar">
                <div class="topbar-left">
                    <a href="#" class="logo">
                        <span > <i class="mdi mdi-camera-control"></i> Hague Electric </span>
                        <span class="logo-sm">
                                <i class="mdi mdi-camera-control"></i>
                            </span>
                    </a>
                </div>
                <nav class="navbar-custom">
                    <ul class="float-right">
                                <a class="dropdown-item text-danger" href="#"><i class="mdi mdi-power text-danger"></i> Logout</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="left side-menu">
                <div class="slimscroll-menu" id="remove-scroll">
                    <div id="sidebar-menu">
                        <ul class="metismenu" id="side-menu">
                            <li class="menu-title">Menu</li>
                            <li>
                                <a href="#" class="waves-effect">
                                    <i class="icon-todolist"></i> 
                                    <span> Dashboard </span>
                                </a>
                            </li>
                            <li>
                                <a href="/employee">
                                <i class="icon-share"></i><span> Employees Info </span></a>
                            </li>
                            <li>
                                <a href="placeholder">
                                <i class="mdi mdi-briefcase-check"></i><span> Add a new job </span></a>
                            </li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="content-page">
            <div class="content">
    
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header">
                            <h2>Employees</h2>
                        </div>
                        

                        <div class="card-body">
                            <a href="{{ url('/employee/create') }}" class="btn btn-success btn-sm" title="Add New Employee">
                                <i class="fa fa-plus" aria-hidden="true"></i> Add New
                            </a>
                            <br/>
                            <br/>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Phone</th>
                                            <th>Email</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($employees as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->phone }}</td>
                                            <td>{{ $item->email }}</td>

    
                                            <td>
                                                <a href="{{ url('/employee/' . $item->id) }}" title="View Employee"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                                <a href="{{ url('/employee/' . $item->id . '/edit') }}" title="Edit Employee"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
    
                                                <form method="POST" action="{{ url('/employee' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                    {{ method_field('DELETE') }}
                                                    {{ csrf_field() }}
                                                    <button type="submit" class="btn btn-danger btn-sm" title="Delete Employee" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
    
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </body>
    </html>
