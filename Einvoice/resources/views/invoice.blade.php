<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Billings</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <!-- jsPDF -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.4.1/jspdf.debug.js" integrity="sha384-THVO/sM0mFD9h7dfSndI6TS0PgAGavwKvB5hAxRRvc0o9cPLohB0wb/PTA7LdUHs" crossorigin="anonymous"></script>
    
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>  
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.5/jspdf.min.js"></script>
    <style>
        #footer {
            position : fixed;
            display : block;
            background-color : grey;
            bottom : 2px;
            z-index : 1;
            width : 100%;
        }
        /*table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }*/
    </style>
</head>
<body>
    <main>
        <center>
            <label for="">
                <h1>E-Invoice</h1>
            </label>
        </center>
        <div class="row">
            <!-- Items -->
            <div id="items" class="col-6 jumbotron" style="overflow:auto;">
                <!-- <form action="">-->
                    <div class="form-group">
                        <label for="items-search">Search Items</label>
                        <input type="text" value="" class="form-control" placeholder="Search for the item">
                    </div>
                    <div>
                        <label for=""></label>
                        <label for="mrp">MRP</label>
                        <input type="number" default="0" min="0" id="mrp" placeholder="0.0" value="10.0" disabled>
                        <label for="quantity">Quantity</label>
                        <input type="number" default="0" min="0" id="qty" placeholder="0" value="0" oninput="this.value=(parseInt(this.value)||0)">
                        <button id="add-item" class="btn btn-primary">Add Item</button>
                    </div>
                <!-- </form>-->
            </div>

            <!-- jsPDF Bill -->
            <!-- <div id="bill" class="col-6 jumbotron" style="overflow:auto;">
                <label for=""><h2>INVOICE</h2></label>
                <div class="row">
                    <div class="col-8"><label for="">Item</label></div>
                    <div class="col-1"><label for="">MRP</label></div>
                    <div class="col-1"><label for="">Qty</label></div>
                    <div class="col-1"><label for="">Cost</label></div>
                    <div class="col-1"></div>
                </div>
            </div> -->

            <!-- invoice -->
            <div id="bill" class="col-6 jumbotron" style="overflow:auto;">
                {{-- <form action="http://localhost/E-Invoice/Einvoice/public/invoices/create" method="POST" id="invoice-form" name="invoice-form"> --}}
                    {{ Form::open(array('action' => 'Billing\InvoiceController@store' , 'method' => 'POST' , 'id' => 'invoice-form' , 'name' => 'invoice-form')) }}                    
                    <div class="row">
                    <div class="col-9"><h3>INVOICE</h3></div>
                    <div class="col-3"><button class="btn btn-success" id="print-invoice">Print Invoice</button></div>
                    </div>
                    <div class="row">
                        <div class="col-5"><label for="">Item</label></div>
                        <div class="col-2"><label for="">MRP</label></div>
                        <div class="col-2"><label for="">Qty</label></div>
                        <div class="col-2"><label for="">Price</label></div>
                        <div class="col-1"></div>
                    </div>
                    <div id="billing"></div>
                    
                {{-- </form> --}}
                {{ Form::close() }}
            </div>


            <!-- Canvas jsPDF Invoice -->
            <!-- <div id="invoice">
                <div>
                    <h1>Store</h1>
                </div>
                <div class="row">
                <table id="inv">
                    <tr>
                        <th>Item</th>
                        <th>MRP</th>
                        <th>Qty</th>
                        <th>Price</th>
                    </tr>
                </table>
                </div>
            </div> -->

        </div>
    </main>

    <!-- editor -->
    <div id="editor"></div>

    <!-- footer -->
    <div id="footer">
            <div class="row">
                        <div class="col-8"><label >Total</label></div>
                        <div class="col-4"><label id="total"></label></div>
            </div>
                <!-- <div class="col-2"><button class="btn btn-primary" id="print-invoice">Print Invoice</button></div> -->
                <!-- <div class="col-2"><button class="btn btn-danger" id="email-invoice">Email Invoice</button></div> -->
    </div>

    <!-- script -->
    <script>
        var num = 0;
        var total = 0;
        $("#total").text(total);
        $("#add-item").click(function() {
            var mrp = $("#mrp").val();
            var qty = $("#qty").val();
            num++;
            // jsODF
            /*$("#invoice").append("<div class='row' id='invoice"+num+"'>"
                    +"<div class='col-9'><label>Item1</label></div>"
                    +"<div class='col-1'><label>"+mrp+"</label></div>"
                    +"<div class='col-1'><label>"+qty+"</label></div>"
                    +"<div class='col-1'><label>"+(mrp*qty)+"</label></div>"
                +"</div>");*/

            /*$("#bill").append("<div class='row' id='bill"+num+"'>"
                    +"<div class='col-8'><label>Item1</label></div>"
                    +"<div class='col-1'><label>"+mrp+"</label></div>"
                    +"<div class='col-1'><label>"+qty+"</label></div>"
                    +"<div class='col-1'><label id='cost"+num+"'>"+(mrp*qty)+"</label></div>"
                    +"<div class='col-1'><button onclick='delete_item("+num+")'>X</button></div>"
                +"</div>");*/
            
                $("#billing").append('<div class="row" id="bill'+num+'" class="form-group">'
                    +`<div class="col-5">{!! Form::input("text" , "item`+num+`" , "ITEM1" , array("class" => "form-control")) !!}</div>`
                    +`<div class="col-2">{!! Form::input("number" , "mrp`+num+`" , "`+mrp+`" , array("class" => "form-control" , "placeholder" => "`+mrp+`")) !!}</div>`
                    +`<div class="col-2">{!! Form::input("number" , "qty`+num+`" , "`+qty+`" , array("class" => "form-control" , "placeholder" => "`+qty+`")) !!}</div>`
                    +`<div class="col-2">{!! Form::input("number" , "cost`+num+`" , "`+mrp*qty+`" , array("class" => "form-control" , "placeholder" => "`+mrp*qty+`")) !!}</div>`
                    +`<div class="col-1"><input type="button" onclick="delete_item(`+num+`)" value="X"></div>`
                +'</div>');
                total += qty*mrp;
                $("#total").text(total);
            });

            // canvas jsPDF
            /*$("#inv").append("<tr id='invoice"+num+"'>"
                    +"<td><label>Item1</label></td>"
                    +"<td><label>"+mrp+"</label></td>"
                    +"<td><label>"+qty+"</label></td>"
                    +"<td><label id='cost"+num+"'>"+(mrp*qty)+"</label></td>"
                    +"</tr>");
            total += qty*mrp;
            $("#total").text(total);
        });*/

        function delete_item(it) {
            var x = $("#cost"+it).val();
            $("#bill"+it).remove();
            // $("#invoice"+it).remove();
            total = total-x;
            $("#total").text(total);
        }
        
        // jsPDF
        /*var doc = new jsPDF();
        var specialElementHandlers = {
            '#editor': function (element, renderer) {
                return true;
            }
        };

        $('#print-invoice').click(function (){
            doc.fromHTML($('#invoice').html(), 15, 15, {
                'width': 170,
                    'elementHandlers': specialElementHandlers
            });
            doc.save('sample-file.pdf');*/

            $("print-invoice").click(function(){
                form = document.forms[0] //assuming only form.
                form.submit();
            });
    </script>  
</body>
</html>