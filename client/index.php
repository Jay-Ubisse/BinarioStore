<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio - Binario Store</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/4b43862993.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./assets/styles/output.css">
</head>
<body class="font-inter bg-gray-binario">
    <header>
        <?php
            include './components/header.php';
        ?>
    </header>
    <main>
        <section id="slides" class="w-full">
            <img src="./assets/img/slides/slide-1.png" class="w-full">
        </section>
        <section id="offers" class="w-[98%] mt-3 mx-auto flex justify-around laptop:flex-row ">
            <div class="bg-[#0F4C5C] flex flex-row justify-center items-center text-lg text-white font-bold laptop:w-[600px] laptop:h-[400px] ">
                <h1>Oferta 1</h1>
            </div>
            <div class="bg-[#9A031E] flex flex-row justify-center items-center text-lg text-white font-bold laptop:w-[600px] laptop:h-[400px]">
                <h1>Oferta 2</h1>
            </div>
        </section>
    </main>
</body>
</html>