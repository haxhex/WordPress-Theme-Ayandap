<?php
/*
Template Name: Masiryar
*/
// get_header();
?>

<head>
<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico" type="image/x-icon">
<link href="https://cdn.jsdelivr.net/gh/rastikerdar/vazirmatn@v33.003/Vazirmatn-font-face.css" rel="stylesheet" type="text/css" />    
    <title>مسیریار</title>
</head>

<div id="content">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="audio-header">
        <nav class="audio-nav">
            <a href="<?php echo esc_url(home_url('/')); ?>">خانه</a>
            <a href="<?php echo esc_url(home_url('/')); ?>#products">محصولات</a>
            <a href="<?php echo esc_url(home_url('/')); ?>#services">سرویس‌ها</a>
            <a href="<?php echo esc_url(get_permalink(get_page_by_path('about-us'))); ?>">درباره ما</a>
            <a href="<?php echo esc_url(get_permalink(get_page_by_path('contact-us'))); ?>">تماس
                با ما</a>
                <a href="<?php echo esc_url(home_url('/')); ?>#blog">بلاگ</a>
            <div class="auth game-auth">
                <a href="<?php echo esc_url(get_permalink(get_page_by_path('login'))); ?>">ورود</a>
                <button class="register-btn" style="color:white;"
                    href="<?php echo esc_url(get_permalink(get_page_by_path('register'))); ?>">ثبت نام</button>
            </div>
        </nav>
    <div>
        <nav class="ham-navbar" style="top: 0;">
        <label class="menu-icon" for="menu-btn" style="top: 29px;">&#9776;</label>
        <ul class="menu">
            <li class="menu-item"><a href="<?php echo esc_url(home_url('/')); ?>">خانه</a></li>
            <li class="menu-item"><a href="<?php echo esc_url(home_url('/')); ?>#products">محصولات</a></li>
            <li class="menu-item"><a href="<?php echo esc_url(home_url('/')); ?>#services">سرویس‌ها</a></li>
            <li class="menu-item"><a href="<?php echo esc_url(get_permalink(get_page_by_path('about-us'))); ?>">درباره ما</a></li>
            <li class="menu-item"><a class="white-nav" href="<?php echo esc_url(get_permalink(get_page_by_path('contact-us'))); ?>">تماس با ما</a></li>
            <li class="menu-item"><a class="white-nav" href="#blog">بلاگ</a></li>
        </ul>
    </nav>
    <div class="small-auth about-auth" style="direction: rtl;">
          <div class="auth"><a class="white-nav" href="<?php echo esc_url(get_permalink(get_page_by_path('login'))); ?>">ورود</a></div>
          <div class="auth"><button class="register-btn" style="color:white;" href="<?php echo esc_url(get_permalink(get_page_by_path('register'))); ?>">ثبت نام</button></div>
    </div>
    </div>
    </div>
    <div class="audio-app-intro">
        <div class="audio-intro-bg">
