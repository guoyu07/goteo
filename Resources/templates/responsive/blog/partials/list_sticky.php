<!-- sticky menu -->

<div class="sticky-menu sticky-list" data-offset-top="600" data-spy="affix">
      	<ul class="filters list-inline center-block text-center">
            <?php foreach ($this->blog_sections as $key => $section) : ?>
                <?php $icon= $key=='matchfunding' ? 'icon-call' : 'icon-'.$key ?>
                <a href="<?= '/blog/section/' . $key ?>" >
                    <li class="<?php if ($section == $key||$key=='mission') echo 'active' ?>">
                        <span class="block icon icon-3x <?= $icon ?>"></span>
                        <br>
                        <span><?= $this->text($section) ?></span>
                    </li>
                </a>
            <?php endforeach; ?>
        </ul>
</div>