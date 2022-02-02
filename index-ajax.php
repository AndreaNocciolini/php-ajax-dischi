<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Link Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Link css -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Link Vue -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <title>Document</title>
</head>

<body>
    <!-- header -->
    <?php include_once __DIR__ . '/partials/header.php' ?>

    <main id="app">
        <div class="main-container">
            <div class="album-container">
                <div class="card-container d-flex row row-cols-5 p-3 g-3">
                    <div class="card-divider" v-for="card in cards">
                        <div class="my-card col p-3 h-100">
                            <div class="card-top">
                                <img :src="card.poster" alt="card.title">
                            </div>
                            <div class="card-content d-flex flex-column text-center">
                                <h2>{{card.title}}</h2>
                                <h3>{{card.author}}</h3>
                                <h4>{{card.year}}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- footer -->
    <?php include_once __DIR__ . '/partials/footer.php' ?>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>