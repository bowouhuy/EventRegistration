<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <script src="assets/js/jquery-3.5.1.min.js"></script>
    <script src="assets/js/script.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form class="col-6 mt-4 form-validation" method="POST"> 
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="nama form-control" name="nama" id="nama">
                <small id="nama-alert" class="form-text text-danger"></small>
            </div>
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="text" class="email form-control" id="email" name="email">
                <small id="email-alert" class="form-text text-danger"></small>
            </div>
            <div class="form-group">
                <label for="hp">Nomor Handphone</label>
                <input type="text" class="hp form-control" id="hp" name="hp">
                <small id="hp-alert" class="form-text text-danger"></small>
            </div>
            <input type="hidden" name="event" value="1">
            <div class="submit btn btn-primary" id="submit">Submit</div>
            <button type="submit">Masukk</button>
        </form>
        <div class="tampildata"></div>
        
    </div>
</body>
</html>
