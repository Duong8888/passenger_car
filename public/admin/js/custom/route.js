$(document).ready(function () {
    const showDeparture = $('.col-departure');
    const showArrival = $('.col-arrival');
    const btnDeparture = $('.btn-departure');
    const btnArrival = $('.btn-arrival');
    const inputDeparture = `<div class="mb-3 d-flex">
                                <input type="text" name="departure[]" class="form-control"
                                       id="example-number"
                                       placeholder="Đại học công nghệp ...">
                                <button type="button" class="close btn btn-danger waves-effect waves-light"><i class="mdi mdi-close"></i></button>
                            </div>`;
    const inputArrival = `<div class="mb-3 d-flex">
                               <input type="text" name="arrival[]" class="form-control"
                                         id="example-number"
                                         placeholder="Hà Đông ...">
                                  <button type="button" class="close btn btn-danger waves-effect waves-light"><i class="mdi mdi-close"></i></button>
                           </div>`;

    btnDeparture.on('click', function () {
        showDeparture.append(inputDeparture);
    });
    btnArrival.on('click', function () {
        showArrival.append(inputArrival);
    });

    $(document).on("click",".close", function () {
        if ($(this).parent().siblings().length > 0) {
            $(this).parent().remove();
        }
    });
});
