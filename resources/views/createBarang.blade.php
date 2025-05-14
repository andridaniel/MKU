<x-app-layout>
  

    <div class="m-3 mt-10  flex justify-start ">
        <a href="{{ route('dataKomputer') }}"
            class="bg-gray-600 rounded-md hover:bg-gray-400 p-2 px-6 text-white shadow-xl xs:hidden md:block lg:block"> 
            <i class="fa-solid fa-backward pe-2"></i>
            Kembali </a>
    </div>

   



    <div class="m-2 rounded-md mt-5">

        {{-- create barang --}}
        <div id="modal" class=" fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden z-50">

            <div class="m-3 bg-white rounded-md lg:w-7/12 md:w-8/12 xs:w-11/12 mx-2">
                <form action="{{ route('storeBarang') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="space-y-12 mx-2">
                        <div class="border-b border-gray-900/10 pb-12 m-2">
                            <div class="">
                                <h3 class="text-base font-semibold leading-7">Tambah Data Barang</h3>
                            </div>
                            {{-- kode barang --}}
                            <div class="sm:col-span-3">
                                <label for="kode_brg" class="block text-sm/6 font-medium text-white">Kode
                                    Barang</label>
                                <div class="mt-2">
                                    <input type="text" name="kode_brg" id="kode_brg" placeholder="Masukan Kode Barang"
                                        autocomplete="given-name"
                                        class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-black outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                                </div>
                            </div>
        
                            {{-- nama barang --}}
                            <div class="sm:col-span-3">
                                <label for="nama_brg" class="block text-sm/6 font-medium text-white">Nama
                                    Barang</label>
                                <div class="mt-2">
                                    <input type="text" name="nama_brg" id="nama_brg" placeholder="Masukan Nama Barang"
                                        autocomplete="given-name"
                                        class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-black outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                                </div>
                            </div>
        
                            {{-- jenis barang --}}
                            <div class="sm:col-span-3">
                                <label for="jns_brg" class="block text-sm/6 font-medium text-white">Jenis Barang</label>
                                <div class="mt-2">
                                    <select name="jns_brg" id="jns_brg"
                                        class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-black outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                                        <option disabled selected> --Pilih Jenis Barang--</option>
                                        <option value="Monitor">Monitor</option>
                                        <option value="Keyboard ">Keyboard </option>
                                        <option value="Mouse ">Mouse </option>
                                        <option value="Ram">Ram</option>
                                        <option value="Prosesor ">Prosesor </option>
                                        <option value="SSD/HDD ">SSD/HDD </option>
                                        <option value="Motherboard ">Motherboard </option>
                                        <option value="Lan Card ">Lan Card </option>
                                    </select>
        
                                </div>
                            </div>
                            
        
                             {{-- button --}}
                                <div>
                                    <div class="flex items-center justify-end">
    
                                        <div class="mt-6 flex items-center justify-end">
                                            <button onclick="toggleModal(false)" class=" bg-gray-500  hover:bg-gray-400 p-2 rounded-md px-5 text-white  mr-2">Tutup</button>
                                        </div>
    
                                        <div class="mt-6 flex items-center justify-end ">
                                            <button type="submit"
                                                class="bg-orange-500 hover:bg-orange-300  p-2 rounded-md px-5 text-white">Simpan</button>
                                        </div>
                                        
                                    </div>
        
                                </div>
        
        
                            </div>
        
                        </div>
                    </div>
                </form>
            </div>
           
        </div>


        <div class="mx-2 bg-gray-700">

                <div class="lg:ms-1">
                    <h3 class="lg:text-2xl md:text-xl xs:text-md xs:p-2 lg:p-0 text-start text-white font-semibold">Data Barang Komputer</h3>
                </div>

            <div class="flex justify-between pt-5">

                 <div class=" text-gray-950 flex w-full">
                    <form action="{{ route('createBarang') }}" method="GET">

                        <div class="flex items-center border lg:flex border-orange-400 rounded-md bg-gray-700 focus-within:ring-2 focus-within:ring-orange-500 transition">
                            <button type="submit" class="px-3 text-gray-300 hover:text-white transition">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </button>
                            <input
                                type="text" 
                                name="search" 
                                placeholder="Search..." 
                            class="w-full py-2 px-2 bg-transparent text-white placeholder-gray-400 focus:outline-none focus:ring-0 text-sm rounded-md border-none"
                            >
                        </div>

                    </form>
                </div>

                <div class="mb-5 lg:me-1 lg:flex w-[350px]  lg:px-0 md:px-0 xs:px-2 bg-gray-600  rounded-md  hover:bg-gray-400 p-2 ms-2 ">
                    <button onclick="toggleModal(true)"  class=" xs:text-xs lg:text-sm sm:px-5   text-white " > 
                        <i class="fa-solid fa-plus mx-2 "></i>
                        Tambah Data Barang</button>
                </div>
            </div>

             {{-- Search --}}
           

        
            {{-- tabel Barang --}}
            @if ($dataPagination->isEmpty())
                <p class="text-gray-200 mt-28 mb-10 text-center">--Tidak Ada Data Komputer Yang Tersedia--</p>
            @endif

            <table class="border border-gray-950 w-full ">
                
            
                <th class="border border-orange-400 lg:text-sm xs:text-xs text-white">No</th>
                <th class="border border-orange-400 lg:text-sm xs:text-xs text-white">Kode Barang</th>
                <th class="border border-orange-400 lg:text-sm xs:text-xs text-white">Nama Barang</th>
                <th class="border border-orange-400 lg:text-sm xs:text-xs text-white">Jenis Barang</th>
                <th class="border border-orange-400 lg:text-sm xs:text-xs text-white">Aksi</th>
    
                @foreach ($dataPagination as $item =>$data)
                <tbody>
                    <td class="border border-orange-400 lg:text-sm xs:text-xs text-white text-center">{{$dataPagination->firstItem() + $item}}</td>
                    <td class="border border-orange-400 lg:text-sm xs:text-xs text-white text-center">{{$data->kode_brg}}</td>
                    <td class="border border-orange-400 lg:text-sm xs:text-xs text-white">{{$data->nama_brg}}</td>
                    <td class="border border-orange-400 lg:text-sm xs:text-xs text-white">{{$data->jns_brg}}</td>
                    <td class="border border-orange-400 lg:text-sm xs:text-xs text-white">

                        <div class="flex justify-center xs:flex xs:flex-row lg:flex lg:flex-row">

                            <div class="m-2 basis-1/2">
                                <form action="{{ route('editBarang', ['hash' => base64_encode($data->slug) ]) }}" method="post">
                                    @csrf
                                    @method('get')
                                    <button class="bg-gray-500 hover:bg-gray-600  p-2 px-4 rounded-md w-full text-white flex justify-center">
                                        <i class="fa-regular fa-pen-to-square"></i>
                                        <div class="xs:hidden lg:block px-2">Edit</div>
                                    </button>
                                </form>
                            
                            </div>

                            <!-- Tombol Hapus (data-url langsung dari helper route) -->
                            <div class="m-2 basis-1/2">
                                <button onclick="deleteButton(true, this)"
                                    data-url="{{ route('deleteBarang', $data->id) }}"
                                    class="bg-orange-500 hover:bg-orange-600 p-2 px-4 rounded-md w-full text-white flex justify-center">
                                    <i class="fa-solid fa-trash-can"></i>
                                    <div class="xs:hidden lg:block px-2">Hapus</div>
                                </button>
                            </div>

                            <!-- Modal Konfirmasi Hapus -->
                            <div id="deleteModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden z-50">
                                <div class="bg-white rounded-xl p-6 w-full max-w-md shadow-lg lg:mx-1 md:mx-3 xs:mx-5">
                                    <h2 class="text-xl font-semibold mb-4 text-gray-600">Hapus Barang</h2>
                                    <p class="mb-4 text-gray-700">Apakah Anda yakin ingin menghapus barang ini?</p>
                                    <div class="flex justify-end">
                                        <button onclick="deleteButton(false)" type="button"
                                            class="px-4 py-2 bg-gray-300 rounded hover:bg-gray-400 mr-2">Tutup</button>

                                        <!-- Form konfirmasi hapus -->
                                        <form id="deleteForm" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="px-4 py-2 bg-red-600 text-white rounded hover:bg-red-700">Hapus</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    

                        
                    </td>

                    
                </tbody>

                @endforeach

            
            </table>


        </div>


       
       
         {{-- pagination --}}
             
                <div class="flex justify-end p-2">
                    {{ $dataPagination->links() }}
                </div>

        </div>

    </div>

    <script>
       function toggleModal(show) {
            const modal = document.getElementById('modal');
            modal.classList.toggle('hidden', !show);
        }

       


        //button delete
        function deleteButton(show, button = null) {
            const modal = document.getElementById('deleteModal');
            modal.classList.toggle('hidden', !show);

            if (button && button.dataset.url) {
                const form = document.getElementById('deleteForm');
                form.action = button.dataset.url;
            }
        }

       



    </script>

   
</x-app-layout>
