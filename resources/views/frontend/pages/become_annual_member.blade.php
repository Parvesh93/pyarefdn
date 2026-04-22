@section('title')
    Annual Member
@endsection


@extends('frontend.layouts.master')

@section('content')
    <!-- Title section -->

    <section class="relative py-6  bg-cover bg-center overflow-hidden text-white">
        <!-- Noise / Grainy Texture Overlay -->
        <div class="absolute inset-0 mix-blend-overlay pointer-events-none bg-[#0f1240]">
        </div>

        <div class="relative max-w-screen-xl md:mx-8 px-6">
            <h2 class="md:text-2xl text-2xl font-bold">ANNUAL MEMBER</h2>
            <nav class="mt-3 text-sm">
                <i class="fa-sharp-duotone fa-solid fa-house"></i> <a href="{{ route('home') }}"
                    class="text-[16px] text-orange-400 font-semibold hover:underline">Home</a>
                <span class="mx-1 text-gray-200">/</span>
                <span class="text-[16px] text-gray-300">Annual Member</span>
            </nav>
        </div>
    </section>

    <!-- Why volunteer section -->
    <section class="w-full bg-white py-14 px-4">
        <div class="md:mx-11 text-center">
            <!-- Heading -->
            <h2 class="text-2xl sm:text-3xl font-bold text-gray-900 mb-3">
                WHY ANNUAL MEMBER WITH
                <span class="text-[#f4a300]">PYARE FOUNDATION</span> ?
            </h2>
            <p class="text-sm sm:text-base text-gray-600 max-w-2xl mx-auto leading-relaxed mb-10">
                Join a community committed to long-term change. Your annual membership
                fuels year-round impact — supporting education, environment, and
                empowerment. As a member, you're not just donating — you're driving
                transformation.
            </p>

            <!-- 3 Feature Cards -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Card 1 -->
                <div class="relative overflow-hidden rounded-xl bg-[#fee09c] px-6 py-6 text-center">
                    <!-- Background Bubbles -->
                    <div class="absolute -top-8 -left-8 w-32 h-32 bg-orange-400 rounded-full opacity-30 z-0"></div>
                    <div class="absolute top-6 left-6 w-48 h-48 bg-orange-300 rounded-full opacity-20 z-0"></div>
                    <!-- Content -->
                    <div class="relative z-10">
                        <h3 class="text-sm font-bold text-black uppercase mb-2">
                            SUSTAIN IMPACT
                        </h3>
                        <p class="text-sm text-gray-700 leading-relaxed">
                            Support continuous programs in education, health, and community
                            development throughout the year.
                        </p>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="relative overflow-hidden rounded-xl bg-[#fee09c] px-6 py-6 text-center">
                    <!-- Background Bubbles -->
                    <div class="absolute -top-8 -left-8 w-32 h-32 bg-orange-400 rounded-full opacity-30 z-0"></div>
                    <div class="absolute top-6 left-6 w-48 h-48 bg-orange-300 rounded-full opacity-20 z-0"></div>
                    <!-- Content -->
                    <div class="relative z-10">
                        <h3 class="text-sm font-bold text-black uppercase mb-2">
                            CHAMPION SUSTAINABILITY
                        </h3>
                        <p class="text-sm text-gray-700 leading-relaxed">
                            Fund long-term environmental and welfare projects that protect
                            our planet and future generations.
                        </p>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="relative overflow-hidden rounded-xl bg-[#fee09c] px-6 py-6 text-center">
                    <!-- Background Bubbles -->
                    <div class="absolute -top-8 -left-8 w-32 h-32 bg-orange-400 rounded-full opacity-30 z-0"></div>
                    <div class="absolute top-6 left-6 w-48 h-48 bg-orange-300 rounded-full opacity-20 z-0"></div>
                    <!-- Content -->
                    <div class="relative z-10">
                        <h3 class="text-sm font-bold text-black uppercase mb-2">
                            LEAD WITH PURPOSE
                        </h3>
                        <p class="text-sm text-gray-700 leading-relaxed">
                            Gain access to exclusive member updates, impact reports, and
                            opportunities to co-create future initiatives.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- registraion form  -->
    <section class="w-full bg-[#f9f9f9] py-12 px-2">
        <div class="md:mx-4 px-2 sm:px-2 lg:px-8">
            <div class="bg-white rounded-lg shadow-md p-6 sm:p-10">
                <!-- Heading -->
                <h2 class="text-2xl sm:text-3xl font-semibold text-gray-800 mb-6 border-b pb-2">
                    REGISTRATION
                </h2>

                <form action="{{ route('store.annual-member') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <!-- Name -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Name *</label>
                            <input type="text" placeholder="FIRST NAME" name="first_name"
                                class="w-full border border-gray-300 rounded px-4 py-2 text-sm" />
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1 invisible">Last Name *</label>
                            <input type="text" placeholder="LAST NAME" name="last_name"
                                class="w-full border border-gray-300 rounded px-4 py-2 text-sm" />
                        </div>
                    </div>

                    <!-- Email & Contact -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Email *</label>
                            <input type="email" placeholder="EMAIL" name="email"
                                class="w-full border border-gray-300 rounded px-4 py-2 text-sm" />
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Contact *</label>
                            <input type="text" placeholder="+91" name="contact"
                                class="w-full border border-gray-300 rounded px-4 py-2 text-sm" />
                        </div>
                    </div>

                    <!-- Address -->
                    <div class="mb-6">
                        <label class="block text-sm font-medium text-gray-700 mb-1">Address *</label>
                        <input type="text" placeholder="ADDRESS" name="address"
                            class="w-full border border-gray-300 rounded px-4 py-2 text-sm" />
                    </div>

                    <!-- City & State -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">City *</label>
                            <input type="text" placeholder="CITY" name="city"
                                class="w-full border border-gray-300 rounded px-4 py-2 text-sm" />
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">State *</label>
                            <select class="w-full border border-gray-300 rounded px-4 py-2 text-sm" name="state">
                                <option disabled selected>Select State</option>
                                <option value="Andhra Pradesh">Andhra Pradesh</option>
                                <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                <option value="Assam">Assam</option>
                                <option value="Bihar">Bihar</option>
                                <option value="Chhattisgarh">Chhattisgarh</option>
                                <option value="Goa">Goa</option>
                                <option value="Gujarat">Gujarat</option>
                                <option value="Haryana">Haryana</option>
                                <option value="Himachal Pradesh">Himachal Pradesh</option>
                                <option value="Jharkhand">Jharkhand</option>
                                <option value="Jharkhand">Delhi</option>
                                <option value="Karnataka">Karnataka</option>
                                <option value="Kerala">Kerala</option>
                                <option value="Madhya Pradesh">Madhya Pradesh</option>
                                <option value="Maharashtra">Maharashtra</option>
                                <option value="Manipur">Manipur</option>
                                <option value="Meghalaya">Meghalaya</option>
                                <option value="Mizoram">Mizoram</option>
                                <option value="Nagaland">Nagaland</option>
                                <option value="Odisha">Odisha</option>
                                <option value="Punjab">Punjab</option>
                                <option value="Rajasthan">Rajasthan</option>
                                <option value="Sikkim">Sikkim</option>
                                <option value="Tamil Nadu">Tamil Nadu</option>
                                <option value="Telangana">Telangana</option>
                                <option value="Tripura">Tripura</option>
                                <option value="Uttar Pradesh">Uttar Pradesh</option>
                                <option value="Uttarakhand">Uttarakhand</option>
                                <option value="West Bengal">West Bengal</option>
                                <option value="West Bengal">Andaman & Nicobar Islands</option>
                                <option value="West Bengal">Ladakh</option>
                                <option value="West Bengal">Lakshadweep</option>
                                <option value="West Bengal">Puducherry</option>
                            </select>
                        </div>
                    </div>

                    <!-- DOB & Gender -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">DOB *</label>
                            <input type="date" class="w-full border border-gray-300 rounded px-4 py-2 text-sm"
                                name="dob" />
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Gender *</label>
                            <select class="w-full border border-gray-300 rounded px-4 py-2 text-sm" name="gender">
                                <option value="">Select Gender</option>
                                <option value="MALE">MALE</option>
                                <option value="FEMALE">FEMALE</option>
                                <option value="OTHER">OTHER</option>
                            </select>
                        </div>
                    </div>
                    
                    

                    <!-- Join Reason -->
                    <div class="mb-6">
                        <label class="block text-sm font-medium text-gray-700 mb-1">Where did you hear about us? *</label>
                        <textarea rows="3" placeholder="Here About Pyare Foundation" class="w-full border border-gray-300 rounded px-4 py-2 text-sm"
                            name="hear_pyare"></textarea>
                    </div>

                    <!-- Experience -->
                    <div class="mb-6">
                        <label class="block text-sm font-medium text-gray-700 mb-1">Any previous experience? *</label>
                        <textarea rows="3" placeholder="EXPERIENCE" class="w-full border border-gray-300 rounded px-4 py-2 text-sm"
                            name="experience"></textarea>
                    </div>

                    <!-- Join Reason -->
                    <div class="mb-6">
                        <label class="block text-sm font-medium text-gray-700 mb-1">Why do you want to join? *</label>
                        <textarea rows="3" placeholder="JOIN" class="w-full border border-gray-300 rounded px-4 py-2 text-sm"
                            name="join_member"></textarea>
                    </div>
                    
                     <!-- Experience -->
                    <div class="mb-6">
                        <label class="block text-sm font-medium text-gray-700 mb-1">Do you want to say something about Pyare Foundation? *</label>
                        <textarea rows="3" placeholder="About Pyare Foundation" class="w-full border border-gray-300 rounded px-4 py-2 text-sm"
                            name="about_pyare"></textarea>
                    </div>
                    
                    <!-- Documents -->
                     <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Upload Aadhaar *</label>
                            <input type="file" name="aadhaar_path" accept=".jpg,.jpeg,.png,.pdf"
                                class="w-full border border-gray-300 rounded px-4 py-2 text-sm bg-white" />
                            <p class="text-xs text-gray-500 mt-1">Allowed: JPG, PNG, PDF (max 2MB)</p>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Upload PAN *</label>
                            <input type="file" name="pan_path" accept=".jpg,.jpeg,.png,.pdf"
                                class="w-full border border-gray-300 rounded px-4 py-2 text-sm bg-white" />
                            <p class="text-xs text-gray-500 mt-1">Allowed: JPG, PNG, PDF (max 2MB)</p>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Passport Size Photo *</label>
                            <input type="file" name="photo_path" accept=".jpg,.jpeg,.png"
                                class="w-full border border-gray-300 rounded px-4 py-2 text-sm bg-white" />
                            <p class="text-xs text-gray-500 mt-1">Allowed: JPG, PNG (max 2MB)</p>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div>
                        <button
                            class="bg-[#16163F] text-white text-sm font-semibold px-6 py-2 rounded hover:bg-[#0f0f3a] transition-all duration-300">
                            SUBMIT
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </section>
@endsection
