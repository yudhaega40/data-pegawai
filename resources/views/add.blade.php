

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        {{-- JQuery --}} 
        <script
            src="https://code.jquery.com/jquery-3.7.1.min.js"
            integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
            crossorigin="anonymous"></script>

        {{-- Tailwind --}} 
        <script src="https://cdn.tailwindcss.com"></script>

        {{-- Font --}} 
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        {{-- Tailwind --}} 
        <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.2/tailwind.min.css" rel="stylesheet">
        <script src="https://cdn.tailwindcss.com"></script>
        
        {{-- FontAwesome Kit --}}
        <script src="https://kit.fontawesome.com/fdf4b30049.js" crossorigin="anonymous"></script>

        {{-- Select2 --}}
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

        {{-- Date Range Picker --}}
        <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    </head>
    <body class="font-sans antialiased bg-gray-300">
        <div class="py-12 max-w-full">
            <div class="max-w-7xl mx-auto space-y-4 p-4 sm:p-6 lg:p-8 bg-white sm:rounded-xl">
                <div class="flex-col space-y-8">
                    <div class="flex justify-start space-x-4 items-center">
                        <a href="{{ route('home') }}"><i class="fa-solid fa-chevron-left"></i></a>
                        <div class="text-2xl">Tambah Pegawai</div>
                    </div>
                    <form method="POST" action="{{ route('store') }}">
                        @csrf
                        <div class="flex-col space-y-4">
                            <div>
                                <label class="block text-gray-700 text-sm font-semibold mb-2" for="no_pegawai">
                                    Nomor Pegawai
                                </label>
                                <input 
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                                    id="no_pegawai"
                                    name="no_pegawai" 
                                    type="text"
                                    required>
                            </div>

                            <div>
                                <label class="block text-gray-700 text-sm font-semibold mb-2" for="nama">
                                    Nama Pegawai
                                </label>
                                <input 
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                                    id="nama" 
                                    name="nama" 
                                    type="text"
                                    required>
                            </div>

                            <div>
                                <label class="block text-gray-700 text-sm font-semibold mb-2" for="mulai_kerja">
                                    Tanggal Mulai Kerja
                                </label>
                                <input 
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                                    id="mulai_kerja" 
                                    name="mulai_kerja" 
                                    type="text"
                                    required>
                            </div>

                            <div>
                                <label class="block text-gray-700 text-sm font-semibold mb-2" for="divisi">
                                    Divisi
                                </label>
                                <select 
                                    class="division-selector w-full" 
                                    name="divisi"
                                    id="divisi">
                                    <option value="HRD">HRD</option>
                                    <option value="IT">IT</option>
                                    <option value="Sales">Sales</option>
                                </select>
                            </div>

                            <div>
                                <label class="block text-gray-700 text-sm font-semibold mb-2" for="jenis_kelamin">
                                    Jenis Kelamin
                                </label>
                                <select 
                                    class="gender-selector w-full" 
                                    name="jenis_kelamin"
                                    id="jenis_kelamin">
                                    <option value="L">Laki-Laki</option>
                                    <option value="P">Perempuan</option>
                                </select>
                            </div>

                            <div>
                                <label class="block text-gray-700 text-sm font-semibold mb-2" for="tanggal_lahir">
                                Tanggal Lahir
                                </label>
                                <input 
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                                    id="tanggal_lahir" 
                                    name="tanggal_lahir"
                                    type="text"
                                    required>
                            </div>

                            <div>
                                <label class="block text-gray-700 text-sm font-semibold mb-2" for="agama">
                                    Agama
                                </label>
                                <select 
                                    class="religion-selector w-full" 
                                    name="agama"
                                    id="agama">
                                    <option value="Islam">Islam</option>
                                    <option value="Katolik">Katolik</option>
                                    <option value="Kristen">Kristen</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Budha">Budha</option>
                                    <option value="Lain lain">Lain lain</option>
                                </select>
                            </div>

                            <div>
                                <label class="block text-gray-700 text-sm font-semibold mb-2" for="status_kawin">
                                    Status Kawin
                                </label>
                                <select 
                                    class="marriage-selector w-full" 
                                    name="status_kawin"
                                    id="status_kawin">
                                    <option value="0">Single</option>
                                    <option value="1">Menikah</option>
                                </select>
                            </div>

                            <div>
                                <label class="block text-gray-700 text-sm font-semibold mb-2" for="alamat">
                                    Alamat
                                </label>
                                <input 
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                                    id="alamat" 
                                    name="alamat"
                                    type="text"
                                    required>
                            </div>

                            <div>
                                <label class="block text-gray-700 text-sm font-semibold mb-2" for="no_hp">
                                    Nomor HP
                                </label>
                                <input 
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                                    id="no_hp" 
                                    name="no_hp"
                                    type="text"
                                    required>
                            </div>
                        
                        </div>
                        <div class="flex justify-end mt-6">
                            <button class="border border-black rounded-md py-2 px-8">Simpan<button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
<script>
    $(document).ready(function() {
        $('.gender-selector').select2({
            minimumResultsForSearch: -1
        });

        $('.religion-selector').select2({
            minimumResultsForSearch: -1
        });

        $('.marriage-selector').select2({
            minimumResultsForSearch: -1
        });

        $('.division-selector').select2({
            minimumResultsForSearch: -1
        });

        $(function() {
            $('input[name="mulai_kerja"]').daterangepicker({
                singleDatePicker: true,
                showDropdowns: true,
                minYear: 1901,
                maxYear: parseInt(moment().format('YYYY'),10),
                locale: {
                    format: 'YYYY-M-DD'
                }
            });
        });

        $(function() {
            $('input[name="tanggal_lahir"]').daterangepicker({
                singleDatePicker: true,
                showDropdowns: true,
                minYear: 1901,
                maxYear: parseInt(moment().format('YYYY'),10),
                locale: {
                    format: 'YYYY-M-DD'
                }
            });
        });
    });
</script>