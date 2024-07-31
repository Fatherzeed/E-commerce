@extends('partials.main')

@section('content')
    @include('partials.navbar')
    @include('partials.cart')

    <section class="bg-blue-300">
        <div class="md:max-w-7xl h-[100dvh] mx-auto bg-white flex gap-x-5 py-10">


            <div class="relative flex mx-auto w-2/3">
                @include('partials.sidebar')
                <div class="p-10 shadow-xl w-full h-fit">
                    <div class="w-full bg-white flex flex-between">
                        <div class="flex flex-col text-center text-[2rem] font-semibold shrink-0">
                            <img src="{{ asset('/image/hero.png') }}" alt=""
                                class="xl:size-64 md:size-40 size-36 rounded-full object-cover object-center">
                            <h2>John Doe</h2>
                        </div>
                        {{-- Taruh disini ya --}}
                        <div class="pl-10 w-full">
                            <ul class="text-left">
                                <div class="justify-between flex">
                                    <h1 class="font-bold">Biodata Diri</h1>
                                    <label class="inline-flex items-center cursor-pointer">
                                        <input type="checkbox" id="enableEdit" class="sr-only peer">
                                        <div
                                            class="relative w-7 h-4 bg-gray-200 peer-focus:outline-none peer-focus:ring-2 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-3 after:w-3 after:transition-all peer-checked:bg-blue-600">
                                        </div>
                                        <span class="ms-3 text-sm font-medium text-gray-900 ">Update
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
                                        <input id="tgllahirUser" name="tgllahirUser" type="text" value="09-11-2001" class="bg-gray-50 p-2"
                                            disabled>
                                        <input id="genderUser" name="genderUser" type="text" value="Laki-laki" class="bg-gray-50 p-2"
                                            disabled>
                                    </div>
                                </div>

                            </ul>
                            <ul class="text-left mt-6">
                                <h1 class="font-bold">Kontak</h1>
                                <div class="grid grid-cols-4 mt-3">
                                    <div class="flex flex-col gap-y-3">
                                        <label class="p-2" for="emailUser">Email</label>
                                        <label class="p-2" for="nomorUser">Nomor</label>
                                    </div>
                                    <div class="col-span-3 flex flex-col gap-y-3">
                                        <input id="emailUser" name="emailUser" type="text" value="ContohValue@example.com"
                                            class="bg-gray-50 p-2" disabled>
                                        <input id="nomorUser" name="nomorUser" type="text" value="0899xxxxxxxx" class="bg-gray-50 p-2"
                                            disabled>
                                    </div>
                                </div>
                            </ul>
                            <button class="mt-4 px-4 py-2 bg-blue-500 text-white rounded-md">
                                <i class="fas fa-edit"></i> Edit
                            </button>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
@endsection

@section('script')
<script>
    $(document).ready(function() {
        // Function to toggle form inputs enable/disable state
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
    });
</script>
@endsection
