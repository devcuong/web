<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Tên school</th>
      <th scope="col">Slug school</th>
      <th scope="col">logo</th>
      <th scope="col">địa chỉ</th>
      <th scope="col">xóa</th>
      <th scope="col">update tên/tắt</th>
      <th scope="col">Tách</th>
    </tr>
  </thead>
  <tbody>
  <?php while ($row = mysqli_fetch_array($data["SchoolsTrangHienTai"])){ ?>
       <tr>
          <td><?php echo $row["tenschool"] ?></td>
          <td><?php echo $row["slugschool"] ?></td>
          <td><img alt="" src="<?php echo $servername ?>/web/public/asset/schools/logo/<?php echo $row["logo"] ?>" width="64"></td>
          <td><?php echo $row["diachi"] ?></td>
          <td><a href="<?php echo $servername ?>/quan-tri-chinh/xoa-school/<?php echo $row["id"] ?>">X</a></td>
          <td><a href="<?php echo $servername ?>/quan-tri-chinh/cap-nhat-ten-school/<?php echo $row["id"]."/".$row["slugschool"] ?>">Update</a></td>
          <td><a href="<?php echo $servername ?>/quan-tri-chinh/tach-co-so/<?php echo $row["id"]?>">Tách</a></td>
        </tr>
  <?php } ?>
  </tbody>
</table>
<nav aria-label="Page navigation example">
  <ul class="pagination">
  <?php for ($i=1; $i<=$data["SoTrang"]; $i++){ ?>
    <li class="page-item <?php if($i == $data["TrangHienTai"]) echo "active" ?>	"><a class="page-link" href="<?php echo $servername ?>/quan-tri-chinh/tat-ca-schools/<?php echo $i ?>"><?php echo $i ?></a></li>
   <?php } ?>
  </ul>
</nav>
