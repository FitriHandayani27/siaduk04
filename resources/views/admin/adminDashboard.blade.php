
<x-dashboardLayout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <div id="main-content" class="p-4 transition-all duration-300">
       <table class="table-hover table">
        <thead>
            <tr>
                <th>No</th>
                <th>NIS</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>No Hp</th>
                <th>Jenis Kelamin</th>
                <th>Hobi</th>
            </tr>
        </thead>
        </tbody>
        @foreach($siswa as $no=>$data)
        <tr>
            <th>{{ $no+1 }}</th>
            <th>{{ $data->nis }}</th>
            <th>{{ $data->nama }}</th>
            <th>{{ $data->alamat }}</th>
            <th>{{ $data->no_hp }}</th>
            <th>{{ $data->jenis_kelamin }}</th>
            <th>{{ $data->hobi }}</th>
        </tr>
        @endforeach
        </tbody>
       </table>

    </div>
</x-dashboardLayout>

