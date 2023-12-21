<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TaskTracker</title><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">TaskTracker</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">View Tasks</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="add">Add Task</a>
            </li>
        </div>
    </div>
    </nav>

    <h1 class="text-center">View Tasks</h1>
    {{-- <table class="table table-bordered">
        <thead>
            <tr>
                <th>Status</th>
                <th>Due Date</th>
                <th>Title</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tasks as $t)
                <tr>
                  <td>{{$t->status}}</td>
                  <td>{{$t->dueDate}}</td>
                  <td>{{$t->title}}</td>
                  <td>{{$t->desc}}</td>
                  <td>
                    <a href="{{route('edit', $t->id)}}" class="btn btn-success">Edit</a>
                    <form action="{{route('delete', $t->id)}}" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                  </td>
                </tr>
            @endforeach
        </tbody>
    </table> --}}

    @foreach($categories as $category)
        <h3 class="text-center">{{$category->categoryName}}</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Status</th>
                    <th>Due Date</th>
                    <th>Title</th>
                    <th>Description and Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($category->tasks as $task)
                    <tr>
                        <td>{{$task->status}}</td>
                        <td>{{$task->dueDate}}</td>
                        <td>{{$task->title}}</td>
                        <td style="width: 18rem;">{{$task->desc}}
                            <img src="{{asset('/storage/image/'.$task->image)}}" class="card-img-top" alt="...">
                        </td>
                        <td>
                            <a href="{{route('edit', $task->id)}}" class="btn btn-success">Edit</a>
                            <form action="{{route('delete', $task->id)}}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endforeach

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>