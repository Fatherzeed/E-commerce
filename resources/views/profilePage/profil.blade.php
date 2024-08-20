@extends('partials.main')

@section('content')
    @include('partials.navbar')
    @include('partials.cart')
    <div class="w-full min-h-[100dvh] h-auto">
        <div class="h-full flex mx-auto justify-center">
            <div class="wrapper90 h-full flex lg:flex-row flex-col justify-center py-5">
                @include('profilePage.sidebar')
                <div class="w-full flex-col flex gap-y-5">
                    <div class="w-full h-fit shadow-xl rounded-xl flex flex-col md:flex-row p-5">
                        <div class="md:w-1/3 w-full flex md:justify-start justify-center mb-5 md:mb-0">
                            <div class="w-fit h-fit rounded-full relative">
                                <img id="profileImage" src="{{ Auth::user()->profile_photo ?? '' }}" alt="Profile Image"
                                    class="xl:size-64 md:size-40 size-36 rounded-full object-cover object-center relative">
                                <div
                                    class="w-10 h-10 rounded-full absolute xl:bottom-4 xl:right-5 md:bottom-1 md:right-1 bottom-0 right-0 bg-black">
                                    <label for="userPicture" class="group text-xs cursor-pointer">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor"
                                            class="size-10 p-2 rounded-full border-2 border-black bg-gray-300 group-hover:bg-gray-100 duration-300 ease-in-out group-hover:ring-1 group-hover:ring-gray-900">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M6.827 6.175A2.31 2.31 0 0 1 5.186 7.23c-.38.054-.757.112-1.134.175C2.999 7.58 2.25 8.507 2.25 9.574V18a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 18V9.574c0-1.067-.75-1.994-1.802-2.169a47.865 47.865 0 0 0-1.134-.175 2.31 2.31 0 0 1-1.64-1.055l-.822-1.316a2.192 2.192 0 0 0-1.736-1.039 48.774 48.774 0 0 0-5.232 0 2.192 2.192 0 0 0-1.736 1.039l-.821 1.316Z" />
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M16.5 12.75a4.5 4.5 0 1 1-9 0 4.5 4.5 0 0 1 9 0ZM18.75 10.5h.008v.008h-.008V10.5Z" />
                                        </svg>
                                    </label>
                                    <input type="file" id="userPicture" class="hidden" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="md:w-2/3 w-full">
                            <form action="">
                                <ul class="text-left text-xs md:text-md">
                                    <div class="justify-between flex">
                                        <h1 class="font-bold">Biodata Diri</h1>
                                        <label class="inline-flex items-center cursor-pointer">
                                            <input type="checkbox" id="enableEdit" class="sr-only peer">
                                            <div
                                                class="relative w-7 h-4 bg-gray-200 peer-focus:outline-none peer-focus:ring-2 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-3 after:w-3 after:transition-all peer-checked:bg-blue-600">
                                            </div>
                                            <span class="ms-3 text-sm font-medium text-gray-900">Update
                                                Profile?</span>
                                        </label>
                                    </div>

                                    <div class="grid grid-cols-4 mt-3">
                                        <div class="flex flex-col gap-y-3">
                                            <label class="p-2" for="namaUser">Nama</label>
                                            <label class="p-2" for="tgllahirUser">Birth Date</label>
                                            <label class="p-2" for="genderUser">Gender</label>
                                        </div>
                                        <div class="col-span-3 flex flex-col gap-y-3">
                                            <input id="namaUser" name="namaUser" type="text"
                                                value="{{ Auth::user()->full_name ?? 'John Doe' }}"
                                                class="bg-gray-50 p-2 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500"
                                                disabled>
                                            <input id="tgllahirUser" name="tgllahirUser" type="date"
                                                value="{{ Auth::user()->birth_date ?? '' }}"
                                                class="bg-gray-50 p-2 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500"
                                                disabled>
                                            <select id="genderUser" name="genderUser"
                                                class="bg-gray-50 p-2 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500"
                                                disabled>
                                                <option value="" {{ Auth::user()->gender == null ? 'selected' : '' }}>
                                                    Open this selection menu</option>
                                                <option class="text-gray-900" value="male"
                                                    {{ Auth::user()->gender == 'male' ? 'selected' : '' }}>Laki-laki
                                                </option>
                                                <option class="text-gray-900" value="female"
                                                    {{ Auth::user()->gender == 'female' ? 'selected' : '' }}>Perempuan
                                                </option>
                                            </select>

                                        </div>

                                    </div>
                                </ul>
                                <ul class="text-left mt-6 text-xs md:text-md">
                                    <h1 class="font-bold">Kontak</h1>
                                    <div class="grid grid-cols-4 mt-3">
                                        <div class="flex flex-col gap-y-3">
                                            <label class="p-2" for="emailUser">Email</label>
                                            <label class="p-2" for="nomorUser">Nomor</label>
                                        </div>
                                        <div class="col-span-3 flex flex-col gap-y-3">
                                            <input id="emailUser" name="emailUser" type="email"
                                                value="{{ Auth::user()->email ?? 'contohemail@example.com' }}"
                                                class="bg-gray-50 p-2 focus:outline-none focus:ring-2 focus:ring-blue-500  rounded-md border border-gray-300"
                                                disabled>
                                            <input id="nomorUser" name="nomorUser" type="text"
                                                value="{{ Auth::user()->phone ?? '082154845769' }}"
                                                class="bg-gray-50 p-2 focus:outline-none focus:ring-2 focus:ring-blue-500  rounded-md border border-gray-300"
                                                disabled>
                                        </div>
                                    </div>
                                </ul>
                                <button id="saveBtn"
                                    class="mt-4 md:px-3 px-2 py-1 text-xs md:text-sm items-center bg-blue-500 text-white rounded-md flex gap-x-1 hover:bg-white hover:text-blue-500 hover:ring-2 hover:ring-blue-500 duration-200 ease-in-out">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="size-4 md:size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                    </svg> Save
                                </button>
                            </form>
                        </div>
                    </div>
                    {{-- Address --}}
                    <div class="w-full h-fit rounded-xl shadow-xl bg-white">
                        <div class="address-container flex flex-col p-5">
                            <h1 class="font-bold text-xl">Shipping Address</h1>
                            <div class="detail-address mt-1 flex">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-6 text-blue-500">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                                </svg>
                                <h3>{{ $labelAlamat ?? 'Rumah' }} - <span>{{ $fullname ?? 'User' }}</span></h3>
                            </div>
                            <p>{{ $alamatLengkap ?? 'Perumahan Boana Vista Blok B3 No 82 RT 05/04 - Kelurahan Baloi Permai - Kecamatan Batam Kota - Kota Batam 29431' }}
                                <span
                                    class="text-[0.8em] text-gray-400">({{ $patokanAlamat ?? 'Rumah dengan pagar hitam' }})</span>
                            </p>
                            <button
                                class="group px-4 py-1 mt-2 flex items-center gap-x-2 border-2 border-active-200 text-active-200 font-semibold rounded-full w-fit hover:bg-active-200 hover:text-white"><svg
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor"
                                    class="size-4 text-active-200 group-hover:text-white">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L6.832 19.82a4.5 4.5 0 0 1-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 0 1 1.13-1.897L16.863 4.487Zm0 0L19.5 7.125" />
                                </svg>
                                Edit Address</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

