<?php
// $arr là tham số tại Controller/song/defaul
$datasong = $arr['data'];
?>
<div class="row w-100 p-5">
    <div style="font-size: 30px;" class="row w-100 justify-content-center clpink mb-5 p-3">
        Các bài hát
    </div>
    <?php
    foreach ($datasong as $key => $value) {
        echo "
            <div class='rtl clwhite row w-100 bgdark mb-2 rounded-lg shadow-lg'>
            <button onclick='playsong({$datasong[$key]['idSong']})' class='rtl btnplay btn clwhite p-2 pl-5 pr-5 mr-5 rounded-left'>
                <i style='font-size: 28px;' class='fas fa-play-circle'></i>
            </button>
            <div class='rtl clwhite p-2'>
                {$datasong[$key]['name']}
            </div>
            <div class='rtl p-2'>
                <i class='far fa-user'></i> {$datasong[$key]['nameartist']}
            </div>
        </div>
            ";
    }
    ?>
</div>

<script>
    function playsong(id) {
        $.post('./song/play',{id:id},function(data){
            $("#play").html(data);
            let x = document.getElementById(id);
            x.play();
            
        });
    }
</script>