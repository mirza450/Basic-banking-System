
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="css/table.css" type="text/css">
    <link rel="stylesheet" href="css/navbar.css" type="text/css">

    <title>Transaction History</title>

</head>

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="css/table.css" type="text/css">
    <link rel="stylesheet" href="css/navbar.css" type="text/css">

    <title>Transaction History</title>

</head>
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="css/table.css" type="text/css">
    <link rel="stylesheet" href="css/navbar.css" type="text/css">

    <title>Transaction History</title>

</head>

<body>

 <?php
	include 'navbar.php';
?>

	 <div class="container">
         <h2 class="text-center pt-4">Transaction History</h2>
        
        <br>
        <div class="table-responsive-sm">
     <table class="table table-hover table-striped table-condensed table-bordered">
         <thead>
             <tr>
                 <th class="text-center">S.No.</th>
                 <th class="text-center">Sender</th>
                 <th class="text-center">Receiver</th>
                 <th class="text-center">Amount</th>
                 <th class="text-center">Date & Time</th>
             </tr>
         </thead>
         <tbody>
         <?php

             include 'config.php';

             $sql ="select * from transaction";

             $query =mysqli_query($con,$sql);

             while($rows = mysqli_fetch_assoc($query))
             {
         ?>

             <tr>
             <td class="py-2"><?php echo $rows['sno']; ?></td>
             <td class="py-2"><?php echo $rows['sender']; ?></td>
             <td class="py-2"><?php echo $rows['receiver']; ?></td>
             <td class="py-2"><?php echo $rows['balance']; ?> </td>
             <td class="py-2"><?php echo $rows['datetime']; ?> </td>
                
         <?php
             }

         ?>
         </tbody>
     </table>

     </div>
 </div>
 
			 <footer class="text-center mt-5 py-2">
        <p>&copy 2021. Made by <b>Mirza Alam Begg</b> <br> The Sparks Foundation</p>
      </footer>
 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
 </body>
 </html>