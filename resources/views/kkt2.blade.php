@extends('layouts.kkt')
<!--where we use top headers same as home page-->

@section('content')
<div class="content">
        <div class="gray_block">
          <div class="container title_line">
            <h2>ABOUT US</h2>
            <div class="subtitle">
              <p>You build great company. People is the most important asset in the company. Why are we treating people like 40 years ago?</p>
              <p>The most important HR work in the company -- (1) keep your great people engaged and motivated; (2) help everyone to perform better. Both of them takes a lot of time - have you done enough of them? Oh Leave, Payroll all these paperwork took all your time? Now, Let Kakitangan.com helps you. Let's make it smoother and we can dedicate your previous time in the real important HR work.</p>
              <p>You build great company. Kakitangan.com is honored to participate in your journey in building your great company.</p>
				    </div>
          </div>
        </div>
        <div class="container experts_wrap">
          <h3 class="text-center">OUR EXPERTS</h3>
          <ul class="person_list clearfix">
            <li class="person_item" style="background-image: url(/static/lp/img/person01.jpg);">
              <div class="person_title">RYAN WONG</div>
              <div class="person_position">
                Benefits Experts
              </div>
              <div class="person_experience">
                10 years experience
              </div>
              <i class="icon icon_arrow_up"></i>
              <div class="hovered_text">
                "I put together the best benefit plans for your employees."
              </div>
            </li>
            <li class="person_item" style="background-image:  url(/static/lp/img/person02.jpg);">
              <div class="person_title">NIZAM SHARI</div>
              <div class="person_position">
                HR Experts
              </div>
              <div class="person_experience">
                20 years experience
              </div>
              <i class="icon icon_arrow_up"></i>
              <div class="hovered_text">
                "The people make the company;<br> I make Kakitangan.com's people operations the best of its class, so the best people stay with you."
              </div>
            </li>
            <li class="person_item" style="background-image: url(/static/lp/img/person03.jpg);">
              <div class="person_title">MYROSLAV GALAVAI</div>
              <div class="person_position">
                UX Designer
              </div>
              <div class="person_experience">
                8 years experience
              </div>
              <i class="icon icon_arrow_up"></i>
              <div class="hovered_text">
                "I'm all about the craftmanship that makes every interaction on Kakitangan.com simple, graceful and productive."
              </div>
            </li>
          </ul>
        </div>

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

@endsection