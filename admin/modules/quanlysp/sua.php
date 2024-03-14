<?php
    $sql_sua_sp = "SELECT * FROM tbl_sanpham WHERE id_sanpham='$_GET[idsanpham]' LIMIT 1";
    $query_sua_sp = mysqli_query($mysqli, $sql_sua_sp);
?>

<p>Sửa sản phẩm</p>
<table border="1" width="100%">

    <?php
        while($row = mysqli_fetch_array($query_sua_sp)) {

    ?>

    <form id="formSuaSP" action="modules/quanlysp/xuly.php?idsanpham=<?php echo $row['id_sanpham'] ?>" method="POST" enctype="multipart/form-data" onsubmit="return validateForm()">
        <tr>
            <td>Mã sản phẩm</td>
            <td><input type="text" value="<?php echo $row['masp'] ?>" name="masanpham" style="width: 50%;" require></td>
        </tr>

        <tr>
            <td>Tên sản phẩm</td>
            <td><input type="text" value="<?php echo $row['tensp'] ?>" name="tensanpham" style="width: 50%;" require></td>
        </tr>
        
        <tr>
            <td>Giá sản phẩm</td>
            <td><input type="text" value="<?php echo $row['giasp'] ?>" name="giasanpham" style="width: 50%;" require></td>
        </tr>

        <tr>
            <td>Hình ảnh</td>
            <td>
                <input type="file" value="" name="hinhanhsanpham" id="hinhanh">
                <img src="modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>" width="150px" alt="">
            </td>
        </tr>

        <tr>
            <td>Nội dung</td>
            <td><textarea name="noidungsanpham" id="" cols="30" rows="10" style="width: 50%;"><?php echo $row['noidung'] ?></textarea></td>
        </tr>

        <tr>
            <td>Danh mục sản phẩm</td>
            <td>
                <select name="danhmuc" id="">
                    <?php
                        $sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
                        $query_danhmuc = mysqli_query($mysqli, $sql_danhmuc);

                        while($row_danhmuc = mysqli_fetch_array($query_danhmuc)) {
                            if($row_danhmuc['id_danhmuc'] == $row['id_danhmuc']) {
                    ?>
                    <option selected value="<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></option>
                    <?php
                        }else {
                    ?>
                    <option value="<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></option>
                    <?php 
                        }
                    }
                    ?>
                </select>
            </td>
        </tr>

        <tr>
            <td colspan="2"><input id='buttonSuaSP' type="submit" name="suasp" value="Sửa sản phẩm" style="width: 50%;"></td>
        </tr>
    </form>
    <?php
        }
    ?>
</table>

<script>
    function validateForm() {
    var fileInput = document.getElementById('hinhanh');

    // Kiểm tra xem file có tồn tại và có thuộc tính files không
    if (fileInput && fileInput.files) {
        // Kiểm tra xem thuộc tính length có tồn tại hay không
        if (fileInput.files.length > 0) {
            return true; // Cho phép submit form
        } else {
            alert('Vui lòng chọn một file ảnh mới để tải lên');
            return false; // Ngăn chặn submit form
        }
    }

    return false; // Ngăn chặn submit form nếu không có fileInput hoặc fileInput.files
}
</script>