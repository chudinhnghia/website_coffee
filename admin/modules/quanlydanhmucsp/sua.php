<?php
    $sql_sua_danhmucsp = "SELECT * FROM tbl_danhmuc WHERE id_danhmuc='$_GET[iddanhmuc]' LIMIT 1";
    $query_sua_danhmucsp = mysqli_query($mysqli, $sql_sua_danhmucsp);
?>

<p>Sửa danh mục sản phẩm</p>
<table style="border: 1px solid #252525;">
    <form action="modules/quanlydanhmucsp/xuly.php?iddanhmuc=<?php echo $_GET['iddanhmuc'] ?>" method="POST">
        <?php
            while($dong = mysqli_fetch_array($query_sua_danhmucsp)) {

        ?>

        <tr>
            <th>Điền danh mục sản phẩm</th>
        </tr>

        <tr>
            <td>Tên danh mục</td>
            <td><input type="text" value="<?php echo $dong['tendanhmuc'] ?>" name="tendanhmuc"></td>
        </tr>
        
        <tr>
            <td>Thứ tự</td>
            <td><input type="text" value="<?php echo $dong['thutu'] ?>" name="thutu"></td>
        </tr>

        <tr>
            <td colspan="2"><input type="submit" name="suadanhmuc" value="Sửa danh mục sản phẩm"></td>
        </tr>

        <?php
            }
        ?>
    </form>
</table>