<div id="modalAddress"
    class="hidden fixed inset-0 z-50 flex items-center justify-center bg-gray-500 bg-opacity-75 transition-all duration-300">
    <div class="bg-white rounded-lg w-[30em] p-6 relative">
        <button class="text-gray-500 hover:text-gray-700 absolute top-2 left-2 rounded-full close-modal"><svg
                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="size-6 hover:text-blue-500">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
            </svg>
        </button>
        <h1 class="text-lg font-semibold text-center">Edit Address</h1>
        <p class="mt-4">Here you can edit your address...</p>
        {{-- Address Label --}}
        <div class="mt-4">
            <div class="relative">
                <input type="text" id="addressLabel" name="addressLabel"
                    class="peer h-10 w-full border-b-2 border-gray-300 text-gray-900 placeholder-transparent focus:outline-none focus:border-blue-600"
                    placeholder="Address Label" required />
                <label for="addressLabel"
                    class="absolute left-0 top-2 text-gray-600 transition-all duration-300 transform -translate-y-6 scale-75 origin-[0] peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-placeholder-shown:top-2 peer-focus:top-0 peer-focus:scale-75 peer-focus:-translate-y-3">
                    Address Label
                </label>
            </div>
            <div id="addressLabelValidation" class="mt-2 text-sm space-y-1 hidden">
                <div id="ruleEmpty" class="flex items-center text-red-500"><i class="fas fa-times-circle"></i>Field
                    Can't be Empty</div>
            </div>
        </div>
        {{-- Full Address --}}
        <div class="mt-4">
            <div class="relative">
                <textarea name="fullAdress" id="fullAdress" class="peer w-full border-b-2 border-gray-300 text-gray-900 placeholder-transparent focus:outline-none focus:border-blue-600" rows="3" required></textarea>
                <label for="fullAdress"
                    class="absolute left-0 top-2 text-gray-600 transition-all duration-300 transform -translate-y-6 scale-75 origin-[0] peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-placeholder-shown:top-2 peer-focus:top-0 peer-focus:scale-75 ">
                    Full Address
                </label>
            </div>
            <div id="fullAdressValidation" class="mt-2 text-sm space-y-1 hidden">
                <div id="ruleEmpty" class="flex items-center text-red-500"><i class="fas fa-times-circle"></i>Field
                    Can't be Empty</div>
            </div>
        </div>
        {{-- Note --}}
        <div class="mt-4">
            <div class="relative">
                <input type="text" id="noteOptional" name="noteOptional"
                    class="peer h-10 w-full border-b-2 border-gray-300 text-gray-900 placeholder-transparent focus:outline-none focus:border-blue-600"
                    placeholder="Note (Optional)" />
                <label for="noteOptional"
                    class="absolute left-0 top-2 text-gray-600 transition-all duration-300 transform -translate-y-6 scale-75 origin-[0] peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-placeholder-shown:top-2 peer-focus:top-0 peer-focus:scale-75 peer-focus:-translate-y-3">
                    Note (Optional)
                </label>
            </div>
            <div id="noteOptionalValidation" class="mt-2 text-sm space-y-1 hidden">
                <div id="ruleEmpty" class="flex items-center text-red-500"><i class="fas fa-times-circle"></i>Field
                    Can't be Empty</div>
            </div>
        </div>
        {{-- Receiver Name --}}
        <div class="mt-4">
            <div class="relative">
                <input type="text" id="receiverName" name="receiverName"
                    class="peer h-10 w-full border-b-2 border-gray-300 text-gray-900 placeholder-transparent focus:outline-none focus:border-blue-600"
                    placeholder="Receiver Name" />
                <label for="receiverName"
                    class="absolute left-0 top-2 text-gray-600 transition-all duration-300 transform -translate-y-6 scale-75 origin-[0] peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-placeholder-shown:top-2 peer-focus:top-0 peer-focus:scale-75 peer-focus:-translate-y-3">
                    Receiver Name
                </label>
            </div>
            <div id="receiverNameValidation" class="mt-2 text-sm space-y-1 hidden">
                <div id="ruleEmpty" class="flex items-center text-red-500"><i class="fas fa-times-circle"></i>Field
                    Can't be Empty</div>
            </div>
        </div>
        {{-- Phone Number --}}
        <div class="mt-4">
            <div class="relative">
                <input type="text" id="phoneNumber" name="phoneNumber"
                    class="peer h-10 w-full border-b-2 border-gray-300 text-gray-900 placeholder-transparent focus:outline-none focus:border-blue-600"
                    placeholder="Phone Number" />
                <label for="phoneNumber"
                    class="absolute left-0 top-2 text-gray-600 transition-all duration-300 transform -translate-y-6 scale-75 origin-[0] peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-placeholder-shown:top-2 peer-focus:top-0 peer-focus:scale-75 peer-focus:-translate-y-3">
                    Phone Number
                </label>
            </div>
            <div id="phoneNumberValidation" class="mt-2 text-sm space-y-1 hidden">
                <div id="ruleEmpty" class="flex items-center text-red-500"><i class="fas fa-times-circle"></i>Field
                    Can't be Empty</div>
            </div>
        </div>




    </div>
</div>
