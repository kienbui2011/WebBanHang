<!DOCTYPE html>
<html>

<head>
    <title>Đăng xuất</title>
</head>

<body>


    <script>
        // Hiển thị hộp thoại xác nhận khi trang tải lên
        window.onload = function() {
            var confirmation = confirm("Bạn có chắc chắn muốn đăng xuất không?");
            if (confirmation) {
                window.location.href = "login.php";
            } else {
                window.history.go(-1); // Quay lại trang trước đó
            }
        }
    </script>
</body>

</html>