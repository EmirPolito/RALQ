<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Cristian Barraza, Irving Esteban, Emir Polito">
    <title>RALQ</title>

    //
    <link rel="stylesheet" href="src/output.css">
    //
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans+Condensed:wght@300;400;500;700&family=Krub:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/laboratorios.css">
    <link rel="stylesheet" href="css/user-icon.css">
    <link rel="stylesheet" href="css/QRN.css">
    <link rel="stylesheet" href="css/tablaperiodica.css">
</head>
<body>
    
<header>
        
    <div class="header-left">
        <a href="menu.php" class="volver-boton">
            <img src="img/logos/volver.png" alt="Volver">
        </a>
        <img src="img/logo_ralq_color-removebg-preview.png" class="logo">
    </div>

        <div class="header-right">
                <nav>
                    <!-- <a href="https://publuu.com/flip-book/789518/1745350">Ayuda</a> -->
                    <!-- <a href="#">Servicios</a>
                    <a href="#">Blog</a> -->

                    <!-- Icono de Usuario -->
                    <div class="user-menu">
                        <img src="img/user.jpg" class="user-icon" onclick="toggleMenu()">
                        <div class="user-dropdown" id="userDropdown">
                            <p><strong><?php echo $_SESSION['user_email']; ?></strong></p>
                            <a class="boton-a" href="index.php">Cerrar sesión</a>
                        </div>
                    </div>
                    <script src="js/usuario.js"></script>
                    <!-- Icono de Usuario -->
                </nav>
        </div>
    </header>

    <section class="hero-section">
    <div class="hero-content">
        <img src="img/laboratorios/labo-tabla-periodica.jpg" alt="Robot de laboratorio" class="hero-image">
        <div class="hero-text">
            <h1>TABLA PERIÓDICA</h1>
            <p>La tabla periódica fue diseñada por el químico ruso Dmitri Mendeléiev en 1869 y contenía 63 de los 118 elementos conocidos hoy en la naturaleza. Es un cuadro que presenta todos los elementos químicos que existen ordenados según sus propiedades físicas.</p>
        </div>
    </div>
    </section>

    <main>

        <div class="periodic">
            <div class="periodic-row">
                <div class="cell">
                <div class="element"  class="type-4 cat-3">
                <div class="masa">1.00794</div>
                    <div class="at_num">1</div>
                    <div class="ener">1312.0</div>
                    <div class="elec">2.20</div>
                    <div class="estad"> 
                    <li>+1</li>
                    <li>-1</li>
                    </div>
                    <div class="symbol">H</div>
                    <div class="at_details">Hidrógeno<br/>1s<sup>1</sup></div>
                </div>
                </div>
                <div class="cell empty"></div>
                <div class="cell empty"></div>
                <div class="cell empty"></div>
                <div class="cell empty"></div>
                <div class="cell empty"></div>
                <div class="cell empty"></div>
                <div class="cell empty"></div>
                <div class="cell empty"></div>
                <div class="cell empty"></div>
                <div class="cell empty"></div>
                <div class="cell empty"></div>
                <div class="cell empty"></div>
                <div class="cell empty"></div>
                <div class="cell empty"></div>
                <div class="cell empty"></div>
                <div class="cell empty"></div>
                <div class="cell">
                <div class="element" class="type-2 cat-3">
                <div class="masa">4.002602</div>
                    <div class="at_num">2</div>
                    <div class="ener">2372.3</div>
                    <div class="elec"></div>
                    <div class="estad"> 
                    <li></li>
                    <li></li>
                    </div>
                    <div class="symbol">He</div>
                    <div class="at_details">Helio<br/>1s<sup>2</sup></div>
                </div>
                </div>
            </div>
            <div class="periodic-row">
                <div class="cell">
                <div class="element" class="type-2 cat-3">
                    <div class="masa">6.941</div>
                    <div class="at_num">3</div>
                    <div class="symbol">Li</div>
                    <div class="ener">520.0</div>
                    <div class="elec">0.98</div>
                    <div class="estad"> 
                    <li>+1</li>
                    <li>-1</li>
                    </div>
                    <div class="at_details">lithium<br/>1s<sup>2</sup>2s<sup>1</sup></div>
                </div>
                </div>
                <div class="cell">
                <div class="element"  class="type-5 cat-2">
                    <div class="masa">9.012182</div>
                    <div class="at_num">4</div>
                    <div class="ener">899.5</div>
                    <div class="elec">1.57</div>
                    <div class="estad"> 
                    <li>+2</li>
                    <li></li>
                    </div>
                    <div class="symbol">Be</div>
                    <div class="at_details">Berilio<br/>1s<sup>2</sup>2s<sup>2</sup></div>
                </div>
                </div>
                <div class="cell"></div>
                <div class="cell"></div>
                <div class="cell">
                <div class="cell1">
                    <div class="element">
                <div class="masa">55.845</div>
                    <div class="at_num">26</div>
                    <div class="ener">762.5</div>
                    <div class="elec">1.83</div>
                    <div class="estad"> 
                    <li>+6</li>
                    <li>+5</li>
                    <li>+4</li>
                    <li>+3</li>
                    <li>+2</li>
                    <li>+1</li>
                    <li>-1</li>
                    <li>-2</li>
                    </div>
                    <div class="symbol">Fe</div>
                    <div class="at_details">Hierro<br/>[Ar]3d<sup>6</sup>4s<sup>2</sup></div>
                </div>
                </div>
                </div>
                <div class="cell"></div>
                <div class="cell"></div>
                <div class="cell"></div>
                <div class="cell"></div>
                <div class="cell"></div>
                <div class="cell"></div>
                <div class="cell"></div>
                <div class="cell">
                <div class="element">
                    <div class="masa">10.811</div>
                    <div class="at_num">5</div>
                    <div class="ener">800.6</div>
                    <div class="elec">2.04</div>
                    <div class="estad"> 
                    <li>+3</li>
                    <li>+2</li>
                    <li>+1</li>
                    </div>
                    <div class="symbol">B</div>
                    <div class="at_details">Boro<br/>1s<sup>2</sup>
                    2s<sup>2</sup>2p<sup>1</sup></div>
                </div>
                </div>
                <div class="cell">
                <div class="element">
                    <div class="masa">12.0107</div>
                    <div class="at_num">6</div>
                    <div class="ener">1086.5</div>
                    <div class="elec">2.55</div>
                    <div class="estad"> 
                    <li>+4</li>
                    <li>+3</li>
                    <li>+2</li>
                    <li>+1</li>
                    <li>-1</li>
                    <li>-2</li>
                    <li>-3</li>
                    <li>-4</li>
                    </div>
                    <div class="symbol">C</div>
                    <div class="at_details">Carbono<br/>1s<sup>2</sup>
                    2s<sup>2</sup>2p<sup>2</sup></div>
                </div>
                </div>
                <div class="cell">
                <div class="element">
                    <div class="masa">14.0067</div>
                    <div class="at_num">7</div>
                    <div class="ener">1402.3</div>
                    <div class="elec">3.04</div>
                    <div class="estad"> 
                    <li>+5</li>
                    <li>+4</li>
                    <li>+3</li>
                    <li>+2</li>
                    <li>+1</li>
                    <li>-1</li>
                    <li>-2</li>
                    <li>-3</li>
                    </div>
                    <div class="symbol">N</div>
                    <div class="at_details">Nitrógeno<br/>1s<sup>2</sup>
                    2s<sup>2</sup>2p<sup>2</sup></div>
                </div>
                </div>
                <div class="cell">
                <div class="element">
                    <div class="masa">15.9994</div>
                    <div class="at_num">8</div>
                    <div class="ener">1313.9</div>
                    <div class="elec">3.44</div>
                    <div class="estad"> 
                    <li>+2</li>
                    <li>+1</li>
                    <li>-1</li>
                    <li>-2</li>
                    </div>
                    <div class="symbol">O</div>
                    <div class="at_details">Oxígeno<br/>1s<sup>2</sup>
                    2s<sup>2</sup>2p<sup>4</sup></div>
                </div>
                </div>
                <div class="cell">
                <div class="element">
                    <div class="masa">18.998403</div>
                    <div class="at_num">9</div>
                    <div class="ener">1681.0</div>
                    <div class="elec">3.98</div>
                    <div class="estad"> 
                    <li>-1</li>
                    <li></li>
                    </div>
                    <div class="symbol">F</div>
                    <div class="at_details">Flúor<br/>1s<sup>2</sup>
                    2s<sup>2</sup>2p<sup>5</sup></div>
                </div>
                </div>
                <div class="cell">
                <div class="element">
                    <div class="masa">20.1797</div>
                    <div class="at_num">10</div>
                    <div class="ener">2080.7</div>
                    <div class="elec"></div>
                    <div class="estad"> 
                    <li></li>
                    <li></li>
                    </div>
                    <div class="symbol">Ne</div>
                    <div class="at_details">Neón<br/>1s<sup>2</sup>
                    2s<sup>2</sup>2p<sup>6</sup></div>
                </div>
                </div>
            </div>
            <div class="periodic-row">
                <div class="cell">
                <div class="element">
                    <div class="masa">22.98976</div>
                    <div class="at_num">11</div>
                    <div class="ener">495.8</div>
                    <div class="elec">0.93</div>
                    <div class="estad"> 
                    <li>+1</li>
                    <li>-1</li>
                    </div>
                    <div class="symbol">Na</div>
                    <div class="at_details">Sodio<br/>[Ne]3s<sup>1</sup></div>
                </div>
                </div>
                <div class="cell">
                <div class="element">
                    <div class="masa">24.3050</div>
                    <div class="at_num">12</div>
                    <div class="ener">737.7</div>
                    <div class="elec">1.31</div>
                    <div class="estad"> 
                    <li>+2</li>
                    <li>+1</li>
                    </div>
                    <div class="symbol">Mg</div>
                    <div class="at_details">Magnesia<br/>[Ne]3s<sup>2</sup></div>
                </div>
                </div>
                <div class="cell"></div>
                <div class="cell"></div>
                <div class="cell"></div>
                <div class="cell"></div>
                <div class="cell"></div>
                <div class="cell"></div>
                <div class="cell"></div>
                <div class="cell"></div>
                <div class="cell"></div>
                <div class="cell"></div>
                <div class="cell">
                <div class="element">
                <div class="masa">26.98153</div>
                    <div class="at_num">13</div>
                    <div class="ener">577.5</div>
                    <div class="elec">1.61</div>
                    <div class="estad"> 
                    <li>+3</li>
                    <li>+1</li>
                    </div>
                    <div class="symbol">Al</div>
                    <div class="at_details">Aluminio<br/>[Ne]3s<sup>2</sup>3p<sup>1</sup></div>
                </div>
                </div>
                <div class="cell">
                <div class="element">
                <div class="masa">28.0855</div>
                    <div class="at_num">14</div>
                    <div class="ener">786.5</div>
                    <div class="elec">1.90</div>
                    <div class="estad"> 
                    <li>+4</li>
                    <li>+3</li>
                    <li>+2</li>
                    <li>+1</li>
                    <li>-1</li>
                    <li>-2</li>
                    <li>-3</li>
                    <li>-4</li>
                    </div>
                    <div class="symbol">Si</div>
                    <div class="at_details">Silicon<br/>[Ne]3s<sup>2</sup>3p<sup>2</sup></div>
                </div>
                </div>
                <div class="cell">
                <div class="element">
                <div class="masa">30.97696</div>
                    <div class="at_num">15</div>
                    <div class="ener">1011.8</div>
                    <div class="elec">2.19</div>
                    <div class="estad"> 
                    <li>+5</li>
                    <li>+4</li>
                    <li>+3</li>
                    <li>+2</li>
                    <li>+1</li>
                    <li>-1</li>
                    <li>-2</li>
                    <li>-3</li>
                    </div>
                    <div class="symbol">P</div>
                    <div class="at_details">Fósforo<br/>[Ne]3s<sup>2</sup>3p<sup>3</sup></div>
                </div>
                </div>
                <div class="cell">
                <div class="element">
                <div class="masa">32.065</div>
                    <div class="at_num">16</div>
                    <div class="ener">999.6</div>
                    <div class="elec">2.58</div>
                    <div class="estad"> 
                    <li>+6</li>
                    <li>+5</li>
                    <li>+4</li>
                    <li>+3</li>
                    <li>+2</li>
                    <li>+1</li>
                    <li>-1</li>
                    <li>-2</li>
                    </div>
                    <div class="symbol">S</div>
                    <div class="at_details">Azufre<br/>[Ne]3s<sup>2</sup>3p<sup>4</sup></div>
                </div>
                </div>
                <div class="cell">
                <div class="element">
                <div class="masa">35.453</div>
                    <div class="at_num">17</div>
                    <div class="ener">1251.2</div>
                    <div class="elec">3.16</div>
                    <div class="estad"> 
                    <li>+7</li>
                    <li>+6</li>
                    <li>+5</li>
                    <li>+4</li>
                    <li>+3</li>
                    <li>+2</li>
                    <li>+1</li>
                    <li>-1</li>
                    </div>
                    <div class="symbol">Cl</div>
                    <div class="at_details">Cloro<br/>[Ne]3s<sup>2</sup>3p<sup>5</sup></div>
                </div>
                </div>
                <div class="cell">
                <div class="element">
                <div class="masa">39.948</div>
                    <div class="at_num">18</div>
                    <div class="ener">1520.6</div>
                    <div class="elec"></div>
                    <div class="estad"> 
                    <li></li>
                    <li></li>
                    </div>
                    <div class="symbol">Ar</div>
                    <div class="at_details">Aegón<br/>[Ne]3s<sup>2</sup>3p<sup>6</sup></div>
                </div>
                </div>
            </div>
            <div class="periodic-row">
                <div class="cell">
                <div class="element">
                <div class="masa">39.0983</div>
                    <div class="at_num">19</div>
                    <div class="ener">418.8</div>
                    <div class="elec">0.82</div>
                    <div class="estad"> 
                    <li>+1</li>
                    <li></li>
                    </div>
                    <div class="symbol">K</div>
                    <div class="at_details">Potasio<br/>[Ar]4s<sup>1</sup></div>
                </div>
                </div>
                <div class="cell">
                <div class="element">
                <div class="masa">40.078</div>
                    <div class="at_num">20</div>
                    <div class="ener">589.8</div>
                    <div class="elec">1.00</div>
                    <div class="estad"> 
                    <li>+2</li>
                    <li></li>
                    </div>
                    <div class="symbol">Ca</div>
                    <div class="at_details">Calcio<br/>[Ar]4s<sup>2</sup></div>
                </div>
                </div>
                <div class="cell">
                <div class="element">
                <div class="masa">44.95591</div>
                    <div class="at_num">21</div>
                    <div class="ener">633.1</div>
                    <div class="elec">1.36</div>
                    <div class="estad"> 
                    <li>+3</li>
                    <li>+2</li>
                    <li>+1</li>
                    </div>
                    <div class="symbol">Sc</div>
                    <div class="at_details">Escandio<br/>[Ar]3d<sup>1</sup>4s<sup>2</sup></div>
                </div>
                </div>
                <div class="cell">
                <div class="element">
                <div class="masa">47.867</div>
                    <div class="at_num">22</div>
                    <div class="ener">658.8</div>
                    <div class="elec">1.54</div>
                    <div class="estad"> 
                    <li>+4</li>
                    <li>+3</li>
                    <li>+2</li>
                    <li>+1</li>
                    <li>-1</li>
                    </div>
                    <div class="symbol">Ti</div>
                    <div class="at_details">Titanio<br/>[Ar]3d<sup>2</sup>4s<sup>2</sup></div>
                </div>
                </div>
                <div class="cell">
                <div class="element">
                <div class="masa">50.9415</div>
                    <div class="at_num">23</div>
                    <div class="ener">650.9</div>
                    <div class="elec">1.63</div>
                    <div class="estad"> 
                    <li>+5</li>
                    <li>+4</li>
                    <li>+3</li>
                    <li>+2</li>
                    <li>+1</li>
                    <li>-1</li>
                    </div>
                    <div class="symbol">V</div>
                    <div class="at_details">Vanadio<br/>[Ar]3d<sup>3</sup>4s<sup>2</sup></div>
                </div>
                </div>
                <div class="cell">
                <div class="element">
                <div class="masa">51.9962</div>
                    <div class="at_num">24</div>
                    <div class="ener">652.9</div>
                    <div class="elec">1.66</div>
                    <div class="estad"> 
                    <li>+6</li>
                    <li>+5</li>
                    <li>+4</li>
                    <li>+3</li>
                    <li>+2</li>
                    <li>+1</li>
                    <li>-1</li>
                    <li>-2</li>
                    </div>
                    <div class="symbol">Cr</div>
                    <div class="at_details">Cromo<br/>[Ar]3d<sup>5</sup>4s<sup>1</sup></div>
                </div>
                </div>
                <div class="cell">
                <div class="element">
                <div class="masa">54.93804</div>
                    <div class="at_num">25</div>
                    <div class="ener">717.3</div>
                    <div class="elec">1.55</div>
                    <div class="estad"> 
                    <li>+7</li>
                    <li>+6</li>
                    <li>+5</li>
                    <li>+4</li>
                    <li>+3</li>
                    <li>+2</li>
                    <li>+1</li>
                    <li>...</li>
                    <li>-3</li>
                    </div>
                    <div class="symbol">Mn</div>
                    <div class="at_details">Manganeso<br/>[Ar]3d<sup>5</sup>4s<sup>2</sup></div>
                </div>
                </div>
                <div class="cell">
                <div class="element">
                <div class="masa">55.845</div>
                    <div class="at_num">26</div>
                    <div class="ener">762.5</div>
                    <div class="elec">1.83</div>
                    <div class="estad"> 
                    <li>+6</li>
                    <li>+5</li>
                    <li>+4</li>
                    <li>+3</li>
                    <li>+2</li>
                    <li>+1</li>
                    <li>-1</li>
                    <li>-2</li>
                    </div>
                    <div class="symbol">Fe</div>
                    <div class="at_details">Hierro<br/>[Ar]3d<sup>6</sup>4s<sup>2</sup></div>
                </div>
                </div>
                <div class="cell">
                <div class="element">
                <div class="masa">58.93319</div>
                    <div class="at_num">27</div>
                    <div class="ener">760.4</div>
                    <div class="elec">1.91</div>
                    <div class="estad"> 
                    <li>+5</li>
                    <li>+4</li>
                    <li>+3</li>
                    <li>+2</li>
                    <li>+1</li>
                    <li>-1</li>
                    <li>-2</li>
                    </div>
                    <div class="symbol">Co</div>
                    <div class="at_details">Cobalto<br/>[Ar]3d<sup>7</sup>4s<sup>2</sup></div>
                </div>
                </div>
                <div class="cell">
                <div class="element">
                <div class="masa">58.6934</div>
                    <div class="at_num">28</div>
                    <div class="ener">737.4</div>
                    <div class="elec">1.88</div>
                    <div class="estad"> 
                    <li>+4</li>
                    <li>+3</li>
                    <li>+2</li>
                    <li>+1</li>
                    <li>-1</li>
                    </div>
                    <div class="symbol">Ni</div>
                    <div class="at_details">Níquel<br/>[Ar]3d<sup>8</sup>4s<sup>2</sup></div>
                </div>
                </div>
                <div class="cell">
                <div class="element">
                <div class="masa">63.546</div>
                    <div class="at_num">29</div>
                    <div class="ener">745.5</div>
                    <div class="elec">1.90</div>
                    <div class="estad"> 
                    <li>+4</li>
                    <li>+3</li>
                    <li>+2</li>
                    <li>+1</li>
                    </div>
                    <div class="symbol">Cu</div>
                    <div class="at_details">Cobre<br/>[Ar]3d<sup>10</sup>4s<sup>1</sup></div>
                </div>
                </div>
                <div class="cell">
                <div class="element">
                <div class="masa">65.38</div>
                    <div class="at_num">30</div>
                    <div class="ener">906.4</div>
                    <div class="elec">1.65</div>
                    <div class="estad"> 
                    <li>+2</li>
                    <li></li>
                    </div>
                    <div class="symbol">Zn</div>
                    <div class="at_details">Zinc<br/>[Ar]3d<sup>10</sup>4s<sup>2</sup></div>
                </div>
                </div>
                <div class="cell">
                <div class="element">
                <div class="masa">69.723</div>
                    <div class="at_num">31</div>
                    <div class="ener">578.8</div>
                    <div class="elec">1.81</div>
                    <div class="estad"> 
                    <li>+3</li>
                    <li>+2</li>
                    <li>+1</li>
                    </div>
                    <div class="symbol">Ga</div>
                    <div class="at_details">Galio<br/>[Ar]3d<sup>10</sup>4s<sup>2</sup>>4p<sup>1</sup></div>
                </div>
                </div>
                <div class="cell">
                <div class="element">
                <div class="masa">72.64</div>
                    <div class="at_num">32</div>
                    <div class="ener">762.0</div>
                    <div class="elec">2.01</div>
                    <div class="estad"> 
                    <li>+4</li>
                    <li>+3</li>
                    <li>+2</li>
                    <li>+1</li>
                    <li>-4</li>
                    </div>
                    <div class="symbol">Ge</div>
                    <div class="at_details">Germanio<br/>[Ar]3d<sup>10</sup>4s<sup>2</sup>>4p<sup>2</sup></div>
                </div>
                </div>
                <div class="cell">
                <div class="element">
                <div class="masa">74.92160</div>
                    <div class="at_num">33</div>
                    <div class="ener">947.0</div>
                    <div class="elec">2.18</div>
                    <div class="estad"> 
                    <li>+5</li>
                    <li>+3</li>
                    <li>+2</li>
                    <li>-3</li>
                    </div>
                    <div class="symbol">As</div>
                    <div class="at_details">Arsénico<br/>[Ar]3d<sup>10</sup>4s<sup>2</sup>>4p<sup>3</sup></div>
                </div>
                </div>
                <div class="cell">
                <div class="element">
                <div class="masa">78.96</div>
                    <div class="at_num">34</div>
                    <div class="ener">941.0</div>
                    <div class="elec">2.55</div>
                    <div class="estad"> 
                    <li>+6</li>
                    <li>+4</li>
                    <li>+2</li>
                    <li>-2</li>
                    </div>
                    <div class="symbol">Se</div>
                    <div class="at_details">Selenio<br/>[Ar]3d<sup>10</sup>4s<sup>2</sup>>4p<sup>4</sup></div>
                </div>
                </div>
                <div class="cell">
                <div class="element">
                <div class="masa">79.904</div>
                    <div class="at_num">35</div>
                    <div class="ener">1139.9</div>
                    <div class="elec">2.96</div>
                    <div class="estad"> 
                    <li>+7</li>
                    <li>+5</li>
                    <li>+4</li>
                    <li>+3</li>
                    <li>+1</li>
                    <li>-1</li>
                    </div>
                    <div class="symbol">Br</div>
                    <div class="at_details">Bromo<br/>[Ar]3d<sup>10</sup>4s<sup>2</sup>>4p<sup>5</sup></div>
                </div>
                </div>
                <div class="cell">
                <div class="element">
                <div class="masa">83.798</div>
                    <div class="at_num">36</div>
                    <div class="ener">1350.8</div>
                    <div class="elec">3.00</div>
                    <div class="estad"> 
                    <li>+2</li>
                    <li></li>
                    </div>
                    <div class="symbol">Kr</div>
                    <div class="at_details">Kriptón<br/>[Ar]3d<sup>10</sup>4s<sup>2</sup>>4p<sup>6</sup></div>
                </div>
                </div>
            </div>
            <div class="periodic-row">
                <div class="cell">
                <div class="element">
                <div class="masa">85.4678</div>
                    <div class="at_num">37</div>
                    <div class="ener">403.0</div>
                    <div class="elec">0.82</div>
                    <div class="estad"> 
                    <li>+1</li>
                    <li></li>
                    </div>
                    <div class="symbol">Rb</div>
                    <div class="at_details">Rubidio<br/>[kr]5s<sup>1</sup></div>
                </div>
                </div>
                <div class="cell">
                <div class="element">
                <div class="masa">40.078</div>
                    <div class="at_num">38</div>
                    <div class="ener">549.5</div>
                    <div class="elec">0.95</div>
                    <div class="estad"> 
                    <li>+2</li>
                    <li></li>
                    </div>
                    <div class="symbol">Sr</div>
                    <div class="at_details">Estroncio<br/>[kr]5s<sup>2</sup></div>
                </div>
                </div>
                <div class="cell">
                <div class="element">
                <div class="masa">88.90585</div>
                    <div class="at_num">39</div>
                    <div class="ener">600.0</div>
                    <div class="elec">1.22</div>
                    <div class="estad"> 
                    <li>+3</li>
                    <li>+2</li>
                    <li>+1</li>
                    </div>
                    <div class="symbol">Y</div>
                    <div class="at_details">Itrio<br/>[kr]4d<sup>1</sup>5s<sup>2</sup></div>
                </div>
                </div>
                <div class="cell">
                <div class="element">
                <div class="masa">91.224</div>
                    <div class="at_num">40</div>
                    <div class="ener">640.1</div>
                    <div class="elec">1.33</div>
                    <div class="estad"> 
                    <li>+4</li>
                    <li>+3</li>
                    <li>+2</li>
                    <li>+1</li>
                    </div>
                    <div class="symbol">Zr</div>
                    <div class="at_details">Zirconio<br/>[kr]4d<sup>2</sup>5s<sup>2</sup></div>
                </div>
                </div>
                <div class="cell">
                <div class="element">
                <div class="masa">92.90638</div>
                    <div class="at_num">41</div>
                    <div class="ener">652.1</div>
                    <div class="elec">1.60</div>
                    <div class="estad"> 
                    <li>+5</li>
                    <li>+4</li>
                    <li>+3</li>
                    <li>+2</li>
                    <li>-1</li>
                    </div>
                    <div class="symbol">Nb</div>
                    <div class="at_details">Niobio<br/>[kr]4d<sup>4</sup>5s<sup>1</sup></div>
                </div>
                </div>
                <div class="cell">
                <div class="element">
                <div class="masa">95.96</div>
                    <div class="at_num">42</div>
                    <div class="ener">684.3</div>
                    <div class="elec">2.16</div>
                    <div class="estad"> 
                    <li>+6</li>
                    <li>+5</li>
                    <li>+4</li>
                    <li>+3</li>
                    <li>+2</li>
                    <li>+1</li>
                    <li>-1</li>
                    <li>-2</li>
                    </div>
                    <div class="symbol">Mo</div>
                    <div class="at_details">Molibdeno<br/>[kr]4d<sup>5</sup>5s<sup>1</sup></div>
                </div>
                </div>
                <div class="cell">
                <div class="element">
                <div class="masa">(98)</div>
                    <div class="at_num">43</div>
                    <div class="ener">702.0</div>
                    <div class="elec">1.90</div>
                    <div class="estad"> 
                    <li>+7</li>
                    <li>+6</li>
                    <li>+5</li>
                    <li>+4</li>
                    <li>+3</li>
                    <li>+2</li>
                    <li>+1</li>
                    <li>-1</li>
                    <li>-3</li>
                    </div>
                    <div class="symbol">Tc</div>
                    <div class="at_details">Tecnecio<br/>[kr]4d<sup>5</sup>5s<sup>2</sup></div>
                </div>
                </div>
                <div class="cell">
                <div class="element">
                <div class="masa">101.07</div>
                    <div class="at_num">44</div>
                    <div class="ener">710.2</div>
                    <div class="elec">2.20</div>
                    <div class="estad"> 
                    <li>+8</li>
                    <li>+7</li>
                    <li>+6</li>
                    <li>+5</li>
                    <li>+4</li>
                    <li>+3</li>
                    <li>+2</li>
                    <li>+1</li>
                    <li>-2</li>
                    </div>
                    <div class="symbol">Ru</div>
                    <div class="at_details">Rutenio<br/>[kr]4d<sup>7</sup>5s<sup>1</sup></div>
                </div>
                </div>
                <div class="cell">
                <div class="element">
                <div class="masa">102.9055</div>
                    <div class="at_num">45</div>
                    <div class="ener">719.7</div>
                    <div class="elec">2.28</div>
                    <div class="estad"> 
                    <li>+6</li>
                    <li>+5</li>
                    <li>+4</li>
                    <li>+3</li>
                    <li>+2</li>
                    <li>+1</li>
                    <li>-1</li>
                    </div>
                    <div class="symbol">Rh</div>
                    <div class="at_details">Rodio<br/>[kr]4d<sup>8</sup>5s<sup>1</sup></div>
                </div>
                </div>
                <div class="cell">
                <div class="element">
                <div class="masa">106.42</div>
                    <div class="at_num">46</div>
                    <div class="ener">804.4</div>
                    <div class="elec">2.20</div>
                    <div class="estad"> 
                    <li>+4</li>
                    <li>+2</li>
                    </div>
                    <div class="symbol">Pd</div>
                    <div class="at_details">Paladio<br/>[kr]4d<sup>10</sup></div>
                </div>
                </div>
                <div class="cell">
                <div class="element">
                <div class="masa">107.8682</div>
                    <div class="at_num">47</div>
                    <div class="ener">731.0</div>
                    <div class="elec">1.93</div>
                    <div class="estad"> 
                    <li>+3</li>
                    <li>+2</li>
                    <li>+1</li>
                    </div>
                    <div class="symbol">Ag</div>
                    <div class="at_details">Plata<br/>[kr]4d<sup>10</sup>5s<sup>1</sup></div>
                </div>
                </div>
                <div class="cell">
                <div class="element">
                <div class="masa">112.441</div>
                    <div class="at_num">48</div>
                    <div class="ener">867.8</div>
                    <div class="elec">1.69</div>
                    <div class="estad"> 
                    <li>+2</li>
                    <li></li>
                    </div>
                    <div class="symbol">Cd</div>
                    <div class="at_details">Cadmio<br/>[kr]4d<sup>10</sup>5s<sup>2</sup></div>
                </div>
                </div>
                <div class="cell">
                <div class="element">
                <div class="masa">114.818</div>
                    <div class="at_num">49</div>
                    <div class="ener">558.3</div>
                    <div class="elec">1.78</div>
                    <div class="estad"> 
                    <li>+3</li>
                    <li>+2</li>
                    <li>+1</li>
                    </div>
                    <div class="symbol">In</div>
                    <div class="at_details">Indio<br/>[kr]4d<sup>10</sup>5s<sup>2</sup>5p<sup>1</sup></div>
                </div>
                </div>
                <div class="cell">
                <div class="element">
                <div class="masa">118.710</div>
                    <div class="at_num">50</div>
                    <div class="ener">708.6</div>
                    <div class="elec">1.96</div>
                    <div class="estad"> 
                    <li>+4</li>
                    <li>+2</li>
                    <li>-4</li>
                    </div>
                    <div class="symbol">Sn</div>
                    <div class="at_details">Estaño<br/>[kr]4d<sup>10</sup>5s<sup>2</sup>5p<sup>2</sup></div>
                </div>
                </div>
                <div class="cell">
                <div class="element">
                <div class="masa">121.760</div>
                    <div class="at_num">51</div>
                    <div class="ener">834.0</div>
                    <div class="elec">2.05</div>
                    <div class="estad"> 
                    <li>+5</li>
                    <li>+3</li>
                    <li>-3</li>
                    </div>
                    <div class="symbol">Sb</div>
                    <div class="at_details">Antimonio<br/>[kr]4d<sup>10</sup>5s<sup>2</sup>5p<sup>3</sup></div>
                </div>
                </div>
                <div class="cell">
                <div class="element">
                <div class="masa">127.60</div>
                    <div class="at_num">52</div>
                    <div class="ener">869.3</div>
                    <div class="elec">2.10</div>
                    <div class="estad"> 
                    <li>+6</li>
                    <li>+5</li>
                    <li>+4</li>
                    <li>+2</li>
                    <li>-2</li>
                    </div>
                    <div class="symbol">Te</div>
                    <div class="at_details">Telurio<br/>[kr]4d<sup>10</sup>5s<sup>2</sup>5p<sup>4</sup></div>
                </div>
                </div>
                <div class="cell">
                <div class="element">
                <div class="masa">126.9044</div>
                    <div class="at_num">53</div>
                    <div class="ener">1008.4</div>
                    <div class="elec">2.66</div>
                    <div class="estad"> 
                    <li>+7</li>
                    <li>+5</li>
                    <li>+3</li>
                    <li>+1</li>
                    <li>-1</li>
                    </div>
                    <div class="symbol">I</div>
                    <div class="at_details">Yodo<br/>[kr]4d<sup>10</sup>5s<sup>2</sup>5p<sup>5</sup></div>
                </div>
                </div>
                <div class="cell">
                <div class="element">
                <div class="masa">131.293</div>
                    <div class="at_num">54</div>
                    <div class="ener">1170.4</div>
                    <div class="elec">2.60</div>
                    <div class="estad"> 
                    <li>+8</li>
                    <li>+6</li>
                    <li>+4</li>
                    <li>+2</li>
                    </div>
                    <div class="symbol">Xe</div>
                    <div class="at_details">Xenón<br/>[kr]4d<sup>10</sup>5s<sup>2</sup>5p<sup>6</sup></div>
                </div>
                </div>
            </div>
            <div class="periodic-row">
                <div class="cell">
                <div class="element">
                <div class="masa">132.9054</div>
                    <div class="at_num">55</div>
                    <div class="ener">375.7</div>
                    <div class="elec">0.79</div>
                    <div class="estad"> 
                    <li>+1</li>
                    <li></li>
                    </div>
                    <div class="symbol">Cs</div>
                    <div class="at_details">Cesio<br/>[Xe]6s<sup>1</sup></div>
                </div>
                </div>
                <div class="cell">
                <div class="element">
                <div class="masa">137.327</div>
                    <div class="at_num">56</div>
                    <div class="ener">502.9</div>
                    <div class="elec">0.89</div>
                    <div class="estad"> 
                    <li>+2</li>
                    <li></li>
                    </div>
                    <div class="symbol">Ba</div>
                    <div class="at_details">Bario<br/>[Xe]6s<sup>2</sup></div>
                </div>
                </div>
                <div class="cell">
                <div class="element">
                <div class="masa">174.9668</div>
                    <div class="at_num">71</div>
                    <div class="ener">523.5</div>
                    <div class="elec">1.27</div>
                    <div class="estad"> 
                    <li>+3</li>
                    <li></li>
                    </div>
                    <div class="symbol">Lu</div>
                    <div class="at_details">Lutecio<br/>[Xe]4f<sup>14</sup>5d<sup>1</sup>6s<sup>2</sup></div>
                </div>
                </div>
                <div class="cell">
                <div class="element">
                <div class="masa">178.49</div>
                    <div class="at_num">72</div>
                    <div class="ener">658.5</div>
                    <div class="elec">1.30</div>
                    <div class="estad"> 
                    <li>+4</li>
                    <li>+3</li>
                    <li>+2</li>
                    </div>
                    <div class="symbol">Hf</div>
                    <div class="at_details">Hafnio<br/>[Xe]4f<sup>14</sup>5d<sup>2</sup>6s<sup>2</sup></div>
                </div>
                </div>
                <div class="cell">
                <div class="element">
                <div class="masa">180.9478</div>
                    <div class="at_num">73</div>
                    <div class="ener">761.0</div>
                    <div class="elec">1.50</div>
                    <div class="estad"> 
                    <li>+5</li>
                    <li>+4</li>
                    <li>+3</li>
                    <li>+2</li>
                    <li>-1</li>
                    </div>
                    <div class="symbol">Ta</div>
                    <div class="at_details">Tantalio<br/>[Xe]4f<sup>14</sup>5d<sup>3</sup>6s<sup>2</sup></div>
                </div>
                </div>
                <div class="cell">
                <div class="element">
                <div class="masa">183.84</div>
                    <div class="at_num">74</div>
                    <div class="ener">770.0</div>
                    <div class="elec">2.36</div>
                    <div class="estad"> 
                    <li>+6</li>
                    <li>+5</li>
                    <li>+4</li>
                    <li>+3</li>
                    <li>+2</li>
                    <li>+1</li>
                    <li>-1</li>
                    <li>-2</li>
                    </div>
                    <div class="symbol">W</div>
                    <div class="at_details">Wolframio<br/>[Xe]4f<sup>14</sup>5d<sup>4</sup>6s<sup>2</sup></div>
                </div>
                </div>
                <div class="cell">
                <div class="element">
                <div class="masa">186.207</div>
                    <div class="at_num">75</div>
                    <div class="ener">760.0</div>
                    <div class="elec">1.90</div>
                    <div class="estad"> 
                    <li>+7</li>
                    <li>+6</li>
                    <li>+5</li>
                    <li>+4</li>
                    <li>+3</li>
                    <li>+2</li>
                    <li>+1</li>
                    <li>-1</li>
                    <li>-3</li>
                    </div>
                    <div class="symbol">Re</div>
                    <div class="at_details">Renio<br/>[Xe]4f<sup>14</sup>5d<sup>5</sup>6s<sup>2</sup></div>
                </div>
                </div>
                <div class="cell">
                <div class="element">
                <div class="masa">190.23</div>
                    <div class="at_num">76</div>
                    <div class="ener">840.0</div>
                    <div class="elec">2.20</div>
                    <div class="estad"> 
                    <li>+8</li>
                    <li>+7</li>
                    <li>+6</li>
                    <li>+5</li>
                    <li>+4</li>
                    <li>+3</li>
                    <li>+2</li>
                    <li>+1</li>
                    <li>-2</li>
                    </div>
                    <div class="symbol">Os</div>
                    <div class="at_details">Osmio<br/>[Xe]4f<sup>14</sup>5d<sup>6</sup>6s<sup>2</sup></div>
                </div>
                </div>
                <div class="cell">
                <div class="element">
                <div class="masa">192.217</div>
                    <div class="at_num">77</div>
                    <div class="ener">880.0</div>
                    <div class="elec">2.20</div>
                    <div class="estad"> 
                    <li>+6</li>
                    <li>+5</li>
                    <li>+4</li>
                    <li>+3</li>
                    <li>+2</li>
                    <li>+1</li>
                    <li>-1</li>
                    <li>-3</li>
                    </div>
                    <div class="symbol">Ir</div>
                    <div class="at_details">Iridio<br/>[Xe]4f<sup>14</sup>5d<sup>7</sup>6s<sup>2</sup></div>
                </div>
                </div>
                <div class="cell">
                <div class="element">
                <div class="masa">195.084</div>
                    <div class="at_num">78</div>
                    <div class="ener">870</div>
                    <div class="elec">2.28</div>
                    <div class="estad"> 
                    <li>+6</li>
                    <li>+5</li>
                    <li>+4</li>
                    <li>+2</li>
                    </div>
                    <div class="symbol">Pt</div>
                    <div class="at_details">Platino<br/>[Xe]4f<sup>14</sup>5d<sup>9</sup>6s<sup>1</sup></div>
                </div>
                </div>
                <div class="cell">
                <div class="element">
                <div class="masa">196.9665</div>
                    <div class="at_num">79</div>
                    <div class="ener">890.1</div>
                    <div class="elec">2.54</div>
                    <div class="estad"> 
                    <li>+5</li>
                    <li>+3</li>
                    <li>+2</li>
                    <li>+1</li>
                    <li>-1</li>
                    </div>
                    <div class="symbol">Au</div>
                    <div class="at_details">Oro<br/>[Xe]4f<sup>14</sup>5d<sup>10</sup>6s<sup>1</sup></div>
                </div>
                </div>
                <div class="cell">
                <div class="element">
                <div class="masa">200.59</div>
                    <div class="at_num">80</div>
                    <div class="ener">1007.1</div>
                    <div class="elec">2.00</div>
                    <div class="estad"> 
                    <li>+4</li>
                    <li>+2</li>
                    <li>+1</li>
                    </div>
                    <div class="symbol">Hg</div>
                    <div class="at_details">Mercurio<br/>[Xe]4f<sup>14</sup>5d<sup>10</sup>6s<sup>2</sup></div>
                </div>
                </div>
                <div class="cell">
                <div class="element">
                <div class="masa">204.3833</div>
                    <div class="at_num">81</div>
                    <div class="ener">589.4</div>
                    <div class="elec">1.62</div>
                    <div class="estad"> 
                    <li>+3</li>
                    <li>+1</li>
                    </div>
                    <div class="symbol">Tl</div>
                    <div class="at_details">Talio<br/>[Xe]4f<sup>14</sup>5d<sup>10</sup>6s<sup>2</sup>6p<sup>1</sup></div>
                </div>
                </div>
                <div class="cell">
                <div class="element">
                <div class="masa">207.2</div>
                    <div class="at_num">82</div>
                    <div class="ener">715.6</div>
                    <div class="elec">2.33</div>
                    <div class="estad"> 
                    <li>+4</li>
                    <li>+2</li>
                    <li>-4</li>
                    </div>
                    <div class="symbol">Pb</div>
                    <div class="at_details">Plomo<br/>[Xe]4f<sup>14</sup>5d<sup>10</sup>6s<sup>2</sup>6p<sup>2</sup></div>
                </div>
                </div>
                <div class="cell">
                <div class="element">
                <div class="masa">208.9804</div>
                    <div class="at_num">83</div>
                    <div class="ener">703.0</div>
                    <div class="elec">2.02</div>
                    <div class="estad"> 
                    <li>+5</li>
                    <li>+3</li>
                    <li>-3</li>
                    </div>
                    <div class="symbol">Bi</div>
                    <div class="at_details">Bismuto<br/>[Xe]4f<sup>14</sup>5d<sup>10</sup>6s<sup>2</sup>6p<sup>3</sup></div>
                </div>
                </div>
                <div class="cell">
                <div class="element">
                <div class="masa">(210)</div>
                    <div class="at_num">84</div>
                    <div class="ener">812.1</div>
                    <div class="elec">2.00</div>
                    <div class="estad"> 
                    <li>+6</li>
                    <li>+4</li>
                    <li>+2</li>
                    <li>-2</li>
                    </div>
                    <div class="symbol">Po</div>
                    <div class="at_details">Polonio<br/>[Xe]4f<sup>14</sup>5d<sup>10</sup>6s<sup>2</sup>6p<sup>4</sup></div>
                </div>
                </div>
                <div class="cell">
                <div class="element">
                <div class="masa">(210)</div>
                    <div class="at_num">85</div>
                    <div class="ener">890.0</div>
                    <div class="elec">2.20</div>
                    <div class="estad"> 
                    <li>+1</li>
                    <li>-1</li>
                    </div>
                    <div class="symbol">At</div>
                    <div class="at_details">Astato<br />[Xe]4f<sup>14</sup>5d<sup>10</sup>6s<sup>2</sup>6p<sup>5</sup></div>
                </div>
                </div>
                <div class="cell">
                <div class="element">
                <div class="masa">(220)</div>
                    <div class="at_num">86</div>
                    <div class="ener">1037.0</div>
                    <div class="elec">2.20</div>
                    <div class="estad"> 
                    <li></li>
                    <li></li>
                    </div>
                    <div class="symbol">Rn</div>
                    <div class="at_details">Radón<br/>[Xe]4f<sup>14</sup>5d<sup>10</sup>6s<sup>2</sup>6p<sup>6</sup></div>
                </div>
                </div>
            </div>
            <div class="periodic-row">
                <div class="cell">
                <div class="element">
                <div class="masa">(223)</div>
                    <div class="at_num">87</div>
                    <div class="ener">380.0</div>
                    <div class="elec">0.70</div>
                    <div class="estad"> 
                    <li>+1</li>
                    <li></li>
                    </div>
                    <div class="symbol">Fr</div>
                    <div class="at_details">Francio<br/>[Rn]7s<sup>1</sup></div>
                </div>
                </div>
                <div class="cell">
                <div class="element">
                <div class="masa">(226)</div>
                    <div class="at_num">88</div>
                    <div class="ener">509.3</div>
                    <div class="elec">0.90</div>
                    <div class="estad"> 
                    <li>+2</li>
                    <li></li>
                    </div>
                    <div class="symbol">Ra</div>
                    <div class="at_details">Radio<br/>[Rn]7s<sup>2</sup></div>
                </div>
                </div>
                <div class="cell">
                        <div class="element">
                <div class="masa">(262)</div>
                    <div class="at_num">103</div>
                    <div class="ener">470.0</div>
                    <div class="elec"></div>
                    <div class="estad"> 
                    <li>+3</li>
                    <li></li>
                    </div>
                    <div class="symbol">Rf</div>
                    <div class="at_details">Laurencio<br/>[Rn]5f<sup>14</sup>7s<sup>2</sup>7p<sup>1</sup></div>
                </div>
                </div>
                <div class="cell">
                <div class="element">
                <div class="masa">(261)</div>
                    <div class="at_num">104</div>
                    <div class="ener">580.0</div>
                    <div class="elec"></div>
                    <div class="estad"> 
                    <li>+3</li>
                    <li></li>
                    </div>
                    <div class="symbol">Rf</div>
                    <div class="at_details">Rutherfordio<br/>[Rn]5f<sup>14</sup>6d<sup>2</sup>7s<sup>2</sup></div>
                </div>
                </div>
                <div class="cell">
                <div class="element">
                <div class="masa">(262)</div>
                    <div class="at_num">105</div>
                    <div class="ener"></div>
                    <div class="elec"></div>
                    <div class="estad"> 
                    <li>+5</li>
                    <li></li>
                    </div>
                    <div class="symbol">Db</div>
                    <div class="at_details">Dubnio<br/></div>
                </div>
                </div>
                <div class="cell">
                <div class="element">
                <div class="masa">(266)</div>
                    <div class="at_num">106</div>
                    <div class="ener"></div>
                    <div class="elec"></div>
                    <div class="estad"> 
                    <li>+6</li>
                    <li></li>
                    </div>
                    <div class="symbol">Sg</div>
                    <div class="at_details">Seborgio<br/></div>
                </div>
                </div>
                <div class="cell">
                <div class="element">
                <div class="masa">(264)</div>
                    <div class="at_num">107</div>
                    <div class="ener"></div>
                    <div class="elec"></div>
                    <div class="estad"> 
                    <li>+7</li>
                    <li></li>
                    </div>
                    <div class="symbol">Bh</div>
                    <div class="at_details">Bohrio<br/></div>
                </div>
                </div>
                <div class="cell">
                <div class="element">
                <div class="masa">(277)</div>
                    <div class="at_num">108</div>
                    <div class="ener"></div>
                    <div class="elec"></div>
                    <div class="estad"> 
                    <li>+8</li>
                    <li></li>
                    </div>
                    <div class="symbol">Hs</div>
                    <div class="at_details">Hassio<br /></div>
                </div>
                </div>
                <div class="cell">
                <div class="element">
                <div class="masa">(268)</div>
                    <div class="at_num">109</div>
                    <div class="ener"></div>
                    <div class="elec"></div>
                    <div class="estad"> 
                    <li></li>
                    <li></li>
                    </div>
                    <div class="symbol">Mt</div>
                    <div class="at_details">Meitnerio<br/></div>
                </div>
                </div>
                <div class="cell">
                <div class="element">
                <div class="masa">(271)</div>
                    <div class="at_num">110</div>
                    <div class="ener"></div>
                    <div class="elec"></div>
                    <div class="estad"> 
                    <li></li>
                    <li></li>
                    </div>
                    <div class="symbol">Ds</div>
                    <div class="at_details">Darmstadio<br/></div>
                </div>
                </div>
                <div class="cell">
                <div class="element">
                <div class="masa">(272)</div>
                    <div class="at_num">111</div>
                    <div class="ener"></div>
                    <div class="elec"></div>
                    <div class="estad"> 
                    <li></li>
                    <li></li>
                    </div>
                    <div class="symbol">Rg</div>
                    <div class="at_details">Roentgenio<br/></div>
                </div>
                </div>
                <div class="cell">
                <div class="element">
                <div class="masa">()</div>
                    <div class="at_num">112</div>
                    <div class="ener"></div>
                    <div class="elec"></div>
                    <div class="estad"> 
                    <li></li>
                    <li></li>
                    </div>
                    <div class="symbol">Cn</div>
                    <div class="at_details">Copernicio<br/></div>
                </div>
                </div>
                <div class="cell">
                <div class="element">
                <div class="masa">(284)</div>
                    <div class="at_num">113</div>
                    <div class="ener"></div>
                    <div class="elec"></div>
                    <div class="estad"> 
                    <li></li>
                    <li></li>
                    </div>
                    <div class="symbol">Uut</div>
                    <div class="at_details">Ununtrio<br /></div>
                </div>
                </div>
                <div class="cell">
                <div class="element">
                <div class="masa">(289)</div>
                    <div class="at_num">114</div>
                    <div class="ener"></div>
                    <div class="elec"></div>
                    <div class="estad"> 
                    <li></li>
                    <li></li>
                    </div>
                    <div class="symbol">Fl</div>
                    <div class="at_details">Flerovio<br /></div>
                </div>
                </div>
                <div class="cell">
                <div class="element">
                <div class="masa">(288)</div>
                    <div class="at_num">115</div>
                    <div class="ener"></div>
                    <div class="elec"></div>
                    <div class="estad"> 
                    <li></li>
                    <li></li>
                    </div>
                    <div class="symbol">Uup</div>
                    <div class="at_details">Unumpentio<br /></div>
                </div>
                </div>
                <div class="cell">
                <div class="element">
                <div class="masa">(292)</div>
                    <div class="at_num">116</div>
                    <div class="ener"></div>
                    <div class="elec"></div>
                    <div class="estad"> 
                    <li></li>
                    <li></li>
                    </div>
                    <div class="symbol">Lv</div>
                    <div class="at_details">Livermorio<br /></div>
                </div>
                </div>
                <div class="cell">
                <div class="element">
                <div class="masa"></div>
                    <div class="at_num">117</div>
                    <div class="ener"></div>
                    <div class="elec"></div>
                    <div class="estad"> 
                    <li></li>
                    <li></li>
                    </div>
                    <div class="symbol">Uus</div>
                    <div class="at_details">Ununseptio<br /></div>
                </div>
                </div>
                <div class="cell">
                <div class="element">
                <div class="masa">(294)</div>
                    <div class="at_num">118</div>
                    <div class="ener"></div>
                    <div class="elec"></div>
                    <div class="estad"> 
                    <li></li>
                    <li></li>
                    </div>
                    <div class="symbol">Uuo</div>
                    <div class="at_details">Ununoctio<br /></div>
                </div>
                </div>
            </div>
            <div class="periodic-row"></div>
            <div class="periodic-row">
                <div class="cell"></div>
                <div class="cell"></div>
                <div class="cell"></div>
                <div class="cell">
                <div class="element">
                <div class="masa">138.9054</div>
                    <div class="at_num">57</div>
                    <div class="ener">538.1</div>
                    <div class="elec">1.10</div>
                    <div class="estad"> 
                    <li>+3</li>
                    <li>+2</li>
                    </div>
                    <div class="symbol">La</div>
                    <div class="at_details">Lantano<br/>[Xe]5d<sup>1</sup>6s<sup>2</sup></div>
                </div>
                </div>
                <div class="cell">
                <div class="element">
                <div class="masa">140.116</div>
                    <div class="at_num">58</div>
                    <div class="ener">534.4</div>
                    <div class="elec">1.12</div>
                    <div class="estad"> 
                    <li>+4</li>
                    <li>+3</li>
                    <li>+2</li>
                    </div>
                    <div class="symbol">Ce</div>
                    <div class="at_details">Cerio<br/>[Xe]4f<sup>1</sup>5d<sup>1</sup>6s<sup>2</sup></div>
                </div>
                </div>
                <div class="cell">
                <div class="element">
                <div class="masa">140.9076</div>
                    <div class="at_num">59</div>
                    <div class="ener">527.0</div>
                    <div class="elec">1.13</div>
                    <div class="estad"> 
                    <li>+4</li>
                    <li>+3</li>
                    <li>+2</li>
                    </div>
                    <div class="symbol">Pr</div>
                    <div class="at_details">Praseodimio<br/>[Xe]4f<sup>3</sup>6s<sup>2</sup></div>
                </div>
                </div>
                <div class="cell">
                <div class="element">
                <div class="masa">144.242</div>
                    <div class="at_num">60</div>
                    <div class="ener">533.1</div>
                    <div class="elec">1.14</div>
                    <div class="estad"> 
                    <li>+3</li>
                    <li>+2</li>
                    </div>
                    <div class="symbol">Nd</div>
                    <div class="at_details">Neodimio<br/>[Xe]4f<sup>4</sup>6s<sup>2</sup></div>
                </div>
                </div>
                <div class="cell">
                <div class="element">
                <div class="masa">(145)</div>
                    <div class="at_num">61</div>
                    <div class="ener">540.0</div>
                    <div class="elec"></div>
                    <div class="estad"> 
                    <li>+3</li>
                    <li></li>
                    </div>
                    <div class="symbol">Pm</div>
                    <div class="at_details">Prometio<br/>[Xe]4f<sup>5</sup>6s<sup>2</sup></div>
                </div>
                </div>
                <div class="cell">
                <div class="element">
                <div class="masa">150.36</div>
                    <div class="at_num">62</div>
                    <div class="ener">544.5</div>
                    <div class="elec">1.17</div>
                    <div class="estad"> 
                    <li>+3</li>
                    <li>+2</li>
                    </div>
                    <div class="symbol">Sm</div>
                    <div class="at_details">Samario<br/>[Xe]4f<sup>6</sup>6s<sup>2</sup></div>
                </div>
                </div>
                <div class="cell">
                <div class="element">
                <div class="masa">151.964</div>
                    <div class="at_num">63</div>
                    <div class="ener">547.1</div>
                    <div class="elec"></div>
                    <div class="estad"> 
                    <li>+3</li>
                    <li>+2</li>
                    </div>
                    <div class="symbol">Eu</div>
                    <div class="at_details">Europio<br/>[Xe]4f<sup>7</sup>6s<sup>2</sup></div>
                </div>
                </div>
                <div class="cell">
                <div class="element">
                <div class="masa">157.25</div>
                    <div class="at_num">64</div>
                    <div class="ener">593.4</div>
                    <div class="elec">1.20</div>
                    <div class="estad"> 
                    <li>+3</li>
                    <li>+2</li>
                    <li>+1</li>
                    </div>
                    <div class="symbol">Gd</div>
                    <div class="at_details">Gadolinio<br/>[Xe]4f<sup>7</sup>5d<sup>1</sup>6s<sup>2</sup></div>
                </div>
                </div>
                <div class="cell">
                <div class="element">
                <div class="masa">158.9253</div>
                    <div class="at_num">65</div>
                    <div class="ener">565.8</div>
                    <div class="elec"></div>
                    <div class="estad"> 
                    <li>+4</li>
                    <li>+3</li>
                    <li>+1</li>
                    </div>
                    <div class="symbol">Tb</div>
                    <div class="at_details">Terbio<br/>[Xe]4f<sup>9</sup>6s<sup>2</sup></div>
                </div>
                </div>
                <div class="cell">
                <div class="element">
                <div class="masa">162.500</div>
                    <div class="at_num">66</div>
                    <div class="ener">573.0</div>
                    <div class="elec">1.22</div>
                    <div class="estad"> 
                    <li>+3</li>
                    <li>+2</li>
                    </div>
                    <div class="symbol">Dy</div>
                    <div class="at_details">Disprosio<br/>[Xe]4f<sup>10</sup>6s<sup>2</sup></div>
                </div>
                </div>
                <div class="cell">
                <div class="element">
                <div class="masa">164.9303</div>
                    <div class="at_num">67</div>
                    <div class="ener">581.0</div>
                    <div class="elec">1.23</div>
                    <div class="estad"> 
                    <li>+3</li>
                    <li></li>
                    </div>
                    <div class="symbol">Ho</div>
                    <div class="at_details">Holmio<br/>[Xe]4f<sup>11</sup>6s<sup>2</sup></div>
                </div>
                </div>
                <div class="cell">
                <div class="element">
                <div class="masa">167.259</div>
                    <div class="at_num">68</div>
                    <div class="ener">589.3</div>
                    <div class="elec">1.24</div>
                    <div class="estad"> 
                    <li>+3</li>
                    <li></li>
                    </div>
                    <div class="symbol">Er</div>
                    <div class="at_details">Erbio<br/>[Xe]4f<sup>12</sup>6s<sup>2</sup></div>
                </div>
                </div>
                <div class="cell">
                <div class="element">
                <div class="masa">168.9342</div>
                    <div class="at_num">69</div>
                    <div class="ener">596.7</div>
                    <div class="elec">1.25</div>
                    <div class="estad"> 
                    <li>+3</li>
                    <li>+2</li>
                    </div>
                    <div class="symbol">Tm</div>
                    <div class="at_details">Tulio<br/>[Xe]4f<sup>13</sup>6s<sup>2</sup></div>
                </div>
                </div>
                <div class="cell">
                <div class="element">
                <div class="masa">173.054</div>
                    <div class="at_num">70</div>
                    <div class="ener">603.4</div>
                    <div class="elec"></div>
                    <div class="estad"> 
                    <li>+3</li>
                    <li>+2</li>
                    </div>
                    <div class="symbol">Yb</div>
                    <div class="at_details">Iterbio<br/>[Xe]4f<sup>14</sup>6s<sup>2</sup></div>
                </div>
                </div>
                <div class="cell"></div>
            </div>
            <div class="periodic-row">
                <div class="cell"></div>
                <div class="cell"></div>
                <div class="cell"></div>
                <div class="cell">
                <div class="element">
                <div class="masa">()227</div>
                    <div class="at_num">89</div>
                    <div class="ener">499.0</div>
                    <div class="elec">1.10</div>
                    <div class="estad"> 
                    <li>+3</li>
                    <li></li>
                    </div>
                    <div class="symbol">Ac</div>
                    <div class="at_details">Actinio<br/>[Rn]6d<sup>1</sup>7s<sup>2</sup></div>
                </div>
                </div>
                <div class="cell">
                <div class="element">
                <div class="masa">232.0280</div>
                    <div class="at_num">90</div>
                    <div class="ener">578.0</div>
                    <div class="elec">1.30</div>
                    <div class="estad"> 
                    <li>+4</li>
                    <li>+3</li>
                    <li>+2</li>
                    </div>
                    <div class="symbol">Th</div>
                    <div class="at_details">Torio<br/>[Rn]6d<sup>2</sup>7s<sup>2</sup></div>
                </div>
                </div>
                <div class="cell">
                <div class="element">
                <div class="masa">231.0358</div>
                    <div class="at_num">91</div>
                    <div class="ener">568.0</div>
                    <div class="elec">1.50</div>
                    <div class="estad"> 
                    <li>+5</li>
                    <li>+4</li>
                    <li>+3</li>
                    </div>
                    <div class="symbol">Pa</div>
                    <div class="at_details">Protactinio<br/>[Rn]5f<sup>2</sup>6d<sup>1</sup>7s<sup>2</sup></div>
                </div>
                </div>
                <div class="cell">
                <div class="element">
                <div class="masa">238.0289</div>
                    <div class="at_num">92</div>
                    <div class="ener">597.6</div>
                    <div class="elec">1.38</div>
                    <div class="estad"> 
                    <li>+6</li>
                    <li>+5</li>
                    <li>+4</li>
                    <li>+3</li>
                    </div>
                    <div class="symbol">U</div>
                    <div class="at_details">Uranio<br/>[Rn]5f<sup>3</sup>6d<sup>1</sup>7s<sup>2</sup></div>
                </div>
                </div>
                <div class="cell">
                <div class="element">
                <div class="masa">(237)</div>
                    <div class="at_num">93</div>
                    <div class="ener">604.5</div>
                    <div class="elec">1.36</div>
                    <div class="estad"> 
                    <li>+7</li>
                    <li>+6</li>
                    <li>+5</li>
                    <li>+4</li>
                    <li>+3</li>
                    </div>
                    <div class="symbol">Np</div>
                    <div class="at_details">Neptunio<br/>[Rn]5f<sup>4</sup>6d<sup>1</sup>7s<sup>2</sup></div>
                </div>
                </div>
                <div class="cell">
                <div class="element">
                <div class="masa">(244)</div>
                    <div class="at_num">94</div>
                    <div class="ener">584.7</div>
                    <div class="elec">1.28</div>
                    <div class="estad"> 
                    <li>+7</li>
                    <li>+6</li>
                    <li>+5</li>
                    <li>+4</li>
                    <li>+3</li>
                    </div>
                    <div class="symbol">Pu</div>
                    <div class="at_details">Plutonio<br/>[Rn]5f<sup>6</sup>7s<sup>2</sup></div>
                </div>
                </div>
                <div class="cell">
                <div class="element">
                <div class="masa">(243)</div>
                    <div class="at_num">95</div>
                    <div class="ener">578.0</div>
                    <div class="elec">1.30</div>
                    <div class="estad"> 
                    <li>+6</li>
                    <li>+5</li>
                    <li>+4</li>
                    <li>+3</li>
                    <li>+2</li>
                    </div>
                    <div class="symbol">Am</div>
                    <div class="at_details">Americio<br/>[Rn]5f<sup>7</sup>7s<sup>2</sup></div>
                </div>
                </div>
                <div class="cell">
                <div class="element">
                <div class="masa">(247)</div>
                    <div class="at_num">96</div>
                    <div class="ener">581.0</div>
                    <div class="elec">1.30</div>
                    <div class="estad"> 
                    <li>+4</li>
                    <li>+3</li>
                    </div>
                    <div class="symbol">Cm</div>
                    <div class="at_details">Curio<br/>[Rn]5f<sup>7</sup>6d<sup>1</sup>7s<sup>2</sup></div>
                </div>
                </div>
                <div class="cell">
                <div class="element">
                <div class="masa">(247)</div>
                    <div class="at_num">97</div>
                    <div class="ener">601.0</div>
                    <div class="elec">1.30</div>
                    <div class="estad"> 
                    <li>+4</li>
                    <li>+3</li>
                    </div>
                    <div class="symbol">Bk</div>
                    <div class="at_details">Berkelio<br/>[Rn]5f<sup>9</sup>7s<sup>2</sup></div>
                </div>
                </div>
                <div class="cell">
                <div class="element">
                <div class="masa">(251)</div>
                    <div class="at_num">98</div>
                    <div class="ener">608.0</div>
                    <div class="elec">1.30</div>
                    <div class="estad"> 
                    <li>+4</li>
                    <li>+3</li>
                    <li>+1</li>
                    </div>
                    <div class="symbol">Cf</div>
                    <div class="at_details">Californio<br/>[Rn]5f<sup>10</sup>7s<sup>2</sup></div>
                </div>
                </div>
                <div class="cell">
                <div class="element">
                <div class="masa">(252)</div>
                    <div class="at_num">99</div>
                    <div class="ener">619.0</div>
                    <div class="elec">1.30</div>
                    <div class="estad"> 
                    <li>+3</li>
                    <li>+2</li>
                    </div>
                    <div class="symbol">Es</div>
                    <div class="at_details">Einstenio<br/>[Rn]5f<sup>11</sup>7s<sup>2</sup></div>
                </div>
                </div>
                <div class="cell">
                <div class="element">
                <div class="masa">(257)</div>
                    <div class="at_num">100</div>
                    <div class="ener">627.0</div>
                    <div class="elec">1.30</div>
                    <div class="estad"> 
                    <li>+3</li>
                    <li>+2</li>
                    </div>
                    <div class="symbol">Fm</div>
                    <div class="at_details">Fermio<br/>[Rn]5f<sup>12</sup>7s<sup>2</sup></div>
                </div>
                </div>
                <div class="cell">
                <div class="element">
                <div class="masa">(258)</div>
                    <div class="at_num">101</div>
                    <div class="ener">635.0</div>
                    <div class="elec">1.30</div>
                    <div class="estad"> 
                    <li>+3</li>
                    <li>+2</li>
                    </div>
                    <div class="symbol">Md</div>
                    <div class="at_details">Mendelevio<br/>[Rn]5f<sup>13</sup>7s<sup>2</sup></div>
                </div>
                </div>
                <div class="cell">
                <div class="element">
                <div class="masa">(259)</div>
                    <div class="at_num">102</div>
                    <div class="ener">642.0</div>
                    <div class="elec">1.30</div>
                    <div class="estad"> 
                    <li>+3</li>
                    <li>+2</li>
                    </div>
                    <div class="symbol">No</div>
                    <div class="at_details">Nobelio<br/>[Rn]5f<sup>14</sup>7s<sup>2</sup></div>
                </div>
                </div>
                <div class="cell"></div>
            </div>
            <div class="legend">
            <ul class="list-2">
                <li class="type-1">metales alcalinos</li>
                <li class="type-2">alcalinotérreos</li>
                <li class="type-3">otros metales</li>
                <li class="type-4">metales de transición</li>
                <li class="type-5">lantánidos</li>
                <li class="type-6">actínidos</li>
            </ul>
            <ul class="list-3">
            <li class="type-7">metaloides</li>
                <li class="type-8">no metales</li>
                <li class="type-9">halógenos</li>
                <li class="type-10">gases nobles</li>
                <li class="type-11">elementos desconocidos</li>
                <li class="type-12"><img src="https://pixabay.com/static/uploads/photo/2014/04/02/10/26/nuclear-303831_960_720.png" width="13"> masa de elementos radiactivos entre paréntesis</li>
                </ul>
            </div>
            <div style="clear:both;"></div>
            </div>
    
    </main>

    

    <footer class="pie-pagina">
        <div class="contactos">
            <p>    
                CONTÁCTANOS <br>
                <br>
                <a>Facebook: RALQ</a> <br>
                Correo: ralq.utsv@mail.com<br>
                Teléfono: +123 456 789 <br>
                <br>
            </p>
        </div>
        <div class="colaboradores">
            <p>
                Colaboradores: <br>
                <br>
                Emir Polito Guevara <br>
                Irving Esteban Molina Méndez <br>
                Cristian Daniel Barraza Hernández <br>
                <br>
                2024 &copy; Todos los derechos reservados. 
            </p>
        </div>
        <img src="img/utsv-log.png" alt="Imagen del Footer" class="imagen-footer">
    </footer>
</body>
</html>
