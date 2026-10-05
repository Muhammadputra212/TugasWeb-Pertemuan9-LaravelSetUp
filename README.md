# TugasWeb-P9-LaravelSetup

Tugas Rutin 9 — Setup Laravel. Project ini dibangun pakai Laravel sebagai latihan dasar routing, controller, model, migration, dan Blade view.

## Fitur yang Diimplementasikan

- 3 route custom (`/`, `/about`, `/contact`) yang return Blade view lewat controller
- Data dinamis (array) dikirim dari controller ke view dan ditampilkan pakai `@foreach`
- 1 controller (`PageController`) dan 3 model + migration (`Project`, `Skill`, `ContactMessage`)
- Styling pakai Tailwind CSS (CDN)
- Bonus: route dengan parameter dinamis — `/hello/{nama}`

## Tech Stack

- PHP 8.3
- Laravel 11
- MySQL (lewat Laragon)
- Tailwind CSS (CDN)

## Cara Install

1. **Clone repo ini**
   ```bash
   git clone <url-repo-ini>
   cd TugasWeb-P9-LaravelSetup
   ```

2. **Install dependency PHP lewat Composer**
   ```bash
   composer install
   ```

3. **Copy file environment**
   ```bash
   cp .env.example .env
   ```

4. **Generate application key**
   ```bash
   php artisan key:generate
   ```

5. **Buat database baru** (lewat phpMyAdmin/HeidiSQL), misal diberi nama `laravel_p9`

6. **Sesuaikan koneksi database di file `.env`**
   ```
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=laravel_p9
   DB_USERNAME=root
   DB_PASSWORD=
   ```

7. **Jalankan migration** (bikin tabel di database)
   ```bash
   php artisan migrate
   ```

8. **Jalankan development server**
   ```bash
   php artisan serve
   ```

9. Buka browser ke `http://127.0.0.1:8000`

## Struktur Folder Penting

```
TugasWeb-P9-LaravelSetup/
├── app/
│   ├── Http/Controllers/
│   │   └── PageController.php     # Logic untuk route home/about/contact
│   └── Models/
│       ├── Project.php            # Model untuk data project
│       ├── Skill.php              # Model untuk data skill
│       └── ContactMessage.php     # Model untuk pesan dari form kontak
├── database/
│   └── migrations/                # Blueprint struktur tabel database
│       ├── ..._create_projects_table.php
│       ├── ..._create_skills_table.php
│       └── ..._create_contact_messages_table.php
├── resources/
│   └── views/                     # File Blade (.blade.php) untuk tampilan HTML
│       ├── home.blade.php
│       ├── about.blade.php
│       └── contact.blade.php
├── routes/
│   └── web.php                    # Definisi semua route/URL aplikasi
└── .env                           # Konfigurasi environment (database, app key, dll) — TIDAK ikut di-push ke Git
```

**Penjelasan singkat alur kerja Laravel di project ini:**
`routes/web.php` menerima request URL → diarahkan ke method di `PageController` → controller menyiapkan data (array/variable) → data dikirim ke file di `resources/views/` → Blade merender HTML yang ditampilkan ke browser.

## Screenshot

*(Tempel screenshot welcome page default Laravel di sini sebelum di-push, sesuai requirement #3)*

`![Welcome Page](screenshot-welcome.png)`
