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
                        <a class="nav-link active p-0" aria-current="page" href="tambahkoin.php"><button type="button" class="btn p-0">Portfolio</button></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="container mt-4">
        <section id="portfolio">
            <div class="input-group mb-3 ">
                <select id="coin-select" class="form-control">
                    <option value="">Pilih koin...</option>
                    <!-- Options akan ditambahkan oleh JavaScript -->
                </select>
                <input type="number" id="coin-amount" class="form-control" placeholder="Masukkan jumlah dimiliki">
                <div class="input-group-append">
                    <button class="btn btn-success" type="button" id="add-coin">Tambah Koin</button>
                </div>
            </div>
            <table class="table table-bordered table-striped table-dark">
                <thead class="thead-dark">
                    <tr>
                        <th>Nama Koin</th>
                        <th>Jumlah Dimiliki</th>
                        <th>Harga Saat Ini (USD)</th>
                        <th>Aksi</th>
                        <th>Nilai Total (USD)</th>
                    </tr>
                </thead>
                <tbody id="portfolio-body">
                    <!-- Data koin akan dimasukkan di sini oleh JavaScript -->
                </tbody>
                <tfoot>
                    <tr>
                        <th colspan="4" class="text-right">Subtotal:</th>
                        <th id="subtotal-value">0.00</th>
                    </tr>
                </tfoot>
            </table>
        </section>
    </main>



    <script>
        document.addEventListener('DOMContentLoaded', async () => {
            const apiKey = "a0540c63-5884-417a-8c31-4a8fcea92213"; // Ganti dengan API key Anda
            const portfolio = [];
            const portfolioBody = document.getElementById('portfolio-body');
            const coinSelect = document.getElementById('coin-select');
            const subtotalValueElement = document.getElementById('subtotal-value');
            let subtotal = 0;

            const fetchCoinList = async () => {
                const response = await fetch('https://pro-api.coinmarketcap.com/v1/cryptocurrency/map', {
                    method: 'GET',
                    headers: {
                        'X-CMC_PRO_API_KEY': "a0540c63-5884-417a-8c31-4a8fcea92213"
                    }
                });
                const data = await response.json();
                return data.data;
            };

            const populateCoinSelect = async () => {
                const coinList = await fetchCoinList();
                coinList.forEach(coin => {
                    const option = document.createElement('option');
                    option.value = coin.symbol;
                    option.textContent = `${coin.name} (${coin.symbol})`;
                    coinSelect.appendChild(option);
                });
            };

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

            const updateSubtotal = (value) => {
                subtotal += value;
                subtotalValueElement.textContent = subtotal.toFixed(2);
            };

            const addCoinToPortfolio = async (symbol, amount) => {
                try {
                    const price = await fetchCoinPrice(symbol);
                    const totalValue = amount * price;
                    const row = document.createElement('tr');
                    row.innerHTML = `
                <td>${symbol.toUpperCase()}</td>
                <td>${amount}</td>
                <td>${price.toFixed(2)}</td>
                <td><button class="btn btn-danger btn-sm delete-coin">Hapus</button></td>
                <td>${totalValue.toFixed(2)}</td>
            `;
                    portfolioBody.appendChild(row);
                    updateSubtotal(totalValue);

                    // Tambahkan event listener untuk tombol hapus
                    row.querySelector('.delete-coin').addEventListener('click', () => {
                        row.remove();
                        updateSubtotal(-totalValue);
                    });
                } catch (error) {
                    alert('Koin tidak ditemukan atau API error');
                }
            };

            document.getElementById('add-coin').addEventListener('click', () => {
                const symbol = coinSelect.value.toUpperCase();
                const amount = parseFloat(document.getElementById('coin-amount').value);
                if (symbol && !isNaN(amount)) {
                    addCoinToPortfolio(symbol, amount);
                } else {
                    alert('Pilih koin dan masukkan jumlah yang valid');
                }
            });

            await populateCoinSelect();
        });
    </script>
</body>

</html>