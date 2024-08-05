@extends('partials.main')

@section('content')
    @include('partials.navbar')
    <div class="w-full h-[100dvh]">
        <div class="h-full flex mx-auto justify-center">
            <div class="wrapper90 h-full flex justify-center p-10 pr-20">
                @include('profile.sidebar')
                <div class="w-full h-fit shadow-xl rounded-xl flex flex-col md:flex-row p-5">
                    <div class="md:w-1/3 w-full flex md:justify-start justify-center mb-5 md:mb-0">
                        <div class="w-fit h-fit rounded-full relative">
                            <img id="profileImage" src="{{ asset('/image/hero.png') }}" alt="Profile Image"
                                class="xl:size-64 md:size-40 size-36 rounded-full object-cover object-center relative">
                            <div class="w-10 h-10 rounded-full absolute xl:bottom-4 xl:right-5 md:bottom-1 md:right-1 bottom-0 right-0 bg-black">
                                <label for="userPicture" class="text-xs cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor"
                                        class="size-10 p-2 rounded-full border-2 border-black bg-gray-300">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M6.827 6.175A2.31 2.31 0 0 1 5.186 7.23c-.38.054-.757.112-1.134.175C2.999 7.58 2.25 8.507 2.25 9.574V18a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 18V9.574c0-1.067-.75-1.994-1.802-2.169a47.865 47.865 0 0 0-1.134-.175 2.31 2.31 0 0 1-1.64-1.055l-.822-1.316a2.192 2.192 0 0 0-1.736-1.039 48.774 48.774 0 0 0-5.232 0 2.192 2.192 0 0 0-1.736 1.039l-.821 1.316Z" />
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M16.5 12.75a4.5 4.5 0 1 1-9 0 4.5 4.5 0 0 1 9 0ZM18.75 10.5h.008v.008h-.008V10.5Z" />
                                    </svg>
                                </label>
                                <input type="file" id="userPicture" class="hidden">
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
                                        <input id="namaUser" name="namaUser" type="text" value="Contoh Value di Dalam"
                                            class="bg-gray-50 p-2" disabled>
                                        <input id="tgllahirUser" name="tgllahirUser" type="text" value="09-11-2001"
                                            class="bg-gray-50 p-2" disabled>
                                        <input id="genderUser" name="genderUser" type="text" value="Laki-laki"
                                            class="bg-gray-50 p-2" disabled>
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
                                        <input id="emailUser" name="emailUser" type="text"
                                            value="ContohValue@example.com" class="bg-gray-50 p-2" disabled>
                                        <input id="nomorUser" name="nomorUser" type="text" value="0899xxxxxxxx"
                                            class="bg-gray-50 p-2" disabled>
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
            </div>
        </div>

    </div>
@endsection

@section('script')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    $(document).ready(function() {
        // Toggle form inputs enable/disable state
        function toggleForm(enabled) {
            $('input[type="text"]').each(function() {
                $(this).prop('disabled', !enabled);
            });
        }

        // Initial state setup based on checkbox state on page load
        toggleForm($('#enableEdit').is(':checked'));

        // Event listener for the checkbox
        $('#enableEdit').on('change', function() {
            toggleForm(this.checked);
        });

        // Preview uploaded profile picture
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

        // Save data on button click
        $('#saveBtn').click(function() {
            Swal.fire({
                title: 'Yakin ingin mengupdate data?',
                showCancelButton: true,
                confirmButtonText: 'Ya, Update',
                cancelButtonText: 'Batal',
                icon: 'warning'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Prepare form data
                    const formData = new FormData();
                    formData.append('namaUser', $('#namaUser').val());
                    formData.append('tgllahirUser', $('#tgllahirUser').val());
                    formData.append('genderUser', $('#genderUser').val());
                    formData.append('emailUser', $('#emailUser').val());
                    formData.append('nomorUser', $('#nomorUser').val());
                    formData.append('userPicture', $('#userPicture')[0].files[0]);

                    // Log FormData for debugging
                    for (let pair of formData.entries()) {
                        console.log(pair[0] + ': ' + pair[1]);
                    }

                    // Send the data via AJAX
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
