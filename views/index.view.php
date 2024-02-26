<div id="carouselExampleIndicators" class="carousel slide">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>

    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="assets/img/imgCarrusel1.jpg" class="d-block w-100 img-fluid imgCarrusel" alt="...">
        </div>
        <div class="carousel-item">
            <img src="assets/img/imgCarrusel2.jpg" class="d-block w-100 imgCarrusel img-fluid" alt="...">
        </div>

    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<div>
    <h1>Vamos en la mitad de la página soldado</h1>
</div>
<div class="card-group">
    <div class="card">
        <img src="assets/img/imgCarrusel1.jpg" class="card-img-top imgCard" alt="...">
        <div class="card-body">
            <h5 class="card-title titulosCard">Soporte Técnico</h5>
            <p class="card-text parrCard">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt est, culpa officiis expedita, ducimus cupiditate voluptate iste quaerat incidunt quia delectus quisquam explicabo perspiciatis quidem.</p>
        </div>
        <div class="card-footer">
            <input type="button" value="Ver Más" onclick="return soporte()">
        </div>
    </div>
    <div class="card">
        <img src="assets/img/imgCarrusel2.jpg" class="card-img-top imgCard" alt="...">
        <div class="card-body">
            <h5 class="card-title titulosCard">Servicio al cliente</h5>
            <p class="card-text parrCard">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Temporibus dicta aliquid explicabo officiis illum nesciunt fugiat quia molestias alias. Eius!</p>
        </div>
        <div class="card-footer">
            <input type="button" value="Ver Más" onclick="return servicio()">
        </div>
    </div>
    <div class="card">
        <img src="assets/img/imgCarrusel1.jpg" class="card-img-top imgCard" alt="...">
        <div class="card-body">
            <h5 class="card-title titulosCard">Contacto</h5>
            <p class="card-text parrCard">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos inventore eius repudiandae hic ipsa placeat, laudantium illum totam voluptates quibusdam blanditiis nemo vel qui sequi?</p>
        </div>
        <div class="card-footer">
            <input type="button" value="Ver Más" onclick="return contacto()">
        </div>
    </div>
</div>
<form action="" method="POST">
    <h1>Formulario de Preguntas</h1>
    <div class="mb-3">
        <label class="form-label">
            <h1>Email:</h1>
        </label>
        <input type="email" class="form-control inputform" placeholder="Escriba su email" required>
    </div>

    <div class="mb-3">
        <label class="form-label">
            <h1>Escriba su Pregunta</h1>
        </label>
        <input type="text" class="form-control inputform" placeholder="Escriba su pregunta" required>
    </div>


    <button type="submit" class="btn btn-primary form-control inputSubmit">Enviar Pregunta</button>
</form>