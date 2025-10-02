<?php
    $name = "Phan Nguyễn Anh Nhật";
    $dob = "16/04/2004";
    $email = "phannhatbao160404@gmail.com";
    $phone = "0899878665";
    $address = "Thành phố Huế";
    $ielts = "IELTS 6.5";
    $education = "Đại học Khoa học Huế (2022 - 2026)";
    $major = "Sinh viên năm 3 - Công nghệ Thông tin";
?>
<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <title>CV - <?php echo $name; ?></title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap');

    * { margin: 0; padding: 0; box-sizing: border-box; }
    body {
      font-family: 'Poppins', sans-serif;
      background: #f4f7f9;
      display: flex;
      justify-content: center;
      padding: 40px;
    }
    .cv-container {
      width: 950px;
      background: #fff;
      display: flex;
      border-radius: 12px;
      box-shadow: 0 6px 25px rgba(0,0,0,0.15);
      overflow: hidden;
    }
    /* Sidebar */
    .sidebar {
      width: 32%;
      background: linear-gradient(180deg,#2c3e50,#34495e);
      color: #fff;
      padding: 35px 25px;
    }
    .sidebar img {
      display: block;
      margin: 0 auto 20px;
      width: 130px;
      height: 130px;
      border-radius: 50%;
      border: 4px solid #16a085;
    }
    .sidebar h2 {
      text-align: center;
      margin-bottom: 10px;
      font-size: 20px;
      font-weight: 700;
    }
    .sidebar p {
      text-align: center;
      font-size: 14px;
      margin-bottom: 20px;
    }
    .sidebar section {
      margin-top: 25px;
    }
    .sidebar h3 {
      font-size: 16px;
      color: #16a085;
      border-bottom: 1px solid #16a085;
      margin-bottom: 12px;
      padding-bottom: 5px;
    }
    .info p { 
      display: flex; 
      align-items: center; 
      margin-bottom: 8px; 
      font-size: 14px;
    }
    .info span {
      margin-left: 8px;
    }
    /* Progress bar */
    .progress {
      height: 6px;
      background: #ccc;
      border-radius: 5px;
      overflow: hidden;
      margin: 6px 0 14px;
    }
    .progress-bar {
      height: 100%;
      background: #16a085;
    }

    /* Main content */
    .content {
      width: 68%;
      padding: 40px 45px;
    }
    .content h1 {
      font-size: 32px;
      color: #2c3e50;
      margin-bottom: 5px;
    }
    .content h4 {
      font-weight: 400;
      color: #555;
      margin-bottom: 25px;
    }
    .section {
      margin-bottom: 25px;
    }
    .section h2 {
      color: #16a085;
      font-size: 18px;
      border-bottom: 2px solid #16a085;
      margin-bottom: 10px;
      padding-bottom: 5px;
    }
    .section p {
      margin-bottom: 10px;
      line-height: 1.6;
      font-size: 14px;
    }
  </style>
</head>
<body>
  <div class="cv-container">
    <!-- Sidebar -->
    <div class="sidebar">
      <img src="avatar.jpg" alt="Avatar">
      <h2><?php echo $name; ?></h2>
      <p>Sinh viên Công nghệ Thông tin</p>

      <section class="info">
        <h3>Liên hệ</h3>
        <p>📧 <span><?php echo $email; ?></span></p>
        <p>📱 <span><?php echo $phone; ?></span></p>
        <p>📍 <span><?php echo $address; ?></span></p>
        <p>🎂 <span><?php echo $dob; ?></span></p>
      </section>

      <section>
        <h3>Kỹ năng</h3>
        <p>PHP / MySQL</p>
        <div class="progress"><div class="progress-bar" style="width:80%"></div></div>
        <p>HTML / CSS / JS</p>
        <div class="progress"><div class="progress-bar" style="width:75%"></div></div>
        <p>Git / GitHub</p>
        <div class="progress"><div class="progress-bar" style="width:70%"></div></div>
        <p>Word / Excel</p>
        <div class="progress"><div class="progress-bar" style="width:85%"></div></div>
      </section>

      <section>
        <h3>Ngoại ngữ</h3>
        <p>Tiếng Anh - <?php echo $ielts; ?></p>
        <div class="progress"><div class="progress-bar" style="width:65%"></div></div>
      </section>

      <section>
        <h3>Chứng chỉ</h3>
        <p>✔ IELTS 6.5 (2024)</p>
        <p>✔ Học bổng CNTT (2023)</p>
        <p>✔ Giải Ba Website (2024)</p>
      </section>
    </div>

    <!-- Content -->
    <div class="content">
      <h1><?php echo $name; ?></h1>
      <h4><?php echo $major; ?></h4>

      <div class="section">
        <h2>Giới thiệu</h2>
        <p>Sinh viên năm 3 ngành Công nghệ Thông tin tại <?php echo $education; ?>. Đam mê lập trình web, mong muốn trở thành Fullstack Developer trong tương lai.</p>
      </div>

      <div class="section">
        <h2>Học vấn</h2>
        <p><strong><?php echo $education; ?></strong></p>
        <p>- Các môn nổi bật: Lập trình Web, CSDL, Quản trị dự án phần mềm.</p>
      </div>

      <div class="section">
        <h2>Kinh nghiệm</h2>
        <p>- Phát triển website bán hàng mini bằng PHP & MySQL (2023).</p>
        <p>- Thành viên dự án “Hệ thống quản lý kho nguyên liệu” (2024).</p>
        <p>- Báo cáo nghiên cứu “Lập trình di động: Android & iOS” (2024).</p>
      </div>

      <div class="section">
        <h2>Hoạt động</h2>
        <p>- Thành viên CLB CNTT, tham gia workshop công nghệ web.</p>
        <p>- Tình nguyện viên “Mùa hè xanh” 2023 tại Quảng Trị.</p>
        <p>- Tham gia cuộc thi Lập trình sinh viên 2024 tại Huế.</p>
      </div>

      <div class="section">
        <h2>Mục tiêu nghề nghiệp</h2>
        <p>- Ngắn hạn: Tích lũy kinh nghiệm thực tập, nâng cao kỹ năng web.</p>
        <p>- Dài hạn: Trở thành Fullstack Developer, tham gia dự án quốc tế.</p>
      </div>
    </div>
  </div>
</body>
</html>