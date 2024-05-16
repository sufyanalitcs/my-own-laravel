 <header class="p-3 ">
     <div class="container">
         <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
             <div class="col-2">
                 <a href="{{ route('home') }}" class="mb-2 mb-lg-0 text-white text-decoration-none">
                     <img src="{{ asset('public/front/images/logo.png') }}" alt="" width="100" height="80" srcset="">
                 </a>
             </div>
             <div class="col-10 row">
                 <div class="col-8 text-end">
                     <!-- Button trigger modal -->
                     <button type="button" class="btn btn-outline-light me-2" data-bs-toggle="modal"
                         data-bs-target="#loginModal">
                         Login
                     </button>
                     <!-- Button trigger modal -->
                     <button type="button" class="btn btn-warning me-2" data-bs-toggle="modal"
                         data-bs-target="#signupModal">
                         Sign-up
                     </button>

                 </div>
                 <div class="col-4">
                     <ul class="nav">
                         <li>
                             <select class="nav-link px-2 text-secondary language-select" data-width="fit">
                                 <option value="US">US</option>
                                 <option value="UK">UK</option>
                             </select>
                         </li>
                         <li><a href="seller-account.html" class="nav-link px-2 text-white">Seller Account</a></li>

                     </ul>
                 </div>
             </div>
         </div>
     </div>
 </header>
