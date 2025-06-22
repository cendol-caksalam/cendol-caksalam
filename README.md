<p align="center">
    <img src="public/img/logo_cendol.png" width="250" alt="logo">
</p>
<h1 align ="center">Website Cendol Cak Salam</h1>

<div align="center">

[![Contributors][contributors-shield]][contributors-url]
[![MIT License][license-shield]][license-url]

</div>

## Built with

![Laravel](https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=ffffff)
![TailwindCSS](https://img.shields.io/badge/TailwindCSS-06B6D4?style=for-the-badge&logo=tailwind-css&logoColor=ffffff)
![Alpine.js](https://img.shields.io/badge/Alpine.js-8BC0D0?style=for-the-badge&logo=alpine.js&logoColor=white)
![Hotwire Turbo](https://img.shields.io/badge/Hotwire_Turbo-F59E0B?style=for-the-badge&logo=hotwired&logoColor=white)

## Contributors

<table>
  <tr>
    <td align="center">
        <img src="https://avatars.githubusercontent.com/u/113989972?s=100&v=4" width="100px" height="100px"/>
        <br>
        <a href="https://github.com/Alfarobby27">
            <bold>Alfarobby27</bold>
        </a>
    </td>
    <td align="center">
        <img src="https://avatars.githubusercontent.com/u/126972118?s=100&v=4" width="100px" height="100px">
        <br>
        <a href="https://github.com/dellwatch21">
            <bold>Abdur Rosyid Fachriansyah</bold>
        </a>
    </td>
   </tr> 
  </tr>
</table>

[contributors-shield]: https://img.shields.io/github/contributors/cendol-caksalam/cendol-caksalam-versi1.svg?style=for-the-badge
[contributors-url]: https://github.com/cendol-caksalam/cendol-caksalam-versi1/graphs/contributors
[license-shield]: https://img.shields.io/github/license/cendol-caksalam/cendol-caksalam-versi1.svg?style=for-the-badge
[license-url]: https://github.com/cendol-caksalam/cendol-caksalam-versi1/blob/main/LICENSE

---

## 📥 Langkah-langkah untuk kontribusi

#### 1. Clone Repository

```bash
git clone https://github.com/cendol-caksalam/cendol-caksalam.git
cd cendol-caksalam
```

#### 2. Install Dependency Laravel

```bash
composer install
```

#### 3. Salin File .env & Generate App Key

```bash
cp .env.example .env
php artisan key:generate
```

#### 4. Migrate struktur table ke database

```bash
php artisan migrate:fresh --seed
```

#### 5. Konfigurasi .env File

```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=cendol_caksalam
DB_USERNAME=root
DB_PASSWORD=
```

#### 6. Install Dependency Frontend (Tailwind, Alpine)

```bash
npm install
```

### 7. Jalankan Dev Server TailwindCSS

```bash
npm run dev
```

### 8. Jalankan Laravel Server

```bash
php artisan serve
```

### 9. Akses website di browser:

```bash
http://localhost:8000
```
