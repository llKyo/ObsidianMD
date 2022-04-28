# Navegador Académico

## Servidor
Para conectarse al #servidor de #na se debe utilizar los siguientes datos
### Desarollo
Server Universis|Navegador Académico de desarollo #do

| Nombre  | Host        |   Port   |  DB/Schema      |
|  :-----:   |	  :---:     |   :---:   |     :-----:      |
|  Lupus   | 158.251.2.4 |  4100     | DESA_UNIVERSIS | 

| User     | Pass  |
|    :---: |  :-----: |
|USERUNIV |    fun433c76      |

---
## Testing
Server Universis|Navegador Académico de testing #testing

| Nombre  | Host        |   Port   |  DB/Schema      |
|  :-----:   |	  :---:     |   :---:   |     :-----:      |
|  *   | 158.251.2.35 |  4100     | TEST_UNIVERSIS | 

| User     | Pass  |
|    :---: |  :-----: |
|UCV14UNIV |    c30c45u23      |

----
## Links
[http://158.251.4.93/navegador_academico_desa/](http://158.251.4.93/navegador_academico_desa/)

---
## Datos importantes para el FTP 

### 1. Manejador de archivos

```Ruta
clases/utiles/ManejadorArchivos.php
```


Linea 30 	
```php
private static $at_i_espacios_hasta_raiz = 5;
```
4 + la cantidad de carpetas que diga para dentro en mi caso 5


### 2. Archivo Configuración
```Ruta
config/config.php
```

Linea 5		
```PHP
$is_usuario_conexion = "USERUNIV" ;
```
Linea 6		
```PHP
$is_pass_conexion = "fun433c76" ;
```


### 3. Archivo de configuración variables globales
```Ruta
config/config_variables_globables.php
```

Cambiar destinatarios de correo por el mio
```php
$GLOBALS['gs_directorio_raiz']     = "UDS/kevin.trivino/NA"; 
//--DIRECTORIO RAIZ FTP
$GLOBALS['gs_directorio_raiz_ftp'] = "UDS/kevin.trivino/NA";
```

### 0. Archivo con los cambios realizados

![[config.php]]

![[config_variables_globales.php]]




