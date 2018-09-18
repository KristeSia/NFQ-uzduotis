// console.log( "labas as cia" );


// validation
$('button[name="mygtukas"]').on('click', function() {
  arYraKlaidu = false;

  var vartVardas = $('input[name="vardasPart"]').val();
  var vartPastas = $('input[name="pastasPart"]').val();

  if (vartVardas.length <8 || vartVardas.length >50) {
    arYraKlaidu = true;
    if (vartVardas.length <8) {
      alert("Too short text. Must be more than 8 letters.");
    } if (vartVardas.length >50) {
      alert("Too long text. Max.length 50.");
    }
  } else {
  }



  console.log("ivestas vardas:" + vartVardas);
  console.log("ivestas pastas:" + vartPastas);


  if (arYraKlaidu == true) {
      event.preventDefault();
  } else {
    return;
  }

} );


function validateFormQM() {
    var x = document.forms['myFormQM']['pastasPart'].value;
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
        alert("Not a valid e-mail address");
        return false;
    }
}
