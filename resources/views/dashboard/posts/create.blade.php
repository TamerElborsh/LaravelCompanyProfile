
@section('title')
    Dashboar - AddUser
@endsection
@include('dashboard.layout.header')
<style>
    td.project-actions.text-right {
        width: 100%;
    }
    table.table.table-striped.projects {
        width: 100%;
        text-align: center;
    }
</style>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Add User</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                        <li class="breadcrumb-item active">Add User</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>



    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-10 m-auto">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">General</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                <i class="fas fa-minus"></i></button>
                        </div>
                    </div>
                    <form method="POST" action="/dashboard/posts" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="inputName">Post Code</label>
                                <input type="text" name="code" value="{{old('code')}}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="inputName">Author Email</label>
                                <input type="text" name="author_email" value="{{old('author_email')}}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="inputName">Post Title</label>
                                <input type="text" name="title" value="{{old('title')}}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="inputDescription">Post Body</label>
                                <textarea id="inputDescription" name="body" class="form-control" rows="4">
                                    {{old('body')}}
                                </textarea>
                            </div>
                            <div class="form-group">
                                <label for="inputStatus">Category</label>
                                <select class="form-control custom-select" name="category_id">
                                    <option selected disabled>Select one</option>
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="post_image">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                            </div>
                        </div>
                        <input type="submit" value="Save" class="btn btn-success ">

                    </form>

                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>

        </div>

    </section>
    <!-- /.content -->
</div>


@include('dashboard.layout.footer')
