 <!-- Footer -->
    <footer class="bg-[#0d0c38] text-white text-sm">
        <!-- Subscribe Section -->
        <div
            class="border-b border-white/20 px-4 md:px-14 py-6 flex flex-col md:flex-row items-center justify-between gap-4 mx-auto">
            <p class="uppercase font-semibold text-xl">Subscribe</p>
            <p class="text-gray-300">
                Enter your email to receive relevant messages..
            </p>
            <div class="flex w-full md:w-auto">
                <input type="email" placeholder="EMAIL"
                    class="px-4 py-2 w-full md:w-64 bg-transparent border border-white text-white placeholder-white outline-none" />
                <button class="bg-orange-500 hover:bg-orange-600 px-5 py-2 text-white font-semibold">
                    SUBSCRIBE
                </button>
            </div>
        </div>

        <!-- Main Footer -->
<div class="w-full bg-white text-black py-10">
  <div class="mx-auto flex flex-col lg:flex-row justify-between items-start px-4 md:px-14 gap-10">
    
    <!-- Logo & Description (wider on desktop ~30%) -->
    <!--{{ asset('uploads/settings/' . $setting->favicon_path) }}-->
    <div class="w-full lg:w-[40%]">
     <a href="{{route('home')}}"><img src="{{ asset('uploads/settings/' . $setting->logo_path) }}" alt="Pyare Foundation" class="h-10 mb-4" /></a> 
      <p class="text-sm leading-relaxed text-justify">
        Pyare Foundation is a multi-dimensional group in the sector of
        human service and knowledge concern to represent and present
        skills, methods, procedure and approach that are primarily tailor
        made to fill the gaps of realignment delinquency...
      </p>
    </div>

    <!-- Links Section -->
    <div class="flex flex-wrap justify-between gap-12 w-full lg:w-[70%]">
      
      <!-- Important Links -->
      <div>
        <h4 class="text-[#0d0c38] font-bold mb-4">IMPORTANT LINKS</h4>
        <ul class="space-y-2">
          <li><a href="{{route('about-organization')}}" class="hover:text-orange-600">About Us</a></li>
          <li><a href="{{route('donation-page')}}" class="hover:text-orange-600">Donate Now</a></li>
          <li><a href="{{route('volunteer-member')}}" class="hover:text-orange-600">Become Volunteer</a></li>
          <li><a href="{{route('annual-member')}}" class="hover:text-orange-600">Become Member</a></li>
          <li><a href="{{route('annual-report')}}" class="hover:text-orange-600">Annual Reports</a></li>
          <li><a href="{{route('gallery-page')}}" class="hover:text-orange-600">Gallery</a></li>
        </ul>
      </div>

      <!-- Follow Us -->
      <!--<div class="pr-4 md:pr-0">-->
      <!--  <h4 class="text-[#0d0c38] font-bold mb-4">FOLLOW US</h4>-->
      <!--  <ul class="space-y-2">-->
      <!--    <li><a href="#" class="hover:text-orange-600">Instagram</a></li>-->
      <!--    <li><a href="#" class="hover:text-orange-600">Facebook</a></li>-->
      <!--    <li><a href="#" class="hover:text-orange-600">YouTube</a></li>-->
      <!--    <li><a href="#" class="hover:text-orange-600">LinkedIn</a></li>-->
      <!--    <li><a href="#" class="hover:text-orange-600">WhatsApp</a></li>-->
      <!--  </ul>-->
      <!--</div>-->
      
      <!-- Follow Us -->
      <div class="pr-4 md:pr-0">
        <h4 class="text-[#0d0c38] font-bold mb-4">POLICIES</h4>
        <ul class="space-y-2">
          <li><a href="{{route('privacy-policy')}}" class="hover:text-orange-600">Privacy Policy</a></li>
          <li><a href="{{route('term-condition')}}" class="hover:text-orange-600">Terms & Conditions</a></li>
          <li><a href="{{route('shipping-policy')}}" class="hover:text-orange-600">Shipping Policy</a></li>
          <li><a href="{{route('cancellations-refunds')}}" class="hover:text-orange-600">Cancellations & Refunds</a></li>
          
        </ul>
      </div>

      <!-- Contact Details -->
      <div class="space-y-2">
        <h4 class="text-[#0d0c38] font-bold mb-4">CONTACT DETAILS</h4>
        <p><strong>Address:</strong> 370-D, J&K Pocket Dilshad Garden, Delhi – 110095</p>
        <p><strong>Mobile:</strong> +91-9811409367</p>
        <p><strong>Email:</strong> info@pyarefoundation.org, pyarefdn@gmail.com</p>
      </div>
    </div>
  </div>
</div>

<!-- Copyright -->
<div class="border-t border-white/20 py-4 px-4 flex flex-col md:flex-row justify-between items-center text-sm max-w-screen-xl mx-14">
  <p>Copyright © 2025 Pyare Foundation</p>
  <div class="flex gap-4 mt-2 md:mt-0">
    <a href="https://www.instagram.com/anjalipyarefound/" target="_blank"><img src="{{ asset('uploads/images/icon/instagram.png') }}" alt="Instagram" class="h-4 w-4" /></a>
    <a href="https://www.facebook.com/Pyarefoundation/" target="_blank"><img src="{{ asset('uploads/images/icon/facebook.png') }}" alt="Facebook" class="h-4 w-4" /></a>
    <a href="https://www.youtube.com/channel/UC-wbMX7tBO74dF_votB0QEg" target="_blank"><img src="{{ asset('uploads/images/icon/youtube.png') }}" alt="YouTube" class="h-4 w-4" /></a>
    <!--<a href="#"><img src="{{ asset('uploads/images/icon/linkedin.png') }}" alt="LinkedIn" class="h-4 w-4" /></a>-->
  </div>
</div>
