<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&display=swap" rel="stylesheet">
    <title>Document</title>
</head>

<body class="bg-dark_grey-100 w-full min-h-dvh lg:grid lg:grid-cols-[auto_1fr] gap-2">
    <?php require("./components/navbar.html") ?>
    <main class="bg-zinc-800 w-full h-full p-6 lg:py-12 lg:px-20 lg:mt-2 lg:rounded-lg mb-[7rem] lg:mb-0">
        <div class="lg:w-5/6 bg-dark_grey-100 flex justify-between items-center gap-6 p-4 rounded-2xl">
            <img src="./images/photo_profil.jpg" alt="Maël Roulette" class="w-24 lg:w-56 rounded-2xl">
            <div class="grid grid-cols-1 grid-rows-3 lg:grid-rows-[2fr_1fr_1fr] h-24 lg:h-52">
                <h1 class="text-sm lg:text-4xl self-center">Étudiant en développement web et création graphique</h1>
                <h2 class="text-xs lg:text-2xl self-center">BUT MMI</h2>
                <div class="place-self-end flex justify-center items-center gap-3 lg:gap-10">
                    <a href="#" class="text-xs lg:text-xl bg-spotify_green-100 text-dark_grey-100 font-semibold rounded-full py-1 lg:py-2 px-3 lg:px-4">Me
                        contacter</a>
                    <button class="text-xs lg:text-xl font-semibold rounded-full py-1 lg:py-2 px-3 lg:px-4 border-zinc-200 border-2">Mon
                        CV</button>
                </div>
            </div>
        </div>
        <div class="my-10 flex justify-start items-center gap-4 lg:gap-8">
            <button class="bg-zinc-200 text-dark_grey-100 py-1 px-3 rounded-full font-extrabold text-xs lg:text-lg">Tout</button>
            <button class="bg-zinc-500 py-1 px-3 rounded-full font-medium text-xs lg:text-lg">À propos</button>
            <button class="bg-zinc-500 py-1 px-3 rounded-full font-medium text-xs lg:text-lg">Compétences</button>
        </div>
        <section>
            <h2 class="text-xl font-bold pb-4">À propos de moi</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Fermentum posuere urna nec tincidunt praesent semper feugiat nibh sed. Condimentum
                id venenatis a condimentum vitae sapien pellentesque. Condimentum id. Condimentum id venenatis a
                condimentum vitae sapien pellentesque. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Fermentum posuere urna nec tincidunt praesent semper feugiat nibh sed. Condimentum
                id venenatis a condimentum vitae sapien pellentesque. Condimentum id. Condimentum id venenatis a
                condimentum vitae sapien pellentesque.
            </p>
        </section>
        <section>
            <h2 class="text-xl font-bold py-6">Expériences</h2>
            <ul class="flex flex-row justify-start items-center gap-10 flex-wrap">
                <li class="flex justify-between items-center bg-zinc-700 rounded-lg gap-4 w-[20rem] pr-4">
                    <img src="./images/experience/pepone.png" alt="Restaurant Pepone" class="w-20 rounded-lg shadow-[5px_0px_10px_2px_#151515]">
                    <h3 class="w-full">Restaurant Pepone</h3>
                    <img src="./images/icones/link-page.svg" alt="En savoir plus" class="w-8">
                </li>
                <li class="flex justify-between items-center bg-zinc-700 rounded-lg gap-4 w-[20rem] pr-4">
                    <img src="./images/experience/mcdonald.png" alt="Restaurant Pepone" class="w-20 rounded-lg shadow-[5px_0px_10px_2px_#151515]">
                    <h3 class="w-full">Mc Donald's</h3>
                    <img src="./images/icones/link-page.svg" alt="En savoir plus" class="w-8">
                </li>
                <li class="flex justify-between items-center bg-zinc-700 rounded-lg gap-4 w-[20rem] pr-4">
                    <img src="./images/experience/traiteur.jpg" alt="Restaurant Pepone" class="w-20 rounded-lg shadow-[5px_0px_10px_2px_#151515]">
                    <h3 class="w-full">Traiteur mariage</h3>
                    <img src="./images/icones/link-page.svg" alt="En savoir plus" class="w-8">
                </li>
            </ul>
        </section>
    </main>

</body>

</html>