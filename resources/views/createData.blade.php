<x-app-layout>
    <div class="mx-5 rounded-md">
        <form action="{{ route('storeData') }}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="hidden" value="-" name="status">
            <div class="space-y-12 ">
                <div class="border-b border-gray-900/10 py-2">

                    <div class="p-5 pt-12 flex justify-start xs:pt-5 lg:pt-12 sm:pt-8  ">
                        <a href="{{ route('dataKomputer') }}"
                            class="bg-gray-400 rounded-md hover:bg-gray-300 p-3 xs:px-2 xs:text-xs lg:text-sm sm:px-5  text-white shadow-xl">
                            <i class="fa-solid fa-computer mx-2"></i>
                            Lihat Data Komputer</a>
                    </div>

                    <div class=" mx-5">
                        <h2 class="text-base bg-gray-700/7 font-semibold text-white">Form Tambah Data Komputer</h2>

                        <p class="mt-1 text-sm/6 text-white ">Silahkan isi form di bawah ini untuk menambahkan
                            data Komputer</p>
                    </div>

                    <div class="mt-1 grid gap-4 lg:grid-cols-2 md:grid-cols-2 xs:grid-cols-1 p-5">

                            <div class="">
                                {{-- Nama Komputer --}}
                                <div class="sm:col-span-3">
                                    <label for="nama_komputer" class="block text-sm/6 font-medium text-white mt-4">Nama
                                        Komputer</label>
                                    <div class="mt-2">
                                        <input type="text" name="nama_komputer" id="nama_komputer"
                                            autocomplete="given-name" placeholder="Masukan Nama Komputer"
                                            class="block w-full rounded-md px-3 py-1.5 text-base  bg-gray-700 text-white outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                                    </div>
                                </div>

                                {{-- IP_Address Komputer --}}
                                <div class="sm:col-span-3">
                                    <label for="ip_address" class="block text-sm/6 font-medium text-white mt-4">IP
                                        Komputer</label>
                                    <div class="mt-2">
                                        <input type="text" name="ip_address" id="ip_address" pattern="^((25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)(\.|$)){4}$" placeholder="192.168.0.1"
                                            autocomplete="family-name"
                                            class="block w-full rounded-md px-3 py-1.5 text-base bg-gray-700 text-white outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                                    </div>
                                </div>

                                {{-- Sistem Operasi Komputer --}}
                                <div class="sm:col-span-3">
                                    <label for="sistem_operasi" class="block text-sm/6 font-medium text-white mt-4">Sistem
                                        Operasi Komputer</label>
                                    <div class="mt-2">
                                        <input type="text" name="sistem_operasi" id="sistem_operasi" placeholder="Masukan Sistem Operasi Komputer"
                                            autocomplete="family-name"
                                            class="block w-full rounded-md px-3 py-1.5 text-base bg-gray-700 text-white outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                                    </div>
                                </div>

                                {{-- Ruangan Komputer --}}
                                <div class="sm:col-span-3">
                                    <label for="ruangan" class="block text-sm/6 font-medium text-white mt-4">Ruangan
                                        Komputer</label>
                                    <div class="mt-2">
                                        <input type="text" name="ruangan" id="ruangan" autocomplete="family-name" placeholder="Masukan Ruangan Komputer"
                                            class="block w-full rounded-md px-3 py-1.5 text-base bg-gray-700 text-white outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                                    </div>
                                </div>

                                {{-- Monitor Komputer --}}
                                <div class="sm:col-span-3">
                                    <label for="id_monitor" class="block text-sm/6 font-medium text-white mt-4">Monitor Komputer</label>
                                    <div class="mt-2">
                                        <select name="id_monitor" id="id_monitor"
                                            class="block w-full rounded-md px-3 py-1.5 text-base bg-gray-700 text-white outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                                            <option disabled selected> --Pilih Jenis Monitor Komputer--</option>
                                            @foreach ($monitor as $item => $value)
                                                <option class="text-white" value="{{ $value->id }}">{{ $value->nama_brg }}</option>
                                            @endforeach
                                            
                                        </select>

                                    </div>
                                </div>

                                {{-- keyboard Komputer --}}
                                <div class="sm:col-span-3">
                                    <label for="id_keyboard" class="block text-sm/6 font-medium text-white mt-4">Keyboard
                                        Komputer</label>
                                    <div class="mt-2">
                                        <select name="id_keyboard" id="id_keyboard"
                                            class="block w-full rounded-md px-3 py-1.5 text-base bg-gray-700 text-white outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                                            <option disabled selected> --Pilih Jenis Keyboard Komputer--</option>
                                            @foreach ($keyboard as $item => $value)
                                                <option class="text-white" value="{{ $value->id }}">{{ $value->nama_brg }}</option>
                                            @endforeach
                                        </select>

                                    </div>
                                </div>


                                 {{-- Mouse Komputer --}}
                                 <div class="sm:col-span-3">
                                    <label for="id_motherboard" class="block text-sm/6 font-medium text-white mt-4">Mouse
                                        Komputer</label>
                                    <div class="mt-2">
                                        <select name="id_mouse" id="id_mouse"
                                            class="block w-full rounded-md px-3 py-1.5 text-base bg-gray-700 text-white outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                                            <option disabled selected> --Pilih Jenis Mouse Komputer--</option>
                                            @foreach ($mouse as $item => $value)
                                                <option class="text-white" value="{{ $value->id }}">{{ $value->nama_brg }}</option>
                                            @endforeach
                                        </select>

                                    </div>
                                </div>


                                {{-- RAM Komputer --}}
                                <div class="sm:col-span-3">
                                    <label for="id_ram" class="block text-sm/6 font-medium text-white mt-4">Ram
                                        Komputer</label>
                                    <div class="mt-2">
                                        <select name="id_ram" id="id_ram"
                                            class="block w-full rounded-md px-3 py-1.5 text-base bg-gray-700 text-white outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                                            <option disabled selected> --Pilih Jenis Ram Komputer--</option>
                                            @foreach ($ram as $item => $value)
                                                <option class="text-white" value="{{ $value->id }}">{{ $value->nama_brg }}</option>
                                            @endforeach
                                        </select>

                                    </div>
                                </div>

                                

                                
                            </div>


                            <div class="">


                                {{-- Prosesor Komputer --}}
                                <div class="sm:col-span-3">
                                    <label for="id_prosesor" class="block text-sm/6 font-medium text-white mt-4">Prosessor
                                        Komputer</label>
                                    <div class="mt-2">
                                        <select name="id_prosesor" id="id_prosesor"
                                            class="block w-full rounded-md px-3 py-1.5 text-base bg-gray-700 text-white outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                                            <option disabled selected> --Pilih Jenis Prosessor Komputer--</option>
                                            @foreach ($prosesor as $item => $value)
                                                <option class="text-white" value="{{ $value->id }}">{{ $value->nama_brg }}</option>
                                            @endforeach
                                        </select>

                                    </div>
                                </div>

                                {{-- SSD-HDD Komputer --}}
                                <div class="sm:col-span-3">
                                    <label for="id_ssd_hdd" class="block text-sm/6 font-medium text-white mt-4">SSD HDD
                                        Komputer</label>
                                    <div class="mt-2">
                                        <select name="id_ssd_hdd" id="id_ssd_hdd"
                                            class="block w-full rounded-md px-3 py-1.5 text-base bg-gray-700 text-white outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                                            <option disabled selected> --Pilih Jenis SSD HDD Komputer--</option>
                                            @foreach ($ssd_hdd as $item => $value)
                                                <option class="text-white" value="{{ $value->id }}">{{ $value->nama_brg }}</option>
                                            @endforeach
                                        </select>

                                    </div>
                                </div>

                                {{-- Motherboard Komputer --}}
                                <div class="sm:col-span-3">
                                    <label for="id_motherboard" class="block text-sm/6 font-medium text-white mt-4">Motherboard
                                        Komputer</label>
                                    <div class="mt-2">
                                        <select name="id_motherboard" id="id_motherboard"
                                            class="block w-full rounded-md px-3 py-1.5 text-base bg-gray-700 text-white outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                                            <option disabled selected> --Pilih Jenis Motherboard Komputer--</option>
                                            @foreach ($motherboard as $item => $value)
                                                <option class="text-white" value="{{ $value->id }}">{{ $value->nama_brg }}</option>
                                            @endforeach
                                        </select>

                                    </div>
                                </div>

                                {{-- LAN CARD Komputer --}}
                                <div class="sm:col-span-3">
                                    <label for="id_lan_card" class="block text-sm/6 font-medium text-white mt-4">Lan Card
                                        Komputer</label>
                                    <div class="mt-2">
                                        <select name="id_lan_card" id="id_lan_card"
                                            class="block w-full rounded-md px-3 py-1.5 text-base bg-gray-700 text-white outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                                            <option disabled selected> --Pilih Lan Card--</option>
                                            @foreach ($lan_card as $item => $value)
                                                <option class="text-white" value="{{ $value->id }}">{{ $value->nama_brg }}</option>
                                            @endforeach
                                       
                                        </select>

                                    </div>
                                </div>

                                  {{-- Keterangan Komputer --}}
                                    <div class="col-span-3">
                                        <label for="keterangan" class="block text-sm/6 font-medium text-white mt-4 ">Keterangan
                                            Komputer</label>
                                        <div class="mt-2">
                                            <textarea name="keterangan" id="keterangan" rows="3" placeholder="Masukan Keterangan Komputer..."
                                                class="block w-full rounded-md px-3 py-1.5 text-base bg-gray-700 text-white outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"></textarea>
                                        </div>
                                    </div>


                                {{-- foto komputer --}}
                                <div class="col-span-3">
                                    <label for="images" class="block text-sm font-medium text-white mt-4">Foto
                                        Komputer</label>
                                    <div
                                        class="mt-2 flex justify-center rounded-lg border-2 border-dashed border-gray-300 bg-gray-700 p-6">
                                        <div class="text-center mt-2">
                                            <svg class="mx-auto size-7 text-gray-400" viewBox="0 0 24 24"
                                                fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M1.5 6a2.25 2.25 0 0 1 2.25-2.25h16.5A2.25 2.25 0 0 1 22.5 6v12a2.25 2.25 0 0 1-2.25 2.25H3.75A2.25 2.25 0 0 1 1.5 18V6ZM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0 0 21 18v-1.94l-2.69-2.689a1.5 1.5 0 0 0-2.12 0l-.88.879.97.97a.75.75 0 1 1-1.06 1.06l-5.16-5.159a1.5 1.5 0 0 0-2.12 0L3 16.061Zm10.125-7.81a1.125 1.125 0 1 1 2.25 0 1.125 1.125 0 0 1-2.25 0Z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            <div class="mt-2 flex flex-col items-center text-sm text-gray-600">
                                                <label for="images"
                                                    class="cursor-pointer rounded-md bg-indigo-600 px-4 py-1  text-white font-semibold shadow-md hover:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:ring-offset-2">
                                                    Upload a file
                                                    <input id="images" name="images" type="file" class="sr-only"
                                                        onchange="displayFileName()">
                                                </label>
                                                <p class="mt-1 text-gray-500">or drag and drop</p>
                                            </div>
                                            <p id="file-name" class="mt-1 text-xs text-gray-500"></p>
                                            <p class="mt-1 text-xs text-gray-500">PNG, JPG, GIF up to 10MB</p>
                                        </div>
                                    </div>
                                </div>

                                <script>
                                    function displayFileName() {
                                        const input = document.getElementById('images');
                                        const fileNameDisplay = document.getElementById('file-name');
                                        if (input.files.length > 0) {
                                            fileNameDisplay.textContent = "Selected file: " + input.files[0].name;
                                        } else {
                                            fileNameDisplay.textContent = "";
                                        }
                                    }
                                </script>
                            </div>

                            

                        
                       
                           
                    </div>

                     {{-- button --}}
                     <div class="flex justify-end mx-5 mb-10 ">
                        <button  type="reset"
                            class="px-4 py-2 bg-yellow-600 rounded-md hover:bg-gray-400 mr-2 text-white">Cancel</button>

                       
                            <button type="submit"
                                class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-400">Simpan</button>
                        
                    </div>

                </div>
            </div>




        </form>
    </div>

</x-app-layout>
