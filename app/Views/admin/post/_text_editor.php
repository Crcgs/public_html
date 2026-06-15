
<label class="control-label control-label-content"><?= trans('content'); ?></label>
<div id="main_editor">
   <?php if (!empty($post)): ?>
    <textarea id="contentEditor" class="form-control" name="content">
<?= $post->content; ?>
    </textarea>
<?php else: ?>
    <textarea id="contentEditor" class="form-control" name="content">
<?= old('content'); ?>
    </textarea>
<?php endif; ?>

</div>

<style>
    .note-editor .note-editable {
    word-wrap: break-word;
    overflow-wrap: break-word;
    word-break: break-word;
    max-width: 100%;
}
/* Summernote fullscreen FIX */
.note-editor.note-frame.fullscreen {
    position: fixed !important;
    top: 0 !important;
    left: 0 !important;
    width: 100vw !important;
    height: 100vh !important;
    z-index: 999999 !important;
    background: #fff;
}

.note-editor.note-frame.fullscreen .note-editable {
    height: calc(100vh - 60px) !important;
    overflow-y: auto !important;
}

/* Allow body scroll in fullscreen */
body.note-fullscreen {
    overflow: visible !important;
}
.wrapper,
.content-wrapper,
.main-content,
.page-content {
    overflow: visible !important;
}

.note-editor .note-editable img {
    display: block;
    max-width: 100%;
    height: auto;
    margin: 12px 0;
}
</style>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.20/dist/summernote-lite.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.20/dist/summernote-lite.min.js"></script>
<link href="https://fonts.googleapis.com/css2?family=Poppins&family=Montserrat&family=Playfair+Display&family=Lora&family=Merriweather&family=Inter&family=Open+Sans&family=Lato&family=Source+Serif+Pro&family=Roboto+Slab&display=swap" rel="stylesheet">




<script>
$(document).ready(function () {
    $('#contentEditor').summernote({
        height: 350,
        
          toolbar: [
        ['history', ['undo', 'redo']],
        ['style', ['style']],
        ['font', [
            'bold', 'italic', 'underline', 'strikethrough',
            'superscript', 'subscript', 'clear'
        ]],
        ['fontname', ['fontname']],
        ['fontsize', ['fontsize']],
        ['color', ['color']],
        ['para', ['ul', 'ol', 'paragraph', 'height']],
        ['table', ['table']],
        ['insert', ['link', 'picture', 'video', 'hr']],
        ['misc', ['fullscreen', 'codeview', 'help']]
    ],

   fontNames: [
             'Arial', 'Arial Black', 'Comic Sans MS',
        'Courier New', 'Georgia', 'Impact',
        'Tahoma', 'Times New Roman', 'Verdana', 'Poppins',
            'Montserrat',
            'Playfair Display',
            'Lora',
            'Merriweather',
            'Inter',
            'Open Sans',
            'Lato',
            'Source Serif Pro',
            'Roboto Slab'
        ],

        fontNamesIgnoreCheck: [
            'Poppins','Montserrat','Playfair Display','Lora','Merriweather',
            'Inter','Open Sans','Lato','Source Serif Pro','Roboto Slab'
        ],

    fontSizes: [
        '8', '9', '10', '11', '12',
        '14', '16', '18', '20',
        '24', '36', '48', '64', '68', '72'
    ],

    lineHeights: [
        '0.8', '1', '1.2', '1.5',
        '2', '2.5', '3'
    ],

    styleTags: [
        'p',
        { title: 'Blockquote', tag: 'blockquote', className: 'blockquote', value: 'blockquote' },
        'pre', 'h1', 'h2', 'h3', 'h4', 'h5', 'h6'
    ],

    disableDragAndDrop: true,

    shortcuts: true,

    placeholder: 'Write your content here...',

        callbacks: {

            /* WORD-LIKE IMAGE INSERT */
            onImageUpload: function (files) {
                let editor = $(this);

                editor.summernote('focus');
                if (savedRange) {
                    editor.summernote('restoreRange', savedRange);
                }

                let reader = new FileReader();
                reader.onload = function (e) {
                    editor.summernote('insertImage', e.target.result, function ($img) {
                        $img.css({
                            'max-width': '100%',
                            'display': 'block',
                            'margin': '12px 0'
                        });
                    });
                };
                reader.readAsDataURL(files[0]);
            },

            onPaste: function (e) {
                e.preventDefault();
                let text = (e.originalEvent || e).clipboardData.getData('text/plain');
                document.execCommand('insertText', false, text);
            }
        }
});
});

$(document).on('click', '.note-btn-fullscreen', function () {
    setTimeout(function () {
        $('.note-editor').toggleClass('fullscreen');
        $('body').toggleClass('note-fullscreen');
    }, 50);
});

let savedRange = null;

// Cursor position save
$(document).on('summernote.focus', '#contentEditor', function () {
    savedRange = $('#contentEditor').summernote('createRange');
});

// Image insert hone se pehle restore
$(document).on('click', '.note-btn-picture', function () {
    if (savedRange) {
        $('#contentEditor').summernote('focus');
        $('#contentEditor').summernote('restoreRange', savedRange);
    }
});


</script>

<style>
.post-content {
    font-size: 16px;
    line-height: 1.7;
    color: #222;
}

.post-content img {
    max-width: 100%;
    height: auto;
    display: block;
    margin: 15px 0;
}

.post-content h1,
.post-content h2,
.post-content h3 {
    margin-top: 20px;
}
</style>

<button type="button" id="previewBtn" class="btn btn-primary" style="margin-top:10px;">
    Preview
</button>
<!-- Preview Modal -->
<div id="previewModal" style="display:none; position:fixed; top:0; left:0; width:100%; height:100%; background:rgba(0,0,0,0.6); z-index:999999;">
    <div style="background:#fff; width:80%; max-width:900px; margin:40px auto; padding:20px; border-radius:6px; max-height:90vh; overflow:auto;">
        
        <h3 style="margin-top:0;">Content Preview</h3>
        <hr>

        <div id="previewContent" class="post-content"></div>

        <hr>
        <button id="closePreview" class="btn btn-danger">Close</button>
    </div>
</div>
<script>
$(document).ready(function () {

    // Preview button click
    $('#previewBtn').on('click', function () {
        // Summernote ka HTML content uthao
        let content = $('#contentEditor').summernote('code');

        // Preview area me daalo
        $('#previewContent').html(content);

        // Modal show
        $('#previewModal').fadeIn();
    });

    // Close preview
    $('#closePreview').on('click', function () {
        $('#previewModal').fadeOut();
    });

});
</script>





<!--<label class="control-label control-label-content"><?= trans('content'); ?></label>-->
<!--<div id="main_editor">-->
<!--    <div class="row">-->
<!--        <div class="col-sm-12 editor-buttons">-->
<!--            <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#file_manager_image" data-image-type="editor"><i class="fa fa-image"></i>&nbsp;&nbsp;&nbsp;<?= trans("add_image"); ?></button>-->
<!--        </div>-->
<!--    </div>-->
<!--    <?php if (!empty($post)): ?>-->
<!--        <textarea class="tinyMCE form-control" name="content"><?= $post->content; ?></textarea>-->
<!--    <?php else: ?>-->
<!--        <textarea class="tinyMCE form-control" name="content"><?= old('content'); ?></textarea>-->
<!--    <?php endif; ?>-->
<!--</div>-->

