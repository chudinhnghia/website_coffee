    <?php
        // include("../../config/config.php");
        $sql_lietke_sp = "SELECT * FROM tbl_sanpham, tbl_danhmuc WHERE tbl_sanpham.id_danhmuc = tbl_danhmuc.id_danhmuc ORDER BY id_sanpham ASC";
        $sql_lietke_sp2 = "SELECT * FROM tbl_sanpham ORDER BY id_sanpham DESC";
        $query_lietke_sp = mysqli_query($mysqli, $sql_lietke_sp);
    ?>

    <p>Liệt kê sản phẩm</p>

    <table class="admin_lietke-table" border="1" width="100%">
        <tr>
            <th>ID</th>
            <th>Tên sản phẩm</th>
            <th>Mã sản phẩm</th>
            <th>Giá sản phẩm</th>
            <th>Hình ảnh sản phẩm</th>
            <th>Nội dung sản phẩm</th>
            <th>Danh mục sản phẩm</th>
            <th>Quản lý</th>
        </tr>
        <?php
        $i = 0;
        while($row = mysqli_fetch_array($query_lietke_sp)) {
            $i++;
        ?>
        <tr>
            <td><?php echo $i ?></td>
            <td><?php echo $row['tensp'] ?></td>
            <td><?php echo $row['masp'] ?></td>
            <td><?php echo $row['giasp'] ?></td>
            <td><img src="modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>" width="150px" alt=""></td>
            <td><?php echo $row['noidung'] ?></td>
            <td><?php echo $row['tendanhmuc'] ?></td>
            <td>
                <a href="modules/quanlysp/xuly.php?idsanpham=<?php echo $row['id_sanpham'] ?>">Xoá</a> 
                | <a href="?action=quanlysanpham&query=sua&idsanpham=<?php echo $row['id_sanpham'] ?>">Sửa</a>
            </td>
        </tr>
        
        <?php
        }
        ?>
    </table>