 <section class="w-full py-10 bg-[#f4e0b9]">
  <div class="w-full mx-auto px-4 md:px-8">
    <h2 class="font-heading font-extrabold text-center text-2xl md:text-3xl font-semibold mb-6">
      JOIN OUR HANDS
    </h2>

    <form id="payment-form" action="{{ route('admin.donation.store') }}" method="POST"
      class="flex flex-col md:flex-row md:flex-wrap gap-3 md:justify-center items-center w-full">
      @csrf

      <!-- Toggle Buttons -->
      <div class="flex border rounded overflow-hidden w-full md:w-auto" id="donationType">
        <button type="button" data-type="one-time"
          class="donation-btn bg-black text-white text-sm font-semibold px-6 py-2 w-1/2 md:w-auto">
          ONE TIME
        </button>
        <button type="button" data-type="monthly"
          class="donation-btn bg-[#f4e0b9] text-black text-sm font-semibold px-6 py-2 w-1/2 md:w-auto">
          MONTHLY
        </button>
      </div>

      <!-- Hidden input to store selected type -->
      <input type="hidden" name="donationTypeValue" id="donationTypeValue" value="one-time" />

      <!-- Amount -->
      <div class="flex items-center border rounded px-3 py-2 bg-white w-full md:w-[140px]">
        <input type="text" id="customAmount" placeholder="AMOUNT"
          class="text-sm w-full focus:outline-none" name="amount" />
        <span class="ml-2 text-gray-500">₹</span>
      </div>

      <!-- Name -->
      <div class="flex items-center border rounded px-3 py-2 bg-white w-full md:w-[180px]">
        <input type="text" placeholder="NAME" class="text-sm w-full focus:outline-none" name="firstName" />
        <svg class="w-4 h-4 ml-2 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M5.121 17.804A11.955 11.955 0 0112 15c2.5 0 4.847.76 6.879 2.053M15 10a3 3 0 11-6 0 3 3 0 016 0z" />
        </svg>
      </div>

      <!-- Email -->
      <div class="flex items-center border rounded px-3 py-2 bg-white w-full md:w-[220px]">
        <input type="email" placeholder="EMAIL" class="text-sm w-full focus:outline-none" name="email" />
        <svg class="w-4 h-4 ml-2 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M16 12l-4-4-4 4m0 0l4 4 4-4" />
        </svg>
      </div>

      <!-- Razorpay Payment ID -->
      <input type="hidden" name="razorpay_payment_id" id="razorpay_payment_id">
      <input type="hidden" name="razorpay_order_id" id="razorpay_order_id">
      <input type="hidden" name="razorpay_signature" id="razorpay_signature">

      <!-- Donate Button -->
      <button type="submit" id="pay-button"
        class="bg-orange-500 hover:bg-orange-600 text-white font-semibold px-6 py-2 rounded transition w-full md:w-auto">
        DONATE NOW
      </button>
    </form>
  </div>
</section>
