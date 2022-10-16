<html>
<table>
    <thead>
      <tr>
        <th>cregno.</th>
        <th>cname</th>
        <th>clocation</th>        
    </tr>
</thead>
<tbody>
  <?php
  require("connect.php");
  $query="SELECT * FROM company ";
  $result = mysqli_query($db, $query);
  while($row=mysqli_fetch_array($result))
  {
    ?>
    <tr>
      <td><?php echo $row['cregno']; ?></td>
      <td><?php echo $row['cname']; ?></td>
      <td><?php echo $row['clocation']; ?></td>
  </tr>
  <?php
}
?>
</tbody>
</table>
</html>