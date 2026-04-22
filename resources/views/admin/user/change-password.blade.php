<!-- Change Password Modal -->
<div id="changePasswordModal-{{ $row->id }}" class="fixed inset-0 z-50 hidden overflow-y-auto" aria-labelledby="myModalLabel" role="dialog" aria-modal="true">
    <div class="flex items-center justify-center  px-4">
        <div class="bg-white rounded-lg shadow-xl w-full max-w-md">
            <form action="{{ route($route.'.change.password') }}" method="post" enctype="multipart/form-data" novalidate class="space-y-0">
                @csrf
                <input type="hidden" name="staff_id" value="{{ $row->id }}">

                <!-- Modal Header -->
                <div class="flex justify-between items-center px-6 py-4 border-b">
                    <h5 class="text-xl font-semibold text-gray-800" id="myModalLabel">{{ __('change_password') }}</h5>
                    <button type="button" class="text-gray-500 hover:text-red-600 text-2xl font-bold"  onclick="document.getElementById('changePasswordModal-{{ $row->id }}').classList.add('hidden')">&times;</button>
                </div>

                <!-- Modal Body -->
                <div class="px-6 py-4 space-y-4">
                    <!-- Password -->
                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700">
                            {{ __('field_password') }} <span class="text-red-500">*</span>
                        </label>
                        <input type="password" name="password" id="password" required autocomplete="new-password"
                               class="w-full px-4 py-2 border rounded-lg bg-gray-50 text-gray-800">

                        <div class="text-red-500 text-sm mt-1 hidden" id="password-error">
                            {{ __('required_field') }} {{ __('field_password') }}
                        </div>
                    </div>

                    <!-- Confirm Password -->
                    <div>
                        <label for="password-confirm" class="block text-sm font-medium text-gray-700">
                            {{ __('field_confirm_password') }} <span class="text-red-500">*</span>
                        </label>
                        <input type="password" name="password_confirmation" id="password-confirm" required autocomplete="new-password"
                               class="w-full px-4 py-2 border rounded-lg bg-gray-50 text-gray-800">

                        <div class="text-red-500 text-sm mt-1 hidden" id="password-confirm-error">
                            {{ __('required_field') }} {{ __('field_confirm_password') }}
                        </div>
                    </div>
                </div>

                <!-- Modal Footer -->
                <div class="flex justify-end gap-2 px-6 py-4 border-t bg-gray-50">
                    <button type="button" class="px-4 py-2 text-sm text-gray-700 bg-gray-200 hover:bg-gray-300 rounded"  onclick="document.getElementById('changePasswordModal-{{ $row->id }}').classList.add('hidden')">
                        <i class="fas fa-times mr-1"></i> {{ __('btn_close') }}
                    </button>
                    <button type="submit" class="px-4 py-2 text-sm text-white bg-green-600 hover:bg-green-700 rounded">
                        <i class="fas fa-check mr-1"></i> {{ __('btn_change') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
