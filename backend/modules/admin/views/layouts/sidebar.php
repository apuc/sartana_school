<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
        <img src="<?= $assetDir ?>/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">Администратор</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->


        <!-- SidebarSearch Form -->
        <!-- href be escaped -->
        <!-- <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">  
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div> -->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <?php
            echo \hail812\adminlte\widgets\Menu::widget([
                'items' => [
                    ['label' => 'Новости', 'icon' => 'archive', 'url' => ['/news/news']],
                    ['label' => 'Документы', 'icon' => 'archive', 'url' => ['/docs/docs']],
                    ['label' => 'Педагогический состав', 'icon' => 'archive', 'url' => ['/teachers/teachers'],],
                    ['label' => 'Руководство', 'icon' => 'archive', 'url' => ['/supervisors/supervisors'],],
                    ['label' => 'Питание', 'icon' => 'archive',
                        'items' => [
                            ['label' => 'Меню', 'iconType' => 'archive', 'icon' => 'archive', 'url' => ['/hot-menu/hot-menu'],],
                            ['label' => 'Ответы', 'icon' => 'archive', 'url' => ['/answer/answers'],],
                            ['label' => 'Вопросы', 'icon' => 'archive', 'url' => ['/feedback/feedback'],],
                        ],
                    ],
                    ['label' => 'Добавить контент', 'icon' => 'archive',
                        'items' => [
                            ['label' => 'Основные сведения', 'icon' => 'archive', 'url' => array('/menu/menu', 'page'=> 'base-info')],
                            ['label' => 'Структура и органы управления образовательной организацией', 'icon' => 'archive', 'url' => array('/menu/menu', 'page'=> 'structures')],
                            ['label' => 'Образование', 'icon' => 'archive', 'url' => array('/menu/menu', 'page'=> 'education')],
                            ['label' => 'Материально- техническое обеспечение и оснащенность образовательного процесса', 'icon' => 'archive', 'url' => array('/menu/menu', 'page'=> 'equipment')],
                            ['label' => 'Платные образовательные услуги', 'icon' => 'archive', 'url' => array('/menu/menu', 'page'=> 'paid-services')],
                            ['label' => 'Финансово-хозяйственная деятельность', 'icon' => 'archive', 'url' => array('/menu/menu', 'page'=> 'economic-activity')],
                            ['label' => 'Вакантные места для приема (перевода) обучающихся', 'icon' => 'archive', 'url' => array('/menu/menu', 'page'=> 'vacancies')],
                            ['label' => 'Стипендии и меры поддержки обучающимся (воспитанникам)', 'icon' => 'archive', 'url' => array('/menu/menu', 'page'=> 'support')],
                            ['label' => 'Доступная среда', 'icon' => 'archive', 'url' => array('/menu/menu', 'page'=> 'environment')],
                            ['label' => 'Международное сотрудничество', 'icon' => 'archive', 'url' => array('/menu/menu', 'page'=> 'international-cooperation')],
                            ['label' => 'Внедряем ФГОС', 'icon' => 'archive', 'url' => array('/menu/menu', 'page'=> 'fgos')],
                            ['label' => 'Государственная итоговая аттестация (ГИА) - 2023', 'icon' => 'archive', 'url' => array('/menu/menu', 'page'=> 'gia')],
                            ['label' => 'Наши достижения', 'icon' => 'archive', 'url' => array('/menu/menu', 'page'=> 'achievements')],
                        ],
                    ]
                ]]);
            ?>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>