<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="1081.791" height="1080" viewBox="0 0 1081.791 1080">
                <defs>
                    <linearGradient id="linear-gradient" x1="0.5" x2="0.5" y2="1" gradientUnits="objectBoundingBox">
                        <stop offset="0" stop-color="#a5a2f6"></stop>
                        <stop offset="1" stop-color="#7f49c3"></stop>
                    </linearGradient>
                    <linearGradient id="linear-gradient-2" y1="0.5" x2="1" y2="0.5" gradientUnits="objectBoundingBox">
                        <stop offset="0" stop-color="#3c27d3"></stop>
                        <stop offset="0.584" stop-color="#412bd6"></stop>
                        <stop offset="1" stop-color="#4a32dc"></stop>
                    </linearGradient>
                    <linearGradient id="linear-gradient-4" x1="0" y1="0.5" x2="1" y2="0.5" xlink:href="#linear-gradient-2"></linearGradient>
                    <linearGradient id="linear-gradient-13" x1="0.192" y1="0.488" x2="0.802" y2="0.509" gradientUnits="objectBoundingBox">
                        <stop offset="0" stop-color="#5d5bf2"></stop>
                        <stop offset="1" stop-color="#3c27d3"></stop>
                    </linearGradient>
                    <linearGradient id="linear-gradient-14" x1="0.629" y1="0.272" x2="0.186" y2="1.334" gradientUnits="objectBoundingBox">
                        <stop offset="0" stop-color="#2d3492"></stop>
                        <stop offset="0.034" stop-color="#313796"></stop>
                        <stop offset="0.295" stop-color="#4c52b6"></stop>
                        <stop offset="0.548" stop-color="#6064cc"></stop>
                        <stop offset="0.788" stop-color="#6b70da"></stop>
                        <stop offset="1" stop-color="#7074df"></stop>
                    </linearGradient>
                    <linearGradient id="linear-gradient-15" x1="0.796" y1="0.164" x2="2.06" y2="-1.26" gradientUnits="objectBoundingBox">
                        <stop offset="0" stop-color="#3c27d3"></stop>
                        <stop offset="0.255" stop-color="#3f2cd6"></stop>
                        <stop offset="0.596" stop-color="#4a3de0"></stop>
                        <stop offset="0.984" stop-color="#5c59f1"></stop>
                        <stop offset="1" stop-color="#5d5bf2"></stop>
                    </linearGradient>
                    <linearGradient id="linear-gradient-16" x1="4.949" y1="-2.235" x2="16.693" y2="-9.44" xlink:href="#linear-gradient-15"></linearGradient>
                    <linearGradient id="linear-gradient-17" x1="11.076" y1="-6.002" x2="37.193" y2="-22.07" xlink:href="#linear-gradient-15"></linearGradient>
                    <linearGradient id="linear-gradient-18" x1="10.342" y1="-3.907" x2="161.061" y2="-71.399" xlink:href="#linear-gradient-15"></linearGradient>
                    <linearGradient id="linear-gradient-19" x1="52.52" y1="-23.562" x2="302.81" y2="-139.336" xlink:href="#linear-gradient-15"></linearGradient>
                    <linearGradient id="linear-gradient-20" x1="73.144" y1="-32.989" x2="323.399" y2="-148.36" xlink:href="#linear-gradient-15"></linearGradient>
                    <linearGradient id="linear-gradient-21" x1="48.3" y1="-38.093" x2="237.748" y2="-191.049" xlink:href="#linear-gradient-15"></linearGradient>
                    <linearGradient id="linear-gradient-22" x1="23.463" y1="-17.973" x2="213.556" y2="-170.906" xlink:href="#linear-gradient-15"></linearGradient>
                    <linearGradient id="linear-gradient-23" x1="22.676" y1="-17.403" x2="212.124" y2="-170.358" xlink:href="#linear-gradient-15"></linearGradient>
                    <linearGradient id="linear-gradient-24" x1="30.707" y1="-13.522" x2="280.963" y2="-129.69" xlink:href="#linear-gradient-15"></linearGradient>
                    <linearGradient id="linear-gradient-25" x1="0.159" y1="0.741" x2="0.802" y2="0.304" xlink:href="#linear-gradient-15"></linearGradient>
                </defs>
                <g id="Group_865" data-name="Group 865" transform="translate(-908.915 0)">
                    <path id="Path_2116" data-name="Path 2116" d="M1233.584,115.5h-420c-48.765,40.589-98.671,100.436-138.8,188.73C553.881,570.2,591.5,621.246,432.986,758.261,298.646,874.385,172.053,1031.038,188.9,1195.5H1233.584a35.6,35.6,0,0,0,35.6-35.6V151.1A35.6,35.6,0,0,0,1233.584,115.5Z" transform="translate(721.526 -115.5)" fill="url(#linear-gradient)"></path>
                    <circle id="Ellipse_115" data-name="Ellipse 115" cx="355.482" cy="355.482" r="355.482" transform="translate(990 184.036)" fill="#fff" opacity="0.22"><video width="100%" style="border-radius: 2rem;" controls>
                        
                    <circle id="Ellipse_117" data-name="Ellipse 117" cx="405.982" cy="405.982" r="405.982" transform="translate(990 66.036)" fill="#fff" opacity="0.22"></circle>
                    <g id="Group_594" data-name="Group 594" transform="translate(1334.824, -235.79)">
                        <path id="Path_2291" data-name="Path 2291" d="M338.042,351.767h-5.995v1.9a3.6,3.6,0,0,1-.931,2.394,3.66,3.66,0,0,1-2.92.994l-8.519.01v6.011c1.908-.012,6.751-.024,8.659-.037a10.265,10.265,0,0,0,2.769-.349,9.437,9.437,0,0,0,5.276-3.43,8.622,8.622,0,0,0,1.656-4.453c.056-.854,0-1.73,0-2.586Z" transform="translate(-85.793 -2.775)" fill="url(#linear-gradient-2)"></path>
                        <rect id="Rectangle_288" data-name="Rectangle 288" width="5.899" height="22.815" transform="translate(237.742 363.07)" fill="url(#linear-gradient-2)"></rect>
                        <rect id="Rectangle_289" data-name="Rectangle 289" width="5.899" height="22.815" transform="translate(180.694 363.07)" fill="url(#linear-gradient-4)"></rect>
                        <g id="Group_589" data-name="Group 589" transform="translate(136.018 363.105)">
                            <path id="Path_2292" data-name="Path 2292" d="M174.783,382.847v-.064h-6.057v.155h0V394.9c-.45.026-.7.053-.951.053q-6.65-.026-13.3-.058l-4.665-.02-.526,0v0l-3.328,0a3.6,3.6,0,0,1-2.92-1.028,3.793,3.793,0,0,1-.931-2.474c-.044-1.245-.046-2.471,0-3.715a3.6,3.6,0,0,1,.931-2.394,3.661,3.661,0,0,1,2.92-.994l5.079-.006v-6c-1.959.007-4.1.015-5.219.022a10.28,10.28,0,0,0-2.769.349,9.443,9.443,0,0,0-5.277,3.43,8.625,8.625,0,0,0-1.656,4.453,47.732,47.732,0,0,0,0,6.036,9.1,9.1,0,0,0,1.656,4.6,9.4,9.4,0,0,0,5.277,3.545,9.931,9.931,0,0,0,2.769.36c.631,0,1.586.009,2.648.013,0,.006,0,.011,0,.016l2.619-.006c1.352.005,3.39-.009,3.39-.009l20.312-.05V382.847Z" transform="translate(-136.018 -378.253)" fill="url(#linear-gradient-4)"></path>
                        </g>
                        <rect id="Rectangle_290" data-name="Rectangle 290" width="6.055" height="6.055" transform="translate(151.391 388.433)" fill="url(#linear-gradient-4)"></rect>
                        <rect id="Rectangle_291" data-name="Rectangle 291" width="6.055" height="6.055" transform="translate(160.171 388.433)" fill="url(#linear-gradient-4)"></rect>
                        <rect id="Rectangle_292" data-name="Rectangle 292" width="6.055" height="6.055" transform="translate(168.77 388.433)" fill="url(#linear-gradient-4)"></rect>
                        <rect id="Rectangle_293" data-name="Rectangle 293" width="6.055" height="6.055" transform="translate(217.94 388.433)" fill="url(#linear-gradient-4)"></rect>
                        <rect id="Rectangle_294" data-name="Rectangle 294" width="6.055" height="6.055" transform="translate(212.49 354.947)" fill="url(#linear-gradient-4)"></rect>
                        <rect id="Rectangle_295" data-name="Rectangle 295" width="6.055" height="6.055" transform="translate(226.72 388.433)" fill="url(#linear-gradient-4)"></rect>
                        <path id="Path_2293" data-name="Path 2293" d="M280.507,383.243l-6.126.08q.041,4.076.082,8.151a4.21,4.21,0,0,1-.791,2.527,3.965,3.965,0,0,1-1.906,1.339,13.632,13.632,0,0,1-4.435.431h-.038s-.695,0-.695-.011c-.043.007-.09.006-.133.011H266.2a9.466,9.466,0,0,0,.773-3.762c0-1.449.012-2.9.014-4.348s0-2.874,0-4.419l-6.126.08q.041,4.076.082,8.151a4.108,4.108,0,0,1-1.014,2.791,3.629,3.629,0,0,1-1.648,1.063,5.507,5.507,0,0,1-1.08.257c-.47.065-.944.1-1.417.131-.457.031-.915.076-1.373.066-.3-.006-.539-.012-.539-.011V390.95q0-.536-.007-1.071a10.266,10.266,0,0,0-.348-2.769,9.441,9.441,0,0,0-3.43-5.276,8.622,8.622,0,0,0-4.453-1.656c-.854-.056-1.73,0-2.585,0H238.9v5.995h.039v.024c1.021.031,2.042,0,3.063-.024h2.493a3.6,3.6,0,0,1,2.394.931,3.664,3.664,0,0,1,.994,2.92l.011,5.738-8.869.036v6.06l15.683.082c.419-.011,1.018-.042,1.732-.131.411-.051.893-.111,1.422-.2.419-.058.833-.128,1.229-.217A9.913,9.913,0,0,0,266,396.208l.03-.051v5.763s4.106,0,4.106,0a10.864,10.864,0,0,0,2.508-.247,9.818,9.818,0,0,0,7.851-9.659c0-1.449.011-2.9.014-4.348S280.507,384.788,280.507,383.243Z" transform="translate(-48.058 -16.035)" fill="url(#linear-gradient-4)"></path>
                        <g id="Group_593" data-name="Group 593" transform="translate(247.714 345.826)">
                            <g id="Group_590" data-name="Group 590" transform="translate(33.365 32.473)">
                                <path id="Path_2294" data-name="Path 2294" d="M414.559,422.865c-2.352-.944-6.4-3.734-6.316-8.1a8.119,8.119,0,0,1,6.659-7.839,27.626,27.626,0,0,1,4.3-.158.861.861,0,0,1,.557.363c2.269,3.034,4.561,6.051,6.765,9.131a4.174,4.174,0,0,1,.271,4.629A3.98,3.98,0,0,1,423,423.154C417.95,423.193,415.423,423.212,414.559,422.865Z" transform="translate(-408.242 -406.766)" fill="url(#linear-gradient-13)"></path>
                            </g>
                            <g id="Group_591" data-name="Group 591" transform="translate(35.583 11.724)">
                                <path id="Path_2295" data-name="Path 2295" d="M425.391,404.941a5.876,5.876,0,0,0,1.752-.889,4.436,4.436,0,0,0,1.167-1.364,4.923,4.923,0,0,0-.083-4.73,8.624,8.624,0,0,0-.72-.99q-.958-1.29-1.917-2.579t-1.945-2.606q-.9-1.207-1.793-2.417c-.384-.517-.767-1.034-1.155-1.548q-1.969-2.608-3.942-5.213c-.387-.511-.761-1.033-1.166-1.529a2.11,2.11,0,0,0-3.053-.287.2.2,0,0,1-.129.054,1.377,1.377,0,0,1,.077-.132q1.255-1.688,2.512-3.375,1.125-1.508,2.252-3.015,1.024-1.374,2.046-2.75c.469-.629.912-1.283,1.423-1.876a5.226,5.226,0,0,1,2.323-1.624,5.157,5.157,0,0,1,4.17.459,4.9,4.9,0,0,1,1.67,1.678c8.641,11.574,14.908,20.014,15.816,21.25a7.955,7.955,0,0,1,.946,1.658,8.071,8.071,0,0,1,.573,2.2,8.376,8.376,0,0,1-2.512,7.25,8.274,8.274,0,0,1-4.9,2.365,13.524,13.524,0,0,1-1.976.036c-1.366-.023-2.731.008-4.1-.016C431.246,404.925,428.949,404.907,425.391,404.941Z" transform="translate(-412.405 -367.828)" fill="url(#linear-gradient-14)"></path>
                            </g>
                            <g id="Group_592" data-name="Group 592" transform="translate(0)">
                                <path id="Path_2296" data-name="Path 2296" d="M363.048,424.562l1.289.973-.976,1.376L362.019,426l-1.443.295-.65.868-.912-.653.646-.923.887.595,1.444-.3.931-1.307-.119-.879-.832-.622-2.555.524-.97,1.155-1.194-.831-1.562.324-.576.869.157.739.594.47-.507.7-.7-.495.434-.638-.125-.756-.9-.612.661-.986-.234-1.812-1.883-1.379-1.536.448-.862,1.163.285,1.718,1.347.975-1.036,1.43-1.367-.993-1.093.245-1.164,1.526-1.561-1.145,1.114-1.594,1.594,1.1,1.09-.239.96-1.308-.29-1.69-1.275-.951-1.149.269-.69.919-.995-.706.705-1,.978.69,1.12-.273.924-1.194,1.357.946,1.513-.44,1.345-1.971-.228-1.272-1.3-.939-.464.083-.976,1.3-1.382-.944.976-1.4,1.359.95.222-.043.238-.053,1.054-1.263,1.327,1-.943,1.281.251,1.28,1.944,1.4,2.8-.551.938-1.282,1.252.913-.944,1.359-1.217-.859-2.828.557-1.4,1.924.244,1.807.812.612,1.526-.342.872-1.215-.189-1-.96-.668.734-1.018,1.009.718-.678.943.182,1,1.257.946,2.549-.548.628-.829-.152-1.032-1.251-.941.882-1.261h0l1.338.918,2.434-.464,1.249-1.6,1.541,1.2-1.22,1.629-1.556-1.134-2.446.505-.857,1.111.144,1.067.865.648.693-.141.917-1.209h0l1.366.965-.994,1.247-1.244-.882-.773.144-.594.8Z" transform="translate(-345.629 -377.991)" fill="url(#linear-gradient-15)"></path>
                                <path id="Path_2297" data-name="Path 2297" d="M358.657,428.486l-1.058,1.445-1.418-1.024,1.014-1.443Z" transform="translate(-350.558 -383.962)" fill="url(#linear-gradient-16)"></path>
                                <path id="Path_2298" data-name="Path 2298" d="M351.583,422.223l-.714-.441.418-.664.7.483Z" transform="translate(-348.077 -380.996)" fill="url(#linear-gradient-17)"></path>
                                <path id="Path_2299" data-name="Path 2299" d="M376.389,420.882l.193-.263" transform="translate(-359.998 -380.764)" fill="url(#linear-gradient-18)"></path>
                                <path id="Path_2307" data-name="Path 2307" d="M369.358,426.73l.116-.153" transform="translate(-356.714 -383.547)" fill="url(#linear-gradient-19)"></path>
                                <path id="Path_2308" data-name="Path 2308" d="M363.18,426.73l.116-.154" transform="translate(-353.828 -383.546)" fill="url(#linear-gradient-20)"></path>
                                <path id="Path_2313" data-name="Path 2313" d="M364.044,423.293l-.153-.116" transform="translate(-354.16 -381.959)" fill="url(#linear-gradient-21)"></path>
                                <path id="Path_2314" data-name="Path 2314" d="M372.424,420.878l-.153-.116" transform="translate(-358.074 -380.831)" fill="url(#linear-gradient-22)"></path>
                                <path id="Path_2321" data-name="Path 2321" d="M372.921,421.233l-.153-.116" transform="translate(-358.306 -380.996)" fill="url(#linear-gradient-23)"></path>
                                <path id="Path_2322" data-name="Path 2322" d="M373.761,423.251l.116-.153" transform="translate(-358.77 -381.922)" fill="url(#linear-gradient-24)"></path>
                                <path id="Path_2325" data-name="Path 2325" d="M401.869,358.7a.382.382,0,0,0-.037-.072c-.083-.128-.156-.264-.247-.386-.117-.157-.372-.52-.718-1.011-.112-.145-.226-.289-.335-.436-.332-.453-.482-.7-.838-1.152l-.151-.19-1.748-2.339q-1.123-1.5-2.246-3.005a15.932,15.932,0,0,0-1.3-1.64,11.945,11.945,0,0,0-1.108-.987l-.185-.126-.87-.53-.339-.163a8.5,8.5,0,0,0-3.154-.817,9.556,9.556,0,0,0-4.5.855,7.928,7.928,0,0,0-1.834,1.194,9.412,9.412,0,0,0-1.268,1.314c-.355.46-.675.948-1.031,1.406-.564.724-1.1,1.471-1.649,2.2-.453.6-.893,1.214-1.349,1.813-.512.671-1.009,1.354-1.518,2.028-.457.606-.888,1.231-1.354,1.83-.519.667-1.015,1.351-1.521,2.028-.456.608-.9,1.222-1.358,1.83q-.76,1.014-1.518,2.03c-.492.657-.975,1.32-1.466,1.976-.509.68-1.014,1.364-1.526,2.043-.457.606-.9,1.225-1.359,1.828-.808,1.059-1.074,1.418-1.74,2.322-.343.464-.622.848-.807,1.1l1.252.983-.975,1.282-1.266-.842-1.725,2.265q.161.886.321,1.773l-.613.936.913.653.658-.92-.88-.685q-.149-.807-.3-1.614l1.818,1.43.16.386-1.292,1.618-2.557.53-.935-.652-.69.972.984.675.664-.843,2.572-.562,1.736,1.368L364,380.5l2.467,1.717-1.492,1.945-2.327-1.759-1.724,2.324,2.291,1.789,1.764-2.3,2.212,1.734,1.559-2.2,2.247,1.708,1.632-2.2,2.1,1.656-.614.922.623.461c.105-.116.213-.239.32-.368.079-.094.155-.188.227-.279l.226-.3.149-.2.192-.258c.179-.241.25-.334.34-.455s.223-.3.38-.525q.076-.094.151-.191.383-.493.72-.982l.341-.454q.544-.776,1.134-1.516l.3-.415c.387-.555.8-1.091,1.211-1.627l.34-.455c.349-.5.723-.99,1.1-1.476l.341-.454c.387-.555.8-1.091,1.211-1.627l.264-.344c.368-.546.775-1.064,1.174-1.586l.264-.343c.23-.32.414-.579.534-.748.509-.717.585-.832.828-1.156.115-.153.206-.272.416-.553.158-.212.215-.292.353-.479.12-.162.3-.4.52-.692h0c.4-.547.814-1.08,1.211-1.628h0l.113-.151c.286-.38.495-.664.568-.763.16-.216.4-.544.758-1.017h0l.793-1.063.759-1.019h0l.68-.913.758-1.018h0q.326-.442.663-.889t.677-.887c.036-.039.088-.1.153-.163a6.511,6.511,0,0,1,1.162-.96,4.634,4.634,0,0,1,1.048-.5,4.478,4.478,0,0,1,1.026-.205,5.693,5.693,0,0,1,1.2.023,4.806,4.806,0,0,1,1.414.415,5.109,5.109,0,0,1,1,.631.407.407,0,0,0,.067.04.359.359,0,0,0,.062.024A.447.447,0,0,0,401.869,358.7Zm-37.853,21.724-1.772-1.193-.134-.315,1.622-2.226,2.033,1.554Zm2.418-2.616,1.407-1.894,1.923,1.417-1.439,1.89Zm2.292,5.86-2.12-1.527L368.157,380l2.134,1.6Zm1.4-6.333.981-1.319,1.327.983-.965,1.362Zm2.457,5.8-1.343-1,.958-1.412,1.322,1Z" transform="translate(-350.795 -345.826)" fill="url(#linear-gradient-25)"></path>
                            </g>
                            <path id="Path_2326" data-name="Path 2326" d="M364.407,446.174" transform="translate(-354.401 -392.701)" fill="#010101"></path>
                            <path id="Path_2327" data-name="Path 2327" d="M376.787,437.387" transform="translate(-360.184 -388.596)" fill="#010101"></path>
                            <path id="Path_2328" data-name="Path 2328" d="M372.687,423.047" transform="translate(-358.269 -381.898)" fill="#020202"></path>
                            <path id="Path_2329" data-name="Path 2329" d="M377.889,406.505" transform="translate(-360.699 -374.171)" fill="#fff"></path>
                        </g>
                    </g>
                    
                    
                </g>
            </svg>

        </div>
        <div class="audio-app-content bluetooth-content">
            <h2 style="font-weight: normal;">سیستم‌ موقعیت‌یاب درون‌ساختمانی چیست؟</h2>
            با استفاده از سیستم‌‌های موقعیت‌یابی درون‌ساختمانی(IPS) می‌توان موقعیت مکان، افراد یا اشیاء موردنظر را مکان‌یابی کرد.<br>
