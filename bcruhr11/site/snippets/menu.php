        <?php $templateignore = array('blogartikel'); // pages with template IN $templateignore are ignored?>

<nav class="navbar navbar-fixed-top" role="navigation">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    </div>

    <div class="collapse navbar-collapse center">
        <ul class="nav navbar-nav">
            <?php foreach($pages->visible() as $p): ?>
                <?php if(in_array($p->template(), $templateignore)) continue ?>
                <?($p->ext_url() != '') ? $href = $p->ext_url()->html()
                                        : $href = $p->url();
                ?>

                <li class="dropdown">
                    <a class="dropdown-toggle" <?php e($p->isOpen(), ' class="active"') ?> href="<?php echo $href ?>"><?php echo $p->title()->html() ?></a>

                    <?php if($p->hasVisibleChildren()): ?>
                    <ul class="dropdown-menu">
                        <?php foreach($p->children()->visible() as $p): ?>
                            <?php if(in_array($p->template(), $templateignore)) continue ?>
                            <?($p->ext_url() != '') ? $href = $p->ext_url()->html()
                                                    : $href = $p->url();
                            ?>
                            <li>
                            <a href="<?php echo $href ?>"><?php echo $p->title()->html() ?></a>
                            </li>
                        <?php endforeach ?>
                    </ul>
                    <?php endif ?>
                </li>
            <?php endforeach ?>
        </ul>
    </div>
</nav>
