<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js" type="text/javascript"></script>


    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <style>
    select{
        width:150px;
        margin-left: 30px;
    }
    table#tbclass{
        margin-top: 50px;
    }
    span{
        color: red;
    }
    #text_input{
        width:60px;
    }

    .add_tb{
        margin-left: 10px;
    }

    .add_bt{
        margin-left: 10px;
        margin-top: 20px;
    }
</style>
</head>
<body>
<form id="myform" action="addvalue" method="post">
    <div class="container">
        <hr>
        <div class="row">
            <div class="col-sm-4">
                Vendor:
                <select>
                    <option>Victory Ac</option>
                </select>
            </div>
            <div class="col-sm-4">
                Measurement System: <select>
                    <option>Us</option>
                </select>
            </div>
            <div class="col-sm-4">
                Date : <input id="datetime" type="text" value="">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-4">
                <span>Container #:</span> <input id="contai" type="number" min="1">
                <br>
                <span id="contaierr"></span>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-4">
                Receiving #: <input id="receving" name="receving" type="number" required="true">
                <br>
                <span id="address_error"></span>
            </div>
        </div>
    </div>
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <table class="table table-bordered" id="tbclass">
        <thead>
            <tr>
                <th><span>STYLE NO</span></th>
                <th><span>UOM</span></th>
                <th><span>PREFIX</span></th>
                <th><span>SUFIC</span></th>
                <th><span>HEIGHT#</span></th>
                <th><span>WIDTH</span></th>
                <th><span>LENGTH</span></th>
                <th><span>WEIGHT</span></th>
                <th><span>UPC</span></th>
                <th><span>SIZE 1</span></th>
                <th><span>COLOR 1</span></th>
                <th>SIZE 2</th>
                <th>COLOR 2</th>
                <th>SIZE 3</th>
                <th>COLOR 3</th>
                <th><span>#CARTON</span></th>
            </tr>
        </thead>
        <script>
            $(document).ready(function () {

                $('#bt_them').click(function () {
                    var text =' <tbody>\n' +
                        '            <tr>\n' +
                        '                <td><input class="_style" id="text_input" type="text"  name="style_no[]"></td>\n' +
                        '                <td><input class="_oum" id="text_input"  type="text"   name="uom[]"></td>\n' +
                        '                <td><input class="_prefix" id="text_input" type="text"  name="prefix[]"></td>\n' +
                        '                <td><input class="_sufic" id="text_input" type="text"  name="sufic[]"></td>\n' +
                        '                <td><input class="_height" id="text_input" type="text"   name="height[]"></td>\n' +
                        '                <td><input class="_width" id="text_input" type="text"  name="width[]"></td>\n' +
                        '                <td><input class="_length" id="text_input" type="text"  name="length[]"></td>\n' +
                        '                <td><input class="_weight" id="text_input" type="text"  name="weight[]"></td>\n' +
                        '                <td><input class="_upc" id="text_input" type="text"  name="upc[]"></td>\n' +
                        '                <td><input class="_size1" id="text_input" type="text"  name="size1[]"></td>\n' +
                        '                <td><input class="_color1" id="text_input" type="text"  name="color1[]"></td>\n' +
                        '                <td><input class="_size2" id="text_input" type="text"  name="size2[]" ></td>\n' +
                        '                <td><input class="_color2" id="text_input" type="text" name="color2[]"></td>\n' +
                        '                <td><input class="_size3" id="text_input" type="text"  name="size3[]"></td>\n' +
                        '                <td><input class="_color3" id="text_input" type="text"  name="color3[]"></td>\n' +
                        '                <td><input class="_carton" id="text_input" type="text"  name="carton[]"></td>\n' +
                        '            </tr>\n' +
                        '        </tbody>';

                    var number = $("#input_number").val();
                    for (i = 0; i < number; i++) {
                        $('#tbclass').append(text);
                    }
                });
            });
        </script>
        <tbody>
            <tr>
                <td><input class="_style" id="text_input" type="text" name="style_no[]"></td>
                <td><input class="_oum" id="text_input" type="text" name="uom[]"></td>
                <td><input class="_prefix" id="text_input" type="text" name="prefix[]"></td>
                <td><input class="_sufic" id="text_input" type="text" name="sufic[]"></td>
                <td><input class="_height" id="text_input" type="text" name="height[]"></td>
                <td><input class="_width" id="text_input" type="text" name="width[]"></td>
                <td><input class="_length" id="text_input" type="text" name="length[]"></td>
                <td><input class="_weight" id="text_input" type="text" name="weight[]"></td>
                <td><input class="_upc" id="text_input" type="text"  name="upc[]"></td>
                <td><input class="_size1" id="text_input" type="text"  name="size1[]"></td>
                <td><input class="_color1" id="text_input" type="text"  name="color1[]"></td>
                <td><input class="_size2" id="text_input" type="text"  name="size2[]" ></td>
                <td><input class="_color2" id="text_input" type="text" name="color2[]"></td>
                <td><input class="_size3" id="text_input" type="text"  name="size3[]"></td>
                <td><input class="_color3" id="text_input" type="text"  name="color3[]"></td>
                <td><input class="_carton" id="text_input" type="text"  name="carton[]"></td>
            </tr>
        </tbody>
    </table>
    <div class="add_tb">
        <input type="button" id="bt_them" value="Add">
        <input  id="input_number" name="number" type="number"> #row
    </div>
    <div class="add_bt">
        <button id="bt_sumit">Submit</button>
        <input id="btcancel" type="button" value="Cancel">
    </div>

