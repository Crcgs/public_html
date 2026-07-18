<style>
    body {
        background: #f8f9fa;
    }

    .glossary-container {
        max-width: 900px;
        margin: 50px auto;
    }

    .glossary-card {
        border: none;
        border-radius: 12px;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
        overflow: hidden;
    }

    .glossary-header {
        background: linear-gradient(135deg, #161616, #0056b3);
        color: #fff;
        padding: 25px 30px;
    }

    .glossary-header h1 {
        margin: 0;
        font-size: 32px;
        font-weight: 600;
    }

    .glossary-body {
        padding: 30px;
        background: #fff;
        font-size: 17px;
        line-height: 1.8;
        color: #444;
        text-align: justify;
    }

    .glossary-body p:last-child {
        margin-bottom: 0;
    }

    @media (max-width: 768px) {
        .glossary-container {
            margin: 20px auto;
            padding: 0 15px;
        }

        .glossary-header h1 {
            font-size: 26px;
        }

        .glossary-body {
            padding: 20px;
            font-size: 16px;
        }
    }
</style>

<div class="container glossary-container">
    <div class="card glossary-card">
        <div class="glossary-header">
            <h1><?= esc($item->word); ?></h1>
        </div>

        <div class="glossary-body">
            <?= nl2br(esc($item->dictionary)); ?>
        </div>
    </div>
</div>