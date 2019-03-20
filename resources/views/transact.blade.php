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