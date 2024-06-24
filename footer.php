<?php
do_action('clean_before_footer');
if (is_active_sidebar('footer')) {
  echo '<footer class="footer l-wrap">';
    echo '<div class="content">';
      dynamic_sidebar('footer');
    echo '</div>';
  echo '</footer>';
}
wp_footer();
do_action('clean_before_body_end');
?>

</body>
</html>