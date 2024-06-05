<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cryptocurrency Arbi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
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



    <div class="container p-4">
        <h2 class="mb-4" style="color: white;">Welcome Capt</h2>
        <!-- TradingView Widget BEGIN -->
        <div class="tradingview-widget-container">
            <div class="tradingview-widget-container__widget"></div>
            <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/" rel="noopener nofollow" target="_blank"></a></div>
            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-advanced-chart.js" async>
                {
                    "width": "100%",
                    "height": "610",
                    "symbol": "BITSTAMP:BTCUSD",
                    "interval": "D",
                    "timezone": "Etc/UTC",
                    "theme": "dark",
                    "style": "1",
                    "locale": "en",
                    "allow_symbol_change": true,
                    "calendar": false,
                    "support_host": "https://www.tradingview.com"
                }
            </script>
        </div>
        <!-- TradingView Widget END -->

        <!-- TradingView Widget BEGIN -->
        <div class="tradingview-widget-container">
            <div class="tradingview-widget-container__widget"></div>
            <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/" rel="noopener nofollow" target="_blank"></a></div>
            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-symbol-profile.js" async>
                {
                    "width": "100%",
                    "height": "350",
                    "isTransparent": true,
                    "colorTheme": "dark",
                    "symbol": "BITSTAMP:BTCUSD",
                    "locale": "en"
                }
            </script>
        </div>
        <!-- TradingView Widget END -->
        <div class="row">
            <div class="col-6">
                <!-- TradingView Widget BEGIN -->
                <div class="tradingview-widget-container">
                    <div class="tradingview-widget-container__widget"></div>
                    <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/" rel="noopener nofollow" target="_blank"></a></div>
                    <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-technical-analysis.js" async>
                        {
                            "interval": "1m",
                            "width": "100%",
                            "isTransparent": true,
                            "height": "500",
                            "symbol": "BITSTAMP:BTCUSD",
                            "showIntervalTabs": true,
                            "displayMode": "single",
                            "locale": "en",
                            "colorTheme": "dark"
                        }
                    </script>
                </div>
                <!-- TradingView Widget END -->
            </div>
            <div class="col-6">
                <!-- TradingView Widget BEGIN -->
                <div class="tradingview-widget-container">
                    <div class="tradingview-widget-container__widget"></div>
                    <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/" rel="noopener nofollow" target="_blank"></a></div>
                    <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-timeline.js" async>
                        {
                            "feedMode": "all_symbols",
                            "isTransparent": true,
                            "displayMode": "regular",
                            "width": "100%",
                            "height": "100%",
                            "colorTheme": "dark",
                            "locale": "en"
                        }
                    </script>
                </div>
                <!-- TradingView Widget END -->
            </div>

        </div>
        <table class="table table-striped table-dark" style="background-blend-mode: darken;background-color:black;">
            <thead>
                <tr>
                    <th scope="col">Nama Koin</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Symbol</th>
                    <th scope="col">Market Cap</th>
                    <th scope="col">Chart</th>
                </tr>
            </thead>
            <tbody id="value">

            </tbody>
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item"><button class="page-link" onclick="previouspage()">Previous</button></li>
                    <li class="page-item"><button class="page-link" onclick="nextpage()">Next</button></li>
                </ul>
            </nav>
        </table>
    </div>
    <!-- TradingView Widget END -->



    <script>
        function previouspage() {
            const param = new URLSearchParams(
                window.location.search
            );
            // Mendapatkan parameter URL saat ini
            const page = param.get("page")
            // Mendapatkan nilai parameter 'page', jika tidak ada, nilai default adalah 1
            const prevpage = (parseInt(page ?? 1)) - 1
            // Mengurangi nilai halaman dengan 1
            const newparam = new URLSearchParams({
                "page": prevpage
            })
            // Membuat parameter URL baru dengan halaman yang dikurangi
            window.location.href = "index.php?" + newparam.toString()
            // Mengarahkan browser ke halaman sebelumnya dengan parameter URL baru
        }

        function nextpage() {
            const param = new URLSearchParams(
                window.location.search
            );
            // Mendapatkan parameter URL saat ini
            const page = param.get("page")
            // Mendapatkan nilai parameter 'page', jika tidak ada, nilai default adalah 1
            const nextpage = (parseInt(page ?? 1)) + 1
            // Menambah nilai halaman dengan 1
            const newparam = new URLSearchParams({
                "page": nextpage
            })
            // Membuat parameter URL baru dengan halaman yang ditambah
            window.location.href = "index.php?" + newparam.toString()
            // Mengarahkan browser ke halaman berikutnya dengan parameter URL baru
        }

        const header = {
            "X-CMC_PRO_API_KEY": "a0540c63-5884-417a-8c31-4a8fcea92213",
            Accept: "application/json"
        }
        // Mendefinisikan header untuk permintaan API termasuk API key dan tipe konten yang diterima

        const parameter = new URLSearchParams({
            "convert": "IDR",
        });
        // Membuat parameter URL untuk mengkonversi nilai cryptocurrency ke IDR (Rupiah)

        fetch("https://pro-api.coinmarketcap.com/v1/cryptocurrency/listings/latest?" + parameter.toString(), {
                method: 'GET',
                headers: header
            })
            // Melakukan permintaan GET ke API CoinMarketCap dengan header dan parameter yang telah ditentukan
            .then(response =>
                response.json()
            )
            // Mengubah respons menjadi JSON
            .then(response => {
                console.log(response)
                // Menampilkan respons API di konsol
                for (let index = 0; index < response.data.length; index++) {
                    // Looping melalui setiap data cryptocurrency yang diterima dari API
                    const tr = document.createElement('tr');
                    tr.onclick = function() {
                        changePage(response.data[index].id, response.data[index].symbol)
                    };
                    // Membuat elemen <tr> dan menetapkan event klik untuk mengubah halaman

                    const th = document.createElement('th');
                    th.setAttribute('scope', 'row');
                    th.textContent = response.data[index].name;
                    // Membuat elemen <th> untuk nama cryptocurrency dan menetapkan atribut 'scope'

                    const td1 = document.createElement('td');
                    td1.textContent = response.data[index].quote.IDR.price.toLocaleString('id-ID');
                    // Membuat elemen <td> untuk harga cryptocurrency dalam IDR

                    const td2 = document.createElement('td');
                    td2.textContent = response.data[index].symbol;
                    // Membuat elemen <td> untuk simbol cryptocurrency

                    const td3 = document.createElement('td');
                    td3.textContent = response.data[index].quote.IDR.market_cap;
                    // Membuat elemen <td> untuk kapitalisasi pasar cryptocurrency dalam IDR

                    const td4 = document.createElement("td");
                    td4.className = "px-4";
                    // Membuat elemen <td> tambahan untuk widget TradingView

                    const divTradingView = document.createElement("div");
                    divTradingView.className = "tradingview-widget-container";
                    const divWidget = document.createElement("div");
                    divWidget.className = "tradingview-widget-container__widget";
                    divTradingView.appendChild(divWidget);
                    // Membuat elemen div untuk widget TradingView dan menetapkan kelas CSS

                    const script = document.createElement("script");
                    script.type = "text/javascript";
                    script.src = "https://s3.tradingview.com/external-embedding/embed-widget-mini-symbol-overview.js";
                    script.async = true;
                    script.textContent = `{
                "symbol": "CRYPTOCAP:${response.data[index].symbol}",
                "width": "100%",
                "height": "50%",
                "locale": "en",
                "dateRange": "1M",
                "colorTheme": "dark",
                "isTransparent": false,
                "autosize": false,
                "largeChartUrl": "",
                "chartOnly": true,
                "noTimeScale": true
            }`;
                    divTradingView.appendChild(script);
                    td4.appendChild(divTradingView);
                    // Membuat elemen script untuk widget TradingView dan menambahkannya ke elemen div

                    tr.appendChild(th);
                    tr.appendChild(td1);
                    tr.appendChild(td2);
                    tr.appendChild(td3);
                    tr.appendChild(td4);
                    // Menambahkan elemen <th> dan <td> ke dalam elemen <tr>

                    document.getElementById("value").appendChild(tr);
                    // Menambahkan elemen <tr> ke dalam elemen dengan id 'value'
                }
            })

        function changePage(id, symbol) {
            const param = new URLSearchParams({
                "id": id,
                "symbol": symbol
            });
            window.location.href = "detailKoin.php?" + param.toString();
            // Mengubah halaman ke detailKoin.php dengan parameter id dan symbol dari cryptocurrency yang diklik
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
</body>

</html>