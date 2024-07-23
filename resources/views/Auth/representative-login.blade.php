<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>School Representative Login</title>
<!-- Include Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<style>
    body {
        
        background-image: url('{{ asset('images/maths-anxiety.jpg') }}');
        background-size: cover;
        background-repeat: no-repeat;
    }
</style>
</head>
<body>

<div class="container mt-5">
    <h2>School Representative Login</h2>
    <form action="/school_rep_dashboard" method="post">
        <div class="form-group">
            <label for="schoolRegNumber">School Registration Number:</label>
            <input type="text" class="form-control" id="schoolRegNumber" name="schoolRegNumber" required>
        </div>
        <div class="form-group">
            <label for="repPassword">Password:</label>
            <input type="password" class="form-control" id="repPassword" name="repPassword" required>
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
    </form>
</div>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
