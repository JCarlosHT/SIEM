
$( "#reg_den" ).click(function() {
  if($("#semana_deb").val()=="" || $("#tot_cof_den").val()=="" || $("#den_nograv").val()=="" || $("#den_aler").val()=="" || $("#den_grav").val()=="" || $("#den_def").val()=="" ){
    $("#warningToast").toast("show");
  }else{
    if (val_semana('dengue',$("#semana_deb").val(),$("#anio").val())=='1') {
      $("#semanaToast").toast("show");
    }else{
      $.ajax({
      url: '/SIEM/reg_den',
      method:'POST',
      dataType: "json",
      data: {
        "_token": $("meta[name='csrf-token']").attr("content"),
        "sem": $("#semana_deb").val(),
        "anio": $("#anio").val(),
        "tot_cof_den": $("#tot_cof_den").val(),
        "den_nograv": $("#den_nograv").val(),
        "den_aler": $("#den_aler").val(),
        "den_grav": $("#den_grav").val(),
        "den_def": $("#den_def").val(),
        "mun_den": $("#mun_den").val(),
      },
      async: false,
      success: function (respuesta) {                         
        $("#successToast").toast("show");
        $("#semana_deb").val("");
        $("#tot_cof_den").val("");
        $("#den_nograv").val("");
        $("#den_aler").val("");
        $("#den_grav").val("");
        $("#den_def").val("");
        $("#mun_den").val(null).trigger('change');
      },
    });
    }
  }
  
});

$( "#reg_inf" ).click(function() {
  if($("#semana_inf").val()=="" || $("#casos_inf").val()=="" || $("#ah1").val()=="" || $("#ah3").val()=="" || $("#infb").val()=="" || $("#def_inf").val()=="" ){
    $("#warningToast").toast("show");
  }else{
    if(val_semana('influenza',$("#semana_inf").val(),$("#anio_inf").val())=='1'){
      $("#semanaToast").toast("show");
    }else{
      $.ajax({
      url: '/SIEM/reg_inf',
      method:'POST',
      dataType: "json",
      data: {
        "_token": $("meta[name='csrf-token']").attr("content"),
        "sem": $("#semana_inf").val(),
        "anio": $("#anio_inf").val(),
        "casos_inf": $("#casos_inf").val(),
        "ah1": $("#ah1").val(),
        "ah3": $("#ah3").val(),
        "infb": $("#infb").val(),
        "def_inf": $("#def_inf").val(),
        "mun_inf": $("#mun_inf").val(),
      },
      async: false,
      success: function (respuesta) {                         
        $("#successToast").toast("show");
        $("#semana_inf").val("");
        $("#casos_inf").val("");
        $("#ah1").val("");
        $("#ah3").val("");
        $("#infb").val("");
        $("#def_inf").val("");
        $("#mun_inf").val(null).trigger('change');
      },
    });
    } 
  }
});

$( "#reg_iras" ).click(function() {
  if($("#semana_iras").val()=="" || $("#casos_iras").val()=="" || $("#casos_iras5").val()=="" ){
    $("#warningToast").toast("show");
  }else{
    if(val_semana('iras',$("#semana_iras").val(),$("#anio_iras").val())=='1'){
      $("#semanaToast").toast("show");
    }else{
      $.ajax({
      url: '/SIEM/reg_iras',
      method:'POST',
      dataType: "json",
      data: {
        "_token": $("meta[name='csrf-token']").attr("content"),
        "sem": $("#semana_iras").val(),
        "anio": $("#anio_iras").val(),
        "casos_iras": $("#casos_iras").val(),
        "mun_iras": $("#mun_iras").val(),
        "casos_iras5": $("#casos_iras5").val(),
        "mun_iras5": $("#mun_iras5").val(),
      },
      async: false,
      success: function (respuesta) {                         
        $("#successToast").toast("show");
        $("#semana_iras").val("");
        $("#casos_iras").val("");
        $("#mun_iras").val(null).trigger('change');
        $("#casos_iras5").val("");
        $("#mun_iras5").val(null).trigger('change');
      },
    });
    }
    
  }
});

