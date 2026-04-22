<script src="{{ asset('backend/jquery/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('backend/unpkg-com-alpinejs/js/alpinejs.min.js') }}"></script>

<!--swipper-->
<script src="{{ asset('frontend/swipper@10/js/swiper-bundle.min.js') }}"></script>
{{-- <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script> --}}
{{-- <script src="{{asset('frontend/swiper/js/swiper-bundle.min.js')}}"></script> --}}



<!-- Fancybox js-->
<script src="{{ asset('frontend/fancybox/js/fancybox.umd.js') }}"></script>



<script src="{{ asset('backend/toaster/js/toastr.min.js') }}"></script>


<!-- Razorpay Script -->

<script src="https://checkout.razorpay.com/v1/checkout.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.min.js"></script>



<!-- Script -->
{{-- <script>
    function downloadReceipt() {
      const element = document.getElementById("receipt");
      const options = {
        margin:       0.5,
        filename:     'Donation_Receipt.pdf',
        image:        { type: 'jpeg', quality: 0.98 },
        html2canvas:  { scale: 2 },
        jsPDF:        { unit: 'in', format: 'a4', orientation: 'portrait' }
      };
      html2pdf().set(options).from(element).save();
    }
  </script> --}}



<!--Start of Tawk.to Script-->
{{-- <script type="text/javascript">
    var Tawk_API = Tawk_API || {},
        Tawk_LoadStart = new Date();
    (function() {
        var s1 = document.createElement("script"),
            s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/68d28aa3689fd01926387e88/1j5r6r4dn';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
    })();
</script> --}}
<!--End of Tawk.to Script-->



<!-- Donate page Script -->
<script>
    const amountBtns = document.querySelectorAll('.amount-btn');
    const customInput = document.getElementById('customAmount');

    amountBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            // const value = btn.getAttribute('data-value');

            // Fill input with clicked amount
            // customInput.value = value;

            const value = btn.getAttribute('data-value');
            if (value) {
                customInput.value = value;
            } else {
                customInput.value = "";
                customInput.focus();
            }

            // Highlight selected button
            amountBtns.forEach(b => {
                b.classList.remove('bg-[#FEB201]', 'text-black');
                b.classList.add('bg-gray-100');
            });

            btn.classList.remove('bg-gray-100');
            btn.classList.add('bg-[#FEB201]', 'text-black');
        });
    });

    customInput.addEventListener('input', () => {
        // Clear all button highlights when user types custom amount
        amountBtns.forEach(b => {
            b.classList.remove('bg-[#FEB201]', 'text-black');
            b.classList.add('bg-gray-100');
        });
    });

    // Toggle Give Once / Monthly
    const onceBtn = document.getElementById('onceBtn');
    const monthlyBtn = document.getElementById('monthlyBtn');

    [onceBtn, monthlyBtn].forEach(btn => {
        btn.addEventListener('click', () => {
            [onceBtn, monthlyBtn].forEach(b => {
                b.classList.remove('bg-[#FEB201]', 'text-black');
                b.classList.add('bg-gray-100');
            });

            btn.classList.add('bg-[#FEB201]', 'text-black');
            btn.classList.remove('bg-gray-100');
        });
    });
</script>


<!-- page js -->
@yield('page_js')



<!-- Toastr message display -->


<script type="text/javascript">
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            toastr.error("{{ $error }}");
        @endforeach
    @endif
</script>



<script>
    @if (Session::has('message'))
        var type = "{{ Session::get('alert-type', 'info') }}"
        switch (type) {
            case 'info':
                toastr.info(" {{ Session::get('message') }} ");
                break;
            case 'success':
                toastr.success(" {{ Session::get('message') }} ");
                break;
            case 'warning':
                toastr.warning(" {{ Session::get('message') }} ");
                break;
            case 'error':
                toastr.error(" {{ Session::get('message') }} ");
                break;
        }
    @endif
</script>

<!-- Testimonial Swiper Script -->
<script>
    new Swiper(".testimonialSwiper", {
        loop: true,
        spaceBetween: 30,
        slidesPerView: 1,
        breakpoints: {
            768: {
                slidesPerView: 2
            },
            1024: {
                slidesPerView: 3
            },
        },
        navigation: {
            nextEl: ".swiper-button-next-custom-testi",
            prevEl: ".swiper-button-prev-custom-testi",
        },
    });
</script>

<!-- Toggle Script -->
<script>
    const toggleBtn = document.getElementById("menu-toggle");
    const menu = document.getElementById("menu");

    toggleBtn.addEventListener("click", () => {
        menu.classList.toggle("hidden");
    });
