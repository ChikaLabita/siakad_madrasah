<h3><center>Madrasah Ibtidaiyah 02 Palang</center></h3>
<hr />
<h3><center>Laporan Data kelas</center></h3>
<table border="1" cellspacing="0" cellpadding="12">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Kode Kelas</th>
            <th scope="col">Nama Kelas</th>
            <th scope="col">Wali Kelas</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($kelas as $kls)
            <tr>
                <th scope="row">{{ $kls->id }}</th>
                <td>{{ $kls->kode_kelas }}</td>
                <td>{{ $kls->nama_kelas }}</td>
                <td>{{ $kls->wali_kelas }}</td>
            </tr>
        @endforeach
    </tbody>
</table>