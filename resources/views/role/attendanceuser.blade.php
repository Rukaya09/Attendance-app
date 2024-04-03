@include('layouts.header')
@include('layouts.topnav')
@include('layouts.sidebar')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Form</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">


                <div class="form-group">
                    <form method="POST" action="{{ route('store') }}">
                        @csrf
                        <label for="email">Email:</label>
                        <input type="email" name="email" required><br>
                        <label for="password">Password:</label>
                        <input type="password" name="password" required><br>
                        <label for="is_active">Is Active:</label>
                        <input type="number" name="is_active" required><br>
                        <label for="role_id">Role:</label>
                        <input type="number" name="role_id" required><br>
                        @foreach ($role as $r)
                        <option value="{{ $r->id }}">{{ $r->name }}</option>
                        @endforeach
                        </select>
                        <input type="submit" value="submit">
                    </form>

                </div>
            </div>

            <!-- Bootstrap JS (optional, if you need JavaScript features) -->
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>

@include('layouts.footer')