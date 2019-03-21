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
                    <form name="createRe" onsubmit="return validateField()" method="POST">	
                    <fieldset>
                        <legend class="text-center header">Initiate A Split</legend>		
                            <table>
                            <tr>
                                <td>Partner : </td><td><select name="">
                                    <option value="subaccount_code">partner</option>
                                </select></td>
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