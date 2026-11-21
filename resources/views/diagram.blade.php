<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diagram - Net Pizzéria</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
            background: #1e1f26;
            color: #ffffff;
        }
        .chart-box {
            max-width: 800px;
            margin: 30px auto;
            background: #2b2d38;
            padding: 24px;
            border-radius: 10px;
        }
        a {
            color: #90cdf4;
        }
    </style>
</head>
<body>
    <p><a href="{{ url('/') }}">← Vissza a főoldalra</a></p>
    <h1>Adatbázis diagram</h1>

    <div class="chart-box">
        <canvas id="adatbazisChart"></canvas>
    </div>

    <script>
        const ctx = document.getElementById('adatbazisChart').getContext('2d');

        new Chart(ctx, {
            type: 'bar', // lehet 'pie', 'doughnut' vagy 'line' is
            data: {
                labels: @json($labels),
                datasets: [{
                    label: 'Pizzák darabszáma',
                    data: @json($values),
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: {
                            stepSize: 1
                        }
                    }
                }
            }
        });
    </script>
</body>
</html>