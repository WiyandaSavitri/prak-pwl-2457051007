<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Profile</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #7c89c9;
            margin: 0;
        }

        .profile-card {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 12px;
        }

        .avatar {
            width: 130px;
            height: 130px;
            border-radius: 50%;
            border: 3px solid #e0e0e0;
            background-color: #e0e0e0;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
        }
        .avatar img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .avatar svg {
            width: 70%;
            height: 70%;
            fill: #b0b0b0;
        }

        .info-box {
            width: 220px;
            background-color: #4d84a2;
            color:#ffffff;
            padding: 12px 20px;
            text-align: center;
            border-radius: 4px;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <div class="profile-card">
        <div class="avatar">
            <img src="{{ asset('images/foto.jpg') }}" alt="Foto Profil">
        </div>

        <div class="info-box">{{ $nama }}</div>
        <div class="info-box">{{ $kelas }}</div>
        <div class="info-box">{{ $npm }}</div>
    </div>

</body>
</html>