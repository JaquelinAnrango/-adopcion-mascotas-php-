<?php
// Catálogo de mascotas adaptado a las imágenes de tu carpeta img/
$mascotas = [
    [
        'nombre' => 'Bella',
        'especie' => 'Perro',
        'edad' => '2 años',
        'tamano' => 'Mediano',
        'imagen' => 'img/Bella.jpg',
        'descripcion' => 'Juguetona, cariñosa y llena de energía. Le encanta correr en el parque y convivir con la familia.'
    ],
    [
        'nombre' => 'Luna',
        'especie' => 'Gato',
        'edad' => '1 año',
        'tamano' => 'Pequeño',
        'imagen' => 'img/Luna.jpeg',
        'descripcion' => 'Tranquila, sociable y muy mimosa. Le gusta descansar cerca de la ventana y recibir mucho amor.'
    ],
    [
        'nombre' => 'Mustafa',
        'especie' => 'Gato',
        'edad' => '3 años',
        'tamano' => 'Mediano',
        'imagen' => 'img/Mustafa.jpg',
        'descripcion' => 'Un minino noble y curioso. Es ideal para ambientes tranquilos y muy educado en su hogar.'
    ],
    [
        'nombre' => 'Rufo',
        'especie' => 'Perro',
        'edad' => '4 años',
        'tamano' => 'Grande',
        'imagen' => 'img/RUFO.webp',
        'descripcion' => 'Leal, obediente y protector. Busca una familia activa con un buen patio o espacio abierto.'
    ]
];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adopción de Mascotas - Refugio Patitas Felices</title>
    <!-- Bootstrap 5 CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- FontAwesome para iconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Hoja de estilos personalizada -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="bg-light">

    <!-- Encabezado y Navbar -->
    <header class="sticky-top">
        <nav class="navbar navbar-expand-lg navbar-dark bg-success shadow-sm">
            <div class="container">
                <a class="navbar-brand d-flex align-items-center gap-2 fw-bold" href="#">
                    <i class="fa-solid fa-paw fa-lg"></i>
                    <span>Refugio Patitas Felices</span>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto fw-semibold">
                        <li class="nav-item"><a class="nav-link active" href="#inicio">Inicio</a></li>
                        <li class="nav-item"><a class="nav-link" href="#catalogo">Mascotas</a></li>
                        <li class="nav-item"><a class="nav-link" href="#requisitos">Requisitos</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contacto">Contacto</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- Hero / Presentación -->
    <section id="inicio" class="hero-section text-white text-center py-5">
        <div class="container py-4">
            <h1 class="display-4 fw-bold">Un hogar amoroso para cada huellita</h1>
            <p class="lead col-lg-8 mx-auto mt-3">
                Dales una segunda oportunidad. Adopta un amigo leal y transforma su vida para siempre.
            </p>
            <a href="#catalogo" class="btn btn-warning btn-lg fw-bold shadow-sm mt-3 text-dark">
                <i class="fa-solid fa-heart me-2"></i>Ver Mascotas
            </a>
        </div>
    </section>

    <!-- Sección del Catálogo de Mascotas -->
    <section id="catalogo" class="container my-5">
        <div class="text-center mb-5">
            <h2 class="fw-bold text-success"><i class="fa-solid fa-pets me-2"></i>Mascotas disponibles para adopción</h2>
            <p class="text-muted">Conoce a los peluditos que están esperando un nuevo hogar.</p>
        </div>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
            <?php foreach ($mascotas as $mascota): ?>
                <div class="col">
                    <div class="card h-100 border-0 shadow-sm card-mascota">
                        <img src="<?php echo $mascota['imagen']; ?>" class="card-img-top img-card-fit" alt="Foto de <?php echo $mascota['nombre']; ?>">
                        <div class="card-body d-flex flex-column">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <h5 class="card-title fw-bold text-dark mb-0"><?php echo $mascota['nombre']; ?></h5>
                                <span class="badge bg-success-subtle text-success fw-bold border border-success-subtle">
                                    <?php echo $mascota['especie']; ?>
                                </span>
                            </div>
                            <p class="text-muted small mb-2">
                                <i class="fa-solid fa-clock me-1 text-success"></i><?php echo $mascota['edad']; ?> | 
                                <i class="fa-solid fa-up-down-left-right me-1 text-success"></i><?php echo $mascota['tamano']; ?>
                            </p>
                            <p class="card-text text-secondary flex-grow-1 small"><?php echo $mascota['descripcion']; ?></p>
                            <a href="#contacto" class="btn btn-outline-success w-100 mt-3 fw-semibold">
                                <i class="fa-solid fa-envelope me-1"></i>Solicitar Adopción
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- Sección de Requisitos -->
    <section id="requisitos" class="bg-white py-5 my-5 border-top border-bottom">
        <div class="container">
            <div class="text-center mb-4">
                <h2 class="fw-bold text-success"><i class="fa-solid fa-list-check me-2"></i>Requisitos de Adopción</h2>
                <p class="text-muted">Nos aseguramos de que nuestras mascotas lleguen a entornos seguros y responsables.</p>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <ul class="list-group list-group-flush shadow-sm rounded-3">
                        <li class="list-group-item p-3"><i class="fa-solid fa-circle-check text-success me-3"></i> Ser mayor de 18 años y presentar identificación vigente (Cédula o DNI).</li>
                        <li class="list-group-item p-3"><i class="fa-solid fa-circle-check text-success me-3"></i> Comprobante de domicilio (planilla de servicios básicos reciente).</li>
                        <li class="list-group-item p-3"><i class="fa-solid fa-circle-check text-success me-3"></i> Compromiso firmado para vacunación, esterilización y controles veterinarios.</li>
                        <li class="list-group-item p-3"><i class="fa-solid fa-circle-check text-success me-3"></i> Disponer de un espacio seguro e idóneo dentro del hogar.</li>
                        <li class="list-group-item p-3"><i class="fa-solid fa-circle-check text-success me-3"></i> Entrevista previa y aceptación de visita de seguimiento.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección de Contacto -->
    <section id="contacto" class="container my-5">
        <div class="row g-4">
            <!-- Información de Contacto -->
            <div class="col-lg-5">
                <div class="bg-success text-white p-4 p-md-5 rounded-3 h-100 shadow-sm d-flex flex-column justify-content-between">
                    <div>
                        <h3 class="fw-bold mb-4">Ponte en contacto</h3>
                        <p class="mb-4">Si estás interesado en adoptar a alguna de nuestras mascotas o deseas colaborar, escríbenos o visítanos.</p>
                        
                        <div class="d-flex align-items-center mb-3">
                            <i class="fa-solid fa-location-dot fa-lg me-3"></i>
                            <span>Av. Principal y C. Secundaria, Ciudad</span>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <i class="fa-solid fa-phone fa-lg me-3"></i>
                            <span>+593 99 123 4567</span>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <i class="fa-solid fa-envelope fa-lg me-3"></i>
                            <span>contacto@refugiohuellitas.org</span>
                        </div>
                    </div>
                    <div class="mt-4 pt-3 border-top border-white-50">
                        <small><i class="fa-solid fa-clock me-1"></i> Horario de atención: Lunes a Sábado, 09:00 - 17:00</small>
                    </div>
                </div>
            </div>

            <!-- Formulario de Contacto -->
            <div class="col-lg-7">
                <div class="bg-white p-4 p-md-5 rounded-3 border shadow-sm">
                    <h4 class="fw-bold text-success mb-3">Formulario de Adopción / Consulta</h4>
                    <form onsubmit="event.preventDefault(); alert('¡Gracias por tu mensaje! Te contactaremos muy pronto.');">
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Nombre Completo</label>
                            <input type="text" class="form-control" placeholder="Ej. Juan Pérez" required>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-semibold">Correo Electrónico</label>
                                <input type="email" class="form-control" placeholder="correo@ejemplo.com" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-semibold">Mascota de Interés</label>
                                <input type="text" class="form-control" placeholder="Ej. Bella, Luna, Rufo...">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Mensaje o Comentarios</label>
                            <textarea class="form-control" rows="4" placeholder="Cuéntanos un poco sobre ti y el hogar que le ofrecerías a la mascota..." required></textarea>
                        </div>
                        <button type="submit" class="btn btn-success w-100 fw-bold py-2">
                            <i class="fa-solid fa-paper-plane me-2"></i>Enviar Solicitud
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Pie de página -->
    <footer class="bg-dark text-white text-center py-3">
        <div class="container">
            <small>&copy; <?php echo date('Y'); ?> Refugio Huellitas. Todos los derechos reservados.</small>
        </div>
    </footer>

    <!-- Bootstrap 5 JavaScript Bundle CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>