<style>

/*--------------------------------------------------------------
# Portfolio
--------------------------------------------------------------*/
#portfolio {
    position: relative;
    padding-bottom: 50px;
}

    #portfolio #portfolio-flters {
        padding: 0;
        margin: 0 auto 35px auto;
        list-style: none;
        text-align: center;
        border-radius: 50px;
        padding: 2px 15px;
    }

        #portfolio #portfolio-flters li {
            cursor: pointer;
            display: inline-block;
            padding: 10px 15px 8px 15px;
            font-size: 14px;
            font-weight: 600;
            line-height: 1;
            text-transform: uppercase;
            color: #999999;
            margin-bottom: 5px;
            transition: all 0.3s ease-in-out;
        }

            #portfolio #portfolio-flters li:hover,
            #portfolio #portfolio-flters li.filter-active {
                color: #b8a07e;
            }

            #portfolio #portfolio-flters li:last-child {
                margin-right: 0;
            }

    #portfolio .portfolio-item {
        margin-bottom: 30px;
    }

        #portfolio .portfolio-item .portfolio-info {
            opacity: 0;
            position: absolute;
            left: 30px;
            right: 30px;
            bottom: 0;
            z-index: 3;
            transition: all ease-in-out 0.3s;
            background: rgba(255, 255, 255, 0.9);
            padding: 15px;
        }

            #portfolio .portfolio-item .portfolio-info h4 {
                font-size: 18px;
                color: #666;
                font-weight: 600;
                margin-bottom: 10px;
            }

            #portfolio .portfolio-item .portfolio-info p {
                color: #999;
                font-size: 14px;
                margin: 0;
                padding: 0;
            }

            #portfolio .portfolio-item .portfolio-info .preview-link,
            #portfolio .portfolio-item .portfolio-info .details-link {
                position: absolute;
                right: 40px;
                font-size: 24px;
                top: calc(50% - 18px);
                color: #b8a07e;
            }

                #portfolio .portfolio-item .portfolio-info .preview-link:hover,
                #portfolio .portfolio-item .portfolio-info .details-link:hover {
                    color: #cab89f;
                }

            #portfolio .portfolio-item .portfolio-info .details-link {
                right: 10px;
            }

        #portfolio .portfolio-item:hover .portfolio-info {
            opacity: 1;
            bottom: 20px;
        }



#hero h6 {
    color: #fff;
    margin-bottom: 50px;
    font-size: 10px;
    text-transform: uppercase;
    font-weight: 700;
    /* text-shadow: -1px 0 2px #2f5a52; */
    font-family: inherit; /* Revert to default font */
    letter-spacing: 1.5px; /* Adjust letter spacing */
}


#hero {
    width: 100%;
    height: 100vh;
    background: linear-gradient(rgba(55, 142, 181, 0.5), rgba(55, 142, 181, 0.2)), url("img/banner.jpg") top center;
    background-size: cover;
    position: relative;
    margin-bottom: -90px;
}



    #hero .hero-container {
        position: absolute;
        bottom: 0;
        top: 0;
        left: 0;
        right: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        text-align: center;
    }

    #hero h1 {
        margin: 0 0 10px 0;
        font-size: 40px;
        font-weight: 600px;
        line-height: 56px;
        text-transform: uppercase;
        color: #fff;
        text-shadow: -1px 0 2px #2f5a52;
    }

    #hero h2 {
        color: #fff;
        margin-bottom: 50px;
        font-size: 20px;
        text-transform: uppercase;
        font-weight: 700;
        text-shadow: -1px 0 2px #2f5a52;
    }

    #hero .btn-get-started {
        font-size: 36px;
        display: inline-block;
        padding: 4px 0;
        border-radius: 50px;
        transition: 0.3s ease-in-out;
        margin: 10px;
        width: 64px;
        height: 64px;
        text-align: center;
        border: 2px solid #fff;
        color: #fff;
    }

        #hero .btn-get-started:hover {
            padding-top: 8px;
            background: rgba(255, 255, 255, 0.15);
        }


/*-----------------------------------------------------------------------------------*/
/*  About
/*-----------------------------------------------------------------------------------*/
#about {
    width: 100%;
    height: auto;
    background: #f7f7f7;
    padding-top: 120px;
}

    #about .div-img-bg {
        padding-bottom: 30px;
        border: 20px solid #67d1b1;
    }

        #about .div-img-bg .about-img img {
            width: 100%;
            box-shadow: 0px 0px 85px 0px rgba(0, 0, 0, 0.14);
            margin-top: -60px;
            margin-left: 40px;
            height: 400px;
            -o-object-fit: cover;
            object-fit: cover;
        }

    #about .about-descr .p-heading {
        font-family: "Playfair Display", serif;
        font-size: 28px;
        text-align: left;
    }

    #about .about-descr .separator {
        max-width: 80%;
        margin-bottom: 0;
        text-align: left;
    }

.content p {
    margin-bottom: 30px;
}

.content .about-btn {
    font-family: "Raleway", sans-serif;
    text-transform: uppercase;
    font-weight: 500;
    font-size: 14px;
    letter-spacing: 1px;
    display: inline-block;
    padding: 8px 28px;
    display: inline-block;
    background: #67d1b1;
    padding: 6px 44px 8px 30px;
    color: #fff;
    border-radius: 50px;
    transition: 0.3s;
    position: relative;
}

    .content .about-btn i {
        font-size: 18px;
        position: absolute;
        right: 18px;
        top: 9px;
    }

    .content .about-btn:hover {
        background: #7bd7c0;
    }




