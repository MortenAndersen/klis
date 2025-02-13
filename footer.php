<?php
do_action('clean_before_footer');
if (is_active_sidebar('footer')) {
  echo '<footer class="footer l-wrap">';
    echo '<div class="content">';
      dynamic_sidebar('footer');
    echo '</div>';
  echo '</footer>';
}
echo '<div class="ref content l-wrap"><a href="https://www.hjemmesider.dk" rel="nofollow" target="_blank">Hjemmesider.dK</a></div>';
wp_footer();
do_action('clean_before_body_end');
?>
</div>
</body>
</html>