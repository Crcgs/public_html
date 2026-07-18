<div id="wrapper">
    <div class="container">
        <div class="row">

            <div class="col-sm-12 page-breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="<?= langBaseUrl(); ?>"><?= trans("home"); ?></a>
                    </li>
                    <li class="breadcrumb-item active">
                        Glossary
                    </li>
                </ol>
            </div>

            <div id="content" class="col-sm-8">

                <h1 class="page-title">Glossary</h1>

                <?php
                $activeLetter = strtoupper($_GET['letter'] ?? '');
                ?>

                <!-- Alphabet Filter -->
                <div class="az-bar">
                    <div class="az-inner">

                        <a href="<?= current_url(); ?>"
                           class="az-item <?= empty($activeLetter) ? 'active' : ''; ?>">
                            All
                        </a>

                        <?php foreach(range('A','Z') as $char): ?>

                            <a href="<?= current_url(); ?>?letter=<?= $char; ?>"
                               class="az-item <?= ($activeLetter==$char)?'active':''; ?>">
                                <?= $char; ?>
                            </a>

                        <?php endforeach; ?>

                    </div>
                </div>

              <div class="row">

<?php
$showAll = isset($_GET['all']) && $_GET['all'] == 1;

$groups = [];

foreach ($glossaries as $item) {
    $letter = strtoupper(substr(trim($item->word), 0, 1));

    if (!empty($activeLetter) && $letter != $activeLetter) {
        continue;
    }

    $groups[$letter][] = $item;
}

foreach ($groups as $letter => $words):
?>

<div class="col-sm-12">
    <h2 class="letter-title"><?= $letter; ?></h2>
</div>

<?php

$limit = $showAll ? count($words) : 10;
$count = 0;

foreach ($words as $word):

    if ($count >= $limit) {
        break;
    }
?>

<div class="col-sm-6 col-xs-12">

    <div class="glossary-card">

        <a href="<?= current_url(); ?>?id=<?= $word->id; ?>">
            <?= esc($word->word); ?>
        </a>

    </div>

</div>

<?php
$count++;
endforeach;
?>

<?php if (!$showAll && count($words) > 10): ?>

<div class="col-sm-12 text-center" style="margin:20px 0 40px;">

    <a href="<?= current_url(); ?>?letter=<?= $letter; ?>&all=1"
       class="btn btn-primary">

        View All (<?= count($words); ?>)

    </a>

</div>

<?php endif; ?>

<?php endforeach; ?>

</div>

            </div>

            <div id="sidebar" class="col-sm-4">
                <?= loadView('partials/_sidebar'); ?>
            </div>

        </div>
    </div>
</div>

<style>

.az-bar{
    background:#fff;
    border:1px solid #ddd;
    padding:15px;
    margin-bottom:30px;
    border-radius:6px;
}

.az-inner{
    display:flex;
    flex-wrap:wrap;
    gap:8px;
}

.az-item{
    width:40px;
    height:40px;
    display:flex;
    justify-content:center;
    align-items:center;
    border:1px solid #ddd;
    border-radius:5px;
    text-decoration:none;
    color:#444;
    background:#fff;
    font-weight:600;
    transition:.2s;
}

.az-item:hover{
    background:#f4f4f4;
}

.az-item.active{
    background:#1565C0;
    color:#fff;
    border-color:#1565C0;
}

.letter-title{
    margin-top:25px;
    margin-bottom:15px;
    padding-bottom:10px;
    border-bottom:2px solid #1565C0;
    font-size:28px;
    font-weight:bold;
}

.glossary-card{

    background:#fff;
    border:1px solid #e5e5e5;
    border-radius:6px;
    padding:14px 18px;
    margin-bottom:15px;
    transition:.3s;
}

.glossary-card:hover{

    box-shadow:0 5px 18px rgba(0,0,0,.08);
    transform:translateY(-2px);

}

.glossary-card a{

    text-decoration:none;
    color:#222;
    font-size:16px;
    font-weight:600;

}

.glossary-card a:hover{

    color:#1565C0;

}

@media(max-width:768px){

.az-inner{

    flex-wrap:nowrap;
    overflow-x:auto;
    padding-bottom:5px;

}

.az-item{

    flex:0 0 auto;

}

.letter-title{

    font-size:24px;

}

}

</style>