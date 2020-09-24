<address>
  <div><?php print $this->getStreet(); ?></div>
  <div><?php print $this->getSuite(); ?></div>
  <div><?php print $this->getCity(); ?></div>
  <div><?php print $this->getZipcode(); ?></div>
  <div>(<a href="https://www.google.com/maps/search/?api=1&query=<?php print $this->getGeo()['lat']; ?>,<?php print $this->getGeo()['lng']; ?>"><?php print $this->getGeo()['lat']; ?>, <?php print $this->getGeo()['lng']; ?></a>)</div>
</address>
