<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Belajar Laravel

### *Materi 7: Model*

- Bab 1: Membuat Data pada file posts menjadi 1 data sumber dengan menggunakan class yang ditulis pada file web.php atau di bagian routenya. Masalah yang terjadi pada penggunaan metode ini adalah, tidak mungkin menuliskan suatu data pada file routenya, karena hakikatnya pada file route itu digunakan untuk penjaluran dari request bukan malah diisi data. 

- Bab 2: Penggunakan data models seharusnya ditulis pada folder models yang memang digunakan untuk memproses atau mengambil suatu data. Setelah pembuatan class pada models, tidak bisa langsung digunakan akan tetapi harus dibuatkan [namespace](https://en.wikipedia.org/wiki/Namespace) terlebih dahulu agar bisa diguanakan pada Route. 

Bab 3: Selanjutnya adalah metode pencarian pada post mana yang memang ingin dibaca. Metode ini harusnya dibebankan pada models bukan pada route. Dengan ini harusnya metode ini akan dipindahkan ke dalam class post juga, setelah itu dikembalikan datanya ke route. Disini juga menggunakan arrow function yang dimiliki oleh php dimana function ini tidak menggunakan scope

Bab 4: Selanjutnya adalah penggunaan fungsi [abort()](https://laravel.com/docs/11.x/helpers#method-abort) yang bisa digunakan untuk membuat halaman Http exeption. Contohnya disini adalah 404, dimana jika memanggil file selain posts.

### *Materi 8: Migration and Database*

Bab 1: Saat kita ingin menggunakan database dengan struktur yang sama sebelumnya harus memberikannya secara manual, akan tetapi saat menggunakan laravel kita bisa menggunakan file migrasi yang sudah dibuat. Jadi struktur dari databasenya jika kita bekerja dalam tim akan sama dan lebih mudah. 

Bab 2: Cara pembuatan filenya menggunakan perintah [migrate](https://laravel.com/docs/11.x/migrations#introduction) yang sudah tersedia di laravel bukan membuatnya secara manual. BACA DOKUMENTASI atau tonton ulang video jika ada yang belum dipahami.



## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
