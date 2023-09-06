<?php 
$title = get_field('title');
$title_two = get_field('title_two');
$description = get_field('description');
$button_text = get_field('button_text');
$button_link = get_field('button_link');
$button_svg = get_field('button_svg');
$three_blocks = get_field('three_blocks');
?>

<section class="hero">
    <div class="hero_wrap">
        <div class="container">
            <div class="hero_left">
                <?php if($title):  ?>
                    <h1 class="hero_left_title_left"><?php echo $title?></h1>
                <?php endif ?>
                <?php if($title_two):  ?>
                    <h1 class="hero_left_title_right"><?php echo $title_two?></h1>
                <?php endif ?>
                <?php if($description):  ?>
                    <p class="hero_left_text"><?php echo $description?></p>
                <?php endif ?>
                <?php if($button_text):  ?>
                    <button class="hero_left_sign_up"><?php echo $button_text?>
                <?php endif ?>
                <?php if($button_svg):  ?>
                    <?php echo $button_svg?>
                <?php endif ?>
                <?php if($button_link):  ?>
                    <?php echo $button_link?>
                <?php endif ?>
                </button>
            </div>
            <div class="hero_right">
                <div class="hero_right_bg">
                    <div class="hero_right_three">
                    <?php if('three_blocks'):
                        foreach(get_field('three_blocks') as $rows ) :?>
                         <div class="hero_right_three_block"><?php
                            $icon = $rows['icon'];
                            $title = $rows['title'];?>
                            <?php if($icon):  ?>
                                <img src="<?php echo $icon?>">
                            <?php endif ?>
                            <?php if($title):  ?>
                                <p><?php echo $title?></p>
                            <?php endif ?>
                        </div><?php
                        endforeach;
                    endif;?>   
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