$( "#reg_edas" ).click(function() {
  if($("#semana_edas").val()=="" || $("#casos_edas").val()=="" || $("#casos_edas5").val()=="" ){
    $("#warningToast").toast("show");
  }else{
    if(val_semana('edas',$("#semana_edas").val(),$("#anio_edas").val())=='1'){
      $("#semanaToast").toast("show");
    }else{
      $.ajax({
      url: '/SIEM/reg_edas',
      method:'POST',
      dataType: "json",
      data: {
        "_token": $("meta[name='csrf-token']").attr("content"),
        "sem": $("#semana_edas").val(),
        "anio": $("#anio_edas").val(),
        "casos_edas": $("#casos_edas").val(),
        "mun_edas": $("#mun_edas").val(),
        "casos_edas5": $("#casos_edas5").val(),
        "mun_edas5": $("#mun_edas5").val(),
      },
      async: false,
      success: function (respuesta) {                         
        $("#successToast").toast("show");
        $("#semana_edas").val("");
        $("#casos_edas").val("");
        $("#mun_edas").val(null).trigger('change');
        $("#casos_edas5").val("");
        $("#mun_edas5").val(null).trigger('change');
      },
    });
  }
  }
});

$( "#reg_hep" ).click(function() {
  if($("#semana_hep").val()=="" || $("#casos_hep").val()=="" || $("#def_hep").val()=="" ){
    $("#warningToast").toast("show");
  }else{
    if(val_semana('hepa',$("#semana_hep").val(),$("#anio_hep").val())=='1'){
      $("#semanaToast").toast("show");
    }else{
      $.ajax({
      url: '/SIEM/reg_hep',
      method:'POST',
      dataType: "json",
      data: {
        "_token": $("meta[name='csrf-token']").attr("content"),
        "sem": $("#semana_hep").val(),
        "anio": $("#anio_hep").val(),
        "casos": $("#casos_hep").val(),
        "mun": $("#mun_hep").val(),
        "def": $("#def_hep").val(),

      },
      async: false,
      success: function (respuesta) {                         
        $("#successToast").toast("show");
        $("#semana_hep").val("");
        $("#casos_hep").val("");
        $("#def_hep").val("");
        $("#mun_hep").val(null).trigger('change');
      },
    });
    }
    
  }
});

$( "#reg_hepa" ).click(function() {
  if($("#semana_hepa").val()=="" || $("#casos_hepa").val()=="" || $("#def_hepa").val()=="" ){
    $("#warningToast").toast("show");
  }else{
    if(val_semana('hepaa',$("#semana_hepa").val(),$("#anio_hepa").val())=='1'){
      $("#semanaToast").toast("show");
    }else{
      $.ajax({
      url: '/SIEM/reg_hepa',
      method:'POST',
      dataType: "json",
      data: {
        "_token": $("meta[name='csrf-token']").attr("content"),
        "sem": $("#semana_hepa").val(),
        "anio": $("#anio_hepa").val(),
        "casos": $("#casos_hepa").val(),
        "mun": $("#mun_hepa").val(),
        "def": $("#def_hepa").val(),

      },
      async: false,
      success: function (respuesta) {                         
        $("#successToast").toast("show");
        $("#semana_hepa").val("");
        $("#casos_hepa").val("");
        $("#def_hepa").val("");
        $("#mun_hepa").val(null).trigger('change');
      },
    });
    }   
  }
});

$( "#reg_ala" ).click(function() {
  if($("#semana_ala").val()=="" || $("#dosis").val()=="" || $("#casos_ala").val()=="" || $("#def_ala").val()==""){
    $("#warningToast").toast("show");
  }else{
    if(val_semana('iras',$("#semana_ala").val(),$("#anio_ala").val())=='1'){
      $("#semanaToast").toast("show");
    }else{
      $.ajax({
      url: '/SIEM/reg_ala',
      method:'POST',
      dataType: "json",
      data: {
        "_token": $("meta[name='csrf-token']").attr("content"),
        "sem": $("#semana_ala").val(),
        "anio": $("#anio_ala").val(),
        "dosis": $("#dosis").val(),
        "casos": $("#casos_ala").val(),
        "def": $("#def_ala").val(),
        "mun": $("#mun_ala").val(),
      },
      async: false,
      success: function (respuesta) {                         
        $("#successToast").toast("show");
        $("#semana_ala").val("");
        $("#dosis").val("");
        $("#casos_ala").val("");
        $("#mun_ala").val(null).trigger('change');
        $("#def_ala").val();
      },
    });
    }
    
  }
});

