<!DOCTYPE html>
<html>
<head>
    <title>Activate Account</title>
</head>
<body>
    <h1>Activate Your Account</h1>

    @if (session('error'))
        <p style="color: red;">{{ session('error') }}</p>
    @endif

    <form method="POST" action="{{ route('set-password', $token) }}">
        @csrf
        <div>
            <label for="password">Password</label>
            <input id="password" type="password" name="password" required>
        </div>
        <div>
            <label for="password_confirmation">Confirm Password</label>
            <input id="password_confirmation" type="password" name="password_confirmation" required>
        </div>
        <div>
            <button type="submit">Set Password</button>
        </div>
    </form>
</body>
</html>