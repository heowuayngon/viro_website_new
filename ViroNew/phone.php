<script src="//cdn.jsdelivr.net/mobile-detect.js/1.3.4/mobile-detect.min.js"></script>
<script>
    var md = new MobileDetect(window.navigator.userAgent);
    if (md.os() == 'AndroidOS') {
        window.location = "https://play.google.com/store/apps/details?id=com.viro.viroapp.com";
    }else{
        window.location = "https://itunes.apple.com/az/app/viro-app-viral-your-product/id1130347000?mt=8" ;
    }
</script>
