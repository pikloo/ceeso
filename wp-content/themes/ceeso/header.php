<!DOCTYPE html>
<html <?php language_attributes(); ?> >

<head>
    <meta charset="<?php bloginfo('charset')?>">
    <?php
  wp_head();
  ?>
    <script src="https://cdn.tailwindcss.com"></script>
    <style type="text/tailwindcss">
    @layer base {
      h1, h2, h3, h4, h5, h6 {
        @apply font-title font-bold;
      } 

      .button {
        @apply rounded  py-3 flex justify-center text-lg leading-[21.6px] font-medium;
      }

      span.title {
        @apply text-[15px] leading-[18px] tracking-[20%] font-light text-primary uppercase;
      }

      h2 {
        @apply text-[32px] leading-[38.4px] text-secondary mb-8 xl:text-[34px];
      }

      figcaption > h2 {
        @apply text-white mb-4;
      }

      figcaption > p {
        @apply font-medium leading-[19.2px];
      }

      h3, h4 {
        @apply font-medium text-lg leading-[21.6px];
      }

      footer h3 {
        @apply font-bold text-2xl leading-[28.8px] mb-6;
      }

      .navbar-menu .main a {
        @apply block p-4 text-sm font-semibold text-secondary hover:bg-primary/10 hover:text-primary rounded;
      }

      .navbar-menu .main {
        @apply space-y-1;
      }

      .navbar-menu .actions a {
        @apply block px-4 py-3 mb-3 leading-loose text-xs text-center font-semibold rounded w-full;
      }

      .navbar-menu .actions li {
        @apply w-full;
      }

      li.light a {
        @apply bg-primary/10 text-quarter;
      }

      li.quarter a {
        @apply bg-quarter text-white;
      }

      li.secondary a {
        @apply bg-secondary text-white;
      }

      li.primary a {
        @apply bg-primary text-white;
      }

      .actions a {
        @apply hidden xl:inline-block xl:ml-auto xl:mr-3 py-2 px-6 rounded font-bold transition duration-200;
      }

      .actions {
        @apply flex items-center;
      }

      .navbar-menu .actions {
        @apply flex-col pt-6 space-y-1;
      }

      .navbar-regular .main {
        @apply hidden xl:mx-auto xl:flex xl:items-center xl:w-auto xl:space-x-6;
      }

      .navbar-regular .main a{
        @apply font-semibold text-[15px] leading-[20.43px] text-secondary;
      }
    }
  </style>
</head>

<body class="font-body tracking-[4%]">