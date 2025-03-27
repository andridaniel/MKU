<x-app-layout>
    <div class="m-5 rounded-md ">
        <div>
            <a href="{{ route('createData') }}" class="bg-gray-800  p-2 rounded-md hover:bg-orange-500 text-white"> + Tambah Data Komputer</a>
        </div>
        <div class="grid grid-cols-4 gap-4 mt-5 xs:grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4  shadow-2xl">
            @for ($i = 0; $i < 8; $i++)
                <div class="rounded-md bg-gray-200">

                    <div class="rounded-md">
                        <img src="{{ asset('images/computer2.jpg') }}" width="350" class="rounded-md p-2" alt="">
                    </div>
                    <div class="m-2">
                        <div class="">Computer 1</div>
                        <div class="">192.168.21.2</div>
                        <div class="">Windows 10</div>
                    </div>



                    <div class="p-2 py-4 flex text-center ">
                        <a href=" {{ route('detailKomputer') }}" class="bg-blue-500 hover:bg-orange-500  p-2 rounded-md w-full text-white">Lihat Detail</a>
                    </div>
                </div>
            @endfor
        </div>

    </div>
</x-app-layout>
