<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Translation;

class TranslationEsSeeder extends Seeder
{
    public function run()
    {
        $translations = [
            [
                'key' => 'welcome',
                'locale' => 'es',
                'value' => '¡Bienvenido a Academy Works!'
            ],

            [
                'key' => 'login',
                'locale' => 'es',
                'value' => 'iniciar sesión'
            ],

            [
                'key' => 'logout',
                'locale' => 'es',
                'value' => 'cerrar sesión'
            ],

            [
                'key' => 'register',
                'locale' => 'es',
                'value' => 'registro'
            ],

            [
                'key' => 'contact',
                'locale' => 'es',
                'value' => 'contacto'
            ],

            [
                'key' => 'contact_us',
                'locale' => 'es',
                'value' => 'escríbenos'
            ],

            [
                'key' => 'read_more',
                'locale' => 'es',
                'value' => 'leer más'
            ],

            [
                'key' => 'view_more',
                'locale' => 'es',
                'value' => 'ver más'
            ],

            [
                'key' => 'popular_courses',
                'locale' => 'es',
                'value' => 'cursos más populares'
            ],

            [
                'key' => 'review',
                'locale' => 'es',
                'value' => 'reseña'
            ],


            [
                'key' => 'about',
                'locale' => 'es',
                'value' => 'acerca de'
            ],

            [
                'key' => 'event',
                'locale' => 'es',
                'value' => 'evento'
            ],

            [
                'key' => 'faq',
                'locale' => 'es',
                'value' => 'preguntas más frecuentes'
            ],

            [
                'key' => 'profile',
                'locale' => 'es',
                'value' => 'perfil'
            ],

            [
                'key' => 'course',
                'locale' => 'es',
                'value' => 'curso'
            ],

            [
                'key' => 'alumn',
                'locale' => 'es',
                'value' => 'alumno'
            ],

            [
                'key' => 'instructor',
                'locale' => 'es',
                'value' => 'instructor'
            ],

            [
                'key' => 'speaker',
                'locale' => 'es',
                'value' => 'ponente'
            ],

            [
                'key' => 'teacher',
                'locale' => 'es',
                'value' => 'profesor'
            ],

            [
                'key' => 'add_listing',
                'locale' => 'es',
                'value' => 'añadir anuncio'
            ],

            [
                'key' => 'book',
                'locale' => 'es',
                'value' => 'libro'
            ],

            [
                'key' => 'bookmark',
                'locale' => 'es',
                'value' => 'marcador'
            ],

            [
                'key' => 'calendar',
                'locale' => 'es',
                'value' => 'calendario'
            ],

            [
                'key' => 'basic_info',
                'locale' => 'es',
                'value' => 'información básica'
            ],

            [
                'key' => 'course_title',
                'locale' => 'es',
                'value' => 'título del curso'
            ],

            [
                'key' => 'course_start',
                'locale' => 'es',
                'value' => 'comienzo del curso'
            ],

            [
                'key' => 'course_expire',
                'locale' => 'es',
                'value' => 'fin de curso'
            ],

            [
                'key' => 'description',
                'locale' => 'es',
                'value' => 'descripción'
            ],

            [
                'key' => 'course_description',
                'locale' => 'es',
                'value' => 'descripción del curso'
            ],

            [
                'key' => 'add_item',
                'locale' => 'es',
                'value' => 'añadir elemento'
            ],

            [
                'key' => 'save_changes',
                'locale' => 'es',
                'value' => 'guardar los cambios'
            ],

            [
                'key' => 'my_profile',
                'locale' => 'es',
                'value' => 'mi perfil'
            ],

            [
                'key' => 'close',
                'locale' => 'es',
                'value' => 'cerrar'
            ],

            [
                'key' => 'home',
                'locale' => 'es',
                'value' => 'inicio'
            ],

            [
                'key' => 'menu',
                'locale' => 'es',
                'value' => 'menú'
            ],

            [
                'key' => 'total_points',
                'locale' => 'es',
                'value' => 'puntos totales'
            ],

            [
                'key' => 'message',
                'locale' => 'es',
                'value' => 'mensaje'
            ],

            [
                'key' => 'your_order_is_placed',
                'locale' => 'es',
                'value' => 'su pedido ha sido realizado'
            ],

            [
                'key' => 'your_item_is_shipped ',
                'locale' => 'es',
                'value' => 'su artículo ha sido enviado'
            ],

            [
                'key' => 'category',
                'locale' => 'es',
                'value' => 'categoría'
            ],

            [
                'key' => 'approve',
                'locale' => 'es',
                'value' => 'aceptar'
            ],

            [
                'key' => 'cancel',
                'locale' => 'es',
                'value' => 'cancelar'
            ],

            [
                'key' => 'price',
                'locale' => 'es',
                'value' => 'precio'
            ],

            [
                'key' => 'pending',
                'locale' => 'es',
                'value' => 'pendiente'
            ],

            [
                'key' => 'sent',
                'locale' => 'es',
                'value' => 'enviar'
            ],

            [
                'key' => 'draft',
                'locale' => 'es',
                'value' => 'borrador'
            ],

            [
                'key' => 'trash',
                'locale' => 'es',
                'value' => 'papelera'
            ],
            [
                'key' => 'all_day',
                'locale' => 'es',
                'value' => 'todo el día'
            ],

            [
                'key' => 'conference',
                'locale' => 'es',
                'value' => 'conferencia'
            ],

            [
                'key' => 'today',
                'locale' => 'es',
                'value' => 'hoy'
            ],

            [
                'key' => 'yesterday',
                'locale' => 'es',
                'value' => 'ayer'
            ],

            [
                'key' => 'tomorrow',
                'locale' => 'es',
                'value' => 'mañana'
            ],

            [
                'key' => 'day',
                'locale' => 'es',
                'value' => 'día'
            ],

            [
                'key' => 'week',
                'locale' => 'es',
                'value' => 'semana'
            ],

            [
                'key' => 'month',
                'locale' => 'es',
                'value' => 'mes'
            ],

            [
                'key' => 'year',
                'locale' => 'es',
                'value' => 'año'
            ],

            [
                'key' => 'view_courses',
                'locale' => 'es',
                'value' => 'ver cursos'
            ],

            [
                'key' => 'reviewer',
                'locale' => 'es',
                'value' => 'revisor'
            ],

            [
                'key' => 'date',
                'locale' => 'es',
                'value' => 'fecha'
            ],

            [
                'key' => 'hour',
                'locale' => 'es',
                'value' => 'hora'
            ],

            [
                'key' => 'reply_review',
                'locale' => 'es',
                'value' => 'responder'
            ],

            [
                'key' => 'date',
                'locale' => 'es',
                'value' => 'fecha'
            ],

            [
                'key' => 'user',
                'locale' => 'es',
                'value' => 'usuario'
            ],

            [
                'key' => 'user_profile',
                'locale' => 'es',
                'value' => 'perfil del usuario'
            ],

            [
                'key' => 'personal',
                'locale' => 'es',
                'value' => 'personal'
            ],

            [
                'key' => 'personal_details',
                'locale' => 'es',
                'value' => 'información personal'
            ],

            [
                'key' => 'name',
                'locale' => 'es',
                'value' => 'nombre'
            ],

            [
                'key' => 'surname',
                'locale' => 'es',
                'value' => 'apellido'
            ],

            [
                'key' => 'full_name',
                'locale' => 'es',
                'value' => 'nombre completo'
            ],

            [
                'key' => 'occupation',
                'locale' => 'es',
                'value' => 'profesión'
            ],

            [
                'key' => 'company_name',
                'locale' => 'es',
                'value' => 'nombre de la empresa'
            ],

            [
                'key' => 'phone',
                'locale' => 'es',
                'value' => 'teléfono'
            ],

            [
                'key' => 'address',
                'locale' => 'es',
                'value' => 'direción'
            ],

            [
                'key' => 'city',
                'locale' => 'es',
                'value' => 'localidad'
            ],

            [
                'key' => 'state',
                'locale' => 'es',
                'value' => 'región'
            ],

            [
                'key' => 'country',
                'locale' => 'es',
                'value' => 'país'
            ],

            [
                'key' => 'postcode',
                'locale' => 'es',
                'value' => 'código postal'
            ],

            [
                'key' => 'social_links',
                'locale' => 'es',
                'value' => 'perfiles en redes sociales'
            ],

            [
                'key' => 'password',
                'locale' => 'es',
                'value' => 'contraseña'
            ],

            [
                'key' => 're_type',
                'locale' => 'es',
                'value' => 'reescribe'
            ],

            [
                'key' => 'current_password',
                'locale' => 'es',
                'value' => 'contraseña actual'
            ],

            [
                'key' => 'new_password',
                'locale' => 'es',
                'value' => 'nueva contraseña'
            ],

            [
                'key' => 're_type_password',
                'locale' => 'es',
                'value' => 'escriba de nuevo la contraseña'
            ],

            [
                'key' => 'settings',
                'locale' => 'es',
                'value' => 'configuración'
            ],

            [
                'key' => 'notifications',
                'locale' => 'es',
                'value' => 'notificaciones'
            ],

            [
                'key' => 'help',
                'locale' => 'es',
                'value' => 'ayuda'
            ],

            [
                'key' => 'search',
                'locale' => 'es',
                'value' => 'buscar'
            ],

            [
                'key' => 'submit',
                'locale' => 'es',
                'value' => 'enviar'
            ],

            [
                'key' => 'edit',
                'locale' => 'es',
                'value' => 'editar'
            ],

            [
                'key' => 'delete',
                'locale' => 'es',
                'value' => 'eliminar'
            ],

            [
                'key' => 'update',
                'locale' => 'es',
                'value' => 'actualizar'
            ],

            [
                'key' => 'upload',
                'locale' => 'es',
                'value' => 'subir'
            ],

            [
                'key' => 'download',
                'locale' => 'es',
                'value' => 'descargar'
            ],

            [
                'key' => 'success',
                'locale' => 'es',
                'value' => 'éxito'
            ],

            [
                'key' => 'error',
                'locale' => 'es',
                'value' => 'error'
            ],

            [
                'key' => 'warning',
                'locale' => 'es',
                'value' => 'advertencia'
            ],

            [
                'key' => 'info',
                'locale' => 'es',
                'value' => 'información'
            ],

            [
                'key' => 'loading',
                'locale' => 'es',
                'value' => 'cargando'
            ],

            [
                'key' => 'save',
                'locale' => 'es',
                'value' => 'guardar'
            ],

            [
                'key' => 'cancel',
                'locale' => 'es',
                'value' => 'cancelar'
            ],

            [
                'key' => 'confirm',
                'locale' => 'es',
                'value' => 'confirmar'
            ],

            [
                'key' => 'yes',
                'locale' => 'es',
                'value' => 'sí'
            ],

            [
                'key' => 'no',
                'locale' => 'es',
                'value' => 'no'
            ],

            [
                'key' => 'next',
                'locale' => 'es',
                'value' => 'siguiente'
            ],

            [
                'key' => 'previous',
                'locale' => 'es',
                'value' => 'anterior'
            ],

            [
                'key' => 'finish',
                'locale' => 'es',
                'value' => 'finalizar'
            ],

            [
                'key' => 'start',
                'locale' => 'es',
                'value' => 'comenzar'
            ],

            [
                'key' => 'stop',
                'locale' => 'es',
                'value' => 'detener'
            ],

            [
                'key' => 'pause',
                'locale' => 'es',
                'value' => 'pausar'
            ],

            [
                'key' => 'resume',
                'locale' => 'es',
                'value' => 'reanudar'
            ],

            [
                'key' => 'retry',
                'locale' => 'es',
                'value' => 'reintentar'
            ],

            [
                'key' => 'exit',
                'locale' => 'es',
                'value' => 'salir'
            ],

            [
                'key' => 'homework',
                'locale' => 'es',
                'value' => 'tarea'
            ],

            [
                'key' => 'assignment',
                'locale' => 'es',
                'value' => 'asignación'
            ],

            [
                'key' => 'grade',
                'locale' => 'es',
                'value' => 'calificación'
            ],

            [
                'key' => 'feedback',
                'locale' => 'es',
                'value' => 'retroalimentación'
            ],

            [
                'key' => 'discussion',
                'locale' => 'es',
                'value' => 'discusión'
            ],

            [
                'key' => 'forum',
                'locale' => 'es',
                'value' => 'foro'
            ],

            [
                'key' => 'announcement',
                'locale' => 'es',
                'value' => 'anuncio'
            ],

            [
                'key' => 'resource',
                'locale' => 'es',
                'value' => 'recurso'
            ],

            [
                'key' => 'module',
                'locale' => 'es',
                'value' => 'módulo'
            ],

            [
                'key' => 'lesson',
                'locale' => 'es',
                'value' => 'lección'
            ],

            [
                'key' => 'quiz',
                'locale' => 'es',
                'value' => 'cuestionario'
            ],

            [
                'key' => 'exam',
                'locale' => 'es',
                'value' => 'examen'
            ],

            [
                'key' => 'certificate',
                'locale' => 'es',
                'value' => 'certificado'
            ],

            [
                'key' => 'progress',
                'locale' => 'es',
                'value' => 'progreso'
            ],

            [
                'key' => 'completion',
                'locale' => 'es',
                'value' => 'completado'
            ],

            [
                'key' => 'start_date',
                'locale' => 'es',
                'value' => 'fecha de inicio'
            ],

            [
                'key' => 'end_date',
                'locale' => 'es',
                'value' => 'fecha de finalización'
            ],

            [
                'key' => 'duration',
                'locale' => 'es',
                'value' => 'duración'
            ],

            [
                'key' => 'level',
                'locale' => 'es',
                'value' => 'nivel'
            ],

            [
                'key' => 'prerequisite',
                'locale' => 'es',
                'value' => 'prerrequisito'
            ],

            [
                'key' => 'syllabus',
                'locale' => 'es',
                'value' => 'programa de estudios'
            ],

            [
                'key' => 'materials',
                'locale' => 'es',
                'value' => 'materiales'
            ],

            [
                'key' => 'resources',
                'locale' => 'es',
                'value' => 'recursos'
            ],

            [
                'key' => 'schedule',
                'locale' => 'es',
                'value' => 'horario'
            ],

            [
                'key' => 'attendance',
                'locale' => 'es',
                'value' => 'asistencia'
            ],

            [
                'key' => 'participation',
                'locale' => 'es',
                'value' => 'participación'
            ],

            [
                'key' => 'group',
                'locale' => 'es',
                'value' => 'grupo'
            ],

            [
                'key' => 'team',
                'locale' => 'es',
                'value' => 'equipo'
            ],

            [
                'key' => 'project',
                'locale' => 'es',
                'value' => 'proyecto'
            ],

            [
                'key' => 'activity',
                'locale' => 'es',
                'value' => 'actividad'
            ],

            [
                'key' => 'task',
                'locale' => 'es',
                'value' => 'tarea'
            ],

            [
                'key' => 'goal',
                'locale' => 'es',
                'value' => 'objetivo'
            ],

            [
                'key' => 'objective',
                'locale' => 'es',
                'value' => 'meta'
            ],

            [
                'key' => 'achievement',
                'locale' => 'es',
                'value' => 'logro'
            ],

            [
                'key' => 'milestone',
                'locale' => 'es',
                'value' => 'hito'
            ],

            [
                'key' => 'deadline',
                'locale' => 'es',
                'value' => 'fecha límite'
            ],

            [
                'key' => 'extension',
                'locale' => 'es',
                'value' => 'prórroga'
            ],

            [
                'key' => 'submission',
                'locale' => 'es',
                'value' => 'entrega'
            ],

            [
                'key' => 'review',
                'locale' => 'es',
                'value' => 'revisión'
            ],

            [
                'key' => 'comment',
                'locale' => 'es',
                'value' => 'comentario'
            ],

            [
                'key' => 'discussion_board',
                'locale' => 'es',
                'value' => 'tablero de discusión'
            ],

            [
                'key' => 'chat',
                'locale' => 'es',
                'value' => 'chat'
            ],

            [
                'key' => 'message_board',
                'locale' => 'es',
                'value' => 'tablero de mensajes'
            ],

            [
                'key' => 'announcement_board',
                'locale' => 'es',
                'value' => 'tablero de anuncios'
            ],

            [
                'key' => 'file',
                'locale' => 'es',
                'value' => 'archivo'
            ],

            [
                'key' => 'folder',
                'locale' => 'es',
                'value' => 'carpeta'
            ],

            [
                'key' => 'document',
                'locale' => 'es',
                'value' => 'documento'
            ],

            [
                'key' => 'presentation',
                'locale' => 'es',
                'value' => 'presentación'
            ],

            [
                'key' => 'spreadsheet',
                'locale' => 'es',
                'value' => 'hoja de cálculo'
            ],

            [
                'key' => 'video',
                'locale' => 'es',
                'value' => 'video'
            ],

            [
                'key' => 'audio',
                'locale' => 'es',
                'value' => 'audio'
            ],

            [
                'key' => 'image',
                'locale' => 'es',
                'value' => 'imagen'
            ],

            [
                'key' => 'link',
                'locale' => 'es',
                'value' => 'enlace'
            ],

            [
                'key' => 'attachment',
                'locale' => 'es',
                'value' => 'adjunto'
            ],

            [
                'key' => 'upload_file',
                'locale' => 'es',
                'value' => 'subir archivo'
            ],

            [
                'key' => 'download_file',
                'locale' => 'es',
                'value' => 'descargar archivo'
            ],

            [
                'key' => 'view_file',
                'locale' => 'es',
                'value' => 'ver archivo'
            ],

            [
                'key' => 'edit_file',
                'locale' => 'es',
                'value' => 'editar archivo'
            ],

            [
                'key' => 'delete_file',
                'locale' => 'es',
                'value' => 'eliminar archivo'
            ],

            [
                'key' => 'share_file',
                'locale' => 'es',
                'value' => 'compartir archivo'
            ],

            [
                'key' => 'copy_file',
                'locale' => 'es',
                'value' => 'copiar archivo'
            ],

            [
                'key' => 'move_file',
                'locale' => 'es',
                'value' => 'mover archivo'
            ],

            [
                'key' => 'rename_file',
                'locale' => 'es',
                'value' => 'renombrar archivo'
            ],

            [
                'key' => 'new_folder',
                'locale' => 'es',
                'value' => 'nueva carpeta'
            ],

            [
                'key' => 'open_folder',
                'locale' => 'es',
                'value' => 'abrir carpeta'
            ],

            [
                'key' => 'close_folder',
                'locale' => 'es',
                'value' => 'cerrar carpeta'
            ],

            [
                'key' => 'delete_folder',
                'locale' => 'es',
                'value' => 'eliminar carpeta'
            ],

            [
                'key' => 'rename_folder',
                'locale' => 'es',
                'value' => 'renombrar carpeta'
            ],

            [
                'key' => 'move_folder',
                'locale' => 'es',
                'value' => 'mover carpeta'
            ],

            [
                'key' => 'copy_folder',
                'locale' => 'es',
                'value' => 'copiar carpeta'
            ],

            [
                'key' => 'share_folder',
                'locale' => 'es',
                'value' => 'compartir carpeta'
            ],

            [
                'key' => 'folder_contents',
                'locale' => 'es',
                'value' => 'contenido de la carpeta'
            ],

            [
                'key' => 'file_size',
                'locale' => 'es',
                'value' => 'tamaño del archivo'
            ],

            [
                'key' => 'file_type',
                'locale' => 'es',
                'value' => 'tipo de archivo'
            ],

            [
                'key' => 'last_modified',
                'locale' => 'es',
                'value' => 'última modificación'
            ],

            [
                'key' => 'created_on',
                'locale' => 'es',
                'value' => 'creado el'
            ],

            [
                'key' => 'modified_on',
                'locale' => 'es',
                'value' => 'modificado el'
            ],

            [
                'key' => 'owner',
                'locale' => 'es',
                'value' => 'propietario'
            ],

            [
                'key' => 'permissions',
                'locale' => 'es',
                'value' => 'permisos'
            ],

            [
                'key' => 'access',
                'locale' => 'es',
                'value' => 'acceso'
            ],

            [
                'key' => 'read_only',
                'locale' => 'es',
                'value' => 'solo lectura'
            ],

            [
                'key' => 'read_write',
                'locale' => 'es',
                'value' => 'lectura y escritura'
            ],

            [
                'key' => 'full_control',
                'locale' => 'es',
                'value' => 'control total'
            ],

            [
                'key' => 'restricted',
                'locale' => 'es',
                'value' => 'restringido'
            ],

            [
                'key' => 'public',
                'locale' => 'es',
                'value' => 'público'
            ],

            [
                'key' => 'private',
                'locale' => 'es',
                'value' => 'privado'
            ],

            [
                'key' => 'shared',
                'locale' => 'es',
                'value' => 'compartido'
            ],

            [
                'key' => 'unshared',
                'locale' => 'es',
                'value' => 'no compartido'
            ],

            [
                'key' => 'view',
                'locale' => 'es',
                'value' => 'ver'
            ],

            [
                'key' => 'edit',
                'locale' => 'es',
                'value' => 'editar'
            ]


        ];

        foreach ($translations as $translation) {
            if (!is_array($translation)) {
                dump($translation); // O usa `Log::debug` para inspeccionar el valor.
                continue; // Salta esta iteración si no es un array.
            }
        
            Translation::updateOrCreate(
                ['key' => $translation['key'], 'locale' => $translation['locale']],
                ['value' => $translation['value']]
            );
        }
        
    }
}
