<?php
    $iddangky = $_SESSION['dangky'];
    $sql = "SELECT * FROM tbl_donhang, tbl_dangky WHERE tbl_donhang.id_dangky = tbl_dangky.id_dangky AND
    tbl_donhang.id_dangky = '$iddangky' ORDER BY tbl_donhang.id_donhang ASC";
    $query = mysqli_query($mysqli, $sql);

    $dem = 0;
?>

<!-- ------- account -------- -->
<div class="account">
    <div class="grid wide col">
        <h2 class="account-header">
            Thông tin đơn hàng
        </h2>

        <p class="account-text">
            Đơn hàng gần nhất
        </p>

        <div class="row">
            <div class="col l-8 m-12 c-12">
                <div class="account-table">
                    <table class="account-table_order">
                        <thead class="account-table_order-thead">
                            <tr>
                                <th>Đơn hàng</th>
                                <th>Ngày</th>
                                <th>Địa chỉ</th>
                                <th>Giá trị đơn hàng</th>
                                <th>TT thanh toán</th>
                                <th>TT vận chuyển</th>
                            </tr>
                        </thead>

                        <tbody class="account-table_order-tbody">
                            <?php
                            while ($row = mysqli_fetch_array($query)) {
                                $dem++;
                                
                            ?>
                            <tr>
                                <td style="width: 10%;">#<?php echo $row['id_donhang']; ?></td>
                                <td style="width: 10%;"><?php echo $row['time']; ?></td>
                                <td style="width: 31%;">
                                    <?php echo $row['diachi'] ?>
                                </td>
                                <td style="width: 16%;"><?php echo number_format($row['giatridonhang'], 0, ',', '.').'VND' ?></td>
                                <td style="width: 17%;">Chưa thanh toán</td>
                                <td style="color: red; width: 16%;">Chưa chuyển</td>
                            </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="col l-4 m-12 c-12">
                <div class="account-information">
                    <?php
                    $sql_khachhang = "SELECT * FROM tbl_dangky WHERE tbl_dangky.id_dangky = '$iddangky'";
                    $query_khachhang = mysqli_query($mysqli, $sql_khachhang);
                    $row_dangky = mysqli_fetch_array($query_khachhang);
                    ?>
                    <h2 class="account-information_header">
                        Thông tin khách hàng
                    </h2>

                    <p class="account-information_name">
                        <i class="fa fa-user"></i>
                        <?php echo $row_dangky['tenkhachhang']; ?>
                    </p>

                    <p class="account-information_order">
                        Đơn hàng: <?php echo $dem; ?>
                    </p>

                    <p class="account-information_phone">
                        <i class="fa fa-phone"></i>
                        <?php echo $row_dangky['sodienthoai']; ?>
                    </p>
                    
                </div>
            </div>
        </div>
    </div>
</div>

