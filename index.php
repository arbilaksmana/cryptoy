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
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid container">
            <a class="navbar-brand" style="font-weight: 900;">Criptoy</a>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
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
    </div>
    <!-- TradingView Widget END -->







    <script>
        const header = {
            "X-CMC_PRO_API_KEY": "a0540c63-5884-417a-8c31-4a8fcea92213",
            Accept: "application/json"
        }
        fetch("https://pro-api.coinmarketcap.com/v1/cryptocurrency/map", {
            method: 'GET',
            headers: header
        }).then(response =>
            response.json()
        ).then(response =>
            console.log(response)
        )
        for (let index = 0; index < data.data.length; index++) {
            var checkbox = document.createElement("input");
            checkbox.id = "checkbox-table-search-1";
            checkbox.type = "checkbox";
            checkbox.className = "w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-blue-600 ring-offset-gray-800 focus:ring-offset-gray-800 focus:ring-2 bg-gray-700 border-gray-600";

            var label = document.createElement("label");
            label.htmlFor = "checkbox-table-search-1";
            label.className = "sr-only";
            label.textContent = "checkbox";

            var div = document.createElement("div");
            div.className = "flex items-center";
            div.appendChild(checkbox);
            div.appendChild(label);

            var td = document.createElement("td");
            td.className = "w-4 p-4";
            td.appendChild(div);

            var th = document.createElement("th");
            th.scope = "row";
            th.className = "px-6 py-4";
            th.textContent = data.data[index].name;

            var td1 = document.createElement("td");
            td1.className = "px-6 py-4";
            td1.textContent = "Rp." + parseFloat(data.data[index].quote.IDR.price).toLocaleString('id-ID');

            var td2 = document.createElement("td");
            if (parseFloat(data.data[index].quote.IDR.percent_change_1h) > 0.0) {
                td2.className = "px-6 py-4 text-green-800";
            } else {
                td2.className = "px-6 py-4 text-red-800"
            };
            td2.textContent = data.data[index].quote.IDR.percent_change_1h + '%';

            var td3 = document.createElement("td");
            td3.className = "px-6 py-4";
            td3.textContent = data.data[index].quote.IDR.percent_change_24h + '%';

            var td4 = document.createElement("td");
            td4.className = "px-6 py-4";
            td4.textContent = data.data[index].quote.IDR.percent_change_7d + '%';

            var td5 = document.createElement("td");
            td5.className = "px-6 py-4";
            td5.textContent = "Rp." + parseFloat(data.data[index].quote.IDR.market_cap).toLocaleString('id-ID');

            var td6 = document.createElement("td");
            td6.className = "px-6 py-4";
            td6.textContent = data.data[index].circulating_supply;

            var td7 = document.createElement("td");
            td7.className = "px-6 py-4";

            var td7 = document.createElement("td");
            td7.className = "px-6 py-4";

            // var tradingviewContainer = document.createElement("div");
            // tradingviewContainer.className = "tradingview-widget-container";
            // tradingviewContainer.style.height = "100%";
            // tradingviewContainer.style.width = "100%";

            // var tradingviewWidget = document.createElement("div");
            // tradingviewWidget.className = "tradingview-widget-container__widget";
            // tradingviewWidget.style.height = "calc(100% - 32px)";
            // tradingviewWidget.style.width = "100%";

            // var tradingviewCopyright = document.createElement("div");
            // var tradingviewLink = document.createElement("a");
            // tradingviewLink.href = "https://www.tradingview.com/";
            // tradingviewLink.rel = "noopener nofollow";
            // tradingviewLink.target = "_blank";
            // var tradingviewSpan = document.createElement("span");
            // tradingviewSpan.className = "blue-text";
            // tradingviewSpan.textContent = "Track all markets on TradingView";
            // tradingviewLink.appendChild(tradingviewSpan);
            // tradingviewCopyright.appendChild(tradingviewLink);

            // var tradingviewScript = document.createElement("script");
            // tradingviewScript.type = "text/javascript";
            // tradingviewScript.src = "https://s3.tradingview.com/external-embedding/embed-widget-advanced-chart.js";
            // tradingviewScript.async = true;
            // tradingviewScript.innerHTML = `{
            //         "autosize": true,
            //         "symbol": "CRYPTOCAP:${data.data[index].symbol}",
            //         "interval": "D",
            //         "timezone": "Etc/UTC",
            //         "theme": "dark",
            //         "style": "2",
            //         "locale": "en",
            //         "hide_top_toolbar": true,
            //         "hide_legend": true,
            //         "allow_symbol_change": false,
            //         "save_image": false,
            //         "calendar": false,
            //         "hide_volume": true,
            //         "support_host": "https://www.tradingview.com"
            //     }`;

            // td7.appendChild(tradingviewContainer);
            // tradingviewContainer.appendChild(tradingviewWidget);
            // tradingviewContainer.appendChild(tradingviewCopyright);
            // tradingviewContainer.appendChild(tradingviewScript);


            var tr = document.createElement("tr");
            tr.className = "border-b bg-gray-800 border-gray-700 hover:bg-gray-50 hover:bg-gray-600";
            tr.appendChild(td);
            tr.appendChild(th);
            tr.appendChild(td1);
            tr.appendChild(td2);
            tr.appendChild(td3);
            tr.appendChild(td4);
            tr.appendChild(td5);
            tr.appendChild(td6);
            tr.appendChild(td7);

            var table = document.getElementById("allDataTable");
            table.appendChild(tr);

        }

    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
</body>

</html>