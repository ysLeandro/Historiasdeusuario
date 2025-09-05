<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Comercio Universitario Transacción Interna</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        header {
            width: 100%;
            text-align: center;
            margin-bottom: 20px;
        }

        h1 {
            color: #333;
            font-size: 2.5em;
        }
        
        nav {
            background-color: #333;
            width: 100%;
            display: flex;
            justify-content: center;
            padding: 10px 0;
            border-radius: 8px;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            padding: 10px 20px;
            margin: 0 10px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        nav a:hover {
            background-color: #575757;
        }
        
        /* Contenido de la pagina */
        .content-section {
            width: 90%;
            max-width: 1200px;
            margin-top: 20px;
        }

        .content-section h2 {
            text-align: center;
            color: #555;
            font-size: 2em;
            margin-bottom: 20px;
        }

        .cards-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
        }

        .card {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }
        
        /* Estilos específicos para historias de usuario */
        .card-user-story .card-header {
            font-size: 1.2em;
            font-weight: bold;
            color: #555;
            margin-bottom: 10px;
            border-bottom: 2px solid #eee;
            padding-bottom: 5px;
        }
        
        .card-user-story .card-body p {
            margin: 5px 0;
            line-height: 1.5;
        }
        
        .card-user-story .card-body .keyword {
            font-weight: bold;
            color: #007BFF;
        }

        /* Estilos específicos para diseño de interfaces */
        .card-design-interface {
            text-align: center;
        }

        .card-design-interface img {
            max-width: 100%;
            height: auto;
            border-radius: 5px;
            margin-bottom: 10px;
        }
        
        .card-design-interface .card-description {
            font-style: italic;
            color: #777;
            margin-bottom: 5px;
        }

        .card-design-interface .card-author {
            font-weight: bold;
            color: #333;
        }

    </style>
