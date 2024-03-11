
<?php $__env->startSection('content'); ?>
    <div class="welcome" style="background: url('https://www.key.sa/public/uploads/cu-صفحة_الاتصال__(1)1613651027.jpg');"></div>
    <div class="page contact">
        <div class="container">
            <h2>العناوين والمواقع</h2>
            <div class="cols">
                <div class="col">
                    <h4>مبيعات السيارات المستعملة</h4>
                    <p>جده_ حي البوادي - طريق المدينه</p>
                </div>
                <div class="col">
                    <h4>المكتب الإقليمي الرياض</h4>
                    <p>حي الورود - تقاطع طريق الملك عبدالعزيز مع شارع الشيخ عبدالله العنقري</p>
                </div>
                <div class="col">
                    <h4>المكتب الإقليمي الخبر</h4>
                    <p>حي الثقبة-طريق خادم الحرمين الشريفين بجانب صيدلية الدواء</p>
                </div>
                <div class="col">
                    <h4>المكتب الرئيسي</h4>
                    <p>جده_ حي البوادي - طريق المدينه</p>
                </div>
            </div>
            <h2>نموذج الاتصال</h2>
            <p>إذا كنت ترغب في مزيد من المعلومات حول أي من منتجاتنا وخدماتنا، يرجى الاتصال بنا.</p>
            <form action="" class="main" method="GET">
                <div class="input">
                    <label for="name">الإسم</label>
                    <input type="text" id="name" placeholder="اختار" name="name" >
                </div>
                <div class="input">
                    <label for="email">البريد الإلكتروني</label>
                    <input type="text" id="email" placeholder="اختار" name="email" >
                </div>
                <div class="input">
                    <label for="phone">الجوال</label>
                    <input type="tel" id="phone" placeholder="الرجاء تعبئة البيانات" name="phone">
                </div>
                <div class="input">
                    <label for="country">الدولة</label>
                    <select type="text" id="country"  name="country">
                        <option value="a" selected disabled>اختار</option>
                        <option value="as">1</option>
                    </select>
                </div>
                <div class="input full">
                    <label for="type">نوع الاستفسار</label>
                    <select name="type" id="type">
                        <option value="اختار" selected disabled>اختار</option>
                        <option value="1">1</option>
                    </select>
                </div>
                <div class="input full">
                    <label for="msg">الرسالة</label>
                    <textarea name="msg" id="msg">الرسالة</textarea>
                </div>
                <button >ارسل</button>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('components.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\car-rent\resources\views/contact.blade.php ENDPATH**/ ?>