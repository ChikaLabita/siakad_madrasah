<h3><center>Madrasah Ibtidaiyah 02 Palang</center></h3>
<hr />
<h3><center>Laporan Data Alumni</center></h3>
<table border="1" cellspacing="0" cellpadding="12">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">NISN</th>
            <th scope="col">Nama Lengkap</th>
            <th scope="col">Jenis Kelamin</th>
            <th scope="col">Alamat</th>
            <th scope="col">No. Hp</th>
            <th scope="col">Angkatan</th>
            <th scope="col">Tahun Lulus</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($alumni as $alumnis)
            <tr>
                <th scope="row">{{ $alumnis->id }}</th>
                <td>{{ $alumnis->nisn }}</td>
                <td>{{ $alumnis->nama_lengkap }}</td>
                <td>{{ $alumnis->jk }}</td>
                <td>{{ $alumnis->alamat }}</td>
                <td>{{ $alumnis->no_hp }}</td>
                <td>{{ $alumnis->angkatan }}</td>
                <td>{{ $alumnis->thn_lulus }}</td>
            </tr>
        @endforeach
    </tbody>
</table>