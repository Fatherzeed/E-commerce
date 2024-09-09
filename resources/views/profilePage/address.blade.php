@extends('partials.main')

@section('content')
    @include('partials.navbar')
    @include('partials.cart')
    <div class="w-full min-h-[80dvh] h-auto">
        <div class="h-full flex mx-auto justify-center">
            <div class="wrapper90 h-full flex lg:flex-row flex-col justify-center py-5">
                @include('profilePage.sidebar')
                <div class="flex flex-col gap-y-3">
                    <div class="w-full h-fit px-5">
                        <div class="address-container flex flex-col p-5 rounded-xl shadow-xl bg-white">
                            <h1 class="font-bold text-xl">Shipping Address</h1>
                            <div class="detail-address mt-1 flex">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" class="size-6 text-blue-500">
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
                                class="group px-4 py-1 mt-2 flex items-center gap-x-2 border-2 border-active-200 text-active-200 font-semibold rounded-full w-fit hover:bg-active-200 hover:text-white"
                                data-modal-target="#editAddress">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor"
                                    class="size-4 text-active-200 group-hover:text-white">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M16.862 4.487l1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L6.832 19.82a4.5 4.5 0 0 1-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 0 1 1.13-1.897L16.863 4.487Zm0 0L19.5 7.125" />
                                </svg>
                                Edit Address
                            </button>

                        </div>
                    </div>

                    <div class="w-full h-fit px-5">
                        <div class="address-container flex flex-col p-5 rounded-xl shadow-xl bg-white">
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
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" class="size-4 text-active-200 group-hover:text-white"
                                    data-modal-target="#editAddress">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L6.832 19.82a4.5 4.5 0 0 1-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 0 1 1.13-1.897L16.863 4.487Zm0 0L19.5 7.125" />
                                </svg>
                                Edit Address</button>
                        </div>
                    </div>

                    <div class="w-full h-full px-5">
                        <div class="w-full h-full bg-white rounded-xl shadow-xl border-2 border-active-200">
                            <button
                                class="group w-full h-[4em] flex items-center justify-center gap-x-2 text-active-200 font-semibold rounded-lg hover:bg-active-200 hover:text-white"
                                data-modal-target="#addAddress">
                                <div class="flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                                    </svg>

                                    Add Address
                                </div>

                            </button>
                        </div>
                    </div>


                </div>
                @include('profilePage.editAddress')
                @include('profilePage.addAddress')
            </div>
        </div>

    </div>
@endsection

@section('script')
    <script src="/js/profile.js"></script>
    <script>
$(document).ready(function() {
    $("#add_addressbtn").click(function(event) {
        event.preventDefault();

        let add_addressLabel = $("#add_addressLabel").val().trim();
        let add_fullAddress = $("#add_fullAddress").val().trim();
        let add_noteOptional = $("#add_noteOptional").val().trim();
        let add_receiverName = $("#add_receiverName").val().trim();
        let add_phoneNumber = $("#add_phoneNumber").val().trim();

        $.ajax({
            type: "POST", // Gunakan metode POST untuk menambahkan data
            url: "{{ route('addAddress') }}", // URL endpoint untuk menambah alamat
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: {
                address_label: add_addressLabel,
                full_address: add_fullAddress,
                note_optional: add_noteOptional,
                receiver_name: add_receiverName,
                phone_number: add_phoneNumber
            },
            dataType: "JSON",
            success: function(response, status) {
                if (status === 'success') {
                    Swal.fire({
                        icon: 'success',
                        title: 'Berhasil',
                        text: 'Alamat berhasil ditambahkan!',
                        timer: 1500,
                        showConfirmButton: false
                    }).then(() => {
                        window.location.href = "{{ route('address') }}";
                    });
                }
            },
            error: function(xhr, status, error) {
                Swal.close();

                if (xhr.status === 500) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Kesalahan Server',
                        text: 'Terjadi kesalahan pada server. Silakan coba lagi nanti.',
                    });
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Kesalahan',
                        text: 'Terjadi kesalahan. Silakan coba lagi.',
                    });
                }
            }
        });
    });
});

    </script>
@endsection
