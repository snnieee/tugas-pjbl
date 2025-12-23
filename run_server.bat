@echo off
echo Menghentikan server lama jika ada...
taskkill /F /IM php.exe >nul 2>&1

echo.
echo ===================================================
echo   Menjalankan Server Buku Tamu (Versi XAMPP)
echo   Akses di browser: http://localhost:8000
echo ===================================================
echo.

"C:\xampp\php\php.exe" -S localhost:8000
pause