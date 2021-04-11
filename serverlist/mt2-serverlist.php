<p align="center" class="display-6">Metin2 Pvp Serverler</p>
      <main class="container">
         <div class="bd-example" style="margin-top:10px">
            <table class="table table-striped">
               <thead>
                  <tr>
                     <th scope="col">#</th>
                     <th scope="col">Server İsmi</th>
                     <th scope="col">Başlık</th>
                     <th scope="col">Tür</th>
					 <th scope="col"></th>
                  </tr>
               </thead>
               <tbody>
	<?php 
	include '../config.php';
	$query = $connect->query("select * from pvp_servers where s_game = 'metin2' AND s_state = 'active' order by id asc LIMIT 15");
    foreach($query as $value)
	{	
	$id = $value["ID"];
	$s_name = $value["s_name"];
	$s_content = $value["s_content"];
	$s_type = $value["s_type"];
	$s_link = $value["s_link"];
	$s_button = 'btn btn-success';
	if($s_type == 'Emek'){$s_button = 'btn btn-danger';}
	if($s_type == 'Orta'){$s_button = 'btn btn-warning';}
	if($s_type == 'Wslik') {$s_button = 'btn btn-secondary';}

	echo
                  '<tr>
                     <th scope="row">'.$id.'</th>
                     <td>'.$s_name.'</td>
                     <td>'.$s_content.'</td>
                     <td><button type="button" class="'.$s_button.'">'.$s_type.'</button></td>
					  <td><a href="'.$s_link.'"><button type="button" class="btn btn-primary">Detay</button></a></td>
                  </tr>';}
?>
                 
               </tbody>
            </table>
         </div>
      </main>
	