<x-app-layout>
    <div class="m-5 rounded-md ">

        <div class="flex mb-5 justify-end xs:flex xs:flex-col lg:flex-row ">

            <div class="mx-2 xs:my-5">
                <a href="{{ route('createBarang') }}"
                class="bg-yellow-500 xs:px-5  p-3 shadow-lg rounded-md hover:bg-orange-500 text-white">
                <i class="fa-solid fa-plus"></i>
                Tambah Data Barang</a>
            </div>

            <div class="mx-2  xs:my-5">
                <a href="{{ route('createData') }}"
                class="bg-blue-500  p-3 shadow-lg rounded-md hover:bg-orange-500 text-white">
                <i class="fa-solid fa-plus"></i>
                Tambah Data Komputer</a>
            </div>
        </div>


        @if ($dataKomputerPagination->isEmpty())
            <p class="text-gray-600 mt-56 text-center">--Tidak Ada Data Komputer Yang Tersedia--</p>
        @endif

        <div class="grid rounded-md grid-cols-4 gap-4 mt-5 xs:grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 bg-gray-600  shadow-2xl">
            @foreach ($dataKomputerPagination as $item => $value)
                <div class="rounded-md bg-gray-400  shadow-lg m-2 ">

                    <div class="rounded-t-md  h-[250px] bg-gray-400 overflow-hidden p-1">
                        <img src="{{ $value->images }}" class="w-full h-full object-cover rounded-md"
                            alt="gambar Komputer">
                    </div>

                    <div class=" bg-slate-100 m-1 p-3 rounded-md ">
                       <div class="mb-4">
                           <div class=" border-b border-gray-900/10">Nama Komputer  : {{ $value->nama_komputer }}</div>
                           <div class=" border-b border-gray-900/10">IP Address     : {{ $value->ip_address }}</div>
                           <div class=" border-b border-gray-900/10">sistem_operasi : {{ $value->sistem_operasi }}</div>
                       </div>

                        <div class="p-1 py-4 flex text-center ">
                            <a href=" {{ route('detailKomputer', ['id' => $value->id]) }}"
                                class="bg-blue-500 hover:bg-orange-500  p-2 rounded-md w-full text-white">
                                LihatDetail
                                <i class="fa-solid fa-eye text-gray-200 ms-2"></i>
                            </a>
                        </div>
                    </div>




                </div>
            @endforeach

            

        </div>
         {{-- pagination --}}
             
         <div class="flex justify-end m-2">
            {{ $dataKomputerPagination->links() }}
        </div>

    </div>
</x-app-layout>
