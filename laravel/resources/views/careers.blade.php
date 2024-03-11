@extends('components.layout')
@section('content')
    <div class="text carrers">
        <h2>
            الوظائف
        </h2>
        <p>
            إذا كنت تبحث عن تحدي جديد ومهتم بالعمل مع شركة رائدة في مجال النقل، تقدم بطلبك للانضمام إلى أسرة المفتاح لتأجير السيارات
        </p>
    </div>
    <div class="page carrers">
        <div class="container">
            <form action="" class="main" method="POST">
                <div class="input">
                    <label for="name">الإسم الكامل * </label>
                    <input type="text" name="name" id="name"  placeholder="الرجاء تعبئة البيانات">
                </div>
                <div class="input">
                    <label for="date">تاريخ الميلاد * </label>
                    <input type="date" name="date" id="date" placeholder="اختار">
                </div>
                <div class="input">
                    <label for="gender">الجنسية * </label>
                    <select name="gender" id="gender">
                        <option value="" selected disabled>اختار</option>
                    </select>
                </div>
                <div class="input">
                    <label for="email">البريد الإلكتروني *</label>
                    <input type="email" name="email" id="email" placeholder="الرجاء تعبئة البيانات">
                </div>
                <div class="input">
                    <label for="id">رقم الهوية *</label>
                    <input type="text" name="id" id="id">
                </div>
                <div class="input">
                    <label for="tel"> رقم الجوال *</label>
                    <input type="tel" name="tel" id="tel" placeholder="الرجاء تعبئة البيانات">
                </div>
                <div class="input">
                    <label for="location">القسم  *</label>
                    <select name="location" id="location">
                        <option value="" selected disabled>اختار</option>
                    </select>
                </div>
                <div class="input">
                    <label for="city">المدينة *</label>
                    <select name="city" id="city">
                        <option value="" selected disabled>اختار</option>
                    </select>
                </div>
                <div class="input">
                    <label for="lang">اللغات*</label>
                    <input type="text" name="lang" id="lang">
                </div>
                <div class="input flex">
                    <label for="experience">هل لديك خبرة؟</label>
                    <input type="radio" value='لا' name="experience" id="experience">
                    لا
                    <input type="radio" value="نعم" name="experience" id="experience">
                    نعم
                    <a href="#" class="add">أضف المزيد</a>
                </div>
                <div class="works">

                </div>
                <div class="input full">
                    <label for="edu">التعليم / الخبرات *</label>
                    <textarea name="edu" id="edu">الرجاء تعبئة البيانات</textarea>
                </div>
                <div class="input full">
                    <label for="linkedin">رابط LinkedIn *</label>
                    <input type="url" name="linkedin" placeholder="الرجاء تعبئة البيانات" id="linkedin">
                </div>
                <button>أرسل</button>
            </form>
        </div>
    </div>
    <script src="{{asset('js/form.js')}}"></script>
@endsection