/* Custom classes for each service */
.services .icon-box.product-design:hover {
    background-image: url('img/about-bg.jpg'); /* Replace with the path to your product design image */
    top: 0;
    border-radius: 0px;
}

.services .icon-box.mechanical-design:hover {
    background-image: url('img/hero-bg.jpg'); /* Replace with the path to your mechanical design image */
    top: 0;
    border-radius: 0px;
}

.services .icon-box.animation:hover {
    background-image: url('img/banner.jpg'); /* Replace with the path to your animation image */
    top: 0;
    border-radius: 0px;
}

.services .icon-box.graphic-design:hover {
    background-image: url('img/hero-bg.jpg'); /* Replace with the path to your graphic design image */
    top: 0;
    border-radius: 0px;
}


/*--------------------------------------------------------------
# Portfolio
--------------------------------------------------------------*/
.portfolio .portfolio-item {
    margin-bottom: 30px;
}

.portfolio #portfolio-flters {
    padding: 0;
    margin: 0 auto 35px auto;
    list-style: none;
    text-align: center;
    background: #ecf5f9;
    border-radius: 50px;
    padding: 2px 15px;
}

    .portfolio #portfolio-flters li {
        cursor: pointer;
        display: inline-block;
        padding: 10px 15px 8px 15px;
        font-size: 14px;
        font-weight: 600;
        line-height: 1;
        text-transform: uppercase;
        color: #2f5a52;
        margin-bottom: 5px;
        transition: all 0.3s ease-in-out;
    }

        .portfolio #portfolio-flters li:hover,
        .portfolio #portfolio-flters li.filter-active {
            color: #67d1b1;
        }

        .portfolio #portfolio-flters li:last-child {
            margin-right: 0;
        }




/*--------------------------------------------------------------
# Testimonials
--------------------------------------------------------------*/
.testimonials .testimonials-carousel,
.testimonials .testimonials-slider {
    overflow: hidden;
}

.testimonials .testimonials-carousel,
.testimonials .testimonials-slider {
    overflow: hidden;
}

.testimonials .testimonial-item {
    box-sizing: content-box;
    text-align: center;
    min-height: 320px;
}

    .testimonials .testimonial-item .testimonial-img {
        width: 300px;
        border-radius: 50%;
        margin: 0 auto;
    }

    .testimonials .testimonial-item h3 {
        font-size: 18px;
        font-weight: bold;
        margin: 10px 0 5px 0;
        color: #111;
    }

    .testimonials .testimonial-item h4 {
        font-size: 14px;
        color: #999;
        margin: 0;
    }

    .testimonials .testimonial-item .quote-icon-left,
    .testimonials .testimonial-item .quote-icon-right {
        color: #d5e9f2;
        font-size: 26px;
    }

    .testimonials .testimonial-item .quote-icon-left {
        display: inline-block;
        left: -5px;
        position: relative;
    }

    .testimonials .testimonial-item .quote-icon-right {
        display: inline-block;
        right: -5px;
        position: relative;
        top: 10px;
    }

    .testimonials .testimonial-item p {
        font-style: italic;
        margin: 0 15px 15px 15px;
        padding: 20px;
        background: #fff;
        position: relative;
        margin-bottom: 35px;
        border-radius: 6px;
        box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
    }

        .testimonials .testimonial-item p::after {
            content: "";
            width: 0;
            height: 0;
            border-top: 20px solid #fff;
            border-right: 20px solid transparent;
            border-left: 20px solid transparent;
            position: absolute;
            bottom: -20px;
            left: calc(50% - 20px);
        }

.testimonials .swiper-pagination {
    margin-top: 20px;
    position: relative;
}

    .testimonials .swiper-pagination .swiper-pagination-bullet {
        width: 12px;
        height: 12px;
        background-color: #fff;
        opacity: 1;
        border: 1px solid #67d1b1;
    }

    .testimonials .swiper-pagination .swiper-pagination-bullet-active {
        background-color: #67d1b1;
    }


/*--------------------------------------------------------------
# Cta
--------------------------------------------------------------*/
.cta {
    background: linear-gradient(rgba(103, 198, 209, 0.8), rgba(103, 198, 209, 0.8)), url("../img/cta-bg01.jpg") fixed center center;
    background-size: cover;
    padding: 60px 0;
}



    .cta h3 {
        color: #fff;
        font-size: 28px;
        font-weight: 700;
    }

    .cta p {
        color: #fff;
    }



.cta-btn {
    font-family: "Raleway", sans-serif;
    text-transform: uppercase;
    font-weight: 500;
    font-size: 16px;
    letter-spacing: 1px;
    display: inline-block;
    padding: 8px 28px;
    border-radius: 25px;
    transition: 0.5s;
    margin-top: 10px;
    border: 2px solid rgba(255, 255, 255, 0.5);
    color: #fff;
}

    .cta-btn:hover {
        border-color: #fff;
    }




.edu-btn {
    font-family: "Raleway", sans-serif;
    text-transform: uppercase;
    font-weight: 500;
    font-size: 16px;
    letter-spacing: 1px;
    display: inline-block;
    padding: 8px 28px;
    display: inline-block;
    background: #67d1b1;
    padding: 6px 44px 8px 30px;
    color: #fff;
    border-radius: 50px;
    transition: 0.3s;
    position: relative;
}

    .edu-btn i {
        font-size: 18px;
        position: absolute;
        right: 18px;
        top: 9px;
    }

    .edu-btn:hover {
        background: #7bd7c0;
    }

