@section('title')
    Dashboar - Contacts
@endsection
@include('dashboard.layout.header')
<style>

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
                    <h1>Contacts</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Contacts</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Contacts</h3>

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
                        <th>
                            #
                        </th>
                        <th>
                            FullNmae
                        </th>
                        <th>
                            Email
                        </th>
                        <th>
                            subject
                        </th>
                        <th class="text-center">
                            message
                        </th>
                        <th>
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($contacts as $contact)
                        <tr>
                            <td>
                                {{$loop->iteration}}
                            </td>
                            <td>
                                <a>
                                    {{$contact->name}}
                                </a>
                                <br/>
                                <small>
                                    Created {{$contact->created_at}}
                                </small>
                            </td>

                            <td class="project_progress">
                                {{$contact->email}}
                            </td>
                            <td class="project-state">
                                {{$contact->subject}}
                            </td>
                            <td class="project-state">
                                {{$contact->message}}
                            </td>
                            <td class="project-actions text-right">
                                <form action="contacts/destroy" method="DELETE">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
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
