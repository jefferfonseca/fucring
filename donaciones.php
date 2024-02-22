<?php include_once 'header.php';?>

    <section id="inicio-donaciones">
        <div id="portada-donaciones">
            <h1 class="fs-1"><b>Formas de Donaciona</b></h1>
        </div>
    </section>

    <section id="donaciones">
        <div class="row d-flex justify-content-center">
            <div class="col-sm-12 col-md-8">
                <h1 class="text-center green-text "><b>Donaciones</b></h1>

                <p>
                    ¡Únete a la causa y sé parte del cambio! Todos tenemos el poder de marcar la diferencia y contribuir
                    al bienestar de nuestro entorno. En nuestro compromiso por preservar el medio ambiente y la
                    naturaleza, contamos con la valiosa colaboración de individuos y empresas que comparten nuestra
                    visión.
                </p>
                <p>
                    Tu participación puede manifestarse de diversas formas: desde aportes económicos que respaldan
                    nuestras campañas y proyectos a lo largo y ancho del país, hasta la posibilidad de involucrarte
                    activamente como voluntario. Creemos firmemente que cada pequeño gesto cuenta y que juntos podemos
                    lograr grandes transformaciones.
                </p>
                <p>Si deseas sumarte a esta noble causa, puedes realizar tu contribución económica a través de nuestra
                    cuenta en Bancolombia. Además, exploramos otras formas creativas de apoyo, como la donación de
                    alimentos y la participación en programas de voluntariado.
                </p>

                <p>La invitación está abierta a todos aquellos que deseen ser parte de esta iniciativa. ¡Cada acción
                    cuenta y cada aporte, por pequeño que sea, suma un gran valor en la construcción de un futuro más
                    sostenible para todos!
                </p>
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
                <h2 class="white-text">6061 264 1202</h2>
               <br>
                <h2 class="text-center text-amarillo">
                    Ahorro a la mano
                </h2>
                <h2 class="white-text">310 233 9306</h2>
                <br>
                <h2 class="text-amarillo">
                    <b>Davivienda</b>
                </h2>
                <img src="assets/images/bancos/daviplata.png" width="200px" height="auto">
                <h2 class="white-text">310 233 9306</h2>
            </div>
            <div class="col-sm-12 col-md-6 dona">
                <h1 class="f-titulo text-verde">Nacidos para servir</h1>
                <p>Únete a nosotros como voluntario y sé parte del cambio positivo que queremos lograr. Tu tiempo y
                    dedicación pueden marcar la diferencia en la vida de aquellos que más lo necesitan. Conviértete en
                    un agente de transformación, compartiendo tu habilidad y amor con quienes buscan esperanza.
                    ¡Invierte tu tiempo para construir un mundo mejor y más solidario!
                </p>
                <form action="voluntariado.php" method="post">
                    <label for="nombre" class="form-label">Nombre Completo:</label>
                    <input class="form-control" name="nombre" placeholder="Nombre Completo">

                    <div class="row">
                        <div class="col-sm-12 col-md-4">
                            <label for="tipoDocumento" class="form-label">Tipo Documento:</label>
                            <select class="form-select" aria-label="Default select" name="tipoDocumento">
                                <option selected>Tipo de Documento:</option>
                                <option value="T.I.">T.I.</option>
                                <option value="C.C.">C.C.</option>
                                <option value="C.E.">C.E.</option>
                            </select>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <label for="documento" class="form-label">No. Documento:</label>
                            <input class="form-control" name="documento" placeholder="Número de Documento">
                        </div>

                        <div class="col-sm-12 col-md-4">
                            <label for="nacimiento" class="form-label">Fecha de Nacimiento:</label>
                            <input type="date" id="nacimiento" class="form-control" name="nacimiento"
                                min="1950-01-01" />
                        </div>
                    </div>

                    <label for="direccion" class="form-label">Dirección:</label>
                    <input class="form-control" name="direccion" placeholder="Dirección">

                    <div class="row">
                        <div class="col-sm-12 col-md-4">
                            <label for="barrio" class="form-label">Barrio:</label>
                            <input class="form-control" name="barrio" placeholder="Barrio">
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <label for="municipio" class="form-label">Municipio:</label>
                            <input class="form-control" name="municipio" placeholder="Municipio">
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <label for="departamento" class="form-label">Departamento:</label>
                            <input class="form-control" name="departamento" placeholder="Departamento">
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <label for="celular" class="form-label">Celular:</label>
                            <input class="form-control" name="celular" placeholder="Celular">
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <label for="email:" class="form-label">E-mail:</label>
                            <input class="form-control" name="email" placeholder="E-mail">
                        </div>
                    </div>
                    <label for="ocupacion" class="form-label">Ocupación:</label>
                    <input class="form-control" name="ocupacion" placeholder="Ocupación">

                    <div class="d-grid gap-2">
                        <input type="submit" class="btn btn-success mt-3" value="ENVIAR"></input>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <section id="politicas">
        <div class="row d-flex justify-content-center">

            <div class="col-6 text-justify">
                <h1 class="f-titulo text-amarillo text-center">Políticas de Donación</h1>
                <p>¡Haz la diferencia con una donación! Tu pequeño aporte económico tiene un gran impacto en vidas y
                    proyectos significativos. ¡Dona hoy para construir un mejor mañana!</p>
                <p>¡Queridos amigos y amigas de corazón generoso!
                </p>
                <p>
                    En la Fundación Cristiana por una Nueva Generación, estamos comprometidos con un propósito que nos
                    llena de orgullo y
                    satisfacción: llevar esperanza y cambiar vidas a través de nuestras políticas de donación.
                </p>
                <p>
                    Creemos firmemente en el poder transformador de la generosidad y la solidaridad. Cada donación que
                    recibimos es un rayo de luz que ilumina el camino de aquellos que más lo necesitan. Es un gesto de
                    amor y compasión que trasciende barreras y une corazones en un abrazo de esperanza.
                </p>
                <p>
                    Nuestras políticas de donación están guiadas por valores fundamentales como la transparencia, la
                    responsabilidad y el compromiso con el bienestar de nuestra comunidad. Nos esforzamos por garantizar
                    que cada recurso donado se utilice de manera efectiva y eficiente, llegando a donde más se necesita
                    y generando un impacto positivo real.
                </p>
                <p>
                    Cada donación, por pequeña que sea, es una semilla de cambio que plantamos juntos. Y como sabemos
                    que la unión hace la fuerza, invitamos a cada uno de ustedes a unirse a esta noble causa. Tu apoyo
                    puede marcar la diferencia entre la desesperación y la esperanza, entre la desigualdad y la
                    oportunidad.
                </p>
                <p>
                    Juntos, podemos construir un mundo más justo, inclusivo y solidario. Juntos, podemos hacer posible
                    lo imposible y dejar un legado de amor y bondad para las generaciones futuras.
                </p>
                <p>
                    Así que te invitamos a ser parte de esta hermosa historia de transformación. Cada donación cuenta,
                    cada gesto de generosidad suma. ¡Únete a nosotros y juntos hagamos del mundo un lugar mejor para
                    todos!
                </p>
                <p>
                    Con gratitud y esperanza.</p>
                </p>
                <h5><b>Nelson y Lucia Fonseca.</b></h5>
                <h6><b>Presindentes FUCRING</b></h6>
                <br>
                <h2 class="text-center">#ComunidadSolidaria #JuntosPorElBien</h2>
                <br>
                <center>
                    <a href="assets/politica-donaciones.pdf" target="_blank">
                        <img src="assets/images/pdf.svg" width="150px" height="auto" alt="Politicas de Donación">
                        Politicas de Donación
                    </a>
                </center>
            </div>

        </div>
    </section>

<?php include_once 'footer.php';?>
