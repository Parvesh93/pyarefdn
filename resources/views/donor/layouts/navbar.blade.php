 <!-- Navigation - Scrollable -->
 <nav class="flex-1 overflow-y-auto" style="-ms-overflow-style: none; scrollbar-width: none;">
     <ul class="space-y-2 text-sm font-medium px-4 py-4">
         <!-- Dashboard -->
         <li>
             <a href="{{ route('donor.dashboard.index') }}"
                 class="flex items-center gap-2 px-3 py-2 rounded hover:bg-[#004f4f]">
                 <img src="{{ asset('uploads/images/icon/dashboard.svg') }}" alt="Icon" class="w-5 h-5" />
                 Dashboard Overview
             </a>
         </li>
       
         <!-- Donations -->
         <div class="group">
             <li x-data="{ open: {{ Request::is('donor/donation*') ? 'true' : 'false' }} }" class="relative list-none p-0 m-0">
                 <!-- Main Menu Button -->
                 <button @click="open = !open"
                     class="flex items-center w-full px-4 py-2 text-gray-700 hover:bg-[#004f4f] rounded-md transition">
                     <span class="mr-2">
                         <img src="{{ asset('uploads/images/icon/Heart.svg') }}" alt="Icon" class="w-5 h-5" />
                     </span>
                     <span class="flex-1 text-left text-white font-medium">Donations</span>
                     <svg :class="{ 'rotate-180': open }"
                         class="w-4 h-4 ml-2 transform transition-transform duration-300" fill="none" stroke="white"
                         viewBox="0 0 24 24">
                         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                     </svg>
                 </button>

                 <!-- Submenu -->
                 <ul x-show="open" x-transition class="mt-1 ml-6 space-y-1 text-sm text-gray-600">
                     <li>
                         <a href="{{ route('donor.donation.index') }}"
                             class="block px-3 py-2 text-white rounded-md hover:bg-[#004f4f] {{ Request::is('donor/donation*') ? 'bg-[#004f4f] text-white' : '' }}">
                             Donations
                         </a>
                     </li>

                 </ul>
             </li>
         </div>


     </ul>
 </nav>
