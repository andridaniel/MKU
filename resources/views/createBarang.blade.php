<x-app-layout>
  

    <div class="m-5  flex justify-start ">
        <a href="{{ route('dataKomputer') }}"
            class="bg-gray-600 rounded-md hover:bg-gray-400 p-2 px-6 text-white shadow-xl"> 
            <i class="fa-solid fa-backward pe-2"></i>
            Kembali </a>
    </div>

    <div class="m-5 bg-gray-200 rounded-md">

        <div class="flex justify-between bg-gray-600 rounded-t-md">
            <div class="m-5 text-2xl ">
                <h3 class=" text-white xs:text-xs sm:text-sm lg:text-xl ">TAMBAH DATA BARANG KOMPUTER</h3>
            </div>
    
        </div>

        <div class="m-5">
            <form action="{{ route('storeBarang') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="space-y-12">
                    <div class="border-b border-gray-900/10 pb-12 m-2">
    
                        {{-- kode barang --}}
                        <div class="sm:col-span-3">
                            <label for="kode_brg" class="block text-sm/6 font-medium text-gray-900">Kode
                                Barang</label>
                            <div class="mt-2">
                                <input type="text" name="kode_brg" id="kode_brg" placeholder="Masukan Kode Barang"
                                    autocomplete="given-name"
                                    class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                            </div>
                        </div>
    
                        {{-- nama barang --}}
                        <div class="sm:col-span-3">
                            <label for="nama_brg" class="block text-sm/6 font-medium text-gray-900">Nama
                                Barang</label>
                            <div class="mt-2">
                                <input type="text" name="nama_brg" id="nama_brg" placeholder="Masukan Nama Barang"
                                    autocomplete="given-name"
                                    class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                            </div>
                        </div>
    
                        {{-- jenis barang --}}
                        <div class="sm:col-span-3">
                            <label for="jns_brg" class="block text-sm/6 font-medium text-gray-900">Jenis Barang</label>
                            <div class="mt-2">
                                <select name="jns_brg" id="jns_brg"
                                    class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
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



    <div class="m-5 bg-gray-200 rounded-md mt-5">
        <div class="my-5 py-5">
            <h3 class="text-2xl text-center">Data Barang Komputer</h3>
        </div>
       
        <table class="border border-gray-950 w-full">
            
          
            <th class="border border-gray-950">No</th>
            <th class="border border-gray-950">Kode Barang</th>
            <th class="border border-gray-950">Nama Barang</th>
            <th class="border border-gray-950">Jenis Barang</th>
            <th class="border border-gray-950">Aksi</th>
 
            @foreach ($dataBarang as $item =>$data)
            <tbody>
                <td class="border border-gray-950 text-center">{{$item+1}}</td>
                <td class="border border-gray-950 text-center">{{$data->kode_brg}}</td>
                <td class="border border-gray-950">{{$data->nama_brg}}</td>
                <td class="border border-gray-950">{{$data->jns_brg}}</td>
                <td class="border border-gray-950">

                    <div class="flex justify-center xs:flex xs:flex-col lg:flex lg:flex-row">

                        <div class="m-2 basis-1/2">
                            <form action="{{ route('editBarang', $data->id) }}" method="post">
                                @csrf
                                @method('get')
                                <button class="bg-blue-500 hover:bg-blue-600  p-2 px-4 rounded-md w-full text-white">Edit</button>
                            </form>
                           
                        </div>

                        <div class="m-2 basis-1/2">
                            <form action="{{ route('deleteBarang', $data->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="bg-red-500 hover:bg-red-700  p-2 rounded-md w-full text-white">Hapus</button>
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

</x-app-layout>
