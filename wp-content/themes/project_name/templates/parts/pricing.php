<?php 
$title_section = get_field('title_section');
$title_bold = get_field('title_bold');
$title_transparent = get_field('title_transparent');
$image = get_field('image');
$title_container = get_field('title_container');
$description_container = get_field('description_container');

$list = get_field('list');

$sign_text = get_field('sign_text');
$sign_icon = get_field('sign_icon');
?>

<section class="pricing" id="pricing">
    <div class="pricing_title">
    <?php if($title_section):  ?>
        <p class="pricing_title_content"><?php echo $title_section?></p>
        <?php endif ?>
        <div class="pricing_title_text">
            <?php if($title_bold):  ?>
                <h1><?php echo $title_bold?></h1>
            <?php endif ?>
            <?php if($title_transparent):  ?>
                <h1 class="pricing_title_text_transparent"><?php echo $title_transparent?></h1>
            <?php endif ?>
        </div>
    </div>
    <div class="pricing_content">
        <?php if($image):  ?>
            <img src="<?php echo $image?>"> 
        <?php endif ?>
        <div class="pricing_content_right">
        <?php if($title_container):  ?>
            <h2><?php echo $title_container?></h2>
            <?php endif ?>
            <?php if($description_container):  ?>
            <p><?php echo $description_container?></p>
            <?php endif ?>
            <div class="pricing_content_right_display">
                <div class="list_title">
                <?php if('list'):
                    foreach(get_field('list') as $rows ) :?>
                    <div class="pricing_content_right_display_line"><?php
                        $icon = $rows['icon'];
                        $text = $rows['text'];?>
                        <?php if($icon):  ?>
                            <img src="<?php echo $icon?>">
                        <?php endif ?>
                        <?php if($text):  ?>
                            <p><?php echo $text?></p>
                        <?php endif ?>
                    </div><?php
                    endforeach;
                endif;?>
                </div>
                <div class="butt_home">
                    <button class="pricing_sign">Sign Up <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0 1.59415V12.4065C0.078041 12.7254 0.177783 13.0348 0.38937 13.2957C0.744102 13.7315 1.2015 13.9895 1.76239 13.9941C2.95334 14.0038 4.1443 14.0022 5.33525 14.0007C5.77898 14.0001 6.22272 13.9995 6.66645 13.9995C6.68292 13.9995 6.6994 13.9974 6.71813 13.995C6.72835 13.9937 6.73924 13.9923 6.75117 13.9912C6.76432 13.9204 6.77759 13.8498 6.79084 13.7792C6.82764 13.5833 6.86432 13.3881 6.89807 13.1926C6.96902 12.7834 7.16182 12.442 7.45437 12.1506C7.93369 11.6727 8.41259 11.1944 8.89147 10.7162C9.66511 9.94362 10.4387 9.17105 11.2141 8.40007C11.303 8.31198 11.3368 8.22432 11.3364 8.10033C11.3346 6.98449 11.3345 5.86866 11.3344 4.75282C11.3343 3.79637 11.3342 2.83991 11.333 1.88345C11.3318 0.905754 10.6879 0.16058 9.72674 0.0157204C9.6295 0.000691677 9.52934 0.000691677 9.43085 0.000691677C6.92186 -0.000143251 4.41244 -0.000143251 1.90303 0.000274213C0.931901 0.000691677 0.217012 0.586811 0.0250399 1.53863C0.0222346 1.55154 0.0156579 1.56388 0.00911245 1.57616C0.00592053 1.58215 0.00273604 1.58813 0 1.59415ZM5.34852 5.3363H5.6611C5.99262 5.3363 6.32413 5.33635 6.65563 5.33639C7.31859 5.33648 7.98148 5.33658 8.64418 5.3363C8.92588 5.3363 9.13705 5.45862 9.26142 5.71035C9.37994 5.95039 9.35281 6.18667 9.19298 6.40125C9.06778 6.56949 8.89583 6.65966 8.68425 6.66217C8.46752 6.66479 8.2508 6.66458 8.03407 6.66437C7.97494 6.66431 7.91581 6.66425 7.85668 6.66425C6.14395 6.66467 4.43081 6.66509 2.71808 6.66383C2.31243 6.66342 2.01821 6.4025 2.00069 6.03597C1.98191 5.64522 2.27988 5.33922 2.69346 5.33755C3.33242 5.33514 3.97159 5.33556 4.61083 5.33598C4.85672 5.33614 5.10262 5.3363 5.34852 5.3363ZM4.01482 8.0001C4.12205 8.00012 4.22928 8.00014 4.33649 8.00014C4.47047 8.00014 4.60445 8.00008 4.73844 8.00003C5.14031 7.99988 5.54218 7.99972 5.94405 8.00097C6.36263 8.00181 6.6581 8.27399 6.66144 8.65973C6.6652 9.04755 6.37432 9.33393 5.95949 9.33519C4.87193 9.33853 3.78436 9.33853 2.6968 9.33477C2.31869 9.33352 2.03366 9.07719 2.00194 8.72903C1.97147 8.39381 2.19224 8.0924 2.52736 8.01725C2.59246 8.00264 2.66132 8.00097 2.72851 8.00097C3.15716 7.99997 3.58607 8.00004 4.01482 8.0001ZM4.37851 4.00064C4.24902 4.00053 4.11954 4.00041 3.9901 4.00041C3.88473 4.00041 3.77938 4.00044 3.67405 4.00047C3.35803 4.00054 3.04214 4.00062 2.72601 4C2.30117 3.99916 1.99902 3.7203 1.99985 3.33205C2.00069 2.95049 2.2995 2.66662 2.71349 2.66536C3.57194 2.66244 4.42997 2.66202 5.28801 2.66536C5.70116 2.66703 5.99956 2.953 5.99872 3.33498C5.99789 3.71779 5.69782 3.99874 5.28508 4C4.983 4.00117 4.68072 4.0009 4.37851 4.00064ZM7.88712 15.2428C7.81158 15.6574 7.86583 15.7897 8.21764 15.9997C8.30111 15.9997 8.38458 15.9997 8.46721 15.9993C8.47301 15.9967 8.47876 15.9937 8.48453 15.9907C8.49745 15.9841 8.51041 15.9774 8.52397 15.9751C8.67026 15.9493 8.8165 15.9231 8.96275 15.8969C9.36929 15.824 9.77591 15.751 10.1841 15.6887C10.4583 15.6469 10.6749 15.5405 10.8735 15.3397C11.9014 14.3012 12.9351 13.2686 13.9688 12.2359C14.3201 11.8849 14.6715 11.5338 15.0226 11.1826C15.0855 11.1198 15.1487 11.0573 15.2119 10.9948C15.3672 10.8414 15.5226 10.6878 15.672 10.5288C16.1044 10.0692 16.1119 9.39124 15.682 8.9312C15.3978 8.62687 15.1015 8.33339 14.799 8.04743C14.4839 7.74936 14.0853 7.69342 13.7039 7.90257C13.529 7.99817 13.3671 8.13009 13.2252 8.27161C12.3629 9.13012 11.5022 9.99045 10.6415 10.8508C9.90384 11.5881 9.16619 12.3254 8.42756 13.0616C8.29109 13.1977 8.21764 13.3501 8.18634 13.5371C8.09161 14.1065 7.99062 14.6751 7.88712 15.2428Z" fill="#221817"/>
                    </svg></button>
                </div>
            </div>
        </div>
    </div>
</section>

