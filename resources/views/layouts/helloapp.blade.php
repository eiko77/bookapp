<html>
    <head>
        <title>@yield('title')</title>
        <style>
            body {
                font-size: 16pt;
                color: #999;
                margin: 5px;
                background-color: rgb(246, 226, 209)
            }
            h1 {
                font-size: 50px;
                text-align: right;
                color: #f6f6f6;
                margin: -20px 0px -30px 0px;
                letter-spacing: -4pt;
            }

            ul {
                font-size: 12px
            }
            hr {
                margin: 25px 100px;
                border-top: 1px dashed #ddd;
            }
            .menutitle {
                font-size: 30px;
                font-weight: bold;
                margin: 15px;
            }
            .content {
                margin: 10px;
            }
            .footer {
                text-align: right;
                font-size: 10px;
                margin: 10px;
                border-bottom: solid 1px #ccc;
                color: #ccc;
            }
            p {
                font-size: 15px
            }

            th {
              background-color: #999; 
             color:fff;
             padding: 10px;
            }

            td {
                border: solid 1px #aaa;
                color: #999;
                padding: 5px 10px;
                background-color: white;

            }
        </style>
    </head>
    <body>
        <h1>@yield('title')</h1>
        @section('menubar')
        <h2 class="menutitle">こども図書館</h2>
        <ul>
            <li>@show</li>
        </ul>
        <hr size="1">
        <div class="content">
            @yield('content')
        </div>
        <div class="footer">
            @yield('footer')
        </div>
    </body>
</html>