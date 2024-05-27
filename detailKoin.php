<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Koin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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

    <!-- TradingView Widget BEGIN -->
    <!-- <div class="tradingview-widget-container" style="height:100%;width:100%">
        <div class="tradingview-widget-container__widget" style="height:calc(100% - 32px);width:100%"></div>
        <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/" rel="noopener nofollow" target="_blank"><span class="blue-text">Track all markets on TradingView</span></a></div>
        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-advanced-chart.js" async>
            {
                "autosize": true,
                "symbol": "OANDA:XAUUSD",
                "interval": "D",
                "timezone": "Etc/UTC",
                "theme": "dark",
                "style": "1",
                "locale": "en",
                "backgroundColor": "rgba(0, 0, 0, 1)",
                "gridColor": "rgba(0, 0, 0, 0.06)",
                "allow_symbol_change": true,
                "calendar": false,
                "support_host": "https://www.tradingview.com"
            }
        </script>
    </div> -->
    <!-- TradingView Widget END -->

    <div class="container mt-5">
        <div class="row">
            <div class="col-4">
                <div class="d-flex flex-row align-items-center">
                    <img id="logo" class="card-img-top" alt="..." style="width: 10%;">
                    <p id="name" class="m-0" style="color: white;"></p> &ensp;
                    <p id="symbolll" class="m-0" style="color: white; opacity: 50%;"></p>  
                </div>
                <div class="card-body">
                    <p class="card-text"></p>
                    <h1 id="price" style="color: white;"></h1>
                    <div class="d-flex flex-row justify-content-start">
                        <!-- <p style="color: white;" class="p-0 flex-grow-1"> </p> -->
                        <h6 id="volumechange24h" style="color: white;" class="p-0"></h6>
                        <!-- <p style="color: white;">&ensp; 24h</p> -->
                    </div>
                    <div class="d-flex flex-row justify-content-end mt-4">
                        <p style="color: white;" class="p-0 flex-grow-1">Market Cap: </p>
                        <p id="marketcap" style="color: white;" class="p-0"></p>
                    </div>
                    <div class="d-flex flex-row justify-content-end">
                        <p style="color: white;" class="p-0 flex-grow-1">Volume (24h): </p>
                        <p id="volume" style="color: white;" class="p-0"></p>

                    </div>
                    <div class="d-flex flex-row justify-content-end">
                        <p style="color: white;" class="p-0 flex-grow-1">Circulating Supply: </p>
                        <p id="circulatingsupply" style="color: white;" class="p-0"></p>
                    </div>
                    <div class="d-flex flex-row justify-content-end">
                        <p style="color: white;" class="p-0 flex-grow-1">Total Supply: </p>
                        <p id="totalsupply" style="color: white;" class="p-0"></p>
                    </div>
                    <div class="d-flex flex-row justify-content-end">
                        <p style="color: white;" class="p-0 flex-grow-1">Max. Supply: </p>
                        <p id="maxsupply" style="color: white;" class="p-0"></p>
                    </div>
                    <div class="d-flex flex-row justify-content-end">
                        <p style="color: white;" class="p-0 flex-grow-1">Fully Diluted Market Cap: </p>
                        <p id="dilutedmarketcap" style="color: white;" class="p-0"></p>
                    </div>

                    <!-- social -->
                    <div class="badge text-bg-dark text-wrap mt-4" style="width: 6rem;">
                        Socials
                    </div>
                    <div class="d-flex flex-row justify-content-start mt-4">
                        <a id="discord"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="white" class="bi bi-discord" viewBox="0 0 16 16">
                                <path d="M13.545 2.907a13.2 13.2 0 0 0-3.257-1.011.05.05 0 0 0-.052.025c-.141.25-.297.577-.406.833a12.2 12.2 0 0 0-3.658 0 8 8 0 0 0-.412-.833.05.05 0 0 0-.052-.025c-1.125.194-2.22.534-3.257 1.011a.04.04 0 0 0-.021.018C.356 6.024-.213 9.047.066 12.032q.003.022.021.037a13.3 13.3 0 0 0 3.995 2.02.05.05 0 0 0 .056-.019q.463-.63.818-1.329a.05.05 0 0 0-.01-.059l-.018-.011a9 9 0 0 1-1.248-.595.05.05 0 0 1-.02-.066l.015-.019q.127-.095.248-.195a.05.05 0 0 1 .051-.007c2.619 1.196 5.454 1.196 8.041 0a.05.05 0 0 1 .053.007q.121.1.248.195a.05.05 0 0 1-.004.085 8 8 0 0 1-1.249.594.05.05 0 0 0-.03.03.05.05 0 0 0 .003.041c.24.465.515.909.817 1.329a.05.05 0 0 0 .056.019 13.2 13.2 0 0 0 4.001-2.02.05.05 0 0 0 .021-.037c.334-3.451-.559-6.449-2.366-9.106a.03.03 0 0 0-.02-.019m-8.198 7.307c-.789 0-1.438-.724-1.438-1.612s.637-1.613 1.438-1.613c.807 0 1.45.73 1.438 1.613 0 .888-.637 1.612-1.438 1.612m5.316 0c-.788 0-1.438-.724-1.438-1.612s.637-1.613 1.438-1.613c.807 0 1.451.73 1.438 1.613 0 .888-.631 1.612-1.438 1.612" />
                            </svg></a>
                        &ensp; &ensp; &ensp;
                        <a id="x"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="white" class="bi bi-twitter-x" viewBox="0 0 16 16">
                                <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z" />
                            </svg></a>
                        &ensp; &ensp; &ensp;
                        <a id="web"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="white" class="bi bi-globe2" viewBox="0 0 16 16">
                                <path d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m7.5-6.923c-.67.204-1.335.82-1.887 1.855q-.215.403-.395.872c.705.157 1.472.257 2.282.287zM4.249 3.539q.214-.577.481-1.078a7 7 0 0 1 .597-.933A7 7 0 0 0 3.051 3.05q.544.277 1.198.49zM3.509 7.5c.036-1.07.188-2.087.436-3.008a9 9 0 0 1-1.565-.667A6.96 6.96 0 0 0 1.018 7.5zm1.4-2.741a12.3 12.3 0 0 0-.4 2.741H7.5V5.091c-.91-.03-1.783-.145-2.591-.332M8.5 5.09V7.5h2.99a12.3 12.3 0 0 0-.399-2.741c-.808.187-1.681.301-2.591.332zM4.51 8.5c.035.987.176 1.914.399 2.741A13.6 13.6 0 0 1 7.5 10.91V8.5zm3.99 0v2.409c.91.03 1.783.145 2.591.332.223-.827.364-1.754.4-2.741zm-3.282 3.696q.18.469.395.872c.552 1.035 1.218 1.65 1.887 1.855V11.91c-.81.03-1.577.13-2.282.287zm.11 2.276a7 7 0 0 1-.598-.933 9 9 0 0 1-.481-1.079 8.4 8.4 0 0 0-1.198.49 7 7 0 0 0 2.276 1.522zm-1.383-2.964A13.4 13.4 0 0 1 3.508 8.5h-2.49a6.96 6.96 0 0 0 1.362 3.675c.47-.258.995-.482 1.565-.667m6.728 2.964a7 7 0 0 0 2.275-1.521 8.4 8.4 0 0 0-1.197-.49 9 9 0 0 1-.481 1.078 7 7 0 0 1-.597.933M8.5 11.909v3.014c.67-.204 1.335-.82 1.887-1.855q.216-.403.395-.872A12.6 12.6 0 0 0 8.5 11.91zm3.555-.401c.57.185 1.095.409 1.565.667A6.96 6.96 0 0 0 14.982 8.5h-2.49a13.4 13.4 0 0 1-.437 3.008M14.982 7.5a6.96 6.96 0 0 0-1.362-3.675c-.47.258-.995.482-1.565.667.248.92.4 1.938.437 3.008zM11.27 2.461q.266.502.482 1.078a8.4 8.4 0 0 0 1.196-.49 7 7 0 0 0-2.275-1.52c.218.283.418.597.597.932m-.488 1.343a8 8 0 0 0-.395-.872C9.835 1.897 9.17 1.282 8.5 1.077V4.09c.81-.03 1.577-.13 2.282-.287z" />
                            </svg></a>

                    </div>


                </div>
            </div>
            <div class="col-8">
                <!-- TradingView Widget BEGIN -->
                <div class="tradingview-widget-container">
                    <div class="tradingview-widget-container__widget"></div>
                    <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/" rel="noopener nofollow" target="_blank"></a></div>
                    <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-advanced-chart.js" async>
                        {
                            "width": "100%",
                            "height": "610",
                            "symbol": "CRYPTOCAP:<?= $_GET['symbol'] ?>",
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
            </div>
        </div>

        <!-- TradingView Widget BEGIN -->
        <div class="tradingview-widget-container">
            <div class="tradingview-widget-container__widget"></div>
            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-symbol-profile.js" async>
                {
                    "width": "100%",
                    "height": "350",
                    "isTransparent": true,
                    "colorTheme": "dark",
                    "symbol": "CRYPTOCAP:<?= $_GET['symbol'] ?>",
                    "locale": "en"
                }
            </script>
        </div>
        <!-- TradingView Widget END -->





    </div>









    <script>
        const url = new URLSearchParams(window.location.search)
        url.delete("symbol")
        url.append('convert', 'IDR')


        const header = {
            "X-CMC_PRO_API_KEY": "a0540c63-5884-417a-8c31-4a8fcea92213",
            Accept: "application/json"
        }

        fetch("https://pro-api.coinmarketcap.com/v2/cryptocurrency/quotes/latest?" + url.toString(), {
            method: 'GET',
            headers: header
        }).then(response =>
            response.json()
        ).then(response => {
            console.log(response)
            document.getElementById("marketcap").innerHTML = response.data[url.get("id")].quote.IDR.market_cap.toLocaleString("id-ID");
            document.getElementById("price").innerHTML = "IDR " + response.data[url.get("id")].quote.IDR.price.toLocaleString("id-ID");
            document.getElementById("name").innerHTML = response.data[url.get("id")].name;
            document.getElementById("volume").innerHTML = response.data[url.get("id")].quote.IDR.volume_24h.toLocaleString("id-ID");
            document.getElementById("totalsupply").innerHTML = response.data[url.get("id")].total_supply.toLocaleString("id-ID");
            document.getElementById("maxsupply").innerHTML = response.data[url.get("id")].max_supply.toLocaleString("id-ID");
            document.getElementById("volumechange24h").innerHTML = response.data[url.get("id")].quote.IDR.volume_change_24h + "%";
            if (response.data[url.get("id")].quote.IDR.volume_change_24h > 0) {
                document.getElementById("volumechange24h").className = "text-success"
            } else {
                document.getElementById("volumechange24h").className = "text-danger"
            }
            document.getElementById("dilutedmarketcap").innerHTML = response.data[url.get("id")].quote.IDR.fully_diluted_market_cap.toLocaleString("id-ID");
            document.getElementById("circulatingsupply").innerHTML = response.data[url.get("id")].circulating_supply.toLocaleString("id-ID");
            document.getElementById("symbolll").innerHTML = response.data[url.get("id")].symbol;
        })
        url.delete("convert")

        fetch("https://pro-api.coinmarketcap.com/v2/cryptocurrency/info?" + url.toString(), {
            method: 'GET',
            headers: header
        }).then(response =>
            response.json()
        ).then(response => {
            console.log(response)
            document.getElementById("logo").src = response.data[url.get("id")].logo;
            document.getElementById("discord").href = response.data[url.get("id")].urls.chat;
            document.getElementById("x").href = response.data[url.get("id")].urls.twitter;
            document.getElementById("web").href = response.data[url.get("id")].urls.website;
           
        })
    </script>




    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
</body>

</html>