 <!-- Navigation - Scrollable -->
 <nav class="flex-1 overflow-y-auto" style="-ms-overflow-style: none; scrollbar-width: none;">
     <ul class="space-y-2 text-sm font-medium px-4 py-4">
         @canany(['dashboard-view'])
             <!-- Dashboard -->
             <li>
                 <a href="{{ route('admin.dashboard.index') }}"
                     class="flex items-center gap-2 px-3 py-2 rounded hover:bg-[#004f4f]">
                     <img src="{{ asset('uploads/images/icon/dashboard.svg') }}" alt="Icon" class="w-5 h-5" />
                     Dashboard Overview
                 </a>
             </li>
         @endcanany

         <!-- Donations -->
         @canany(['donation-create', 'donation-view'])
             <div class="group">
                 <li x-data="{ open: {{ Request::is('admin/donation*') ? 'true' : 'false' }} }" class="relative list-none p-0 m-0">
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
                             <a href="{{ route('admin.donation.index') }}"
                                 class="block px-3 py-2 text-white rounded-md hover:bg-[#004f4f] {{ Request::is('admin/donation*') ? 'bg-[#004f4f] text-white' : '' }}">
                                 Donations
                             </a>
                         </li>





                         <li>
                             <a href="{{ route('admin.donation.create') }}"
                                 class="block px-3 py-2 text-white rounded-md hover:bg-[#004f4f] {{ Request::is('admin/donation*') ? 'bg-[#004f4f] text-white' : '' }}">
                                 Add Offline Donations
                             </a>
                         </li>


                     </ul>
                 </li>
             </div>
         @endcanany
         <!-- Campaigns -->
         @canany(['campaign-create', 'campaign-view'])
             <div>
                 <li>
                     <a href="{{ route('admin.campaign.index') }}"
                         class="flex items-center gap-2 px-3 py-2 rounded hover:bg-[#004f4f]  {{ Request::is('admin/campaign*') ? 'bg-[#004f4f] text-white' : '' }}">
                         <img src="{{ asset('uploads/images/icon/campaign.svg') }}" alt="Icon" class="w-5 h-5" />
                         Campaigns
                     </a>
                 </li>
             </div>
         @endcanany

         @canany(['donor-create', 'donor-view'])
             <!-- Donors -->
             <div class="group">
                 <li x-data="{ open: {{ Request::is('admin/donar*') ? 'true' : 'false' }} }" class="relative list-none p-0 m-0">
                     <!-- Main Menu Button -->
                     <button @click="open = !open"
                         class="flex items-center w-full px-4 py-2 text-gray-700 hover:bg-[#004f4f] rounded-md transition">
                         <span class="mr-2">
                             <img src="{{ asset('uploads/images/icon/donors.svg') }}" alt="Icon" class="w-5 h-5" />
                         </span>
                         <span class="flex-1 text-left text-white font-medium">Donors</span>
                         <svg :class="{ 'rotate-180': open }"
                             class="w-4 h-4 ml-2 transform transition-transform duration-300" fill="none" stroke="white"
                             viewBox="0 0 24 24">
                             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                         </svg>
                     </button>

                     <!-- Submenu -->
                     <ul x-show="open" x-transition class="mt-1 ml-6 space-y-1 text-sm text-gray-600">
                         <li>
                             <a href="{{ route('admin.donar.list') }}"
                                 class="block px-3 py-2 text-white rounded-md hover:bg-[#004f4f] {{ Request::is('admin/donar*') ? 'bg-[#004f4f] text-white' : '' }}">
                                 Donors
                             </a>
                         </li>





                     </ul>
                 </li>
             </div>
         @endcanany



         <!-- Volunteers -->
         @canany(['volunteer-create', 'volunteer-view'])
             <div class="group">
                 <li x-data="{ open: {{ Request::is('admin/volunteer*') ? 'true' : 'false' }} }" class="relative list-none p-0 m-0">
                     <!-- Main Menu Button -->
                     <button @click="open = !open"
                         class="flex items-center w-full px-4 py-2 text-gray-700 hover:bg-[#004f4f] rounded-md transition">
                         <span class="mr-2">
                             <img src="{{ asset('uploads/images/icon/volunteer.svg') }}" alt="Icon" class="w-5 h-5" />
                         </span>
                         <span class="flex-1 text-left text-white font-medium">Volunteers</span>
                         <svg :class="{ 'rotate-180': open }"
                             class="w-4 h-4 ml-2 transform transition-transform duration-300" fill="none" stroke="white"
                             viewBox="0 0 24 24">
                             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                         </svg>
                     </button>

                     <!-- Submenu -->
                     <ul x-show="open" x-transition class="mt-1 ml-6 space-y-1 text-sm text-gray-600">
                         <li>
                             <a href="{{ route('admin.volunteer.index') }}"
                                 class="block px-3 py-2 text-white rounded-md hover:bg-[#004f4f] {{ Request::is('admin/volunteer*') ? 'bg-[#004f4f] text-white' : '' }}">
                                 Volunteers
                             </a>
                         </li>





                     </ul>
                 </li>
             </div>
         @endcanany


         <!-- Annual Member -->
         @canany(['annual-create', 'annual-view'])
             <div class="group">
                 <li x-data="{ open: {{ Request::is('admin/annual*') ? 'true' : 'false' }} }" class="relative list-none p-0 m-0">
                     <!-- Main Menu Button -->
                     <button @click="open = !open"
                         class="flex items-center w-full px-4 py-2 text-gray-700 hover:bg-[#004f4f] rounded-md transition">
                         <span class="mr-1">
                             <img src="{{ asset('uploads/images/icon/donors.svg') }}" alt="Icon" class="w-5 h-5 " />
                         </span>
                         <span class="flex-1 text-left text-white font-medium">Annual Members</span>
                         <svg :class="{ 'rotate-180': open }"
                             class="w-4 h-4 ml-2 transform transition-transform duration-300" fill="none" stroke="white"
                             viewBox="0 0 24 24">
                             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                         </svg>
                     </button>

                     <!-- Submenu -->
                     <ul x-show="open" x-transition class="mt-1 ml-6 space-y-1 text-sm text-gray-600">
                         <li>
                             <a href="{{ route('admin.annual.index') }}"
                                 class="block px-3 py-2 text-white rounded-md hover:bg-[#004f4f] {{ Request::is('admin/annual*') ? 'bg-[#004f4f] text-white' : '' }}">
                                 Annual Members
                             </a>
                         </li>




                     </ul>
                 </li>
             </div>
         @endcanany


         <li>
    <a href="{{ route('admin.founder-stories.index') }}">Founder Stories</a>
