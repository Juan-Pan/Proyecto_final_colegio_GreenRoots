# 🌳 Instrucciones de Despliegue - GreenRoots

## 📋 Resumen

Esta carpeta `deploy/` contiene **TODOS** los archivos necesarios para subir a InfinityFree.
Son aproximadamente **91 archivos** y **71 imágenes** de árboles.

---

## 🚀 Pasos para desplegar en InfinityFree

### 1️⃣ Verificar archivo `.env`

El archivo `.env` ya está creado en esta carpeta con tus credenciales:
```
DB_HOST=sql112.infinityfree.com
DB_USER=if0_40582586
DB_PASS=HLyEfhex0fOVs
DB_NAME=if0_40582586_greenroo_roots
```

✅ **IMPORTANTE:** Este archivo `.env` NO está en GitHub (protegido por `.gitignore`)

### 2️⃣ Subir archivos por FTP

**Opción A - FileZilla (Recomendado):**
1. Descarga FileZilla: https://filezilla-project.org/
2. Conecta con tus credenciales FTP de InfinityFree
3. Navega a `htdocs/` en el servidor (lado derecho)
4. Arrastra **TODO** el contenido de la carpeta `deploy/` a `htdocs/`
   - Incluye: carpetas `css/`, `js/`, `php/`, `imagenes/`
   - Incluye: todos los archivos `.php`, `.png`, `.mp4`
   - Incluye: archivo `.env` (muy importante)

**Opción B - File Manager web:**
1. En InfinityFree → Control Panel → Online File Manager
2. Navega a `htdocs/`
3. Sube los archivos (más lento pero sin instalar nada)

### 3️⃣ Importar base de datos

1. Ve al panel de InfinityFree
2. Abre **phpMyAdmin**
3. Selecciona tu base de datos (debería llamarse `if0_40582586_greenroo_roots`)
4. Clic en **"Importar"**
5. Sube el archivo `greenroo_roots.sql` que está en esta carpeta
6. Clic en **"Continuar"**

### 4️⃣ Verificar el nombre de la base de datos

⚠️ **MUY IMPORTANTE:**
- Ve a phpMyAdmin y verifica el nombre EXACTO de tu base de datos
- Si es diferente a `if0_40582586_greenroo_roots`, edita el archivo `.env` en el servidor
- El nombre debe coincidir exactamente

### 5️⃣ Probar el sitio

1. Ve a tu URL de InfinityFree (ej: `http://greenroots.wuaze.com`)
2. Deberías ver la página principal con:
   - ✅ Logo y background
   - ✅ Video en la sección correspondiente
   - ✅ Tarjetas de árboles con imágenes
   - ✅ Navegación funcionando

---

## 📂 Estructura que debe quedar en `htdocs/`

```
htdocs/
├── css/
│   ├── bootstrap.min.css
│   └── estilosformulario.css
├── js/
│   ├── bootstrap.js
│   ├── jquery.js
│   ├── sweetalert.js
│   ├── sesion.js
│   └── busquedaarbol.js
├── php/
│   ├── navbar.php
│   ├── navbaradmin.php
│   ├── navbarindexad.php
│   └── footer.php
├── imagenes/
│   └── (71 imágenes de árboles)
├── .env (TUS CREDENCIALES)
├── config.php
├── funciones.php
├── index.php
├── about.php
├── arboles1.php
├── arbol.php ... arbol50.php (páginas de árboles)
├── indexadmin.php
├── (y todos los demás archivos PHP)
├── GreenRoots.png
├── greenroots1.png
├── logo.png
├── indexlogo.png
├── flor.png
├── about2.png
└── Compreso.mp4
```

---

## 🔍 Solución de problemas

### ❌ "Error conectando al servidor"
- Verifica que el archivo `.env` esté subido
- Verifica que las credenciales en `.env` sean correctas
- Verifica el nombre de la base de datos

### ❌ "No se ven las imágenes"
- Verifica que la carpeta `imagenes/` esté subida completa
- Verifica que los archivos PNG estén en la raíz (`indexlogo.png`, `logo.png`, etc.)

### ❌ "El video no carga"
- Verifica que `Compreso.mp4` esté subido
- Algunos navegadores pueden bloquear videos HTTP

### ❌ "No funcionan los estilos"
- Verifica que la carpeta `css/` esté subida
- Verifica que la carpeta `js/` esté subida

---

## 📝 Notas adicionales

- **Tamaño total:** ~40-50 MB (principalmente por `indexlogo.png` que pesa 15.6 MB)
- **Tiempo de subida:** Depende de tu conexión, puede tomar 10-30 minutos
- **Archivos en GitHub:** El `.env` NO se sube a GitHub por seguridad
- **Para desarrollo local:** Copia `.env.example` como `.env` y usa credenciales locales

---

✅ Una vez completados estos pasos, tu sitio estará funcionando en InfinityFree!
