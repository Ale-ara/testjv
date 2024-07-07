<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>[SRC] - Página Inicial</title>
    <link rel="icon"
        href="https://www.habbo.com.br/habbo-imaging/badge/b09064s43084s50134eda71d18c813ca341e7e285475586bf5.gif">
    <link rel="stylesheet" href="css.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css" rel="stylesheet">
    
    <style>
        /* Estilo do HTML */
        html {
            height: 100%;
            background-color: #ffffff;
        }

        body {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            font-family: 'Poppins', sans-serif;
            overflow-y: auto;
            background: transparent;
        }

        .container {
            width: 100%;
            max-width: 800px;
            text-align: center;
            position: relative;
            transition: transform 0.5s ease-in-out;
            background: white;
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            margin-top: 120px;
        }

        h1, h2 {
            color: #fff;
        }

        .section {
            margin-bottom: 30px;
        }

        .item {
            background-color: #e7e7e7;
            border-radius: 10px;
            padding: 15px;
            margin-bottom: 15px;
            text-align: left;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .item-content {
            flex: 1;
        }

        .item-content h3, .item-content p {
            margin: 0;
        }

        .logo {
            width: auto;
            max-width: 100%;
            height: auto;
            margin: 40px auto;
            position: relative;
            z-index: 0;
            margin-top: 20px;
        }

        .credits {
            text-align: center;
            margin-top: 40px;
            padding: 20px;
            border-top: 1px solid #bf74c7;
            font-size: 14px;
            color: #ffffffc8;
            opacity: 0;
            transform: translateY(20px);
            transition: all 1s ease;
        }

        .credits p strong {
            color: rgba(255, 255, 255, 0.95);
        }

        .credits i {
            margin-right: 8px;
        }

        .credits .line-break {
            display: block;
            margin-top: -10px;
        }

        .credits.show {
            opacity: 1;
            transform: translateY(0);
        }

        ::-webkit-scrollbar {
            width: 12px;
        }

        ::-webkit-scrollbar-track {
            background: #07325A;
        }

        ::-webkit-scrollbar-thumb {
            background: #0e64b5;
            border-radius: 10px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #0e64b5;
        }

        body {
            scrollbar-width: thin;
            scrollbar-color: #07325A #0e64b5;
        }

        #loading-screen {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: #0e64b5;
            z-index: 9999;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            font-size: 2em;
            transition: opacity 0.5s ease, visibility 0.5s ease;
        }

        #loading-screen.hidden {
            opacity: 0;
            visibility: hidden;
        }

        @keyframes fadeInOut {
            0%, 100% {
                opacity: 1;
            }

            50% {
                opacity: 0.5;
            }
        }

        #loading-screen span {
            animation: fadeInOut 1s infinite;
        }

        @keyframes fadeInUp {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .nav {
            position: fixed;
            top: 0;
            left: 0;
            width: 200px;
            height: 100vh;
            padding: 1rem 1rem 3rem;
            background-color: #07325A;
            box-shadow: 1px 0 0 rgba(22, 8, 43, 0.1);
            z-index: 1000;
            transition: left 0.4s;
        }

        .nav.show-menu {
            left: 0;
        }

        .nav_container {
            height: 80%;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            overflow: auto;
        }

        .nav_logo {
            font-weight: bold;
            margin-bottom: 2.5rem;
            font-size: 24px;
            color: white;
        }

        .nav_list {
            display: grid;
            row-gap: 2.5rem;
        }

        .nav_subtitle {
            font-size: 1rem;
            text-transform: uppercase;
            letter-spacing: 0.1rem;
            color: #ffffffc8;
        }

        .nav_link {
            display: flex;
            align-items: center;
            color: white;
            text-decoration: none;
            transition: color 0.3s;
        }

        .nav_link:hover {
            color: #005dad;
        }

        .nav_icon {
            font-size: 1.2rem;
            margin-right: 0.5rem;
        }

        .nav_name {
            font-size: 14px;
            font-weight: 500;
            margin-left: 10px;
        }

        .blue-text {
            font-weight: bold;
            color: #005dad;
        }

        @media (max-width: 768px) {
            .blue-text {
                font-weight: bold;
                color: #005dad;
                font-size: 14px;
                line-height: 1.4;
            }
        }

        .nav_developed {
            color: #fff;
        }

        .banner {
            position: relative;
            width: 100%;
            height: 300px;
            overflow: hidden;
            border-radius: 15px;
            margin-top: 20px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }

        .banner img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .banner-content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            color: white;
            background: rgba(0, 0, 0, 0.5);
            padding: 20px;
            border-radius: 10px;
        }

        .banner-content h1 {
            font-size: 36px;
            margin-bottom: 10px;
        }

        .banner-content p {
            font-size: 18px;
            margin-bottom: 20px;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            color: white;
            background-color: #005dad;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .btn:hover {
            background-color: #003a70;
        }

        element.style {
    background-color: #ffffff;
    color: #003a70;
    font-family: Poppins, Arial;
    font-weight: 700;
    vertical-align: baseline;
}

