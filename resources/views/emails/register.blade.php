<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Pendaftaran Berhasil</title>
</head>
<body>
    <h2>Halo, {{ $data['name'] }}!</h2>
    <p>Pendaftaran akun portal admin Anda telah berhasil dibuat. Berikut informasi penting terkait akun Anda:</p>
    <ul>
        <li><strong>Email:</strong> {{ $data['email'] }}</li>
        <li><strong>Role:</strong> {{ ucfirst($data['role']) }}</li>
        <li><strong>Password:</strong> {{ $data['password'] }}</li>
    </ul>
    <p>Silakan masuk ke portal admin menggunakan kredensial di atas dan segera ubah kata sandi Anda untuk keamanan.</p>
    <p>Terima kasih.</p>
</body>
</html>
