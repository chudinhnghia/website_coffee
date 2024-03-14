<?php
    $sql = "SELECT * FROM tbl_dangky LIMIT 1";
    $query_sql = mysqli_query($mysqli, $sql);
?>


<!-- ------- Content -------- -->
<div class="contact-content">
        <div class="grid wide col">
            <div class="contact-container">
                <h3 class="contact-container_heading">
                    Gửi tin nhắn cho chúng tôi
                </h3>
            
                <div class="contact-container_form">
                    
                        <?php
                        if(!isset($_SESSION['dangky'])) {
                        ?>
                        <input type="text" placeholder="Họ và tên" class="form-input" required>
                        <input type="text" placeholder="Số điện thoại" class="form-input" required>
                        <textarea type="text" placeholder="Nội dung" name="comment" class="form-input form-input--content" rows="5" required></textarea>
                        <button type="submit" class="form-btn" onclick="updateAndSubmitForm()">Gửi liên hệ</button>
                        <?php
                        } else {
                            if($row = mysqli_fetch_array($query_sql)) {
                        ?>
                        <input type="text" placeholder="Họ và tên" value="<?php echo $row['tenkhachhang'] ?>" class="form-input" required>
                        <input type="text" placeholder="Số điện thoại" value="<?php echo $row['sodienthoai'] ?>" class="form-input" required>
                        <textarea type="text" placeholder="Nội dung" name="comment" class="form-input form-input--content" rows="5" required></textarea>
                        <button type="submit" class="form-btn" onclick="updateAndSubmitForm()">Gửi liên hệ</button>
                        <?php
                            }
                        }
                        ?>
                    
                </div>
            </div>
        </div>
    </div>

    <!-- <script>
    function updateAndSubmitForm() {
        var button = document.querySelector('.form-btn');
        button.innerHTML = 'Đang cập nhật...';
        button.disabled = true;

        // Thực hiện các xử lý cập nhật trên máy chủ, có thể sử dụng AJAX hoặc fetch API
        // Sau khi hoàn thành, bạn có thể gửi form bằng cách sử dụng JavaScript
        document.getElementById('contactForm').submit();
    }
    </script> -->

