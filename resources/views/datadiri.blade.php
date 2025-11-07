<body>
    @include('layouts.header')

    <main style="max-width: 900px; margin: 50px auto; padding: 30px; 
                 background: white; border-radius: 12px; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
        <h2 style="text-align: center; font-size: 28px; margin-bottom: 30px; color: #333;">
            Data Diri
        </h2>
        <div style="display: flex; gap: 30px; align-items: flex-start; flex-wrap: wrap;">
            <div style="flex: 1; text-align: center;">
                <img src="{{ asset('image/Ida-Mas.jpg') }}" 
                     alt="Foto Ida Masruroh" 
                     style="width: 250px; height: 300px; object-fit: cover; 
                            border-radius: 12px; box-shadow: 0 4px 8px rgba(0,0,0,0.2);">
            </div>
            <div style="flex: 2;">
                <section style="margin-bottom: 30px;">
                    <h3 style="font-size: 22px; margin-bottom: 15px; color: #0056b3;">Identitas</h3>
                    <p><strong>Nama:</strong> Ida Masruroh</p>
                    <p><strong>Alamat:</strong> Siterus RT.004/RW.005 Sikunang </p>
                </section>
                <section>
                    <h3 style="font-size: 22px; margin-bottom: 15px; color: #0056b3;">Riwayat Sekolah</h3>
                    <div style="border-left: 3px solid #0056b3; padding-left: 15px;">
                        <p><strong>SMK Informatika Wonosobo</strong> <br> 2019 - 2022</p>
                        <p><strong>Universitas Sains Al-Qur’an (UNSIQ) Jawa Tengah</strong> <br> 2023 - Sekarang</p>
                    </div>
                </section>
            </div>
        </div>
    </main>

    @include('layouts.footer')
</body>