$( "#reg_chi" ).click(function() {
  if($("#semana_chi").val()=="" || $("#casos_chi").val()==""){
    $("#warningToast").toast("show");
  }else{
    if(val_semana('chin',$("#reg_chi").val(),$("#anio_chi").val())=='1'){
      $("#semanaToast").toast("show");
    }else{
      $.ajax({
      url: '/SIEM/reg_chi',
      method:'POST',
      dataType: "json",
      data: {
        "_token": $("meta[name='csrf-token']").attr("content"),
        "sem": $("#semana_chi").val(),
        "anio": $("#anio_chi").val(),
        "casos": $("#casos_chi").val(),
        "mun": $("#mun_chi").val(),
      },
      async: false,
      success: function (respuesta) {                         
        $("#successToast").toast("show");
        $("#semana_chi").val("");
        $("#casos_chi").val("");
        $("#mun_chi").val(null).trigger('change');
      },
    });
    }    
  }
});

$( "#reg_zik" ).click(function() {
  if($("#semana_zik").val()=="" || $("#casos_zik").val()==""){
    $("#warningToast").toast("show");
  }else{
    if(val_semana('zika',$("#semana_zik").val(),$("#anio_zik").val())=='1'){
      $("#semanaToast").toast("show");
    }else{
      $.ajax({
      url: '/SIEM/reg_zika',
      method:'POST',
      dataType: "json",
      data: {
        "_token": $("meta[name='csrf-token']").attr("content"),
        "sem": $("#semana_zik").val(),
        "casos": $("#casos_zik").val(),
        "casos_emb": $("#casos_emb").val(),
        "anio": $("#anio_zik").val(),
        "casos_nac": $("#casos_nac").val(),
        "casos_emb_nac": $("#casos_emb_nac").val(),
        "mun": $("#mun_zik").val(),
      },
      async: false,
      success: function (respuesta) {                         
        $("#successToast").toast("show");
        $("#semana_zik").val("");
        $("#casos_zik").val("");
        $("#casos_emb").val("");
        $("#casos_nac").val("");
        $("#casos_emb_nac").val("");
        $("#mun_zik").val(null).trigger('change');
      },
    });
    }
    
  }
});

$( "#reg_vir" ).click(function() {
  if($("#semana_vir").val()=="" || $("#casos_vir").val()=="" || $("#casos_vir_est").val()=="" || $("#casos_vir_des").val()=="" || $("#casos_vir_pro").val()==""){
    $("#warningToast").toast("show");
  }else{
    if(val_semana('viruela',$("#semana_vir").val(),$("#anio_vir").val())=='1'){
      $("#semanaToast").toast("show");
    }else{
      $.ajax({
      url: '/SIEM/reg_vir',
      method:'POST',
      dataType: "json",
      data: {
        "_token": $("meta[name='csrf-token']").attr("content"),
        "sem": $("#semana_vir").val(),
        "anio": $("#anio_vir").val(),
        "casos": $("#casos_vir").val(),
        "casos_vir_est": $("#casos_vir_est").val(),
        "casos_vir_des": $("#casos_vir_des").val(),
        "casos_vir_pro": $("#casos_vir_pro").val(),
        "mun": $("#mun_vir").val(),
      },
      async: false,
      success: function (respuesta) {                         
        $("#successToast").toast("show");
        $("#semana_vir").val("");
        $("#casos_vir").val("");
        $("#casos_vir_est").val("");
        $("#casos_vir_des").val("");
        $("#casos_vir_pro").val("");
        $("#mun_vir").val(null).trigger('change');
      },
    });
    }
  }
});

$( "#reg_esa" ).click(function() {
  if($("#semana_esa").val()=="" || $("#esa_cov").val()=="" || $("#esa_nocov").val()=="" ){
    $("#warningToast").toast("show");
  }else{
    if(val_semana('esavi',$("#semana_esa").val(),$("#anio_esa").val())=='1'){
      $("#semanaToast").toast("show");
    }else{
      $.ajax({
      url: '/SIEM/reg_esa',
      method:'POST',
      dataType: "json",
      data: {
        "_token": $("meta[name='csrf-token']").attr("content"),
        "sem": $("#semana_esa").val(),
        "anio": $("#anio_esa").val(),
        "esa_cov": $("#esa_cov").val(),
        "esa_nocov": $("#esa_nocov").val(),
      },
      async: false,
      success: function (respuesta) {                         
        $("#successToast").toast("show");
        $("#semana_esa").val("");
        $("#anio_esa").val("");
        $("#esa_cov").val("");
        $("#esa_nocov").val("");
      },
    });
    }
  }
});

