<h3><center>Madrasah Ibtidaiyah 02 Palang</center></h3>
<hr />
<h3><center>Laporan Data Staff</center></h3>
<table border="1" cellspacing="0" cellpadding="12">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">NIP</th>
            <th scope="col">Nama Lengkap</th>
            <th scope="col">Jenis Kelamin</th>
            <th scope="col">Alamat</th>
            <th scope="col">Jabatan</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($staff as $staffs)
            <tr>
                <th scope="row">{{ $staffs->id }}</th>
                <td>{{ $staffs->nip }}</td>
                <td>{{ $staffs->nama_lengkap }}</td>
                <td>{{ $staffs->jk }}</td>
                <td>{{ $staffs->alamat }}</td>
                <td>{{ $staffs->jabatan }}</td>
            </tr>
        @endforeach
    </tbody>
</table>