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
<center>
		<fieldset style="width:40%">
	<legend>Verify Account Number</legend>
	<form name="createRe" onsubmit="return validateField()" method="POST">			
			<table cellspacing=5 cellpadding=5>
			<tr>
				<td>Account Number : </td><td><input type="text" placeholder="e.g 0230034000" name="txtaccount" required></td>
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
				<td colspan="2" align="center"><input type="submit" name="cmdBank" value="Get Account Name"> </td>
			</tr>
			</table>	
		
	</form>
</fieldset>
</center>
</body>
</html>