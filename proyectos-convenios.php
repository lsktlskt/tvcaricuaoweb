<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TVCaricuao - Convenio UNESR</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background: linear-gradient(85deg, #1a2a6c, #b21f1f, #1a2a6c);
            color: #fff;
            line-height: 1.6;
        }
        
        .header {
            background: rgba(0, 0, 0, 0.8);
            padding: 20px;
            text-align: center;
            position: sticky;
            top: 0;
            z-index: 100;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.4);
        }
        
        .header h1 {
            color: #ff6600;
            font-size: 1,5rem;
            margin-bottom: 10px;
            text-transform: uppercase;
            letter-spacing: 2px;
        }
        
        .header p {
            color: #ddd;
            font-size: 1.1rem;
            max-width: 800px;
            margin: 0 auto;
        }
        
        .container {
            max-width: 1200px;
            margin: 40px auto;
            padding: 20px;
        }
        
        .info-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 30px;
            margin-top: 40px;
        }
        
        .info-card {
            background: rgba(0, 0, 0, 0.7);
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border: 1px solid #ff6600;
        }
        
        .info-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 35px rgba(255, 102, 0, 0.3);
        }
        
        .card-header {
            background: rgba(255, 102, 0, 0.9);
            padding: 20px;
            text-align: center;
        }
        
        .card-header h2 {
            font-size: 1.8rem;
            margin: 0;
            color: #fff;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.5);
        }
        
        .card-content {
            padding: 25px;
        }
        
        .card-content p {
            margin-bottom: 15px;
            font-size: 1.1rem;
            line-height: 1.7;
        }
        
        .card-content ul {
            padding-left: 25px;
            margin: 15px 0;
        }
        
        .card-content li {
            margin-bottom: 10px;
        }
        
        .highlight {
            color: #ffcc00;
            font-weight: bold;
        }
        
        .proyectos-section {
            background: rgba(0, 0, 0, 0.8);
            padding: 50px 20px;
            margin-top: 60px;
            border-top: 3px solid #ff6600;
            border-bottom: 3px solid #ff6600;
        }
        
        .proyectos-container {
            max-width: 1200px;
            margin: 0 auto;
        }
        
        .proyectos-title {
            color: #ff6600;
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 40px;
            text-transform: uppercase;
            letter-spacing: 2px;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.5);
        }
        
        .proyectos-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 25px;
        }
        
        .proyecto-card {
            background: rgba(255, 102, 0, 0.1);
            border-radius: 10px;
            padding: 25px;
            text-align: center;
            border: 1px solid #ff6600;
            transition: all 0.3s ease;
        }
        
        .proyecto-card:hover {
            background: rgba(255, 102, 0, 0.2);
            transform: scale(1.03);
        }
        
        .proyecto-icon {
            font-size: 3rem;
            color: #ff6600;
            margin-bottom: 20px;
        }
        
        .proyecto-card h3 {
            color: #ffcc00;
            margin-bottom: 15px;
            font-size: 1.5rem;
        }
        
        .proyecto-card p {
            color: #fff;
            font-size: 1.05rem;
        }
        
        .footer {
            background: rgba(0, 0, 0, 0.9);
            padding: 30px 20px;
            text-align: center;
            margin-top: 50px;
            border-top: 2px solid #ff6600;
        }
        
        .footer p {
            color: #ddd;
            margin: 10px 0;
        }
        
        .logo-container {
            display: flex;
            justify-content: center;
            gap: 30px;
            margin: 20px 0;
        }
        
        .logo {
            width: 100px;
            height: 100px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            color: #ff6600;
            border: 2px solid #ff6600;
        }

        .salida-container {
            display: flex;
            justify-content: center;
            gap: 30px;
            margin: 20px 0;
        }
        
        .salida {
            width: 100px;
            height: 100px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            color: #ff6600;
            border: 2px solid #ff6600;
        }
        
        .salida:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(255, 102, 0, 0.6);
        }

        @media (max-width: 768px) {
            .info-grid {
                grid-template-columns: 1fr;
            }
            
            .header h1 {
                font-size: 2rem;
            }
            
            .proyectos-title {
                font-size: 2rem;
            }

        



        }
    </style>
