<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <h1>Order Placed Successfully!!</h1>
    <table class="table">
      <tr>
    <th>Product name</th>
    <td>{{$product_name}}</td>
    </tr>
    <tr>
      <th>Full name</th>
      <td>{{$name}}</td>
    </tr>
    <tr>
      <th>Address</th>
      <td>Address: {{$address}} <br> State: {{$state}} <br> City: {{$city}} <br> Pincode: {{$pincode}} </td>
    </tr>
    <tr><th>Mobile number</th>
  <td>{{$mobile}}</td>
  </tr>
    <tr>
      <th>total</th>
      <td>
       RS. {{$amount}}
</td>
    </tr>
   
  </tbody>
</table>
</body>
</html>