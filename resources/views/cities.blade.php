
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Regions DB</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Custom styles */
        body {
        font-family: Arial, sans-serif;
        background-color: lightblue; 
        }
  </style>
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card p-5">

                    @foreach ($cities as $city)
                        <h1>{{ $city->name }}</h1>

                        <ul>
                            @foreach ($city->stores as $store)
                                <li>{{ $store->name }}</li>
                            @endforeach
                        </ul>
                    @endforeach

                </div>
            </div>
        </div>
    </div>

<!-- Bootstrap JS and dependencies -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>
