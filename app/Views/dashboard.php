<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HelpDesk - Iniciar Sesión</title>
    <style>
        body, html {
            height: 100%;
            margin: 0;
            font-family: 'Arial', sans-serif;
            background-color: #f4f7f6;
        }

        /* Barra superior */
        .top-bar {
            width: 100%;
            background-color: #007bff;
            padding: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: white;
        }

        .top-bar h1 {
            margin: 0;
            padding-left: 20px;
            font-size: 24px;
        }

        /* Formulario de login en fila */
        .login-row {
            display: flex;
            align-items: center;
        }

        .login-row input[type="text"],
        .login-row input[type="password"] {
            padding: 10px;
            margin-right: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .login-row button {
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            background-color: #28a745;
            color: white;
            font-size: 16px;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .login-row button:hover {
            background-color: #218838;
        }

        /* Contenido del sistema HelpDesk */
        .content {
            padding: 20px;
            margin-top: 60px;
        }

        .content h2 {
            color: #333;
            margin-bottom: 20px;
        }

        .tickets {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
        }

        .ticket {
            background-color: #007bff;
            padding: 20px;
            border-radius: 10px;
            color: white;
            text-align: center;
            font-size: 18px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .ticket:hover {
            background-color: #0056b3;
        }

        .ticket p {
            margin: 10px 0;
            font-size: 14px;
        }

        .ticket a {
            color: white;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <!-- Barra superior -->
    <div class="top-bar">
        <h1>HelpDesk System</h1>
        <!-- Formulario de Login en fila -->
        <div class="login-row">
            <input type="text" placeholder="Usuario" required>
            <input type="password" placeholder="Contraseña" required>
            <button type="submit">Entrar</button>
        </div>
    </div>

    <!-- Contenido principal del sistema HelpDesk -->
    <div class="content">
        <h2>Últimos Tickets</h2>
        <div class="tickets">
            <div class="ticket">
                <a href="#ticket12345">
                    <h3>Ticket #12345</h3>
                    <p>No puedo acceder al sistema.</p>
                </a>
            </div>
            <div class="ticket">
                <a href="#ticket12346">
                    <h3>Ticket #12346</h3>
                    <p>La impresora no funciona.</p>
                </a>
            </div>
            <div class="ticket">
                <a href="#ticket12347">
                    <h3>Ticket #12347</h3>
                    <p>Problemas con el correo electrónico.</p>
                </a>
            </div>
            <!-- Puedes añadir más tickets aquí -->
        </div>
    </div>
</body>
</html>
