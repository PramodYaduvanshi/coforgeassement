<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Import Crew Rosters</title>
    <style>
        /* Your custom CSS styles go here */
    </style>
</head>
<body>
    <div class="container">
        <div class="col-md-6">
            <form action="/upload-crew-roster" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="messages">            
                </div>
                <div class="fields">
                    <div class="input-group mb-3">
                        <input type="file" class="form-control" id="import_csv" name="import_csv" accept=".csv">
                        <label class="input-group-text" for="import_csv">Upload</label>
                    </div>
                </div>
                <button type="submit" class="btn btn-success">Import Now</button>
                <a href="{{ asset('files/roster_formate.csv') }}" class="pull-right" download>Download Format </a>
            </form>
            
        </div>
        <a href="{{ url('crew-rosters-list') }}" class="pull-right" >Go to List </a>
    </div>
</body>
</html>