</script>

<!-- hero script  -->
<script>
    new Swiper(".heroSwiper", {
        loop: true,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        navigation: {
            prevEl: ".swiper-button-prev",
            nextEl: ".swiper-button-next",
        },
    });
</script>


<!-- razorpay script code -->

<script>
    document.getElementById('pay-button').onclick = function(e) {
        e.preventDefault();

        var amount = document.getElementById('customAmount').value;
        if (!amount || amount <= 0) {
            alert("Please enter a valid amount!");
            return;
        }

        var amountInPaise = amount * 100;

        // 🧠 Step 1: Create Order on backend
        fetch("{{ route('web.razorpay.createOrder') }}", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": "{{ csrf_token() }}"
                },
                body: JSON.stringify({
                    amount: amount
                })
            })
            .then(res => res.json())
            .then(data => {
                if (!data.order_id) {
                    alert("Order creation failed!");
                    return;
                }

                // 🧠 Step 2: Configure Razorpay Payment Window
                var options = {
                    "key": "{{ $razorpay_setting->razorpay_key_id ?? '' }}",
                    "amount": amountInPaise,
                    "currency": "{{ $setting->currency ?? 'INR' }}",
                    "name": "{{ $setting->title ?? 'Donation' }}",
                    "description": "Donation Payment",
                    "order_id": data.order_id, // ✅ Backend generated order_id
                    "handler": function(response) {
                        // 🧠 Step 3: Razorpay Response Data -> Hidden Inputs
                        document.getElementById('razorpay_payment_id').value = response
                            .razorpay_payment_id;
                        document.getElementById('razorpay_order_id').value = response.razorpay_order_id;
                        document.getElementById('razorpay_signature').value = response
                            .razorpay_signature;

                        // ✅ Step 4: Submit Payment Form
                        document.getElementById('payment-form').submit();
                    },
                    "theme": {
                        "color": "#ff7529"
                    },
                    "modal": {
                        "ondismiss": function() {
                            console.log("Payment popup closed by user.");
                        }
                    }
                };

                var rzp = new Razorpay(options);
                rzp.open();
            })
            .catch(err => {
                console.error("Error creating Razorpay order:", err);
                alert("Something went wrong! Please try again.");
            });
    }
</script>

<!-- Join Our Hands script -->
<script>
    const buttons = document.querySelectorAll(".donation-btn");
    const hiddenInput = document.getElementById("donationTypeValue");

    buttons.forEach((btn) => {
        btn.addEventListener("click", () => {
            buttons.forEach((b) => {
                b.classList.remove("bg-black", "text-white");
                b.classList.add("bg-[#f4e0b9]", "text-black");
            });

            btn.classList.add("bg-black", "text-white");
            btn.classList.remove("bg-[#f4e0b9]", "text-black");

            hiddenInput.value = btn.getAttribute("data-type");
        });
    });
</script>

<!-- featured project -->
<script>
    new Swiper(".featuredSwiper", {
        loop: true,
        spaceBetween: 30,
        slidesPerView: 1.2,
        breakpoints: {
            768: {
                slidesPerView: 2
            },
            1024: {
                slidesPerView: 3
            },
        },
        navigation: {
            nextEl: ".swiper-button-next-custom-feature",
            prevEl: ".swiper-button-prev-custom-feature",
        },
    });
</script>


<!-- advisory script -->
<script>
    new Swiper(".advisorySwiper", {
        loop: true,
        spaceBetween: 20,
        navigation: {
            nextEl: ".swiper-button-next-custom-adviser",
            prevEl: ".swiper-button-prev-custom-adviser",
        },
        breakpoints: {
            0: {
                slidesPerView: 1.2
            },
            640: {
                slidesPerView: 2
            },
            1024: {
                slidesPerView: 3
            },
            1280: {
                slidesPerView: 4
            },
        },
    });
</script>
<!-- media script -->
<script>
    new Swiper(".mediaSwiper", {
        loop: true,
        spaceBetween: 20,
        navigation: {
            nextEl: ".swiper-button-next-custom-news",
            prevEl: ".swiper-button-prev-custom-news",
        },
        breakpoints: {
            0: {
                slidesPerView: 1.2
            },
            640: {
                slidesPerView: 2
            },
            1024: {
                slidesPerView: 3
            },
            1280: {
                slidesPerView: 4
            },
        },
    });
</script>

