<?php $tagmanager_options = get_option('tagmanager_settings'); ?>
<?php if (isset($tagmanager_options['active'])) : ?>
    <script>var initGTMOnEvent=function(t){initGTM(),t.currentTarget.removeEventListener(t.type,initGTMOnEvent)},initGTM=function(){if(window.gtmDidInit)return!1;window.gtmDidInit=!0;var t=document.createElement("script");t.type="text/javascript",t.async=!0,t.onload=function(){dataLayer.push({event:"gtm.js","gtm.start":(new Date).getTime(),"gtm.uniqueEventId":0})},t.src="<?php echo $tagmanager_options['url'] ?>/gtm.js?id=<?php echo $tagmanager_options['id'] ?>",document.head.appendChild(t)};document.addEventListener("DOMContentLoaded",function(){setTimeout(initGTM, <?php echo $tagmanager_options['timeout'] ?>)}),document.addEventListener("scroll",initGTMOnEvent),document.addEventListener("mousemove",initGTMOnEvent),document.addEventListener("touchstart",initGTMOnEvent)</script>
<?php endif; ?>