</head>
<body>

    <header>
        <h1>Sistema de Comercio Universitario Transacción Interna</h1>
        <nav>
            <a href="#" onclick="showSection('user-stories')">Historias de usuario</a>
            <a href="#" onclick="showSection('interfaces')">Diseño de interfaces</a>
        </nav>
    </header>

    <main class="content-section" id="main-content">
        </main>
    
    <script>
        const userStoriesHTML = `
            <h2>Historias de usuario</h2>
            <div class="cards-grid">
                <div class="card card-user-story" style="background-color: lightblue;">
                    <div class="card-header">Leandro Bautista</div>
                    <div class="card-body">
                        <p><span class="keyword">Como</span> estudiante,</p>
                        <p><span class="keyword">Quiero</span> registrarme con mi correo institucional,</p>
                        <p><span class="keyword">Para</span> garantizar que solo los miembros del plantel usen la app.</p>
                    </div>
                </div>

                <div class="card card-user-story">
                    <div class="card-header">Leandro Bautista</div>
                    <div class="card-body">
                        <p><span class="keyword">Como</span> usuario registrado,</p>
                        <p><span class="keyword">Quiero</span> iniciar sesión fácilmente,</p>
                        <p><span class="keyword">Para</span> acceder a mis compras y ventas.</p>

                    </div>
                </div>

                <div class="card card-user-story">
                    <div class="card-header">Leandro Bautista</div>
                    <div class="card-body">
                        <p><span class="keyword">Como</span> vendedor,</p>
                        <p><span class="keyword">Quiero</span> subir fotos de mis artículos,</p>
                        <p><span class="keyword">Para</span> mostrar claramente el estado de los productos.</p>

                    </div>
                </div>
                
                <div class="card card-user-story">
                    <div class="card-header">Leandro Bautista</div>
                    <div class="card-body">
                        <p><span class="keyword">Como</span> comprador,</p>
                        <p><span class="keyword">Quiero</span> filtrar productos por precio,</p>
                        <p><span class="keyword">Para</span> ajustar mis búsquedas a mi presupuesto.</p>

                    </div>
                </div>

                <div class="card card-user-story">
                    <div class="card-header">Leandro Bautista</div>
                    <div class="card-body">
                        <p><span class="keyword">Como</span> administrador,</p>
                        <p><span class="keyword">Quiero</span> aprobar o rechazar publicaciones,</p>
                        <p><span class="keyword">Para</span> evitar contenido inapropiado en la plataforma.</p>
                    </div>
                </div>
                
                <div class="card card-user-story">
                    <div class="card-header">Leandro Bautista</div>
                    <div class="card-body">
                        <p><span class="keyword">Como</span> desarrollador,</p>
                        <p><span class="keyword">Quiero</span> una API de pagos segura,</p>
                        <p><span class="keyword">Para</span> procesar transacciones de manera confiable.</p>
                    </div>
                </div>

                <!-- Segundas 5 historias: Josselyn Burbano -->

                <div class="card card-user-story" style="background-color: lightblue;">
                    <div class="card-header">Josselyn Burbano</div>
                    <div class="card-body">
                        <p><span class="keyword">Como</span> vendedor,</p>
                        <p><span class="keyword">Quiero</span> editar la descripción de mi producto,</p>
                        <p><span class="keyword">Para</span> corregir errores o añadir más detalles.</p>

                    </div>
                </div>

                <div class="card card-user-story">
                    <div class="card-header">Josselyn Burbano</div>
                    <div class="card-body">
                        <p><span class="keyword">Como</span> comprador,</p>
                        <p><span class="keyword">Quiero</span> guardar artículos en una lista de favoritos,</p>
                        <p><span class="keyword">Para</span> poder revisarlos más tarde antes de comprar.</p>
                    </div>
                </div>

                <div class="card card-user-story">
                    <div class="card-header">Josselyn Burbano</div>
                    <div class="card-body">
                        <p><span class="keyword">Como</span> usuario,</p>
                        <p><span class="keyword">Quiero</span> recibir notificaciones cuando alguien me escribe,</p>
                        <p><span class="keyword">Para</span> responder rápidamente a posibles compradores o vendedores.</p>

                    </div>
                </div>

                <div class="card card-user-story">
                    <div class="card-header">Josselyn Burbano</div>
                    <div class="card-body">
                                <p><span class="keyword">Como</span> vendedor,</p>
                                <p><span class="keyword">Quiero</span> marcar un artículo como vendido,</p>
                                <p><span class="keyword">Para</span> que no siga apareciendo como disponible.</p>

                    </div>
                </div>

                <div class="card card-user-story">
                    <div class="card-header">Josselyn Burbano</div>
                    <div class="card-body">
                        <p><span class="keyword">Como</span> comprador,</p>
                        <p><span class="keyword">Quiero</span> ver la ubicación dentro del plantel para la entrega,</p>
                        <p><span class="keyword">Para</span> saber dónde puedo recoger el producto fácilmente.</p>

                    </div>
                </div>

                <!--  5 historias: Roberto Benitez -->
                <div class="card card-user-story" style="background-color: lightblue;">
                    <div class="card-header">Roberto Benitez</div>
                    <div class="card-body">
                        <p><span class="keyword">Como</span> usuario,</p>
                        <p><span class="keyword">Quiero</span> tener un chat seguro dentro de la app,</p>
                        <p><span class="keyword">Para</span> no depender de contactos externos para comunicarme.</p>

                    </div>
                </div>

                <div class="card card-user-story">
                    <div class="card-header">Roberto Benitez</div>
                    <div class="card-body">
                        <p><span class="keyword">Como</span> comprador,</p>
                        <p><span class="keyword">Quiero</span> ver las calificaciones de los vendedores,</p>
                        <p><span class="keyword">Para</span> confiar en la persona a la que le compraré.</p>

                    </div>
                </div>

                <div class="card card-user-story">
                    <div class="card-header">Roberto Benitez</div>
                    <div class="card-body">
                        <p><span class="keyword">Como</span> vendedor,</p>
                        <p><span class="keyword">Quiero</span> recibir valoraciones de mis ventas,</p>
                        <p><span class="keyword">Para</span> generar reputación dentro de la plataforma.</p>

                    </div>
                </div>

                <div class="card card-user-story">
                    <div class="card-header">Roberto Benitez</div>
                    <div class="card-body">
                        <p><span class="keyword">Como</span> administrador,</p>
                        <p><span class="keyword">Quiero</span> bloquear usuarios que incumplan las normas,</p>
                        <p><span class="keyword">Para</span> mantener un ambiente seguro en la aplicación.</p>

                    </div>
                </div>

                <div class="card card-user-story">
                    <div class="card-header">Roberto Benitez</div>
                    <div class="card-body">
                                <p><span class="keyword">Como</span> usuario,</p>
                                <p><span class="keyword">Quiero</span> restablecer mi contraseña por correo,</p>
                                <p><span class="keyword">Para</span> recuperar mi acceso en caso de olvido.</p>

                    </div>
                </div>

                <!-- 5 historias: Saleth Sayenka -->
                <div class="card card-user-story" style="background-color: lightblue;">
                    <div class="card-header">Saleth Sayenka</div>
                    <div class="card-body">
                        <p><span class="keyword">Como</span> comprador,</p>
                        <p><span class="keyword">Quiero</span> ver productos recientes en la pantalla principal,</p>
                        <p><span class="keyword">Para</span> descubrir rápidamente lo más nuevo en venta.</p>


                    </div>
                </div>

                <div class="card card-user-story">
                    <div class="card-header">Saleth Sayenka</div>
                    <div class="card-body">
                        <p><span class="keyword">Como</span> vendedor,</p>
                        <p><span class="keyword">Quiero</span> recibir notificaciones cuando alguien esté interesado en mi producto,</p>
                        <p><span class="keyword">Para</span> responder y concretar la venta rápidamente.</p>


                    </div>
                </div>

                <div class="card card-user-story">
                    <div class="card-header">Saleth Sayenka</div>
                    <div class="card-body">
                        <p><span class="keyword">Como</span> comprador,</p>
                        <p><span class="keyword">Quiero</span> hacer preguntas públicas en la publicación de un artículo,</p>
                        <p><span class="keyword">Para</span> aclarar dudas que otros también puedan tener.</p>

                    </div>
                </div>

                <div class="card card-user-story">
                    <div class="card-header">Saleth Sayenka</div>
                    <div class="card-body">
                        <p><span class="keyword">Como</span> usuario,</p>
                        <p><span class="keyword">Quiero</span> ver estadísticas de mis compras y ventas,</p>
                        <p><span class="keyword">Para</span> conocer mi actividad dentro de la app.</p>

                    </div>
                </div>

                <div class="card card-user-story">
                    <div class="card-header">Saleth Sayenka</div>
                    <div class="card-body">
                        <p><span class="keyword">Como</span> administrador,</p>
                        <p><span class="keyword">Quiero</span> generar reportes de actividad de usuarios,</p>
                        <p><span class="keyword">Para</span> analizar el uso de la aplicación.</p>

                    </div>
                </div>

                <!-- 5 historias: Fiama Hurtado -->

                <div class="card card-user-story" style="background-color: lightblue;">
                    <div class="card-header">Fiama Hurtado</div>
                    <div class="card-body">
                        <p><span class="keyword">Como</span> vendedor,</p>
                        <p><span class="keyword">Quiero</span> subir múltiples fotos por producto,</p>
                        <p><span class="keyword">Para</span> mostrar diferentes ángulos y detalles.</p>

                    </div>
                </div>

                <div class="card card-user-story">
                    <div class="card-header">Fiama Hurtado</div>
                    <div class="card-body">
                                <p><span class="keyword">Como</span> usuario,</p>
                                <p><span class="keyword">Quiero</span> recibir alertas cuando un producto que busco esté disponible,</p>
                                <p><span class="keyword">Para</span> aprovechar la oportunidad de comprarlo rápidamente.</p>
                    </div>
                </div>

                <div class="card card-user-story">
                    <div class="card-header">Fiama Hurtado</div>
                    <div class="card-body">
                        <p><span class="keyword">Como</span> comprador,</p>
                        <p><span class="keyword">Quiero</span> poder calificar un producto después de recibirlo,</p>
                        <p><span class="keyword">Para</span> compartir mi experiencia con otros usuarios.</p>

                    </div>
                </div>
                <div class="card card-user-story">
                    <div class="card-header">Fiama Hurtado</div>
                    <div class="card-body">
                        <p><span class="keyword">Como</span> usuario,</p>
                        <p><span class="keyword">Quiero</span> activar un modo oscuro en la aplicación,</p>
                        <p><span class="keyword">Para</span> usar la app de forma cómoda en la noche.</p>
                    </div>
                </div>

                <div class="card card-user-story">
                    <div class="card-header">Fiama Hurtado</div>
                    <div class="card-body">
                        <p><span class="keyword">Como</span> comprador,</p>
                        <p><span class="keyword">Quiero</span> ver métodos de pago aceptados antes de concretar la compra,</p>
                        <p><span class="keyword">Para</span> saber cómo puedo pagar el artículo.</p>
                    </div>
                </div>
            </div>
        `;

        const interfacesHTML = `
            <h2>Diseño de interfaces</h2>
            <div class="cards-grid">
                <div class="card card-design-interface" style="background-color: lightblue;">
                    <img src="login.png" alt="Diseño de interfaz de login">
                    <div class="card-description">Un diseño de interfaz simple y moderno para la página de inicio de sesión.</div>
                    <div class="card-author">Autor: Juan Pérez</div>
                </div>
                
                <div class="card card-design-interface">
                    <img src="https://via.placeholder.com/300" alt="Diseño de la página principal">
                    <div class="card-description">Página principal con un enfoque minimalista para mejorar la navegación.</div>
                    <div class="card-author">Autor: Sofía Rodríguez</div>
                </div>
                
                <div class="card card-design-interface">
                    <img src="https://via.placeholder.com/300" alt="Diseño de la página de productos">
                    <div class="card-description">Diseño de la galería de productos, optimizado para la búsqueda por categorías.</div>
                    <div class="card-author">Autor: Luis González</div>
                </div>

                <div class="card card-design-interface">
                    <img src="https://via.placeholder.com/300" alt="Diseño de carrito de compras">
                    <div class="card-description">Una vista detallada del carrito de compras, con opciones de pago seguras.</div>
                    <div class="card-author">Autor: Ana Martínez</div>
                </div>

                <div class="card card-design-interface">
                    <img src="https://via.placeholder.com/300" alt="Diseño del perfil de usuario">
                    <div class="card-description">Interfaz del perfil de usuario con acceso rápido a su historial y configuraciones.</div>
                    <div class="card-author">Autor: David Sánchez</div>
                </div>

                <div class="card card-design-interface">
                    <img src="https://via.placeholder.com/300" alt="Diseño de notificaciones">
                    <div class="card-description">Un diseño claro para las notificaciones del sistema y mensajes de confirmación.</div>
                    <div class="card-author">Autor: Elena Fernández</div>
                </div>
            </div>
        `;
        
        // Función para mostrar la sección correcta
        function showSection(section) {
            const mainContent = document.getElementById('main-content');
            if (section === 'user-stories') {
                mainContent.innerHTML = userStoriesHTML;
            } else if (section === 'interfaces') {
                mainContent.innerHTML = interfacesHTML;
            }
        }
        
        // Muestra las historias de usuario por defecto al cargar la página
        document.addEventListener('DOMContentLoaded', () => {
            showSection('user-stories');
        });

    </script>
</body>
</html>
