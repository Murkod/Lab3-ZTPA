<!-- resources/views/contact.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Wyślij maila</title>
</head>
<body>
    <h2>Wyślij maila</h2>

    @if (session('success'))
        <div style="color: green;">
            {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
        <div style="color: red;">
            {{ session('error') }}
        </div>
    @endif

    <form action="{{ route('contact.sendEmail') }}" method="post">
        @csrf

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="subject">Temat:</label><br>
        <input type="text" id="subject" name="subject" required><br><br>

        <label for="message">Wiadomość:</label><br>
        <textarea id="message" name="message" rows="4" required></textarea><br><br>

        <button type="submit">Send Email</button>
    </form>
</body>
</html>
