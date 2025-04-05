<x-app-layout>
    
      
   
    <div class="flex justify-between bg-orange-400 rounded-t-md">
        <div class="m-5 text-2xl ">
            <h3 class="py-2 text-white xs:text-xs sm:text-sm lg:text-xl ">UPDATE DATA BARANG KOMPUTER</h3>
        </div>

        <div class="m-5  flex justify-end  ">
            <a href="{{ route('createBarang') }}"
                class="bg-gray-600 rounded-md hover:bg-gray-500 p-3 px-10 text-white shadow-xl">Kembali </a>
        </div>

    </div>
    
       
    <div class="m-5 bg-gray-200 rounded-md">
        <form action="{{ route('editBarang', ['id' => $dataBarang->id]) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')

            
            <div class="space-y-12">
                <div class="border-b border-gray-900/10 pb-12 m-2">

                    {{-- kode barang --}}
                    <div class="sm:col-span-3">
                        <label for="kode_brg" class="block text-sm/6 font-medium text-gray-900">Kode
                            Barang</label>
                        <div class="mt-2">
                            <input type="text" name="kode_brg" id="kode_brg"
                                autocomplete="given-name"
                                value="{{ $dataBarang->kode_brg }}"
                                class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                        </div>
                    </div>


                    {{-- nama barang --}}
                    <div class="sm:col-span-3">
                        <label for="nama_brg" class="block text-sm/6 font-medium text-gray-900">Nama
                            Barang</label>
                        <div class="mt-2">
                            <input type="text" name="nama_brg" id="nama_brg"
                                autocomplete="given-name"
                                value="{{ $dataBarang->nama_brg }}"
                                class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                        </div>
                    </div>


                    {{-- jenis barang --}}
                    <div class="sm:col-span-3">
                        <label for="jns_brg" class="block text-sm/6 font-medium text-gray-900">Jenis Barang</label>
                        <div class="mt-2">
                            <select name="jns_brg" id="jns_brg"
                                class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                                <option value="Monitor" {{ $dataBarang->jns_brg == 'Monitor' ? 'selected' : '' }}>Monitor</option>
                                <option value="Keyboard" {{ $dataBarang->jns_brg == 'Keyboard' ? 'selected' : '' }}>Keyboard</option>
                                <option value="Ram" {{ $dataBarang->jns_brg == 'Ram' ? 'selected' : '' }}>Ram</option>
                                <option value="Prosesor" {{ $dataBarang->jns_brg == 'Prosesor' ? 'selected' : '' }}>Prosesor</option>
                                <option value="SSD/HDD" {{ $dataBarang->jns_brg == 'SSD/HDD' ? 'selected' : '' }}>SSD/HDD</option>
                                <option value="Motherboard" {{ $dataBarang->jns_brg == 'Motherboard' ? 'selected' : '' }}>Motherboard</option>
                                <option value="Lan Card" {{ $dataBarang->jns_brg == 'Lan Card' ? 'selected' : '' }}>Lan Card</option>
                            </select>
                        </div>
                    </div>
                    

                     {{-- button --}}
                        <div>
                            <div>
                                <div class="mt-6 flex items-center justify-end gap-x-6">
                                    <button type="submit"
                                        class="bg-gray-500 hover:bg-orange-500  p-2 rounded-md w-full text-white">Simpan</button>
                                </div>
                            </div>

                        </div>



                    </div>

                </div>
            </div>




        </form>
    </div>

</x-app-layout>
