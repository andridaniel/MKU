<x-app-layout>
    <div>
        <div class="lg:mx-5 md:mx-2 xs:mx-1 p-5">

            <div class="flex mb-5">
                <a href=" {{ route('dataKomputer') }} "
                    class="bg-gray-600  p-2 rounded-md hover:bg-gray-700 text-white px-6"> 
                    <i class="fa-solid fa-backward pe-2"></i> 
                    Kembali</a>
            </div>

            

           

            <div class="grid gap-2 grid-cols-2 xs:grid-cols-1 md:grid-cols-2 sm:grid-cols-1 bg-gray-300 rounded-md">

                <div class="m-5 rounded-md bg-yellow-400 ">
                    <img src="{{ url($detailKomputer->images) }}"  class="rounded-md bg-red-500 w-full h-full object-cover" alt="gambar komputer">
                </div>

                <div class="m-5">
                    <div class="mx-auto">
                        <div class=" bg-slate-100 rounded-md p-5">
                            <div class="mb-2 w-full font-bold text-xs border-b-2"><span>{{ $detailKomputer->nama_komputer }}</span></div>

                            <div class="mb-2 w-full font-bold text-xs border-b-2"><span>{{ $detailKomputer->ip_address }}</span></div>

                            <div class="mb-2 w-full font-bold text-xs border-b-2"><span>{{ $detailKomputer->sistem_operasi }} </span></div>

                            <div class="mb-2 w-full font-bold text-xs border-b-2"> <span></span> {{ $detailKomputer->ruangan }}</div>

                            <div class="mb-2 w-full font-bold text-xs border-b-2"><span>{{ $monitor->nama_brg ?? 'Tidak tersedia' }}</span></div>

                            <div class="mb-2 w-full font-bold text-xs border-b-2"><span>{{ $keyboard->nama_brg ?? 'Tidak tersedia' }}</span></div>

                            <div class="mb-2 w-full font-bold text-xs border-b-2">Ram <span>{{ $ram->nama_brg ?? 'Tidak tersedia' }}</span></div>

                            <div class="mb-2 w-full font-bold text-xs border-b-2"> Processor <span> {{ $prosesor->nama_brg ?? 'Tidak tersedia' }}</span> </div>

                            <div class="mb-2 w-full font-bold text-xs border-b-2"> SSD/HDD  <span>{{ $ssd_hdd->nama_brg ?? 'Tidak tersedia' }}</span></div>

                            <div class="mb-2 w-full font-bold text-xs border-b-2"> Motherboard  <span>{{ $motherboard->nama_brg ?? 'Tidak tersedia' }}</span></div>

                            <div class="mb-2 w-full font-bold text-xs border-b-2"> Lan Card  <span>{{ $lan_card->nama_brg ?? 'Tidak tersedia' }}</span></div>

                            <div class="mb-2 w-full font-bold text-xs border-b-2">  <span>{{ $detailKomputer->keterangan }}</span> </div>

                        </div>
                    </div>

                    <div class="flex gap-4 mt-5 bg-slate-100 p-4 rounded-md shadow-md">
                        <!-- Tombol Update -->
                        <form action="{{ route('updateData', ['hash' => base64_encode($detailKomputer->slug)]) }}" method="POST"
                            class="m-2 basis-1/2">
                            @csrf
                            @method('get')
                        
                            <button type="submit"
                                class="w-full bg-orange-500 p-2 px-4 rounded-md text-white font-semibold transition duration-300 ease-in-out hover:bg-red-700 shadow-md">
                                <i class="fa-regular fa-pen-to-square"></i>
                                Edit Data
                            </button>
                        </form>


                        <!-- Tombol Hapus (data-url langsung dari helper route) -->
                        <div class="m-2 basis-1/2">
                            <button onclick="deleteButton(true, this)"
                                data-url="{{ route('deleteData', $detailKomputer->id) }}"
                                class="w-full bg-red-600 p-2 px-4 rounded-md text-white font-semibold transition duration-300 ease-in-out hover:bg-orange-500 shadow-md">
                                <i class="fa-solid fa-trash-can"></i>
                            Hapus
                            </button>
                        </div>

                        <!-- Modal Konfirmasi Hapus -->
                        <div id="deleteModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden z-50">
                            <div class="bg-white rounded-xl p-6 w-full max-w-md shadow-lg lg:mx-1 md:mx-3 xs:mx-5">
                                <h2 class="text-xl font-semibold mb-4 text-gray-600">Hapus Barang</h2>
                                <p class="mb-4 text-gray-700">Apakah Anda yakin ingin menghapus Data Komputer?</p>
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

                        <!-- Tombol Delete -->
                        {{-- <form action="{{ route('updateData', ['hash' => base64_encode($detailKomputer->slug)]) }}" method="POST" class="w-1/2">
                            @csrf
                            @method('DELETE')
                            <button type="submit" id="deleteButton"
                                class="w-full bg-red-600 p-3 rounded-lg text-white font-semibold transition duration-300 ease-in-out hover:bg-red-700 shadow-md">
                                <i class="fa-solid fa-trash-can"></i>
                                Hapus Data
                            </button>
                        </form> --}}
                    </div>

                </div>
            </div>
        </div>

        <script>
            



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
