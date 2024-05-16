 <footer class="p-2">

     <div class="footer-content mt-4 p-4 container">
         <div class="row ">
             <div class="col-lg-4 col-md-6 my-3">
                 <div class="logo-div">
                     <img src="{{ asset('public/front/images/footer-logo.png') }}" alt="" srcset="">
                 </div>
                 <p class="text-white w-75">Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam
                     nihil molestiae
                     consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>
                 <div class="row text-white foot-icon">
                     <div class="col-1">
                         <a class="icon-box">
                             <i class="fa-brands fa-facebook"></i>
                         </a>
                     </div>
                     <div class="col-1">
                         <a class="icon-box">
                             <i class="fa-brands fa-x-twitter"></i>
                         </a>
                     </div>
                     <div class="col-1">
                         <a class="icon-box">
                             <i class="fa-brands fa-vimeo-v"></i>
                         </a>
                     </div>
                     <div class="col-1">
                         <a class="icon-box">
                             <i class="fa-brands fa-pinterest"></i>
                         </a>
                     </div>
                 </div>
             </div>
             <div class="col-lg-4 col-md-6 my-3">
                 <div class="h-2 text-white">
                     <div class="mt-4">
                         <h3>QUICK LINKS</h3>
                     </div>

                     <div class="row link-container">
                         <div class="col-6">
                             <div class="link my-2"><a href="#">Home</a></div>
                             <div class="link my-2"><a href="#">About Us</a></div>
                             <div class="link my-2"><a href="#">VACATION HOMES</a></div>
                             <div class="link my-2"><a href="#">Availability & Booking</a></div>
                             <div class="link my-2"><a href="#">Property Management</a></div>
                         </div>
                         <div class="col-6">
                             <div class="link my-2"><a href="#">Area info</a></div>
                             <div class="link my-2"><a href="#">Reviews</a></div>
                             <div class="link my-2"><a href="#">Our Blog</a></div>
                             <div class="link my-2"><a href="#">Contact us</a></div>
                             <div class="link my-2"><a href="#">Privacy Policy</a></div>
                         </div>
                     </div>
                 </div>

             </div>
             <div class="col-lg-4 col-md-6 my-3 text-white d-flex align-self-center flex-column">
                 <div class="h-2">
                     <div class="h-3">
                         <h3>OUR NEWSLETTER</h3>
                     </div>
                 </div>
                 <p class="w-75">To stay up-to-date on our promotions, discounts, sales, special offers and more</p>
                 <div class="news-container">
                     <form id="newsletterForm" method="POST" action="{{ route('subscribe.newsletter') }}">
                         @csrf
                         <div class="searchbox-wrap">
                             <input type="email" required name="newsletterEmail" id="newsletterEmail" placeholder=" Enter Your Email">
                             <button><span>Subscribe</span> </button>
                         </div>
                        
                         <div class="newsletter-error text-center pt-1 ">
                         </div>

                     </form>
                 </div>
             </div>
         </div>
     </div>
     <div class="mt-2 text-white text-center" id="footer">
         <p><a href="">@softclusive</a> ,All Right Reserved 2024</p>
     </div>

 </footer>
