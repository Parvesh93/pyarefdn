
<script src="{{ asset('backend/tailwind-css/js/3.4.17') }}"></script>

<!-- ✅ DataTables css-->
<link rel="stylesheet" href="{{ asset('backend/datatable-tables/css/jquery.dataTables.min.css') }}">


<!-- DataTables Buttons -->
<link rel="stylesheet" href="{{ asset('backend/button-datables/css/buttons.dataTables.min.css') }}">

<!-- ✅ FontAwesome for icons -->


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />



<link href="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.15/main.min.css" rel="stylesheet">





<!-- page css -->

@yield('page_css')

<!-- Custom styles for the event calendar -->
<style>
        /* ✅ Event box transparent */
        .fc-daygrid-event {
            background: transparent !important;
            border: none !important;
            box-shadow: none !important;
            padding: 0 !important;
        }

        .fc-event-title {
            white-space: normal !important;
            overflow: visible !important;
            color: white !important;
            font-weight: 500;
        }

        /* ✅ आज की तारीख highlight */
        .fc-day-today {
            background-color: #bfdbfe !important;
            font-weight: bold;
            border: 2px solid #3b82f6;
        }

        /* ✅ Mobile view scroll fix */
        #calendar {
            overflow-x: auto;
        }


        /* ✅ FullCalendar header responsive */
        .fc-header-toolbar {
            display: flex;
            flex-wrap: wrap;
            /* line break allow karega */
            justify-content: space-between;
            gap: 0.5rem;
        }

        @media (max-width: 640px) {
            .fc-header-toolbar {
                flex-direction: column;
                /* Mobile me buttons niche aa jayenge */
                align-items: center;
                text-align: center;
            }

            .fc-toolbar-chunk {
                margin-bottom: 0.5rem;
            }
        }
    </style>



<!-- Toastr CSS -->
<link rel="stylesheet" href="{{ asset('backend/toaster/css/toastr.min.css') }}">




<!-- Add this style in your head section -->
