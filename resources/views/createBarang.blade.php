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

        <form action="{{ route('storeBarang') }}" method="post" enctype="multipart/form-data">
            @csrf

            
            <div class="space-y-12">
                <div class="border-b border-gray-900/10 pb-12 m-2">

                    <div class="sm:col-span-3">
                        <label for="kode_brg" class="block text-sm/6 font-medium text-gray-900">Kode
                            Barang</label>
                        <div class="mt-2">
                            <input type="text" name="kode_brg" id="kode_brg"
                                autocomplete="given-name"
                                class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                        </div>
                    </div>

                    <div class="sm:col-span-3">
                        <label for="nama_brg" class="block text-sm/6 font-medium text-gray-900">Nama
                            Barang</label>
                        <div class="mt-2">
                            <input type="text" name="nama_brg" id="nama_brg"
                                autocomplete="given-name"
                                class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                        </div>
                    </div>

                    <div class="sm:col-span-3">
                        <label for="jns_brg" class="block text-sm/6 font-medium text-gray-900">Jenis Barang</label>
                        <div class="mt-2">
                            <input type="text" name="jns_brg" id="jns_brg"
                                autocomplete="given-name"
                                class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                        </div>
                    </div>

                    

                     {{-- button --}}
                        <div>
                            <div>
                                <div class="mt-6 flex items-center justify-end gap-x-6">
                                    <button type="submit"
                                        class="bg-blue-500 hover:bg-orange-500  p-2 rounded-md w-full text-white">Simpan</button>
                                </div>
                            </div>

                        </div>



                    </div>

                </div>
            </div>




        </form>
    </div>

    <div class="m-5 bg-gray-200 rounded-md mt-10">
        @foreach ($dataBarang as $item =>$data)
            
       
        <table class="border border-gray-950">
            <th class="border border-gray-950">Kode Barang</th>
            <th class="border border-gray-950">Nama Barang</th>
            <th class="border border-gray-950">Jenis Barang</th>
            <tbody>
                <td class="border border-gray-950">{{$data->kode_brg}}</td>
                <td class="border border-gray-950">{{$data->nama_brg}}</td>
                <td class="border border-gray-950">{{$data->jns_brg}}</td>
            </tbody>
        </table>
        @endforeach
    </div>

</x-app-layout>