/* 将彩度调整为0，转为灰度 */
iframe {
    filter: grayscale(100%);
}

    /* 滑鼠靠近时恢复原来的颜色 */
    iframe:hover {
        filter: grayscale(0%);
    }

/* 将所有图片设置为灰度 */
img {
filter: grayscale(100%);
transition: filter 0.5s ease-in-out; /* 增加过渡效果时间 */
}

/* 鼠标悬停时恢复原色彩并放大图片内容 */
img:hover {
    filter: grayscale(0%);
    transform: scale(1.1);
    transition: transform 0.5s ease-in-out; /* 增加过渡效果时间 */
}



</style>


<style>

  
/*--------------------------------------------------------------
# Sections General
--------------------------------------------------------------*/
section {
padding: 60px 0;
overflow: hidden;
}

.section-bg {
background-color: #f4f9fc;
}

.section-title {
text-align: center;
padding-bottom: 30px;
}

.section-title h2 {
font-size: 32px;
font-weight: bold;
position: relative;
margin-bottom: 30px;
color: #2f5a59;
z-index: 2;
}

.section-title h2::after {
content: "";
position: absolute;
left: 50%;
top: 50%;
transform: translate(-50%, -50%);
width: 122px;
height: 66px;
background: url(../img/section-title-bg02.png) no-repeat;
z-index: -1;
}

.section-title p {
margin-bottom: 0;
}

/*--------------------------------------------------------------
# Breadcrumbs
--------------------------------------------------------------*/
.breadcrumbs {
padding: 15px 0;
background-color: #f8fbfd;
min-height: 40px;
}

.breadcrumbs h2 {
font-size: 24px;
font-weight: 300;
}

.breadcrumbs ol {
display: flex;
flex-wrap: wrap;
list-style: none;
padding: 0;
margin: 0;
font-size: 14px;
}

.breadcrumbs ol li+li {
padding-left: 10px;
}

.breadcrumbs ol li+li::before {
display: inline-block;
padding-right: 10px;
color: #6c757d;
content: "/";
}

@media (max-width: 768px) {
.breadcrumbs .d-flex {
display: block !important;
}

.breadcrumbs ol {
display: block;
}

.breadcrumbs ol li {
display: inline-block;
}
}

/*--------------------------------------------------------------
# About
--------------------------------------------------------------*/
.about {
background: url("../img/about-bg.jpg") center center no-repeat;
background-size: cover;
padding: 60px 0;
position: relative;
}

.about::before {
content: "";
position: absolute;
left: 0;
right: 0;
top: 0;
bottom: 0;
background: rgba(255, 255, 255, 0.75);
z-index: 9;
}

.about .container {
position: relative;
z-index: 10;
}

.about .content {
padding: 30px 30px 30px 0;
}

.about .content h3 {
font-weight: 700;
font-size: 34px;
color: #2f5a54;
margin-bottom: 30px;
}

.about .content p {
margin-bottom: 30px;
}

.about .content .about-btn {
display: inline-block;
background: #67d1ca;
padding: 6px 44px 8px 30px;
color: #fff;
border-radius: 50px;
transition: 0.3s;
position: relative;
}

.about .content .about-btn i {
font-size: 18px;
position: absolute;
right: 18px;
top: 9px;
}

.about .content .about-btn:hover {
background: #7bd7ce;
}

.about .icon-boxes .icon-box {
margin-top: 30px;
}

.about .icon-boxes .icon-box i {
font-size: 40px;
color: #67d1b8;
margin-bottom: 10px;
}

.about .icon-boxes .icon-box h4 {
font-size: 20px;
font-weight: 700;
margin: 0 0 10px 0;
}

.about .icon-boxes .icon-box p {
font-size: 12px;
color: #848484;
}

@media (max-width: 1200px) {
.about .content {
padding-right: 0;
}
}

@media (max-width: 768px) {
.about {
text-align: center;
}
}

/*--------------------------------------------------------------
# Services
--------------------------------------------------------------*/
.services .icon-box {
padding: 30px;
position: relative;
overflow: hidden;
background: #fff;
box-shadow: 0 0 29px 0 rgba(68, 88, 144, 0.12);
transition: all 0.3s ease-in-out;
border-radius: 8px;
z-index: 1;
}

.services .icon-box::before {
content: "";
position: absolute;
background: white;
right: 0;
left: 0;
bottom: 0;
top: 100%;
transition: all 0.3s;
z-index: -1;
}

.services .icon-box:hover::before {
 /*   background: #67b0d1;*/
    background: url('img/banner.jpg'); /* Replace with the path to your image */
    top: 0;
    border-radius: 0px;
}

.services .icon {
margin-bottom: 15px;
}

.services .icon i {
font-size: 48px;
line-height: 1;
color: #67d1cc;
transition: all 0.3s ease-in-out;
}

.services .title {
font-weight: 700;
margin-bottom: 15px;
font-size: 18px;
}

.services .title a {
color: #111;
}

.services .description {
font-size: 15px;
line-height: 28px;
margin-bottom: 0;
}

.services .icon-box:hover .title a,
.services .icon-box:hover .description {
color: #fff;
}

.services .icon-box:hover .icon i {
color: #fff;
}

/*--------------------------------------------------------------
# Counts
--------------------------------------------------------------*/
.counts {
padding-bottom: 30px;
}

