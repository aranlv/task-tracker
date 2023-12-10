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
            <a class="nav-link" href="/">View Tasks</a>
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Add Task</a>
            </li>
            </li>
        </div>
    </div>
    </nav>

    <div class="p-5">
          <h1 class="text-center">Add Task</h1>
          <form action="{{route('save')}}" method="POST">
            @csrf
            <div class="mb-3">
              <label for="" class="form-label">Title</label>
              <input type="text" class="form-control" id="" name="title">
            </div>
            <div class="mb-3">
              <label for="" class="form-label">Description</label>
              <input type="text" class="form-control" id="" name="desc">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Due Date</label>
                <input type="date" class="form-control" id="" name="dueDate">
            </div>
            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <select class="form-select" id="status" name="status">
                  <option value="Not Yet">Not Yet</option>
                  <option value="On Going">On Going</option>
                  <option value="Done">Done</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Add</button>
          </form>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>