</head>
<body>
    <div class="header">
        <h1>TVCaricuao - Convenios - Proyectos. Cooperación</h1>
        <p>Televisión Comunitaria al servicio de la educación y la cultura desde 1980</p>
    </div>
    
    <div class="container">
        <div class="info-grid">
            <div class="info-card">
                <div class="card-header">
                    <h2>Convenio UNESR-TV CARICUAO</h2>
                </div>
                <div class="card-content">
                    <p>TVCaricuao se encuentra ubicada desde 1980 en el núcleo Caricuao, primera sede académica de la UNESR. En sus instalaciones se encuentra la memoria histórica audiovisual de la universidad, resguardada en condiciones de temperatura ideal, clasificados y ordenados con un sistema desarrollado por TVCARICUAO.</p>
                    <p>La TV Comunitaria respalda al <span class="highlight">Mincyt</span>. Convenio que permite la visualización, la promoción y divulgación de todos los procesos, actividades formativas y de innovación cientifico tecnologico, jovenes, profesores, faclicitadores.</p>
                </div>
            </div>
            
            <div class="info-card">
                <div class="card-header">
                    <h2>Realizadores Comunitarios</h2>
                </div>
                <div class="card-content">
                    <p>Desde 1980 realiza <span class="highlight">"Curso de Realizadores Comunitarios-Perfil, Promotor, Asistente y Realizador Audiovisual"</span>, reconocido por la Universidad Nacional Experimental Simón Rodríguez, el cual es dictado a vecinos, jóvenes y adultos.</p>
                    <p>Con más de trescientos egresados en este plan formativo, quienes forman parte de la reserva del conocimiento tecnológico audiovisual y cooperativo en el área.</p>
                    <p>Los "Realizadores Comunitarios" están preparados para respaldar procesos comunitarios y profesionales, con reconocimiento y prestigio, producto de su solidaridad, ética moral y de valores de libertad, formación política, comunitario, social y humanitario.</p>
                </div>
            </div>
            
            <div class="info-card">
                <div class="card-header">
                    <h2>Cooperación Institucional</h2>
                </div>
                <div class="card-content">
                    <p>TVCaricuao Respalda y apoya con su trabajo a instituciones de la parroquia:</p>
                    <ul>
                        <li>Jefatura y Junta Parroquial</li>
                        <li>Centros de Salud, Hospital Geriátrico y Clínica Popular Materno Infantil</li>
                        <li>Misiones y Fundaciones comunitarias</li>
                        <li>Asociaciones comunitarias y Centros Culturales</li>
                        <li>Grupos Culturales y Consejos Comunales</li>
                        <li>Misión Nevado y Concejo Municipal</li>
                        <li>Ministerio de Ciencia y Tecnología</li>
                        <li>Escuelas, Liceos y Universidades</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
    <div class="proyectos-section">
        <div class="proyectos-container">
            <h2 class="proyectos-title">Proyectos</h2>
            <div class="proyectos-grid">
                <div class="proyecto-card">
                    <div class="proyecto-icon">
                        <i class="fas fa-film"></i>
                    </div>
                    <h3>Archivo Histórico</h3>
                    <p>Digitalización y preservación del patrimonio audiovisual de la UNESR con más de 5,000 horas de material histórico.</p>
                </div>
                
                <div class="proyecto-card">
                    <div class="proyecto-icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <h3>Formación Audiovisual</h3>
                    <p>Cursos certificados para realizadores comunitarios con más de 300 egresados en los últimos 5 años.</p>
                </div>
                
                <div class="proyecto-card">
                    <div class="proyecto-icon">
                        <i class="fas fa-hands-helping"></i>
                    </div>
                    <h3>Apoyo Comunitario</h3>
                    <p>Programas de apoyo audiovisual a más de 50 instituciones locales y proyectos sociales.</p>
                </div>
                
                <div class="proyecto-card">
                    <div class="proyecto-icon">
                        <i class="fas fa-satellite-dish"></i>
                    </div>
                    <h3>Transmisiones en Vivo</h3>
                    <p>Cobertura de eventos culturales y académicos con transmisión en directo para toda la comunidad.</p>
                </div>
            </div>
        </div>
    </div>
    
    <div class="footer">
        <div class="logo-container">
            <div class="logo">
                <i class="fas fa-tv"></i>
            </div>
            <div class="logo">
                <i class="fas fa-university"></i>
            </div>
            <div class="salida">
                <a href="index.php" class="btn"><i class="fa-solid fa-backward"></i></a>
            </div>
        </div>
        <p>TVCaricuao - Núcleo Caricuao, Universidad Nacional Experimental Simón Rodríguez</p>
        <p>© 1980 - 2025 | Todos los derechos reservados</p>
        <p>Caricuao, Caracas - Venezuela</p>
    </div>
</body>
</html>