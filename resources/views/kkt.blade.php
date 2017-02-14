@extends('layouts.kkt')
<!--where we use top headers same as home page-->

@section('content')
<div class="content">
                <div class="head">
                    <div class="head_bg" style="background-image: url(/static/lp/img/head01.jpg);"></div>
                    <div class="container container_table">
                        <div class="head_content">
                            <h2>
                                Manage your people,<br> all in one place.
                            </h2>
                            <div class="subtitle">
                                We simplify HR by providing you with one platform to manage<br> your payroll, benefits, employee information and much more.
                            </div>
                            <a href="signup.html" class="btn btn_default btn_signup">SIGN UP FOR FREE</a>
                        </div>
                    </div>
                    <div class="slide_block active">
                        <a href="#" class="slide_btn">PROMOTIONS
                            <span class="slide_icon"></span>
                        </a>
                        <div class="slide_block_text">
                            To all <strong>Maybank2u business</strong> customers, enjoy your Kakitangan.com Payroll system by filling up <a class="typeform-share link" href="https://myrokakitangan.typeform.com/to/ifntk0" data-mode="2" target="_blank">THIS FORM</a> when you sign up, and  enjoy a special price.
                        </div>
                        <script>
                         (function()
                             {
                                 var qs, js, q, s, d = document,
                                     gi = d.getElementById,
                                     ce = d.createElement,
                                     gt = d.getElementsByTagName,
                                     id = 'typef_orm',
                                     b = 'https://s3-eu-west-1.amazonaws.com/share.typeform.com/';
                                 if (!gi.call(d, id))
                                     {
                                         js = ce.call(d, 'script');
                                         js.id = id;
                                         js.src = b + 'share.js';
                                         q = gt.call(d, 'script')[0];
                                         q.parentNode.insertBefore(js, q)
                                     }
                             })()
                        </script>
                        <div class="slide_block_img">
                            <img src="/static/lp/img/maybank.svg" alt="">
                        </div>
                    </div>
                </div>
                <div class="info_block">
                    <div class="container">
                        <h3>MAKE YOUR PEOPLE HAPPY<br> WITH KAKITANGAN.COM</h3>
                        <hr class="divide">
                        <div class="help_text_sm">
                            HR made simple - all your people, platforms and payrolls in one place.
                        </div>
                        <ul class="list_block clearfix">
                            <li class="list_block_item">
                                <i class="icon icon_phone"></i>
                                <div>Get rid of paper clutter at your workplace</div>
                            </li>
                            <li class="list_block_item">
                                <i class="icon icon_clock"></i>
                                <div>Cut down on long processes</div>
                            </li>
                            <li class="list_block_item">
                                <i class="icon icon_bank"></i>
                                <div>Bank level security system</div>
                            </li>
                            <li class="list_block_item">
                                <i class="icon icon_hand"></i>
                                <div>Approve leaves at your fingertips</div>
                            </li>
                            <li class="list_block_item">
                                <i class="icon icon_lock"></i>
                                <div>PDPA &amp; LHDN compliant</div>
                            </li>
                        </ul>
                        <a href="signup.html" class="btn btn_default btn_signup">SIGN UP FOR FREE</a>
                    </div>
                </div>
                <div class="half_gradient">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-sm-12 half_block left">
                                <h3>FREE HR SYSTEM</h3>
                                <div class="help_text_md">
                                    No fees or hidden charges, ever.
                                </div>
                                <hr class="divide">
                                <ul class="simple_list">
                                    <li class="simple_list_item">Leave application system</li>
                                    <li class="simple_list_item">Birthday reminders</li>
                                    <li class="simple_list_item">Employee HR Database</li>
                                </ul>
                                <div class="range_wrap hr_range clearfix">
                                    <div class="range_slider">
                                        <div class="range_slider_tip">
                                            <div class="inner">
                                                <span class="users_count"></span>
                                                people
                                            </div>
                                        </div>
                                        <div id="hr_range"></div>
                                        <div class="range_value_wrap">
                                            <span class="range_value_text visible-xs">company size</span>
                                            <span class="range_value range_value_lt">1</span>
                                            <span class="range_value range_value_rt">1,000</span>
                                        </div>
                                    </div>
                                    <div class="range_details">
                                        <div class="range_details_title">TOTAL</div>
                                        <div class="range_details_value">
                                            <div class="value_mark">RM</div>0</div>
                                    </div>
                                </div>
                                <div class="block_bot">
                                    <a href="signup.html" class="btn btn_default btn_signup">SIGN UP FOR FREE</a>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 half_block right">
                                <h3>Premium PAYROLL System</h3>
                                <div class="help_text_md new_pricing">
                                    New, simplified pricing
                                </div>
                                <hr class="divide">
                                <ul class="simple_list">
                                    <li class="simple_list_item">Leave Application System</li>
                                    <li class="simple_list_item">Birthday reminders</li>
                                    <li class="simple_list_item">Employee HR Database</li>
                                    <li class="simple_list_item">
                                        <span>Auto calculation of EPF/SOCSO/LHDN/netpay</span>
                                    </li>
                                    <li class="simple_list_item">
                                        <span>Integration with EPF/LHDN/banks</span>
                                    </li>
                                    <li class="simple_list_item">
                                        <span>One-click e-payslip issuance</span>
                                    </li>
                                    <li class="simple_list_item">
                                        <span>EA/E form</span>
                                    </li>
                                </ul>

                                <div class="range_wrap payroll_range clearfix">
    <div class="monthly_or_yearly_plan text-center">
        <div class="btn-group" data-toggle="buttons">
            <label class="btn btn-default active">
                <input type="radio" name="plan_choice" value="monthly" autocomplete="off" checked>
                Monthly
            </label>
            <label class="btn btn-default">
                <input type="radio" name="plan_choice" value="yearly" autocomplete="off">
                Yearly
            </label>
        </div>
        <p class="yearly_plan hidden">
            One-time payment per year; more payment each month for headcount add-on.
        </p>
    </div>
    <div class="range_slider">
        <div class="range_slider_tip payroll">
            <div class="inner">
                <span class="users_count"></span>
                people <br> RM
                <span class="rm_counter">300</span>/<span class="plan_interval">mo</span>
            </div>
        </div>
        <div id="payroll_range"></div>
        <div class="range_value_wrap">
            <span class="range_value_text visible-xs">company size</span>
            <span class="range_value range_value_lt">1</span>
            <span class="range_value range_value_rt">101+</span>
        </div>
    </div>
    <div class="range_details">
        <div class="range_details_title">TOTAL</div>
        <div class="range_details_value">
            <div class="value_mark">RM</div><span class="total_amount">0</span>
        </div>
    </div>
