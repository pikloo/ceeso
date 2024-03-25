<!DOCTYPE html>
<html <?php language_attributes(); ?> >

<head>
    <meta charset="<?php bloginfo('charset')?>">
    <?php
  wp_head();
  ?>
    <script src="https://cdn.tailwindcss.com"></script>
    <style type="text/tailwindcss">
    @layer utilities {
      h1, h2, h3, h4, h5, h6 {
        @apply font-title font-bold;
      } 

      .button {
        @apply rounded  py-3 flex justify-center;
      }

      span.title {
        @apply text-[15px] leading-[18px] tracking-[20%] font-light text-primary uppercase;
      }

      h2 {
        @apply text-[32px] leading-[38.4px] text-secondary mb-8;
      }

      h3 {
        @apply font-medium text-lg leading-[21.6px]
      }
    }
  </style>
</head>

<body class="font-body tracking-[4%]">