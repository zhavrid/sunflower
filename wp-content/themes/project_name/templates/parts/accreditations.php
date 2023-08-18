<?php 
$title = get_field('title');
$title_one = get_field('title_one');
$title_two_transparent = get_field('title_two_transparent');
$title_three = get_field('title_three');
$text_content = get_field('text_content');
$sub_text = get_field('sub_text');
$sub_icon = get_field('sub_icon');

$file = get_field('file');
$filename = $file['filename'];
$fileurl = $file['url'];
?>


<section class="accreditations" id="accreditations">
    <div class="accreditations_title">
    <?php if($title):  ?>
        <p class="accreditations_title_content"><?php echo $title?></p>
        <?php endif ?>
        <div class="accreditations_independently">
            <div class="accreditations_independently_title">
            <?php if($title_one):  ?>
                <h1><?php echo $title_one?></h1>
                <?php endif ?>
                <?php if($title_two_transparent):  ?>
                <h1 class="transparent_title"><?php echo $title_two_transparent?></h1>
                <?php endif ?>
            </div>
            <div class="two_title">
                <?php if($title_three):  ?>
                    <h1><?php echo $title_three?></h1>
                <?php endif ?>
            </div>
        </div>
    </div>
    <div class="accreditations_text">
    <?php if($text_content):  ?>
        <p><?php echo $text_content?></p>
    <?php endif ?>
    <?php if($sub_text):  ?>
        <?php if( $file ): ?>
   <button class="accreditations_sign"><a href="<?php echo $fileurl;?>"download><?php echo $sub_text?></a>
<?php endif; ?>
    <?php endif ?>
    <?php if($sub_icon):  ?>
        <?php echo $sub_icon?>
    <?php endif ?>
        </button>
    </div>
</section>