<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link href="css/pssp.css" rel="stylesheet" type="text/css" media="all" />

</head>
<body>
<ul class="list-group">
  @foreach($data as $key)     
  <li class="list-group-item list-group-item-success">  
    {{$key->business_name}}
  <a href="mailto:{{ $key->subaccount_code }}"><span class="badge badge-primary badge-pill">{{ $key->primary_contact_name }}</span></a>
  </li> 
  @endforeach 

  <!-- <li class="list-group-item list-group-item-primary">
    ABC Bakery Inc.
    <span class="badge badge-primary badge-pill">146746379</span
  </li>
  <li class="list-group-item list-group-item-secondary">
    RegEdit Limited
    <span class="badge badge-primary badge-pill">687910100</span
  </li>
  <li class="list-group-item list-group-item-success">
   Westeck Nigeria Ltd
    <span class="badge badge-primary badge-pill">687910100</span
  </li>
  <li class="list-group-item list-group-item-danger">
    Youtre Limited
    <span class="badge badge-primary badge-pill">687910100</span
  </li>
  <li class="list-group-item list-group-item-warning">
    Discovery Essence
    <span class="badge badge-primary badge-pill">687910100</span
  </li>
  <li class="list-group-item list-group-item-info">
    Ade Confectionery
    <span class="badge badge-primary badge-pill">687910100</span
  </li>
  <li class="list-group-item list-group-item-light">
  Luther Electronics
    <span class="badge badge-primary badge-pill">687910100</span
  </li>
  <li class="list-group-item list-group-item-dark">
  Samsong Ojught Limited
    <span class="badge badge-primary badge-pill">687910100</span
  </li> -->
</ul>
</body>
</head>
