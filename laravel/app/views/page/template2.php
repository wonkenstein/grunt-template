<div class="row">
  <div class="col-md-3 sidebar-nav">
    <ul>
      <?php for($i=1; $i<10; $i++): ?>
      <li><?php echo link_to('#', 'sidebar link ' . $i) ?></li>
      <?php endfor; ?>
    </ul>

    <div class="sidebar-ads">
      <div class="ad-unit">
        <h4>Thunder, thunder, thundercats</h4>
        <p>Ho! Thundercats are on the move, </p>
      </div>
      <div class="ad-unit">
        <h4>Children of the sun</h4>
        <p>See your time has just begun.</p>
      </div>
      <div class="ad-unit">
        <h4>One for all and all for one</h4>
        <p>Muskehounds are always ready.</p>
      </div>
    </div>
  </div>
  <div class="col-md-9">
    <img class="img-responsive" src="http://placekitten.com/700/300" />
    <div class="col-md-9">

      <h1>Template 2</h1>
      <p>I never spend much time in school but I taught ladies plenty. It's true I hire my body out for pay, hey hey. I've gotten burned over Cheryl Tiegs, blown up for Raquel Welch. But when I end up in the hay it's only hay, hey hey. I might jump an open drawbridge, or Tarzan from a vine. 'Cause I'm the unknown stuntman that makes Eastwood look so fine.</p>

      <p>Barnaby The Bear's my name, never call me Jack or James, I will sing my way to fame, Barnaby the Bear's my name. Birds taught me to sing, when they took me to their king, first I had to fly, in the sky so high so high, so high so high so high, so - if you want to sing this way, think of what you'd like to say, add a tune and you will see, just how easy it can be. Treacle pudding, fish and chips, fizzy drinks and liquorice, flowers, rivers, sand and sea, snowflakes and the stars are free. La la la la la, la la la la la la la, la la la la la la la, la la la la la la la la la la la la la, so - Barnaby The Bear's my name, never call me Jack or James, I will sing my way to fame, Barnaby the Bear's my name.</p>

      <h2>Top Cat!</h2>
      <p>The most effectual Top Cat! Who's intellectual close friends get to call him T.C., providing it's with dignity. Top Cat! The indisputable leader of the gang. He's the boss, he's a pip, he's the championship. He's the most tip top, Top Cat.</p>

      <p>80 days around the world, we'll find a pot of gold just sitting where the rainbow's ending. Time - we'll fight against the time, and we'll fly on the white wings of the wind. 80 days around the world, no we won't say a word before the ship is really back. Round, round, all around the world. Round, all around the world. Round, all around the world. Round, all around the world.</p>

      <h3>Just the good ol' boys</h3>
      <p>Never meanin' no harm. Beats all you've ever saw, been in trouble with the law since the day they was born. Straight'nin' the curve, flat'nin' the hills. Someday the mountain might get 'em, but the law never will. Makin' their way, the only way they know how, that's just a little bit more than the law will allow. Just good ol' boys, wouldn't change if they could, fightin' the system like a true modern day Robin Hood.</p>
    </div>

    <div class="col-md-3 sidebar-related">
      <h4>Related items</h4>
      <ul class="related">
        <?php for ($i=0; $i<4; $i++): ?>
          <li><?php echo link_to('#', 'related item ' . $i) ?></li>
        <?php endfor;?>
      </ul>
    </div>
  </div>
</div>
