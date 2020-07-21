<div class="row justify-content-around bg-light rounded-lg shadow-lg mt-5 p-5">
    <div class="row w-100 justify-content-center">
        <i style="color: #40bad5; font-size: 48px;" class="fas fa-tachometer-alt"></i>
    </div>
    <a id="allsong" class="clsuccess btn btnorder bgwhite col-md-3 mt-5 mb-5 rounded-lg shadow-lg m-1">
        <div class="clsuccess row p-4 justify-content-center">
            Tất cả bài hát
        </div>
        <div class="row p-3 bd d-flex justify-content-between m-0">
            <div class="clsuccess justify-content-center d-flex  w-100">
                <i style="font-size: 30px;" class="fas fa-play"></i>
            </div>
        </div>
    </a>
    <a id="hotsong" class="clsuccess btn btnorder bgwhite col-md-3 mt-5 mb-5 rounded-lg shadow-lg m-1">
        <div class="clsuccess row p-4 justify-content-center">
            Bài hát hot
        </div>
        <div class="row p-3 bd d-flex justify-content-between m-0">
            <div class="clsuccess justify-content-center d-flex  w-100">
                <i style="font-size: 30px;" class='fab fa-napster'></i>
            </div>

        </div>
    </a>
    <a id="myplaylist" class="clsuccess btn btnorder bgwhite col-md-3 mt-5 mb-5 rounded-lg shadow-lg m-1">
        <div class="clsuccess row p-4 justify-content-center">
            Playlist của tôi

        </div>
        <div class="row p-3 bd d-flex justify-content-between m-0">
            <div class="clsuccess justify-content-center d-flex  w-100">
                <i style="font-size: 30px;" class="fas fa-stream"></i>
                <div id='yetpay' class="ml-2 mb-4 p-1 bgpink rounded-circle" style="color: #ffffff;">

                </div>
            </div>
        </div>
    </a>
    <div class="row w-100 justify-content-center">
        <button id="triggersearch" class="btn bgpink p-3 clwhite"><i style="font-size: 30px;" class="fas fa-search"></i> Tìm kiếm bài hát</button>
    </div>
    <form id="formsearch" class="row w-100 mb-5 md-form mt-0 d-none">
        <div class="input-group">
            <input id="inputsearchsong" type="text" class="form-control bg-light border-dark small" placeholder="Tìm kiếm bài hát theo tên bài, nghệ sỹ..." aria-label="Search" aria-describedby="basic-addon2">
            <div class="input-group-append">
                <button id="submitsearch" class="btn btn-primary" type="button">
                    <i class="fas fa-search fa-sm"></i>
                </button>
            </div>
        </div>
    </form>
    <div id="content" class="w-100">
    </div>
    <div id="play" class="row w-100 pl-4 fixed-bottom justify-content-center">
    </div>
</div>
<script>
    $("#triggersearch").click(function(){
        $("#formsearch").removeClass("d-none");
        $(this).fadeOut();
    });
    $.post('./listenMusic', function(data) {
        $("#content").html(data);
    });
    $("#allsong").click(function() {
        $.post('./listenMusic', function(data) {
            $("#content").html(data);
        });
    });
    $("#submitsearch").click(function(){
        var content = $(this).val();
        $.post("./song/getsongbysearch", {
            ct: content
        }, function(data) {
            $("#content").html(data);
        });
    });
    $("#inputsearchsong").keyup(function() {
        var content = $(this).val();
        $.post("./searchMusic/getSongByKeyword", {
            ct: content
        }, function(data) {
            $("#content").html(data);
        });
    });
</script>