<script>
    new Swiper(".shambhooSwiper", {
        loop: true, // Enable loop
        //  centeredSlides: false, // Show one full slide in center, partial on sides
        spaceBetween: 20, // Gap between slides
        navigation: {
            nextEl: ".swiper-button-next-custom",
            prevEl: ".swiper-button-prev-custom",
        },
        breakpoints: {
            0: {
                slidesPerView: 1.2
            }, // 1 full + partial sides on mobile
            640: {
                slidesPerView: 2,
                centeredSlides: false
            }, // Normal on tablets
            1024: {
                slidesPerView: 3
            },
            1280: {
                slidesPerView: 3
            },
        },
    });


    // Fancybox: default behavior already fits image.
    // The CSS above ensures no global img styles force fixed sizes.
    Fancybox.bind('[data-fancybox="rugra-gallery"]', {
        // helpful viewing tweaks
        contentClick: "toggleZoom", // click toggles zoom
        dragToClose: true
    });
</script>






<script>
    new Swiper(".shambhooSwiper1", {
        loop: true, // Enable loop
        //  centeredSlides: false, // Show one full slide in center, partial on sides
        spaceBetween: 20, // Gap between slides
        navigation: {
            nextEl: ".swiper-button-next-custom",
            prevEl: ".swiper-button-prev-custom",
        },
        breakpoints: {
            0: {
                slidesPerView: 1.2
            }, // 1 full + partial sides on mobile
            640: {
                slidesPerView: 2,
                centeredSlides: false
            }, // Normal on tablets
            1024: {
                slidesPerView: 4
            },
            1280: {
                slidesPerView: 4
            },
        },
    });


    // Fancybox: default behavior already fits image.
    // The CSS above ensures no global img styles force fixed sizes.
    Fancybox.bind('[data-fancybox="rugra-gallery"]', {
        // helpful viewing tweaks
        contentClick: "toggleZoom", // click toggles zoom
        dragToClose: true
    });
</script>

<script>
    new Swiper(".shambhooSwiper2", {
        loop: true, // Enable loop

        spaceBetween: 20, // Gap between slides
        navigation: {
            nextEl: ".swiper-button-next-2",
            prevEl: ".swiper-button-prev-2",
        },
        breakpoints: {
            0: {
                slidesPerView: 1.2
            }, // 1 full + partial sides on mobile
            640: {
                slidesPerView: 2,

            }, // Normal on tablets
            1024: {
                slidesPerView: 4
            },
            1280: {
                slidesPerView: 4
            },
        },
    });

    // Fancybox: default behavior already fits image.
    // The CSS above ensures no global img styles force fixed sizes.
    Fancybox.bind('[data-fancybox="rugra-gallery"]', {
        // helpful viewing tweaks
        contentClick: "toggleZoom", // click toggles zoom
        dragToClose: true
    });
</script>


<script>
    new Swiper(".shambhooSwiper3", {
        loop: true, // Enable loop
        //  centeredSlides: false, // Show one full slide in center, partial on sides
        spaceBetween: 20, // Gap between slides
        navigation: {
            nextEl: ".swiper-button-next-custom-3",
            prevEl: ".swiper-button-prev-custom-3",
        },
        breakpoints: {
            0: {
                slidesPerView: 1.2
            }, // 1 full + partial sides on mobile
            640: {
                slidesPerView: 2,
                centeredSlides: false
            }, // Normal on tablets
            1024: {
                slidesPerView: 3
            },
            1280: {
                slidesPerView: 3
            },
        },
    });


    // Fancybox: default behavior already fits image.
    // The CSS above ensures no global img styles force fixed sizes.
    Fancybox.bind('[data-fancybox="rugra-gallery"]', {
        // helpful viewing tweaks
        contentClick: "toggleZoom", // click toggles zoom
        dragToClose: true
    });
</script>



<script>
    new Swiper(".shambhooSwiper4", {
        loop: true, // Enable loop
        //  centeredSlides: false, // Show one full slide in center, partial on sides
        spaceBetween: 20, // Gap between slides
        navigation: {
            nextEl: ".swiper-button-next-custom-4",
            prevEl: ".swiper-button-prev-custom-4",
        },
        breakpoints: {
            0: {
                slidesPerView: 1.2
            }, // 1 full + partial sides on mobile
            640: {
                slidesPerView: 2,
                centeredSlides: false
            }, // Normal on tablets
            1024: {
                slidesPerView: 3
            },
            1280: {
                slidesPerView: 3
            },
        },
    });


    // Fancybox: default behavior already fits image.
    // The CSS above ensures no global img styles force fixed sizes.
    Fancybox.bind('[data-fancybox="rugra-gallery"]', {
        // helpful viewing tweaks
        contentClick: "toggleZoom", // click toggles zoom
        dragToClose: true
    });
</script>
