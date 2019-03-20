<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Add Partners' Account</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

<!-- Styles -->
    <style>
    html, body {
                background-color: #daeddd;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }
    .header {
        color: #36A0FF;
        font-size: 27px;
        padding: 10px;
    }

    .bigicon {
        font-size: 35px;
        color: #36A0FF;
    }
    fieldset{
        border: 2px solid rgb(150,160,200);
        width: 400px;
        margin: 0 auto;
    }
    </style>
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="well well-sm">
                    <form name="createRe" onsubmit="return validateField()" method="POST">	
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
                                    <option value="044">Access Bank</option>
                                    <option value="023">Citibank Nigeria</option>
                                    <option value="063">Diamond Bank</option>
                                    <option value="050">Ecobank Nigeria</option>
                                    <option value="084">Enterprise Bank</option>
                                    <option value="070">Fidelity Bank</option>
                                    <option value="011">Firstbank</option>
                                    <option value="214">First City Monument Bank</option>
                                    <option value="058">Guaranty Trust Bank</option>
                                    <option value="030">Heritge Bank</option>
                                    <option value="082">Keystone Bank</option>
                                    <option value="014">Mainstreet Bank</option>
                                    <option value="076">Skye Bank</option>
                                    <option value="221">Stanbic IBTC Bank</option>
                                    <option value="068">Standard Chartered Bank</option>
                                    <option value="232">Sterling Bank</option>
                                    <option value="032">Union Bank Of Nigeria</option>
                                    <option value="033">United Bank for Africa</option>
                                    <option value="215">Unity Bank</option>
                                    <option value="035">Wema Bank</option>
                                    <option value="057">Zenith Bank</option>
                                </select></td>
                            </tr>
                            <tr>
                                <td>Split % : </td><td><input type="text" value="" name="txtcommission" required></td>
                            </tr>
                            <tr>
                                <td>Contact : </td><td><input type="text" value="" name="txtcontact" required></td>
                            </tr>
                            <tr>
                                <td>Phone : </td><td><input type="text" value="" name="txtphone" required></td>
                            </tr>
                            <tr>
                                <td colspan="2" align="center"><input type="submit" name="cmdrep" value="Create Recipient"> </td>
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