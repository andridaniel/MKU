<x-app-layout>
    <div class="content-center">

        <div class="rounded-md">
            <form action="{{ route('editData', ['hash' => base64_encode ($updateKomputer->slug)]) }}" enctype="multipart/form-data"
                
                method="POST">
                @csrf
                @method('PUT')
                <div class="space-y-12">
                    <div class="border-b border-orange-500 pb-12 bg-gray-700 mx-5 rounded-md">
    
                        <div class="p-5 pt-12 flex justify-start">
                            <a href="{{ route('detailKomputer', ['hash' => base64_encode ($updateKomputer->slug)]) }}"
                                class="bg-orange-400 rounded-md hover:bg-gray-700 p-1 px-5 text-white shadow-xl">
                                <i class="fa-solid fa-arrow-left"></i>
                                </a>
                        </div>
    
                        <div class=" mx-5">
                            <h2 class="text-base/7 font-semibold text-white">Form Update Data Komputer</h2>
    
                            <p class="mt-1 text-sm/6 text-gray-200 ">Update data Komputer dengan mengubah form di bawah ini</p>
                        </div>
    
                        <div class="mt-1 grid gap-4 lg:grid-cols-2 md:grid-cols-2 xs:grid-cols-1 p-5">
                            
                                <div class="">
    
                                    {{-- nama Komputer --}}
                                    <div class="sm:col-span-3">
                                        <label for="nama_komputer" class="block text-sm/6 font-medium text-white mt-4">Nama
                                            Komputer</label>
                                        <div class="mt-2">
                                            <input type="text" name="nama_komputer" id="nama_komputer"
                                                autocomplete="given-name" value="{{ $updateKomputer->nama_komputer }}"
                                                class="block w-full rounded-md bg-gray-700 px-3 py-1.5 text-base text-white outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                                        </div>
                                    </div>
    
                                    {{-- ip address komputer --}}
                                    <div class="sm:col-span-3">
                                        <label for="ip_address" class="block text-sm/6 font-medium text-white mt-4">IP
                                            Komputer</label>
                                        <div class="mt-2">
                                            <input type="text" name="ip_address" id="ip_address"
                                                autocomplete="family-name" value="{{ $updateKomputer->ip_address }}"
                                                class="block w-full rounded-md bg-gray-700 px-3 py-1.5 text-base text-white outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                                        </div>
                                    </div>
    
                                    {{-- sistem operasi komputer --}}
                                    <div class="sm:col-span-3">
                                        <label for="sistem_operasi" class="block text-sm/6 font-medium text-white mt-4">Sistem
                                            Operasi Komputer</label>
                                        <div class="mt-2">
                                            <input type="text" name="sistem_operasi" id="sistem_operasi"
                                                autocomplete="family-name" value="{{ $updateKomputer->sistem_operasi }}"
                                                class="block w-full rounded-md bg-gray-700 px-3 py-1.5 text-base text-white outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                                        </div>
                                    </div>
    
                                    {{-- ruangan komputer --}}
                                    <div class="sm:col-span-3">
                                        <label for="ruangan" class="block text-sm/6 font-medium text-white mt-4">Ruangan
                                            Komputer</label>
                                        <div class="mt-2">
                                            <input type="text" name="ruangan" id="ruangan" autocomplete="family-name"
                                                value="{{ $updateKomputer->ruangan }}"
                                                class="block w-full rounded-md bg-gray-700 px-3 py-1.5 text-base text-white outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                                        </div>
                                    </div>
    
                                    {{-- Monitor --}}
                                    <div class="sm:col-span-3">
                                        <label for="id_monitor" class="block text-sm/6 font-medium text-white mt-4">Monitor
                                            Komputer</label>
                                        <div class="mt-2">
                                            <select name="id_monitor" id="id_monitor"
                                                class="block w-full rounded-md bg-gray-700 px-3 py-1.5 text-base text-white outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                                                @foreach ($monitor as $item)
                                                    <option value="{{ $item->id }}" 
                                                        {{ $updateKomputer->id_monitor == $item->id ? 'selected' : '' }}>
                                                        {{ $item->nama_brg }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
    
                                
                                    {{-- keyboard --}}
                                    <div class="sm:col-span-3">
                                        <label for="id_keyboard" class="block text-sm/6 font-medium text-white mt-4">Keyboard
                                            Komputer</label>
                                        <div class="mt-2">
                                            <select name="id_keyboard" id="id_keyboard"
                                                class="block w-full rounded-md bg-gray-700 px-3 py-1.5 text-base text-white outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                                                @foreach ($keyboard as $item)
                                                    <option value="{{ $item->id}}"
                                                        {{ $updateKomputer->id_keyboard == $item->id ? 'selected' : '' }}>
                                                        {{ $item->nama_brg }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    {{-- Mouse komputer --}}
                                    <div class="sm:col-span-3">
                                        <label for="id_mouse" class="block text-sm/6 font-medium text-white mt-4">Mouse Komputer</label>
                                        <div class="mt-2">
                                            <select name="id_mouse" id="id_mouse"
                                                class="block w-full rounded-md bg-gray-700 px-3 py-1.5 text-base text-white outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                                                @foreach ($mouse as $item)
                                                    <option value="{{ $item->id }}"
                                                        {{ $updateKomputer->id_mouse == $item->id ? 'selected' : '' }}>
                                                        {{ $item->nama_brg }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>


                                    

    
                                    {{-- Ram Komputer --}}
                                    <div class="sm:col-span-3">
                                        <label for="id_ram" class="block text-sm/6 font-medium text-white mt-4">Ram
                                            Komputer</label>
                                        <div class="mt-2">
                                            <select name="id_ram" id="id_ram"
                                                class="block w-full rounded-md bg-gray-700 px-3 py-1.5 text-base text-white outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                                                @foreach ($ram as $item)
                                                    <option value="{{ $item->id }}"
                                                        {{ $updateKomputer->id_ram == $item->id ? 'selected' : '' }}>
                                                        {{ $item->nama_brg }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
    
                                    
    
                                  
    
                                </div>
                            
    
                            <div class="">

                                {{-- prosesor komputer --}}
                                <div class="sm:col-span-3">
                                    <label for="id_prosesor" class="block text-sm/6 font-medium text-white mt-4">Prosesor
                                        Komputer</label>
                                    <div class="mt-2">
                                        <select name="id_prosesor" id="id_prosesor"
                                            class="block w-full rounded-md bg-gray-700 px-3 py-1.5 text-base text-white outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                                            @foreach ($prosesor as $item)
                                                <option value="{{ $item->id }}"
                                                    {{ $updateKomputer->id_prosesor == $item->id ? 'selected' : '' }}>
                                                    {{ $item->nama_brg }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                  {{-- SSD-HDD Komputer --}}
                                  <div class="sm:col-span-3">
                                    <label for="id_ssd_hdd" class="block text-sm/6 font-medium text-white mt-4">SSD/HDD
                                        Komputer</label>
                                    <div class="mt-2">
                                        <select name="id_ssd_hdd" id="id_ssd_hdd"
                                            class="block w-full rounded-md bg-gray-700 px-3 py-1.5 text-base text-white outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                                            @foreach ($ssd_hdd as $item)
                                                <option value="{{ $item->id}}"
                                                    {{ $updateKomputer->id_ssd_hdd == $item->id ? 'selected' : '' }}>
                                                    {{ $item->nama_brg }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                {{-- Motherboard Komputer --}}
                                <div class="sm:col-span-3">
                                    <label for="id_motherboard"
                                        class="block text-sm/6 font-medium text-white mt-4">Motherboard Komputer</label>
                                    <div class="mt-2">
                                        <select name="id_motherboard" id="id_motherboard"
                                            class="block w-full rounded-md bg-gray-700 px-3 py-1.5 text-base text-white outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                                            @foreach ($motherboard as $item)
                                                <option value="{{ $item->id}}"
                                                    {{ $updateKomputer->id_motherboard == $item->id ? 'selected' : '' }}>
                                                    {{ $item->nama_brg }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                {{-- LAN CARD Komputer --}}
                                <div class="sm:col-span-3">
                                    <label for="id_lan_card" class="block text-sm/6 font-medium text-white mt-4">
                                        Lan Card Komputer
                                    </label>
                                    <div class="mt-2">
                                        <select name="id_lan_card" id="id_lan_card"
                                            class="block w-full rounded-md bg-gray-700 px-3 py-1.5 text-base text-white outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                                            @foreach ($lan_card as $item)
                                                <option value="{{ $item->id}}"
                                                    {{ $updateKomputer->id_lan_card == $item->id ? 'selected' : '' }}>
                                                    {{ $item->nama_brg }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
    
                                {{-- Keterangan Komputer --}}
                                <div class="col-span-full">
                                    <label for="keterangan" class="block text-sm/6 font-medium text-white mt-4">Keterangan
                                        Komputer</label>
                                    <div class="mt-2">
                                        <textarea name="keterangan" id="keterangan" rows="3"
                                            class="block w-full rounded-md bg-gray-700 px-3 py-1.5 text-base text-white outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"> {{ $updateKomputer->keterangan }}</textarea>
                                    </div>
                                </div>
    
                                {{-- foto komputer --}}
                                <div class="col-span-3">
                                    <label for="images" class="block text-sm font-medium text-white mt-4">Foto
                                        Komputer</label>
                                    <div
                                        class=" flex justify-center rounded-lg border-2 border-dashed border-gray-300 bg-gray-700 p-6 mt-2">
                                        @if (!empty($updateKomputer->images))
                                            <img src="{{ asset($updateKomputer->images) }}" alt="Foto Komputer"
                                                class="w-200 h-10 object-cover rounded-md mt-10 mb-3">
                                        @endif
                                        <div class="text-center my-1.5">
                                            <svg class="mx-auto size-7 text-gray-300" viewBox="0 0 24 24"
                                                fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M1.5 6a2.25 2.25 0 0 1 2.25-2.25h16.5A2.25 2.25 0 0 1 22.5 6v12a2.25 2.25 0 0 1-2.25 2.25H3.75A2.25 2.25 0 0 1 1.5 18V6ZM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0 0 21 18v-1.94l-2.69-2.689a1.5 1.5 0 0 0-2.12 0l-.88.879.97.97a.75.75 0 1 1-1.06 1.06l-5.16-5.159a1.5 1.5 0 0 0-2.12 0L3 16.061Zm10.125-7.81a1.125 1.125 0 1 1 2.25 0 1.125 1.125 0 0 1-2.25 0Z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            <div class="mt-1 flex flex-col items-center text-sm text-gray-600">
                                                <label for="images"
                                                    class="cursor-pointer rounded-md bg-indigo-600 px-4 py-1 text-white font-semibold shadow-md hover:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:ring-offset-2">
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


                        {{-- Status Barang --}}
                        <div class="my-2 mx-5">
                             <div class="sm:col-span-3">
                                <label for="nama_komputer" class="block text-sm/6 font-medium text-white mt-4">Status Barang</label>
                                <div class="mt-2" value="{{ $updateKomputer->status }}">
                                    <select name="status" id="status"
                                    class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-black outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                                    <option disabled selected > --Pilih Barang Yang Baru dengan Type yang sama--</option>
                                    <option value="Ganti Monitor Baru">Monitor Baru </option>
                                    <option value="Ganti Keyboard Baru ">Keyboard Baru </option>
                                    <option value="Ganti Mouse Baru ">Mouse Baru </option>
                                    <option value="Ganti Ram Baru">Ram Baru</option>
                                    <option value="Ganti Prosesor Baru ">Prosesor Baru </option>
                                    <option value="Ganti SSD/HDD Baru ">SSD/HDD Baru </option>
                                    <option value="Ganti Motherboard Baru ">Motherboard Baru </option>
                                    <option value="Ganti Lan Card Baru ">Lan Card Baru </option>
                                </select>
                                </div>
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


        {{-- riwayat --}}
        <div class="mx-5 text-white mt-16">
     
            @if(count($riwayatPerubahan) > 0)
                <div class="mt-5 mb-5">
                    <p class="text-orange-500 font-semibold italic lg:text-start xs:text-center "> -- Riwayat Perubahan Data -- </p>
                </div>

                <table class="table-auto w-full border text-sm">
                    <thead class="">
                        <tr>
                            <th class="border px-2 py-2">Field</th>
                            <th class="border px-2 py-2">User</th>
                            <th class="border px-2 py-2">Data Lama</th>
                            <th class="border px-2 py-2">Data Baru</th>
                            <th class="border px-2 py-2">Waktu</th>
                            <th class="border px-2 py-2">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($riwayatPerubahan as $riwayat)
                            <tr>
                                <td class="border px-2 py-2 xs:flex-col text-white">{{ $riwayat['field'] }}</td>
                                <td class="border px-2 py-2 xs:flex-col text-white">{{ $riwayat['user']->name ?? 'User tidak diketahui' }}</td>
                                <td class="border px-2 py-2 xs:flex-col text-white">{{ $riwayat['lama'] }}</td>
                                <td class="border px-2 py-2 xs:flex-col text-white">{{ $riwayat['baru'] }}</td>
                                <td class="border px-2 py-2 xs:flex-col text-white">{{ $riwayat['waktu'] }}</td>
                                <td class="border px-2 py-2 xs:flex-col text-white">{{ $riwayat['status'] }}</td>
                            </tr>
                        @endforeach

                            
                    </tbody>
                </table>
            @else
            <div class="text-center">
                <p class="text-orange-400 font-semibold italic "> -- Belum ada riwayat perubahan -- </p>
            </div>
                
            @endif
    
            
            
        
        </div>

    </div>
   


    
    

   
   
    

</x-app-layout>
