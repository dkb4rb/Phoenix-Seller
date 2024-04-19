<h1 align="center">
<a  href=""><img src="https://github.com/dkb4rb/Phoenix-Seller/blob/main/assets/Logo.svg" alt="PhoenixSeller" width="300" style="margin-left: 250px!importan;margin-bottom: -10px;"></a>
<br>
Phoenix Seller
</h1>

<h4 align="center">A minimal Tool to attacks for cookies deserialization in PHP <a href="http://electron.atom.io" target="_blank">Pho3nix</a>.</h4>

<p align="center">
  <a href="https://badge.fury.io/js/electron-markdownify">
    <img src="https://badge.fury.io/js/electron-markdownify.svg"
         alt="Gitter">
  </a>
  <a href="https://gitter.im/amitmerchant1990/electron-markdownify"><img src="https://badges.gitter.im/amitmerchant1990/electron-markdownify.svg"></a>
  <a href="https://saythanks.io/to/bullredeyes@gmail.com">
      <img src="https://img.shields.io/badge/SayThanks.io-%E2%98%BC-1EAEDB.svg">
  </a>
  <a href="https://www.paypal.me/AmitMerchant">
    <img src="https://img.shields.io/badge/$-donate-ff69b4.svg?maxAge=2592000&amp;style=flat">
  </a>
</p>

<p align="center">
  <a href="#key-features">Key Features</a> •
  <a href="#how-to-use">Como usar</a> •
  <a href="#download">Download</a> •
  <a href="#license">License</a>
</p>
<center>

  ![screenshot](https://github.com/dkb4rb/ProxFuzzer/blob/main/assets/Present.gif))
</center>

# Características Clave

## Lectura de Usuarios desde Archivo
- La función `leerUsuarios($archivo)` comprueba la existencia y legibilidad del archivo de usuarios. Si es accesible, lee los nombres de usuario desde el archivo y los devuelve como un array.

## Generación de Cookies Codificadas
- Las funciones `generarCookie($id, $username)` y `generarCookieNoencode($id, $username)` crean cookies para un usuario dado, codificadas y serializadas respectivamente. Incluyen un tiempo de expiración de 1 día.

## Verificación de Argumentos de Línea de Comandos
- Verifica que se proporcionen exactamente tres argumentos de línea de comandos (URL y archivo de wordlist). En caso contrario, muestra un mensaje de uso y termina el script.

## Envío de Solicitudes HTTP con Cookies Personalizadas
- Utiliza las cookies generadas para enviar solicitudes HTTP a una URL especificada, incluyendo las cookies en el encabezado de la solicitud.

## Búsqueda de Usuarios Válidos
- Itera sobre los nombres de usuario leídos del archivo y prueba cada uno de ellos en la URL especificada, mostrando el progreso y los resultados en la consola.

## Impresión de Usuarios Encontrados
- Imprime en la consola los usuarios para los cuales se encontró una cookie válida, mostrando información como el nombre de usuario, la cookie codificada y la cookie serializada.

## Interfaz de Usuario Interactiva
- Muestra un banner ASCII al inicio de cada prueba de usuario y proporciona una salida clara y legible durante todo el proceso de búsqueda.

## Compatibilidad con Ejecución Directa y como Módulo
- Permite la ejecución directa desde la línea de comandos, verificando si se cumplen los requisitos de argumentos. También puede ser importado como módulo en otros scripts para su reutilización.

## Gestión de Errores y Excepciones
- Maneja situaciones donde el archivo de usuarios no puede ser leído, mostrando un mensaje de error adecuado y terminando el script.


# Cómo Usar

1. **Requisitos Previos:**
   - Asegúrate de tener PHP instalado en tu sistema.
   
2. **Descarga el Script:**
   - Descarga el script PHP y guárdalo en tu sistema con el nombre `script.php`.

3. **Ejecución desde la Línea de Comandos:**
   - Abre una terminal o línea de comandos en tu sistema.

4. **Ejecutar el Script:**
   - Ejecuta el script PHP proporcionando dos argumentos:
     ```
     php script.php <URL> <archivo_wordlist>
     ```
     - `<URL>`: La URL base que deseas probar.
     - `<archivo_wordlist>`: La ruta del archivo de wordlist que contiene los nombres de usuario a probar.

5. **Interpretación de Resultados:**
   - El script iniciará la prueba de cada usuario en la URL base proporcionada.
   - Los resultados se imprimirán en la consola, indicando si se encontraron cookies válidas para cada usuario o no.

6. **Análisis de Resultados:**
   - Analiza los resultados impresos en la consola para identificar usuarios con cookies válidas y posibles vulnerabilidades en la aplicación web.

7. **Personalización Adicional:**
   - Puedes modificar el banner ASCII, ajustar los colores o expandir la funcionalidad del script según tus necesidades específicas.

8. **¡Experimenta!**
   - ¡Experimenta con diferentes archivos de wordlist y URLs para encontrar posibles puntos de acceso en la aplicación web objetivo!

```bash
# Clone this repository
$ git clone https://github.com/dkb4rb/Phoenix-Seller.git

# Go into the repository
$ cd ProxFuzzer

# Run the app
$ php script.php <URL> <archivo_wordlist>
```

## Support

<a href="https://www.buymeacoffee.com/dkb4rb" target="_blank"><img src="https://www.buymeacoffee.com/assets/img/custom_images/purple_img.png" alt="Buy Me A Coffee" style="height: 41px !important;width: 174px !important;box-shadow: 0px 3px 2px 0px rgba(190, 190, 190, 0.5) !important;-webkit-box-shadow: 0px 3px 2px 0px rgba(190, 190, 190, 0.5) !important;" ></a>

## License

MIT

---

> [amitmerchant.com](https://dkb4rb.github.io) &nbsp;&middot;&nbsp;
> GitHub [@Dkb4rb](https://github.com/dkb4rb) &nbsp;&middot;&nbsp;

