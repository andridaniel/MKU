<x-app-layout>
    <div class="rounded-md text-white ">

        <div class="flex mb-5 justify-end xs:flex xs:flex-col lg:flex-row  ">

            <div class="mx-2 xs:my-2 xs:w-[180px] md:w-[250px] lg:w-[200px] xs:py-1 lg:py-2 bg-yellow-500 hover:bg-orange-500 shadow-lg rounded-md">
                <a href="{{ route('createBarang')}}"
                class=" pe-5 p-3 text-white xs:text-xs md:text-sm lg:text-sm">
                <i class="fa-solid fa-database"></i>
                Data Barang Komputer </a>
            </div>

            <div class="mx-2  xs:my-2 xs:w-[180px] md:w-[250px] lg:w-[200px] xs:py-1 lg:py-2 bg-blue-500 hover:bg-blue-400 shadow-lg rounded-md">
                <a href="{{ route('createData') }}"
                class="pe-5 p-3 text-white xs:text-xs md:text-sm lg:text-sm">
                <i class="fa-solid fa-folder-plus"></i>
                Tambah Data Komputer</a>
            </div>
        </div>


        @if ($dataKomputerPagination->isEmpty())
            <p class="text-gray-200 mt-28 mb-10 text-center">--Tidak Ada Data Komputer Yang Tersedia--</p>
        @endif

        <div class="mx-2">

            <table class="border border-gray-300 w-full ">
                <thead class="border-orange-400 ">
                    <th class="border border-orange-400 lg:text-sm xs:text-xs">No</th> 
                    <th class="border border-orange-400 lg:text-sm xs:text-xs">Nama Komputer</th>
                    <th class="border border-orange-400 lg:text-sm xs:text-xs">IP Komputer</th>
                    <th class="border border-orange-400 lg:text-sm xs:text-xs">Ruangan Komputer</th>
                    <th class="border border-orange-400 lg:text-sm xs:text-xs">Aksi</th>
    
                </thead>
                
    
                @foreach ($dataKomputerPagination as $item => $value)
    
                   <tbody>
                        <td class="border border-orange-400 lg:text-sm xs:text-xs text-center">{{ $dataKomputerPagination->firstItem() + $item }} </td>
                        <td class="border border-orange-400 lg:text-sm xs:text-xs">{{ $value->nama_komputer }} </td>
                        <td class="border border-orange-400 lg:text-sm xs:text-xs">{{ $value->ip_address }} </td>
                        <td class="border border-orange-400 lg:text-sm xs:text-xs">{{ $value->ruangan }} </td>
                        <td class="border border-orange-400">
    
                            <div class="bg-gray-500 hover:bg-orange-500 text-white rounded-md flex justify-center items-center my-2 py-2 mx-2 lg:flex lg:flex-row xs:flex xs:flex-col xs:text-xs lg:text-sm">
                                <a href=" {{ route('detailKomputer', ['id' => $value->id]) }}"
                                    class="xs:flex xs:flex-col md:flex md:flex-row lg:flex lg:flex-row">
                                    <div class="xs:hidden md:block lg:block">
                                        Lihat Detail
                                    </div>
                                    <span class="">
                                        <i class="fa-solid fa-eye mx-2"></i>
                                    </span>
                                </a>
                            </div>
    
                        </td>
                   </tbody>
                    
                       
                @endforeach
    
                
    
            </table>
             {{-- pagination --}}
                 
             <div class="flex justify-end m-2">
                {{ $dataKomputerPagination->links() }}
            </div>

        </div>
       

    </div>
</x-app-layout>
