<x-app-layout>
    <div class="m-5 bg-gray-200 rounded-md">
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

    <div class="flex justify-between bg-orange-400 rounded-t-md">
        <div class="m-5 text-2xl ">
            <h3 class="py-2 text-white xs:text-xs sm:text-sm lg:text-xl ">UPDATE DATA BARANG KOMPUTER</h3>
        </div>

        <div class="m-5  flex justify-end  ">
            <a href="{{ route('createBarang') }}"
                class="bg-gray-600 rounded-md hover:bg-gray-500 p-3 px-10 text-white shadow-xl">Kembali </a>
        </div>

    </div>
    
       
      
       

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
                                @foreach ($Barang as $barang)
                                    <option value="{{ $barang->jns_brg }}" {{ $dataBarang->jns_brg == $barang->jns_brg ? 'selected' : '' }}>
                                        {{ $barang->jns_brg }}
                                    </option>
                                @endforeach
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
