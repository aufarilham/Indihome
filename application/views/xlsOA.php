<!DOCTYPE html>
<html>
	<head>
		<title>Teknologi Informasi</title>
		
		<!-- meta -->
		<meta charset="UTF-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">

	    </head>

	<body>
	
  		<h2>OA</h2>
	<table>
	<thead >
			<tr>
			<th>No</th>
			<th>xConnectCable</th>
            <th>ospTerm</th>
            <th>feederCable</th>
            <th>primaryFC</th>
            <th>fileABDOSP</th>
            <th>odcPortIn</th>
            <th>lossCore</th>
            <th>xConnectODCspin</th>
			</tr>
			</thead>
			<tbody>
			<?php $i = 1; ?>
			<?php foreach ($data as $data2){?>
                    
			<tr>
			<td><?php echo $i++;?></td>
			 <td><?php echo $data2->xConnectCable;?></td>
			 <td><?php echo $data2->ospTerm; ?> </td>
			 <td><?php echo $data2->feederCable;?></td>
			 <td><?php echo $data2->primaryFC;?></td>
			 <td><?php echo $data2->fileABDOSP;?></td>
			 <td><?php echo $data2->odcPortIn;?></td>
			 <td><?php echo $data2->lossCore;?></td>
			 <td><?php echo $data2->xConnectODCspin;?></td>
			</tr>
			<?php } ?>
			</tbody>
	
	<table>
                   
                
	</body>
</html>
