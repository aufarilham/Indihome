<!DOCTYPE html>
<html>
	<head>
		<title>Teknologi Informasi</title>
		
		<!-- meta -->
		<meta charset="UTF-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">

	    </head>

	<body>
	
  		<h2>ODP</h2>
	<table>
	<thead >
			<tr>
			<th>No</th>
			<th>odpSPIN</th>
                  <th>odpIDPORT</th>
                  <th>kondisi</th>
                  <th>odpName</th>
                    <th>noModem</th>
                    <th>noInternet</th>
                    <th>noTelepon</th>
                    <th>noTelevisi</th>
                    <th>pelangganID</th>
                    <th>operationDate</th>
            
			</tr>
			</thead>
			<tbody>
			<?php $i = 1; ?>
			<?php foreach ($data as $data2){?>
                    
			<tr>
			<td><?php echo $i++;?></td>
			 <td><?php echo $data2->odpSPIN;?></td>
			 <td><?php echo $data2->odpIDPORT; ?> </td>
			 <td><?php echo $data2->kondisi;?></td>
			 <td><?php echo $data2->odpName;?></td>
			 <td><?php echo $data2->noModem;?></td>
			 <td><?php echo $data2->noInternet;?></td>
			 <td><?php echo $data2->noTelepon;?></td>
			 <td><?php echo $data2->noTelevisi;?></td>
			 <td><?php echo $data2->pelangganID;?></td>
			 <td><?php echo $data2->operationDate;?></td>
			</tr>
			<?php } ?>
			</tbody>
	
	<table>
                   
                
	</body>
</html>