.counts .count-box {
padding: 30px;
width: 100%;
}

.counts .count-box i {
display: block;
font-size: 44px;
color: #67b0d1;
float: left;
line-height: 0;
}

.counts .count-box span {
font-size: 48px;
line-height: 40px;
display: block;
font-weight: 700;
color: #2f5a53;
margin-left: 60px;
}

.counts .count-box p {
padding: 15px 0 0 0;
margin: 0 0 0 60px;
font-family: "Raleway", sans-serif;
font-size: 14px;
color: #498c88;
}

.counts .count-box a {
font-weight: 600;
display: block;
margin-top: 20px;
color: #498b8c;
font-size: 15px;
font-family: "Poppins", sans-serif;
transition: ease-in-out 0.3s;
}

.counts .count-box a:hover {
color: #6eb4aa;
}


/*--------------------------------------------------------------
# Portfolio
--------------------------------------------------------------*/
.portfolio .portfolio-item {
margin-bottom: 30px;
}

.portfolio #portfolio-flters {
padding: 0;
margin: 0 auto 35px auto;
list-style: none;
text-align: center;
background: #ecf5f9;
border-radius: 50px;
padding: 2px 15px;
}

.portfolio #portfolio-flters li {
cursor: pointer;
display: inline-block;
padding: 10px 15px 8px 15px;
font-size: 14px;
font-weight: 600;
line-height: 1;
text-transform: uppercase;
color: #2f4d5a;
margin-bottom: 5px;
transition: all 0.3s ease-in-out;
}

.portfolio #portfolio-flters li:hover,
.portfolio #portfolio-flters li.filter-active {
color: #67d1b7;
}

.portfolio #portfolio-flters li:last-child {
margin-right: 0;
}

.portfolio .portfolio-wrap {
transition: 0.3s;
position: relative;
overflow: hidden;
z-index: 1;
}

.portfolio .portfolio-wrap::before {
content: "";
background: rgba(255, 255, 255, 0.5);
position: absolute;
left: 0;
right: 0;
top: 0;
bottom: 0;
transition: all ease-in-out 0.3s;
z-index: 2;
opacity: 0;
}

.portfolio .portfolio-wrap .portfolio-links {
opacity: 1;
left: 0;
right: 0;
bottom: -60px;
z-index: 3;
position: absolute;
transition: all ease-in-out 0.3s;
display: flex;
justify-content: center;
}

.portfolio .portfolio-wrap .portfolio-links a {
color: #fff;
font-size: 28px;
text-align: center;
background: rgba(103, 209, 209, 0.75);
transition: 0.3s;
width: 50%;
}

.portfolio .portfolio-wrap .portfolio-links a:hover {
background: rgba(103, 204, 209, 0.95);
}

.portfolio .portfolio-wrap .portfolio-links a+a {
border-left: 1px solid #8ed8dd;
}

.portfolio .portfolio-wrap:hover::before {
top: 0;
left: 0;
right: 0;
bottom: 0;
opacity: 1;
}

.portfolio .portfolio-wrap:hover .portfolio-links {
opacity: 1;
bottom: 0;
}

/*--------------------------------------------------------------
# Portfolio Details
--------------------------------------------------------------*/
.portfolio-details {
padding-top: 40px;
}

.portfolio-details .portfolio-details-slider img {
width: 100%;
}

.portfolio-details .portfolio-details-slider .swiper-pagination {
margin-top: 20px;
position: relative;
}

.portfolio-details .portfolio-details-slider .swiper-pagination .swiper-pagination-bullet {
width: 12px;
height: 12px;
background-color: #fff;
opacity: 1;
border: 1px solid #67d1ce;
}

.portfolio-details .portfolio-details-slider .swiper-pagination .swiper-pagination-bullet-active {
background-color: #67d1bc;
}

.portfolio-details .portfolio-info {
padding: 30px;
box-shadow: 0px 0 30px rgba(47, 77, 90, 0.08);
}

.portfolio-details .portfolio-info h3 {
font-size: 22px;
font-weight: 700;
margin-bottom: 20px;
padding-bottom: 20px;
border-bottom: 1px solid #eee;
}

.portfolio-details .portfolio-info ul {
list-style: none;
padding: 0;
font-size: 15px;
}

.portfolio-details .portfolio-info ul li+li {
margin-top: 10px;
}

.portfolio-details .portfolio-description {
padding-top: 30px;
}

.portfolio-details .portfolio-description h2 {
font-size: 26px;
font-weight: 700;
margin-bottom: 20px;
}

.portfolio-details .portfolio-description p {
padding: 0;
}

/*--------------------------------------------------------------
# Team
--------------------------------------------------------------*/
.team .member {
text-align: center;
margin-bottom: 80px;
position: relative;
}

.team .member .pic {
overflow: hidden;
}

.team .member .member-info {
position: absolute;
top: 85%;
left: 20px;
right: 20px;
background: #fff;
padding: 20px 0;
color: #2f5a5a;
box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
max-height: 95px;
overflow: hidden;
transition: max-height 0.5s ease-in-out;
}

.team .member:hover .member-info {
max-height: 300px;
}

.team .member h4 {
font-weight: 700;
margin-bottom: 10px;
font-size: 16px;
color: #2f5a59;
position: relative;
padding-bottom: 10px;
}

.team .member h4::after {
content: "";
position: absolute;
display: block;
width: 50px;
height: 1px;
background: #b1d7d1;
bottom: 0;
left: calc(50% - 25px);
}