</form>
<br>
<a>Main menu</a>
<div id="div3">

</div>
@if(count($errors) > 0)
    <div class="alert alert-danger">
        @foreach($errors->all() as $err)
            <?php
            $cconten = preg_replace('/(\w+)\.([0-9]+)/', '$1 at row $2', $err);
            // The color3 at row
            $conten2 =preg_replace('/\s([0-9])\s.*/', '$1', $cconten);
            // 0 must be at least 1
            $conten3 =preg_replace('/(.*?\srow)|([0-9].*)/', '$2', $cconten);
            $number =preg_replace('/\s([0-9])\s.*/', '$1', $conten3);
            $sufix =preg_replace('/\d\s(.*)/', '$1', $conten3);
            $getnumber = $number+=1;

            $string =$conten2." ".$getnumber." ".$sufix;
           $tringerr= preg_replace('/(row[0-9]+)/', 'row', $string);
           //upper
            $upper_err =ucwords(preg_replace('/(The\s)|(\sat.*)/', '', $tringerr));
           $newsting = preg_replace('/(The\s.*?)(\sat.*)/', '$2', $tringerr);
           $error_string='The '.$upper_err.$newsting;
            ?>
            {{$error_string}}<br>
        @endforeach
    </div>
@endif
@if(session('thongbao'))
    <div class="alert alert-success">
        <!-- {{session('thongbao')}} -->
    </div>
@endif

