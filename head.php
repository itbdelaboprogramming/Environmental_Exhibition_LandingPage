<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <link rel="icon" type="image/x-icon" href="./img/SR_logo_03_red.png">
  <title>Nakayama Iron Works Web Exhibiton 2025</title>
  <meta name="viewport" content="width=device-width">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
  <meta name="description" content="WELCOME Nakayama Iron Works WEB Exhibiton" />
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
  <link rel="stylesheet" href="./css/master.css" />
  <!-- <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" /> -->
</head>

<body>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="js/zoom.js" type="text/javascript"></script>
  <script src="./js/lity.js"></script>
  <script src="./js/jumpcontrol.js"></script>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-176130263-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-176130263-1');
  </script>
  <!-- Swiper JS -->
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script>
  document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('.swiper-container').forEach(function(el) {
      new Swiper(el, {
        loop: true,
        slidesPerView: 1,
        navigation: {
          nextEl: el.querySelector('.swiper-button-next'),
          prevEl: el.querySelector('.swiper-button-prev'),
        },
        pagination: {
          el: el.querySelector('.swiper-pagination'),
          clickable: true
        }
      });
    });
  });
</script>