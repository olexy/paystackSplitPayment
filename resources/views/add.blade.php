<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Add Partners' Account</title>

    <!-- Fonts -->
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
                    <form action="/add" name="createRe" onsubmit="return validateField()" method="POST">
                    {{ csrf_field() }}	
                    <fieldset>
                        <legend class="text-center header">Create Patners's Account</legend>		
                            <table>
                            <tr>
                                <td colspan=2 align=center><a href="accountRetrieval.php" target="_blank">Click here to verify account name</a></td>
                            </tr>
                            <tr>
                                <td>Partners' Name : </td> <td><input type="text" value="" name="txtname" required></td>
                            </tr>
                            <tr>
                                <td>Account Number : </td><td><input type="text" value="" name="txtaccount" required></td>
                            </tr>
                            <tr>
                                <td>Bank Name : </td><td><select name="bankname">
                                    <option>Access Bank</option>
                                    <option>Citibank Nigeria</option>
                                    <option>Diamond Bank</option>
                                    <option>Ecobank Nigeria</option>
                                    <option>Enterprise Bank</option>
                                    <option>Fidelity Bank</option>
                                    <option>Firstbank</option>
                                    <option>First City Monument Bank</option>
                                    <option>Guaranty Trust Bank</option>
                                    <option>Heritge Bank</option>
                                    <option>Keystone Bank</option>
                                    <option>Mainstreet Bank</option>
                                    <option>Skye Bank</option>
                                    <option>Stanbic IBTC Bank</option>
                                    <option>Standard Chartered Bank</option>
                                    <option>Sterling Bank</option>
                                    <option>Union Bank Of Nigeria</option>
                                    <option>United Bank For Africa</option>
                                    <option>Unity Bank</option>
                                    <option>Wema Bank</option>
                                    <option>Zenith Bank</option>
                                </select></td>
                            </tr>
                            <tr>
                                <td>Split % : </td><td><input type="text" value="" name="txtcharge" required></td>
                            </tr>
                            <tr>
                                <td>Contact : </td><td><input type="text" value="" name="txtcontact" required></td>
                            </tr>
                            <tr>
                                <td>Email : </td><td><input type="text" value="" name="txtemail" required></td>
                            </tr>
                            <tr>
                                <td colspan="2" align="center"><input type="submit" name="cmdrep" value="Create Patner"> </td>
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