<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Test</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <div class="collapse" id="navbarToggleExternalContent">
        <div class="p-4 bg-dark">
            <h5 class="text-white h4">Test</h5>
            <div class="d-flex justify-content-center">


                @if (Route::has('login'))
                    <div>
                        @auth
                            <button class="btn btn-primary"
                                onclick="location.href = '{{ url('/dashboard') }}';">Dashboard</button>
                        @else
                            <button class="btn btn-primary" onclick="location.href = '{{ route('login') }}';">Inicio
                                sesión</button>
                            @if (Route::has('register'))
                                <button class="btn btn-primary"
                                    onclick="location.href = '{{ route('register') }}';">Registro</button>
                            @endif
                        @endauth
                    </div>
                @endif
            </div>

        </div>
    </div>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>

    <div class="container">
        <form id="text_form" onsubmit="return false">
            <div class="mb-3">
                <label for="analyze_text" class="form-label">Escribe el texto a analizar</label>
                <textarea class="form-control" required id="analyze_text" rows="3"></textarea>
            </div>
            <input type="submit" class="btn btn-primary" value="Analizar texto">


        </form>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalLabel">Resultado de analisis de texto</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form">
                        <div class="form-group">
                            <label for="word_number">Número de palabras:</label>
                            <input type="text" readonly id="word_number" value="" />
                        </div>
                        <div class="form-group">
                            <label for="first_word">Primera palabra:</label>
                            <input type="text" readonly id="first_word" value="" />
                        </div>
                        <div class="form-group">
                            <label for="first_word">Ultima palabra:</label>
                            <input type="text" readonly id="last_word" value="" />
                        </div>
                        <div class="form-group">
                            <label for="inverse_word">Orden inverso:</label>
                            <input type="text" readonly id="inverse_word" value="" />
                        </div>
                        <div class="form-group">
                            <label for="orden_alphabetically_az">De la A a la Z:</label>
                            <input type="text" readonly id="orden_alphabetically_az" value="" />
                        </div>
                        <div class="form-group">
                            <label for="orden_alphabetically_za">De la Z a la A:</label>
                            <input type="text" readonly id="orden_alphabetically_za" value="" />
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>

                </div>
            </div>
        </div>
    </div>



    <script>
        document.getElementById("text_form").addEventListener("submit", function(e) {
            var myModal = new bootstrap.Modal(document.getElementById('modal'), {})

            const analyze_text = document.getElementById("analyze_text").value
            const analyze_array = analyze_text.split(" ");
            const word_number = analyze_array.filter(word => word !== '').length
            const first_word = analyze_array[0]
            const last_word = analyze_array[analyze_array.length - 1]
            const inverse_word = analyze_array.slice().reverse()
            const orden_alphabetically_az = analyze_array.slice().sort()
            const orden_alphabetically_za = orden_alphabetically_az.slice().reverse()


            document.getElementById("word_number").value = word_number;
            document.getElementById("first_word").value = first_word;
            document.getElementById("last_word").value = last_word;
            document.getElementById("inverse_word").value = inverse_word;
            document.getElementById("orden_alphabetically_az").value = orden_alphabetically_az;
            document.getElementById("orden_alphabetically_za").value = orden_alphabetically_za;

            myModal.show()

        })
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
