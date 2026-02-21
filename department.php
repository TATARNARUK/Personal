<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>หลักสูตรการเรียนการสอน - วิทยาลัยพณิชยการบางนา</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300;400;500;600&display=swap" rel="stylesheet">
    
    <style>
        /* ================= Master CSS (Premium Navy & Gold) ================= */
        :root {
            --primary-blue: #0A2540;   
            --primary-yellow: #ffffff; /* ปรับกลับเป็นสีเหลืองทองเพื่อให้เข้ากับธีม Navy & Gold */
            --white: #ffffff;
            --text-dark: #333333;
            --bg-light: #f8fafc;       
        }

        body { font-family: 'Prompt', sans-serif; margin: 0; padding: 0; background-color: var(--bg-light); color: var(--text-dark); }

        header { background-color: var(--primary-blue); padding: 15px 30px; display: flex; justify-content: space-between; align-items: center; box-shadow: 0 4px 12px rgba(0,0,0,0.15); position: relative; z-index: 10; }
        .header-logo { color: var(--primary-yellow); font-size: 24px; font-weight: 600; text-decoration: none; letter-spacing: 0.5px; }
        
        nav { display: flex; gap: 20px; }
        nav a { color: var(--white); text-decoration: none; font-weight: 500; font-size: 16px; padding: 8px 16px; border-radius: 8px; transition: all 0.3s ease; }
        nav a:hover, nav a.active { color: var(--primary-blue); background-color: var(--primary-yellow); box-shadow: 0 2px 10px rgba(246, 177, 51, 0.3); }

        .page-container { max-width: 1100px; margin: 40px auto; padding: 40px; background-color: var(--white); border-radius: 16px; box-shadow: 0 10px 30px rgba(0,0,0,0.08); animation: fadeIn 0.6s ease; }
        h2 { color: var(--primary-blue); border-bottom: 3px solid var(--primary-yellow); display: inline-block; padding-bottom: 10px; margin-bottom: 30px; }

        /* กล่องหลักสูตร */
        .course-box { background: #fff; padding: 25px; border-radius: 16px; margin-bottom: 30px; border-left: 6px solid var(--primary-blue); box-shadow: 0 4px 15px rgba(0,0,0,0.05); }
        .course-box h3 { color: var(--primary-blue); margin-top: 0; font-size: 22px; border-bottom: 1px solid #eee; padding-bottom: 15px; margin-bottom: 20px; }
        
        .system-title { background: #f1f5f9; padding: 8px 15px; border-radius: 8px; display: inline-block; font-weight: 600; color: #1e40af; margin-bottom: 15px; font-size: 15px; }
        
        .course-flex { display: flex; flex-wrap: wrap; gap: 30px; } 
        .course-col { flex: 1; min-width: 300px; }
        .type-title { color: var(--primary-blue); font-weight: 600; margin-bottom: 10px; display: block; border-left: 3px solid var(--primary-yellow); padding-left: 10px; }
        
        ul { list-style: none; padding-left: 15px; margin: 0 0 20px 0; }
        li { margin-bottom: 6px; font-size: 14.5px; position: relative; padding-left: 15px; }
        li::before { content: "•"; color: var(--primary-yellow); position: absolute; left: 0; font-weight: bold; }
        
        .dual-info { background: #fffbeb; border: 1px solid #fde68a; padding: 20px; border-radius: 12px; margin-top: 20px; }
        .dual-info b { color: #92400e; }

        footer { background-color: var(--primary-blue); color: rgba(255,255,255,0.7); text-align: center; padding: 25px; font-size: 14px; margin-top: auto; }
        footer span { color: var(--primary-yellow); font-weight: 600; }

        @keyframes fadeIn { from { opacity: 0; transform: translateY(15px); } to { opacity: 1; transform: translateY(0); } }
    </style>
</head>
<body>
    <header>
        <a href="index.php" class="header-logo">วิทยาลัยพณิชยการบางนา</a>
        <nav>
            <a href="index.php">หน้าหลัก</a>
            <a href="executive.php">คณะผู้บริหาร</a>
            <a href="personnel.php">บุคลากร</a>
            <a href="student.php">ข้อมูลนักเรียน</a>
            <a href="department.php" class="active">หลักสูตร</a>
        </nav>
    </header>

    <main class="page-container">
        <h2>หลักสูตรการเรียนการสอน</h2>
        <p>วิทยาลัยพณิชยการบางนา สังกัดสำนักงานคณะกรรมการการอาชีวศึกษา เปิดสอนครอบคลุม 3 ระดับการศึกษา</p>

        <div class="course-box">
            <h3>🏫 ระบบปกติ (ในระบบ)</h3>
            
            <div class="system-title">ระดับประกาศนียบัตรวิชาชีพ (ปวช.)</div>
            <div class="course-flex">
                <div class="course-col">
                    <span class="type-title">ประเภทวิชาพณิชยกรรม</span>
                    <ul>
                        <li>สาขาวิชาการบัญชี (ปกติ / MEP)</li>
                        <li>สาขาวิชาการตลาด</li>
                        <li>สาขาวิชาการจัดการสำนักงาน</li>
                        <li>สาขาวิชาคอมพิวเตอร์ธุรกิจ</li>
                        <li>สาขาวิชาภาษาต่างประเทศ (อังกฤษ / จีน)</li>
                        <li>สาขาวิชาการจัดการโลจิสติกส์</li>
                    </ul>
                </div>
                <div class="course-col">
                    <span class="type-title">ประเภทวิชาอุตสาหกรรมการท่องเที่ยว</span>
                    <ul>
                        <li>สาขาวิชาการโรงแรม (MEP)</li>
                        <li>สาขาวิชาการท่องเที่ยว</li>
                    </ul>
                    <span class="type-title">ประเภทวิชาเทคโนโลยีสารสนเทศ</span>
                    <ul>
                        <li>สาขาวิชาเทคโนโลยีสารสนเทศ</li>
                    </ul>
                </div>
            </div>

            <div class="system-title" style="margin-top: 20px;">ระดับประกาศนียบัตรวิชาชีพชั้นสูง (ปวส.)</div>
            <div class="course-flex">
                <div class="course-col">
                    <span class="type-title">ประเภทวิชาบริหารธุรกิจ</span>
                    <ul>
                        <li>สาขาวิชาการบัญชี / การตลาด</li>
                        <li>สาขาวิชาเทคโนโลยีธุรกิจดิจิทัล (ธุรกิจอีคอมเมิร์ช)</li>
                        <li>สาขาวิชาการจัดการโลจิสติกส์ฯ (การจัดการคลังสินค้า)</li>
                    </ul>
                </div>
                <div class="course-col">
                    <span class="type-title">ประเภทวิชาเทคโนโลยีสารสนเทศและการสื่อสาร</span>
                    <ul>
                        <li>สาขาวิชาเทคโนโลยีสารสนเทศ (นักบริหารจัดการระบบเครือข่าย)</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="course-box" style="border-left-color: var(--primary-yellow);">
            <h3>🤝 ระบบทวิภาคี</h3>
            
            <div class="dual-info">
                <b>ระบบทวิภาคีคืออะไร?</b><br>
                เป็นการจัดการศึกษาโดยความร่วมมือระหว่างสถานประกอบการกับสถานศึกษา เรียนทฤษฎีในวิทยาลัยฯ และฝึกปฏิบัติจริงในสถานประกอบการตลอดหลักสูตร โดยนักศึกษาจะมีสถานะเป็นพนักงานฝึกหัดของสถานประกอบการนั้น
            </div>

            <div class="course-flex" style="margin-top: 25px;">
                <div class="course-col">
                    <span class="system-title">ระดับ ปวช.</span>
                    <ul>
                        <li>สาขาวิชาธุรกิจค้าปลีก (สมัยใหม่ / อาหารและบริการ)</li>
                        <li>สาขาวิชาการโรงแรมและบริการ</li>
                    </ul>
                </div>
                <div class="course-col">
                    <span class="system-title">ระดับ ปวส.</span>
                    <ul>
                        <li>สาขาวิชาการบัญชี / การตลาด / การจัดการ</li>
                        <li>สาขาวิชาเทคโนโลยีธุรกิจดิจิทัล (ธุรกิจดิจิทัล)</li>
                        <li>สาขาวิชาการจัดการโลจิสติกส์ฯ / การจัดการธุรกิจค้าปลีก</li>
                        <li>สาขาวิชาการโรงแรม / การจัดประชุมและนิทรรศการ</li>
                    </ul>
                </div>
            </div>

            <div class="system-title" style="margin-top: 20px;">ระดับปริญญาตรี (หลักสูตรเทคโนโลยีบัณฑิต)</div>
            <ul style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 10px; margin-top: 10px;">
                <li>สาขาวิชาเทคโนโลยีธุรกิจดิจิทัล</li>
                <li>สาขาวิชาการโรงแรม</li>
                <li>สาขาวิชาการจัดการโลจิสติกส์</li>
                <li>สาขาวิชาการบัญชี</li>
            </ul>
        </div>
    </main>

    <footer>
        <p>&copy; 2026 ระบบสารสนเทศสถานศึกษา | พัฒนาโดย: <span>กิตติคุณ หนูแก้ว</span></p>
    </footer>
</body>
</html>