<!DOCTYPE html>
    <html class="wide wow-animation" lang="en">
    
<head>
    <!-- Site Title-->
    <title>Melhores Times de Todos os Tempos</title>
    <link rel="icon" href="images/favicon.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    
    <div class="container">
        <div style="text-align: center">
            <h1>Melhores Times de Todos os Tempos</h1>
            <div class="table-responsive">
                <table class="table table-hover table-bordered">
                    <thead class="table-dark">
                        <tr>
                            <th>#</th>
                            <th colspan="1">Nome</th>
                            <th>País</th>
                            <th>Ano</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $index => $row)
                        @if ($index != 0 and $index != 1) <!-- Excluir a primeira linha -->
                        <tr>
                            <!-- Exibir apenas as colunas desejadas -->
                            <td>{{ $index - 1 }}</td>
                            <!-- Nome do time -->
                            <td>{{ $row['nome'] }}</td>
                            <!-- Colunas de interesse -->
                            <td>{{ $row['pais']  }}</td> <!-- Gols -->
                            <td>{{ $row['ano']  }}</td> <!-- Gols -->
                        </tr>
                        @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>
