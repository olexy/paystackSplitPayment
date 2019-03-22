<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Split Transacion</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="css/pssp.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	@include('sweet::alert')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="well well-sm">
                    <form action="" name="createRe" onsubmit="return validateField()" method="POST">	
                    <fieldset>
                        <legend class="text-center header">Initiate A Split</legend>		
                            <table>
                            <tr>
                                <td>Partner : </td><td><select name="partner">
                                @foreach($partners as $partner)
                                    <option value="{{$partner->account_code}}">{{$partner->partner}}</option>

                                @endforeach 
                                </select></td>
                            </tr>
                            <tr>
                            <td>Contact Email : </td><td><input type="text" value="" name="txtemail" required></td>
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