.team .member span {
font-style: italic;
display: block;
font-size: 13px;
}

.team .member .social {
margin-top: 15px;
}

.team .member .social a {
transition: color 0.3s;
color: #529d99;
}

.team .member .social a:hover {
color: #67d1ba;
}

.team .member .social i {
font-size: 16px;
margin: 0 2px;
}

@media (max-width: 992px) {
.team .member {
margin-bottom: 110px;
}
}

/*--------------------------------------------------------------
# Contact
--------------------------------------------------------------*/
.contact {
padding-bottom: 80px;
}

.contact .info-box {
color: #444444;
background: #fff;
text-align: center;
box-shadow: 0 0 30px rgba(214, 216, 216, 0.6);
padding: 20px 0 30px 0;
}

.contact .info-box i {
font-size: 32px;
color: #67d1cf;
border-radius: 50%;
padding: 8px;
border: 2px dotted #f0f7fa;
}

.contact .info-box h3 {
font-size: 20px;
color: #777777;
font-weight: 700;
margin: 10px 0;
}

.contact .info-box p {
padding: 0;
line-height: 24px;
font-size: 14px;
margin-bottom: 0;
}

.contact .php-email-form {
box-shadow: 0 0 30px rgba(214, 215, 216, 0.6);
padding: 30px;
background: #fff;
}

.contact .php-email-form .error-message {
display: none;
color: #fff;
background: #ed3c0d;
text-align: left;
padding: 15px;
font-weight: 600;
}

.contact .php-email-form .error-message br+br {
margin-top: 25px;
}

.contact .php-email-form .sent-message {
display: none;
color: #fff;
background: #18d26e;
text-align: center;
padding: 15px;
font-weight: 600;
}

.contact .php-email-form .loading {
display: none;
background: #fff;
text-align: center;
padding: 15px;
}

.contact .php-email-form .loading:before {
content: "";
display: inline-block;
border-radius: 50%;
width: 24px;
height: 24px;
margin: 0 10px -6px 0;
border: 3px solid #18d26e;
border-top-color: #eee;
animation: animate-loading 1s linear infinite;
}

.contact .php-email-form input,
.contact .php-email-form textarea {
border-radius: 0;
box-shadow: none;
font-size: 14px;
}

.contact .php-email-form input::focus,
.contact .php-email-form textarea::focus {
background-color: #67cfd1;
}

.contact .php-email-form input {
padding: 10px 15px;
}

.contact .php-email-form textarea {
padding: 12px 15px;
}

.contact .php-email-form button[type=submit] {
background: #67d1b5;
border: 0;
padding: 10px 24px;
color: #fff;
transition: 0.4s;
}

.contact .php-email-form button[type=submit]:hover {
background: #8eddd7;
}

@keyframes animate-loading {
0% {
transform: rotate(0deg);
}

100% {
transform: rotate(360deg);
}
}

/*--------------------------------------------------------------
# Footer
--------------------------------------------------------------*/
#footer {
background: #264948;
padding: 0 0 30px 0;
color: #fff;
font-size: 14px;
}

#footer .footer-top {
padding: 60px 0 30px 0;
}

#footer .footer-top .footer-info {
margin-top: -90px;
margin-bottom: 15px;
background: white;
color: #2f5a55;
border-top: 4px solid #67bfd1;
text-align: center;
padding: 30px 20px;
}

#footer .footer-top .footer-info h3 {
font-size: 24px;
margin: 0 0 20px 0;
padding: 2px 0 2px 0;
line-height: 1;
font-weight: 700;
}

#footer .footer-top .footer-info p {
font-size: 14px;
line-height: 24px;
margin-bottom: 0;
font-family: "Raleway", sans-serif;
}

#footer .footer-top .social-links a {
font-size: 18px;
display: inline-block;
background: #2f5a55;
color: #fff;
line-height: 1;
padding: 8px 0;
margin-right: 4px;
border-radius: 50%;
text-align: center;
width: 36px;
height: 36px;
transition: 0.3s;
}

#footer .footer-top .social-links a:hover {
background: #67cfd1;
color: #fff;
text-decoration: none;
}

#footer .footer-top h4 {
font-size: 16px;
font-weight: 600;
color: #fff;
position: relative;
padding-bottom: 12px;
}

#footer .footer-top .footer-links {
margin-bottom: 30px;
}

#footer .footer-top .footer-links ul {
list-style: none;
padding: 0;
margin: 0;
}

#footer .footer-top .footer-links ul i {
padding-right: 2px;
color: #b5e2e9;
font-size: 18px;
line-height: 1;
}

#footer .footer-top .footer-links ul li {
padding: 10px 0;
display: flex;
align-items: center;
}

#footer .footer-top .footer-links ul li:first-child {
padding-top: 0;
}

#footer .footer-top .footer-links ul a {
color: #fff;
transition: 0.3s;
display: inline-block;
line-height: 1;
}

#footer .footer-top .footer-links ul a:hover {
color: #a2e3de;
}

#footer .footer-top .footer-newsletter form {
margin-top: 30px;
background: #fff;
padding: 6px 10px;
position: relative;
border-radius: 4;
}

#footer .footer-top .footer-newsletter form input[type=email] {
border: 0;
padding: 4px;
width: calc(100% - 110px);
}

#footer .footer-top .footer-newsletter form input[type=submit] {
position: absolute;
top: 0;
right: 0;
bottom: 0;
border: 0;
background: none;
font-size: 16px;
padding: 0 20px;
background: #67d1d1;
color: #fff;
transition: 0.3s;
border-radius: 4;
}

