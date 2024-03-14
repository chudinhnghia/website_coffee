<p>Thêm sản phẩm</p>
<table border="1" width="100%">
    <form action="modules/quanlysp/xuly.php" method="POST" enctype="multipart/form-data">
        <tr>
            <td>Mã sản phẩm</td>
            <td><input type="text" name="masanpham" style="width: 50%;"></td>
        </tr>

        <tr>
            <td>Tên sản phẩm</td>
            <td><input type="text" name="tensanpham" style="width: 50%;"></td>
        </tr>
        
        <tr>
            <td>Giá sản phẩm</td>
            <td><input type="text" name="giasanpham" style="width: 50%;"></td>
        </tr>

        <tr>
            <td>Hình ảnh</td>
            <td><input type="file" name="hinhanhsanpham"></td>
        </tr>

        <tr>
            <td>Nội dung</td>
            <td><textarea name="noidungsanpham" id="" cols="30" rows="10" style="width: 50%;"></textarea></td>
        </tr>

        <tr>
            <td>Danh mục sản phẩm</td>
            <td>
                <select name="danhmuc" id="">
                    <?php
                        $sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
                        $query_danhmuc = mysqli_query($mysqli, $sql_danhmuc);

                        while($row_danhmuc = mysqli_fetch_array($query_danhmuc)) {
                    ?>
                    <option value="<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></option>
                    <?php
                        }
                    ?>
                </select>
            </td>
        </tr>

        <tr>
            <td colspan="2"><input type="submit" name="themsp" value="Thêm sản phẩm" style="width: 50%;"></td>
        </tr>
    </form>
</table>