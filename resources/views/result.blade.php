<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Option 1: Include in HTML -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <title>Show File</title>
</head>
<body>
    <div class="container">
        <a href="{{ route('home') }}" class="btn btn-primary mt-5" >Home</a>
       <h1 class="mt-5">Space Storage</h1>
       <div class="d-flex justify-content-center align-items-center mb-5">
        <table class="table table-dark" style="max-width:700px">
            <tr>
                <th>Id</th>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Action</th>
            </tr>
            @foreach ($components as $component )
                <tr>
                    <td>{{ $component->id }}</td>
                    <td>{{ $component->firstname }}</td>
                    <td>{{ $component->lastname }}</td>
                   <td><a href="<?php echo "https://space-cloud-quiz4.sgp1.digitaloceanspaces.com/quiz-4/" . $component->file; ?>"><i class="bi bi-eye-fill"></i></a></td>
                </tr>
            @endforeach
        </table>
       </div>
    </div>
   
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>