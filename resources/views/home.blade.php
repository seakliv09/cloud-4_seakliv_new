<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
   
</head>
<body>
    <div class="container">
        <a href="{{ route('show-storage') }}" class="btn btn-primary">Show Space Storage</a>
        <div class="d-flex flex-column align-items-center mt-5">
            <div class="col-lg-4">
                @if (session()->has('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif
            </div>
            <form class="col-lg-4" enctype="multipart/form-data" method="POST" action={{ route('upload') }}>
                @csrf
                <div class="mb-3">
                    <label for="basic-url" class="form-label">Firstname</label>
                    <input type="text" name="firstname" placeholder="" class="form-control">
                    @error('firstname') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="mb-3">
                    <label for="basic-url" class="form-label">Lastname</label>
                    <input type="text" name="lastname" placeholder="" class="form-control">
                    @error('lastname') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="mb-3">
                    <input type="file" name="file" class="form-control">
                    @error('file') <span class="text-danger">{{ $message }}</span> @enderror
                </div>    
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="storage" id="flexRadioDefault1" value="space">
                    <label class="form-check-label" for="flexRadioDefault1">
                      Space Storage
                    </label>
                </div>
                <button type="submit" class="btn btn-primary">upload</button>
            </form>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>