<h2>مسیریار</h2>
<p align="justify">تصور کنید در یک ساختمان بزرگ هستید و به دنبال بخش خاصی می‌گردید یا راه خروجی را پیدا نمی‌کنید. سیستم IPS با فناوری‌های به‌ روز و سنسورهای تعبیه‌شده، به شما کمک می‌کند تا سریع و آسان به مقصدتان برسید.<br>

سیستم موقعیت‌یابی داخل ساختمان (IPS) فراتر از یک نقشه و ردیاب ساده است. این فناوری پیشرفته، دنیایی از امکانات را برای مدیریت فضاهای سرپوشیده و بهبود تجربه افراد داخل آن‌ها به ارمغان می‌آورد.<br>

با نصب اپلیکیشن "مسیریار" روی گوشی هوشمندتان، نقشه دقیق و بلادرنگ از ساختمان با راهنمای مسیر دریافت می‌کنید.
</p>
            <!--<button class="download-audio-btn">لینک دانلود اپلیکیشن</button>-->
        </div>
    </div>
    <div class="audio-features ms-features">
        <div class="audio-features-content">
            <h1 style="font-weight: normal; margin-top: 110px;">"مسیریار" برای سازمان‌ها</h1>
            <p align="justify;"><b>نمایش نقشه‌ی ساختمان:</b><br>
