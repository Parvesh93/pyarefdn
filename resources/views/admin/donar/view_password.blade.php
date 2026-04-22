<!-- Edit Modal -->
<div id="printPasswordModel-{{ $row->id }}"
    class="hidden fixed inset-0 z-50 flex items-start justify-center bg-black bg-opacity-50 overflow-y-auto">
    <div class="bg-white rounded shadow-2xl w-full max-w-lg p-6 relative mt-5 mb-3 animate-fadeIn">

        <!-- Close Button -->

        <div class="w-full bg-blue-500">
            <button type="button"
                onclick="document.getElementById('printPasswordModel-{{ $row->id }}').classList.add('hidden')"
                class="absolute top-3 right-3 text-gray-600 hover:text-red-600 text-2xl font-bold">
                &times;
            </button>



            <div class="bg-white  border-l-4 border-blue-500">
                <h5 class="pl-1 text-lg font-semibold  mb-4">{{ 'Donor Password' }}</h5>
            </div>
        </div>

        <div class="w-full max-w-md bg-white  rounded-xl p-6">
            <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">
                Donor Password Information
            </h2>

            <!-- Email -->
            <div class="mb-4">
                <label class="block text-gray-600 font-medium mb-1">Email:</label>
                <div class="w-full px-4 py-2 border rounded-lg bg-gray-50 text-gray-800">
                    {{ $row->email ?? 'donor@example.com' }}
                </div>
            </div>

            <!-- Password -->
            <div class="mb-6">
                <label class="block text-gray-600 font-medium mb-1">Password:</label>
                <div class="w-full px-4 py-2 border rounded-lg bg-gray-50 text-gray-800">
                    {{ Crypt::decryptString(@$row->password_text) ?? '********' }}
                </div>
            </div>


        </div>

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
