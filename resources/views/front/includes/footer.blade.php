 <section class="footer-section">
     <div class="container">
         <div class="d-flex align-items-center flex-column">
             <div class="footer-logo">
                 <img src="{{ asset('front/images/footer-logo.png') }}" alt="logo" srcset="">
             </div>
             <div class="row w-50">
                 <div class="col-6 text-end">
                     <div class="store-img">
                         <img src="{{ asset('front/images/google-play.png') }}" alt="" srcset="">
                     </div>
                 </div>
                 <div class="col-6">
                     <div class="store-img">
                         <img src="{{ asset('front/images/app-store.png') }}" alt="" srcset="">
                     </div>
                 </div>
             </div>
             <div class="footer-nav">
                 <ul class="nav">
                     <li>
                         <a class="nav-link text-white" href="{{ route('about-us') }}">About Us</a>
                     </li>
                     <li>
                         <a class="nav-link text-white" href="{{ route('faq') }}">FAQ</a>
                     </li>
                     <li>
                         <a class="nav-link text-white" href="{{ route('privacy') }}">Privacy Policy</a>
                     </li>
                     <li>
                         <a class="nav-link text-white" href="{{ route('terms') }}">Terms of Service</a>
                     </li>
                     <li>
                         <a class="nav-link text-white" href="#">Blog</a>
                     </li>
                     <li>
                         <a class="nav-link text-white" href="#">Careers</a>
                     </li>
                     <li>
                         <a class="nav-link text-white" href="{{ route('contact') }}">Contact</a>
                     </li>
                 </ul>
             </div>
         </div>
     </div>
     <hr style="border-top: 2px solid #fff; opacity: 1;">
     <br>
     <div class="container">
         <div class="row">
             <div class="col-md-6 col-12">
                 <div class="social-nav nav">
                     <div class="nav-link ">
                         <a href="#"><i class="fa-brands text-white fa-square-facebook"></i></a>
                     </div>
                     <div class="nav-link ">
                         <a href="#"><i class="fa-brands text-white fa-instagram"></i></a>
                     </div>
                     <div class="nav-link ">
                         <a href="#">
                             <i class="fa-brands text-white fa-twitter"></i>
                         </a>
                     </div>
                     <div class="nav-link ">
                         <a href="#">
                             <i class="fa-brands text-white fa-tiktok"></i>
                         </a>
                     </div>
                 </div>
             </div>
             <div class="col-md-6 col-12">
                 <p class="text-white text-end">
                     <a class="text-white" href="https://www.softclusive.com/">
                         Softclusive</a>, All Right Reserved 2024
                 </p>
             </div>
             <br>
         </div>
     </div>
 </section>
