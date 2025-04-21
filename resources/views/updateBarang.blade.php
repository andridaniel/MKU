<x-app-layout>
    
    <div class="content-center">

        <div class=" xs:mx-2 md:mx-10 lg:mx-5 mt-5 flex justify-start ">
            <a href="{{ route('createBarang') }}"
                class="bg-gray-600 rounded-md hover:bg-gray-500 p-2 px-6 text-white shadow-xl">
                <i class="fa-solid fa-backward pe-2"></i>
                Kembali </a>
        </div>
             
        <div class="m-5  rounded-md xs:mx-2 md:mx-10 lg:mx-5">
            <div class="flex justify-start  mt-5">
                <div class="m-2 text-2xl ">
                    <h3 class="py-2 text-white xs:text-xs sm:text-sm lg:text-xl ">UPDATE DATA BARANG KOMPUTER</h3>
                </div>
            </div>
            <form action="{{ route('editBarang', ['id' => $dataBarang->id]) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
    
                
                <div class="space-y-12">
                    <div class="border-b border-orange-500 pb-12 m-2">
    
                        {{-- kode barang --}}
                        <div class="sm:col-span-3">
                            <label for="kode_brg" class="block text-sm/6 font-medium text-white">Kode
                                Barang</label>
                            <div class="mt-2">
                                <input type="text" name="kode_brg" id="kode_brg"
                                    autocomplete="given-name"
                                    value="{{ $dataBarang->kode_brg }}"
                                    class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-600 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                            </div>
                        </div>
    
    
                        {{-- nama barang --}}
                        <div class="sm:col-span-3">
                            <label for="nama_brg" class="block text-sm/6 font-medium text-white">Nama
                                Barang</label>
                            <div class="mt-2">
                                <input type="text" name="nama_brg" id="nama_brg"
                                    autocomplete="given-name"
                                    value="{{ $dataBarang->nama_brg }}"
                                    class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-600 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                            </div>
                        </div>
    
    
                        {{-- jenis barang --}}
                        <div class="sm:col-span-3">
                            <label for="jns_brg" class="block text-sm/6 font-medium text-white">Jenis Barang</label>
                            <div class="mt-2">
                                <select name="jns_brg" id="jns_brg"
                                    class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-600 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
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
                                <div class="flex items-center justify-end">

                                    <div class="mt-6 items-center justify-end mx-2 ">
                                        <button type="reset" class="bg-blue-500 hover:bg-blue-600 p-2 rounded-md w-full px-5  text-white"> Cancel</button>
                                    </div>

                                    <div class="mt-6 flex items-center justify-end">
                                        <button type="submit"
                                            class="bg-gray-500 hover:bg-gray-600  p-2 rounded-md w-full text-white px-5">Simpan</button>
                                    </div>

                                    
                                </div>
    
                            </div>
    
    
    
                        </div>
    
                    </div>
                </div>
    
    
    
    
            </form>
        </div>

        {{-- riwayat --}}
        <div class="mx-5 text-white">

            <h2 class="text-lg font-semibold mt-6 mb-2">Riwayat Perubahan</h2>
            <table class="table-auto w-full border text-sm">
                <thead class="">
                    <tr>
                        <th class="border px-4 py-2">Field</th>
                        <th class="border px-4 py-2">Data Lama</th>
                        <th class="border px-4 py-2">Data Baru</th>
                        <th class="border px-4 py-2">User</th>
                        <th class="border px-4 py-2">Waktu</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($riwayatPerubahan as $log)
                        <tr>
                            <td class="border px-4 py-2">{{ ucwords(str_replace('_', ' ', $log['field'])) }}</td>
                            <td class="border px-4 py-2">{{ $log['lama'] }}</td>
                            <td class="border px-4 py-2">{{ $log['baru'] }}</td>
                            <td class="border px-4 py-2">{{ $log['user'] }}</td>
                            <td class="border px-4 py-2">{{ $log['waktu'] }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center py-3">Belum ada riwayat perubahan.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>


        </div>
        

    
    </div>
</x-app-layout>