function val_semana(seccion,semana,anio){
  var r ='';
  switch(seccion){
    case 'dengue':
    $.ajax({
      url: '/SIEM/val_den',
      method:'POST',
      dataType: "json",
      data: {
        "_token": $("meta[name='csrf-token']").attr("content"),
        "seccion": seccion,
        "semana": semana,
        "anio": anio,
      },
      async: false,
      success: function (respuesta) {                         
        r = respuesta;
      },
    });
    break;
    case 'influenza':
    $.ajax({
      url: '/SIEM/val_inf',
      method:'POST',
      dataType: "json",
      data: {
        "_token": $("meta[name='csrf-token']").attr("content"),
        "seccion": seccion,
        "semana": semana,
        "anio": anio,
      },
      async: false,
      success: function (respuesta) {                         
        r = respuesta;
      },
    });
    break;
    case 'iras':
    $.ajax({
      url: '/SIEM/val_ira',
      method:'POST',
      dataType: "json",
      data: {
        "_token": $("meta[name='csrf-token']").attr("content"),
        "seccion": seccion,
        "semana": semana,
        "anio": anio,
      },
      async: false,
      success: function (respuesta) {                         
        r = respuesta;
      },
    });
    break;
    case 'edas':
    $.ajax({
      url: '/SIEM/val_eda',
      method:'POST',
      dataType: "json",
      data: {
        "_token": $("meta[name='csrf-token']").attr("content"),
        "seccion": seccion,
        "semana": semana,
        "anio": anio,
      },
      async: false,
      success: function (respuesta) {                         
        r = respuesta;
      },
    });
    break;
    case 'hepa':
    $.ajax({
      url: '/SIEM/val_hep',
      method:'POST',
      dataType: "json",
      data: {
        "_token": $("meta[name='csrf-token']").attr("content"),
        "seccion": seccion,
        "semana": semana,
        "anio": anio,
      },
      async: false,
      success: function (respuesta) {                         
        r = respuesta;
      },
    });
    break;
    case 'hepaa':
    $.ajax({
      url: '/SIEM/val_hepa',
      method:'POST',
      dataType: "json",
      data: {
        "_token": $("meta[name='csrf-token']").attr("content"),
        "seccion": seccion,
        "semana": semana,
        "anio": anio,
      },
      async: false,
      success: function (respuesta) {                         
        r = respuesta;
      },
    });
    break;
    case 'ala':
    $.ajax({
      url: '/SIEM/val_ala',
      method:'POST',
      dataType: "json",
      data: {
        "_token": $("meta[name='csrf-token']").attr("content"),
        "seccion": seccion,
        "semana": semana,
        "anio": anio,
      },
      async: false,
      success: function (respuesta) {                         
        r = respuesta;
      },
    });
    break;
    case 'chin':
    $.ajax({
      url: '/SIEM/val_chi',
      method:'POST',
      dataType: "json",
      data: {
        "_token": $("meta[name='csrf-token']").attr("content"),
        "seccion": seccion,
        "semana": semana,
        "anio": anio,
      },
      async: false,
      success: function (respuesta) {                         
        r = respuesta;
      },
    });
    break;
    case 'zika':
    $.ajax({
      url: '/SIEM/val_zika',
      method:'POST',
      dataType: "json",
      data: {
        "_token": $("meta[name='csrf-token']").attr("content"),
        "seccion": seccion,
        "semana": semana,
        "anio": anio,
      },
      async: false,
      success: function (respuesta) {                         
        r = respuesta;
      },
    });
    break;
    case 'viruela':
    $.ajax({
      url: '/SIEM/val_vir',
      method:'POST',
      dataType: "json",
      data: {
        "_token": $("meta[name='csrf-token']").attr("content"),
        "seccion": seccion,
        "semana": semana,
        "anio": anio,
      },
      async: false,
      success: function (respuesta) {                         
        r = respuesta;
      },
    });
    break;
    case 'esavi':
    $.ajax({
      url: '/SIEM/val_esa',
      method:'POST',
      dataType: "json",
      data: {
        "_token": $("meta[name='csrf-token']").attr("content"),
        "seccion": seccion,
        "semana": semana,
        "anio": anio,
      },
      async: false,
      success: function (respuesta) {                         
        r = respuesta;
      },
    });
    break;
    default:
    alert('siu');
    break;
  }
  return r;
}