<h1>How To Clone This Project ?</h1>

- Download repo ini dengan cara click tombol hijau diatas : 
  ![image](https://user-images.githubusercontent.com/80162410/148528984-b0d00847-1dd3-40e2-ad6e-ad168e834cc1.png)
- Lalu Extract File tersebut di local folder kalian masing-masing :![image](https://user-images.githubusercontent.com/80162410/148527430-4c28ce72-ac83-4faf-ba0f-d053163f782f.png)
- Setelah itu masuk ke kode editor kalian masing-masing 
- Buatlah database dan sesuaikan dengan file .env yang baru didownload 
  Contoh Buat database : ![image](https://user-images.githubusercontent.com/80162410/148527650-808285ab-76ca-4956-9893-231042447c7c.png)
  Contoh Konfigurasi env : ![image](https://user-images.githubusercontent.com/80162410/148527858-898a63fc-87b7-4d3e-a033-d37a724433b4.png)
- Dan setelah itu jalankan perintah sebagai berikut diterminal / cmd : 
  1. `php artisan migrate`
  2. `php artisan db:seed --class=UserSeeder`
- Setelah itu jalankan `php artisan serve` 
