<?php
    use App\Base\Bootstrap;

    $fields = get_field('header', 'options');
    $fieldsg = get_field('general', 'options')
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <title><?php wp_title();?></title>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>
<body <?php body_class(); ?>>
<header>
<nav class="navbar">
    <div class="containers">
        <div class="navbar__wrap">
          <a href="#" class="navbar_logo" id="logo"><?php echo wp_get_attachment_image($fields['header_logo'],'full'); ?></a>
          <div class="display">
            <ul class="menu" id="menu">
                <?php Bootstrap::bootstrap_main_menu(); ?>
            </ul>
            <ul class="secondmenu">
                <li><a class="plenet" href="#">
                        <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M1.41211 3.44159C2.51711 3.92847 3.64006 4.26932 4.81477 4.50044C5.32323 2.8329 6.15313 1.34767 7.31908 0.00012207C4.81352 0.283817 2.8732 1.42778 1.41211 3.44159ZM11.1873 4.50129C10.9306 3.66106 10.5979 2.87297 10.1792 2.12118C9.76424 1.37564 9.27248 0.682675 8.72645 0.0226662C11.1907 0.281329 13.1285 1.42863 14.5921 3.44161C13.4883 3.92973 12.365 4.271 11.1873 4.50129ZM0.0399588 7.21107L0.0399638 7.21104L0.0399643 7.21103C0.0673256 7.0058 0.0946876 6.80056 0.126071 6.5957C0.235026 5.88772 0.602803 4.82011 0.908796 4.32239C2.07683 4.8418 3.29162 5.22646 4.56694 5.48262C4.22087 7.16435 4.21837 8.84065 4.56945 10.5307C3.30456 10.7848 2.08643 11.1599 0.895438 11.6939C0.864362 11.626 0.832962 11.5592 0.801793 11.4928L0.801767 11.4928C0.732875 11.3461 0.665112 11.2018 0.604473 11.0547C0.286373 10.28 0.0889176 9.47563 0.0271345 8.63956C0.0248876 8.60868 0.0175389 8.57838 0.0101735 8.548L0.010173 8.548C0.00659097 8.53322 0.00300499 8.51843 0 8.50355C0.000417453 8.17063 0.000417453 7.8377 0.000417453 7.50436C0.0138876 7.40663 0.0269232 7.30885 0.0399588 7.21107ZM8.73807 15.9658L8.73808 15.9658C8.75049 15.9408 8.76288 15.9159 8.7804 15.8955C9.86411 14.6243 10.6614 13.195 11.1582 11.5996C11.1634 11.5826 11.17 11.5661 11.179 11.5439L11.179 11.5438L11.1924 11.5099C12.3584 11.7327 13.483 12.0794 14.6043 12.5704C14.5204 12.6716 14.4399 12.7719 14.3606 12.8706L14.3606 12.8707C14.195 13.077 14.0349 13.2766 13.8604 13.4628C12.5216 14.8909 10.8806 15.734 8.93319 15.9735C8.91315 15.976 8.89385 15.983 8.87456 15.9899C8.86491 15.9934 8.85526 15.9969 8.84552 15.9998C8.80419 15.9994 8.76245 15.9994 8.7207 15.9994C8.72682 15.9884 8.73245 15.9771 8.73807 15.9658ZM6.88402 15.9531C6.97565 15.9683 7.06728 15.9835 7.15867 15.9999H7.28349C7.27592 15.9874 7.26889 15.9744 7.26185 15.9614L7.26183 15.9614C7.24712 15.9342 7.23242 15.9071 7.21294 15.8839C6.14468 14.6282 5.35569 13.2176 4.8585 11.6452C4.84991 11.6176 4.83942 11.5903 4.82825 11.5612C4.82205 11.5451 4.81565 11.5284 4.80924 11.5109C3.63954 11.7399 2.51659 12.0799 1.42578 12.5618C1.43483 12.5763 1.4425 12.589 1.44943 12.6005C1.46199 12.6214 1.47208 12.6381 1.48339 12.654C2.68691 14.3144 4.2845 15.3837 6.28661 15.8414C6.4839 15.8866 6.68393 15.9198 6.88402 15.9531ZM11.4376 5.48401C12.7071 5.22743 13.924 4.84653 15.0933 4.32336C16.2584 6.43564 16.3461 9.37272 15.0962 11.6848C13.9265 11.1633 12.7088 10.7858 11.4355 10.5296C11.605 9.68896 11.6969 8.84997 11.6965 8.00097C11.6969 7.15656 11.6071 6.32175 11.4376 5.48401ZM5.58068 5.63782C5.23002 6.47597 5.2321 9.53988 5.57984 10.373C7.19413 10.1544 8.81219 10.1557 10.4269 10.373C10.7759 9.42682 10.7721 6.40046 10.419 5.63907C8.80801 5.88855 7.19079 5.88814 5.58068 5.63782ZM8.00192 0.743286C8.99755 1.91019 9.72058 3.20017 10.1835 4.65744C8.72579 4.84727 7.28223 4.84602 5.82031 4.65703C6.27993 3.20226 7.00546 1.91019 8.00192 0.743286ZM8.00359 15.2653C8.9988 14.0946 9.72517 12.8059 10.1835 11.3511C8.7212 11.1634 7.27764 11.1617 5.82031 11.3541C6.28703 12.8155 7.01047 14.1084 8.00359 15.2653Z" fill="white"/>
                        </svg>
                        <?php echo do_shortcode('[gtranslate]')?>
                    </a>
                </li>
            </ul>
            <ul class="thirdmenu" id="secondmenu_sign">
                <?php Bootstrap::bootstrap_header_right_button(); ?>
                <?php echo wp_get_attachment_image($fieldsg['social_logo'],'full'); ?>
            </ul>
           
          </div>

            <div class="hamb">
                <div class="hamb__field" id="hamb">
                <span class="bar"></span> 
                <span class="bar"></span>
                <span class="bar"></span>
                </div>
          </div>
        </div>
    </div>
