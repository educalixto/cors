<!DOCTYPE html>
<html lang="pt">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
      <?php include_once('./styles/404.css'); ?>
    </style>
    <title>Ops... um erro</title>
  </head>

  <body>
    <div class="page-404">
      <div class="title-bar">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C21.9939 17.5203 17.5203 21.9939 12 22ZM12 4C7.58172 4 4 7.58172 4 12C4 16.4183 7.58172 20 12 20C16.4183 20 20 16.4183 20 12C19.995 7.58378 16.4162 4.00496 12 4ZM10 18C9.986 18 9.86 17.995 9 17.995H8V17.971C8 17.96 8 17.946 8 17.929C8 17.896 8 17.851 8.007 17.796C8.018 17.647 8.035 17.505 8.059 17.364C8.1339 16.9088 8.27541 16.467 8.479 16.053C8.75697 15.4813 9.18135 14.9935 9.709 14.639L9.723 14.63L9.739 14.618L9.754 14.61H9.76H9.767H9.772H9.779L9.79 14.603C10.4548 14.197 11.2211 13.9879 12 14C12.8096 13.9785 13.6071 14.1996 14.29 14.635C14.8172 14.99 15.2414 15.4777 15.52 16.049C15.7244 16.4626 15.8656 16.9045 15.939 17.36C15.971 17.548 15.985 17.699 15.991 17.792C15.991 17.836 15.997 17.88 15.998 17.925C15.998 17.942 15.998 17.956 15.998 17.967V17.987C15.998 17.987 15.958 17.987 14.998 17.987C14.092 17.987 13.998 17.987 13.998 17.987C13.998 17.987 13.998 17.958 13.998 17.928C13.998 17.873 13.985 17.788 13.967 17.682C13.9251 17.4229 13.8456 17.1712 13.731 16.935C13.6072 16.6753 13.4171 16.4529 13.18 16.29C12.8236 16.0797 12.4133 15.9788 12 16C11.5857 15.9818 11.1753 16.0862 10.82 16.3C10.5832 16.4632 10.3932 16.6856 10.269 16.945C10.1546 17.1813 10.0752 17.4329 10.033 17.692C10.0188 17.7734 10.0088 17.8555 10.003 17.938C10.003 17.966 10.003 17.986 10.003 17.996H10V18ZM8.5 12C7.67157 12 7 11.3284 7 10.5C7 9.67157 7.67157 9 8.5 9C9.32843 9 10 9.67157 10 10.5C10 11.3284 9.32843 12 8.5 12ZM15.493 11.986C14.6684 11.986 14 11.3176 14 10.493C14 9.66844 14.6684 9 15.493 9C16.3176 9 16.986 9.66844 16.986 10.493C16.9849 11.3171 16.3171 11.9849 15.493 11.986Z" fill="var(--grayn)"></path>
        </svg>
        <h1 class="title">
          Ops...
        </h1>
      </div>

      <span class="subtitle"><b>Error</b> Ocorreu um erro inesperado</span>

      <div class="errors">
        <?php

          echo "<pre>";
          print_r($data[0]);
          echo "</pre>";

          // foreach ($data as $value) {
          //   echo "<br />";
          //   echo $value;
          //   echo "<br />";
          // }
        ?>
      </div>

      <a class="opacty-button btn-back404" href="<?php echo '../'.$previousPage; ?>">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M6 16V13L22 13V11L6 11L6 8L2 12L6 16Z" fill="var(--grayn)"></path>
        </svg>
        Voltar Para o Início
      </a>
    </div>

  </body>

</html>
