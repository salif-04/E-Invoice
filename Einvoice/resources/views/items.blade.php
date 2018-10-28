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
@if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/dashboard') }}">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
<main>
        <center>
            <label for="">
                <h1>E-Invoice</h1>
            </label>
        </center>
            <!-- Items -->
            <div id="items" class="container jumbotron" style="overflow:auto;">
                {{ Form::open(array('action' => 'Billing\ItemsController@store' , 'method' => 'POST' , 'id' => 'item-form' , 'name' => 'item-form')) }}                    
                <form action="http://localhost/E-Invoice/Einvoice/public/items" method="POST">
                    <div class="form-group">
                        {{Form::label('i_name' , 'Item\'s Name')}}
                        {{Form::text('item-name' , 'Enter the name' ,['class' => 'form-control'])}}
                    </div>
                    <div class="form-group">
                        {{Form::label('i_price' , 'Item\'s Price')}}
                        {{Form::input('number' , 'price' , '0.0' ,['class' => 'form-control' , 'min' => '0'])}}
                    </div>
                    <button id="add-item" class="btn btn-primary">Add Item</button>
                </form>
                {{ Form::close() }}
            </div>
    </main>
</body>
</html>