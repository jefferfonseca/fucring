<?php include_once('header.php');?>

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
                <h2>222 2222 2222</h2>
                <h2 class="text-center text-amarillo">
                    Ahorro a la mano
                </h2>
                <h2>0310 233 9306</h2>
                <h2 class="text-amarillo">
                    <b>Davivienda</b>
                </h2>
                <img src="assets/images/bancos/daviplata.png" width="200px" height="auto"> 
                <h2>310 233 9306 <br> 310 313 9854</h2>
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
<?php include_once('footer.php');?>