<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(document).ready(function () {
        $("#contai").change(function () {
                var id_url = $(this).val();
                var url = 'getid/' + id_url;

                var data ='';
                $.get(url, function (data) {
                    console.log(data);
                    if (id_url == data.id) {
                        var date = new Date(data.created_at);
                        // $.each(data, function(idx, obj) {
                        $("._style").val(data.style_no);
                        $('._oum').val(data.uom);
                        $('._prefix').val(data.prefix);
                        $('._sufic').val(data.sufic);
                        $('._height').val(data.height);
                        $('._width').val(data.width);
                        $('._length').val(data.length);
                        $('._weight').val(data.weight);
                        $('._upc').val(data.upc);
                        $('._size1').val(data.size1);
                        $('._color1').val(data.color1);
                        $('._size2').val(data.size2);
                        $('._color2').val(data.color2);
                        $('._size3').val(data.size3);
                        $('._color3').val(data.color3);
                        $('._carton').val(data.carton);
                        $('#datetime').val(date);
                        $("#contaierr").text("");
                        // });
                    } else {
                        $("#contaierr").text("Value not isset!");
                        $("input#text_input").val('');
                        $('#datetime').val('');
                    }
                })
            });
        $("#btcancel").click(function () {
            $("input#text_input").val('');
        });
        $("a").click(function(){
            var number_url = $("#receving").val();
            var url = 'receving/' + number_url;
                $.get(url,function (data) {
                    console.log(data);
                    $.each(data, function(idx, obj) {
                        $("#contai").val(obj.id);
                        var table ='<table class="table table-bordered" id="tbclass">\n' +
                            '        <thead>\n' +
                            '            <tr>\n' +
                            '                <th><span>RECEVING</span></th>\n' +
                            '                <th><span>STYLE</span></th>\n' +
                            '                <th><span>UOM</span></th>\n' +
                            '                <th><span>PREFIX</span></th>\n' +
                            '                <th><span>SUFIC</span></th>\n' +
                            '                <th><span>HEIGHT#</span></th>\n' +
                            '                <th><span>WIDTH</span></th>\n' +
                            '                <th><span>LENGTH</span></th>\n' +
                            '                <th><span>WEIGHT</span></th>\n' +
                            '                <th><span>UPC</span></th>\n' +
                            '                <th><span>SIZE 1</span></th>\n' +
                            '                <th><span>COLOR 1</span></th>\n' +
                            '                <th>SIZE 2</th>\n' +
                            '                <th>COLOR 2</th>\n' +
                            '                <th>SIZE 3</th>\n' +
                            '                <th>COLOR 3</th>\n' +
                            '                <th><span>#CARTON</span></th>\n' +
                            '            </tr>\n' +
                            '        </thead>\n' +
                            '        <tbody>\n' +
                            '            <tr>\n' +
                            '                <td><input class="_styles" id="text_input" type="text"  value="'+obj.receving+'"></td>\n' +
                            '                <td><input class="_style" id="text_input" type="text"  value="'+obj.style_no+'"></td>\n' +
                            '                <td><input class="_oum" id="text_input" type="text"  value="'+obj.uom+'"></td>\n' +
                            '                <td><input class="_prefix" id="text_input" type="text"  value="'+obj.prefix+'"></td>\n' +
                            '                <td><input class="_sufic" id="text_input" type="text"  value="'+obj.sufic+'"></td>\n' +
                            '                <td><input class="_height" id="text_input" type="text" value="'+obj.height+'"></td>\n' +
                            '                <td><input class="_width" id="text_input" type="text"  value="'+obj.width+'"></td>\n' +
                            '                <td><input class="_length" id="text_input" type="text" value="'+obj.length+'"></td>\n' +
                            '                <td><input class="_weight" id="text_input" type="text" value="'+obj.weight+'"></td>\n' +
                            '                <td><input class="_upc" id="text_input" type="text"  value="'+obj.upc+'"></td>\n' +
                            '                <td><input class="_size1" id="text_input" type="text"  value="'+obj.size1+'"></td>\n' +
                            '                <td><input class="_color1" id="text_input" type="text"  value="'+obj.color1+'"></td>\n' +
                            '                <td><input class="_size2" id="text_input" type="text"  value="'+obj.size2+'"></td>\n' +
                            '                <td><input class="_color2" id="text_input" type="text"  value="'+obj.color2+'"></td>\n' +
                            '                <td><input class="_size3" id="text_input" type="text"  value="'+obj.size3+'"></td>\n' +
                            '                <td><input class="_color3" id="text_input" type="text"  value="'+obj.color3+'"></td>\n' +
                            '                <td><input class="_carton" id="text_input" type="text"  value="'+obj.carton+'"></td>\n' +
                            '            </tr>\n' +
                            '        </tbody>\n' +
                            '    </table>';
                        $('#div3').append(table);
                    });

                })
        });
        $("#receving").change(function() {
            var flag = true;
            var value = $(this).val();
            $.get('show', function (data) {
                console.log(data);
                $.each(data, function(idx, obj) {
                    if(value == obj.receving)
                    {
                        $("#address_error").text('Value has issets');
                        $("#bt_sumit").attr('disabled','disabled');
                        $("a").css("color","red");
                        flag = false;
                    }else {
                        $("#address_error").text('');
                        $("#bt_sumit").removeAttr('disabled');
                        $("a").css("color","");
                        $('#div3').text('');
                    }
                    return flag;
                });


            });
        });
    });
</script>
</body>
</html>
