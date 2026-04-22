<div id="deleteModal-{{ $row->id }}"
    class="fixed inset-0 hidden bg-black bg-opacity-50 backdrop-blur-sm flex items-center justify-center z-[9999]">

    <!-- Modal Box -->
    <div id="modalBox-{{ $row->id }}"
        class="bg-white rounded-2xl shadow-xl w-[90%] max-w-md p-6 transform transition-all scale-95 opacity-0 duration-300 mx-2">

        <!-- Icon -->
        <div class="flex items-center justify-center w-12 h-12 mx-auto rounded-full bg-red-100 text-red-600 mb-4">
            <i class="fas fa-exclamation-triangle text-xl"></i>
        </div>

        <!-- Title -->
        <h2 class="text-xl font-bold text-gray-800 text-center">Confirm Delete</h2>
        <p class="text-gray-500 text-center mt-2">
            Are you sure you want to delete this record? This action cannot be undone.
        </p>

        <!-- Buttons -->
        <div class="flex justify-center gap-4 mt-6">
            <button type="button" onclick="closeModal('deleteModal-{{ $row->id }}')"
                class="px-5 py-2 rounded-lg border border-gray-300 text-gray-700 hover:bg-gray-100 transition-all">
                Cancel
            </button>

            <form action="{{ route($route . '.destroy', $row->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <input type="hidden" name="id" value="{{ $row->id }}">
                <button type="submit"
                    class="px-5 py-2 rounded-lg bg-red-500 text-white font-medium hover:bg-red-600 shadow-sm transition-all">
                    Delete
                </button>
            </form>
        </div>
    </div>
</div>
