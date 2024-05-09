<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Courses</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>All Courses</h1>

        <!-- New Course Button -->
        <a href="/courses/createPage" class="btn btn-primary mb-3">New Course</a>

        <!-- Logout Button -->
        <form action="{{ route('logout') }}" method="POST" style="display: inline;">
            @csrf
            <button type="submit" class="btn btn-secondary mb-3">Logout</button>
        </form>

        <!-- Courses Table -->
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($courses as $course)
                    <tr>
                        <td>{{ $course->name }}</td>
                        <td>{{ $course->description }}</td>
                        <td>
                            <!-- Edit Button -->
                            <a href="{{ route('courses.edit', $course->id) }}" class="btn btn-primary btn-sm">Edit</a>

                            <!-- Delete Button -->
                            <form action="{{ route('courses.destroy', $course->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- Bootstrap JS (Optional) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
