<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rent Car | @yield('title') </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{asset('style.css')}}">
</head>
<body dir="rtl">
    <header>
        <div class="links">
            <i class="fa-solid fa-bars bars"></i>
            <div class="holder">
                <i class="fa-solid fa-x"></i>
                <ul>
                    <a href="/#login">
                        <li>
                            <i class="fa-solid fa-lock"></i>
                            <span>تسجيل دخول</span>
                        </li>
                    </a>
                    <a href="/" class="active">
                        <li>
                            <i class="fa-solid fa-house"></i>
                            <span>الصفحة الرئيسية</span>
                        </li>
                    </a>
                    <a href="/book">
                        <li>
                            <i class="fa-solid fa-calendar-days"></i>
                            <span>إحجز السيارة</span>
                        </li>
                    </a>
                    <a href="/car-selling">
                        <li>
                            <i class="fa-solid fa-car-on"></i>
                            <span>مبيعات السيارة</span>
                        </li>
                    </a>
                    <a href="/fleet">
                        <li>
                            <i class="fa-solid fa-car-side"></i>
                            <span>أسطول المفتاح</span>
                        </li>
                    </a>
                    <a href="/location">
                        <li>
                            <i class="fa-solid fa-location-dot"></i>
                            <span>مواقع الفروع</span>
                        </li>
                    </a>
                    <a href="/loyalty">
                        <li>
                            <i class="fa-solid fa-gift"></i>
                            <span>برنامج الولاء و المكافآت المفاتيح</span>
                        </li>
                    </a>
                    <a href="/services">
                        <li>
                            <i class="fa-solid fa-handshake"></i>
                            <span>الخدمات</span>
                        </li>
                    </a>
                    <a href="/offers">
                        <li>
                            <i class="fa-solid fa-gifts"></i>
                            <span>العروض</span>
                        </li>
                    </a>
                    <a href="/careers">
                        <li>
                            <i class="fa-solid fa-briefcase"></i>
                            <span>وظائف</span>
                        </li>
                    </a>
                    <a href="/about-us">
                        <li>
                            <i class="fa-solid fa-user"></i>
                            <span>معلومات عنا</span>
                        </li>
                    </a>
                    <a href="/contact">
                        <li>
                            <i class="fa-solid fa-phone"></i>
                            <span>اتصل بنا</span>
                        </li>
                    </a>
                </ul>
            </div>
        </div>
        <img src="{{asset('imgs/logo.png')}}" alt="Logo" class="logo">
        <div class="btns">
            <a href="#"  style="background: #6F6F6E;">
                <i class="fa-solid fa-gear"></i>
                <span>
                    إدارة الحجوزات
                </span>
            </a>
            <a href="#"  style="background: #FE7E00;">
                <i class="fa-solid fa-user-plus"></i>
                <span>
                    تسجيل دخول المستخدم
                </span>
            </a>
            <a href="#" class="lang">
                <i class="fa-solid fa-globe"></i>
                <span>
                    ENGLISH
                </span>
            </a>
        </div>
    </header>
    @yield('content')
    <footer>
        <p>
            حقوق الملكية 2024. جميع الحقوق محفوظة.
        </p>
        <img src="imgs/footer-logos.png" alt="Payment Methods">
    </footer>
    <script>
        const openBtn = document.querySelector('header .bars');
        const holder = document.querySelector('header .holder');
        const closeBtn = document.querySelector('header .holder .fa-x');

        openBtn.addEventListener('click',() => {
            holder.classList.add('show');
        });
        closeBtn.addEventListener('click',() => {
            holder.classList.remove('show');
        });
    </script>
</body>
</html>