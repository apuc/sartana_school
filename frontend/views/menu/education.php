<main class="structure">
    <div class="container">
        <dl class="structure__list">
            <dt class="structure__title"><?= $model->title ?></dt>
            <?php if ($model->text) {
                echo $model->text;
            } else {
                echo '<dd style="font-weight: 600">О реализуемых образовательных программах, в том числе о реализуемых адаптированных образовательных
    программах, с указанием в отношении каждой образовательной программы:</dd>
<dd style="text-indent: 30px;">Форм обучения;</dd>
<dd style="text-indent: 30px;">Нормативного срока обучения;</dd>
<dd style="text-indent: 30px;">Срока действия государственной аккредитации образовательной программы
    (при наличии государственной аккредитации), общественной, общественно-профессиональной аккредитации
    образовательной программы (при наличии общественной, общественно-профессиональной аккредитации);</dd>
<dd style="text-indent: 30px;">Языка (х), на котором (ых) осуществляется образование (обучение);</dd>
<dd style="text-indent: 30px;">Учебных предметов, курсов, дисциплин (модулей), предусмотренных соответствующей образовательной программой;</dd>
<dd style="text-indent: 30px;">Практики, предусмотренной соответствующей образовательной программой;</dd>
<dd style="text-indent: 30px;">Об использовании при реализации образовательной программы электронного обучения и дистанционных образовательных технологий;</dd>
<dd style="font-weight: 600">Об описании образовательной программы с приложением образовательной программы в форме электронного
    документа или в виде активных ссылок, непосредственный переход по которым позволяет получить доступ
    к страницам сайта, содержащем информацию:</dd>
<dd style="text-indent: 30px;">Об учебном плане с приложением его в виде электронного документа;</dd>
<dd style="text-indent: 30px;">Об аннотации к рабочим программам дисциплин (по каждому учебному предмету,
    курсу, дисциплине (модулю), практики в составе образовательной программы) с приложением рабочих п
    рограмм в виде электронного документа;</dd>
<dd style="text-indent: 30px;">О календарном учебном графике с приложением его в виде электронного документа;</dd>
<dd style="text-indent: 30px;">О методических и иных документах, разработанных образовательной организацией
    для обеспечения образовательного процесса, а также рабочей программы воспитания и календарного плана
    воспитательной работы, включаемых в основные образовательные программы в соответствии с частью 1 статьи
    10 Закона Донецкой Народной Республики «Об образовании»;</dd>
<dd style="font-weight: 600">О численности обучающихся по реализуемым образовательным программам в том числе:</dd>
<dd style="text-indent: 30px;">Об общей численности обучающихся;</dd>
<dd style="text-indent: 30px;">О численности обучающихся за счет бюджетных ассигнований бюджета Донецкой Народной Республики;</dd>
<dd style="text-indent: 30px;">О численности обучающихся по договорам об образовании, заключаемых при
    приеме на обучение за счет средств физического лица и (или) юридического лица (далее – договор об
    оказании платных образовательных услуг); Образовательные организации, реализующие общеобразовательные
    программы, дополнительно указывают наименование образовательной программы;</dd>
<dd style="text-indent: 30px;">О лицензии на осуществление образовательной деятельности
    (выписке из реестра на осуществление образовательной деятельности).</dd>';
            }
            ?>
        </dl>
    </div>
</main>
