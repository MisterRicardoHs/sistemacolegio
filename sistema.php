<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Face title</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="js/jquery-3.3.1.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="row mt-5">
        <hr class="mt-5">
        <h3 class="text-center">Sistema Para Recoger Estudiantes</h3>
        <hr class="mb-5">
             <div class="col-xs-12 col-md-4 col-lg-4">
                 <table class="table table-hover">
                            <thead>
                                <tr>
                                <th scope="col">Carril 1</th>
                                </tr>
                            </thead>
                            <tbody id="carril1">
                            </tbody>
                </table>
             </div>
             <div class="col-xs-12 col-md-4 col-lg-4">
                         <table class="table table-hover">
                            <thead>
                                <tr>
                                <th scope="col">Carril 2</th>
                                </tr>
                            </thead>
                            <tbody id="carril2">
                            </tbody>
                         </table>
             </div>
            <div class="col-xs-12 col-md-4 col-lg-4">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                <th scope="col">Carril 3</th>
                                </tr>
                            </thead>
                            <tbody id="carril3">
                            </tbody>
                        </table>
            </div>
        </div>
    </div>
</body>
</html>

<script>

    function consultarCarril1()
    {
        var detalles = $.ajax({
            url:'consultarcarril.php?id=1',
            dataType: "text",
            async: false,
            cache:true,
        }).responseText;
            var detall= document.getElementById('carril1');
            detall.innerHTML= detalles; 
                                   
        
    }

    function consultarCarril2()
    {
        var detalles = $.ajax({
            url:'consultarcarril.php?id=2',
            dataType: "text",
            async: false,
            cache:true,
        }).responseText;
            var detall= document.getElementById('carril2');
            detall.innerHTML= detalles; 
                                   
        
    }

    function consultarCarril3()
    {
        var detalles = $.ajax({
            url:'consultarcarril.php?id=3',
            dataType: "text",
            async: false,
            cache:true,
        }).responseText;
            var detall= document.getElementById('carril3');
            detall.innerHTML= detalles; 
                                   
        
    }

    setInterval(() => {
        consultarCarril1();
    }, 3000);

     setInterval(() => {
        consultarCarril2();
    }, 4000);

     setInterval(() => {
        consultarCarril3();
    }, 5000);

</script>