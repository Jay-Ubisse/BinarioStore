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
        <section id="promotions" class="w-[98%] mt-3 mx-auto bg-white p-1 h-fit">
            <h1 class="text-blue-binario w-fit mx-auto font-bold text-lg py-4">Promocoes</h1>
            <div id="products" class="flex laptop:flex-row laptop:justify-between mx-5">
                <div class="laptop:w-[300px] laptop:h-[320px] border border-blue-binario"></div>
                <div class="laptop:w-[300px] laptop:h-[320px] border border-blue-binario"></div>
                <div class="laptop:w-[300px] laptop:h-[320px] border border-blue-binario"></div>
                <div class="laptop:w-[300px] laptop:h-[320px] border border-blue-binario"></div>
            </div>
            <div class="bg-blue-binario w-fit mx-auto font-regular text-white text-base py-1 px-10 my-4 rounded-2xl">
                <a href="#">Ver tudo</a>
            </div>
        </section>
        <section id="bestsellers" class="w-[98%] mt-3 mx-auto bg-white p-1 h-fit">
            <h1 class="text-blue-binario w-fit mx-auto font-bold text-lg py-4">Mais vendidos</h1>
            <div id="products" class="flex laptop:flex-row laptop:justify-between mx-5">
                <div class="laptop:w-[300px] laptop:h-[320px] border border-blue-binario"></div>
                <div class="laptop:w-[300px] laptop:h-[320px] border border-blue-binario"></div>
                <div class="laptop:w-[300px] laptop:h-[320px] border border-blue-binario"></div>
                <div class="laptop:w-[300px] laptop:h-[320px] border border-blue-binario"></div>
            </div>
            <div class="bg-blue-binario w-fit mx-auto font-regular text-white text-base py-1 px-10 my-4 rounded-2xl">
                <a href="#">Ver tudo</a>
            </div>
        </section>
        <section id="category" class="w-[98%] mt-3 mx-auto bg-white p-1 h-fit">
            <h1 class="text-blue-binario w-fit mx-auto font-bold text-lg py-4">Compre por categoria</h1>
            <div id="products" class="grid laptop:grid-cols-5 mx-5">
                <div class="flex flex-col items-center justify-center laptop:w-[250px] laptop:h-[250px]">
                    <div class="bg-gray-binario rounded-full laptop:w-[200px] laptop:h-[200px]"></div>
                    <span class="text-black text-base font-semibold">Catrgoria 1</span>
                </div>
                <div class="flex flex-col items-center justify-center laptop:w-[250px] laptop:h-[250px]">
                    <div class="bg-gray-binario rounded-full laptop:w-[200px] laptop:h-[200px]"></div>
                    <span class="text-black text-base font-semibold">Catrgoria 2</span>
                </div>
                <div class="flex flex-col items-center justify-center laptop:w-[250px] laptop:h-[250px]">
                    <div class="bg-gray-binario rounded-full laptop:w-[200px] laptop:h-[200px]"></div>
                    <span class="text-black text-base font-semibold">Catrgoria 3</span>
                </div>
                <div class="flex flex-col items-center justify-center laptop:w-[250px] laptop:h-[250px]">
                    <div class="bg-gray-binario rounded-full laptop:w-[200px] laptop:h-[200px]"></div>
                    <span class="text-black text-base font-semibold">Catrgoria 4</span>
                </div>
                <div class="flex flex-col items-center justify-center laptop:w-[250px] laptop:h-[250px]">
                    <div class="bg-gray-binario rounded-full laptop:w-[200px] laptop:h-[200px]"></div>
                    <span class="text-black text-base font-semibold">Catrgoria 5</span>
                </div>
                <div class="flex flex-col items-center justify-center laptop:w-[250px] laptop:h-[250px]">
                    <div class="bg-gray-binario rounded-full laptop:w-[200px] laptop:h-[200px]"></div>
                    <span class="text-black text-base font-semibold">Catrgoria 6</span>
                </div>
                <div class="flex flex-col items-center justify-center laptop:w-[250px] laptop:h-[250px]">
                    <div class="bg-gray-binario rounded-full laptop:w-[200px] laptop:h-[200px]"></div>
                    <span class="text-black text-base font-semibold">Catrgoria 7</span>
                </div>
                <div class="flex flex-col items-center justify-center laptop:w-[250px] laptop:h-[250px]">
                    <div class="bg-gray-binario rounded-full laptop:w-[200px] laptop:h-[200px]"></div>
                    <span class="text-black text-base font-semibold">Catrgoria 8</span>
                </div>
                <div class="flex flex-col items-center justify-center laptop:w-[250px] laptop:h-[250px]">
                    <div class="bg-gray-binario rounded-full laptop:w-[200px] laptop:h-[200px]"></div>
                    <span class="text-black text-base font-semibold">Catrgoria 9</span>
                </div>
                <div class="flex flex-col items-center justify-center laptop:w-[250px] laptop:h-[250px]">
                    <div class="bg-gray-binario rounded-full laptop:w-[200px] laptop:h-[200px]"></div>
                    <span class="text-black text-base font-semibold">Catrgoria 10</span>
                </div>
            </div>
        </section>
        <section id="brands" class="w-[98%] mt-3 mx-auto bg-white p-1 h-fit">
            <h1 class="text-blue-binario w-fit mx-auto font-bold text-lg py-4">Marcas</h1>
            <div id="products" class="flex laptop:flex-row laptop:justify-between mx-5">
                <div class="laptop:w-[200px] laptop:h-[230px]">
                    <img src="./assets/img/brands/arduino.svg">
                </div>
            </div>
        </section>
        <section id="newsletter" class="w-[98%] mt-3 mx-auto bg-blue-binario pt-1 pb-6 h-fit">
            <h1 class="text-white w-fit mx-auto font-bold text-lg py-4">Newsletter</h1>
            <p class="text-white w-fit mx-auto font-ligth text-xs pb-4">Assine para receber novidades e ofertas especiais</p>
            <div class="h-fit  w-fit mx-auto laptop:flex laptop:flex-row laptop:gap-0 laptop:h-12">
                <input type="search" name="search" size="60" class="bg-gray-binario laptop:rounded-tl-3xl laptop:rounded-bl-3xl laptop:focus:outline-blue-binario laptop:px-2 text-xs text-slate-800">
                <button class="bg-black text-white relative -left-10 laptop:px-20 laptop:rounded-3xl">Assinar</button>
            </div>
        </section>
    </main>
    <footer class="w-full mt-3 p-0 pt-1 bg-white">
        <section class="w-[98%] mx-auto mt-6 flex laptop:flex-row laptop:justify-around">
            <div>
                <h1 class="text-black font-bold laptop:text-lg">Contacto</h1>
                <p class="text-[#212529] font-regular laptop:text-xs">info@store.binario.com</p>
                <p class="text-[#212529] font-regular laptop:text-xs">(258) 84 883 9501</p>
                <div class="flex flex-row gap-3">
                    <div><i class="fa-brands fa-facebook fa-lg"></i></div>
                    <div><i class="fa-brands fa-square-instagram fa-lg"></i></div>
                    <div><i class="fa-brands fa-twitter fa-lg"></i></div>
                </div>
            </div>
            <div>
            <h1 class="text-black font-bold laptop:text-lg">Suporte ao cliente</h1>
                <p class="text-[#212529] font-regular laptop:text-xs">Central de ajuda</p>
                <p class="text-[#212529] font-regular laptop:text-xs">Sobre nos</p>
            </div>
            <div>
            <h1 class="text-black font-bold laptop:text-lg">Politica</h1>
                <p class="text-[#212529] font-regular laptop:text-xs">Entregas e devoluções</p>
                <p class="text-[#212529] font-regular laptop:text-xs">Termos e Condições</p>
                <p class="text-[#212529] font-regular laptop:text-xs">Métodos de pagamento</p>
                <p class="text-[#212529] font-regular laptop:text-xs">Politica de cookies</p>
                <p class="text-[#212529] font-regular laptop:text-xs">FAQ</p>
            </div>
        </section>
        <section class="w-[90%] mx-auto border-t border-[#212529] text-center mt-3 pt-3 min-h-[200px]">
            <p class="text-[#212529] font-regular laptop:text-xs">Métodos de pagamento</p>
        </section>
        <section class="bg-gray-binario py-4 text-center font-regular laptop:text-xs">
            <p>&copy; 2022 Binario. Todos os direitos reservados. </p>
        </section>
    </footer>
</body>
</html>