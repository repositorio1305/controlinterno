$(document).ready(function(){
    Controlinterno.validacionGeneral('form_general');
    $('#icono').on('blur',function(){
        $('#mostra-icono').removeClass().addClass('fa fa-fw'+$(this).val());
    });

    $("#Id_cargo_0").click(function() {  
        $("#Id_cargo_0").attr("value",0);  
    });
    
    $("#Id_cargo_1").click(function() {  
        $("#Id_cargo_1").attr("value",1);  
    });

    $("#Id_cargo_2").click(function() {  
        $("#Id_cargo_2").attr("value",2);  
    });

    $("#Id_cargo_3").click(function() {  
        $("#Id_cargo_3").attr("value",3);  
    });

    $("#Id_cargo_4").click(function() {  
        $("#Id_cargo_4").attr("value",4);  
    });

    $('.validarChar').keyup(function () {
        this.value = this.value.replace(/[^A-Z- ]\w*/i,'');
    });

    $('.validarNumb').keyup(function () {
        this.value = this.value.replace(/[^0-9]\w*/i,'');
    });
    
    for (paso = 0; paso < 100; paso++) {
        if($('.cargo')[paso].innerText==4){
            $('.cargo')[paso].innerText = 'Consultor';
           }else if($('.cargo')[paso].innerText==3){
            $('.cargo')[paso].innerText = 'Especialista';
           }else if($('.cargo')[paso].innerText==2){
            $('.cargo')[paso].innerText = 'Especialista Senior';
           }else if($('.cargo')[paso].innerText==1){
            $('.cargo')[paso].innerText = 'Lider de proyecto';
           }
      };
});
