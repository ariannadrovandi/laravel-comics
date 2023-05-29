<footer>
    <div class="container h-100 d-flex justify-content-between">
     <div class="text-white h-100 w-50 gy-3 d-flex flex-column flex-wrap">
        @foreach (config('partials.footerlinks') as $link )
         <ul class="py-1 small list-unstyled mb-0">
             <li class="fw-bold pb-1 fs-6">{{ $link['title'] }} </li>
             @foreach ($link['topics'] as $topic)
             <li><a class="text-white text-decoration-none" href="#">{{ $topic }}</a></li>
             @endforeach
         </ul>
         @endforeach
     </div>
     <div class="w-25"><img src="/images/dc-logo-bg.png" alt="logo"></div>
    </div>
 </footer>
 <div class="bg-dark">
    <div class="container d-flex justify-content-between align-items-center py-2">
        <button class="btn border border-primary rounded-0 text-white text-uppercase">Sign-Up Now!</button>
        <ul class="d-flex m-0 align-items-center list-unstyled">
            <li class="text-primary text-uppercase pe-3">Follow Us</li>
            <li class="pe-3"><a href="#"><img src="/images/footer-facebook.png" alt="#"></a></li>
            <li class="pe-3"><a href="#"><img src="/images/footer-twitter.png" alt="#"></a></li>
            <li class="pe-3"><a href="#"><img src="/images/footer-youtube.png" alt="#"></a></li>
            <li class="pe-3"><a href="#"><img src="/images/footer-pinterest.png" alt="#"></a></li>
            <li class="pe-3"><a href="#"><img src="/images/footer-periscope.png" alt="#"></a></li>
        </ul>
    </div>
</div>
