<!-- Top Bar -->
<!--    <div class="bg-[#16163F] text-white text-sm">-->
<!--        <div class="max-w-screen-xl mx-auto flex flex-col sm:flex-row justify-between items-center px-4 py-1">-->
<!--            <div class="flex items-center space-x-4">-->
<!--                <span>Email:-->
<!--                    <a href="mailto:pyarefdn@gmail.com" class="underline">pyarefdn@gmail.com</a></span>-->
<!--                <span>Mob: +91-9811409367</span>-->
<!--            </div>-->
<!--            <div class="text-center mt-1 sm:mt-0">-->
<!--                TAX EXEMPTED UNDER SECTION 12A & 80G-->
<!--            </div>-->
<!--            <div class="flex space-x-3 mt-1 sm:mt-0">-->
<!--                <a href="https://www.instagram.com/pyarefoundation/" target="_blank"><img-->
<!--                        src={{ asset('uploads/images/icon/instagram.png') }} alt="Instagram" class="h-4 w-4" /></a>-->
<!--                <a href="https://www.facebook.com/Pyarefoundation/" target="_blank"><img-->
<!--                        src={{ asset('uploads/images/icon/facebook.png') }} alt="Facebook" class="h-4 w-4" /></a>-->
<!--                <a href="https://www.youtube.com/channel/UC-wbMX7tBO74dF_votB0QEg" target="_blank"><img-->
<!--                        src={{ asset('uploads/images/icon/youtube.png') }} alt="YouTube" class="h-4 w-4" /></a>-->
<!--                <a href="#"><img src={{ asset('uploads/images/icon/linkedin.png') }} alt="LinkedIn"-->
<!--                        class="h-4 w-4" /></a>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->


@php
    // Build list from DB/array; supports strings or objects with ->title
    $achList =
        isset($achievements) && count($achievements)
            ? collect($achievements)->map(fn($a) => is_object($a) ? $a->title ?? '' : (string) $a)->filter()->values()
            : collect([
                'Plantation drive with 4000+ trees, 95% survival rate',
                'Established 5 mini dispensaries and 5 female care units in remote villages',
                'Served 6000+ people across 20+ villages through Govind Leela project',
                'Provided scholarships to underprivileged students',
                'Provided inexpensive medicines to people through Pradhan Mantri Jan Aushadhi Kendra',
                'Planted 5000 tress from 5th June, 2021 to 5th June 2022, 95% plants survived',
            ]);

    // Text with separator (you can change " • ")
    $sep = ' • ';
    $achText = $achList->implode("{$sep} ");
@endphp

<style>
    /* Seamless marquee */
    .ach-marquee {
        position: relative;
        overflow: hidden;
    }

    .ach-track {
        display: flex;
        white-space: nowrap;
        width: max-content;
        animation: ach-scroll var(--ach-duration, 28s) linear infinite;
    }

    .ach-track:hover {
        animation-play-state: paused;
    }

    /* optional pause on hover */
    .ach-chunk {
        padding-right: 3rem;
    }

    /* little breathing room between duplicates */
    @keyframes ach-scroll {
        from {
            transform: translateX(0);
        }

        to {
            transform: translateX(-50%);
        }

        /* two equal chunks => -50% is seamless */
    }
</style>

<!-- Achievements Top Bar (tight, continuous, no vertical padding) -->
<div class="w-full bg-[#0f1240] text-white text-[13px] leading-none">
    <div class="flex h-9">
        <!-- Left label (fixed) -->
        <div class="bg-[#F59E0B] text-[#0B0D17] font-semibold px-3 h-full inline-flex items-center whitespace-nowrap">
            Our <span class="font-normal ml-1">Achievements</span>
        </div>

        <!-- Seamless marquee -->
        <div class="flex-1 ach-marquee h-full">
            <div class="ach-track h-full flex items-center" style="--ach-duration: 28s;">
                <!-- chunk #1 -->
                <span class="ach-chunk">{{ $achText }}</span>
                <!-- chunk #2 (duplicate for seamless loop) -->
                <span class="ach-chunk" aria-hidden="true">{{ $achText }}</span>
            </div>
        </div>
    </div>
</div>
