<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Course</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="jumbotron">
            <div class="col-md-6">
                <h2>Edit Course</h2>
                <!-- Logout Button -->
                <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                    @csrf
                    <button type="submit" class="btn btn-secondary mb-3">Logout</button>
                </form>
                <form action="{{ route('courses.update', $course->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" name="name" id="name" value="{{ $course->name }}"
                            class="form-control" placeholder="Enter name">
                    </div>
                    <div class="form-group">
                        <label for="description">Description:</label>
                        <textarea name="description" id="description" class="form-control" rows="3" placeholder="Enter description">{{ $course->description }}</textarea>
                    </div>
                    <form action="{{ route('courses.update', $course->id) }}" style="display: inline;">
                        <button type="submit" class="btn btn-danger btn-sm">Update</button>
                    </form>
            </div>
        </div>
    </div>
</body>

</html>
