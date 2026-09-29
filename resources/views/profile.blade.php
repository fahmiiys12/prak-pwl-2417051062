<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Mahasiswa</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        body {
            font-family: 'Poppins', sans-serif;
            background: #0f172a;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
            position: relative;
            overflow: hidden;
        }

        .blob-1, .blob-2 {
            position: absolute;
            border-radius: 50%;
            filter: blur(80px);
            z-index: 1;
            opacity: 0.5;
        }
        .blob-1 {
            width: 350px;
            height: 350px;
            background: #ec4899;
            top: -60px;
            left: -60px;
        }
        .blob-2 {
            width: 350px;
            height: 350px;
            background: #8b5cf6;
            bottom: -80px;
            right: -80px;
        }
        .card {
            position: relative;
            z-index: 10;
            width: 100%;
            max-width: 360px;
            border-radius: 24px;
            overflow: hidden;
            box-shadow: 0 20px 50px rgba(236, 72, 153, 0.25),
                        0 0 0 1px rgba(236, 72, 153, 0.3);
            text-align: center;
            background: url("{{ asset('backround.jpg') }}") center/100% 100% no-repeat;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: translateY(-6px);
            box-shadow: 0 25px 60px rgba(236, 72, 153, 0.4);
        }
        .card-overlay {
            background: rgba(15, 23, 42, 0.72);
            backdrop-filter: blur(3px);
            padding: 35px 20px 30px 20px;
        }

        /* Foto Profil Utama */
        .avatar-wrapper {
            position: relative;
            width: 110px;
            height: 110px;
            margin: 0 auto 18px auto;
        }
        .avatar-bg {
            width: 100%;
            height: 100%;
            border-radius: 50%;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 0 20px rgba(236, 72, 153, 0.6);
            border: 3px solid #ec4899;
            background-color: #1e293b;
        }
        .avatar-bg img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
        }
        .badge {
            position: absolute;
            bottom: 2px;
            right: 2px;
            background: #10b981;
            color: white;
            font-size: 10px;
            font-weight: 700;
            padding: 4px 10px;
            border-radius: 20px;
            border: 2px solid #0f172a;
            box-shadow: 0 2px 8px rgba(16, 185, 129, 0.5);
            letter-spacing: 0.5px;
            text-transform: uppercase;
        }

        /* Title Nama Mahasiswa */
        .user-title {
            margin-bottom: 22px;
        }
        .user-title h2 {
            font-size: 22px;
            font-weight: 700;
            color: #ffffff;
            line-height: 1.3;
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.5);
        }
        .user-title p {
            font-size: 12px;
            color: #ec4899;
            font-weight: 600;
            letter-spacing: 1px;
            text-transform: uppercase;
            margin-top: 2px;
        }

        /* Item Informasi */
        .info-item {
            background: rgba(30, 41, 59, 0.82);
            border-radius: 16px;
            padding: 12px 16px;
            margin-bottom: 12px;
            text-align: left;
            display: flex;
            align-items: center;
            gap: 14px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            border: 1px solid rgba(255, 255, 255, 0.08);
            border-left: 4px solid #3b82f6;
            transition: transform 0.2s ease, background 0.2s ease;
        }

        .info-item:nth-child(2) {
            border-left-color: #ec4899;
        }
        .info-item:nth-child(3) {
            border-left-color: #ec4899;
        }

        .info-item:hover {
            transform: translateX(4px);
            background: rgba(30, 41, 59, 0.95);
        }

        .info-icon {
            width: 38px;
            height: 38px;
            border-radius: 12px;
            background: rgba(255, 255, 255, 0.06);
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }
        .info-icon svg {
            width: 20px;
            height: 20px;
            fill: #3b82f6;
        }
        .info-item:nth-child(2) .info-icon svg {
            fill: #ec4899;
        }
        .info-item:nth-child(3) .info-icon svg {
            fill: #ec4899;
        }

        .info-content {
            flex-grow: 1;
        }

        .info-label {
            font-size: 10px;
            text-transform: uppercase;
            letter-spacing: 0.8px;
            color: #94a3b8;
            font-weight: 700;
            margin-bottom: 2px;
        }
        .info-value {
            font-size: 14px;
            color: #f8fafc;
            font-weight: 600;
            word-break: break-word;
        }
    </style>
</head>
<body>

    <!-- Ambient Glowing Effect -->
    <div class="blob-1"></div>
    <div class="blob-2"></div>

    <div class="card">
        <div class="card-overlay">
            
            <div class="avatar-wrapper">
                <div class="avatar-bg">
                    <img src="{{ asset('foto.jpeg') }}" alt="Foto Profil">
                </div>
                <div class="badge">Aktif</div>
            </div>

            <!-- Nama & Subtitle -->
            <div class="user-title">
                <h2>{{ $nama != '' ? $nama : 'Fahmi Isma Yuda' }}</h2>
                <p> FMIPA UNILA </p>
                <p>ILMU KOMPUTER 24</p>
            </div>

            <!-- List Detail Data -->
            <div class="info-item">
                <div class="info-icon">
                    <svg viewBox="0 0 24 24">
                        <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                    </svg>
                </div>
                <div class="info-content">
                    <div class="info-label">Nama Lengkap</div>
                    <div class="info-value">{{ $nama != '' ? $nama : '-' }}</div>
                </div>
            </div>

            <div class="info-item">
                <div class="info-icon">
                    <svg viewBox="0 0 24 24">
                        <path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-7 3c1.66 0 3 1.34 3 3s-1.34 3-3 3-3-1.34-3-3 1.34-3 3-3zm6 12H6v-1c0-2 4-3.1 6-3.1s6 1.1 6 3.1v1z"/>
                    </svg>
                </div>
                <div class="info-content">
                    <div class="info-label">NPM</div>
                    <div class="info-value">{{ $npm != '' ? $npm : '-' }}</div>
                </div>
            </div>

            <div class="info-item">
                <div class="info-icon">
                    <svg viewBox="0 0 24 24">
                        <path d="M5 13.18v4L12 21l7-3.82v-4L12 17l-7-3.82zM12 3L1 9l11 6 9-4.91V17h2V9L12 3z"/>
                    </svg>
                </div>
                <div class="info-content">
                    <div class="info-label">Kelas</div>
                    <div class="info-value">Kelas {{ $kelas != '' ? $kelas : '-' }}</div>
                </div>
            </div>

        </div>
    </div>

</body>
</html>