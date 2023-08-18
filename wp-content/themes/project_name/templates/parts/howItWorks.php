<?php 
    $title_section = get_field('title_section');
    $main_title = get_field('main_title');
    $main_title_two = get_field('main_title_two');


    $blocks = get_field('blocks');

    $sign_img = get_field('sign_img'); 
    $sign_how = get_field('sign_how');
    $list_img = get_field('list_img');
?>

<section id="how_it_works">
    <div class="how_it_works">
        <div class="how_it_works_title">
        <?php if($title_section):  ?>
            <p class="how_it_works_title_section"><?php echo $title_section?></p>
        <?php endif ?>
        <div class="display_title">
            <?php if($main_title):  ?>
                <h1 class="how_it_works_title_section_left"><?php echo $main_title?></h1>
            <?php endif ?>
            <?php if($main_title_two):  ?>
                <h1 class="transparent_title"><?php echo $main_title_two?></h1>
            <?php endif ?>
        </div>
    </div>
    <div class="how_it_works_list">
        <div class="how_it_works_list_blocks">
        <?php if ('blocks'):
            $blocks = get_field('blocks');
            $blocks_count = count($blocks);

            foreach ($blocks as $index => $row):
                $icon = $row['icon'];
                $title_block = $row['title_block'];
                $description_block = $row['description_block'];?>
                <div class="how_it_works_list_block">
                    <div class="img_and_line">
                        <?php if ($icon): ?>
                            <img class="how_it_works_list_block_img" src="<?php echo $icon; ?>" alt="">
                        <?php endif ?>
                    </div>
                    <div class="how_it_works_list_description">
                        <?php if ($title_block): ?>
                            <h2><?php echo $title_block; ?></h2>
                        <?php endif ?>
                        <?php if ($description_block): ?>
                            <p><?php echo $description_block; ?></p>
                        <?php endif ?>
                    </div>
                </div>
                <?php if ($index < $blocks_count - 1): ?>
                    <div class="how_it_works_list_block_img_line"></div>
                <?php endif ?>
        <?php
            endforeach;
        endif;
        ?>
            <div class="how_it_works_list_block">
            <?php if($sign_how):  ?>
            <button class="how_it_works_list_block_sign"><?php echo $sign_how?>
                <?php endif ?>
                <?php if($sign_img):  ?>
                    <?php echo $sign_img?>
                <?php endif ?>
                </button>
            </div>
        </div>
        <?php if($list_img):  ?>
            <img class="how_it_works_list_img" src="<?php echo $list_img?>">
        <?php endif ?>
    </div>
</section>