<x-app-layout>
    <div class="m-5">
        <div class="">
            <div class="flex mb-5">
                <a href=" {{ route('dataKomputer') }} " class="bg-blue-500  p-2 rounded-md hover:bg-orange-500 text-white"> Kembali</a>
            </div>
            <h1 class="text-2xl font-bold">Detail Komputer</h1>
        </div>
        <div class="grid grid-cols-2 xs:grid-cols-1 md:grid-cols-2  sm:grid-cols-1 bg-gray-300 rounded-md">
            <div class="p-10">
                <img src="{{ asset('images/computer2.jpg') }}" width="500" alt="">
            </div>
            <div class="m-10">
                <div class="mx-auto">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dicta ipsam, rem dolor iure necessitatibus
                    iusto distinctio laborum atque aliquam. Ipsa sapiente autem rerum, esse libero accusamus soluta
                    dolor inventore placeat.

                    <div class="">
                        <div class="">Computer 1</div>
                        <div class="">192.168.21.2</div>
                        <div class="">Windows 10</div>
                    </div>

                </div>
                <div class=" flex gap-4 text-center mt-5 ">
                    <a href=" {{ route('updateData') }}"
                        class="bg-orange-500  p-2 rounded-md w-full hover:bg-blue-500  text-white">Update</a>
                    <a href=" {{ route('detailKomputer') }}"
                        class="bg-blue-500  p-2 rounded-md w-full hover:bg-orange-500 text-white">Delete</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
