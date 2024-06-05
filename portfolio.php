<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio Kripto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        body {
            background-color: black;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark" data-bs-theme="dark">
        <!-- Membuat elemen navbar dengan kelas CSS dari Bootstrap yang membuat navbar responsif dan berwarna gelap -->
        <div class="container-fluid container">
            <!-- Membungkus konten navbar dengan kontainer yang melebar secara penuh dan menggunakan kelas container dari Bootstrap -->
            <a class="navbar-brand fw-bold" href="index.php">Criptoy</a>
            <!-- Membuat tautan brand/logo di navbar yang mengarah ke halaman index.php, dengan teks tebal -->
            <div class="d-flex" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active p-0" aria-current="page" href="portfolio.php"><button type="button" class="btn p-0">Portfolio</button></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <main>
            <section id="portfolio">
                <a href="tambahkoin.php"><button type="button" class="btn btn-primary"><i class="bi bi-plus-lg"></i> Tambah</button></a>
                <table class="table table-striped table-dark mt-2">
                    <thead>
                        <tr>
                            <th scope="col">Nama Koin</th>
                            <th scope="col">Jumlah Dimiliki</th>
                            <th scope="col">Harga Saat Ini (USD)</th>
                            <th scope="col">Nilai Total (USD)</th>
                        </tr>
                    </thead>
                    <tbody id="portfolio-body">
                    </tbody>
                </table>
            </section>
        </main>
    </div>





    <script>
        document.addEventListener('DOMContentLoaded', async () => {
            const apiKey = "a0540c63-5884-417a-8c31-4a8fcea92213"; // Ganti dengan API key Anda
            const portfolio = [{
                    name: 'Bitcoin',
                    amount: 0.5,
                    symbol: 'BTC'
                },
                {
                    name: 'Ethereum',
                    amount: 10,
                    symbol: 'ETH'
                },
                {
                    name: 'Ripple',
                    amount: 1000,
                    symbol: 'XRP'
                },
                {
                    name: 'Litecoin',
                    amount: 25,
                    symbol: 'LTC'
                }
            ];

            const portfolioBody = document.getElementById('portfolio-body');

            const fetchCoinPrice = async (symbol) => {
                const response = await fetch(`https://pro-api.coinmarketcap.com/v1/cryptocurrency/quotes/latest?symbol=${symbol}`, {
                    method: 'GET',
                    headers: {
                        'X-CMC_PRO_API_KEY': "a0540c63-5884-417a-8c31-4a8fcea92213"
                    }
                });
                const data = await response.json();
                return data.data[symbol].quote.USD.price;
            };

            for (const coin of portfolio) {
                const price = await fetchCoinPrice(coin.symbol);
                const totalValue = coin.amount * price;
                const row = document.createElement('tr');
                row.innerHTML = `
            <td>${coin.name}</td>
            <td>${coin.amount}</td>
            <td>${price.toFixed(2)}</td>
            <td>${totalValue.toFixed(2)}</td>
        `;
                portfolioBody.appendChild(row);
            }
        });
    </script>
</body>

</html>