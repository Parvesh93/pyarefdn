    <!-- ✅ jQuery -->
    <script src="{{ asset('backend/jquery/jquery-3.6.0.min.js') }}"></script>


    <script src="{{ asset('backend/unpkg-com-alpinejs/js/alpinejs.min.js') }}"></script>
    <!-- ✅ DataTables js -->
    <script src="{{ asset('backend/datatable-tables/js/jquery.dataTables.min.js') }}"></script>

    <!-- DataTables Buttons -->
    <script src="{{ asset('backend/button-datables/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('backend/html5/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('backend/button-print/buttons.print.min.js') }}"></script>

    <script src="{{ asset('backend/jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('backend/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('backend/vfs-fonts/vfs_fonts.js') }}"></script>


    <!-- datatable Js -->
    {{-- <script src="{{ asset('backend/data-tables/js/datatables.min.js') }}"></script> --}}

    <!-- Chart.js -->
    <script src="{{ asset('backend/chart/js/chart.js') }}"></script>

    <!-- Toastr JS -->
    <script src="{{ asset('backend/toaster/js/toastr.min.js') }}"></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script> --}}
    <!-- Script to Load Sidebar and Navbar -->

    {{-- TinyMCE  --}}
    <script src="{{ asset('backend/tiny-myce/js/tinymce.min.js') }}"></script>

    <!-- FullCalendar JS -->
    <script src="{{ asset('backend/calender/js/index.global.min.js') }}"></script>





    <script type="text/javascript">
        "use strict";
        tinymce.init({
            selector: '#texteditor',
            plugins: [
                'advlist', 'autolink', 'link', 'image', 'lists', 'charmap', 'preview', 'anchor', 'pagebreak',
                'searchreplace', 'wordcount', 'visualblocks', 'code', 'fullscreen', 'insertdatetime', 'media',
                'table', 'emoticons', 'help'
            ],
            toolbar: 'undo redo | styles | bold italic underline | alignleft aligncenter alignright alignjustify | ' +
                'bullist numlist outdent indent | link image media | preview code fullscreen',
            height: 200,
            setup: function(editor) {
                editor.on('init change', function() {
                    editor.save();
                });
            },
            image_title: true,
            automatic_uploads: true,
            images_upload_url: '/upload',
            file_picker_types: 'image',
            images_upload_handler: function(blobInfo, success, failure) {
                var xhr, formData;
                xhr = new XMLHttpRequest();
                xhr.withCredentials = false;
                xhr.open('POST', '{{ route('admin.upload-image') }}');
                var token = '{{ csrf_token() }}';
                xhr.setRequestHeader("X-CSRF-Token", token);
                xhr.onload = function() {
                    var json;
                    if (xhr.status != 200) {
                        failure('HTTP Error: ' + xhr.status);
                        return;
                    }
                    json = JSON.parse(xhr.responseText);

                    if (!json || typeof json.location != 'string') {
                        failure('Invalid JSON: ' + xhr.responseText);
                        return;
                    }
                    success(json.location);
                };
                formData = new FormData();
                formData.append('file', blobInfo.blob(), blobInfo.filename());
                xhr.send(formData);
            },

            directionality: 'ltr',
            language: 'en',
        });
    </script>

    <!-- Razorpay -->
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>

    <script>
        if (document.getElementById('pay-button')) document.getElementById('pay-button').onclick = function(e) {
            e.preventDefault();

            var amount = document.getElementById('customAmount').value; // Get Amount from Form
            var amountInPaise = amount * 100; // Convert to Paise

            var options = {
                "key": "{{ $razorpay_setting->razorpay_key_id ?? '' }}",
                "amount": amountInPaise, // Amount in paisa
                "currency": "{{ $setting->currency ?? 'INR' }}",
                "name": "{{ $setting->title ?? 'Test Payment' }}",
                "description": "Donation Payment",


                "theme": {
                    "color": "#ff7529"
                },
                // यह success callback है
                "handler": function(response) {
                    // Razorpay से मिला payment_id form में डालो
                    document.getElementById('razorpay_payment_id').value = response.razorpay_payment_id;
                    // अब form submit करो
                    document.getElementById('payment-form').submit();
                }
            };


            var rzp1 = new Razorpay(options);
            rzp1.open();
        }
    </script>


    <!-- ✅ Tailwind Pagination + Styling -->
    <style>
        /* Previous & Next */


        .dataTables_wrapper .dataTables_paginate .paginate_button {
            background: white !important;
            color: blue !important;
            border: 1px solid #ddd !important;
            margin: 2px;
            border-radius: 6px;
            padding: 6px 12px;
        }


        /* active page ke liye */
        .dataTables_wrapper .dataTables_paginate .paginate_button.current {
            background: #007bff !important;
            /* Blue background */
            color: white !important;
            /* White text */
            border: 1px solid #007bff !important;
        }


        /* 🔹Pagination Hover effect */
        .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
            background-color: #2563EB !important;
            border: 1px solid #2563EB;
            color: white !important;
        }





        /* 🔹Pagination Active (current page) */
        /* .dataTables_wrapper .dataTables_paginate .paginate_button.current {
            background-color: #1D4ED8 !important;
            blue-700
            color: #ffffff !important;
        } */


        /* ✅ Common Export Buttons Styling */
        .dt-buttons .dt-button {
            border: none !important;
            border-radius: 6px !important;
            /* padding: 6px 14px !important;
            margin-right: 6px !important; */
            font-size: 14px !important;
            font-weight: 500 !important;
            cursor: pointer !important;
            color: #fff !important;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.15) !important;
            transition: background 0.3s ease;
        }

        /* ✅ Specific Colors */
        .dt-buttons .buttons-copy {
            background-color: #4b5563 !important;
            /* Gray */
        }

        .dt-buttons .buttons-csv {
            background-color: #3b82f6 !important;
            /* Blue */
        }

        .dt-buttons .buttons-excel {
            background-color: #22c55e !important;
            /* Green */
        }

        .dt-buttons .buttons-pdf {
            background-color: #ef4444 !important;
            /* Red */
        }

        .dt-buttons .buttons-print {
            background-color: #8b5cf6 !important;
            /* Purple */
        }

        /* ✅ Hover Effects */
        .dt-buttons .dt-button:hover {
            opacity: 0.9 !important;
        }
    </style>
    <!-- ✅ DataTables Initialization with Tailwind CSS -->
    {{-- <"flex justify-between items-center mb-4"Bf>rt<"flex justify-between items-center mt-4"lip> --}}

    <script>
        $(document).ready(function() {
            // [ Zero-configuration ] start
            $('#basic-table').DataTable({
                language: {
                    search: "",
                    searchPlaceholder: "🔍 Search...",
                    lengthMenu: "_MENU_ per page",
                    info: "Showing <span class='font-semibold'>_START_</span> to <span class='font-semibold'>_END_</span> of <span class='font-semibold'>_TOTAL_</span> entries",
                    paginate: {
                        previous: "<span class='px-3 py-2 -mx-4 bg-gray-500 text-white  rounded-md  hover:bg-black cursor-pointer'>Previous</span>",
                        next: "<span class='px-3 py-2 -mx-4 bg-gray-500 text-white rounded-md w-full hover:bg-black cursor-pointer'>Next</span>"
                    }
                },
                initComplete: function() {
                    // ✅ Search & dropdown styling
                    $('div.dataTables_filter input').addClass(
                        'border border-gray-300 rounded-lg px-3 py-2 focus:border-sky-500 focus:outline-none'
                    );

                    $('div.dataTables_length select').addClass(
                        'border border-gray-300 rounded-lg px-2 py-1 focus:border-sky-500 focus:outline-none'
                    );


                    $('div.dataTables_filter').addClass('mb-1');

                    // ✅ Pagination container ko flex bana do (gap deke)
                    $('.dataTables_paginate').addClass('flex items-center space-x-1 mt-3');

                    // ✅ Pagination buttons style
                    // $('.dataTables_paginate .paginate_button').addClass(
                    //     'px-3 py-2 border border-gray-300 bg-white text-blue-600 hover:bg-blue-500 hover:text-white transition'
                    // );

                    // ✅ Active button style
                    // $('.dataTables_paginate .paginate_button.current').addClass(
                    //     'bg-blue-500 text-white border-blue-500'
                    // );

                    // ✅ Remove unwanted outline/box-shadow
                    // $('.dataTables_paginate .paginate_button').css({
                    //     'box-shadow': 'none',
                    //     'outline': 'none'
                    // });
                }
            });

            $('#basic-table2').DataTable();


            // [ HTML5-Export ] start
            $('#studentTable').DataTable({
                dom: 'Bfrtip',
                buttons: [{
                        extend: 'copy',
                        text: 'Copy',

                        footer: true,
                        exportOptions: {
                            columns: ':not(:last-child)',
                        }
                    },
                    {
                        extend: 'csv',
                        text: 'CSV',

                        footer: true,
                        exportOptions: {
                            columns: ':not(:last-child)',
                        }
                    },
                    {
                        extend: 'excelHtml5',
                        text: 'Excel',

                        footer: true,
                        exportOptions: {
                            columns: ':not(:last-child)',
                        }
                    },
                    {
                        extend: 'pdf',
                        text: 'PDF',

                        footer: true,
                        exportOptions: {
                            columns: ':not(:last-child)',
                        }
                    },
                    {
                        extend: 'print',
                        text: 'Print',

                        footer: true,
                        exportOptions: {
                            columns: ':not(:last-child)',
                        }
                    }
                ],
                language: {
                    search: "",
                    searchPlaceholder: "🔍 Search...",
                    lengthMenu: "_MENU_ per page",
                    info: "Showing <span class='font-semibold'>_START_</span> to <span class='font-semibold'>_END_</span> of <span class='font-semibold'>_TOTAL_</span> entries",
                    paginate: {
                        previous: "<span class='px-3 py-2 -mx-4 bg-gray-500 text-white rounded-md hover:bg-black cursor-pointer'>Previous</span>",
                        next: "<span class='px-3 py-2 -mx-4 bg-gray-500 text-white rounded-md hover:bg-black cursor-pointer'>Next</span>"
                    }
                },
                initComplete: function() {
                    // ✅ Search & Dropdown styling
                    $('div.dataTables_filter input').addClass(
                        'border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-sky-500 focus:outline-none'
                    );
                    $('div.dataTables_length select').addClass(
                        'border border-gray-300 rounded-lg px-2 py-1 focus:ring-2 focus:ring-sky-500 focus:outline-none'
                    );
                    $('div.dataTables_filter').addClass('mb-1');

                    // ✅ Pagination buttons
                    $('.dataTables_paginate .paginate_button').addClass(
                        'px-2 py-1 mx-1 rounded bg-gray-200 hover:bg-blue-500 hover:text-white transition'
                    );
                    $('.dataTables_paginate .paginate_button.current').addClass(
                        'bg-blue-500 text-white'
                    );


                }
            });



            // [ HTML5-Export ] start

        });
    </script>

    <!-- Toastr message display -->
    <script type="text/javascript">
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                toastr.error("{{ $error }}");
            @endforeach
        @endif
    </script>

    <!-- Delete Dialog box JS -->
    <script>
        function openModal(id) {
            const modal = document.getElementById(id);
            const box = modal.querySelector('[id^="modalBox"]');
            modal.classList.remove('hidden');
            setTimeout(() => {
                box.classList.remove('scale-95', 'opacity-0');
                box.classList.add('scale-100', 'opacity-100');
            }, 50);
        }

        function closeModal(id) {
            const modal = document.getElementById(id);
            const box = modal.querySelector('[id^="modalBox"]');
            box.classList.add('scale-95', 'opacity-0');
            box.classList.remove('scale-100', 'opacity-100');
            setTimeout(() => {
                modal.classList.add('hidden');
            }, 200);
        }
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

    {{-- Page specific JS --}}
    @yield('page_js')





    {{-- <script>
        const ctx = document.getElementById("donationChart").getContext("2d");
        new Chart(ctx, {
            type: "line",
            data: {
                labels: [
                    "1",
                    "2",
                    "3",
                    "4",
                    "5",
                    "6",
                    "7",
                    "8",
                    "9",
                    "10",
                    "11",
                    "12",
                    "13",
                ],
                datasets: [{
                    label: "Donations",
                    data: [
                        1000, 4000, 7000, 16500, 8000, 7200, 1000, 950, 12500, 11500,
                        10500, 10200, 11200,
                    ],
                    borderColor: "#059669",
                    backgroundColor: "rgba(16, 185, 129, 0.1)",
                    tension: 0.3,
                    fill: true,
                    pointRadius: 4,
                    pointBackgroundColor: "#059669",
                    borderWidth: 2,
                }, ],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false
                    },
                },
                scales: {
                    y: {
                        ticks: {
                            callback: (value) => "Rs. " + value,
                            color: "#6B7280",
                            font: {
                                size: 12
                            },
                        },
                        grid: {
                            color: "#E5E7EB"
                        },
                    },
                    x: {
                        ticks: {
                            color: "#6B7280",
                            font: {
                                size: 12
                            }
                        },
                        grid: {
                            color: "#F3F4F6"
                        },
                    },
                },
            },
        });
    </script> --}}

    <script>
        const pieCanvas = document.getElementById("pieChart");
        if (pieCanvas && typeof Chart !== "undefined") {
        const pieCtx = pieCanvas.getContext("2d");
        new Chart(pieCtx, {
            type: "doughnut",
            data: {
                labels: ["Education", "Health Care", "Food Distribution", "Other"],
                datasets: [{
                    data: [40000, 30000, 28000, 10000],
                    backgroundColor: ["#fb923c", "#7c3aed", "#22d3ee", "#6b7280"],
                    borderWidth: 2,
                }, ],
            },
            options: {
                cutout: "70%",
                plugins: {
                    legend: {
                        display: false
                    },
                    tooltip: {
                        callbacks: {
                            label: (ctx) => `${ctx.label}: Rs. ${ctx.parsed}`,
                        },
                    },
                },
            },
        });
        }
    </script>






    <!-- Script to Load Sidebar and Navbar -->
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const toggleBtn = document.getElementById("menu-item");
            const sidebar = document.getElementById("sidebar");

            if (toggleBtn && sidebar) {
                toggleBtn.addEventListener("click", (e) => {
                    e.stopPropagation();
                    sidebar.classList.toggle("-translate-x-full");
                });

                // Close sidebar when clicking outside (mobile only)
                document.addEventListener("click", (e) => {
                    const isClickInside = sidebar.contains(e.target) || toggleBtn.contains(e.target);
                    const isMobile = window.innerWidth < 768;

                    if (!isClickInside && isMobile && !sidebar.classList.contains("-translate-x-full")) {
                        sidebar.classList.add("-translate-x-full");
                    }
                });
            }
        });
    </script>
