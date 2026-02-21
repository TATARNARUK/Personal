<?php
// ระบบ Routing แบบ Single Page ส่งค่าผ่าน URL (?p=ชื่อหน้า)
$page = isset($_GET['p']) ? $_GET['p'] : 'home';
?>
<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ระบบสารสนเทศ วิทยาลัยพณิชยการบางนา</title>

    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300;400;500;600&display=swap" rel="stylesheet">

    <style>
        /* ================= Core CSS (Colorful & Creative) ================= */
        :root {
            --primary-dark: #1e3a8a;
            --pink-bright: #ff4b82;
            --blue-bright: #00c6ff;
            --bg-color: #f0fdf4;
            --white: #ffffff;
            --gray-text: #475569;
        }

        body {
            font-family: 'Prompt', sans-serif;
            /* สร้างพื้นหลังแบบ Mesh Gradient สีประจำวิทยาลัย (ชมพู-ฟ้า) */
            background-color: #f4f8fb;
            background-image:
                radial-gradient(at 0% 0%, rgba(255, 75, 130, 0.15) 0px, transparent 50%),
                radial-gradient(at 100% 0%, rgba(0, 198, 255, 0.2) 0px, transparent 50%),
                radial-gradient(at 100% 100%, rgba(255, 75, 130, 0.15) 0px, transparent 50%),
                radial-gradient(at 0% 100%, rgba(0, 198, 255, 0.2) 0px, transparent 50%);
            background-attachment: fixed;
            /* ล็อกพื้นหลังให้อยู่กับที่เวลาเลื่อนจอ */
            margin: 0;
            color: var(--gray-text);
            line-height: 1.6;
        }

        .container {
            max-width: 1050px;
            margin: 40px auto;
            background: var(--white);
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            border: 2px solid #fff;
        }

        header {
            background: linear-gradient(135deg, var(--pink-bright), #6b52ff);
            color: var(--white);
            text-align: center;
            padding: 40px 20px;
        }

        header h1 {
            margin: 0;
            font-size: 32px;
            font-weight: 600;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
        }

        header p {
            margin: 10px 0 0;
            font-weight: 400;
            font-size: 16px;
            opacity: 0.9;
        }

        nav {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            background-color: var(--white);
            padding: 15px 20px;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05);
        }

        nav a {
            color: var(--primary-dark);
            padding: 10px 22px;
            margin: 5px;
            text-decoration: none;
            font-weight: 500;
            border-radius: 30px;
            transition: all 0.3s ease;
        }

        nav a:hover,
        nav a.active {
            background-color: var(--pink-bright);
            color: var(--white);
            box-shadow: 0 4px 15px rgba(255, 75, 130, 0.4);
            transform: translateY(-2px);
        }

        .content {
            padding: 40px 50px;
            min-height: 400px;
            animation: fadeIn 0.6s ease;
        }

        .content h2 {
            color: var(--primary-dark);
            text-align: center;
            margin-bottom: 30px;
            position: relative;
            display: inline-block;
            left: 50%;
            transform: translateX(-50%);
        }

        .content h2::after {
            content: '';
            position: absolute;
            width: 50%;
            height: 4px;
            background: linear-gradient(90deg, var(--pink-bright), var(--blue-bright));
            bottom: -8px;
            left: 25%;
            border-radius: 2px;
        }

        img {
            max-width: 100%;
            height: auto;
            border-radius: 12px;
        }

        .center-img {
            display: block;
            margin: 0 auto 25px auto;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
            border: 4px solid white;
        }

        .exec-top {
            display: flex;
            justify-content: center;
            margin-bottom: 35px;
        }

        .exec-row {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 25px;
        }

        .exec-card {
            width: 180px;
            text-align: center;
            background: var(--white);
            padding: 15px;
            border-radius: 16px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.06);
            transition: all 0.3s;
            border-bottom: 4px solid var(--blue-bright);
        }

        .exec-card:hover {
            transform: translateY(-8px);
            border-bottom: 4px solid var(--pink-bright);
            box-shadow: 0 12px 25px rgba(255, 75, 130, 0.2);
        }

        .exec-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 10px;
            margin-bottom: 15px;
        }

        .exec-card h4 {
            margin: 0 0 5px;
            color: var(--primary-dark);
            font-weight: 600;
            font-size: 15px;
        }

        .exec-card p {
            margin: 0;
            font-size: 13px;
            color: var(--gray-text);
            line-height: 1.4;
        }

        .table-responsive {
            overflow-x: auto;
            margin-top: 20px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
        }

        table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0;
            min-width: 700px;
        }

        th,
        td {
            padding: 12px 15px;
            text-align: left;
            font-size: 14px;
        }

        th {
            background: linear-gradient(90deg, #1e3a8a, #3b82f6);
            color: white;
            font-weight: 500;
            font-size: 15px;
            white-space: nowrap;
        }

        tr:nth-child(even) td {
            background-color: #f8fafc;
        }

        tr:hover td {
            background-color: #eff6ff;
        }

        td {
            border-bottom: 1px solid #e2e8f0;
        }

        .text-center {
            text-align: center;
        }

        .text-right {
            text-align: right;
        }

        .group-header td {
            background-color: #e2e8f0 !important;
            font-weight: 600;
            color: var(--primary-dark);
            font-size: 15px;
        }

        .badge {
            display: inline-block;
            padding: 4px 10px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 500;
            color: white;
        }

        .badge-teacher {
            background: linear-gradient(135deg, #10b981, #059669);
        }

        .badge-staff {
            background: linear-gradient(135deg, #8b5cf6, #6d28d9);
        }

        /* ตกแต่งกล่องหลักสูตร */
        .course-box {
            background: var(--white);
            padding: 25px;
            border-radius: 16px;
            margin-bottom: 25px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.04);
        }

        .course-box h3 {
            margin-top: 0;
            font-size: 20px;
            border-bottom: 2px dashed var(--border);
            padding-bottom: 10px;
        }

        .course-flex {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            margin-top: 15px;
        }

        .course-col {
            flex: 1;
            min-width: 280px;
        }

        .course-col h4 {
            margin: 0 0 10px 0;
            font-size: 16px;
        }

        .course-col ul {
            padding-left: 20px;
            margin: 0;
            font-size: 14px;
        }

        .course-col li {
            margin-bottom: 5px;
        }

        footer {
            background: linear-gradient(135deg, #1e293b, #0f172a);
            color: #cbd5e1;
            text-align: center;
            padding: 30px 20px;
            font-size: 14px;
        }

        footer p {
            margin: 5px 0;
        }

        footer span {
            color: var(--pink-bright);
            font-weight: bold;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(15px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @media (max-width: 768px) {
            .content {
                padding: 30px 20px;
            }

            .exec-card {
                width: 150px;
            }
        }
    </style>
</head>

<body>

    <div class="container">

        <header>
            <h1>วิทยาลัยพณิชยการบางนา</h1>
            <p>มุ่งมั่นพัฒนาวิชาชีพ สู่ความเป็นเลิศ</p>
        </header>

        <nav>
            <a href="?p=home" <?= $page == 'home' ? 'class="active"' : '' ?>>หน้าหลัก</a>
            <a href="?p=executive" <?= $page == 'executive' ? 'class="active"' : '' ?>>ข้อมูลผู้บริหาร</a>
            <a href="?p=personnel" <?= $page == 'personnel' ? 'class="active"' : '' ?>>ข้อมูลบุคลากร</a>
            <a href="?p=student" <?= $page == 'student' ? 'class="active"' : '' ?>>ข้อมูลนักเรียนนักศึกษา</a>
            <a href="?p=department" <?= $page == 'department' ? 'class="active"' : '' ?>>สาขาวิชาที่เปิดสอน</a>
        </nav>

        <div class="content">
            <?php
            switch ($page) {
                case 'home':
                    echo "<h2>ยินดีต้อนรับสู่เว็บไซต์สถานศึกษา</h2>";
                    echo "<img src='school.jpg' alt='ภาพวิทยาลัย' class='center-img' style='max-height: 350px; object-fit: cover;'>";
                    echo "<p style='text-align: center; font-size: 16px; color: var(--primary-dark);'>ปัจจุบันจัดการเรียนการสอน 3 ระดับ คือ ระดับประกาศนียบัตรวิชาชีพ (ปวช.) ระดับประกาศนียบัตรวิชาชีพชั้นสูง (ปวส.) และระดับปริญญาตรีหลักสูตรเทคโนโลยีบัณฑิต</p>";
                    break;

                case 'executive':
                    echo "<h2>คณะผู้บริหารสถานศึกษา</h2>";
                    echo "<div class='exec-top'>
                        <div class='exec-card'>
                            <img src='dir.jpg' alt='ผู้อำนวยการ'>
                            <h4>นางสาวรุ่งนภา ปุณยานุเดช</h4>
                            <p>ผู้อำนวยการ</p>
                        </div>
                      </div>";
                    echo "<div class='exec-row'>
                        <div class='exec-card'>
                            <img src='dep1.jpg' alt='รองผู้อำนวยการ'>
                            <h4>นางสาวรัตติยา วานิชกลาง</h4>
                            <p>รองผู้อำนวยการ<br>ฝ่ายบริหารทรัพยากร</p>
                        </div>
                        <div class='exec-card'>
                            <img src='dep2.jpg' alt='รองผู้อำนวยการ'>
                            <h4>นางสาวสุจิตรา เกิดผล</h4>
                            <p>รองผู้อำนวยการ<br>ฝ่ายแผนงานและความร่วมมือ</p>
                        </div>
                        <div class='exec-card'>
                            <img src='dep3.jpg' alt='รองผู้อำนวยการ'>
                            <h4>นางสาวเอมอร อุปชีวะ</h4>
                            <p>รองผู้อำนวยการ<br>ฝ่ายพัฒนากิจการนักเรียนนักศึกษา</p>
                        </div>
                        <div class='exec-card'>
                            <img src='dep4.jpg' alt='รองผู้อำนวยการ'>
                            <h4>นางสาวอุรชา สารสรรค์</h4>
                            <p>รองผู้อำนวยการ<br>ฝ่ายวิชาการ</p>
                        </div>
                      </div>";
                    break;

                case 'personnel':
                    echo "<h2>ข้อมูลบุคลากร</h2>";
                    echo "<p style='text-align:center; color: var(--pink-bright); margin-bottom: 20px;'>* ข้อมูลบางส่วนจากทำเนียบบุคลากร วิทยาลัยพณิชยการบางนา</p>";
                    echo "<div class='table-responsive'>
                        <table>
                            <tr>
                                <th>ลำดับ</th>
                                <th>ชื่อ - นามสกุล</th>
                                <th>ตำแหน่งหน้าที่</th>
                                <th>หน่วยงาน / แผนกวิชา</th>
                                <th class='text-center'>ประเภทบุคลากร</th>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td style='color: var(--primary-dark); font-weight: 600;'>นายสมคิด มิตรอารีย์</td>
                                <td>ครูชำนาญการ</td>
                                <td>หัวหน้าแผนกวิชาสามัญสัมพันธ์</td>
                                <td class='text-center'><span class='badge badge-teacher'>ครูผู้สอน</span></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td style='color: var(--primary-dark); font-weight: 600;'>นางสาวสายฝน อินอ่วม</td>
                                <td>ครูชำนาญการ</td>
                                <td>หัวหน้าแผนกวิชาการจัดการโลจิสติกส์</td>
                                <td class='text-center'><span class='badge badge-teacher'>ครูผู้สอน</span></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td style='color: var(--primary-dark); font-weight: 600;'>นายสมโชค ราชบุรี</td>
                                <td>ครู</td>
                                <td>หัวหน้าแผนกวิชาการบัญชี</td>
                                <td class='text-center'><span class='badge badge-teacher'>ครูผู้สอน</span></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td style='color: var(--primary-dark); font-weight: 600;'>นายพรชัย ตุ่นแก้ว</td>
                                <td>ครูชำนาญการ</td>
                                <td>หัวหน้าแผนกวิชาเทคโนโลยีสารสนเทศ</td>
                                <td class='text-center'><span class='badge badge-teacher'>ครูผู้สอน</span></td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td style='color: var(--primary-dark); font-weight: 600;'>นางปุณณสิริ เทียนชัยสุธารัตน์</td>
                                <td>ครู</td>
                                <td>หัวหน้าแผนกวิชาการจัดการธุรกิจค้าปลีก</td>
                                <td class='text-center'><span class='badge badge-teacher'>ครูผู้สอน</span></td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td style='color: var(--primary-dark); font-weight: 600;'>นางสาวรัตนา บุญชู</td>
                                <td>เจ้าหน้าที่</td>
                                <td>งานบุคลากร</td>
                                <td class='text-center'><span class='badge badge-staff'>เจ้าหน้าที่</span></td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td style='color: var(--primary-dark); font-weight: 600;'>นางสาวปุณยตา ปานแก้ว</td>
                                <td>เจ้าหน้าที่</td>
                                <td>งานอาชีวศึกษาระบบทวิภาคี</td>
                                <td class='text-center'><span class='badge badge-staff'>เจ้าหน้าที่</span></td>
                            </tr>
                        </table>
                      </div>";
                    break;

                case 'student':
                    echo "<h2>ข้อมูลนักเรียน นักศึกษา</h2>";
                    echo "<p style='text-align:center; color: var(--pink-bright); margin-bottom: 20px;'>* สรุปยอดนักเรียน นักศึกษา จำแนกตามระดับชั้นและสาขาวิชา</p>";
                    echo "<div class='table-responsive'>
                        <table>
                            <tr>
                                <th class='text-center'>ระดับชั้น</th>
                                <th>สาขาวิชา</th>
                                <th class='text-right'>ชาย (คน)</th>
                                <th class='text-right'>หญิง (คน)</th>
                                <th class='text-right'>รวม (คน)</th>
                            </tr>
                            
                            <tr class='group-header'><td colspan='5'>ระดับชั้น ปวช. 1</td></tr>
                            <tr><td class='text-center'>ปวช.1</td><td>การจัดการสำนักงานดิจิทัล</td><td class='text-right'>4</td><td class='text-right'>11</td><td class='text-right'>15</td></tr>
                            <tr><td class='text-center'>ปวช.1</td><td>การตลาด</td><td class='text-right'>29</td><td class='text-right'>62</td><td class='text-right'>91</td></tr>
                            <tr><td class='text-center'>ปวช.1</td><td>การบัญชี</td><td class='text-right'>12</td><td class='text-right'>63</td><td class='text-right'>75</td></tr>
                            <tr><td class='text-center'>ปวช.1</td><td>เทคโนโลยีธุรกิจดิจิทัล</td><td class='text-right'>60</td><td class='text-right'>33</td><td class='text-right'>93</td></tr>
                            <tr><td class='text-center'>ปวช.1</td><td>โลจิสติกส์</td><td class='text-right'>41</td><td class='text-right'>65</td><td class='text-right'>106</td></tr>
                            
                            <tr class='group-header'><td colspan='5'>ระดับชั้น ปวช. 2</td></tr>
                            <tr><td class='text-center'>ปวช.2</td><td>การตลาด</td><td class='text-right'>19</td><td class='text-right'>73</td><td class='text-right'>92</td></tr>
                            <tr><td class='text-center'>ปวช.2</td><td>การบัญชี</td><td class='text-right'>5</td><td class='text-right'>70</td><td class='text-right'>75</td></tr>
                            <tr><td class='text-center'>ปวช.2</td><td>เทคโนโลยีธุรกิจดิจิทัล</td><td class='text-right'>67</td><td class='text-right'>44</td><td class='text-right'>111</td></tr>
                            <tr><td class='text-center'>ปวช.2</td><td>โลจิสติกส์</td><td class='text-right'>20</td><td class='text-right'>50</td><td class='text-right'>70</td></tr>

                            <tr class='group-header'><td colspan='5'>ระดับชั้น ปวส. 1</td></tr>
                            <tr><td class='text-center'>ปวส.1</td><td>การจัดการโลจิสติกส์และซัพพลายเชน</td><td class='text-right'>15</td><td class='text-right'>22</td><td class='text-right'>37</td></tr>
                            <tr><td class='text-center'>ปวส.1</td><td>การตลาด</td><td class='text-right'>12</td><td class='text-right'>36</td><td class='text-right'>48</td></tr>
                            <tr><td class='text-center'>ปวส.1</td><td>เทคโนโลยีธุรกิจดิจิทัล</td><td class='text-right'>35</td><td class='text-right'>12</td><td class='text-right'>47</td></tr>
                        </table>
                      </div>";
                    break;

                case 'department':
                    // หน้าหลักสูตรและสาขาวิชา (อัปเดตข้อมูลใหม่ทั้งหมด)
                    echo "<h2>หลักสูตรและสาขาวิชาที่เปิดสอน</h2>";
                    echo "<p style='text-align: center; color: var(--gray-text); margin-bottom: 25px;'>วิทยาลัยพณิชยการบางนา เปิดสอน 3 ระดับ ทั้งในระบบและระบบทวิภาคี</p>";

                    // ปวช.
                    echo "<div class='course-box' style='border-left: 5px solid var(--pink-bright);'>";
                    echo "<h3 style='color: var(--primary-dark);'>📘 ระดับประกาศนียบัตรวิชาชีพ (ปวช.)</h3>";
                    echo "<div class='course-flex'>";
                    echo "<div class='course-col'>";
                    echo "<h4 style='color: var(--pink-bright);'>▶ ระบบปกติ (ในระบบ)</h4>";
                    echo "<ul>
                        <li><b>ประเภทวิชาพณิชยกรรม:</b> การบัญชี, การบัญชี (MEP), การตลาด, การจัดการสำนักงาน, คอมพิวเตอร์ธุรกิจ, ภาษาต่างประเทศ (อังกฤษ/จีน), การจัดการโลจิสติกส์</li>
                        <li><b>ประเภทวิชาอุตสาหกรรมการท่องเที่ยว:</b> การโรงแรม (MEP), การท่องเที่ยว</li>
                        <li><b>ประเภทวิชาเทคโนโลยีสารสนเทศ:</b> เทคโนโลยีสารสนเทศ</li>
                      </ul>";
                    echo "</div>";
                    echo "<div class='course-col'>";
                    echo "<h4 style='color: var(--pink-bright);'>▶ ระบบทวิภาคี</h4>";
                    echo "<ul>
                        <li><b>สาขาวิชาธุรกิจค้าปลีก:</b> ธุรกิจค้าปลีกสมัยใหม่, ธุรกิจอาหารและบริการ</li>
                        <li><b>สาขาวิชาการโรงแรมและบริการ</b></li>
                      </ul>";
                    echo "</div>";
                    echo "</div></div>";

                    // ปวส.
                    echo "<div class='course-box' style='border-left: 5px solid var(--blue-bright);'>";
                    echo "<h3 style='color: var(--primary-dark);'>📙 ระดับประกาศนียบัตรวิชาชีพชั้นสูง (ปวส.)</h3>";
                    echo "<div class='course-flex'>";
                    echo "<div class='course-col'>";
                    echo "<h4 style='color: var(--blue-bright);'>▶ ระบบปกติ (ในระบบ)</h4>";
                    echo "<ul>
                        <li><b>ประเภทวิชาบริหารธุรกิจ:</b> การบัญชี, การตลาด, เทคโนโลยีธุรกิจดิจิทัล (ธุรกิจอีคอมเมิร์ช), การจัดการโลจิสติกส์และซัพพลายเชน (การจัดการคลังสินค้า)</li>
                        <li><b>ประเภทวิชาเทคโนโลยีสารสนเทศฯ:</b> เทคโนโลยีสารสนเทศ (นักบริหารจัดการระบบเครือข่ายและความปลอดภัย)</li>
                      </ul>";
                    echo "</div>";
                    echo "<div class='course-col'>";
                    echo "<h4 style='color: var(--blue-bright);'>▶ ระบบทวิภาคี</h4>";
                    echo "<ul>
                        <li><b>ประเภทวิชาบริหารธุรกิจ:</b> การบัญชี, การตลาด, เทคโนโลยีธุรกิจดิจิทัล, การจัดการ, การจัดการโลจิสติกส์และซัพพลายเชน, การจัดการธุรกิจค้าปลีก</li>
                        <li><b>ประเภทวิชาอุตสาหกรรมท่องเที่ยว:</b> การโรงแรม, การจัดประชุมและนิทรรศการ</li>
                      </ul>";
                    echo "</div>";
                    echo "</div></div>";

                    // ปริญญาตรี
                    echo "<div class='course-box' style='border-left: 5px solid #6b52ff; margin-bottom: 0;'>";
                    echo "<h3 style='color: var(--primary-dark);'>🎓 ระดับปริญญาตรี (หลักสูตรเทคโนโลยีบัณฑิต)</h3>";
                    echo "<h4 style='color: #6b52ff;'>▶ ระบบทวิภาคี</h4>";
                    echo "<ul style='display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 10px; margin-top: 10px;'>
                        <li>- สาขาวิชาเทคโนโลยีธุรกิจดิจิทัล</li>
                        <li>- สาขาวิชาการโรงแรม</li>
                        <li>- สาขาวิชาการจัดการโลจิสติกส์</li>
                        <li>- สาขาวิชาการบัญชี</li>
                      </ul>";
                    echo "</div>";
                    break;
            }
            ?>
        </div>

        <footer>
            <p>วิทยาลัยพณิชยการบางนา เลขที่ 22 ซอย บางนา-ตราด 1 ถนนเทพรัตน แขวงบางนา เขตบางนา กรุงเทพมหานคร 10260</p>
            <p>&copy; 2026 ระบบสารสนเทศสถานศึกษา | ออกแบบและพัฒนาเว็บไซต์โดย: <span>กิตติคุณ หนูแก้ว</span> (เทคโนโลยีสารสนเทศ)</p>
        </footer>

    </div>

</body>

</html>