</nav>
<div class="popup" id="popup"></div>

</header>
<script>
$(document).ready(function() {
    $(window).scroll(function() {
        if ($(this).scrollTop() > 0) {
            $('.navbar').addClass('scrolled');
        } else {
            $('.navbar').removeClass('scrolled');
        }
        if ($(this).scrollTop() > 0) {
            $('.thirdmenu').addClass('scrolled_butt');
        } else {
            $('.thirdmenu').removeClass('scrolled_butt');
        }
        if ($(this).scrollTop() > 0) {
            $('.plenet').addClass('scrolled_eng');
        } else {
            $('.plenet').removeClass('scrolled_eng');
        }
        if ($(this).scrollTop() > 0) {
            $('.plenet').addClass('scrolled_eng');
        } else {
            $('.plenet').removeClass('scrolled_eng');
        }
    });
});


$(window).on('scroll', function() {
    var scrollPosition = $(window).scrollTop();
    if (scrollPosition > 0) {
        $('.plenet svg path, .lang + svg path').css('fill', '#888');
    } else {
        $('.plenet svg path, .lang + svg path').css('fill', 'white');
    }
});




const hamb = document.querySelector("#hamb");
const popup = document.querySelector("#popup");
const body = document.body;

const menu = document.querySelector("#menu").cloneNode(1);

hamb.addEventListener("click", hambHandler);

function hambHandler(e) {
  e.preventDefault();
  popup.classList.toggle("open");
  hamb.classList.toggle("active");
  body.classList.toggle("noscroll");
  renderPopup();
}

function renderPopup() {
  popup.appendChild(menu);
}

const links = Array.from(menu.children);

links.forEach((link) => {
  link.addEventListener("click", closeOnClick);
});

function closeOnClick() {
  popup.classList.remove("open");
  hamb.classList.remove("active");
  body.classList.remove("noscroll");
}



window.addEventListener('scroll', function() {
  var navbar = document.querySelector('select');
  if (window.scrollY > 0) {
    navbar.classList.add('scrolledm');
  } else {
    navbar.classList.remove('scrolledm');
  }
});


window.addEventListener('scroll', function() {
  var menu = document.querySelector('.menu');
  if (window.scrollY > 0) {
    menu.classList.add('scrolled');
  } else {
    menu.classList.remove('scrolled');
  }
});

window.addEventListener("scroll", function() {
  var bars = document.querySelectorAll(".bar");
  if (window.innerWidth >= 1025) {
    if (window.scrollY > 0) {
      bars.forEach(function(bar) {
        bar.classList.add("scroll-black");
      });
    } else {
      bars.forEach(function(bar) {
        bar.classList.remove("scroll-black");
      });
    }
  }
});



</script>

