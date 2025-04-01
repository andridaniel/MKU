<x-app-layout>
    <div class="m-5">
        <div class="">

            <div class="my-8 flex justify-between">

                <h1 class="text-2xl font-bold">Detail Komputer</h1>

                <div class="flex mb-5">
                    <a href=" {{ route('dataKomputer') }} "
                        class="bg-blue-500  p-2 rounded-md hover:bg-orange-500 text-white px-10"> Kembali</a>
                </div>
            </div>

            <div class="grid grid-cols-2 xs:grid-cols-1 md:grid-cols-2  sm:grid-cols-1 bg-gray-300 rounded-md">

                @if (session()->has('success'))
                    <div id="alert-success"
                        class="flex items-center justify-between w-full max-w-lg mx-auto p-4 mb-4 text-sm text-white bg-green-600 rounded-lg shadow-md">
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
                        class="flex items-center justify-between w-full max-w-lg mx-auto p-4 mb-4 text-sm text-white bg-red-600 rounded-lg shadow-md">
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



                <div class="p-10">
                    <img src="{{ url($detailKomputer->images) }}" width="500" alt="gambar komputer">
                </div>
                <div class="m-10">
                    <div class="mx-auto">


                        <div class=" bg-slate-100 rounded-md p-5">
                            <label for="" class="font-bold">Keterangan</label>
                            <div class="mx-2">{{ $detailKomputer->keterangan }}</div>

                            <label for="" class="font-bold">Ruangan Komputer</label>
                            <div class="mx-2">{{ $detailKomputer->ruangan }}</div>

                            <label for="" class="font-bold">Monitor Komputer</label>
                            <div class="mx-2">{{ $detailKomputer->monitor }}</div>

                            <label for="" class="font-bold">Keyboard Komputer</label>
                            <div class="mx-2">{{ $detailKomputer->keyboard }}</div>

                            <label for="" class="font-bold">Ram Komputer</label>
                            <div class="mx-2">{{ $detailKomputer->ram }}</div>

                            <label for="" class="font-bold">Processor Komputer</label>
                            <div class="mx-2">{{ $detailKomputer->prosesor }}</div>

                            <label for="" class="font-bold">SSD/HDD Komputer</label>
                            <div class="mx-2">{{ $detailKomputer->ssd_hhd }}</div>

                            <label for="" class="font-bold">Motherboard Komputer</label>
                            <div class="mx-2">{{ $detailKomputer->motherboard }}</div>

                            <label for="" class="font-bold">Lan Card Komputer</label>
                            <div class="mx-2">{{ $detailKomputer->lan_card }}</div>

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
                                Update
                            </button>
                        </form>

                        <!-- Tombol Delete -->
                        <form action="{{ route('deleteData', $detailKomputer->id) }}" method="POST" class="w-1/2">
                            @csrf
                            @method('DELETE')
                            <button type="submit" id="deleteButton"
                                class="w-full bg-red-600 p-3 rounded-lg text-white font-semibold transition duration-300 ease-in-out hover:bg-red-700 shadow-md">
                                Delete
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
