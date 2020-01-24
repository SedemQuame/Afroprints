// jshint esversion:6

function openModal() {
    let clickedElement = event.target.getAttribute("data-number");
    console.log(clickedElement);

    let modalString = "php/custom/modal.php?id=" + clickedElement;

    // // TODO: Change the jquery bit to vanilla JavaScript.

    $(document).ready(function(){
        console.log("Document Ready");
        $('.modal-body').load(modalString, function() {
            $('#myModal').modal({ show: true });
        });
     });

}