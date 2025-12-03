# 📦 Lista de Archivos para Subir a InfinityFree

## ✅ Estructura completa de la carpeta `deploy/`

### 📁 Archivos raíz (root)
- ✅ `index.php` - Página principal
- ✅ `about.php` - Acerca de
- ✅ `arboles1.php` - Listado de árboles
- ✅ `arbol.php`, `arbol1.php` ... `arbol50.php` - Páginas individuales de cada árbol
- ✅ `biblioteca.php` - Sección biblioteca
- ✅ `sendero.php` - Sendero
- ✅ `entrada.php` - Entrada
- ✅ `musica.php` - Música
- ✅ `interior.php` - Interior
- ✅ `prueba.php` - Prueba
- ✅ `buscararbol.php` - Búsqueda de árbol
- ✅ `arbolbuscado.php` - Resultado búsqueda
- ✅ `busquedaarbol.php` - Búsqueda avanzada
- ✅ `buscatuarbol.php` - Busca tu árbol
- ✅ `plantillaarbol.php` - Plantilla de árbol

### 👤 Archivos de administración
- ✅ `indexadmin.php` - Panel admin
- ✅ `sesionadmin.php` - Sesión admin
- ✅ `cerrar_sesion.php` - Cerrar sesión
- ✅ `creararbol.php` - Crear árbol
- ✅ `listararbol.php` - Listar árboles
- ✅ `modificararbol.php` - Modificar árbol
- ✅ `arbolmodificado.php` - Árbol modificado
- ✅ `arbolmodificarsiguiente.php` - Modificar siguiente
- ✅ `eliminararbol.php` - Eliminar árbol
- ✅ `arboleliminado.php` - Árbol eliminado
- ✅ `destino.php` - Destino

### 🔧 Archivos de configuración y funciones
- ✅ `config.php` - Configuración (lee .env)
- ✅ `funciones.php` - Funciones de conexión
- ✅ `.env` - **IMPORTANTE: Tus credenciales (NO está en GitHub)**
- ✅ `.env.example` - Plantilla de ejemplo

### 🖼️ Imágenes (raíz)
- ✅ `GreenRoots.png` - Logo/favicon
- ✅ `greenroots1.png` - Logo adicional
- ✅ `logo.png` - Logo navbar
- ✅ `indexlogo.png` - Background del header (15.6 MB)
- ✅ `flor.png` - Imagen flor (4.8 MB)
- ✅ `about2.png` - Imagen about (2.3 MB)

### 🎬 Multimedia
- ✅ `Compreso.mp4` - Video de presentación

### 📁 Carpeta `css/`
- ✅ `bootstrap.min.css` - Framework CSS
- ✅ `estilosformulario.css` - Estilos de formularios

### 📁 Carpeta `js/`
- ✅ `bootstrap.js` - Framework JS
- ✅ `jquery.js` - jQuery
- ✅ `sweetalert.js` - Alertas bonitas
- ✅ `sesion.js` - Gestión de sesiones
- ✅ `busquedaarbol.js` - Búsqueda de árboles

### 📁 Carpeta `php/`
- ✅ `navbar.php` - Barra de navegación
- ✅ `navbaradmin.php` - Navbar admin
- ✅ `navbarindexad.php` - Navbar index admin
- ✅ `footer.php` - Pie de página

### 📁 Carpeta `imagenes/` (fotos de árboles)
Contiene las imágenes de las tarjetas de árboles:
- ✅ `arbol19.1.jpg`
- ✅ `arbol21.1.jpg`
- ✅ `arbol22.jpg`
- ✅ Y muchas más...

### 🗄️ Base de datos
- ✅ `greenroo_roots.sql` - Script SQL para importar

---

## 🚀 Orden de subida recomendado:

1. **Subir carpetas primero:**
   - `css/`
   - `js/`
   - `php/`
   - `imagenes/`

2. **Subir archivos de configuración:**
   - `config.php`
   - `funciones.php`
   - `.env` (**muy importante**)

3. **Subir archivos PHP:**
   - Todos los `.php` de la raíz

4. **Subir imágenes de la raíz:**
   - Todos los `.png`

5. **Subir video:**
   - `Compreso.mp4`

6. **Importar base de datos:**
   - En phpMyAdmin, importar `greenroo_roots.sql`

---

## ⚠️ IMPORTANTE - Verificar antes de probar:

1. ✅ Archivo `.env` subido y con credenciales correctas
2. ✅ Base de datos importada correctamente
3. ✅ Nombre de BD en `.env` coincide con el de phpMyAdmin
4. ✅ Todas las carpetas (`css/`, `js/`, `php/`, `imagenes/`) están en `htdocs/`

---

## 📊 Tamaño aproximado total: ~40-50 MB
(La mayoría es `indexlogo.png` con 15.6 MB)