#footer .footer-top .footer-newsletter form input[type=submit]:hover {
background: #40c5a4;
}

#footer .copyright {
border-top: 1px solid #386b60;
text-align: center;
padding-top: 30px;
}

#footer .credits {
padding-top: 10px;
text-align: center;
font-size: 13px;
color: #fff;
}
  body {
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
  }

  /*--------------------------------------------------------------
  # Services
  --------------------------------------------------------------*/
  .services .icon-box {
      padding: 30px;
      position: relative;
      overflow: hidden;
      background: #fff;
      box-shadow: 0 0 29px 0 rgba(68, 88, 144, 0.12);
      transition: all 0.3s ease-in-out;
      border-radius: 8px;
      z-index: 1;
  }

      .services .icon-box::before {
          content: "";
          position: absolute;
          background: white;
          right: 0;
          left: 0;
          bottom: 0;
          top: 100%;
          transition: all 0.3s;
          z-index: -1;
      }

      .services .icon-box:hover::before {
          /*   background: #67d1b1;*/
          background: url('img/banner.jpg'); /* Replace with the path to your image */
          top: 0;
          border-radius: 0px;
      }

  .services .icon {
      margin-bottom: 15px;
  }

      .services .icon i {
          font-size: 48px;
          line-height: 1;
          color: #67d1b1;
          transition: all 0.3s ease-in-out;
      }

  .services .title {
      font-weight: 700;
      margin-bottom: 15px;
      font-size: 18px;
  }

      .services .title a {
          color: #111;
      }

  .services .description {
      font-size: 15px;
      line-height: 28px;
      margin-bottom: 0;
  }

  .services .icon-box:hover .title a,
  .services .icon-box:hover .description {
      color: #fff;
  }

  .services .icon-box:hover .icon i {
      color: #fff;
  }
  /*--------------------------------------------------------------
  # General
  --------------------------------------------------------------*/
  body {
      font-family: "Open Sans", sans-serif;
      color: #444444;
  }

  a {
      text-decoration: none;
      color: #67d1b1;
  }

      a:hover {
          color: #8eddd4;
          text-decoration: none;
      }

  h1,
  h2,
  h3,
  h4,
  h5,
  h6 {
      font-family: "Raleway", sans-serif;
  }

  #main {
      margin-top: 90px;
  }



  /*--------------------------------------------------------------
  # Back to top button
  --------------------------------------------------------------*/
  .back-to-top {
      position: fixed;
      visibility: hidden;
      opacity: 0;
      right: 15px;
      bottom: 15px;
      z-index: 998;
      background: #67d1b1;
      width: 40px;
      height: 40px;
      border-radius: 50px;
      transition: all 0.4s;
  }

      .back-to-top i {
          font-size: 24px;
          color: #fff;
          line-height: 0;
      }

      .back-to-top:hover {
          background: #86dad7;
          color: #fff;
      }

      .back-to-top.active {
          visibility: visible;
          opacity: 1;
      }

  /*--------------------------------------------------------------
  # Disable aos animation delay on mobile devices
  --------------------------------------------------------------*/

  /*--------------------------------------------------------------
  # Header
  --------------------------------------------------------------*/
  #header {
      transition: all 0.5s;
      z-index: 997;
      transition: all 0.5s;
      padding: 24px 0;
      background: rgba(103, 209, 191, 0.8);
  }

      #header.header-transparent {
          background: transparent;
      }

      #header.header-scrolled {
          background: rgba(55, 181, 166, 0.9);
          padding: 12px;
      }

      #header .logo h1 {
          font-size: 24px;
          margin: 0;
          line-height: 1;
          font-weight: 700;
          letter-spacing: 1px;
          font-family: "Poppins", sans-serif;
          text-transform: uppercase;
      }

          #header .logo h1 a,
          #header .logo h1 a:hover {
              color: #fff;
              text-decoration: none;
          }

      #header .logo img {
          padding: 0;
          margin: 0;
          max-height: 40px;
      }


  /*--------------------------------------------------------------
  # Hero Section
  --------------------------------------------------------------*/
  #hero {
      width: 100%;
      height: 100vh;
      background: linear-gradient(rgba(55, 175, 181, 0.5), rgba(55, 175, 181, 0.2)), url("img/banner.jpg") top center;
      background-size: cover;
      position: relative;
      margin-bottom: -90px;
  }



      #hero .hero-container {
          position: absolute;
          bottom: 0;
          top: 0;
          left: 0;
          right: 0;
          display: flex;
          justify-content: center;
          align-items: center;
          flex-direction: column;
          text-align: center;
      }

      #hero h1 {
          margin: 0 0 10px 0;
          font-size: 64px;
          font-weight: 700;
          line-height: 56px;
          text-transform: uppercase;
          color: #fff;
          text-shadow: -1px 0 2px #2f5a52;
      }

      #hero h6 {
          color: #fff;
          margin-bottom: 50px;
          font-size: 24px;
          text-transform: uppercase;
          font-weight: 800;
          /*  text-shadow: -1px 0 2px #2f5a52;*/
      }

      #hero .btn-get-started {
          font-size: 36px;
          display: inline-block;
          padding: 4px 0;
          border-radius: 50px;
          transition: 0.3s ease-in-out;
          margin: 10px;
          width: 64px;
          height: 64px;
          text-align: center;
          border: 2px solid #fff;
          color: #fff;
      }

          #hero .btn-get-started:hover {
              padding-top: 8px;
              background: rgba(255, 255, 255, 0.15);
          }
