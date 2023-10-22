<!DOCTYPE html>
<html >
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="./css/bootstrap.min.css">
  <link rel="stylesheet" href="./css/mdb.min.css">
  <link rel="stylesheet" href="./css/mdb.rtl.min.css">
  <style>
    table, th, td {    
      border: 1px solid black;  
      margin-left: auto;  
      margin-right: auto;  
      border-collapse: collapse;    
      width: 500px;  
      text-align: center;  
      font-size: 20px; 
    }
    .table-striped tbody tr:nth-of-type(odd) {
      background-color: #dbd9b7;
    }
    .table-hover tbody tr:hover {
      background-color: #e0e0e0;
      color: black;
    }
    .thead-green {
      background-color: #005f6b;
      color: white;
    }
  </style>
</head>
<body>
  <div class="container">
    <table class="table table-striped table-hover">
      <thead class="thead-green">
        <tr>
          <th>Usuarios</th>
          <th>Correos</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>
          <?php 
                 $us = $_POST["usuario"];
                 echo "".$us;
            ?>
          </td>
          <td>
          <?php 
                 $em = $_POST["email"];
                 echo "".$em;
            ?>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</body>
</html>