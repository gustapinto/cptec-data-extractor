<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="API de dados climáticos históricos da cidade de Leme-SP">
  <meta name="author" content="Gustavo Henrique Pinto">

  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" rel="stylesheet">

  <title>
    Extrator climático
  </title>
</head>
<body>
  <main class="text-gray-900">
    <section>
      <div class="w-full text-center mt-6 md:mt-10">
        <h1 class="text-5xl md:text-6xl font-extrabold">
          CPTEC Data Extractor
        </h1>
        <h2 class="text-md mt-0">
          Uma maneira descomplicada de obter dados climáticos históricos da cidade de Leme-SP
        </h2>
      </div>
    </section>

    <section>
      <div class="grid w-full mt-10 md:mt-28">
        <div class="place-self-center text-center w-full md:w-1/2">
          <h3 class="text-3xl font-semibold">
            Exportando dados
          </h3>
          <div>
            O processo de exportação retornará um array de objetos JSON contendo os dados climáticas ordenados por ano
          </div>

          <div class="grid w-full mt-6">
            <h4 class="text-xl">
              Histórico de temperaturas mínimas
            </h4>
            <a href="{!! $host !!}/api/export/kind=tempmin" class="place-self-center py-2 px-4 bg-gray-200 text-gray-700 w-full sm:w-max rounded-2xl hover:bg-gray-100">
              {!! $host !!}/api/export/kind=tempmin
            </a>
          </div>

          <div class="grid w-full mt-4">
            <h4 class="text-xl">
              Histórico de temperaturas máximas
            </h4>
            <a href="{!! $host !!}/api/export/kind=tempmax" class="place-self-center py-2 px-4 bg-gray-200 text-gray-700 w-full sm:w-max rounded-2xl hover:bg-gray-100">
              {!! $host !!}/api/export/kind=tempmax
            </a>
          </div>
        </div>
      </div>
    </section>

    <footer>
      <div class="w-screen text-center mb-2 sm:absolute sm:bottom-2">
        <a class="fab fa-github text-4xl mx-8" href="https://github.com/gustapinto/cptec-data-extractor"></a>
        <a class="fas fa-globe-americas text-4xl mx-8" href="https://me.gustapinto.dev"></a>
      </div>
    </footer>
  </main>
</body>
</html>