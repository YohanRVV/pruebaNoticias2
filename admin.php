<?php
require_once('libs/Smarty.class.php');
require_once('includes/db.php');

$smarty = new Smarty();

$smarty->template_dir = 'templates';
$smarty->compile_dir = 'templates_c';
$smarty->cache_dir = 'cache';
$smarty->config_dir = 'configs';
$action = isset($_GET['action']) ? $_GET['action'] : 'admin/home.tpl';

switch ($action) {
    case 'view_home':
        $resultPeriodistas = $db->query('
            SELECT DISTINCT periodistas.* 
            FROM periodistas
            JOIN noticias ON periodistas.id_periodista = noticias.id_periodista
        ');
        $periodistas = $resultPeriodistas->fetch_all(MYSQLI_ASSOC);
        $smarty->assign('periodistas', $periodistas);
        $smarty->display('admin/home.tpl');
        break;

    case 'view_noticias':
        $result = $db->query('SELECT noticias.*, periodistas.nombre AS periodista_nombre, periodistas.apellido AS periodista_apellido FROM noticias JOIN periodistas ON noticias.id_periodista = periodistas.id_periodista');
        $noticias = $result->fetch_all(MYSQLI_ASSOC);
        $smarty->assign('noticias', $noticias);
        $smarty->display('admin/noticias.tpl');
        break;

    case 'edit_noticia':
        $id = isset($_GET['id']) ? intval($_GET['id']) : 0;
        if ($id > 0) {
            $result = $db->query("SELECT * FROM noticias WHERE id_noticia = $id");
            $noticia = $result->fetch_assoc();
            $smarty->assign('noticia', $noticia);
        }

        $result = $db->query('SELECT * FROM periodistas');
        $periodistas = $result->fetch_all(MYSQLI_ASSOC);
        $smarty->assign('periodistas', $periodistas);

        $smarty->display('admin/editar_noticia.tpl');
        break;

    case 'update_noticia':
        $id = isset($_POST['id_noticia']) ? intval($_POST['id_noticia']) : 0;
        $titulo = $db->real_escape_string($_POST['titulo']);
        $contenido = $db->real_escape_string($_POST['contenido']);
        $id_periodista = isset($_POST['id_periodista']) ? intval($_POST['id_periodista']) : 0;
        if ($id > 0) {
            $db->query("UPDATE noticias SET titulo = '$titulo', contenido = '$contenido', id_periodista = $id_periodista WHERE id_noticia = $id");
        }
        header('Location: admin.php?action=view_noticias');
        exit();
        break;

    case 'create_noticia':
        $noticia = ["id_noticia" => "", "titulo" => "", "contenido" => "", "id_periodista" => ""];
        $smarty->assign('noticia', $noticia);

        // Obtener periodistas para el dropdown
        $result = $db->query('SELECT * FROM periodistas WHERE activo = TRUE');
        $periodistas = $result->fetch_all(MYSQLI_ASSOC);
        $smarty->assign('periodistas', $periodistas);

        $smarty->display('admin/editar_noticia.tpl');
        break;

    case 'store_noticia':
        // Recoger y sanitizar los datos de entrada del formulario
        $titulo = $db->real_escape_string($_POST['titulo']);
        $contenido = $db->real_escape_string($_POST['contenido']);
        $id_periodista = isset($_POST['id_periodista']) ? intval($_POST['id_periodista']) : 0;

        // Inicializar la variable para la ruta de la imagen
        $imagen = "";

        // Procesar la carga de la imagen, si se incluyó una
        if (isset($_FILES['imagen']) && $_FILES['imagen']['error'] == 0) {
            // Definir el directorio donde se guardarán las imágenes
            $rutaDirectorio = "src/images/";
            // Asegurarse de que el nombre del archivo sea único para evitar sobrescribir archivos
            $nombreArchivo = uniqid() . "-" . basename($_FILES['imagen']['name']);
            $rutaDestino = $rutaDirectorio . $nombreArchivo;

            // Mover el archivo subido al directorio de destino
            if (move_uploaded_file($_FILES['imagen']['tmp_name'], $rutaDestino)) {
                // El archivo fue cargado y movido exitosamente
                $imagen = $nombreArchivo; // Guardar solo el nombre del archivo
            } else {
                // Manejar el error de carga, se puede registrar o mostrar un mensaje de error
                echo "Error al cargar la imagen.";
                exit();
            }
        }

        // Insertar los datos en la base de datos, incluyendo la ruta de la imagen
        $query = "INSERT INTO noticias (titulo, contenido, id_periodista, imagen) VALUES ('$titulo', '$contenido', $id_periodista, '$imagen')";
        $result = $db->query($query);

        if (!$result) {
            echo "Error al guardar la noticia: " . $db->error;
            exit();
        }

        // Redirigir al usuario a la página de visualización de noticias
        header('Location: admin.php?action=view_noticias');
        exit();
        break;

    case 'delete_noticia':
        $id = isset($_GET['id']) ? intval($_GET['id']) : 0;
        if ($id > 0) {
            $db->query("DELETE FROM noticias WHERE id_noticia = $id");
        }
        header('Location: admin.php?action=view_noticias');
        exit();
        break;

    case 'view_periodistas':
        $result = $db->query('SELECT * FROM periodistas WHERE activo = TRUE');
        $periodistas = $result->fetch_all(MYSQLI_ASSOC);
        $smarty->assign('periodistas', $periodistas);
        $smarty->display('admin/periodistas.tpl');
        break;

    case 'edit_periodista':
        $id = isset($_GET['id']) ? intval($_GET['id']) : 0;
        if ($id > 0) {
            $result = $db->query("SELECT * FROM periodistas WHERE id_periodista = $id");
            $periodista = $result->fetch_assoc();
            $smarty->assign('periodista', $periodista);
        }
        $smarty->display('admin/editar_periodista.tpl');
        break;

    case 'update_periodista':
        $id = isset($_POST['id_periodista']) ? intval($_POST['id_periodista']) : 0;
        $nombre = $db->real_escape_string($_POST['nombre']);
        $apellido = $db->real_escape_string($_POST['apellido']);
        if ($id > 0) {
            $db->query("UPDATE periodistas SET nombre = '$nombre', apellido = '$apellido', activo = TRUE WHERE id_periodista = $id");
        }
        header('Location: admin.php?action=view_periodistas');
        exit();
        break;

    case 'create_periodista':
        // Asegúrate de que 'periodista' está definido aunque sea con valores vacíos
        $periodista = ["id_periodista" => "", "nombre" => "", "apellido" => ""];
        $smarty->assign('periodista', $periodista);

        $smarty->display('admin/editar_periodista.tpl');
        break;

    case 'store_periodista':
        $nombre = $db->real_escape_string($_POST['nombre']);
        $apellido = $db->real_escape_string($_POST['apellido']);
        $db->query("INSERT INTO periodistas (nombre, apellido, activo) VALUES ('$nombre', '$apellido', TRUE)");
        header('Location: admin.php?action=view_periodistas');
        exit();
        break;

    case 'delete_periodista':
        $id = isset($_GET['id']) ? intval($_GET['id']) : 0;
        if ($id > 0) {
            // Mover el periodista a la tabla periodistas_eliminados
            $db->query("INSERT INTO periodistas_eliminados (id_periodista, nombre, apellido) 
                        SELECT id_periodista, nombre, apellido
                        FROM periodistas 
                        WHERE id_periodista = $id");

            // Verifica que el periodista fue movido correctamente antes de actualizar la tabla original
            if ($db->affected_rows > 0) {
                // Actualizar el estado del periodista en la tabla periodistas a FALSE (no activo)
                $db->query("UPDATE periodistas SET activo = FALSE WHERE id_periodista = $id");
            } else {
                // Manejar el caso en que el periodista no se pudo mover (opcional)
                echo "No se pudo mover el periodista a la tabla de eliminados.";
                exit();
            }
        }
        header('Location: admin.php?action=view_periodistas');
        exit();
        break;


    default:
        header('Location: admin.php?action=view_home');
        exit();
        break;
}

$db->close();