در این بخش می‌توان نمای‌ کلی ساختمان، اطلاعات آن مانند نام و شناسه مساحت بنا را مشاهده کنید.<br><br>

<b>نقشه‌ی حرارتی:</b><br>
این بخش به گزارش حرارتی یا آماری حضور افراد در نواحی مختلف ساختمان اختصاص داده شده است.<br><br>

<b>مسیریابی:</b><br>
یکی از بخش های مهم این اپلیکیشن، جست‌و‌جوی مقصد موردنظر و به دست آوردن مسیرهای دسترسی به آن است.
در این بخش مسافت و زمان رسیدن به مکان موردنظر نیز نمایش داده می‌شود.<br><br></p>        
</div>
        <div class="audio-features-content bluetooth-features" style="margin-top: 180px;">
            <img src="<?php echo get_template_directory_uri(); ?>/images/masir-1.png" alt="masiryar" style="width: 100%;">
        </div>
    </div>

    
    <div class="audio-features" style="margin-top: 57%;">
    
        <div class="audio-features-content bluetooth-features bluetooth-bottom" style="margin-top: 100px;">
             <img src="<?php echo get_template_directory_uri(); ?>/images/masir-2.png" alt="masiryar" style="width: 100%;">
        </div>
            <div class="audio-features-content bluetooth-snd-cont">
            <p align="justify;"><b>نمایش نقشه‌ی ساختمان:</b><br>
