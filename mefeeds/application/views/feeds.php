<?php
  $logged = $this->session->has_userdata('logged_in');
?>
<!DOCTYPE html>
<html>
<head>
<meta Content-type: "application/json"; charset="utf-8" >
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Me Feeds</title>
  <link rel="stylesheet" href="<?=site_url("public/font-awesome-4.7.0/css/font-awesome.min.css");?>" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="<?=site_url("public/animate/animate.css");?>" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="<?=site_url("public/bulma/css/bulma.css");?>" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="<?=site_url("public/css/mefeeds.css");?>" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="<?=site_url("public/sweetalert2/dist/sweetalert2.min.css");?>" rel="stylesheet" type="text/css">
</head>
<body>

  <nav class="navbar is-transparent main-menu">

    <div class="tabs is-fullwidth me-width-100-per">
      <ul>
        <li>
          <a>
            <span class="icon"><i class="fa fa-briefcase"></i></span>
            <span>งาน</span>
          </a>
        </li>
        <li>
          <a>
            <strong>Me Feed Phuket</strong>
          </a>
        </li>
        <li>
          <a>
            <span>พนักงาน</span>
            <span class="icon"><i class="fa fa-user"></i></span>
          </a>
        </li>
      </ul>
    </div>

  </nav>

  <section class="hero is-primary is-medium" style="margin-bottom: 20px;" id="top-banner">
    <div class="hero-body">
      <div class="container">
        <div class="columns is-vcentered">
        <div class="column">
          <p class="title">
            Documentation
          </p>
          <p class="subtitle">
            Everything you need to <strong>create a website</strong> with Bulma
          </p>
        </div>
        <div class="column is-narrow">
          <div class="box">
              aaaaaaa
          </div>
        </div>
      </div>
      </div>
    </div>
  </section>
  <!-- Section -->

  <div class="container">
    <div class="tile is-ancestor">
      <div class="tile is-3">

        <div class="tile">

          <!-- <div class="tile is-parent is-vertical">

            <div class="tile is-child box">
              <article class="tile is-child notification is-warning">
                <p class="title">...tiles</p>
                <p class="subtitle">Bottom tile</p>
              </article>
              <article class="tile is-child notification is-warning">
                <p class="title">...tiles</p>
                <p class="subtitle">Bottom tile</p>
              </article>
              <article class="tile is-child notification is-warning">
                <p class="title">...tiles</p>
                <p class="subtitle">Bottom tile</p>
              </article>
              <article class="tile is-child notification is-warning">
                <p class="title">...tiles</p>
                <p class="subtitle">Bottom tile</p>
              </article>
            </div>

          </div> -->

        </div>

      </div>
      <div class="tile is-5">
        <div class="tile">
          <div class="tile is-parent is-vertical">

            <div class="box">

              <div id="logout">
                <?php
                  if ( $logged ){
                    echo "<logout></logout>";
                  }
                  // $this->session->sess_destroy();
                ?>
                <!-- Logout -->
              </div><br />

              <div class="field" id="writefeed">
                <?php
                  if ( $logged ){
                    echo "<writefeed></writefeed>";
                  }
                ?>
                <!-- Write Feed -->
              </div>

              <span id="login">
                <?php
                  if ( $logged != 1 ){
                    echo "<login></login>";
                  }
                 ?>
                <!-- Login -->
              </span>

            </div>

            <div id="feeds">
              <div class="box" v-for="feed in feeds">

                <!-- <div class="card">   -->

                  <header class="card-header">
                    <p class="card-header-title">
                        <span class="tag is-danger">
                          <span class="icon"><i class="fa fa-bell-o"></i></span>
                          ด่วนมาก
                        </span>
                    </p>
                    <a class="button card-header-icon me-margin-top-5px me-margin-right-5px">
                      รายงาน
                       <span class="icon is-clearfix">
                        <i class="fa fa-exclamation"></i>
                      </span>
                    </a>
                  </header>

                  <div class="card-image" v-if="feed.image != null">
                    <figure class="image is-4by3">
                      <!-- <img src="http://bulma.io/images/placeholders/1280x960.png" alt="Image"> -->
                      <img v-bind:src="'./public/images/'+feed.image" alt="Image">
                    </figure>
                  </div>
                  <div class="card-content">
                    <div class="media">
                      <div class="media-left">
                        <figure class="image is-48x48">
                          <img src="http://bulma.io/images/placeholders/96x96.png" alt="Image">
                        </figure>
                      </div>
                      <div class="media-content">
                        <div class="media-content">
                          <p class="title is-6"><a v-bind:href="'./viewpost/post/'+feed.idpost" target="_blank">{{feed.title}}</a></p>
                          <p class="subtitle is-6">@{{feed.company}}</p>
                        </div>
                      </div>
                    </div>

                    <div class="content me-white-space-pre">
                      <p v-html="hastag(feed.desc)"></p>
                      <br>
                      <small class="dateformat">{{ feed.postdateauto | moment }}</small>
                    </div>
                  </div>
                <!-- </div> -->

              </div>

            </div><!-- Feeds -->

          </div>
        </div>
      </div>
      <div class="tile is-3">

        <!-- <div class="tile is-parent is-vertical">

          <div class="tile is-child box">
            <article class="tile is-child notification is-info">
              <p class="title">...tiles</p>
              <p class="subtitle">Bottom tile</p>
            </article>
            <article class="tile is-child notification is-info">
              <p class="title">...tiles</p>
              <p class="subtitle">Bottom tile</p>
            </article>
            <article class="tile is-child notification is-info">
              <p class="title">...tiles</p>
              <p class="subtitle">Bottom tile</p>
            </article>
            <article class="tile is-child notification is-info">
              <p class="title">...tiles</p>
              <p class="subtitle">Bottom tile</p>
            </article>
            <article class="tile is-child notification is-info">
              <p class="title">...tiles</p>
              <p class="subtitle">Bottom tile</p>
            </article>
          </div>

        </div> -->

      </div>
    </div>
 </div>


</body>

<script src="<?=site_url("public/jquery/dist/jquery.min.js");?>"></script>
<script src="<?=site_url("public/vue/dist/vue.js");?>"></script>
<script src="<?=site_url("public/axios/dist/axios.min.js");?>"></script>
<script src="<?=site_url("public/moment/moment-with-locales.js");?>"></script>
<script src="<?=site_url("public/js/mefeeds.js");?>"></script>
<script src="<?=site_url("public/sweetalert2/dist/sweetalert2.min.js");?>"></script>
<script src="<?=site_url("public/dropzone/dropzone.js");?>"></script>

<script src="https://unpkg.com/vue-multiselect@2.0.0"></script>
<link rel="stylesheet" href="https://unpkg.com/vue-multiselect@2.0.0/dist/vue-multiselect.min.css">
</html>
