<?php include_once 'includes/templates/header.php'; ?>
    <section class="seccion contenedor">
        <h2>La mejor conferencia de diseño web en español</h2>
        <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolor, asperiores? Qui maiores nisi dolor magni omnis aperiam? Sit, quas magni eligendi ex suscipit, dolorem quidem necessitatibus, voluptates labore nihil non? Lorem ipsum dolor, sit amet consectetur
            adipisicing elit. Neque a molestias, accusamus labore quidem distinctio amet architecto aperiam veritatis earum suscipit, at perferendis, id magnam rerum! Suscipit quas nostrum quod!
        </p>
    </section>

    <section class="programa">
        <div class="contenedor-video">
            <video autoplay loop poster="img/bg-talleres.jpg">
                <source src="video/video.mp4" type="video/mp4">
                <source src="video/video.webm" type="video/webm">
                <source src="video/video.ogd" type="video/ogd"> 
            </video>
        </div>
        <!--contenedor video-->

        <div class="contenido-programa">
            <div class="contenedor seccion">
                <div class="programa-evento">
                    <h2>Programa del evento</h2>
                    <nav class="menu-programa">
                        <a href="#talleres"><i class="fas fa-code" aria-hidden="true"></i>Talleres</a>
                        <a href="#conferencias"><i class="fas fa-comment" aria-hidden="true"></i>Conferencias</a>
                        <a href="#seminarios"><i class="fas fa-university" aria-hidden="true"></i>Seminarios</a>
                    </nav>

                    <div id="talleres" class="info-curso ocultar clearfix">
                        <div class="detalle-evento">
                            <h3>HTML5, CSS3 y Javascript</h3>
                            <p><i class="fas fa-clock" aria-hidden="true"></i>16:00 hrs</p>
                            <p><i class="fas fa-calendar" aria-hidden="true"></i>10 de Dic</p>
                            <p><i class="fas fa-user" aria-hidden="true"></i>Juan Pablo de la Torre Valdez</p>
                        </div>
                        <div class="detalle-evento">
                            <h3>Responsive Web Design</h3>
                            <p><i class="fas fa-clock" aria-hidden="true"></i>20:00 hrs</p>
                            <p><i class="fas fa-calendar" aria-hidden="true"></i>10 de Dic</p>
                            <p><i class="fas fa-user" aria-hidden="true"></i>Juan Pablo de la Torre Valdez</p>
                        </div>

                        <a href="#" class="button float-right">Ver todos </a>
                    </div>
                    <!--Talleres-->

                    <div id="conferencias" class="info-curso ocultar clearfix">
                        <div class="detalle-evento">
                            <h3>Como ser freelancer</h3>
                            <p><i class="fas fa-clock" aria-hidden="true"></i>10:00 hrs</p>
                            <p><i class="fas fa-calendar" aria-hidden="true"></i>10 de Dic</p>
                            <p><i class="fas fa-user" aria-hidden="true"></i>Gregorio Sanchéz</p>
                        </div>
                        <div class="detalle-evento">
                            <h3>Tecnologías del futuro</h3>
                            <p><i class="fas fa-clock" aria-hidden="true"></i>17:00 hrs</p>
                            <p><i class="fas fa-calendar" aria-hidden="true"></i>10 de Dic</p>
                            <p><i class="fas fa-user" aria-hidden="true"></i>Susan Sanchéz</p>
                        </div>

                        <a href="#" class="button float-right">Ver todos </a>
                    </div>
                    <!--Conferencias-->

                    <div id="seminarios" class="info-curso ocultar clearfix">
                        <div class="detalle-evento">
                            <h3>Diseño UI/UX mobile</h3>
                            <p><i class="fas fa-clock" aria-hidden="true"></i>16:00 hrs</p>
                            <p><i class="fas fa-calendar" aria-hidden="true"></i>11 de Dic</p>
                            <p><i class="fas fa-user" aria-hidden="true"></i>Harold García</p>
                        </div>
                        <div class="detalle-evento">
                            <h3>Aprende a programar en una mañana</h3>
                            <p><i class="fas fa-clock" aria-hidden="true"></i>10:00 hrs</p>
                            <p><i class="fas fa-calendar" aria-hidden="true"></i>11 de Dic</p>
                            <p><i class="fas fa-user" aria-hidden="true"></i>Susana Rivera</p>
                        </div>

                        <a href="#" class="button float-right">Ver todos </a>
                    </div>
                    <!--Seminarios-->

                </div>
                <!--Programa evento-->
            </div>
            <!--contenedor-->
        </div>
        <!---Contenido programa-->
    </section>
    <!--Programa-->

    <section class="contenedor seccion invitados">
        <h2>Nuestros Invitados</h2>
        <ul class="lista-invitados clearfix">
            <li>
                <div class="invitado">
                    <img src="img/invitado1.jpg" alt="invitado">
                    <p>Rafael Bautista</p>
                </div>
            </li>
            <li>
                <div class="invitado">
                    <img src="img/invitado2.jpg" alt="invitado">
                    <p>Shari Herrera</p>
                </div>
            </li>
            <li>
                <div class="invitado">
                    <img src="img/invitado3.jpg" alt="invitado">
                    <p>Gregorio Sanchez</p>
                </div>
            </li>
            <li>
                <div class="invitado">
                    <img src="img/invitado4.jpg" alt="invitado">
                    <p>Susana Rivera</p>
                </div>
            </li>
            <li>
                <div class="invitado">
                    <img src="img/invitado5.jpg" alt="invitado">
                    <p>Harold Garcia</p>
                </div>
            </li>
            <li>
                <div class="invitado">
                    <img src="img/invitado6.jpg" alt="invitado">
                    <p>Susan Sanchez</p>
                </div>
            </li>
        </ul>
    </section>

    <div class="contador parallax">
        <div class="contenedor">
            <ul class="resumen-evento clearfix">
                <li>
                    <p class="numero"></p> Invitados</li>
                <li>
                    <p class="numero"></p>Talleres</li>
                <li>
                    <p class="numero"></p> Dias</li>
                <li>
                    <p class="numero"></p> Conferencias</li>
            </ul>
        </div>
    </div>

    <seccion class="precios seccion">
        <h2>Precios</h2>
        <div class="contenedor">
            <ul class="lista-precios clearfix">
                <li>
                    <div class="tabla-precio">
                        <h3>Pase por dia</h3>
                        <p class="numero">$30</p>
                        <ul>
                            <li><i class="fas fa-check check"></i>Bocadillos gratis</li>
                            <li><i class="fas fa-check check"></i>Todas las conferencias</li>
                            <li><i class="fas fa-check check"></i>Todos los talleres</li>
                        </ul>
                        <a href="#" class="button hollow">Comprar</a>
                    </div>
                </li>

                <li>
                    <div class="tabla-precio">
                        <h3>Todos los dias</h3>
                        <p class="numero">$50</p>
                        <ul>
                            <li><i class="fas fa-check check"></i>Bocadillos gratis</li>
                            <li><i class="fas fa-check check"></i>Todas las conferencias</li>
                            <li><i class="fas fa-check check"></i>Todos los talleres</li>
                        </ul>
                        <a href="#" class="button">Comprar</a>
                    </div>
                </li>

                <li>
                    <div class="tabla-precio">
                        <h3>Pase por 2 dias</h3>
                        <p class="numero">$45</p>
                        <ul>

                            <li><i class="fas fa-check check"></i>Bocadillos gratis</li>
                            <li><i class="fas fa-check check"></i>Todas las conferencias</li>
                            <li><i class="fas fa-check check"></i>Todos los talleres</li>
                        </ul>
                        <a href="#" class="button hollow">Comprar</a>
                    </div>
                </li>
            </ul>
        </div>
    </seccion>

    <div class="mapa" id="mapa"></div>

    <section class="seccion">
        <h2>Testimoniales</h2>
        <div class="testimoniales contenedor clearfix">
            <div class="testimonial">
                <blockquote>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe dolore sed dolorem atque aperiam eligendi? Optio mollitia, necessitatibus laborum incidunt rerum deleniti iure quasi praesentium natus cumque. Dicta, voluptates placeat.
                    </p>
                    <footer class="info-testimonial clearfix">
                        <img src="img/testimonial.jpg" alt="imagen testimonial">
                        <cite>Oswaldo Aponte Escobedo <span>Diseañdor en @Prisma</span></cite>
                    </footer>
                </blockquote>
            </div>
            <div class="testimonial">
                <blockquote>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe dolore sed dolorem atque aperiam eligendi? Optio mollitia, necessitatibus laborum incidunt rerum deleniti iure quasi praesentium natus cumque. Dicta, voluptates placeat.
                    </p>
                    <footer class="info-testimonial clearfix">
                        <img src="img/testimonial.jpg" alt="imagen testimonial">
                        <cite>Oswaldo Aponte Escobedo <span>Diseañdor en @Prisma</span></cite>
                    </footer>
                </blockquote>
            </div>
            <div class="testimonial">
                <blockquote>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe dolore sed dolorem atque aperiam eligendi? Optio mollitia, necessitatibus laborum incidunt rerum deleniti iure quasi praesentium natus cumque. Dicta, voluptates placeat.
                    </p>
                    <footer class="info-testimonial clearfix">
                        <img src="img/testimonial.jpg" alt="imagen testimonial">
                        <cite>Oswaldo Aponte Escobedo <span>Diseañdor en @Prisma</span></cite>
                    </footer>
                </blockquote>
            </div>
        </div>
    </section>

    <div class="newsletter parallax">
        <div class="contenido contenedor">
            <p>Registrate al newsletter</p>
            <h3>gdlwebcamp</h3>
            <a href="#" class="button transparente">Registro</a>
        </div>
    </div>

    <section class="seccion">
        <h2>Faltan</h2>
        <div class="cuenta-regresiva contenedor">
            <ul class="clearfix">
                <li>
                    <p id="dias" class="numero"></p>dias</li>
                <li>
                    <p id="horas" class="numero"></p>horas</li>
                <li>
                    <p id="minutos" class="numero"></p>minutos</li>
                <li>
                    <p id="segundos" class="numero"></p>segundos</li>

            </ul>
        </div>
    </section>
<?php include_once 'includes/templates/footer.php'; ?>