</style>

<style>

  
    body {
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    /*--------------------------------------------------------------
    # Services
    --------------------------------------------------------------*/
    .services .icon-box {
        padding: 30px;
        position: relative;
        overflow: hidden;
        background: #fff;
        box-shadow: 0 0 29px 0 rgba(68, 88, 144, 0.12);
        transition: all 0.3s ease-in-out;
        border-radius: 8px;
        z-index: 1;
    }

        .services .icon-box::before {
            content: "";
            position: absolute;
            background: white;
            right: 0;
            left: 0;
            bottom: 0;
            top: 100%;
            transition: all 0.3s;
            z-index: -1;
        }

        .services .icon-box:hover::before {
            /*   background: #67d1b1;*/
            background: url('img/banner.jpg'); /* Replace with the path to your image */
            top: 0;
            border-radius: 0px;
        }

    .services .icon {
        margin-bottom: 15px;
    }

        .services .icon i {
            font-size: 48px;
            line-height: 1;
            color: #67d1b1;
            transition: all 0.3s ease-in-out;
        }

    .services .title {
        font-weight: 700;
        margin-bottom: 15px;
        font-size: 18px;
    }

        .services .title a {
            color: #111;
        }

    .services .description {
        font-size: 15px;
        line-height: 28px;
        margin-bottom: 0;
    }

    .services .icon-box:hover .title a,
    .services .icon-box:hover .description {
        color: #fff;
    }

    .services .icon-box:hover .icon i {
        color: #fff;
    }
    /*--------------------------------------------------------------
    # General
    --------------------------------------------------------------*/
    body {
        font-family: "Open Sans", sans-serif;
        color: #444444;
    }

    a {
        text-decoration: none;
        color: #67d1b1;
    }

        a:hover {
            color: #8eddd4;
            text-decoration: none;
        }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        font-family: "Raleway", sans-serif;
    }

    #main {
        margin-top: 90px;
    }



    /*--------------------------------------------------------------
    # Back to top button
    --------------------------------------------------------------*/
    .back-to-top {
        position: fixed;
        visibility: hidden;
        opacity: 0;
        right: 15px;
        bottom: 15px;
        z-index: 998;
        background: #67d1b1;
        width: 40px;
        height: 40px;
        border-radius: 50px;
        transition: all 0.4s;
    }

        .back-to-top i {
            font-size: 24px;
            color: #fff;
            line-height: 0;
        }

        .back-to-top:hover {
            background: #86dad7;
            color: #fff;
        }

        .back-to-top.active {
            visibility: visible;
            opacity: 1;
        }

    /*--------------------------------------------------------------
    # Disable aos animation delay on mobile devices
    --------------------------------------------------------------*/

    /*--------------------------------------------------------------
    # Header
    --------------------------------------------------------------*/
    #header {
        transition: all 0.5s;
        z-index: 997;
        transition: all 0.5s;
        padding: 24px 0;
        background: rgba(103, 209, 191, 0.8);
    }

        #header.header-transparent {
            background: transparent;
        }

        #header.header-scrolled {
            background: rgba(55, 181, 166, 0.9);
            padding: 12px;
        }

        #header .logo h1 {
            font-size: 24px;
            margin: 0;
            line-height: 1;
            font-weight: 700;
            letter-spacing: 1px;
            font-family: "Poppins", sans-serif;
            text-transform: uppercase;
        }

            #header .logo h1 a,
            #header .logo h1 a:hover {
                color: #fff;
                text-decoration: none;
            }

        #header .logo img {
            padding: 0;
            margin: 0;
            max-height: 40px;
        }


    /*--------------------------------------------------------------
    # Hero Section
    --------------------------------------------------------------*/
    #hero {
        width: 100%;
        height: 100vh;
        background: linear-gradient(rgba(55, 175, 181, 0.5), rgba(55, 175, 181, 0.2)), url("img/banner.jpg") top center;
        background-size: cover;
        position: relative;
        margin-bottom: -90px;
    }



        #hero .hero-container {
            position: absolute;
            bottom: 0;
            top: 0;
            left: 0;
            right: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            text-align: center;
        }

        #hero h1 {
            margin: 0 0 10px 0;
            font-size: 64px;
            font-weight: 700;
            line-height: 56px;
            text-transform: uppercase;
            color: #fff;
            text-shadow: -1px 0 2px #2f5a52;
        }

        #hero h6 {
            color: #fff;
            margin-bottom: 50px;
            font-size: 24px;
            text-transform: uppercase;
            font-weight: 800;
            /*  text-shadow: -1px 0 2px #2f5a52;*/
        }

        #hero .btn-get-started {
            font-size: 36px;
            display: inline-block;
            padding: 4px 0;
            border-radius: 50px;
            transition: 0.3s ease-in-out;
            margin: 10px;
            width: 64px;
            height: 64px;
            text-align: center;
            border: 2px solid #fff;
            color: #fff;
        }

            #hero .btn-get-started:hover {
                padding-top: 8px;
                background: rgba(255, 255, 255, 0.15);
            }
</style>

<!-- Add the necessary CSS and JavaScript to initialize the Swiper -->
<style>
.team-slider {
  width: 100%;
}

  .team-slider .swiper-slide {
      width: 100%;
      margin-right: 0;
  }

  .team-slider .swiper-pagination {
      margin-top: 15px;
  }
