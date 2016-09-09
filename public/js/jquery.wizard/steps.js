var form = $("#example-advanced-form").show();
var successCounter = 0;
var sumErrors = 0;
form.steps({
  headerTag: "h3",
  bodyTag: "section",
  transitionEffect: "slideLeft",
  autoFocus: true,
  stepsOrientation: "vertical",
  onStepChanging: function (event, currentIndex, newIndex)
  {
    // Allways allow previous action even if the current form is not valid!
    if (currentIndex > newIndex)
    {
      return true;
    }
    // Forbid next action on "Warning" step if the user is to young
    if (newIndex === 3 && Number($("#age-2").val()) < 18)
    {
      return false;
    }
    // Needed in some cases if the user went back (clean up)
    if (currentIndex < newIndex)
    {
      // To remove error styles
      form.find(".body:eq(" + newIndex + ") label.error").remove();
      form.find(".body:eq(" + newIndex + ") .error").removeClass("error");
    }
    if (form.valid() === true) {
      var successGlyph = $(".wizard.vertical .steps ul li a:eq(" + currentIndex + ") i");
      if (successGlyph.hasClass('glyphicon')) {
        //do nothing
      } else {
        $(".wizard.vertical .steps ul li a:eq(" + currentIndex + ")").append('<i class="inline-hints glyphicon glyphicon-ok-circle"> </i>');
      }
    }

    form.validate().settings.ignore = ":disabled,:hidden";
    return form.valid();
  },
  onStepChanged: function (event, currentIndex, priorIndex) {

  },
  onFinished: function (event, currentIndex)
  {
    form.submit();
  }
}).validate({
  invalidHandler: function(event, validator) {
    // 'this' refers to the form
    sumErrors = validator.numberOfInvalids();    
  },
  errorPlacement: function (error, element)
  {
    var elements = $(element).parent().parent();
    var questionElement = null;
    var errPlace = null;
    if (elements.hasClass("radio-vertical")) {
      questionElement = elements.parent().parent().find(".questions");
      errPlace = elements.parent().parent().find(".vertical-error");
      
    } else {
      questionElement = elements.parent().find(".questions");
      errPlace = elements.parent().find(".horizontal-error");
    }
    error.appendTo(errPlace);
    questionElement.css({"color": "red"});
    
  },
  success: function (label, element) {
    sumErrors--;
    var elements = $(element).parent().parent();
    if (elements.hasClass("radio-vertical")) {
      elements = elements.parent().parent().find(".questions");
    } else {
      elements = elements.parent().find(".questions");
    }
    elements.css({"color": "black"});
    elements.find(".error").remove();
    if(sumErrors === 0){
      $(".current.error").removeClass("error");
    }
  }
});

jQuery.extend(jQuery.validator.messages, {
    required: "Pertanyaan Ini Belum Terjawab."
   
});