{{-- @extends('layouts.app') --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Items to Store</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<body>
<main>
        <center>
            <label for="">
                <h1>E-Invoice</h1>
            </label>
        </center>
            <!-- Items -->
            <div id="items" class="container jumbotron" style="overflow:auto;">
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="items-name">Items Name</label>
                        <input type="text" value="" name="item-name" class="form-control" placeholder="Enter Item Name">
                    </div>
                    <div class="form-group">
                        <label for="mrp">MRP</label>
                        <input type="number" default="0" name="mrp" class="form-control" min="0" id="mrp" placeholder="0.0" value="0.0">
                    </div>
                    <button id="add-item" class="btn btn-primary">Add Item</button>
                </form>
            </div>
    </main>
</body>
</html>