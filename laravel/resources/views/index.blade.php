@extends('components.layout')
@section('title',"Home")
@section('content')
    <section class="welocme">
     <style>
        swiper-container {
            width: 100%;
            height: 100%;
            position: relative;
        }
        swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        swiper-slide img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
     </style>
        <swiper-container class="mySwiper" navigation="true">
                <swiper-slide>
                    <img src="https://www.key.sa/public/uploads/ab-00-key-mini-delivery-banners-011694838678.png" alt="">
                </swiper-slide>
                <swiper-slide>
                    <img src="https://www.key.sa/public/uploads/ab-SubscriptionBanner-01---AR1707195793.png" alt="">
                </swiper-slide>
                <div class="handeler">    
                    <ul class="steps">
                        <li>
                            <i class="fa-solid fa-car"></i>
                            <span>يومي</span>
                        </li>
                        <li>
                            <i class="fa-solid fa-car"></i>
                            <span>يومي</span>
                        </li>
                        <li>
                            <i class="fa-solid fa-car"></i>
                            <span>يومي</span>
                        </li>
                        <li>
                            <i class="fa-solid fa-car"></i>
                            <span>يومي</span>
                        </li>
                    </ul>
                    <div class="content">
                        <form action="">
                            <div class="inputs">
                                <div class="input">
                                    <label for="reciveLocation">موقع الاستلام</label>
                                    <input type="text" name="reciveLocation" id="reciveLocation" placeholder="ضع اسم الفرع">
                                </div>
                                <div class="input">
                                    <label for="deleiveredLocation">موقع الاستلام</label>
                                    <input type="text" name="deleiveredLocation" id="deleiveredLocation" placeholder="ضع اسم الفرع">
                                </div>
                                <div class="input">
                                    <label for="reciveDate">تاريخ \ وقت الإستلام</label>
                                    <input type="date" name="reciveDate" id="reciveDate">
                                    <input type="time" name="reciveTime" id="reciveDate">
                                </div>
                            </div>
                            <button>بحث</button>
                        </form>
                    </div>
                </div>        
        </swiper-container>
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
    </section>
    <!-- End Handler -->
    <!-- Start Services -->
    <section class="services">
        <div class="bg">
            <div class="bg-1"><a href="#">
                تفاصيل اكثر

                </a>
            </div>
            <div class="bg-2"><a href="#">
                تفاصيل اكثر
                </a>
            </div>
            <div class="bg-3">
                <a href="#">
                تفاصيل اكثر
                </a>
            </div>
        </div>
        <div class="text">
            <div class="head">
                <span>
                    هوية جديدة
                </span>
                <h2>
                    لمستقبل واعد
                </h2>
                <p>
                    في قطاع خدمات النقل
                </p>
            </div>
            <p>
                تقدم لكم شركة المفتاح أحدث و أفضل السيارات لتصبح رحلتك أكثر راحة. إذا كنت تبحث عن سيارة مُستئجرة سواءً كانت جديدة أو مستعملة، فقط أطلعنا بذلك. نحن هنا لضمان رضا العملاء ونسعى جاهدين لتقديم مجموعة واسعة من الخدمات لتلبية احتياجات عملائنا بشكل أفضل. كما تقدم المفتاح العديد من أنواع السيارات التي تناسب كافة أذواقك وأساليب حياتك وبسعر مناسب. كما نوفر خدماتنا في كافة أرجاء المملكة العربية السعودية، وتأكد بأننا نقدم خدمة عملاء متميزة فقط. إن هدفنا هو إرضاء كافة العملاء بدون استثناء!.. مع المفتاح نسعى لأن يشعر عملاؤنا بالارتياح!
            </p>
            <div class="mange">
                <i class="fa-solid fa-gear"></i>
                <h3>
                    ادارة الحجز
                </h3>
                <div class="form">
                    <input type="search" placeholder="الرجاء تعبئة البيانات" name="search">
                    <button>البحث</button>
                </div>
            </div>
        </div>
    </section>
    <!-- End Services -->
    <!-- Start Social  -->
    <section class="social">
        <div class="col">
            <div>
                <p>
                    تابعنا على
                    <span>وسائل التواصل الإجتماعي</span>
                </p>
                <div class="icons">
                    <a href="#">
                        <i class="fa-brands fa-instagram icon"></i>
                    </a>
                    <a href="#">
                        <i class="fa-brands fa-facebook icon"></i>
                    </a>
                    <a href="#">
                        <i class="fa-brands fa-linkedin icon"></i>
                    </a>
                    <a href="#">
                        <i class="fa-brands fa-x-twitter icon"></i>
                    </a>
                </div>
            </div>
            
        </div>
        <div class="col">
            <p>
                اتصل بنا
                <span>
                    الرقم الموحد
                </span>
            </p>
            <a href="#" class="num">8002440204</a>
        </div>
        <div class="col">
            <p>
                تحميل
                <span>تطبيقاتنا</span>
            </p>
            <div class="imgs">
                <a href="#">
                    <img src="https://kra.ced.sa/public/frontend/images/icon-apple.png" alt="App">
                </a>
                <a href="#">
                    <img src="https://kra.ced.sa/public/frontend/images/icon-android.png" alt="App">
                </a>
                <a href="#">
                    <img src="https://kra.ced.sa/public/frontend/images/icon-huawei.png?v=0.6" alt="App">

                </a>
            </div>
        </div>
    </section>
    <!-- End Social  -->
    <!-- Start Quick Links -->
    <section class="quick">
        <h3>
            روابط سريعة
        </h3>
        <div class="col">
            <a href="#">
                معلومات عنا
            </a>
            <a href="#">
                أسطول المفتاح
            </a>
            <a href="#">
                العروض
            </a>
        </div>
        <div class="col">
            <a href="#">
                معلومات عنا
            </a>
            <a href="#">
                أسطول المفتاح
            </a>
            <a href="#">
                العروض
            </a>
        </div>
        <div class="col">
            <a href="#">
                معلومات عنا
            </a>
            <a href="#">
                أسطول المفتاح
            </a>
            <a href="#">
                العروض
            </a>
        </div>
        <div class="col">
            <a href="#">
                معلومات عنا
            </a>
            <a href="#">
                أسطول المفتاح
            </a>
            <a href="#">
                العروض
            </a>
        </div>
    </section>
<!-- End Quick Links -->

@endsection