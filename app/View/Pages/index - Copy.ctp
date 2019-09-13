<?php
echo $this->Html->script('custom');
?>
<head>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
<script type="text/javascript" src="http://cdn.datatables.net/1.10.1/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css">
<style>
  body {font-family: calibri;color:#4e7480;}
</style>
</head>
<table id="example" class="display" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th>Id</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Age</th>
            
        </tr>
    </thead>
    <?php foreach($users as $user): ?> 
        <tr>
          
            <td><?php echo $user['User']['id'];?></td>
            <td><?php echo $user['User']['first_name'];?></td>
            <td><?php echo $user['User']['last_name'];?></td>
            <td><?php echo $user['User']['age'];?></td>
        </tr>
    <?php endforeach; ?>
</table>
<script>
$(document).ready(function() {
    $('#example').DataTable();
//    "paging":   true,
//        "ordering": true,
//        "info":     true
} );    
</script>