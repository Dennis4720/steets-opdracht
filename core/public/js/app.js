$(document).ready(function(){
    $('#form').submit(function(){

        $.ajax({
            method: "post",
            url: "/process",
            data: $(this).serialize()
        }).done((response) => {
            $('#table tbody').empty();
            data = $.parseJSON(response);
            $.each(data, (index, row) => {
                $("#table > tbody").append("<tr><td>" + row.year + "</td><td>" + row.christmas_day + "</td><td>" + row.century + "</td></tr>");
            })
        });

        return false;
    });
});