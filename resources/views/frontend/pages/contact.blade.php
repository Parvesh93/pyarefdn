@section('title')
Contact
@endsection


@extends('frontend.layouts.master')

@section('content')
    <!-- Title section -->
   

    <section
        class="relative py-6  bg-cover bg-center overflow-hidden text-white">
        <!-- Noise / Grainy Texture Overlay -->
        <div
            class="absolute inset-0  mix-blend-overlay pointer-events-none bg-[#0f1240]">
        </div>

        <div class="relative max-w-screen-xl md:mx-8 px-6">
            <h2 class="md:text-2xl text-2xl font-bold">CONTACT</h2>
            
            <nav class="mt-3 text-sm">
    <i class="fa-sharp-duotone fa-solid fa-house"></i> <a href="{{route('home')}}" class="text-[16px] text-orange-400 font-semibold hover:underline">Home</a>
      <span class="mx-1 text-gray-200">/</span>
      <span class="text-[16px] text-gray-300">Contact</span>
    </nav>
        </div>
    </section>

      <!-- Get in touch & Map -->
  <section class="w-full py-12 bg-white">
    <div class="md:mx-11 px-4 flex flex-col md:flex-row gap-8">
      <!-- Left Contact Form -->
    
      <div class="w-full md:w-1/2 shadow-lg rounded  bg-gray-200 p-6">
        <h2 class="text-lg md:text-xl font-semibold text-gray-900 mb-6">
          GET IN TOUCH WITH US
        </h2>

        <form class="space-y-4" action="{{ route('contact.store') }}" method="POST">
          @csrf
          <!-- Name -->
          <div class="flex flex-col md:flex-row gap-4">
            <div class="w-full">
              <label class="text-sm font-medium text-gray-700 mb-1 block">Name *</label>
              <input type="text" placeholder="FIRST NAME" name="first_name"
                class="w-full border border-gray-300 px-4 py-2 rounded text-sm" required />
            </div>
            <div class="w-full">
              <label class="text-sm font-medium text-gray-700 mb-1 block invisible">.</label>
              <input type="text" placeholder="LAST NAME" name="last_name"
                class="w-full border border-gray-300 px-4 py-2 rounded text-sm" />
            </div>
          </div>

          <!-- Email & Contact -->
          <div class="flex flex-col md:flex-row gap-4">
            <div class="w-full">
              <label class="text-sm font-medium text-gray-700 mb-1 block">Email *</label>
              <input type="email" placeholder="EMAIL" name="email" class="w-full border border-gray-300 px-4 py-2 rounded text-sm" required/>
            </div>
            <div class="w-full">
              <label class="text-sm font-medium text-gray-700 mb-1 block">Contact *</label>
              <input type="text" placeholder="+91" name="contact" class="w-full border border-gray-300 px-4 py-2 rounded text-sm" required />
            </div>
          </div>

          <!-- Comment -->
          <div>
            <label class="text-sm font-medium text-gray-700 mb-1 block">Comment *</label>
            <textarea placeholder="COMMENT" rows="4" name="comment"
              class="w-full border border-gray-300 px-4 py-2 rounded text-sm " required></textarea>
          </div>

          <button type="submit" class="bg-[#12163f] text-white text-sm font-semibold px-6 py-2 rounded">
            SUBMIT
          </button>
        </form>
      </div>
     
     

      <!-- Right Google Map (New Delhi) -->
      <div class="w-full md:w-1/2 ">
        <iframe class="w-full h-[400px] rounded border"
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d112087.89142613546!2d77.10249026096098!3d28.6139391059005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfd2c53e1ac85%3A0xc5f5cbb97bd74a04!2sNew%20Delhi%2C%20Delhi!5e0!3m2!1sen!2sin!4v1715598329581!5m2!1sen!2sin"
          allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
  </section>

  <!-- Address Section -->
  <section class="w-full py-12 bg-white">
    <div class="md:mx-11 px-4 flex flex-col lg:flex-row gap-6">
      <!-- Left Side Cards -->
      <div class="flex flex-col gap-6 w-full lg:w-1/3">
        <!-- Donate Now Card -->
        <div class="relative bg-[#fde4a5] rounded-lg p-6 shadow-md overflow-hidden">
          <div class="absolute -left-6 -top-6 w-32 h-32 bg-orange-300 opacity-30 rounded-full"></div>
          <!-- <div class="absolute -left-10 top-10 w-48 h-48 bg-orange-200 opacity-20 rounded-full"></div> -->
          <p class="text-sm text-gray-800 font-medium leading-relaxed mb-4">
            Be the Reason Someone Smiles Today.<br />
            Join us in creating a brighter, fairer future — one life at a
            time.
          </p>
          <button class="bg-[#12163f] text-white text-xs font-semibold px-4 py-2 rounded">
            <a href="{{ route('donation-page') }}"
                                class="">DONATE
                                NOW</a>
          </button>
        </div>

        <!-- Volunteer Card -->
        <div class="relative bg-[#fde4a5] rounded-lg p-6 shadow-md overflow-hidden">
          <div class="absolute -left-6 -top-10 w-32 h-32 bg-orange-300 opacity-30 rounded-full"></div>
          <!-- <div class="absolute -left-10 top-10 w-48 h-48 bg-orange-200 opacity-20 rounded-full"></div> -->
          <p class="text-sm text-gray-800 font-medium leading-relaxed mb-4">
            Volunteers are the heart of our foundation.<br />
            Sign up today and be a part of something bigger.
          </p>
          <button class="bg-[#12163f] text-white text-xs font-semibold px-4 py-2 rounded">
            <a href="{{route('volunteer-member')}}">BECOME VOLUNTEER</a>
          </button>
        </div>
      </div>

      <!-- Right Side: Address Info Box -->
      <!-- Right Side (Responsive Address Info Box with Increased Height) -->
      <div class="relative w-full lg:w-2/3">
        <div class="relative bg-[#fde4a5] rounded-lg shadow-md overflow-hidden">
          <!-- Decorative Bubble -->

          <!-- Content Container -->
          <div class="relative bg-[#fde6a8] rounded-lg px-6 py-9 z-10">
            <div class="absolute -left-6 -top-10 w-36 h-36 bg-orange-300 opacity-30 rounded-full"></div>

            <div class="text-sm text-gray-800 font-medium space-y-9">
              <!-- Address -->
              <div class="flex items-start gap-3">
                <span class="text-lg">📍</span>
                <div>
                  <p class="font-bold">ADDRESS :</p>
                  <p class="mt-0.5 leading-relaxed">
                    370-D, J&amp;K Pocket Dilshad Garden, Delhi - 110095
                  </p>
                </div>
              </div>

              <!-- Phone -->
              <div class="flex items-start gap-3">
                <span class="text-lg">📞</span>
                <div>
                  <p class="font-bold">PHONE :</p>
                  <p class="mt-0.5 leading-relaxed">+91-9811409367</p>
                </div>
              </div>

              <!-- Email -->
              <div class="flex items-start gap-3">
                <span class="text-lg">📧</span>
                <div>
                  <p class="font-bold">EMAIL :</p>
                  <p class="mt-0.5 leading-relaxed break-words">
                    info@pyarefoundation.org, pyarefdn@gmail.com
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>





    
@endsection
