<!DOCTYPE html>
<html>
    <head>
        <title>Доступ к странице ограничен.</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>

            html, body{
                background: #f2f2f2;
                height: 100%;
                width: 100%;
                font-family: sans-serif;
                display: flex;
                justify-content: center;
                align-items: flex-start;
                font-family: 'Fira Sans', sans-serif;
                font-weight: 300;
                padding: 0;
                margin: 0;


            }

            a{
                color: #ff3100;
            }
            a:hover{
                text-decoration: none;
            }
            .wrapper{
                margin: 5% 0;
                box-shadow: 1px 1px 3px -2px #000;
                box-sizing: border-box;
                background: #fff;
                padding: 40px;
                width: 90%;
                border-radius: 3px;
                max-width: 800px;

            }
            .logo{
                width: 100px;
                height: 70px;
                background-image: url(https://tobiz.net/logo.svg);
                background-repeat: no-repeat;
                background-size: 100% auto;

            }
            .title{
                font-size: 36px;
                margin-bottom: 30px;
            }
            .line1,.subtitle,.line2{
                line-height: 150%;
            }
            .subtitle, .line2{
                margin-bottom: 30px;

            }

            .line2{
                font-size: 80%;
            }
            .btn{
                display: block;
                background: #ff3100;
                max-width: 450px;
                height: 55px;
                line-height: 55px;
                text-transform: uppercase;
                text-decoration: none;
                box-sizing: border-box;
                color: #fff;
                text-align: center;
                border-radius: 3px;
                font-size: 20px;

            }
            .btn:hover{
                background: #e62c00;
            }
            @media (max-width: 480px){
                .title{
                    font-size: 24px;
                }
            }


        </style>
    </head>
    <body>

            <div class="wrapper" >
                <div class="inner" >
                    <div class="title">Доступ к странице ограничен.</div>
                    <div class="subtitle">Для доступа к странице необходимо указать корректный логин / пароль..</div>
                </div>
            </div>
            <link href="https://fonts.googleapis.com/css?family=Fira+Sans:200,300" rel="stylesheet">
    </body>
</html>
