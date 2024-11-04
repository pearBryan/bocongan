<!DOCTYPE html>
<html lang="vi">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông Báo Của Bộ Công An</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        /* Reset CSS */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Body and Container Styling */
        body, html {
            font-family: Arial, sans-serif;
            background-color: #e9ecef;
            color: #333;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .container {
            background-color: #ffffff;
            border: 1px solid #ddd;
            border-radius: 10px;
            max-width: 600px;
            width: 100%;
            padding: 30px;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
            margin: 20px auto;
            flex: 1;
        }

        /* Logo and Header Styling */
        .logo {
            display: block;
            margin: 0 auto;
            width: 80px;
            height: auto;
        }
        h1, h2 {
            text-align: center;
            color: #000000;
            font-weight: bold;
            margin-bottom: 10px;
        }
        h3 {
            text-align: center;
            color: #c0392b;
            font-weight: bold;
            margin-bottom: 10px;
        }

        /* Warning Box Styling */
        .warning {
            background-color: #fdecea;
            border: 1px solid #e74c3c;
            padding: 20px;
            border-radius: 8px;
            margin: 20px 0;
            color: #c0392b;
            text-align: center;
        }
        .warning p {
            margin-top: 10px;
        }

        /* Information Box Styling */
        .info-box {
            border: 1px solid #d5d8dc;
            padding: 15px;
            background-color: #f4f6f7;
            margin: 20px 0;
            border-radius: 8px;
        }
        .info-box p {
            font-weight: bold;
            color: #333;
            margin-bottom: 8px;
        }

        /* Footer Styling */
        footer {
            text-align: center;
            font-size: 13px;
            color: #7d7d7d;
            padding: 10px 0;
            background-color: #f9f9f9;
            border-top: 1px solid #ddd;
        }
    </style>
</head>
<body>

<div class="container">
    <img src="https://th.bing.com/th/id/OIP.1S_yep-KX8IBSqWkcKlovAHaFu?rs=1&pid=ImgDetMain" alt="Logo Bộ Công An" class="logo">
    <h1>BỘ CÔNG AN</h1>
    <h2>CỤC AN NINH MẠNG VÀ PHÒNG CHỐNG TỘI PHẠM SỬ DỤNG CÔNG NGHỆ CAO</h2>

    <div class="warning">
        <h3>CẢNH BÁO NGHIÊM TRỌNG</h3>
        <H4>ĐỐI VỚI NGƯỜI QUẢN TRỊ THANHBINHIT.COM</H4>
        <p>Chủ sở hữu website đã thực hiện hành vi tấn công vào hệ thống chính phủ và phát tán mã độc là vi phạm pháp luật nghiêm trọng, theo Điều 289 (Tội xâm nhập trái phép vào hệ thống thông tin), Điều 356 (Tội phát tán virus máy tính), và Điều 360 (Tội chiếm đoạt tài liệu của cơ quan, tổ chức) Bộ luật Hình sự 2015 (SĐBS 2017) nước Cộng hòa Xã hội chủ nghĩa Việt Nam.</p>
        <p>Cơ quan công an sẽ lưu lại log truy cập này để tập hợp xử lý!</p>
    </div>

    <div class="info-box">
    <p>Thông tin truy cập của bạn:</p>
    <p><i class="fas fa-network-wired"></i> - Địa chỉ IP: <span id="ip"></span></p>
    <p><i class="fas fa-desktop"></i> - Hệ điều hành: <span id="os"></span></p>
    <p><i class="fas fa-browser"></i> - Trình duyệt: <span id="browser"></span></p>
</div>


    <p style="text-align: center; margin-top: 20px;">
        Mọi thông tin tố giác tội phạm có liên quan xin gửi về: <strong>Cục An ninh mạng và phòng chống tội phạm sử dụng Công nghệ cao, số 40A, Hàng Bài, Hà Nội.</strong>
    </p>
</div>

<footer>
    © 2024 Bộ Công An. Mọi quyền được bảo lưu.
</footer>

<script>
    // PHP để lấy địa chỉ IP của người dùng
    document.getElementById('ip').innerText = "<?php echo $_SERVER['REMOTE_ADDR']; ?>";

    // JavaScript để lấy thông tin hệ điều hành và trình duyệt
    var os = navigator.platform;
    var browser = navigator.userAgent;
    document.getElementById('os').innerText = os;
    document.getElementById('browser').innerText = browser;
</script>

</body>
</html>
