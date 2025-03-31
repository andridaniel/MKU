<x-app-layout>
    <div class="m-5 rounded-md ">
        @if (session()->has('success'))
            <div id="alert-success"
                class="flex items-end justify-between w-full max-w-lg  p-4 mb-4 text-sm text-white bg-green-600 rounded-lg shadow-md">
                <div class="flex items-center">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12l2 2 4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0z"></path>
                    </svg>
                    <span>{{ session()->get('success') }}</span>
                </div>
                <button onclick="document.getElementById('alert-success').remove()"
                    class="ml-4 text-white focus:outline-none">
                    ✖
                </button>
            </div>
        @endif

        @if (session()->has('error'))
            <div id="alert-error"
                class="flex items-end justify-between w-full max-w-lg  p-4 mb-4 text-sm text-white bg-red-600 rounded-lg shadow-md">
                <div class="flex items-center">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 9v2m0 4h.01m-6.938 4A9 9 0 1 1 21 12a9 9 0 0 1-15.938 7z"></path>
                    </svg>
                    <span>{{ session()->get('error') }}</span>
                </div>
                <button onclick="document.getElementById('alert-error').remove()"
                    class="ml-4 text-white focus:outline-none">
                    ✖
                </button>
            </div>
        @endif

        <div class="flex mb-5  justify-end">
            <a href="{{ route('createData') }}"
                class="bg-gray-800  p-3 shadow-lg rounded-md hover:bg-orange-500 text-white"> +
                Tambah Data Komputer</a>
        </div>


        @if ($data->isEmpty())
            <p class="text-gray-500 mt-4 text-center">--Tidak Ada Data Komputer Yang Tersedia--</p>
        @endif
        <div
            class="grid grid-cols-4 gap-4 mt-5 xs:grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4  shadow-2xl">
            @foreach ($data as $item => $value)
                <div class="rounded-md bg-gray-200 ">

                    <div class="rounded-md  h-[250px] bg-black overflow-hidden">
                        <img src="{{ $value->images }}" class="w-full h-full object-cover rounded-md"
                            alt="gambar Komputer">
                    </div>

                    <div class="m-2">
                        <div class="">{{ $value->nama_komputer }}</div>
                        <div class="">{{ $value->ip_address }}</div>
                        <div class="">{{ $value->sistem_operasi }}</div>
                    </div>



                    <div class="p-2 py-4 flex text-center ">
                        <a href=" {{ route('detailKomputer', ['id' => $value->id]) }}"
                            class="bg-blue-500 hover:bg-orange-500  p-2 rounded-md w-full text-white">Lihat Detail</a>
                    </div>
                </div>
            @endforeach
        </div>


    </div>
</x-app-layout>
