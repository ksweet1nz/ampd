<?php include('admin/runtime.php'); ?>
<?php
  $bg = array('RobotClip_01.mp4','RobotClip_02.mp4','RobotClip_03.mp4' );
  $i = rand(0, count($bg)-1);
  $selectedBg = "$bg[$i]";
 ?>
<!doctype html>
<html lang="en">
<?php perch_layout('global.head', [
  'title' => 'Home',
]); ?>
<body>
  <?php perch_layout('global.header'); ?>

  <div id="videoDiv">
    <div id="videoBlock">
      <video preload="preload" id="video" autoplay="autoplay" loop="loop">
        <source src="images/<?php echo $selectedBg ?>" type="video/mp4"></source>
      </video>
      <div id="videoMessage">
        <?php perch_content('Banner'); ?>
      </div>
    </div>
  </div>
  <main class="home-grid">
    <article class="instagram-block">
    <blockquote class="instagram-media" data-instgrm-captioned data-instgrm-permalink="https://www.instagram.com/p/Bhzjs1Gn-mL/" data-instgrm-version="8" >
      <div style="padding:8px;">
        <div style=" background:#F8F8F8; line-height:0; margin-top:40px; padding:50.0% 0; text-align:center; width:100%;">
          <div style=" background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAAsCAMAAAApWqozAAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAAAMUExURczMzPf399fX1+bm5mzY9AMAAADiSURBVDjLvZXbEsMgCES5/P8/t9FuRVCRmU73JWlzosgSIIZURCjo/ad+EQJJB4Hv8BFt+IDpQoCx1wjOSBFhh2XssxEIYn3ulI/6MNReE07UIWJEv8UEOWDS88LY97kqyTliJKKtuYBbruAyVh5wOHiXmpi5we58Ek028czwyuQdLKPG1Bkb4NnM+VeAnfHqn1k4+GPT6uGQcvu2h2OVuIf/gWUFyy8OWEpdyZSa3aVCqpVoVvzZZ2VTnn2wU8qzVjDDetO90GSy9mVLqtgYSy231MxrY6I2gGqjrTY0L8fxCxfCBbhWrsYYAAAAAElFTkSuQmCC); display:block; height:44px; margin:0 auto -44px; position:relative; top:-22px; width:44px;">
          </div>
        </div>
        <p style=" margin:8px 0 0 0; padding:0 4px;">
          <a href="https://www.instagram.com/p/Bhzjs1Gn-mL/" style=" color:#000; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none; word-wrap:break-word;" target="_blank">#roboticfabrication #robotics #digitalfabrication #robotlift</a>
        </p>
        <p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;">A post shared by
          <a href="https://www.instagram.com/ampdlabnz/" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px;" target="_blank"> AMPD Lab</a>
          (@ampdlabnz) on
          <time style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;" datetime="2018-04-20T20:27:31+00:00">Apr 20, 2018 at 1:27pm PDT</time>
        </p>
      </div>
    </blockquote>
    </article>

    <article class="instagram-block">
      <blockquote class="instagram-media" data-instgrm-captioned data-instgrm-permalink="https://www.instagram.com/p/BhwwkeuHYgW/" data-instgrm-version="8" >
        <div style="padding:8px;">
         <div style=" background:#F8F8F8; line-height:0; margin-top:40px; padding:50% 0; text-align:center; width:50%;">
           <div style=" background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAAsCAMAAAApWqozAAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAAAMUExURczMzPf399fX1+bm5mzY9AMAAADiSURBVDjLvZXbEsMgCES5/P8/t9FuRVCRmU73JWlzosgSIIZURCjo/ad+EQJJB4Hv8BFt+IDpQoCx1wjOSBFhh2XssxEIYn3ulI/6MNReE07UIWJEv8UEOWDS88LY97kqyTliJKKtuYBbruAyVh5wOHiXmpi5we58Ek028czwyuQdLKPG1Bkb4NnM+VeAnfHqn1k4+GPT6uGQcvu2h2OVuIf/gWUFyy8OWEpdyZSa3aVCqpVoVvzZZ2VTnn2wU8qzVjDDetO90GSy9mVLqtgYSy231MxrY6I2gGqjrTY0L8fxCxfCBbhWrsYYAAAAAElFTkSuQmCC); display:block; height:44px; margin:0 auto -44px; position:relative; top:-22px; width:44px;">
           </div>
         </div>
         <p style=" margin:8px 0 0 0; padding:0 4px;">
           <a href="https://www.instagram.com/p/BhwwkeuHYgW/" style=" color:#000; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none; word-wrap:break-word;" target="_blank">Robot panel project taking shape</a>
         </p>
         <p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;">A post shared by
           <a href="https://www.instagram.com/ampdlabnz/" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px;" target="_blank"> AMPD Lab</a>
           (@ampdlabnz) on
           <time style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;" datetime="2018-04-19T18:20:12+00:00">
             Apr 19, 2018 at 11:20am PDT
           </time>
         </p>
       </div>
      </blockquote>
    </article>

  </main>
  <?php perch_layout('global.footer'); ?>
  </div>

</body>
</html>
