<?php
$song = $arr['data'];

?>
<div class='btn rtl clwhite row w-100 bgdark mb-2 rounded-lg shadow-lg'>
    <div class="rtl clwhite p-3"><i style="font-size:40px;" class="fas fa-guitar"></i></div>
    <div class="font-weight-bold rtl clwhite p-1">
        Chi tiết bài hát
    </div>
    <div class='rtl clwhite p-3'>
        Bài hát : <?php echo $song->getName(); ?>
    </div>
    
    <div class='rtl clwhite p-3'>
        Thể loại : <?php echo $song->getCagetories(); ?>
    </div>
    <div class='rtl clwhite p-3'>
        Ngày phát hành : <?php echo $song->getIssue(); ?>
    </div>
    <div class='rtl clwhite p-3'>
        Nghệ sỹ : <?php echo $song->getArtist(); ?>
    </div>
    
</div>