$(function () {
    $(".btn-vote").on("click", function (e) {
        e.preventDefault();
        const id = $(this).data("id");
        const vote = $(this).data("vote");
        window.location.href = "/vote/" + id + "/" + vote;
    });
});
