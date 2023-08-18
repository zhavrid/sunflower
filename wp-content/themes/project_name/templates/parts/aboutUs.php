<?php 
$title_section = get_field('title_section');
$title_main = get_field('title_main');
$title_transparent = get_field('title_transparent');
$about_blocks = get_field('about_blocks');

$title_second = get_field('title_second');
$team_blocks = get_field('team_blocks');
?>

<section class="about_us" >
    <div class="about_us_title">
        <?php if($title_section):  ?>
            <p class="about_us_title_section"><?php echo $title_section?></p>
        <?php endif ?>
        <div class="about_us_title_flex">
            <?php if($title_main):  ?>
                <h1><?php echo $title_main?></h1>
            <?php endif ?>
            <?php if($title_transparent):  ?>
                <h1 class="transparent_title"><?php echo $title_transparent?></h1>
            <?php endif ?>
        </div>
    </div>
    <div class="about_us_content">
        <?php if('about_blocks'):
        foreach(get_field('about_blocks') as $rows ) :?>
        <div class="about_us_block"><?php 
            $about_image = $rows['about_image'];
            $about_icon = $rows['about_icon'];
            $about_title = $rows['about_title'];
            $about_descriptiion = $rows['about_descriptiion'];?>
            <div class="about_img">
                <?php if($about_image):  ?>
                    <img class="about_image" src="<?php echo $about_image?>">
                <?php endif ?>
            </div>
            <div class="about_svg">
                <?php if($about_icon):  ?>
                    <img src="<?php echo $about_icon?>">
                <?php endif ?>
            </div>
            <div class="about_us_block_title">
                <?php if($about_title):  ?>
                    <h2><?php echo $about_title?></h2>
                <?php endif ?>
                <?php if($about_descriptiion):  ?>
                    <p><?php echo $about_descriptiion?></p>    
                <?php endif ?>
            </div>
        </div><?php
            endforeach;
        endif;?>
    </div>
</section>
<section class="meet">
    <?php if($title_second):  ?>
        <p class="meet_title"><?php echo $title_second?></p>
        <?php endif ?>
        <?php if('team_blocks'):
        $team_blocks = get_field('team_blocks');
        foreach ($team_blocks as $index => $row) : ?>
            <div class="meet_john" data-index="<?php echo $index; ?>">
                <?php
                $team_image = $row['team_image'];
                $title_team = $row['title_team'];
                $title_italic = $row['title_italic'];
                $description_team = $row['description_team'];
                ?>
                <?php if ($team_image) : ?>
                    <img src="<?php echo $team_image ?>">
                <?php endif ?>
                <div class="meet_john_content">
                    <?php if ($title_team) : ?>
                        <h2><?php echo $title_team ?></h2>
                    <?php endif ?>
                    <?php if ($title_italic) : ?>
                        <p class="meet_italic"><?php echo $title_italic ?></p>
                    <?php endif ?>
                    <?php if ($description_team) : ?>
                        <p class="meet_desc"><?php echo $description_team ?></p>
                    <?php endif ?>
                </div>
            </div>
        <?php endforeach;
    endif; ?>

</section>