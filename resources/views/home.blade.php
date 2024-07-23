<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Welcome to the Mathematics Challenge Competition</title>
<!-- Include Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<style>
    body {
        background-image: url('{{ asset('images/078846320c36.jpg') }}');
        background-size: cover;
        background-repeat: no-repeat;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
    }
    .container {
        background-color: rgba(255, 255, 255, 0.8);
        padding: 30px;
        border-radius: 10px;
    }
</style>
</head>
<body>

<div class="container">
    <h1>Welcome to the Mathematics Challenge Competition</h1>
    <p>Please select your role to continue:</p>

    <div class="d-flex justify-content-center">
        <select class="custom-select w-50" id="roleSelection">
            <option selected>Choose...</option>
            
            <option value="administrator">Administrator</option>
            
        </select>
    </div>

    <div class="text-center mt-4">
        <button class="btn btn-primary" onclick="roleSelected()">Submit</button>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.7.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
function roleSelected() {
    var role = document.getElementById('roleSelection').value;
    switch(role) {
      
        case 'administrator':
            window.location.href = '{{ route("admin.login") }}';
            break;
       
        default:
            alert('Please select a role to continue.');
            break;
    }
}
</script>

</body>
</html>
