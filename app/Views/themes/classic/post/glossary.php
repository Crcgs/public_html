<div id="wrapper">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 page-breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= langBaseUrl(); ?>"><?= trans("home"); ?></a></li>
                    <li class="breadcrumb-item active"><?= trans("posts"); ?></li>
                </ol>
            </div>
            <div id="content" class="col-sm-8">
                <div class="row">
                    <div class="col-sm-12"><h1 class="page-title">Glossary</h1></div>
                    <?php
$currentLetter = '';

if (!empty($glossaries)):
    foreach ($glossaries as $item):

        $firstLetter = strtoupper(substr($item->word, 0, 1));

        if ($firstLetter != $currentLetter):
            $currentLetter = $firstLetter;
?>
            <div class="col-sm-12">
                <h2 class="glossary-letter"><?= $currentLetter; ?></h2>
            </div>
<?php endif; ?>

        <div class="col-sm-6 col-xs-12">
            <!-- <a href="<?= base_url('glossary-detail/' . $item->id); ?>"
               class="glossary-word">
                <?= esc($item->word); ?>
            </a> -->
            <a href="<?= current_url() . '?id=' . $item->id; ?>"
            class="glossary-word">
             <?= esc($item->word); ?>
            </a>
        </div>

<?php
    endforeach;
endif;
?>
                    
                </div>
            </div>
            <div id="sidebar" class="col-sm-4">
                <?= loadView('partials/_sidebar'); ?>
            </div>
        </div>
    </div>
</div>


<?php $activeLetter = strtoupper($_GET['letter'] ?? 'A'); ?>

<div class="az-bar">
    <div class="az-inner">
        <?php foreach (range('A','Z') as $char): ?>
            <a href="<?= current_url() . '?letter=' . $char ?>"
               class="az-item <?= ($activeLetter === $char) ? 'active' : '' ?>">
                <?= $char ?>
            </a>
        <?php endforeach; ?>
    </div>
</div>


<style>
/* A–Z Wrapper */
.az-bar {
    border-top: 1px solid #e5e5e5;
    border-bottom: 1px solid #e5e5e5;
    padding: 14px 0;
    margin: 20px 0 30px;
        background: #efefef;
}

/* Inner Row */
.az-inner {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 10px;
}

/* Letters */
.az-item {
    width: 42px;
    height: 42px;
    line-height: 40px;
    text-align: center;
    border: 1px solid #dcdcdc;
    border-radius: 4px;
    font-size: 15px;
    font-weight: 600;
    color: #222;
    background: #fff;
    text-decoration: none;
    transition: all 0.2s ease;
}

.az-item:hover {
    background: #f4f4f4;
}

/* Active */
.az-item.active {
    background: #2f6ce5;
    color: #fff;
    border-color: #2f6ce5;
}

/* 📱 Mobile EXACT behavior */
@media (max-width: 768px) {
    .az-inner {
        flex-wrap: nowrap;
        justify-content: flex-start;
        overflow-x: auto;
        padding: 0 10px;
    }

    .az-item {
        flex: 0 0 auto;
    }

    .az-inner::-webkit-scrollbar {
        height: 6px;
    }

    .az-inner::-webkit-scrollbar-thumb {
        background: #ccc;
        border-radius: 3px;
    }
}


</style>
