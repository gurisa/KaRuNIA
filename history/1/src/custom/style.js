$(document).ready(function() {
  $(".button-collapse").sideNav();
  $('.slider').slider({
    full_width: true,
    height: 500,
    transition: 1000,
    indicators: false
  });

  $('.modal').modal({
      dismissible: true, // Modal can be dismissed by clicking outside of the modal
      inDuration: 300, // Transition in duration
      outDuration: 200, // Transition out duration
      startingTop: '4%', // Starting top style attribute
      endingTop: '10%', // Ending top style attribute
      ready: function(modal, trigger) { // Callback for Modal open. Modal and trigger parameters available.
        alert("Ready");
        console.log(modal, trigger);
      },
      complete: function() { alert('Closed'); } // Callback for Modal close
    });
});
