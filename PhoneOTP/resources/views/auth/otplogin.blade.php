<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('otpinput') }}" method="POST">
        @csrf
        <label for="">Mobile No</label>
        <input type="text" name="mobile_no">
        <button type="submit">Send OTP</button>
    </form>
</body>
</html>