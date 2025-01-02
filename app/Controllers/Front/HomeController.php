<?php

namespace App\Controllers\Front;

use App\Core\BaseController;

class HomeController extends BaseController
{
    public function index()
    {
        $content = "Bu proje, PHP ile modern bir MVC yapısı oluşturmayı öğretmek için tasarlandı. MVC (Model-View-Controller) yazılım mimarisi, uygulamanızın iş mantığını, kullanıcı arayüzünü ve veri erişimini birbirinden ayırarak daha düzenli ve sürdürülebilir bir kod yapısı sağlar. Bu eğitimde, MVC yapısının temellerini öğrenecek ve bu yapıyı kullanarak dinamik web uygulamaları geliştireceksiniz.";
        $this->render('front/home', ['title' => 'MVC Eğitimine Hoşgeldiniz', 'content' => $content]);
    }
}
