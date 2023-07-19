@extends('learning.layout.main-layout')
@section('css','css/learning.ir/main.scss')
@section('main')
<div id="main-container">
    {{--------------------------------------  aside  ------------------------------------}}
    <aside id="aside">

        {{--------------------------------------  aside-learn  ------------------------------------}}
        <div id="aside-learn">
            <header class="pb-4 bg-primary">
                <h1>دوره‌های آموزشی مرتبط</h1>
            </header>
            <a href="">
                <div class="card">
                    <div class="img-card">
                        <img src="./file/learning/main/article/aside/1.jpg" alt="">
                        <div class="salman">
                            <img  src="./file/learning/main/salman.arusi.jpg" alt="">
                        </div>
                    </div>
                    <div class="content">
                        <h1>
                            آموزش لاراول + پروژه فروشگاه مشابه دیجی استایل و ساخت CMS
                        </h1>
                        <p>
                            580000 تومان
                        </p>
                    </div>
                </div>
            </a>
        </div>

        {{--------------------------------------  aside-article  ------------------------------------}}
        <div id="aside-article">
            <header>
                <h1>مقالات مرتبط</h1>
            </header>
            <section>
                <ul>
                    <li>
                        <a href="">
                            <img src="./file/learning/main/article/aside/2.jpg" alt="">
                        </a>
                        <div class="content">
                            <a href="">راهنمای جامع روابط مدل‌ها (relationship) در لاراول</a>
                            <div><i class="fa fa-database"></i>
                            <span> 29 تیر 1400 </span></div>
                        </div>
                    </li>
                    <li>
                        <a href="">
                            <img src="./file/learning/main/article/aside/3.jpg" alt="">
                        </a>
                        <div class="content">
                            <a href="">معرفی کامل و جامع پروتکل OAuth 2.0</a>
                            <div><i class="fa fa-database"></i>
                                <span> 13 تیر 1400 </span></div>
                        </div>
                    </li>
                    <li><a href="">
                            <img src="./file/learning/main/article/aside/4.jpg" alt="">
                        </a>
                        <div class="content">
                            <a href="">آشنایی با قابلیت‌های جدید لاراول  8</a>
                            <div><i class="fa fa-database"></i>
                                <span> 23 آبان 1399 </span></div>
                        </div>
                    </li>
                    <li><a href="">
                            <img src="./file/learning/main/article/aside/5.jpg" alt="">
                        </a>
                        <div class="content">
                            <a href="">ویژگی‌های جدید در لاراول 7</a>
                            <div>
                                <i class="fa fa-database"></i>
                                <span> 17 فروردین 1399 </span>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="">
                            <img src="./file/learning/main/article/aside/6.jpg" alt="">
                        </a>
                        <div class="content">
                            <a href="">ساخت احراز هویت تک‌صفحه‌ای با Laravel و Vue.Js – (قسمت دوم)</a>
                            <div><i class="fa fa-database"></i>
                                <span> 14 دی 1398 </span></div>
                        </div>
                    </li>
                </ul>
            </section>
        </div>

        {{--------------------------------------  aside-question  ------------------------------------}}
        <div id="aside-question">
            <header>
                <h1>آخرین سوالات کاربران</h1>
            </header>
            <div>
                <a href="">mahdibaghayi</a>
                <span>در 2 سال قبل پرسیده:</span>
                <div class="content">
                    <a href="">احراز هویت در لاراول ۸ با Laravel ui</a>
                </div>
            </div>
            <div><a href="">mdazizi000</a><span>در 2 سال قبل پرسیده: </span>
            <div class="content"><a href="">نصب laravel collective</a></div>
        </div>
            <div><a href="">Sadra4679</a><span>در 2 سال قبل پرسیده:</span>
            <div class="content"> <a href="">تبدیل کردن فرم Laravel Collective به فرم عادی</a></div>
    </div>
            <div><a href="">PejmanParvaz </a><span>در 2 سال قبل پرسیده: </span>
            <div class="content"><a href="">چگونه Auto Increment را Laravel تعریف کنیم ؟ </a></div>
