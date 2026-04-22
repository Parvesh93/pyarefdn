<!-- Edit Button -->


<!-- Edit Modal -->
<div id="editModal-{{ $row->id }}"
    class="hidden fixed inset-0 z-50 flex items-start justify-center bg-black bg-opacity-50 overflow-y-auto">
    <div class="bg-white rounded shadow-2xl w-full max-w-lg p-6 relative mt-5 mb-3 animate-fadeIn">

        <!-- Close Button -->

        <div class="w-full bg-blue-500">
            <button type="button"
                onclick="document.getElementById('editModal-{{ $row->id }}').classList.add('hidden')"
                class="absolute top-3 right-3 text-gray-600 hover:text-red-600 text-2xl font-bold">
                &times;
            </button>



            <div class="bg-white  border-l-4 border-blue-500">
                <h5 class="pl-1 text-lg font-semibold  mb-4">{{ __('modal_edit') }} {{ 'Focuses' }}</h5>
            </div>
        </div>


        <form action="{{ route($route . '.update', $row->id) }}" method="POST" enctype="multipart/form-data"
            class="space-y-3">
            @csrf
            @method('PUT')

            <!-- Title -->
            <div>
                <label for="title" class="block text-sm font-medium text-gray-700 mb-1">Title <span
                        class="text-red-500">*</span></label>
                <input type="text" name="title"
                    class="w-full px-2 py-2 bg-blue-50 border-0 border-b-2  focus:outline-none focus:ring-0 focus:border-blue-400"
                    value="{{ $row->title }}" placeholder="Enter title" required />
            </div>

            





            <!-- Image -->
            <div>
                <label for="attach" class="block text-sm font-medium text-gray-700 mb-1">{{ 'Image' }}
                    <span
                        class="text-sm text-gray-500">({{ __('image_size', ['height' => 'auto', 'width' => 500]) }})</span>
                    <span class="text-red-500">*</span>
                </label>
                <input type="file" name="attach" id="attach"
                    class="w-full px-2 py-2 bg-blue-50 border-0 border-b-2  focus:outline-none focus:ring-0 focus:border-blue-400">
            </div>
            
            
           
            
           


            <!-- Status -->
            <div>
                <label for="status" class="block text-sm font-medium text-gray-700 mb-1">{{ 'Status' }}</label>
                <select name="status" id="status"
                    class="w-full px-2 py-2 bg-blue-50 border-0 border-b-2  focus:outline-none focus:ring-0 focus:border-blue-400">
                    <option value="1" @if ($row->status == 1) selected @endif>{{ 'Active' }}
                    </option>
                    <option value="0" @if ($row->status == 0) selected @endif>
                        {{ 'Inactive' }}</option>
                </select>
            </div>

            <!-- Footer Buttons -->
            <div class="flex justify-end gap-4 pt-6 ">
                <button type="button"
                    onclick="document.getElementById('editModal-{{ $row->id }}').classList.add('hidden')"
                    class="px-4 py-2 bg-gray-400 text-white rounded-lg hover:bg-gray-500 transition">
                    <i class="fas fa-times"></i> {{ __('btn_close') }}
                </button>
                <button type="submit"
                    class="px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700 transition">
                    <i class="fas fa-check"></i> {{ __('btn_update') }}
                </button>
            </div>
        </form>
    </div>
</div>

<!-- Animation -->
<style>
    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(-30px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .animate-fadeIn {
        animation: fadeIn 0.3s ease-out;
    }
</style>
