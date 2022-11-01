<h3><center>Madrasah Ibtidaiyah 02 Palang</center></h3>
<hr />
<h3><center>Laporan Data Siswa</center></h3>
<table border="1" cellspacing="0" cellpadding="12">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">NISN</th>
            <th scope="col">Nama Lengkap</th>
            <th scope="col">Jenis Kelamin</th>
            <th scope="col">Alamat</th>
            <th scope="col">Kelas</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($siswa as $siswas)
            <tr>
                <th scope="row">{{ $siswas->id }}</th>
                <td>{{ $siswas->nisn }}</td>
                <td>{{ $siswas->nama_lengkap }}</td>
                <td>{{ $siswas->jk }}</td>
                <td>{{ $siswas->alamat }}</td>
                <td>{{ $siswas->kelas }}</td>
            </tr>
        @endforeach
    </tbody>
</table>