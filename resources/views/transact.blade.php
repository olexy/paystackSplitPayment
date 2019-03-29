<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Split Transacion</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="css/pssp.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
	@include('sweet::alert')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="well well-sm">
                    <form action="/" name="createRe" onsubmit="return validateField()" method="POST">
                    {{ csrf_field() }}	
                    <fieldset>
                        <legend class="text-center header">Initiate A Split</legend>		
                            <table>
                            <tr>
                                <td>Partner : </td><td><select name="partner" id="partner" class="partnerlist">
                                <option value="">Select Partner</option>
                                @foreach($partners as $partner)
                                    <option value="{{$partner->account_code}}">{{$partner->partner}}</option>
                                @endforeach 
                                </select></td>
                            </tr>
                            <tr>
                                <td><span>Partner Email: </span></td>
                                <td><select style="width: 200px" id="pe" name="email" class="partners_email">
                                </select></td>

                                <!-- <td>Parners' Email : </td><td><input type="text" value="" name="txtemail" id="email" disabled="true"></td> -->
                            </tr>
                            <tr>
                                <td>Amount : </td><td><input type="text" value="" name="txtamount" required></td>
                            </tr>
                            <tr>
                                <td>Charge : </td><td><input type="text" value="" name="txtcharge" required></td>
                            </tr>
                            <tr>
                                <td colspan="2" align="center"><input type="submit" name="cmdrep" value="Initiate"> </td>
                            </tr>
                            </table>
                        </fieldset>	
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>


<!-- <script>
$(document).ready(function(){

    $(document).on('change','.partnerlist', function(){
        // console.log('its changed!');

        var partner_id = $(this).val();
        // console.log(partner_id);
        
        var div=$(this).parent();

        var op=" ";

        $.ajax({
            type:'get',
            url:'{!!URL::to('findEmail')!!}',
            data:{'id':partner_id},
            // dataType:'json', //return data will be json
            success:function(data){
                // console.log('success');
                // console.log(data[0].email);
                $('#email').val(data[0].email);

            },
            
            error:function(){

            }

        })
    });

});
</script> -->



<!-- For Using Dropdown for the dependent email column -->

<script>
$(document).ready(function(){

    $(document).on('change','.partnerlist', function(){
        // console.log('its changed!');

        var partner_id = $(this).val();
        // console.log(partner_id);
        
        var div=$(this).parent();

        var op=" ";

        $.ajax({
            type:'get',
            url:'{!!URL::to('findEmail')!!}',
            data:{'id':partner_id},
				success:function(data){
					// console.log('success');
					// console.log(data);
                    // console.log(data.length);

                    op+='<option value="0" selected disabled>Partner Email</option>';
					for(var i=0;i<data.length;i++){
					op+='<option value="'+data[i].email+'">'+data[i].email+'</option>';
	
                }
                // div.find('.partners_email').html(" ");
				// div.find('.partners_email').append(op);
                $('#pe').html(" ")
                $('#pe').append(op)
                // console.log(op);
            },
            
            error:function(){

            }

        })
    });

});
</script>

