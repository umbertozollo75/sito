<?php ?>
<footer class="footer-head">
  <div class="footer-container">

    <div class="uz-footer-panel">
      <div class="uz-footer-colsx uz-left">
        <p class="rights">
          <strong><span style="font-size:14px;">UMBERTO ZOLLO&nbsp;</span></strong>
        </p>
        <p class="rights">
          © Copyright <?php echo date("Y"); ?>. All rights reserved - È vietato riprodurre i contenuti di questo sito senza autorizzazione.
        </p>
        <p class="rights">
          <a href="./privacy.php">Privacy</a>
        </p>
      </div>
      <div class="uz-footer-colcx uz-center">
        <p class="rights">
          Seguimi su:
        </p>
        <div class="">
          <?php include 'social.php'; ?>
        </div>
      </div>
      <div class="uz-footer-coldx uz-center">
        <p class="rights">
          Sostieni il sito con una donazione:
        </p>
        <form action="https://www.paypal.com/donate" method="post" target="_blank">
          <input type="hidden" name="business" value="F2H8KM66J5KKW" />
          <input type="hidden" name="currency_code" value="EUR" />
          <input type="hidden" name="amount" value="1" />
          <input type="hidden" name="item_name" value="Quello che ci donerete lo destineremo interamente alla copertura dei costi di manutenzione del sito. Grazie :)">
          <input type="image" src="https://www.paypalobjects.com/it_IT/IT/i/btn/btn_donate_SM.gif" border="0" name="submit" title="Offrimi un caffe!!!" alt="Offrimi un caffe!!!" />
          <img alt="" border="0" src="https://www.paypal.com/it_IT/i/scr/pixel.gif" width="1" height="1" />
        </form>
      </div>
    </div>
  </div>

</footer>