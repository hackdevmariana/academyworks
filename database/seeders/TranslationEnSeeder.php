<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Translation;


class TranslationEnSeeder extends Seeder
{
    public function run()
    {
        $translations = [
            [
                'key' => 'welcome',
                'locale' => 'en',
                'value' => '¡Welcome to Academy Works!'
            ],

            [
                'key' => 'login',
                'locale' => 'en',
                'value' => 'login'
            ],

            [
                'key' => 'logout',
                'locale' => 'en',
                'value' => 'logout'
            ],

            [
                'key' => 'register',
                'locale' => 'en',
                'value' => 'register'
            ],

            [
                'key' => 'contact',
                'locale' => 'en',
                'value' => 'contact'
            ],

            [
                'key' => 'contact_us',
                'locale' => 'en',
                'value' => 'contact us'
            ],

            [
                'key' => 'read_more',
                'locale' => 'en',
                'value' => 'read more'
            ],

            [
                'key' => 'view_more',
                'locale' => 'en',
                'value' => 'view more'
            ],

            [
                'key' => 'popular_courses',
                'locale' => 'en',
                'value' => 'popular courses'
            ],

            [
                'key' => 'review',
                'locale' => 'en',
                'value' => 'review'
            ],


            [
                'key' => 'about',
                'locale' => 'en',
                'value' => 'about'
            ],

            [
                'key' => 'event',
                'locale' => 'en',
                'value' => 'event'
            ],

            [
                'key' => 'faq',
                'locale' => 'en',
                'value' => 'faq'
            ],

            [
                'key' => 'profile',
                'locale' => 'en',
                'value' => 'profile'
            ],

            [
                'key' => 'course',
                'locale' => 'en',
                'value' => 'course'
            ],

            [
                'key' => 'alumn',
                'locale' => 'en',
                'value' => 'alumn'
            ],

            [
                'key' => 'instructor',
                'locale' => 'en',
                'value' => 'instructor'
            ],

            [
                'key' => 'speaker',
                'locale' => 'en',
                'value' => 'speaker'
            ],

            [
                'key' => 'teacher',
                'locale' => 'en',
                'value' => 'teacher'
            ],

            [
                'key' => 'add_listing',
                'locale' => 'en',
                'value' => 'add listing'
            ],

            [
                'key' => 'book',
                'locale' => 'en',
                'value' => 'book'
            ],

            [
                'key' => 'bookmark',
                'locale' => 'en',
                'value' => 'bookmark'
            ],

            [
                'key' => 'calendar',
                'locale' => 'en',
                'value' => 'calendar'
            ],

            [
                'key' => 'basic_info',
                'locale' => 'en',
                'value' => 'basic info'
            ],

            [
                'key' => 'course_title',
                'locale' => 'en',
                'value' => 'course title'
            ],

            [
                'key' => 'course_start',
                'locale' => 'en',
                'value' => 'course start'
            ],

            [
                'key' => 'course_expire',
                'locale' => 'en',
                'value' => 'course expire'
            ],

            [
                'key' => 'description',
                'locale' => 'en',
                'value' => 'description'
            ],

            [
                'key' => 'course_description',
                'locale' => 'en',
                'value' => 'course description'
            ],

            [
                'key' => 'add_item',
                'locale' => 'en',
                'value' => 'add item'
            ],

            [
                'key' => 'save_changes',
                'locale' => 'en',
                'value' => 'save changes'
            ],

            [
                'key' => 'my_profile',
                'locale' => 'en',
                'value' => 'my profile'
            ],

            [
                'key' => 'close',
                'locale' => 'en',
                'value' => 'close'
            ],

            [
                'key' => 'home',
                'locale' => 'en',
                'value' => 'home'
            ],

            [
                'key' => 'menu',
                'locale' => 'en',
                'value' => 'menu'
            ],

            [
                'key' => 'total_points',
                'locale' => 'en',
                'value' => 'total points'
            ],

            [
                'key' => 'message',
                'locale' => 'en',
                'value' => 'message'
            ],

            [
                'key' => 'your_order_is_placed',
                'locale' => 'en',
                'value' => 'your order is placed'
            ],

            [
                'key' => 'your_item_is_shipped',
                'locale' => 'en',
                'value' => 'your item is shipped'
            ],

            [
                'key' => 'category',
                'locale' => 'en',
                'value' => 'category'
            ],

            [
                'key' => 'approve',
                'locale' => 'en',
                'value' => 'approve'
            ],

            [
                'key' => 'cancel',
                'locale' => 'en',
                'value' => 'cancel'
            ],

            [
                'key' => 'price',
                'locale' => 'en',
                'value' => 'price'
            ],

            [
                'key' => 'pending',
                'locale' => 'en',
                'value' => 'pending'
            ],

            [
                'key' => 'sent',
                'locale' => 'en',
                'value' => 'sent'
            ],

            [
                'key' => 'draft',
                'locale' => 'en',
                'value' => 'draft'
            ],

            [
                'key' => 'trash',
                'locale' => 'en',
                'value' => 'trash'
            ],

            [
                'key' => 'all_day',
                'locale' => 'en',
                'value' => 'todo el día'
            ],

            [
                'key' => 'view_courses',
                'locale' => 'en',
                'value' => 'view courses'
            ],
            [
                'key' => 'conference',
                'locale' => 'en',
                'value' => 'conference'
            ],

            [
                'key' => 'today',
                'locale' => 'en',
                'value' => 'today'
            ],

            [
                'key' => 'yesterday',
                'locale' => 'en',
                'value' => 'yesterday'
            ],

            [
                'key' => 'tomorrow',
                'locale' => 'en',
                'value' => 'tomorrow'
            ],

            [
                'key' => 'day',
                'locale' => 'en',
                'value' => 'day'
            ],

            [
                'key' => 'week',
                'locale' => 'en',
                'value' => 'week'
            ],

            [
                'key' => 'month',
                'locale' => 'en',
                'value' => 'month'
            ],

            [
                'key' => 'year',
                'locale' => 'en',
                'value' => 'year'
            ],

            [
                'key' => 'reviewer',
                'locale' => 'en',
                'value' => 'reviewer'
            ],

            [
                'key' => 'date',
                'locale' => 'en',
                'value' => 'date'
            ],

            [
                'key' => 'hour',
                'locale' => 'en',
                'value' => 'hour'
            ],

            [
                'key' => 'reply_review',
                'locale' => 'en',
                'value' => 'reply'
            ],

            [
                'key' => 'user',
                'locale' => 'en',
                'value' => 'user'
            ],

            [
                'key' => 'user_profile',
                'locale' => 'en',
                'value' => 'user profile'
            ],

            [
                'key' => 'personal',
                'locale' => 'en',
                'value' => 'personal'
            ],

            [
                'key' => 'personal_details',
                'locale' => 'en',
                'value' => 'personal details'
            ],

            [
                'key' => 'name',
                'locale' => 'en',
                'value' => 'name'
            ],

            [
                'key' => 'surname',
                'locale' => 'en',
                'value' => 'surname'
            ],

            [
                'key' => 'full_name',
                'locale' => 'en',
                'value' => 'full name'
            ],

            [
                'key' => 'occupation',
                'locale' => 'en',
                'value' => 'occupation'
            ],

            [
                'key' => 'company_name',
                'locale' => 'en',
                'value' => 'company name'
            ],

            [
                'key' => 'phone',
                'locale' => 'en',
                'value' => 'phone'
            ],

            [
                'key' => 'address',
                'locale' => 'en',
                'value' => 'address'
            ],

            [
                'key' => 'city',
                'locale' => 'en',
                'value' => 'city'
            ],

            [
                'key' => 'state',
                'locale' => 'en',
                'value' => 'state'
            ],

            [
                'key' => 'country',
                'locale' => 'en',
                'value' => 'country'
            ],

            [
                'key' => 'postcode',
                'locale' => 'en',
                'value' => 'postcode'
            ],

            [
                'key' => 'social_links',
                'locale' => 'en',
                'value' => 'social links'
            ],

            [
                'key' => 'password',
                'locale' => 'en',
                'value' => 'password'
            ],

            [
                'key' => 're_type',
                'locale' => 'en',
                'value' => 'retype'
            ],

            [
                'key' => 'current_password',
                'locale' => 'en',
                'value' => 'current password'
            ],

            [
                'key' => 'new_password',
                'locale' => 'en',
                'value' => 'new password'
            ],

            [
                'key' => 're_type_password',
                'locale' => 'en',
                'value' => 'retype password'
            ],

            [
                'key' => 'settings',
                'locale' => 'en',
                'value' => 'settings'
            ],

            [
                'key' => 'notifications',
                'locale' => 'en',
                'value' => 'notifications'
            ],

            [
                'key' => 'help',
                'locale' => 'en',
                'value' => 'help'
            ],

            [
                'key' => 'search',
                'locale' => 'en',
                'value' => 'search'
            ],

            [
                'key' => 'submit',
                'locale' => 'en',
                'value' => 'submit'
            ],

            [
                'key' => 'edit',
                'locale' => 'en',
                'value' => 'edit'
            ],

            [
                'key' => 'delete',
                'locale' => 'en',
                'value' => 'delete'
            ],

            [
                'key' => 'update',
                'locale' => 'en',
                'value' => 'update'
            ],

            [
                'key' => 'upload',
                'locale' => 'en',
                'value' => 'upload'
            ],

            [
                'key' => 'download',
                'locale' => 'en',
                'value' => 'download'
            ],

            [
                'key' => 'success',
                'locale' => 'en',
                'value' => 'success'
            ],

            [
                'key' => 'error',
                'locale' => 'en',
                'value' => 'error'
            ],


            [
                'key' => 'warning',
                'locale' => 'en',
                'value' => 'warning'
            ],

            [
                'key' => 'info',
                'locale' => 'en',
                'value' => 'info'
            ],

            [
                'key' => 'loading',
                'locale' => 'en',
                'value' => 'loading'
            ],

            [
                'key' => 'save',
                'locale' => 'en',
                'value' => 'save'
            ],

            [
                'key' => 'cancel',
                'locale' => 'en',
                'value' => 'cancel'
            ],

            [
                'key' => 'confirm',
                'locale' => 'en',
                'value' => 'confirm'
            ],

            [
                'key' => 'yes',
                'locale' => 'en',
                'value' => 'yes'
            ],

            [
                'key' => 'no',
                'locale' => 'en',
                'value' => 'no'
            ],

            [
                'key' => 'next',
                'locale' => 'en',
                'value' => 'next'
            ],

            [
                'key' => 'previous',
                'locale' => 'en',
                'value' => 'previous'
            ],

            [
                'key' => 'finish',
                'locale' => 'en',
                'value' => 'finish'
            ],

            [
                'key' => 'start',
                'locale' => 'en',
                'value' => 'start'
            ],

            [
                'key' => 'stop',
                'locale' => 'en',
                'value' => 'stop'
            ],

            [
                'key' => 'pause',
                'locale' => 'en',
                'value' => 'pause'
            ],

            [
                'key' => 'resume',
                'locale' => 'en',
                'value' => 'resume'
            ],

            [
                'key' => 'retry',
                'locale' => 'en',
                'value' => 'retry'
            ],

            [
                'key' => 'exit',
                'locale' => 'en',
                'value' => 'exit'
            ],

            [
                'key' => 'homework',
                'locale' => 'en',
                'value' => 'homework'
            ],

            [
                'key' => 'assignment',
                'locale' => 'en',
                'value' => 'assignment'
            ],

            [
                'key' => 'grade',
                'locale' => 'en',
                'value' => 'grade'
            ],

            [
                'key' => 'feedback',
                'locale' => 'en',
                'value' => 'feedback'
            ],

            [
                'key' => 'discussion',
                'locale' => 'en',
                'value' => 'discussion'
            ],

            [
                'key' => 'forum',
                'locale' => 'en',
                'value' => 'forum'
            ],

            [
                'key' => 'announcement',
                'locale' => 'en',
                'value' => 'announcement'
            ],

            [
                'key' => 'resource',
                'locale' => 'en',
                'value' => 'resource'
            ],

            [
                'key' => 'module',
                'locale' => 'en',
                'value' => 'module'
            ],

            [
                'key' => 'lesson',
                'locale' => 'en',
                'value' => 'lesson'
            ],

            [
                'key' => 'quiz',
                'locale' => 'en',
                'value' => 'quiz'
            ],

            [
                'key' => 'exam',
                'locale' => 'en',
                'value' => 'exam'
            ],

            [
                'key' => 'certificate',
                'locale' => 'en',
                'value' => 'certificate'
            ],

            [
                'key' => 'progress',
                'locale' => 'en',
                'value' => 'progress'
            ],

            [
                'key' => 'completion',
                'locale' => 'en',
                'value' => 'completion'
            ],

            [
                'key' => 'start_date',
                'locale' => 'en',
                'value' => 'start date'
            ],

            [
                'key' => 'end_date',
                'locale' => 'en',
                'value' => 'end date'
            ],

            [
                'key' => 'duration',
                'locale' => 'en',
                'value' => 'duration'
            ],

            [
                'key' => 'level',
                'locale' => 'en',
                'value' => 'level'
            ],

            [
                'key' => 'prerequisite',
                'locale' => 'en',
                'value' => 'prerequisite'
            ],

            [
                'key' => 'syllabus',
                'locale' => 'en',
                'value' => 'syllabus'
            ],

            [
                'key' => 'materials',
                'locale' => 'en',
                'value' => 'materials'
            ],

            [
                'key' => 'resources',
                'locale' => 'en',
                'value' => 'resources'
            ],

            [
                'key' => 'schedule',
                'locale' => 'en',
                'value' => 'schedule'
            ],

            [
                'key' => 'attendance',
                'locale' => 'en',
                'value' => 'attendance'
            ],

            [
                'key' => 'participation',
                'locale' => 'en',
                'value' => 'participation'
            ],

            [
                'key' => 'group',
                'locale' => 'en',
                'value' => 'group'
            ],

            [
                'key' => 'team',
                'locale' => 'en',
                'value' => 'team'
            ],

            [
                'key' => 'project',
                'locale' => 'en',
                'value' => 'project'
            ],

            [
                'key' => 'activity',
                'locale' => 'en',
                'value' => 'activity'
            ],

            [
                'key' => 'task',
                'locale' => 'en',
                'value' => 'task'
            ],

            [
                'key' => 'goal',
                'locale' => 'en',
                'value' => 'goal'
            ],

            [
                'key' => 'objective',
                'locale' => 'en',
                'value' => 'objective'
            ],

            [
                'key' => 'achievement',
                'locale' => 'en',
                'value' => 'achievement'
            ],

            [
                'key' => 'milestone',
                'locale' => 'en',
                'value' => 'milestone'
            ],

            [
                'key' => 'deadline',
                'locale' => 'en',
                'value' => 'deadline'
            ],

            [
                'key' => 'extension',
                'locale' => 'en',
                'value' => 'extension'
            ],

            [
                'key' => 'submission',
                'locale' => 'en',
                'value' => 'submission'
            ],

            [
                'key' => 'review',
                'locale' => 'en',
                'value' => 'review'
            ],

            [
                'key' => 'comment',
                'locale' => 'en',
                'value' => 'comment'
            ],

            [
                'key' => 'discussion_board',
                'locale' => 'en',
                'value' => 'discussion board'
            ],

            [
                'key' => 'chat',
                'locale' => 'en',
                'value' => 'chat'
            ],

            [
                'key' => 'message_board',
                'locale' => 'en',
                'value' => 'message board'
            ],

            [
                'key' => 'announcement_board',
                'locale' => 'en',
                'value' => 'announcement board'
            ],





            [
                'key' => 'file',
                'locale' => 'en',
                'value' => 'file'
            ],

            [
                'key' => 'folder',
                'locale' => 'en',
                'value' => 'folder'
            ],

            [
                'key' => 'document',
                'locale' => 'en',
                'value' => 'document'
            ],

            [
                'key' => 'presentation',
                'locale' => 'en',
                'value' => 'presentation'
            ],

            [
                'key' => 'spreadsheet',
                'locale' => 'en',
                'value' => 'spreadsheet'
            ],

            [
                'key' => 'video',
                'locale' => 'en',
                'value' => 'video'
            ],

            [
                'key' => 'audio',
                'locale' => 'en',
                'value' => 'audio'
            ],

            [
                'key' => 'image',
                'locale' => 'en',
                'value' => 'image'
            ],

            [
                'key' => 'link',
                'locale' => 'en',
                'value' => 'link'
            ],

            [
                'key' => 'attachment',
                'locale' => 'en',
                'value' => 'attachment'
            ],

            [
                'key' => 'upload_file',
                'locale' => 'en',
                'value' => 'upload file'
            ],

            [
                'key' => 'download_file',
                'locale' => 'en',
                'value' => 'download file'
            ],

            [
                'key' => 'view_file',
                'locale' => 'en',
                'value' => 'view file'
            ],

            [
                'key' => 'edit_file',
                'locale' => 'en',
                'value' => 'edit file'
            ],

            [
                'key' => 'delete_file',
                'locale' => 'en',
                'value' => 'delete file'
            ],

            [
                'key' => 'share_file',
                'locale' => 'en',
                'value' => 'share file'
            ],

            [
                'key' => 'copy_file',
                'locale' => 'en',
                'value' => 'copy file'
            ],

            [
                'key' => 'move_file',
                'locale' => 'en',
                'value' => 'move file'
            ],

            [
                'key' => 'rename_file',
                'locale' => 'en',
                'value' => 'rename file'
            ],

            [
                'key' => 'new_folder',
                'locale' => 'en',
                'value' => 'new folder'
            ],

            [
                'key' => 'open_folder',
                'locale' => 'en',
                'value' => 'open folder'
            ],

            [
                'key' => 'close_folder',
                'locale' => 'en',
                'value' => 'close folder'
            ],

            [
                'key' => 'delete_folder',
                'locale' => 'en',
                'value' => 'delete folder'
            ],

            [
                'key' => 'rename_folder',
                'locale' => 'en',
                'value' => 'rename folder'
            ],

            [
                'key' => 'move_folder',
                'locale' => 'en',
                'value' => 'move folder'
            ],

            [
                'key' => 'copy_folder',
                'locale' => 'en',
                'value' => 'copy folder'
            ],

            [
                'key' => 'share_folder',
                'locale' => 'en',
                'value' => 'share folder'
            ],

            [
                'key' => 'folder_contents',
                'locale' => 'en',
                'value' => 'folder contents'
            ],

            [
                'key' => 'file_size',
                'locale' => 'en',
                'value' => 'file size'
            ],

            [
                'key' => 'file_type',
                'locale' => 'en',
                'value' => 'file type'
            ],

            [
                'key' => 'last_modified',
                'locale' => 'en',
                'value' => 'last modified'
            ],

            [
                'key' => 'created_on',
                'locale' => 'en',
                'value' => 'createdon'
            ],

            [
                'key' => 'modified_on',
                'locale' => 'en',
                'value' => 'modified on'
            ],

            [
                'key' => 'owner',
                'locale' => 'en',
                'value' => 'owner'
            ],

            [
                'key' => 'permissions',
                'locale' => 'en',
                'value' => 'permissions'
            ],

            [
                'key' => 'access',
                'locale' => 'en',
                'value' => 'access'
            ],

            [
                'key' => 'read_only',
                'locale' => 'en',
                'value' => 'read only'
            ],

            [
                'key' => 'read_write',
                'locale' => 'en',
                'value' => 'read and write'
            ],

            [
                'key' => 'full_control',
                'locale' => 'en',
                'value' => 'full control'
            ],

            [
                'key' => 'restricted',
                'locale' => 'en',
                'value' => 'restricted'
            ],

            [
                'key' => 'public',
                'locale' => 'en',
                'value' => 'public'
            ],

            [
                'key' => 'private',
                'locale' => 'en',
                'value' => 'private'
            ],

            [
                'key' => 'shared',
                'locale' => 'en',
                'value' => 'shared'
            ],

            [
                'key' => 'unshared',
                'locale' => 'en',
                'value' => 'unshared'
            ],

            [
                'key' => 'view',
                'locale' => 'en',
                'value' => 'view'
            ],

            [
                'key' => 'edit',
                'locale' => 'en',
                'value' => 'edit'
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
