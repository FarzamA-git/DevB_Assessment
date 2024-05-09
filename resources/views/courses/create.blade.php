<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Course</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h1>Create Course</h1>
        <!-- Logout Button -->
        <form action="{{ route('logout') }}" method="POST" style="display: inline;">
            @csrf
            <button type="submit" class="btn btn-secondary mb-3">Logout</button>
        </form>

        <!-- Validation Errors -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('courses.store') }}">
            @csrf

            <!-- Course Name -->
            <div class="form-group">
                <label for="name">Course Name:</label>
                <input type="text" id="name" name="name" class="form-control" value="{{ old('name') }}"
                    required autofocus>
            </div>

            <!-- Course Description -->
            <div class="form-group">
                <label for="description">Course Description:</label>
                <textarea id="description" name="description" class="form-control" required>{{ old('description') }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Create Course</button>
        </form>
    </div>
    <!-- Bootstrap JS (Optional) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
