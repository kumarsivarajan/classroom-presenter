// Makes the call to the backend to retrieve feed data
function getFeed(sid, filter, sort, callback) {
    // Make the HTTP request
    $.post("../../DB/lookup_questions.php",
    {sid: sid, filter: filter, sort: sort, callback: callback},
    function(data) {
        callback(data);
    });
}

var filter;
var sort;

function printToScreen(data){
    $("#feed").html(data);
}

// Handles the event of when the filter select boxes change
function onFilterChange() {
    window.filter = $("#filter option:selected").text();
    // Once we can get session ID from the backend, we retrieve
    // feeds from the correct session.
    getFeed(23456, window.filter, window.sort, printToScreen);
}

// Handles the event of when the newest sort link has been clicked
function onNewestSortChange() {
    window.sort = "Newest";
    getFeed(23456, window.filter, window.sort, printToScreen);
}

// Handles the event of when the priority sort link has been clicked
function onPrioritySortChange() {
    window.sort = "Priority";
    getFeed(23456, window.filter, window.sort, printToScreen);
}

window.onload = function() {
    filter = "None";
    sort = "Newest"; // default to sorting by newest
    $('#filter').change(onFilterChange);
    $('#newest').click(onNewestSortChange);
    $('#priority').click(onPrioritySortChange);
};