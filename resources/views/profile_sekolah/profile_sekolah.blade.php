@include('partials.main')
@include('partials.nav')
<div class="container">
    <br>
    <div class="card">
        <div class="card-header text-center bg-success text-white"><strong>Profile Sekolah</strong></div>
        <div class="card-body">
            <table class="table table-striped">
                <tbody>
                    <tr>
                        <th scope="col">Nama Sekolah</th>
                        <td>:</td>
                        <td>Madrasah Ibtidaiyah Al-Maarif 02 Palang</td>
                    </tr>
                    <tr>
                        <th scope="row">Alamat</th>
                        <td>:</td>
                        <td>Jl. Surabaya-Malang Masjid Ismail Palang</td>
                    </tr>
                    <tr>
                        <th scope="row">Status</th>
                        <td>:</td>
                        <td>Active</td>
                    </tr>
                    <tr>
                        <th scope="row">Akreditasi</th>
                        <td>:</td>
                        <td>A</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@include('partials.footer')