</style>

<style>
    /* Add custom styles for hover effect */
    .navbar-nav .nav-link:hover {
        background-color: #c4fcff;
        border-radius: 10px; /* 设置圆角 */
        color:  rgba(0, 65, 68, 0.8); /* 设置悬停时的底色 */ /* Change the color on hover */
    }

    /* Adjust the color for the active link */
    .navbar-nav .nav-link.active {
        background-color: #c4fcff; /* 设置悬停时的底色 */ /* 设置激活时的底色 */
        border-radius: 10px; /* 设置圆角 */

        color: rgba(0, 65, 68, 0.8); /* Change the active link color */
    }

    /* Custom styles to make the navbar transparent */
    .navbar-custom {
        background-color: transparent !important;
        box-shadow: none !important;
    }

   /* 新增样式用于隐藏菜单 */
    .navbar-collapse.collapsing {
        display: none;
    }

    /* 移除navbar-brand链接的hover效果 */
    .navbar-brand:hover {
        border-radius: 10px; /* 设置圆角 */
        color:#fff; /* 设置悬停时的底色 */ /* Change the color on hover */
        font-size: 1.2em; /* 放大字体，可以根据需要调整数值 */
    }
    /* 自定义hover效果 */
    .custom-hover:hover {
        /* 添加你想要的hover样式，例如改变背景颜色 */
        background-color: #fff;
        border-radius: 10px; /* 设置圆角 */
        color: rgba(0, 65, 68, 0.8); /* 设置悬停时的底色 */ /* Change the color on hover */
    }

    /* 设置搜索框边框为圆角 */
    .d-flex {
        border-radius: 20px;
    }


    
</style>
 
 <section id="contact" class="contact section-bg">
     <div class="container" data-aos="fade-up">

         <div class="section-title">
             <h2>Contact</h2>
             <p>Feel free to fill out the form and get in touch with me. </p>
             <!-- <p>歡迎填寫表單與我連繫。</p> -->
         </div>
     </div>

     <div class="row">

         <div class="col-lg-6 ">
             <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3683.022052252119!2d120.30707897530172!3d22.615651679461145!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x346e049d37d417db%3A0xcb326ebd62641fea!2z6auY6ZuE5biC5LiJ5aSa5LiJ6Lev!5e0!3m2!1szh-TW!2stw!4v1695488292272!5m2!1szh-TW!2stw" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
         </div>

         <div class="col-lg-6">
             <form class="php-email-form" method="post" name="contact-form">
                 <div class="row">
                     <div class="col-md-6 form-group">
                         <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                     </div>
                     <div class="col-md-6 form-group mt-3 mt-md-0">
                         <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                     </div>
                 </div>
                 <div class="form-group mt-3">
                     <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                 </div>
                 <div class="form-group mt-3">
                     <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                 </div>

                 <div class="text-center"><button type="submit">Send Message</button></div>
             </form>
         </div>

     </div>

 </section>
 <!-- ======= Footer ======= -->
 <footer id="footer">
     <div class="footer-top">
         <div class="container">
             <div class="row">

                 <div class="col-lg-4 col-md-6">
                     <div class="footer-info">
                         <h3>Get in Touch</h3>
                         <p class="pb-3"><em>Feel free to reach out and connect with me.</em></p>
                         <p>
                             <br>
                             Kaohsiung, Taiwan<br><br>
                             <strong>Phone:</strong> +886 980 016 674<br>
                             <strong>Email:</strong> kikibird1017@gmail.com<br>
                         </p>
                         <!-- <div class="social-links mt-3">
                            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bi bi-instagram"></i> </a>
                            <a href="#" class="google-plus"><i class="bi bi-skype"></i> </a>
                            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i> </a>
                        </div> -->
                     </div>
                 </div>

                 <div class="col-lg-3 col-6 footer-links">
                     <h4>Website Map</h4>
                     <ul>
                         <li><i class="bx bx-chevron-right"></i> <a href="index.html">Home</a></li>
                         <li><i class="bx bx-chevron-right"></i> <a href="index.html#about">About me</a></li>
                         <li><i class="bx bx-chevron-right"></i> <a href="index.html#portfolio">Works</a></li>
                         <li><i class="bx bx-chevron-right"></i> <a href="index.html#cta">Expertise</a></li>
                         <li><i class="bx bx-chevron-right"></i> <a href="index.html#team">Work Experience</a></li>
                         <li><i class="bx bx-chevron-right"></i> <a href="index.html">Privacy policy</a></li>
                     </ul>
                 </div>



                 <div class="col-lg-3 col-6 footer-newsletter">
                     <h4>Web QRCode</h4>
                     <img src="img/網站首頁.png" alt="QR Code Image" width="150" >

                 </div>

             </div>
         </div>
     </div>

     <div class="container" style="color: rgba(0, 0, 0, 0.2);">
         <div class="copyright" style="color: rgba(0, 0, 0, 0.2);">
             &copy; Copyright <span id="currentYear"></span><strong><span>ZoePortfolio2024</span></strong>. All Rights Reserved
         </div>
         <div class="credits" style="color: rgba(0, 0, 0, 0.2);">
             Designed by <a style="color: rgba(0, 0, 0, 0.2);" href="https://pseprkxa8clpburmzcov9a.on.drv.tw/ZoeDesign.com/ ">Zoehsueh</a>
         </div>
     </div>

 </footer><!-- End Footer -->
 </body>