</div>


                                <div class="block_bot">
                                    <a href="signup.html" class="btn btn_default btn_signup">SIGN UP TODAY</a>
                                    <div class="help_text">
                                        WITH 1-MONTH TRIAL
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="info_line">
                    <div class="info_line_bg"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-offset-1 col-md-10">
                                <div class="row">
                                    <div class="col-sm-4 info_line_item">
                                        UPGRADED
                                        <div class="info_item_value counter">3,600</div> COMPANIES
                                    </div>
                                    <div class="col-sm-4 info_line_item">MOTIVATED
                                        <div class="info_item_value counter">16,000</div> EMPLOYEES</div>
                                        <div class="col-sm-4 info_line_item">SAVED
                                            <div class="info_item_value counter">120,000</div> HOURS</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container text_img_block">
                    <div class="text_img_content">
                        <h2 class="semibold">
                            Whatever you need, we’re here to help
                        </h2>
                        <div class="subtitle">
                            Whether you're having trouble with our system or thought of a feature that would benefit everyone, we're only a message away.
                        </div>
                        <a href="mailto:support@kakitangan.com" class="btn btn_primary">MESSAGE US</a>
                    </div>
                </div>
                <div class="gray_block">
                    <div class="container">
                        <h3 class="text-center">Here's who we've helped</h3>
                        <div class="carousel_wrap main_carousel_wrap">
                            <div id="owl-example" class="owl-carousel carousel_styled main_carousel">
                                <div class="carousel_item_content">
                                    <div class="carousel_item_top">
                                        <div class="carousel_item_title">Wee Kiat</div>
                                        <div class="carousel_item_img"><img src="/static/lp/img/testimonials/logo/myburgerlab_logo.png" alt="myBurgerLab"></div>
                                        <div class="carousel_item_ava"><img src="/static/lp/img/testimonials/weekiat.png" alt=""></div>
                                    </div>
                                    <div class="carousel_item_body">
                                        We have been using <a href="landing/index" class="link">Kakitangan.com</a> for a month now and
                                        <strong>we love it.</strong>
                                        When we first launched myBurgerLab, we found the available software for SMEs was expensive and not suited to our needs. Kakitangan.com is not only
                                        <strong>affordable,</strong> it’s
                                        <strong>so easy</strong>
                                        to use and will change the HR system landscape for SMEs in Malaysia!
                                    </div>
                                    <div class="carousel_item_bot"><img src="/static/lp/img/signature.png" alt=""></div>
                                </div>
                                <div class="carousel_item_content">
                                    <div class="carousel_item_top">
                                        <div class="carousel_item_title">Zoe</div>
                                        <div class="carousel_item_img"><img src="/static/lp/img/testimonials/logo/Biji-Biji.jpg" alt="Biji-Biji"></div>
                                        <div class="carousel_item_ava"><img src="/static/lp/img/testimonials/zoe.png" alt=""></div>
                                    </div>
                                    <div class="carousel_item_body">
                                        Kakitangan has provided a real solution for our organisation. As our team grows, having a
                                        <strong>one-stop platform</strong>
                                        is absolutely wonderful. As the platform is still new, any hiccups are instantly attended to by Kakitangan.com’s
                                        <strong>super helpful</strong> and
                                        <strong>friendly</strong> team. They are
                                        <strong>quick to respond to enquiries</strong>, and
                                        <strong>open to feedback</strong>. This kind of commitment to customer service is rare!
                                    </div>
                                </div>
                                <div class="carousel_item_content">
                                    <div class="carousel_item_top">
                                        <div class="carousel_item_title">Nadhir</div>
                                        <div class="carousel_item_img"><img src="/static/lp/img/testimonials/logo/thelorrylogo.png" alt=""></div>
                                        <div class="carousel_item_ava"><img src="/static/lp/img/testimonials/nadhir.png" alt=""></div>
                                    </div>
                                    <div class="carousel_item_body">
                                        I am a strong advocate of
                                        <strong>data security</strong>, especially when it comes to HR systems. After evaluating Kakitangan.com’s platform, data protection practices, encryption technologies, as well as their PDPA policies and audit, Kakitangan.com in my opinion is the
                                        <strong>most secure HR system available in the market</strong>.
                                    </div>
                                </div>
                                <div class="carousel_item_content">
                                    <div class="carousel_item_top">
                                        <div class="carousel_item_title">Ida</div>
                                        <div class="carousel_item_img"><img src="/static/lp/img/testimonials/logo/ida-logo.png" alt=""></div>
                                        <div class="carousel_item_ava"><img src="/static/lp/img/testimonials/ida.png" alt=""></div>
                                    </div>
                                    <div class="carousel_item_body">
                                        Since implementing Kakitangan.com, we have received
                                        <strong>lots of positive feedback from our staff</strong>. We find the platform
                                        <strong>simple, clear, and easy-to-use, and beautifully designed</strong>. With Kakitangan.com, we can cut down on tedious admin work, saving precious time and effort!
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container logos_wrap">
                    <h3 class="text-center">AS SEEN ON</h3>
                    <ul class="img_list clearfix">
                        <li class="img_list_item">
                            <a><img src="/static/lp/img/logos/sinchew.png" alt="sinchew"></a>
                        </li>
                        <li class="img_list_item">
                            <a><img src="/static/lp/img/logos/alliance.png" alt="alliance-bank"></a>
                        </li>
                        <li class="img_list_item">
                            <a><img src="/static/lp/img/logos/vulcan-post-logo.png" alt="vulcan-post"></a>
                        </li>
                        <li class="img_list_item">
                            <a><img src="/static/lp/img/logos/bfm.png" alt="bfm"></a>
                        </li>
                        <li class="img_list_item">
                            <a><img src="/static/lp/img/logos/china-press.png" alt="china-press"></a>
                        </li>
                        <li class="img_list_item">
                            <a><img src="/static/lp/img/logos/eNanyang_logo.png" alt="nanyang"></a>>
                        </li>
                    </ul>
                </div>
                <div class="gray_block">
                    <div class="container awards_wrap">
                        <h3 class="text-center">
                            OUR AWARDS
                        </h3>
                        <div class="carousel_wrap">
                            <div id="owl-example2" class="owl-carousel carousel_styled simple_carousel">
                                <div class="simple_carousel_item_content">
                                    <div class="simple_carousel_item_img">
                                        <img src="/static/lp/img/alliance-bank-innovation.png" alt="alliance-bank">
                                    </div>
                                    <div class="simple_carousel_item_text">
                                        Finalist – Alliance Bank SME Innovation Challenge 2015, Visa Award 2015
                                    </div>
                                </div>
                                <div class="simple_carousel_item_content">
                                    <div class="simple_carousel_item_img">
                                        <img src="/static/lp/img/maybank.png" alt="maybank">
                                    </div>
                                    <div class="simple_carousel_item_text">
                                        Finalist – Maybank Fintech 2016
                                    </div>
                                </div>
                                <div class="simple_carousel_item_content">
                                    <div class="simple_carousel_item_img">
                                        <img src="/static/lp/img/cradle.png" alt="Cradle">
                                    </div>
                                    <div class="simple_carousel_item_text">
                                        Cradle Investment Programme 150
                                    </div>
                                </div>
                                <div class="simple_carousel_item_content">
                                    <div class="simple_carousel_item_img">
                                        <img src="/static/lp/img/magic.png" alt="">
                                    </div>
                                    <div class="simple_carousel_item_text">
                                        MAGIC Cohort 2 ASEAN Accelerator Track
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

@endsection