# 🌳 Instrucciones de Despliegue - GreenRoots

## 📋 Pasos para desplegar en InfinityFree

### 1. Preparar archivos localmente

1. Copia el archivo `.env.example` como `.env`
2. Edita `.env` con tus credenciales de InfinityFree:
   ```
   DB_HOST=sql112.infinityfree.com
   DB_USER=if0_40582586
   DB_PASS=HLyEfhex0fOVs
   DB_NAME=if0_40582586_greenroo_roots
   ```

### 2. Subir archivos por FTP

Usando FileZilla o el File Manager de InfinityFree:
- Sube TODOS los archivos de la carpeta `deploy/` a `htdocs/`
- Asegúrate de incluir el archivo `.env` (que está en tu local, NO en GitHub)

### 3. Importar base de datos

1. Ve al panel de InfinityFree → phpMyAdmin
2. Crea una base de datos (el nombre debe coincidir con DB_NAME en .env)
3. Importa el archivo `base de datos/greenroo_roots.sql`

### 4. Verificar

Visita tu URL de InfinityFree y verifica que todo funcione.

---

## 🔒 Seguridad

- ✅ El archivo `.env` está en `.gitignore` y NO se sube a GitHub
- ✅ Las credenciales están separadas del código
- ✅ Puedes compartir el código sin exponer tus contraseñas

## 🏠 Para desarrollo local

1. Copia `.env.example` como `.env`
2. Usa las credenciales locales:
   ```
   DB_HOST=localhost
   DB_USER=root
   DB_PASS=
   DB_NAME=greenroo_roots
   ```
