</section>
</div>
<footer id="footer" class="main-footer">
    <div class="pull-right hidden-xs">
        <strong style="font-weight: 600;"><?= $baseSettings->copyright; ?>&nbsp;</strong>
    </div>
    <b>Version</b>&nbsp;2.2.1
</footer>
</div>
<script src="<?= base_url('assets/admin/js/jquery-ui.min.js'); ?>"></script>
<script>$.widget.bridge('uibutton', $.ui.button);</script>
<script src="<?= base_url('assets/vendor/bootstrap-v3/js/bootstrap.min.js'); ?>"></script>
<script src="<?= base_url('assets/admin/js/adminlte.min.js'); ?>"></script>
<script src="<?= base_url('assets/admin/plugins/datatables/jquery.dataTables.min.js'); ?>"></script>
<script src="<?= base_url('assets/admin/plugins/datatables/dataTables.bootstrap.min.js'); ?>"></script>
<script src="<?= base_url('assets/admin/js/lazysizes.min.js'); ?>"></script>
<script src="<?= base_url('assets/vendor/icheck/icheck.min.js'); ?>"></script>
<script src="<?= base_url('assets/admin/plugins/pace/pace.min.js'); ?>"></script>
<script src="<?= base_url('assets/admin/plugins/file-manager/file-manager-2.2.js'); ?>"></script>
<script src="<?= base_url('assets/admin/plugins/tagsinput/jquery.tagsinput.min.js'); ?>"></script>
<script src="<?= base_url('assets/admin/plugins/file-uploader/js/jquery.dm-uploader.min.js'); ?>"></script>
<script src="<?= base_url('assets/admin/plugins/file-uploader/js/ui.js'); ?>"></script>
<script src="<?= base_url('assets/admin/js/plugins.js'); ?>"></script>
<script src="<?= base_url('assets/admin/plugins/colorpicker/bootstrap-colorpicker.min.js'); ?>"></script>
<script src="<?= base_url('assets/vendor/bootstrap-datetimepicker/moment.min.js'); ?>"></script>
<script src="<?= base_url('assets/vendor/bootstrap-datetimepicker/bootstrap-datetimepicker.min.js'); ?>"></script>
<script src="<?= base_url('assets/admin/js/custom-2.2.js'); ?>"></script>
<script src="<?= base_url('assets/admin/js/post-types-2.2.js'); ?>"></script>
<script src="<?= base_url('assets/admin/plugins/tinymce/tinymce.min.js'); ?>"></script>
<script>
    function initTinyMCE(selector, minHeight) {
        var menuBar = 'file insert format table help';
        if (selector == '.tinyMCEQuiz') {
            menuBar = false;
        }
        tinymce.init({
    selector: selector,
    height: minHeight,
    min_height: minHeight,
    valid_elements: '*[*]',
    relative_urls: false,
    entity_encoding: 'raw',
    remove_script_host: false,
    directionality: directionality,
    language: '<?= $activeLang->text_editor_lang; ?>',
    menubar: true,

    plugins: [
        'advlist autolink lists link image imagetools charmap preview anchor',
        'searchreplace visualblocks visualchars code codesample fullscreen',
        'insertdatetime media table hr pagebreak nonbreaking toc',
        'emoticons help wordcount autosave template quickbars',
        'textpattern directionality importcss',
        'advtable advcode',
        'table', 'advtable',
        'textcolor colorpicker',
        'casechange formatpainter pageembed permanentpen',
        'tinycomments mentions footnotes checklist typography'
    ],

    toolbar: [
        'fullscreen preview code restoredraft | undo redo | cut copy paste selectall',
        'styleselect formatselect fontselect fontsizeselect | forecolor backcolor | bold italic underline strikethrough | casechange removeformat',
        'alignleft aligncenter alignright alignjustify | outdent indent | lineheight | numlist bullist checklist',
        'image media table charmap emoticons hr pagebreak | link anchor toc footnotes | text_image_right layout',
        'ltr rtl | superscript subscript | blockquote | addcomment showcomments | help'
    ].join(' | '),

    toolbar_mode: 'sliding',
    font_size_formats: '8pt 9pt 10pt 11pt 12pt 14pt 16pt 18pt 20pt 24pt 28pt 32pt 36pt 48pt 60pt 72pt',
    image_advtab: true,
    image_caption: true,
    image_dimensions: true,
    branding: false,
    autosave_interval: '30s',
    autosave_restore_when_empty: true,
    autosave_retention: '2m',
    importcss_append: true,

    quickbars_insert_toolbar: 'quickimage quicktable hr | h2 h3 blockquote',
    quickbars_selection_toolbar: 'bold italic underline | forecolor backcolor | link blockquote quicklink',

    contextmenu: 'link image inserttable | cell row column deletetable',

    content_css: ['<?= base_url('assets/admin/plugins/tinymce/editor_content.css'); ?>'],

    setup: function (editor) {

        /* -------------------------------------------------
           LAYOUT MENU WITH BORDER COLOR & BACKGROUND BOX
        -------------------------------------------------- */
        editor.ui.registry.addMenuButton('layout', {
            text: 'Layout',
            fetch: function (callback) {
                callback([
                    {
                        type: 'menuitem',
                        text: 'Two Columns',
                        onAction: () =>
                            editor.insertContent('<div style="column-count:2;">Your text here</div>')
                    },
                    {
                        type: 'menuitem',
                        text: 'Three Columns',
                        onAction: () =>
                            editor.insertContent('<div style="column-count:3;">Your text here</div>')
                    },
                    {
                        type: 'menuitem',
                        text: 'Add Border',
                        onAction: () =>
                            editor.insertContent('<div style="border:1px solid #000;padding:10px;">Bordered text</div>')
                    },

                    /* BORDER COLOR PICKER */
                    {
                        type: 'menuitem',
                        text: 'Add Border Color',
                        onAction: function () {
                            editor.windowManager.open({
                                title: 'Border Color',
                                body: {
                                    type: 'panel',
                                    items: [
                                        { type: 'colorinput', name: 'borderColor', label: 'Choose Border Color' }
                                    ]
                                },
                                buttons: [
                                    { type: 'cancel', text: 'Cancel' },
                                    { type: 'submit', text: 'Apply', primary: true }
                                ],
                                onSubmit: function (api) {
                                    const data = api.getData();
                                    editor.insertContent(
                                        `<div style="border:2px solid ${data.borderColor}; padding:12px;">Your text here...</div>`
                                    );
                                    api.close();
                                }
                            });
                        }
                    },

                    /* BACKGROUND COLOR BOX */
                    {
                        type: 'menuitem',
                        text: 'Add Background Color Box',
                        onAction: function () {
                            editor.windowManager.open({
                                title: 'Background Color Box',
                                body: {
                                    type: 'panel',
                                    items: [
                                        { type: 'colorinput', name: 'bgColor', label: 'Choose Background Color' }
                                    ]
                                },
                                buttons: [
                                    { type: 'cancel', text: 'Cancel' },
                                    { type: 'submit', text: 'Apply', primary: true }
                                ],
                                onSubmit: function (api) {
                                    const data = api.getData();
                                    editor.insertContent(
                                        `<div style="background:${data.bgColor}; padding:15px; border-radius:6px;">Your text here...</div>`
                                    );
                                    api.close();
                                }
                            });
                        }
                    }
                ]);
            }
        });



        /* -------------------------------------------------
           TEXT LEFT / IMAGE RIGHT BUTTON
        -------------------------------------------------- */
        editor.ui.registry.addButton('text_image_right', {
            text: 'Text Left / Image Right',
            tooltip: 'Insert text on left and image on right',
            onAction: function () {

                const html = `
                    <table style="width:100%; border-collapse:collapse;">
                        <tr>
                            <td style="width:50%; vertical-align:top; padding:10px;">
                                <p>Your text here...</p>
                            </td>
                            <td style="width:50%; vertical-align:top; padding:10px; text-align:right;">
                                <img data-upload="1"
                                     src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw=="
                                     style="max-width:100%; border:1px dashed #999; padding:5px; cursor:pointer;" />
                                <p style="font-size:12px; color:#777;">Click image to upload/replace</p>
                            </td>
                        </tr>
                    </table>
                `;

                editor.insertContent(html);
            }
        });



        /* -------------------------------------------------
           CLICK ON IMAGE → OPEN IMAGE URL DIALOG
        -------------------------------------------------- */
        editor.on('click', function (e) {
            if (e.target.tagName === 'IMG' && e.target.hasAttribute('data-upload')) {

                editor.windowManager.open({
                    title: 'Insert Image',
                    body: {
                        type: 'panel',
                        items: [
                            { type: 'input', name: 'image', label: 'Image URL' }
                        ]
                    },
                    buttons: [
                        { type: 'cancel', text: 'Cancel' },
                        { type: 'submit', text: 'Insert Image', primary: true }
                    ],
                    onSubmit: function (api) {
                        const { image } = api.getData();
                        if (image) e.target.src = image;
                        api.close();
                    }
                });
            }
        });

    }
});

        /*tinymce.init({
            selector: selector,
            height: minHeight,
            min_height: minHeight,
            valid_elements: '*[*]',
            relative_urls: false,
            entity_encoding: 'raw',
            remove_script_host: false,
            directionality: directionality,
            language: '<?= $activeLang->text_editor_lang; ?>',
            menubar: menuBar,
            plugins: 'advlist autolink lists link image charmap preview searchreplace visualblocks code codesample fullscreen insertdatetime media table',
            toolbar: 'fullscreen code preview | undo redo | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | numlist bullist | forecolor backcolor removeformat | image media link',
            content_css: ['<?= base_url('assets/admin/plugins/tinymce/editor_content.css'); ?>'],
        });*/
    }

    if ($('.tinyMCE').length > 0) {
        initTinyMCE('.tinyMCE', 500);
    }
    if ($('.tinyMCEsmall').length > 0) {
        initTinyMCE('.tinyMCEsmall', 300);
    }
    if ($('.tinyMCEQuiz').length > 0) {
        initTinyMCE('.tinyMCEQuiz', 205);
    }
</script>
<style>.pagination a, .pagination span {
        border-radius: 0 !important;
    }</style>
<?php if (isset($langSearchColumn)): ?>
    <script>
        var table = $('#cs_datatable_lang').DataTable({
            dom: 'l<"#table_dropdown">frtip',
            "order": [[0, "desc"]],
            "aLengthMenu": [[15, 30, 60, 100], [15, 30, 60, 100, "All"]]
        });
        $('<label class="table-label"><label/>').text('Language').appendTo('#table_dropdown');
        $select = $('<select class="form-control input-sm"><select/>').appendTo('#table_dropdown');
        $('<option/>').val('').text('<?= trans("all"); ?>').appendTo($select);
        <?php foreach ($activeLanguages as $lang): ?>
        $('<option/>').val('<?= $lang->name; ?>').text('<?= $lang->name; ?>').appendTo($select);
        <?php endforeach; ?>
        $("#table_dropdown select").change(function () {
            table.column(<?= $langSearchColumn; ?>).search($(this).val()).draw();
        });
    </script>
<?php endif; ?>
</body>
</html>