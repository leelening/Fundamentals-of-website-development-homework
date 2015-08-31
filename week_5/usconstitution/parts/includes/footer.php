<?php $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>

<footer role="contentinfo">
<p>This version of the United States Constitution was adapted from <a href="http://www.house.gov/">U.S. House of Representatives</a> website.  <a href="http://www.archives.gov/exhibits/charters/constitution.html">Learn more about the United States Constitution at <strong>The National Archives</strong> online exhibit</a>.</p>
    <p>This peice of beauty lives at: <?php echo ($actual_link)?></p>
    <p><?php echo "This page was last updated on: ". date ("F j o", getlastmod()); ?></p>
</footer>