</li>


         <!-- Blog -->
         @canany(['blog-view', 'blog-create', 'blog-category-view', 'blog-category-create', 'post-comment-view',
             'post-comment-create'])
             <div class="group">
                 <li x-data="{ open: {{ Request::is('admin/blog*') || Request::is('admin/category*') || Request::is('admin/comment*') ? 'true' : 'false' }} }" class="relative list-none p-0 m-0">
                     <!-- Main Menu Button -->
                     <button @click="open = !open"
                         class="flex items-center w-full px-4 py-2 text-gray-700 hover:bg-[#004f4f] rounded-md transition">
                         <span class="mr-1">
                             <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white" fill="none"
                                 viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                 <path stroke-linecap="round" stroke-linejoin="round"
                                     d="M19 21H5a2 2 0 01-2-2V5a2 2 0 012-2h7l2 2h5a2 2 0 012 2v12a2 2 0 01-2 2z" />
                                 <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6M9 16h6M9 8h1" />
                             </svg>
                         </span>
                         <span class="flex-1 text-left text-white font-medium">Blogs</span>
                         <svg :class="{ 'rotate-180': open }"
                             class="w-4 h-4 ml-2 transform transition-transform duration-300" fill="none"
                             stroke="white" viewBox="0 0 24 24">
                             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                         </svg>
                     </button>

                     <!-- Submenu -->
                     <ul x-show="open" x-transition class="mt-1 ml-6 space-y-1 text-sm text-gray-600">

                         <!-- Blog Category -->
                         @canany(['blog-category-view', 'blog-category-create'])
                             <li>
                                 <a href="{{ route('admin.category.index') }}"
                                     class="block px-3 py-2 text-white rounded-md hover:bg-[#004f4f] {{ Request::is('admin/category*') ? 'bg-[#004f4f] text-white' : '' }}">
                                     Blog Categories
                                 </a>
                             </li>
                         @endcanany

                         <!-- Blog -->
                         @canany(['blog-view', 'blog-create'])
                             <li>
                                 <a href="{{ route('admin.blog.index') }}"
                                     class="block px-3 py-2 text-white rounded-md hover:bg-[#004f4f] {{ Request::is('admin/blog*') ? 'bg-[#004f4f] text-white' : '' }}">
                                     All Blogs
                                 </a>
                             </li>
                         @endcanany

                         <!-- Blog Comment-->
                         @canany(['post-comment-view', 'post-comment-create'])
                             <li>
                                 <a href="{{ route('admin.comment.index') }}"
                                     class="block px-3 py-2 text-white rounded-md hover:bg-[#004f4f] {{ Request::is('admin/comment*') ? 'bg-[#004f4f] text-white' : '' }}">
                                     Blog Comments
                                 </a>
                             </li>
                         @endcanany

                     </ul>
                 </li>
             </div>
         @endcanany


         <!--Users-->

         @canany(['user-create', 'user-view'])
             <div class="group">
                 <li x-data="{ open: {{ Request::is('admin/user*') ? 'true' : 'false' }} }" class="relative list-none p-0 m-0">
                     <!-- Main Menu Button -->
                     <button @click="open = !open"
                         class="flex items-center w-full px-4 py-2 text-gray-700 hover:bg-[#004f4f] rounded-md transition">
                         <span class="mr-1">
                             <svg class="w-6 h-6 text-white " aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                 width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                 <path fill-rule="evenodd"
                                     d="M8 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4H6Zm7.25-2.095c.478-.86.75-1.85.75-2.905a5.973 5.973 0 0 0-.75-2.906 4 4 0 1 1 0 5.811ZM15.466 20c.34-.588.535-1.271.535-2v-1a5.978 5.978 0 0 0-1.528-4H18a4 4 0 0 1 4 4v1a2 2 0 0 1-2 2h-4.535Z"
                                     clip-rule="evenodd" />
                             </svg>


                         </span>
                         <span class="flex-1 text-left text-white font-medium">Human Resources</span>
                         <svg :class="{ 'rotate-180': open }"
                             class="w-4 h-4 ml-2 transform transition-transform duration-300" fill="none"
                             stroke="white" viewBox="0 0 24 24">
                             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                         </svg>
                     </button>

                     <!-- Submenu -->
                     <ul x-show="open" x-transition class="mt-1 ml-6 space-y-1 text-sm text-gray-600">
                         <li>
                             <a href="{{ route('admin.user.index') }}"
                                 class="block px-3 py-2 text-white rounded-md hover:bg-[#004f4f] {{ Request::is('admin/user*') ? 'bg-[#004f4f] text-white' : '' }}">
                                 Staff List
                             </a>
                         </li>




                     </ul>
                 </li>
             </div>
         @endcanany


         <!-- Events -->
         @canany(['event-create', 'event-view'])
             <div class="group">
                 <li>
                     <a href="{{ route('admin.event.index') }}"
                         class="flex items-center gap-2 px-3 py-2 rounded hover:bg-[#004f4f] {{ Request::is('admin/event*') ? 'bg-[#004f4f] text-white' : '' }}">
                         <img src="{{ asset('uploads/images/icon/events.svg') }}" alt="Icon" class="w-5 h-5" />
                         Events
                     </a>
                 </li>
             </div>
         @endcanany




         <!-- Reports -->

         @canany(['report-view', 'report-create'])
             <div class="group">
                 <li>
                     <a href="admin-panel/report.html"
                         class="flex items-center gap-2 px-3 py-2 rounded hover:bg-[#004f4f]">
                         <img src="{{ asset('uploads/images/icon/report.svg') }}" alt="Icon" class="w-5 h-5" />
                         Reports
                     </a>
                 </li>
             </div>
         @endcanany




         @canany(['topbar-setting-view', 'social-setting-view', 'focus-view', 'focus-create', 'feature-view',
             'feature-create', 'advisory-view', 'advisory-create', 'core-team-view', 'core-team-create', 'news-view',
             'news-create', 'testimonial-view', 'testimonial-create', 'image-section-view', 'image-section-create',
             'image-section-condition', 'gallery-view', 'gallery-create', 'project-view', 'project-create'])
             <div class="group">

                 <li x-data="{ open: {{ Request::is('admin/topbar-settings*') ||
                 Request::is('admin/social-settings*') ||
                 Request::is('admin/focus*') ||
                 Request::is('admin/feature*') ||
                 Request::is('admin/advisory*') ||
                 Request::is('admin/news*') ||
                 Request::is('admin/testimonial*') ||
                 Request::is('admin/image-section*') ||
                 Request::is('admin/condition-image-apply*') ||
                 Request::is('admin/gallery*') ||
                 Request::is('admin/core-team*') ||
                 Request::is('admin/project*')
                     ? 'true'
                     : 'false' }} }" class="relative list-none p-0 m-0">
                     <!-- Main Menu Button -->
                     <button @click="open = !open"
                         class="flex items-center w-full px-4 py-2 text-white hover:bg-[#004f4f] rounded-md transition">
                         <span class="mr-2">
                             <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                 class="bi bi-globe" viewBox="0 0 16 16">
                                 <path
                                     d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m7.5-6.923c-.67.204-1.335.82-1.887 1.855A8 8 0 0 0 5.145 4H7.5zM4.09 4a9.3 9.3 0 0 1 .64-1.539 7 7 0 0 1 .597-.933A7.03 7.03 0 0 0 2.255 4zm-.582 3.5c.03-.877.138-1.718.312-2.5H1.674a7 7 0 0 0-.656 2.5zM4.847 5a12.5 12.5 0 0 0-.338 2.5H7.5V5zM8.5 5v2.5h2.99a12.5 12.5 0 0 0-.337-2.5zM4.51 8.5a12.5 12.5 0 0 0 .337 2.5H7.5V8.5zm3.99 0V11h2.653c.187-.765.306-1.608.338-2.5zM5.145 12q.208.58.468 1.068c.552 1.035 1.218 1.65 1.887 1.855V12zm.182 2.472a7 7 0 0 1-.597-.933A9.3 9.3 0 0 1 4.09 12H2.255a7 7 0 0 0 3.072 2.472M3.82 11a13.7 13.7 0 0 1-.312-2.5h-2.49c.062.89.291 1.733.656 2.5zm6.853 3.472A7 7 0 0 0 13.745 12H11.91a9.3 9.3 0 0 1-.64 1.539 7 7 0 0 1-.597.933M8.5 12v2.923c.67-.204 1.335-.82 1.887-1.855q.26-.487.468-1.068zm3.68-1h2.146c.365-.767.594-1.61.656-2.5h-2.49a13.7 13.7 0 0 1-.312 2.5m2.802-3.5a7 7 0 0 0-.656-2.5H12.18c.174.782.282 1.623.312 2.5zM11.27 2.461c.247.464.462.98.64 1.539h1.835a7 7 0 0 0-3.072-2.472c.218.284.418.598.597.933M10.855 4a8 8 0 0 0-.468-1.068C9.835 1.897 9.17 1.282 8.5 1.077V4z" />
                             </svg>
                         </span>
                         <span class="flex-1 text-left text-blue-100 font-medium">Web</span>
                         <svg :class="{ 'rotate-180': open }"
                             class="w-4 h-4 ml-2 transform transition-transform duration-300" fill="none"
                             stroke="white" viewBox="0 0 24 24">
                             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                         </svg>
                     </button>

                     <!-- Submenu -->
                     <ul x-show="open" x-transition class="mt-1 ml-6 space-y-1 text-sm">
                         @canany(['topbar-setting-view'])
                             <li>
                                 <a href="{{ route('admin.topbar-settings.index') }}"
                                     class="block px-3 py-2 rounded-md transition
                {{ Request::is('admin/topbar-settings*') ? 'bg-[#004f4f] text-white' : 'text-white hover:bg-[#004f4f]' }}">
                                     Contact Setting
                                 </a>
                             </li>
                         @endcanany

                         @canany(['social-setting-view'])
                             <li>
                                 <a href="{{ route('admin.social-settings.index') }}"
                                     class="block px-3 py-2 rounded-md transition
                {{ Request::is('admin/social-settings*') ? 'bg-[#004f4f] text-white' : 'text-white hover:bg-[#004f4f]' }}">
                                     Social Setting
                                 </a>
                             </li>
                         @endcanany

                         @canany(['focus-view', 'focus-create'])
                             <li>
                                 <a href="{{ route('admin.focus.index') }}"
                                     class="block px-3 py-2 rounded-md transition
                {{ Request::is('admin/focus*') ? 'bg-[#004f4f] text-white' : 'text-white hover:bg-[#004f4f]' }}">
                                     Focused Area
                                 </a>
                             </li>
                         @endcanany

                         @canany(['feature-view', 'feature-create'])
                             <li>
                                 <a href="{{ route('admin.feature.index') }}"
                                     class="block px-3 py-2 rounded-md transition
                {{ Request::is('admin/feature*') ? 'bg-[#004f4f] text-white' : 'text-white hover:bg-[#004f4f]' }}">
                                     Features
                                 </a>
                             </li>
                         @endcanany



                         @canany(['advisory-view', 'advisory-create'])
                             <li>
                                 <a href="{{ route('admin.advisory.index') }}"
                                     class="block px-3 py-2 rounded-md transition
                {{ Request::is('admin/advisory*') ? 'bg-[#004f4f] text-white' : 'text-white hover:bg-[#004f4f]' }}">
                                     Advisory Board
                                 </a>
                             </li>
                         @endcanany


                         @canany(['core-team-view', 'core-team-create'])
                             <li>
                                 <a href="{{ route('admin.core-team.index') }}"
                                     class="block px-3 py-2 rounded-md transition
                {{ Request::is('admin/core-team*') ? 'bg-[#004f4f] text-white' : 'text-white hover:bg-[#004f4f]' }}">
                                     Core Team Member
                                 </a>
                             </li>
                         @endcanany

                         @canany(['news-view', 'news-create'])
                             <li>
                                 <a href="{{ route('admin.news.index') }}"
                                     class="block px-3 py-2 rounded-md transition
                {{ Request::is('admin/news*') ? 'bg-[#004f4f] text-white' : 'text-white hover:bg-[#004f4f]' }}">
                                     News
                                 </a>
                             </li>
                         @endcanany

                         @canany(['testimonial-view', 'testimonial-create'])
                             <li>
                                 <a href="{{ route('admin.testimonial.index') }}"
                                     class="block px-3 py-2 rounded-md transition
                {{ Request::is('admin/testimonial*') ? 'bg-[#004f4f] text-white' : 'text-white hover:bg-[#004f4f]' }}">
                                     Testimonial
                                 </a>
                             </li>
                         @endcanany

                         @canany(['image-section-view', 'image-section-create'])
                             <li>
                                 <a href="{{ route('admin.image-section.index') }}"
                                     class="block px-3 py-2 rounded-md transition
                {{ Request::is('admin/image-section*') ? 'bg-[#004f4f] text-white' : 'text-white hover:bg-[#004f4f]' }}">
                                     Image Section
                                 </a>
                             </li>
                         @endcanany

                         @canany(['image-section-condition'])
                             <li>
                                 <a href="{{ route('admin.condition-image-apply.index') }}"
                                     class="block px-3 py-2 rounded-md transition
                {{ Request::is('admin/condition-image-apply*') ? 'bg-[#004f4f] text-white' : 'text-white hover:bg-[#004f4f]' }}">
                                     Image Section Condition
                                 </a>
                             </li>
                         @endcanany

                         @canany(['gallery-view', 'gallery-create'])
                             <li>
                                 <a href="{{ route('admin.gallery.index') }}"
                                     class="block px-3 py-2 rounded-md transition
                {{ Request::is('admin/gallery*') ? 'bg-[#004f4f] text-white' : 'text-white hover:bg-[#004f4f]' }}">
                                     Gallery
                                 </a>
                             </li>
                         @endcanany


                         @canany(['project-view', 'project-create'])
                             <li>
                                 <a href="{{ route('admin.project.index') }}"
                                     class="block px-3 py-2 rounded-md transition
                {{ Request::is('admin/project*') ? 'bg-[#004f4f] text-white' : 'text-white hover:bg-[#004f4f]' }}">
                                     Project
                                 </a>
                             </li>
                         @endcanany





                     </ul>
                 </li>
             </div>
         @endcanany

         @canany(['mail-setting-view', 'razorpay-setting-view', 'settings-view', 'role-view', 'role-create',
             'role-condition-view'])
             <div class="group">
                 <li x-data="{ open: {{ Request::is('admin/mail-settings*') || Request::is('admin/razorpay-setting*') || Request::is('admin/settings*') || Request::is('admin/role*') || Request::is('admin/staff-condition*') ? 'true' : 'false' }} }" class="relative list-none p-0 m-0 mt-2">
                     <!-- Main Menu Button -->
                     <button @click="open = !open"
                         class="flex items-center w-full px-4 py-2 text-white hover:bg-[#004f4f] rounded-md transition">
                         <span class="mr-2">
                             <img src="{{ asset('uploads/images/icon/setting.svg') }}" alt="Icon" class="w-5 h-5" />
                         </span>
                         <span class="flex-1 text-left text-blue-100 font-medium">Settings</span>
                         <svg :class="{ 'rotate-180': open }"
                             class="w-4 h-4 ml-2 transform transition-transform duration-300" fill="none"
                             stroke="white" viewBox="0 0 24 24">
                             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                         </svg>
                     </button>
                     <!-- Submenu -->
                     <ul x-show="open" x-transition class="mt-1 ml-6 space-y-1 text-sm">
                         @canany(['mail-setting-view'])
                             <li>
                                 <a href="{{ route('admin.mail-settings.index') }}"
                                     class="block px-3 py-2 rounded-md transition
                {{ Request::is('admin/mail-settings*') ? 'bg-[#004f4f] text-white' : 'text-white hover:bg-[#004f4f]' }}">
                                     Mail Setting
                                 </a>
                             </li>
                         @endcanany


                         @canany(['razorpay-setting-view'])
                             <li>
                                 <a href="{{ route('admin.razorpay-setting.index') }}"
                                     class="block px-3 py-2 rounded-md transition
                {{ Request::is('admin/razorpay-setting*') ? 'bg-[#004f4f] text-white' : 'text-white hover:bg-[#004f4f]' }}">
                                     Razorpay Setting
                                 </a>
                             </li>
                         @endcanany

                         @canany(['settings-view'])
                             <li>
                                 <a href="{{ route('admin.settings.index') }}"
                                     class="block px-3 py-2 rounded-md transition
                {{ Request::is('admin/settings*') ? 'bg-[#004f4f] text-white' : 'text-white hover:bg-[#004f4f]' }}">
                                     General Setting
                                 </a>
                             </li>
                         @endcanany

                         @canany(['role-create'])
                             <li>
                                 <a href="{{ route('admin.role.index') }}"
                                     class="block px-3 py-2 rounded-md transition
                {{ Request::is('admin/role*') ? 'bg-[#004f4f] text-white' : 'text-white hover:bg-[#004f4f]' }}">
                                     Roles and Permissions
                                 </a>
                             </li>
                         @endcanany

                         @canany(['role-condition-view'])
                             <li>
                                 <a href="{{ route('admin.staff-condition.index') }}"
                                     class="block px-3 py-2 rounded-md transition
                {{ Request::is('admin/staff-condition*') ? 'bg-[#004f4f] text-white' : 'text-white hover:bg-[#004f4f]' }}">
                                     User Conditions
                                 </a>
                             </li>
                         @endcanany

                     </ul>
                 </li>
             </div>
         @endcanany


     </ul>
 </nav>
