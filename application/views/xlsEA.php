<!DOCTYPE html>
<html>
	<head>
		<title>Teknologi Informasi</title>
		
		<!-- meta -->
		<meta charset="UTF-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">

	    </head>

	<body>
	
  		<h2>EA</h2>
	<table>
	<thead >
			<tr>
			<th>No</th>
			<th>xConnectCable</th>
            <th>eqpIP</th>
            <th>eqpPORT</th>
            <th>eqpTERM</th>
            
			</tr>
			</thead>
			<tbody>
			<?php $i = 1; ?>
			<?php foreach ($data as $data2){?>
                    
			<tr>
			<td><?php echo $i++;?></td>
			 <td><?php echo $data2->xConnectCable;?></td>
			 <td><?php echo $data2->eqpIP; ?> </td>
			 <td><?php echo $data2->eqpPORT;?></td>
			 <td><?php echo $data2->eqpTERM;?></td>
			</tr>
			<?php } ?>
			</tbody>
	
	<table>
                   
                
	</body>
</html>
