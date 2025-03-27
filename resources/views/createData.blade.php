<x-app-layout>
    <div class="m-5 bg-gray-200 rounded-md">
        <form action="{{ route('storeData') }}" method="POST" type="multipart/form-data"  >
          @csrf
            <div class="space-y-12">
              <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base/7 font-semibold text-gray-900 p-5">Form Tamabah Data Komputer</h2>

                <div class="p-5  ">
                  <a href="{{ route('dataKomputer') }}" class="bg-blue-500 rounded-md hover:bg-orange-500 p-3 text-white">Lihat Data Komputer</a>
                </div>

                <p class="mt-1 text-sm/6 text-gray-600 p-5">This information will be displayed publicly so be careful what you share.</p>
          
                <div class="mt-1 grid gap-y-8 sm:grid-cols-1 p-5">
                  <div class="sm:col-span-4">
                    <div class="">
                      
                        <div class="sm:col-span-3">
                            <label for="nama_komputer" class="block text-sm/6 font-medium text-gray-900">Nama Komputer</label>
                            <div class="mt-2">
                              <input type="text" name="nama_komputer" id="nama_komputer" autocomplete="given-name" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                            </div>
                          </div>
                  
                          <div class="sm:col-span-3">
                            <label for="ip_address" class="block text-sm/6 font-medium text-gray-900">IP Komputer</label>
                            <div class="mt-2">
                              <input type="number" name="ip_address" id="ip_address" autocomplete="family-name" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                            </div>
                          </div>

                          <div class="sm:col-span-3">
                            <label for="sistem_operasi" class="block text-sm/6 font-medium text-gray-900">Sistem Operasi Komputer</label>
                            <div class="mt-2">
                              <input type="text" name="sistem_operasi" id="sistem_operasi" autocomplete="family-name" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                            </div>
                          </div>

                          <div class="sm:col-span-3">
                            <label for="ruangan" class="block text-sm/6 font-medium text-gray-900">Ruangan Komputer</label>
                            <div class="mt-2">
                              <input type="text" name="ruangan" id="ruangan" autocomplete="family-name" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                            </div>
                          </div>

                          <div class="sm:col-span-3">
                            <label for="monitor" class="block text-sm/6 font-medium text-gray-900">Monitor Komputer</label>
                            <div class="mt-2">
                              <input type="text" name="monitor" id="monitor" autocomplete="family-name" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                            </div>
                          </div>


                          <div class="sm:col-span-3">
                            <label for="keyboard" class="block text-sm/6 font-medium text-gray-900">Keyboard Komputer</label>
                            <div class="mt-2">
                              <input type="text" name="keyboard" id="keyboard" autocomplete="family-name" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                            </div>
                          </div>


                          <div class="sm:col-span-3">
                            <label for="ram" class="block text-sm/6 font-medium text-gray-900">Ram Komputer</label>
                            <div class="mt-2">
                              <input type="text" name="ram" id="ram" autocomplete="family-name" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                            </div>
                          </div>

                          <div class="sm:col-span-3">
                            <label for="prosesor" class="block text-sm/6 font-medium text-gray-900">Prosesor Komputer</label>
                            <div class="mt-2">
                              <input type="text" name="prosesor" id="prosesor" autocomplete="family-name" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                            </div>
                          </div>

                          <div class="sm:col-span-3">
                            <label for="motherboard" class="block text-sm/6 font-medium text-gray-900">Motherboard Komputer</label>
                            <div class="mt-2">
                              <input type="text" name="motherboard" id="motherboard" autocomplete="family-name" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                            </div>
                          </div>

                          <div class="sm:col-span-3">
                            <label for="lan_card" class="block text-sm/6 font-medium text-gray-900">Lan Card Komputer</label>
                            <div class="mt-2">
                              <input type="text" name="lan_card" id="lan_card" autocomplete="family-name" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                            </div>
                          </div>
                    </div>
                  </div>
          
                  <div>

                    {{-- about --}}
                    <div class="col-span-full">
                      <label for="keterangan" class="block text-sm/6 font-medium text-gray-900">Keterangan Komputer</label>
                      <div class="mt-2">
                        <textarea name="keterangan" id="keterangan" rows="3" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"></textarea>
                      </div>
                    </div>

                    {{-- foto komputer --}}
                    <div class="col-span-full w-full mt-7">
                      <label for="cover-photo" class="block text-sm/6 font-medium text-gray-900">Foto Komputer</label>
                      <div class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 ">
                        <div class="text-center">
                          <svg class="mx-auto size-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" data-slot="icon">
                            <path fill-rule="evenodd" d="M1.5 6a2.25 2.25 0 0 1 2.25-2.25h16.5A2.25 2.25 0 0 1 22.5 6v12a2.25 2.25 0 0 1-2.25 2.25H3.75A2.25 2.25 0 0 1 1.5 18V6ZM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0 0 21 18v-1.94l-2.69-2.689a1.5 1.5 0 0 0-2.12 0l-.88.879.97.97a.75.75 0 1 1-1.06 1.06l-5.16-5.159a1.5 1.5 0 0 0-2.12 0L3 16.061Zm10.125-7.81a1.125 1.125 0 1 1 2.25 0 1.125 1.125 0 0 1-2.25 0Z" clip-rule="evenodd" />
                          </svg>
                          <div class="mt-4 flex text-sm/6 text-gray-600">
                            <label for="file-upload" class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-indigo-500">
                              <span>Upload a file</span>
                              <input id="images" name="images" type="file" class="">
                            </label>
                            <p class="pl-1">or drag and drop</p>
                          </div>
                          <p class="text-xs/5 text-gray-600">PNG, JPG, GIF up to 10MB</p>
                        </div>
                      </div>
                    </div>

                    {{-- button --}}
                    <div>
                      <div class="mt-6 flex items-center justify-end gap-x-6">
                        <button type="submit" class="bg-blue-500 hover:bg-orange-500  p-2 rounded-md w-full text-white">Simpan</button>
                      </div>
                    </div>

                  </div>
                  
          
                  
                </div>
               
              </div>
          
          
              
          
           
          </form>
    </div>
    
</x-app-layout>
