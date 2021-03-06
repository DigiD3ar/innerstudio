{{-- Extendida del layout de front --}}
@extends('layouts.front')

@push('style')
    {{-- Aqui van estilos de esta vista --}}

    <link rel="stylesheet" href="{{asset('css/terminos.css')}}">
@endpush

@section('contenido')
    <section class="terminos">
        <div class="container contenedor">
            <div class="terminos-header">
                <div class="header"> 
                    <img src="{{asset('images/decoraciones/terminosHeader.jpg')}}" alt="">
                    <div class="blog-cards" id="ja">
                        <h2 id="faqs">FAQS</h2>
                        <h2 id="terminoss">Términos y Condiciones</h2>
                        <h2 id="pprivacidad">Políticas de Privacidad</h2>   
                    </div>
                </div>
            </div>
            <!-- /.terminos-header -->
            <div class="terminos-tabs p-4">
                    <ul class="nav nav-pills mb-3 justify-content-between" id="pills-tab" role="tablist justify-content-center">
                        <li class="nav-item">
                            <a class="nav-linkdecoration active" id="pills-faqs-tab" data-toggle="pill" href="#pills-faqs" onclick="aler('faqs')" role="tab" aria-controls="pills-faqs" aria-selected="true">FAQS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-linkdecoration" id="pills-terminosycondiciones-tab" data-toggle="pill" href="#pills-terminosycondiciones" onclick="aler('TerminosyCondiciones')" role="tab" aria-controls="pills-terminosycondiciones" aria-selected="false">Términos y Condiciones</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-linkdecoration" id="pills-privacidad-tab" data-toggle="pill" href="#pills-privacidad" role="tab" aria-controls="pills-privacidad" aria-selected="false" onclick="aler('PoliticasDePrivacidad')">Políticas de Privacidad</a>
                        </li>
                    </ul>

                    <div class="tab-content" id="pills-tabContent">
                        
                        <div class="tab-pane fade show active" id="pills-faqs" role="tabpanel" aria-labelledby="pills-faqs-tab">
                          <div class="faqs container">
                            <div class="row justify-content-center">
                                    <div class="faqs-primera-visita mt-5 col-12 col-sm-12 col-md-10 col-lg-8 col-xl-8 p-0">
                                            <h2>PRIMERA VISITA</h2>
                                            <div class="mt-3">
                                                <h3>¿EN QUE CONSISITE LA TECNICA DE BARRE?</h3>
                                                <p>
                                                Barre es un ejercicio que combina las practicas del ballet, pilates y yoga, por lo tanto encontraras ejercicios en barra, en un mat, y en el piso.
                                                La idea principal es que encuentres tu balance entre mente y cuerpo a través de ejercicios isométricos que son pequeñas repeticiones de movimientos específicos
                                                y el mantenimiento de esta posición por varios segundos para que el músculo se contraiga y se fortalezca. El éxito de este ejercicio es al mismo tiempo que vas quemando grasa vas fortaleciendo tus músculos.
                                                </p>
                                            </div>
                                            <div  class="mt-4">
                                                <h3>¿TENGO QUE HACER UN PERFIL SI SOLO VOY A TOMAR UNA CLASE?</h3>
                                                <p>
                                                Si. Es necesario que hagas un perfil que incluye nuestras políticas y condiciones.
                                                Esto solo toma un minuto y te asegura que puedas reservar un lugar en la clase.
                                                </p>
                                            </div>
                                            <div class="mt-4">
                                                <h3>¿NECESITO LLEVAR ALGO A LA CLASE?</h3>
                                                <p>
                                                No. No necesitas traer nada, nosotros te damos todo lo que necesitas. 
                                                </p>
                                            </div>
                                            <div class="mt-4">
                                                <h3>¿COMO DEBO IR VESTIDA?</h3>
                                                <p> 
                                                    La clase es sin zapatos (calcetines antiadherentes opcional) y recomendamos usar ropa cómoda de ejercicio.
                                                </p>
                                            </div>
                                            <div class="mt-4">
                                                <h3>SOY PRINCIPIANTE, ¿PUEDO TOMAR CUALQUIER CLASE?</h3>
                                                <p>
                                                Si, claro! No necesitas tener experiencia previa para venir a nuestras clases. 
                                                Tu maestra proporcionará opciones/variaciones durante la clase para todos los niveles.
                                                </p>
                                            </div>
                                            <div class="mt-4">
                                                <h3>¿CUANTO DURA UNA CLASE?</h3>
                                                <p>
                                                    Aprox. 55 min
                                                </p>
                                            </div>
                                    </div>
                                    <div class="faqs-segunda-visita mt-5  col-12 col-sm-12 col-md-10 col-lg-8 col-xl-8  p-0">
                                            <h2 class="h2">RESERVAR UNA CLASE</h2>
                                            <div class="col-12 col-sm-12 col-md-10 col-lg-8 col-xl-8 mb-1 p-0  mt-3">
                                                <h3>¿CÓMO PUEDO RESERVAR?</h3>
                                                <p>
                                                    Puedes reservar directamente en nuestro estudio o más recomendable a trevés de nuestra pagina web al crear tu perfil. 
                                                </p>
                                            </div>
                                            <div class="mt-4 col-12 col-sm-12 col-md-10 col-lg-10 col-xl-10 mb-1 p-0">
                                                <h3>¿PUEDO PAGAR MI CLASE EN EL ESTUDIO O TENGO QUE PAGAR ONLINE?</h3>
                                                <p>
                                                Puedes hacer ambos. Es mejor para ti reservar en línea ya que te garantizamos un lugar en la clase, pero siéntete libre de pagar en el estudio si prefieres.
                                                </p>
                                            </div>
                                            <div class="mt-4 col-12 col-sm-12 col-md-10 col-lg-10 col-xl-10 mb-1 p-0">
                                                <h3>¿TENGO QUE RESERVAR?</h3>
                                                <p>
                                                Definitivamente recomendamos reservar clases en línea ya que algunas de nuestras clases se llenan rápidamente. 
                                                </p>
                                            </div>
                                            <div class="mt-4 col-12 col-sm-12 col-md-10 col-lg-10 col-xl-10 mb-1 p-0">
                                                <h3>¿CUÁL ES LA POLITICA DE CANCELACIÓN?</h3>
                                                <p>
                                                    Contamos con una política de cancelación de 8 horas previas a la clase, sin ningún cargo o penalidad para el usuario.
                                                    Las clases canceladas serán liberadas para dejar que otras personas puedan inscribirse y disfrutar de su clase. 
                                                </p>
                                                <p>
                                                    Si no te presentas o no cancelas dentro de las ocho horas anteriores a la hora de inicio de la clase,
                                                    se le cobrará por la clase ya que significa que otro estudiante no pudo asisitir.
                                                </p>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-10 col-lg-10 col-xl-10 mb-1 p-0">
                                                <h3>¿EXISTEN PAQUETES?</h3>
                                                <p>
                                                Si contamos con varios paquetes para ajustarnos a tus necesidades que son los siguientes:
                                                </p>
                                            </div>
                                            {{-- Compra de clases --}}
                                    </div>
                                    
                                    
                                    <div class="planes-clases container col-12 col-sm-12 col-md-10 col-lg-8 col-xl-8">                    
                                        
                                        <div class="row mt-4 justify-content-center">
                                            @foreach ($paquetes as $temp)
                                                <div class="cards col-12 col-sm-6 col-md-4 col-lg-4 col-xl-2 mb-1 p-0">
                                                    @if (Auth::check())
                                                        <a href="{{ route('comprar', ["id"  => $temp['id_package']]) }}">
                                                    @else
                                                        <a data-toggle="modal" data-target="#mdLogin" class="pointer">
                                                    @endif
                                                        <div class="card text-center">
                                                            <div class="card-body">
                                                                <h2>{{number_format($temp['no_class'])}}</h2>
                                                                <p>{{$temp['title']}}</p>
                                                                <hr>
                                                                <h4>${{number_format($temp['price'])}}</h4>
                                                                <hr>
                                                                <small>Vigencia: {{$temp['duration']}} {{($temp['duration'] == 1) ? "día" : "dias"}}</small>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    


                                    <div class="faqs-segunda-visita col-12 col-sm-12 col-md-10 col-lg-8 col-xl-8  p-0">

                                            <div class="mt-4 col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mb-1 p-0">
                                                <h3>¿EXISTEN VESTIDORES Y REGADERAS?</h3>
                                                <p>
                                                Si, contamos con baños, regaderas y vestidores. 
                                                </p>
                                            </div>
                                            <div class="mt-4 col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mb-1 p-0">
                                                <h3>¿QUÉ SUCEDE SI LLEGO TARDE?</h3>
                                                <p>
                                                Entendemos que a veces es complicado llegar a tiempo, pero tenemos una política que después de 10 minutos de haber comenzado la clase ya no se admite la entrada.
                                                Esto es para cuidar a las clientas que toman la clase evitando distracciones y puedan concentrarse al máximo en sus ejercicios.  
                                                </p>
                                            </div>
                                            <div class="mt-4 col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mb-1 p-0">
                                                <h3>¿SI ESTOY EMBARAZADA PUEDO TOMAR LA CLASE?</h3>
                                                <p>
                                                ¡Claro! Barre es el ejercicio perfecto para mujeres embrazadas ya que es de bajo impacto, es una manera ideal de recuperar estabilidad,
                                                    flexibilidad y reafirmar los músculos sin lastimarse.
                                                Para tener un embarazo saludable beneficiándote a ti y a tu bebé. 
                                                </p>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="terminosycondiciones tab-pane fade" id="pills-terminosycondiciones" role="tabpanel" aria-labelledby="pills-terminosycondiciones-tab">
                            <div class="container mt-5">
                                <div class="row justify-content-center">
                                    <div class="col-12 col-sm-12 col-md-10 col-lg-8 col-xl-8 mb-1 p-0">
                                        <h3 style="color: #ec7a4f; font-size: 18px;">INFORMACIÓN GENERAL</h3>
                                        <p>Este sitio web es operado por barrefit peninsular S.A. de C.V.. En todo el sitio, los términos “nosotros”, “nos” y “nuestro” se refieren a barrefit peninsular S.A. de C.V.. barrefit peninsular S.A. de C.V. ofrece este sitio web, incluyendo toda la información, herramientas y servicios disponibles para ti en este sitio, el usuario, está condicionado a la aceptación de todos los términos, condiciones, políticas y notificaciones aquí establecidos.</p>
                                        <p>Al visitar nuestro sitio y/o comprar algo de nosotros, participas en nuestro “Servicio” y aceptas los siguientes términos y condiciones (“Términos de Servicio”, “Términos”), incluidos todos los términos y condiciones adicionales y las políticas a las que se hace referencia en el pre-sente documento y/o disponible a través de hipervínculos. Estas Condiciones de Servicio se aplican a todos los usuarios del sitio, incluyendo si limitación a usuarios que sean navegadores, proveedores, clientes, comerciantes, y/o colaboradores de contenido.</p>
                                        <p>Por favor, lee estos Términos de Servicio cuidadosamente antes de acceder o utilizar nuestro sitio web. Al acceder o utilizar cualquier parte del sitio, estás aceptando los Términos de Servicio. Si no estás de acuerdo con todos los términos y condiciones de este acuerdo, entonces no deberías acceder a la página web o usar cualquiera de los servicios. Si las Términos de Servicio son considerados una oferta, la aceptación está expresamente limitada a estos Términos de Servicio.</p>
                                        <p>Cualquier función nueva o herramienta que se añadan a la tienda actual, también estarán sujetas a los Términos de Servicio. Puedes revisar la versión actualizada de los Términos de Servicio, en cualquier momento en esta página. Nos reservamos el derecho de actualizar, cambiar o reemplazar cualquier parte de los Términos de Servicio mediante la publicación de actualizaciones y/o cambios en nuestro sitio web. Es tu responsabilidad chequear esta página periódicamente para verificar cambios. Tu uso continuo o el acceso al sitio web después de la publicación de cualquier cambio constituye la aceptación de dichos cambios.</p>
                                        <h3 style="color: #ec7a4f; font-size: 18px;">SECCIÓN 1 - TÉRMINOS DE LA TIENDA EN LÍNEA</h3>
                                        <p>Al utilizar este sitio, declaras que tienes al menos la mayoría de edad en tu estado o provincia de residencia, o que tienes la mayoría de edad en tu estado o provincia de residencia y que nos has dado tu consentimiento para permitir que cualquiera de tus dependientes menores use este sitio.</p>
                                        <p>No puedes usar nuestros productos con ningún propósito ilegal o no autorizado tampoco puedes, en el uso del Servicio, violar cualquier ley en tu jurisdicción (incluyendo pero no limitado a las leyes de derecho de autor).</p>
                                        <p>No debes transmitir gusanos, virus o cualquier código de naturaleza destructiva.</p>
                                        <p>El incumplimiento o violación de cualquiera de estos Términos darán lugar al cese inmediato de tus Servicios.</p>
                                        <h3 style="color: #ec7a4f; font-size: 18px;">SECCIÓN 2 - CONDICIONES GENERALES</h3>
                                        <p>Nos reservamos el derecho de rechazar la prestación de servicio a cualquier persona, por cualquier motivo y en cualquier momento.</p>
                                        <p>Entiendes que tu contenido (sin incluir la información de tu tarjeta de crédito), puede ser transferida sin encriptar e involucrar (a) transmisiones a través de varias redes; y (b) cambios para ajustarse o adaptarse a los requisitos técnicos de conexión de redes o dispositivos. La información de tarjetas de crédito está siempre encriptada durante la transferencia a través de las redes.</p>
                                        <p>Estás de acuerdo con no reproducir, duplicar, copiar, vender, revender o explotar cualquier parte del Servicio, uso del Servicio, o acceso al Servicio o cualquier contacto en el sitio web a través del cual se presta el servicio, sin el expreso permiso por escrito de nuestra parte.</p>
                                        <p>Los títulos utilizados en este acuerdo se incluyen solo por conveniencia y no limita o afecta a estos Términos.</p>
                                        <h3 style="color: #ec7a4f; font-size: 18px;">SECCIÓN 3 - EXACTITUD, EXHAUSTVIDAD Y ACTUALIDAD DE LA INFORMACIÓN</h3>
                                        <p>No nos hacemos responsables si la información disponible en este sitio no es exacta, completa o actual.  El material en este sitio es provisto solo para información general y no debe confiarse en ella o utilizarse como la única base para la toma de decisiones sin consultar primeramente, información más precisa, completa u oportuna.  Cualquier dependencia en el materia de este sitio es bajo su propio riesgo.</p>
                                        <p>Este sitio puede contener cierta información histórica.  La información histórica, no es necesariamente actual y es provista únicamente para tu referencia.  Nos reservamos el derecho de modificar los contenidos de este sitio en cualquier momento, pero no tenemos obligación de actualizar cualquier información en nuestro sitio.  Aceptas que es tu responsabilidad de monitorear los cambios en nuestro sitio.</p>
                                        <h3 style="color: #ec7a4f; font-size: 18px;">SECTION 4 - MODIFICACIONES AL SERVICIO Y PRECIOS</h3>
                                        <p>Los precios de nuestros productos están sujetos a cambio sin aviso.</p>
                                        <p>Nos reservamos el derecho de modificar o discontinuar el Servicio (o cualquier parte del contenido) en cualquier momento sin aviso previo.</p>
                                        <p>No seremos responsables ante ti o alguna tercera parte por cualquier modificación, cambio de precio, suspensión o discontinuidad del Servicio.</p>
                                        <h3 style="color: #ec7a4f; font-size: 18px;">SECCIÓN 5 - PRODUCTOS O SERVICIOS (si aplicable)</h3>
                                        <p>Ciertos productos o servicios pueden estar disponibles exclusivamente en línea a través del sitio web. Estos productos o servicios pueden tener cantidades limitadas y estar sujetas a devolución o cambio de acuerdo a nuestra política de cancelación solamente.</p>
                                        <p>Hemos hecho el esfuerzo de mostrar los colores y las imágenes de nuestros productos, en la tienda, con la mayor precisión de colores posible.  No podemos garantizar que el monitor de tu computadora muestre los colores de manera exacta.</p>
                                        <p>Nos reservamos el derecho, pero no estamos obligados, para limitar las ventas de nuestros productos o servicios a cualquier persona, región geográfica o jurisdicción.  Podemos ejercer este derecho basados en cada caso.  Nos reservamos el derecho de limitar las cantidades de los productos o servicios que ofrecemos.  Todas las descripciones de productos o precios de los productos están sujetos a cambios en cualquier momento sin previo aviso, a nuestra sola discreción.  Nos reservamos el derecho de discontinuar cualquier producto en cualquier momento.  Cualquier oferta de producto o servicio hecho en este sitio es nulo donde esté prohibido.</p>
                                        <p>No garantizamos que la calidad de los productos, servicios, información u otro material comprado u obtenido por ti  cumpla con tus expectativas, o que cualquier error en el Servicio será corregido.</p>
                                        <h3 style="color: #ec7a4f; font-size: 18px;">SECCIÓN 6 - EXACTITUD DE FACTURACIÓN E INFORMACIÓN DE CUENTA</h3>
                                        <p>Nos reservamos el derecho de rechazar cualquier pedido que realice con nosotros. Podemos, a nuestra discreción, limitar o cancelar las cantidades compradas por persona, por hogar o por pedido. Estas restricciones pueden incluir pedidos realizados por o bajo la misma cuenta de cliente, la misma tarjeta de crédito, y/o pedidos que utilizan la misma facturación y/o dirección de envío.</p>
                                        <p>En el caso de que hagamos un cambio o cancelemos una orden, podemos intentar notificarte poniéndonos en contacto vía correo electrónico y/o dirección de facturación / número de teléfono proporcionado en el momento que se hizo pedido. Nos reservamos el derecho de limitar o prohibir las órdenes que, a nuestro juicio, parecen ser colocado por los concesionarios, revendedores o distribuidores.</p>
                                        <p>Te comprometes a proporcionar información actual, completa y precisa de la compra y cuenta utilizada para todas las compras realizadas en nuestra tienda.  Te comprometes a actualizar rápidamente tu cuenta y otra información, incluyendo tu dirección de correo electrónico y números de tarjetas de crédito y fechas de vencimiento, para que podamos completar tus transacciones y contactarte cuando sea necesario.</p>

                                        <h3 style="color: #ec7a4f; font-size: 18px;">SECCIÓN 7 - HERRAMIENTAS OPCIONALES</h3>
                                        <p>Es posible que te proporcionemos acceso a herramientas de terceros a los cuales no monitoreamos y sobre los que no tenemos control ni entrada.</p>
                                        <p>Reconoces y aceptas que proporcionamos acceso a este tipo de herramientas "tal cual" y "según disponibilidad" sin garantías, representaciones o condiciones de ningún tipo y sin ningún respaldo.  No tendremos responsabilidad alguna derivada de o relacionada con tu uso de herramientas proporcionadas por terceras partes.</p>
                                        <p>Cualquier uso que hagas de las herramientas opcionales que se ofrecen a través del sitio bajo tu propio riesgo y discreción y debes asegurarte de estar familiarizado y aprobar los términos bajo los cuales estas herramientas son proporcionadas por el o los proveedores de terceros.</p>
                                        <p>También es posible que, en el futuro, te ofrezcamos nuevos servicios y/o características a través del sitio web (incluyendo el lanzamiento de nuevas herramientas y recursos).  Estas nuevas características y/o servicios también estarán sujetos a estos Términos de Servicio.</p>

                                        <h3 style="color: #ec7a4f; font-size: 18px;">SECCIÓN 8 - ENLACES DE TERCERAS PARTES</h3>
                                        <p>Cierto contenido, productos y servicios disponibles vía nuestro Servicio puede incluir material de terceras partes.</p>
                                        <p>Enlaces de terceras partes en este sitio pueden direccionarte a sitios web de terceras partes que no están afiliadas con nosotros.  No nos responsabilizamos  de examinar o evaluar el contenido o exactitud y no garantizamos ni tendremos ninguna obligación o responsabilidad por cualquier material de terceros o sitios web, o de cualquier material, productos o servicios de terceros.</p>
                                        <p>No nos hacemos responsables de cualquier daño o daños relacionados con la adquisición o utilización de bienes, servicios, recursos, contenidos, o cualquier otra transacción realizadas en conexión con sitios web de terceros.  Por favor revisa cuidadosamente las políticas y prácticas de terceros y asegúrate de entenderlas antes de participar en cualquier transacción.  Quejas, reclamos, inquietudes o preguntas con respecto a productos de terceros deben ser dirigidas a la tercera parte.</p>

                                        <h3 style="color: #ec7a4f; font-size: 18px;">SECCIÓN 9 - COMENTARIOS DE USUARIO, CAPTACIÓN Y OTROS ENVÍOS</h3>
                                        <p>Si, a pedido nuestro, envías ciertas presentaciones específicas (por ejemplo la participación en concursos) o sin un pedido de nuestra parte envías ideas creativas, sugerencias, proposiciones, planes, u otros materiales, ya sea en línea, por email, por correo postal, o de otra manera (colectivamente, 'comentarios'), aceptas que podamos, en cualquier momento, sin restricción, editar, copiar, publicar, distribuir, traducir o utilizar por cualquier medio comentarios que nos hayas enviado. No tenemos ni tendremos ninguna obligación (1) de mantener ningún comentario confidencialmente; (2) de pagar compensación por comentarios; o (3) de responder a comentarios.</p>
                                        <p>Nosotros podemos, pero no tenemos obligación de, monitorear, editar o remover contenido que consideremos sea ilegítimo, ofensivo, amenazante, calumnioso, difamatorio, pornográfico, obsceno u objetable o viole la propiedad intelectual de cualquiera de las partes o los Términos de Servicio.</p>
                                        <p>Aceptas que tus comentarios no violarán los derechos de terceras partes, incluyendo derechos de autor, marca, privacidad, personalidad u otro derechos personal o de propiedad. Asimismo, aceptas que tus comentarios no contienen material difamatorio o ilegal, abusivo u obsceno, o contienen virus informáticos u otro malware que pudiera, de alguna manera, afectar el funcionamiento del Servicio o de cualquier sitio web relacionado.  No puedes utilizar una dirección de correo electrónico falsa, usar otra identidad que no sea legítima, o engañar a terceras partes o a nosotros en cuanto al origen de tus comentarios.  Tú eres el único responsable por los comentarios que haces y su precisión.  No nos hacemos responsables y no asu-mimos ninguna obligación con respecto a los comentarios publicados por ti o cualquier tercer parte.</p>

                                        <h3 style="color: #ec7a4f; font-size: 18px;">SECCIÓN 10 - INFORMACIÓN PERSONAL</h3>
                                        <p>Tu presentación de información personal a través del sitio se rige por nuestra Política de Privacidad. Para ver nuestra Política de Privacidad.</p>

                                        <h3 style="color: #ec7a4f; font-size: 18px;">SECCIÓN 11 - ERRORES, INEXACTITUDES Y OMISIONES</h3>
                                        <p>De vez en cuando puede haber información en nuestro sitio o en el Servicio que contiene errores tipográficos, inexactitudes u omisiones que puedan estar relacionadas con las descripciones de productos, precios, promociones, ofertas, gastos de envío del producto, el tiempo de tránsito y la disponibilidad. Nos reservamos el derecho de corregir los errores, inexactitudes u omisiones y de cambiar o actualizar la información o cancelar pedidos si alguna información en el Servicio o en cualquier sitio web relacionado es inexacta en cualquier momento sin previo aviso (incluso después de que hayas enviado tu orden) .</p>
                                        <p>No asumimos ninguna obligación de actualizar, corregir o aclarar la información en el Servicio o en cualquier sitio web relacionado, incluyendo, sin limitación, la información de precios, excepto cuando sea requerido por la ley. Ninguna especificación actualizada o fecha de actualización aplicada en el Servicio o en cualquier sitio web relacionado, debe ser tomada para indicar que toda la información en el Servicio o en cualquier sitio web relacionado ha sido modificado o actualizado.</p>

                                        <h3 style="color: #ec7a4f; font-size: 18px;">SECCIÓN 12 - USOS PROHIBIDOS</h3>
                                        <p>En adición a otras prohibiciones como se establece en los Términos de Servicio, se prohibe el uso del sitio o su contenido: (a) para ningún propósito ilegal; (b) para pedirle a otros que realicen o participen en actos ilícitos; (c) para violar cualquier regulación, reglas, leyes internacionales, federales, provinciales o estatales, u ordenanzas locales; (d) para infringir o violar el derecho de propiedad intelectual nuestro o de terceras partes; (e) para acosar, abusar, insultar, dañar, difamar, calumniar, desprestigiar, intimidar o discriminar por razones de género, orientación sexual, religión, etnia, raza, edad, nacionalidad o discapacidad; (f) para presentar información falsa o engañosa; (g) para cargar o transmitir virus o cualquier otro tipo de código malicioso que sea o pueda ser utilizado en cualquier forma que pueda comprometer la funcionalidad o el funcionamiento del Servicio o de cualquier sitio web relacionado, otros sitios o Internet; (h) para recopilar o rastrear información personal de otros; (i) para generar spam, phish, pharm, pretext, spider, crawl, or scrape; (j) para cualquier propósito obsceno o inmoral; o (k) para interferir con o burlar los elementos de seguridad del Servicio o cualquier sitio web relacionado ¿otros sitios o Internet. Nos reservamos el derecho de suspender el uso del Servicio o de cualquier sitio web relacionado por violar cualquiera de los ítems de los usos prohibidos.</p>

                                        <h3 style="color: #ec7a4f; font-size: 18px;">SECCIÓN 13 - EXCLUSIÓN DE GARANTÍAS; LIMITACIÓN DE RESPONSABILIDAD</h3>

                                        <p>No garantizamos ni aseguramos que el uso de nuestro servicio será ininterrumpido, puntual, seguro o libre de errores.</p>
                                        <p>No garantizamos que los resultados que se puedan obtener del uso del servicio serán exactos o confiables.</p>
                                        <p>Aceptas que de vez en cuando podemos quitar el servicio por períodos de tiempo indefinidos o cancelar el servicio en cualquier momento sin previo aviso.</p>
                                        <p>Aceptas expresamente que el uso de, o la posibilidad de utilizar, el servicio es bajo tu propio riesgo.  El servicio y todos los productos y servicios proporcionados a través del servicio son (salvo lo expresamente manifestado por nosotros) proporcionados "tal cual" y "según esté disponible" para su uso, sin ningún tipo de representación, garantías o condiciones de ningún tipo, ya sea expresa o implícita, incluidas todas las garantías o condiciones implícitas de comercialización, calidad comercializable, la aptitud para un propósito particular, durabilidad, título y no infracción.</p>
                                        <p>En ningún caso barrefit peninsular S.A. de C.V., nuestros directores, funcionarios, empleados, afiliados, agentes, contratistas, internos, proveedores, prestadores de servicios o licenciantes serán responsables por cualquier daño, pérdida, reclamo, o daños directos, indirectos, incidentales, punitivos, especiales o consecuentes de cualquier tipo, incluyendo, sin limitación, pérdida de beneficios, pérdida de ingresos, pérdida de ahorros, pérdida de datos, costos de reemplazo, o cualquier daño similar, ya sea basado en contrato, agravio (incluyendo negligencia), responsabilidad estricta o de otra manera, como consecuencia del uso de cualquiera de los servicios o productos adquiridos mediante el servicio, o por cualquier otro reclamo relacionado de alguna manera con el uso del servicio o cualquier producto, incluyendo pero no limitado, a cualquier error u omisión en cualquier contenido, o cualquier pérdida o daño de cualquier tipo incurridos como resultados de la utilización del servicio o cualquier contenido (o producto) publicado, transmitido, o que se pongan a disposición a través del servicio, incluso si se avisa de su posibilidad.  Debido a que algunos estados o jurisdicciones no permiten la exclusión o la limitación de responsabilidad por daños consecuenciales o incidentales, en tales estados o jurisdicciones, nuestra responsabilidad se limitará en la medida máxima permitida por la ley.</p>

                                        <h3 style="color: #ec7a4f; font-size: 18px;">SECCIÓN 14 - INDEMNIZACIÓN</h3>

                                        <p>Aceptas indemnizar, defender y mantener indemne barrefit peninsular S.A. de C.V. y nuestras matrices, subsidiarias, afiliados, socios, funcionarios, directores, agentes, contratistas, concesionarios, proveedores de servicios, subcontratistas, proveedores, internos y empleados, de cualquier reclamo o demanda, incluyendo honorarios razonables de abogados, hechos por cualquier tercero a causa o como resultado de tu incumplimiento de las Condiciones de Servicio o de los documentos que incorporan como referencia, o la violación de cualquier ley o de los derechos de u tercero.</p>
                                        <h3 style="color: #ec7a4f; font-size: 18px;">SECCIÓN 15 - DIVISIBILIDAD</h3>

                                        <p>En el caso de que se determine que cualquier disposición de estas Condiciones de Servicio sea ilegal, nula o inejecutable, dicha disposición será, no obstante, efectiva a obtener la máxima medida permitida por la ley aplicable, y la parte no exigible se considerará separada de estos Términos de Servicio, dicha determinación no afectará la validez de aplicabilidad de las demás disposiciones restantes.</p>

                                        <h3 style="color: #ec7a4f; font-size: 18px;">SECCIÓN 16 - RESCISIÓN</h3>

                                        <p>Las obligaciones y responsabilidades de las partes que hayan incurrido con anterioridad a la fecha de terminación sobrevivirán a la terminación de este acuerdo a todos los efectos.</p>
                                        <p>Estas Condiciones de servicio son efectivos a menos que y hasta que sea terminado por ti o nosotros. Puedes terminar estos Términos de Servicio en cualquier momento por avisarnos que ya no deseas utilizar nuestros servicios, o cuando dejes de usar nuestro sitio.</p>
                                        <p>Si a nuestro juicio, fallas, o se sospecha que haz fallado, en el cumplimiento de cualquier término o disposición de estas Condiciones de Servicio, también podemos terminar este acuerdo en cualquier momento sin previo aviso, y seguirás siendo responsable de todos los montos adeudados hasta incluida la fecha de terminación; y/o en consecuencia podemos negarte el acceso a nuestros servicios (o cualquier parte del mismo).</p>
                                        <h3 style="color: #ec7a4f; font-size: 18px;">SECCIÓN 17 - ACUERDO COMPLETO</h3>

                                        <p>Nuestra falla para ejercer o hacer valer cualquier derecho o disposición de estas Condiciones de Servicio no constituirá una renuncia a tal derecho o disposición.</p>
                                        <p>Estas Condiciones del servicio y las políticas o reglas de operación publicadas por nosotros en este sitio o con respecto al servicio constituyen el acuerdo completo y el entendimiento entre tu y nosotros y rigen el uso del Servicio y reemplaza cualquier acuerdo, comunicaciones y propuestas anteriores o contemporáneas, ya sea oral o escrita, entre tu y nosotros (incluyendo, pero no limitado a, cualquier versión previa de los Términos de Servicio).</p>
                                        <p>Cualquier ambigüedad en la interpretación de estas Condiciones del servicio no se interpretarán en contra del grupo de redacción.</p>

                                        <h3 style="color: #ec7a4f; font-size: 18px;">SECCIÓN 18 - LEY</h3>

                                        <p>Estas Condiciones del servicio y cualquier acuerdos aparte en el que te proporcionemos servicios se regirán e interpretarán en conformidad con las leyes de Calle 61 #140 Colonia Montes de Amé, Local 202 Buyan Edificio., Merida, YUC, 97115, Mexico.</p>
                                        <h3 style="color: #ec7a4f; font-size: 18px;">SECCIÓN 19 - POLÍTICA DE CANCELACIÓN Y DEVOLUCIONES</h3>

                                        <p>Contamos con una política de cancelación de 2 horas previas a la clase, sin ningún cargo o penalidad para el usuario. Las clases canceladas serán liberadas para dejar que otras personas puedan inscribirse y disfrutar de su clase.</p>
                                        <p>Si no te presentas o no cancelas dentro de las ocho horas anteriores a la hora de inicio de la clase, se le cobrará por la clase ya que significa que otro estudiante no pudo asistir.</p>
                                        <p>No existen devoluciones en los paquetes o clases individuales.</p>
                                        <h3 style="color: #ec7a4f; font-size: 18px;">SECCIÓN 20 - INFORMACIÓN DE CONTACTO</h3>

                                        <p>Preguntas acerca de los Términos y condiciones deben ser enviadas a innerbarre@gmail.com.</p>
                                    </div>
                                </div>
                                <!-- /.row -->
                            </div>
                        </div>
                                
                        <div class="privacidad tab-pane fade" id="pills-privacidad" role="tabpanel" aria-labelledby="pills-privacidad-tab">
                            <div class="container mt-5">
                                <div class="row justify-content-center">
                                    <div class="col-12 col-sm-12 col-md-10 col-lg-8 col-xl-8 mb-1 p-0">
                                        <p>
                                            El responsable de la protección de sus datos personales es <span class="condicioncolor">“Barre Fit Peninsular”</span>, Sociedad Anónima Promotora de Inversión de Capital Variable,
                                            que tiene domicilio en ubicado en la calle sesenta y uno, con número ciento cuarenta, local docientos dos de los edificios
                                            Buyan de la colonia Montes de Amé de Mérida, Yucatán, Estados Unidos Mexicanos.
                                        </p>
                                        <div class="mt-4">
                                            <h3>¿Cómo contactarnos?</h3>
                                            <p>
                                                Domicilio: Calle 61 #140 Colonia Montes de Amé, Local 202 Buyan Edificio. Mérida, Yucatán, México. Correo electrónico: <span class="condicioncolor">innerbarre@gmail.com</span>
                                            </p>
                                        </div>
                                        <div class="mt-4">
                                            <h3>¿Para qué fines recabamos y utilizamos sus datos personales?</h3>
                                            <p>
                                                Sus datos personales serán utilizados para las siguientes finalidades: Proveer los servicios y productos requeridos por usted;
                                                Informar sobre cambios o nuevos productos o servicios que estén relacionados con el contratado o adquirido por el cliente; 
                                                Dar cumplimiento a obligaciones contraídas con nuestros clientes; Evaluar la calidad del servicio,
                                                y Realizar estudios internos sobre hábitos de consumo.
                                            </p>
                                        </div>
                                        <div class="mt-4">
                                            <h3>¿Qué datos personales obtenemos y de dónde?</h3>
                                            <p>
                                                Para las finalidades señaladas en el presente aviso de privacidad, podemos recabar sus datos personales de distintas formas, 
                                                ya sea cuando usted nos los proporciona directamente; cuando visita nuestro sitio de Internet o utiliza nuestros servicios en línea,
                                                y cuando obtenemos información a través de otras fuentes que están permitidas por la ley. Son datos personales que recabamos de forma directa
                                                cuando usted mismo nos los proporciona por diversos medios, como cuando participa en nuestras promociones o nos da información con objeto de que
                                                le prestemos un servicio. Los datos que obtenemos por este medio pueden ser, entre otros: Nombre, domicilio, teléfono, género, y correo electrónico. 
                                            </p>

                                            <p>
                                                Asimismo, en el caso de que el cliente opte por pagar los servicios que le presta  <span class="condicioncolor">“Barre Fit Peninsular”</span>,
                                                Sociedad Anónima Promotora de Inversión de Capital Variable, a través de cargos recurrentes o pagos domiciliados.
                                                Le informamos que para cumplir con las finalidades previstas en este aviso de privacidad, serán recabados y tratados datos personales sensibles,
                                                como aquéllos que refieren a resultado de pruebas de rendimiento físico, peso, estatura, porcentaje de grasa corporal y masa muscular, alergias,
                                                posibles cardiopatías, padecimientos crónico degenerativos, padecimientos contagiosos, padecimientos neurológicos, padecimientos osteo-musculares,
                                                los derivados de investigaciones de entendimiento de la etiología de la obesidad en México y posibles factores de reversión, y en caso de aplicar,
                                                las limitantes fisiológicas que pudieran condicionar las actividades de acondicionamiento físico, así como la manifestación de consumo de cualquier 
                                                suplemento alimenticio, multivitamínico, o cualquier otro medicamento que actúe en su rendimiento físico. 
                                            </p>
                                            <p>
                                                Nos comprometemos a que, dichos datos serán tratados bajo las más estrictas medidas de seguridad que garanticen su confidencialidad y su privacidad. De conformidad
                                                con lo que establece el artículo 9 de la Ley Federal de Protección de Datos Personales en Posesión de los Particulares, en virtud de ello requerimos de su consentimiento
                                                expreso para el tratamiento de sus datos personales sensibles, por lo que le solicitamos indique si acepta o no el tratamiento de los mismos. Cabe mencionar que todos
                                                los datos personales generales antes reseñados son indispensables para que <span class="condicioncolor">“Barre Fit Peninsular”</span>, Sociedad Anónima Promotora de Inversión de Capital Variable pueda 
                                                brindarle a sus clientes los servicios contratados, por lo que en caso de revocación del consentimiento o el ejercicio del derecho de cancelación (Derechos ARCO) 
                                                para el tratamiento de dichos datos dará lugar a la rescisión del contrato que haya celebrado con <span class="condicioncolor">“Barre Fit Peninsular”</span>, Sociedad Anónima Promotora de Inversión 
                                                de Capital Variable sin responsabilidad para este último. 

                                            </p>
                                        </div>
                                        <div class="mt-4">
                                            <h3>¿Cómo acceder o rectificar sus datos personales o cancelar u oponerse a su uso? (Derechos ARCO)</h3>
                                            <p>
                                                Usted puede ejercer ante <span class="condicioncolor">“Barre Fit Peninsular”</span>, Sociedad Anónima Promotora de Inversión de Capital Variable, en cualquier momento, 
                                                sus derechos de acceso, rectificación, cancelación y oposición al tratamiento de sus datos personales mediante solicitud por escrito
                                                que deberá ser enviada directamente a nuestras oficinas ubicadas en la <span class="condicioncolor">Calle 61 #140 Colonia Montes de Amé, Local 202 Buyan Edificio.
                                                Mérida, Yucatán, México</span> misma que deberá contener por lo menos: (a) nombre y domicilio u otro medio para comunicarle la
                                                respuesta a su solicitud; (b) los documentos que acrediten su identidad o, en su caso, la representación legal; (c) la descripción
                                                clara y precisa de los datos personales respecto de los que se solicita ejercer alguno de los derechos ARCO, (d) la manifestación 
                                                expresa del derecho (acceso, rectificación, cancelación u oposición) que quiere ejercer sobre tratamiento de sus datos personales;
                                                y (e) cualquier otro elemento que facilite la localización de los datos personales.
                                            </p>
                                        </div>
                                        <div class="mt-4">
                                            <h3>¿A quién se les puede transferir los datos?</h3>
                                            <p>
                                                <span class="condicioncolor">“Barre Fit Peninsular”</span>, Sociedad Anónima Promotora de Inversión de Capital Variable,
                                                podrá transferir sus datos personales con sus empresas subsidiarias o filiales del mismo grupo empresarial para las finalidades
                                                comerciales y de promoción descritas en el punto 2 del presente Aviso de Privacidad. En el caso los datos sensibles descritos
                                                en el punto 1 del presente Aviso de Privacidad, Barre Fit Peninsular no realizará ningún tipo de transferencia con sus empresas
                                                subsidiarias o filiales ni con cualquier otro tercero. En ningún caso Barre Fit Peninsular transferirá los datos personales de
                                                sus clientes a un tercero, diferente a las empresas subsidiarias o filiales descritas en el punto anterior, sin el consentimiento previo de los titulares.

                                            </p>
                                        </div>
                                        <div>
                                            <h3>¿Se pueden presentar cambios en el aviso de privacidad?</h3>
                                            <p>
                                                Sí, <span class="condicioncolor">“Barre Fit Peninsular”</span>, Sociedad Anónima Promotora de Inversión de Capital Variable, se reserva el derecho de cambiar el contenido 
                                                del presente Aviso de Privacidad en cualquier momento. En caso de que exista algún cambio en este Aviso de Privacidad,
                                                se le comunicará a través de nuestro portal de internet www.innerstudio.mx 
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                    </div>
                </div>
        </div>

        <!-- /.container -->
    </section>
@endsection

@push('js')
    {{-- Aqui van los scripts para esta vista     --}}
    <script href="{{asset('js/terminos.js')}}"></script>
    <script>

            function aler(x){

                if(x=='faqs'){
                    document.getElementById('faqs').style.display = 'block';
                    document.getElementById('terminoss').style.display = 'none';
                    document.getElementById('pprivacidad').style.display = 'none';
                    document.getElementById('faqs').style.display = 'block';
                    
                }
                if(x=='TerminosyCondiciones'){
                    document.getElementById('terminoss').style.display = 'block';
                    document.getElementById('faqs').style.display = 'none';
                    document.getElementById('pprivacidad').style.display = 'none';
                    document.getElementById('terminoss').style.display = 'block';
                   
                }
                if(x=='PoliticasDePrivacidad'){
                    document.getElementById('terminoss').style.display = 'none';
                    document.getElementById('faqs').style.display = 'none';
                    document.getElementById('pprivacidad').style.display = 'block';
                }
        }
            
   
    </script>
@endpush
