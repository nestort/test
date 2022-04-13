<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Test</title>
</head>

<body>
    @if (Route::has('login'))
        <div>
            @auth
                <a href="{{ url('/dashboard') }}">Dashboard</a>
            @else
                <a href="{{ route('login') }}">Inicio de sesión</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Registro</a>
                @endif
            @endauth
        </div>
    @endif
    <form id="text_form" onsubmit="return false">
        <textarea id="analyze_text" required cols="30" rows="10"></textarea>
        <input type="submit" value="Analizar texto">
    </form>

    <script>
        document.getElementById("text_form").addEventListener("submit", function(e) {

            var analyze_text = document.getElementById("analyze_text").value
            var analyze_array = analyze_text.split(" ");
            var word_number = analyze_array.filter(word => word !== '').length
            var first_word = analyze_array[0]
            var last_word = analyze_array[analyze_array.length - 1]
            var inverse_word = analyze_array.reverse()
            var orden_alphabetically_az = analyze_array.sort()
            var orden_alphabetically_za = analyze_array.reverse()

            alert(inverse_word)
        })





    </script>

</body>

</html>
