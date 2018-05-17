<!DOCTYPE html>
<html>
	<head>
		<title>Teknologi Informasi</title>
		
		<!-- meta -->
		<meta charset="UTF-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">

	    </head>

	<body>
	
  		<h2>ODC</h2>
	<table>
	<thead >
			<tr>
			<th>No</th>
			<th>xConnectODCspin</th>
                  <th>xConnectODCspout</th>
                  <th>odcPORTOUT</th>
                  <th>distributionCable</th>
                    <th>fileABDODC</th>
                    <th>odpAddress</th>
                    <th>odpKordX</th>
                    <th>odpKordY</th>
                    <th>odpSPIN</th>
            
			</tr>
			</thead>
			<tbody>
			<?php $i = 1; ?>
			<?php foreach ($data as $data2){?>
                    
			<tr>
			<td><?php echo $i++;?></td>
			 <td><?php echo $data2->xConnectODCspin;?></td>
			 <td><?php echo $data2->xConnectODCspout; ?> </td>
			 <td><?php echo $data2->odcPORTOUT;?></td>
			 <td><?php echo $data2->distributionCable;?></td>
			 <td><?php echo $data2->fileABDODC;?></td>
			 <td><?php echo $data2->odpAddress;?></td>
			 <td><?php echo $data2->odpKordX;?></td>
			 <td><?php echo $data2->odpKordY;?></td>
			 <td><?php echo $data2->odpSPIN;?></td>
			</tr>
			<?php } ?>
			</tbody>
	
	<table>
                   
                
	</body>
</html>