</div>
        </div>

        {{--------------------------------------  aside-card  ------------------------------------}}

        <div id="eram" class="card">
            <figure>
                <div class="img-card">
                <img src="./file/learning/main/article/aside/eram.jpg" alt="">
                </div>
                <figcaption>ارم شیراز</figcaption>
                آیا img-card زد اندکس بالاتری دارد؟
            </figure>
            <div>
                <img src="./file/learning/main/article/aside/fllower.jpg" alt="">
                <div class="anime">
                    <img class="img1" src="./file/learning/main/article/aside/smiley.png" alt="">
{{--                    <img src="./file/learning/main/article/aside/fllower.jpg" alt="">--}}
                </div>
            </div>

        </div>

        <div class="card">
            <div class="img-card">
            <img src="./file/learning/main/article/aside/yuz.jpg" alt="">
            </div>
            <div class="content"><p>یوزپلنگ ایران</p></div>
        </div>
        <div>
            <h1>آموزش زبانهای برنامه نویسی:</h1>
            <ul>
                <li>laravel</li>
                <li>CSS</li>
                <li>HTML</li>
                <li>JS</li>
            </ul>
        </div>
        <div></div>
    </aside>
    {{--------------------------------------  main  ------------------------------------}}

    <main id="main">
        <article>
            <div class="animation-img">
                <img src="./file/learning/main/article/aside/salman.arusi.jpg" alt="">
                <img src="./file/learning/main/article/aside/sarbazi.jpg" alt="">
            </div>
            <header class="article-header">
                <h1>ارسال ایمیل با لاراول (Laravel)</h1>
            </header>

            <div class="author-article">
                <a href="">
                    <img src="./file/learning/main/salman.arusi.jpg" alt="">
                    <span>سلمان افرندی</span>
                </a>
                <data value="16 فروردین 1401">16 فروردین 1401</data>
            </div>

            <section>

                <p>در این درس می خواهیم <strong>ارسال ایمیل با لاراول</strong> را یاد بگیریم. در این برنامه می توانیم به خودمان یا شخص دیگری ایمیل بفرستیم. با استفاده از امکانات داخلی Laravel می توانیم ارسال ایمیل داشته باشیم.</p>
                <p>برای ارسال ایمیل با لاراول یک کلاس برای این کار ایجاد می کنیم. هنگامی که این کلاس ساخته شد، باید پیکربندی ایمیل مانند نام میزبان، پورت، درایور، نام کاربری و جزئیات رمز عبور را در فایل env تعریف کنیم. در زیر می توانید مراحل <strong>ارسال ایمیل با لاراول</strong> به ساده ترین روش را بیاموزید.</p>
                <img src="./file/learning/main/article/2.png" alt="">
            </section>
            <section>
                <h1>پیش نیازهای تولید برنامه ارسال ایمیل با لاراول</h1>
                <div class="content">
                    <p>برای نوشتن برنامه <strong>ارسال ایمیل با لاراول</strong> پیش نیازهایی لازم است. در اینجا به آشنایی با PHP و Laravel نیاز داریم. افزون بر دانش برنامه نویسی و تسلط بر Laravel باید xampp و composer در سیستم شما نصب شده باشد. برای دانلود xampp به نشانی و برای دانلود composer به نشانی مراجعه کنید.</p>
                    <p>با دنبال کردن گام های زیر می توانید فرستادن ایمیل با laravel را بیاموزید.</p>
                </div>
            </section>

            <section>
                <h1>گام 1 - نصب لاراول</h1>
                <div class="content">
                    <p>پس از نصب composer و xampp باید یک پروژه laravel ایجاد کنیم. برای این کار به محل مورد نظر برای نصب پروژه می رویم. هر جایی که خواستید می توانید پروژه خود را ایجاد کنید. من آن را در Desktop خود ایجاد می کنم. برای نصب برنامه به ترمینال یا cmd خود نیاز داریم. برای باز شدن cmd کلیدهای ترکیبی win+R را فشار می دهیم تا پنجره زیر نمایش داده شود:</p>
                    <img src="./file/learning/main/article/3.png" alt="">
                    <p>OK را می زنیم تا cmd نمایش داده شود:</p>
                    <img src="./file/learning/main/article/4.png" alt="">
                    <p>از طریق cmd وارد جایی که می خواهیم می شویم. من می خواهم برنامه در Desktop باشد، پس با دستور cd Desktop وارد آن می شوم. سپس دستور زیر را در آن می نویسم:</p>
{{--                    <pre>--}}
{{--                        <code>composer create-project laravel/laravel send_email</code>--}}
{{--                    </pre>--}}
                    <P>اگر همه چیز به درستی پیش رفته باشد، دانلود پروژه انجام خواهد شد و باید تصویری مانند زیر ببینیم:</P>
                    <img src="./file/learning/main/article/5.png" alt="">
                    <P>برای اجرای پروژه ابتدا باید وارد پوشه ایجاد شده که در اینجا send_email نام دارد شویم سپس باید دستور php artisan serve را در cmd بنویسیم:</P>
                    <img src="./file/learning/main/article/6.png" alt="">
                    <P> اگر به آدرس <a href="http://127.0.0.1:8000">http://127.0.0.1:8000</a> برویم باید تصویر زیر را ببینیم:</P>
                    <img src="./file/learning/main/article/7.png" alt="">
                </div>
            </section>

            <section>
                <h1> گام 2 – ساخت کنترلر</h1>
                <div class="content">
                    <p>کنترلرها یکی دیگر از ویژگی های لاراول هستند. به جای تعریف منطق request در فایل های مسیر، می توان این کار را با کمک کلاس های Controller سازماندهی کرد. کنترلرها به منظور گروه بندی منطق رسیدگی به درخواست هایی که به هم مرتبط هستند در یک کلاس واحد قرار می گیرند. در پروژه لاراول، آن ها در دایرکتوری app/Http/Controllers ذخیره می شوند. فرم کامل MVC ،Model View Controller است.</p>
                    <p>برای ساخت کنترلر برای ارسال ایمیل از دستور زیر استفاده می کنیم:</p>
{{--                    <pre>php artisan make:controller MailController</pre>--}}
                    <p>MailController نام کنترلر است. اگر همه چیز به خوبی پیش رفته باشد باید تصویر زیر را ببینیم:</p>
                    <img src="./file/learning/main/article/8.png" alt="">
                </div>
            </section>

            <section>
                <h1>گام 3 – ساخت Mail</h1>
                <div class="content">
                    <p>لاراول یک API ایمیل ساده و تمیز ارائه می دهد که توسط کتابخانه محبوب SwiftMailer پشتیبانی می شود. لاراول و SwiftMailer درایورهایی را برای ارسال ایمیل از طریق SMTP، Mailgun، Postmark، Amazon SES و sendmail ارائه می‌کنند و به شما این امکان را می‌دهند ایمیل خود را ارسال کنید.</p>
                    <p>برای ساخت Mail از دستور زیر استفاده می کنیم:</p>
{{--                    <pre>php artisan make:mail TestMail</pre>--}}
                    <p>نام کلاس Mail خود را TestMail گذاشته ایم. اگر همه چیز به خوبی پیش رفته باشد باید تصویر زیر را ببینیم:</p>
                    <img src="./file/learning/main/article/9.png" alt="">
                </div>
            </section>
            <section>
                <h1>گام 4 – پیکربندی فایل env.</h1>
                <div class="content">
                    <p>پوشه send_mail ایجاد شده را در ویرایشگر کد خود باز کنید. برای ارسال ایمیل باید .env فایل را پیکربندی کنیم و تغییرهایی را در آن به وجود آوریم. تغییرهای شما باید مطابق با تصویر زیر باشد:</p>
                    <img src="./file/learning/main/article/10.png" alt="">
                </div>
            </section>

            <section>
                <h1>گام 5 – فعال کردن Less secure apps</h1>
                <div class="content">
                    <p>در ادامه باید گزینه Less secure apps & your Google Account را در account google خود فعال کنید. اگر این کار را نکنید ایمیل فرستاده نخواهد شد. برای این کار باید وارد این لینک شوید. سپس مطابق تصویر زیر عمل می کنیم:</p>
                    <img src="./file/learning/main/article/11.png" alt="">
                </div>
            </section>

            <section>
                <h1>گام 6 – تکمیل کردن MailController</h1>
                <div class="content">
                    <p>کد زیر را در MailController.php که در app\Http\Controllers است قرار می دهیم:</p>
                    <img src="./file/learning/main/article/12.png" alt="">
{{--                    <pre>class MailController extends Controller--}}
{{--                        {--}}
{{--                        public function sendEmail(){--}}

{{--                        $details=[--}}

{{--                        'title' => 'Sending Mail',--}}

{{--                        'body' => 'this is for testing using gmail'--}}

{{--                        ];--}}


{{--                        Mail::--}}
{{--                        to("--}}
{{--                        example--}}
{{--                        @gmail--}}
{{--                        .com")--}}
{{--                        ->send(--}}
{{--                        new--}}
{{--                        TestMail--}}
{{--                        ($details)--}}
{{--                        );--}}

{{--                        return "Email Send";--}}
{{--                        }--}}
{{--                        }--}}
{{--                    </pre>--}}
                    <p>در کد بالا در قسمت ()Mail::to باید نشانی ایمیلی که می خواهید به آن ایمیل بفرستید را بنویسید.</p>
                </div>
            </section>

            <section>
                <h1>گام 7 – افزودن مسیر</h1>
                <div class="content">
                    <p>حالا نوبت افزودن مسیر است. برای این کار وارد پوشه routes می شویم و فایل web.php را باز می کنیم:</p>
                    <img src="./file/learning/main/article/13.png" alt="">
                    <p>کدهای زیر را در فایل web.php وارد می کنیم:</p>
                    <img src="./file/learning/main/article/14.png" alt="">
                    <p>در بالا با Route::get مسیر خود را که send-mail است تعریف می کنیم و کنترلر را که قبلا تعریف کرده بودیم برای آن درنظر می گیریم. این کنترلر را با دستور زیر وارد کرده ایم:</p>
{{--                    <pre>use App\Http\Controllers\MailController;</pre>--}}
                </div>
            </section>

            <section>
                <h1>گام 8 – تکمیل کردن TestMail</h1>
                <div class="content">
                    <img src="./file/learning/main/article/15.png" alt="">
                    <p>کد زیر را در TestMail.php که در app\Http\Mail است قرار می دهیم:</p>
                </div>
            </section>

            <section>
                <h1>گام 9 – ایجاد view</h1>
                <div class="content">
                    <p>در اینجا می خواهیم یک view بسازیم. اگر ایمیل با موفقیت ارسال شود این view را خواهیم دید. برای این کار وارد پوشه resources\views می شویم و یک پوشه جدید به نام emails ایجاد می کنیم. داخل این پوشه فایل TestMail.blade.php را ایجاد می کنیم:</p>
                    <p>کد زیر را وارد این فایل می کنیم:</p>

                </div>
            </section>

            <section>
                <h1>گام 10 – ارسال ایمیل با لاراول</h1>
                <div class="content">
                    <p>برای ارسال ایمیل xampp باید روشن یا در حال کار کردن باشد. با دستور php artisan serve برنامه را اجرا می کنیم و پس از آن وارد http://localhost:8000 می شویم. جلوی این آدرس /send-mail را می نویسیم، مانند:</p>
                    <img src="./file/learning/main/article/16.png" alt="">
                    <p>سپس Enter را می زنیم تا درخواست فرستاده شود. اگر درخواست به درستی فرستاده شود باید تصویر زیر را ببینیم:</p>
                    <img src="./file/learning/main/article/17.png" alt="">
                    <p>حال اگر به شخصی که ایمیل فرستادیم بخواهیم ایمیل خود را بررسی کند باید تصویر زیر را ببیند:</p>
                    <img src="./file/learning/main/article/18.png" alt="">
                </div>
            </section>

        </article>
    </main>
</div>
@endsection









