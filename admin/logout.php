<!DOCTYPE html>
<html>
<head>
    <title>Trang Ví dụ</title>
</head>
<body>
   

    <script>
        // Hiển thị hộp thoại xác nhận khi trang tải lên
        window.onload = function() {
            var confirmation = confirm("Bạn có chắc chắn muốn đăng xuất không?");
            if (confirmation) {
                window.location.href = "login.php";
            }
           
        }
    </script>
</body>
</html>
