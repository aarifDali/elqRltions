
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
        <table class="table table-stripped">
            <thead>
                <th>Id</th>
                <th>Region</th>
                <th>State</th>
                <th>Country</th>
            </thead>
            <tbody>
                @foreach ($regions as $r)
                    <tr>
                        <td>{{$r->id}}</td>
                        <td>{{$r->region_name}}</td>
                        <td>{{$r->state->state_name}}</td>
                        <td>{{$r->state->country->country_name}}</td>
                    </tr>                    
                @endforeach
            </tbody>
        </table>
    </div>

<!-- Bootstrap JS and dependencies -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>
