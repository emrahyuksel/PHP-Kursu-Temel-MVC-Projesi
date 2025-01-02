# PHP Kursu: Sıfırdan İleri Seviyeye Web Geliştirme (OOP + MVC) 🚀

PHP dünyasında uzmanlaşmak mı istiyorsunuz? İşte size harika bir fırsat! 🌟

Bu kurs, **PHP’nin temellerinden** başlayarak, **Nesne Yönelimli Programlama (OOP)** ve **MVC yapısına** kadar tüm modern geliştirme tekniklerini kapsıyor. Üstelik, eğitim boyunca uygulamalı projelerle öğrendiklerinizi pekiştireceksiniz.

## 🎯 Kurs İçeriği:

- PHP’nin Temelleri: **Sıfırdan başlamak isteyenler için ideal.**
- Nesne Yönelimli Programlama (OOP): **Kodunuzu daha modüler ve sürdürülebilir hale getirin.**
- MVC Yapısı: **Kendi web uygulamanız için temel oluşturun.**
- Uygulamalı Projeler: **Gerçek hayattan örneklerle öğrenin.**

## 📘 Bonus: Ücretsiz 250 Sayfalık PHP Dokümantasyon Kitabı!

Kursumuza kayıt olan tüm öğrenciler, **detaylı dokümanlar ve kurs boyunca kullanılan örnek kodları** içeren özel bir **250 sayfalık PHP kitabına ücretsiz** sahip olacak!

📌 **İndirimli kayıt kodlarını** görmek ve kursa erişim sağlamak için [emrahyuksel.com.tr](https://emrahyuksel.com.tr) adresini ziyaret edin. 

🔗 **Kursa kaydolmak için buraya tıklayın**:  
[PHP Kursu: Sıfırdan İleri Seviyeye Web Geliştirme (OOP + MVC)](https://www.udemy.com/course/sifirdan-ileri-seviye-web-programlama-html-php-pdo-mysql/?referralCode=57C2FC2F2B3FA58ED9BB)

🎓 Yazılım kariyerinize sağlam bir başlangıç yapmak için daha fazla beklemeyin! 

# KURULUM

# PHP Kursu: Temel MVC Projesi

Bu proje, **PHP Kursu** kapsamında geliştirilmiş bir **Temel MVC Yapısı** içermektedir. PHP'de **Model-View-Controller (MVC)** prensiplerini öğrenmek isteyenler için harika bir başlangıç noktasıdır.

---

## 🚀 Proje Özellikleri

- **Model-View-Controller Yapısı**: Kodunuzu daha düzenli ve sürdürülebilir hale getirmek için MVC prensipleri.
- **Composer Kullanımı**: Otomatik sınıf yükleme ve bağımlılık yönetimi.
- **PDO ile Veritabanı Bağlantısı**: Güvenli ve modern bir veri erişim katmanı.
- **Temel CRUD İşlemleri**: Veritabanında kayıt oluşturma, okuma, güncelleme ve silme.

---

## 📁 Dizin Yapısı

Proje dosyalarının düzeni şu şekildedir:

```plaintext
/php.test
├── app
│   ├── Controllers
│   ├── Models
│   ├── Views
├── core
│   ├── App.php
│   ├── Controller.php
│   ├── Model.php
├── public
│   ├── index.php
├── vendor
│   ├── (Composer bağımlılıkları)
├── .env
├── composer.json ```plaintext
```
## 🛠️ Gereksinimler

Bu projeyi çalıştırmak için aşağıdaki yazılımlar gereklidir:

- **PHP** 8.x veya üzeri
- **Composer**
- **MySQL Veritabanı**
- **Apache** veya **Nginx** Sunucusu (Herd gibi bir geliştirme ortamı önerilir)

## ⚙️ Kurulum

Projenizi yerel ortamınızda çalıştırmak için aşağıdaki adımları izleyin:

1. **Depoyu Klonlayın**

```bash
git clone https://github.com/emrahyuksel/PHP-Kursu-Temel-MVC-Projesi.git
cd PHP-Kursu-Temel-MVC-Projesi
```

2.	**Composer Bağımlılıklarını Yükleyin**

Proje dizininde composer install komutunu çalıştırarak gerekli bağımlılıkları yükleyin:

```bash
composer install
```

3.	**Ortam Değişkenlerini Ayarlayın**

Proje kök dizininde config.php dosyasını oluşturun ve aşağıdaki kodları dosyaya yapıştırın. Veritabanı bilgilerinizi güncelleyin:

```bash
<?php
return [
    'db' => [
        'host' => '127.0.0.1', // Veritabanı sunucusu
        'dbname' => 'php_test_db', // Veritabanı adı
        'user' => 'root', // Veritabanı kullanıcı adı
        'password' => '', // Veritabanı şifresi
        'charset' => 'utf8mb4', // Karakter seti
    ],
    'base_url' => 'http://php.test', // Proje ana URL'si
];
```

4.	**Veritabanı Tablosunu Oluşturun:**

Proje ile birlikte gelen SQL dosyasını kullanarak yada aşağıda ki script ile veritabanı tablosunu oluşturabilirsiniz:

```bash
CREATE TABLE tasks (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    description TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```
	
5.	**Sanal Domain Ayarı**

Herd üzerinde php.test sanal domaininin projenizin public klasörünü işaret ettiğinden emin olun.

6.	**Projenizi Çalıştırın**

Tarayıcınızı açarak aşağıdaki URL’yi ziyaret edin:

```bash
http://php.test
```
