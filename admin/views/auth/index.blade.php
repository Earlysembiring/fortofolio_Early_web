<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
            background-color: #f5f5f5;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .login-container {
            background: white;
            padding: 50px 60px;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            text-align: center;
            max-width: 550px;
            width: 90%;
        }
        .alert {
            background-color: #f8d7da;
            border: 1px solid #f5c6cb;
            color: #721c24;
            padding: 12px 20px;
            border-radius: 6px;
            margin-bottom: 24px;
        }
        h1 {
            font-size: 32px;
            font-weight: 400;
            margin-bottom: 16px;
            color: #202124;
        }
        p {
            color: #5f6368;
            font-size: 16px;
            margin-bottom: 32px;
        }
        .google-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 10px 20px;
            border: 1.5px solid #1a73e8;
            border-radius: 4px;
            background: white;
            text-decoration: none;
            color: #202124;
            font-size: 14px;
            font-weight: 500;
            transition: all 0.2s;
            cursor: pointer;
        }
        .google-btn:hover {
            background-color: #f8f9fa;
        }
        .google-btn img {
            width: 20px;
            height: 20px;
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <div class="login-container">
        @if (Session::has('error'))
            <div class="alert">
                {{ Session::get('error') }}
            </div>
        @endif
        <h1>Login</h1>
        <p>Silakan login dengan Akun Google yang kamu punya</p>
        <a href="{{ url('auth/redirect') }}" class="google-btn">
            <svg width="20" height="20" viewBox="0 0 48 48" style="margin-right: 10px;">
                <path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/>
                <path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/>
                <path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/>
                <path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/>
            </svg>
            Login dengan Google
        </a>
    </div>
</body>
</html>
