<x-app-layout>
    @include('layouts.sidebar-admin')

    <div class="p-4 sm:ml-64  mt-4">
        <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
            <div class="flex items-center justify-between">
                <h1 class=" text-xl font-semibold">Carousel</h1>



                <!-- Modal toggle -->
                <button data-modal-target="default-modal" data-modal-toggle="default-modal"
                    class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                    type="button">
                    + Tambah Carousel
                </button>

                <!-- Main modal -->
                <div id="default-modal" tabindex="-1" aria-hidden="true"
                    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                    <div class="relative p-4 w-full max-w-2xl max-h-full">
                        <!-- Modal content -->
                        <div class="relative bg-white rounded-lg shadow-sm dark:bg-gray-700">
                            <!-- Modal header -->
                            <div
                                class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600 border-gray-200">
                                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                    Tambah Hewan
                                </h3>
                                <button type="button"
                                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                    data-modal-hide="default-modal">
                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 14 14">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                    </svg>
                                    <span class="sr-only">Close modal</span>
                                </button>
                            </div>
                            <!-- Modal body -->
                            <div class="p-4 md:p-5 space-y-4">
                                <form id="carouselForm" method="POST" action="{{ route('admin.carousel.store') }}"
                                    enctype="multipart/form-data" class="space-y-4">
                                    @csrf

                                    <div>
                                        <label for="image"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">File
                                            Gambar</label>
                                        <input type="file" id="image" name="image" accept="image/*"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white @error('image') border-red-500 @enderror"
                                            required>

                                        <p id="imageError" class="text-red-500 text-sm mt-1"></p>
                                    </div>

                                    <div
                                        class="flex justify-end space-x-2 pt-4 border-t border-gray-200 dark:border-gray-600">
                                        <button type="submit"
                                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                            Upload
                                        </button>
                                        <button data-modal-hide="default-modal" type="button"
                                            class="py-2.5 px-5 text-sm font-medium text-gray-900 bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                                            Batal
                                        </button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
            <div class="relative overflow-x-auto mt-6 sm:rounded-lg">
                @if (session('success'))
                    <div class="my-4 p-4 text-green-800 bg-green-100 rounded-lg">
                        {{ session('success') }}
                    </div>
                @endif
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">No.</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($carousels as $index => $carousel)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <td class="px-6 py-4">{{ $index + 1 }}</td>
                                <td class="px-6 py-4">
                                    <img src="{{ asset('storage/' . $carousel->image) }}" class="h-60" />
                                </td>
                            </tr>
                        @empty
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <td colspan="2" class="px-6 py-4 text-center text-gray-500">
                                    Belum ada data carousel.
                                </td>
                            </tr>
                        @endforelse

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- SweetAlert CDN -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        $(document).ready(function() {
            $('#carouselForm').on('submit', function(e) {
                e.preventDefault();

                let formData = new FormData(this);
                let form = $(this);
                let submitBtn = form.find('button[type="submit"]');
                let imageError = $('#imageError'); // ID untuk menampilkan pesan error file gambar
                imageError.text(''); // Reset pesan error sebelum submit

                submitBtn.prop('disabled', true).text('Uploading...');

                $.ajax({
                    url: form.attr('action'),
                    type: 'POST',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        // Tutup modal
                        $('#default-modal').addClass('hidden');
                        $('#modal-backdrop').remove();

                        // Reset form
                        form[0].reset();
                        submitBtn.prop('disabled', false).text('Upload');

                        // Gunakan SweetAlert untuk menampilkan pesan sukses
                        Swal.fire({
                            title: 'Sukses!',
                            text: 'Gambar berhasil diunggah.',
                            icon: 'success',
                            confirmButtonText: 'Tutup'
                        });

                        // Reload sebagian: bisa fetch ulang tabel pakai AJAX atau sementara pakai:
                        location.reload(); // atau ubah untuk append data ke tabel langsung
                    },
                    error: function(xhr) {
                        submitBtn.prop('disabled', false).text('Upload');
                        let errors = xhr.responseJSON.errors;

                        // Tampilkan error di bawah form file gambar
                        if (errors && errors.image) {
                            imageError.text(errors.image[0]).addClass('text-red-500 text-sm');
                        } else {
                            alert('Terjadi kesalahan. Coba lagi.');
                        }
                    }
                });
            });

            // Tampilkan modal jika ada error validasi dari Laravel (jika reload masih terjadi)
            @if ($errors->any())
                const modal = document.getElementById('default-modal');
                const backdrop = document.createElement('div');
                backdrop.classList.add('fixed', 'inset-0', 'z-40', 'bg-black', 'bg-opacity-50');
                backdrop.id = 'modal-backdrop';

                modal.classList.remove('hidden');
                modal.classList.add('flex');
                document.body.appendChild(backdrop);

                $('[data-modal-hide="default-modal"]').on('click', function() {
                    modal.classList.add('hidden');
                    modal.classList.remove('flex');
                    $('#modal-backdrop').remove();
                });
            @endif
        });
    </script>
</x-app-layout>
