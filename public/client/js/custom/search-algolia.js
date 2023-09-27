$(document).ready(function () {
    // var client = algoliasearch('SBIKP3F61K', '6265dd0e1cd771e356450825263646d5');
    // var index = client.initIndex('users_index')

    $('body').on('keyup', '#search', function (event) {
        event.preventDefault();
        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('[name=csrf-token]').attr('content')
            }
        })

        $.ajax({
            url: '/algolia',
            type: 'POST',
            data: {q: $('#search').val()},
        })
        .done(function(data) {
            console.log(data);
            $('#browsers').html('')
            data.forEach(el => {
                $('#browsers').append(`<option value="${el.name}">`)
            })
        })
        // index.search({
        //         query: $(this).val(),
        //         hitsPerPage: 10,
        //     },
        //     function searchDone(err, content) {
        //         if (err) throw err;
        //         content.hits.forEach(el => {
        //             $('#browsers').append(`<option value="${el.name}">`)
        //         })
        //     });
    // });
});
})
;
