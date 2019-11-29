
let buttonPlayStatus = false;

$(".owl-carousel").owlCarousel({
  loop:true,
  autoWidth:true,
  items:1,
  dots: false,
  autoplay:true,
  autoplayTimeout: 5000,
  autoplayHoverPause:true
});

$('.phone_with_ddd').mask('(00) 00000-0000');
$('.cep').mask('00.000-000');

function musicPlayer(song) {
  
	var myaudio = new Audio(song);
	myaudio.addEventListener("loadeddata", function() {
		$("#player-stream").attr("max", this.duration);
	});

	myaudio.addEventListener('ended',function() {
		myaudio.currentTime = 0;
		$('#player-button-icon').addClass('fa-play');
    $('#player-button-icon').removeClass('fa-pause');
	})
	

	$('.custom-player > .button').click(function() {
    if (!buttonPlayStatus) {
      myaudio.play();
      $('#player-button-icon').removeClass('fa-play');
      $('#player-button-icon').addClass('fa-pause');
    } else {
      myaudio.pause();
      $('#player-button-icon').addClass('fa-play');
      $('#player-button-icon').removeClass('fa-pause');
    }
    buttonPlayStatus = !buttonPlayStatus;
	})

	$("#player-stream").bind("change", function() {
		myaudio.currentTime = $(this).val();
	});

	myaudio.addEventListener('timeupdate',function (){
		var slider = $('#player-stream');
		var box = $('#player-current-time');

		curtime = parseInt(myaudio.currentTime, 10);
		slider.attr("value", curtime);
		slider.prop("value", curtime);
		box.val(curtime)
  })
}

$(document).ready(function() {
  $(".candidato-botao-votar").click(function() {
    let id = parseInt($(this).attr('candidato-id'));
    let url = $(this).attr('url');
    let votos = parseInt($(`#candidato-votos-${id}`).text());
    $.ajax({
      url: url,
      type: 'POST',
      data: { "candidato":id },
      success: function(data) {
        if (data == '200') {
          $(`#candidato-votos-${id}`).text(votos + 1);
          $('#modalConfirmacaoVoto').modal();
        } else {
          alert('erro!');
        }
      }
    })
  })
})
