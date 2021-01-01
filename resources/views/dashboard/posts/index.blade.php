@section('title')
    Dashboar - posts
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
                    <h1>Posts</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Posts</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <a class="btn btn-info btn-sm" href="{{route('posts .create')}}" style="
    margin: 20px 0;
    font-size: 22px;
">
            Add Post
        </a>
        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Posts</h3>

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
                            Title
                        </th>
                        <th>
                            Image
                        </th>
                        <th>
                            Category
                        </th>
                        <th class="text-center">
                            Views
                        </th>
                        <th>
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($posts as $post)
                        <tr>
                            <td>
                                {{$loop->iteration}}
                            </td>
                            <td>
                                <a>
                                    {{$post->title}}
                                </a>
                                <br/>
                                <small>
                                    Created {{$post->created_at}}
                                </small>
                            </td>
                            <td>
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <img alt="Avatar" class="table-avatar"
                                    </li>
                                </ul>
                            </td>
                            <td class="project_progress">
                                {{$post->category->name}}
                            </td>
                            <td class="project-state">
                                {{$post->views}}
                            </td>
                            <td class="project-actions text-right">
                                <form action="" method="POST">
                                    <a class="btn btn-primary btn-sm" href="{{'dashboard/posts /{$post->id}' }}">
                                        <i class="fas fa-folder">
                                        </i>
                                        View
                                    </a>
                                    <a class="btn btn-info btn-sm" href="">
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                        Edit
                                    </a>
                                    {{--                                    @method('DELETE')--}}
                                    {{--                                    @csrf--}}
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