@section('script')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="/js/profile.js"></script>
    <script>
        $(document).ready(function() {
            function toggleForm(enabled) {
                $('input[type="text"], input[type="date"], input[type="email"], input[type="file"], select').each(
                    function() {
                        $(this).prop('disabled', !enabled);
                    });

                $('label[for="userPicture"]').each(function() {
                    if (enabled) {
                        $(this).addClass('cursor-pointer');
                    } else {
                        $(this).removeClass('cursor-pointer');
                    }
                });
            }

            toggleForm($('#enableEdit').is(':checked'));

            $('#enableEdit').on('change', function() {
                toggleForm(this.checked);
            });

            $('#userPicture').change(function(event) {
                const file = event.target.files[0];
                if (file && (file.type === "image/jpeg" || file.type === "image/jpg" || file.type ===
                        "image/png")) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        $('#profileImage').attr('src', e.target.result);
                    };
                    reader.readAsDataURL(file);
                } else {
                    alert("Please select a valid image file (jpg, jpeg, png).");
                }
            });

            $('#saveBtn').click(function(event) {
                event.preventDefault(); // Prevent the form from submitting immediately

                Swal.fire({
                    title: 'Yakin ingin mengupdate data?',
                    showCancelButton: true,
                    confirmButtonText: 'Ya, Update',
                    cancelButtonText: 'Batal',
                    icon: 'warning'
                }).then((result) => {
                    if (result.isConfirmed) {

                        const formData = new FormData();
                        formData.append('namaUser', $('#namaUser').val());
                        formData.append('tgllahirUser', $('#tgllahirUser').val());
                        formData.append('genderUser', $('#genderUser').val());
                        formData.append('emailUser', $('#emailUser').val());
                        formData.append('nomorUser', $('#nomorUser').val());

                        // Hanya tambahkan userPicture jika ada file yang dipilih
                        const userPicture = $('#userPicture')[0].files[0];
                        if (userPicture) {
                            formData.append('userPicture', userPicture);
                        }

                        $.ajax({
                            url: '{{ route('update-profile') }}',
                            type: 'POST',
                            data: formData,
                            processData: false,
                            contentType: false,
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            success: function(response) {
                                Swal.fire({
                                    title: 'Success!',
                                    text: 'Profile updated successfully.',
                                    icon: 'success',
                                    confirmButtonText: 'OK'
                                }).then(() => {
                                    location.reload();
                                });
                            },
                            error: function(response) {
                                Swal.fire({
                                    title: 'Error!',
                                    text: 'There was an error updating your profile.',
                                    icon: 'error',
                                    confirmButtonText: 'OK'
                                });
                            }
                        });
                    }
                });
            });
        });
    </script>
@endsection
