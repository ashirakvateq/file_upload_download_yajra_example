<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Welcome</title>
    <style>
        a{
            margin: 10px;
            text-decoration: none;
            list-style: none;
            font-size: 25px;
            color: #000;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <h1 class="text-center mt-5">File Upload Portal</h1>
            <p class="text-muted text-center mb-5">Upload, view and download files using yajra datatables..</p>
            <div class="d-flex mt-5">
                <a class="m-auto" href="{{route('admin.portal')}}">Admin Portal</a>
                <a class="m-auto" href="{{route('public.portal')}}">Public Portal</a>
            </div>
        </div>
    </div>
</body>

</html>