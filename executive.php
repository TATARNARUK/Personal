<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ระบบสารสนเทศ วิทยาลัยพณิชยการบางนา</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300;400;500;600&display=swap" rel="stylesheet">
    
    <style>
        /* ================= Master CSS (Premium Navy & Gold) ================= */
        :root {
            --primary-blue: #0A2540;   
            --primary-yellow: #ffffff; 
            --white: #ffffff;
            --text-dark: #333333;
            --bg-light: #f8fafc;       
        }

        body { font-family: 'Prompt', sans-serif; margin: 0; padding: 0; background-color: var(--bg-light); color: var(--text-dark); }

        /* Header & Nav */
        header { background-color: var(--primary-blue); padding: 15px 30px; display: flex; justify-content: space-between; align-items: center; box-shadow: 0 4px 12px rgba(0,0,0,0.15); position: relative; z-index: 10; }
        .header-logo { color: var(--primary-yellow); font-size: 24px; font-weight: 600; text-decoration: none; letter-spacing: 0.5px; }
        
        nav { display: flex; gap: 20px; }
        nav a { color: var(--white); text-decoration: none; font-weight: 500; font-size: 16px; padding: 8px 16px; border-radius: 8px; transition: all 0.3s ease; }
        nav a:hover, nav a.active { color: var(--primary-blue); background-color: var(--primary-yellow); box-shadow: 0 2px 10px rgba(255, 255, 255, 0.3); }

        /* Page Container (สำหรับหน้าอื่นๆ ที่ไม่ใช่หน้าหลัก) */
        .page-container { max-width: 1100px; margin: 40px auto; padding: 40px; background-color: var(--white); border-radius: 16px; box-shadow: 0 10px 30px rgba(0,0,0,0.08); animation: fadeIn 0.6s ease; }
        h2 { color: var(--primary-blue); border-bottom: 3px solid var(--primary-yellow); display: inline-block; padding-bottom: 10px; margin-bottom: 30px; }

        /* Hero Section (เฉพาะหน้าหลัก) */
        .hero-section-new { position: relative; height: calc(100vh - 70px); min-height: 600px; background-image: url('school.jpg'); background-size: cover; background-position: center; background-attachment: fixed; }
        .hero-overlay { position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(90deg, rgba(10, 37, 64, 0.95) 0%, rgba(10, 37, 64, 0.7) 45%, transparent 100%); display: flex; align-items: center; padding-left: 8%; }
        .hero-glass-box { max-width: 650px; background: rgba(255, 255, 255, 0.08); backdrop-filter: blur(16px); -webkit-backdrop-filter: blur(16px); padding: 50px; border-radius: 24px; border: 1px solid rgba(255, 255, 255, 0.15); box-shadow: 0 25px 50px rgba(0,0,0,0.2); animation: slideUp 0.8s ease forwards; }
        .hero-title { color: var(--white); font-size: 3.5rem; font-weight: 700; line-height: 1.2; margin: 0 0 15px 0; text-shadow: 2px 2px 4px rgba(0,0,0,0.4); }
        .hero-slogan { color: var(--primary-yellow); font-size: 1.4rem; font-weight: 400; margin: 0 0 35px 0; padding-left: 15px; border-left: 4px solid var(--primary-yellow); text-shadow: 1px 1px 2px rgba(0,0,0,0.3); }
        .hero-buttons { display: flex; gap: 15px; }
        .btn-primary, .btn-outline { padding: 12px 30px; border-radius: 30px; text-decoration: none; font-weight: 500; transition: all 0.3s ease; font-size: 16px; }
        .btn-primary { background-color: var(--primary-yellow); color: var(--primary-blue); box-shadow: 0 4px 15px rgba(255, 255, 255, 0.4); }
        .btn-primary:hover { transform: translateY(-3px); box-shadow: 0 8px 20px rgba(255, 255, 255, 0.6); background-color:rgb(255, 255, 255)f; }
        .btn-outline { background-color: transparent; color: var(--white); border: 2px solid var(--white); }
        .btn-outline:hover { background-color: var(--white); color: var(--primary-blue); }

        /* ตารางและส่วนประกอบอื่นๆ */
        .table-responsive { overflow-x: auto; margin-top: 20px; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.05); }
        table { width: 100%; border-collapse: collapse; min-width: 700px; }
        th, td { padding: 15px; text-align: left; border-bottom: 1px solid #e2e8f0; }
        th { background-color: var(--primary-blue); color: var(--white); font-weight: 500; }
        tr:hover td { background-color: #f1f5f9; }
        .text-center { text-align: center; } .text-right { text-align: right; }
        .group-header td { background-color: #e2e8f0 !important; font-weight: 600; color: var(--primary-blue); }
        .badge { display: inline-block; padding: 4px 10px; border-radius: 20px; font-size: 12px; font-weight: 500; color: white; }
        .badge-teacher { background-color: #10b981; } .badge-staff { background-color: #8b5cf6; }

        /* การ์ดผู้บริหาร */
        .exec-row { display: flex; justify-content: center; flex-wrap: wrap; gap: 30px; margin-top: 30px; }
        .exec-card { width: 200px; text-align: center; background: #fff; padding: 20px; border-radius: 15px; box-shadow: 0 5px 15px rgba(0,0,0,0.08); border-top: 5px solid var(--primary-yellow); transition: transform 0.3s; }
        .exec-card:hover { transform: translateY(-5px); }
        .exec-card img { width: 100%; height: 220px; object-fit: cover; border-radius: 10px; margin-bottom: 15px; }

        /* กล่องหลักสูตร */
        .course-box { background: #fff; padding: 25px; border-radius: 16px; margin-bottom: 25px; border-left: 5px solid var(--primary-blue); box-shadow: 0 4px 15px rgba(0,0,0,0.05); }
        .course-box h3 { color: var(--primary-blue); margin-top: 0; font-size: 20px; border-bottom: 2px dashed #e2e8f0; padding-bottom: 10px; }
        .course-flex { display: flex; flex-wrap: wrap; gap: 20px; margin-top: 15px; } .course-col { flex: 1; min-width: 280px; }

        /* Footer */
        footer { background-color: var(--primary-blue); color: rgba(255,255,255,0.7); text-align: center; padding: 25px; font-size: 14px; margin-top: auto; }
        footer span { color: var(--primary-yellow); font-weight: 600; }

        @keyframes slideUp { from { opacity: 0; transform: translateY(40px); } to { opacity: 1; transform: translateY(0); } }
        @keyframes fadeIn { from { opacity: 0; transform: translateY(15px); } to { opacity: 1; transform: translateY(0); } }

        @media (max-width: 768px) {
            .hero-overlay { background: rgba(10, 37, 64, 0.85); padding: 20px; justify-content: center; }
            .hero-glass-box { padding: 30px; } .hero-title { font-size: 2.2rem; }
            .hero-buttons { flex-direction: column; } .btn-primary, .btn-outline { text-align: center; }
            nav { display: none; }
        }
    </style>
</head>
<body>
    <header>
        <a href="index.php" class="header-logo">วิทยาลัยพณิชยการบางนา</a>
        <nav>
            <a href="index.php">หน้าหลัก</a>
            <a href="executive.php" class="active">คณะผู้บริหาร</a>
            <a href="personnel.php">บุคลากร</a>
            <a href="student.php">ข้อมูลนักเรียน</a>
            <a href="department.php">หลักสูตร</a>
        </nav>
    </header>

    <main class="page-container">
        <h2>คณะผู้บริหารสถานศึกษา</h2>
        <div class='exec-row'>
            <div class='exec-card'>
                <img src='dir.jpg' alt='ผู้อำนวยการ'>
                <h4>นางสาวรุ่งนภา ปุณยานุเดช</h4>
                <p style="color: var(--text-dark); margin: 0; font-size: 14px;">ผู้อำนวยการ</p>
            </div>
        </div>
        <div class='exec-row'>
            <div class='exec-card'>
                <img src='dep1.jpg' alt='รองผู้อำนวยการ'>
                <h4>นางสาวรัตติยา วานิชกลาง</h4>
                <p style="color: var(--text-dark); margin: 0; font-size: 13px;">รองผู้อำนวยการ ฝ่ายบริหารทรัพยากร</p>
            </div>
            <div class='exec-card'>
                <img src='dep2.jpg' alt='รองผู้อำนวยการ'>
                <h4>นางสาวสุจิตรา เกิดผล</h4>
                <p style="color: var(--text-dark); margin: 0; font-size: 13px;">รองผู้อำนวยการ ฝ่ายแผนงานฯ</p>
            </div>
            <div class='exec-card'>
                <img src='dep3.jpg' alt='รองผู้อำนวยการ'>
                <h4>นางสาวเอมอร อุปชีวะ</h4>
                <p style="color: var(--text-dark); margin: 0; font-size: 13px;">รองผู้อำนวยการ ฝ่ายพัฒนากิจการฯ</p>
            </div>
            <div class='exec-card'>
                <img src='dep4.jpg' alt='รองผู้อำนวยการ'>
                <h4>นางสาวอุรชา สารสรรค์</h4>
                <p style="color: var(--text-dark); margin: 0; font-size: 13px;">รองผู้อำนวยการ ฝ่ายวิชาการ</p>
            </div>
        </div>
    </main>

    <footer>
        <p>&copy; 2026 ระบบสารสนเทศสถานศึกษา | พัฒนาโดย: <span>กิตติคุณ หนูแก้ว</span></p>
    </footer>
</body>
</html>