# ใช้ PHP + Apache แบบพื้นฐาน
FROM php:8.2-apache

# ก๊อปปี้ไฟล์ทั้งหมดในโฟลเดอร์ Personal (รวมถึงรูปภาพ) ไปไว้ในเซิร์ฟเวอร์
COPY . /var/www/html/

# เปิดพอร์ต 80
EXPOSE 80