در این بخش می‌توان نمای‌ کلی ساختمان، اطلاعات آن مانند نام و شناسه مساحت بنا را مشاهده کنید.<br><br>

<b>نقشه‌ی حرارتی:</b><br>
این بخش به گزارش حرارتی یا آماری حضور افراد در نواحی مختلف ساختمان اختصاص داده شده است.<br><br>

<b>مسیریابی:</b><br>
یکی از بخش های مهم این اپلیکیشن، جست‌و‌جوی مقصد موردنظر و به دست آوردن مسیرهای دسترسی به آن است.
در این بخش مسافت و زمان رسیدن به مکان موردنظر نیز نمایش داده می‌شود.<br><br></p>
        </div>

    </div>

        <div class="audio-features" style="margin-top: 97%;">
            <div class="audio-features-content bluetooth-snd-cont">
            <p><h2>مزایای سرویس "مسیریار":</h2>
اما فواید IPS به همین‌جا ختم نمی‌شود. این سیستم می‌تواند برای مقاصد مختلفی از جمله موارد زیر مورد استفاده قرار گیرد:

<h3>بهبود تجربه مشتری:</h3>
در مراکز خرید، نمایشگاه‌ها، فرودگاه‌ها و غیره، کاربران به راحتی می‌توانند اطلاعات مربوط به فروشگاه‌ها، محصولات، رویدادها یا سرویس‌های مختلف را دریافت کنند و مسیرهای مورد نظر خود را پیدا کنند.

