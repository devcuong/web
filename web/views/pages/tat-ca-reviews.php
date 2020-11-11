<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">reviewer</th>
      <th scope="col">sao</th>
      <th scope="col">nội dung</th>
      <th scope="col">school</th>
      <th scope="col">thời gian</th>
      <th scope="col">hide</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php while ($row = mysqli_fetch_array($data["ReviewTrangHienTai"])){ ?>
       <tr>
          <td><?php echo $row["id"] ?></td>
          <td><?php echo $row["reviewer"] ?></td>
          <td><?php echo $row["sao"] ?></td>
          <td><?php echo $row["noidung"] ?></td>
          <td><?php echo $row["school"] ?></td>
          <td><?php echo $row["thoigian"] ?></td>
          <td><?php echo $row["hide"] ?></td>
           <td><a href="<?php echo $servername ?>/quan-tri-chinh/an-review/<?php echo $row["id"] ?>" onclick="return confirm('Are you sure you want to hide this item?');">HIDE</a></td>
        </tr>
  <?php } ?>
  </tbody>
</table>
<nav aria-label="Page navigation example">
  <ul class="pagination">
  <?php for ($i=1; $i<=$data["SoTrang"]; $i++){ ?>
    <li class="page-item <?php if($i == $data["TrangHienTai"]) echo "active" ?>	"><a class="page-link" href="<?php echo $servername ?>/quan-tri-chinh/review-moi-nhat/<?php echo $i ?>"><?php echo $i ?></a></li>
   <?php } ?>
  </ul>
</nav>
