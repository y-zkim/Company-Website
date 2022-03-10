<?php 
require ("config.php");
$result = mysqli_query($con,"SELECT * FROM `rdv`;");?>
<?while($data = $result->fetch_assoc()):?>
    <tr>
    <td><?php echo $data["id_client"] ?></td>
    <td><?php echo $data["date_appel"] ?></td>
    <td><?php echo $data["date_rdv"] ?></td>
    <td><?php echo $data["nrp"] ?></td>
    <td><?php echo $data["commentaire"] ?></td>
    </tr>
<? endwhile ?>