<x-app-layout>
    <div>
        <div class="lg:mx-5 md:mx-2 xs:mx-1 p-5">

            <div class="flex mb-5">
                <a href=" {{ route('dataKomputer') }} "
                    class="bg-gray-600  p-2 rounded-md hover:bg-gray-700 text-white px-6"> 
                    <i class="fa-solid fa-backward pe-2"></i> 
                    Kembali</a>
            </div>

            

            <div class="mb-2 mt-10 flex justify-start">
                <h1 class="lg:text-3xl font-bold text-white  xs:text-xl"> Detail Komputer</h1>       
            </div>

            <div class="grid grid-cols-2 xs:grid-cols-1 md:grid-cols-2 sm:grid-cols-1 bg-gray-300 rounded-md">
                <div class="p-5 rounded-md">
                    <img src="{{ url($detailKomputer->images) }}" width="500" class="rounded-md" alt="gambar komputer">
                </div>
                <div class="m-5">
                    <div class="mx-auto">
                        <div class=" bg-slate-100 rounded-md p-5">
                            <label for="" class="font-bold ">Keterangan</label>
                            <div class="mb-2 border border-gray-900 p-2 rounded-md">{{ $detailKomputer->keterangan }}</div>

                            <label for="" class="font-bold ">IP Komputer</label>
                            <div class="mb-2 border border-gray-900 p-2 rounded-md">{{ $detailKomputer->ip_address }}</div>

                            <label for="" class="font-bold ">Sistem Operasi</label>
                            <div class="mb-2 border border-gray-900 p-2 rounded-md">{{ $detailKomputer->sistem_operasi }}</div>

                            <label for="" class="font-bold ">Ruangan Komputer</label>
                            <div class="mb-2 border border-gray-900 p-2 rounded-md">{{ $detailKomputer->ruangan }}</div>

                            <label for="" class="font-bold">Monitor Komputer</label>
                            <div class="mb-2 border border-gray-900 p-2 rounded-md">{{ $monitor->nama_brg ?? 'Tidak tersedia' }}</div>

                            <label for="" class="font-bold">Keyboard Komputer</label>
                            <div class="mb-2 border border-gray-900 p-2 rounded-md">{{ $keyboard->nama_brg ?? 'Tidak tersedia' }}</div>

                            <label for="" class="font-bold">Ram Komputer</label>
                            <div class="mb-2 border border-gray-900 p-2 rounded-md">{{ $ram->nama_brg ?? 'Tidak tersedia' }}</div>

                            <label for="" class="font-bold">Processor Komputer</label>
                            <div class="mb-2 border border-gray-900 p-2 rounded-md">{{ $prosesor->nama_brg ?? 'Tidak tersedia' }}</div>

                            <label for="" class="font-bold">SSD/HDD Komputer</label>
                            <div class="mb-2 border border-gray-900 p-2 rounded-md">{{ $ssd_hdd->nama_brg ?? 'Tidak tersedia' }}</div>

                            <label for="" class="font-bold">Motherboard Komputer</label>
                            <div class="mb-2 border border-gray-900 p-2 rounded-md">{{ $motherboard->nama_brg ?? 'Tidak tersedia' }}</div>

                            <label for="" class="font-bold">Lan Card Komputer</label>
                            <div class="mb-2 border border-gray-900 p-2 rounded-md">{{ $lan_card->nama_brg ?? 'Tidak tersedia' }}</div>

                        </div>
                    </div>

                    <div class="flex gap-4 mt-5 bg-slate-100 p-4 rounded-md shadow-md">
                        <!-- Tombol Update -->
                        <form action="{{ route('updateData', ['id' => $detailKomputer->id]) }}" method="POST"
                            class="w-1/2">
                            @csrf
                            @method('get')
                            <button type="submit"
                                class="w-full bg-orange-500 p-3 rounded-lg text-white font-semibold transition duration-300 ease-in-out hover:bg-red-700 shadow-md">
                                <i class="fa-regular fa-pen-to-square"></i>
                                Edit Data
                            </button>
                        </form>

                        <!-- Tombol Delete -->
                        <form action="{{ route('deleteData', $detailKomputer->id) }}" method="POST" class="w-1/2">
                            @csrf
                            @method('DELETE')
                            <button type="submit" id="deleteButton"
                                class="w-full bg-red-600 p-3 rounded-lg text-white font-semibold transition duration-300 ease-in-out hover:bg-red-700 shadow-md">
                                <i class="fa-solid fa-trash-can"></i>
                                Hapus Data
                            </button>
                        </form>
                    </div>

                </div>
            </div>
        </div>

        <script>
            // button delete
            document.getElementById('deleteButton').addEventListener('click', function(event) {
                if (!confirm('Apakah Anda yakin ingin menghapus data ini?')) {
                    event.preventDefault();
                }
            });
        </script>
</x-app-layout>
