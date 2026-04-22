<!-- Tailwind Modal -->
<div id="showModal-{{ $row->id }}" class="fixed inset-0 z-50 hidden overflow-y-auto" aria-labelledby="myModalLabel"
    role="dialog" aria-modal="true">
    <div class="flex items-center justify-center px-4">
        <div class="bg-white rounded-lg shadow-xl w-full max-w-4xl">
            <!-- Modal Header -->
            <div class="flex justify-between items-center px-6 py-4 border-b">
                <h5 class="text-xl font-semibold text-blue-500" id="myModalLabel">{{ __('modal_view') }}
                    {{ $title }}</h5>
                <button type="button" class="text-gray-500 hover:text-red-600 text-2xl font-bold"
                    onclick="document.getElementById('showModal-{{ $row->id }}').classList.add('hidden')">&times;</button>
            </div>

            <!-- Modal Body -->
            <div class="px-6 py-4 space-y-4">
                <h4><span class="text-blue-400">{{ __('field_title') }}:</span> {{ $row->title }}</h4>
                <hr class="border-gray-200" />

                <p>
                <h4><span class="text-blue-400">{{ __('field_sub_title') }}:</span> {{ $row->sub_title }}</h4>
                </p>
                <hr class="border-gray-200" />


                <div>
                    <span class="text-blue-400 ">{{ __('field_image') }}:</span>
                   
                    <div class="mt-2">
                        <img class="w-40 h-20 rounded" src="{{ asset('uploads/blog/' . $row->attach) }}" alt="">
                    </div>

                </div>


                <hr class="border-gray-200" />

                <p><span class="text-blue-400">{{ __('field_description') }}:</span> {!! $row->description !!}</p>
                <hr class="border-gray-200" />

                <p>
                    <span class="text-blue-400">{{ __('field_status') }}:</span>
                    @if ($row->status == 1)
                        <span
                            class="inline-block px-3 py-1 text-sm font-semibold text-green-800 bg-green-100 rounded-full">{{ __('status_active') }}</span>
                    @else
                        <span
                            class="inline-block px-3 py-1 text-sm font-semibold text-red-800 bg-red-100 rounded-full">{{ __('status_inactive') }}</span>
                    @endif
                </p>
            </div>

            <!-- Modal Footer -->
            <div class="flex justify-end px-6 py-4 border-t">
                <button type="button" class="px-4 py-2 text-white bg-gray-600 hover:bg-gray-700 rounded"
                    onclick="document.getElementById('showModal-{{ $row->id }}').classList.add('hidden')">
                    <i class="fas fa-times mr-1"></i> {{ __('btn_close') }}
                </button>
            </div>
        </div>
    </div>
</div>
