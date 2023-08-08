<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inmobiliaria</title>
    <link rel="stylesheet" href="css/styles.css">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.css" rel="stylesheet" />
</head>

<body>
    <?php include './utilidades/header.php'; ?>

    <main>
        <section class="hero">
            <h2>Encuentra la casa de tus sueños</h2>
            <p>Bienvenido a Inmobiliaria Sanchez Alvarez, donde hacemos realidad el sueño de encontrar tu hogar ideal.</p>
        </section>

        <h2>Propiedades Destacadas</h2>
        <section class="properties">

            <div class="property">
                <img src="images/casa_lago.jpg"
                    alt="Casa 1">
                <h3>Casa en el Lago</h3>
                <p>Precio: $250,000</p>
                <p>Habitaciones: 4</p>
                <p>Baños: 3</p>
                <p>Ubicación: Ciudad Mexico</p>
            </div>
            <div class="property">
                <img src="images/codominio_playa.jpg"
                    alt="Casa 2">
                <h3>Condominio en la Playa</h3>
                <p>Precio: $450,000</p>
                <p>Habitaciones: 3</p>
                <p>Baños: 2</p>
                <p>Ubicación: Playa Tinti Pan</p>
            </div>
            <div class="property">
                <img src="images/penhouse.jpg"
                    alt="Casa 2">
                <h3>PenHouse</h3>
                <p>Precio: $210,000</p>
                <p>Habitaciones: 8</p>
                <p>Baños: 6</p>
                <p>Ubicación: Miami</p>
            </div>

            <!-- Agrega más propiedades aquí -->
        </section>

        <section id="contacto" class="about">
            <h2>Sobre Nosotros</h2>
            <p>Inmobiliaria Sanchez Alvarez es una empresa líder en el sector inmobiliario. Nuestra misión es ayudarte a encontrar
                la propiedad perfecta que se ajuste a tus necesidades y presupuesto. Contamos con un equipo de agentes
                expertos que te guiarán en todo el proceso de compra o venta de tu propiedad.</p>
        </section>
    </main>

  <?php include './utilidades/footer.php'; ?>
</body>

</html>