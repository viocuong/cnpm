<?php
// $arr là tham số tại Controller/song/defaul
$songs = $arr['data'];
?>
<div class="row w-100 p-5">
    <div style="font-size: 30px;" class="row w-100 justify-content-center clpink mb-5 p-3">
        Các bài hát
    </div>
    <div id="mainsong" class="row w-100 pl-5" >
        <?php
        for ($i = 0; $i < count($songs); $i++) {
            echo "
            <a onclick='detail({$songs[$i]->getId()})' class='w-100 btn rtl clwhite row w-100 bgdark mb-2 rounded-lg shadow-lg'>
            <button onclick='playsong({$songs[$i]->getId()})' class='rtl btnplay btn clwhite p-2 pl-5 pr-5 mr-5 rounded-left'>
                <i style='font-size: 28px;' class='fas fa-play-circle'></i>
            </button>
            <div class='rtl clwhite p-2'>
                {$songs[$i]->getName()}
            </div>
            <div class='rtl p-2'>
                <i class='far fa-user'></i> {$songs[$i]->getArtist()}
            </div>
        </a>
            ";
        }
        ?>
    </div>
</div>

<script>
    function playsong(id) {
        ////// GET MUSIC //////////////////////////////////////////////////
        $.post('./listenMusic/play', {
            id: id
        }, function(data) {
            $("#play").html(data);
            let x = document.getElementById(id);
            x.play();

        });
    }

    function detail(id) {
        $.post('./songdetail', {
            id: id
        }, function(data) {
            $("#mainsong").html(data);
            let x = document.getElementById(id);
            x.play();

        });
    }
</script>