<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        *{margin: 0; padding: 0; box-sizing: border-box;}
        body{
            font-family: sans-serif;
            font-size: 14px;
            letter-spacing: 1px;
            line-height: 20px;
            padding: 20px;
        }
        #wrapper{
            background-color: #c2bfbf;
            border: 1px solid grey;
            padding: 10px;
        }
        #header{
            height: 120px;
            background-color: #f2c9c9;
        }
        #nav{
            height: 40px;
            background-color: #515151;
            border-top: 2px solid wheat;
            border-bottom: 2px solid burlywood;
        }
        #content{
            min-height: 350px;
            background: pink;
            padding: 30px;
        }
        #footer{
            height: 30px;
            background: goldenrod;
            border-top: 2px solid wheat;
            border-bottom: 2px solid burlywood;
        }
    </style>
    <title>@yield("pich")</title>
</head>
<body>
    <div id="wrapper">
        <div id="header">>@yield("myheader")</div>
        <div id="nav">>@yield("mycontent")</div>
        <div id="contect">@yield("mycontent")</div>
        <div id="footer">>@yield("myfooter")</div>
    </div>
</body>
</html>
