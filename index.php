<?php
header("Location: Personal/");
?>
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ระบบสารสนเทศ วิทยาลัยพณิชยการบางนา</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300;400;500;600&display=swap" rel="stylesheet">
    
<style>
    /* ================= Core CSS (Premium Navy & Gold Theme) ================= */
    :root {
        --primary-blue: #0A2540;   /* น้ำเงินกรมท่าเข้ม ดูหรูหราและเป็นทางการ */
        --primary-yellow: #ffffff; /* สีเหลืองทอง ตัดกับน้ำเงินให้ดูโดดเด่น */
        --white: #ffffff;
        --text-dark: #333333;
        --bg-light: #f8fafc;       /* พื้นหลังสีเทาอมฟ้าสว่างๆ สบายตา */
    }

    body { 
        font-family: 'Prompt', sans-serif; 
        margin: 0; 
        padding: 0;
        background-color: var(--bg-light);
        color: var(--text-dark);
    }

    /* ส่วนหัว (Header) */
    header { 
        background-color: var(--primary-blue); 
        padding: 15px 30px; 
        display: flex;
        justify-content: space-between;
        align-items: center;
        box-shadow: 0 4px 12px rgba(0,0,0,0.15);
        position: relative;
        z-index: 10;
    }
    
    .header-logo {
        color: var(--primary-yellow);
        font-size: 24px;
        font-weight: 600;
        text-decoration: none;
        letter-spacing: 0.5px;
    }

    /* เมนูนำทาง (Navigation) */
    nav {
        display: flex;
        gap: 20px;
    }

    nav a { 
        color: var(--white);
        text-decoration: none; 
        font-weight: 500;
        font-size: 16px;
        padding: 8px 16px;
        border-radius: 8px;
        transition: all 0.3s ease;
    }

    nav a:hover, nav a.active { 
        color: var(--primary-blue);
        background-color: var(--primary-yellow); /* ปุ่มเมนูที่เลือกจะเป็นสีทอง */
        box-shadow: 0 2px 10px rgba(255, 255, 255, 0.3);
    }

    /* คอนเทนเนอร์สำหรับหน้าเนื้อหา (ยกเว้นหน้าหลัก) */
    .page-container {
        max-width: 1100px;
        margin: 40px auto;
        padding: 40px;
        background-color: var(--white);
        border-radius: 16px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.08);
    }

    h2 {
        color: var(--primary-blue);
        border-bottom: 3px solid var(--primary-yellow);
        display: inline-block;
        padding-bottom: 10px;
        margin-bottom: 30px;
    }

    /* ================= CSS สำหรับหน้าหลัก (Glassmorphism) ================= */
    .hero-section-new {
        position: relative;
        height: calc(100vh - 70px);
        min-height: 600px;
        background-image: url('school.jpg'); 
        background-size: cover;
        background-position: center;
        background-attachment: fixed; 
    }

    /* แผ่นฟิล์มไล่สีให้เข้ากับธีมกรมท่า */
    .hero-overlay {
        position: absolute;
        top: 0; left: 0; width: 100%; height: 100%;
        /* ไล่สีจากน้ำเงินเข้มฝั่งซ้าย ไปโปร่งใสฝั่งขวา */
        background: linear-gradient(90deg, rgba(10, 37, 64, 0.95) 0%, rgba(10, 37, 64, 0.7) 45%, transparent 100%);
        display: flex;
        align-items: center;
        padding-left: 8%; 
    }

    /* กล่องข้อความเอฟเฟกต์กระจกใส */
    .hero-glass-box {
        max-width: 650px;
        background: rgba(255, 255, 255, 0.08); 
        backdrop-filter: blur(16px); 
        -webkit-backdrop-filter: blur(16px);
        padding: 50px;
        border-radius: 24px;
        border: 1px solid rgba(255, 255, 255, 0.15);
        box-shadow: 0 25px 50px rgba(0,0,0,0.2);
        animation: slideUp 0.8s ease forwards;
    }

    .hero-title {
        color: var(--white);
        font-size: 3.5rem;
        font-weight: 700;
        line-height: 1.2;
        margin: 0 0 15px 0;
        text-shadow: 2px 2px 4px rgba(0,0,0,0.4);
    }

    .hero-slogan {
        color: var(--primary-yellow); 
        font-size: 1.4rem;
        font-weight: 400;
        margin: 0 0 35px 0;
        padding-left: 15px;
        border-left: 4px solid var(--primary-yellow);
        text-shadow: 1px 1px 2px rgba(0,0,0,0.3);
    }

    /* ปุ่มกด */
    .hero-buttons { display: flex; gap: 15px; }
    
    .btn-primary, .btn-outline {
        padding: 12px 30px;
        border-radius: 30px;
        text-decoration: none;
        font-weight: 500;
        transition: all 0.3s ease;
        font-size: 16px;
    }

    .btn-primary {
        background-color: var(--primary-yellow);
        color: var(--primary-blue);
        box-shadow: 0 4px 15px rgba(255, 255, 255, 0.4);
    }
    .btn-primary:hover { 
        transform: translateY(-3px); 
        box-shadow: 0 8px 20px rgba(255, 255, 255, 0.6); 
        background-color: #ffffff;
    }

    .btn-outline {
        background-color: transparent;
        color: var(--white);
        border: 2px solid var(--white);
    }
    .btn-outline:hover { 
        background-color: var(--white); 
        color: var(--primary-blue); 
    }

    @keyframes slideUp {
        from { opacity: 0; transform: translateY(40px); }
        to { opacity: 1; transform: translateY(0); }
    }

    @media (max-width: 768px) {
        .hero-overlay { 
            background: rgba(10, 37, 64, 0.85); /* บนมือถือให้พื้นหลังทึบขึ้นเพื่อให้อ่านง่าย */
            padding: 20px; 
            justify-content: center; 
        }
        .hero-glass-box { padding: 30px; }
        .hero-title { font-size: 2.2rem; }
        .hero-buttons { flex-direction: column; }
        .btn-primary, .btn-outline { text-align: center; }
        nav { display: none; }
    }

    /* ================= CSS อื่นๆ (ตาราง, การ์ด, Footer) ================= */
    .table-responsive { overflow-x: auto; margin-top: 20px; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.05); }
    table { width: 100%; border-collapse: collapse; min-width: 700px; }
    th, td { padding: 15px; text-align: left; border-bottom: 1px solid #e2e8f0; }
    th { background-color: var(--primary-blue); color: var(--white); font-weight: 500; }
    tr:hover td { background-color: #f1f5f9; }
    
    .exec-row { display: flex; justify-content: center; flex-wrap: wrap; gap: 30px; margin-top: 30px; }
    .exec-card { width: 200px; text-align: center; background: #fff; padding: 20px; border-radius: 15px; box-shadow: 0 5px 15px rgba(0,0,0,0.08); border-top: 5px solid var(--primary-yellow); transition: transform 0.3s; }
    .exec-card:hover { transform: translateY(-5px); }
    .exec-card img { width: 100%; height: 220px; object-fit: cover; border-radius: 10px; margin-bottom: 15px; }

    footer { 
        background-color: var(--primary-blue);
        color: rgba(255,255,255,0.7);
        text-align: center; 
        padding: 25px; 
        font-size: 14px; 
        margin-top: auto; 
    }
    footer span { color: var(--primary-yellow); font-weight: 600; }
</style>
</head>
<body>
    <header>
        <a href="index.php" class="header-logo">วิทยาลัยพณิชยการบางนา</a>
        <nav>
            <a href="index.php" class="active">หน้าหลัก</a>
            <a href="executive.php">คณะผู้บริหาร</a>
            <a href="personnel.php">บุคลากร</a>
            <a href="student.php">ข้อมูลนักเรียน</a>
            <a href="department.php">หลักสูตร</a>
        </nav>
    </header>

    <main class="hero-section-new">
        <div class="hero-overlay">
            <div class="hero-glass-box">
                <h1 class="hero-title">วิทยาลัยพณิชยการบางนา</h1>
                <p class="hero-slogan">มุ่งมั่นสู่ความเป็นเลิศด้านอาชีวศึกษา มาตรฐานสากล</p>
                <div class="hero-buttons">
                    <a href="department.php" class="btn-primary">ดูหลักสูตรที่เปิดสอน</a>
                    <a href="student.php" class="btn-outline">ข้อมูลนักศึกษา</a>
                </div>
            </div>
        </div>
    </main>

    <footer>
        <p>&copy; 2026 ระบบสารสนเทศสถานศึกษา | พัฒนาโดย: <span>กิตติคุณ หนูแก้ว</span></p>
    </footer>
</body>
</html>