<h3>افزایش بهره‌وری کارکنان:</h3> 
در کارخانه‌ها، انبارها و دفاتر بزرگ، کارکنان می‌توانند به‌سرعت به مکان‌های مورد نظر خود رفته، موجودی کالاها را مدیریت کرده و با همکاران خود در نقاط مختلف ارتباط برقرار کنند.

<h3>ارتقای ایمنی و امنیت:</h3> در بیمارستان‌ها، مدارس، مراکز مراقبت از سالمندان و دیگر فضاهای حساس، می‌توان از IPS برای ردیابی افراد و دارایی‌ها، تشخیص افراد مجاز و غیرمجاز و تسهیل فرآیند تخلیه در مواقع اضطراری استفاده کرد.<h3>پرکاربرد در صنایع حساس:</h3>

گزارش مکان لحظه‌ای افراد در هنگام وقوع حوادث، به خصوص در معادن، و بررسی تحرک افراد و اشیا<br><br>

ارسال هشدار به کاربران و افراد حراست در بروز حوادث مهم<br><br>

جولگیری از خروج تجهیزات از مکان‌های مشخص شده<br><br>

اطلاع از مکان لحظه‌ای قطعات در خط تولید</p>
        </div>

                <div class="audio-features-content bluetooth-features bluetooth-bottom" style="margin-top: 150px;">
             <img src="<?php echo get_template_directory_uri(); ?>/images/masir-3.png" alt="masiryar" style="width: 100%;">
        </div>

    </div>
    <?php endwhile; endif; ?>
