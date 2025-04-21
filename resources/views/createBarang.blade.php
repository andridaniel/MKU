<x-app-layout>
  

    <div class="m-3 mt-10  flex justify-start ">
        <a href="{{ route('dataKomputer') }}"
            class="bg-gray-600 rounded-md hover:bg-gray-400 p-2 px-6 text-white shadow-xl"> 
            <i class="fa-solid fa-backward pe-2"></i>
            Kembali </a>
    </div>

   



    <div class="m-2 rounded-md mt-5">

        {{-- create barang --}}
        <div id="modal" class=" bg-gray-700  rounded-md  hidden">

            <div class="flex justify-between bg-gray-700 rounded-t-md">
                <div class="m-5 text-2xl ">
                    <h3 class=" text-white xs:text-xs sm:text-sm lg:text-xl ">TAMBAH DATA BARANG KOMPUTER</h3>
                </div>

                <div class="m-5">
                    <button onclick="closeModal()" class="bg-gray-600 rounded-md hover:bg-gray-400 p-2 px-6 text-orange-500 shadow-xl">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
        
            </div>
    
            <div class="m-3">
                <form action="{{ route('storeBarang') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="space-y-12">
                        <div class="border-b border-gray-900/10 pb-12 m-2">
        
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
                                            <button type="reset" class="bg-blue-500 hover:bg-blue-600 p-2 rounded-md px-5 mx-2 text-white"> Cancel</button>
                                        </div>
    
                                        <div class="mt-6 flex items-center justify-end ">
                                            <button type="submit"
                                                class="bg-gray-500 hover:bg-gray-600  p-2 rounded-md px-5 text-white">Simpan</button>
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

            <div class="flex justify-between pt-5 ">

                <div class="lg:ms-2">
                    <h3 class="lg:text-2xl md:text-xl xs:text-md xs:p-2 lg:p-0 text-start text-white font-semibold">Data Barang Komputer</h3>
                </div>
        
                <div class="mb-5 lg:me-2 flex justify-end lg:px-0 md:px-0 xs:px-2">
                    <button onclick="toggleModal()"  class="bg-gray-600 rounded-md  hover:bg-gray-700 p-3 xs:px-2 xs:text-xs lg:text-sm sm:px-5  text-white shadow-xl" > 
                        <i class="fa-solid fa-folder-plus me-2"></i>
                        Tambah Data Barang</button>
                </div>
            </div>

        
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

                        <div class="flex justify-center xs:flex xs:flex-col lg:flex lg:flex-row">

                            <div class="m-2 basis-1/2">
                                <form action="{{ route('editBarang', $data->id) }}" method="post">
                                    @csrf
                                    @method('get')
                                    <button class="bg-gray-500 hover:bg-gray-600  p-2 px-4 rounded-md w-full text-white">Edit</button>
                                </form>
                            
                            </div>

                            <div class="m-2 basis-1/2">
                                <form action="{{ route('deleteBarang', $data->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button id="deleteButton" class="bg-orange-500 hover:bg-orange-600  p-2 rounded-md w-full text-white">Hapus</button>
                                    <script>
                                        document.getElementById('deleteButton').addEventListener('click', function(event) {
                                            if (!confirm('Apakah Anda yakin ingin menghapus data ini?')) {
                                                event.preventDefault();
                                            }
                                        });
                                    </script>
                                </form>
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
       function toggleModal() {
            const modal = document.getElementById('modal');
            modal.classList.toggle('hidden');
        }

        function closeModal() {
            const modal = document.getElementById('modal').classList.add('hidden');
        }

    </script>

   
</x-app-layout>
