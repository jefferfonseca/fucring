<?php include_once 'header.php';?>

    <section id="inicio-donaciones">
        <div id="portada-donaciones">
            <h1 class="fs-1"><b>Solicitar ayuda</b></h1>
        </div>
    </section>

    <section id="donaciones">
        <div class="row d-flex justify-content-center">
            <div class="col-sm-12 col-md-8">
                <h1 class="text-center green-text "><b>¡Hola comunidad solidaria!</b></h1>

                <p>En estos tiempos difíciles, queremos extender nuestras manos y corazones a quienes más lo necesitan.
                    Si conoces a alguien que esté pasando por situaciones difíciles, ya sea económicas, de salud o
                    cualquier otra necesidad, te invitamos a compartir esa información con nosotros.</p>

                <p>Cada historia merece ser escuchada, cada persona merece apoyo. Juntos podemos hacer la diferencia.
                    Por favor, completa este sencillo formulario con los detalles de la persona que consideras que
                    necesita ayuda. Tu participación puede ser la luz que ilumine el camino de alguien más.</p>

                <p>La fuerza de nuestra comunidad radica en la unidad y en la capacidad de tender la mano a quienes más
                    lo necesitan. Si conoces a alguien que está atravesando dificultades, o si tú mismo necesitas ayuda,
                    estamos aquí para ofrecer nuestro respaldo.</p>

                <p>¡Únete a nosotros en este hermoso viaje de solidaridad y compasión! Juntos, somos más fuertes.</p>

                <p>¡Gracias por ser parte de esta cadena de amor y solidaridad! Cada pequeño gesto cuenta.</p>

                <h2 class="text-center">#ComunidadSolidaria #JuntosPorElBien</h2>
            </div>
        </div>
    </section>

    <section id="formas">
        <div class="row d-flex justify-content-center">
            <div class="col-sm-12 col-md-6 dona dona-verde">
                <h1 class="f-titulo text-amarillo">Donaciones Económicas</h1>
                <p>¡Haz la diferencia con una donación! Tu pequeño aporte económico tiene un gran impacto en vidas y
                    proyectos significativos. ¡Dona hoy para construir un mejor mañana!</p>
                <hr>
                <img src="assets/images/bancos/bancolombia.png" width="auto" height="50px">

                <h2 class="text-center text-amarillo">
                    Cuenta de Ahorros
                </h2>
                <h2>6061 264 1202</h2>
                <h2 class="text-center text-amarillo">
                    Ahorro a la mano
                </h2>
                <h2>0310 233 9306</h2>
                <h2 class="text-amarillo">
                    <b>Davivienda</b>
                </h2>
                <img src="assets/images/bancos/daviplata.png" width="200px" height="auto">
                <h2>310 233 9306</h2>
            </div>
            <div class="col-sm-12 col-md-6 dona">
                <h1 class="f-titulo text-verde">Nacidos para servir</h1>
                <p>Ayudanos a llevar ayuda ayuda a quienes más lo necestian. Si conoces a alguien en situación de
                    necesidad, por favor llena estos datos y llevaremos una luz de esperanza a quienes mas lo necesitan.
                </p>
                <form action="soli-ayuda.php" method="post">
                    <label for="nombre" class="form-label">Nombre Completo:</label>
                    <input class="form-control" name="nombre" placeholder="Nombre Completo">

                    <label for="direccion" class="form-label">Dirección:</label>
                    <input class="form-control" name="direccion" placeholder="Dirección">

                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <label for="barrio" class="form-label">Barrio:</label>
                            <input class="form-control" name="barrio" placeholder="Barrio">
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <label for="municipio" class="form-label">Municipio:</label>
                            <input class="form-control" name="municipio" placeholder="Municipio">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <label for="departamento" class="form-label">Departamento:</label>
                            <input class="form-control" name="departamento" placeholder="Departamento">
                        </div>

                        <div class="col-sm-12 col-md-6">
                            <label for="celular" class="form-label">Celular:</label>
                            <input class="form-control" name="celular" placeholder="Celular">
                        </div>
                    </div>
                    <label for="problema" class="form-label">Descripción de la Situación:</label>
                    <textarea class="form-control" name="problema" placeholder="¡Haz una breve description de la situación de necesidad!"></textarea>
                    <div class="d-grid gap-2">
                        <input type="submit" class="btn btn-success mt-3" value="ENVIAR"></input>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <h1 class="text-center"><b>Contactanos:</b> </h1>
    
    <div class="enlaces">
        <div  class="text-center redes-a">
            <a href=""><i class='bx bxl-facebook'></i></a>
            <a href=""><i class='bx bxl-instagram'></i></a>
            <a href=""><i class='bx bxl-youtube'></i></i></a>
        </div>
        <div class="redes-a">
          <div class="row">
            <div class="col-sm-12 col-md-4 text-center"> 
                <a href="tel:3102339306"> <i class='bx bxl-whatsapp'></i>(+57) 310 233 9306</a>
            </div>
            <div class="col-sm-12 col-md-4 text-center"> 
                <a href="tel:3102339306"> <i class='bx bxl-whatsapp'></i>(+57) 310 313 9854</a>
            </div>
            <div class="col-sm-12 col-md-4 text-center"> 
                <a href="mailto:fucringtunja@gmail.com"><i class='bx bxl-gmail'></i>fucringtunja@gmail.com</a>
            </div>
          </div>
        </div>
    </div>

    <h3 class="text-center"><b>Dirección</b></h3>
    <p class="text-center">Cra. 3B 16a- 22 | Patriotas
        Tunja, Boyaca, Colombia
    </p>

    <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1TTWEAZnf4a_ahn0_2SDdXC2qiIjvjls&ehbc=2E312F" width="100%" height="400px"></iframe>

<?php include_once 'footer.php';?>
