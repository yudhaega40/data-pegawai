

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

        {{-- Datatables --}} 
        <link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.css" />
        <script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>
    </head>
    <body class="font-sans antialiased bg-green-400">
        <div class="py-12 max-w-full">
            <div class="max-w-7xl mx-auto space-y-4 p-4 sm:p-6 lg:p-8 bg-white sm:rounded-xl">
                <div class="flex justify-between mb-4">
                    <a href="{{ route('add') }}" class="border border-black rounded-md py-2 px-4"><i class="fa-solid fa-plus mr-2"></i>Tambah Pegawai<a>
                    <input type="text" id="searchBox" class="border border-gray-400 rounded-md p-2" placeholder="Search...">
                </div>
                <div>
                    @if (session()->has('pegawai_success'))
                        <div class="bg-green-100 mb-4 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert" id="alert" name="alert">
                            <span class="block sm:inline">{{ session('pegawai_success') }}</span>
                        </div>
                    @endif
                    </div>
                <div>
                    <table id="tablePegawai" class="display">
                        <thead>
                            <tr>
                                <th>No Pegawai</th>
                                <th>Nama</th>
                                <th>Jenis Kelamin</th>
                                <th>Tanggal Lahir</th>
                                <th>Agama</th>
                                <th>Status Kawin</th>
                                <th>Alamat</th>
                                <th>No HP</th>
                                <th>Tanggal Mulai Kerja</th>
                                <th>Divisi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pegawai as $p)
                                <tr>
                                    <td>{{ $p->no_pegawai }}</td>
                                    <td>{{ $p->nama }}</td>
                                    <td>{{ $p->jenis_kelamin }}</td>
                                    <td>{{ $p->tanggal_lahir }}</td>
                                    <td>{{ $p->agama }}</td>
                                    <td>{{ $p->status_kawin == 1 ? 'Menikah' : 'Single' }}</td>
                                    <td>{{ $p->alamat }}</td>
                                    <td>{{ $p->no_hp }}</td>
                                    <td>{{ $p->mulai_kerja }}</td>
                                    <td>{{ $p->divisi }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>

<script>
    // new DataTable('#tablePegawai');
    oTable = $('#tablePegawai').DataTable({
        dom: 'l<"overflow-x-auto w-full"t><"flex justify-end mt-4"p>r',
        lengthChange: false
    });   

    $('#searchBox').keyup(function(){
        oTable.search($(this).val()).draw() ;
    })

    $('#alert').delay(5000).fadeOut('slow');
</script>
