<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/stylesheader.css">
    
    
    <title>Document</title>
</head>
<body>
    <header>
        <a href="inicio.php" class="logo"> <img src="img/logovetpet.png" height="100px"> </a>
        <nav>
             
        <a href="inicio.php"><span>Inicio</span></a>
       
            
       
       <a href=""><span>Propietarios</span></a>
       <a href=""><span>Pacientes</span></a>
       <div id="servicios">
       <a href=""><span>Servicios medicos</span></a>
       <div class="userMenu1">
           <a href="crearconsulta.php">Consulta</a>
           <a href="formulariocrearcirugia.php">Cirugia</a>
           <a href="">Hospitalizacion</a>
       </div>
   </div>
   <div id="adicionales">
       <a href=""><span>Servicios adicionales</span></a>
       <div class="userMenu2">
           <a href="">Guarderia</a>
           <a href="">Transporte</a>
        </div>
       </div>
       <a href=""><span>Reportes</span></a>
        </nav>
        <div class="opciones">
            <!-- Busqueda -->
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-search" width="56" height="56" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <circle cx="10" cy="10" r="7" />
                <line x1="21" y1="21" x2="15" y2="15" />
            </svg>
            <!-- Notificaciones -->
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-bell" width="56" height="56" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <path d="M10 5a2 2 0 0 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6" />
                <path d="M9 17v1a3 3 0 0 0 6 0v-1" />
            </svg>
            <!-- Calendario -->
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-calendar" width="56" height="56" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <rect x="4" y="5" width="16" height="16" rx="2" />
                <line x1="16" y1="3" x2="16" y2="7" />
                <line x1="8" y1="3" x2="8" y2="7" />
                <line x1="4" y1="11" x2="20" y2="11" />
                <line x1="11" y1="15" x2="12" y2="15" />
                <line x1="12" y1="15" x2="12" y2="18" />
            </svg>
            <!-- Usuario -->
            <div id="user">
            <svg xmlns="http://www.w3.org/2000/svg" id="user" class="icon icon-tabler icon-tabler-user list" width="42" height="56" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <circle cx="12" cy="7" r="4" />
                <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
            </svg>
            <div class="userMenu">
                <a href="">Datos del usuario</a>
                <a href="">Cambiar contrase??a</a>
                <a href="">Ayuda</a>
                <a href="">Cerrar Sesion</a>
            </div>
        </div>
        </div>
        </div>
</header>