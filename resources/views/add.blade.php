<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Add Partners' Account</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="css/pssp.css" rel="stylesheet" type="text/css" media="all" />
    <script data-require="jquery@*" data-semver="2.2.0" src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

</head>
<body>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	@include('sweet::alert')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="well well-sm">
                    <form action="/add" id="banks" method="POST">
                    {{ csrf_field() }}	
                    <fieldset>
                        <legend class="text-center header">Create Patners's Account</legend>		
                            <table>
                            <tr>
                                <td>Partners' Name : </td> <td><input type="text" value="" name="txtname" required></td>
                            </tr>
                            <tr>
                                <td>Account Number : </td><td><input type="text" value="" name="txtaccount" required></td>
                            </tr>
                            <tr>
                                <td>Bank Name : </td><td><select name="bankname" id="bank">
                                    <option value="044" bankName="Access Bank">Access Bank</option>
                                    <option value="023" bankName="Citibank Nigeria">Citibank Nigeria</option>
                                    <option value="063" bankName="Diamond Bank">Diamond Bank</option>
                                    <option value="050" bankName="Ecobank Nigeria">Ecobank Nigeria</option>
                                    <option value="084" bankName="Enterprise Bank">Enterprise Bank</option>
                                    <option value="070" bankName="Fidelity Bank">Fidelity Bank</option>
                                    <option value="011" bankName="First Bank of Nigeria">First Bank of Nigeria</option>
                                    <option value="214" bankName="First City Monument Bank">First City Monument Bank</option>
                                    <option value="058" bankName="Guaranty Trust Bank">Guaranty Trust Bank</option>
                                    <option value="030" bankName="Heritage Bank">Heritage Bank</option>
                                    <option value="082" bankName="Keystone Bank">Keystone Bank</option>
                                    <option value="014" bankName="Mainstreet Bank">Mainstreet Bank</option>
                                    <option value="076" bankName="Skye Bank">Skye Bank</option>
                                    <option value="221" bankName="Stanbic IBTC Bank">Stanbic IBTC Bank</option>
                                    <option value="068" bankName="Standard Chartered Bank">Standard Chartered Bank</option>
                                    <option value="232" bankName="Sterling Bank">Sterling Bank</option>
                                    <option value="032" bankName="Union Bank Of Nigeria">Union Bank Of Nigeria</option>
                                    <option value="033" bankName="United Bank For Africa">United Bank For Africa</option>
                                    <option value="215" bankName="Unity Bank">Unity Bank</option>
                                    <option value="035" bankName="Wema Bank">Wema Bank</option>
                                    <option value="057" bankName="Zenith Bank">Zenith Bank</option>
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

<script>

(function($) {
  $(document).ready(function() {
    $('select#bank').bind('change', function() {
      // Fetch selected item's data element value
      var optionId = $(this).children(':selected').attr('bankName');
      
      // Remove any existing hidden input
      $('input[name="hiddenBankName"').remove();
      
      // Append new hidden input element
      $('<input>').attr({
          type: 'hidden',
          id: 'hidbankName',
          name: 'hidBankName',
          value: optionId
      }).appendTo('form#banks');
      //console.log(optionId);
      //console.log(txtBankName.value);
    });
  });
})(jQuery);


</script>


