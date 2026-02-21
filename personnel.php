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
        nav a:hover, nav a.active { color: var(--primary-blue); background-color: var(--primary-yellow); box-shadow: 0 2px 10px rgba(246, 177, 51, 0.3); }

        .page-container { max-width: 1100px; margin: 40px auto; padding: 40px; background-color: var(--white); border-radius: 16px; box-shadow: 0 10px 30px rgba(0,0,0,0.08); animation: fadeIn 0.6s ease; }
        h2 { color: var(--primary-blue); border-bottom: 3px solid var(--primary-yellow); display: inline-block; padding-bottom: 10px; margin-bottom: 30px; }

        /* ================= CSS เฉพาะหน้าบุคลากร (Split Layout) ================= */
        .personnel-layout {
            display: grid;
            grid-template-columns: 320px 1fr; /* แบ่งซ้าย 320px ขวาคือพื้นที่ที่เหลือ */
            gap: 40px;
            align-items: start;
        }

        /* กล่องสถิติด้านซ้าย */
        .stats-sidebar {
            background-color: var(--bg-light);
            padding: 25px;
            border-radius: 12px;
            border-top: 4px solid var(--primary-yellow);
            box-shadow: 0 4px 15px rgba(0,0,0,0.03);
        }
        .stats-table { width: 100%; border-collapse: collapse; margin-bottom: 25px; font-size: 14px; }
        .stats-table th { text-align: left; padding: 10px 0; color: var(--primary-blue); border-bottom: 2px solid #e2e8f0; font-weight: 600; }
        .stats-table td { padding: 8px 0; border-bottom: 1px dashed #e2e8f0; color: #475569; }
        .stats-table td:last-child { text-align: right; font-weight: 600; color: var(--primary-blue); }

        /* พื้นที่รูปภาพด้านขวา */
        .profile-area { display: flex; flex-direction: column; gap: 40px; }
        
        .profile-group { margin-bottom: 10px; }
        .profile-group-title {
            text-align: center;
            font-size: 16px;
            color: var(--primary-blue);
            font-weight: 600;
            position: relative;
            margin-bottom: 30px;
        }
        /* เส้นคั่นกลางหมวดหมู่แบบหรูหรา */
        .profile-group-title::before, .profile-group-title::after {
            content: ""; position: absolute; top: 50%; width: 35%; height: 1px; background: #cbd5e1;
        }
        .profile-group-title::before { left: 0; }
        .profile-group-title::after { right: 0; }

        .profile-grid { display: flex; flex-wrap: wrap; justify-content: center; gap: 20px; }
        
        .profile-card { width: 170px; text-align: center; transition: transform 0.3s ease; }
        .profile-card:hover { transform: translateY(-5px); }
        .profile-card img {
            width: 130px;
            height: 170px; /* บังคับสัดส่วนรูปถ่ายติดบัตรแนวตั้ง */
            object-fit: cover;
            border: 3px solid var(--primary-blue); /* กรอบรูปสีกรมท่า */
            border-radius: 8px;
            margin-bottom: 15px;
            box-shadow: 0 6px 15px rgba(0,0,0,0.1);
        }
        .profile-card h5 { margin: 0 0 5px 0; font-size: 14px; color: var(--primary-blue); font-weight: 600; }
        .profile-card p { margin: 0; font-size: 12px; color: #64748b; line-height: 1.4; }

        footer { background-color: var(--primary-blue); color: rgba(255,255,255,0.7); text-align: center; padding: 25px; font-size: 14px; margin-top: auto; }
        footer span { color: var(--primary-yellow); font-weight: 600; }

        @keyframes fadeIn { from { opacity: 0; transform: translateY(15px); } to { opacity: 1; transform: translateY(0); } }

        /* Responsive สำหรับมือถือ (ให้ตารางสถิติไปอยู่ด้านบน แล้วรูปอยู่ด้านล่าง) */
        @media (max-width: 850px) {
            .personnel-layout { grid-template-columns: 1fr; gap: 20px; }
            .profile-group-title::before, .profile-group-title::after { width: 25%; }
            nav { display: none; } /* ซ่อนเมนูชั่วคราวบนจอมือถือ */
        }
    </style>
</head>
<body>

    <header>
        <a href="index.php" class="header-logo">วิทยาลัยพณิชยการบางนา</a>
        <nav>
            <a href="index.php">หน้าหลัก</a>
            <a href="executive.php">คณะผู้บริหาร</a>
            <a href="personnel.php" class="active">บุคลากร</a>
            <a href="student.php">ข้อมูลนักเรียน</a>
            <a href="department.php">หลักสูตร</a>
        </nav>
    </header>

    <main class="page-container">
        <h2>ข้อมูลบุคลากร</h2>

        <div class="personnel-layout">
            
            <aside class="stats-sidebar">
                <table class="stats-table">
                    <tr><th colspan="2">จำแนกตามเพศ</th></tr>
                    <tr><td>• ชาย</td><td>42</td></tr>
                    <tr><td>• หญิง</td><td>83</td></tr>
                    <tr><td>• ไม่ระบุ</td><td>19</td></tr>
                    <tr style="background: #e2e8f0; font-weight: bold;"><td>รวม</td><td>144</td></tr>
                </table>

                <table class="stats-table">
                    <tr><th colspan="2">จำแนกตามระดับการศึกษา</th></tr>
                    <tr><td>• ปริญญาเอก</td><td>1</td></tr>
                    <tr><td>• ปริญญาโท</td><td>31</td></tr>
                    <tr><td>• ปริญญาตรี</td><td>69</td></tr>
                    <tr><td>• ปวส. / ปวช.</td><td>5</td></tr>
                    <tr><td>• อื่นๆ</td><td>38</td></tr>
                </table>

                <table class="stats-table">
                    <tr><th colspan="2">จำแนกตามแผนกวิชา (ตัวอย่าง)</th></tr>
                    <tr><td>• เทคโนโลยีสารสนเทศ</td><td>5</td></tr>
                    <tr><td>• คอมพิวเตอร์ธุรกิจ</td><td>13</td></tr>
                    <tr><td>• การบัญชี</td><td>13</td></tr>
                    <tr><td>• การตลาด</td><td>9</td></tr>
                    <tr><td>• ภาษาต่างประเทศ</td><td>13</td></tr>
                </table>
            </aside>

            <section class="profile-area">
                
                <div class="profile-group">
                    <div class="profile-group-title">หัวหน้าแผนก</div>
                    <div class="profile-grid">
                        <div class="profile-card">
                            <img src="head1.jpg" alt="รูปบุคลากร"> <h5>นายพรชัย ตุ่นแก้ว</h5>
                            <p>หัวหน้าแผนกวิชา<br>เทคโนโลยีสารสนเทศ</p>
                        </div>
                    </div>
                </div>

                <div class="profile-group">
                    <div class="profile-group-title">ครูประจำ</div>
                    <div class="profile-grid">
                        <div class="profile-card">
                            <img src="teacher1.jpg" alt="รูปบุคลากร">
                            <h5>นางพรจิรา เงินเจริญ</h5>
                            <p>ครูประจำ<br>แผนกวิชาเทคโนโลยีสารสนเทศ</p>
                        </div>
                        <div class="profile-card">
                            <img src="teacher2.jpg" alt="รูปบุคลากร">
                            <h5>นายอดิศร กล่องทอง</h5>
                            <p>ครูประจำ<br>แผนกวิชาเทคโนโลยีสารสนเทศ</p>
                        </div>
                        <div class="profile-card">
                            <img src="teacher3.jpg" alt="รูปบุคลากร">
                            <h5>นายเจิมวุฒิ แจ่มดวง</h5>
                            <p>ครูประจำ<br>แผนกวิชาเทคโนโลยีสารสนเทศ</p>
                        </div>
                    </div>
                </div>

                <div class="profile-group">
                    <div class="profile-group-title">ครูผู้ช่วย</div>
                    <div class="profile-grid">
                        <div class="profile-card">
                            <img src="teacher4.jpg" alt="รูปบุคลากร">
                            <h5>นายอภินัทธ์ ไรมันซา</h5>
                            <p>ครูผู้ช่วย<br>แผนกวิชาเทคโนโลยีสารสนเทศ</p>
                        </div>
                    </div>
                </div>

            </section>

        </div>
    </main>

    <footer>
        <p>&copy; 2026 ระบบสารสนเทศสถานศึกษา | พัฒนาโดย: <span>กิตติคุณ หนูแก้ว</span></p>
    </footer>

</body>
</html>