<!DOCTYPE html>
<html>
	<head>
		<title>Teknologi Informasi</title>
		
		<!-- meta -->
		<meta charset="UTF-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">

	    </head>

	<body>
	
  		<h2>Komentar</h2>
	<table>
	<thead >
			<tr>
			<th> ID</th>			
			<th> Date</th>
			<th> Nama</th>
			<th> Web</th>
			<th> Komentar</th>
			</tr>
			</thead>
			<tbody>
			<?php foreach ($comment as $data){?>
                    
			<tr>
			 <td><?php echo $data->id;?></td>
			 <td><?php echo $data->date; ?> </td>
			 <td><?php echo $data->nama;?></td>
			 <td><?php echo $data->web;?></td>
			 <td><?php echo $data->komentar;?></td>
                   
			</tr>
			<?php } ?>
			</tbody>
	
	<table>
                   
                
	</body>
</html>
