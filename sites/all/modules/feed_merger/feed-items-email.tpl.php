<div style="background-color:#d8d6d7;border:1px solid #c4c0c2;">
  <div>
    <h2 style="color:#252525;text-align:center;">Feeds for <?php print $user->name; ?></h2>
  </div>
  <?php foreach($feedItems as $feedItem): ?>
  <div style="background-color:#ffffff;margin:10px;padding:5px;border:1px solid #c4c0c2;">
    <span style="font-size:150%"><a href="<?php print $feedItem['link']; ?>"><?php print $feedItem['title']; ?></a></span>
    <span style="color:#575c5d">(<?php print $feedItem['pubDate']; ?> - <i><?php print $feedItem['feedTitle']; ?></i>)</span>
    <hr/>
    <span><?php print $feedItem['description']; ?></span>
  </div>
  <?php endforeach; ?>
</div>
<a href="#">unsubscribe</a>
