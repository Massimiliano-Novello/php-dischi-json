<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <div id="app">
        <div class="container">
            <div class="row row-cols-6 py-4">
                <div class="card m-3 my_card" v-for="(todo, index) in todos">
                    <div class="text-center py-3 border border-0">
                        <img :src="todo.poster" class="card-img-top images" alt="">
                    </div>
                    <div class="card-body text-center text-white">
                        <h4>{{ todo.title }}</h4>
                        <p class="card-text">{{ todo.author }}</p>
                        <p class="card-text">{{ todo.year }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="js/script.js"></script>
</body>
</html>