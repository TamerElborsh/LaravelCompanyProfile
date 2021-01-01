@section('title')
    Dashboar - users
@endsection
@include('dashboard.layout.header')
<style>
    td.project-actions.text-right {
        width: 100%;
    }
    table.table.table-striped.projects {
        width: 100%;
        text-align: center;
    }section.content {
          text-align: center;
      }
</style>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Users</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Users</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <a class="btn btn-info btn-sm" href="{{route('users .create')}}" style="
    margin: 20px 0;
    font-size: 22px;
">
            Add user
        </a>
        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Projects</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                        <i class="fas fa-minus"></i></button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                        <i class="fas fa-times"></i></button>
                </div>
            </div>

            <div class="card-body p-0">
                <table class="table table-striped projects">
                    <thead>
                    <tr>
                        <th style="width: 1%">
                            #
                        </th>
                        <th style="width: 20%">
                            Name
                        </th>
                        <th style="width: 30%">
                            email
                        </th>
                        <th>
                            control
                        </th>

                        <th style="width: 20%">
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>
                                {{$loop->iteration}}
                            </td>
                            <td>
                                <a>
                                    {{$user->name}}
                                </a>
                                <br/>
                                <small>
                                    Created {{$user->created_at}}
                                </small>
                            </td>
                            <td class="project-state">
                                {{$user->email}}
                            </td>
                            <td class="project-actions text-right">
                                <form action="" method="POST">
                                    <a class="btn btn-info btn-sm" href="{{route('users .edit',$user->id)}}">
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                        Edit
                                    </a>
                                    @method('DELETE')
                                    @csrf
{{--                                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>--}}
                                    <a class="btn btn-sm btn-danger" href="{{route('users .destroy',$user->id)}}">
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                        Delete
                                    </a>
                                </form>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@include('dashboard.layout.footer')
