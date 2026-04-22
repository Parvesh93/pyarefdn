<header class="flex items-center justify-between px-6 py-4 bg-white shadow sticky top-0 z-30">
    <div class="flex items-center gap-3 w-full max-w-xl">
        <button id="menu-item" class="md:hidden">
            <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>
        <div class="relative w-full">
            <input type="text" placeholder="Search or type"
                class="w-full bg-gray-100 px-4 py-2 pl-10 rounded text-sm" />
        </div>
    </div>

    <!-- Right Side -->
    <div class="flex items-center gap-5 relative ">
       @php
        $ncount = Auth::check() ? Auth::user()->unreadNotifications()->count() : 0;
        $user = Auth::user();
       @endphp

        <!-- Bell Icon -->
        <button id="notifyBtn" class="relative">
            <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0M3.124 7.5A8.969 8.969 0 015.292 3m13.416 0a8.969 8.969 0 012.168 4.5" />
            </svg>
            <span id="notification-count"
                class="absolute -top-1 -right-1 bg-red-500 text-xs text-white w-4 h-4 rounded-full flex items-center justify-center">
                {{ $ncount }}
            </span>
        </button>

        <!-- Notification Dropdown -->
        <div id="notifyBox" class="hidden absolute right-0 top-12 w-[450px] bg-white rounded-xl shadow-lg p-4 z-50">
            <!-- Header -->
            <div class="flex justify-between items-center border-b pb-2">
                <h2 class="text-lg font-semibold">Notifications</h2>
                <button class="text-sm text-blue-500 font-medium">{{ $ncount }} New</button>
            </div>

            
          @if ($user)
            <!-- Notification Items -->
            @foreach ($user->unreadNotifications as $notification)
                <a href="{{route('markread',$notification->id)}}" 
                  onclick="markNotificationAsRead('{{ $notification->id }}', this)"
                   
                   class="notification-item flex items-center gap-3 py-1 px-1 border-b hover:bg-blue-400 transition
                          {{ $notification->read_at ? 'bg-gray-100' : '' }}">
                    
                    <div class="flex-shrink-0 w-8 h-8 rounded-full bg-green-100 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-600" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                    </div>
                    <div class="flex-1">
                        <p class="font-medium text-gray-800">{{ @$notification->data['message'] }}</p>
                    </div>
                    <span class="text-xs text-gray-800 whitespace-nowrap">
                        {{ \Carbon\Carbon::parse(@$notification->created_at)->diffForHumans() }}
                    </span>
                </a>
            @endforeach
        @endif    

            <!-- Button -->
            {{-- <div class="pt-3">
                <button class="w-full bg-blue-500 hover:bg-blue-600 text-white font-medium py-2 rounded-lg">
                    View All Notifications
                </button>
            </div> --}}
        </div>
        
         @if ($user)
        <!-- User Avatar -->
           <a href="{{route('admin.donor.editProfile',auth()->id())}}"><img src="{{ asset('uploads/user/'.auth()->user()->attach) }}" class="w-8 h-8 rounded-full" alt="User" /></a>
         @endif 
    </div>
</header>

<script>
    const btn = document.getElementById("notifyBtn");
    const box = document.getElementById("notifyBox");

    btn.addEventListener("click", () => {
        box.classList.toggle("hidden");
    });

    // click outside close
    document.addEventListener("click", function(e) {
        if (!btn.contains(e.target) && !box.contains(e.target)) {
            box.classList.add("hidden");
        }
    });

    // mark notification as read
    function markNotificationAsRead(notificationId, element) {
        // alert(notificationId);
        // fetch('/mark-notification-as-read/' + notificationId, {
        //     method: 'POST',
        //     headers: {
        //         'Content-Type': 'application/json',
        //         'X-CSRF-TOKEN': '{{ csrf_token() }}'
        //     },
            
        //     // alert(notificationId);
        //     body: JSON.stringify({})
        //     alert(notificationId);
        // })
        // .then(response => response.json())
        // .then(data => {
        //     // update counter
        //     // alert('s');
        //     document.getElementById('notification-count').textContent = data.count;

        //     // mark background color (read effect)
        //     element.classList.add("bg-gray-100");

        //     // close dropdown
        //     box.classList.add("hidden");
        // })
        // .catch(error => {
        //     console.log('Error', error);
        // });
    }
</script>
