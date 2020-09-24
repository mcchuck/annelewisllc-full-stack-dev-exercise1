<div>
  <div><?php print $this->getName(); ?> (<?php print $this->getUsername(); ?>)</div>
  <div><a href="<?php print $this->getEmail(); ?>"><?php print $this->getEmail(); ?></a></div>
  <div><?php print $this->getAddress()->render(); ?></div>
  <div><a href="tel:<?php print $this->getPhone(); ?>"><?php print $this->getPhone(); ?></a></div>
  <div><a href="<?php print $this->getWebsite(); ?>"><?php print $this->getWebsite(); ?></a></div>
  <div><?php print $this->getCompany()->render(); ?></div>
</div>
