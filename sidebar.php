<aside class="grid-<?php echo $GLOBALS["sidebarWidth"]; ?>">

  <div class="module module-image-ad module-treehouse">
    <a href="http://teamtreehouse.com/join/start-learning-free?cid=1010">
      <img src="/images/ad-treehouse-sidebar-<?php  echo mt_rand(1, 5); ?>.jpg" alt="Make a website with Treehouse!" width="420" height="200">
    </a>
    <p class="training-sponsor-text">
      CSS-Tricks is brought to you in part by <a href="http://teamtreehouse.com/join/start-learning-free?cid=1010">Treehouse</a>, online training for web and mobile design and development. Earn badges as you master each new technology.
    </p>
  </div>

  <div class="module group module-lodge">
    <?php include("parts/lodge-login-or-info.php"); ?>
  </div>

  <div class="module module-poll">
    <?php
      if (function_exists('vote_poll') && !in_pollarchive()) {
        get_poll();
      }
    ?>
  </div><?php # END div.module poll ?>

  <div class="module module-image-ad">
    <div id="bsap_1241308" class="bsarocks bsap_3469a2a501a9e18091036aa0c89f9dcb"></div>
  </div>

  <div class="module module-subscribe">
    <h4>Over 100,000 of the best looking web workers subscribe to CSS-Tricks. Join them?</h4>
    <div class="module-subscribe-buttons">
      <a class="button" href="http://feeds.feedburner.com/CssTricks">
        <span aria-hidden="true" data-icon="S"></span>
        RSS
      </a>
      <br>
      <a class="button" href="http://itunes.apple.com/WebObjects/MZStore.woa/wa/viewPodcast?id=273881728">
        <span aria-hidden="true" data-icon="r"></span>
        iTunes
      </a>
    </div>
    <a href="/subscription-options/">See all Subscription Options</a>
  </div>

</aside>