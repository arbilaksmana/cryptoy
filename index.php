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
        <div class="container-fluid container">
            <a class="navbar-brand fw-bold" href="index.php">Criptoy</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <!-- <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                    </li> -->
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
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
        function previouspage(){
            const param = new URLSearchParams(
                window.location.search

            );
            const page = param.get("page")
            const prevpage = (parseInt(page  ?? 1)) - 1
            const newparam = new URLSearchParams({
                "page":prevpage
            })

            window.location.href = "index.php?"+newparam.toString()
        }

        function nextpage(){
            const param = new URLSearchParams(
                window.location.search

            );
            const page = param.get("page")
            const nextpage = (parseInt(page  ?? 1)) +1
            const newparam = new URLSearchParams({
                "page":nextpage
            })

            window.location.href = "index.php?"+newparam.toString()
        }


        const header = {
            "X-CMC_PRO_API_KEY": "a0540c63-5884-417a-8c31-4a8fcea92213",
            Accept: "application/json"
        }
        const parameter = new URLSearchParams({
            "convert": "IDR",
        });

        fetch("https://pro-api.coinmarketcap.com/v1/cryptocurrency/listings/latest?" + parameter.toString(), {
            method: 'GET',
            headers: header
        }).then(response =>
            response.json()
        ).then(response => {
            console.log(response)
            for (let index = 0; index < response.data.length; index++) {
                // Create the table row element
                const tr = document.createElement('tr');
                tr.onclick = function() {
                    changePage(response.data[index].id, response.data[index].symbol)
                };

                // Create the 'th' element and set its attributes and content
                const th = document.createElement('th');
                th.setAttribute('scope', 'row');
                th.textContent = response.data[index].name;

                // Create the 'td' elements and set their content
                const td1 = document.createElement('td');
                td1.textContent = response.data[index].quote.IDR.price.toLocaleString('id-ID');

                const td2 = document.createElement('td');
                td2.textContent = response.data[index].symbol;

                const td3 = document.createElement('td');
                td3.textContent = response.data[index].quote.IDR.market_cap;

                // Append 'th' and 'td' elements to the 'tr' element
                tr.appendChild(th);
                tr.appendChild(td1);
                tr.appendChild(td2);
                tr.appendChild(td3);

                document.getElementById("value").appendChild(tr);


            }
        })

        function changePage(id, symbol) {
            const param = new URLSearchParams({
                "id": id,
                "symbol": symbol
            });
            window.location.href = "detailKoin.php?" + param.toString();
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
</body>

</html>