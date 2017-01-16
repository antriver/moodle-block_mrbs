$(document).on('click', '.mrbs-room-type-list a', function (e) {
    e.preventDefault();
    var typeId = $(this).attr('data-id');
});

var mrbsInitTypeAdmin = function() {
    for (var i = 0; i < mrbsRoomTypes.length < i++) {
        var type = mrbsRoomTypes[i];
        var html = '<li><a href="#" data-id="'+type.id+'">'+type.name+'</a></li>';
        $('#mrbs-room-type-list').append(html);
    }
};
