<h3><center>Madrasah Ibtidaiyah 02 Palang</center></h3>
<hr />
<h3><center>Laporan Data Guru</center></h3>
<table border="1" cellspacing="0" cellpadding="12">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">NIP</th>
            <th scope="col">Nama Lengkap</th>
            <th scope="col">Jenis Kelamin</th>
            <th scope="col">Alamat</th>
            <th scope="col">Mapel yang Diampu</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($guru as $gurus)
            <tr>
                <th scope="row">{{ $gurus->id }}</th>
                <td>{{ $gurus->nip }}</td>
                <td>{{ $gurus->nama_lengkap }}</td>
                <td>{{ $gurus->jk }}</td>
                <td>{{ $gurus->alamat }}</td>
                <td>{{ $gurus->mapel_ampu }}</td>
            </tr>
        @endforeach
    </tbody>
</table>