</div>

<script>
        document.addEventListener("DOMContentLoaded", function() {
            var body = document.body;
            var leftHeader = document.querySelector('.left-header');
            const hamMenue = document.querySelector('.ham-navbar');

            function handleScroll() {
                if (window.scrollY <= 100) { // Check if at the top of the page
                    leftHeader.style.display = 'block'; // Show the header
                    hamMenue.style.display = 'inline-block';
                } else {
                    leftHeader.style.display = 'none'; // Hide the header
                    hamMenue.style.display = 'none';
                }
            }

            window.addEventListener("scroll", function() {
                body.classList.add('scrolling');
                clearTimeout(window.scrollTimer);
                window.scrollTimer = setTimeout(function() {
                    body.classList.remove('scrolling');
                }, 250);

                handleScroll(); // Call the function to handle scroll
            });

            // Initial check for page load
            handleScroll();
        });
        document.querySelector('.menu-icon').addEventListener('click', function() {
    const nav = document.querySelector('.ham-navbar');
    const menu = document.querySelector('.menu');
    
    menu.classList.toggle('show');
    nav.style.backgroundColor = menu.classList.contains('show') ? 'white' : 'transparent';
});
    function updateTransform() {
            var group = document.getElementById("Group_594");
            if (window.innerWidth <= 768) {
                group.setAttribute("transform", "translate(720, -600) scale(2)");
            } else {
                group.setAttribute("transform", "translate(1334.824, -235.79)");
            }
        }

        // Initial call to set the transform on page load
        updateTransform();

        // Update the transform when the window is resized
        window.addEventListener("resize", updateTransform);
</script>