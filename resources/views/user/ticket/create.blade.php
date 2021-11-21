<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Ticket</title>
    <!-- Favicon -->
    {{-- <link rel="shortcut icon" type="image/x-icon" href="/assets/images/favicon.ico"> --}}
    <!-- CSS
    ============================================ -->
@include('layout.css.css-link')
</head>
<body class="template-color-1 spybody" data-spy="scroll" data-target=".navbar-example2" data-offset="70">
    <div class="rn-contact-area rn-section-gap section-separator" id="contacts">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <span class="subtitle">پشتیبانی فنی</span>
                        <h2 class="title">ارسال تیکت</h2>
                    </div>
                </div>
            </div>
            <div class="row mt--50 mt_md--40 mt_sm--40 mt-contact-sm">
                <div class="col-lg-5">
                    <div class="contact-about-area">
                        <div class="thumbnail">
                            <img src="/assets/images/contact/contact1.png" alt="contact-img">
                        </div>
                        <div class="title-area">
                            <h4 class="title">شرکت پارناس</h4>
                            <span>پشتیبانی 24 ساعته</span>
                        </div>
                        <div class="description">
                            <p>مشکلات خود را کارشناسان ما در میان بگذارید
                            </p>
                            <span class="phone">تلفن: <a href="tel:01941043264">+01234567890</a></span>
                            <span class="mail">ایمیل: <a href="mailto:admin@example.com">admin@example.com</a></span>
                        </div>
                        <div class="social-area">
                            <div class="name">شبکه های اجتماعی</div>
                            <div class="social-icone">
                                <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg></a>
                                <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-linkedin"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path><rect x="2" y="9" width="4" height="12"></rect><circle cx="4" cy="4" r="2"></circle></svg></a>
                                <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-aos-delay="600" class="col-lg-7 contact-input">
                    <div class="contact-form-wrapper">
                        <div class="introduce">

                            <form class="rnt-contact-form rwt-dynamic-form row" id="contact-form" method="POST" enctype="multipart/form-data" action="/user/ticket/index">
                                @csrf
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="contact-name">نام:</label>
                                        <input class="form-control form-control-lg" name="name" id="contact-name" type="text">
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="contact-email">ایمیل:</label>
                                        <input class="form-control form-control-sm" id="contact-email" name="email" type="email">
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="contact-name">دپارتمان:</label>
                                        <input class="form-control form-control-lg" name="department" id="contact-name" type="text">
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="contact-name">عکس:</label>
                                        <input class="form-control form-control-file" name="img" id="contact-name" type="file">
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="subject">موضوع:</label>
                                        <input class="form-control form-control-sm" id="subject" name="subject" type="text">
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="contact-message">متن پیام:</label>
                                        <textarea name="message" id="contact-message" cols="30" rows="10"></textarea>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <button name="submit" id="submit" class="rn-btn">
                                        <span>ارسال پیام</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layout.js.js-link')
</body>
</html>
