<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <h1>contact has been added Successfully!!</h1>
    <table class="table">
     
    <tr>
      <th>name</th>
      <td>{{$contact_name}}</td>
    </tr>
    <tr>
    <th>Email</th>
    <td>{{$contact_email}}</td>
    </tr>
    <tr><th>Mobile number</th>
  <td>{{$contact_mobile}}</td>
  </tr>
    <tr>
      <th>Message</th>
      <td>
       {{$contact_message}}
</td>
    </tr>
   
  </tbody>
</table>
</body>
</html>