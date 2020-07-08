<?php 

include("db/connection.php");





											$sql = "select * from tb_anagayrimenkul_giderler";
											$result = $db->query($sql);

													    while($row = $result->fetch_assoc()) {
echo $row["id"].$row["cinsi"].$row["aciklamasi"].$row["dagitimparametresi"].$row["dagitimyeri"].$row["tarih"].$row["toplamtutar"].
$row["kartutari"].$row["isiyapanaodenentutar"].$row["odemekaynagi"].$row["tahsilatdurumu"].$row["kardurumu"].$row["gayrimenkulid"].
$row["firmaid"].$row["gerceklesmedurumu"].$row["isletmedefteridurumu"].$row["belgenin_cinsi"].$row["belgenin_serino"].$row["belgenin_tarihi"];
 	
													    }







 ?>