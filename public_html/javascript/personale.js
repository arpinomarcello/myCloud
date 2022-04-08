$(function () {
    $('#btn-aggiungi').on('click', function () {
        $('#formNota .titolo-barra-superiore').text('Nuova Nota');
        $('#formFoto .titolo-barra-superiore').text('Nuova Foto');
        $('#formNota, #formFoto').fadeToggle();
        $('.form-modifica').fadeOut();
        $('.form-elimina').fadeOut();
        $('.submit-rinomina,.reset-foto').fadeOut();
        $('.container-foto,.container-nota').css('z-index', '-1');
        $('#formNota input[name=id]').val(null);
        $('#formNota input[name=titolo]').val("Titolo Nota");
        $('#formNota textarea[name=testo]').val("Testo Nota");
        $('#btn-modifica').slideToggle(1000);
        $('#btn-elimina').slideToggle(1000);
        if ($('.form-aggiungi').attr('action') == 'modifica_nota.php'){
            $('.form-aggiungi').removeAttr('action');
            $('.form-aggiungi').attr('action','nuova_nota.php');
        }
            
        
    
    });
    $('#btn-modifica').on('click', function () {
        $('.container-foto,.container-nota').css('z-index', '0')
        $('.form-modifica').fadeToggle();
        $('.form-elimina').fadeOut();
        $('#formNota, #formFoto').fadeOut();
        $('.submit-rinomina').fadeToggle();
        $('#btn-aggiungi').slideToggle();
        $('#btn-elimina').slideToggle();
        if ($('.etichetta-foto').attr('readonly')) {
            $('.etichetta-foto').removeAttr('readonly');
        } else {
            $('.etichetta-foto').attr('readonly', true);
        }
    });
    $('#btn-elimina').on('click', function () {
        $('.container-foto,.container-nota').css('z-index', '0')
        $('.form-elimina').fadeToggle();
        $('.form-modifica').fadeOut();
        $('#formNota, #formFoto').fadeOut();
        $('.submit-rinomina,.reset-foto').fadeOut();
        $('#btn-modifica').slideToggle();
        $('#btn-aggiungi').slideToggle();
    });

    $('#icona-barra-superiore').on('click', function () {
        $('#formFoto').fadeOut();
        $('#formNota').fadeOut();
        $('.form-modifica').fadeOut();
        $('#btn-modifica').slideDown();
        $('#btn-aggiungi').slideDown();
        $('#btn-elimina').slideDown();
        

    });
    $('#foto').on('change',function(){
        var nomeFoto = $('#foto').val();
        var start = nomeFoto.lastIndexOf("\\");
        start += 1;
        var end = nomeFoto.lastIndexOf(".");
        nomeFoto = nomeFoto.slice(start,end);
        $('#nome-foto').val(nomeFoto);
    });
    
    $('.form-modifica').on('submit', function (e) {
        e.preventDefault();
        $('#formNota').fadeToggle();
        $('.container-nota').css('z-index', '-1')
        $('.titolo-barra-superiore').text('Modifica Nota');
        var val_titolo = this[1].value;
        var val_testo = this[2].value;
        var val_id = this[0].value;
        $('input[name=id]').val(val_id);
        $('input[name=titolo]').val(val_titolo);
        $('textarea[name=testo]').val(val_testo);
        $('.form-aggiungi').attr('action','modifica_nota.php');
        
    });
    
})
