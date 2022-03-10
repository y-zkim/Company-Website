<?php 
require ("config.php");
$result = mysqli_query($con,"SELECT * FROM `clients`;");
?>
<?php while($data = $result->fetch_assoc()): ?>
<tr>
    <td><?php echo $data["id_client"] ?></td>
    <td><?php echo $data["logement"] ?></td>
    <td><?php echo $data["personne"] ?></td>
    <td><?php echo $data["zipcode"] ?></td>
    <td><?php echo $data["chauffage"] ?></td>
    <td><?php echo $data["surface"] ?></td>
    <td><?php echo $data["montant"].' €' ?></td>
    <td><?php echo $data["last_name"] ?></td>
    <td><?php echo $data["first_name"] ?></td>
    <td><?php echo $data["email"] ?></td>
    <td><?php echo $data["tel"] ?></td>
    <td><?php echo $data["date_ajout"] ?></td>
</tr>
<?php endwhile; ?>