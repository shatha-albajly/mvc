<?php
require_once 'app/system/app.php';


$app=new App();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link rel="stylesheet" href="tajawal-bold.woff2" />

    <title>E-library</title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/products.css" />
</head>

<body dir="rtl">
    <!-- header start -->
    <header>
        <div class="section-list">
            <nav>
                <ul class="header-items">
                    <div class="header-item">
                        <img src="images/svgs/person.svg" alt="person icon" style="width: 20px; height: 20px" />
                        <li>
                            <a href="#">
                                <span class="show-signup-model" onclick="show_signup_model_fun()">
                                    سجل الان</span>
                                <span>أو</span>
                                <span class="show-login-model" onclick="show_login_model_fun()">ادخل لحسابك</span>
                            </a>
                        </li>
                    </div>
                    <div class="header-item">
                        <img src="images/svgs/mainPage.svg" alt="star icon" style="width: 20px; height: 20px" />
                        <li><a href="index.html">الرئيسية</a></li>
                    </div>
                    <div class="header-item">
                        <img src="images/svgs/whoAreWe.svg" alt="who are we policy icon"
                            style="width: 20px; height: 20px" />
                        <li><a href="#">من نحن</a></li>
                    </div>
                    <div class="header-item">
                        <img src="images/svgs/callUs.svg" alt="call Usicon" style="width: 20px; height: 20px" />
                        <li><a href="#">اتصل بنا</a></li>
                    </div>
                    <div class="header-item">
                        <img src="images/svgs/help.svg" alt="help icon" style="width: 20px; height: 20px" />
                        <li><a href="#">المساعدة</a></li>
                    </div>
                    <div class="header-item">
                        <img src="images/svgs/privacyPolicy.svg" alt="privacy policy icon"
                            style="width: 20px; height: 20px" />
                        <li><a href="#">سياسةالخصوصية</a></li>
                    </div>
                    <div class="header-item">
                        <img src="images/svgs/saudia.svg" alt="country icon" style="width: 20px; height: 20px" />
                        <li><a href="#">اليمن</a></li>
                        <li><a dir="ltr" href="#">YER</a></li>
                    </div>
                    <div dir="ltr" class="header-item">
                        <img src="images/svgs/EnglishArabic.svg" alt="English to arabic icon"
                            style="width: 20px; height: 20px" />
                        <li>English</li>
                    </div>
                </ul>
                <label id="sandwish">
                    <img src="images/svgs/sandwish.svg" style="width: 20px" alt="" />
                </label>
                <!-- <label id="close-nav">
            <img src="images/svgs/xsandwish.svg" style="width: 20px" alt="" />
          </label> -->
            </nav>
        </div>
        <div class="search-header">
            <a class="logo" href="index.html">
                <img src="images/svgs/logo.svg" alt="" style="width: 180px; height: 50px" />
            </a>
            <div class="search-section">
                <div class="search-bar">
                    <input id="search" type="search" placeholder="البحث" type="text" />
                    <div class="search-icon">
                        <img src="images/svgs/search.svg" alt="" style="width: 20px; height: 20px" />
                    </div>
                </div>

                <a class="basket" href="templates/card.html">
                    <img src="images/svgs/red-basket.svg" style="width: 35px; height: 35px" alt="red basket" />
                    <div class="button__badge">
                        <div class="badge">0</div>
                    </div>
                </a>
                <div class="change-language">
                    <button onclick='changeLanguage("en")'>English</button>
                    <button onclick='changeLanguage("ar")'>عربي</button>
                </div>
            </div>
        </div>
    </header>
    <!-- end header -->

    <!-- signup and login start -->
    <section>
        <div class="signup-model">
            <!-- login and sign up section start -->
            <div class="login-signup">
                <div class="signup">
                    <div class="exit" onclick="exit_fun()">
                        <img src="images/svgs/x.svg
              " style="width: 20px" alt="" />
                    </div>
                    <h1 class="login-title">إنشاء حساب</h1>
                    <form id="signup-form" class="signup-form">
                        <div class="two-input">
                            <div class="input-wrap">
                                <input name="number" type="tel" />
                                <label for="name">رقم الجوال</label>
                            </div>
                            <div class="input-wrap">
                                <label for="">رمز البلد</label>
                                <select>
                                    <option>+967</option>
                                    <option>+966</option>
                                </select>
                            </div>
                        </div>
                        <p>سوف نرسل لك رمز التحقق عن طريق رسالة نصية</p>

                        <div class="input-wrap">
                            <label for="password">ارسال رمز التحقق</label>
                            <input type="password" name="password" />
                        </div>

                        <div class="input-wrap">
                            <label for="password">الاسم الاول</label>
                            <input type="password" name="password" />
                        </div>

                        <div class="input-wrap">
                            <label for="password">اسم العائله</label>
                            <input type="password" name="password" />
                        </div>

                        <div class="input-wrap">
                            <label for="password">البريد الالكتروني</label>
                            <input type="password" name="password" />
                        </div>

                        <div class="input-wrap">
                            <label for="password">تاكيد البريد الالكتروني</label>
                            <input type="password" name="password" />
                        </div>
                        <div class="input-wrap">
                            <label for="password">كلمة السر</label>
                            <input type="password" name="password" />
                        </div>

                        <div class="checkbox-div">
                            <input type="checkbox" />
                            <p>أوافق على الشروط والأحكام</p>
                        </div>
                        <div class="checkbox-div">
                            <input type="checkbox" />

                            <p>التسجيل للانضمام للنشرة البريدية</p>
                        </div>

                        <button>انشاء حساب</button>
                    </form>
                </div>
            </div>
            <!-- login and sign up section start end -->
        </div>
        <div class="login-model">
            <div class="login-signup">
                <div class="login">
                    <div class="exit" onclick="exit_fun()">
                        <img src="images/svgs/x.svg
              " style="width: 20px" alt="" />
                    </div>
                    <h1 class="login-title">تسجيل الدخول</h1>
                    <form id="login-form" class="login-form">
                        <div class="input-wrap">
                            <input name="email" type="email" title="البريد الالكتروني أو رقم الجوال" />
                            <label for="name">البريد الالكتروني أو رقم الجوال</label>
                        </div>
                        <div class="input-wrap">
                            <label for="password">كلمة السر</label>
                            <input type="password" name="password" />
                            <p class="forget">نسيت؟</p>
                        </div>
                        <button>تسجيل الدخول</button>
                    </form>

                    <div class="go-to-signup">
                        <p>ليس لديك حساب؟</p>
                        <p class="new-account-button">انشاء حساب جديد</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- signup and login end -->

    <!-- slider start -->
    <section class="container slider-container">
        <div class="slide">
            <img src="images/slider1.webp" alt="" />
        </div>
        <div class="slide">
            <img src="images/slider2.jpg" alt="" />
        </div>
        <div class="slide">
            <img src="images/slider3.jpg" alt="" />
        </div>
        <div class="slide">
            <img src="images/slider4.jpg" alt="" />
        </div>
        <div class="slide">
            <img src="images/slider5.webp" alt="" />
        </div>
        <div class="slide">
            <img src="images/slider6.jpg" alt="" />
        </div>

        <div class="circles">
            <button class="circle active"></button>
            <button class="circle"></button>
            <button class="circle"></button>
            <button class="circle"></button>
            <button class="circle"></button>
            <button class="circle"></button>
        </div>
        <div class="btn-container">
            <button type="button" class="prevBtn">
                <img src="images/svgs/rightArrow.svg" alt="" />
            </button>
            <button type="button" class="nextBtn">
                <img src="images/svgs/leftArrow.svg" alt="" />
            </button>
        </div>
    </section>
    <!-- slider end -->

    <!-- sections start -->
    <section class="sections container">
        <h2>تصفح حسب القسم</h2>
        <div class="all-sections-with-arrow">
            <img src="images/svgs/rightArrow.svg" style="width: 20px; height: 20px" alt="" />
            <div class="all-sections">
                <div class="section">
                    <img src="images/svgs/svgexport-45.svg" alt="" />
                    <p>دين</p>
                </div>

                <div class="section">
                    <img src="images/svgs/svgexport-41.svg" alt="" />
                    <p>تاريخ</p>
                </div>

                <div class="section">
                    <img src="images/svgs/svgexport-39.svg" alt="" />
                    <p>روايات</p>
                </div>

                <div class="section">
                    <img src="images/svgs/svgexport-42.svg" alt="" />
                    <p>سياسة</p>
                </div>

                <div class="section">
                    <img src="images/svgs/svgexport-44.svg" alt="" />
                    <p>اقتصاد</p>
                </div>

                <div class="section">
                    <img src="images/svgs/svgexport-46.svg" alt="" />
                    <p>العاب</p>
                </div>

                <div class="section">
                    <img src="images/svgs/svgexport-47.svg" alt="" />
                    <p>تربية</p>
                </div>
            </div>
            <img src="images/svgs/leftArrow.svg" style="width: 20px; height: 20px" alt="" />
        </div>
    </section>

    <!-- sections end -->

    <!-- ads picture start -->
    <section class="container ads-pic">
        <div class="container-four-img">
            <img src="images/ad1.jpg" alt="" />
            <img src="images/ad5.jpg" alt="" />
            <img src="images/ad2.jpg" alt="" />
            <img src="images/ad3.jpg" alt="" />
        </div>
        <div class="container-one-img">
            <img src="images/ad4.jpg" alt="" />
        </div>
    </section>
    <!-- ads picture end -->

    <section class="container all-contents-product-page">
        <div class="all-items product-page">
            <div class="open-all">
                <p>العروض الحالية</p>
                <a href="templates/category.html">عرض الكل</a>
            </div>
            <div class="all-item-with-arrows">
                <img src="images/svgs/rightArrow.svg" style="width: 20px; height: 20px" alt="" />
                <div class="current-offers">
                    <div class="product">
                        <div class="img-container">
                            <a href="templates/book.html">
                                <img src="images/book2.jpg" alt="" />
                            </a>
                        </div>
                        <div class="product-info">
                            <div class="product-name">
                                <h2>
                                    <a href="templates/book.html">
                                        <p>‎قصص من وحي الواقع‎‎</p>
                                    </a>
                                </h2>
                            </div>
                            <div class="price-box">
                                <div class="price">
                                    <p>17.54</p>

                                    <span class="price_currency"> رس </span>
                                </div>
                            </div>
                            <div class="book-link">
                                صيغ أخرى
                                <span>كتاب الكتروني</span>
                            </div>
                            <div class="actions">
                                <ul class="add-to-links">
                                    <li class="add-to-links-item">
                                        <img src="images/svgs/star.svg" alt="" />
                                    </li>
                                    <li class="add-to-links-item red-basket">
                                        <button class="btn-card">
                                            <img src="images/svgs/red-basket.svg" alt="" />
                                        </button>
                                    </li>
                                    <li class="add-to-links-item">
                                        <img src="images/svgs/twoarrows.svg" alt="" />
                                    </li>
                                </ul>
                            </div>
                            <div class="timer">
                                <p>الوقت المتبقي:</p>
                                <p class="clock">12:33:44</p>
                            </div>
                        </div>
                    </div>
                    <div class="product">
                        <div class="img-container">
                            <a href="templates/book.html">
                                <img src="images/book1front.jpg" alt="" />
                            </a>
                        </div>
                        <div class="product-info">
                            <div class="product-name">
                                <h2>
                                    <a href="templates/book.html">
                                        <p>لانك الله رحلة الى السماء السابعة‎</p>
                                    </a>
                                </h2>
                            </div>
                            <div class="price-box">
                                <div class="price">
                                    <p>17.54</p>

                                    <span class="price_currency"> رس </span>
                                </div>
                            </div>
                            <div class="book-link">
                                صيغ أخرى
                                <span>كتاب الكتروني</span>
                            </div>
                            <div class="actions">
                                <ul class="add-to-links">
                                    <li class="add-to-links-item">
                                        <img src="images/svgs/star.svg" alt="" />
                                    </li>
                                    <li class="add-to-links-item red-basket">
                                        <button class="btn-card">
                                            <img src="images/svgs/red-basket.svg" alt="" />
                                        </button>
                                    </li>
                                    <li class="add-to-links-item">
                                        <img src="images/svgs/twoarrows.svg" alt="" />
                                    </li>
                                </ul>
                            </div>
                            <div class="timer">
                                <p>الوقت المتبقي:</p>
                                <p class="clock">12:33:44</p>
                            </div>
                        </div>
                    </div>
                    <div class="product">
                        <div class="img-container">
                            <a href="templates/book.html">
                                <img src="images/book1front.jpg" alt="" />
                            </a>
                        </div>
                        <div class="product-info">
                            <div class="product-name">
                                <h2>
                                    <a href="templates/book.html">
                                        <p>لانك الله رحلة الى السماء السابعة‎</p>
                                    </a>
                                </h2>
                            </div>
                            <div class="price-box">
                                <div class="price">
                                    <p>17.54</p>

                                    <span class="price_currency"> رس </span>
                                </div>
                            </div>
                            <div class="book-link">
                                صيغ أخرى
                                <span>كتاب الكتروني</span>
                            </div>
                            <div class="actions">
                                <ul class="add-to-links">
                                    <li class="add-to-links-item">
                                        <img src="images/svgs/star.svg" alt="" />
                                    </li>
                                    <li class="add-to-links-item red-basket">
                                        <button class="btn-card">
                                            <img src="images/svgs/red-basket.svg" alt="" />
                                        </button>
                                    </li>
                                    <li class="add-to-links-item">
                                        <img src="images/svgs/twoarrows.svg" alt="" />
                                    </li>
                                </ul>
                            </div>
                            <div class="timer">
                                <p>الوقت المتبقي:</p>
                                <p class="clock">12:33:44</p>
                            </div>
                        </div>
                    </div>
                    <div class="product">
                        <div class="img-container">
                            <a href="templates/book.html">
                                <img src="images/book1front.jpg" alt="" />
                            </a>
                        </div>
                        <div class="product-info">
                            <div class="product-name">
                                <h2>
                                    <a href="templates/book.html">
                                        <p>لانك الله رحلة الى السماء السابعة‎</p>
                                    </a>
                                </h2>
                            </div>
                            <div class="price-box">
                                <div class="price">
                                    <p>17.54</p>

                                    <span class="price_currency"> رس </span>
                                </div>
                            </div>
                            <div class="book-link">
                                صيغ أخرى
                                <span>كتاب الكتروني</span>
                            </div>
                            <div class="actions">
                                <ul class="add-to-links">
                                    <li class="add-to-links-item">
                                        <img src="images/svgs/star.svg" alt="" />
                                    </li>
                                    <li class="add-to-links-item red-basket">
                                        <button class="btn-card">
                                            <img src="images/svgs/red-basket.svg" alt="" />
                                        </button>
                                    </li>
                                    <li class="add-to-links-item">
                                        <img src="images/svgs/twoarrows.svg" alt="" />
                                    </li>
                                </ul>
                            </div>
                            <div class="timer">
                                <p>الوقت المتبقي:</p>
                                <p class="clock">12:33:44</p>
                            </div>
                        </div>
                    </div>
                    <div class="product">
                        <div class="img-container">
                            <a href="templates/book.html">
                                <img src="images/book1front.jpg" alt="" />
                            </a>
                        </div>
                        <div class="product-info">
                            <div class="product-name">
                                <h2>
                                    <a href="templates/book.html">
                                        <p>لانك الله رحلة الى السماء السابعة‎</p>
                                    </a>
                                </h2>
                            </div>
                            <div class="price-box">
                                <div class="price">
                                    <p>17.54</p>

                                    <span class="price_currency"> رس </span>
                                </div>
                            </div>
                            <div class="book-link">
                                صيغ أخرى
                                <span>كتاب الكتروني</span>
                            </div>
                            <div class="actions">
                                <ul class="add-to-links">
                                    <li class="add-to-links-item">
                                        <img src="images/svgs/star.svg" alt="" />
                                    </li>
                                    <li class="add-to-links-item red-basket">
                                        <button class="btn-card">
                                            <img src="images/svgs/red-basket.svg" alt="" />
                                        </button>
                                    </li>
                                    <li class="add-to-links-item">
                                        <img src="images/svgs/twoarrows.svg" alt="" />
                                    </li>
                                </ul>
                            </div>
                            <div class="timer">
                                <p>الوقت المتبقي:</p>
                                <p class="clock">12:33:44</p>
                            </div>
                        </div>
                    </div>
                </div>
                <img src="images/svgs/leftArrow.svg" style="width: 20px; height: 20px" alt="" />
            </div>
        </div>

        <div class="all-items product-page">
            <div class="open-all">
                <p>الكتب الدينية</p>
                <a href="templates/category.html">عرض الكل</a>
            </div>
            <div class="all-item-with-arrows">
                <img src="images/svgs/rightArrow.svg" style="width: 20px; height: 20px" alt="" />
                <div class="current-offers">
                    <div class="product">
                        <div class="img-container">
                            <a href="templates/book.html">
                                <img src="images/book2.jpg" alt="" />
                            </a>
                        </div>
                        <div class="product-info">
                            <div class="product-name">
                                <h2>
                                    <a href="templates/book.html">
                                        <p>‎قصص من وحي الواقع‎‎</p>
                                    </a>
                                </h2>
                            </div>
                            <div class="price-box">
                                <div class="price">
                                    <p>17.54</p>

                                    <span class="price_currency"> رس </span>
                                </div>
                            </div>
                            <div class="book-link">
                                صيغ أخرى
                                <span>كتاب الكتروني</span>
                            </div>
                            <div class="actions">
                                <ul class="add-to-links">
                                    <li class="add-to-links-item">
                                        <img src="images/svgs/star.svg" alt="" />
                                    </li>
                                    <li class="add-to-links-item red-basket">
                                        <button class="btn-card">
                                            <img src="images/svgs/red-basket.svg" alt="" />
                                        </button>
                                    </li>
                                    <li class="add-to-links-item">
                                        <img src="images/svgs/twoarrows.svg" alt="" />
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="product">
                        <div class="img-container">
                            <a href="templates/book.html">
                                <img src="images/book1front.jpg" alt="" />
                            </a>
                        </div>
                        <div class="product-info">
                            <div class="product-name">
                                <h2>
                                    <a href="templates/book.html">
                                        <p>لانك الله رحلة الى السماء السابعة‎</p>
                                    </a>
                                </h2>
                            </div>
                            <div class="price-box">
                                <div class="price">
                                    <p>17.54</p>

                                    <span class="price_currency"> رس </span>
                                </div>
                            </div>
                            <div class="book-link">
                                صيغ أخرى
                                <span>كتاب الكتروني</span>
                            </div>
                            <div class="actions">
                                <ul class="add-to-links">
                                    <li class="add-to-links-item">
                                        <img src="images/svgs/star.svg" alt="" />
                                    </li>
                                    <li class="add-to-links-item red-basket">
                                        <button class="btn-card">
                                            <img src="images/svgs/red-basket.svg" alt="" />
                                        </button>
                                    </li>
                                    <li class="add-to-links-item">
                                        <img src="images/svgs/twoarrows.svg" alt="" />
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="product">
                        <div class="img-container">
                            <a href="templates/book.html">
                                <img src="images/book1front.jpg" alt="" />
                            </a>
                        </div>
                        <div class="product-info">
                            <div class="product-name">
                                <h2>
                                    <a href="templates/book.html">
                                        <p>لانك الله رحلة الى السماء السابعة‎</p>
                                    </a>
                                </h2>
                            </div>
                            <div class="price-box">
                                <div class="price">
                                    <p>17.54</p>

                                    <span class="price_currency"> رس </span>
                                </div>
                            </div>
                            <div class="book-link">
                                صيغ أخرى
                                <span>كتاب الكتروني</span>
                            </div>
                            <div class="actions">
                                <ul class="add-to-links">
                                    <li class="add-to-links-item">
                                        <img src="images/svgs/star.svg" alt="" />
                                    </li>
                                    <li class="add-to-links-item red-basket">
                                        <button class="btn-card">
                                            <img src="images/svgs/red-basket.svg" alt="" />
                                        </button>
                                    </li>
                                    <li class="add-to-links-item">
                                        <img src="images/svgs/twoarrows.svg" alt="" />
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="product">
                        <div class="img-container">
                            <a href="templates/book.html">
                                <img src="images/book1front.jpg" alt="" />
                            </a>
                        </div>
                        <div class="product-info">
                            <div class="product-name">
                                <h2>
                                    <a href="templates/book.html">
                                        <p>لانك الله رحلة الى السماء السابعة‎</p>
                                    </a>
                                </h2>
                            </div>
                            <div class="price-box">
                                <div class="price">
                                    <p>17.54</p>

                                    <span class="price_currency"> رس </span>
                                </div>
                            </div>
                            <div class="book-link">
                                صيغ أخرى
                                <span>كتاب الكتروني</span>
                            </div>
                            <div class="actions">
                                <ul class="add-to-links">
                                    <li class="add-to-links-item">
                                        <img src="images/svgs/star.svg" alt="" />
                                    </li>
                                    <li class="add-to-links-item red-basket">
                                        <button class="btn-card">
                                            <img src="images/svgs/red-basket.svg" alt="" />
                                        </button>
                                    </li>
                                    <li class="add-to-links-item">
                                        <img src="images/svgs/twoarrows.svg" alt="" />
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="product">
                        <div class="img-container">
                            <a href="templates/book.html">
                                <img src="images/book1front.jpg" alt="" />
                            </a>
                        </div>
                        <div class="product-info">
                            <div class="product-name">
                                <h2>
                                    <a href="templates/book.html">
                                        <p>لانك الله رحلة الى السماء السابعة‎</p>
                                    </a>
                                </h2>
                            </div>
                            <div class="price-box">
                                <div class="price">
                                    <p>17.54</p>

                                    <span class="price_currency"> رس </span>
                                </div>
                            </div>
                            <div class="book-link">
                                صيغ أخرى
                                <span>كتاب الكتروني</span>
                            </div>
                            <div class="actions">
                                <ul class="add-to-links">
                                    <li class="add-to-links-item">
                                        <img src="images/svgs/star.svg" alt="" />
                                    </li>
                                    <li class="add-to-links-item red-basket">
                                        <button class="btn-card">
                                            <img src="images/svgs/red-basket.svg" alt="" />
                                        </button>
                                    </li>
                                    <li class="add-to-links-item">
                                        <img src="images/svgs/twoarrows.svg" alt="" />
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <img src="images/svgs/leftArrow.svg" style="width: 20px; height: 20px" alt="" />
            </div>
        </div>

        <div class="all-items product-page">
            <div class="open-all">
                <p>الكتب التاريخية</p>
                <a href="templates/category.html">عرض الكل</a>
            </div>
            <div class="all-item-with-arrows">
                <img src="images/svgs/rightArrow.svg" style="width: 20px; height: 20px" alt="" />
                <div class="current-offers">
                    <div class="product">
                        <div class="img-container">
                            <a href="templates/book.html">
                                <img src="images/book2.jpg" alt="" />
                            </a>
                        </div>
                        <div class="product-info">
                            <div class="product-name">
                                <h2>
                                    <a href="templates/book.html">
                                        <p>‎قصص من وحي الواقع‎‎</p>
                                    </a>
                                </h2>
                            </div>
                            <div class="price-box">
                                <div class="price">
                                    <p>17.54</p>

                                    <span class="price_currency"> رس </span>
                                </div>
                            </div>
                            <div class="book-link">
                                صيغ أخرى
                                <span>كتاب الكتروني</span>
                            </div>
                            <div class="actions">
                                <ul class="add-to-links">
                                    <li class="add-to-links-item">
                                        <img src="images/svgs/star.svg" alt="" />
                                    </li>
                                    <li class="add-to-links-item red-basket">
                                        <button class="btn-card">
                                            <img src="images/svgs/red-basket.svg" alt="" />
                                        </button>
                                    </li>
                                    <li class="add-to-links-item">
                                        <img src="images/svgs/twoarrows.svg" alt="" />
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="product">
                        <div class="img-container">
                            <a href="templates/book.html">
                                <img src="images/book1front.jpg" alt="" />
                            </a>
                        </div>
                        <div class="product-info">
                            <div class="product-name">
                                <h2>
                                    <a href="templates/book.html">
                                        <p>لانك الله رحلة الى السماء السابعة‎</p>
                                    </a>
                                </h2>
                            </div>
                            <div class="price-box">
                                <div class="price">
                                    <p>17.54</p>

                                    <span class="price_currency"> رس </span>
                                </div>
                            </div>
                            <div class="book-link">
                                صيغ أخرى
                                <span>كتاب الكتروني</span>
                            </div>
                            <div class="actions">
                                <ul class="add-to-links">
                                    <li class="add-to-links-item">
                                        <img src="images/svgs/star.svg" alt="" />
                                    </li>
                                    <li class="add-to-links-item red-basket">
                                        <button class="btn-card">
                                            <img src="images/svgs/red-basket.svg" alt="" />
                                        </button>
                                    </li>
                                    <li class="add-to-links-item">
                                        <img src="images/svgs/twoarrows.svg" alt="" />
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="product">
                        <div class="img-container">
                            <a href="templates/book.html">
                                <img src="images/book1front.jpg" alt="" />
                            </a>
                        </div>
                        <div class="product-info">
                            <div class="product-name">
                                <h2>
                                    <a href="templates/book.html">
                                        <p>لانك الله رحلة الى السماء السابعة‎</p>
                                    </a>
                                </h2>
                            </div>
                            <div class="price-box">
                                <div class="price">
                                    <p>17.54</p>

                                    <span class="price_currency"> رس </span>
                                </div>
                            </div>
                            <div class="book-link">
                                صيغ أخرى
                                <span>كتاب الكتروني</span>
                            </div>
                            <div class="actions">
                                <ul class="add-to-links">
                                    <li class="add-to-links-item">
                                        <img src="images/svgs/star.svg" alt="" />
                                    </li>
                                    <li class="add-to-links-item red-basket">
                                        <button class="btn-card">
                                            <img src="images/svgs/red-basket.svg" alt="" />
                                        </button>
                                    </li>
                                    <li class="add-to-links-item">
                                        <img src="images/svgs/twoarrows.svg" alt="" />
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="product">
                        <div class="img-container">
                            <a href="templates/book.html">
                                <img src="images/book1front.jpg" alt="" />
                            </a>
                        </div>
                        <div class="product-info">
                            <div class="product-name">
                                <h2>
                                    <a href="templates/book.html">
                                        <p>لانك الله رحلة الى السماء السابعة‎</p>
                                    </a>
                                </h2>
                            </div>
                            <div class="price-box">
                                <div class="price">
                                    <p>17.54</p>

                                    <span class="price_currency"> رس </span>
                                </div>
                            </div>
                            <div class="book-link">
                                صيغ أخرى
                                <span>كتاب الكتروني</span>
                            </div>
                            <div class="actions">
                                <ul class="add-to-links">
                                    <li class="add-to-links-item">
                                        <img src="images/svgs/star.svg" alt="" />
                                    </li>
                                    <li class="add-to-links-item red-basket">
                                        <button class="btn-card">
                                            <img src="images/svgs/red-basket.svg" alt="" />
                                        </button>
                                    </li>
                                    <li class="add-to-links-item">
                                        <img src="images/svgs/twoarrows.svg" alt="" />
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="product">
                        <div class="img-container">
                            <a href="templates/book.html">
                                <img src="images/book1front.jpg" alt="" />
                            </a>
                        </div>
                        <div class="product-info">
                            <div class="product-name">
                                <h2>
                                    <a href="templates/book.html">
                                        <p>لانك الله رحلة الى السماء السابعة‎</p>
                                    </a>
                                </h2>
                            </div>
                            <div class="price-box">
                                <div class="price">
                                    <p>17.54</p>

                                    <span class="price_currency"> رس </span>
                                </div>
                            </div>
                            <div class="book-link">
                                صيغ أخرى
                                <span>كتاب الكتروني</span>
                            </div>
                            <div class="actions">
                                <ul class="add-to-links">
                                    <li class="add-to-links-item">
                                        <img src="images/svgs/star.svg" alt="" />
                                    </li>
                                    <li class="add-to-links-item red-basket">
                                        <button class="btn-card">
                                            <img src="images/svgs/red-basket.svg" alt="" />
                                        </button>
                                    </li>
                                    <li class="add-to-links-item">
                                        <img src="images/svgs/twoarrows.svg" alt="" />
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <img src="images/svgs/leftArrow.svg" style="width: 20px; height: 20px" alt="" />
            </div>
        </div>

        <div class="all-items product-page">
            <div class="open-all">
                <p>السياسية</p>
                <a href="templates/category.html">عرض الكل</a>
            </div>
            <div class="all-item-with-arrows">
                <img src="images/svgs/rightArrow.svg" style="width: 20px; height: 20px" alt="" />
                <div class="current-offers">
                    <div class="product">
                        <div class="img-container">
                            <a href="templates/book.html">
                                <img src="images/book2.jpg" alt="" />
                            </a>
                        </div>
                        <div class="product-info">
                            <div class="product-name">
                                <h2>
                                    <a href="templates/book.html">
                                        <p>‎قصص من وحي الواقع‎‎</p>
                                    </a>
                                </h2>
                            </div>
                            <div class="price-box">
                                <div class="price">
                                    <p>17.54</p>

                                    <span class="price_currency"> رس </span>
                                </div>
                            </div>
                            <div class="book-link">
                                صيغ أخرى
                                <span>كتاب الكتروني</span>
                            </div>
                            <div class="actions">
                                <ul class="add-to-links">
                                    <li class="add-to-links-item">
                                        <img src="images/svgs/star.svg" alt="" />
                                    </li>
                                    <li class="add-to-links-item red-basket">
                                        <button class="btn-card">
                                            <img src="images/svgs/red-basket.svg" alt="" />
                                        </button>
                                    </li>
                                    <li class="add-to-links-item">
                                        <img src="images/svgs/twoarrows.svg" alt="" />
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="product">
                        <div class="img-container">
                            <a href="templates/book.html">
                                <img src="images/book1front.jpg" alt="" />
                            </a>
                        </div>
                        <div class="product-info">
                            <div class="product-name">
                                <h2>
                                    <a href="templates/book.html">
                                        <p>لانك الله رحلة الى السماء السابعة‎</p>
                                    </a>
                                </h2>
                            </div>
                            <div class="price-box">
                                <div class="price">
                                    <p>17.54</p>

                                    <span class="price_currency"> رس </span>
                                </div>
                            </div>
                            <div class="book-link">
                                صيغ أخرى
                                <span>كتاب الكتروني</span>
                            </div>
                            <div class="actions">
                                <ul class="add-to-links">
                                    <li class="add-to-links-item">
                                        <img src="images/svgs/star.svg" alt="" />
                                    </li>
                                    <li class="add-to-links-item red-basket">
                                        <button class="btn-card">
                                            <img src="images/svgs/red-basket.svg" alt="" />
                                        </button>
                                    </li>
                                    <li class="add-to-links-item">
                                        <img src="images/svgs/twoarrows.svg" alt="" />
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="product">
                        <div class="img-container">
                            <a href="templates/book.html">
                                <img src="images/book1front.jpg" alt="" />
                            </a>
                        </div>
                        <div class="product-info">
                            <div class="product-name">
                                <h2>
                                    <a href="templates/book.html">
                                        <p>لانك الله رحلة الى السماء السابعة‎</p>
                                    </a>
                                </h2>
                            </div>
                            <div class="price-box">
                                <div class="price">
                                    <p>17.54</p>

                                    <span class="price_currency"> رس </span>
                                </div>
                            </div>
                            <div class="book-link">
                                صيغ أخرى
                                <span>كتاب الكتروني</span>
                            </div>
                            <div class="actions">
                                <ul class="add-to-links">
                                    <li class="add-to-links-item">
                                        <img src="images/svgs/star.svg" alt="" />
                                    </li>
                                    <li class="add-to-links-item red-basket">
                                        <button class="btn-card">
                                            <img src="images/svgs/red-basket.svg" alt="" />
                                        </button>
                                    </li>
                                    <li class="add-to-links-item">
                                        <img src="images/svgs/twoarrows.svg" alt="" />
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="product">
                        <div class="img-container">
                            <a href="templates/book.html">
                                <img src="images/book1front.jpg" alt="" />
                            </a>
                        </div>
                        <div class="product-info">
                            <div class="product-name">
                                <h2>
                                    <a href="templates/book.html">
                                        <p>لانك الله رحلة الى السماء السابعة‎</p>
                                    </a>
                                </h2>
                            </div>
                            <div class="price-box">
                                <div class="price">
                                    <p>17.54</p>

                                    <span class="price_currency"> رس </span>
                                </div>
                            </div>
                            <div class="book-link">
                                صيغ أخرى
                                <span>كتاب الكتروني</span>
                            </div>
                            <div class="actions">
                                <ul class="add-to-links">
                                    <li class="add-to-links-item">
                                        <img src="images/svgs/star.svg" alt="" />
                                    </li>
                                    <li class="add-to-links-item red-basket">
                                        <button class="btn-card">
                                            <img src="images/svgs/red-basket.svg" alt="" />
                                        </button>
                                    </li>
                                    <li class="add-to-links-item">
                                        <img src="images/svgs/twoarrows.svg" alt="" />
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="product">
                        <div class="img-container">
                            <a href="templates/book.html">
                                <img src="images/book1front.jpg" alt="" />
                            </a>
                        </div>
                        <div class="product-info">
                            <div class="product-name">
                                <h2>
                                    <a href="templates/book.html">
                                        <p>لانك الله رحلة الى السماء السابعة‎</p>
                                    </a>
                                </h2>
                            </div>
                            <div class="price-box">
                                <div class="price">
                                    <p>17.54</p>

                                    <span class="price_currency"> رس </span>
                                </div>
                            </div>
                            <div class="book-link">
                                صيغ أخرى
                                <span>كتاب الكتروني</span>
                            </div>
                            <div class="actions">
                                <ul class="add-to-links">
                                    <li class="add-to-links-item">
                                        <img src="images/svgs/star.svg" alt="" />
                                    </li>
                                    <li class="add-to-links-item red-basket">
                                        <button class="btn-card">
                                            <img src="images/svgs/red-basket.svg" alt="" />
                                        </button>
                                    </li>
                                    <li class="add-to-links-item">
                                        <img src="images/svgs/twoarrows.svg" alt="" />
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <img src="images/svgs/leftArrow.svg" style="width: 20px; height: 20px" alt="" />
            </div>
        </div>

        <div class="all-items product-page">
            <div class="open-all">
                <p>الاقتصاد</p>
                <a href="templates/category.html">عرض الكل</a>
            </div>
            <div class="all-item-with-arrows">
                <img src="images/svgs/rightArrow.svg" style="width: 20px; height: 20px" alt="" />
                <div class="current-offers">
                    <div class="product">
                        <div class="img-container">
                            <a href="templates/book.html">
                                <img src="images/book2.jpg" alt="" />
                            </a>
                        </div>
                        <div class="product-info">
                            <div class="product-name">
                                <h2>
                                    <a href="templates/book.html">
                                        <p>‎قصص من وحي الواقع‎‎</p>
                                    </a>
                                </h2>
                            </div>
                            <div class="price-box">
                                <div class="price">
                                    <p>17.54</p>

                                    <span class="price_currency"> رس </span>
                                </div>
                            </div>
                            <div class="book-link">
                                صيغ أخرى
                                <span>كتاب الكتروني</span>
                            </div>
                            <div class="actions">
                                <ul class="add-to-links">
                                    <li class="add-to-links-item">
                                        <img src="images/svgs/star.svg" alt="" />
                                    </li>
                                    <li class="add-to-links-item red-basket">
                                        <button class="btn-card">
                                            <img src="images/svgs/red-basket.svg" alt="" />
                                        </button>
                                    </li>
                                    <li class="add-to-links-item">
                                        <img src="images/svgs/twoarrows.svg" alt="" />
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="product">
                        <div class="img-container">
                            <a href="templates/book.html">
                                <img src="images/book1front.jpg" alt="" />
                            </a>
                        </div>
                        <div class="product-info">
                            <div class="product-name">
                                <h2>
                                    <a href="templates/book.html">
                                        <p>لانك الله رحلة الى السماء السابعة‎</p>
                                    </a>
                                </h2>
                            </div>
                            <div class="price-box">
                                <div class="price">
                                    <p>17.54</p>

                                    <span class="price_currency"> رس </span>
                                </div>
                            </div>
                            <div class="book-link">
                                صيغ أخرى
                                <span>كتاب الكتروني</span>
                            </div>
                            <div class="actions">
                                <ul class="add-to-links">
                                    <li class="add-to-links-item">
                                        <img src="images/svgs/star.svg" alt="" />
                                    </li>
                                    <li class="add-to-links-item red-basket">
                                        <button class="btn-card">
                                            <img src="images/svgs/red-basket.svg" alt="" />
                                        </button>
                                    </li>
                                    <li class="add-to-links-item">
                                        <img src="images/svgs/twoarrows.svg" alt="" />
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="product">
                        <div class="img-container">
                            <a href="templates/book.html">
                                <img src="images/book1front.jpg" alt="" />
                            </a>
                        </div>
                        <div class="product-info">
                            <div class="product-name">
                                <h2>
                                    <a href="templates/book.html">
                                        <p>لانك الله رحلة الى السماء السابعة‎</p>
                                    </a>
                                </h2>
                            </div>
                            <div class="price-box">
                                <div class="price">
                                    <p>17.54</p>

                                    <span class="price_currency"> رس </span>
                                </div>
                            </div>
                            <div class="book-link">
                                صيغ أخرى
                                <span>كتاب الكتروني</span>
                            </div>
                            <div class="actions">
                                <ul class="add-to-links">
                                    <li class="add-to-links-item">
                                        <img src="images/svgs/star.svg" alt="" />
                                    </li>
                                    <li class="add-to-links-item red-basket">
                                        <button class="btn-card">
                                            <img src="images/svgs/red-basket.svg" alt="" />
                                        </button>
                                    </li>
                                    <li class="add-to-links-item">
                                        <img src="images/svgs/twoarrows.svg" alt="" />
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="product">
                        <div class="img-container">
                            <a href="templates/book.html">
                                <img src="images/book1front.jpg" alt="" />
                            </a>
                        </div>
                        <div class="product-info">
                            <div class="product-name">
                                <h2>
                                    <a href="templates/book.html">
                                        <p>لانك الله رحلة الى السماء السابعة‎</p>
                                    </a>
                                </h2>
                            </div>
                            <div class="price-box">
                                <div class="price">
                                    <p>17.54</p>

                                    <span class="price_currency"> رس </span>
                                </div>
                            </div>
                            <div class="book-link">
                                صيغ أخرى
                                <span>كتاب الكتروني</span>
                            </div>
                            <div class="actions">
                                <ul class="add-to-links">
                                    <li class="add-to-links-item">
                                        <img src="images/svgs/star.svg" alt="" />
                                    </li>
                                    <li class="add-to-links-item red-basket">
                                        <button class="btn-card">
                                            <img src="images/svgs/red-basket.svg" alt="" />
                                        </button>
                                    </li>
                                    <li class="add-to-links-item">
                                        <img src="images/svgs/twoarrows.svg" alt="" />
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="product">
                        <div class="img-container">
                            <a href="templates/book.html">
                                <img src="images/book1front.jpg" alt="" />
                            </a>
                        </div>
                        <div class="product-info">
                            <div class="product-name">
                                <h2>
                                    <a href="templates/book.html">
                                        <p>لانك الله رحلة الى السماء السابعة‎</p>
                                    </a>
                                </h2>
                            </div>
                            <div class="price-box">
                                <div class="price">
                                    <p>17.54</p>

                                    <span class="price_currency"> رس </span>
                                </div>
                            </div>
                            <div class="book-link">
                                صيغ أخرى
                                <span>كتاب الكتروني</span>
                            </div>
                            <div class="actions">
                                <ul class="add-to-links">
                                    <li class="add-to-links-item">
                                        <img src="images/svgs/star.svg" alt="" />
                                    </li>
                                    <li class="add-to-links-item red-basket">
                                        <button class="btn-card">
                                            <img src="images/svgs/red-basket.svg" alt="" />
                                        </button>
                                    </li>
                                    <li class="add-to-links-item">
                                        <img src="images/svgs/twoarrows.svg" alt="" />
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <img src="images/svgs/leftArrow.svg" style="width: 20px; height: 20px" alt="" />
            </div>
        </div>

        <div class="all-items product-page">
            <div class="open-all">
                <p>الطبخ</p>
                <a href="templates/category.html">عرض الكل</a>
            </div>
            <div class="all-item-with-arrows">
                <img src="images/svgs/rightArrow.svg" style="width: 20px; height: 20px" alt="" />
                <div class="current-offers">
                    <div class="product">
                        <div class="img-container">
                            <a href="templates/book.html">
                                <img src="images/book2.jpg" alt="" />
                            </a>
                        </div>
                        <div class="product-info">
                            <div class="product-name">
                                <h2>
                                    <a href="templates/book.html">
                                        <p>‎قصص من وحي الواقع‎‎</p>
                                    </a>
                                </h2>
                            </div>
                            <div class="price-box">
                                <div class="price">
                                    <p>17.54</p>

                                    <span class="price_currency"> رس </span>
                                </div>
                            </div>
                            <div class="book-link">
                                صيغ أخرى
                                <span>كتاب الكتروني</span>
                            </div>
                            <div class="actions">
                                <ul class="add-to-links">
                                    <li class="add-to-links-item">
                                        <img src="images/svgs/star.svg" alt="" />
                                    </li>
                                    <li class="add-to-links-item red-basket">
                                        <button class="btn-card">
                                            <img src="images/svgs/red-basket.svg" alt="" />
                                        </button>
                                    </li>
                                    <li class="add-to-links-item">
                                        <img src="images/svgs/twoarrows.svg" alt="" />
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="product">
                        <div class="img-container">
                            <a href="templates/book.html">
                                <img src="images/book1front.jpg" alt="" />
                            </a>
                        </div>
                        <div class="product-info">
                            <div class="product-name">
                                <h2>
                                    <a href="templates/book.html">
                                        <p>لانك الله رحلة الى السماء السابعة‎</p>
                                    </a>
                                </h2>
                            </div>
                            <div class="price-box">
                                <div class="price">
                                    <p>17.54</p>

                                    <span class="price_currency"> رس </span>
                                </div>
                            </div>
                            <div class="book-link">
                                صيغ أخرى
                                <span>كتاب الكتروني</span>
                            </div>
                            <div class="actions">
                                <ul class="add-to-links">
                                    <li class="add-to-links-item">
                                        <img src="images/svgs/star.svg" alt="" />
                                    </li>
                                    <li class="add-to-links-item red-basket">
                                        <button class="btn-card">
                                            <img src="images/svgs/red-basket.svg" alt="" />
                                        </button>
                                    </li>
                                    <li class="add-to-links-item">
                                        <img src="images/svgs/twoarrows.svg" alt="" />
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="product">
                        <div class="img-container">
                            <a href="templates/book.html">
                                <img src="images/book1front.jpg" alt="" />
                            </a>
                        </div>
                        <div class="product-info">
                            <div class="product-name">
                                <h2>
                                    <a href="templates/book.html">
                                        <p>لانك الله رحلة الى السماء السابعة‎</p>
                                    </a>
                                </h2>
                            </div>
                            <div class="price-box">
                                <div class="price">
                                    <p>17.54</p>

                                    <span class="price_currency"> رس </span>
                                </div>
                            </div>
                            <div class="book-link">
                                صيغ أخرى
                                <span>كتاب الكتروني</span>
                            </div>
                            <div class="actions">
                                <ul class="add-to-links">
                                    <li class="add-to-links-item">
                                        <img src="images/svgs/star.svg" alt="" />
                                    </li>
                                    <li class="add-to-links-item red-basket">
                                        <button class="btn-card">
                                            <img src="images/svgs/red-basket.svg" alt="" />
                                        </button>
                                    </li>
                                    <li class="add-to-links-item">
                                        <img src="images/svgs/twoarrows.svg" alt="" />
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="product">
                        <div class="img-container">
                            <a href="templates/book.html">
                                <img src="images/book1front.jpg" alt="" />
                            </a>
                        </div>
                        <div class="product-info">
                            <div class="product-name">
                                <h2>
                                    <a href="templates/book.html">
                                        <p>لانك الله رحلة الى السماء السابعة‎</p>
                                    </a>
                                </h2>
                            </div>
                            <div class="price-box">
                                <div class="price">
                                    <p>17.54</p>

                                    <span class="price_currency"> رس </span>
                                </div>
                            </div>
                            <div class="book-link">
                                صيغ أخرى
                                <span>كتاب الكتروني</span>
                            </div>
                            <div class="actions">
                                <ul class="add-to-links">
                                    <li class="add-to-links-item">
                                        <img src="images/svgs/star.svg" alt="" />
                                    </li>
                                    <li class="add-to-links-item red-basket">
                                        <button class="btn-card">
                                            <img src="images/svgs/red-basket.svg" alt="" />
                                        </button>
                                    </li>
                                    <li class="add-to-links-item">
                                        <img src="images/svgs/twoarrows.svg" alt="" />
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="product">
                        <div class="img-container">
                            <a href="templates/book.html">
                                <img src="images/book1front.jpg" alt="" />
                            </a>
                        </div>
                        <div class="product-info">
                            <div class="product-name">
                                <h2>
                                    <a href="templates/book.html">
                                        <p>لانك الله رحلة الى السماء السابعة‎</p>
                                    </a>
                                </h2>
                            </div>
                            <div class="price-box">
                                <div class="price">
                                    <p>17.54</p>

                                    <span class="price_currency"> رس </span>
                                </div>
                            </div>
                            <div class="book-link">
                                صيغ أخرى
                                <span>كتاب الكتروني</span>
                            </div>
                            <div class="actions">
                                <ul class="add-to-links">
                                    <li class="add-to-links-item">
                                        <img src="images/svgs/star.svg" alt="" />
                                    </li>
                                    <li class="add-to-links-item red-basket">
                                        <button class="btn-card">
                                            <img src="images/svgs/red-basket.svg" alt="" />
                                        </button>
                                    </li>
                                    <li class="add-to-links-item">
                                        <img src="images/svgs/twoarrows.svg" alt="" />
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <img src="images/svgs/leftArrow.svg" style="width: 20px; height: 20px" alt="" />
            </div>
        </div>

        <div class="all-items product-page">
            <div class="open-all">
                <p>أفضل الروايات الرومانسية</p>
                <a href="templates/category.html">عرض الكل</a>
            </div>
            <div class="all-item-with-arrows">
                <img src="images/svgs/rightArrow.svg" style="width: 20px; height: 20px" alt="" />
                <div class="current-offers">
                    <div class="product">
                        <div class="img-container">
                            <a href="templates/book.html">
                                <img src="images/book2.jpg" alt="" />
                            </a>
                        </div>
                        <div class="product-info">
                            <div class="product-name">
                                <h2>
                                    <a href="templates/book.html">
                                        <p>‎قصص من وحي الواقع‎‎</p>
                                    </a>
                                </h2>
                            </div>
                            <div class="price-box">
                                <div class="price">
                                    <p>17.54</p>

                                    <span class="price_currency"> رس </span>
                                </div>
                            </div>
                            <div class="book-link">
                                صيغ أخرى
                                <span>كتاب الكتروني</span>
                            </div>
                            <div class="actions">
                                <ul class="add-to-links">
                                    <li class="add-to-links-item">
                                        <img src="images/svgs/star.svg" alt="" />
                                    </li>
                                    <li class="add-to-links-item red-basket">
                                        <button class="btn-card">
                                            <img src="images/svgs/red-basket.svg" alt="" />
                                        </button>
                                    </li>
                                    <li class="add-to-links-item">
                                        <img src="images/svgs/twoarrows.svg" alt="" />
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="product">
                        <div class="img-container">
                            <a href="templates/book.html">
                                <img src="images/book1front.jpg" alt="" />
                            </a>
                        </div>
                        <div class="product-info">
                            <div class="product-name">
                                <h2>
                                    <a href="templates/book.html">
                                        <p>لانك الله رحلة الى السماء السابعة‎</p>
                                    </a>
                                </h2>
                            </div>
                            <div class="price-box">
                                <div class="price">
                                    <p>17.54</p>

                                    <span class="price_currency"> رس </span>
                                </div>
                            </div>
                            <div class="book-link">
                                صيغ أخرى
                                <span>كتاب الكتروني</span>
                            </div>
                            <div class="actions">
                                <ul class="add-to-links">
                                    <li class="add-to-links-item">
                                        <img src="images/svgs/star.svg" alt="" />
                                    </li>
                                    <li class="add-to-links-item red-basket">
                                        <button class="btn-card">
                                            <img src="images/svgs/red-basket.svg" alt="" />
                                        </button>
                                    </li>
                                    <li class="add-to-links-item">
                                        <img src="images/svgs/twoarrows.svg" alt="" />
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="product">
                        <div class="img-container">
                            <a href="templates/book.html">
                                <img src="images/book1front.jpg" alt="" />
                            </a>
                        </div>
                        <div class="product-info">
                            <div class="product-name">
                                <h2>
                                    <a href="templates/book.html">
                                        <p>لانك الله رحلة الى السماء السابعة‎</p>
                                    </a>
                                </h2>
                            </div>
                            <div class="price-box">
                                <div class="price">
                                    <p>17.54</p>

                                    <span class="price_currency"> رس </span>
                                </div>
                            </div>
                            <div class="book-link">
                                صيغ أخرى
                                <span>كتاب الكتروني</span>
                            </div>
                            <div class="actions">
                                <ul class="add-to-links">
                                    <li class="add-to-links-item">
                                        <img src="images/svgs/star.svg" alt="" />
                                    </li>
                                    <li class="add-to-links-item red-basket">
                                        <button class="btn-card">
                                            <img src="images/svgs/red-basket.svg" alt="" />
                                        </button>
                                    </li>
                                    <li class="add-to-links-item">
                                        <img src="images/svgs/twoarrows.svg" alt="" />
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="product">
                        <div class="img-container">
                            <a href="templates/book.html">
                                <img src="images/book1front.jpg" alt="" />
                            </a>
                        </div>
                        <div class="product-info">
                            <div class="product-name">
                                <h2>
                                    <a href="templates/book.html">
                                        <p>لانك الله رحلة الى السماء السابعة‎</p>
                                    </a>
                                </h2>
                            </div>
                            <div class="price-box">
                                <div class="price">
                                    <p>17.54</p>

                                    <span class="price_currency"> رس </span>
                                </div>
                            </div>
                            <div class="book-link">
                                صيغ أخرى
                                <span>كتاب الكتروني</span>
                            </div>
                            <div class="actions">
                                <ul class="add-to-links">
                                    <li class="add-to-links-item">
                                        <img src="images/svgs/star.svg" alt="" />
                                    </li>
                                    <li class="add-to-links-item red-basket">
                                        <button class="btn-card">
                                            <img src="images/svgs/red-basket.svg" alt="" />
                                        </button>
                                    </li>
                                    <li class="add-to-links-item">
                                        <img src="images/svgs/twoarrows.svg" alt="" />
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="product">
                        <div class="img-container">
                            <a href="templates/book.html">
                                <img src="images/book1front.jpg" alt="" />
                            </a>
                        </div>
                        <div class="product-info">
                            <div class="product-name">
                                <h2>
                                    <a href="templates/book.html">
                                        <p>لانك الله رحلة الى السماء السابعة‎</p>
                                    </a>
                                </h2>
                            </div>
                            <div class="price-box">
                                <div class="price">
                                    <p>17.54</p>

                                    <span class="price_currency"> رس </span>
                                </div>
                            </div>
                            <div class="book-link">
                                صيغ أخرى
                                <span>كتاب الكتروني</span>
                            </div>
                            <div class="actions">
                                <ul class="add-to-links">
                                    <li class="add-to-links-item">
                                        <img src="images/svgs/star.svg" alt="" />
                                    </li>
                                    <li class="add-to-links-item red-basket">
                                        <button class="btn-card">
                                            <img src="images/svgs/red-basket.svg" alt="" />
                                        </button>
                                    </li>
                                    <li class="add-to-links-item">
                                        <img src="images/svgs/twoarrows.svg" alt="" />
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <img src="images/svgs/leftArrow.svg" style="width: 20px; height: 20px" alt="" />
            </div>
        </div>
    </section>

    <!-- main end -->

    <!-- footer start -->
    <footer>
        <div class="footer-lists">
            <div class="container">
                <ul class="footer__nav">
                    <li class="nav__item">
                        <h2 class="nav__title">انضم الى نشرتنا البريدية</h2>
                        <form>
                            <input id="icon" type="text" disabled placeholder="ادخل البريد الابكتروني" />
                            <button class="footer__btn" dir="ltr">اشتراك</button>
                        </form>
                        <h2 class="nav__title">تواصل معنا</h2>

                        <ul class="nav__ul pages_links">
                            <li>
                                <a href="#">
                                    <img src="images/svgs/facebook.svg" style="width: 20px; height: 20px" alt="" /></a>
                            </li>

                            <li>
                                <a href="#">
                                    <img src="images/svgs/twitter.svg" style="width: 20px; height: 20px" alt="" /></a>
                            </li>

                            <li>
                                <a href="#">
                                    <img src="images/svgs/youtube.svg" style="width: 20px; height: 20px" alt="" /></a>
                            </li>

                            <li>
                                <a href="#">
                                    <img src="images/svgs/linkedin.svg" style="width: 20px; height: 20px" alt="" /></a>
                            </li>

                            <li>
                                <a href="#">
                                    <img src="images/svgs/sanpchat.svg" style="width: 20px; height: 20px" alt="" /></a>
                            </li>

                            <li>
                                <a href="#">
                                    <img src="images/svgs/tiktok.svg" style="width: 20px; height: 20px" alt="" /></a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav__item">
                        <h2 class="nav__title">خدمة العملاء</h2>

                        <ul class="nav__ul">
                            <li>
                                <a href="#">مبيعات الشركات</a>
                            </li>

                            <li>
                                <a href="#">الأسئلة المتكرر</a>
                            </li>

                            <li>
                                <a href="#">دليل التسوق والمطبوعات</a>
                            </li>

                            <li>
                                <a href="#">مواقع المعارض</a>
                            </li>

                            <li>
                                <a href="#">سياسةالضمان</a>
                            </li>

                            <li>
                                <a href="#">سياسة الاسترجاع والاستبدال</a>
                            </li>
                            <li>
                                <a href="#">اتصل بنا </a>
                                <p>920000089</p>
                            </li>
                        </ul>
                    </li>

                    <li class="nav__item">
                        <h2 class="nav__title">خدمات جرير</h2>

                        <ul class="nav__ul">
                            <li>
                                <a href="#">خدمة تقسيط المشتريات</a>
                            </li>

                            <li>
                                <a href="#">خدمات مابعد البيع</a>
                            </li>

                            <li>
                                <a href="#">خدمة الحماية الشاملة</a>
                            </li>
                            <li>
                                <a href="#">خدمة أجهزة ابل</a>
                            </li>

                            <li>
                                <a href="#">بطاقة خصم جرير</a>
                            </li>

                            <li>
                                <a href="#">بطاقة جرير للهدايا</a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav__item">
                        <h2 class="nav__title">روابط سريعة</h2>

                        <ul class="nav__ul">
                            <li>
                                <a href="#">اصدارات جرير</a>
                            </li>

                            <li>
                                <a href="#">قارئ جرير</a>
                            </li>

                            <li>
                                <a href="#">شركاء برامج المكافئات</a>
                            </li>
                            <li>
                                <a href="#">خدمات شركات الاتصالات</a>
                            </li>

                            <li>
                                <a href="#">بطاقة خصم جرير</a>
                            </li>

                            <li>
                                <a href="#">بطاقة جرير للهدايا</a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav__item">
                        <h2 class="nav__title">عن جرير</h2>

                        <ul class="nav__ul">
                            <li>
                                <a href="#">من نحن</a>
                            </li>

                            <li>
                                <a href="#">الحوكمة</a>
                            </li>

                            <li>
                                <a href="#">علاقات المستثمرين والتقارير</a>
                            </li>
                            <li>
                                <a href="#">الاستدامة</a>
                            </li>

                            <li>
                                <a href="#">الأخبار</a>
                            </li>
                        </ul>
                        <h2 class="nav__title">فرص العمل</h2>
                    </li>
                </ul>
            </div>
        </div>

        <div class="container">
            <div class="footer-copy-write">
                <div class="copy-write">
                    <p>سياسة الخصوصية | شروط الخدمة</p>
                    <p>
                        جميع الحقوق محفوظة لمكتبة جرير<span>&copy;</span> 2015. س.ت.
                        1010032264. اونلاين س.ت. 1010654213
                    </p>
                </div>
                <div class="payment-options">
                    <img src="images/American-Express-Logo.png" alt="" />
                    <img src="images/Mastercard-logo.svg.png" alt="" />
                    <img src="images/Visa-Logo.png" alt="" />
                    <img src="images/1024px-Mada_Logo.svg.png" alt="" />
                </div>
            </div>
        </div>
    </footer>
    <!-- footer end -->

    <script src="js/scripts.js"></script>
</body>

</html>