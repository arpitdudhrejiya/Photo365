<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>DataTables example - Bootstrap 3</title>
  
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!-- Page level plugin JavaScript--><script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>

<script>
    $(document).ready(function() {
          $('#dataTable').DataTable();
    });
</script>
  
</head>
<body>
<div class="container">

<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th>line</th>
            <th>value1</th>
            <th>value2</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>1.1</td>
            <td>1.2</td>
        </tr>
        <tr>
            <td>1</td>
            <td>1.1</td>
            <td>1.2</td>
        </tr><tr>
            <td>1</td>
            <td>1.1</td>
            <td>1.2</td>
        </tr><tr>
            <td>1</td>
            <td>1.1</td>
            <td>1.2</td>
        </tr><tr>
            <td>1</td>
            <td>1.1</td>
            <td>1.2</td>
        </tr><tr>
            <td>1</td>
            <td>1.1</td>
            <td>1.2</td>
        </tr><tr>
            <td>1</td>
            <td>1.1</td>
            <td>1.2</td>
        </tr><tr>
            <td>1</td>
            <td>1.1</td>
            <td>1.2</td>
        </tr><tr>
            <td>1</td>
            <td>1.1</td>
            <td>1.2</td>
        </tr><tr>
            <td>1</td>
            <td>1.1</td>
            <td>1.2</td>
        </tr>
       
        <tr>
            <td>2</td>
            <td>2.1</td>
            <td>2.2</td>
        </tr>
        
    </tbody>
</table>
</div>
</body>
</html>