.part1-describe-functions {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 60px 40px 60px 100px;
            width: none;
            background-color: #005dad;
            border-radius: 80px;
            position: relative;
            overflow: hidden;
            z-index: 2000;
        }

.sec-describe-functions {
    width: 100%;
    height: 100%;
    color: white;
    margin: 0;
}

* {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: "Poppins", sans-serif;
}

section {
    display: block;
    unicode-bidi: isolate;
}

h3 {
    display: block;
    font-size: 1.17em;
    margin-block-start: 1em;
    margin-block-end: 1em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    font-weight: bold;
    unicode-bidi: isolate;
}

.name-describe {
    background-color: #5F79B2;
    margin-bottom: 17px;
    padding: 20px;
    text-align: justify;
    align-items: start;
    justify-content: start;
    width: 100%;
    height: auto;
    border-radius: 10px;
    position: relative;
}

.sec-describe-functions {
    width: 100%;
    height: 100%;
    color: white;
    margin: 0;
}

.function-name {
    background-color: #AFBCD9;
    margin-bottom: 17px;
    padding: 20px;
    text-align: justify;
    align-items: end;
    justify-content: end;
    width: 100%;
    margin-left: 10%;
    border-radius: 10px;
    position: relative;
    height: auto;
}

.activity-name {
    background-color: #AFBCD980;
    margin-bottom: 17px;
    padding: 20px;
    text-align: justify;
    align-items: start;
    justify-content: start;
    width: 100%;
    border-radius: 10px;
    position: relative;
    height: auto;
}

    </style>
</head>

<body>

    <nav class="nav" id="navbar">
        <div class="nav_container">
            <div class="nav_logo">
                [SRC]
            </div>
            <div class="nav_list">
                <div class="nav_item">
                    <a href="./home.html" class="nav_link">
                        <i class='bx bx-home nav_icon'></i>
                        <span id="home" class="nav_name">Home</span>
                    </a>
                </div>

                <div class="nav_item">
                    <a href="./atadereuniao.html" class="nav_link">
                        <i class='bx bx-news nav_icon'></i>
                        <span id="atadereuniao" class="nav_name">ATA de Reunião</span>
                    </a>
                </div>

                <div class="nav_item">
                    <a href="./promovidos.html" class="nav_link">
                        <i class='bx bxs-medal nav_icon'></i>
                        <span id="promovidos" class="nav_name">Promovidos da Semana</span>
                    </a>
                </div>

                <div class="nav_item">
                    <a href="./diariooficial.html" class="nav_link">
                        <i class='bx bx-news nav_icon'></i>
                        <span id="diariooficial" class="nav_name">Diário Oficial</span>
                    </a>
                </div>

                <div class="nav_item">
                    <a href="./projetos.html" class="nav_link">
                        <i class='bx bx-news nav_icon'></i>
                        <span id="projetos" class="nav_name">Projetos / Sugestões / Correções</span>
                    </a>
                </div>
            </div>

            <div class="bx bx-code-alt nav_icon nav_developed">
                Qox
            </div>
        </div>
    </nav>

    <div class="container">
        <div id="r_home">
            <div class="banner">
                <img src="https://i.imgur.com/sVUAYxC.gif" alt="Banner Destaque">
               
                <a href="#" class="btn">Saiba Mais</a>
            </div>

            
            <section class="sec-describe-functions">
                <div class="container-describe-functions">
                  
                    <div class="part1-describe-functions">
                        <div class="types-name-describes">
                            <h2 id="h2-cel">Setor de Relações Comunicativas</h2>
                            <p>
                                Setor de Relações Comunicativas, departamento cujas funções são essenciais para o entretenimento, marketing e comunicação interna da companhia.
                            </p>
                        </div>
                    </div>
            
                    <div class="part2-describe-functions">
                        <div class="box-of-describe-functions">
                            <div class="name-describe">
                                <div class="arrow2-1"></div>
                                <h3>Markething</h3>
                                <p>A função do Markething é realizar as divulgações da companhia através do WhatsApp.</p>
                            </div>
                            <div class="function-name">
                                <div class="arrow"></div>
                                <h3>Eventos</h3>
                                <p>A função de Eventos baseia-se na construção de eventos.</p>
                            </div>
                            <div class="activity-name">
                                <div class="arrow2-2"></div>
                                <h3>Comunicação</h3>
                                <p>A função de Comunicação é responsável pelo envio de mensagens privadas no fórum.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
</body>

</html>
