<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Weekly Digest</title>
</head>

<body style="margin:0;padding:0;background:#f4f6f9;font-family:Arial,Helvetica,sans-serif;">

<table width="100%" cellspacing="0" cellpadding="0" bgcolor="#f4f6f9">
<tr>
<td align="center">

<table width="700" cellspacing="0" cellpadding="0" bgcolor="#ffffff" style="margin:30px 0;border-radius:10px;overflow:hidden;">

    <!-- Header -->
    <tr>
        <td align="center" bgcolor="#1E88E5" style="padding:35px;">

            <img src="<?= base_url('assets/images/logo.png'); ?>"
                 width="120"
                 alt="Logo">

            <h1 style="color:#ffffff;margin:20px 0 5px;">
                Weekly Digest
            </h1>

            <p style="color:#dceeff;font-size:16px;margin:0;">
                Fresh articles selected for you
            </p>

        </td>
    </tr>

    <!-- Greeting -->

    <tr>

        <td style="padding:35px;">

            <h2 style="margin-top:0;">
                Hello <?= esc($user->username); ?> 👋
            </h2>

            <p style="font-size:15px;color:#666;line-height:26px;">

                Here are the newest articles published this week.
                Stay updated with the latest content from our website.

            </p>

        </td>

    </tr>

    <?php if(!empty($posts)): ?>

        <?php foreach($posts as $post): ?>

        <tr>

        <td style="padding:0 35px 30px;">

            <table width="100%" cellpadding="0" cellspacing="0" style="border:1px solid #eeeeee;border-radius:8px;">

                <tr>

                    <td width="220">

                        <?php if(!empty($post->image_default)): ?>

                        <img
                            src="<?= base_url($post->image_default); ?>"
                            width="220"
                            style="display:block;width:220px;height:150px;object-fit:cover;">

                        <?php else: ?>

                        <img
                            src="https://via.placeholder.com/220x150"
                            width="220">

                        <?php endif; ?>

                    </td>

                    <td style="padding:20px;vertical-align:top;">

                        <span style="display:inline-block;background:#1E88E5;color:white;padding:4px 10px;border-radius:15px;font-size:12px;">

                            <?= esc($post->category_name ?? "Article"); ?>

                        </span>

                        <h3 style="margin:15px 0 10px;color:#222;">

                            <?= esc($post->title); ?>

                        </h3>

                        <p style="font-size:14px;color:#666;line-height:24px;">

                            <?= character_limiter(strip_tags($post->summary),150); ?>

                        </p>

                        <table cellpadding="0" cellspacing="0">

                        <tr>

                        <td>

                        <a href="<?= base_url('post/'.$post->title_slug); ?>"
                           style="background:#1E88E5;
                                  color:#fff;
                                  text-decoration:none;
                                  padding:10px 20px;
                                  border-radius:5px;
                                  display:inline-block;">

                            Read Article →

                        </a>

                        </td>

                        </tr>

                        </table>

                    </td>

                </tr>

            </table>

        </td>

        </tr>

        <?php endforeach; ?>

    <?php else: ?>

    <tr>

        <td align="center" style="padding:60px;">

            <h3>No new articles this week.</h3>

        </td>

    </tr>

    <?php endif; ?>



    <!-- Footer -->

    <tr>

        <td bgcolor="#fafafa" style="padding:35px;text-align:center;">

            <h3 style="margin:0 0 15px;">
                Keep Reading 🚀
            </h3>

            <p style="color:#777;font-size:14px;line-height:24px;">

                Thank you for being part of our community.

            </p>

            <a href="<?= base_url(); ?>"
               style="display:inline-block;
                      background:#28a745;
                      color:#fff;
                      padding:12px 25px;
                      border-radius:5px;
                      text-decoration:none;
                      margin-top:15px;">

                Visit Website

            </a>

            <hr style="margin:30px 0;border:none;border-top:1px solid #ddd;">

            <p style="font-size:12px;color:#999;">

                You received this email because you subscribed to our newsletter.

            </p>

            <p>

                <a href="<?= base_url('unsubscribe/'.$user->id); ?>"
                   style="color:#d9534f;text-decoration:none;">

                    Unsubscribe

                </a>

            </p>

        </td>

    </tr>

</table>

</td>
</tr>
</table>

</body>
</html>